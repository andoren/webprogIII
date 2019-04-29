<?php

class Privilege_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function get_privileges(){
        $this->db->order_by('name');
        $query = $this->db->get('privileges');
        return $query->result_array();
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

