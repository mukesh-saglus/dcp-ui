$(document).ready(function(){
	//Automation Modal Pop_up Hide Show JS
	$(".auto-modal-show-btn").click(function(){
	  var auto_modal = $(this).attr("id");
	  $(".automation-modal").removeClass('show-modal');
	  $("."+auto_modal).addClass('show-modal');
	});
	$(".automation-modal-dismiss").click(function(){
	 $(this).closest('.automation-modal').removeClass('show-modal');
	});
	
	// Wait Time Pop_up CheckBox Div Hide Show
	$(".schedule-Section,.later-Section").hide();
	$("input[name='radioTime']").click(function () {
		if ($("#Later").is(":checked")) {
			$(".later-Section").show();
			$(".schedule-Section").hide();
		
		} else if  ($("#Schedule").is(":checked")) {
			$(".schedule-Section").show();
			$(".later-Section").hide();
		}
		 else {
			$(".schedule-Section,.later-Section").hide();
		}
	});
	
	/* Sending Option Pop_up Calendar Hide show js */
	$(".sent-mail-show").hide();
	$("input[name='SentTheMail']").click(function () {
		if ($(".mail-select-date").is(":checked")) {
			$(".sent-mail-show").show();
		} else {
			$(".sent-mail-show").hide();
		}
	});
	
	/* Design Selection MOdal Popup Js */
	$("#designmodal-scroll,#landing-design-scroll,#notification-design-scroll").scroll(function(){
    if ($(this).scrollTop() > 100) {
          $('.design-side-tab').addClass('fixed-tab');		
          $('.sticky-design-filter').addClass('fixed-filter');		
     	 } else {
          $('.design-side-tab').removeClass('fixed-tab'); 
          $('.sticky-design-filter').removeClass('fixed-filter'); 
	  }
  });
		
});