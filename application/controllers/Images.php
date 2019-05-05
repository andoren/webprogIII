<?php

class Images extends CI_Controller{
    
    public function get_images(){
        
        $dirname = ".assets/images/iconized/";
        $images = glob($dirname."*.{jpg,gif,png}",GLOB_BRACE);

        foreach($images as $image) {
             echo '<img src="'.$image.'" /><br />';
        }
        
    }
}