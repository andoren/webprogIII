<h2><?=$title?></h2>
<?php echo form_open('posts/update');?>
<input type="hidden" name="id" Value ="<?php echo $post['id']?>">        
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" value ="<?php echo $post['title'];?>">
  </div>
  <div class="form-group">
      <label>Body</label>
      <textarea id="editor"  class="form-control" name="body"> <?php echo $post['body'];?> </textarea>
  </div>
<div class="form-group">
    <label>Categories</label><br>    
        <?php foreach ($categories as $category):?>
        <input type="checkbox" name="check_list[]" value="<?php echo $category['id']?>"><label><?=$category['name']?></label><br/>
        <?php endforeach;?>    
</div>
  <button type="submit" class="btn btn-primary">Modify</button>
</form>
<br>
<?php echo '<small class="validation-error">'.validation_errors()."</small>";?>
<script>
  CKEDITOR.replace( 'editor' );            
</script>