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
        $this->db->join('privileges as p','p.id = privid');
        $this->db->select('u.id,u.name as fullname,privid,email,username,created_at,p.name as pname');      
        $result = $this->db->get('users as u');
        if($result->num_rows()==1){

            return $result->row_array();
        }
        else{
            return false;
        }
    }
    public function get_users($id = FALSE){
        if($id===FALSE){
        $this->db->join('privileges as p','p.id = privid');
        $this->db->select('u.id,u.name as fullname,privid,email,username,created_at,p.name as pname');      
        $query = $this->db->get('users as u');
            return $query->result_array();
        }else{
            $this->db->join('privileges as p','p.id = privid');
            $this->db->select('u.id,u.name as fullname,privid,email,username,created_at,p.name');
            $query = $this->db->get_where('users as u',array('u.id'=>$id));
                          
            return $query->row_array();
        }
    }
    public function update_user($password){
        $data=array(
          'name'=>$this->input->post('name'),
          'username'=>$this->input->post('username'),
          'email'=>$this->input->post('email'),
          'password'=>$password,
          'privid'=>$this->input->post('privid')  
        );
        $this->db->set($data);
        $this->db->where('id', $this->input->post('id'));
        
        return $this->db->update('users');
    }
    public function delete_user(){
        $this->db->where('id',$this->input->post('id'));

        return $this->db->delete('users');
    }
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

