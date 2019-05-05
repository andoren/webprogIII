<h2><?php echo $post['title'];?></h2>
<small class="post-date">Posted at: <?php echo $post['created_at'];?></small>
<div class="post-body">   
    <?php echo $post['body']; ?>
</div>
<hr>
<?php if($this->session->userdata('user_id') == $post['created_by']):?>
<?php echo form_open('posts/delete'); ?>
            <input type="hidden" name="id" Value ="<?php echo $post['id']?>">  
            <input <?php $uid = $this->session->userdata('user_id'); if(!($post['created_by'] == $uid || $uid == 1)) echo 'disabled'?> type="submit" value="Delete" class="btn btn-danger pull-left">
          <?php echo form_close() ?></td>
<?php echo form_open('posts/edit'); ?>
            <input type="hidden" name="slug" Value ="<?php echo $post['slug']?>">  
            <input <?php $uid = $this->session->userdata('user_id'); if(!($post['created_by']==$uid || $uid == 1)) echo 'disabled'?> type="submit" value="Edit" class="btn btn-success pull-left">
            <?php echo form_close() ?>
<?php endif;?>