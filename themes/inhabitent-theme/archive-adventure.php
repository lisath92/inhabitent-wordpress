<?php
/**
 * The template for displaying adventure archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="wrapper site-main" role="main">
  <h1 class="adventure-header">Latest Adventures</h1>
    <section class="adventures-grid">
      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('template-parts/content-adventure');?>
      <?php endwhile; ?>
    </section>
  </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
