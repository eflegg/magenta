<?php

/*
Template Name: Category Blog Page
*/


get_header(); ?>

<?php if ( have_posts() ) : ?>
    <h1 class="text-center"><?php single_cat_title(); ?></h1>
    <?php
    // Show an optional term description.
    $term_description = term_description();
    if ( ! empty( $term_description ) ) :
        printf( '<div class="text-center taxonomy-description">%s</div>', $term_description );
    endif;
?>

<ul class="card-container section-container">
	<?php while ( have_posts() ) : the_post(); ?>

    <?php include 'components/cards/blog-card.php'; ?>



    <?php endwhile; ?>



</ul>
    <?php the_posts_pagination( array(
    'mid_size'  => 3,
    'prev_text' => __( 'Back', 'textdomain' ),
    'next_text' => __( 'Next', 'textdomain' ),
) ); ?>
    <?php endif; ?>


<?php get_footer(); ?>