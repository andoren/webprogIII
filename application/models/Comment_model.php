<?php

class Comment_model extends CI_Model{
    public function __construct() {
        $this->load->database();
    }
    public function create_comment($postid){
        $data = array(
          'postid'=>$postid,
          'name'=> $this->input->post('name'),
            'email'=>$this->input->post('email'),
            'body'=>$this->input->post('body')
        );
        return $this->db->insert('comments',$data);
    }
    public function get_comments($postid){
        $query = $this->db->get_where('comments',array('postid'=>$postid));
        return $query->result_array();
    }
}
