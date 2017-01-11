<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kler
 */
 
 	

get_header(); ?>

	<div class="container">
	 
   				<div class="row" id="primary">
				
					<main id="content" class="col-sm-8">
						<div class="col-sm-12 inner-blue-frame" style="background-color:red;">
							<header class="page-header">
	
				<?php
					the_archive_title( '<h1 class="text-center page-title"> ', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
				
	
							</header><!-- .page-header -->
						</div>
		
				

		<?php
		while ( have_posts() ) : the_post();
?>
			 <div class="col-sm-12">
			 <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
	 <hr></hr>
	</div>
	<?php
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
get_sidebar();
get_footer();
