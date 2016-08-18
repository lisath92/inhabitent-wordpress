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
				<h1 class="page-title">
				<?php
				single_term_title();?>
				</h1>
				<?php	the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header>

 <div class="products-grid">
			<?php //Start the Loop  ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content-archive-products' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
			</div><!--end products-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
