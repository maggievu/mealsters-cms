/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens.
 * 
 * Edit by: the A-Team
 */


const $j = jQuery.noConflict();
 
$j(document).ready(function() {
    $j('#menu-header').attr('aria-labelledby', 'button-menu-header').attr('role', 'menu');
    
    $j(window).on('resize', function() {
        if ($j(window).width() <= 1024) {
            $j('#menu-header').addClass('non-expanded').removeClass('expanded');
        } else {
            $j('#menu-header').addClass('expanded').removeClass('non-expanded');
        }

        if ($j('#menu-header').hasClass('non-expanded')) {
            $j('#button-menu-header').removeAttr('aria-expanded');
        }
    });
    
    if ($j(window).width() <= 1024) {
        $j('#menu-header').addClass('non-expanded').removeClass('expanded');
    } else {
        $j('#menu-header').addClass('expanded').removeClass('non-expanded');
    }

    $j('#button-menu-header').on('click', function(){
        if ( ! $j(this).attr('aria-expanded') ) {
            $j(this).attr('aria-expanded', true).next().slideToggle(300).toggleClass('non-expanded expanded');
        } else {
            $j(this).removeAttr('aria-expanded').next().toggleClass('expanded non-expanded');
        }
    });
    
});