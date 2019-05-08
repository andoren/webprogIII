<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/12.1.0/classic/ckeditor.js"></script>
    <script src="https://bootswatch.com/_vendor/jquery/dist/jquery.min.js"></script>
    <script src="https://bootswatch.com/_vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://bootswatch.com/_assets/js/custom.js"></script>
    <title>Misi első blog weboldala</title>
        
        
    </head>
    <body class="d-flex flex-column" style="padding-top: 0px" >
        
        <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
              <div class="container-fluid">
                <div class="navbar-brand">
                  <a href="<?php echo base_url(); ?>" class="navbar-brand">Misi blog</a>

                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                  <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav">
                      <?php foreach ($menus as $menu):?>
                                  <li class="nav-item">
              <a class="nav-link" href="
                              <?php if($menu['target']==0)
                              {
                              echo base_url().$menu['page_slug'];
                              
                              }
                              else {
                                  echo $menu['link'];
                          }?>" <?php if($menu['target'] == 1) echo 'target="_blank"' ?> > <?php echo $menu['name']; ?></a>
            </li>

                      <?php endforeach;?>
                  </ul>

                  <ul class="nav navbar-nav ml-auto">
                    <li class="nav-link"><a class="nav-link" href="https://github.com/andoren" target="_blank">Github oldalam</a></li>
                    <li class="nav-link"><a class="nav-link" href="https://uni-eszterhazy.hu/" target="_blank">EKE weboldal</a></li>
                    <?php if(!$this->session->userdata('logged_in')):?>
                    <li class="nav-link"><a class="nav-link" href="<?php echo base_url()?>users/login" >Log in</a></li>
                    <?php endif;?>
                    <?php if($this->session->userdata('logged_in')):?>
                    <li class="nav-link"><a class="nav-link" href="<?php echo base_url()?>admin" >Edit</a></li>
                    <li class="nav-link"><a class="nav-link" href="<?php echo base_url()?>users/logout" >Log out</a></li>
                    
                    <?php endif;?>
                    
                  </ul>               
              </div>
                  </div>
        </nav>
        <div style="margin-top:20px"  class =" container d-flex h-100 flex-column">
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
            <?php if($this->session->flashdata('menu_created')):?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('menu_created').'</p>' ?>
            <?php endif; ?>
            <?php if($this->session->flashdata('error')):?>
                <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('error').'</p>' ?>
            <?php endif; ?>
            <?php if($this->session->flashdata('success')):?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('success').'</p>' ?>
            <?php endif; ?>


