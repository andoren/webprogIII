<h2><?=$title?></h2>
<?php echo validation_errors();?>
<?php echo form_open_multipart('categories/add');?>
    <div class="form-group">
        <label>Kategória neve</label>
        <input type="text" class="form-control" name="name" placeholder="Add meg a kategória nevét">
    </div>
<button type="submit" class="btn btn-default">Hozzáadd</button>
</form>

