<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Praxis
 */

get_header();
?>
<section class="home-blog section">
<div class="container">	
	<div class="row">
		<?php if ( have_posts() ) : while ( have_posts() ) :the_post();?>
			<div class="col-lg-6">
				<article class="post">
					<header class="entry-header">              
						<a href="<?php the_permalink();?>" class="post-thumbnail"><?php the_post_thumbnail();?></a>						
					</header>
					<div class="post-body">
						<div class="post-details-wrap">
							<h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
							<div class="byline">
								<span class="home-posted-on"><?php the_time( $date_format ); ?></span>
							</div>
						</div><!-- .post-details-wrap -->
						<div class="entry-content">
							<p><?php echo wp_trim_words(get_the_content(),'13',' '); ?></p>
							<a href="<?php the_permalink();?>" class="h-readmore-btn">READ MORE</a>
						</div>
					</div><!-- .post-body -->
				</article>
			</div><!-- .col -->
		<?php endwhile; endif;?>
        <div class="col-lg-12 text-center">
            <?php
            $pagination = get_the_posts_pagination( array(
                'mid_size' => 2,
                'prev_text' => __( 'p', 'textdomain' ),
                'next_text' => __( 'n', 'textdomain' ),
            ) );
            $pagination = str_replace('navigation pagination','post-navigation',$pagination);
            $pagination = str_replace('nav-links','nav-all-post',$pagination);
            $pagination = str_replace('current','active-post',$pagination);
            echo $pagination;
            ?>
        </div>

	  </div>
   </div>
</section>

<?php
get_footer();
