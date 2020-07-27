<!------- DCP Header Include File---------->
<?php include '../includes/smart-header.php'; ?>
<!------- DCP Header Include File end---------->

<div class="container-fluid p15 p-md30">
	<!------- Header Start----------->
	<div class="row">
		<div class="col-12">
			<span class="f-20 f-md-24 lato-font">Analytics </span> &nbsp;
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="d-gblue-clr w400 mt5">Configure your analytics settings</p>
		</div>
	</div>
	<!------- Header End ----------->

	<!------- SEO Setting Analytics Section ----------->		
	<div class="row mt15 mt-md30">
		<div class="col-12 smart-form f-14 d-gblue-clr">                                
			<form>
				<div class="row">
					<div class="col-12 col-md-5 col-lg-4 col-xl-3 mt-md15">
					Google Analytics tracking code<span class="vi-red-clr">*</span>
					</div>
					<div class="col-12 col-md-7 col-lg-6 col-xl-5 mt15 mt-md0">
						<textarea class="form-control" rows="4"><!-- Global site tag (gtag.js) - Google Analytics --> <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108875884-1"></script><!-- Global site tag (gtag.js) - Google Analytics --> <script async src="https://www.googletagmanager.com/gtag/js?id=UA108875884-1"></script>
						</textarea>
					</div>
				</div>
				<div class="row mt15 mt-md30">
					<div class="col-12 col-md-5 col-lg-4 col-xl-3 mt-md15">
					Google Tag Manager (Script 1)
					</div>
					<div class="col-11 col-md-6 col-lg-6 col-xl-5 mt15 mt-md0">
						<textarea class="form-control" rows="4" placeholder="<!-- Google Tag Manager -->
Google Tag Manager Code Here<!-- End Google Tag Manager -->"></textarea>
					</div>
					<div class="col-1 col-md-1 col-lg-2 col-xl-4 pl0 mt20 mt-md10">
						<a href="javascript:void(0);" data-toggle="tooltip" data-placement="right" title="" data-original-title="Copy the code below and paste it onto every page of your website. Paste this code as high in the <head> of the page as possible:
" class="d-inline-block d-gblue-clr t-decoration-none"><i class="icon-information"></i></a>
					</div>
				</div>
				<div class="row mt15 mt-md30">
					<div class="col-12 col-md-5 col-lg-4 col-xl-3 mt-md15">
					Google Tag Manager (Script 2)  
					</div>
					<div class="col-11 col-md-6 col-lg-6 col-xl-5 mt15 mt-md0">
						<textarea class="form-control" rows="4" placeholder="<!-- Google Tag Manager -->
Google Tag Manager Code Here<!-- End Google Tag Manager -->"></textarea>
					</div>
					<div class="col-1 col-md-1 col-lg-2 col-xl-4 pl0 mt20 mt-md10">
						<a href="javascript:void(0);" data-toggle="tooltip" data-placement="right" title="" data-original-title="Additionally, paste this code immediately after the opening <body> tag:" class="d-inline-block d-gblue-clr t-decoration-none"><i class="icon-information"></i></a>
					</div>
				</div>

				<div class="row mt15 mt-md30">
					<div class="col-12 col-md-5 col-lg-4 col-xl-3 mt-md15">
						Third Party Analytics Tracking Code (Header)<span class="vi-red-clr">*</span>
					</div>
					<div class="col-12 col-md-7 col-lg-6 col-xl-5 mt15 mt-md0">
						<textarea class="form-control" rows="4">Third party analytics tracking code
						</textarea>
					</div>
				</div>
				<div class="row mt15 mt-md30">
					<div class="col-12 col-md-5 col-lg-4 col-xl-3 mt-md15">
						Third Party Analytics Tracking Code (Body)<span class="vi-red-clr">*</span>
					</div>
					<div class="col-12 col-md-7 col-lg-6 col-xl-5 mt15 mt-md0">
						<textarea class="form-control" rows="4">Third party analytics tracking code
						</textarea>
					</div>
				</div>
				
				<div class="row mt15 mt-md30">
					<div class="col-12 col-md-5 col-lg-4 col-xl-3 mt-md15">
						Facebook Remarketing Pixel Script<span class="vi-red-clr">*</span>
					</div>
					<div class="col-12 col-md-7 col-lg-6 col-xl-5 mt15 mt-md0">
						<textarea class="form-control" rows="4">Facebook remarketing pixel code
						</textarea>
					</div>
				</div>
				
				<div class="row mt15 mt-md30">
					<div class="col-12 col-md-12 col-lg-10 col-xl-8 text-md-right text-center">         
						<a href="#" class="base-btn default-btn">Reset</a>&nbsp;&nbsp;
						<a href="#" class="base-btn blue-btn">Save</a>               
					</div>
				</div>

			</form> 
		</div>
	</div>        
</div>

<!------- DCP Footer Include File---------->
<?php include '../includes/smart-footer.php'; ?>
<!------- DCP Footer Include File end ---------->