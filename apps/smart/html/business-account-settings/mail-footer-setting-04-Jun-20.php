<!------- Smart Header Include File---------->
<?php include '../includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->
<!---- Smart Mail css --->
<link rel="stylesheet" href="<?php echo $basedir; ?>apps/mail/css/mail.css">
<!---- Smart Mail css End --->
<!------- Header Start----------->
<div class="container-fluid p15 px-md30 py-md30">
	<div class="row">
		<div class="col-12 col-md-7 d-left-m-center align-self-center">
		<span class="f-20 f-md-24 lato-font">Mail Settings </span>&nbsp; <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
		<p class="gblue-clr f-14 w400 mt5">Configure your all email settings</p>
		</div>
		
	</div>
</div>
<!------- Header End ----------->

<!------- Tabs Start ----------->
<ul class="nav tabs-style3 f-14 f-md-16 w-100 relative" role="tablist">
	<li class="nav-item ml15 ml-md30">
	<a class="nav-link lh110" href="smtp-setting.php">
		<span class="d-none d-md-block">SMTP Setting</span>
		<span class="d-block d-md-none"><i class="icon-smtp-setting f-18"></i></span></a>
	</li>
<li class="nav-item">
	<a class="nav-link lh110" href="from-reply-email.php">	
		<span class="d-none d-md-block">From & Reply Email Setting</span>
		<span class="d-block d-md-none"><i class="icon-from-and-reply-mail f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="bounce-setting.php">
		<span class="d-none d-md-block">Bounce Setting</span>
		<span class="d-block d-md-none"><i class="icon-bounce-setting f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110 active" href="mail-footer-setting.php">
		<span class="d-none d-md-block">Mail Footer Setting</span>
		<span class="d-block d-md-none"><i class="icon-bounce-setting f-18"></i></span>
	</a>
</li>
</ul>
<!------- Tabs End ----------->
<div class="container-fluid p15 p-md30">
	<!------- Form  Section Start----------->
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
				<label class="d-gblue-clr">Main Headline</label>
				<input class="form-control f-14 field-h40" type="text" value="Getting too many emails from us" placeholder="Enter Main Headline">
			</div>
			<div class="d-flex align-items-center mt-md30 mt15">
				<div class="business-logo-img align-items-center d-flex justify-content-center">
				<!-- <img src="../../images/business-logo-upload.png" class="img-fluid d-block mx-auto"> -->
				<div class="f-14 d-gblue-clr">Logo</div>
			</div>
			<div class="pl-md20 pl15 f-14">
				<a href="" class="p-blue-clr" id="upload_link_secondary"><u>Upload</u></a>
				<input id="upload_secondary" type="file" class="d-none">
			</div>
			<div class="d-flex pl-md20 pl15 f-14">
				<a href="" class="p-blue-clr d-block pr15 pr-md20" id="library_link_upload"><u>Replace</u></a>
				<input id="library_upload" type="file" class="d-none">
				<a class="p-blue-clr f-14"><u>Remove</u></a>
			</div>
			</div>
			<div class="mt-md30 mt15">
				<label class="d-gblue-clr">Address</label>
				<textarea class="form-control" rows="5" placeholder="Type here">Rangbari Main Road, Kota, Rajasthan, India, (Pin-324005)</textarea>
			</div>
			<div class="mt-md30 mt15 f-18">Follow Us On</div>
			<div class="d-flex flex-wrap align-items-center mt-md30 mt15">
				<label class="switchtoggle-btn m-0">
				<input class="switchtoggle-input" type="checkbox" checked>
				<span class="switchtoggle-label" data-on="On" data-off="Off"></span> 
				<span class="switchtoggle-handle"></span>
				</label>
			<div class="col-xl-10 col-md-8 col-11 px-md15 px0 mt15 mt-md0 pl-xl30 mail-footer-form">
				<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text white-bg">
						<div class="fb-btn text-center social-mail-icon-size d-flex justify-content-center align-items-center">
							<i class="icon-facebook f-10"></i>
						</div>
					</span>
				</div>
				<input class="form-control f-14 field-h40 border-left-0 pl0" type="text" value="www.facebook.com" placeholder="Paste you Facebook link here">
			</div>
			</div>
			<div class="pl-md0 pl5 mt-md0 mt20">
				<a href="#" class="d-gblue-clr t-decoration-none"><i class="icon-refresh-final d-gblue-clr"></i></a>
			</div>
			</div>
			<div class="d-flex flex-wrap align-items-center mt-md20 mt15">
				<label class="switchtoggle-btn m-0">
				<input class="switchtoggle-input" type="checkbox" checked>
				<span class="switchtoggle-label" data-on="On" data-off="Off"></span> 
				<span class="switchtoggle-handle"></span>
				</label>
			<div class="col-xl-10 col-md-8 col-11 px-md15 px0 mt15 mt-md0 pl-xl30 mail-footer-form">
				<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text white-bg">
					<div class="twitter-btn text-center social-mail-icon-size d-flex justify-content-center align-items-center">
						<i class="icon-twitter f-10"></i>
					</div>
				</span>
			</div>
			<input class="form-control f-14 field-h40 border-left-0 pl0" type="text" value="Paste your link here" placeholder="Paste your Twiiter link here">
			</div>
			</div>
			<div class="pl-md0 pl5 mt-md0 mt20">
				<a href="#" class="d-gblue-clr t-decoration-none"><i class="icon-refresh-final"></i></a>
			</div>
			</div>
			<div class="d-flex flex-wrap align-items-center mt-md20 mt15">
				<label class="switchtoggle-btn m-0">
				<input class="switchtoggle-input" type="checkbox" checked>
				<span class="switchtoggle-label" data-on="On" data-off="Off"></span> 
				<span class="switchtoggle-handle"></span>
				</label>
			<div class="col-xl-10 col-md-8 col-11 px-md15 px0 mt15 mt-md0 pl-xl30 mail-footer-form">
				<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text white-bg">
						<div class="linkin-btn text-center social-mail-icon-size d-flex justify-content-center align-items-center">
							<i class="icon-linkedin f-10"></i>
						</div>
					</span>
				</div>
				<input class="form-control f-14 field-h40 border-left-0 pl0" type="text" value="Paste your link here" placeholder="Paste your LinkedIn link here">
			</div>
			</div>
			<div class="pl-md0 pl5 mt-md0 mt20">
				<a href="#" class="d-gblue-clr t-decoration-none"><i class="icon-refresh-final d-gblue-clr"></i></a>
			</div>
			</div>
			<div class="d-flex flex-wrap align-items-center mt-md20 mt15">
				<label class="switchtoggle-btn m-0">
				<input class="switchtoggle-input" type="checkbox">
				<span class="switchtoggle-label" data-on="On" data-off="Off"></span> 
				<span class="switchtoggle-handle"></span>
				</label>
			<div class="col-xl-10 col-md-8 col-11 px-md15 px0 mt15 mt-md0 pl-xl30 mail-footer-form">
			<div class="input-group disable">
				<div class="input-group-prepend">
					<span class="input-group-text white-bg">
						<div class="youtube-btn text-center social-mail-icon-size d-flex justify-content-center align-items-center">
							<i class="icon-youtubee f-10"></i>
						</div>
					</span>
				</div>
				<input class="form-control f-14 field-h40 border-left-0 pl0" type="text" value="Paste your link here" placeholder="Paste your youtube link here" disabled>
			</div>
			</div>
			<div class="pl-md0 pl5 mt-md0 mt20">
				<a href="#" class="d-gblue-clr t-decoration-none"><i class="icon-refresh-final d-gblue-clr"></i></a>
			</div>
			</div>
		</form>  
	</div>
		<!-- Second Coloum -->
		<div class="col-12 col-md-6 mt30 mt-md0">
			<div class="d-flex justify-content-between mb15 mb-md30">
				<div class="f-14 f-md-18 w600">Preview</div>
				<a href="#" class="f-12 p-blue-clr t-decoration-none" data-toggle="modal" data-target="#MailFooterSettingModal"><u>Choose Themes</u></a>
			</div>
			
			<!-- Footer Preview  -->
			<div style="width:100%;">
					<p style="font-size:12px; color:#293239; text-align: center;">Getting too many emails from us, click here to <a href="#" style="color:#293239; text-decoration: underline;">Unsubscribe Now.</a></p>
					<div style="background: #eff3f6; padding:0% 5% 5% 5%; margin-top: 12px; display: -ms-flexbox !important; display: flex !important; ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; -ms-flex-pack: start !important;
