<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class BranchofficeModel extends CI_Model {

     function __construct()
     {
         // Call the Model constructor
         parent::__construct();
     }
     
     #Getters
     function getCompanyBranchoffice($id)
     {
         $this->db->select('branchoffice.*')->
            join('company','company.id = branchoffice.companyId','left');
         $this->db->where('companyId', $id);
         $query = $this->db->get('branchoffice');
         return $query->result_array();
     }

     function getBranchoffice($id)
     {
        $this->db->select('metro.name as name');
        $this->db->join('metro','branchofficemetro.metroId = metro.id');
        $this->db->where('branchofficeid',$id);
        $metros = $this->db->get('branchofficemetro')->result();
         $this->db->select('branchoffice.*');                  
         $this->db->where('branchoffice.id', $id);
         $query = $this->db->get('branchoffice');
         $return = $query->row_array();
         $return['metros'] = $metros;
         return $return;
     }

     function getOnecategory($id){
         $q = $this->db->select('categoryId')->limit(1)->get_where('branchoffice',array('companyId'=>$id));
         if($q->num_rows()>0)
            return $q->row()->categoryId;
        else
            $q = $this->db->select('categoryId')->limit(1)->get_where('company',array('id'=>$id));
            return $q->row()->categoryId;
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

     //Setters
     function setCompanyBranchoffice($data)
     {
         if(array_key_exists('id', $data)){
             if(array_key_exists('metroStationsData',$data)){
                 $metroStationsData = $data['metroStationsData'];
                 unset($data['metroStationsData']);
             }
             $this->db->where('id', $data['id'])->update('branchoffice', $data);
             //$this->db->update('branchoffice', $data);
//value="Охотный Ряд||55.756533||37.615309<>Площадь Революции||55.756756||37.622774<>Театральная||55.758808||37.617689<>"
             $this->db->where('branchOfficeId', $data['id'])->delete('branchofficemetro');             
             foreach(explode('<>',$metroStationsData) as $metrostring){
                 if($metrostring != ''){
                     $metroarray = explode('||',$metrostring); 
                     $query = $this->db->where('name',$metrostring[0])
                     ->where('cityid',$data['cityId'])
                     ->get('metro');
                     $metroid = '';
                     if($query->num_rows() != 1){
                         $this->db->where('name',$metroarray[0])
                            ->where('cityid',$data['cityId'])
                            ->delete('metro');
                        $this->db->insert('metro',array('latitude'=>$metroarray[1],'longitude'=>$metroarray[2],'name'=>$metroarray[0],'cityId'=>$data['cityId']));
                        $metroid= $this->db->insert_id();
                     }
                     else{
                        $metroid= $query->row()->id;
                     }
                    if($metroid != ''){
                        $this->db->insert('branchofficemetro',array('metroid'=>$metroid,'branchofficeid'=>$data['id']));
                    }
                    
                 }
             }
             //$this->db->update('branchofficemetro', array('metroId' => $metroId));

             //$this->db->where(array('CompanyId' => $data['companyId'], 'CityId' => $data['cityId']))->update('companycitydescription', array('description' => $companyCityDescription));
             //$this->db->where('CityId', $data['cityId']);
             //$this->db->update('companycitydescription', array('metroId' => $metroId));
         } else {
             if(array_key_exists('metroStationsData',$data)){
                 $metroStationsData = $data['metroStationsData'];
                 unset($data['metroStationsData']);
             }
             $this->db->insert('branchoffice', $data);
             $id = $this->db->insert_id();

            foreach(explode('<>',$metroStationsData) as $metrostring){
                 if($metrostring != ''){
                     $metroarray = explode('||',$metrostring); 
                     $query = $this->db->where('name',$metrostring[0])
                     ->where('cityid',$data['cityId'])
                     ->get('metro');
                     $metroid = '';
                     if($query->num_rows() != 1){
                         $this->db->where('name',$metroarray[0])
                            ->where('cityid',$data['cityId'])
                            ->delete('metro');
                        $this->db->insert('metro',array('latitude'=>$metroarray[1],'longitude'=>$metroarray[2],'name'=>$metroarray[0],'cityId'=>$data['cityId']));
                        $metroid= $this->db->insert_id();
                     }
                     else{
                        $metroid= $query->row()->id;
                     }
                    if($metroid != ''){
                        $this->db->insert('branchofficemetro',array('metroid'=>$metroid,'branchofficeid'=>$id));
                    }
                    
                 }
             }
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

     function setBranchofficeImage($id, $filename)
     {
         $this->db->insert('branchofficephoto', array('BranchOfficeId' => $id,'photo' => $filename));
     }

     //Removers
     function removeCompanyBranchoffice($id)
     {
          $this->db->delete('branchoffice', array('id' => $id));
          $this->db->delete('branchofficemetro', array('branchOfficeId' => $id));
     }
     
 }