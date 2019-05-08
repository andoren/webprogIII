<!doctype html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
    <script src="https://bootswatch.com/_vendor/jquery/dist/jquery.min.js"></script>
    <script src="https://bootswatch.com/_vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://bootswatch.com/_assets/js/custom.js"></script>
    <title>Misi első blog weboldala</title>             
    </head>
    <body style="padding-top: 0px" >       

        <div class="wrapper">
             <div class="navbar navbar-expand-lg  navbar-dark bg-dark">
      <div class="container">
        <a href="<?php echo base_url(); ?>" class="navbar-brand" style="font-size: 30px">Misi blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>admin">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Posts <span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="themes">
                <a class="dropdown-item" href="<?php echo base_url()?>admin/posts/create">Create</a>
                <a class="dropdown-item" href="<?php echo base_url()?>admin/posts/">Modify</a>
                <a class="dropdown-item" href="<?php echo base_url()?>admin/posts/index_csv">Creat from csv</a>
              </div>
            </li>
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Pages <span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="themes">
                <a class="dropdown-item" href="<?php echo base_url()?>admin/pages/create">Create</a>
                <a class="dropdown-item" href="<?php echo base_url()?>admin/pages/">Modify</a>

              </div>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download">Categories <span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="download">
                <a class="dropdown-item" href="<?php echo base_url()?>categories/add">Create</a>
                <a class="dropdown-item" href="<?php echo base_url()?>admin/categories/index">Modify</a>
              </div>
            </li>
                        <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download">Menus <span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="download">
                <a class="dropdown-item" href="<?php echo base_url()?>admin/menu/create">Create</a>
                <a class="dropdown-item" href="<?php echo base_url()?>admin/menu/">Modify</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>admin/images/index">Gallery</a>
            </li>
            <?php 
                    if($this->session->userdata('privilege')=="admin"):?>
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download">Users <span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="download">
                <a class="dropdown-item" href="<?php echo base_url()?>admin/users/create">Register</a>
                <a class="dropdown-item" href="<?php echo base_url()?>admin/users/index">Modify</a>
              </div>
            </li>
            <?php endif;?>

            
          </ul>

          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>users/logout" >Log out</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
           
           
        <div class="container">
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
            <?php if($this->session->flashdata('error')):?>
                <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('error').'</p>' ?>
            <?php endif; ?>
            <?php if($this->session->flashdata('modified')):?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('modified').'</p>' ?>
            <?php endif; ?>
            <?php if($this->session->flashdata('success')):?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('success').'</p>' ?>
            <?php endif; ?>