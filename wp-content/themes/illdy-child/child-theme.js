/**
 * Created by brian on 6/29/16.
 */

// This will create a scroll animation to the 'latest news' section
jQuery(".header-button-one").on('click', function(){
    jQuery('html, body').animate({
        scrollTop: jQuery("#latest-news").offset().top
    }, 1000);
});