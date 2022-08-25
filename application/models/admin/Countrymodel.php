<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class CountryModel extends CI_Model {

     function __construct()
     {
         // Call the Model constructor
         parent::__construct();
     }
     
     
     //Getters
     function getCountry($id)
     {
         if($id == 0){
            $query = $this->db->get('country');
            return $query->result_array();
         } else {
            $query = $this->db->get_where('country', array('id' => $id));
            return $query->row_array();
         }
     }

     //Setters
     function setCountry($data)
     {
         if(array_key_exists('id', $data)){
             $this->db->where('id', $data['id']);
             $this->db->update('country', $data);
         } else {
             if(array_key_exists('name', $data)){
                 $query = $this->db->get_where('country', array('name' => $data['name']));
                 if($query->row_array()){
                     return "already exist";
                 } else {
                    $this->db->insert('country', $data);
                 }
             }
         }
     }

     //Removers
     function removeCountry($id)
     {
          $this->db->delete('country', array('id' => $id));
     } 
     
 }