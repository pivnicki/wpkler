 <?php
/*
  Template Name:Kler Page
 */

get_header(); ?>


		<?php 
		//Protect against arbitrary paged values
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
		$the_query = new WP_Query(array(
    'category_name' => 'kler',
	'posts_per_page'=>5,
	'paged' => $paged
    ));
				?>

	<div class="container">
   				<div class="row" id="primary">
					<main id="content" class="col-sm-8">
				 
<h1 style="height:100px;padding-top:30px;" class="text-center col-sm-12 inner-blue-frame ">
					AKTIVNOSTI KLER
					</h1>
<hr></hr>

			<?php
			while ( $the_query->have_posts() ) : $the_query->the_post();

				?>
			 <div class="col-sm-12">
			 <a  class="text-center" href="<?php the_permalink(); ?>" ><?php the_title();?></a>
	 <hr></hr>
	</div>
	<?php
				
			endwhile; // End of the loop.
			?>
			 
 <?php
$big = 999999999; // need an unlikely integer

echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $the_query->max_num_pages
) );

?> 
			 
		</main>
		<!--SIDEBAR-->
		<aside class="col-sm-4 sidebar-style">
		<?php get_sidebar();?>
		</aside>
	</div><!-- #primary -->
	</div> <!-- .container -->

<?php
 
get_footer();
