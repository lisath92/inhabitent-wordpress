<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
  <section class="hero-image">
   <img src="<?php echo get_template_directory_uri().'/assets/images/inhabitent-logo-full.svg'?>">
 </section>
 <main id="main" class="wrapper site-main" role="main">
  <section class="shop-stuff">
    <h1>Shop Stuff</h1>
    <div class="shop-categories">

      <?php 
      $category_arr = array(
        'taxonomy' => 'product-type',
        'order' => 'ASC',
        'orderby' => 'name',
        'hide_empty' => true);

        $shop_categories = get_terms($category_arr); ?>

        <?php foreach ( $shop_categories as $tag ): ?>
          <div class="each-category">
            <img src="<?php echo get_template_directory_uri().'/assets/images/'.$tag->slug.'.svg'; ?>" alt = " "/>

            <p><?php echo $tag->description; ?></p>
            <div class="stuff">
              <a href="<?php echo get_category_link($tag); ?>">
                <?php echo $tag->name.' stuff'; ?></a>
              </div>
            </div>

          <?php endforeach; ?> 
        </div>
      </section>
      
      <section class="news-feed">
        <h1 class="news-feed-title">Inhabitent Journal</h1>
        <div class="inhabitent-journal">

        <?php
          $args = array('posts_per_page' => 3);

          $news_feed = get_posts( $args ); // returns an array of posts ?>
        <?php foreach ( $news_feed as $post ) : setup_postdata( $post ); ?>
          <div class="latest-blog">
          
        <?php 
         the_post_thumbnail('small'); ?>
         <p class="latest-blog-meta">
         <?php inhabitent_posted_on(); ?>/<?php comments_number( '0 Comments', '1 Comment', '% Comments' );?>
         </p>
         <?php
         the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>');
         ?>
          </div>
   <?php endforeach; wp_reset_postdata(); ?>
  </div>
 </section>

 
<section class="adventures">
 <h1>Latest Adventures</h1>
 </section>
</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
