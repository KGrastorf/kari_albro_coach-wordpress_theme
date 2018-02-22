jQuery(document).ready(function() {



  //Change Background Image on hover - Home Page
  jQuery('#bckd-img1').mouseenter(function() {
    jQuery('#hero').css("background-image", "url(http://karialbro.com/wp-content/themes/karialbrocoach/images/Desk.jpg)").stop(true, true);
  });


  jQuery('#bckd-img2').mouseenter(function() {
    jQuery('#hero').css("background-image", "url(http://karialbro.com/wp-content/themes/karialbrocoach/images/KariSquating3.jpg)").stop(true, true);
  });


  jQuery('#bckd-img3').mouseenter(function() {
    jQuery('#hero').css("background-image", "url(http://karialbro.com/wp-content/themes/karialbrocoach/images/Feetblur2FocusInt.jpg)").stop(true, true);
  });

  jQuery('#bckd-img4').mouseenter(function() {
    jQuery('#hero').css("background-image", "url(http://karialbro.com/wp-content/themes/karialbrocoach/images/Globe.jpg)").stop(true, true);
  });

  jQuery('#bckd-img7').mouseenter(function() {
    jQuery('#hero').css("background-image", "url(http://karialbro.com/wp-content/themes/karialbrocoach/images/BenchQuote.jpg)").stop(true, true);
  });

});

var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ? true : false;

$('.inner-slide').click(function(e) {
    if(!isMobile) {
        e.preventDefault();
    }
});
