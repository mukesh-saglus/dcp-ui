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
<!-- DotCompal Header Css Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/css/header.css">
<!-- DotCompal Dahboard Css Stylesheet ----->
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
<!---------- DotCompal Login Header ---------->
<div class="sticky-fullhead">
<header class="relative">
<div class="s-header d-flex justify-content-between">
	
	<div class="d-flex align-items-center">
		<a href="#">
		<img src="<?php echo $basedir; ?>images/dcp-logo-header.png" class="img-fluid mh-50" alt="Saglus Logo">
		</a>
		<div class="d-none d-sm-block">
			<div class="d-flex align-items-center">
				<span class="white-clr f-14 px15 mt3"><i class="icon-next-b"></i></span>
				<a href="#" class="f-14 f-md-20 white-clr t-decoration-none text-capitalize">
				Eduncle
				</a>
			</div>		
		</div>	
	</div>

	<div class="align-self-center d-flex">
		<!----- Header Right Side Links---------->
		<ul class="top-right-icon f-16 f-md-20">
			
			<!------------ Notification Dropdown----------------->
			<li class="list-link dropdown caret-icon-none header-profile-dropdown noti-profile-dropdown doticon active"> <a class="list-inline-link dropdown-toggle" data-toggle="dropdown"><i class="icon-notification"></i> </a>
				<div class="dropdown-menu dropdown-menu-right noti-drop-scroll mCustomScrollbar"  data-mcs-theme="inset-3">
					<!------------ Notification Header----------------->
					<div class="vl-gblue-bg p15 px-md30 py-md20 d-flex justify-content-between">
						<div class="lato-font w700 vd-gblue-clr f-14">My Notifications <span class="vi-red-bg py3 px10 radius3 white-clr f-11 w400 firasans-font ml10">1 New</span>
						</div>
						<div class="d-flex align-self-center"><a href="#" class="f-14 p-blue-clr w400 t-decoration-none" title="Setting"><i class="icon-settings"></i></a>
						</div>
					</div>

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
									<h5 class="p-blue-clr w600 f-14">Saglus Account Settings</h5>
									<p class="gblue-clr w400 f-14 mt8 lh140">Here are you manage saglus account setings </p>
								</div>
							</div>
						</a>
						<a class="dropdown-item" href="#">
							<div class="media"> <span class="app-icon-set d-flex align-items-center"><img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/eduncle-icon.png"></span>
								<div class="media-body align-self-center ml20">
									<h5 class="p-blue-clr w600 f-14">Eduncle Account Settings</h5>
									<p class="gblue-clr w400 f-14 mt8 lh140">Here are you manage business account setings </p>
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
								<p class="gblue-clr lato w400 f-12 mt8 mb8">jordancharlsbro@email.com</p>
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
                    
                    <div class="mb15 mb-md20 f-14">
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
				<a class="white-clr t-decoration-none f-14 w400 d-block d-sm-none business-logo-mw text-truncate text-capitalize" href="#">
				Business Name
				</a>
				<span class="icon-next-b f-10 w400 mx5 d-block d-sm-none white-clr"></span>
				<a class="white-clr t-decoration-none f-14 f-md-20 w400 text-capitalize" href="#">
				BMS
				</a>
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
							<li class="nav-item">
								<a class="nav-link" href="#" title="Website">
								Website 
								</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="CMS">
								CMS 
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="#" title="Post">Post</a></li>
									<li><a class="dropdown-item" href="#" title="Category">Category</a></li>
									<li><a class="dropdown-item" href="#" title="Tags">Tags</a></li>
									<li><a class="dropdown-item" href="#" title="Comments">Comments</a></li>
									<li><a class="dropdown-item" href="#" title="MyDrive">MyDrive</a></li>
								</ul>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Products">
								Products 
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="#" title="Solutions">Solutions</a></li>
									<li><a class="dropdown-item" href="#" title="Packages">Packages</a></li>
									<li><a class="dropdown-item" href="#" title="Base Price">Base Price</a></li>
								</ul>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Campaigns">
								Campaigns 
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="#" title="Projects">Projects</a></li>
									<li><a class="dropdown-item" href="#" title="Video">Video</a></li>
									<li><a class="dropdown-item" href="#" title="Mail">Mail</a></li>
									<li><a class="dropdown-item" href="#" title="Page">Page</a></li>
									<li><a class="dropdown-item" href="#" title="Notification">Notification</a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#" title="Audience">
								 Audience
								</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Accounts">
								Accounts  
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="#" title="All Accounts">All Accounts</a></li>
								<li><a class="dropdown-item" href="#" title="Subscribers">Subscribers</a></li>
								<li><a class="dropdown-item" href="#" title="Customers">Customers</a></li>
								</ul>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Orders">
								Orders
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="#" title="Orders Management">Orders Management</a></li>
								<li><a class="dropdown-item" href="#" title="Transactions">Transactions</a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#" title="MyDrive">
								MyDrive
								</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Analytics">
								Analytics
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="#" title="Audience">Audience</a></li>
								<li><a class="dropdown-item" href="#" title="Video">Video</a></li>
								<li><a class="dropdown-item" href="#" title="Page">Page</a></li>
								<li><a class="dropdown-item" href="#" title="Mail">Mail</a></li>
								<li><a class="dropdown-item" href="#" title="Notification">Notification</a></li>
								<li><a class="dropdown-item" href="#" title="orders">orders</a></li>
								</ul>
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