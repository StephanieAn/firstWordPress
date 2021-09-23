<?php get_header(); ?>
<?php 
    if ( is_category() ) {
        $title = "Catégorie : " . single_tag_title( '', false );
    }
    elseif ( is_tag() ) {
        $title = "Étiquette : " . single_tag_title( '', false );
    }
    elseif ( is_search() ) {
        $title = "Vous avez recherché : " . get_search_query();
    }
    else {
        $title = 'Le Blog';
    }
?>
<h1><?php echo $title; ?></h1>

<div class="posts">
    <?php get_template_part( 'single' ); ?>    
</div>

<?php get_footer(); ?>