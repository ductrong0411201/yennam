jQuery(function ($) {
	var slide_height = $('.primary-slider-container').height();
	$('.primary-slide-item').height(slide_height);
	
	$(window).on("load resize", function () {
		if ($(window).width() < 991) {
			new Mmenu("#primary-menu", {
				extensions: ["position-right"]
			}, {
				offCanvas: {
					clone: true
				}
			})
		}

		var slide_height = $('.primary-slider-container').height();
		$('.primary-slide-item').height(slide_height);
	});

	$('.primary-slider').slick({
		dots: false,
		arrows: false,
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear',
		autoplay: true,
		autoplaySpeed: 5000,
		adaptiveHeight: true
	});

	$('.service-slick-slider').slick({
		dots: false,
		arrows: true,
		infinite: false,
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 4000,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});

	$('.team-slick-slider').slick({
		dots: false,
		arrows: true,
		infinite: false,
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 4500,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});
});
