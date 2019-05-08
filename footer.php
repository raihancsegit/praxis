<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Praxis
 */
if(function_exists('cs_get_option')){
    $copy_on         = cs_get_option( 'copy_on' );
    $copy            = cs_get_option( 'copy' );
    $footer_bg_color = cs_get_option( 'footer_bg_color' );
    $column_set      = cs_get_option( 'column_set' );
}
?>
        <!-- Start Site Footer -->
        <footer class="site-footer black-bg">
            <div class="container">
                <div class="row">

                    <?php for($i = 1; $i <= $column_set; $i++){?>
                        <div class="col-sm-<?php echo esc_attr(12/$column_set);?>">
                            <?php dynamic_sidebar("footer-{$i}")?>
                        </div><!-- .col -->
                    <?php } ?>



                </div><!-- .row -->
                <?php if($copy_on == true){?>
                    <div class="copy-right"><?php echo esc_html($copy);?></div>
                <?php } ?>
            </div>
        </footer>
		<?php wp_footer();?>
    </body>
</html>
