<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="google" content="notranslate"/>
<!-- Tell the browser to be responsive to screen width -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Page Title ----->
<title>DotcomPal</title>
<!-- Bootstrap 4 Stylesheet ----->
<?php $basedir = "http://".$_SERVER['SERVER_NAME'] . '/dcpMaxfunnels2.0/DotcomPal/'; ?>
<!-- Favicon Icon -->
<link rel="icon" href="<?php echo $basedir; ?>images/favicon.png" type="image/png">
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/bootstrap.min.css">
<!-- Common Css Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>css/general.css">
<link rel="stylesheet" href="<?php echo $basedir; ?>css/elements.css">
<!-- Bootstrap Select Dropdown Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/bootstrap-select.css">
<!-- DotComPal Header Css Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/css/header.css">
<!-- DotComPal Dahboard Css Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/css/custom.css">
<!-- Custom Scrollbar Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/scrollbar/jquery.mCustomScrollbar.css">
<!---- Country Code Plugin Stylesheet ------>
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/tel-input/intlTelInput.css">
<!---- Country Chooser Flags ------>
<link href="<?php echo $basedir; ?>vendors/flagstrap/css/flags.css" rel="stylesheet">
 <!-- boostrap select dropdwon for mobile & tablet js--->
<script type="text/javascript">
	$(function () {
		$('.selectpicker').selectpicker({
			container: 'body'   
		});

		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
			$('.selectpicker').selectpicker('mobile');
		}
	});
