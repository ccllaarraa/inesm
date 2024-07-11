
$( document ).ready(function() {

  $(window).on('load', function(){
    setInterval(function(){
      $('.festival-intro img').removeClass("floatanim");
     $('.festival-intro img').addClass("logo-ciao");
      }, 1400);
    setInterval(function(){
      $('.festival-intro img').addClass("realciao");
      $('.festival-intro').addClass("nomoreblur");
      }, 1800);
     
  })

   



  $(function() {                    
    $(".menu-close").click(function() {  //use a class, since your ID gets mangled
    $(".full-menu-ctn").addClass("ciao");  
    $(".full-menu-ctn").removeClass("reveal");  
    $("body").removeClass("overflow");  

    });

    $(".y").click(function() {  //use a class, since your ID gets mangled
      $(".full-menu-ctn").addClass("reveal");  
      $(".full-menu-ctn").removeClass("ciao");  
      $("body").addClass("overflow");  


      });
  });
            
  $(".faq-title").click(function() {  //use a class, since your ID gets mangled
    $(this).next(".faq-text").toggleClass("flex");  
    });
    // end jquery
  })
  


  // draggable tiles
Draggable.create(".tile", {
  bounds: "body",
  inertia: true
});


// slick slider
$('.slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  autoplay: true,
  autoplaySpeed: 3000,
  speed: 500,
  fade: true,
  adaptiveHeight: true,
  nextArrow: document.getElementById('right'),
  prevArrow: document.getElementById('left')
});



// scroll to disappear menu
if(document.getElementById("home")!=null){
    window.onscroll = function() {myFunction()};
    function myFunction() {
        var testDivFromTop = document.getElementById("secret-fixed").offsetTop;
        var movingmenu = document.getElementById("moving-menu");

        var pageHeight =  window.innerHeight;
        if (document.body.scrollTop > testDivFromTop - pageHeight || document.documentElement.scrollTop > testDivFromTop - pageHeight ) {
          movingmenu.style.display = "none";
        }
        else {
          movingmenu.style.display = "block";

        }
    }
}



// ajax 
$('.cat-list_item').on('click', function() {
  $('.cat-list_item').removeClass('active');
  $(this).addClass('active');

  $.ajax({
    type: 'POST',
    url: ajaxurl,
    dataType: 'html',
    data: {
      action: 'filter_projects',
      category: $(this).data('slug'),
    },
    success: function(res) {
      $('.project-tiles').html(res);
    }
  })
});




  // screensaver atm after 6 sec
//   var timeout;
//    if ($(window).width() >= 900) {
//   window.onmousemove = function(){
//     clearTimeout(timeout);
//     timeout = setTimeout(function(){
//       $("#screensaver img").addClass('screen-visible');
//     }, 10000);
//   }
//   window.addEventListener("mousemove", function() { 
//       $("#screensaver img").removeClass('screen-visible');
//    });

//    window.onscroll = function(){
//     clearTimeout(timeout);
//     timeout = setTimeout(function(){
//       $("#screensaver img").addClass('screen-visible');
//     }, 10000);
//   }
//   window.addEventListener("onscroll", function() { 
//       $("#screensaver img").removeClass('screen-visible');
//    });
  
//  }