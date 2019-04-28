<?php
class Post_Model extends CI_Model{
    public function __construct() {
        $this->load->database();
    }
    public function get_Posts($slug=FALSE){
        if($slug === FALSE){
            $this->db->order_by('posts.id','DESC');
            $this->db->join('categories','categories.id = posts.catid');
            $query = $this->db->get('posts');
            return $query->result_array();
        }
        $query = $this->db->get_where('posts',array('slug'=>$slug));
        
        $data = $query->row_array();
        $data['body'] = str_replace('&','&amp',$data['body']);  
        return $data;
    }
    public function create_Post($post_image){
        $slug = convert_accented_characters( url_title($this->input->post('title'),'dash',true));
        $data = array(
          'title'=>$this->input->post('title'),  
          'slug'=>$slug,  
          'body'=>$this->input->post('body'),  
          'catid'=>$this->input->post('catid'),
            'thumbimg' => $post_image
        );
        return $this->db->insert('posts',$data);
    }
    public function delete_Post($id){
        $this->db->where('id',$id);
        $this->db->delete('posts');
        return true;
    }
    public function update_Post(){
          $slug = url_title($this->input->post('title'));
          $data = array(
          'title'=>$this->input->post('title'),  
          'slug'=>$slug,  
          'body'=>$this->input->post('body'),  
          'catid'=>$this->input->post('catid')
        );
         
          $this->db->where('id',$this->input->post('id'));
        return $this->db->update('posts',$data);
    }
    public function get_Categories(){
        $this->db->order_by('name');
        $query = $this->db->get('categories');
        return $query->result_array();
    }
}


