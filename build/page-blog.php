<?php

/*
Template Name: Blog
*/

 get_header(); ?>


<?php while ( have_posts() ) : the_post();?>
<main id="main" class="site-main" role="main">

 




<section class="hero reverse">

<?php
    $sticky = get_option('sticky_posts');
    $args = array(
        'post_type' => 'post',
        'post__in' => $sticky,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'posts_per_page' => 1,
        
    );

    $the_query = new WP_Query( $args ); ?>

    <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="right">
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <figure>
                    <img src="<?php echo $image[0]; ?>" alt="">
                </figure>
            <?php endif; ?>
        </div>
        <div class="left ">
            <a href="<?php the_permalink();?>">
            <h1><?php the_title();?></h1>
            </a>
            <a href="<?php the_permalink();?>">
            <p><?php the_excerpt();?></p>
            </a>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>	 			    

  

</section>


<?php 
$terms = get_field('category_list');
if( $terms ): ?>
 
    <?php foreach( $terms as $term ): ?>
        <section class="blog-cat blog-cat__one section-container no-side-pad no-bottom">
            <h2 class="headline-sans"><?php echo esc_html( $term->name ); ?></h2>
            <a class="cat-archive-link" href="<?php echo esc_url( get_term_link( $term ) ); ?>">See all articles on <?php echo esc_html( $term->name ); ?></a>

            <ul class="card-container section-container">
            <?php
            $args = array(
                'post_type' => 'post',
                'orderby' => 'menu_order',
                'order' => 'ASC',
                'posts_per_page' => 3,
                'category_name' => $term->slug,
            );

            $the_query = new WP_Query( $args ); ?>

            <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php include 'components/cards/blog-card.php';?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>	 			    
            </ul>

            </section>
    <?php endforeach; ?>

<?php endif; ?>


		




</main>
<?php			
	endwhile;
    ?>

<?php get_footer(); ?>