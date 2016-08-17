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
        <div id="about-hero-image">
        <h2 class="about-title"><?php echo CFS()->get('header')?></h2>
      </div>
      <div class="wrapper about-content">
        <?php echo CFS()->get('content') ?></div>
    </main><!-- #main -->
  </div><!-- #primary -->

<!-- <?//php get_sidebar(); ?> -->
<?php get_footer(); ?>
