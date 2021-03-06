<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mealsters
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
	<header class="entry-header">
            
                <!-- The posts from category story only on front page will not have post-thumbnails -->
                
		<?php if ( ! is_front_page() ) :
                    mealsters_post_thumbnail();
                elseif ( ! has_category('Story')) :
                    mealsters_post_thumbnail();
                endif;
        
                the_title( '<h3 class="entry-title bigger"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );

                
                
                // Outputs only custom fields for category discoveries and events
		if  ( has_category('Discoveries') ) :
			?>
			<div class="entry-meta">
				<?php
                                    echo '<div class="entry-meta-restaurant">' . get_post_meta(get_the_ID(), 'Restaurant', true) . '</div>';
                                    echo '<div class="entry-meta-price">' . get_post_meta(get_the_ID(), 'Price', true) . '</div>';
				?>
			</div>
		<?php 
                elseif ( has_category('Events') ) :
			?>
			<div class="entry-meta">
				<?php
                                    echo '<div class="entry-meta-date">' . get_post_meta(get_the_ID(), 'Date', true) . '</div>';
                                    echo '<div class="entry-meta-place">' . get_post_meta(get_the_ID(), 'Place', true) . '</div>';
				?>
			</div>
		<?php 
                    
                endif; ?>
	</header><!-- .entry-header -->

        
        <!-- The content is found only on single views, the rest of the pages uses the excerpt -->
	<div class="entry-content">
		<?php the_excerpt( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'mealsters' ),
				array(
					'span'  => array(
					'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mealsters' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
        
        
	<footer class="entry-footer">
		<?php mealsters_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
