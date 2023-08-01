<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package The_Ridge
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function the_ridge_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'the_ridge_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function the_ridge_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'the_ridge_pingback_header' );

function theme_enqueue_scripts() {
    // Enqueue CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.5.0');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');

    // Enqueue JavaScript
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.0.min.js', array(), '3.7.0', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '4.5.0', true);
    wp_enqueue_script('feather', get_template_directory_uri() . '/assets/js/feather.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');