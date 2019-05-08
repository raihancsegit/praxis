<?php 
function praxis_nav_menu(){
    wp_nav_menu (array(
        'theme_location'=> 'primary',
        'menu_class'=> 'primary-nav-list',
    ));
}
function my_styles_method() {
    wp_enqueue_style(
        'custom-style',
        get_template_directory_uri() . '/assets/css/custom_script.css'
    );
    $color = cs_get_option( 'footer_bg_color' );
    $text = cs_get_option('footer_copy_color');

    $custom_css = "
                .black-bg{
                        background: {$color};
                },
                
                ";
    wp_add_inline_style( 'custom-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'my_styles_method' );


function inner_page_banner(){
     $page_meta = get_post_meta(get_the_ID(),'_pagetitle',true);

     $page_bnnner = isset($page_meta['banner']) ? $page_meta['banner'] : array();
     $banner_on_of = isset($page_meta['banner_swi']) ? $page_meta['banner_swi'] :array();
     $image_url = wp_get_attachment_image_url($page_bnnner,'full');
     if($banner_on_of == true) {
         ?>
         <section class="other-hero" style="background-image: url(<?php echo esc_url( $image_url ); ?>)">
             <div class="other-hero-overlay"></div>
             <div class="container">
                 <div class="other-hero-text">
                     <h1><?php the_title(); ?></h1>
                     <ul class="breadcrumb">
                         <li><a href="<?php echo home_url( '/' ); ?>">Home</a></li>
                         <li><?php the_title(); ?></li>
                     </ul>
                 </div>
             </div>
         </section>

         <?php
     }

}
?>