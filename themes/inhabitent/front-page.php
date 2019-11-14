<?php
/**
 * The template for displaying front page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

			<?php
                $args = array( 'post_type' => 'post', 'numberposts' => '3' );
                $posts = get_posts( $args ); // returns an array of posts
            ?>

            <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
            <?php  the_title('<a href="//localhost:3000/inhabitent/journal/">', '</a>'); ?>
            <?php endforeach; wp_reset_postdata(); ?>



		</main><!-- #main -->
				</div><!-- #primary -->

			<?php get_sidebar(); ?>
			<?php get_footer(); ?>
