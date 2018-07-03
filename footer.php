<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mealsters
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
    
    <div class="footer-content">
        <div class="footer-logo"><?php the_custom_logo(); ?></div>
        <div class="footer-search"><?php get_search_form(); ?></div>

        <nav id="footer-navigation" class="footer-navigation">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-footer',
                    'menu_id' => 'menu-footer',
                    'menu_class' => 'menu-footer menu menu-nav',
                    'container' => '',
                ));
            ?>
        </nav>


        <div id="social-navigation" class="social-navigation">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-social',
                    'menu_id' => 'menu-social',
                    'menu_class' => 'menu-social menu',
                    'link_before' => '<span class="screen-reader-text">',
                    'link_after' => '</span>',
                    'container' => '',
                ));
            ?>
        </div>
        
        <div class="footer-footnote">
            <p>
                By continuing on our site, you agree to our Terms of Service, Cookie Policy, Privacy Policy and Content Policy. | 
                Mealsters © 2018. All rights reserved.
            </p>
        </div>
        
    </div>
    
    
    <div class="site-info">
        <a href="<?php echo esc_url(__('https://wordpress.org/', 'mealsters')); ?>">
            <?php
            /* translators: %s: CMS name, i.e. WordPress. */
            printf(esc_html__('Proudly powered by %s', 'mealsters'), 'WordPress');
            ?>
        </a>
        <span class="sep"> | </span>
            <?php
            /* translators: 1: Theme name, 2: Theme author. */
            printf(esc_html__('Theme: %1$s by %2$s.', 'mealsters'), 'mealsters', '<a href="http://underscores.me/">The A-team</a>');
            ?>
    </div><!-- .site-info -->
    
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
