<?php
class Users extends CI_Controller {
    
    public function register(){
               if(!$this->session->userdata('logged_in')){
           redirect('users/login');
       }
        $data['title']="Registration";
        $data['privileges'] = $this->privilege_model->get_privileges();
        $this->form_validation->set_rules('name','Név','required');
        $this->form_validation->set_rules('username','Felhasználónév','required');
        $this->form_validation->set_rules('email','E-mail cím','required');
        $this->form_validation->set_rules('password','Jelszó','required');
        $this->form_validation->set_rules('password2','Jelszó megerősítés','matches[password]');
        if($this->form_validation->run()===FALSE){
            $this->load->view('templates/header');
            $this->load->view('users/register',$data);
            $this->load->view('templates/footer');
        }else{
            $password = sha1($this->input->post('password'));
            $this->load->model('user_model');
            $this->user_model->register($password);
            $this->session->set_flashdata('user_registered','Sikeres regisztrálás. Most már be lehet jelentkezni.');
            redirect('posts');
        }
    }
    public function login(){
        $data['title']="Log in";
        $this->form_validation->set_rules('username','Felhasználónév','required');
        $this->form_validation->set_rules('password','Jelszó','required');
        if($this->form_validation->run()===FALSE){
                            $this->load->model('menu_model');
        $headerdata['menus'] = $this->menu_model->get_menus();
            $this->load->view('templates/header',$headerdata);
            $this->load->view('users/login',$data);
            $this->load->view('templates/footer');
        }else{
            $password = sha1($this->input->post('password'));
            $username = $this->input->post('username');
            $this->load->model('user_model');
            $user_id = $this->user_model->login($username,$password);
            if($user_id){
                $user_data = array(
                    'user_id'=>$user_id,
                    'username'=>$username,
                    'logged_in'=> true,
                    
                );
                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('user_loggedin','You are logged in. Now you can edit the website '.$username);
                redirect('posts');
            }
            else{
               $this->session->set_flashdata('user_error_loggedin','Error.'); 
               redirect('users/login');
            }

        }    
    }
    public function logout(){
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('user_loggedout','Logged out. Goodbye!:)' );
        redirect('users/login');
    }
}   

