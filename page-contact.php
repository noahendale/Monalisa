
<?php 

/*
  Template Name: Contact Page
*/
get_header();  
$contactHeroImage = get_field('contact_page_hero_image'); ?>

<div class="hero" style="background-image:url(<?php echo $contactHeroImage['url'] ?>);">
  <h1 class="contactTitle"><?php the_title(); ?></h1>
</div>
<div class="wrapper clearfix">
  <div class="contact">
    <div class="content">
      <h2>Contact Details</h2>
      <p>Luke! Luke! Oh, Master Luke. I'm afraid that Artoo's sensors can find no trace of Princess Leia. I hope she's alright. What, Chewie? What? Chewie! Hey, I don't get it. Nah, it's just a dead animal, Chewie. Chewie, wa-wait! Don't!</p>
    </div> <!-- /,content -->

    <section class="contactInfo">
      <div class="phone-info">
        <i class="fa fa-mobile" aria-hidden="true"></i>
        <h4>Phone:</h4>
        <p><?php the_field('phone_number1') ?></p>
        <p><?php the_field('phone_number2') ?></p>
      </div>

      <div class="address">
        <i class="fa fa-map-marker" aria-hidden="true"></i>
        <h4>Address:</h4>
        <p><?php the_field('street_address') ?></p>
        <p><?php the_field('province_country') ?></p>
      </div>

      <div class="email">
        <i class="fa fa-envelope-o" aria-hidden="true"></i>
        <h4>Email:</h4>
        <p><?php the_field('primary_email') ?></p>
        <p><?php the_field('secondary_email') ?></p>
      </div>
    </section>

    <div class="contactForm">
      <h2>Get in Touch With Us</h2>
      <p>If you have any questions please don't hesitate to send us a message.</p>
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- contactForm -->
  </div> <!-- contact -->
</div> <!-- .wrapper -->
<div id="map"></div>

<?php get_footer(); ?>