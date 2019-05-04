<h2><?=$title?></h2>
<?php echo form_open_multipart('menus/create');?>
  <div class="form-group">
      <label>Menu name</label>
    <input type="text" class="form-control" name="name" value="<?php echo $menu['name']?>">
  </div>
<div class="form-group">
    <label>Page</label>
    <select name="link" class="form-control">
        <?php foreach ($pages as $page):?>
        
        <option <?php $temp = base_url().$page['title']; if ($menu['target']==0 && $menu['link']== $temp) echo 'selected'?> value="<?php  echo $page['title']?>"><?php  echo $page['title']?></option>
        <?php endforeach;?>
    </select>
</div>
  <div class="form-group">
      <label>External</label>
      <input type="checkbox" class="form-control" name="target" <?php if($menu['target'] == 1) echo 'checked'?> value="target">
  </div>
  <div class="form-group">
      <label>External link</label>
    <input type="text" class="form-control" name="external_link" value="<?php if($menu['target'] == 1) echo $menu['link']?>">
  </div>
  <button type="submit" class="btn btn-primary">Modify</button>
</form>
<br>
<?php echo '<small class="validation-error">'.validation_errors()."</small>";?>
<script>
CKEDITOR.replace( 'editor' );             
</script>