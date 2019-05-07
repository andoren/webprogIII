<h2><?php echo $post['title'];?></h2>
<small class="post-date">Posted at: <?php echo $post['created_at'];?></small>
<div class="post-body">   
    <?php echo $post['body']; ?>
</div>
<br>
<a class="btn btn-primary" href="<?php echo base_url()."pdfs/create/".$post['slug']?>">Download as pdf</a>
<?php if($this->session->userdata('user_id') == $post['created_by']):?>

<hr>
<?php echo form_open('posts/delete'); ?>
            <input type="hidden" name="id" Value ="<?php echo $post['id']?>">  
            <input <?php $uid = $this->session->userdata('user_id'); if(!($post['created_by'] == $uid || $this->session->userdata('privilege') == 'admin')) echo 'disabled'?> type="submit" value="Delete" class="btn btn-danger float-left">
          <?php echo form_close() ?></td>
<?php echo form_open('posts/edit'); ?>
            <input type="hidden" name="slug" Value ="<?php echo $post['slug']?>">  
            <input <?php $uid = $this->session->userdata('user_id'); if(!($post['created_by']==$uid || $this->session->userdata('privilege') == 'admin')) echo 'disabled'?> type="submit" value="Edit" class="btn btn-success float-right">
            <?php echo form_close() ?>
<?php endif;?>
<br>
<br>
<br>
<hr>
<h3>Comments</h3>
<?php if($comments):?>
<?php foreach ($comments as $comment):?>

<div style="margin-top: 10px;" class="p-3 mb-2 bg-white text-dark card">
    <div  class="card-body">
        <h4 class="card-title"><?php echo $comment['name']?>:</h4><br>
        <p class="card-text"><?php echo $comment['body'];?> </p><br>
        <h6>Commented at: <?php echo $comment['created_at']?></h6>
    </div>
</div>

<?php endforeach;?>
<?php else:?>
<p>No comments </p>
    <?php endif;?>
            <hr>
            <h3>Add Comment</h3>
            <?php echo validation_errors();?>
       <?php echo form_open('comments/create/'.$post['id']);?>
            <div class ="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
                
            </div>
            <div class ="form-group">
                <label>E-mail</label>
                <input type="text" name="email" class="form-control">
                
            </div>
            <div class ="form-group">
                <label>Body</label>
                <textarea type="text" name="body" class="form-control"></textarea>
                
            </div>
            <input type="hidden" name="slug" value="<?php echo $post['slug']?>">
            <button class="btn btn-primary" type="submit">Comment</button>
            
<?php echo form_close();?>  
            <br>
            <br>