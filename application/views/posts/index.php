<h2><?=$title ?></h2>
<?php foreach ($posts as $post):?> 
<h3  style="margin-top: 30px;"><?php echo $post['title'];?></h3>
<div class="row">
    <div class="col-md-3">
        <img class="post-thumb img-fluid  object-fit_scale-down" src="<?php echo base_url().'assets/images/posts/thumbnails/'.$post['thumbimg']?>">
    </div>
    <div class="col-md-9">
        <small class="post-date">Posted at: <?php echo $post['created_at'];?> a(z) <strong><?php 
        foreach ($post['categories'] as $category) :?>
                <a href="<?php echo base_url()."categories/".$category['id'] ?>"><?php echo $category['name']?></a>, &nbsp;
            <?php        endforeach;?>
            </strong>-ban/ben</small>
        <br>
        <div class="post-body">
            <?php echo htmlspecialchars(word_limiter($post['body'],70));?>
        </div>
        <br>
        <br>
        <p><a class="btn btn-success" href="<?php echo site_url('posts/'.$post['slug']); ?>">Read more</a>
    </div>
</div>

<?php endforeach; ?>

