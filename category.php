<?php 

get_header(); ?>

<main class="blogMain category-blogMain">
  <div class="container blogContent">
    <div class="content">
      <h1>Category Archives: <?php single_cat_title(); ?></h1>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <a class="categoryBlogTitle" href="<?php echo get_permalink() ?>"><h2 class="entry-title"><?php the_title(); ?></h2></a>

          <div class="blogInfo">
            <div class="author">
              <?php echo get_avatar(get_the_author_meta('ID'), 64)?>
              <?php the_author() ?>    
            </div>
            <div class="date">
              <h4>Date</h4>
              <?php echo date('F jS Y') ?>
            </div>
            <div class="category">
              <h4>Category</h4>
              <?php the_category() ?>
            </div>
            <div class="tags">
              <h4>Tags</h4>
              <?php the_tags('') ?>
            </div>
          </div>

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->
  </div> <!-- /.container -->
</main> <!-- /.main -->

<?php get_footer(); ?>