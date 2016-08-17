<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="wrapper site-main" role="main">

    <?php if ( have_posts() ) : ?>

      <header class="page-header">
       <h1>Shop Stuff</h1>
       <div>
        <ul class="shop-nav">
          <li><a href="<?php get_term_link('do'); ?>">Do</a></li>
          <li><a href="<?php get_term_link('eat'); ?>">Eat</a></li>
          <li><a href="<?php get_term_link('sleep'); ?>">Sleep</a></li>
          <li><a href="<?php get_term_link('wear'); ?>">Wear</a></li>
        </ul> 
      </div>
    </header><!-- .page-header -->

    <?php /* Start the Loop */ ?>
    <div class="products-grid">
    <?php while ( have_posts() ) : the_post(); ?>

      <?php
      get_template_part( 'template-parts/content-archive-products' );
      ?>

    <?php endwhile; ?>

  <?php else : ?>

    <?php get_template_part( 'template-parts/content', 'none' ); ?>

  <?php endif; ?>
      </div><!--end products-->
    </main><!-- #main -->
  </div><!-- #primary -->
<?php get_footer(); ?>
