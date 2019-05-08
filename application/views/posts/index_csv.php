<h2><?=$title?></h2>
<small>*<?=$help?></small>
 <?php echo form_open_multipart('admin/posts/createpost_csv') ;?>
<div class="form-group">
    <label>Csv upload</label><br>
    <input type="file" name="userfile" size="20"/>
</div>
  <button type="submit" class="btn btn-primary">Create</button>
<?php echo form_close();?>
<?php echo validation_errors();?>
