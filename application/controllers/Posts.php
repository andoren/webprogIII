<?php

class Posts extends CI_Controller{
    public function index(){
        $data['title']='Most recent posts';
        $data['posts'] = $this->post_model->get_posts();
        $this->load->model('category_model');
        foreach ($data['posts'] as $key => $post){
            $data['posts'][$key]['categories'] = $this->category_model->get_postcategories($post['id']);
        }        
        $this->load->model('menu_model');
        $headerdata['menus'] = $this->menu_model->get_menus();
        $this->load->view('templates/header',$headerdata);
        $this->load->view('posts/index',$data);
        $this->load->view('templates/footer');       
    }
   public function view($slug = NULL){
        $data['post'] = $this->post_model->get_posts($slug);
        $postid = $data['post']['id'];
        $this->load->model('comment_model');
        $data['comments'] = $this->comment_model->get_comments($postid);
        if(empty($data['post'])){
            show_404();
        }     
        $data['title'] = $data['post']['title'];
        $this->load->model('menu_model');
        $headerdata['menus'] = $this->menu_model->get_menus();
        $this->load->view('templates/header',$headerdata);
        $this->load->view('posts/view',$data);
        $this->load->view('templates/footer');       
    }
    
   public function create(){
       if(!$this->session->userdata('logged_in')){
           redirect('users/login');
       }
        $data['title']='Create post';
        $data['categories'] = $this->post_model->get_categories();
        $this->form_validation->set_rules('title','Cím','required');
        $this->form_validation->set_rules('body','Szöveg','required');
        if($this->form_validation->run()===FALSE){
            $this->load->view('templates/admin/header');
            $this->load->view('posts/create',$data);
            $this->load->view('templates/admin/footer');           
        }
        else{
            if(empty($this->input->post('check_list'))){
            $this->session->set_flashdata('error','You must select atlest one category');
            redirect('admin/posts/create');  
            }
                $config['upload_path']          = './assets/images/posts/thumbnails/';
                $config['allowed_types']        = 'gif|jpg|png|PNG|JPG';
                $config['max_size']             = 2000;
                $config['max_width']            = 2000;
                $config['max_height']           = 2000;

                $this->load->library('upload', $config);
                if(!$this->upload->do_upload()){              
                    $post_image = 'noimage.jpg';
                }
                else{
                    $data = array('upload_data' => $this->upload->data());
                    $post_image = $_FILES['userfile']['name'];
                }
            $this->post_model->create_post($post_image);   
            $this->session->set_flashdata('post_created','Post has been added');
            redirect('posts');  
        }

   }
   public function delete(){
       $id = $this->input->post('id');
       $this->post_model->delete_post($id);  
       redirect('posts');
   }
   public function edit(){
       if(!$this->session->userdata('logged_in')){
           redirect('users/login');
       }
        $slug = $this->input->post('slug');

        $data['post'] = $this->post_model->get_posts($slug);
        if(empty($data['post'])){
            show_404();
        }
        if($this->session->userdata('user_id')!=$data['post']['created_by']){
            redirect('posts');
        }
        $data['categories'] = $this->post_model->get_categories();
        $data['title'] = 'Edit post';
        $this->load->view('templates/admin/header');
        $this->load->view('posts/edit',$data);
        $this->load->view('templates/admin/footer');
   }
   public function update(){
        if(!$this->session->userdata('logged_in')){
           redirect('users/login');
       }
      $this->post_model->update_post();
      $this->session->set_flashdata('post_updated','Post has been updated');
      redirect('posts');
   }
   public function createpost_csv(){
       $row = 1;
        if (($handle = fopen(base_url()."assets/csv/temp.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);
        echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
    }   
   }
}