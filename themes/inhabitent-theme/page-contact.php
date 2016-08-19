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

    <section class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.683120375522!2d-123.14035698483043!3d49.263451780054844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673c79e1ac457%3A0x3aea6428fa30dc6a!2s1490+W+Broadway%2C+Vancouver%2C+BC+V6H!5e0!3m2!1sen!2sca!4v1471580833632" width="750" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
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
