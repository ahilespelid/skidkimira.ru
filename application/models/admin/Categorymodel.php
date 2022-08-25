<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class CategoryModel extends CI_Model {

     function __construct()
     {
         // Call the Model constructor
         parent::__construct();
     }
     
     
     //Category getters
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

     function getCategoryCityDescription($id)
     {
         if($id == 0){
            $query = $this->db->select('categorycitydescription.*, category.name as categoryName, city.name as cityName')->
                join('category','category.id = categorycitydescription.CategoryId','left')->
                join('city','city.id = categorycitydescription.CityId','left')->get('categorycitydescription');
            return $query->result_array();
         } else {
            $query = $this->db->get_where('categorycitydescription', array('id' => $id));
            return $query->row_array();
         }
     }

     function getSubCategory($id)
     {
         if($id == 0){
            $query = $this->db->select('subcategory.*, category.name as categoryName')->
                join('category','category.id = subcategory.categoryId','left')->get('subcategory');
            return $query->result_array();
         } else {
            $query = $this->db->get_where('subcategory', array('id' => $id));
            return $query->row_array();
         }
     }

     function getCategorySubcategory($categoryId)
     {
         $query = $this->db->get_where('subcategory', array('categoryId' => $categoryId));
         //echo $this->db->last_query();
         return $query->result_array();
     }
     

     function getSubCategoryCityDescription($id)
     {
         if($id == 0){
            $query = $this->db->select('subcategorycitydescription.*, subcategory.name as subCategoryName, city.name as cityName')->
                join('subcategory','subcategory.id = subcategorycitydescription.SubCategoryId','left')->
                join('city','city.id = subcategorycitydescription.CityId','left')->
                get('subcategorycitydescription');
            return $query->result_array();
         } else {
            $query = $this->db->get_where('subcategorycitydescription', array('id' => $id));
            return $query->row_array();
         }
     }

     //Category setters
     function setCategory($data)
     {
         if(array_key_exists('id', $data)){
             $this->db->where('id', $data['id']);
             $this->db->update('category', $data);
         } else {
             $this->db->insert('category', $data);
         }
     }

     function setCategoryCityDescription($data)
     {
         if(array_key_exists('id', $data)){
             $this->db->where('id', $data['id']);
             $this->db->update('categoryCityDescription', $data);
         } else {
             $this->db->insert('categoryCityDescription', $data);
         }
     }

     function setSubCategory($data)
     {
         if(array_key_exists('id', $data)){
             $this->db->where('id', $data['id']);
             $this->db->update('subcategory', $data);
         } else {
             $this->db->insert('subcategory', $data);
         }
     }

     function setSubCategoryCityDescription($data)
     {
         if(array_key_exists('id', $data)){
             $this->db->where('id', $data['id']);
             $this->db->update('subcategorycitydescription', $data);
         } else {
             $this->db->insert('subcategorycitydescription', $data);
         }
     }

     //Removers
     function removeCategory($id)
     {
          $this->db->delete('category', array('id' => $id));
     } 

     function removeCategoryCityDescription($id)
     {
          $this->db->delete('categoryCityDescription', array('id' => $id));
     }

     function removeSubCategory($id)
     {
          $this->db->delete('subcategory', array('id' => $id));
     }

     function removeSubCategoryCityDescription($id)
     {
          $this->db->delete('subcategorycitydescription', array('id' => $id));
     }
     
 }