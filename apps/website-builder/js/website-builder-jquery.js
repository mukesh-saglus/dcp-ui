$(document).ready(function () {
	$(function(){
		$("#sortablemenu").sortable({handle:".drag-handle",containment:"parent",tolerance:"pointer"});
	});
	
		/* Menu Edit js */
	$(".menu-list-field").hide();
	$(".menu-edit-link").click(function(){
	$(this).closest('.menu-list-container').find('.menu-list-field').show();	
	}); 
	$(".close-menu-edit").click(function(){
	$(this).closest('.menu-list-container').find('.menu-list-field').hide();
	
	}); 
	
	$(".page-list-field").hide();
	$(".page-edit-link").click(function(){
	$(this).closest('.page-edit-item').find('.page-list-field').show();	
	$(this).closest('.page-edit-item').find('.dd-handle').addClass('active');	
	}); 
	$(".close-page-edit").click(function(){
	$(this).closest('.page-edit-item').find('.page-list-field').hide();
	$(this).closest('.page-edit-item').find('.dd-handle').removeClass('active');	
	
	}); 

	
});


// Design selection page Sticky js //
 $(window).scroll(function(){
      if ($(this).scrollTop() > 140) {         	
          $('.apperance-tab').addClass('apperance-tab-sticky');
     	 } else {        
          $('.apperancce-tab').removeClass('apperance-tab-sticky');
	  }
	  
  });
  