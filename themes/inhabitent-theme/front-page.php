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
 <main id="main" class="site-main" role="main">

  <section class="news-feed">
    <h1 class="news-feed-title">Inhabitent Journal</h1>

    <?php
    $args = array('posts_per_page' => 3);

   $news_feed = get_posts( $args ); // returns an array of posts
   ?>
   <?php foreach ( $news_feed as $post ) : setup_postdata( $post ); ?>
     <?php 
     echo the_post_thumbnail('small');
     echo "<p> ".the_title()."</p>"; 
     echo get_the_author();
     echo "<p> ".comments_number()."</p>";
     ?>
   <?php endforeach; wp_reset_postdata(); ?>

 </section>

 <section class="shop-categories">
  <?php 
  $category_arr = array(
    'taxonomy' => 'product-type',
    'order' => 'ASC',
    'orderby' => 'name',
    'hide_empty' => true);



  $shop_categories = get_terms($category_arr); ?>


  <?php foreach ( $shop_categories as $tag ): ?>
      
      <img src="<?php echo get_template_directory_uri().'/assets/images/'.$tag->slug.'.svg'; ?>" alt = " "/>

      <p><?php echo $tag->description; ?></p>
      <div class="stuff">
      <a href="<?php echo get_term_link($tag); ?>">
        <?php echo $tag->name.' stuff'; ?></a>
      </div>

  <?php endforeach; ?> 
</section>

<p>content content content content content content</p>
</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
