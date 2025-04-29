<?php 
/**
 * Template Name: Resources

 */
get_header();
?>

	<section id="primary">
		<main id="main">
		<?php 
        $resources =  new WP_Query( array(
            'post_type' => 'resources',
            'posts_per_page' => 6,
            'paged' => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
        ) );
        if( $resources->have_posts() ) : 
        while ( $resources->have_posts() ) : $resources->the_post();?>

            <?php the_title();?>?>
            <div class="flex flex-col md:flex-row">
                <div class="w-full md:w-1/2">
                    <?php the_post_thumbnail();?>
                </div>
                <div class="w-full md:w-1/2">
                    <?php the_content();?>
                </div>
            </div>
        <?php endwhile; wp_reset_postdata();?>
	

		<?php endif;?>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
