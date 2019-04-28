<h2><?php echo $post['title'];?></h2>
<small class="post-date">Posztolva: <?php echo $post['created_at'];?></small>
<div class="post-body">   
    <?php echo $post['body']; ?>
</div>
<hr>
<?php echo form_open('/posts/delete/'.$post['id']); ?>
<input type="submit" value="Törlés" class="btn btn-danger pull-left">
</form>
<a class="btn btn-default" href="edit/<?php echo $post['slug']?>">Módosítás</a>