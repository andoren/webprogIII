<?php

class Page_model extends CI_Model{
    public function __construct() {
        $this->load->database();
    }
    
    public function create_page(){
    $filename = $this->input->post('title');
    $content  = $this->input->post('body');
    if($filename != null){
        $handle = fopen("application/views/pages/$filename.php", "w");
        fwrite($handle, $content);
        fclose($handle);
        return true;        
    }
    else{
        return false;
    }
    }
}

