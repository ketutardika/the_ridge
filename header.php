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
        <button type="button" class="btn btn-ridge-primary-white display-9 text-white ms-3 book-villa">Book Villa</button>
        <button type="button" class="btn btn-ridge-primary-white display-9 text-white ms-3 book-table">Book Table</button>
    </div>
</header>

<!-- Hero Start -->
<section class="bg-half-170 bg-light pb-0 d-table w-100 bg-hero-ridge" style="background: url('source/assets/images/villa/bg_header_hero.png');">
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-12 text-center">
                <div class="title-heading mt-4">
                    <h1 class="display-3 text-white title-dark mb-3"> Magnificent views </h1>
                    <h5 class="fw-medium text-white title-dark mb-3 section-heading-text"> overlooking a tropical forest <br/> above the Ayung River </h5>   
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div> <!--end container-fluid-->
</section><!--end section-->
<!-- Hero End -->
