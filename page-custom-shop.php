<?php

/*
Template Name: Custom Shop
*/
get_header(); ?>

<?php while ( have_posts() ) : the_post();?>


<section class=" section-container default-type ">
    <div class="flexible-content">
		<?php echo the_content(); ?>
	</div>
</section>

<?php			
	endwhile;
    ?>


<?php get_footer(); ?>