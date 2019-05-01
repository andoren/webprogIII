<h2><?=$title;?></h2>
<?php echo form_open('pages/create'); ?>
  <div class="form-group">
    <label>Oldal neve</label>
    <input type="text" class="form-control" name="title" placeholder="Add meg az oldal nevét">
  </div>
  <div class="form-group">
      <label>Oldal tartalma</label>
      <textarea  id="editor"  class="form-control" name="body"  placeholder="Add meg az oldal tartalmát"></textarea>
  </div>
<button type="submit" class="btn btn-primary">Hozzáadás</button>
<?php echo form_close();?>
<?php echo '<small class="validation-error">'.validation_errors()."</small>";?>
            <script>
                CKEDITOR.replace( 'editor' );
               
            </script>