<h2><?=$title?></h2>
<?php echo form_open_multipart('posts/create');?>
  <div class="form-group">
    <label>Cím</label>
    <input type="text" class="form-control" name="title" placeholder="Add meg a poszt címét">
  </div>
  <div class="form-group">
      <label>Szöveg</label>
      <textarea  id="editor"  class="form-control" name="body"  placeholder="Add meg a poszt szövegét"></textarea>
  </div>
<div class="form-group">
    <label>Kategóriák</label>
    <select name="catid" class="form-control">
        <?php foreach ($categories as $category):?>
        <option value="<?php  echo $category['id']?>"><?php  echo $category['name']?></option>
        <?php endforeach;?>
    </select>
</div>
<div class="form-group">
    <label>Thumbnail feltöltése</label>
    <input type="file" name="userfile" size="20"/>
</div>
  <button type="submit" class="btn btn-primary">Hozzáadás</button>
</form>
<br>
<?php echo '<small class="validation-error">'.validation_errors()."</small>";?>