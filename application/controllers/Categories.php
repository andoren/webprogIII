<?php

class Categories extends CI_Controller{
    
    public function add(){
        if(!$this->session->userdata('logged_in')){
           redirect('users/login');
       }
        $data['title']="Kategória készítése";
        $this->form_validation->set_rules('name',"Kategória neve",'required');
        if($this->form_validation->run()===FALSE){
             $this->load->view("templates/header");
             $this->load->view("categories/add",$data);
             $this->load->view("templates/footer");
            
        }
        else{
            $this->category_model->add_category();
            $this->session->set_flashdata('category_added','Kategória sikeresen hozzáadva.');
            redirect('categories');
        }

    }
    public function index(){
        $data['title']="Kategóriák";
        $data['categories']=$this->category_model->get_categories();
        $this->load->view('templates/header');
        $this->load->view('categories/index',$data);
        $this->load->view('templates/footer');
    }
    public function posts($id){
        $data['title']=$this->category_model->get_category($id)->name;
        $data['posts']=$this->post_model->get_posts_by_category($id);
        $this->load->model('menu_model');
        $headerdata['menus'] = $this->menu_model->get_menus();
        $this->load->view('templates/header',$headerdata);
        $this->load->view('posts/index',$data);
        $this->load->view('templates/footer');
    }
}
