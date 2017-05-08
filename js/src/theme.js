jQuery(function ($) {
	$headerHeight = $('#header').outerHeight();
	$("#menu-button").click(function () {
		$(".menu-wrapper").toggleClass("open");
		console.log("clicked!");
	});
	$("#menu-close").click(function () {
		$(".menu-wrapper").removeClass("open");
		console.log("close click!");
	});

	$("#hero").css("margin-top", $headerHeight);

	if ($(window).scrollTop() > 0) {
		jQuery('#header').addClass('stickied');
	}

	$(window).scroll(function () {
		setTimeout(function () {
			$headerHeight = $('#header').outerHeight();
			$("#hero").css("margin-top", $headerHeight);
		}, 200);
		if ($(window).scrollTop() > 0) {
			$('#header').addClass('stickied');
			$("#hero").css("margin-top", $headerHeight);
		} else {
			$('#header').removeClass('stickied');
		}
	});
});
