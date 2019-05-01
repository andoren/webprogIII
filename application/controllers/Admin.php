<?php

class Admin extends CI_Controller{
        public function index(){
            if($this->session->userdata('logged_in')){
            $data['title'] = "Az oldal szerkesztésére itt van lehetőség.";
            $this->load->view('templates/admin/header');
            $this->load->view('admin/index',$data);
            $this->load->view('templates/admin/footer');  
            }
            else{
                redirect('users/login');
            }
    }
    public function posts(){
        $data['title']='Posztok';
        $data['posts'] = $this->post_model->get_posts();
        $this->load->view('templates/admin/header');
        $this->load->view('admin/posts',$data);
        $this->load->view('templates/admin/footer');
    }

}

