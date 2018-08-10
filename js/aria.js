/**
 * File aria.js.
 *
 * ARIA implementation for #menu-header, only keys left and right can navigate within the menu
 * When TAB away, on mobile view, the menu close itself
 * When button is clicked, focus on the first link. This particular code is inside navigation.js line 36.
 * 
 * Edit by: the A-Team
 */

$j(function() {
    
    $j('#menu-header .menu-item:not(:first-child)').children().attr('tabindex', -1);
    
    $j('#menu-header .menu-item').children().on('keydown', function(event) {
      if (event.which == 39) {
          event.preventDefault();
          let next = $j(this).parent().next().children();
          if (next.length < 1) {
            next = $j(this).parent().siblings().first().children();
          }
          next.focus();
      }

      else if (event.which == 37) {
          event.preventDefault();
          let prev = $j(this).parent().prev().children();
          if (prev.length < 1) {
            prev = $j(this).parent().siblings().last().children();
          }
          prev.focus();
      }
      
      else if (event.which == 9 && $j(window).width() <= 1024) {
        $j(this).parent().parent().removeClass('expanded').addClass('non-expanded');
        $j('#button-menu-header').removeAttr('aria-expanded');
      }
      
    });

});
