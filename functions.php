<?php
/**
 * Carbon Child Theme
 *
 * Place any custom functionality/code snippets here.
 *
 * @since Carbon Child 1.0
 */

/**
 * Include child theme styles.
 *
 * @return void
 */
function carbon_child_styles() {
	$theme = wp_get_theme();
	wp_enqueue_style( 'carbon-style', get_template_directory_uri() . '/style.css', array(), $theme->parent()->get( 'Version' ) );
	wp_enqueue_style( 'carbon-child-style', get_stylesheet_uri(), array( 'carbon-style' ), $theme->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'carbon_child_styles' );
