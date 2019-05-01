<h2><?=$title?></h2>

<?php foreach ($pages as $page):?>
<a href="<?php echo base_url().'admin/pages/edit/'.$page['title']?>"><?php echo $page['title'];?></a>
<br>
<?php endforeach; ?>

