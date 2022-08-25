<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class UserModel extends CI_Model {

     function __construct()
     {
         // Call the Model constructor
         parent::__construct();
     }
     
     
     //Getters
     function getUser($id)
     {
         if($id == 0){
            
            $this->db->join('users_groups','users.id = users_groups.user_id','left');
            $this->db->join('groups','users_groups.group_id = groups.id','left');
            $this->db->group_by('users.id');
            $query = $this->db->select('users.*,GROUP_CONCAT(groups.name) as type
')->get('users');

            return $query->result_array();
         } else {
            $query = $this->db->get_where('users', array('id' => $id));
            return $query->row_array();
         }
     }

     function getModerator()
     {
         $query = $this->db->get_where('users', array('type' => 'MODERATOR'));
         return $query->result_array();
     }

     function getComments()
     {
         $this->db->select('comment.*, company.name as companyName')->
            join('company', 'company.id = comment.companyId','left');
         $this->db->where('comment.moderated <> 1');
         $query = $this->db->get('comment');
         return $query->result_array();
     }

     function getNewCommentsCount()
     {
         $this->db->select('COUNT(*) as newCommentsCount');
         $this->db->where('moderated <> 1');
         $query = $this->db->get('comment');
         return $query->row_array();
     }

     //Setters
     function setUser($data)
     {
         if(array_key_exists('id', $data)){
             $this->db->where('id', $data['id']);
             $this->db->update('users', $data);
         } else {
             $this->db->insert('users', $data);
         }
     }

     function acceptComment($id, $data)
     {
         $this->db->where('id', $id);
         $this->db->update('comment', array('moderated' => '1', 'accepted' => '1', 'moderateDate' => $data['date'], 'moderatorId' => $data['moderatorId']));
     }

     function declineComment($id, $data)
     {
         $this->db->where('id', $id);
         $this->db->update('comment', array('moderated' => '1', 'accepted' => '0', 'moderateDate' => $data['date'], 'moderatorId' => $data['moderatorId']));
     }

     //Removers
     function removeUser($id)
     {
          $this->db->delete('users', array('id' => $id));
     } 
     
     
 }