<?php

class Categories extends CI_Controller{
    
    public function add(){
        if(!$this->session->userdata('logged_in')){
           redirect('users/login');
       }
        $data['title']="Create category";
        $this->form_validation->set_rules('name',"Kategória neve",'required');
        if($this->form_validation->run()===FALSE){
             $this->load->view("templates/admin/header");
             $this->load->view("categories/add",$data);
             $this->load->view("templates/admin/footer");
            
        }
        else{
            $this->category_model->add_category();
            $this->log_model->log('Added category',$this->session->userdata('user_id'));
            $this->session->set_flashdata('category_added','Category has been added');
            redirect('admin/categories/index');
        }

    }
    
    public function index(){
        $data['title']="Categories";
        $data['categories']=$this->category_model->get_categories();
        $this->load->model('menu_model');
        $headerdata['menus'] = $this->menu_model->get_menus();
        $this->load->view('templates/header',$headerdata);
        $this->load->view('categories/index',$data);
        $this->load->view('templates/footer',$headerdata);
    }
    public function index_admin(){
        $data['title']="Categories";
        $data['categories']=$this->category_model->get_categories();
        $this->load->view('templates/admin/header');
        $this->load->view('admin/categories/index',$data);
        $this->load->view('templates/admin/footer');
    }
    public function posts($id){
        $data['title']=$this->category_model->get_category($id)['name'];
        $data['posts']=$this->post_model->get_posts_by_category($id);
        $this->load->model('menu_model');
        $headerdata['menus'] = $this->menu_model->get_menus();
        $this->load->view('templates/header',$headerdata);
        $this->load->view('posts/index',$data);
        $this->load->view('templates/footer',$headerdata);
    }
    public function edit(){
       if(!$this->session->userdata('logged_in')){
           redirect('users/login');
       }
        $id = $this->input->post('id');
        $this->load->model('category_model');
        $data['cat'] = $this->category_model->get_Category($id);
        if(empty($data['cat'])){
            
            show_404();
        }
        $data['title'] = 'Modify category';       
        $this->load->view('templates/admin/header');
        $this->load->view('admin/categories/edit',$data);
        $this->load->view('templates/admin/footer');
    }
    public function update(){
       if(!$this->session->userdata('logged_in')){
           redirect('users/login');
       }
        $this->load->model('category_model');
        if($this->category_model->update_category()){
            $this->log_model->log('Category modified',$this->session->userdata('user_id'));
            $this->session->set_flashdata('modified','Category has been modified');
        }
        else {
            $this->session->set_flashdata('error','There was an error...');
        }
        redirect('admin/categories/index');
    }
    public function delete(){
       if(!$this->session->userdata('logged_in')){
           redirect('users/login');
       }
        $this->load->model('category_model');
        if($this->category_model->delete_category()){
            $this->session->set_flashdata('deleted','Category has been deleted');
            $this->log_model->log('Category deleted',$this->session->userdata('user_id'));
        }
        else {
            $this->session->set_flashdata('error','There was an error...');
        }
        redirect('admin/categories/index');
    }
}
