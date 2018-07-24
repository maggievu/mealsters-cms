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
                    
                    <section class="intro-app">
                        <img class="intro-app-image" src="<?php echo get_template_directory_uri(); ?>/img/svg/icons.svg" alt="What is Mealsters?">
                        <div class="intro-app-text">
                            <h2>What is Mealsters?</h2>
                            <p>Have you ever had a problem deciding what to eat? There are a million choices out there and sometimes choosing what to eat could take up quite a bit of mental energy. We at The A-team understand and empathize with that struggle. Therefore, we created Mealsters, which offers a fun and intuitive experience of choosing your perfect meal. Swipe right to see other types of foods, swipe up to get the restaurant information or swipe left if you want to keep your options open, no commitment. There will be plenty of suggestions, you just have to swipe!</p>
                        </div>
                    </section>
                    
                    <section class="intro-step">
                        <h2 class="intro-step-heading">How does Mealsters work?</h2>
                        
                        <div class="intro-step-main">
                            <div class="step">
                                <img class="step-image" src="<?php echo get_template_directory_uri(); ?>/img/svg/step1.svg" alt="How does Mealsters work? Step 1">
                                <p class="big">Choose your meal</p>
                                <p class="small">Keep swiping to see the perfect meal for the moment.</p>
                            </div>

                            <div class="step">
                                <img class="step-image" src="<?php echo get_template_directory_uri(); ?>/img/svg/step2.svg" alt="How does Mealsters work? Step 2">
                                <p class="big">See more details</p>
                                <p class="small">Check more information about the ingredients, price, and restaurant info.</p>
                            </div>

                            <div class="step">
                                <img class="step-image" src="<?php echo get_template_directory_uri(); ?>/img/svg/step3.svg" alt="How does Mealsters work? Step 3">
                                <p class="big">Order or Book</p>
                                <p class="small">Explore the restaurant’s website or call them directly.</p>
                            </div>
                        </div>
                        
                    </section>
                    
                     <!-- LOOP ONE: DISCOVERIES -->
                    <?php
                    
                    echo '<section class="section-category discoveries">';
                            $discoveries_query = new WP_Query( array(
                                    'category_name'  => 'discoveries', 
                                    'posts_per_page' => '3',
                                    'orderby'        => 'rand',
                                ) );

                    if ( $discoveries_query->have_posts() ) : ?>
                        
                        <header class="page-header"><h2 class="section-title">Discoveries</h2></header>

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
                                    'category_name'  => 'our-story', 
                                    'posts_per_page' => '4',
                                ) );

                    if ( $story_query->have_posts() ) : ?>
                        <header class="page-header"><h2 class="section-title">Our Story</h2></header>
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
                                    'category_name'  => 'events', 
                                    'posts_per_page' => '3',
                                    'orderby'        => 'rand',
                                ) );

                    if ( $events_query->have_posts() ) : ?>
                        <header class="page-header"><h2 class="section-title">Upcoming Events</h2></header>

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
//get_sidebar();
get_footer();
