<?php get_header(); ?>

    <?php

    if( have posts() ):
        while( have_posts() ): the_post(); echo 'This is the format: ' .get_post_format(); ?>

            <?php get_template_part('content', get_post_format()); ?>

       <?php endwhile;

    endif;

     ?>
<?php get_footer(); ?>
