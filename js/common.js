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
	});

//	$('.tour').hover(
//    function () {
//        $(".order").css("display", "block");
//    },
//    function () {
//        $(".order").css("display", "none");
//});
})(jQuery)