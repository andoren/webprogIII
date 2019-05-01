<?php

class Page_model extends CI_Model{
    public function __construct() {
        $this->load->database();
    }
    
    public function create_page(){
    $filename = convert_accented_characters($this->input->post('title'));
    $content  = $this->input->post('body');
    if($filename != null){
        $handle = fopen("application/views/pages/$filename.php", "w+");
        fwrite($handle, $content);
        fclose($handle);
        return true;        
    }
    else{
        return false;
    }
    }
    public function get_pages($name = false){
        if($name === false){
            $dir = "application/views/pages";
            $files = scandir($dir);
            $data = array();
            foreach ($files as $file) {
                if($file=='.' || $file == '..') continue;
                 $filename = "application/views/pages/".$file;
                 $handle = fopen($filename,"r");
                    $body = fread($handle,filesize($filename));
                    $data[$file] = array(
                        'title' => explode('.',$file)[0],
                        'body' =>  $body
                    );
        }
            return $data;
        }
        else
        {
            $dir = "application/views/pages";
            $files = scandir($dir);
            $data = array();
            foreach ($files as $file) {
                if($file=='.' || $file == '..') continue;
                if(explode('.',$file)[0] == $name){
                   $filename = "application/views/pages/".$file;
                 $handle = fopen($filename,"r");
                    $body = fread($handle,filesize($filename));
                    $data = array(
                        'title' => explode('.',$file)[0],
                        'body' =>  $body
                    );
                }
             
            }
            return $data;
        }

    }
}

