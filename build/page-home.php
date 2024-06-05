<?php

/*
Template Name: Home Page
*/

get_header(); ?>

<?php while ( have_posts() ) : the_post();?>





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

<?php
$blogLink = home_url('/blog');
?>
<?php
$ingredientsLink = home_url('/ingredients');
?>
<?php
$aboutLink = home_url('/about');
?>
<?php
$shopLink = home_url('/shop');
?>

<main class="main-content">



   <?php include "components/hero.php";?>



   <?php
    $embraceBg = get_field('section_one_background_image');
    $sectionOneTitle = get_field('section_one_title');
    $sectionOneText = get_field('section_one_text');
    ?>
   <section style="background-image: url('<?php if(!$embraceBg): echo $defaultImage;  else: echo $embraceBg;  endif;  ?>'); background-size: cover; background-position: center;" class="section-container section-two">
    <div class="content">
        <h2 class="headline-sans fade-me"><?php echo $sectionOneTitle;?></h2>
        <p class="fade-me"><?php echo $sectionOneText;?>
        </p>
    </div>
   </section>


   <?php
    $sectionTwoImage = get_field('section_two_background_image');
    $sectionTwoTitle = get_field('section_two_title');
    $sectionTwoText = get_field('section_two_text');
    ?>
   <section class="section-container section-three">
    <div class="content">
        <h2 class="headline-sans fade-me"><?php echo $sectionTwoTitle;?></h2>
        <p class="fade-me"><?php echo $sectionOneText;?> 
        </p>
        <a href="<?php echo $ingredientsLink;?>" class="fade btn">explore ingredients</a>
    </div>
    <figure class="aloe">
        <img src="<?php echo $ingredientBg; ?>" alt="up close image of aloe vera">
    </figure>
</section>


<?php
    $sectionfourImage = get_field('section_four_image');
    $sectionfourTitle = get_field('section_four_title');
    $sectionfourText = get_field('section_four_text');
    ?>

<section class=" section-four">
    <figure class="left">
    <img src="<?php echo $sectionfourImage; ?>" alt="decorative image of a person floating on their back in the water">
    </figure>
    <div class="right">
    <div class="content section-container">
        <h2 class="headline-sans fade-me"><?php echo $sectionfourTitle;?></h2>
        <p class="light-text fade-me"><?php echo $sectionfourText;?>
        </p>
        <a href="<?php echo $blogLink;?>" class="btn btn-light">go to the blog</a>
    </div>
    </div>
</section>

<section class="section-five section-container">
    <div class="content">
        <h2 class="dark-text fade-me"><?php echo the_field('home_affirmation');?></h2>
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
    <div class="content section-container ">
        <p class="light-text fade-me">
        From one heart to another, Magenta bars are daily affirmations, a humble invitation to care for both body and spirit. 
        </p>
        <p class="light-text fade-me">Magenta bars began as a search for a solution to my struggles with hair loss, and then became a pathway to help others recover their own luscious manes. From there, Magenta evolved into a way to share a connection to something deeper.
        </p>
        <a href="<?php echo $aboutLink;?>" class="fade btn btn-light">about Magenta</a>
    </div>
    </div>
</section>

<section class="section-seven section-container testimonials">
    <div class="testimonial--inner">
        <?php include 'components/cards/testimonial-card.php'; ?>
        <a href="<?php echo $shopLink;?>" class="fade btn">see for yourself</a>
    </div>

</section>

<section style="background-image: url('<?php if(!$inspired): echo $defaultImage;  else: echo $inspired;  endif;  ?>'); background-size: cover; background-position: center;" class="section-container section-eight">
    <div class="content">
        <h3 class="h2 light-text fade-me">Get inspired.</h3>
        <a href="<?php echo $shopLink;?>" class="fade btn btn-light">shop now</a>
    </div>
</section>
</main>
<?php			
	endwhile;
    ?>


<?php get_footer(); ?>

