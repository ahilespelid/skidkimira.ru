<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class CityModel extends CI_Model {

     function __construct()
     {
         // Call the Model constructor
         parent::__construct();
     }
     
     
     //Getters
     function getCity($id)
     {
         if($id == 0){
             $this->db->order_by("city.name",'asc');
            $query = $this->db->select('city.*, country.name as countryName')->
                join('country','country.id = city.countryId','left')->get('city');
            return $query->result_array();
         } else {
            $query = $this->db->get_where('city', array('id' => $id));
            return $query->row_array();
         }
     }

     function getCompanyCity($companyId)
     {
         $this->db->order_by("city.name",'asc');
        $this->db->select('distinct(cityId), city.name as cityName')->
            join('city','city.id = branchoffice.cityId','left');
        $query = $this->db->get_where('branchoffice', array('companyId' => $companyId));
        return $query->result_array();
     }

     //Setters
     function setCity($data)
     {
         if(array_key_exists('id', $data)){
             $this->db->where('id', $data['id']);
             $this->db->update('city', $data);
         } else {
             if(array_key_exists('name', $data)){
                 $query = $this->db->get_where('city', array('name' => $data['name']));
                 if($query->row_array()){
                     return "already exist";
                 } else {
                    $this->db->insert('city', $data);
                 }
             }
         }
     }

     //Removers
     function removeCity($id)
     {
          $this->db->delete('city', array('id' => $id));
     }  
 }