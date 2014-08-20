<?php

get_header();

?>
    <div class="row">
        <div class="col-md-12">&nbsp;</div>
    </div>

    <div class="row">

        <div class="col-md-1">&nbsp;</div>

        <div class="col-md-10 area-content-top page-title">

            <?php echo $post->post_title; ?>

        </div>

        <div class="col-md-1">&nbsp;</div>

    </div>

    

    <div class="row">

        <div class="col-md-1">&nbsp;</div>

        <div class="col-md-10 area-content">

            <?php 
                $content = apply_filters( 'the_content', $post->post_content);
                $content = str_replace( ']]>', ']]&gt;', $content );
                echo $content; 
            ?>

        </div>

        <div class="col-md-1">&nbsp;</div>

    </div>

    

    <div class="row">

        <div class="col-md-1">&nbsp;</div>

        <div class="col-md-10 area-more">

            

            <h1>MORE ABOUT THIS TOPIC</h1>

            <div class="content">

            GE offers products and services to support a wide range of commercial facilities, sites and construction projects including hotels, office buildings, entertainment and retailers of all sizes. 

            </div>

        </div>

        <div class="col-md-1">&nbsp;</div>

    </div>

<?php

get_footer();

?>