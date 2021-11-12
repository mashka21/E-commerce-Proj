
const next = '<i class="fas fa-arrow-right"></i>'
const prev = '<i class="fas fa-arrow-left"></i>'


$(document).ready(function(){
    $('.slider').bxSlider({
        auto: true,
    });

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        autoplay: true,
  		autoplayimeout: 3000,
        nav: true,
        navText: [
            prev,
            next
        ],
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
                items:4,
                nav:true
            },
            1250:{
                items:5,
                nav:true
            },
            1480:{
                items:6,
                nav:true
            }
        }
    })
  });