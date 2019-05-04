
<?php echo validation_errors();?>
<?php echo form_open('users/register');?>
<div class="col-md-6 col-md-offset-3">
    <h1 class="text-center"><?=$title?></h1>
<div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Név megadása.">
    <label>E-mail </label>
    <input type="email" class="form-control" name="email" placeholder="E-mail cím megadása">
    <label>Username</label>
    <input type="text" class="form-control" name="username" placeholder="Felhasználónév megadása.">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Jelszó megadása.">
    <label>Password 2</label>
    <input type="password" class="form-control" name="password2" placeholder="Jelszó megadása.">
    
    <div class="form-group">
    <label>Privilege</label>
    <select name="privid" class="form-control">
        <?php foreach ($privileges as $privilege):?>
        <option value="<?php  echo $privilege['id']?>"><?php  echo $privilege['name']?></option>
        <?php endforeach;?>
    </select>
</div>

    <br>
    <button type="submit" class ="btn btn-primary btn-block">Create</button>
</div>
</div>
<?php echo form_close();?>

