require('./bootstrap');

import Alpine from 'alpinejs';
//import jQuery from './jquery-3.6.0.slim';



window.Alpine = Alpine;

Alpine.start();
window.$ = window.jQuery = require('jquery');

require('./slick1.8.1.min');


jQuery(window).scroll(function(){
    const scroll = jQuery(window).scrollTop();

    if(scroll >=50){
        jQuery('.sticky-header').addClass('sticky-header-active');
    }else{
        jQuery('.sticky-header').removeClass('sticky-header-active');
    }
})


// Slick slider

jQuery(document).ready(function ($){
    $('.gallary_slider').slick({
        asNavFor: '.thumbnail_slider',
        slidesToShow: 1,  
  //autoplay: true,
 // autoplaySpeed: 2000,
 // arrows: false,
  fade: true,
});
    $('.thumbnail_slider').slick({
    slidesToShow: 10,
    asNavFor: '.gallary_slider',
    centerMode: true,
    focusOnSelect: true
});

   

});



$('.civanogly-mobile-menu , .civanogly-main-menu a').on('click', function () {
    $('.civanogly-main-menu').toggleClass('active');
});

