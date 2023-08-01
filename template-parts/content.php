<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Ridge
 */

?>

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
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				the_ridge_posted_on();
				the_ridge_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php the_ridge_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'the_ridge' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'the_ridge' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php the_ridge_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