</script>
<!-- boostrap select dropdwon  for mobile & tablet js end--->	
</head>
<body>
<!---------- DotComPal Login Header ---------->
<div class="sticky-fullhead">
<header class="relative">
<div class="s-header d-flex justify-content-between">
	
	<div class="d-flex align-items-center">
		<a href="#">
		<img src="<?php echo $basedir; ?>images/logo-header.png" class="img-fluid mh-50" alt="DotcomPal">
		</a>
		<span class="business-sepration-line"></span>
		<a class="f-16 f-md-22 w400 white-clr t-decoration-none text-capitalize text-truncate solution-name" title="MaxFunnels">
		MaxFunnels
		</a>
		<div class="d-none d-sm-block">
			<div class="d-flex align-items-center">
				<span class="white-clr f-14 px15 px-md20 mt3"><i class="icon-next-b"></i></span>
				<div class="dropdown business-menu">
					<button type="button" class="business-name-dropdown dropdown-toggle f-14 f-md-22 white-clr t-decoration-none text-capitalize" data-toggle="dropdown">
					Eduncle
					</button>
					<div class="dropdown-menu business-menu-dropdown">
						<!-- Search field -->
						<div class="business-search-field">
							<div class="input-group">
								<input class="form-control" placeholder="Search" type="text">
							<div class="input-group-append">
								<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
							</div>
							</div>
						</div>
						<!-- Search field end -->
						<div class="mCustomScrollbar f-14" data-mcs-theme="inset-3" style="max-height: 300px !important;">
							<li><a href="#" class="dropdown-item active" title="Eduncle">Eduncle</a></li>
							<li><a href="#" class="dropdown-item" title="MaxDrive">MaxDrive</a></li>
							<li><a href="#" class="dropdown-item" title="Kaptiwa">Kaptiwa</a></li>
							<li><a href="#" class="dropdown-item" title="Trenzy">Trenzy</a></li>
							<li><a href="#" class="dropdown-item" title="FitCart">FitCart</a></li>
							<li><a href="#" class="dropdown-item" title="ForkNdagger">ForkNdagger</a></li>
							<li><a href="#" class="dropdown-item" title="SearchSprout">SearchSprout</a></li>
							<li><a href="#" class="dropdown-item" title="MaxFunnels">MaxFunnels</a></li>
							<li><a href="#" class="dropdown-item" title="Eduncle">Eduncle</a></li>
							<li><a href="#" class="dropdown-item" title="Eduncle">Eduncle</a></li>
						</div>
						<!--- Dropdown footer start ------->
						<div class="business-menu-footer">
							<li><a class="dropdown-item" href="#">All Business</a></li>
							<li><a class="dropdown-item" href="#"><i class="icon-add-new"></i> &nbsp;New Business</a></li>
						</div>
					</div>
				</div> 
			</div>		
		</div>	
	</div>
	<div class="align-self-center d-flex">
		<!----- Header Right Side Links---------->
		<ul class="top-right-icon f-16 f-md-20">
			<!------------ DotcomPal Guide Dropdown----------------->
			<li class="list-link dropdown caret-icon-none header-profile-dropdown video-guide-dropdown video-guide-dropdown-width d-none d-md-block"><a class="list-inline-link dropdown-toggle" id="guide" data-toggle="dropdown"><i class="icon-guide"></i> </a>
				<div class="dropdown-menu dropdown-menu-right video-guide-scrollbar mCustomScrollbar" data-mcs-theme="inset-3">
					<!------------ Quick Start Guide Header----------------->
					<div class="d-flex align-items-center vl-gblue-bg p15 px-md30 lato-font vd-gblue-clr f-14 f-md-16">
						<div class="mr-auto">Quick Start Guide</div>
						<a href="#" class="gblue-clr t-decoration-none f-18" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
					</div>
					<div class="f-14 clearfix py10">
						<a class="dropdown-item" href="#">
							<div class="media">
								<span class="video-guide-icon">
									<i class="icon-walkthrough-wizard"></i>
								</span>
								<div class="media-body align-self-center ml20">
									<p class="w400 f-14 lh140">Walkthrough Wizard</p>
								</div>
							</div>
						</a>
						<a class="dropdown-item" href="#">
							<div class="media">
								<span class="video-guide-icon">
									<i class="icon-next-one"></i>
								</span>
								<div class="media-body align-self-center ml20">
									<p class="w400 f-14 lh140">DotcomPal at a Glance</p>
								</div>
							</div>
						</a>
					</div>
					<div class="vl-gblue-bg p15 px-md30 py-md20 lato-font f-14"> 
						<div class="row">
							<a href="#" class="col-md-7 d-flex d-gblue-clr t-decoration-none">
								<span class="align-self-center gblue-clr"><i class="icon-video-help f-18"></i></span>
								<span class="ml10">Profile, Notification, App Menu</span>
							</a>
							<a href="#" class="col-md-5 d-flex d-gblue-clr t-decoration-none mt15 mt-md0">
								<span class="align-self-center gblue-clr"><i class="icon-video-help f-18"></i></span>
								<span class="ml10">Business Settings</span>
							</a>
							<a href="#" class="col-md-7 d-flex d-gblue-clr t-decoration-none mt15">
								<span class="align-self-center gblue-clr"><i class="icon-video-help f-18"></i></span>
								<span class="ml10">DotcomPal Settings</span>
							</a>
							<a href="#" class="col-md-5 d-flex d-gblue-clr t-decoration-none mt15">
								<span class="align-self-center gblue-clr"><i class="icon-video-help f-18"></i></span>
								<span class="ml10">Dashboard</span>
							</a>
						</div>
					</div>
				</div>
			</li>
			<li class="list-link dropdown caret-icon-none header-profile-dropdown video-guide-dropdown"><a class="list-inline-link dropdown-toggle" id="help" data-toggle="dropdown"><i class="icon-help-n-training f-16 f-md-18"></i> </a>
				<div class="dropdown-menu dropdown-menu-right video-guide-scrollbar mCustomScrollbar" data-mcs-theme="inset-3">
					<!------------ Quick Start Guide Header----------------->
					<div class="d-flex align-items-center vl-gblue-bg p15 px-md30 lato-font vd-gblue-clr f-14 f-md-16">
						<div class="mr-auto">DotcomPal Support</div>
						<a href="#" class="gblue-clr t-decoration-none f-18" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
					</div>
					<div class="f-14 clearfix py10">
						<a class="dropdown-item" href="#">
							<div class="media">
								<span class="video-guide-icon">
									&nbsp;<i class="icon-knowledgebase f-18"></i>
								</span>
								<div class="media-body align-self-center ml20">
									<p class="w400 f-14 lh140">Knowledge Base</p>
								</div>
							</div>
						</a>
						<a class="dropdown-item" href="#">
							<div class="media">
								<span class="video-guide-icon">
									<i class="icon-community f-18"></i>
								</span>
								<div class="media-body align-self-center ml20">
									<p class="w400 f-14 lh140">Community</p>
								</div>
							</div>
						</a>
						<a class="dropdown-item" href="#">
							<div class="media">
								<span class="video-guide-icon">
									<i class="icon-tickett f-20"></i>
								</span>
								<div class="media-body align-self-center ml20">
									<p class="w400 f-14 lh140">Raise The Ticket</p>
								</div>
							</div>
						</a>
						<a class="dropdown-item" href="#">
							<div class="media">
								<span class="video-guide-icon">
									<i class="icon-total-viewed-notification f-14"></i>
								</span>
								<div class="media-body align-self-center ml20">
									<p class="w400 f-14 lh140">Chat With Us</p>
								</div>
							</div>
						</a>
					</div>
					<div class="vl-gblue-bg p15 lato-font f-14 text-center"> 
						<div class="call-animation">
						<i class="icon-call-now f-10"></i>
						</div>
						<div class="f-14 f-md-16 mt15">Call To Us <span class="w700">+ 00000-00000</span></div>
					</div>
				</div>
			</li>
			
			<!------------ Notification Dropdown----------------->
			<li class="list-link dropdown caret-icon-none header-profile-dropdown noti-profile-dropdown doticon active"> <a class="list-inline-link dropdown-toggle" data-toggle="dropdown"><i class="icon-notification"></i> </a>
				<div class="dropdown-menu dropdown-menu-right noti-drop-scroll mCustomScrollbar "  data-mcs-theme="inset-3">
					<!------------ Notification Header----------------->
					<div class="vl-gblue-bg p15 px-md30 py-md20 d-flex justify-content-between">
						<div class="lato-font w700 vd-gblue-clr f-14">My Notifications <span class="vi-red-bg py3 px10 radius3 white-clr f-11 w400 firasans-font ml10">1 New</span>
						</div>
						<div class="d-flex align-self-center">
						<a href="#" class="f-14 p-blue-clr w400 t-decoration-none" title="Setting"><i class="icon-settings"></i></a>
						</div>
					</div>

					<!------------- Notification Empty---------->
					<div class="margin50 d-none">
						<img src="<?php echo $basedir; ?>images/no-notification.png" class="d-block img-fluid mx-auto">
						<div class="f-14 mt15 mt-md20 text-center">No Notification right now.</div>
					</div>
					<!------------- Notification Empty---------->
					
					
					<!------------- Notification Dropdown Links---------->
					<div class="f-14 clearfix">
						<a class="dropdown-item unread-notify" href="#">
							<div class="media"> <span class="app-icon-set d-flex align-items-center"><img class="img-fluid d-block mx-auto rounded-circle" src="<?php echo $basedir; ?>images/lillie_armstrong.png"></span>
								<div class="media-body align-self-center ml10">
									<h5 class="p-blue-clr w600 f-14 mb8">Lillie Armstrong</h5>
									<span class="f-12 d-gblue-clr">2 min. ago</span>
									<p class="vd-gblue-clr w400 f-14 mt8 lh140">I like all these pictures, the overall mood is perfect, we can definitely use them all for the project.</p>
								</div>
							</div>
						</a>
						<a class="dropdown-item unread-notify" href="#">
							<div class="media"><span class="app-icon-set d-flex align-items-center justify-content-center"><i class="icon-unidentified-person f-25 mr0"></i></span>
								<div class="media-body align-self-center ml10">
									<h5 class="p-blue-clr w600 f-14 mb8">Lillie Armstrong</h5>
									<span class="f-12 d-gblue-clr">2 min. ago</span>
									<p class="vd-gblue-clr w400 f-14 mt8 lh140">Your account is logged in from Browser : Chrome 75.0.3770.142 and IP Address: 192.168.0.79.</p>
								</div>
							</div>
						</a>
						<a class="dropdown-item unread-notify" href="#">
							<div class="media"> <span class="app-icon-set d-flex align-items-center"><img class="img-fluid d-block mx-auto rounded-circle" src="<?php echo $basedir; ?>images/mark-thomas.png"></span>
								<div class="media-body align-self-center ml10">
									<h5 class="p-blue-clr w600 f-14 mb8">Mark Thomas</h5>
									<span class="f-12 d-gblue-clr">1 day ago at 12:50 pm</span>
									<p class="vd-gblue-clr w400 f-14 mt8 lh140">I like all these pictures, the overall mood is perfect, we can definitely use them all for the project.</p>
								</div>
							</div>
						</a>
						<a class="dropdown-item" href="#">
							<div class="media"> <span class="app-icon-set d-flex align-items-center"><img class="img-fluid d-block mx-auto rounded-circle" src="<?php echo $basedir; ?>images/mailprimo-icon.png"></span>
								<div class="media-body align-self-center ml10">
									<h5 class="p-blue-clr w600 f-14 mb8">MailPrimo</h5>
									<span class="f-12 d-gblue-clr">Jan 18, 2018 at 5:00 pm</span>
									<p class="vd-gblue-clr w400 f-14 mt8 lh140">I like all these pictures, the overall mood is perfect, we can definitely use them all for the project.</p>
								</div>
							</div>
						</a>

						<a class="dropdown-item" href="#">
							<div class="media"> <span class="app-icon-set d-flex align-items-center"><img class="img-fluid d-block mx-auto rounded-circle" src="<?php echo $basedir; ?>images/jeni-mariyan.png"></span>
								<div class="media-body align-self-center ml10">
									<h5 class="p-blue-clr w600 f-14 mb8">Jeni Mariyan </h5>
									<span class="f-12 d-gblue-clr">Jan 16, 2018 at 5:00 pm</span>
									<p class="vd-gblue-clr w400 f-14 mt8 lh140">I like all these pictures, the overall mood is perfect, we can definitely</p>
								</div>
							</div>
						</a>
					</div>

					<!-------- View All Notification Button Fixed -------->
					<div class="noti-btn-fixed">
						<a href="#" class="base-btn blue-btn f-14 btn-block radius0">View All Notifications</a>
					</div>
				</div>
			</li>
			<!------------ Setting Dropdown----------------->
			<li class="list-link dropdown caret-icon-none header-profile-dropdown noti-profile-dropdown"> <a class="list-inline-link dropdown-toggle " data-toggle="dropdown"><i class="icon-settings"></i> </a>
				<div class="dropdown-menu dropdown-menu-right h-auto mCustomScrollbar" data-mcs-theme="inset-3">
					<!------------ Setting Header----------------->
					<div class="vl-gblue-bg p15 px-md30 py-md20 lato-font w700 vd-gblue-clr f-14"> Go to Settings </div>

					<!------------- Setting Dropdown Links---------->
					<div class="f-14 clearfix">
						<a class="dropdown-item" href="#">
							<div class="media"> <span class="app-icon-set d-flex align-items-center"><img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/saglus-icon.png"></span>
								<div class="media-body align-self-center ml20">
									<h5 class="p-blue-clr w600 f-14">DCP Account Settings</h5>
									<p class="gblue-clr w400 f-14 mt8 lh140">Here are you manage DCP account settings </p>
								</div>
							</div>
						</a>
						<a class="dropdown-item" href="#">
							<div class="media"> <span class="app-icon-set d-flex align-items-center"><img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/eduncle-icon.png"></span>
								<div class="media-body align-self-center ml20">
									<h5 class="p-blue-clr w600 f-14">Eduncle Account Settings</h5>
									<p class="gblue-clr w400 f-14 mt8 lh140">Here are you manage business account settings </p>
								</div>
							</div>
						</a>
					</div>
				</div>
			</li>
			<!------------ Profile Dropdown----------------->
			<li class="list-link dropdown caret-icon-none header-profile-dropdown"> <a class="list-inline-link dropdown-toggle" data-toggle="dropdown"> <img src="<?php echo $basedir; ?>images/profile-icon.png" class="img-fluid profile-pic"> </a>
				<div class="dropdown-menu dropdown-menu-right mCustomScrollbar" data-mcs-theme="inset-3">
					<!------------ Profile Header----------------->
					<div class="profile-header p15 px-md30 py-md20">
						<div class="media"> <img class="rounded-circle img-circle img-fluid" src="<?php echo $basedir; ?>images/profile-pic.png" alt="">
							<div class="media-body align-self-center ml20">
								<h5 class="vd-gblue-clr lato w700 f-14 f-md-16">Jordan Charlsbro</h5>
								<p class="gblue-clr lato w400 f-12 mt8 mb8 break-all">jordancharlsbro@email.com</p>
								<button class="mb-0 base-btn blue-btn f-14 btn-h30" type="button">View Profile</button>
							</div>
						</div>
					</div>

					<!------------- Profile Dropdown Links---------->
					<div class="p15 px-md30 py-md20">
						<h6 class="firasans-font w500 vd-gblue-clr f-14">Complete your profile. It’s at 70% </h6>
						<!--------- Progressbar ----------->
						<div class="rounded-progress h10 mt15 mt-md20 mb15 mb-md20">
							<div class="rounded-progress-bar s-green-bg" style="width:90%"></div>
						</div>

						<a href="#" class="f-11 p-blue-clr mb10">Describe your current position</a><br>
						<a href="#" class="f-11 p-blue-clr mb10">Confirm your current position</a><br>
						<a href="#" class="f-11 p-blue-clr mb15 mb-md20">Add your skills & expertise</a>
						
					</div>
                    
                    <div class="f-14">
							<a class="dropdown-item" href="#"><i class="icon-home f-16"></i>Home</a>
							<a class="dropdown-item" href="#"><i class="icon-blog-icon f-14"></i>Blog Dashboard</a>
							<a class="dropdown-item" href="#"><i class="icon-update-log f-16"></i>Update Log</a>
							<a class="dropdown-item" href="#"><i class="icon-sbuscription f-16"></i>Subscription</a>
                            <a class="dropdown-item" href="#"><i class="icon-help f-16"></i>Help</a>
							<a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#feedbackModal"><i class="icon-feedback-two f-16"></i>Feedback</a>
							<a class="dropdown-item" href="#"><i class="icon-logout f-16"></i>Logout</a>
						</div>
                    
				</div>
			</li>
		</ul>
	</div>
