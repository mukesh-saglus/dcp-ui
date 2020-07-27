<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="google" content="notranslate"/>
	<!-- Tell the browser to be responsive to screen width -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Page Title -->
	<title>DotcomPal</title>
	<!-- Bootstrap 4 Stylesheet -->
	<?php $basedir = "http://".$_SERVER['SERVER_NAME'] . '/DCP-UI/'; ?>
	<!-- Favicon Icon -->
	<link rel="icon" href="<?php echo $basedir; ?>images/favicon.png" type="image/png">
	<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/bootstrap.min.css">
	<!-- Common Css Stylesheet -->
	<link rel="stylesheet" href="<?php echo $basedir; ?>css/general.css">
	<link rel="stylesheet" href="<?php echo $basedir; ?>css/elements.css">
	<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/css/custom.css">
	<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/html/onboarding/css/style-manish.css">
	<!-- Bootstrap Select Dropdown Stylesheet -->
	<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/bootstrap-select.css">
	<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/selectpicker-style.css">
	<!-- DotCompal Dahboard Css Stylesheet -->
	<!-- Custom Scrollbar Stylesheet -->
	<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/scrollbar/jquery.mCustomScrollbar.css">
	<!-- Country Code Plugin Stylesheet -->
	<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/tel-input/intlTelInput.css">
	<!-- Country Chooser Flags -->
	<link href="<?php echo $basedir; ?>vendors/flagstrap/css/flags.css" rel="stylesheet">
	<!-- boostrap select dropdwon for mobile & tablet js -->
	<script type="text/javascript">
		$( function () {
			$( '.selectpicker' ).selectpicker( {
				container: 'body'
			} );

			if ( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test( navigator.userAgent ) ) {
				$( '.selectpicker' ).selectpicker( 'mobile' );
			}
		} );
	</script>
	<!-- boostrap select dropdwon  for mobile & tablet js end -->
</head>
<body>
	<!-- DotCompal Login Header -->
	<div class="sticky-fix">
		<header class="ob-black-header">
			<div class="container-fluid px-md30 h-100">
				<div class="row h-100">
					<div class="col-8 col-sm-3 col-md-3 col-lg-3 col-xl-3 order-sm-1 d-flex align-items-center">
						<a href="#">
							<img src="<?php echo $basedir; ?>images/saglus-logo-header.png" class="img-fluid mh-50" alt="Saglus Logo">
						</a>
					</div>
					<div class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-3 order-sm-3 text-right d-flex align-items-center justify-content-end">
						<a class="help-link f-16 f-md-18 w400">
							Help <i class="icon-help-n-training top-right-icon-margin"></i> 
						</a>
					</div>
					<div class="col-12 col-sm-7 col-md-7 col-lg-7 col-xl-6 order-sm-2 d-flex align-items-center justify-content-center mt15 mt-md0">
						<ul class="business-step-wizard f-12 w400 text-center">
							<li>
								<a href="step1.php" class="wizard-sep">							
									<i class="icon-dot f-6 opacity20"></i> 
									<i class="icon-dot f-6 opacity60"></i> 
									<i class="icon-dot f-6"></i>
								</a>
								<div class="wizard-title">Business<br class="d-md-none"> configuration</div>
							</li>
							<li>
								<a href="step2.php" class="wizard-sep active">
								 <i class="icon-tick d-none"></i>
								</a>
								<div class="wizard-title">Address<br class="d-md-none"> details</div>
							</li>
							<li>
								<a href="step3.php" class="wizard-sep">
									<i class="icon-tick d-none"></i>
								</a>
								<div class="wizard-title">What you do?</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>
	</div>
	<!-- Installation Alert bar -->
	<div class="vi-red-bg py5 px15 white-clr f-14 w400 text-center d-none">
		<marquee onMouseOver="this.stop()" onMouseOut="this.start()" scrollamount="10">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a href="#" class="s-yellow-clr w500">click here</a>
		</marquee>
	</div>

	<!-- SUCCESS ALERT START -->
	<!--	<div class="alert alertSuccess d-flex align-items-center alert-dismissible fade show" role="alert">
		<button type="button" class="closeAlert" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="container">
			<div class="f-14 lh160">
				"Congratulations! You've successfully purchased the plan. Welcome aboard. Let's start your DotcomPalonboarding & help your business reach new heights."
			</div>
		</div>
	</div>-->
	<!-- <div class="alertSuccess  relative">
		<a href="#" class="closeAlert">
			<i class="fa fa-times" aria-hidden="true"></i>
		</a>
		<div class="container">
			
		</div>
	</div> -->
	<!-- SUCCESS ALERT END -->