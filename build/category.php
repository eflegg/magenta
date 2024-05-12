<?php


get_header(); ?>

<?php if ( have_posts() ) : ?>
    <p>Category: <?php single_cat_title(); ?></p>
    <?php
    // Show an optional term description.
    $term_description = term_description();
    if ( ! empty( $term_description ) ) :
        printf( '<div class="taxonomy-description">%s</div>', $term_description );
    endif;
?>
	<?php while ( have_posts() ) : the_post(); ?>
    <?php include 'components/cards/blog-card.php'; ?>



    <?php endwhile; ?>


    <?php endif; ?>

<?php get_footer(); ?>