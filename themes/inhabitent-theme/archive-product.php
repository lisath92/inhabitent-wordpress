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

    <?php 
      $arr = array(
        'taxonomy' => 'product-type');
      $categories = get_terms($arr); ?>

      <header class="page-header">
       <h1>Shop Stuff</h1>
    <?php foreach ( $categories as $category) : ?>

        <ul class="shop-nav">
          <li><a href="<?php echo get_category_link($category); ?>">
        <?php echo $category->name; ?></a></li>
          <?php endforeach; ?>
        </ul> 
      <!-- </div> -->
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
