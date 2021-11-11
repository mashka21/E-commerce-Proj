
$(document).ready(function(){
    $('.slider').bxSlider({
        auto: true,
    });

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        autoplay: false,
  		autoplayimeout: 3000,
        nav: true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:4,
                nav:true,
                loop:false
            },
            1250:{
                items:5,
                nav:true,
                loop:false
            },
            1480:{
                items:6,
                nav:true,
                loop:false
            }
        }
    })
  });