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
<?php $basedir = "http://".$_SERVER['SERVER_NAME'] . '/DCP-UI/'; ?>
<!-- Favicon Icon -->
<link rel="icon" href="<?php echo $basedir; ?>images/favicon.png" type="image/png">
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/bootstrap.min.css">
<!-- Common Css Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>css/general.css">
<link rel="stylesheet" href="<?php echo $basedir; ?>css/elements.css">
<!-- Bootstrap Select Dropdown Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/bootstrap-select.css">
<!-- DotComPal Header Css Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/css/dcp-header.css">
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
<header>
 <div class="dcp-header d-flex justify-content-lg-between">
            <!-- Left -->
            <div class="d-flex align-items-center">
               <div class="dcp-solution">
                  <a class="dcp-appmenu-btn f-16 f-md-18">
                     <div class="api-icon-effect">
                        <div class="api-b1"></div>
                        <div class="api-b2"></div>
                        <div class="api-b3"></div>
                        <div class="api-b4"></div>
                        <div class="api-b5"></div>
                        <div class="api-b6"></div>
                        <div class="api-b7"></div>
                        <div class="api-b8"></div>
                        <div class="api-b9"></div>
                     </div>
                  </a>
                  <div class="dcp-solution-wrapper dcp-solution-toggle">
                     <!-- Header -->
                     <div class="header smart-nav-header">
                        <div class="title d-none d-xl-block">You are in </div>
                        <div class="dcp-grow-drop bs-h30">
                           <select class="selectpicker" title="DotcomPal Grow">
                              <option>DotcomPal Grow</option>
                              <option>DotcomPal Grow</option>
                           </select>
                        </div>
                        <div class="d-xl-none">
                           <a class="create-btn-toggle" href="#" title="New" data-toggle="modal" data-target="#SalesSolutionModal">
                           <i class="icon-add-new f-14 align-middle"></i>&nbsp;&nbsp; New
                           </a>
                        </div>
                     </div>
                    <!-- Navigation Panel-->
					 <div class="navigation-wrapper-center mCustomScrollbar" data-mcs-theme="inset-3">
						<div class="navigation-side-panel">
							<div class="accordion" id="accordion">
							   <div class="card">
								  <div class="card-header" data-toggle="collapse" href="#menu1" aria-expanded="true">
									 <a class="card-title"><span class="icon-box"><i class="icon-audience-filll"></i></span>Audience</a>
								  </div>
								  <div id="menu1" class="collapse show" data-parent="#accordion">
									 <div class="card-body">
										<ul class="dcp-solution-nav">
										<li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-total-segment icon-style"></i>
												 <div class="title">Segments</div>
											  </a>
										   </li>
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-contactts icon-style"></i>
												 <div class="title">Contacts</div>
											  </a>
										   </li>										  
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-add-to-list icon-style"></i>
												 <div class="title">Lists</div>
											  </a>
										   </li>
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-tagss icon-style"></i>
												 <div class="title">Tags</div>
											  </a>
										   </li>
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-commentt icon-style"></i>
												 <div class="title">Communication</div>
											  </a>
										   </li>
										</ul>
									 </div>
								  </div>
							   </div>
							   <div class="card">
								  <div class="card-header collapsed" data-toggle="collapse" href="#menu2" aria-expanded="true">
									 <a class="card-title"><span class="icon-box"><i class="icon-side-tipss"></i></span>Campaigns</a>
								  </div>
								  <div id="menu2" class="collapse" data-parent="#accordion">
									 <div class="card-body">
										<ul class="dcp-solution-nav">
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-all-journey icon-style"></i>
												 <div class="title">Journey</div>
											  </a>
										   </li>
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-total-visited-pages icon-style"></i>
												 <div class="title">Page</div>
											  </a>
										   </li>
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-total-viewed-videos icon-style"></i>
												 <div class="title">Video</div>
											  </a>
										   </li>
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-editor-popup icon-style"></i>
												 <div class="title">Popup & Bar</div>
											  </a>
										   </li>
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-mail icon-style"></i>
												 <div class="title">Broadcast</div>
											  </a>
										   </li>
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-side-tipss icon-style"></i>
												 <div class="title">All Campaigns</div>
											  </a>
										   </li>
										</ul>
									 </div>
								  </div>
							   </div>
							   <div class="card">
								  <div class="card-header collapsed" data-toggle="collapse" href="#menu3" aria-expanded="true">
									 <a class="card-title"><span class="icon-box"><i class="icon-ab-campaign"></i></span>A/B test</a>
								  </div>
								  <div id="menu3" class="collapse" data-parent="#accordion">
									 <div class="card-body">
										<ul class="dcp-solution-nav">
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-total-visited-pages icon-style"></i>
												 <div class="title">Page</div>
											  </a>
										   </li>
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-editor-popup icon-style"></i>
												 <div class="title">Popup & Bar</div>
											  </a>
										   </li>
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-mail icon-style"></i>
												 <div class="title">Broadcast</div>
											  </a>
										   </li>
										</ul>
									 </div>
								  </div>
							   </div>
							   <div class="card">
								  <div class="card-header collapsed" data-toggle="collapse" href="#menu4" aria-expanded="true">
									 <a class="card-title"><span class="icon-box"><i class="icon-analytics"></i></span>Analytics</a>
								  </div>
								  <div id="menu4" class="collapse" data-parent="#accordion">
									 <div class="card-body">
										<ul class="dcp-solution-nav">
										  <!-- <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-dollar icon-style"></i>
												 <div class="title">Sales</div>
											  </a>
										   </li>
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-total-segment icon-style"></i>
												 <div class="title">Segments</div>
											  </a>
										   </li>-->
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-audience-filll icon-style"></i>
												 <div class="title">Audience</div>
											  </a>
										   </li>
										 <li class="nav-item">
												<a class="nav-link" href="#">
												   <i class="icon-all-journey icon-style"></i>
												   <div class="title">Journey</div>
												</a>
											 </li>
											 <li class="nav-item">
												<a class="nav-link" href="#">
												   <i class="icon-total-visited-pages icon-style"></i>
												   <div class="title">Page</div>
												</a>
											 </li>
											 <li class="nav-item">
												<a class="nav-link" href="#">
												   <i class="icon-total-viewed-videos icon-style"></i>
												   <div class="title">Video</div>
												</a>
											 </li>
											 <li class="nav-item">
												<a class="nav-link" href="#">
												   <i class="icon-editor-popup icon-style"></i>
												   <div class="title">Popup & Bar</div>
												</a>
											 </li>
										</ul>
									 </div>
								  </div>
							   </div>
							</div>
						</div>
					 </div>
					<!-- Bottom Navigation -->
                     <div class="bottom-menu">
                        <div class="d-flex justify-content-between flex-wrap">
                           <div class="col-6 p0 pr5"><a href="#" class="base-btn d-block blue-btn px10 text-left" title="Channel"><i class="icon-channel align-middle"></i>&nbsp;&nbsp; Channel</a></div>
                           <div class="col-6 p0 pl5"><a href="#" class="base-btn d-block blue-btn px10 text-left" title="MyDrive"><i class="icon-drive align-middle"></i>&nbsp;&nbsp; MyDrive</a></div>
                           <div class="col-6 p0 pr5 mt10"><a href="#" class="base-btn d-block blue-btn px10 text-left" title="Trainings"><i class="icon-profile-training-video align-middle"></i>&nbsp;&nbsp; Trainings</a></div>
                           <div class="col-6 p0 pl5 mt10"><a href="#" class="base-btn d-block blue-btn px10 text-left" title="Integration"><i class="icon-dcp-integration align-middle"></i>&nbsp;&nbsp; Integration</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <a href="#" class="d-md-none pr15">
               <img src="<?php echo $basedir; ?>images/logo-header-icon.png" class="img-fluid mh-50" alt="DotcomPal" title="DotcomPal">
               </a>
               <a href="#" class="d-none d-md-flex pr15 t-decoration-none" title="DotcomPal">
				<img src="<?php echo $basedir; ?>images/dcp-icon.png" class="img-fluid mh-50" alt="DotcomPal">
			    <span class="onboarding-solution-name">Dotcom<span class="w500">Pal</span></span>
               </a>
            </div>
            <!----- Right ---------->
            <div class="align-items-center d-flex ml-auto ml-lg-0">
			    <div class="d-flex align-items-center">
                  <div class="dropdown business-menu">
                     <button type="button" class="business-name-dropdown dropdown-toggle f-14 f-md-16 white-clr t-decoration-none text-capitalize" data-toggle="dropdown">
                     Business Search
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
                        <div class="mCustomScrollbar f-14" data-mcs-theme="inset-3" style="max-height: 260px !important;">
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
               <span class="business-sepration-line"></span>	
               <ul class="top-right-icon f-16 f-md-20">
                  <!------------ DotcomPal Guide Dropdown----------------->
                  <li class="list-link dropdown caret-icon-none header-profile-dropdown video-guide-dropdown">
                     <a class="list-inline-link dropdown-toggle f-16" id="help" data-toggle="dropdown"><span class="help-none">Help</span> <i class="icon-help-n-training top-right-icon-margin"></i> </a>
						<div class="dropdown-menu dropdown-menu-right video-guide-scrollbar mCustomScrollbar" data-mcs-theme="inset-3">
                        <!------------ Quick Start Guide Header----------------->
                        <div class="d-flex align-items-center vl-gblue-bg p15 px-md30 vd-gblue-clr f-14 f-md-15 w700">
                           <div class="mr-auto">DotcomPal Support</div>
                        </div>
						 <div class="training-dropdown">
							<div class="media px15 px-md30">
								 <span class="video-guide-icon"><i class="icon-video-help f-18"></i></span>
								 <div class="media-body align-self-center ml20">
									<p class="w400 f-14 f-md-15 lh140 text-capitalize">Training Videos</p>
								 </div>
							</div>
							<div class="px15 px-md30 lato-font f-13"> 
								<div class="row no-gutters align-items-center">
									<a href="#" class="col-md-6 p0 d-flex d-gblue-clr t-decoration-none aling-items-center mt15 p-blue-hover-clr">
										<span class="gblue-clr"><i class="icon-video-help f-15"></i></span>
										<span class="ml10">Setup A Business</span>
									</a>
									<a href="#" class="col-md-6 p0 d-flex d-gblue-clr t-decoration-none aling-items-center mt15 p-blue-hover-clr">
										<span class="gblue-clr"><i class="icon-video-help f-15"></i></span>
										<span class="ml10">New Navigation</span>
									</a>
									<a href="#" class="col-md-6 p0 d-flex d-gblue-clr t-decoration-none aling-items-center mt15 p-blue-hover-clr">
										<span class="gblue-clr"><i class="icon-video-help f-15"></i></span>
										<span class="ml10">Onboarding</span>
									</a>
									<a href="#" class="col-md-6 p0 d-flex d-gblue-clr t-decoration-none aling-items-center mt15 p-blue-hover-clr">
										<span class="gblue-clr"><i class="icon-video-help f-15"></i></span>
										<span class="ml10">Create A Campaign</span>
									</a>
									<a href="#" class="col-md-12 p0 d-flex d-gblue-clr t-decoration-none aling-items-center mt15 p-blue-hover-clr">
										<span class="gblue-clr"><i class="icon-video-help f-15"></i></span>
										<span class="ml10">Step-By-Step Video Training (70)</span>
									</a>
								</div>
							</div>
						  </div>
                        <div class="f-14 f-md-15 clearfix">
                           <a class="dropdown-item" href="#">
                              <div class="media">
                                 <span class="video-guide-icon">
                                 &nbsp;<i class="icon-knowledgebase f-18"></i>
                                 </span>
                                 <div class="media-body align-self-center ml20">
                                    <p class="w400 f-14 f-md-15 lh140 text-capitalize">Knowledgebase</p>
									 <div class="w400 f-12 lh140 gblue-clr mt4">Checkout FAQ knowledgebase and help yourself.</div>
                                 </div>
                              </div>
                           </a>
                           <a class="dropdown-item" href="#">
                              <div class="media">
                                 <span class="video-guide-icon">
                                 <i class="icon-facebook f-18"></i>
                                 </span>
                                 <div class="media-body align-self-center ml20">
                                    <p class="w400 f-14 f-md-15 lh140 text-capitalize">Online Business VIP Club</p>
									<div class="w400 f-12 lh140 gblue-clr mt4">Join Fb group to gain 10x growth with DotcomPal.</div> 
                                 </div>
                              </div>
                           </a>
                           <a class="dropdown-item" href="#">
                              <div class="media">
                                 <span class="video-guide-icon">
                                 <i class="icon-total-viewed-notification f-14"></i>
                                 </span>
                                 <div class="media-body align-self-center ml20">
                                    <p class="w400 f-14 f-md-15 lh140">Chat With Us</p>
									 <div class="w400 f-12 lh140 gblue-clr mt4">Chat with us for instant resolution of any query.</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="vl-gblue-bg p15 lato-font f-14 text-center">
                           <div class="call-animation">
                              <i class="icon-call-now f-10"></i>
                           </div>
                           <div class="f-14 f-md-15 mt15">Call To Us <span class="w700">+1-833-622-0003</span></div>
                        </div>
                     </div>
                  </li>
                  <!------------ Setting Dropdown----------------->
                  <li class="list-link dropdown caret-icon-none header-profile-dropdown noti-profile-dropdown">
                     <a class="list-inline-link dropdown-toggle f-16 f-md-18" data-toggle="dropdown"><i class="icon-settings top-right-icon-margin"></i> </a>
                     <div class="dropdown-menu dropdown-menu-right h-auto mCustomScrollbar" data-mcs-theme="inset-3">
                        <!------------- Setting Dropdown Links---------->
                        <div class="f-14 f-md-15 clearfix">
                           <a class="dropdown-item" href="#">
                              <div class="media">
                                 <span class="app-icon-set d-flex align-items-center"><img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/eduncle-icon.png"></span>
                                 <div class="media-body align-self-center ml20">
                                    <h5 class="p-blue-clr w500 f-14 f-md-15">Eduncle Business Settings</h5>
                                    <p class="gblue-clr w400 f-14 mt4 lh140">Manage Business details, Integrations & Custom Domains here</p>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </li>
                  <!------------ Profile Dropdown----------------->
                  <li class="list-link dropdown caret-icon-none header-profile-dropdown">
                     <a class="list-inline-link dropdown-toggle" data-toggle="dropdown"> <img src="<?php echo $basedir; ?>images/profile-icon.png" class="img-fluid profile-pic"> </a>
                     <div class="dropdown-menu dropdown-menu-right mCustomScrollbar" data-mcs-theme="inset-3">
                        <!------------ Profile Header----------------->
                        <div class="profile-header p15 px-md30 py-md20">
                           <div class="media">
                              <img class="rounded-circle img-circle img-fluid" src="<?php echo $basedir; ?>images/profile-pic.png" alt="">
                              <div class="media-body align-self-center ml20">
                                 <h5 class="vd-gblue-clr lato w700 f-14 f-md-15">Jordan Charlsbro</h5>
                                 <p class="gblue-clr lato w400 f-12 mt8 mb8 break-all">jordancharlsbro@email.com</p>
                                 <button class="mb-0 base-btn blue-btn f-14 btn-h30" type="button">View Profile</button>
                              </div>
                           </div>
                        </div>
                        <!------------- Profile Dropdown Links---------->
                        <div class="p15 px-md30 py-md20">
                           <h6 class="firasans-font w500 vd-gblue-clr f-14 f-md-15">Complete your profile. It’s at 70% </h6>
                           <!--------- Progressbar ----------->
                           <div class="rounded-progress h10 mt15 mt-md20 mb15 mb-md20">
                              <div class="rounded-progress-bar s-green-bg" style="width:90%"></div>
                           </div>
                           <a href="#" class="f-11 p-blue-clr mb10">Describe your current position</a><br>
                           <!-- <a href="#" class="f-11 p-blue-clr mb10">Confirm your current position</a><br> -->
                           <a href="#" class="f-11 p-blue-clr mb15 mb-md20">Add your skills & expertise</a>
                        </div>
                        <div class="f-14 f-md-15">
						<a class="dropdown-item" href="#"><i class="icon-my-businesses f-16"></i>My Businesses</a>
						<a class="dropdown-item" href="#"><i class="icon-all-accounts  f-16"></i>Team Management</a>
						<a class="dropdown-item" href="#"><i class="icon-sbuscription f-16"></i>Subscription</a>
						<a class="dropdown-item" href="#"><i class="icon-blog-icon f-14"></i>Blog Activities</a>
						   
                           <a class="dropdown-item" href="#"><i class="icon-bonus f-16"></i>Bonuses</a>
                           <a class="dropdown-item dcp-notify-btn" href="#"><i class="icon-notification f-16 doticon active"></i>Notifications</a>
                           <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#feedbackModal"><i class="icon-feedback-two f-16"></i>Feedback</a>
                           <a class="dropdown-item" href="#"><i class="icon-logout f-16"></i>Logout</a>
                        </div>
                     </div>
                  </li>
				   
				  <!-- Notification dropdwon div -->
				  <div class="dcp-notification-wrapper dcp-notification-toggle mCustomScrollbar"  data-mcs-theme="inset-3">
					<!------------ Notification Header----------------->
					<div class="vl-gblue-bg p15 px-md30 py-md20 d-flex justify-content-between">
						<div class="lato-font w700 vd-gblue-clr f-14">My Notifications <span class="vi-red-bg py3 px10 radius3 white-clr f-11 w400 firasans-font ml10">1 New</span>
						</div>
						<div class="d-flex align-self-center">
							<a href="#" class="f-14 p-blue-clr w400 t-decoration-none" title="Setting"><i class="icon-settings"></i></a>
							<a href="#" class="f-14 p-blue-clr w400 t-decoration-none ml15 close-area-btn" title="Close"><i class="icon-cross"></i></a>
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
				  <!-- Notification dropdwon div End-->
               </ul>
            </div>
         </div>
