<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>

<?php wp_head(); ?>


</head>





<body <?php body_class(); ?> >
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
	<!-- <div class="site"> -->
		<header id="header" class="main-header  ">
			<div class="header--inner section-container">
		<a href="#main"class="skiplink">Skip to content</a>
			<a class="fade home-logo" href=<?php echo home_url();?>>
			<?php echo get_bloginfo('name'); ?>
			</a>
			<nav class="js-navigation"
				aria-hidden="true"
				aria-label="Main">
				<?php
				wp_nav_menu( array(
				    'theme_location' => 'main',
					'menu_class' => 'main'
				) );
				?>
			</nav >
			
	<!-- </div> -->
			<div class="js-hamburger-menu">
				<button 
				class=" btn-nav  button--red js-menu-button menu-toggle" 
					aria-expanded="false"
					aria-label="Menu"
					>
					<span class="screen-reader-text">Menu</span>
					<span class="burger-1"></span>
					<span class="burger-2"></span>
					<span class="burger-3"></span>
			
				</button>
			</div>
			</div>
		</header>









<!-- 
		 -->





	





