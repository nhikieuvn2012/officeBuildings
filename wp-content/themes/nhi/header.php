<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title><?php wp_title(); ?></title>

  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet"/>

  <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet"/>

  <?php wp_head(); ?>

  </head>

  <body>

  

<div class="container-fluid">

    <!--Header--!>
    <div class="row area-top">
        <div class="col-md-1">&nbsp;</div>
        <div class="col-md-2 text-center">
            <a href="<?php echo get_home_url();?>"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" /></a>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12 text-center">
                 <img src="<?php echo get_stylesheet_directory_uri() ?>/images/sao.png" class="sao"/>
                 <div class="txt">We will provide the best service for you, the good office serving your great work</div>



                <nav class="navbar navbar-default" role="navigation">

                  <div class="container-fluid">

                    <!-- Brand and toggle get grouped for better mobile display -->

                    <div class="navbar-header">

                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

                        <span class="sr-only">Toggle navigation</span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                      </button>

                    </div>

                

                    <!-- Collect the nav links, forms, and other content for toggling -->

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                      <ul class="nav navbar-nav">

                        <?php
$pageURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
if ($_SERVER["SERVER_PORT"] != "80")
{
    $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
} 
else 
{
    $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
}
                            $menu_name = 'menu-header';
                            $menu_list='';
                                if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {

                                                $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

                                                $menu_items = wp_get_nav_menu_items($menu->term_id);

                                                foreach ( (array) $menu_items as $key => $menu_item ) {
                                                    
                                                    if($menu_item->url==$pageURL){
                                                        $menu_list .= '<li class="activer"><a title="'.$menu_item->title.'" href="'.$menu_item->url.'">'.$menu_item->title.'</a></li>';
                                                    }else{
                                                        $menu_list .= '<li><a title="'.$menu_item->title.'" href="'.$menu_item->url.'">'.$menu_item->title.'</a></li>';
                                                    }

                                                }

                                }

                            echo $menu_list;

                        ?>

                      </ul>

                    </div>

                  </div>

                </nav>
                </div>
            </div> 

        </div>
    </div>
    

    <div class="row nav-title">

        <div class="col-md-1">&nbsp;</div>

        <div class="col-md-6">
        <span class="glyphicon glyphicon-home"></span>
                    <?php     
                    if(is_home()||is_front_page()){
                        echo '<a href="'.get_home_url().'">Home</a>';
                    }else{
                        echo '<a href="'.get_home_url().'">Home</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="#">'.$post->post_title.'</a>';
                    } 
                    ?>
        </div>
        <div class="col-md-4">      
            <input class="search-text" name="txtSearch" type="text" placeholder="Enter search terms"/>
        </div>

        <div class="col-md-1">&nbsp;</div>

    </div>