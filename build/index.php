<?php get_header(); ?>
<main id="main" class="site-main" role="main">



<?php
if( have_posts() ) {
  while( have_posts() ) {
    the_post();
    ?>
    <h2><?php the_title(); ?></h2>
    <?php
  }
}
?>
			

</main>

<?php get_footer(); ?>