<?php
class Discountsmodel extends CI_Model {
    //static $perpage = 24;
    static $perpage = 48;
    public $last_discounts = array();

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();  
    }

    function get_lastDiscounts($id){
        if(empty($this->last_discounts)){
            $this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));

            if(! $this->last_discounts = $this->cache->get('last_discounts')){        
                $this->load->model('Citymodel');
                $cities = $this->Citymodel->get_cities();
                
                $sqls = array();
                foreach($cities as $key=>$value){
                    $sqls[]='(SELECT id,name,cityid,image,startDate,finishDate FROM discount WHERE accepted = 1 AND cityid = '.$key.' ORDER BY id DESC LIMIT 3 )';
                    
                } 
                //print_r(implode(' union all ',$sqls));
                $temp = $this->db->query(implode(' union all ',$sqls))->result();
                
                foreach($temp as $dscnt){
                    if(!isset($this->last_discounts[$dscnt->cityid]))
                        $this->last_discounts[$dscnt->cityid] = array();
                    $this->last_discounts[$dscnt->cityid][] = $dscnt; 
                }
                $this->cache->save('last_discounts', $this->last_discounts, 600);
            }
	if(isset($this->last_discounts[$id]))
            return $this->last_discounts[$id];
	else
            return array();            
        }
        else
            return $this->last_discounts[$id];
        
    }



    function get_perPage() {
        return self::$perpage;
    }

    function get_discounsCategories()
    {
        
        $temp = $this->db->select('id,name')->order_by('category.id','desc')->where('type','sale')->get('category')->result();
        $data = array();
        foreach($temp as $cat){
            $data[$cat->id] = $cat;
        }
        

        foreach($this->db->select('subcategory.id,subcategory.name,categoryId')->order_by('subcategory.id','asc')->join('category','category.id = subcategory.categoryId','left')->where('category.type','sale')->get('subcategory')->result() as $subcat){
            if(!isset($data[$subcat->categoryId]->subcats)){
                $data[$subcat->categoryId]->subcats = array();
            }
            $data[$subcat->categoryId]->subcats[] = $subcat; 
        }
        ksort($data);
        return $data;
    }

    function get_discounts($city,$pagenum,$cattype="all",$id=''){
        $skip = self::$perpage*($pagenum-1);
        $this->db->order_by('discount.id','desc');
        //$this->db->order_by('discount.priority','desc');
        //$this->db->order_by('discount.discount','desc');
        $this->db->select('discount.id,discount.discount,name,image,oldprice,newprice,discount.startDate,discount.finishDate');
        if($cattype != 'all'){
            if($cattype == 'cat'){
                $this->db->where('discount.categoryid',$id);
            }
            else{
                $this->db->where('discountsubcategory.subcategoryid',$id);
                $this->db->join('discountsubcategory','discountsubcategory.discountid = discount.id');
            }
        }
        $this->db->where('accepted',1)
        ->where('finishDate >',date('Y-m-d'));        
        return $this->db->limit(self::$perpage, $skip)->get_where('`discount` USE INDEX (city_finish_accepted)',array('cityId'=>$city))->result();
    }

    function get_discounts_byname($city,$name){
        $this->db->order_by('discount.priority','desc');
        $this->db->order_by('discount.discount','desc');
        $this->db->select('discount.id,discount.discount,name,image,oldprice,newprice,startDate,finishDate');
        $this->db->where('accepted',1)
        ->like('name',$name)
        ->where('finishDate >=',date('Y-m-d'));        
        return $this->db->get_where('discount',array('cityId'=>$city))->result();        
    }

    function get_discounsCount($city = 'all',$cattype='all',$id ='')
    {
        if($city!='all')
            $this->db->where('cityId',$city);
        if($cattype != 'all'){
            if($cattype == 'cat'){
                $this->db->where('discount.categoryid',$id);
            }
            else{
                $this->db->where('discountsubcategory.subcategoryid',$id);
                $this->db->join('discountsubcategory','discountsubcategory.discountid = discount.id');
            }
        }
        $this->db->where('accepted',1);
        //if($city!='all' || $cattype != 'all'){
            $this->db->where('finishDate >=',date('Y-m-d'));
        //}
        return $this->db->select('count(*) as count')->get('discount')->row()->count;
    }    

    function get_discount($id){
        $this->db->select('discount.*,city.name as cityname, city.nameWhere as citynamewhere, city.subdomain, city.nameWhich as citynamewhich');
        $this->db->join('city','city.id = discount.cityId','left');        
        $discount = $this->db->get_where('discount',array('discount.id'=>$id))->row();
       // $discount->fullDescription =  preg_replace('!\s{1,}(((f|ht)tp(s)?://)[-a-zA-Zа-яА-Я()0-9@:%_+.~#?&;//=]+)!i', '<a href="$1" style="margin-left:0;" target="_blank" rel="nofollow" onclick="return showInFrame(this);" >$1</a>', $discount->fullDescription);
        return $discount;
    }

    function get_catinfo($cat){
        return $this->db->get_where('category',array('id'=>$cat))->row();
    }

    function get_subcatinfo($cat){
        return $this->db->get_where('subcategory',array('id'=>$cat))->row();
    }

    function get_similar($id,$compid,$city){
        return $this->db->query('SELECT DISTINCT * FROM (SELECT discount.id, discount.name, discount.image, discount.discount, discount.startDate, discount.finishDate FROM `discountsubcategory` `a` LEFT JOIN `discountsubcategory` `b` ON `a`.`subcategoryID` = `b`.`subcategoryID` LEFT JOIN `discount` ON `b`.`discountID` = `discount`.`id` WHERE `a`.`discountId` = \''.$id.'\' AND `discount`.`companyId` !=  \''.$compid.'\' AND `b`.`discountId` != `a`.`discountId` AND `discount`.`cityId` = \''.$city.'\' and  discount.finishDate >= \''.date('Y-m-d').'\' ORDER BY `discount`.`id` DESC LIMIT 15) a ORDER BY `a`.`discount` DESC LIMIT 15',false)->result();   
    }    
    
    function get_tcDiscounts($tc,$city,$pagenum){
        $skip = self::$perpage*($pagenum-1);
        $this->db->limit(self::$perpage, $skip);
        /*
        $this->db->join('company','company.id = shoppingcentercompany.companyid')
        ->join('shoppingcategory','shoppingcategory.id = shoppingcentercompany.shoppingcategoryid')
        ->where('shoppingcenterid',$id)
        ->order_by('shoppingcategory.id','asc')
        ->select('company.id,company.name,shoppingcategory.name as cat_name,(SELECT id AS discounts FROM discount WHERE discount.companyid = company.id AND discount.accepted = 1 AND discount.finishDate > \''.date('Y-m-d').'\' limit 1) as discounts', false);
        $temp  = $this->db->get('shoppingcentercompany')->result();*/        
 
        $this->db->join('discount','discount.companyid = shoppingcentercompany.companyid')
//        ->join('shoppingcategory','shoppingcategory.id = shoppingcentercompany.shoppingcategoryid')
        ->where('shoppingcenterid',$tc)
        ->where('finishDate >=',date('Y-m-d'))
  //      ->order_by('shoppingcategory.id','asc')
        ->select('discount.id,discount.name,discount.image', false);
        $this->db->where('accepted',1);
        $this->db->where('cityId',$city);        
        return  $this->db->get('shoppingcentercompany')->result();
    }

    function get_tcDiscountsCount($tc,$city){    
 
        $this->db->join('discount USE INDEX (city_finish_accepted_company)','discount.companyid = shoppingcentercompany.companyid',false)
//        ->join('shoppingcategory','shoppingcategory.id = shoppingcentercompany.shoppingcategoryid')
        ->where('shoppingcenterid',$tc)
        ->where('finishDate >=',date('Y-m-d'))
  //      ->order_by('shoppingcategory.id','asc')
        ->select('count(discount.id) as count', false);
        $this->db->where('accepted',1);
        $this->db->where('cityId',$city);        
        return  $this->db->get('shoppingcentercompany')->row()->count;
    }


    function get_catCustomTitle($cat,$pagenum,$cityinfo,$default){
        if($cat->meta_title != '' && $cat->meta_title != ' ' && $cat->meta_title != null )
            return str_replace('%city%', $cityinfo->name, $cat->meta_title.(($pagenum>1)?' страница №'.$pagenum:''));
        else 
            return $default.(($pagenum>1)?' страница №'.$pagenum:'');
    }

    function get_catCustomDescription($cat,$pagenum,$cityinfo,$default){
        if($cat->meta_description != '' && $cat->meta_description != ' ' && $cat->meta_description != null )
            return str_replace('%city%', $cityinfo->name, $cat->meta_description.(($pagenum>1)?' страница №'.$pagenum:''));
        else 
            return $default.(($pagenum>1)?' страница №'.$pagenum:'');            
    }

    function get_catCustomKeywords($cat,$pagenum,$cityinfo,$default){
        if($cat->meta_keywords != '' && $cat->meta_keywords != ' ' && $cat->meta_keywords != null )
            return str_replace('%city%', $cityinfo->name, $cat->meta_keywords.(($pagenum>1)?' страница №'.$pagenum:''));
        else 
            return $default.(($pagenum>1)?' страница №'.$pagenum:'');            
    }
}
?>