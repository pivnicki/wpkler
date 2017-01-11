<?php

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
/**
 * kler functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kler
 */

if ( ! function_exists( 'kler_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kler_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on kler, use a find and replace
	 * to change 'kler' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'kler', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'kler' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'kler_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'kler_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kler_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kler_content_width', 640 );
}
add_action( 'after_setup_theme', 'kler_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kler_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'kler' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'kler' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'kler_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kler_scripts() {
	wp_enqueue_style( 'kler-style', get_stylesheet_uri() );

	wp_enqueue_script( 'kler-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'kler-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kler_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/**
 * Custom post type Greenfield
 */

// function greenfield_custom_post_type(){
    // $labels=array(
        // 'name'=>'Greenfields',
        // 'singular_name'=>'Greenfield',
        // 'add_new'=>'Nov Greenfield',
        // 'all_items'=>'Svi Greenfields',
        // 'add_new_item'=>'Dodaj novu stavku za Greenfield',
        // 'edit_item'=>'Izmeni stavku za Greenfield',
        // 'view_item'=>'Pregledaj stavku za Greenfield',
        // 'search_item'=>'Pretrazi Greenfield',
        // 'not_found'=>'Nema u pretrazi',
        // 'not_found_in_trash'=>'Nema u kanti za smece',
        // 'parent_item_colon'=>'Parent Item'
    // );
    
    // $args=array(
        // 'labels'=>$labels,
        // 'public'=>true,
        // 'has_archive'=>true,
        // 'publicly_queryable'=>true,
        // 'query_var'=>true,
        // 'rewrite'=>true,
        // 'capability_type'=>'post',
        // 'hierarchical'=>false,
        // 'supports'=>array('title','editor','excerpt','thumbnail','revisions','custom-fields'),
        // 'taxonomies'=>array('category','post_tag'),
        // 'menu_position'=>7,
        // 'exclude_from_search'=>false,
		// 'menu_icon'           => 'http://icons.iconarchive.com/icons/mattahan/umicons/24/Letter-G-icon.png'
    // );
    
    // register_post_type('greenfields',$args);
// }

// add_action('init','greenfield_custom_post_type');

 
 /**
 * Custom post type Brownfield
 */

// function brownfield_custom_post_type(){
    // $labels=array(
        // 'name'=>'Brownfields',
        // 'singular_name'=>'Brownfield',
        // 'add_new'=>'Nov Brownfield',
        // 'all_items'=>'Svi Brownfields',
        // 'add_new_item'=>'Dodaj novu stavku za Brownfield',
        // 'edit_item'=>'Izmeni stavku za Brownfield',
        // 'view_item'=>'Pregledaj stavku za Brownfield',
        // 'search_item'=>'Pretrazi Brownfield',
        // 'not_found'=>'Nema u pretrazi',
        // 'not_found_in_trash'=>'Nema u kanti za smece',
        // 'parent_item_colon'=>'Parent Item',
		
    // );
    
    // $args=array(
        // 'labels'=>$labels,
        // 'public'=>true,
        // 'has_archive'=>true,
        // 'publicly_queryable'=>true,
        // 'query_var'=>true,
        // 'rewrite'=>true,
        // 'capability_type'=>'post',
        // 'hierarchical'=>false,
        // 'supports'=>array('title','editor','excerpt','thumbnail','revisions'),
        // 'taxonomies'=>array('category','post_tag'),
        // 'menu_position'=>7,
        // 'exclude_from_search'=>false,
		// 'menu_icon'           => 'http://icons.iconarchive.com/icons/ariil/alphabet/32/Letter-B-icon.png'
        
    // );
  
    // register_post_type('brownfields',$args);
// }

// add_action('init','brownfield_custom_post_type');


 /**
 * Custom post type Srbobran
 */

// function srbobran_custom_post_type(){
    // $labels=array(
        // 'name'=>'srbobran',
        // 'singular_name'=>'Srbobran',
        // 'add_new'=>'Nov Srbobran',
        // 'all_items'=>'Svi Srbobran',
        // 'add_new_item'=>'Dodaj novu stavku za Srbobran',
        // 'edit_item'=>'Izmeni stavku za Srbobran',
        // 'view_item'=>'Pregledaj stavku za Srbobran',
        // 'search_item'=>'Pretrazi Srbobran',
        // 'not_found'=>'Nema u pretrazi',
        // 'not_found_in_trash'=>'Nema u kanti za smece',
        // 'parent_item_colon'=>'Parent Item',
		
    // );
    
    // $args=array(
        // 'labels'=>$labels,
        // 'public'=>true,
        // 'has_archive'=>true,
        // 'publicly_queryable'=>true,
        // 'query_var'=>true,
        // 'rewrite'=>true,
        // 'capability_type'=>'post',
        // 'hierarchical'=>false,
        // 'supports'=>array('title','editor','excerpt','thumbnail','revisions','custom-fields'),
        // 'taxonomies'=>array('category','post_tag'),
        // 'menu_position'=>7,
        // 'exclude_from_search'=>false,
		// 'menu_icon'           => 'http://icons.iconarchive.com/icons/ariil/alphabet/32/Letter-S-icon.png'
        
    // );
  
    // register_post_type('srbobran',$args);
// }

// add_action('init','srbobran_custom_post_type');


//create a custom taxonomy name it topics for your posts

	 /**
 * Recent_Posts widget w/ category exclude class
 * This allows specific Category IDs to be removed from the Sidebar Recent Posts list
 *
 */
class WP_Widget_Recent_Posts_Exclude extends WP_Widget {

	function __construct() {
		$widget_ops = array('classname' => 'widget_recent_entries', 'description' => __( "The most recent posts on your site") );
		parent::__construct('recent-posts', __('Recent Posts with Exclude'), $widget_ops);
		$this->alt_option_name = 'widget_recent_entries';

		add_action( 'save_post', array(&$this, 'flush_widget_cache') );
		add_action( 'deleted_post', array(&$this, 'flush_widget_cache') );
		add_action( 'switch_theme', array(&$this, 'flush_widget_cache') );
	}

	function widget($args, $instance) {
		$cache = wp_cache_get('widget_recent_posts', 'widget');

		if ( !is_array($cache) )
			$cache = array();

		if ( ! isset( $args['widget_id'] ) )
			$args['widget_id'] = $this->id;

		if ( isset( $cache[ $args['widget_id'] ] ) ) {
			echo $cache[ $args['widget_id'] ];
			return;
		}

		ob_start();
		extract($args);

		$title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Posts') : $instance['title'], $instance, $this->id_base);
		if ( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) )
 			$number = 10;
 		$exclude = empty( $instance['exclude'] ) ? '' : $instance['exclude'];

		$r = new WP_Query(array('posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true, 'category__not_in' => explode(',', $exclude) ));
		if ($r->have_posts()) :
?>
		<?php //echo print_r(explode(',', $exclude)); ?>
		<?php echo $before_widget; ?>
		<?php if ( $title ) echo $before_title . $title . $after_title; ?>
		<ul>
		<?php  while ($r->have_posts()) : $r->the_post(); ?>
		<li><a href="<?php the_permalink() ?>" title="<?php echo esc_attr(get_the_title() ? get_the_title() : get_the_ID()); ?>"><?php if ( get_the_title() ) the_title(); else the_ID(); ?></a></li>
		<?php endwhile; ?>
		</ul>
		<?php echo $after_widget; ?>
<?php
		// Reset the global $the_post as this query will have stomped on it
		wp_reset_postdata();

		endif;

		$cache[$args['widget_id']] = ob_get_flush();
		wp_cache_set('widget_recent_posts', $cache, 'widget');
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = (int) $new_instance['number'];
		$instance['exclude'] = strip_tags( $new_instance['exclude'] );
		$this->flush_widget_cache();

		$alloptions = wp_cache_get( 'alloptions', 'options' );
		if ( isset($alloptions['widget_recent_entries']) )
			delete_option('widget_recent_entries');

		return $instance;
	}

	function flush_widget_cache() {
		wp_cache_delete('widget_recent_posts', 'widget');
	}

	function form( $instance ) {
		$title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		$number = isset($instance['number']) ? absint($instance['number']) : 5;
		$exclude = esc_attr( $instance['exclude'] );
?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>

		<p><label for="<?php echo $this->get_field_id('number'); ?>"><?php _e('Number of posts to show:'); ?></label>
		<input id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $number; ?>" size="3" /></p>
		
		<p>
			<label for="<?php echo $this->get_field_id('exclude'); ?>"><?php _e( 'Exclude Category(s):' ); ?></label> <input type="text" value="<?php echo $exclude; ?>" name="<?php echo $this->get_field_name('exclude'); ?>" id="<?php echo $this->get_field_id('exclude'); ?>" class="widefat" />
			<br />
			<small><?php _e( 'Category IDs, separated by commas.' ); ?></small>
		</p>
<?php
	}
}

function WP_Widget_Recent_Posts_Exclude_init() {
    unregister_widget('WP_Widget_Recent_Posts');
    register_widget('WP_Widget_Recent_Posts_Exclude');
}

add_action('widgets_init', 'WP_Widget_Recent_Posts_Exclude_init');


//CPT BROWNFIELDS
add_action( 'init', 'cptui_register_my_cpts_brownfields' );
function cptui_register_my_cpts_brownfields() {
	$labels = array(
		"name" => __( 'brownfields', 'kler' ),
		"singular_name" => __( 'brownfield', 'kler' ),
		"menu_name" => __( 'brownfields', 'kler' ),
		);

	$args = array(
		"label" => __( 'brownfields', 'kler' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
				"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "brownfields", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "http://icons.iconarchive.com/icons/ariil/alphabet/32/Letter-B-icon.png",
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields" ),					);
	register_post_type( "brownfields", $args );

// End of cptui_register_my_cpts_brownfields()
}


//CPT PROJEKTI
add_action( 'init', 'cptui_register_my_cpts_projects' );
function cptui_register_my_cpts_projects() {
	$labels = array(
		"name" => __( 'projects', 'kler' ),
		"singular_name" => __( 'projects', 'kler' ),
		"menu_name" => __( 'projekti', 'kler' ),
		);

	$args = array(
		"label" => __( 'projekti', 'kler' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
				"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "projekti", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "http://icons.iconarchive.com/icons/ariil/alphabet/32/Letter-P-icon.png",
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields", ),	
		'taxonomies'=>array('category','post_tag')
		);
	register_post_type( "projects", $args );

//End of cptui_register_my_cpts_projects()
}


