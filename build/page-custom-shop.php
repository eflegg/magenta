<?php

/*
Template Name: Custom Shop
*/
get_header(); ?>

<?php while ( have_posts() ) : the_post();?>

<main class="main-content">

<section class="hero reverse ">


<?php
$tax_query[] = array(
    'taxonomy' => 'product_visibility',
    'field'    => 'name',
    'terms'    => 'featured',
    'operator' => 'IN', // or 'NOT IN' to exclude feature products
);

// The query
$args =  array(
    'post_type'           => 'product',
    'post_status'         => 'publish',
    'ignore_sticky_posts' => 1,
    'posts_per_page'      => 1,
    'orderby'             => $orderby,
    'order'               => $order == 'asc' ? 'asc' : 'desc',
    'tax_query'           => $tax_query 
 );
?>

<?php
  

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
            <a fade href="<?php the_permalink();?>">
            <h1><?php the_title();?></h1>
            </a>
            <a fade href="<?php the_permalink();?>">
            <p><?php the_excerpt();?></p>
            </a>
            <a class="btn"href="<?php the_permalink();?>">see more</a>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>	 			    

</section>

<?php
if( false === wp_script_is( 'single-filter', 'enqueued' ) ){
    echo '<h2>not working</h2>';
}
?>

<section class="section-container">


<!-- registered a custom sidebar if needed -->
<!-- <?php if( is_active_sidebar( 'shop-page-before-content-widget-area' ) ) : ?>
	<aside class="shop-page-before-content-widget-area">
        <h2>new widget</h2>
		<?php dynamic_sidebar( 'shop-page-before-content-widget-area' ); ?>
	</aside>
<?php endif; ?> -->

<?php 
            $dataType = "product"; 
            $category = "Bars";
            $path = "components/cards/blog-card.php";
            ?>
        <?php include 'components/reusable-filter.php';?>

<ul class="card-container section-container">
        
<?php
   
    $args = array(
        'post_type' => 'product',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'posts_per_page' => -1,
      
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
</main>

<?php			
	endwhile;
    ?>


<?php get_footer(); ?>