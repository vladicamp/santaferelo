<?php 
/**
 * Template Name: Special

 */
get_header();
?>

	<section id="primary">
		<main id="main">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page-special' );

				// If comments are open, or we have at least one comment, load
				// the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
