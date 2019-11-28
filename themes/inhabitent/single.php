<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="single-journal">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation(); ?>
			<div class="button-single">
   
			<button type="button" class="black-btn"><i class="fab fa-facebook"></i>Like</button>
            <button type="button" class="black-btn"><i class="fab fa-twitter"></i>Tweet</button>
            <button type="button" class="black-btn"><i class="fab fa-pinterest"></i>Pin</button>
   </div>
			

			
			

		<?php endwhile; // End of the loop. ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
