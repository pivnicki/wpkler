<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kler
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>
	<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div><label class="screen-reader-text" for="s">Pretraga:</label>
        <input type="text" style="height:50px;width:250px;font-size:20px;" value="" placeholder="Traži" name="s" id="s" />
		<br>
        <input type="submit" style="height:50px;width:150px;font-size:20px;"  id="searchsubmit" value="Pretraga" />
    </div>
</form>
	  
</aside><!-- #secondary -->
