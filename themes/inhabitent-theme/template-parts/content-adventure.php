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