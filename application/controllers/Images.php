<?php

class Images extends CI_Controller{
    
    public function index(){
        $data['title']="Image gallery";
        $this->load->view('templates/admin/header');
        $this->load->view('admin/images/index',$data);
        $this->load->view('templates/admin/footer');

    }
    public function add(){
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

            $this->session->set_flashdata('success','Picture has been added');
            redirect('admin/images/index');  
    }
    public function delete(){
        $image = $this->input->post('imgname');
        if(unlink($image)){
            $this->session->set_flashdata('success','Picture has been deleted');
        }
        else {
            $this->session->set_flashdata('error','There was an error...');
        }
        redirect('admin/images/index');
    }
}