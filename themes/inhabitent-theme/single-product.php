<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="wrapper site-main" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

     <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail( 'large' ); ?>
    <?php endif; ?>
      <?php the_title( '<h2 class="product-name">', '</h1>' ); ?>
    <?php echo CFS()->get( 'price' ); ?>
    <?php the_content(); ?>

    <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
