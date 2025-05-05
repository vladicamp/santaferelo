<div class="image-text has-background" style="background-color: <?php the_sub_field('background_color'); ?>; background-image: url(<?php the_sub_field('background_image'); ?>);">
    <div class="max-w-6xl mx-auto py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 prose prose-xl">
            <?php if (get_sub_field('image_position') == 'left'): ?> 
                <div class="image">
                    <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('alt_text'); ?>">
                </div>
                <div class="text">
                    <?php the_sub_field('text'); ?>
                </div>
            <?php else: ?>
                <div class="text">
                    <?php the_sub_field('text'); ?>
                </div>
                <div class="image">
                    <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('alt_text'); ?>">
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>