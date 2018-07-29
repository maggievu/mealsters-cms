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
    
    $j('#button-menu-header').on('click', function(){
        if ( ! $j(this).attr('aria-expanded') ) {
            $j(this).attr('aria-expanded', true).next();
        } else {
            $j(this).removeAttr('aria-expanded');
        }
        $j('#menu-header').slideToggle(500);
        $j('#menu-header:visible').css('display', 'flex');
    });
    
});