</header>
<div id="fixonscroll" class="">
<div class="smart-nav-area col-12">
	<div class="row no-gutters h-100">
			<div class="col-10 col-sm-9 col-md-3 col-lg-3 col-xl-2 d-flex align-items-center">
				<a href="#" class="f-16 f-md-20 w400 white-clr t-decoration-none">Business Settings</a>
			</div>
			<div class="col-2 col-sm-3 col-md-9 col-lg-9 col-xl-10 xs-smart-header d-flex align-items-center">
				<!--Main Navigation Starts-->
				<nav class="navbar navbar-expand-xl navbar-light p0 smart-nav-header f-14 f-lg-16 w-100">
					<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#smartappmenu" aria-controls="smartappmenu" aria-expanded="false" aria-label="Toggle navigation">
						<div class="bar1"></div>
						<div class="bar2"></div>
						<div class="bar3"></div>
					</button>
					
					<div class="collapse navbar-collapse xs-device-menu" id="smartappmenu">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="#" role="button" title="Business Details">
								Business Details
								</a>
							</li>
							<li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Channels">
                           Channels
                           </a>
                              <ul class="dropdown-menu mCustomScrollbar" data-mcs-theme="inset-3" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="#" title="Installation">Installation</a></li>
                              <li><a href="#" class="dropdown-item" title="Custom Domain">Custom Domain</a></li>
							  <li><a href="#" class="dropdown-item" title="Home Page Setting">Home Page Setting</a></li>
							 <li><a href="#" class="dropdown-item" title="Business SEO">Business SEO</a></li>	
							 <li><a href="#" class="dropdown-item" title="Analytics">Analytics</a></li>	
							 <li><a href="#" class="dropdown-item" title="Webmaster">Webmaster</a></li>	
							 <li><a href="#" class="dropdown-item" title="DotcomPal Branding">DotcomPal Branding</a></li>	
							 <li><a href="#" class="dropdown-item" title="Cookie Consent">Cookie Consent</a></li>	
							 <li><a href="#" class="dropdown-item" title="Banners">Banners</a></li>		  
							  </ul>
                        </li>
							<li class="nav-item">
								<a class="nav-link" href="#" role="button" title="Mail Settings">
								Mail Settings
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#" title="Integration">
								Integration 
								</a>
							</li>
							<li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Contact Management">
                           Contact Management
                           </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							  <li><a href="#" class="dropdown-item" title="Custom Fields">Custom Fields</a></li>	  
                              <li><a class="dropdown-item" href="#" title="Contact Score">Contact Score</a></li>
                             
							  <li><a href="#" class="dropdown-item" title="Contact Score Setting">Contact Score Setting</a></li>							 	  
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
		
<div class="virtual-div add-vdivfull1"></div>	
<!----------- Installation Alert bar-----------> 
<div class="vi-red-bg py5 px15 white-clr f-14 w400 text-center d-none">
	<marquee onMouseOver="this.stop()" onMouseOut="this.start()" scrollamount="10" >
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a href="#" class="s-yellow-clr w500">click here</a>
	</marquee>
</div>