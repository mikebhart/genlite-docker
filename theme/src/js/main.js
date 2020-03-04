import $ from "jquery";
window.$ = window.jQuery = $;

import "../../src/sass/main.sass";

import "bootstrap/js/dist/util";
import "bootstrap/js/dist/dropdown";
import "bootstrap/js/dist/collapse";
//import "bootstrap/js/dist/button";
//import "bootstrap/js/dist/toast";
//import "bootstrap/js/dist/modal";
//import "bootstrap/js/dist/carousel";
//import "bootstrap/js/dist/tab";





$(document).ready(function() {

   
   /*  -------------------------------------------------------------------

                    Add Lightbox to user added Link To Media File images

        ------------------------------------------------------------------------  */

    //    $("a[href$='.gif'], a[href$='.jpeg'], a[href$='.png'], a[href$='.jpg']").attr('data-fancybox','genlite-media-gallery').fancybox();

    /*  -----------------------------------------

        			 Back to Top button 

        ---------------------------------------------  */

        if ($('.genlite-back-to-top').length) {
            var scrollTrigger = 1000, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                     $('.genlite-back-to-top').addClass('show');
                } else {
                    $('.genlite-back-to-top').removeClass('show');
                }
            };
            backToTop();
            $(window).on('scroll', function () {
                backToTop();
            });
            $('.genlite-back-to-top').on('click', function (e) {
                e.preventDefault();
                $('html,body').animate({ scrollTop: 0 }, 500);
            });
        }      

        /*  -----------------------------------------

        			 Shop Filter

        ---------------------------------------------  */

        var trigger = $('.genlite-shop-hamburger'),
        overlay = $('.genlite-shop-overlay'),
        isClosed = false;

        trigger.click(function () {
          hamburger_cross();      
        });

        function hamburger_cross() {

          if (isClosed == true) {          
            overlay.hide();
            trigger.removeClass('is-open');
            trigger.addClass('is-closed');
            isClosed = false;
          } else {   
            overlay.show();
            trigger.removeClass('is-closed');
            trigger.addClass('is-open');
            isClosed = true;
          }
      }
      
      $('[data-toggle="offcanvas"]').click(function () {
            $('#genlite-shop-wrapper').toggleClass('toggled');
      });  
     


 // On Page template When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.querySelector('.page-template-default') !== null) {

  

      if (document.body.scrollTop > 750 || document.documentElement.scrollTop > 750) {

        setHeaderProperties();

      } else {

        document.getElementById("genlite-header__navbar").style.padding = "50px 10px";
        document.getElementById("genlite-header__navbar").style.backgroundColor = "";
        document.getElementById("genlite-header__navbar").style.color = "white";
        document.getElementById("genlite-header__image").style.height = "100px";
        document.getElementById("genlite-header__navbar").style.boxShadow = "";
        

      }
  }

}


// on non page templates
if (document.querySelector('.page-template-default') === null) {

  setHeaderProperties();
 
}

function setHeaderProperties() {

  document.getElementById("genlite-header__navbar").style.backgroundColor = "black";
  document.getElementById("genlite-header__navbar").style.boxShadow = "0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)";
  document.getElementById("genlite-header__navbar").style.padding = "0px";
  document.getElementById("genlite-header__image").style.height = "50px";

}


// Add smooth scrolling to all links
$("a").on('click', function(event) {
  
 



  



  // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {
    

      // Prevent default anchor click behavior
    event.preventDefault();



    var href_value = this.href;
    var current_path = window.location.pathname;
  
    var current_path_cleaned = current_path.replace(/\//g, '');


  
    var n = href_value.indexOf(current_path_cleaned);

    var top_more = 85;
    
    if (n === -1 || current_path_cleaned === "") {

       location.assign(href_value);
      //top_more = 450;
  //    setTimeout(function(){ window.scrollTo(0, 500);  }, 13000);

      //$(document).ready(function(){

      //document.onload = function(){ window.location.replace(href_value); };

    }



    // Store hash
    var hash = this.hash;

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      
      scrollTop: $(hash).offset().top - top_more
    
    }, 400, function(){

    });






  } // End if
}); 


 
  $('.search-button').on('click', '.search-toggle', function(e) {

    var selector = $(this).data('selector');

    $(selector).toggleClass('show').find('.search-input').focus();
    $(this).toggleClass('active');

    e.preventDefault();
  });

    // Wrap a bootstrap fixed-width container around certain blocks - the rest will be fluid as per template
    $( "article" )
      .find("h1,h2,h3,h4,h5,h6,p,ul,.wp-block-verse,.wp-block-columns, .wp-block-quote, .wp-block-code, .wp-block-table, .wp-block-preformatted, .wp-caption, .comments-area")
      .not( ".blocks-gallery-grid, .wp-block-column p, .wp-block-quote p" )
      .wrap( "<section><div class='container'><div class='row'><div class='col-12'></div></div></section>" )
    ;

    // wrap sections around the rest, keep it all the same
    $( "article" )
      .find(".wp-block-gallery, .wp-block-cover, .wp-block-separator, .wp-block-button")
      .wrap( "<section></section>" )
    ;





  $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
    if (!$(this).next().hasClass('show')) {
      $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    var $subMenu = $(this).next(".dropdown-menu");
    $subMenu.toggleClass('show');
  
  
    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
      $('.dropdown-submenu .show').removeClass("show");
    });
  
  
    return false;
  });

  


}); // End of ready function










