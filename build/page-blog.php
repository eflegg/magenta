<?php

/*
Template Name: Blog
*/

 get_header(); ?>


<?php while ( have_posts() ) : the_post();?>
<main id="main" class="site-main" role="main">

 


<!-- could have a list of categories acf boxes, Melanie checks three,
stored in three variables, or array list. use those values to 
query posts. Relationship field for featured post

need the whole category because need slug and name - relationship field?

-->

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


		

<!-- Blog Category 1 -->
<!-- <section class="blog-cat section-container">
<h2>On Hair Health</h2>

<?php
$taxonomy = 'category';
$term = 'hair-health';
$archive_link = home_url('/' . $taxonomy . '/' . $term);
?>

  <a href="<?php echo $archive_link;?>">See all articles on hair health</a>

    <ul class="card-container">
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
</section> -->



</main>
<?php			
	endwhile;
    ?>

<?php get_footer(); ?>