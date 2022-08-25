<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class CouponModel extends CI_Model {

     function __construct()
     {
         // Call the Model constructor
         parent::__construct();
     }
     
     
     //Getters
     function getCoupon($id)
     {
         if($id == 0){
            $query = $this->db->select('coupon.*, coupontype.name as couponTypeName, couponcategory.name as couponCategoryTypeName, couponadvcampaign.name as couponAdvCampaignName')->
                join('coupontype','coupontype.id = coupon.couponTypeId','left')->
                join('couponcategory','couponcategory.id = coupon.couponCategoryId','left')->
                join('couponadvcampaign','couponadvcampaign.id = coupon.couponAdvCampaignId','left')->
                get('coupon');
            return $query->result_array();
         } else {
            $query = $this->db->get_where('coupon', array('id' => $id));
            return $query->row_array();
         }
     }

     function getCouponType($id)
     {
         if($id == 0){
            $query = $this->db->get('coupontype');
            return $query->result_array();
         } else {
            $query = $this->db->get_where('coupontype', array('id' => $id));
            return $query->row_array();
         }
     }

     function getCouponCategory($id)
     {
         if($id == 0){
            $query = $this->db->get('couponcategory');
            return $query->result_array();
         } else {
            $query = $this->db->get_where('couponcategory', array('id' => $id));
            return $query->row_array();
         }
     }

     function getCouponAdvCampaign($id)
     {
         if($id == 0){
            $query = $this->db->get('couponadvcampaign');
            return $query->result_array();
         } else {
            $query = $this->db->get_where('couponadvcampaign', array('id' => $id));
            return $query->row_array();
         }
     }

     //Setters
     function setCoupon($data)
     {
         if(array_key_exists('id', $data)){
             $this->db->where('id', $data['id']);
             $this->db->update('coupon', $data);
         } else {
             $this->db->insert('coupon', $data);
         }
     }

     function setCouponType($data)
     {
         if(array_key_exists('id', $data)){
             $this->db->where('id', $data['id']);
             $this->db->updadte('coupontype', $data);
         } else {
             $this->db->insert('coupontype', $data);
         }
     }

     function setCouponCategory($data)
     {
         if(array_key_exists('id', $data)){
             $this->db->where('id', $data['id']);
             $this->db->update('couponcategory', $data);
         } else {
             $this->db->insert('couponcategory', $data);
         }
     }

     function setCouponAdvCampaign($data)
     {
         if(array_key_exists('id', $data)){
             $this->db->where('id', $data['id']);
             $this->db->update('couponadvcampaign', $data);
         } else {
             $this->db->insert('couponadvcampaign', $data);
         }
     }

     //Removers
     function removeCoupon($id)
     {
          $this->db->delete('coupon', array('id' => $id));
     }  

     function removeCouponType($id)
     {
          $this->db->delete('coupontype', array('id' => $id));
     } 

     function removeCouponCategory($id)
     {
          $this->db->delete('couponcategory', array('id' => $id));
     } 

     function removeCouponAdvCampaign($id)
     {
          $this->db->delete('couponadvcampaign', array('id' => $id));
     } 
 }