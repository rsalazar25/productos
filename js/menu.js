// JavaScript Document


var ww = document.body.clientWidth;

$(document).ready(function() {
	$(".nav li a").each(function() {
		if ($(this).next().length > 0) {
			$(this).addClass("parent");
		};
	})
	
		$('.toggleMenu').click(function() {
		$('.navM').slideToggle(300);
		return false;
	});
	adjustMenu();
})

$(window).bind('resize orientationchange', function() {
	ww = document.body.clientWidth;
	adjustMenu();
});

var adjustMenu = function() {
	if (ww < 490) {
		$(".toggleMenu").css("display", "inline-block");
		if (!$(".toggleMenu").hasClass("active")) {
			$(".navM").hide();
		} else {
			$(".navM").show();
		}
		$(".navM li").unbind('mouseenter mouseleave');
		$(".navM li a.parent").unbind('click').bind('click', function(e) {
			// must be attached to anchor element to prevent bubbling
			e.preventDefault();
			$(this).parent("li").toggleClass("hover");
		});
	} 
	else if (ww >= 490) {
		$(".toggleMenu").css("display", "none");
		$(".navM").show();
		$(".navM li").removeClass("hover");
		$(".navM li a").unbind('click');
		$(".navM li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
		 	// must be attached to li so that mouseleave is not triggered when hover over submenu
		 	$(this).toggleClass('hover');
		});
	}
}

