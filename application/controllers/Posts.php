<?php

class Posts extends CI_Controller{
    public function index(){
        $data['title']='Legfrissebb cikkek';
        $data['posts'] = $this->post_model->get_posts();
        $this->load->view('templates/header');
        $this->load->view('posts/index',$data);
        $this->load->view('templates/footer');
        
    }
   public function view($slug = NULL){

        $data['post'] = $this->post_model->get_posts($slug);
        if(empty($data['post'])){
            show_404();
        }     
        $data['title'] = $data['post']['title'];
        $this->load->view('templates/header');
        $this->load->view('posts/view',$data);
        $this->load->view('templates/footer');
        
    }
    
   public function create(){
              if(!$this->session->userdata('logged_in')){
           redirect('users/login');
       }
        $data['title']='Poszt készítése';
        $data['categories'] = $this->post_model->get_categories();
        $this->form_validation->set_rules('title','Cím','required');
        $this->form_validation->set_rules('body','Szöveg','required');
        if($this->form_validation->run()===FALSE){
            $this->load->view('templates/header');
            $this->load->view('posts/create',$data);
            $this->load->view('templates/footer');           
        }
        else{
                $config['upload_path']          = './assets/images/posts/thumbnails/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 1024;

                $this->load->library('upload', $config);
                if(!$this->upload->do_upload()){
                    $errors = array('error' => $this->upload->display_errors());                   
                    $post_image = 'noimage.jpg';
                }
                else{
                    $data = array('upload_data' => $this->upload->data());
                    $post_image = $_FILES['userfile']['name'];
                }
            $this->post_model->create_post($post_image);   
            $this->session->set_flashdata('post_created','Poszt sikeresen hozzáadva.');
            redirect('posts');  
        }

   }
   public function delete($id){
       $this->post_model->delete_post($id);  
       redirect('posts');
   }
   public function edit($slug){
       if(!$this->session->userdata('logged_in')){
           redirect('users/login');
       }
        $data['post'] = $this->post_model->get_posts($slug);
        if(empty($data['post'])){
            show_404();
        }
        if($this->session->userdata('user_id')!=$data['post']['created_by']){
            redirect('posts');
        }
        $data['categories'] = $this->post_model->get_categories();
        $data['title'] = 'Poszt szerkesztése';
        $this->load->view('templates/header');
        $this->load->view('posts/edit',$data);
        $this->load->view('templates/footer');
   }
   public function update(){
        if(!$this->session->userdata('logged_in')){
           redirect('users/login');
       }
      $this->post_model->update_post();
      $this->session->set_flashdata('post_updated','Poszt sikeresen frissítve.');
      redirect('posts');
      
   }
}