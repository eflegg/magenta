

<?php
$darken = get_field('add_darkening_overlay');
if($darken =='Yes'):
	$opacity = get_field('opacity_value');
else: $opacity = 0;
endif;



$bgImage = get_field('hero_background');
$heroText = get_field('hero_text');
?>


<section style="background-image: url('<?php if(!$bgImage): echo $defaultImage;  else: echo $bgImage;  endif;  ?>'); background-size: cover; box-shadow: inset 0 0 0 1000px rgba(0,0,0,.<?php echo $opacity;?>);" class="home-hero">
 		
	<div class="hero-content">
		<?php 
		$image = get_field('home_hero_crystal', 'option');
		$classes = 'hero-crystal';?>
		<?php include 'image-regular.php';?>



		<div class="hero-text">

			<h1>Magenta</h1>
			<p class="subtitle no-top"><?php echo $heroText;?></p>
			<a href="<?php echo $shopLink;?>" class="btn">shop now</a>
		</div>
	</div>
			
 		
 		</section>


