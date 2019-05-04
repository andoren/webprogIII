
<h2><?=$title ?></h2>
<div class='table-responsive'>
<table  class="table table-hover table-striped table-sm table-bordered " cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Body</th>
      <th>Created at</th>
      <th>Created by</th>
      <th>Category</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($posts as $post):?>
    <tr>
      <th scope="row"><?php echo $post['id']; ?></th>
      <td><?php echo $post['title']; ?></td>
      <td><?php echo htmlspecialchars(word_limiter($post['body'],20)); ?></td>
      <td><?php echo $post['created_at']; ?></td>
      <td><?php echo $post['name']; ?></td>
      <td><?php echo $post['catname']; ?></td>
      <td>  <?php echo form_open('posts/edit'); ?>
            <input type="hidden" name="slug" Value ="<?php echo $post['slug']?>">  
            <input <?php $uid = $this->session->userdata('user_id'); if(!($post['created_by']==$uid || $uid == 1)) echo 'disabled'?> type="submit" value="Edit" class="btn btn-success pull-left">
            <?php echo form_close() ?>
      </td>
      <td><?php echo form_open('posts/delete'); ?>
            <input type="hidden" name="id" Value ="<?php echo $post['id']?>">  
            <input <?php $uid = $this->session->userdata('user_id'); if(!($post['created_by'] == $uid || $uid == 1)) echo 'disabled'?> type="submit" value="Delete" class="btn btn-danger pull-left">
          <?php echo form_close() ?></td>

    </tr>
    <?php endforeach;?>
  </tbody>

</table>
</div>

