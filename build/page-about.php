<?php

/*
Template Name: About Page
*/

get_header(); ?>

<?php while ( have_posts() ) : the_post();?>

<?php
$headshot = 'http://localhost:10038/wp-content/uploads/2024/04/melanie-headshot_cropped.jpg';
?>

<main class="about--main main-content">

<figure class="background-crystal">
<img src="<?php bloginfo('template_url'); ?>/images/svg/background-crystal.svg"  alt="decorative illustration of a crystal" />
</figure>

<section class="hero">
    <div class="left section-container">
        <h1>Why Magenta</h1>
        <p>One day, I heard the word in my head as if by magic and my intuition knew right away that was it. 
        </p>
    </div>
    <div class="right">
       <img src="<?php echo $headshot;?>" alt="Black and white photo of Melanie smiling">
    </div>

</section>
<section class="section-container meet-melanie">
    <div class="left">
    <h2>Meet Melanie</h2>
    </div>
    <div class="right">
        <p class="no-top">My journey began in 2018 when I was struggling with postpartum hair loss . Searching desperately for a remedy and finding nothing solved the problem, I started to pay closer attention to the ingredients of the commercial products I was using. As I learned more about the numerous harmful chemicals present in most hair products, I realized my haircare routine needed to change completely. This meant no more parabens, silicones or anything else that wasn’t totally natural. Shampoo bars caught my attention for their practicality and their simple, natural ingredients, but still nothing was quite right, and in 2020, I decided I needed to create my own.</p>
        <p>Being a single mother in the midst of a global pandemic meant my dream of sharing my bars got put on hold for a few years, but by 2023 the pull was too strong and I couldn’t ignore what was moving my heart so intensely. Inspired by the healing nature of crystals, especially quartz, I knew I wanted these bars to be heart-warming vessels of connection, both within yourself and with the universe.</p>
    </div>
</section>



</main>


<?php			
	endwhile;
    ?>


<?php get_footer(); ?>