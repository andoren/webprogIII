<?php

class Menu_model extends CI_Model{
    public function __construct() {
        $this->load->database();
    }
    public function get_menus($id = FALSE){
        $data = array();
        if($id === FALSE){
            $this->db->order_by('created_at','ASC');
            $query = $this->db->get_where('menus',array('deleted'=>0));
            $data = $query->result_array();
        }
        else{
            $this->db->order_by('created_at','ASC');
            $query = $this->db->get_where('menus',array('deleted'=>0,'id'=>$id));
            
            $data = $query->row_array();
        }
        return $data;
        
    }
    public function create_menu(){
        
        if($this->input->post('target')==='target'){
          $data = array(
          'name'=>$this->input->post('name'),  
          'link'=> $this->input->post('external_link'),  
          'target'=>1      
        );
        }
        else {
          $data = array(
          'name'=>$this->input->post('name'),  
          'page_slug'=> $this->input->post('slug'),  
          'target'=>0     
        );
        }

        return $this->db->insert('menus',$data);
    }
    public function update_menu(){          
        if($this->input->post('target')==='target'){
          $data = array(
          'name'=>$this->input->post('name'),  
          'link'=> $this->input->post('external_link'),  
          'target'=>1      
        );
        }
        else {
          $data = array(
          'name'=>$this->input->post('name'),  
          'page_slug'=> $this->input->post('slug'),  
          'target'=>0     
        );
        }       
        $this->db->set($data);

        $this->db->where('id', $this->input->post('id'));
        
        return $this->db->update('menus');
    }
    public function delete_menu(){
        $this->db->where('id',$this->input->post('id'));

        return $this->db->delete('menus');
    }
}
