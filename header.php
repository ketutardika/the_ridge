<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Ridge
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'the_ridge' ); ?></a>

	<header id="topnav" class="container-fluid p-5 d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
    <div class="col-md-3 col-xs-3">
        <div class="nav-trigger">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </div>
    <!--Logo-->
    <div class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <?php
        if (has_custom_logo()) {
            the_custom_logo();
        } else {
            echo '<a href="' . esc_url(home_url('/')) . '" class="nav-link px-2 link-secondary d-none d-sm-block">';
            echo '<img src="' . get_template_directory_uri() . '/assets/images/villa/the-ridge-logo.png" class="logo-dark-mode" alt="' . get_bloginfo('name') . '">';
            echo '</a>';
        }
        ?>
    </div>
    <!--Secondary Menu-->
    <div class="col-md-3 col-xs-3 text-end">
        <?php
	    // Check if the secondary menu is registered
	    if (has_nav_menu('secondary-menu')) {
	        // Display the secondary menu
	        wp_nav_menu(array(
	            'theme_location' => 'secondary-menu',
	            'container'      => 'div',
	            'container_class' => 'secondary-menu-wrapper',
	            'menu_class'     => 'secondary-menu',
	            'fallback_cb'    => false, // Do not display a fallback menu if the secondary menu is not assigned
	        ));
	    } else {
	        // Fallback content if the secondary menu is not registered
	        echo '<button type="button" class="btn btn-ridge-primary-white display-9 text-white ms-3 book-villa">Book Villa</button>';
	        echo '<button type="button" class="btn btn-ridge-primary-white display-9 text-white ms-3 book-table">Book Table</button>';
	    }
	    ?>
    </div>
</header>