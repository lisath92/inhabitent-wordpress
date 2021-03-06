<?php 
/**
/* The template for displaying the footer.
/* @package inhabitent_theme
**/ ?>
</div>
<!-- #content -->
<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="wrapper">
    <div class="site-info">
      <h2>Contact Info
      </h2>
      <p>
        <i class="fa fa-envelope" aria-hidden="true">
        </i> info@inhabitent.com
      </p>
      <p>
        <i class="fa fa-phone" aria-hidden="true">
        </i> 778-456-7891
      </p>
      <i class="fa fa-facebook-square" aria-hidden="true">
      </i>
      <i class="fa fa-twitter-square" aria-hidden="true">
      </i>
      <i class="fa fa-google-plus-square" aria-hidden="true">
      </i>
    </div>
    <div class="site-info">
      <h2>Business Hours</h2>
        <p>Monday-Friday: 9am to 5pm</p>
        <p>Saturday: 10am to 2pm</p>
        <p>Sunday: Closed</p>
    </div>
    
    <!--site-info-->
    <a href="<?php echo home_url() ?>">
      <img src="<?php echo get_template_directory_uri().'/assets/images/inhabitent-logo-text.svg'; ?>" alt="Full logo linking back to home page"/>
    </a>
  </div>
  <!-- wrapper -->
  <p class="copyright">Copyright &copy; 2016 Inhabitent
  </p>
</footer>
<!-- #colophon -->
</div>
<!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
