<?php
/**
 * The template for displaying about page.
 *
 * Template Name: About Page
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <?php //while ( have_posts() ) : the_post(); ?>
        <div class="hero-image">
        <style type="text/css">
          .hero-image{
            background:
              linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
              url('<?php echo CFS()->get('hero_image'); ?>') no-repeat;
              height:100vh;
              background-position: bottom;
              background-size: cover,cover;
          }
    </style>
        <h2 class="title"><?php echo CFS()->get('header')?></h2>
      </div>
        <?//php get_template_part( 'template-parts/content', 'page' ); ?>

      <?php //endwhile; // End of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<!-- <?//php get_sidebar(); ?> -->
<?php get_footer(); ?>
