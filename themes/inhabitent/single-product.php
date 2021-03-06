<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">
			
			<div class="product-container">
				<?php while ( have_posts() ) : the_post(); ?>
					
					<div class="product-image">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
						<?php endif; ?>
					</div>

					<div class="product-info">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<span class="product-price">$<?php echo CFS()->get('price'); ?></span>
						<?php the_content(); ?>
						
						<!-- add social media component -->
						<?php get_template_part( 'template-parts/content', 'social-media' ); ?>
					</div><!-- .entry-content -->

				<?php endwhile; // End of the loop. ?>
				
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
