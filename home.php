<?php get_header();  ?>

<main>
	<div class="wrapper">
	  <h1>The Latest News</h1>
	    <?php get_sidebar(); ?>
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?> <!-- loop for posts -->
  		<div class="blogPost">
	  		<img src="<?php echo blog_featured_image($post) ?>" alt="Blog post image">
	  		<div class="blogText">
			    <p><?php echo get_the_date(); ?></p>
			    <a href="<?php echo get_permalink() ?>"><h3><?php the_title(); ?></h3></a>
	    	</div> <!-- blogText -->
	  	</div> <!-- blogPost -->
		<?php endwhile; // end the loop?>
	</div> <!-- /.wrapper -->
</main>

<?php get_footer(); ?>