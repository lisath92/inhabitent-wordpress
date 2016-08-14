<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div><!-- #content -->
<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="wrapper">
    <div class="site-info">
      <h1>Contact Info</h1>
      <p><i class="fa fa-envelope" aria-hidden="true"></i> info@inhabitent.com</p>
      <p><i class="fa fa-phone" aria-hidden="true"></i> 778-456-7891</p>
      <i class="fa fa-facebook-square" aria-hidden="true"></i>
      <i class="fa fa-twitter-square" aria-hidden="true"></i>
      <i class="fa fa-google-plus-square" aria-hidden="true"></i>
    </div><!--site-info-->
    <a href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri().'/assets/images/inhabitent-logo-text.svg'; ?>" alt="Full logo linking back to home page"/></a>
  </div>
  <p class="copyright">Copyright &copy; 2016 Inhabitent
  </p><!-- .site-info -->
</div><!-- wrapper -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
