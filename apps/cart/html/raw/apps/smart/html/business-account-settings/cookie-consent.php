<!------- Smart Header Include File---------->
<?php include '../includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->
<!---- Smart Mail css --->
<link rel="stylesheet" href="<?php echo $basedir; ?>apps/mail/css/mail.css">
<!---- Smart Mail css End --->
<div class="container-fluid p15 p-md30">
	<!------- Form  Section Start----------->
	<!------- Header Start----------->
	<div class="row mb15 mb-md30">
		<div class="col-12 col-md-7 d-left-m-center align-self-center">
		<span class="f-20 f-md-24 lato-font">Cookie Consent </span>&nbsp; <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
		<p class="gblue-clr f-14 w400 mt5">Here you are manage your all funnel</p>
		</div>
	</div>
	<!------- Header End ----------->
	<div class="row smart-form">
		<!-- First Coloum -->
		<div class="col-12 col-md-6">
		<form>  	
			<div class="select-h40">
				<label class="d-gblue-clr">Select Color</label>
				<select class="selectpicker">
				<option data-icon="fa fa-square grey-sqaure">Grey</option>
				<option data-icon="fa fa-square white-sqaure">White</option>
				<option data-icon="fa fa-square black-sqaure">Black</option>
				</select>
			</div>
			<div class="mt-md30 mt15">
				<div class="f-14 w500 mb15 mb-md30">Position</div>
				<div class="d-flex justify-content-start flex-wrap">
					<div class="smart-radio-btn radio-strong-blue mr25 publish-radio">
						<input name="Position" id="Top-Select" type="radio" checked="">
						<label for="Top-Select"> Top </label>
					</div>
					<div class="smart-radio-btn radio-strong-blue mr25 draft-radio">
						<input name="Position" id="Bottom-date" type="radio">
						<label for="Bottom-date"> Bottom</label>
					</div>
					<div class="smart-radio-btn radio-strong-blue mr25 draft-radio">
						<input name="Position" id="Left-date" type="radio">
						<label for="Left-date"> Left </label>
					</div>
					<div class="smart-radio-btn radio-strong-blue draft-radio">
						<input name="Position" id="Right-date" type="radio">
						<label for="Right-date"> Right </label>
					</div>
				</div>
			</div>
			<div class="mt-md30 mt15">
				<label class="f-14 w500">Content</label>
				<textarea class="form-control" rows="5" placeholder="Type here">Rangbari Main Road, Kota, Rajasthan, India, (Pin-324005)</textarea>
			</div>
			<div class="mt-md30 mt15">
				<label class="f-14 w500">Button</label>
				<div class="row align-items-center mb10">
					<div class="col-6 col-xl-4">
						<div class="d-flex align-items-center">
							<span contenteditable="true" class="edit-project-name-bg f-14 w400">Allow</span>
							<a href="#" class="f-14 w400 t-decoration-none d-gblue-clr ml10"><i class="icon-edit"></i></a>
							<a href="#" class="f-14 w400 t-decoration-none d-gblue-clr ml10"><i class="icon-save"></i></a>
						</div>
					</div>
					<div class="col-6 col-xl-4">
						<label class="switchtoggle-btn m-0">
							<input class="switchtoggle-input" type="checkbox" checked="">
							<span class="switchtoggle-label" data-on="On" data-off="Off"></span> 
							<span class="switchtoggle-handle"></span>
						</label>
					</div>
				</div>
				<div class="row align-items-center">
					<div class="col-6 col-xl-4">
						<div class="d-flex align-items-center">
							<span contenteditable="true" class="edit-project-name-bg f-14 w400">Decline</span>
							<a href="#" class="f-14 w400 t-decoration-none d-gblue-clr ml10"><i class="icon-edit"></i></a>
							<a href="#" class="f-14 w400 t-decoration-none d-gblue-clr ml10"><i class="icon-save"></i></a>
						</div>
					</div>
					<div class="col-6 col-xl-4">
						<label class="switchtoggle-btn m-0">
							<input class="switchtoggle-input" type="checkbox" checked="">
							<span class="switchtoggle-label" data-on="On" data-off="Off"></span> 
							<span class="switchtoggle-handle"></span>
						</label>
					</div>
				</div>
			</div>
			<div class="mt-md30 mt15">
				<label class="f-14 w500">Apply for</label>
				<div class="row">
                  <div class="col-12 col-md-6 col-xl-4">
                     <div class="smart-checkbox-btn checkbox-strong-blue mb5">
                        <input id="WholeBusiness" type="checkbox">
                        <label for="WholeBusiness">Whole Business</label>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-xl-4">
                     <div class="smart-checkbox-btn checkbox-strong-blue mb5">
                        <input id="LandingPages" type="checkbox">
                        <label for="LandingPages">Landing Pages</label>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-xl-4">
                     <div class="smart-checkbox-btn checkbox-strong-blue mb5">
                        <input id="FunnelPages" type="checkbox">
                        <label for="FunnelPages">Funnel Pages</label>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-xl-4">
                     <div class="smart-checkbox-btn checkbox-strong-blue mb5">
                        <input id="VideoPages" type="checkbox">
                        <label for="VideoPages">Video Pages</label>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-xl-4">
                     <div class="smart-checkbox-btn checkbox-strong-blue mb5">
                        <input id="MyDrivePages" type="checkbox">
                        <label for="MyDrivePages">MyDrive Pages</label>
                     </div>
                  </div>
               </div>
			</div>
		</form>  
	</div>
		<!-- Second Coloum -->
		<div class="col-12 col-md-6 mt15 mt-md0">
			<div class="f-14 f-md-18 w600">Preview</div>
			<div class="mt15 mt-md30 p15 px-md30 preview-black-bg">
				<div class="row align-items-center">
					<div class="col-12 col-lg-6 col-xl-7 f-14 w300 text-center text-lg-left">
						<p>Hi, we have deployed cookies on this site to deliver
						you a truly enriched experience...</p>
					</div>
					<div class="col-12 col-lg-6 col-xl-5 text-center text-lg-right mt15 mt-lg0">
						<a href="#" class="base-btn yellow-btn">Allow</a>
						<a href="#" class="base-btn yellow-btn ml5 d-none">Decline</a>
					</div>
				</div>
			</div>
		</div>
	</div>
 
	<!------- Form  Section End----------->
	<div class="row">            
	<div class="col-12 text-md-right text-center mt-md30 mt15">            	
	<a href="#" class="base-btn default-btn">Cancel</a>&nbsp;&nbsp;
	<a href="#" class="base-btn blue-btn">Save</a>               
	</div>

	</div>
</div>
<!------- Segment Audience Details Section End----------->		

<!------- Smart Footer Include File---------->
<?php include '../includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->