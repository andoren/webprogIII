<?php

class Page_model extends CI_Model{
    public function __construct() {
        $this->load->database();
    }
    
    public function create_page(){
         $slug = convert_accented_characters( url_title($this->input->post('title'),'dash',true));
        $data = array(
          'title'=>$this->input->post('title'),  
          'slug'=>$slug,  
          'body'=>$this->input->post('body'),  
          'created_by'=>$this->session->userdata('user_id') 
        );
        return $this->db->insert('pages',$data);
    }
    public function get_pages($name = false){
        if($name === FALSE){
            $this->db->select('p.id,p.title,p.body,p.slug,p.created_by,p.created_at,u.name',false);
            $this->db->from('pages as p');
            $this->db->join('users as u','u.id = p.created_by','left');
            $this->db->order_by('p.id','DESC');
            $query = $this->db->get();
            return $query->result_array() ;
        }
        $query = $this->db->get_where('pages',array('slug'=>$name));        
        $data = $query->row_array();
        return $data;

    }
    public function update_page(){
        $data = array(
            'title' => $this->input->post('title'),
            'body' => $this->input->post('body')
        );
        $this->db->set($data);
        $this->db->where('id', $this->input->post('id'));
        
        return $this->db->update('pages');
    }
    public function delete_page(){
        $this->db->where('id',$this->input->post('id'));

        return $this->db->delete('pages');
    }
}

