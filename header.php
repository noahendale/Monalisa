<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
 <input type="checkbox" id="toggle">
<header>
  <div class="wrapper">
    <label for="toggle">
      <i class="fa fa-bars" aria-hidden="true"></i>
    </label>
    <div class="container">

      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>
      <h2>
        <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
        </a>
      </h2>
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'header2'
      )); ?>
    </div> <!-- /.container -->
   
  </div> <!-- .wrapper -->
</header><!--/.header-->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlh9Mj1UM1FztauDbDzSuRsicj2luf8Fc&callback=initMap" async defer></script>