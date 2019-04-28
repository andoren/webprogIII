<h2><?=$title?></h2>
<?php echo form_open('posts/create');?>
  <div class="form-group">
    <label>Cím</label>
    <input type="text" class="form-control" name="title" placeholder="Add meg a poszt címét">
  </div>
  <div class="form-group">
      <label>Szöveg</label>
      <textarea  id="editor"  class="form-control" name="body"  placeholder="Add meg a poszt szövegét"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Hozzáadás</button>
</form>
<br>
<?php echo '<small class="validation-error">'.validation_errors()."</small>";?>