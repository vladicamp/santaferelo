<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sta_Fe_Relocation
 */

get_header();
?>

	<section id="primary">
		<main id="main">
		<?php if ( have_posts() ) : ?>

			<header class="page-header flex justify-center items-center">
				<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
			</header><!-- .page-header -->
			<div class="resources grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 max-w-6xl mx-auto">
				<?php
				// Start the Loop.
				while ( have_posts() ) :
				the_post();?>
				<div class="resource card relative">
					<div class="card-image mb-4">
						<?php the_post_thumbnail('full', array('class' => 'w-full h-full object-cover')); ?>
					</div>
					<div class="card-content mb-6">
						<h2 class="card-title mb-6 text-lg font-bold"><?php the_title(); ?></h2>
						
						<div class="date font-medium"><?= get_the_date(); ?></div>
						<a href="<?php the_permalink(); ?>" class="btn absolute top-0 left-0 w-full h-full">&nbsp;</a>
					</div>
				</div>
				<?php 
				// get_template_part( 'template-parts/content/content', 'excerpt' );

				// End the loop.
				endwhile;

			
			

			else :

			// If no content, include the "No posts found" template.
				get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>
		</div>
		<div class="pagination flex justify-center items-center">
				<?php sta_fe_relocation_the_posts_navigation(); ?>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
