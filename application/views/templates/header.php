<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://bootswatch.com/3/superhero/bootstrap.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/12.1.0/classic/ckeditor.js"></script>
    <title>Misi első blog weboldala</title>
        
        
    </head>
    <body style="padding-top: 0px" >
        
        <nav class="navbar navbar-default ">
              <div class="container">
                <div class="navbar-header">
                  <a href="<?php echo base_url(); ?>" class="navbar-brand">Misi blog</a>

                </div>
                
                  <ul class="nav navbar-nav">
                    <li>
                      <a href="<?php echo base_url()?>">Főoldal</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url()?>posts">Posztok</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url()?>rolunk">Rólunk</a>
                    </li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="https://github.com/andoren" target="_blank">Github oldalam</a></li>
                    <li><a href="https://uni-eszterhazy.hu/" target="_blank">EKE weboldal</a></li>
                    <?php if(!$this->session->userdata('logged_in')):?>
                    <li><a href="<?php echo base_url()?>users/login" >Bejelentkezés</a></li>
                    <?php endif;?>
                    <?php if($this->session->userdata('logged_in')):?>
                    <li><a href="<?php echo base_url()?>users/logout" >Szerkesztés</a></li>
                    <li><a href="<?php echo base_url()?>users/logout" >Kijelentkezés</a></li>
                    
                    <?php endif;?>
                    
                  </ul>               
              </div>
        </nav>
        <div  class ="container">
            <?php if($this->session->flashdata('user_registered')):?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>' ?>
            <?php endif; ?>
            <?php if($this->session->flashdata('post_created')):?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>' ?>
            <?php endif; ?>
            <?php if($this->session->flashdata('post_updated')):?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>' ?>
            <?php endif; ?>
            <?php if($this->session->flashdata('category_added')):?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_added').'</p>' ?>
            <?php endif; ?>
            <?php if($this->session->flashdata('user_loggedin')):?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>' ?>
            <?php endif; ?>
            <?php if($this->session->flashdata('user_error_loggedin')):?>
                <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('user_error_loggedin').'</p>' ?>
            <?php endif; ?>


