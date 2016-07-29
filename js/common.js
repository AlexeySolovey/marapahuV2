;(function($){
	$(document).ready(function() {
		//slider on main pages
		$('.bxSlider').bxSlider({
		    auto: true,
		    autoHover: true,
		    controls: false,
		    pager: false,
		    slideWidth: 300,
		    minSlides: 1,
		    maxSlides: 3,
		    moveSlides: 1,
		    slideMargin: 10
		});

		$(function () {
		    $.scrollUp();
		});

		$(window).scroll(function () {
		    if ($(this).scrollTop() > 100) {
		        $('section.navigation').css("position", "fixed");
		        $('section.navigation').css("top", "0");
		        $('section.navigation').css("z-index", "1000");
		        $('section.navigation').css("width", "100%");
		    } else {
		        $('section.navigation').css("position", "relative");
		        $('section.navigation').css("top", "0");
		    }
		});

	});

//	$('.tour').hover(
//    function () {
//        $(".order").css("display", "block");
//    },
//    function () {
//        $(".order").css("display", "none");
//});
})(jQuery)