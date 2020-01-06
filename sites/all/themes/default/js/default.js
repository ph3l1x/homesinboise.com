jQuery(document).ready(function($) {


    var updateHomePreface = function() {
        var vw = $('.fullscreen-bg__video').width(),
            vh = $('.fullscreen-bg__video').height();

        $('.video-content').height(vh - 20);
        $('.video-content').width(vw);
        // $('.video-content').css({
        //     height: vh - 20,
        //     width: vw
        // });
    };
    var updateMapSize = function() {
        var mapContainerWidth = $('.searchMapContainer').width(),
            mapContainerHeight = $('.searchMapContainer').height();

        $('.gmap').css({
            height: mapContainerHeight,
            width: mapContainerWidth,
        });
        $('.angular-google-map').css({
            height: mapContainerHeight,
            width: mapContainerWidth,
        });
        $('.angular-google-map-container').css({
            height: mapContainerHeight,
            width: mapContainerWidth,
        });
    };

    updateMapSize();
    updateHomePreface();
    updateHomePreface();
    $(window).resize(function() {
        updateMapSize();
        updateHomePreface();
    });

    // Scroll Header Fix
    $(window).scroll(function() {
        var topDistance = $(window).scrollTop();
        if(topDistance > '36') {
            // Make Header Fixed
            $('.headerContainer').css({
                position: 'fixed',
                top: '0',
                width: '100%'
            });
        }
        if(topDistance <= '36') {
            $('.headerContainer').css({
                position: 'relative',
                top: 'inherit',
                width: 'inhert'
            });
        }

       // if($(this).scrollTop() > 1) {
       //     $('header').addClass('sticky');
       //     $('.searchContainer').addClass('stickySearch');
       // } else {
       //     $('header').removeClass('sticky');
       //     $('.searchContainer').removeClass('stickySearch');
       // }
    });


    // Home Page Search Button

    $('.rets-search-button').on('click', function () {
   //     window.location.replace("/home_search#?query=" + $('.rets-search-input').val());
      if($('.rets-search-input').val()) {
        var query = $('.rets-search-input').val();
        console.log(isNaN(query));
        if(query.length == 5 && !isNaN(query)) {
         window.open("https://homesinboise.silvercreekrealty.com/results-gallery?postalcode=" + query, '_blank');
          // console.log("Length: ", query.length);
        } else if(query.length == 8) {
          window.open("https://homesinboise.silvercreekrealty.com/results-gallery?keyword=" + query, '_blank');
          // console.log("LENGTH: ", query.length);
        } else {
          window.open("https://homesinboise.silvercreekrealty.com/results-gallery?keyword=" + query, '_blank');
        }

        console.log("XXXX");
      }
     // window.location.replace("https://homesinboise.silvercreekrealty.com/results-gallery#?query=" + $('.rets-search-input').val());
    });

    // Contact Us Slider
    $('.emailSlideTab').on('click', function() {
       $('.emailSlideContainer').toggleClass('email-sliding');
        $('.emailSlideContainer i').toggleClass('fa-arrow-down fa-arrow-up');
    });



    // make homes for heroes link open in new window
  $('#menu-614-1 a').attr('target','_blank');


});

