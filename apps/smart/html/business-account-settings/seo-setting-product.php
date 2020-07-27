<!------- DCP Header Include File---------->
<?php include '../includes/smart-header.php'; ?>
<!------- DCP Header Include File end---------->

<div class="container-fluid p15 p-md30">
	<!------- Header Start----------->
	<div class="row">
		<div class="col-12">
			<span class="f-20 f-md-24 lato-font">Business SEO</span> &nbsp;
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="d-gblue-clr w400 mt5">Configure your business SEO settings</p>
		</div>
	</div>
	<!------- Header End ----------->

	<!------- SEO Setting Product Section----------->	
	<div class="row mt15 mt-md30 smart-form">
				<div class="col-12 col-md-6 col-xl-5 f-14 smart-from d-gblue-clr">
					<div class="bs-h40">
						<label>Meta Title</label>
						<select class="selectpicker f-14" title="%page_title% | %business_title%">
							<option>%page_title% | %business_title%</option>
							<option>%page_title% - %business_title%</option>
							<option>%business_title%</option>
							<option>%page_title%</option>
						</select>
					</div>
					<div class="row align-items-center mt15 mt-md30">
						<div class="col-7 col-lg-5">Robots Meta No Index</div>
						<div class="col-5 col-lg">
							<label class="switchtoggle-btn m-0">
								<input class="switchtoggle-input" type="checkbox" checked>
								<span class="switchtoggle-label" data-on="On" data-off="Off"></span> 
								<span class="switchtoggle-handle"></span>
							</label>
						</div>
					</div>
					
					<div class="row align-items-center mt15 mt-md30">
						<div class="col-7 col-lg-5">Robots Meta No Follow</div>
						<div class="col-5 col-lg">
							<label class="switchtoggle-btn m-0">
								<input class="switchtoggle-input" type="checkbox" checked>
								<span class="switchtoggle-label" data-on="On" data-off="Off"></span> 
								<span class="switchtoggle-handle"></span>
							</label>
						</div>
					</div>
				</div>
				<div class="col-12 text-right mt15 mt-md30">
							<input type="button" value="Reset" class="base-btn default-btn"> &nbsp;
							<input type="submit" value="Save" class="base-btn blue-btn active-btn">
						</div>
			</div>  
			
</div>
	
<!------- DCP Footer Include File---------->
<?php include '../includes/smart-footer.php'; ?>
<!------- DCP Footer Include File end ---------->