<?php

/*
Template Name: Ingredients Page
*/

get_header(); ?>

<?php while ( have_posts() ) : the_post();?>
<main class="main-content">
<?php
$defaultImage = 'http://localhost:10038/wp-content/uploads/2024/04/ingredients-page-hero.jpeg';
$ingredientsBg = get_field('ingredients_background_image');
$ingredientsHeadline = get_field('ingredients_headline');
$ingredientsIntro = get_field('ingredients_intro');
?>

<section style="background-image: url('<?php if(!$ingredientsBg): echo $defaultImage;  else: echo $ingredientsBg;  endif;  ?>'); background-size: cover; background-position: center;" class="section-container ingredients-hero">
    <h1><?php echo $ingredientsHeadline;?></h1>
</section>

<section class="section-container section-two">
    <!-- this works because only one page uses this template. otherwise there would be conflict between the excerpts on each page that uses the same template -->
    <p class="x-large-paragraph text-center fade-me"><?php echo $ingredientsIntro;?></p>
</section>

<section class="section-container section-three featured-ingredients">

<?php 

$ingredients = get_field('ingredient_selector');

?>
<?php if( $ingredients ): ?>
    <ul class="ingredients-grid">
    <?php foreach( $ingredients as $ingredient ): ?>
        <?php
            $title = get_field( 'ingredient_name', $ingredient->ID );
            $description = get_field('ingredient_description', $ingredient->ID);
            $image = get_field('ingredient_image', $ingredient->ID);
        ?>
        <!-- ingredient card -->
        <li class="ingredient-card fade-me">
            <?php include 'components/flexible-content/image-display.php';?>
            <h3><?php echo $title; ?></h3>
            <p><?php echo $description; ?></p>
        </li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>

</section>



</main>


<?php			
	endwhile;
    ?>


<?php get_footer(); ?>