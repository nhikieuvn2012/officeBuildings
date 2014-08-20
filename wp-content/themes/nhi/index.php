<?php

get_header();

?>

    

    <div class="row area-wel">

        <div class="col-md-1">&nbsp;</div>

        <div class="col-md-6 txt-wel">

            <h4>Lorem ipsum dolor</h4>

            <p>

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum

            </p>  

        </div>

        <div class="col-md-3">
            <div class="box-form">
            <div class="title">Sales/Rental Enquiry</div>
            <div class="content">
                <?php echo do_shortcode('[contact-form-7 id="14" title="Sales/Rental Enquiry"]'); ?>
            </div>
            </div>
        </div>
        <div class="col-md-1">&nbsp;</div>
        <div class="col-md-1">&nbsp;</div>

    </div>

    

    <div class="row">
        <div class="col-md-1">&nbsp;</div>
        <div class="col-md-10 area-content-top">
            <div class="page-title">Office Buildings</div>
        </div>
        <div class="col-md-1">&nbsp;</div>
    </div>

    

    <div class="row">

        <div class="col-md-1">&nbsp;</div>

        <div class="col-md-10 area-content">

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/homeimg.jpg" class="img-responsive img-home" />

         <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/homeimg2.jpg" class="img-responsive img-home" />
         
         <div class="row">
            <?php
            $args=array(
            'taxonomy' => 'category',
            'hierarchical' => '1',
            'hide_empty' => '0',
            'pad_counts' => '1',
            'orderby' => 'term_order'
            );
            
            $categories=get_categories($args);
            
            foreach($categories as $category) { 
                if($category->parent == 0 && $category->slug!='none'){
                    echo '<div class="col-md-4 list"><a class="list-title" href="'.$category->guid.'">' . $category->name.'</a><br/><ul>';
                        $wp_query = new WP_Query();
                        
                        $properties = array(
                                'post_type' =>  'post',
                         );
                        
                        $properties['tax_query']=array(
                            array(
                                'taxonomy' => 'category',
                                'terms' =>$category->slug,
                                'field' => 'slug',
                            )
                        );
                        
                        $query = $wp_query->query($properties);
                        $meta1 = get_post_meta($query[1]->ID);
                        $user_id = get_current_user_id();
                        
                        foreach ($query as $perres){
                            echo '<li><a href="'.$perres->guid.'">'.$perres->post_title.'</a></li>';
                        }
                    echo '</ul></div>';
                }
            } 
            ?>
            </div>
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

    <div class="row">
        <div class="col-md-12">&nbsp;</div>
    </div>


    <!---Testimonial--!>
    <div class="row">

        <div class="col-md-1">&nbsp;</div>

        <div class="col-md-10 title-cat" id="1b">

        <span id="1bdau">+</span>  Testimonial

        </div>

        <div class="col-md-1">&nbsp;</div>

    </div>

    

    <div class="row" id="1ba">
        <div class="col-md-1 hidden-xs">&nbsp;</div>
        <div class="col-md-10 area-wel box-post">
        <div class="row">
        <?php
            $wp_query = new WP_Query();
            
            $properties = array(
                    'post_type' =>  'testimonial',
                    'paged' => 1,
                    'orderby' => 'post_title',
                    'posts_per_page' => 9,
                    'order'    => 'desc' //desc
             );
            
            $query = $wp_query->query($properties);
            
            foreach ($query as $perres){
                $pID=$perres->ID;
                $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($perres->ID),'thumbnail_size');
                $author=get_post_meta($perres->ID,'author',true);
                if($author!=''){
                    $author='- '.$author;
                }
                
                echo '<div class="col-md-10 testimonial" >';
                echo '<a href="'.$perres->guid.'"><div class="bg"><img class="muiten img-responsive" src="'.get_stylesheet_directory_uri().'/images/muiten.png"/> <div style="font-size:11px;margin-bottom:5px">'.get_excerpt(200,$perres->post_content).'</div><b>'.$perres->post_title.'</b></div>';
                if($feat_image[0]==''){
                    echo '<img src="'.get_stylesheet_directory_uri().'/images/user.png" style="float:left" class="imgt hidden-xs" width="64px" height="64px"/>';
                }else{
                    echo '<img src="'.$feat_image[0].'" style="float:left" class="imgt hidden-xs" width="90px" height="90px"/>';
                }
                echo '</a></div>';
            }
        ?>
        </div>
        </div>
        <div class="col-md-1">&nbsp;</div>
    </div>
    <!---End Testimonial--!>


    <div class="row">

        <div class="col-md-1">&nbsp;</div>

        <div class="col-md-10">

        <h1 style="text-shadow: 2px 2px 2px black;color:white">Related</h1>

        </div>

        <div class="col-md-1">&nbsp;</div>

    </div>

    

    <div class="row">

        <div class="col-md-1">&nbsp;</div>

        <div class="col-md-10 title-cat" id="1b">

        <span id="1bdau">+</span> Project Detail

        </div>

        <div class="col-md-1">&nbsp;</div>

    </div>

    

    <div class="row" id="1ba">

        <div class="col-md-1 hidden-xs">&nbsp;</div>

        <div class="col-md-10 area-wel box-post">

        <?php echo do_shortcode('[table id=1 /]'); ?>

        </div>

        <div class="col-md-1">&nbsp;</div>

    </div>

    

    <div class="row">

        <div class="col-md-1">&nbsp;</div>

        <div class="col-md-10 title-cat" id="2b">

        <span id="2bdau">+</span> Available Units For Sale & Rent

        </div>

        <div class="col-md-1">&nbsp;</div>

    </div>

    

    <div class="row" id="2ba">

        <div class="col-md-1 hidden-xs">&nbsp;</div>

        <div class="col-md-10 area-wel box-post">

        <?php echo do_shortcode('[table id=2 /]'); ?>

        </div>

        <div class="col-md-1">&nbsp;</div>

    </div>

    

<?php

get_footer();

