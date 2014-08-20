    <div class="row">

        <div class="col-md-12">&nbsp;</div>

    </div>

    

    

    <div class="row nav-title">

        <div class="col-md-1">&nbsp;</div>

        <div class="col-md-10">
        <span class="glyphicon glyphicon-home"></span>
                    <?php     
                    if(is_home()||is_front_page()){
                        echo '<a href="'.get_home_url().'">Home</a>';
                    }else{
                        echo '<a href="'.get_home_url().'">Home</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="#">'.$post->post_title.'</a>';
                    } 
                    ?>
        </div>

        <div class="col-md-1">&nbsp;</div>

    </div>

    

    <div class="row footer">
        <div class="col-md-1">&nbsp;</div>
        <?php  dynamic_sidebar( 'sidebar-footer' ) ;?>
        <div class="col-md-1">&nbsp;</div>
    </div>

</div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>

    <?php wp_footer(); ?>

    <script>

        $(document).ready(function(){

           $('.title-cat').click(function(){

                var txtId=this.id;

                $('#'+txtId+'a').toggle(250);

           }); 

        });

    </script>

  </body>

</html>