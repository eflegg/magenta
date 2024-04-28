<?php


get_header(); ?>


<main id="main" class="site-main" role="main">


<section class="section-container default-type">

<?php the_content();?>

<?php woocommerce_content();?>

</section>



</main>
	
<?php get_footer(); ?>