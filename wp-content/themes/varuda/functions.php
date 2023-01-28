<?php
function varuda_css() {
	$parent_style = 'avril-parent-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'varuda-style', get_stylesheet_uri(), array( $parent_style ));
	
	wp_enqueue_style('varuda-color-default',get_stylesheet_directory_uri() .'/assets/css/color/default.css');
	wp_dequeue_style('avril-default');
	
	wp_enqueue_style('varuda-media-query',get_stylesheet_directory_uri().'/assets/css/responsive.css');
	wp_dequeue_style('avril-media-query');

}
add_action( 'wp_enqueue_scripts', 'varuda_css',999);
   	
/**
 * Called all the Customize file.
 */
require( get_stylesheet_directory() . '/inc/customize/varuda-premium.php');


/**
 * Import Options From Parent Theme
 *
 */
function varuda_parent_theme_options() {
	$avril_mods = get_option( 'theme_mods_avril' );
	if ( ! empty( $avril_mods ) ) {
		foreach ( $avril_mods as $avril_mod_k => $avril_mod_v ) {
			set_theme_mod( $avril_mod_k, $avril_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'varuda_parent_theme_options' );