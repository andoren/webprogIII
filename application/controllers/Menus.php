<?php

class Menus extends CI_Controller{

    public function index(){
               if(!$this->session->userdata('logged_in')){
           redirect('users/login');
       }
        $data['title'] = "Modify menus";
        $this->load->model('menu_model');
        $data['menus'] = $this->menu_model->get_menus();
        $this->load->view('templates/admin/header');
        $this->load->view('admin/menu/index',$data);
        $this->load->view('templates/admin/footer'); 
    }
    
    public function create(){
      if(!$this->session->userdata('logged_in')){
           redirect('users/login');
       }
        $data['title']='Create menu';
                $this->load->model('page_model');
        $data['pages'] = $this->page_model->get_pages();
        $this->form_validation->set_rules('name','Név','required');


        if($this->form_validation->run()===FALSE){
            $this->load->view('templates/admin/header');
            $this->load->view('admin/menu/create',$data);
            $this->load->view('templates/admin/footer');           
        }else{
            
            $this->load->model('menu_model');
            $this->menu_model->create_menu();
            $this->session->set_flashdata('menu_created','Menu has been added');
            redirect('admin/menu');
        }
        
    }
    public function edit($name){
        die($name);
        $data['title'] = "Modify menu";
        $this->load->model('menu_model');
        $data['menu'] = $this->menu_model->get_menus($name);
        $this->load->model('page_model');
        $data['pages'] = $this->page_model->get_pages();
        $this->load->view('templates/admin/header');
        $this->load->view('admin/menu/edit',$data);
        $this->load->view('templates/admin/footer');
   }
        
    
    public function delete(){
        if(!$this->session->userdata('logged_in')){
           redirect('users/login');
       }
       
    }
    public function update(){
        if(!$this->session->userdata('logged_in')){
           redirect('users/login');
       }
      $this->post_model->update_post();
      $this->session->set_flashdata('post_updated','Menu has been updated');
      redirect('menu');
       
    }
    
}

