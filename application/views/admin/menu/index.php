<h2><?=$title ?></h2>
<div class='table-responsive'>
<table  class="table table-hover table-striped table-sm table-bordered " cellspacing="0" width="100%">

  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Created at</th>
      <th>Target</th>
      <th>Link</th>
      <th>Page Slug</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>

  <tbody>
      <?php foreach ($menus as $menu):?>
    <tr>
      <th scope="row"><?php echo $menu['id']; ?></th>
      <td><?php echo $menu['name']; ?></td>
      <td><?php echo $menu['created_at']; ?></td>
      <td><?php echo $menu['target']; ?></td>
      <td><?php echo $menu['link']; ?></td>
      <td><?php echo $menu['page_slug']; ?></td>
      <td>  <?php echo form_open('menus/edit'); ?>
            <input type="hidden" name="id" Value ="<?php echo $menu['id']?>">  
            <input type="submit" value="Edit" class="btn btn-success pull-left">
            <?php echo form_close() ?>
      </td>
      <td><?php echo form_open('menus/delete'); ?>
            <input type="hidden" name="id" Value ="<?php echo $menu['id']?>">  
            <input  type="submit" value="Delete" class="btn btn-danger pull-left">
          <?php echo form_close() ?></td>

    </tr>
    <?php endforeach;?>
  </tbody>

</table>
</div>