</div>
	
<!------- Business Logo Center Div
<div class="d-flex business-logo-center hiddenxs col-sm-2 col-md-2 col-lg-2 mx-auto">
	<img src="<?php echo $basedir; ?>images/eduncle-logo.png" class="img-fluid d-block mx-auto align-self-center mh-50">
	<div class="align-self-center mx-auto d-none">fdsfdf</div>
</div>
<!------- Business Logo Center Div end --------->
</header>
	
<div id="fixonscroll" class="">
<div class="smart-nav-area col-12">
	<div class="row no-gutters">
			<div class="col-10 col-sm-4 col-md-3 col-lg-2 d-flex align-items-center">
				<a class="smart-appmenu-btn" data-toggle="modal" data-target="#DCPAppModalPopup"><div class="api-icon-effect"><div class="api-b1"></div><div class="api-b2"></div><div class="api-b3"></div><div class="api-b4"></div><div class="api-b5"></div><div class="api-b6"></div><div class="api-b7"></div><div class="api-b8"></div><div class="api-b9"></div></div></a>
				&nbsp;<!--<a href="#"><img src="<?php echo $basedir; ?>images/smart-logo.png" class="img-fluid mx-auto align-baseline"></a>-->
				<div class="white-clr f-14 f-md-22 w500 text-capitalize t-decoration-none app-name text-truncate" title="Menu">Menu</div>
				<!--<a href="#" class="white-clr f-14 f-md-22 w500 text-capitalize t-decoration-none app-name text-truncate" title="Video">Video</a>-->
				<span class="white-clr f-10 px5 mt3 d-md-none"><i class="icon-next-b"></i></span>
				<div class="dropdown business-menu d-md-none">
					<button type="button" class="business-name-dropdown dropdown-toggle f-14 f-md-22 white-clr t-decoration-none text-capitalize" data-toggle="dropdown">
					Eduncle
					</button>
					<div class="dropdown-menu business-menu-dropdown">
						<!-- Search field -->
						<div class="business-search-field">
							<div class="input-group">
								<input class="form-control" placeholder="Search" type="text">
							<div class="input-group-append">
								<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
							</div>
							</div>
						</div>
						<!-- Search field end -->
						<div class="mCustomScrollbar f-14" data-mcs-theme="inset-3" style="max-height: 300px !important;">
							<li><a href="#" class="dropdown-item active">Eduncle</a></li>
							<li><a href="#" class="dropdown-item">MaxDrive</a></li>
							<li><a href="#" class="dropdown-item">Kaptiwa</a></li>
							<li><a href="#" class="dropdown-item">Trenzy</a></li>
							<li><a href="#" class="dropdown-item">FitCart</a></li>
							<li><a href="#" class="dropdown-item">ForkNdagger</a></li>
							<li><a href="#" class="dropdown-item">SearchSprout</a></li>
							<li><a href="#" class="dropdown-item">MaxFunnels</a></li>
							<li><a href="#" class="dropdown-item">Eduncle</a></li>
							<li><a href="#" class="dropdown-item">Eduncle</a></li>
						</div>
						<!--- Dropdown footer start ------->
						<div class="business-menu-footer">
							<li><a class="dropdown-item" href="#">All Business</a></li>
							<li><a class="dropdown-item" href="#"><i class="icon-add-new"></i> &nbsp;New Business</a></li>
						</div>
					</div>
				</div>
			</div>

			<div class="col-2 col-sm-8 col-md-9 col-lg-10 xs-smart-header d-flex align-items-center">
				<!--Main Navigation Starts-->
				<nav class="navbar navbar-expand-lg navbar-light p0 smart-nav-header f-14 f-xl-16 w-100">
					<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#smartappmenu" aria-controls="smartappmenu" aria-expanded="false" aria-label="Toggle navigation">
						<div class="bar1"></div>
						<div class="bar2"></div>
						<div class="bar3"></div>
					</button>
					
					<div class="collapse navbar-collapse xs-device-menu" id="smartappmenu">
						<ul class="navbar-nav">
							<li class="nav-item dropdown d-lg-none">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="New Campaign">
								New Campaign
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="#" title="Funnel">Funnel </a></li>
									<li><a class="dropdown-item" href="#" title="Page">Page </a></li>									
									<li><a class="dropdown-item" href="#" title="Video">Video</a></li>
									<li><a class="dropdown-item" href="#" title="Broadcast">Broadcast</a></li>
									<li><a class="dropdown-item" href="#" title="Web Notification">Web Notification</a></li>
									<li><a class="dropdown-item" href="#" title="Web Form">Web Form</a></li>
								</ul>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Campaigns">
								Campaigns
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="#" title="Pages">Pages </a></li>
									<li><a class="dropdown-item" href="#" title="Funnels">Funnels </a></li>
									<li><a class="dropdown-item" href="#" title="Videos">Videos</a></li>
									<li><a class="dropdown-item" href="#" title="Broadcasts">Broadcasts</a></li>
									<li><a class="dropdown-item" href="#" title="Web Notifications">Web Notifications</a></li>
									<li><a class="dropdown-item" href="#" title="Web Forms">Web Forms</a></li>
								</ul>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="A/B Test">
								A/B Test
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="#" title="Page">Page</a></li>
									<li><a class="dropdown-item" href="#" title="Mail">Mail</a></li>
									<li><a href="#" class="dropdown-item" title="Notification">Notification</a></li>
								</ul>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link" href="#" role="button" title="Audience">
								Audience
								</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link" href="#" title="Accounts">
								Accounts 
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#" title="MyDrive"  role="button">
								MyDrive
								</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Analytics">
								Analytics 
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="#" title="Audience">Audience</a></li>
									<li><a class="dropdown-item" href="#" title="Mail">Mail</a></li>
									<li><a class="dropdown-item" href="#" title="Funnels">Funnels</a></li>
									<li><a href="#" class="dropdown-item" title="Video">Video</a></li>
									<li><a href="#" class="dropdown-item" title="Notification">Notification</a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#" title="Integration" role="button">
								Integration
								</a>
							</li>
							<li class="nav-item dropdown campaign-dropdown d-none d-lg-block">
								<a class="nav-link dropdown-toggle campaign-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="New Campaign">
								<i class="icon-add-new f-14 align-middle"></i>&nbsp;&nbsp; New Campaign
								</a>
								<div class="dropdown-menu dropdown-menu-right mCustomScrollbar" data-mcs-theme="inset-3" aria-labelledby="navbarDropdown">
									<div class="px15 px-md30">
										<div class="row">
											<div class="col-12 col-md-6 mb15 mb-md20">
												<a href="#" class="campaign-dropdown-link" title="Funnel">
													<img src="<?php echo $basedir; ?>images/funnel-icon.png" class="img-fluid">
													<p class="f-14 f-md-16 pl20">Funnel</p>
												</a>
											</div>
											<div class="col-12 col-md-6 mb15 mb-md20">
												<a href="#" class="campaign-dropdown-link" title="Page">
													<img src="<?php echo $basedir; ?>images/page-icon.png" class="img-fluid">
													<p class="f-14 f-md-16 pl20">Page</p>
												</a>
											</div>
											<div class="col-12 col-md-6 mb15 mb-md20">
												<a href="#" class="campaign-dropdown-link" title="Video">
													<img src="<?php echo $basedir; ?>images/video-icon.png" class="img-fluid">
													<p class="f-14 f-md-16 pl20">Video</p>
												</a>
											</div>
											<div class="col-12 col-md-6 mb15 mb-md20">
												<a href="#" class="campaign-dropdown-link" title="Broadcast">
													<img src="<?php echo $basedir; ?>images/broadcast-icon-img.png" class="img-fluid">
													<p class="f-14 f-md-16 pl20">Broadcast</p>
												</a>
											</div>
											<div class="col-12 col-md-6 mb15 mb-md20">
												<a href="#" class="campaign-dropdown-link" title="Web Notification">
													<img src="<?php echo $basedir; ?>images/web-notification-icon.png" class="img-fluid">
													<p class="f-14 f-md-16 pl20">Web Notification</p>
												</a>
											</div>
											<div class="col-12 col-md-6 mb15 mb-md20">
												<a href="#" class="campaign-dropdown-link" title="Web Form">
													<img src="<?php echo $basedir; ?>images/web-form-icon.png" class="img-fluid">
													<p class="f-14 f-md-16 pl20">Web Form</p>
												</a>
											 </div>
											<!-- Single DropDown Link -->
											<div class="col-12 mb15 mb-md20">
												<a href="#" class="campaign-dropdown-link justify-content-center" title="Video">
													<img src="<?php echo $basedir; ?>images/video-icon.png" class="img-fluid">
													<p class="f-14 f-md-16 pl20">Video</p>
												</a>
											</div>
										</div>
									</div>
									<div class="px15 px-md30 campaign-dropdown-sepration pt15 pt-md30">
										<div class="row">
											<div class="col-12 col-md-6 mb15 mb-md20">
												<a href="#" class="campaign-dropdown-link" title="Funnel">
													<img src="<?php echo $basedir; ?>images/funnel-icon.png" class="img-fluid">
													<p class="f-14 f-md-16 pl20">Funnel</p>
												</a>
											</div>
											<div class="col-12 col-md-6 mb15 mb-md20">
												<a href="#" class="campaign-dropdown-link" title="Page">
													<img src="<?php echo $basedir; ?>images/page-icon.png" class="img-fluid">
													<p class="f-14 f-md-16 pl20">Page</p>
												</a>
											</div>
											<div class="col-12 col-md-6 mb15 mb-md20">
												<a href="#" class="campaign-dropdown-link" title="A/B Test">
													<img src="<?php echo $basedir; ?>images/abtest-icon.png" class="img-fluid">
													<p class="f-14 f-md-16 pl20">A/B Test</p>
												</a>
											</div>
											<div class="col-12 col-md-6 mb15 mb-md20">
												<a href="#" class="campaign-dropdown-link" title="Video">
													<img src="<?php echo $basedir; ?>images/video-icon.png" class="img-fluid">
													<p class="f-14 f-md-16 pl20">Video</p>
												</a>
											</div>
											<div class="col-12 col-md-6 mb15 mb-md20">
												<a href="#" class="campaign-dropdown-link" title="Broadcast">
													<img src="<?php echo $basedir; ?>images/broadcast-icon-img.png" class="img-fluid">
													<p class="f-14 f-md-16 pl20">Broadcast</p>
												</a>
											</div>
											<div class="col-12 col-md-6 mb15 mb-md20">
												<a href="#" class="campaign-dropdown-link" title="Web Notification">
													<img src="<?php echo $basedir; ?>images/web-notification-icon.png" class="img-fluid">
													<p class="f-14 f-md-16 pl20">Web Notification</p>
												</a>
											</div>
											<div class="col-12 col-md-6 mb15 mb-md20">
												<a href="#" class="campaign-dropdown-link" title="Web Form">
													<img src="<?php echo $basedir; ?>images/web-form-icon.png" class="img-fluid">
													<p class="f-14 f-md-16 pl20">Web Form</p>
												</a>
											 </div>
											<!-- Single DropDown Link -->
											<div class="col-12 mb15 mb-md20">
												<a href="#" class="campaign-dropdown-link justify-content-center" title="Video">
													<img src="<?php echo $basedir; ?>images/video-icon.png" class="img-fluid">
													<p class="f-14 f-md-16 pl20">Video</p>
												</a>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
   					</div>
				</nav>
				<!--Main Navigation Ends-->
			</div>
		</div>
</div>
</div>
</div>
<div class="virtual-div add-vdivfull"></div>
	
<!----------- Installation Alert bar-----------> 
<div class="vi-red-bg py5 px15 white-clr f-14 w400 text-center d-none">
	<marquee onMouseOver="this.stop()" onMouseOut="this.start()" scrollamount="10" >
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a href="#" class="s-yellow-clr w500">click here</a>
	</marquee>
</div>