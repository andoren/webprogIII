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
            $this->log_model->log('Menu created',$this->session->userdata('user_id'));
            $this->session->set_flashdata('menu_created','Menu has been added');
            redirect('admin/menu');
        }
        
    }
    public function edit(){
        if(!$this->session->userdata('logged_in')){
           redirect('users/login');
        }
        $data['title'] = "Modify menu";
        $id = $this->input->post('id');
        $this->load->model('menu_model');
        $data['menu'] = $this->menu_model->get_menus($id);
        if(empty($data['menu'])){
            
            show_404();
        }  
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
        
        $this->load->model('menu_model');
        
        $result = $this->menu_model->delete_menu();
        if($result){
            $this->session->set_flashdata('post_updated','Menu has been deleted');
            $this->log_model->log('Menu deleted',$this->session->userdata('user_id'));
        }else{
            $this->session->set_flashdata('error','There was an error while deleting the menu.');
        }
        redirect('admin/menu');
       
    }
    public function update(){
        if(!$this->session->userdata('logged_in')){
           redirect('users/login');
       }
       $this->load->model('menu_model');
      $this->menu_model->update_menu();
      $this->log_model->log('Menu updated',$this->session->userdata('user_id'));
      $this->session->set_flashdata('post_updated','Menu has been updated');
      redirect('admin/menu');
       
    }
    
}

