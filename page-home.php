<?php

/*
Template Name: Home Page
*/

get_header(); ?>

<?php while ( have_posts() ) : the_post();?>


<?php
//get field
$embraceBg = 'http://localhost:10038/wp-content/uploads/2024/04/ingredients-bg.jpeg'
?>


<?php
//get field
$ingredientBg = 'http://localhost:10038/wp-content/uploads/2024/04/aloe-no-bg_small.png';
?>

<?php
//get field
$careBg = 'http://localhost:10038/wp-content/uploads/2024/04/self-care.jpeg';
?>
<?php
//get field
$crystal = 'http://localhost:10038/wp-content/uploads/2024/04/crystal-2.svg';
?>


<?php
//get field
$headshot = 'http://localhost:10038/wp-content/uploads/2024/04/melanie-headshot_cropped.jpg';
?>

<?php
//get field
$inspired = 'http://localhost:10038/wp-content/uploads/2024/04/get-inspired.jpeg';
?>






   <?php include "components/hero.php";?>

   <section style="background-image: url('<?php if(!$embraceBg): echo $defaultImage;  else: echo $embraceBg;  endif;  ?>'); background-size: cover; background-position: center;" class="section-container section-two">

    <div class="content">
        <h2 class="headline-sans">Embrace spiritutal growth & connection to the divine</h2>
        <p>It’s not just a natural and nutritious cleanser for your hair. It’s a divine embrace. Every bar has been prepared to bring out the magic in everyday self-care rituals. The intention grounding each bar is to help you connect with your highest self.
        </p>
    </div>
   </section>

   <section class="section-container section-three">
    <div class="content">
        <h2 class="headline-sans">Effective, naturally</h2>
        <p>With Magenta, you can feel good about what’s in our bars. Each ingredient is selected to be gentle on your hair, and the planet. 
        </p>
        <a href="#" class="btn">explore ingredients</a>
    </div>
    <figure class="aloe">
        <img src="<?php echo $ingredientBg; ?>" alt="up close image of aloe vera">
    </figure>
</section>

<section class=" section-four">
    <figure class="left">
    <img src="<?php echo $careBg; ?>" alt="decorative image of a person floating on their back in the water">
    </figure>
    <div class="right">
    <div class="content section-container">
        <h2 class="headline-sans">Self care reimagined</h2>
        <p class="light-text">Magenta bars reflect the interconnectedness of the physical and the spiritual. They’ll remind you of your true divine nature. Magenta bars are clean, safe and natural shampoo and conditioning bars that not only care for your hair, but nurture your spirit too.
        </p>
        <a href="#" class="btn btn-light">go to the blog</a>
    </div>
    </div>
</section>

<section class="section-five section-container">
    <div class="content">
        <h2 class="dark-text">Open your heart and drink in this glorious day</h2>
        <figure>
        <img src="<?php echo $crystal; ?>" alt="decorative illustration of a crystal">
        </figure>
    </div>
</section>

<section class="section-four reverse section-six">
    <figure class="left">
    <img src="<?php echo $headshot; ?>" alt="decorative image of a person floating on their back in the water">
    </figure>
    <div class="right">
    <div class="content section-container">
        <p class="light-text">
        From one heart to another, Magenta bars are daily affirmations, a humble invitation to care for both body and spirit. 
        </p>
        <p class="light-text">Magenta bars began as a search for a solution to my struggles with hair loss, and then became a pathway to help others recover their own luscious manes. From there, Magenta evolved into a way to share a connection to something deeper.
        </p>
        <a href="#" class="btn btn-light">about Magenta</a>
    </div>
    </div>
</section>

<section class="section-seven section-container testimonials">
    <div class="testimonial--inner">
        <?php include 'components/cards/testimonial-card.php'; ?>
        <a href="#" class="btn">see for yourself</a>
    </div>

</section>

<section style="background-image: url('<?php if(!$inspired): echo $defaultImage;  else: echo $inspired;  endif;  ?>'); background-size: cover; background-position: center;" class="section-container section-eight">
    <div class="content">
        <h3 class="h2 light-text">Get inspired.</h3>
        <a href="#" class="btn btn-light">shop now</a>
    </div>
</section>

<?php			
	endwhile;
    ?>


<?php get_footer(); ?>

