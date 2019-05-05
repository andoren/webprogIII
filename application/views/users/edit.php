
<?php echo validation_errors();?>
<?php echo form_open('users/update');?>
<div class="col-md-6 col-md-offset-3">
    <h1 class="text-center"><?=$title?></h1>
<div class="form-group">

    <input type='hidden' name='id' value='<?php echo $user['id']?>'>
    <label>Name</label>
    <input type="text" class="form-control" name="name" value='<?php echo $user['fullname']?>'>
    <label>E-mail </label>
    <input type="email" class="form-control" name="email" value='<?php echo $user['email']?>'>
    <label>Username</label>
    <input type="text" class="form-control" name="username" value='<?php echo $user['username']?>'>
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
    <label>Password 2</label>
    <input type="password" class="form-control" name="password2" placeholder="Password">
    
    <div class="form-group">
    <label>Privilege</label>
    <select name="privid" class="form-control">
        <?php foreach ($privileges as $privilege):?>
        <option <?php if($privilege['id']==$user['privid']) echo 'selected'?> value="<?php  echo $privilege['id']?>"><?php  echo $privilege['name']?></option>
        <?php endforeach;?>
    </select>
</div>

    <br>
    <button type="submit" class ="btn btn-primary btn-block">Create</button>
</div>
</div>
<?php echo form_close();?>

