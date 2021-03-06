<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<h2 class="text-entry">
	
			<?php echo $term; ?>
			<?php echo term_description(); ?>
</h2>

		

		<?php if ( have_posts() ) : ?>
			<div class="four-product">

			
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content', 'shop' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		<div>
		</div>


		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer(); ?>
