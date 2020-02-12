$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
        $("header").addClass("darkHeader");
    } else {
        $("header").removeClass("darkHeader");
    }
});

$(document).ready(function () {
	
	$("#sliderSec").owlCarousel({
        autoplay: true,
        items : 4, 
		navText: false,
		dots: true, 
		loop:true,      
		nav : false,
		mouseDrag:true,
		lazyLoad : false,
		animateOut: 'fadeOutRight',
		responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        900:{
            items:1
        },
        1000:{
            items:1
        }
    }

});

$("#serviceSlide").owlCarousel({
    autoplay: true,
    dots: true, 
    margin:20,
    items : 3, 
    navText: false,
    loop:true,      
    nav : false,
    mouseDrag:true,
    lazyLoad : false,
    responsive:{
    0:{
        items:1
    },
    600:{
        items:2
    },
    900:{
        items:3
    },
    1000:{
        items:3
    }
}
});	

	
});	