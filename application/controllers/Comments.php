<?php
 
class Comments extends CI_Controller{
    public function create($post_id){
        $slug = $this->input->post('slug');
        $this->load->model('post_model');
        $data['post'] = $this->post_model->get_posts($slug);
                $this->load->model('menu_model');
        $headerdata['menus'] = $this->menu_model->get_menus();

        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','E-mail','required');
        $this->form_validation->set_rules('body','Body','required');
        if($this->form_validation->run()===FALSE){
            $this->load->view('templates/header',$headerdata);
            $this->load->view('posts/view',$data);
            $this->load->view('templates/footer');
        }
        else {
            $this->load->model(comment_model);
            $this->comment_model->create_comment($post_id);
            redirect('posts/'.$slug);
        }
        
    }
    
}
