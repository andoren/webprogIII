<?php

class Pdfs extends CI_Controller{

    public function create($slug){
        $this->load->library('pdf');
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
        $this->pdf->load_view('posts/view',$data);  
  	$this->pdf->render();
  	$this->pdf->stream($slug.".pdf");
    }
}

