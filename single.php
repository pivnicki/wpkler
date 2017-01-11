<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kler
 */

get_header(); ?>

<?php $posts_page_id = get_option( 'page_for_posts' ); ?>
<?php if (has_post_thumbnail( $posts_page_id ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $posts_page_id ), 'single-post-thumbnail' );
  $image = $image[0]; ?>
<?php else :
  $image = get_bloginfo( 'stylesheet_directory') . '/img/default-featured-img.jpg'; ?>
<?php endif; ?>

<div class="background-image" style="background-image: url('<?php echo $image; ?>');">
<!--background-repeat: no-repeat;
    background-size: cover;
    background-position: 0px 135px;-->
<!--BLOG CONTENT-->
	<div class="container">
   				<div class="row" id="primary">
					<main id="content" class="col-sm-8">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );
			?>
			   <hr> <small class="single-bottom"> 
							 Vreme postavljanja: <?php the_time(); echo " | " ; the_date('m j Y');echo " | Kategorija " ; 
							   the_category(' ');?></small><hr>
<?php
			the_post_navigation();

			 
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
 
		</main><!-- #main -->
		
		<!--SIDEBAR-->
		<aside class="col-sm-4 sidebar-style">
		<?php get_sidebar();?>
		</aside>
	</div><!-- #primary -->
	</div> <!-- .container -->

<?php
 
get_footer();
