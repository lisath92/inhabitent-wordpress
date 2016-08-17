<?php
/**
 * Template part for displaying archive products.
 *
 *@package Inhabitent_Theme
 */
?>

<article id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="product-image">
            <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php get_permalink()?>">
            <?php the_post_thumbnail( 'medium' ); ?></a>
            <?php endif; ?>
        </header>
        
        <div class="product-description">
            <?php the_title( sprintf( '<h2 class="product-name">'), '</h2>'); 
            echo '...........'.CFS()->get('price'); ?>
        </div>
        <!-- .entry-content -->
    </article>
    <!-- #post-## -->