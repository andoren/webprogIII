<h2><?=$title?></h2>
<?php echo form_open_multipart('menus/create');?>
  <div class="form-group">
      <label>Menu name</label>
    <input type="text" class="form-control" name="name" placeholder="Add the menu name">
  </div>
<div class="form-group">
    <label>Page</label>
    <select name="slug" class="form-control">
        <?php foreach ($pages as $page):?>
        <option value="<?php  echo $page['slug']?>"><?php  echo $page['title']?></option>
        <?php endforeach;?>
    </select>
</div>
  <div class="form-group">
      <label>External ?</label>
      <input style="margin-left: 10px" type="checkbox"  name="target" value="target">
  </div>
  <div class="form-group">
      <label>External link</label>
    <input type="text" class="form-control" name="external_link" placeholder="">
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>
<br>
<?php echo '<small class="validation-error">'.validation_errors()."</small>";?>
<script>
CKEDITOR.replace( 'editor' );             
</script>