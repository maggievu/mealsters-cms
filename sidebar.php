<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mealsters
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
    <?php // if ( is_singular() ) : ?>

<!--    <section class="widget widget_related-post">
        
        <h2>Related Posts</h2>

        <ul>
        //<?php
//
//            $mealsters_recent_posts_query = new WP_Query(array(
//                                            'category_name'  => 'events', 
//                                            'posts_per_page' => '3',
//                                            'orderby'        => 'rand',
//                                        ) );
//            while ($mealsters_recent_posts_query->have_posts()) : $mealsters_recent_posts_query->the_post(); ?>
                <li>
                    <a href="<?php // esc_url(the_permalink()); ?>">
                        <?php // the_post_thumbnail('mealsters-recent-thumbnails'); ?>
                    </a>
                    <h3>
                        <a href="<?php // esc_url(the_permalink()); ?>">
                            <?php // esc_html(the_title()); ?>
                        </a>
                    </h3>
                </li>
            <?php // endwhile;
//            wp_reset_postdata();
        ?>
        </ul>
    </section>-->
    
    <?php // endif; ?>
    
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
    
</aside><!-- #secondary -->
