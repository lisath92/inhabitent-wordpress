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
      <div class="single-product-image">
       <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail( 'large' ); ?>
      <?php endif; ?>
    </div>
    <section class="product-full-info">
      <?php the_title( '<h1 class="product-name">', '</h1>' ); ?>
      <?php echo '<h2 class="price">'.CFS()->get( 'price' ).'</h2>'; ?>
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
