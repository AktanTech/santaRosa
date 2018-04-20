$(document).ready(function() {
          var banner_height = $("#navbar").height();
          var lastScrollTop = 0;
          $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            var currScrollTop = $(this).scrollTop();
            if (scroll <= banner_height && currScrollTop < lastScrollTop) {
              /*$("#banner").hide();*/
              $("#navbar").css({"background-color":"transparent","opacity":"1","color":"#ffffff"});
              $("#opcion>a").css({"color":"#fff"});
            } else {
              /*$("#banner").show();*/
              $("#navbar").css({"background-color":"#fff","opacity":"0.8"});
              $("#opcion>a").css({"color":"#000"});
            }
            lastScrollTop = currScrollTop;

          });
        });
      