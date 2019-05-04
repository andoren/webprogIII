<h2><?=$title?></h2>
<?php foreach ($menus as $menu):?>
    <p>
    <a href="<?php echo base_url()."menus/edit/".$menu['name']?>"> <?php echo $menu['name']; ?></a>
    </p>
<?php endforeach;?>
