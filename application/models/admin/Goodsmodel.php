<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class GoodsModel extends CI_Model {

     function __construct()
     {
         // Call the Model constructor
         parent::__construct();
     }
     
     
     //Goods getters
     function getGoods($id)
     {
         if($id == 0){
            $query = $this->db->select('goods.*, goodssubcategory.name as goodsSubCategoryName, goodstype.name as goodsTypeName, goodssubtype.name as goodsSubTypeName')->
                join('goodssubcategory','goodssubcategory.id = goods.goodsSubCategoryId','left')->
                join('goodstype','goodstype.id = goods.goodsTypeId','left')->
                join('goodssubtype','goodssubtype.id = goods.goodsSubTypeId','left')->
                get('goods', 100);
            return $query->result_array();
         } else {
            $query = $this->db->get_where('goods', array('id' => $id));
            return $query->row_array();
         }
     }

     function getGoodsCategory($id)
     {
         if($id == 0){
            $query = $this->db->get('goodscategory');
            return $query->result_array();
         } else {
            $query = $this->db->get_where('goodscategory', array('id' => $id));
            return $query->row_array();
         }
     }

      function getGoodsSubCategory($id)
     {
         if($id == 0){
            $query = $this->db->select('goodssubcategory.*, goodscategory.name as goodsCategoryName')->
                join('goodscategory','goodscategory.id = goodssubcategory.goodsCategoryId','left')->get('goodssubcategory');
            return $query->result_array();
         } else {
            $query = $this->db->get_where('goodssubcategory', array('id' => $id));
            return $query->row_array();
         }
     }

      function getGoodsType($id)
     {
         if($id == 0){
            $query = $this->db->select('goodstype.*, goodssubcategory.name as goodsSubCategoryName')->
                join('goodssubcategory','goodssubcategory.id = goodstype.goodsSubCategoryId','left')->get('goodstype');
            return $query->result_array();
         } else {
            $query = $this->db->get_where('goodstype', array('id' => $id));
            return $query->row_array();
         }
     }

      function getGoodsSubType($id)
     {
         if($id == 0){
            $query = $this->db->select('goodssubtype.*, goodstype.name as goodsTypeName')->
                join('goodstype','goodstype.id = goodssubtype.goodsTypeId','left')->get('goodssubtype');
            return $query->result_array();
         } else {
            $query = $this->db->get_where('goodssubtype', array('id' => $id));
            return $query->row_array();
         }
     }

     //Goods setters

     function setGoods($data)
     {
         if(array_key_exists('id', $data)){
             $this->db->where('id', $data['id']);
             $this->db->update('goods', $data);
         } else {
             $this->db->insert('goods', $data);
         }
     }

     function setGoodsCategory($data)
     {
         if(array_key_exists('id', $data)){
             $this->db->where('id', $data['id']);
             $this->db->update('goodscategory', $data);
         } else {
             $this->db->insert('goodscategory', $data);
         }
     }

     function setGoodsSubCategory($data)
     {
         if(array_key_exists('id', $data)){
             $this->db->where('id', $data['id']);
             $this->db->update('goodssubcategory', $data);
         } else {
             $this->db->insert('goodssubcategory', $data);
         }
     }

     function setGoodsType($data)
     {
         if(array_key_exists('id', $data)){
             $this->db->where('id', $data['id']);
             $this->db->update('goodssubtype', $data);
         } else {
             $this->db->insert('goodssubtype', $data);
         }
         $this->db->replace('goodstype', $data);
     }

     function setGoodsSubType($data)
     {
         if(array_key_exists('id', $data)){
             $this->db->where('id', $data['id']);
             $this->db->update('goodssubtype', $data);
         } else {
             $this->db->insert('goodssubtype', $data);
         }
     }

     //Removers
     function removeGoods($id)
     {
          $this->db->delete('goods', array('id' => $id));
     } 

     function removeGoodsCategory($id)
     {
          $this->db->delete('goodscategory', array('id' => $id));
     } 

     function removeGoodsSubCategory($id)
     {
          $this->db->delete('goodssubcategory', array('id' => $id));
     } 

     function removeGoodsType($id)
     {
          $this->db->delete('goodstype', array('id' => $id));
     } 

     function removeGoodsSubType($id)
     {
          $this->db->delete('goodssubtype', array('id' => $id));
     } 
     
 }