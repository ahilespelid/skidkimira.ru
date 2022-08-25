<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ModeratorModel extends CI_Model {

     function __construct()
     {
         // Call the Model constructor
         parent::__construct();
     }
     
     
     //Getters
     function getCity($id)
     {
         if($id == 0){
            $query = $this->db->select('city.*, country.name as countryName')->
                join('country','country.id = city.countryId','left')->get('city');
            return $query->result_array();
         } else {
            $query = $this->db->get_where('city', array('id' => $id));
            return $query->row_array();
         }
     }

     function getCategory($id)
     {
         if($id == 0){
            $query = $this->db->get('category');
            return $query->result_array();
         } else {
            $query = $this->db->get_where('category', array('id' => $id));
            return $query->row_array();
         }
     }

     function getMetro($id)
     {
         if($id == 0){
            $query = $this->db->get('metro');
            return $query->result_array();
         } else {
            $query = $this->db->get_where('metro', array('id' => $id));
            return $query->row_array();
         }
     }

     function getCompanyName($id)
     {
         $this->db->select('company.name');
         $query = $this->db->get_where('company', array('id' => $id));
         return $query->row_array();
     }

     function getCompany($id, $moderatorId)
     {
         if($id == 0){
            $this->db->limit(50);
            $this->db->where('moderatorId', $moderatorId);
            $query = $this->db->select('company.*, siteuser.email as siteUserEmail, category.name as categoryName')->
                join('siteuser','siteuser.id = company.siteUserId','left')->
                join('category','category.id = company.categoryId','left')->
                get('company');
            return $query->result_array();
         } else {
            $query = $this->db->get_where('company', array('id' => $id, 'moderatorId' => $moderatorId));
            return $query->row_array();
         }
     }

     function getCompanyFiltered($filter)
     {  
         $this->db->limit(50); 
         $this->db->select('company.*');
         $this->db->select('siteuser.email as siteUserEmail, category.name as categoryName')->
            join('siteuser','siteuser.id = company.siteUserId','left')->
            join('category','category.id = company.categoryId','left');

         if(!empty($filter['name'])){
             $this->db->like('company.name', $filter['name']);
         }
         if(!empty($filter['siteUserId'])){
             $this->db->where('company.siteUserId', $filter['siteUserId']);
         }
         if(!empty($filter['CityId'])){
             $this->db->select('city.name as cityName')->
                join('companycitydescription','companycitydescription.CompanyId = company.id','left')->
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
         if(!empty($filter['moderated'])){
             $this->db->where('company.moderated', $filter['moderated']);
         }
         if(!empty($filter['accepted'])){
             $this->db->where('company.accepted', $filter['accepted']);
         }
         $query = $this->db->get('company');
         
         return $query->result_array();
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

     function getCompanyBranchoffice($companyId)
     {
         $this->db->select('branchoffice.*');
         $this->db->select('city.name as cityName')->
         join('city','city.id = branchoffice.cityId','left');
         $this->db->where('companyId', $companyId);
         $query = $this->db->get('branchoffice');
         return $query->result_array();
     }

     function getBranchoffice($id)
     {
         $this->db->select('branchoffice.*');
         $this->db->select('branchofficemetro.metroId as metroId')->
         join('branchofficemetro','branchofficemetro.branchOfficeId = branchoffice.Id','left');
         $this->db->where('branchoffice.id', $id);
         $query = $this->db->get('branchoffice');
         return $query->row_array();
     }


     //Setters
     function setCompany($data)
     {
         if(array_key_exists('id', $data)){
             $this->db->where('id', $data['id']);
             $this->db->update('company', $data);
         } else {
             $this->db->insert('company', $data);
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

     function setMetro($data)
     {
         if(array_key_exists('id', $data)){
             $this->db->where('id', $data['id']);
             $this->db->update('metro', $data);
         } else {
             $this->db->insert('metro', $data);
         }
     }


     //Removers
     function removeCompany($id)
     {
          $this->db->delete('company', array('id' => $id));
     }  

     function removeCompanyBranchoffice($id)
     {
          $this->db->delete('branchoffice', array('id' => $id));
     }

     
 }