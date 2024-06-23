<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>


<div class="custom-woo-container main-content">



	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

	

			
					<?php
						$image = get_field('full_width_product_image');?>
					<?php
						if (!empty($image)):
						$size = 'full'; ?>
			
					<figure class="full-width">
						<?php
						if ($image) {
							echo wp_get_attachment_image($image['ID'], $image['alt'], $size, $attr['class'] = 'full-width__image');
						}
						?>
					</figure>
					<?php endif;?>
			
		<?php endwhile; // end of the loop. ?>
		
	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
	
		do_action( 'woocommerce_after_main_content' );
	?>

			<div class="product_custom-fields">
				<h2 class="section-container no-top no-bottom">Wholesome ingredients</h2>
					
					<section class="section-container featured-ingredients">

						<?php 

						$ingredients = get_field('linked_ingredients');

						?>
						<?php if( $ingredients ): ?>
							<ul class="ingredients-grid single-product">
							<?php foreach( $ingredients as $ingredient ): ?>
								<?php
									$title = get_field( 'ingredient_name', $ingredient->ID );
									$description = get_field('ingredient_description', $ingredient->ID);
									$image = get_field('ingredient_image', $ingredient->ID);
								?>
								<!-- ingredient card -->
								<li class="ingredient-card">
								<?php
									if (!empty($image)):
									$size = 'full'; ?>
						
								<figure class="full-width">
									<?php
									if ($image) {
										echo wp_get_attachment_image($image['ID'], $image['alt'], $size, $attr['class'] = 'full-width__image');
									}
									?>
								</figure>
								<?php endif;?>
									<h3><?php echo $title; ?></h3>
									<p><?php echo $description; ?></p>
								</li>
							<?php endforeach; ?>
							</ul>
							<?php
							$ingredientsLink = home_url('/ingredients');
							?>
							<a href="<?php echo $ingredientsLink;?>" class="btn mt-20">read more about ingredients</a>
						<?php endif; ?>

					</section>
					<section class="section-container no-top accordion">
						<?php
						$accordion = get_field('accordion');
						if($accordion):?>
						<?php
						$productDetails = $accordion['product_details'];
						$whatsNot = $accordion['what_not_in_magenta'];
						$howToUse = $accordion['how_to_use'];
						?>
						<ul class="accordion-list">
							<li aria-expanded="false" class="accordion-item">
							<button  class="item--inner display-flex justify-space-between">
									<p>Product Details</p>
									<figure class="icon"><img src="<?php bloginfo('template_url'); ?>/images/chevron.png" alt="chevron icon"></figure>
								</button>
								<p class="answer"><?php echo $productDetails;?></p>
							</li>
							<li aria-expanded="false" class="accordion-item">
								<button class="item--inner display-flex justify-space-between">
									<p>What's not in Magenta bars</p>
									<figure class="icon"><img src="<?php bloginfo('template_url'); ?>/images/chevron.png" alt="chevron icon"></figure>
								</button>
								<p class="answer"><?php echo $whatsNot;?></p>
							</li>
							<li aria-expanded="false" class="accordion-item">
							<button class="item--inner display-flex justify-space-between">
									<p>How to use</p>
									<figure class="icon"><img src="<?php bloginfo('template_url'); ?>/images/chevron.png" alt="chevron icon"></figure>
								</button>
								<p class="answer"><?php echo $howToUse;?></p>
							</li>
						</ul>
						<?php endif;?>
					</section>

					<!-- make this a custom field -->
					<section class="section-container">
						<h3 class="h1 text-center">
							Open your heart and drink in this glorious day
						</h3>
					</section>
			
				</div>

</div>

<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
