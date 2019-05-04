<h2><?=$title?></h2>
<?php foreach ($menus as $menu):?>
    <p>
    <a href="<?php echo base_url()."menus/edit/".$menu['page_slug']?>"> <?php echo $menu['name']; ?></a>
    </p>
<?php endforeach;?>
