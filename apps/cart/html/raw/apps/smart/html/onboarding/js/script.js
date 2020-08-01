$(document).ready(function(){
	// Mobile View Right side Div
	$(".right-side-bar").click(function(){
		$(".on-boarding-right-back").toggleClass("fixed-right-side-bar");
	});
	$(".right-sidebar-close").click(function(){
		$(".on-boarding-right-back").removeClass("fixed-right-side-bar");
	});
});

