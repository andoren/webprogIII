<h2><?=$title?></h2>
<?php echo form_open('categories/update'); ?>
<input type="hidden" name="id" value="<?php echo $cat['id']?>">
  <div class="form-group">
    <label>Category name</label>
    <input type="text" class="form-control" name="name"  value="<?php echo $cat['name']?>">
  </div>
<button type="submit" class="btn btn-primary">Modify</button>
<?php echo form_close();?>
<?php echo '<small class="validation-error">'.validation_errors()."</small>";?>


