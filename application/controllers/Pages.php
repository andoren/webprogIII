<?php
class Pages extends CI_Controller{
    
    public function view ($page = 'fooldal'){
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();            
        }
        $data['title'] = ucfirst($page);
        $this->load->view('templates/header');
        $this->load->view('pages/'.$page,$data);
        $this->load->view('templates/footer');
        
    }
    public function create(){
        if(!$this->session->userdata('logged_in')){
           redirect('users/login');
       }
        $data['title']='Oldal készítése';
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
            $this->session->set_flashdata('post_created','Oldal sikeresen hozzáadva.');
            redirect('admin');  
        }

    }
}
