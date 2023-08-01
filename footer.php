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

<!-- Footer Start -->
<footer  id="colophon" class="site-footer p-5 footer bg-light-yellow-secondary">
    <div class="container-fluid">
        <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mb-4">
          <!-- Content -->
          <h6 class="display-9 text-uppercase fw-medium mb-4 text-space-grotesk text-color-secondary">
            Contact Us
          </h6>
          <p class="display-8 text-color-primary">
            Whatsapp: +6281338774690<br/>
            Information: info@theridgebali.com<br/>
            Inquiry: reservation@theridgebali.com
          </p>
        </div>
        <!-- Grid column -->

        <div class="col-md-7 col-lg-7 col-xl-7 mb-4">
        <div class="row">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-4 col-xl-4 mb-4">
          <!-- Links -->
          <h6 class="display-9 text-uppercase fw-medium mb-4 text-space-grotesk text-color-secondary">
            Visit The Ridge
          </h6>
          <p class="display-8 text-color-primary">
            Jl. Raya Sayan, Ubud<br/>
                        Kabupaten Gianyar, Bali, 80571 Indonesia
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-4 col-xl-4 mb-4">
          <!-- Links -->
          <h6 class="display-9 text-uppercase fw-medium mb-4 text-space-grotesk text-color-secondary">
            Information
          </h6>
          <p class="display-8 text-color-primary">
            <a href="#!" class="text-reset">About The Ridge </a><br/>
            <a href="#!" class="text-reset">Explore The Villas</a><br/>
            <a href="#!" class="text-reset">Discover The Spa</a><br/>
            <a href="#!" class="text-reset">Special Offers</a><br/>
            <a href="#!" class="text-reset">Reviews</a><br/>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-4 col-xl-4 mb-4">
          <!-- Links -->
          <h6 class="display-9 text-uppercase fw-medium mb-4 text-space-grotesk text-color-secondary">
            Inspiration
          </h6>
          <p class="display-8 text-color-primary">
            <a href="#!" class="text-reset">Blog Category 1</a><br/>
            <a href="#!" class="text-reset">Blog Category 2</a><br/>
            <a href="#!" class="text-reset">Blog Category 3</a><br/>
            <a href="#!" class="text-reset">Blog Category 4</a><br/>
            <a href="#!" class="text-reset">Blog Category 5</a><br/>
          </p>
        </div>
        <!-- Grid column -->

        </div>
        </div>

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="display-9 text-uppercase fw-medium mb-4 text-space-grotesk">Connect With Us</h6>
          <p class="display-8 text-color-primary">
            <a href="#!" class="text-reset">ig </a>
            <a href="#!" class="text-reset">fb </a>
            <a href="#!" class="text-reset">wa </a>
            <a href="#!" class="text-reset">yt</a>
            <a href="#!" class="text-reset">pt</a>
          </p>
        </div>
        <!-- Grid column -->
      </div>
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
      <!-- Grid row -->
    </div><!--end container-fluid-->
</footer><!--end footer-->
<!-- End -->

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
