<h2><?=$title ?></h2>
<div class='table-responsive'>
<table  class="table table-hover table-striped table-sm table-bordered " cellspacing="0" width="100%">

  <thead>
    <tr>
      <th>Id</th>
      <th>Full Name</th>
      <th>Username</th>
      <th>E-mail</th>
      <th>Created at</th>
      <th>Privilege</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>

  <tbody>
      <?php foreach ($users as $user):?>
    <tr>
      <th scope="row"><?php echo $user['id']; ?></th>
      <td><?php echo $user['fullname']; ?></td>
      <td><?php echo $user['username']; ?></td>
      <td><?php echo $user['email']; ?></td>
      <td><?php echo $user['created_at']; ?></td>
      <td><?php echo $user['name']; ?></td>
      <td>  <?php echo form_open('users/edit'); ?>
            <input type="hidden" name="id" Value ="<?php echo $user['id']?>">  
            <input type="submit" value="Edit" class="btn btn-success pull-left">
            <?php echo form_close() ?>
      </td>
      <td><?php echo form_open('users/delete'); ?>
            <input type="hidden" name="id" Value ="<?php echo $user['id']?>">  
            <input  type="submit" value="Delete" class="btn btn-danger pull-left">
          <?php echo form_close() ?></td>

    </tr>
    <?php endforeach;?>
  </tbody>

</table>
</div>
