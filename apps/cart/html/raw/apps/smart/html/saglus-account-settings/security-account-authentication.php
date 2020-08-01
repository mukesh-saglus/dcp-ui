<!------- Smart Header Include File---------->
<?php include '../includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->



<!------- Header Start----------->
<div class="container-fluid p15 px-md30 py-md30">
	<div class="row">
		<div class="col-12 col-md-7 align-self-center">
			<span class="f-20 f-md-24 lato-font">Security Settings </span>&nbsp; <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="gblue-clr f-14 w400 mt5">Configure security settings</p>
		</div>

	</div>
</div>
<!------- Header End ----------->

<!------- Tabs Start ----------->
<ul class="nav tabs-style3 f-14 f-md-16 w-100 relative" role="tablist">
	<li class="nav-item ml15 ml-md30">
		<a class="nav-link lh110" href="security-login-alert.php">
		<span class="d-none d-md-block">Login Alert<br>
		<span class="f-12 w300">20 Linked Account</span>
		</span>
		<span class="d-block d-md-none"><i class="icon-linked-account f-18"></i></span></a>
	
	</li>
	<li class="nav-item">
		<a class="nav-link lh110" href="security-change-password.php">	
		<span class="d-none d-md-block">Change Password<br>
		<span class="f-12 w300">Fill your social Id</span>
		</span>
		<span class="d-block d-md-none"><i class="icon-social-account f-18"></i></span>
	</a>
	
	</li>
	<li class="nav-item">
		<a class="nav-link active lh110" href="security-account-authentication.php">
		<span class="d-none d-md-block">Account Authentication<br>
		<span class="f-12 w300">20 Sessions</span>
		</span>
		<span class="d-block d-md-none"><i class="icon-session f-18"></i></span>
	</a>
	
	</li>
	<li class="nav-item">
		<a class="nav-link lh110" href="security-ip-address.php">
		<span class="d-none d-md-block">Allowed IP Address<br>
		<span class="f-12 w300">20 Sessions</span>
		</span>
		<span class="d-block d-md-none"><i class="icon-session f-18"></i></span>
	</a>
	
	</li>
</ul>
<!------- Tabs End ----------->


<div class="container-fluid p15 p-md30">
	<div class="row">
		<div class="col-12">
			<div class="d-flex justify-content-start mb15 mb-md20">
				<div class="mr15 mr-md20"><span class="notification-circle"><i class="icon-mail f-14"></i></span>
				</div>
				<div class="f-14 mt8">
					<p class="w500 lh140">Get an one time password (OTP) on your email when you or anyone try to login into your account</p>

					<div class="d-block clearfix mt15 mt-md30">
						<div class="smart-radio-btn radio-strong-blue mb10">
							<input name="email" id="otp3" value="option1" checked="" type="radio">
							<label for="otp3"> Send OTP to jayprakash@saglusinfo.com </label>
						</div>
						<div class="smart-radio-btn radio-strong-blue">
							<input name="email" id="otp4" value="option1" type="radio">
							<label for="otp4"> Don’t send to jayprakash@saglusinfo.com  </label>
						</div>
					</div>
				</div>
			</div>
			
			<div class="text-right f-16">
				<a href="javascript:void(0)" class="base-btn default-btn mr5">Cancel</a>
				<a href="#" class="base-btn blue-btn">&nbsp;Save&nbsp;</a>
			</div>
		</div>
	</div>
</div>

<!------- Smart Footer Include File---------->
<?php include '../includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->