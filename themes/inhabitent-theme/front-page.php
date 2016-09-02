 <?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
 <main id="main" class="site-main" role="main">
  <div class="hero-image">
   <img src="<?php echo get_template_directory_uri().'/assets/images/inhabitent-logo-full.svg'?>">
 </div>
 <section class="wrapper">
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
              <div class="latest-blog-img">
                <?php 
                the_post_thumbnail('large'); ?>
              </div>
              <div class="latest-blog-info">
               <p class="latest-blog-meta">
                 <?php inhabitent_posted_on(); ?>/<?php comments_number( '0 Comments', '1 Comment', '% Comments' );?>
               </p>
               <?php
               the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2></p>');
               ?>
               <div class="read-more-box">
                <p><a href="<?php the_permalink(); ?>" class="read-more">Read entry &#8594;</a></p>
              </div>
            </div>
          </div>
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
    </section>


    <section class="adventures">
     <h1>Latest Adventures</h1>
     <?php
     $args = array( 'post_type' => 'adventure', 'order' => 'ASC' );
   $adventures = new WP_Query( $args ); // instantiate our object
   ?>
   <div class="front-page-ads clearfix">
     <?php if ( $adventures->have_posts() ) : ?>
       <?php while ( $adventures->have_posts() ) : $adventures->the_post(); ?>
        
        <?php get_template_part('template-parts/content-adventure'); ?>
        
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </div>

    <div class="clearfix more-adventures">
      <a href ="<?php echo get_post_type_archive_link( 'adventure' ); ?>"> More Adventures </a></div>
    <?php else : ?>
      <h2>Nothing found!</h2>
    <?php endif; ?>
  </section>
</section><!--wrapper-->
</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
