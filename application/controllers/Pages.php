<?php
class Pages extends CI_Controller{
    
   public function view($slug = 'home'){
        $this->load->model('page_model');
        $data['page'] = $this->page_model->get_pages($slug);
        if(empty($data['page'])){
            show_404();
        }     
        $data['title'] = $data['page']['title'];
        $this->load->model('menu_model');
        $headerdata['menus'] = $this->menu_model->get_menus();
        $this->load->view('templates/header',$headerdata);
        $this->load->view('page',$data);
        $this->load->view('templates/footer');
        
    }     
    
    public function create(){
        if(!$this->session->userdata('logged_in')){
           redirect('users/login');
       }
        $data['title']='Create page';
        $this->form_validation->set_rules('title','Cím','required');
        $this->form_validation->set_rules('body','Szöveg','required');
        if($this->form_validation->run()===FALSE){
            $this->load->view('templates/admin/header');
            $this->load->view('admin/pages/create',$data);
            $this->load->view('templates/admin/footer');           
        }
        else{
            $this->load->model('page_model');
            $this->page_model->create_page();   
            $this->session->set_flashdata('created','Page has been added');
            redirect('admin/pages');  
        }
    }
    public function edit(){
       if(!$this->session->userdata('logged_in')){
           redirect('users/login');
       }
       $name = $this->input->post('slug');
        $this->load->model('page_model');
        $data['page'] = $this->page_model->get_pages($name);
        if(empty($data['page'])){
            
            show_404();
        }
        $data['title'] = 'Modify page';       
        $this->load->view('templates/admin/header');
        $this->load->view('admin/pages/edit',$data);
        $this->load->view('templates/admin/footer');
    }
    public function update(){
               if(!$this->session->userdata('logged_in')){
           redirect('users/login');
       }
        $this->load->model('page_model');
        if($this->page_model->update_page()){
            $this->session->set_flashdata('modified','Page has been modified');
        }
        else {
            $this->session->set_flashdata('error','There was an error...');
        }
        redirect('admin/pages');
    }
    
    public function index(){          
       if(!$this->session->userdata('logged_in')){
           redirect('users/login');
       }
        $data['title']='Oldalak';
        $this->load->model('page_model');
        $data['pages'] = $this->page_model->get_pages();
        $this->load->view('templates/admin/header');
        $this->load->view('admin/pages/index',$data);
        $this->load->view('templates/admin/footer');
    
   }
   public function delete(){
             if(!$this->session->userdata('logged_in')){
           redirect('users/login');
       }
        $this->load->model('page_model');
        if($this->page_model->delete_page()){
            $this->session->set_flashdata('deleted','Page has been deleted');
        }
        else {
            $this->session->set_flashdata('error','There was an error...');
        }
        redirect('admin/pages');
   }
}
