<?php

/*
Template Name: About Page
*/

get_header(); ?>

<?php while ( have_posts() ) : the_post();?>

<?php
$headshot = 'http://localhost:10038/wp-content/uploads/2024/04/melanie-headshot_cropped.jpg';
?>

<main id="main "class="about--main main-content">


<?php
			$image = get_field('about_crystal', 'option');
			$classes = 'background-crystal';?>
			<?php include 'components/image-regular.php';?>



<?php 
$aboutHeadline = get_field('about_headline');
$aboutDescription = get_field('about_description');
$aboutText = get_field('about_text');?>

<section class="hero">
    <div class="left section-container">
        <h1><?php echo $aboutHeadline;?></h1>
        <p><?php echo $aboutDescription;?>
        </p>
    </div>
    <div class="right">

<?php 
$classes = '';
$image = get_field('about_image');?>
<?php include 'components/image-regular.php';?>

    
    </div>

</section>
<section class="section-container meet-melanie">
    <div class="left">
    <h2 >Meet Melanie</h2>
    </div>
    <div class="right">
   

            <?php echo $aboutText;?>
      
    </div>
</section>



</main>


<?php			
	endwhile;
    ?>


<?php get_footer(); ?>