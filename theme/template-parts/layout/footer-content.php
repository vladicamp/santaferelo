<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sta_Fe_Relocation
 */

?>

<footer id="colophon" class="bg-black">

	<div class="max-w-6xl mx-auto p-5 text-white text-center">
		<?php
		$sta_fe_relocation_blog_info = get_bloginfo( 'name' );
		if ( ! empty( $sta_fe_relocation_blog_info ) ) :
			?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> © <?= currentYear() ?>. All rights reserved.
			<?php
		endif;
		?>
	</div>

</footer><!-- #colophon -->
