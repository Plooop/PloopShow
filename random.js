function owl_carousel (){
  $('.premier').owlCarousel({
      margin:50,
      lazyLoad:true,
      loop:true,
      nav:true,
      items:2,
      responsiveClass:true,
      responsive:{
        0:{
        items:1,
        nav:true
        },
        600:{
        items:3,
        nav:true
        },
        1000:{
        items:5,
        nav:true,
        loop:true
        }
      },
      autoWidth:true,
      stagePadding: 50
  });

  $('.second').owlCarousel({
      margin:50,
      lazyLoad:true,
      loop:true,
      nav:true,
      items:2,
      autoWidth:true,
      stagePadding: 50
  });

  $('.troisieme').owlCarousel({
      margin:50,
      lazyLoad:true,
      loop:true,
      nav:true,
      items:2,
      autoWidth:true,
      stagePadding: 50
  });

  $('.quatrieme').owlCarousel({
      margin:50,
      lazyLoad:true,
      loop:true,
      nav:true,
      items:2,
      autoWidth:true,
      stagePadding: 50
  });

  $('.dernier').owlCarousel({
      margin:50,
      lazyLoad:true,
      loop:true,
      nav:true,
      items:2,
      autoWidth:true,
      stagePadding: 50
  });

};

// ===== Scroll to Top ====
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('html,body').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
    return false;
});

$(document).ready(function(){
    owl_carousel();
  });
