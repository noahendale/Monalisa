<?php 

/*
  Template Name: Blog Single Page
*/

get_header(); ?>

<main class="blogMain">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div class="blogHero" style="background-image:url(<?php echo blog_featured_image($post)?>);"></div>
  <?php endwhile ?>
  <div class="container blogContent">
    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="entry-title"><?php the_title(); ?></h1>

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
          <!-- <div class="entry-meta">
            <?php //hackeryou_posted_on(); ?>
          </div> --><!-- .entry-meta -->

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

          <div class="entry-utility">
            <?php hackeryou_posted_in(); ?>
            <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->
  </div> <!-- /.container -->
</main> <!-- /.main -->

<?php get_footer(); ?>