<?php
class Webshopsmodel extends CI_Model {
    //static $perpage = 32;
    static $perpage = 48;

    function __construct(){
        // Call the Model constructor
        parent::__construct();  
    }

    function get_perPage() {
        return self::$perpage;
    }

 
    function get_webshops($city,$pagenum,$cat="all"){
        $skip = self::$perpage*($pagenum-1);
        $this->db->order_by('priority','desc')
        //->order_by('company.id','desc')
        ->join('companycitydescription','company.id = companycitydescription.CompanyId','left')
        ->join('companycatalog','company.id = companycatalog.CompanyId','left')
        ->select('company.id,company.description,company.name,company.logo,avgrating,rateamount,')
        ->where('companycitydescription.accepted',1)
        ->where('company.accepted',1)
        ->where('company.hasWebShop',1)
        ->where('company.companytype','Company')     
        ->group_by('company.id')   
        //->where('speciality','SALE')
        ->where('companycitydescription.cityId',$city);
        if($cat != 'all')
            $this->db->where('company.categoryid',$cat);
        return $this->db->limit(self::$perpage, $skip)->get('company')->result();
    }

    function get_webshopsCount($city = 'all',$cat='all'){ 
        
        if($city!='all')
            $this->db->where('cityId',$city);
        if($cat != 'all')
            $this->db->where('company.categoryid',$cat);            
        $this->db->join('companycitydescription','company.id = companycitydescription.CompanyId','left');            
        $this->db->where('companycitydescription.cityId',$city)
        ->where('company.hasWebShop',1)
        ->where('company.companytype','Company');
        return $this->db->where('companycitydescription.accepted',1)->select('count(*) as count')->get('company')->row()->count;
    }    




}
?>