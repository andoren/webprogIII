<?php
class Post_Model extends CI_Model{
    public function __construct() {
        $this->load->database();
    }
    public function get_Posts($slug=FALSE){
        if($slug === FALSE){
            $this->db->select('p.id,p.thumbimg,p.title,p.body,p.slug,p.created_by,p.created_at,u.name',false);
            $this->db->from('posts as p');
            $this->db->join('users as u','u.id = p.created_by','left');
            $this->db->order_by('p.id','DESC');
            $query = $this->db->get();
            return $query->result_array();
        }
        $query = $this->db->get_where('posts',array('slug'=>$slug));        
        $data = $query->row_array();
        return $data;
    }
    public function create_Post($post_image,$data = false){
        
        if($data===false){
        $slug = convert_accented_characters( url_title($this->input->post('title'),'dash',true));
        $data = array(
          'title'=>$this->input->post('title'),  
          'slug'=>$slug,  
          'body'=>$this->input->post('body'),  
          'thumbimg' => $post_image,
          'created_by'=>$this->session->userdata('user_id') 
        );
        $query =  $this->db->insert('posts',$data);
        $chlist = $this->input->post('check_list');
        $id = $this->db->get_where('posts',array('slug'=>$slug))->row_array()['id'];  
        foreach ($chlist as $category){
            $this->db->insert('postcategories',array('postid'=>$id,'catid'=>$category));
        }
        }
        else{
        $slug = convert_accented_characters( url_title($data['title'],'dash',true));
        $temp = array(
          'title'=>$data['title'],  
          'slug'=>$slug,  
          'body'=>$data['body'],  
          'thumbimg' => $post_image,
          'created_by'=>$data['userid']
        );
        $query =  $this->db->insert('posts',$temp);
        $id = $this->db->get_where('posts',array('slug'=>$slug))->row_array()['id'];  
        $this->db->insert('postcategories',array('postid'=>$id,'catid'=>$data['catid']));
        }                   
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
        );
        $this->delete_post_categories($this->input->post('id')); 
        
        $chlist = $this->input->post('check_list'); 
        foreach ($chlist as $category){
            $this->db->insert('postcategories',array('postid'=>$this->input->post('id'),'catid'=>$category));
        }
        $this->db->where('id',$this->input->post('id'));
        return $this->db->update('posts',$data);
    }
    public function get_Categories(){
        $this->db->order_by('name');
        $query = $this->db->get('categories');
        return $query->result_array();
    }
    public function get_posts_by_category($id){
            $this->db->select('p.id,p.thumbimg,p.title,p.body,p.slug,p.created_by,p.created_at,c.name as catname, c.id as cid',false);
            $this->db->join('categories as c','c.id = p.catid');
            $this->db->order_by('p.id','DESC');
            $query = $this->db->get_where('posts as p',array('p.catid'=>$id));
            return $query->result_array();
    }
    public function createposts_csv($file){
           $row = 1;
           if (($handle = fopen(base_url()."assets/csv/".$file, "r")) !== FALSE) {
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    $temp = array(
                        'title' => $data[0],
                        'body'=>$data[1],
                        'catid'=>$data[2],
                        'userid'=>$data[3]
                        
                    );
                    $this->create_Post($data[4], $temp);
                }
            fclose($handle);
            }
           
    }
    public function delete_post_categories($id){
        $this->db->delete('postcategories',array('postid'=>$id));
    }
}


