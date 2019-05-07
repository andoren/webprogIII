<h2><?=$title?></h2>
<?php echo form_open_multipart('posts/create');?>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add meg a poszt címét">
  </div>
  <div class="form-group">
      <label>Body</label>
      <textarea  id="editor"  class="form-control" name="body"  placeholder="Add meg a poszt szövegét"></textarea>
  </div>
<div class="form-group">
    <label>Categories</label><br>
    
        <?php foreach ($categories as $category):?>
        <input type="checkbox" name="check_list[]" value="<?php echo $category['id']?>"><label><?=$category['name']?></label><br/>
        <?php endforeach;?>
    
</div>
<div class="form-group">
    <label>Thumbnail upload</label><br>
    <input type="file" name="userfile" size="20"/>
</div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>
<br>
<?php echo '<small class="validation-error">'.validation_errors()."</small>";?>
<script>
    CKEDITOR.replace('editor');              
</script>