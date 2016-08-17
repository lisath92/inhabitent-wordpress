<?php
/**
 * Template part for displaying archive products.
 *
 *@package Inhabitent_Theme
 */
?>

<article id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="product-image">
            <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php echo get_permalink()?>">
            <?php the_post_thumbnail( 'medium' ); ?></a>
            <?php endif; ?>
        </div>
        
        <div class="product-description">
            <?php the_title( sprintf( '<h2 class="product-info"> '), '</h2><span> '.CFS()->get('price').'</span>'); 
            ?>
        </div>
        <!-- .entry-content -->
    </article>
    <!-- #post-## -->