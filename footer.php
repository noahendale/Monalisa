<footer>
    <div class="wrapper clearfix">
      <div class="container">
        <?php wp_nav_menu( array(
            'container' => false,
            'theme_location' => 'footer1'
        )); ?>
        <?php wp_nav_menu( array(
            'container' => false,
            'theme_location' => 'footer2'
        )); ?>
        <?php wp_nav_menu( array(
            'container' => false,
            'theme_location' => 'footer3'
        )); ?>
        <div class="newsletter">
            <p>Sign up to get our monthly newsletter!</p>
            <input type="email" placeholder="Your email..."><button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
        </div>
      </div> <!-- container -->
      <hr size="1">
       <h2>Monalisa</h2>
       <p class="copyright">&copy; <?php echo date('Y'); ?> Noah Endale </p>
       <div class="social">
           <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
           <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
           <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
       </div>
    </div> <!-- wrapper -->
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>