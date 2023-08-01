<?php
/**
 * The Ridge functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package The_Ridge
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function the_ridge_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on The Ridge, use a find and replace
		* to change 'the_ridge' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'the_ridge', get_template_directory() . '/languages' );

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
	//register_nav_menus(
		//array(
			//'menu-1' => esc_html__( 'Primary', 'the_ridge' ),
		//)
	//);

	// Register custom navigation menus
	function theme_register_menus() {
	    register_nav_menus(
	        array(
	            'primary-menu' => esc_html__('Primary Menu', 'theme-textdomain'),
	            'secondary-menu' => esc_html__('Secondary Menu', 'theme-textdomain'),
	        )
	    );
	}
	add_action('init', 'theme_register_menus');

	// Logo support
	function theme_custom_logo_setup() {
	    $defaults = array(
	        'height'      => 50,
	        'width'       => 150,
	        'flex-height' => true,
	        'flex-width'  => true,
	        'header-text' => array('site-title', 'site-description'),
	    );
	    add_theme_support('custom-logo', $defaults);
	}
	add_action('after_setup_theme', 'theme_custom_logo_setup');

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'the_ridge_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'the_ridge_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function the_ridge_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'the_ridge_content_width', 640 );
}
add_action( 'after_setup_theme', 'the_ridge_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function the_ridge_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'the_ridge' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'the_ridge' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'the_ridge_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function the_ridge_scripts() {
	wp_enqueue_style( 'the_ridge-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'the_ridge-style', 'rtl', 'replace' );

	wp_enqueue_script( 'the_ridge-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'the_ridge_scripts' );

// Check if Elementor is active and show admin notice if not installed
function my_elementor_notice() {
    if (!class_exists('Elementor\Plugin')) {
        echo '<div class="notice notice-error"><p><strong>Your theme requires Elementor plugin to be installed and activated.</strong> Please install and activate Elementor to take full advantage of this theme.</p></div>';
    }
}
add_action('admin_notices', 'my_elementor_notice');

// Enqueue Elementor styles and scripts
function my_elementor_styles_scripts() {
    if (class_exists('Elementor\Plugin')) {
        wp_enqueue_style('elementor-style', get_template_directory_uri() . '/elementor.css', array(), '1.0');
    }
}
add_action('wp_enqueue_scripts', 'my_elementor_styles_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

// Add a filter to the body_class
function add_admin_bar_body_class($classes) {
    if (is_admin_bar_showing()) {
        $classes[] = 'admin-bar-showing';
    }
    return $classes;
}
add_filter('body_class', 'add_admin_bar_body_class');

function add_custom_class_to_secondary_menu_items($classes, $item, $args) {
    // Check if this menu is the secondary menu
    if ($args->theme_location === 'secondary-menu') {
        // Add the custom class to the existing classes
        $classes[] = 'btn btn-ridge-primary-white display-9 text-white book-table';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_custom_class_to_secondary_menu_items', 10, 3);