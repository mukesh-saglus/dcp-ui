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
		<a class="nav-link active lh110" href="security-change-password.php">	
		<span class="d-none d-md-block">Change Password<br>
		<span class="f-12 w300">Fill your social Id</span>
		</span>
		<span class="d-block d-md-none"><i class="icon-social-account f-18"></i></span>
	</a>
	</li>
	<li class="nav-item">
		<a class="nav-link lh110" href="security-account-authentication.php">
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
	<div class="row smart-form f-14">
		<div class="col-12">
			<div class="form-group row mb-md30">
			<div class="col-md-4 col-lg-3 col-xl-2 align-self-center mb5 mb-md0">Current password</div>
			<div class="col-md-8 col-lg-5 col-xl-4">
			<div class="relative">
				<input class="form-control f-14 pr60 field-h40" id="password-field" placeholder="Password" value="" type="password">
				<div class="form-control-icon-right">
				  <button class="btn addon-icon f-15 toggle-password" toggle="#password-field" type="button"><i class="toogle-icon icon-show f-18" aria-hidden="true"></i> </button>
				</div>
				</div>
				<small class="form-text f-14 text-left vi-red-clr d-none">Please enter the correct value</small>
			</div>
		</div>
			
			<div class="form-group row mb-md30 relative">
			<div class="col-md-4 col-lg-3 col-xl-2 align-self-center mb5 mb-md0">New password</div>
			<div class="col-md-8 col-lg-5 col-xl-4">
			<div class="relative">
				<input class="form-control f-14 password-match pr60 field-h40" id="password-field1" placeholder="Password" value="" type="password">
			<div class="form-control-icon-right">
              <button class="btn addon-icon f-15 toggle-password1" toggle="#password-field1" type="button"><i class="toogle-icon1 icon-show f-18" aria-hidden="true"></i> </button>
            </div>
				</div>
				<small class="form-text f-14 text-left vi-red-clr d-none">Please enter the correct value</small>
			<!---- Password Combination Div----->
          <div class="password-tooltip text-left">
            <ul class="f-12 feature-listing white-clr w400">
              <li class="d-flex">
                <div class="flex-wrap mr15"><i class="icon-dot gblue-clr f-14"></i></div>
                <div class="flex-wrap">At least 8 to 20 character long</div>
              </li>
              <li class="d-flex">
                <div class="flex-wrap mr15"><i class="icon-dot-tick f-14 s-green-clr white-check-arrow"></i></div>
                <div class="flex-wrap">One lowercase character</div>
              </li>
              <li class="d-flex">
                <div class="flex-wrap mr15"><i class="icon-dot f-14 gblue-clr"></i></div>
                <div class="flex-wrap">One uppercase character</div>
              </li>
              <li class="d-flex">
                <div class="flex-wrap mr15"><i class="icon-dot f-14 gblue-clr"></i></div>
                <div class="flex-wrap">One number</div>
              </li>
			  <li class="d-flex">
                <div class="flex-wrap mr15"><i class="icon-dot f-14 gblue-clr"></i></div>
                <div class="flex-wrap">One symbol</div>
              </li>
            </ul>
          </div>
          <!---- Password Combination Div End-----> 	
			</div>
		</div>
			
			<div class="form-group row mb-md30">
			<div class="col-md-4 col-lg-3 col-xl-2 align-self-center mb5 mb-md0">Confirm new password</div>
			<div class="col-md-8 col-lg-5 col-xl-4">
			<div class="relative">
				<input class="form-control f-14 pr60 field-h40" placeholder="Password" value="" type="password">
			</div>
				<small class="form-text f-14 text-left vi-red-clr d-none">Please enter the correct value</small>
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