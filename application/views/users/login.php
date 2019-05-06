<?php echo form_open('users/login'); ?>
<div class="row">
    <div class="col-4 offset-md-4">
        <h1 class="text-center"><?=$title?></h1>
        <br>
        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username" required="autofocus"     
        </div>
        <br>
         <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required="autofocus"    
        </div>
        <br>
        <button type="submit" class="btn btn-primary btn-block">Log in</button>
    </div>
</div>
<?php echo form_close()?>


