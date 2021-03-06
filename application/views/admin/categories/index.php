<h2><?=$title ?></h2>
<div class='table-responsive'>
<table  class="table table-hover table-striped table-sm table-bordered " cellspacing="0" width="100%">

  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Created at</th>
      <th>Created by</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>

  <tbody>
      <?php foreach ($categories as $category):?>
    <tr>
      <th scope="row"><?php echo $category['id']; ?></th>
      <td><?php echo $category['name']; ?></td>
      <td><?php echo $category['created_at']; ?></td>
      <td><?php echo $category['fullname']; ?></td>
      <td>  <?php echo form_open('categories/edit'); ?>
            <input type="hidden" name="id" Value ="<?php echo $category['id']?>">  
            <input <?php $uid = $this->session->userdata('user_id'); if(!($category['created_by']==$uid || $this->session->userdata('privilege') == 'admin')) echo 'disabled'?> type="submit" value="Edit" class="btn btn-success pull-left">
            <?php echo form_close() ?>
      </td>
      <td><?php echo form_open('categories/delete'); ?>
            <input type="hidden" name="id" Value ="<?php echo $category['id']?>">  
            <input <?php $uid = $this->session->userdata('user_id'); if(!($category['created_by'] == $uid || $this->session->userdata('privilege') == 'admin')) echo 'disabled'?> type="submit" value="Delete" class="btn btn-danger pull-left">
          <?php echo form_close() ?></td>

    </tr>
    <?php endforeach;?>
  </tbody>

</table>
</div>