<h2><?=$title?></h2>
<?php echo form_open('pages/update'); ?>
<input type="hidden" name="id" value="<?php echo $page['id']?>">
  <div class="form-group">
    <label>Page name</label>
    <input type="text" class="form-control" name="title"  value="<?php echo $page['title']?>">
  </div>
  <div class="form-group">
      <label>Page body</label>
      <textarea id="editor"  class="form-control" name="body"> </textarea>
  </div>
<button type="submit" class="btn btn-primary">Modify</button>
<div id="data" style="display:none" >
    <?php echo $page['body'];?>
</div>
            <script>
                CKEDITOR.replace( 'editor' );
                CKEDITOR.instances.editor.setData(document.getElementById("data").innerHTML);
            </script>
<?php echo form_close();?>
<?php echo '<small class="validation-error">'.validation_errors()."</small>";?>


