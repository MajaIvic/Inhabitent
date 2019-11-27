<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

	    <div class="shop-img">
			<?php if ( has_post_thumbnail() ) : ?>
				<a href=<?php echo get_permalink() ?> rel="bookmark"><?php the_post_thumbnail( 'large' ); ?></a>
			<?php endif; ?>
		</div>
<div class="title-price">
		<?php the_title( '<h2 class="entry-title">','</h2>' );?>
		<p>$<?php the_field('price'); ?></p>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	
</article><!-- #post-## -->
