<!------- Smart Header Include File---------->
<?php include '../includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<div class="container-fluid p15 p-md30">

	<!------- Header Start----------->
	<div class="row">
		<div class="col-12 mb15 mb-md30">
			<span class="f-20 f-md-24 lato-font">Home Page Settings</span> &nbsp;
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="gblue-clr f-14 w400 mt5">Configure your home page settings</p>
		</div>
	</div>
	<!------- Header End ----------->
	<!------- Home Page Setting Start ----------->
    <div class="row">
		<div class="col-12">
			<div class="home-page-setting-bg">
				<div class="d-block text-center smart-form w-100">
					<h4 class="w400 mb15 mb-md25">Home Page Redirection Settings <a href="javascript:void(0);" data-toggle="tooltip" data-placement="right" title="" data-original-title="Your home page will be redirected to the chosen page" class="d-inline-block d-gblue-clr segment-info align-self-center ml5 t-decoration-none f-18"><i class="icon-information"></i></a> </h4>
					<div class="col-12 d-gblue-clr">
						<div class="d-flex justify-content-md-center flex-wrap w-100">
							<div class="smart-radio-btn radio-strong-blue mr25 mr-md40 publish-radio">
								<input name="home" id="SetHomePage" type="radio" checked="">
								<label for="SetHomePage"> Set Home Page </label>
							</div>
							<div class="smart-radio-btn radio-strong-blue draft-radio">
								<input name="home" id="select-Redirection" type="radio">
								<label for="select-Redirection"> Set Home Page Redirection </label>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 mx-auto p0 mt10 mt-md30">
						<select class="selectpicker f-14" title="Video" data-live-search="true">
							<option>Video</option>
							<option>Landing Page</option>							
						</select>
					</div>	
					<div class="col-12 col-md-6 mx-auto p0 mt15 mt-md30">
						<select class="selectpicker f-14" title="Video" data-live-search="true">
							<option selected>Video Channel</option>
							<option>Playlist</option>
							<option>Specific Video</option>							
						</select>
					</div>
					<div class="col-12 col-md-6 mx-auto p0 mt15 mt-md30">
						<select class="selectpicker f-14" title="Choose Video Page" data-live-search="true">
							<option>Video Page One (business.dotcompal.co/video/gd6sfdte8gd6sfdte8gd6sfdte8gd6sfdte8)</option>
							<option>Video Page Two (business.dotcompal.co/video/gd6sfdte8gd6sfdte8gd6sfdte8gd6sfdte8)</option>
							<option>Video Page Three (business.dotcompal.co/video/gd6sfdte8gd6sfdte8gd6sfdte8gd6sfdte8)</option>
							<option>Video Page Four (business.dotcompal.co/video/gd6sfdte8gd6sfdte8gd6sfdte8gd6sfdte8)</option>
						</select>
					</div>	
				</div>
			</div>
		</div>
		<div class="mt-md25 mt15 col-12 text-right">
		<a href="#" class="base-btn default-btn mr6">Cancel</a>				
		<a href="#" class="base-btn blue-btn">&nbsp;Save&nbsp;</a>	
	</div>
	</div>
	<!------- Home Page Setting End ----------->
</div>

<!------- Smart Footer Include File---------->
<?php include '../includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->