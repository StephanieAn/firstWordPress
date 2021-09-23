<?php get_header(); ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <?php get_the_post_thumbnail('small')?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>

<?php endwhile; endif; ?>



<?php get_footer(); ?>