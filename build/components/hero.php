

<?php
$darken = get_field('add_darkening_overlay');
if($darken =='Yes'):
	$opacity = get_field('opacity_value');
else: $opacity = 0;
endif;

$bgImage = 'http://localhost:10038/wp-content/uploads/2024/04/watercolourbg-scaled.jpg'

?>



<section style="background-image: url('<?php if(!$bgImage): echo $defaultImage;  else: echo $bgImage;  endif;  ?>'); background-size: cover; box-shadow: inset 0 0 0 1000px rgba(0,0,0,.<?php echo $opacity;?>);" class="home-hero">
 		
	<div class="hero-content">
		<figure class="hero-crystal">
		<img src="<?php bloginfo('template_url'); ?>/images/svg/crystal-1.svg" alt="decorative illustration of a crystal"/>
		</figure>
		<div class="hero-text">

			<h1>Magenta</h1>
			<p class="subtitle no-top">Nourish your body and spirit with all-natural shampoo and conditioner bars</p>
			<a href="#" class="btn">shop now</a>
		</div>
	</div>
			
 		
		


			
						<!-- <img src="<?php bloginfo('template_url'); ?>/images/images/watercolourbg.jpg" /> -->
				
		


 		</section>


