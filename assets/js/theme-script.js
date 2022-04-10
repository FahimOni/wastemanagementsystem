jQuery(function($){
 	"use strict";
   	jQuery('.gb_navigation > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},
		speed:       'fast'
  	});
});

function recycling_energy_gb_Menu_open() {
	jQuery(".side_gb_nav").addClass('show');
}
function recycling_energy_gb_Menu_close() {
	jQuery(".side_gb_nav").removeClass('show');
}

jQuery(function($){
	$('.gb_toggle').click(function () {
        recycling_energy_Keyboard_loop($('.side_gb_nav'));
    });

	jQuery(window).scroll(function(){
		if (jQuery(this).scrollTop() > 120) {
			jQuery('.menu_header').addClass('fixed');
		} else {
				jQuery('.menu_header').removeClass('fixed');
		}
	});
});

jQuery('document').ready(function(){
  var owl = jQuery('#home-mission .owl-carousel');
    owl.owlCarousel({
    margin:20,
    nav: true,
    autoplay : true,
    lazyLoad: true,
    autoplayTimeout: 3000,
    loop: false,
    dots:false,
    navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    },
    autoplayHoverPause : true,
    mouseDrag: true
  });
});