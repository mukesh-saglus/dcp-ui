$(document).ready(function () {
	// Product Info More Items JS
	$(".more-than-one-item").hide();
	$("#more_item").click(function() {
		if($(this).is(":checked")) {
			$('.more-than-one-item').show();
		} else {
			$('.more-than-one-item').hide();
		}
	});
	// Deliery Page Edit Input Field
	$('.save-btn-enable, .ipn-save').hide();
	$('#purchase').click(function() {
        if ($(this).is(':checked')) {
            $('.enable-mail').removeAttr('disabled');
            $('.base-btn.enable-mail').removeClass('disable-btn');
			$('.save-btn-enable').show();
        } else {
			$('.enable-mail').attr('disabled', 'disabled');
			$('.save-btn-enable').hide();
        }
    });
	$('.edit-ipn-value').click(function() {
          $('.edit-ipn').removeAttr('disabled');
          $('.ipn-save').show();
    });
	
	// Discount type js start
	$("#discount-condition").change(function () {
		$(".apply-box").hide();
		$("#" + $(this).val()).show();
	});
	
	// delivery sale Div Toggle on Radio btn checked
	$(".dime-sale,.time-sale").hide();
	$('input:radio[name=dimesale]').change(function(){
		if($(this).attr("value")=="dime_sale"){
		  $(".dime-sale").show();
		} 
		if($(this).attr("value")=="no_dime_sale"){
		 $(".dime-sale").hide();
		}
	});
	$('input:radio[name=timesale]').change(function(){
		if($(this).attr("value")=="time_sale"){
		  $(".time-sale").show();
		} 
		if($(this).attr("value")=="no_time_sale"){
		 $(".time-sale").hide();
		}
	});
	
	// Payment Page Select Pricing Option JS
	$(".one-time-payment-show").hide();
	$('input:radio[name=payment-select]').change(function(){
		if($(this).attr("value")=="one-time-payment"){
		  $(".onetime-payment").show();
		  $(".one-time-payment-show").hide();
		  $(".mt-on-free-payment").removeClass("mt-md100");
		} 
		if($(this).attr("value")=="recurring-payment"){
		  $(".onetime-payment").show();
		  $(".one-time-payment-show").show();
		  $(".mt-on-free-payment").removeClass("mt-md100");
		} 
		if($(this).attr("value")=="free-payment"){
		 $(".onetime-payment").hide();
		 $(".mt-on-free-payment").addClass("mt-md100");
		}
	});
	
});

