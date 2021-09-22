<?php get_header(); ?>

<div class="posts">
    <?php if ( $q -> have_posts() ) : while( $q -> have_posts() ) : $q -> the_post();?>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>