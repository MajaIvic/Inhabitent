<?php
/**
 * The template for displaying front page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
         <div  class="front-page-content">


			<section class="product-info container">
            <h2>Shop Stuff</h2>
            <?php
               $terms = get_terms( array(
                   'taxonomy' => 'product_type',
                   'hide_empty' => 0,
               ) );
               if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
            ?>
               <div class="product-type-blocks">
				  <?php foreach ( $terms as $term ) : ?>
                     <div class="product-type-block-wrapper">
                        <img src="<?php echo get_template_directory_uri() . '/images/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
                        <p><?php echo $term->description; ?></p>
                        <p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> Stuff</a></p>
                     </div>
                  <?php endforeach; ?>
               </div>
            <?php endif; ?>
         </section>

			<?php
                $args = array( 'post_type' => 'post', 'numberposts' => '3' );
                $posts = get_posts( $args ); // returns an array of posts
            ?>
            <div class="inhabitent-journal">
            <h2>inhabitent journal</h2>
            <div class="container">

            <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
            <div class="journal-front">
            <?php the_post_thumbnail(   'feature-post size'    ); ?>
            <div class="journal-info-section">
            <div class="journal-date">
            <?php the_date(); ?>
               /                 
            <?php echo comments_number(); ?>
               </div>



            <?php  the_title('<a class="title"  href="//localhost:3000/inhabitent/journal/">', '</a>'); ?>
            <a class="read-entry" href="<?php the_permalink(); ?>">Read entry</a>
               </div>
              
               </div>
            <?php endforeach; wp_reset_postdata(); ?>
               </div>
            </div>


           
            <section class="adventures container">
            <h2>Latest Adventures</h2>
            <div class="latest-adventure">
               
            <div class="canoe-girl">
               <img src="../../inhabitent/images/photos/canoe-girl.jpg"/>
            <h3>Getting Back to Nature in a Canoe</h3>
            
               <a href="#">Read more</a>
               </div>
               <div class="beach-bonfire">
            <h3>A Night with Friends at the Beach</h3>
            
               <a href="#">Read more</a>
               </div>
               <div class="mountain-hiker">
            <h3>Taking in the View at Big Mountain</h3>
            
               <a href="#">Read more</a>
               </div>
               <div class="night-sky">
            <h3>Srat-Gazing at the Night Sky</h3>
            
               <a href="#">Read more</a>
               </div>



               


         </div>
            
        





               </section>




		</main><!-- #main -->
            </div><!-- #primary -->

           

			
         <?php get_footer(); ?>
         <div>
