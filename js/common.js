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

		//$(window).scroll(function () {
		//    if ($(this).scrollTop() > 100) {
		//        $('section.navigation').css("position", "fixed");
		//        $('section.navigation').css("top", "0");
		//        $('section.navigation').css("z-index", "1000");
		//        $('section.navigation').css("width", "100%");
		//    } else {
		//        $('section.navigation').css("position", "relative");
		//        $('section.navigation').css("top", "0");
		//    }
		//});

	    //media
		if (window.matchMedia('(min-width: 992px)').matches) {
		    $(window).scroll(function () {
		        if ($(this).scrollTop() < 136) {
		            $('section.navigation').css("position", "absolute");
		            $('section.navigation').css("top", "189px");
		            $('section.navigation').css("z-index", "1000");
		        } else {
		            $('section.navigation').css("position", "fixed");
		            $('section.navigation').css("top", "0px");
		        }
		    });
		} else {
		    $(window).scroll(function () {
		        if ($(this).scrollTop() > 500) {
		            $('section.navigation').css("position", "fixed");
		            $('section.navigation').css("top", "0");
		        } else {
		            $('section.navigation').css("position", "relative");
		            $('section.navigation').css("top", "0");
		        }
		    });
		}
	    //resize
		$(window).resize(function () {
		    if (window.matchMedia('(min-width: 992px)').matches) {
		        $(window).scroll(function () {
		            if ($(this).scrollTop() < 136) {
		                $('section.navigation').css("position", "absolute");
		                $('section.navigation').css("top", "189px");
		            } else {
		                $('section.navigation').css("position", "fixed");
		                $('section.navigation').css("top", "0");
		            }
		        });
		    } else {
		        $(window).scroll(function () {
		            if ($(this).scrollTop() > 500) {
		                $('section.navigation').css("position", "fixed");
		                $('section.navigation').css("top", "0");
		            } else {
		                $('section.navigation').css("position", "relative");
		                $('section.navigation').css("top", "0");
		            }
		        });
		    }
		});
		$(window).resize(function () {
		    if (window.matchMedia('(min-width: 992px)').matches) {
		        if ($(this).scrollTop() < 136) {
		            $('section.navigation').css("position", "absolute");
		            $('section.navigation').css("top", "189px");
		        } else {
		            $('section.navigation').css("position", "fixed");
		            $('section.navigation').css("top", "0");
		        }
		    } else {
		        if ($(this).scrollTop() > 500) {
		            $('section.navigation').css("position", "fixed");
		            $('section.navigation').css("top", "0");
		        } else {
		            $('section.navigation').css("position", "relative");
		            $('section.navigation').css("top", "0");
		        }
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