justify-content: start !important;">
						<!-- First Coloum -->
						<div style="color:#748089; font-size: 12px; margin-right: 8%; padding-top: 5%">
						Powered by:<br>
						<img src="../../../mail/images/mail-logo.png" style="max-width:100%; margin: 10px 0px;">
						<a href="#" style="color:#0092ff; font-size:12px; text-decoration: underline; display: block;">Try now, it’s FREE</a>
						</div>
						<!-- Second Coloum -->
						<div style="padding-top: 5%">
						<img src="../../../mail/images/company-logo.png"  style="max-width:100%;">
						<span style="font-size: 16px; color:#293239; font-weight: 500;">XYZ Pvt Ltd</span>
						<p style="font-size: 12px; color:#748089; margin: 10px 0px;">Rangbari Main Road, Kota, Rajasthan,  India, (Pin-324005)</p>
						<div style="color:#748089; font-size: 12px;">
						Follow us
						<a href="#" style="margin-left: 8px;"><img src="../../../mail/images/fb-icon.png" style="max-width:100%;"></a>
						<a href="#" style="margin-left: 5px;"><img src="../../../mail/images/twitter-icon.png" style="max-width:100%;"></a>
						<a href="#" style="margin-left: 5px;"><img src="../../../mail/images/linkedin-icon.png" style="max-width:100%;"></a>
						<a href="#" style="margin-left: 5px;"><img src="../../../mail/images/youtube-icon.png" style="max-width:100%;"></a>
						</div>
						</div>
					</div>
				</div>
			
				
		</div>
	</div>
 
	<!------- Form  Section End----------->
	<div class="row">            
	<div class="col-12 text-md-right text-center mt-md30 mt15">            	
	<a href="#" class="base-btn default-btn">Reset</a>&nbsp;&nbsp;
	<a href="#" class="base-btn blue-btn">Save</a>               
	</div>

	</div>
</div>
<!------- Segment Audience Details Section End----------->		

<!------- Smart Footer Include File---------->
<?php include '../includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->