<?php
/*
Template Name: Single Post
*/


get_header(); ?>
	<?php while ( have_posts() ) : the_post();?>

	<main id="main" class="site-main main-content" role="main">


<?php 
$excerpt = get_the_excerpt();
?>
<section class="post-hero">
	<h1 class=""><?php the_title();?></h1>
	<p class=""><?php echo $excerpt;?></p>

</section>


<section class="section-container__post default-type ">

     

        <div class="flexible-content">
				<?php echo the_content(); ?>
		
          </div>
		  <div class="blog-redirect">
			<?php
			$redirectWanted = get_field('want_to_redirect');
			if($redirectWanted === true);?>
			<?php 
			$blogRedirect = get_field('blog_redirect');
			$blogLinkDescription = $blogRedirect['blog_link_description'];
			$blogLink = $blogRedirect['blog_link'];
			$blogLinkText = $blogRedirect['blog_link_text'];?>
			<p class="x-large-paragraph text-left"><?php echo $blogLinkDescription;?></p>
			<a href="<?php echo $blogLink;?>" class="btn"><?php echo $blogLinkText;?></a>
		

		  </div>
         

</section>
 






</main>


	<?php			
	endwhile;
	?>
<?php get_footer(); ?>




