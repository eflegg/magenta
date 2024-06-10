<?php

/*
Template Name: Contact Page
*/

get_header(); ?>

<?php while ( have_posts() ) : the_post();?>

<?php
$defaultImage = 'http://localhost:10038/wp-content/uploads/2024/04/contact-bg.jpg';
$contactBg = get_field('contact_background_image');
$contactHeadline = get_field('contact_headline');
$contactDescription = get_field('contact_description');
?>

<main class="contact main-content">



<section style="background-image: url('<?php if(!$contactBg): echo $defaultImage;  else: echo $contactBg;  endif;  ?>'); background-size: cover; background-position: left;" class="section-container contact-hero">
    <h1><?php echo $contactHeadline;?></h1>
     <!-- this works because only one page uses this template. otherwise there would be conflict between the excerpts on each page that uses the same template -->
    <p class=""><?php echo $contactDescription;?></p>
</section>

<?php
$blogLink = home_url('/blog');
?>

<section class="section-container section-three">
    <div class="left">
    <article class="section-two top">
        <p class="headline-sans x-large-paragraph">
        Explore the answers to some common questions on the blog
</p>
        <a href="<?php echo $blogLink;?>" class="fade btn-arrow">Go to the blog</a>
    </article>
    <article>
        <p class="x-large-paragraph">
            Or reach out directly
        </p>
    </article>
    <article class="contact-form__container">
        <?php echo do_shortcode('[ninja_form id=1]');?>
    </article>
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