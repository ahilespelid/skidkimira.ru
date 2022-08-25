<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class DiscountModel extends CI_Model {

     function __construct()
     {
         // Call the Model constructor
         parent::__construct();
     }
     
     
     //Getters
     function getDiscount($id)
     {
         if($id == 0){
            //$this->db->limit(50);
            $query = $this->db->select('discount.*, company.name as companyName, category.name as categoryName, siteuser.email as siteuserEmail')->
                join('company','company.id = discount.companyId','left')->
                join('category','category.id = discount.categoryId','left')->
                join('siteuser','siteuser.id = discount.moderatorId','left')->
                where('discount.accepted = 0')->
                get('discount');
            return $query->result_array();
         } else {
            $query = $this->db->get_where('discount', array('id' => $id));
            return $query->row_array();
         }
     }

     function getDiscountFiltered($filter)
     {  
         //$this->db->limit(50); 
         $this->db->select('discount.*');
         $query = $this->db->select('company.id as companyId, company.name as companyName, category.name as categoryName, siteuser.email as siteuserEmail')->
                join('company','company.id = discount.companyId','left')->
                join('category','category.id = discount.categoryId','left')->
                join('siteuser','siteuser.id = discount.moderatorId','left');

         if(!empty($filter['name'])){
             $this->db->like('discount.name', $filter['name']);
         }
         if(!empty($filter['companyName'])){
             $this->db->like('company.name', $filter['companyName']);
         }
         if(!empty($filter['cityId'])){
             $this->db->select('city.name as cityName')->
                join('city','city.id = discount.cityId','left');
                $this->db->where('discount.cityId', $filter['cityId']);
         }
         if(!empty($filter['speciality'])){
             $this->db->select('company.speciality as speciality');
                $this->db->where('company.speciality', $filter['speciality']);
         }
         if(!empty($filter['categoryId'])){
                $this->db->where('discount.categoryId', $filter['categoryId']);
         }
         if(!empty($filter['siteUserId'])){
             $this->db->where('discount.moderatorId', $filter['siteUserId']);
         }
         if(isset($filter['moderated'])){
             $this->db->where('discount.moderated', $filter['moderated']);
         }
         if(isset($filter['accepted'])){
             $this->db->where('discount.accepted', $filter['accepted']);
         }
         $this->db->limit(5);
         $query = $this->db->get('discount');
         //echo $this->db->last_query();
         return $query->result_array();
     }

     function getCompanyDiscount($id, $cityId)
     {
         //$this->db->limit(10);
         $this->db->select('discount.*');
         $this->db->select('city.name as cityName')->
         join('city','city.id = discount.cityId','left');
         $this->db->where('companyId', $id);
         $this->db->where('discount.cityId', $cityId);
         $this->db->order_by('startDate', 'DESC');
         $query = $this->db->get('discount');
         return $query->result_array();
     }

     function getDiscountSubCategory($id)
     {
         $this->db->select('discountsubcategory.*');
         $this->db->select('subcategory.name as name')->
                join('subcategory','subcategory.id = discountsubcategory.subCategoryId','left');
                $this->db->where('discountsubcategory.discountId', $id);
         $query = $this->db->get('discountsubcategory');
         //echo $this->db->last_query();
         return $query->result_array();
     }

     function getDiscountNotSelectedSubCategory($categoryId, $discountId)
     { 
         $this->db->select("subcategory.* FROM `subcategory` LEFT JOIN `discountsubcategory` ON `discountsubcategory`.`subCategoryId` != `subcategory`.`id` WHERE `subcategory`.`categoryId` = '$categoryId' AND `discountsubcategory`.`discountId` = '$discountId' AND `subcategory`.`id` != `discountsubcategory`.`subCategoryId`");
         $query = $this->db->get();
         //echo $this->db->last_query();
         return $query->result_array();
     }

     function getDiscountPhoto($id)
     {
         if($id == 0){
            $query = $this->db->get('discountphoto');
            return $query->result_array();
         } else {
            $query = $this->db->get_where('discountphoto', array('DiscountId' => $id));
            return $query->result_array();
         }
     }

     function getDiscountVideo($id)
     {
         if($id == 0){
            $query = $this->db->get('discountvideo');
            return $query->result_array();
         } else {
            $query = $this->db->get_where('discountvideo', array('id' => $id));
            return $query->result_array();
         }
     }

     //Setters
     function setDiscount($data)
     {
         $arr = $data['discount'];
         if(array_key_exists('id', $arr)){
             $this->discountModel->setDiscountSubCategory($arr['id'],$data);             
             $discountId = $arr['id'];
             $this->db->where('id', $discountId);
             $this->db->update('discount', $arr);
         } else {
             $this->db->insert('discount', $arr);
             $discountId = $this->db->insert_id();
             $this->discountModel->setDiscountSubCategory($discountId,$data);
             $this->load->model('/admin/Moderstatmodel');
             $this->Moderstatmodel->addstat('discount',$discountId);             
             return $discountId;
         }

     }

     function setCompanyDiscount($data)
     {
         $arr = $data['discount'];
         
         if(array_key_exists('id', $arr)){
             $this->discountModel->setDiscountSubCategory($arr['id'],$data);
             $discountId = $arr['id'];
             $this->db->where('id', $discountId);
             $this->db->update('discount', $arr);
         } else {
             $this->db->insert('discount', $arr);
             $discountId = $this->db->insert_id();
             $this->discountModel->setDiscountSubCategory($discountId,$data);
             $this->load->model('/admin/Moderstatmodel');             
             $this->Moderstatmodel->addstat('discount',$discountId);             
             return $discountId;             
         }
     }

     function setDiscountSubCategory($discountId, $data)
     {
         if(isset($data['add'])){
             foreach($data['add'] as $id){
                $this->db->insert('discountsubcategory', array('discountId' => $discountId, 'subCategoryId' => $id));
            }
         }
         if(isset($data['remove'])){
             foreach($data['remove'] as $id){
                $this->db->delete('discountsubcategory', array('discountId' => $discountId, 'subCategoryId' => $id));
            }
         }
     }

     function setDiscountLogo($id, $filename)
     {
         $this->db->where('id', $id);
         $this->db->update('discount', array('image' => $filename));
     }

     function setDiscountImage($id, $filename)
     {
         $this->db->insert('discountphoto', array('DiscountId' => $id,'photo' => $filename));
     }

     function publishDiscount($data)
     {
         foreach($data as $id){
             $this->db->where('id', $id);
             $this->db->update('discount', array('moderated' => '1', 'accepted' => '1'));
             echo $this->db->last_query();
         }
     }

     function unpublishDiscount($data)
     {
         foreach($data as $id){
             $this->db->where('id', $id);
             $this->db->update('discount', array('moderated' => '1', 'accepted' => '0'));
             echo $this->db->last_query();
         }
     }

     function deleteDiscounts($data)
     {
         foreach($data as $id){
             $this->db->where('id', $id);
             $this->db->delete('discount');
             echo $this->db->last_query();
         }
     }     
     

     function cloneDiscount($companyId, $discountId)
     {
         $this->db->where('cloned', '0')->where('cloneSource IS NULL');
         $this->db->where('companyId', $companyId);
         $this->db->where('id', $discountId);
         $this->db->where('cityId', 1);
         $query = $this->db->get('discount');
         if(count($query->result_array()) > 0){
             $discount = $query->row_array();
             $discountcity = $discount['cityId'];
             $this->db->set(array('cloned' => '1', 'cloneSource' => $discountId, 'cloneDate' => date('Y-m-d', now())));
             $this->db->where('id', $discountId);
             $this->db->update('discount');
             unset($discount['id']);
             //var_dump($discount);
             $this->db->select('distinct(cityId)');
             $cityQuery = $this->db->get_where('branchoffice', array('companyId' => $companyId));
             $this->db->select('subCategoryId');
             $subCategoryQuery = $this->db->get_where('discountsubcategory', array('discountId' => $discountId));
             $subCategories = $subCategoryQuery->result_array();
             foreach($cityQuery->result_array() as $city){
                 print_r(array('city'=>$city,'discontCty'=>$discount['cityId']));
                 if($city['cityId'] != $discountcity){
                    echo 'city != discount city';
                    $discount['cityId'] = $city['cityId'];
                    $discount['cloned'] = '1';
                    $discount['cloneSource'] = $discountId;
                    $discount['cloneDate'] = date('Y-m-d', now());
                    $this->db->insert('discount', $discount);
                    $newDiscountId = $this->db->insert_id();
                    foreach($subCategories as $subCategory){
                        $this->db->insert('discountsubcategory', array('discountId' => $newDiscountId, 'subCategoryId' => $subCategory['subCategoryId']));
                    }
                 }
             }
         } else {
            return "none";
         }
     }

     function cloneAllDiscounts()
     {
         $this->db->where('cloned', '0')->where('accepted', '1')->where('cloneSource IS NULL')->where('cityId',1)->where('finishdate > DATE_FORMAT(NOW(),\'%Y-%m-%d\')');
         $query = $this->db->get('discount');
         if(count($query->result_array()) > 0){
             $discounts = $query->result_array();
             foreach($discounts as $discount){
                 $discountId = $discount['id'];
                 $discountcity = $discount['cityId'];
                 $companyId = $discount['companyId'];
                 $this->db->set(array('cloned' => '1', 'cloneSource' => $discountId, 'cloneDate' => date('Y-m-d', now())));
                $this->db->where('id', $discountId);
                $this->db->update('discount');
                unset($discount['id']);
                //var_dump($discount);
                $this->db->select('distinct(cityId)');
                $cityQuery = $this->db->get_where('branchoffice', array('companyId' => $companyId));
                $this->db->select('subCategoryId');
                $subCategoryQuery = $this->db->get_where('discountsubcategory', array('discountId' => $discountId));
                $subCategories = $subCategoryQuery->result_array();
                foreach($cityQuery->result_array() as $city){
                     if($city['cityId'] != $discountcity){
                        $discount['cityId'] = $city['cityId'];
                        $discount['cloned'] = '1';
                        $discount['cloneSource'] = $discountId;
                        $discount['cloneDate'] = date('Y-m-d', now());
                        $this->db->insert('discount', $discount);
                        $newDiscountId = $this->db->insert_id();
                        foreach($subCategories as $subCategory){
                            $this->db->insert('discountsubcategory', array('discountId' => $newDiscountId, 'subCategoryId' => $subCategory['subCategoryId']));
                        }
                    }
                }
             }
         } else {
            return "none";
         }
     }

     //Removers
     function removeDiscount($id)
     {
          $this->db->delete('discount', array('id' => $id));
          $this->db->delete('discountsubcategory', array('discountId' => $id));
     }  

     function removeDiscountPhoto($id)
     {
          $this->db->delete('discountphoto', array('id' => $id));
     }
 }