<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <?php while ( have_posts() ) : the_post(); ?>
      <div class="hero-image single-adventure-image">
       <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail( 'full' ); ?>
      <?php endif; ?>
    </div>
    <section class="wrapper adventure-full-info">
      <?php the_title( '<h1 class="adventure-header">', '</h1>' ); ?>

      <h3><?php inhabitent_posted_by(); ?></h3>
      <?php the_content(); ?>
      
      <div class="social-media">
        <button><i class="fa fa-facebook" aria-hidden="true"></i>Like</button>
        <button><i class="fa fa-twitter" aria-hidden="true"></i>Tweet</button>
        <button><i class="fa fa-pinterest"  aria-hidden="true"></i>Pin</button>
      </div>
    </section>
  <?php endwhile; // End of the loop. ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
