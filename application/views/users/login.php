<div style="height: 63vh" class = "container" >
<?php echo form_open('users/login'); ?>


        <h1 class="text-center"><?=$title?></h1>
        <br>
        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username" required="autofocus"   >  
        </div>
        <br>
         <div class="form-group">
             <input type="password" name="password" class="form-control" placeholder="Password" required="autofocus">    
        </div>
        <br>
        <button type="submit" class="btn btn-primary btn-block">Log in</button>

    
<?php echo form_close()?>
</div>



