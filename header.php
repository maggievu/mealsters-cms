<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mealsters
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mealsters' ); ?></a>

	<header id="masthead" class="site-header">
            
                <?php if ( get_header_image()) : ?>
                <div class="header-background">
                    <?php if ( is_single() && has_post_thumbnail() ) :
                        the_post_thumbnail();
                        
                    else : ?>
                        <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="Header's background">
                    <?php endif; ?>
                </div>
                <?php endif; ?>
		<div class="site-branding">
			<?php if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-bw.png" alt="Site Logo"> <?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-bw.png" alt="Site Logo"> <?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif; ?>
		</div><!-- .site-branding -->
                
		<nav id="site-navigation" class="main-navigation">
                    <button id="button-menu-header" class="menu-toggle" aria-controls="menu-header" aria-haspopup="true"><span class="fas fa-bars"></span></button>

			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-header',
				'menu_id'        => 'menu-header',
                                'menu_class'     => 'menu-header menu menu-nav',
                                'container'      => '',
			) );
			?>
		</nav><!-- #site-navigation -->
                <hr>
                
                
                <?php if ( is_front_page()) : ?>
                    
                        <div class="header-content">
                            <p>Don't know what to eat?</p>
                            <p>You're at the right place. Keep swiping!</p>
                            <a href="#" class="ios"> For iOS</a>
                            <a href="#" class="android"> For Android</a>
                        </div><!-- .header-content -->
                        <div class="header-demo">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/phone-demo.png" style="width: 300px;" alt="Phone Demo Screenshot">
                        </div>
                                
                <?php elseif ( is_singular() ) : 
                        if  ( has_category('Story') ) : ?>
                        <header class="entry-header entry-header-story">
                        <?php else: ?>
                        <header class="entry-header">
                        <?php endif; ?>
                            
                        <?php the_title( '<h1 class="entry-title">', '</h1>' );

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
                        
                <?php elseif ( is_archive() ) : ?>
                    <header class="page-header">
                        <?php
                            the_archive_title( '<h1 class="page-title">', '</h1>' );
                            the_archive_description( '<div class="archive-description">', '</div>' );
                        ?>
                    </header><!-- .page-header -->

                <?php elseif ( is_search() ) : ?>
                    <header class="page-header">
                        <h1 class="page-title">
                                <?php
                                /* translators: %s: search query. */
                                printf( esc_html__( 'Search Results for: %s', 'mealsters' ), '<span>&#10077;' . get_search_query() . '&#10078;</span>' );
                                ?>
                        </h1>
                    </header><!-- .page-header -->

                <?php elseif (is_404() ) : ?>
                    <header class="page-header">
                        <h1 class="page-title"><?php esc_html_e( 'Oops! Your plate is empty.', 'mealsters' ); ?></h1>
                    </header><!-- .page-header -->

                <?php endif; ?>


        </header><!-- #masthead -->

<div id="content" class="site-content">

    
