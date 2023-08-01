<?php
/**
 * Template part for displaying page content in page-home.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Ridge
 */

?>
<!-- Hero Start -->
<section class="bg-half-170 bg-light pb-0 d-table w-100 bg-hero-ridge" style="background: url('wp-content/themes/the_ridge/source/assets/images/villa/bg_header_hero.png');">
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

<!-- Start -->
<section class="p-5 mt-5">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="text-center mb-4 pb-2">
                    <h6 class="display-9 section-heading-text text-color-primary">THE COLLECTION</h6>
                    <h4 class="display-5 mt-2 mb-3 text-color-secondary">Dolore Magna Aliqua</h4>
                    <p class="display-8 mx-auto mb-0 text-color-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    <div class="mt-4">
                        <a href="javascript:void(0)" class="btn btn-ridge-primary display-9 ">FIND OUT MORE</a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>
</section>
<!-- End Section -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php 
			if (!is_elementor_editor()) {
			    // Display the title using your desired format
			    the_title('<h1 class="entry-title">', '</h1>');
			}
		?>
	</header><!-- .entry-header -->

	<?php the_ridge_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'the_ridge' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'the_ridge' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
