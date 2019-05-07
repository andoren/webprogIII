<?php

class Admin extends CI_Controller{
        public function index(){
            if($this->session->userdata('logged_in')){
            $data['title'] = "You can modify the website here.";
            $this->load->view('templates/admin/header');
            $this->load->view('admin/index',$data);
            $this->load->view('templates/admin/footer');  
            }
            else{
                redirect('users/login');
            }
    }
    public function posts(){
        $data['title']='Posts';
        $data['posts'] = $this->post_model->get_posts();
        $this->load->model('category_model');
        foreach ($data['posts'] as $key => $post){
            $data['posts'][$key]['categories'] = $this->category_model->get_postcategories($post['id']);
        }        
        $this->load->view('templates/admin/header');
        $this->load->view('admin/posts',$data);
        $this->load->view('templates/admin/footer');
    }

}

