
  (function ($) {

  "use strict";

    // NAVBAR
    $('.navbar-collapse a').on('click',function(){
      $(".navbar-collapse").collapse('hide');
    });

    $(function() {
      $('.hero-slides').vegas({
          slides: [
              { src: 'images/slides/man-reading-the-holy-quran-from-top-view.png' },
              { src: 'images/siblings-reading-quran.png' },
              { src: 'images/reading-quran.png' },
              { src: 'images/online-quran-academy-for-reading-quran-online.png' }
          ],
          timer: false,
          animation: 'kenburns',
      });
    });

    // CUSTOM LINK
    $('.smoothscroll').click(function(){
      var el = $(this).attr('href');
      var elWrapped = $(el);
      var header_height = $('.navbar').height() + 60;

      scrollToDiv(elWrapped,header_height);
      return false;

      function scrollToDiv(element,navheight){
        var offset = element.offset();
        var offsetTop = offset.top;
        var totalScroll = offsetTop-navheight;

        $('body,html').animate({
        scrollTop: totalScroll
        }, 300);
      }
    });

  })(window.jQuery);


