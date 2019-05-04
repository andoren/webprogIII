
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
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>

  <tbody>
      <?php foreach ($pages as $page):?>
    <tr>
      <th scope="row"><?php echo $page['id']; ?></th>
      <td><?php echo $page['title']; ?></td>
      <td><?php echo htmlspecialchars(word_limiter($page['body'],20)); ?></td>
      <td><?php echo $page['created_at']; ?></td>
      <td><?php echo $page['name']; ?></td>
      <td>  <?php echo form_open('pages/edit'); ?>
            <input type="hidden" name="slug" Value ="<?php echo $page['slug']?>">  
            <input <?php $uid = $this->session->userdata('user_id'); if(!($page['created_by']==$uid || $uid == 1)) echo 'disabled'?> type="submit" value="Edit" class="btn btn-success pull-left">
            <?php echo form_close() ?>
      </td>
      <td><?php echo form_open('pages/delete'); ?>
            <input type="hidden" name="id" Value ="<?php echo $page['id']?>">  
            <input <?php $uid = $this->session->userdata('user_id'); if($page['id'] == 1 || (!($page['created_by'] == $uid || $uid == 1))) echo 'disabled'?> type="submit" value="Delete" class="btn btn-danger pull-left">
          <?php echo form_close() ?></td>

    </tr>
    <?php endforeach;?>
  </tbody>

</table>
</div>