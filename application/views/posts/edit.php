<h2><?=$title?></h2>
<?php echo form_open('posts/update');?>
<input type="hidden" name="id" Value ="<?php echo $post['id']?>">        
  <div class="form-group">
    <label>Cím</label>
    <input type="text" class="form-control" name="title" value ="<?php echo $post['title'];?>">
  </div>
  <div class="form-group">
      <label>Szöveg</label>
      <textarea id="editor"  class="form-control" name="body"  ><?php echo $post['body'];?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Módosítás</button>
</form>
<br>
<?php echo '<small class="validation-error">'.validation_errors()."</small>";?>
