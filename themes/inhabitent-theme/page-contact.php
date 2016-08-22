<?php
/**
 * Template Name: Contact Us
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <header class="contact-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
      </header><!-- .contact-header -->
    <div class="contact-content">
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="entry-content">
            <?php// the_excerpt(); ?>
        

        <?php the_content(); ?>
        </div>
      <?php endwhile; // End of the loop. ?>

        </div><!-- .contact-content -->

    </main><!-- #main -->
  </div><!-- #primary -->

  <?php get_sidebar(); ?>
  <?php get_footer(); ?>
