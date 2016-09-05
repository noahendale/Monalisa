<?php get_header();  ?>

<?php $heroImage = get_field('hero_image'); ?>
<!-- <div class="hero" style="background-image:url(<?php //echo $heroImage['url'] ?>);"> USE THIS FOR DYNAMIC BG--> 
<div class="hero">
  <div class="wrapper heroWrapper">
    <div class="heroText">
      <h4 class="welcome">Welcome to</h4>
      <h1><?php the_field('b_and_b_name') ?></h1>
      <h4 class="tagLine"><?php the_field('tag_line') ?></h4>
    </div>
  </div> <!-- end .wrapper -->
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

  <?php endwhile; // end the loop?>
</div> <!-- end .hero -->

<section class="about">
  <div class="wrapper">
    <p class="sectionHeader">A little about us</p>
    <!-- <div class="introImage"> --> <!-- to restrict img size -->
    <?php $introImage = get_field('intro_image1'); ?>
    <div class="imageContainer" style="background-image:url(<?php echo $introImage['url'] ?>);"></div>
    <!-- </div> -->

    <div class="introText">
      <hr>
      <h2>A Great Place to Enjoy your Vacation</h2>
      <p><?php the_field('intro_text') ?></p>
      <p class="author name"><?php the_field('name') ?> - </p>
      <p class="author"><?php the_field('title') ?></p>
    </div>
  </div> <!-- wrapper -->
</section>

<section>
  <div class="wrapper">
    <div class="testimonial">
      <p class="sectionHeader">testimonial</p>
      <h1>What Visitors Say</h1> <!-- hard coded, use tripadvisor api later -->
      <p class="quote">"Are you all right? What's wrong? I felt a great disturbance in the Force...as if millions of voices suddenly cried out in terror and were suddenly silenced. I fear something terrible has happened. You'd better get on with your exercises."</p>
      <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
      <p><span>Donald Glover</span> - Review from <span>TripAdvisor</span></p>
    </div> <!-- testimonial -->
  </div> <!-- wrapper -->
</section>

<section class="blogPreview">
  <div class="blogItem"></div>
  <div class="blogItem"></div>
  <div class="blogItem"></div>
</section>

<?php get_footer(); ?>