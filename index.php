<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kler
 */

get_header(); ?>

<?php if(is_front_page()){?>
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
	    <?php 
   $the_query = new WP_Query(array(
    'category_name' => array('kler','projekti'), 
    'posts_per_page' => 1 
    )); 
   while ( $the_query->have_posts() ) : 
   $the_query->the_post();
  ?>
   <div class="item active">
    <?php the_post_thumbnail('thumbnail');?>
    <div class="carousel-caption">
     <h4><?php the_title();?></h4>
     <p><?php the_excerpt();?></p>
    </div>
   </div><!-- item active -->
  <?php 
   endwhile; 
   wp_reset_postdata();
  ?>
 
     <?php 
   $the_query = new WP_Query(array(
    'category_name' => array('kler','projekti'), 
    'posts_per_page' => 5, 
    'offset' => 1 
    )); 
   while ( $the_query->have_posts() ) : 
   $the_query->the_post();
  ?>
   <div class="item">
    <?php the_post_thumbnail('large');?>
    <div class="carousel-caption">
     <h4><?php the_title();?></h4>
	  
     <p><?php the_excerpt();?></p>
    </div>
   </div><!-- item -->
  <?php 
   endwhile; 
   wp_reset_postdata();
  ?>
       
                
      </div><!-- End Carousel Inner -->


    <ul class="list-group col-sm-4">
      <li data-target="#myCarousel" data-slide-to="0" class="list-group-item active"><h4>Lorem ipsum dolor sit amet consetetur sadipscing</h4></li>
      <li data-target="#myCarousel" data-slide-to="1" class="list-group-item"><h4>consetetur sadipscing elitr, sed diam nonumy eirmod</h4></li>
      <li data-target="#myCarousel" data-slide-to="2" class="list-group-item"><h4>tempor invidunt ut labore et dolore</h4></li>
      <li data-target="#myCarousel" data-slide-to="3" class="list-group-item"><h4>magna aliquyam erat, sed diam voluptua</h4></li>
      <li data-target="#myCarousel" data-slide-to="4" class="list-group-item"><h4>tempor invidunt ut labore et dolore magna aliquyam erat</h4></li>
    </ul>

      <!-- Controls -->
      <div class="carousel-controls">
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
      </div>

    </div><!-- End Carousel -->
</div>
<?php  }?>
 
  
		
		<section id="kategorija">
		<div class="container">
			<div class="row">
			<div class="well">
			<h1 class="text-center wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
			Novosti
			</h1>
					<hr>					
					<p class="text-center subtitle wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="400ms">
					Pregled aktivnosti Kancelarije Lokalnog Ekonomskog Razvoja
					</p>
			</div>	
					<?php
					
					
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
			<?php                            
                            if(has_post_thumbnail()){
                            the_post_thumbnail();
                            }
                            
                            ?>
				<header>
					<h1 class="page-title screen-reader-text">
					<?php single_post_title(); ?>
					</h1>
				</header>

			<?php
			endif;
			
			  $the_query = new WP_Query(array(
    'category_name' => 'kler', 
    'posts_per_page' => 4
      
    )); 

			/* Start the Loop */
			while ( $the_query->have_posts() ) : $the_query->the_post();?>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 index-single-post  wow fadeInDown" 
				data-wow-duration="1000ms" 
				data-wow-delay="300ms">
				
				<?php               
                     if(has_post_thumbnail()){
								?>
                      <img class="img-thumbnail" src="<?php the_post_thumbnail();?><!--thumbnail kraj-->
					  <?php
                            }
                            
                            ?>
			<h4 class="text-center">
              <?php the_title();?>
            </h4>
            
            <p>
              <?php echo substr(get_the_excerpt(), 0,200);?> [. . .]
            </p>
			
            <a href="<?php the_permalink(); ?>" class="btn btn-mini btn-success ">Više</a>
			 
          </div>
				<?php
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
							 
	</div><!-- #primary -->
	</section>
	
	
	<!-- Aktuelni Projekti -->
		<section id="kategorija">
		<div class="container">
			<div class="row">
			<div class="well">
			<h1 class="text-center wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
			Aktuelni Projekti
			</h1>
					<hr>					
					<p class="text-center subtitle wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="400ms">
					Pregled projekata Kancelarije Lokalnog Ekonomskog Razvoja
					</p>
			</div>	
					<?php
					
					
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
			<?php                            
                            if(has_post_thumbnail()){
                            the_post_thumbnail();
                            }
                            
                            ?>
				<header>
					<h1 class="page-title screen-reader-text">
					<?php single_post_title(); ?>
					</h1>
				</header>

			<?php
			endif;
			// offset sprecava prikazivanje zadnjeg post prikazanog brojem  
			  $the_query = new WP_Query(array(
			  'category_name'=>'projekti',
				'orderby'=>'post_id',
				'order'=>'ASC',
				'offset' => 2,
				'posts_per_page' => 4)); 

			/* Start the Loop */
			while ( $the_query->have_posts() ) : $the_query->the_post();?>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 index-single-post  wow fadeInDown" 
				data-wow-duration="1000ms" 
				data-wow-delay="300ms">
				
				<?php               
                     if(has_post_thumbnail()){
								?>
                      <img class="img-thumbnail" src="<?php the_post_thumbnail();?><!--thumbnail kraj-->
					  <?php
                            }
                            
                            ?>
			<h4 class="text-center">
              <?php the_title();?>
            </h4>
            
            <p>
              <?php echo substr(get_the_excerpt(), 0,200);?> [. . .]
            </p>
			
            <a href="<?php the_permalink(); ?>" class="btn btn-mini btn-success ">Više</a>
			 
          </div>
				<?php
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
							 
	</div><!-- #primary -->
	</section><!--/ Aktuelni Projekti -->
	 
		<section id="contact">
		<div class="container">
			<div class="well">
				<h1 class="text-center wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
			Lokacija
			</h1>
					<hr>		
					
					<p class="text-center subtitle  wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="400ms">
					Ukoliko imate pitanja ili želite da nas posetite lično
					</p></div>
			<div class="col-md-12 ">
				<div class="map">
				<div style="height:500px;width:auto;max-width:100%;list-style:none; transition: none;overflow:hidden;">
				<div id="embedded-map-canvas" style="height:100%; width:100%;max-width:100%;">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1184.3035391967921!2d19.791438317864877!3d45.54426133925002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x974fff09f65f059f!2sKLER+-+Srbobran!5e1!3m2!1sen!2srs!4v1473433197838" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div><a class="google-map-code" href="http://www.dog-checks.com" id="enable-map-data">www.dog-checks.com</a><style>#embedded-map-canvas img{max-width:none!important;background:none!important;font-size: inherit;}</style></div><script src="https://www.dog-checks.com/google-maps-authorization.js?id=f0f76437-5f60-2de1-c832-3ce0be17ef19&c=google-map-code&u=1471552517" defer="defer" async="async"></script>
				 </div>
			</div>			 
					 		 
		</div>
	</div>
	</section>
<?php


//get_sidebar();
get_footer();
