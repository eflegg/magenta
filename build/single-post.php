<?php
/*
Template Name: Single Post
*/


get_header(); ?>
	<?php while ( have_posts() ) : the_post();?>

	<main id="main" class="site-main" role="main">


<?php 
$excerpt = get_the_excerpt();
?>
<section class="post-hero">
	<h1 class=""><?php the_title();?></h1>
	<p class=""><?php echo $excerpt;?></p>

</section>


<section class="section-container__post default-type ">

     

        <div class="flexible-content">
				<?php echo the_content(); ?>
		
          </div>
         

</section>
 






</main>


	<?php			
	endwhile;
	?>
<?php get_footer(); ?>




