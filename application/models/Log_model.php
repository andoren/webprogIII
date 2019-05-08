<?php

class Log_model extends CI_Model{
    public function __construct() {
        $this->load->database();
    }
    public function log($action,$userid){
        $data = array(
            'action' => $action,
            'userid' =>$userid
        );
        return $this->db->insert('logs',$data);
    }
}

