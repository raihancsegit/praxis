<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Praxis
 */

?>
<!DOCTYPE doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <!-- Meta Tags -->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta content="ie=edge" http-equiv="x-ua-compatible"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="Pressionate" name="author"/>
        <meta content="" name="description"/>
        <meta content="" name="keywords"/>
       
        <!-- Favicon Icon -->
        <link href="img/favicon.png" rel="icon"/>
       
		<?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
    	<!-- Start Preloader -->
    	<div id="preloader">
		 	<div id="status">
		    	<div class="spinner">
			     	<div class="rect1"></div>
			     	<div class="rect2"></div>
			     	<div class="rect3"></div>
			     	<div class="rect4"></div>
			     	<div class="rect5"></div>
		    	</div>
		 	</div>
		</div>
		<!-- End Preloader -->

        <!-- Start Site Header -->
        <header class="site-header">
            <div class="container header-wrap">
                <div class="site-branding">
                <!-- For Image Logo -->
                    <a href="index.html" class="custom-logo-link">

                    <?php 
                    if(function_exists('cs_get_option')){
                        $site = cs_get_option('site_title');
                        $logo = cs_get_option('logo');
                        $img  = wp_get_attachment_image_src($logo,'full');
                        $img_show = cs_get_option('logo_swi');
                        $tit_show = cs_get_option('title_swi');
                        //print_r($img);
                    } else{
                        $site = 'default';
                    }
                   
                    ?>
                    <?php if( $img_show == true ) {?>
                        <img src="<?php echo $img[0];?>" alt="" class="custom-logo">
                    <?php } ?>

                        <?php if($tit_show == true){?>
                            <h2><?php echo esc_html($site);?></h2>
                        <?php } ?>
                </a>
                <!-- For Site Title -->
                <!-- <span class="site-title">
                    <a href="index.html">Buildm</a>
                </span> -->
                </div>
                <nav class="primary-nav">
                    <?php praxis_nav_menu();?>

                </nav>
            </div><!-- .header-wrap -->
        </header>
        <!-- End Site Header -->