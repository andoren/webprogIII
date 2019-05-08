</div>

    <footer style="bottom:0" class="footer bg-dark text-white ">
        <div class="container pt-5 pb-2">
            <div class="row">
                <div class="col-md-3 col-lg-4 col-xl-3">
                    <h4>Something important</h4>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at odio varius ligula rhoncus volutpat. Ut tellus lacus, tempor et ipsum eu, blandit scelerisque urna. 
                    </p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
                    <h4>Menu</h4>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <?php foreach ($menus as $menu):?>
                    <p><a href="
                              <?php if($menu['target']==0)
                              {
                              echo base_url().$menu['page_slug'];
                              
                              }
                              else {
                                  echo $menu['link'];
                                  }?>" <?php if($menu['target'] == 1) echo 'target="_blank"' ?> > <?php echo $menu['name']; ?></a></p>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </footer>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
          
    </script>
    <script>
$(document).ready(function() {

    var docHeight = $(window).height();
    var footerHeight = $('footer').height();
    var footerTop = $('footer').position().top + footerHeight;

    if (footerTop < docHeight)
        $('footer').css('margin-top', 10+ (docHeight - footerTop) + 'px');
});
</script>
</body>
</html>

