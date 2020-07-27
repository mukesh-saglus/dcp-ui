<!------- Smart Header Include File---------->
<?php include '../includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->



<!------- Header Start----------->
<div class="container-fluid p15 px-md30 py-md30">
	<div class="row">
		<div class="col-12 col-md-7 align-self-center">
			<span class="f-20 f-md-24 lato-font">Notification Settings </span>&nbsp; <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="gblue-clr f-14 w400 mt5">Configure DotComPal & Email notifications settings</p>
		</div>

	</div>
</div>
<!------- Header End ----------->

<!------- Tabs Start ----------->
<ul class="nav tabs-style3 f-14 f-md-16 w-100 relative" role="tablist">
	<li class="nav-item ml15 ml-md30">
		<a class="nav-link lh110" href="notification-saglus.php">
		<span class="d-none d-md-block">DotcomPal Notification
		</span>
		<span class="d-block d-md-none"><i class="icon-saglus-help f-18"></i></span></a>
	
	</li>
	<li class="nav-item">
		<a class="nav-link active lh110" href="notification-email.php">
		<span class="d-none d-md-block">Email Notification
		</span>
		<span class="d-block d-md-none"><i class="icon-mail f-18"></i></span>
	</a>
	
	</li>

</ul>
<!------- Tabs End ----------->


<div class="container-fluid p15 p-md30">
	<div class="row">
		<div class="col-12">
			
			<div class="d-flex justify-content-start mb15 mb-md20">
				<div class="mr15 mr-md20"><span class="notification-circle"><i class="icon-clicked f-16"></i></span>
				</div>
				<div class="f-14 w-100 mt8">
					<p class="w500 lh140">To turn off an email notification, just click the unsubscribe link at the bottom of the email.</p>
					
					<div class="d-block clearfix mt15 mt-md30">
						<div class="smart-radio-btn radio-strong-blue mb15 ml20 ml-md0">
							<input name="notificationemail" id="notificationemail1" value="option1" checked="" type="radio">
							<label for="notificationemail1"> All notifications except the one you unsubscribed from. </label>
						</div>
						<div class="smart-radio-btn radio-strong-blue mb15 ml20 ml-md0">
							<input name="notificationemail" id="notificationemail2" value="option1" checked="" type="radio">
							<label for="notificationemail2"> All notification only about the activities of saglus on your account. </label>
						</div>
						<div class="smart-radio-btn radio-strong-blue mb15 ml20 ml-md0">
							<input name="notificationemail" id="notificationemail3" value="option1" checked="" type="radio">
							<label for="notificationemail3"> Only Notification about your account and security. </label>
						</div>
						<div class="smart-radio-btn radio-strong-blue mb15 ml20 ml-md0">
							<input name="notificationemail" id="notificationemail4" value="option1" checked="" type="radio">
							<label for="notificationemail4"> All notifications except the one you unsubscribed from. </label>
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