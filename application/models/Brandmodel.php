<?php
class Brandmodel extends CI_Model {
    static $categories = array(array('id'=>'clothes','name'=>'Одежда'),array('id'=>'shoes','name'=>'Обувь'),array('id'=>'accessories','name'=>'Аксессуары'),array('id'=>'sport','name'=>'Спортинвентарь'),array('id'=>'toiletry','name'=>'Косметика, парфюмерия'),array('id'=>'furniture','name'=>'Мебель, интерьер'),array('id'=>'children','name'=>'Для детей'),array('id'=>'electro','name'=>'Электроника'),array('id'=>'auto','name'=>'Авто'),array('id'=>'jewelry','name'=>'Ювелирные изделия'),array('id'=>'other','name'=>'Прочее'));

    function __construct(){
        // Call the Model constructor
        parent::__construct();  
    }

    function get_brandCategories(){        
        return self::$categories;
    }

    function get_brands($city){
        $this->db->order_by('company.name','asc')
        //->order_by('company.id','desc')
        ->select('company.id,company.name')
        //->join('companycitydescription','company.id = companycitydescription.CompanyId','left')
        ->join('companycatalog','company.id = companycatalog.CompanyId','left')
        //->select('company.id,company.description,company.name,companycatalog.logo,avgrating,rateamount,')
        //->where('companycitydescription.accepted',1)
        ->where('company.accepted',1)
        ->where('companytype','Brand');        
        //->where('companycitydescription.cityId',$city);
        $temp = $this->db->get('company')->result();
        $return = array();
        foreach($temp as $tmp){
            $start = substr($tmp->name,0,1);
            $letter = '0';
            if(($start >= 'a' && $start <= 'd') || ($start >= 'A' && $start <= 'D')){
                $letter = 'a';
            }
            else if(($start >= 'e' && $start <= 'h') || ($start >= 'E' && $start <= 'H')){
                $letter = 'e';
            }
            else if(($start >= 'i' && $start <= 'l') || ($start >= 'I' && $start <= 'L')){
                $letter = 'i';
            }            
            else if(($start >= 'm' && $start <= 'p') || ($start >= 'M' && $start <= 'P')){
                $letter = 'm';
            }            
            else if(($start >= 'q' && $start <= 't') || ($start >= 'Q' && $start <= 'T')){
                $letter = 'q';
            }               
            else if(($start >= 'u' && $start <= 'z') || ($start >= 'U' && $start <= 'Z')){
                $letter = 'u';
            }                    
            else{
                $letter = 'o';
            }                            
            if(!isset($return[$letter]))
                $return[$letter] = array();
            $return[$letter][] = $tmp;            
        }
        return $return;
    }

    function get_brands_byname($name,$city){
        $this->db->order_by('company.name','asc')
        //->order_by('company.id','desc')
        ->select('company.id,company.name')
        //->join('companycitydescription','company.id = companycitydescription.CompanyId','left')
        ->join('companycatalog','company.id = companycatalog.CompanyId','left')
        //->select('company.id,company.description,company.name,companycatalog.logo,avgrating,rateamount,')
        //->where('companycitydescription.accepted',1)
        ->where('company.accepted',1)
        ->where('companytype','Brand')
        ->like('company.name',$name);        
        //->where('companycitydescription.cityId',$city);
        $temp = $this->db->get('company')->result();
        $return = array();
        foreach($temp as $tmp){
            $start = substr($tmp->name,0,1);
            $letter = '0';
            if(($start >= 'a' && $start <= 'd') || ($start >= 'A' && $start <= 'D')){
                $letter = 'a';
            }
            else if(($start >= 'e' && $start <= 'h') || ($start >= 'E' && $start <= 'H')){
                $letter = 'e';
            }
            else if(($start >= 'i' && $start <= 'l') || ($start >= 'I' && $start <= 'L')){
                $letter = 'i';
            }            
            else if(($start >= 'm' && $start <= 'p') || ($start >= 'M' && $start <= 'P')){
                $letter = 'm';
            }            
            else if(($start >= 'q' && $start <= 't') || ($start >= 'Q' && $start <= 'T')){
                $letter = 'q';
            }               
            else if(($start >= 'u' && $start <= 'z') || ($start >= 'U' && $start <= 'Z')){
                $letter = 'u';
            }                    
            else{
                $letter = 'o';
            }                            
            if(!isset($return[$letter]))
                $return[$letter] = array();
            $return[$letter][] = $tmp;            
        }
        return $return;
    }

