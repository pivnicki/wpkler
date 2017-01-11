<?php
/*
  Template Name:Brownfield Page
 */

get_header(); ?>
 

		<?php $loop=new WP_Query(array('post_type'=>'Brownfields',
				'orderby'=>'post_id','order'=>'ASC')); ?>

	<div class="container">
   				<div class="row" id="primary">
					<main id="content" class="col-sm-8">
					
					<hr></hr>
<h1 class="text-center">Brownfield</h1>

<hr></hr>

			<?php
			while ( $loop->have_posts() ) : $loop->the_post();

				?>
			 <div class="col-sm-12">
			 <a  class="text-center" href="<?php the_permalink(); ?>" ><?php the_title();?></a>
	 <hr></hr>
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
