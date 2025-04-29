<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sta_Fe_Relocation
 */

?>

<footer id="colophon">

	<div>
		<?php
		$sta_fe_relocation_blog_info = get_bloginfo( 'name' );
		if ( ! empty( $sta_fe_relocation_blog_info ) ) :
			?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> © 2025. Alrights reserved
			<?php
		endif;
		?>
	</div>

</footer><!-- #colophon -->
