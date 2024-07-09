
$( document ).ready(function() {
  $(function() {                    
    $(".menu-close").click(function() {  //use a class, since your ID gets mangled
    $(".full-menu-ctn").addClass("ciao");  
    $(".full-menu-ctn").removeClass("reveal");  
    });

    $(".y").click(function() {  //use a class, since your ID gets mangled
      $(".full-menu-ctn").addClass("reveal");  
      $(".full-menu-ctn").removeClass("ciao");  

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
  nextArrow: document.getElementById('right'),
  prevArrow: document.getElementById('left')
});



// scroll to disappear menu
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