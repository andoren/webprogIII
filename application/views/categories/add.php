<h2><?=$title?></h2>
<?php echo validation_errors();?>
<?php echo form_open_multipart('categories/add');?>
    <div class="form-group">
        <label>Category name</label>
        <input type="text" class="form-control" name="name" placeholder="Add the new category name here.">
    </div>
<button type="submit" class="btn btn-primary">Create</button>
</form>

