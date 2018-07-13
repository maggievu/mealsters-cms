<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mealsters
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
                    
                     <!-- LOOP ONE: DISCOVERIES -->
                    <?php
                    
                    echo '<section class="section-category discoveries">';
                            $discoveries_query = new WP_Query( array(
                                    'category_name' => 'discoveries', 
                                    'posts_per_page' => '3',
                                    'orderby' => 'rand',
                                ) );

                    if ( $discoveries_query->have_posts() ) : ?>
                        
                        <header class="page-header"><h2 class="page-title">Discoveries</h2></header>

                        <?php /* Start the Loop */
                        while ( $discoveries_query->have_posts() ) : $discoveries_query->the_post();
                            get_template_part( 'template-parts/content', get_post_type() );
                        endwhile;

                    else :
                        get_template_part( 'template-parts/content', 'none' );
                    endif; 
                    wp_reset_postdata();
                    echo '</section>';
                    ?>
                
                <!-- LOOP TWO: OUR STORY -->
                    <?php
                    
                    echo '<section class="section-category our-story">';
                            $story_query = new WP_Query( array(
                                    'category_name' => 'our-story', 
                                    'posts_per_page' => '2',
                                    'orderby' => 'rand',
                                ) );

                    if ( $story_query->have_posts() ) : ?>
                        <header class="page-header"><h2 class="page-title">Our Story</h2></header>
                        <?php
                            /* Start the Loop */
                            while ( $story_query->have_posts() ) : $story_query->the_post();
                                get_template_part( 'template-parts/content', get_post_type() );
                            endwhile;

                    else :
                            get_template_part( 'template-parts/content', 'none' );
                    endif; 
                    wp_reset_postdata();
                    echo '</section>';
                    ?>
                
                <!-- LOOP THREE: EVENTS -->
                    <?php
                    
                    echo '<section class="section-category events">';
                            $events_query = new WP_Query( array(
                                    'category_name' => 'events', 
                                    'posts_per_page' => '3',
                                    'orderby' => 'rand',
                                ) );

                    if ( $events_query->have_posts() ) : ?>
                        <header class="page-header"><h2 class="page-title">Events</h2></header>

                        <?php
                            /* Start the Loop */
                            while ( $events_query->have_posts() ) : $events_query->the_post();
                                get_template_part( 'template-parts/content', get_post_type() );
                            endwhile;

                    else :
                        get_template_part( 'template-parts/content', 'none' );
                    endif; 
                    wp_reset_postdata();
                    echo '</section>';
                    ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
