<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ShoppingModel extends CI_Model {

     function __construct()
     {
         // Call the Model constructor
         parent::__construct();
     }
     
     
     //Getters
     function getShoppingCategory($id)
     {
         if($id == 0){
            $query = $this->db->get('shoppingcategory');
            return $query->result_array();
         } else {
            $query = $this->db->get_where('shoppingcategory', array('id' => $id));
            return $query->row_array();
         }
     }

     function getShoppingCenterCompany($id)
     {
         if($id == 0){
            $query = $this->db->select('shoppingcentercompany.*, shppingcategory.name as shoppingCategoryName')->
                join('shoppingcategory','shoppingcategory.id = shoppingcentercompany.ShoppingCategoryId','left')->get('shoppingcentercompany');
            return $query->result_array();
         } else {
            $query = $this->db->get_where('shoppingcentercompany', array('id' => $id));
            return $query->row_array();
         }
     }

     //Setters
     function setShoppingCategory($data)
     {
         if(array_key_exists('id', $data)){
             $this->db->where('id', $data['id']);
             $this->db->update('shoppingcategory', $data);
         } else {
             $this->db->insert('shoppingcategory', $data);
         }
     }

     function setShoppingCenterCompany($data)
     {
         if(array_key_exists('id', $data)){
             $this->db->where('id', $data['id']);
             $this->db->update('shoppingcentercompany', $data);
         } else {
             $this->db->insert('shoppingcentercompany', $data);
         }
     }

     //Removers
     function removeShoppingCategory($id)
     {
          $this->db->delete('shoppingcategory', array('id' => $id));
     } 

     function removeShoppingCenterCompany($id)
     {
          $this->db->delete('shoppingcentercompany', array('id' => $id));
     }
     
 }