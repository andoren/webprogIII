<h2><?=$title ?></h2>
<?php foreach ($posts as $post):?> 
<h3><?php echo $post['title'];?></h3>
<div class="row">
    <div class="col-md-3">
        <img class="post-thumb thumbnail" src="<?php echo base_url().'assets/images/posts/thumbnails/'.$post['thumbimg']?>">
    </div>
    <div class="col-md-9">
        <small class="post-date">Posztolva: <?php echo $post['created_at'];?> a(z) <strong><a href="<?php echo base_url().'posts/category/'.$post['name']?>"><?php echo $post['name'] ?></a></strong>-ban/ben</small>
        <br>
        <div class="post-body">
            <?php echo word_limiter($post['body'],70);?>
        </div>
        <br>
        <br>
        <p><a class="btn btn-default" href="<?php echo site_url('posts/'.$post['slug']); ?>">Tovább</a>
    </div>
</div>

<?php endforeach; ?>

