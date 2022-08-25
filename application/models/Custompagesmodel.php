<?php
class Custompagesmodel extends CI_Model {

    public $pages = array();
    public $pages_by_id = array();


    function get_pages(){
        if(empty($this->pages)||empty($this->pages_by_id)){
            $this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
            if(! $this->pages = $this->cache->get('custompages')){
                $this->Custompagesmodel->update_cached_pages();
            }
            else{
                foreach($this->pages as $page){
                    $this->pages_by_id[$page->id]  = $page;
                }            
            }
        }
        return $this->pages;
    }

    function update_cached_pages(){
        $this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));        
        $tmp_pages = $this->db->get('custompages')->result();
        foreach($tmp_pages as $page){
            $this->pages[$page->url] = $page;
            $this->pages_by_id[$page->id]  = $page;
        }
        $this->cache->save('custompages', $this->pages, 600);
    }

    function get_page_by_id($id){
        $this->Custompagesmodel->get_pages();
        return $this->pages_by_id[$id];
    }

    function get_page($url){
        $this->Custompagesmodel->get_pages();    
        if(isset($this->pages[$url]))
            return $this->pages[$url];
        else
            return false;
    }


    function update_page($id,$data){
        $this->db->where('id',$id);
        $this->db->update('custompages',$data);
    }

    function insert_page($id,$data){
        
        $this->db->insert('custompages',$data);
        return $this->db->insert_id();        
    }

    function delpage($id){
        $this->db->where('id',$id);
        $this->db->delete('custompages');
        $this->Custompagesmodel->update_cached_pages();
    }
}
?>