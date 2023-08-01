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

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'the_ridge' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'the_ridge' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'the_ridge' ), 'the_ridge', '<a href="https://theridgebali.com">Ardika & Sukraada</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
