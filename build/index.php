<?php get_header(); ?>
<main id="main" class="site-main main-content" role="main">

 


<!-- could have a list of categories acf boxes, Melanie checks three,
stored in three variables, or array list. use those values to 
query posts. Relationship field for featured post

need the whole category because need slug and name - relationship field?

-->

<?php
$categoryList - the_field('category_selector');
print_r($categoryList);
?>


		

<!-- Blog Category 1 -->
<section class="blog-cat blog-cat__one section-container">
<h2>On Hair Health</h2>

<?php
$taxonomy = 'category';
$term = 'hair-health';
$archive_link = home_url('/' . $taxonomy . '/' . $term);
?>

  <a class="fade" href="<?php echo $archive_link;?>">See all articles on hair health</a>

    <ul class="card-container">
      <?php
      $args = array(
          'post_type' => 'post',
          'orderby' => 'menu_order',
          'order' => 'ASC',
        'posts_per_page' => 3,
        'category_name' => 'hair-health'
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

<!-- Blog Category 2 -->
<section class="blog-cat blog-cat__two section-container">
<h2>Ingredients</h2>

<?php
$taxonomy = 'category';
$term = 'hair-health';
$archive_link = home_url('/' . $taxonomy . '/' . $term);

?>

  <a class="fade" href="<?php echo $archive_link;?>">See all articles on ingredients</a>

    <ul class="card-container">
      <?php
      $args = array(
          'post_type' => 'post',
          'orderby' => 'menu_order',
          'order' => 'ASC',
        'posts_per_page' => 3,
        'category_name' => 'ingredients'
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

<!-- Blog Category 3 -->
<section class="blog-cat blog-cat__three section-container">
<h2>Crystal Inspiration</h2>

<?php
$taxonomy = 'category';
$term = 'hair-health';
$archive_link = home_url('/' . $taxonomy . '/' . $term);

?>

  <a class="fade" href="<?php echo $archive_link;?>">See all articles on crystal inspiration</a>

    <ul class="card-container">
      <?php
      $args = array(
          'post_type' => 'post',
          'orderby' => 'menu_order',
          'order' => 'ASC',
        'posts_per_page' => 3,
        'category_name' => 'crystal-inspiration'
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

<?php get_footer(); ?>