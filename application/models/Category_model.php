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
        $this->db->order_by('c.id');
        $this->db->select('c.id,c.name,c.created_at,c.created_by,u.name as fullname',false);
        $this->db->join('users as u','u.id = c.created_by','left');

        $query = $this->db->get('categories as c');
        return $query->result_array();
    }
    public function get_Category($id){

        $query = $this->db->get_where('categories',array('id' => $id));
        return $query->row_array();
    }
    public function update_category(){
        $data = array(
            'name' => $this->input->post('name'),
        );
        $this->db->set($data);
        $this->db->where('id', $this->input->post('id'));
        
        return $this->db->update('categories');
    }
    public function delete_category(){
        $this->db->where('id',$this->input->post('id'));
        return $this->db->delete('categories');
    }
}

