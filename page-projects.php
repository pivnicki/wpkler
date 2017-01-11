<?php
/*
  Template Name:Projects Page
 */

get_header(); ?>

				 

		<?php $loop=new WP_Query(array('category_name'=>'projekti',
				'orderby'=>'post_id','order'=>'ASC')); ?>

	<div class="container">
	
	
   				<div class="row" id="primary">
				
					<main id="content" class="col-sm-8">
					<h1 style="height:100px;padding-top:30px;" 
					class="text-center col-sm-12 inner-blue-frame ">
					PROJEKTI
					</h1>

			<?php
			while ( $loop->have_posts() ) : $loop->the_post();?>
				<div class="col-sm-12">
				 <a  class="text-center page-title" href="<?php the_permalink(); ?>">
				 <?php the_title();?>
				 </a>
				 
				 <hr></hr>
				 <?php
				 get_the_excerpt();
				?>
				</div>
				<?php
			endwhile; // End of the loop.
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
