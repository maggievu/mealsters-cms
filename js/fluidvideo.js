// Find all YouTube videos
var theVideo = jQuery('iframe[src*="youtube"]');

// Remove the annoying <P> wordpress puts around the videos when input 
// via the TEXT area of the editing screen. Then wrap the iframe in a DIV
// which has a class for responsive video.
theVideo.unwrap();
theVideo.wrap('<div class="video-container"></div>');


