<h2><?=$title ?></h2>
<div class='table-responsive'>
<table  class="table table-hover table-striped table-sm table-bordered " cellspacing="0" width="100%">

  <thead>
    <tr>
      <th>Id</th>
      <th>Cím</th>
      <th>Tartalom</th>
      <th>Készítve</th>
      <th>Készítette</th>
      <th>Módosítás</th>
      <th>Törlés</th>
    </tr>
  </thead>

  <tbody>
      <?php foreach ($posts as $post):?> 
    <tr>
      <th scope="row"><?php echo $post['id']; ?></th>
      <td><?php echo $post['title']; ?></td>
      <td><?php echo htmlspecialchars(word_limiter($post['body'],20)); ?></td>
      <td><?php echo $post['created_at']; ?></td>
      <td><?php echo $post['created_by']; ?></td>
      <td><a class="btn btn-success" href="edit/<?php echo $post['slug']?>">Módosítás</a></td>
      <td><?php echo form_open('/posts/delete/'.$post['id']); ?>
<input type="submit" value="Törlés" class="btn btn-danger pull-left">
</form></td>

    </tr>
    <?php endforeach;?>
  </tbody>

</table>
</div>

