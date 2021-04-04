
$(document).ready(function () {
  
    window.openSideMenu = function() {
        var menu = document.getElementById('side-menu');
      menu.style.width = '250px';
      var main = document.getElementById('main');
    
    };

    
    window.closeSideMenu = function() {
        var menu = document.getElementById('side-menu');
      menu.style.width = '0';
      var main = document.getElementById('main');
     
    };
    $('.carousel').carousel({
        interval: 10000
      });
    
    var wow = new WOW(
      {
        boxClass:     'wow',      
        animateClass: 'animated', 
        offset:       1,         
        mobile:       true,       
        live:         true,       
        scrollContainer: true,    
        resetAnimation: true,     
      }
    );
    wow.init();

});
function onScroll(event){
  var scrollPos = $(document).scrollTop();
  $('.navbar a[href^="#"]').each(function () {
      var currLink = $(this);
      var refElement = $(currLink.attr("href"));
      if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
          $('.navbar ul li a').removeClass("active");
          currLink.addClass("active");
      }
      else{
          currLink.removeClass("active");
      }
  });
}

(function($) {
  "use strict";
  $(function(){

      var $backToTopBtn = $('.back-to-top');
      // Back to top button 2
      var amountScrolled = 400;
      var backBtn = $("a.back-to-top");
      $(window).on("scroll", function () {
          if ($(window).scrollTop() > amountScrolled) {
              backBtn.addClass("back-top-visible");
          } else {
              backBtn.removeClass("back-top-visible");
          }
      });
      backBtn.on("click", function () {
          $("html, body").animate({
              scrollTop: 0
          }, 700);
          return false;
      });


    });

})(jQuery);
