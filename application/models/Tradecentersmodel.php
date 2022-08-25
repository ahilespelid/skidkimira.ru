<?php
class Tradecentersmodel extends CI_Model {
    //static $perpage = 32;
    static $perpage = 48;

    function __construct(){
        // Call the Model constructor
        parent::__construct();  
    }

    function get_perPage() {
        return self::$perpage;
    }

    function get_tradecenters($city,$pagenum,$cat="all"){
        $skip = self::$perpage*($pagenum-1);
        $this->db
        //->order_by('company.id','desc')
        ->join('companycitydescription','company.id = companycitydescription.CompanyId','left')
        ->join('branchoffice','company.id = branchoffice.CompanyId','left')
        //->join('companycatalog','company.id = companycatalog.CompanyId','left')
        ->join('shoppingcentercompany','branchoffice.id = shoppingcentercompany.shoppingcenterid','left') 
        ->select('company.id,company.description,company.name,company.logo,avgrating,rateamount,branchoffice.address,count(shoppingcentercompany.companyid) as companies')
      //  ->where('companycitydescription.accepted',1)
        ->where('company.accepted',1)
        ->where('company.companytype','ShoppingCenterBrand')        
        //->where('speciality','ShoppingCenterBrand')
        ->group_by('company.id')
        ->where('companycitydescription.cityId',$city)
        ->where('branchoffice.cityId',$city)
        ->order_by('companies','desc')
        ->order_by('priority','desc');
        if($cat != 'all')
            $this->db->where('company.categoryid',$cat);
        return $this->db->limit(self::$perpage, $skip)->get('company')->result();
    }

    function get_tradecenters_byname($city,$name){
        $this->db->order_by('priority','desc')
        //->order_by('company.id','desc')
        ->join('companycitydescription','company.id = companycitydescription.CompanyId','left')
        ->join('branchoffice','company.id = branchoffice.CompanyId','left')
        //->join('companycatalog','company.id = companycatalog.CompanyId','left')
        ->select('company.id,company.description,company.name,company.logo,avgrating,rateamount,branchoffice.address')
        //->where('companycitydescription.accepted',1)
        ->where('company.accepted',1)
        ->like('company.name',$name)
        ->where('company.companytype','ShoppingCenterBrand')        
        //->where('speciality','ShoppingCenterBrand')
        ->where('companycitydescription.cityId',$city)
        ->where('branchoffice.cityId',$city);
        return $this->db->get('company')->result();
    }

    function get_tradecentersCount($city,$cat='all'){
        $this->db->where('cityId',$city);
        if($cat != 'all')
            $this->db->where('company.categoryid',$cat);            
        $this->db->join('companycitydescription','company.id = companycitydescription.CompanyId','left')            
        ->where('companycitydescription.accepted',1)
        ->where('company.accepted',1)
        ->where('company.companytype','ShoppingCenterBrand')        
        ->where('companycitydescription.cityId',$city);
        return $this->db->select('count(*) as count')->get('company')->row()->count;
    }    


    function get_tradecenter($id,$city){

        $this->db->join('companycitydescription','company.id = companycitydescription.CompanyId','left')
        ->join('branchoffice','company.id = branchoffice.CompanyId','left')
        ->join('city','city.id = companycitydescription.cityid','left')
        //->where('companycitydescription.accepted',1)
        ->where('company.accepted',1)
        ->where('company.companytype','ShoppingCenterBrand')        

        ->where('companycitydescription.cityId',$city)
        ->where('branchoffice.cityId',$city)
        ->select('company.*,companycitydescription.description, city.name as city_name, city.nameWhere as city_namewhere, city.nameWhich as city_namewhich,branchoffice.address,branchoffice.phone,branchoffice.schedule,branchoffice.latitude,branchoffice.longitude,branchoffice.id as branch_id');
        $query = $this->db->get_where('company',array('company.id'=>$id));

        if($query->num_rows() > 0){
            return $query->row();
        }
        else{
            $this->db->where('company.companytype','Company');
            $this->db->join('companycitydescription','company.id = companycitydescription.companyid','left')
            ->order_by('companycitydescription.id','asc')
            ->join('city','city.id = companycitydescription.cityid','left')            
            ->select('city.subDomain');
            $query = $this->db->get_where('company',array('company.id'=>$id));
            if($query->num_rows() > 0){
                return $query->row()->subDomain;
            }
            else{
                return false; 
            }
        }
    }

    function get_tradecentercompanies($id,$city){
        $this->db->join('company','company.id = shoppingcentercompany.companyid')
        ->join('shoppingcategory','shoppingcategory.id = shoppingcentercompany.shoppingcategoryid')
        ->where('shoppingcenterid',$id)
        ->order_by('shoppingcategory.id','asc')
        ->select('company.id,company.name,shoppingcategory.name as cat_name,(SELECT id AS discounts FROM discount WHERE discount.companyid = company.id AND discount.accepted = 1 AND discount.finishDate > \''.date('Y-m-d').'\' limit 1) as discounts', false);
        $temp  = $this->db->get('shoppingcentercompany')->result();
        
        $return =array();
        foreach($temp as $company){
            if(!isset($return[$company->cat_name]))
                $return[$company->cat_name] = array();
            $return[$company->cat_name][] = $company;
        }
        //print_R($return);
        //ksort($return);
        return $return;
    }


}
?>