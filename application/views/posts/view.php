<h2><?php echo $post['title'];?></h2>
<small class="post-date">Posted at: <?php echo $post['created_at'];?></small>
<div class="post-body">   
    <?php echo $post['body']; ?>
</div>
<hr>
<?php if($this->session->userdata('user_id') == $post['created_by']):?>
<?php echo form_open('/posts/delete/'.$post['id']); ?>
<input type="submit" value="Delete" class="btn btn-danger pull-left">
</form>
<a class="btn btn-default" href="edit/<?php echo $post['slug']?>">Edit</a>
<?php endif;?>