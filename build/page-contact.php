<?php

/*
Template Name: Contact Page
*/

get_header(); ?>

<?php while ( have_posts() ) : the_post();?>

<?php
$heroBg = 'http://localhost:10038/wp-content/uploads/2024/04/contact-bg.jpg';
?>

<main class="contact">

<section style="background-image: url('<?php if(!$heroBg): echo $defaultImage;  else: echo $heroBg;  endif;  ?>'); background-size: cover; background-position: left;" class="section-container contact-hero">
    <h1>Let's Talk</h1>
     <!-- this works because only one page uses this template. otherwise there would be conflict between the excerpts on each page that uses the same template -->
    <p class=""><?php echo get_the_excerpt();?></p>
</section>

<section class="section-container section-two">
   <h2 class="headline-sans">
   Explore the answers to some common questions on the blog
   </h2>
   <a href="#" class="btn--arrow">Go to the blog</a>
    
</section>

<section class="section-container section-three">
    <div class="left">
        <h2 class="headline-sans">
            Or reach out directly
        </h2>
    </div>
    <div class="right">
        <figure>
        <img src="<?php bloginfo('template_url'); ?>/images/svg/contact-crystal.svg" />
        </figure>
    </div>
</section>




</main>


<?php			
	endwhile;
    ?>


<?php get_footer(); ?>