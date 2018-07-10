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
            
                <?php if ( get_header_image() && is_front_page()) : ?>
                <div class="header-background">
                    <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="Header's background">
                </div>
                <?php endif; ?>
		<div class="site-branding">
			<?php if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-bw.png" style="width: 35px;" alt="logo"> <?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$mealsters_description = get_bloginfo( 'description', 'display' );
			if ( $mealsters_description || is_customize_preview() ) :
				?>
				<!--<p class="site-description smallest"><?php echo $mealsters_description; /* WPCS: xss ok. */ ?></p>-->
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
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
                
                <div class="header-content">
                    <p class="bigger">Don't know what to eat?</p>
                    <p class="big">You're at the right place. Keep swiping!</p>
                    <a href="#" class="ios"> For iOS</a>
                    <a href="#" class="android"> For Android</a>
		</div><!-- .header-content -->
                <div class="header-demo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/phone-demo.png" style="width: 300px;" alt="phone">
                </div>
                
	</header><!-- #masthead -->

	<div id="content" class="site-content">
