
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<h2><?=$title?></h2>
<?php
        $dirname = "assets/images/posts/thumbnails/";
        $images = glob($dirname."*.{jpg,gif,png}",GLOB_BRACE);?>
       <div class="row">
        <?php foreach($images as $image):?> 
        <div class="col-lg-3 col-md-4 col-xs-6 thumb fancybox">
                <div  style="margin-top: 60px;text-align:center;"><?php echo $image?></div>
                <div  class="fancybox" rel="ligthbox">
                <img class="zoom img-fluid " style="margin-bottom: 10px;" src="<?php echo base_url().$image?>" />
              </div>
                <a  href="<?php echo base_url().$image?>" download >
                     
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 471.2 471.2" style="enable-background:new 0 0 471.2 471.2;height:35px; width:35px;" fill="#fff" xml:space="preserve">
                <g>
                    <g>
		<path d="M457.7,230.15c-7.5,0-13.5,6-13.5,13.5v122.8c0,33.4-27.2,60.5-60.5,60.5H87.5c-33.4,0-60.5-27.2-60.5-60.5v-124.8
			c0-7.5-6-13.5-13.5-13.5s-13.5,6-13.5,13.5v124.8c0,48.3,39.3,87.5,87.5,87.5h296.2c48.3,0,87.5-39.3,87.5-87.5v-122.8
			C471.2,236.25,465.2,230.15,457.7,230.15z"/>
		<path d="M226.1,346.75c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4l85.8-85.8c5.3-5.3,5.3-13.8,0-19.1c-5.3-5.3-13.8-5.3-19.1,0l-62.7,62.8
			V30.75c0-7.5-6-13.5-13.5-13.5s-13.5,6-13.5,13.5v273.9l-62.8-62.8c-5.3-5.3-13.8-5.3-19.1,0c-5.3,5.3-5.3,13.8,0,19.1
			L226.1,346.75z"/>
                    </g>
                </g>

                </svg>
              </a>

                
                <div  style=" float:right; color:red">
                    <?php echo form_open('admin/images/delete')?>
                    <input type="hidden" name="imgname" value="<?php echo $image?>">
                    <input class="btn btn-danger" type="submit" value="X" name="delete">
                    <?php echo form_close()?>
                </div>
        </div>
        <?php endforeach;?>
</div>
<?php echo form_open_multipart('admin/images/add');?>
<div class="form-group">

        <input type="file" name="userfile" size="20"/><br>
            <input style="margin-top:10px;" class="btn btn-success" type="submit" name="submit" value="Upload image">
</div>
<?php echo form_close();?>
<script>
$(document).ready(function(){

    
    $(".zoom").hover(function(){
		
		$(this).addClass('transition');
	}, function(){
        
		$(this).removeClass('transition');
	});
});
</script>
        
