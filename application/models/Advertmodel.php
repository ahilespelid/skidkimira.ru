<?php
class Advertmodel extends CI_Model {

    public $adverts = array();

    function get_adverts(){

        if(empty($this->adverts)){
            $this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));            
            if(! $this->adverts = $this->cache->get('adverts')){            
                $this->Advertmodel->update_adverts();
            }
        }

        return $this->adverts;
    }

    function get_advertsdescriptions(){
        $descriptions = array();
        foreach($this->db->select('place,description')->get('advertising')->result() as $adv){
            $descriptions[$adv->place] = $adv->description;
        }
        return $descriptions;
    }

    function update_adverts(){
            $this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));            
                foreach($this->db->select('place,value')->get('advertising')->result() as $adv){
                    $this->adverts[$adv->place] = $adv->value;
                }
                $this->cache->save('adverts', $this->adverts, 600);
    }
}
?>