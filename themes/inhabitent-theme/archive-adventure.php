<?php
/**
 * The template for displaying archive pages.
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

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="adventure-img">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail( 'orignal' ); ?>
              </div>
              
            <?php endif; ?>
            <div class="adventure-info">

            <?php the_title( sprintf( '<h2 class="adventure-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
            

            <div class="read-more-box">
              <p><a href="<?php the_permalink(); ?>" class="read-more">Read entry &#8594;</a></p>
            </div>
            </div>
        </article>
      <?php endwhile; ?>
    </section>
  </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
