<?php

class Menu_model extends CI_Model{
    public function __construct() {
        $this->load->database();
    }
    public function get_menus($name = FALSE){
        $data = array();
        if($name === FALSE){
            $this->db->order_by('created_at','ASC');
            $query = $this->db->get_where('menus',array('deleted'=>0));
            $data = $query->result_array();
        }
        else{
            $this->db->where(array('deleted',0));
            $this->db->where(array('name',$name));
            $this->db->order_by('created_at',ASC);
            $query = $this->db->get('menus');
            $data = $query->row_array();
        }
        return $data;
        
    }
    
}
