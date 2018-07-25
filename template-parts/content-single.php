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
            
        <?php mealsters_post_thumbnail(); ?>

	<div class="entry-content small">
		<?php
                if ( is_singular() ) :
                    the_content( sprintf(
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
                
                else :
		the_excerpt( sprintf(
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
                endif;

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