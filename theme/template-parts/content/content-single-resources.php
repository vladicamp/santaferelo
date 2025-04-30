<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sta_Fe_Relocation
 */

$taxonomy = get_post_taxonomies();
$readingTime = get_field('reading_time');
$term = get_field('resources-type');

var_dump( $term );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="pb-20 font-black">
          <a href="<?= site_url('/resources/') ?>" class=""><span>‹</span> Back to news</a>
	</div>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title mb-2">', '</h1>' ); ?>

		<?php if( $readingTime ) : ?>

			<p>Reading time <?= $readingTime ?></p>

		<?php endif; ?>

		<p class="pb-10">
			<a href=""><?= $taxonomy[0] ?></a>
		</p>

		<?php if ( ! is_page() ) : ?>
			<div class="entry-meta">
				<?php sta_fe_relocation_entry_meta(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php sta_fe_relocation_post_thumbnail(); ?>

	<div <?php sta_fe_relocation_content_class( 'entry-content mt-8' ); ?>>
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					__( 'Continue reading<span class="sr-only"> "%s"</span>', 'sta-fe-relocation' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before' => '<div>' . __( 'Pages:', 'sta-fe-relocation' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php sta_fe_relocation_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	<div class="pt-20 font-black">
          <a href="<?= site_url('/resources/') ?>" class=""><span>‹</span> Back to news</a>
	</div>

</article><!-- #post-${ID} -->

<article class="py-20">
 	<h3 class="pb-5 text-xl font-bold">
		 Sign up now to get all the latest updates!	
	</h3>
	<a href="#" class="inline-block px-20 py-4 bg-red-900 text-white">Subscribe</a>
</article>
