<!-- Website Builder Header Include File -->
<?php include '../../../smart/html/includes/dcp-header.php'; ?>
<!-- Website Builder Header Include File end -->

<!-- Website Builder Stylesheet -->
<link rel="stylesheet" href="../../css/website-builder.css">

<!-- Website Builder Stylesheet -->
<link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Great+Vibes|Lora:400,400i,700,700i|Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i|Niconne|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Oswald:200,300,400,500,600,700|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Rokkitt:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../../js/range-slider/rangeslider.min.css" type="text/css" />
<link rel="stylesheet" href="../../css/website-builder.css">


<!-- Website Builder Stylesheet end -->
<div class="container-fluid p15 px-md30 py-md30 pt-md10">
	<!-- Header Start -->
	<div class="row">
		<div class="col-12">
			<div class="d-flex align-items-center flex-wrap">
				<ul class="website-builder-stepwizard f-14 w400">
					<li> <a href="#"><i class="icon-home f-14"></i><span class="pl10">Dashboard</span></a> </li>
					<li> <a href="#"><span>Designs</span> </a> </li>
					<li> <a href="#" class="p-blue-clr"><span>Appearance</span> </a> </li>
				</ul>
			</div>
		</div>
		<div class="col-12 mt15 mt-md20">
			<span class="f-20 f-md-24 lato-font">Appearance</span>		
			<p class="lightgrey mt5">Here you can manage your all designs</p>
		</div>
	</div>
	<!-- Header End  -->

	<!-- Font Edit Start -->
	<div class="row mt15 mt-md30">
		<div class="col-md-3 col-xl-2">
			<div class="nav flex-column nav-pills ui-vertical-tab f-14 w400 apperance-tab">
				<a class="nav-link" href="color.php"><i class="icon-color"></i>Colors</a>
				<a class="nav-link active"  href="font.php"><i class="icon-text-t"></i>Fonts</a>
				<a class="nav-link" href="animation.php"><i class="icon-animation"></i>Animation</a>
			</div>
		</div>
		<div class="col-md-9 col-xl-10 mt15 mt-md0">		
			<div class="f-16 w500">Website Fonts</div>
			<div class="f-14 lightgrey mt4 lato-font">Chose a font set for your titles and text</div>
			<!-- Font List section -->
			<div class="row  mt15 mt-sm25">
				<div class="col-12 col-md-6 col-xl-4 mb15 mb-md30">
					<div class="font-edit-box f-14">	
						<div class="font-family-preview">
							<div class="d-flex justify-content-between font-border-bottom">
								<div class="f-18 f-md-24 f-lg-28 align-self-center opensans-font">Professional</div>
								<div class="ml15 mt1 mt-sm4"><a href="javascript:void(0);" class="tem-font-btn"><i class="icon-show"></i></a></div>
							</div>
							<!-- <div class="f-14 f-md-16 mt9 font-border-bottom">Open Sans</div> -->	
						</div>	
						<div class="mCustomScrollbar font-section-scroll my15 my-md30" data-mcs-theme="inset-3">
							<div class="opensans-font h150 px15 px-md30 edit-font-size f-14 lh180">
							I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page.
							</div>
						</div>
						<div class="px15 px-md30">
							<input type="range" min="14" data-slider-min="14" data-slider-max="300" data-slider-step="1" data-slider-value="14" value="14" class="slider range-slider-value">
							<div class="d-flex justify-content-between mt5 mt-sm7">
								<div>S</div>
								<div>M</div>
								<div>L</div>
							</div>
						</div>
						<!-- Selected Font Icon -->
						<div class="selected-theme-btn"><i class="icon-tick"></i></div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-xl-4 mb15 mb-md30">
					<div class="font-edit-box f-14">	
						<div class="font-family-preview">
							<div class="d-flex justify-content-between font-border-bottom">
								<div class="roboto-font f-18 f-md-24 f-lg-28 align-self-center">Agency</div>
								<div class="ml15 mt1 mt-sm4"><a href="javascript:void(0);" class="tem-font-btn"><i class="icon-show"></i></a></div>
							</div>
							<!--<div class="f-14 f-md-16 mt9 font-border-bottom">Roboto</div> -->	
						</div>	
						<div class="mCustomScrollbar font-section-scroll my15 my-md30" data-mcs-theme="inset-3">
							<div class="roboto-font h150 px15 px-md30 f-14 edit-font-size lh180">
							I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page.
							</div>
						</div>
						<div class="px15 px-md30">
							<input type="range" min="14" data-slider-min="14" data-slider-max="300" data-slider-step="1" data-slider-value="14" value="14" class="slider range-slider-value">
							<div class="d-flex justify-content-between mt5 mt-sm7">
								<div>S</div>
								<div>M</div>
								<div>L</div>
							</div>
						</div>
					</div>
				</div>	
				<div class="col-12 col-md-6 col-xl-4 mb15 mb-md30">
					<div class="font-edit-box f-14">	
						<div class="font-family-preview">
							<div class="d-flex justify-content-between font-border-bottom">
								<div class="lora-font f-18 f-md-24 f-lg-28 align-self-center">Classic</div>
								<div class="ml15 mt1 mt-sm4"><a href="javascript:void(0);" class="tem-font-btn"><i class="icon-show"></i></a></div>
							</div>
							<!-- <div class="f-14 f-md-16 mt9 font-border-bottom">Lora</div> -->	
						</div>	
						<div class="mCustomScrollbar font-section-scroll my15 my-md30" data-mcs-theme="inset-3">
							<div class="lora-font h150 px15 px-md30 f-14 edit-font-size lh180">
							I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page.
							</div>
						</div>
						<div class="px15 px-md30">
							<input type="range" min="14" data-slider-min="14" data-slider-max="300" data-slider-step="1" data-slider-value="14" value="14" class="slider range-slider-value">
							<div class="d-flex justify-content-between mt5 mt-sm7">
								<div>S</div>
								<div>M</div>
								<div>L</div>
							</div>
						</div>
					</div>
				</div>	
				<div class="col-12 col-md-6 col-xl-4 mb15 mb-md30">
					<div class="font-edit-box f-14">	
						<div class="font-family-preview">
							<div class="d-flex justify-content-between font-border-bottom">
								<div class="muli-font f-18 f-md-24 f-lg-28 align-self-center">Elegant</div>
								<div class="ml15 mt1 mt-sm4"><a href="javascript:void(0);" class="tem-font-btn"><i class="icon-show"></i></a></div>
							</div>
							<!-- <div class="f-14 f-md-16 mt9 font-border-bottom">Muli</div> -->	
						</div>	
						<div class="mCustomScrollbar font-section-scroll my15 my-md30" data-mcs-theme="inset-3">
							<div class="muli-font h150 px15 px-md30 f-14 edit-font-size lh180">
							I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page.
							</div>
						</div>
						<div class="px15 px-md30">
							<input type="range" min="14" data-slider-min="14" data-slider-max="300" data-slider-step="1" data-slider-value="14" value="14" class="slider range-slider-value">
							<div class="d-flex justify-content-between mt5 mt-sm7">
								<div>S</div>
								<div>M</div>
								<div>L</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-xl-4 mb15 mb-md30">
					<div class="font-edit-box f-14">	
						<div class="font-family-preview">
							<div class="d-flex justify-content-between font-border-bottom">
								<div class="oswald-font f-18 f-md-24 f-lg-28 align-self-center">Bold</div>
								<div class="ml15 mt1 mt-sm4"><a href="javascript:void(0);" class="tem-font-btn"><i class="icon-show"></i></a></div>
							</div>							
						</div>	
						<div class="mCustomScrollbar font-section-scroll my15 my-md30" data-mcs-theme="inset-3">
							<div class="oswald-font h150 px15 px-md30 f-14 edit-font-size lh180">
							I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page.
							</div>
						</div>
						<div class="px15 px-md30">
							<input type="range" min="14" data-slider-min="14" data-slider-max="300" data-slider-step="1" data-slider-value="14" value="14" class="slider range-slider-value">
							<div class="d-flex justify-content-between mt5 mt-sm7">
								<div>S</div>
								<div>M</div>
								<div>L</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-xl-4 mb15 mb-md30">
					<div class="font-edit-box f-14">	
						<div class="font-family-preview">
							<div class="d-flex justify-content-between font-border-bottom">
								<div class="niconne-font f-18 f-md-24 f-lg-28 align-self-center">Fresh</div>
								<div class="ml15 mt1 mt-sm4"><a href="javascript:void(0);" class="tem-font-btn"><i class="icon-show"></i></a></div>
							</div>
							<!-- <div class="f-14 f-md-16 mt9 font-border-bottom">Niconne</div> -->
						</div>	
						<div class="mCustomScrollbar font-section-scroll my15 my-md30" data-mcs-theme="inset-3">
							<div class="niconne-font h150 px15 px-md30 f-14 edit-font-size lh180">
							I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page.
							</div>
						</div>
						<div class="px15 px-md30">
							<input type="range" min="14" data-slider-min="14" data-slider-max="300" data-slider-step="1" data-slider-value="14" value="14" class="slider range-slider-value">
							<div class="d-flex justify-content-between mt5 mt-sm7">
								<div>S</div>
								<div>M</div>
								<div>L</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-xl-4 mb15 mb-md30">
					<div class="font-edit-box f-14">	
						<div class="font-family-preview">
							<div class="d-flex justify-content-between font-border-bottom">
								<div class="greatvibes-font f-18 f-md-24 f-lg-28 align-self-center">Vivid</div>
								<div class="ml15 mt1 mt-sm4"><a href="javascript:void(0);" class="tem-font-btn"><i class="icon-show"></i></a></div>
							</div>
							<!-- <div class="f-14 f-md-16 mt9 font-border-bottom">Great Vibes</div>	-->
						</div>	
						<div class="mCustomScrollbar font-section-scroll my15 my-md30" data-mcs-theme="inset-3">
							<div class="greatvibes-font h150 px15 px-md30 f-14 edit-font-size lh180">
							I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page.
							</div>
						</div>
						<div class="px15 px-md30">
							<input type="range" min="14" data-slider-min="14" data-slider-max="300" data-slider-step="1" data-slider-value="14" value="14" class="slider range-slider-value">
							<div class="d-flex justify-content-between mt5 mt-sm7">
								<div>S</div>
								<div>M</div>
								<div>L</div>
							</div>
						</div>
					</div>
				</div>	
				<div class="col-12 col-md-6 col-xl-4 mb15 mb-md30">
					<div class="font-edit-box f-14">	
						<div class="font-family-preview">
							<div class="d-flex justify-content-between font-border-bottom">
								<div class="rokkitt-font f-18 f-md-24 f-lg-28 align-self-center">Retro</div>
								<div class="ml15 mt1 mt-sm4"><a href="javascript:void(0);" class="tem-font-btn"><i class="icon-show"></i></a></div>
							</div>
							<!-- <div class="f-14 f-md-16 mt9 font-border-bottom">Rokkitt</div>	-->
						</div>	
						<div class="mCustomScrollbar font-section-scroll my15 my-md30" data-mcs-theme="inset-3">
							<div class="rokkitt-font h150 px15 px-md30 f-14 edit-font-size lh180">
							I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page.
							</div>
						</div>
						<div class="px15 px-md30">
							<input type="range" min="14" data-slider-min="14" data-slider-max="300" data-slider-step="1" data-slider-value="14" value="14" class="slider range-slider-value">
							<div class="d-flex justify-content-between mt5 mt-sm7">
								<div>S</div>
								<div>M</div>
								<div>L</div>
							</div>
						</div>
					</div>
				</div>	
				<div class="col-12 col-md-6 col-xl-4 mb15 mb-md30">
					<div class="font-edit-box f-14">	
						<div class="font-family-preview">
							<div class="d-flex justify-content-between font-border-bottom">
								<div class="firasans-font f-18 f-md-24 f-lg-28 align-self-center">Vogue</div>
								<div class="ml15 mt1 mt-sm4"><a href="javascript:void(0);" class="tem-font-btn"><i class="icon-show"></i></a></div>
							</div>
							<!-- <div class="f-14 f-md-16 mt9 font-border-bottom">Fira Sans</div> -->	
						</div>	
						<div class="mCustomScrollbar font-section-scroll my15 my-md30" data-mcs-theme="inset-3">
							<div class="firasans-font h150 px15 px-md30 f-14 edit-font-size lh180">
							I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page.
							</div>
						</div>
						<div class="px15 px-md30">
							<input type="range" min="14" data-slider-min="14" data-slider-max="300" data-slider-step="1" data-slider-value="14" value="14" class="slider range-slider-value">
							<div class="d-flex justify-content-between mt5 mt-sm7">
								<div>S</div>
								<div>M</div>
								<div>L</div>
							</div>
						</div>
					</div>
				</div>	
				<!-- button -->
				<div class="col-12 text-right f-16">
					<a href="javascript:void(0)" class="base-btn default-btn mr5">Preview</a>
					<a href="javascript:void(0)" class="base-btn default-btn mr5">Cancel</a>
					<a href="#" class="base-btn blue-btn">&nbsp;Save&nbsp;</a>
				</div>
				<!-- button -->
			</div>
		</div>		
		<!-- Font List section end -->
	</div>
</div>
<!-- Font Edit End -->

<!-- Website Builder Footer Include File -->
<?php include '../../includes/website-builder-footer.php'; ?>
<!-- Website Builder Footer Include File end -->
<!-- Slider Script -->
<script type='text/javascript' src="../../js/range-slider/rangeslider.min.js"></script>
<script>
$(function() {
  const cssClasses = [
    'rangeslider--is-lowest-value',
    'rangeslider--is-highest-value'
  ];
  $('input[type=range]')
    .rangeslider({
      polyfill: false
    })
    .on('input', function() {
      const fraction = (this.value - this.min) / (this.max - this.min);
      if (fraction === 0) {
        this.nextSibling.classList.add(cssClasses[0]);
      } else if (fraction === 1) {
        this.nextSibling.classList.add(cssClasses[1]);
      } else {
        this.nextSibling.classList.remove(...cssClasses)
      }
    });
});
// Font-size 
$(".range-slider-value").on("input",function () {
	$(this).closest(".font-edit-box").find('.edit-font-size').css("font-size", $(this).val() + "px");
});
</script>