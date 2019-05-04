<h2><?=$title;?></h2>
<?php echo form_open('pages/create'); ?>
  <div class="form-group">
    <label>Page name</label>
    <input type="text" class="form-control" name="title" placeholder="Add the page name here">
  </div>
  <div class="form-group">
      <label>Page body</label>
      <textarea  id="editor"  class="form-control" name="body"></textarea>
  </div>
<button type="submit" class="btn btn-primary">Create</button>
<?php echo form_close();?>
<?php echo '<small class="validation-error">'.validation_errors()."</small>";?>
            <script>
                CKEDITOR.replace( 'editor' );
               
            </script>