<article class="blog-card--container">

<?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  <figure>
    <img src="<?php echo $image[0]; ?>" alt="">
  </figure>
<?php endif; ?>

    <h3><?php the_title();?></h3>
    <div class="excerpt">
        <?php the_excerpt();?>
    </div>
</article>