    function get_brandsFromCategory($cat){
        $this->db->order_by('company.name','asc')
        //->order_by('company.id','desc')
        ->select('company.id,company.name')
        //->join('companycitydescription','company.id = companycitydescription.CompanyId','left')
        ->join('companycatalog','company.id = companycatalog.CompanyId','left')
        //->select('company.id,company.description,company.name,companycatalog.logo,avgrating,rateamount,')
        //->where('companycitydescription.accepted',1)
        ->where('company.accepted',1)
        ->where('company.'.$cat.'brand',1)
        
        ->where('companytype','Brand');        
        //->where('companycitydescription.cityId',$city);

        $temp = $this->db->get('company')->result();
        $return = array();
        foreach($temp as $tmp){
            $start = substr($tmp->name,0,1);
            $letter = '0';
            if(($start >= 'a' && $start <= 'd') || ($start >= 'A' && $start <= 'D')){
                $letter = 'a';
            }
            else if(($start >= 'e' && $start <= 'h') || ($start >= 'E' && $start <= 'H')){
                $letter = 'e';
            }
            else if(($start >= 'i' && $start <= 'l') || ($start >= 'I' && $start <= 'L')){
                $letter = 'i';
            }            
            else if(($start >= 'm' && $start <= 'p') || ($start >= 'M' && $start <= 'P')){
                $letter = 'm';
            }            
            else if(($start >= 'q' && $start <= 't') || ($start >= 'Q' && $start <= 'T')){
                $letter = 'q';
            }               
            else if(($start >= 'u' && $start <= 'z') || ($start >= 'U' && $start <= 'Z')){
                $letter = 'u';
            }                    
            else{
                $letter = 'o';
            }                            
            if(!isset($return[$letter]))
                $return[$letter] = array();
            $return[$letter][] = $tmp;            
        }
        return $return;        
    }


    function get_brand($id){
        $brand = $this->db->get_where('company',array('id'=>$id))->row();        
        if(!$brand)
            show_404();
        if($brand->siteAddress != '' && $brand->siteAddress!= null && strpos($brand->siteAddress,'http')===false)
            $brand->siteAddress = 'http://'.$brand->siteAddress;
        $brand->description =  preg_replace('!(((f|ht)tp(s)?://)[-a-zA-Zа-яА-Я()0-9@:%_+.~#?&;//=]+\s{1,})!i', '<a href="$1" style="margin-left:0;" target="_blank" rel="nofollow" onclick="return showInFrame(this);" >$1</a>', $brand->description);        
        return $brand;
    }

    function get_brandCompany($id){        
        $this->db->select('company.id,company.name,company.logo');
        $this->db->join('company','company.id = brandcompany.companyid','left');
        $this->db->join('branchoffice','branchoffice.companyid = brandcompany.companyid','left');
        $this->db->where('branchoffice.id is not null');
        $this->db->group_by('brandcompany.brandid');
        $this->db->group_by('company.id');
        return $this->db->get_where('brandcompany',array('brandcompany.brandid'=>$id))->result();
    }

    function get_similar($id){
        return $this->db->query('SELECT b.id, b.name, b.logo FROM company a LEFT JOIN company b ON (a.clothesBrand = b.clothesBrand) AND (a.shoesBrand = b.shoesBrand) AND (a.accessoriesBrand = b.accessoriesBrand) AND (a.sportBrand = b.sportBrand) AND (a.toiletryBrand = b.toiletryBrand) AND (a.furnitureBrand = b.furnitureBrand) AND (a.childrenBrand = b.childrenBrand) AND (a.electroBrand = b.electroBrand) AND (a.autoBrand = b.autoBrand) AND (a.otherBrand = b.otherBrand) AND (a.id != b.id) WHERE a.id ='.$id.' and b.companyType = \'Brand\' LIMIT 6',false)->result();
    }

}
?>