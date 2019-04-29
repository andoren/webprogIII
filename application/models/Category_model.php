<?php
class Category_model extends CI_Model{
    public function __construct() {
        $this->load->database();
    }
    public function add_category(){
        $data=array(
            'name'=>$this->input->post('name'),
            'created_by'=>$this->session->userdata('user_id') 
        );
        return $this->db->insert('categories',$data);
    }
    public function get_Categories(){
        $this->db->order_by('name');
        $query = $this->db->get('categories');
        return $query->result_array();
    }
    public function get_Category($id){
        $query = $this->db->get_where('categories',array('id' => $id));
        return $query->row();
    }
}

