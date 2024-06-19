
$( document ).ready(function() {

  // Slow scroll with anchors
  (function($){
    $(document).on('click', 'a[href^=#]', function(e){
        e.preventDefault();
        var id = $(this).attr('href');
        $('html,body').animate({scrollTop: $(id).offset().top}, 2000);
    });
  })(jQuery);
            
    // end jquery
  })
  
  
  
  // stairs effect
  
  function applyZigzagEffect() {
    const items = document.querySelectorAll('.item');
    const container = document.querySelector('.stairs');
    const containerWidth = container.clientWidth;
    const itemWidth = items[0].offsetWidth;
    const step = 200; // Adjust the step size as needed
    let currentOffset = 0;
    let direction = 'right';
  
    items.forEach((item, index) => {
        if (direction === 'right') {
            item.style.marginLeft = `${currentOffset}px`;
            item.style.marginRight = '0';
            item.style.alignSelf = 'start';
  
            currentOffset += step;
            if (currentOffset + itemWidth >= containerWidth) {
                direction = 'left';
                currentOffset = containerWidth - itemWidth - step;
            }
        } else {
            item.style.marginRight = `${containerWidth - currentOffset - itemWidth}px`;
            item.style.marginLeft = '0';
            item.style.alignSelf = 'end';
            currentOffset -= step;
            if (currentOffset <= 0) {
                direction = 'right';
                currentOffset = step;
            }
        }
    });
  }
  
  function checkIfInView() {
    const items = document.querySelectorAll('.item');
    const viewportHeight = window.innerHeight;
  
    items.forEach(item => {
        const rect = item.getBoundingClientRect();
        if (rect.top >= 0 && rect.bottom <= viewportHeight) {
            item.classList.remove('out-of-view');
        } else {
            item.classList.add('out-of-view');
        }
    });
  }
  
  if ($(window).width() >= 900) {
  window.onload = () => {
    applyZigzagEffect();
    checkIfInView();
    window.addEventListener('scroll', checkIfInView);
    window.addEventListener('resize', () => {
        applyZigzagEffect(); // Reapply the zigzag effect on resize
        checkIfInView();
    });
  };
 }
  // end stairs effect



  
  // screensaver atm after 6 sec
  var timeout;
   if ($(window).width() >= 900) {
  window.onmousemove = function(){
    clearTimeout(timeout);
    timeout = setTimeout(function(){
      $("#screensaver img").addClass('screen-visible');
    }, 13000);
  }
  window.addEventListener("mousemove", function() { 
      $("#screensaver img").removeClass('screen-visible');
   });

   window.onscroll = function(){
    clearTimeout(timeout);
    timeout = setTimeout(function(){
      $("#screensaver img").addClass('screen-visible');
    }, 13000);
  }
  window.addEventListener("onscroll", function() { 
      $("#screensaver img").removeClass('screen-visible');
   });
  
 }
