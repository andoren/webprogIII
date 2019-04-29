<?php echo form_open('users/login'); ?>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1 class="text-center"><?=$title?></h1>
        <br>
        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Felhasználónév" required="autofocus"     
        </div>
        <br>
         <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Jelszó" required="autofocus"    
        </div>
        <br>
        <button type="submit" class="btn btn-primary btn-block">Bejelentkezés</button>
    </div>
</div>
<?php echo form_close()?>


