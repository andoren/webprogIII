
<?php echo validation_errors();?>
<?php echo form_open('users/register');?>
<div class="col-md-6 col-md-offset-3">
    <h1 class="text-center"><?=$title?></h1>
<div class="form-group">
    <label>Név</label>
    <input type="text" class="form-control" name="name" placeholder="Név megadása.">
    <label>E-mail cím</label>
    <input type="email" class="form-control" name="email" placeholder="E-mail cím megadása">
    <label>Felhasználónév</label>
    <input type="text" class="form-control" name="username" placeholder="Felhasználónév megadása.">
    <label>Jelszó</label>
    <input type="password" class="form-control" name="password" placeholder="Jelszó megadása.">
    <label>Jelszó megerősítése</label>
    <input type="password" class="form-control" name="password2" placeholder="Jelszó megadása.">
    
    <div class="form-group">
    <label>Jogosultság</label>
    <select name="privid" class="form-control">
        <?php foreach ($privileges as $privilege):?>
        <option value="<?php  echo $privilege['id']?>"><?php  echo $privilege['name']?></option>
        <?php endforeach;?>
    </select>
</div>

    <br>
    <button type="submit" class ="btn btn-primary btn-block">Hozzáadás</button>
</div>
</div>
<?php echo form_close();?>

