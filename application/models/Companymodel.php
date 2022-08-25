<?php
class CompanyModel extends CI_Model {
    //static $perpage = 32;
    static $perpage = 48;

    function __construct(){
        // Call the Model constructor
        parent::__construct();  
    }

    function get_perPage() {
        return self::$perpage;
    }

    function get_companyCategories(){
        
        $this->db->select('DISTINCT category.*')
        ->join('companycatalog','category.id = companycatalog.companycategoryid','left');
        
        return $this->db->get('category');
    }

    function get_companys($city,$pagenum,$cat="all"){
        $skip = self::$perpage*($pagenum-1);
        $this->db->order_by('priority','desc')
        ->order_by('company.id','desc')
        //->join('companycitydescription','company.id = companycitydescription.CompanyId','left')
        ->join('branchoffice','company.id = branchoffice.CompanyId')
        ->join('companycatalog','company.id = companycatalog.CompanyId','left')
        ->select('company.id,company.description,company.name,company.logo,avgrating,rateamount,')
        //->where('companycitydescription.accepted',1)
        ->group_by('company.id')
        ->where('company.accepted',1)
        ->where('company.companytype','Company')        
        //->where('speciality','SALE')
        ->where('branchoffice.cityId',$city);
        if($cat != 'all')
            $this->db->where('company.categoryid',$cat);
        return $this->db->limit(self::$perpage, $skip)->get('company')->result();
    }

    function get_companys_byname($city,$name){
        $this->db->order_by('priority','desc')
        //->join('companycitydescription','company.id = companycitydescription.CompanyId','left')
        ->join('branchoffice','company.id = branchoffice.CompanyId')
        ->join('companycatalog','company.id = companycatalog.CompanyId','left')
        ->select('company.id,company.description,company.name,company.logo,avgrating,rateamount,')
        //->where('companycitydescription.accepted',1)
        ->group_by('company.id')
        ->like('company.name',$name)        
        ->where('company.accepted',1)
        ->where('company.companytype','Company')        
        ->where('branchoffice.cityId',$city);
        return $this->db->get('company')->result();
    }    

    function get_companysCount($city = 'all',$cat='all'){ 
        
        if($city!='all')
            $this->db->where('cityId',$city);
        if($cat != 'all')
            $this->db->where('company.categoryid',$cat);            
        //$this->db->join('companycitydescription','company.id = companycitydescription.CompanyId','left');
        $this->db->join('branchoffice','company.id = branchoffice.CompanyId','left');            
        $this->db->where('branchoffice.cityId',$city)
        //->group_by('company.id')
        //->where('companycitydescription.accepted',1)
        ->where('company.accepted',1)
        ->where('company.companytype','Company');
        
        
        return $this->db->select('count(DISTINCT branchoffice.companyid) as count')->get('company')->row()->count;
    }    

    function get_company($id){        
        $this->db->where('company.companytype','Company');
        return $this->db->get_where('company',array('id'=>$id))->row();
    }

