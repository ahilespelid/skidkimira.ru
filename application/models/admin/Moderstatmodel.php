<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Moderstatmodel extends CI_Model {

     function __construct()
     {
         // Call the Model constructor
         parent::__construct();
     }
     
     function stat(){
        $this->db->select('SUM(IF(`operation` = \'comment\',1,0)) as comments, SUM(IF(`operation` =\'company\',1,0)) as companies, SUM(IF(`operation` = \'companycitydescription\',1,0)) as companycitydescriptions, SUM(IF(`operation` = \'discount\',1,0)) as discounts, SUM(IF(`operation` = \'news\',1,0)) as news, users.email,users.id',false);         
         $this->db->group_by('users.email');
         $this->db->join('usersactivity','users.id = usersactivity.userid');
         return $this->db->get('users')->result();
     }

     function statlist($type,$moder,$datarange){
         switch($type){
             case "comment":
                $this->db->select('comment.username,comment.text,comment.addeddate, company.name as companyName,CHAR_LENGTH(comment.text) as symbols, usersactivity.date as date');
                $this->db->join('comment','usersactivity.objectid = comment.id','left');
                $this->db->join('company','company.id = comment.companyid','left');
                $this->db->where('usersactivity.operation','comment');
                        break;
             case "company":
                $this->db->select('company.id as companyId, company.name,CHAR_LENGTH(company.name)+CHAR_LENGTH(company.description) as symbols,usersactivity.date as date');
                $this->db->join('company','usersactivity.objectid = company.id','left');
                $this->db->where('usersactivity.operation','company');
                        break;
             case "companycitydescription":
                $this->db->select('companycitydescription.id,company.id as companyId,company.name,city.name as cityname,CHAR_LENGTH(companycitydescription.description) as symbols,usersactivity.date as date');
                $this->db->join('companycitydescription','usersactivity.objectid = companycitydescription.id','left');
                $this->db->join('company','companycitydescription.companyId= company.id','left');
                $this->db->join('city','companycitydescription.cityid = city.id','left');
                $this->db->where('usersactivity.operation','companycitydescription');
                        break;
             case "discount":
                $this->db->select('discount.id as discountId, discount.name,CHAR_LENGTH(discount.name)+CHAR_LENGTH(discount.description)+CHAR_LENGTH(discount.fullDescription) as symbols,usersactivity.date as date');
                $this->db->join('discount','usersactivity.objectid = discount.id','left');
                $this->db->where('usersactivity.operation','discount');
                        break;
             case "news":
                $this->db->select('news.header,news.moderatedate,CHAR_LENGTH(news.header)+CHAR_LENGTH(news.text) as symbols,usersactivity.date as date');
                $this->db->join('news','usersactivity.objectid = news.id');
                $this->db->where('usersactivity.operation','news');
                        break;            
         }
         if($datarange){
             $this->db->where('DATE(usersactivity.date) BETWEEN \''.$datarange['startDate'].'\' AND \''.$datarange['endDate'].'\'');
         }
         $this->db->where('usersactivity.userid',$moder);
         return $this->db->get('usersactivity')->result_array();
     }

     function addstat($operation,$id){
         $data = array('operation'=>$operation,'objectid'=>$id,'userid'=>$this->session->userdata('user_id'));
         $this->db->insert('usersactivity',$data);
     }
}
?>