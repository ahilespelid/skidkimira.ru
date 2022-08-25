<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class CompanyModel extends CI_Model {

     function __construct()
     {
         // Call the Model constructor
         parent::__construct();
     }
     
     
     //Getters
     function getCompany($id)
     {
         if($id == 0){
            $query = $this->db->select('company.*, siteuser.email as siteUserEmail, category.name as categoryName')->
                join('siteuser','siteuser.id = company.siteUserId','left')->
                join('category','category.id = company.categoryId','left')->
                get('company');
            return $query->result_array();
         } else {
            $this->db->select('company.*, category.name as categoryName')->join('category','category.id = company.categoryId','left'); 
            $query = $this->db->get_where('company', array('company.id' => $id));
            return $query->row_array();
         }
     }

     function getCompanyList()
     {
         $query = $this->db->select('company.*, siteuser.email as siteUserEmail, category.name as categoryName')->
                join('siteuser','siteuser.id = company.siteUserId','left')->
                join('category','category.id = company.categoryId','left')->
                get_where('company', array('companyType' => 'Company'));
        return $query->result_array();
     }
     function getCompanyOnlyList()
     {
         $query = $this->db->select('company.id, company.name')->
                get_where('company', array('companyType' => 'Company'));
        return $query->result_array();
     }


     function getCompanyFiltered($filter)
     {  
        $this->db->query('SET SESSION group_concat_max_len = 10005000;');
         $this->db->select('company.*,GROUP_CONCAT(companycitydescription.description) AS citydescription, siteuser.email as siteUserEmail, category.name as categoryName');
         $this->db->
            join('siteuser','siteuser.id = company.siteUserId','left')->
            join('companycitydescription','companycitydescription.CompanyId = company.id','left')->
            join('category','category.id = company.categoryId','left');

         if(!empty($filter['name'])){
             $this->db->like('company.name', $filter['name']);
         }
         if(!empty($filter['siteUserId'])){
             $this->db->where('company.siteUserId', $filter['siteUserId']);
         }
         if(!empty($filter['CityId'])){
             $this->db->select('city.name as cityName')->                
                join('city','city.id = companycitydescription.CityId','left');
                $this->db->where('companycitydescription.CityId', $filter['CityId']);
         }
         if(!empty($filter['categoryId'])){
                $this->db->where('company.categoryId', $filter['categoryId']);
         }
         if(!empty($filter['companyType'])){
             $this->db->where('company.companyType', $filter['companyType']);
         }
         if(isset($filter['hasWebShop'])){
             $this->db->like('company.hasWebShop', $filter['hasWebShop']);
         }
         if(isset($filter['hasStockCenter'])){
             $this->db->like('company.hasStockCenter', $filter['hasStockCenter']);
         }
         if(isset($filter['moderated'])){
             $this->db->where('company.moderated', $filter['moderated']);
         }
         if(isset($filter['accepted'])){
             $this->db->where('company.accepted', $filter['accepted']);
         }
         $this->db->group_by('company.id');
         $query = $this->db->get('company');
        // echo $this->db->last_query();
         return $query->result_array();
     }

     function getCompanyName($id)
     {
         $this->db->select('company.name');
         $query = $this->db->get_where('company', array('id' => $id));
         return $query->row_array();
     }

     function getCompanyBranchoffice($id, $cityId)
     {
         $this->db->select('branchoffice.*');
         $this->db->select('city.name as cityName')->
         join('city','city.id = branchoffice.cityId','left');
         $this->db->where('companyId', $id);
         $this->db->where('branchoffice.cityId', $cityId);
         $query = $this->db->get('branchoffice');
         return $query->result_array();
     }

     function getShoppingCenter($cityId)
     {
         $this->db->select('company.*')->
            join('companycitydescription','companycitydescription.CompanyId = company.id','left');
         $this->db->where('companycitydescription.CityId', $cityId);
         $this->db->where('company.companyType', 'ShoppingCenterBrand');
         $this->db->order_by('company.name','asc');
         $query = $this->db->get('company');
         //echo $this->db->last_query();
         return $query->result_array();
     }

     function getCompanyShoppingCenterBranchoffice($companyid, $cityId, $shoppingCenterId)
     {
         $this->db->select('shoppingcentercompany.*, branchoffice.companyId as branchofficeCompanyId')->
            join('branchoffice','branchoffice.id = shoppingcentercompany.ShoppingCenterId','left');
         $this->db->where('shoppingcentercompany.CompanyId', $companyid);
         $this->db->where('branchoffice.cityId', $cityId);
         if($shoppingCenterId != 'null'){
            $this->db->where('branchoffice.companyId', $shoppingCenterId);
         }
         $query = $this->db->get('shoppingcentercompany');
         //echo $this->db->last_query();
         return $query->result_array();
     }

     function getShoppingCenterBranchoffice($companyid, $cityId)
     {
         $this->db->select('company.name, branchoffice.address, branchoffice.id as branchofficeId');
            
         $this->db->where('branchoffice.cityId', $cityId);
         $this->db->join('branchoffice','branchoffice.companyId = company.id','left');
         if($companyid != 'null'){
             $this->db->where('company.id', $companyid);
         }
         else{
             $this->db->where('company.companyType', 'ShoppingCenterBrand');
         }
            
         $query = $this->db->get('company');
         //echo $this->db->last_query();
         return $query->result_array();
     }

     function getCompanyCatalog($id)
     {
         if($id == 0){
            $query = $this->db->get('companycatalog');
            return $query->result_array();
         } else {
             $this->db->select('companycatalog.*, category.name as categoryName')->
                join('category','category.id = companycatalog.companyCategoryId','left');
            $query = $this->db->get_where('companycatalog', array('companycatalog.id' => $id));
            return $query->row_array();
         }
     }

     function getCompanyCatalogMaxName($id)
     {
         $this->db->select('MAX(name) as nameNum');
         $query = $this->db->get_where('companycatalog', array('companyId' => $id));
         return $query->row_array();
     }

     function getCompanyCatalogList($id)
     {
         $this->db->select('companycatalog.*, category.name as categoryName')->
                join('category','category.id = companycatalog.companyCategoryId','left');
         $query = $this->db->get_where('companycatalog', array('companycatalog.companyId' => $id));
         return $query->result_array();
     }

     function getCompanyCatalogImage($id)
     {
         $query = $this->db->get_where('companycatalogimage', array('companyCatalogId' => $id));
         return $query->result_array();
     }

     function getCompanyCityDescriptionList($id)
     {
         $this->db->select('id, CityId ');
         $query = $this->db->get_where('companycitydescription', array('CompanyId' => $id));
         //echo $this->db->last_query();
         return $query->result_array();
     }

     function getCompanyCityDescriptionplain($companyId, $cityId){
        $this->db->select('id, description ');
         $query = $this->db->get_where('companycitydescription', array('CompanyId' => $companyId, 'CityId' => $cityId));
         return $query->row_array('array');         
     }

     function getCompanyCityDescription($companyId, $cityId)
     {
         $return = $this->companyModel->getCompanyCityDescriptionplain($companyId, $cityId);
         //$this->db->select('id, description ');
         //$query = $this->db->get_where('companycitydescription', array('CompanyId' => $companyId, 'CityId' => $cityId));
         //$return = $query->row_array('array');
         $return['description'] = strip_tags($return['description'],'<a><p><h1><h2><h3><h4><h5><h6><h7><b><i><u><strong><em><div><font><span><br><hr><img><ul><ol><li><table><tr><td><thead><tbody><sub><sup>');
         return $return;
     }

     function getCompanyPhoto($id)
     {
         if($id == 0){
            $query = $this->db->get('companyphoto');
            return $query->result_array();
         } else {
            $query = $this->db->get_where('companyphoto', array('CompanyId' => $id));
            return $query->result_array();
         }
     }

     function getCompanyVideo($id)
     {
         if($id == 0){
            $query = $this->db->get('companyvideo');
            return $query->result_array();
         } else {
            $query = $this->db->get_where('companyvideo', array('id' => $id));
            return $query->result_array();
         }
     }

     function getCompanyCityBranchofficeCount($companyId)
     {
         $this->db->select('COUNT(branchoffice.cityId) AS cityCount, branchoffice.cityId')->
            join('city','city.id = branchoffice.cityId','left');
         $this->db->where('branchoffice.companyId', $companyId);
         $this->db->group_by('branchoffice.cityId');
         $query = $this->db->get('branchoffice');
         return $query->result_array('array');
     }

     function getCompanyCityDiscountCount($companyId)
     {
         $this->db->select('COUNT(discount.cityId) AS cityCount, discount.cityId')->
            join('city','city.id = discount.cityId','left');
         $this->db->where('discount.companyId', $companyId);
         $this->db->group_by('discount.cityId');
         $query = $this->db->get('discount');
         return $query->result_array('array');
     }

     //Setters
     function setCompany($data)
     {
         if(!isset($data['clothesBrand']))
            $data['clothesBrand'] = 0;
         if(!isset($data['shoesBrand']))
            $data['shoesBrand'] = 0;         
         if(!isset($data['accessoriesBrand']))
            $data['accessoriesBrand'] = 0;
         if(!isset($data['sportBrand']))
            $data['sportBrand'] = 0;
         if(!isset($data['toiletryBrand']))
            $data['toiletryBrand'] = 0;
         if(!isset($data['furnitureBrand']))
            $data['furnitureBrand'] = 0;
         if(!isset($data['childrenBrand']))
            $data['childrenBrand'] = 0;
         if(!isset($data['electroBrand']))
            $data['electroBrand'] = 0;
         if(!isset($data['autoBrand']))
            $data['autoBrand'] = 0;
         if(!isset($data['otherBrand']))
            $data['otherBrand'] = 0;
         if(!isset($data['jewelryBrand']))
            $data['jewelryBrand'] = 0;


         
         if(array_key_exists('id', $data)){
             $this->db->where('id', $data['id']);
             $this->db->update('company', $data);
         } else {
             $this->db->insert('company', $data);
             $this->load->model('/admin/Moderstatmodel');
             $companyid = $this->db->insert_id();
             $this->Moderstatmodel->addstat('company',$companyid);
             return $companyid;
         }
     }

     function setCompanyBranchoffice($data)
     {
         if(array_key_exists('id', $data)){
             if(array_key_exists('metroId',$data)){
                 $metroId = $data['metroId'];
                 unset($data['metroId']);
             }
             $this->db->where('id', $data['id']);
             $this->db->update('branchoffice', $data);
             $this->db->where('branchOfficeId', $data['id']);
             $this->db->update('branchofficemetro', array('metroId' => $metroId));
         } else {
             if(array_key_exists('metroId',$data)){
                 $metroId = $data['metroId'];
                 unset($data['metroId']);
             }
             $this->db->insert('branchoffice', $data);
             $id = $this->db->insert_id();
             $this->db->insert('branchofficemetro', array('metroId' => $metroId, 'branchOfficeId' => $id));
         }
     }

     function setCompanyCatalog($data)
     {
         if(array_key_exists('id', $data)){
             $this->db->where('id', $data['id']);
             $this->db->update('companycatalog', $data);
         } else {
             $this->db->insert('companycatalog', $data);
         }
     }

     function setCompanyCatalogLogo($companyId, $name, $filename)
     {
         $this->db->where('companyId', $companyId);
         $this->db->where('name', $name);
         $this->db->update('companycatalog', array('logo' => '/images/company_catalogs/'.$companyId.'/'.$name.'/'.$filename));
     }

     function setCompanyCatalogImage($companyCatalogId, $companyId, $name, $filename)
     {
         $this->db->insert('companycatalogimage', array('companyCatalogId' => $companyCatalogId, 'image' => '/images/company_catalogs/'.$companyId.'/'.$name.'/'.$filename, 'imageBig' => '/images/company_catalogs/'.$companyId.'/'.$name.'/'.$filename));
     }

     function setCompanyCityDescription($data)
     {
         if(isset($data['_wysihtml5_mode'])){
             unset($data['_wysihtml5_mode']);
         }
         if(isset($data['shoppingCenterBranchofficeTable_length'])){
             unset($data['shoppingCenterBranchofficeTable_length']);
         }

         $this->db->where('CompanyId', $data['CompanyId']); 
         $this->db->where('CityId', $data['CityId']); 
         $q = $this->db->get('companycitydescription');  
         if ( $q->num_rows() > 0 ){ 
             $this->db->where('CompanyId', $data['CompanyId']); 
             $this->db->where('CityId', $data['CityId']); 
             $this->db->update('companycitydescription',$data); 
         } else { 
             $this->db->insert('companycitydescription',$data); 
             $this->load->model('/admin/Moderstatmodel');
             $this->Moderstatmodel->addstat('companycitydescription',$this->db->insert_id());             
         }
     }

     function setCompanyLogo($id, $filename)
     {
         $this->db->where('id', $id);
         $this->db->update('company', array('logo' => $filename));
     }

     function setCompanyImage($id, $filename)
     {
         $this->db->insert('companyphoto', array('CompanyId' => $id,'photo' => $filename));
     }

     function setCompanyPhoto($data)
     {
         if(array_key_exists('id', $data)){
             $this->db->where('id', $data['id']);
             $this->db->update('companyphoto', $data);
         } else {
             $this->db->insert('companyphoto', $data);
         }
     }

     function setCompanyVideo($data)
     {
         if(array_key_exists('id', $data)){
             $this->db->where('id', $data['id']);
             $this->db->update('companyvideo', $data);
         } else {
             $this->db->insert('companyvideo', $data);
         }
     }

     function setCompanyShoppingCenter($companyId, $data)
     {
         if(isset($data['add'])){
             foreach($data['add'] as $arr){
                $this->db->insert('shoppingcentercompany', array('CompanyId' => $companyId, 'ShoppingCenterId' => $arr[0], 'ShoppingCategoryId' => $arr[1]));
            }
         }
         if(isset($data['remove'])){
             foreach($data['remove'] as $id){
                $this->db->delete('shoppingcentercompany', array('CompanyId' => $companyId, 'ShoppingCenterId' => $id));
            }
         }
     }

     function publishCompany($data)
     {
         foreach($data as $id){
             $this->db->where('id', $id);
             $this->db->update('company', array('moderated' => '1', 'accepted' => '1'));
         }
     }

     function unpublishCompany($data)
     {
         foreach($data as $id){
             $this->db->where('id', $id);
             $this->db->update('company', array('accepted' => '0'));
         }
     }


     //Removers
     function removeCompany($id)
     {
          $this->db->delete('company', array('id' => $id));
          $this->db->delete('discount', array('companyid' => $id));
          $this->db->delete('branchoffice', array('companyid' => $id));
          $this->db->delete('companycatalog', array('companyid' => $id));
          $this->db->delete('companycitydescription', array('companyid' => $id));
     }  

     function removeCompanyCatalog($id)
     {
          $this->db->delete('companycatalog', array('id' => $id));
     }

     function removeCompanyCatalogImage($id)
     {
          $this->db->delete('companycatalogimage', array('id' => $id));
     }

     function removeCompanyCityDescription($id)
     {
          $this->db->delete('companycitydescription', array('id' => $id));
     }

     function removeCompanyPhoto($id)
     {
          $this->db->delete('companyphoto', array('id' => $id));
     }

     function removeCompanyVideo($id)
     {
          $this->db->delete('companyvideo', array('id' => $id));
     }
 }