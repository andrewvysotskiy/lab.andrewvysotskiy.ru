$(function () {

	// preloader on all pages
	var $preloader = $('#page-preloader'),
	        $spinner   = $preloader.find('.spinner');
	    $spinner.fadeOut();
	    $preloader.delay(500).fadeOut('slow');

	// menu opener hamburger on all pages
	$('.hamburger').click(function () {
		$('.menu-hamburger').toggleClass('d-none order');
	});

	//modal window on all pages
	$('.button_hat, .button_footer, .advice__button').click(function () {
		$('#Modal').arcticmodal();
	});

	// smooth scroll
	$(".go-to").click(function (e) {
		e.preventDefault();
		elementClick = $(this).attr("href");
		destination = $(elementClick).offset().top;
		$("body,html").animate({scrollTop: destination }, 800);
	});

		// slick slider on services page
	if($(".slider").length) {
		$('.slider').slick({
			dots: true,
			prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
		});
	}	
	

	    if($("#map").length) {
	    	// yandex-map
	    	ymaps.ready(init);
	    	var myMap,
	    		myPlacemark;

		    function init(){ 
		     	myMap = new ymaps.Map("map", {
		            center: [46.474128, 30.746008],
		            zoom: 16
		        });

		    	myMap.behaviors.disable('scrollZoom');

					myMap.balloon.open(myMap.getCenter(), {
					    contentHeader: 'ул. Базарная, 36'
					   
					});	
		    }
	    }
});	