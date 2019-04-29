<?php
class User_model extends CI_model{
    public function register($password){
        $data=array(
          'name'=>$this->input->post('name'),
          'username'=>$this->input->post('username'),
          'email'=>$this->input->post('email'),
          'password'=>$password,
          'privid'=>$this->input->post('privid')  
        );
        return $this->db->insert('users',$data);
    }
    public function login($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $result = $this->db->get('users');
        if($result->num_rows()==1){
            return $result->row(0)->id;
        }
        else{
            return false;
        }
    }
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

