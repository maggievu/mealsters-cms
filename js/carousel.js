/**
 * File carousel.js.
 *
 * Handles the images switching in the intro step section and carousel in mobile views. (along with sass/site/main/animations.scss)
 * 
 * Edit by: the A-Team
 */

$j(document).ready(function() {
    
    if ($j(window).width() <= 768) {

        setInterval(function() {
            let temp = $j(".intro-step-main").children().eq(0).html();
            let temp2 = $j(".intro-step-main").children().eq(1).html();
            let temp3 = $j(".intro-step-main").children().eq(2).html();

            $j(".intro-step-main").children().eq(2).html(temp);
            $j(".intro-step-main").children().eq(0).html(temp2);
            $j(".intro-step-main").children().eq(1).html(temp3);
        }, 5000);
    }

    $j(window).resize(function() {
        location.reload();
    });
    
});