    function get_companyFull($id,$city){
        $this->db->where('company.companytype','Company')
        //->join('companycitydescription','company.id = companycitydescription.companyid','left')
        ->join('branchoffice','company.id = branchoffice.CompanyId')
        ->join('city','city.id = branchoffice.cityid','left')
        ->join('category','category.id = company.categoryId','left')
        ->group_by('company.id')
        ->where('branchoffice.cityid',$city)
        ->where('company.accepted',1)
        ->select('company.*, city.name as city_name, city.nameWhere as city_namewhere, city.nameWhich as city_namewhich,category.name as category_name');
        $query = $this->db->get_where('company',array('company.id'=>$id));

        if($query->num_rows() > 0){            
            $company = $query->row();
            $desc_q = $this->db->select('description')->limit(1)->get_where('companycitydescription',array('cityid'=>$city,'companyid'=>$id));
            
            if($desc_q->num_rows() > 0){
                $company->description = $desc_q->row()->description;
                
            }
            if($desc_q->num_rows() == 0 || trim($company->description) == ''){
                $desc_q = $this->db->select('description')->limit(1)->get_where('companycitydescription',array('cityid'=>1,'companyid'=>$id));
                if($desc_q->num_rows() > 0){
                    $company->description = $desc_q->row()->description;
                }
            }
          //  $company->description =  preg_replace('!(((f|ht)tp(s)?://)[-a-zA-Zа-яА-Я()0-9@:%_+.~#?&;//=]+\s{1,})!i', '<a href="$1" style="margin-left:0;" target="_blank" rel="nofollow" onclick="return showInFrame(this);" >$1</a>', $company->description);
            if($company->siteAddress != '' && $company->siteAddress!= null && strpos($company->siteAddress,'http')===false)
                $company->siteAddress = 'http://'.$company->siteAddress;
            return $company; 
        }
        else{
            $this->db->where('company.companytype','Company')
            ->join('branchoffice','company.id = branchoffice.CompanyId')
            //$this->db->join('companycitydescription','company.id = companycitydescription.companyid','left')
            ->order_by('branchoffice.id','asc')
            ->join('city','city.id = branchoffice.cityid','left')            
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

    function get_companyBranches($id,$city = 'all'){
        if($city != 'all')
            $this->db->where('branchoffice.cityId',$city);        
        $brancheoffices_temp = $this->db->select('id,address,phone, schedule,latitude,longitude')
            ->get_where('branchoffice',array('companyId'=>$id))->result();

        $branchofficeids = array();
        $brancheoffices = array();
        foreach($brancheoffices_temp as $key=>$brancheoffice){
            $branchofficeids[] = $brancheoffice->id;
            $brancheoffices[$brancheoffice->id] = $brancheoffice;
        }
        unset($brancheoffices_temp);
        $metros = array();
        if(!empty($branchofficeids)){
            $metros = $this->db->select('metro.*,branchofficemetro.branchofficeid')
                ->join('metro','metro.id = branchofficemetro.metroId')
                ->where_in('branchofficemetro.branchofficeid',$branchofficeids)
                ->get('branchofficemetro')->result();
        }
       

        foreach($metros as $metro){
            if(!isset($brancheoffices[$metro->branchofficeid]->metro)){
                //print_r($brancheoffices[$metro->branchofficeid]);
                $brancheoffices[$metro->branchofficeid]->metro = array();
            }
            $brancheoffices[$metro->branchofficeid]->metro[] = $metro; 

        }
        return $brancheoffices;
    }    

    function get_catinfo($cat){
        return $this->db->get_where('category',array('id'=>$cat))->row();
    }

    function get_companyDiscounts($id,$city){        
        return $this->db->select('id,name,startDate,finishDate,image,discount')->order_by('discount.discount','desc')->get_where('discount',array('companyId'=>$id,'cityId'=>$city,'accepted'=>1,'finishDate >= '=>date('Y-m-d')))->result();
    }    

    function get_companyDiscountsArchive($id,$city){  
        $this->db->limit(4);      
        return $this->db->get_where('discount',array('companyId'=>$id,'cityId'=>$city,'accepted'=>1,'finishDate < '=>date('Y-m-d')))->result();
    }        

    function get_companyComments($id){
        $this->db->select('id,userName,text,addedDate');
        $this->db->order_by('id','desc');
        return $this->db->get_where('comment',array('companyId'=>$id,'accepted'=>1))->result();
    }

    function addComment($company,$username,$text){
                $data = array(  'userName'=>$username,
                    'text'=>$text,
                    'addedDate'=> date("Y-m-d"),
                    'companyId'=>$company,
                    'moderated'=>0,
                    'accepted'=>0
                );
                $this->db->insert('comment',$data);
                print_R($this->db->insert_id());
    }


    function get_similarCompanies($id){
        $this->db->join('company b','a.categoryId = b.categoryId','left')
        ->select('b.name,b.id,b.logo')
        ->where('b.accepted',1)
        ->where('a.id',$id)
        ->where('b.companytype','Company')
        ->limit(5);
        return $this->db->get('company a')->result();
    }



    function get_companycatalogs($city,$pagenum,$cat="all"){
        $skip = self::$perpage*($pagenum-1);
        $this->db->order_by('priority','desc')
        //->order_by('company.id','desc')
        ->join('companycitydescription','company.id = companycitydescription.CompanyId','left')
        ->join('companycatalog','company.id = companycatalog.CompanyId','left')
        ->select('company.id,company.description,company.name,company.logo,avgrating,rateamount,')
        ->where('companycitydescription.accepted',1)
        ->group_by('company.id')
        ->where('company.accepted',1)
        ->where('company.companytype','Company')    
        ->where('urlk is not null')    
        //->where('speciality','SALE')
        ->where('companycitydescription.cityId',$city);
        if($cat != 'all')
            $this->db->where('company.categoryid',$cat);
        return $this->db->limit(self::$perpage, $skip)->get('company')->result();
    }

    function get_companycatalogsCount($city = 'all',$cat='all'){ 
        
        if($city!='all')
            $this->db->where('cityId',$city);
        if($cat != 'all')
            $this->db->where('company.categoryid',$cat);            
        $this->db->join('companycitydescription','company.id = companycitydescription.CompanyId','left');
        $this->db->where('urlk is not null');            
        $this->db->where('companycitydescription.cityId',$city)
    
        ->where('company.companytype','Company');
        return $this->db->where('companycitydescription.accepted',1)->select('count(*) as count')->get('company')->row()->count;
    }    


}
?>