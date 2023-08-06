<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Ridge
 */

?>
	<aside id="navigation">
    <div class="inner">
        <div class="nav-trigger">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>

        <?php
        // Display Primary Menu
        wp_nav_menu(array(
            'theme_location' => 'primary-menu',
            'container'      => 'ul',
            'menu_class'     => 'menu',
        ));
        ?>

        <hr>
        <p>"Welcome to our exclusive villa in Bali - Your dream destination for a perfect getaway. Immerse yourself in breathtaking views, modern amenities, and the serene beauty of the island. Book now and create unforgettable memories with your family and friends at our Bali Villa.  </p>
    </div>
</aside>

<?php wp_footer(); ?>

</body>
</html>
