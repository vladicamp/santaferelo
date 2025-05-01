<?php 
/**
 * Template Name: Special

 */
get_header();
?>

	<section id="primary">
		<main id="main" class="grid grid-cols-3 gap-10 max-w-6xl mx-auto p-5">
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

            <div class="flex flex-col relative">
               
                <?php if(get_field('lite')):?>
                    <h3 class="absolute text-black top-2 right-2 uppercase bg-amber-50 px-2 py-4">Lite</h3>
                <?php endif;?>
                <div class="w-full">
                    <?php the_post_thumbnail('large', array('class'=> 'mb-8') ); ?>
                </div>
                <div class="w-full">
                    <?php the_title();?>
                </div>
            </div>
          
        <?php endwhile; wp_reset_postdata();?>
	

		<?php endif;?>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
