<?php
/**
 * Template part for displaying pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sta_Fe_Relocation
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div <?php sta_fe_relocation_content_class( 'entry-content' ); ?>>
		<div class="max-w-6xl mx-auto">
		<?php
			the_content();
		?>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
