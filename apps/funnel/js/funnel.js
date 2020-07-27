jQuery(document).ready(function() {
	
$(".fpreview-img").click(function() {
   var myClass = $(this).attr("id");
   $(".template-show").hide();
   $(".varient-show").removeClass("d-block");
   $(".template-show").removeClass("d-block");
   $("."+myClass).addClass( "d-block" );
   $(".fpreview-img").removeClass( "factive-link" );
   $(this).addClass( "factive-link" );
});
	
$(".fvarient-img").click(function() {
   var myClass = $(this).attr("id");
   $(".varient-show").hide();
   $(".template-show").removeClass("d-block");
   $(".varient-show").removeClass("d-block");
   $("."+myClass).addClass( "d-block" );
   $(".fvarient-img").removeClass( "fvactive-link" );
   $(this).addClass( "fvactive-link" );
});
		
$(".varientshow").click(function(){
  $(".varient-sec .varient-previews").show();
});
$(".varienthide").click(function(){
  $(".varient-sec .varient-previews").hide();
});

$('.fpreview-carousel').on('slide.bs.carousel', function (e) {
    var $e = $(e.relatedTarget);
	    var idx = $e.index();
	    var itemsPerSlide = 5;
	    var totalItems = $('.fpreview-carousel .carousel-item').length;
	    
	    if (idx >= totalItems-(itemsPerSlide-1)) {
	        var it = itemsPerSlide - (totalItems - idx);
	        for (var i=0; i<it; i++) {
	            // append slides to end
	            if (e.direction=="left") {
	                $('.fpreview-carousel .carousel-item').eq(i).appendTo('.carousel-inner');
	            }
	            else {
	                $('.fpreview-carousel .carousel-item').eq(0).appendTo('.carousel-inner');
	            }
	        }
	    }
	});
	
});