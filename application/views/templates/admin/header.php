<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://bootswatch.com/3/superhero/bootstrap.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
    <title>Misi első blog weboldala</title>             
    </head>
    <body style="padding-top: 0px" >
        
        <nav class="sidenav">
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
                      <a href="<?php echo base_url()?>/admin">Főoldal</a>
                    </li>
                    <li>
                        <div class="dropdown">
                            <a href="#" class="dropbtn">Poszt</a>
                                <div class="dropdown-content">
                                    <a href="<?php echo base_url()?>admin/posts/create">Készítése</a>
                                    <a href="<?php echo base_url()?>admin/posts/">Kezelése</a>
                                </div>
                        </div> 
                    </li>
                    <li>
                       <div class="dropdown">
                         <a href="#" class="dropbtn">Oldal</a>
                                <div class="dropdown-content">
                                    <a href="<?php echo base_url()?>admin/pages/create">Hozzáadás</a>
                                    <a href="<?php echo base_url()?>admin/pages/">Módosítása</a>                                    
                                </div>
                        </div> 
                    </li>
                    <li>
                       <div class="dropdown">
                         <a href="#" class="dropbtn">Kategóriák</a>
                                <div class="dropdown-content">
                                    <a href="<?php echo base_url()?>admin/posts/create">Hozzáadás</a>
                                    <a href="<?php echo base_url()?>admin/posts/update">Kezelése</a>
                                </div>
                        </div> 
                    </li>
                    <li>
                       <div class="dropdown">
                         <a href="#" class="dropbtn">Menü</a>
                                <div class="dropdown-content">
                                    <a href="<?php echo base_url()?>admin/posts/create">Hozzáadás</a>
                                     <a href="<?php echo base_url()?>admin/posts/update">Kezelése</a>  
                                </div>
                        </div> 
                    </li>
                    <li>
                       <div class="dropdown">
                         <a href="#" class="dropbtn">Képek</a>
                                <div class="dropdown-content">
                                    <a href="<?php echo base_url()?>admin/posts/create">Hozzáadása</a>
                                    <a href="<?php echo base_url()?>admin/posts/update">Kezelése</a>
                                </div>
                        </div> 
                    </li>
                    <li>
                        <div class="dropdown">
                         <a href="#" class="dropbtn">Felhasználók</a>
                                <div class="dropdown-content">
                                    <a href="<?php echo base_url()?>admin/posts/create">Regisztrálás</a>
                                    <a href="<?php echo base_url()?>admin/posts/update">Kezelése</a>
                                </div>
                        </div> 
                    </li>
                    <li style=" position:absolute; bottom:0;" >
                        <a href="<?php echo base_url()?>users/logout" >Kijelentkezés</a>
                    </li>                                       
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
