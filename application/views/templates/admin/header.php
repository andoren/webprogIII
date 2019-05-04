<!doctype html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://bootswatch.com/3/superhero/bootstrap.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
    <title>Misi első blog weboldala</title>             
    </head>
    <body style="padding-top: 0px" >
        
        
        
        <div  class ="container">
            <nav class="sidenav ">
              <div >
                  <ul>
                      <li style="padding-left: 0">
                        <div class="navbar-header" >
                            <a href="<?php echo base_url(); ?>" class="navbar-brand" style="font-size: 30px">Misi blog</a>
                        </div>                  
                        <br>
                        <br>
                        <hr style="color:white;">
                    </li>
                    <li>
                      <a href="<?php echo base_url()?>/admin">Home</a>
                    </li>
                    <li>
                        <div class="dropdown">
                            <a href="#" class="dropbtn">Posts</a>
                                <div class="dropdown-content">
                                    <a href="<?php echo base_url()?>admin/posts/create">Create</a>
                                    <a href="<?php echo base_url()?>admin/posts/">Modify</a>
                                </div>
                        </div> 
                    </li>
                    <li>
                       <div class="dropdown">
                         <a href="#" class="dropbtn">Pages</a>
                                <div class="dropdown-content">
                                    <a href="<?php echo base_url()?>admin/pages/create">Create</a>
                                    <a href="<?php echo base_url()?>admin/pages/">Modify</a>                                    
                                </div>
                        </div> 
                    </li>
                    <li>
                       <div class="dropdown">
                         <a href="#" class="dropbtn">Categories</a>
                                <div class="dropdown-content">
                                    <a href="<?php echo base_url()?>admin/posts/create">Create</a>
                                    <a href="<?php echo base_url()?>admin/posts/update">Modify</a>
                                </div>
                        </div> 
                    </li>
                    <li>
                       <div class="dropdown">
                         <a href="#" class="dropbtn">Menus</a>
                                <div class="dropdown-content">
                                    <a href="<?php echo base_url()?>admin/menu/create">Create</a>
                                     <a href="<?php echo base_url()?>admin/menu">Modify</a>  
                                </div>
                        </div> 
                    </li>
                    <li>
                       <div class="dropdown">
                         <a href="#" class="dropbtn">Galery</a>
                                <div class="dropdown-content">
                                    <a href="<?php echo base_url()?>admin/posts/create">Add</a>
                                    <a href="<?php echo base_url()?>admin/posts/update">Modify</a>
                                </div>
                        </div> 
                    </li>
                    <?php 
                    if($this->session->userdata('user_id')==1)
                    echo'                    <li>
                        <div class="dropdown">
                         <a href="#" class="dropbtn">Users</a>
                                <div class="dropdown-content">
                                    <a href="<?php echo base_url()?>admin/posts/create">Register</a>
                                    <a href="<?php echo base_url()?>admin/posts/update">Modify</a>
                                </div>
                        </div> 
                    </li>';
                    
                    ?>

                    <li style=" position:absolute; bottom:0;" >
                        <a href="<?php echo base_url()?>users/logout" >Log out</a>
                    </li>                                       
                  </ul>               
              </div>
        </nav>
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
