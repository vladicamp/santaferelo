<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sta_Fe_Relocation
 */

?>

<header id="masthead" class=" max-w-6xl mx-auto flex justify-between items-center p-5">

	<div>
		
	<?php if(get_theme_mod( 'custom_logo' ) != '') : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<?php
			 $logo_id = get_theme_mod('custom_logo');
			 $logo = wp_get_attachment_image_src($logo_id, 'medium');
	
		
			?>
			<img src="<?= $logo[0];?>" alt="Santa Relocation" class="h-24">
		</a>
	<?php else : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="h-16">
		</a>
	<?php endif; ?>
	</div>

	<nav id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'sta-fe-relocation' ); ?>" class="flex justify-between">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'menu_class' => 'md:flex hidden ',
				'items_wrap'     => '<ul id="%1$s" class="%2$s flex items-center justify-end gap-8  p-4" aria-label="submenu">%3$s</ul>',
				// 'walker'         => new Tailwind_Navwalker(),
				// 'walker'         => new Tailwind_Navwalker(),
			)
		);
		?>
	</nav><!-- #site-navigation -->

</header><!-- #masthead -->
