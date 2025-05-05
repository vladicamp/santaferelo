<?php
get_header();
?>

	<section id="primary">
		<main id="main">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				if ( have_rows('components') ) :
					while ( have_rows('components') ) : the_row();
						$component = get_row_layout();
						get_template_part("template-parts/components/" . $component);
					endwhile;
				endif;

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
