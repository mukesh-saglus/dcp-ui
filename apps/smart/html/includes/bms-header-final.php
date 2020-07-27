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
<div class="dcp-single-header-fixed">
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
                  <div class="dcp-solution-wrapper">                  
                    <!-- Navigation Panel-->
					 <div class="navigation-wrapper-center h-100 mCustomScrollbar" data-mcs-theme="inset-3">
						<div class="navigation-side-panel">
							<div class="accordion" id="accordion">
							   <div class="card">
								  <div class="card-header" data-toggle="collapse" href="#menu1" aria-expanded="true">
									 <a class="card-title"><span class="icon-box"><i class="icon-dollar"></i></span>Sell</a>
								  </div>
								  <div id="menu1" class="collapse show" data-parent="#accordion">
									 <div class="card-body">
										<ul class="dcp-solution-nav">	
											<li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-side-tipss icon-style"></i>
												 <div class="title">Solutions</div>
											  </a>
										   </li>
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-package icon-style"></i>
												 <div class="title">Packages</div>
											  </a>
										   </li>
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-featuress icon-style"></i>
												 <div class="title">Features</div>
											  </a>
										   </li>
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-adonss icon-style"></i>
												 <div class="title">Ad-Ons</div>
											  </a>
										   </li>
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-orders icon-style"></i>
												 <div class="title">Orders</div>
											  </a>
										   </li>
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-transaction icon-style"></i>
												 <div class="title">Transactions</div>
											  </a>
										   </li> 
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-coupons icon-style"></i>
												 <div class="title">Coupons</div>
											  </a>
										   </li> 
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-category icon-style"></i>
												 <div class="title">Category</div>
											  </a>
										   </li> 
										</ul>
									 </div>
								  </div>
							   </div>
							   <div class="card">
								  <div class="card-header collapsed" data-toggle="collapse" href="#menu2" aria-expanded="true">
									 <a class="card-title"><span class="icon-box"><i class="icon-grows"></i></span>Grow</a>
								  </div>
								  <div id="menu2" class="collapse" data-parent="#accordion">
									 <div class="card-body">
										<ul class="dcp-solution-nav">
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-journey-funnels icon-style"></i>
												 <div class="title">Journey / Funnels</div>
											  </a>
										   </li>
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-total-visited-pages icon-style"></i>
												 <div class="title">Landing Pages</div>
											  </a>
										   </li>
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-total-viewed-videos icon-style"></i>
												 <div class="title">Videos</div>
											  </a>
										   </li>
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-editor-popup icon-style"></i>
												 <div class="title">Pops & Bars</div>
											  </a>
										   </li>
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-mail icon-style"></i>
												 <div class="title">Mails</div>
											  </a>
										   </li>
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-webinar icon-style"></i>
												 <div class="title">Webinars</div>
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
									 <a class="card-title"><span class="icon-box"><i class="icon-cmss"></i></span>CMS</a>
								  </div>
								  <div id="menu3" class="collapse" data-parent="#accordion">
									 <div class="card-body">
										<ul class="dcp-solution-nav">
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-blogss icon-style"></i>
												 <div class="title">Blogs</div>
											  </a>
										   </li>
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-category icon-style"></i>
												 <div class="title">Category</div>
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
												 <div class="title">Comments</div>
											  </a>
										   </li>
										   <li class="nav-item">
											  <a class="nav-link" href="#">
												 <i class="icon-drive icon-style"></i>
												 <div class="title">MyDrive</div>
											  </a>
										   </li>
										</ul>
									 </div>
								  </div>
							   </div>
							   <div class="card">
								  <div class="card-header collapsed" data-toggle="collapse" href="#menu4" aria-expanded="true">
									 <a class="card-title"><span class="icon-box"><i class="icon-more"></i></span>More</a>
								  </div>
								  <div id="menu4" class="collapse" data-parent="#accordion">
									 <div class="card-body">
										<ul class="dcp-solution-nav">
									   <li class="nav-item">
										  <a class="nav-link" href="#">
											 <i class="icon-api-documentation icon-style"></i>
											 <div class="title">API</div>
										  </a>
									   </li>
										 <li class="nav-item">
												<a class="nav-link" href="#">
												   <i class="icon-integration icon-style"></i>
												   <div class="title">Integrations</div>
												</a>
											 </li>
											 <li class="nav-item">
												<a class="nav-link" href="#">
												   <i class="icon-seo icon-style"></i>
												   <div class="title">SEO</div>
												</a>
											 </li>
											 <li class="nav-item">
												<a class="nav-link" href="#">
												   <i class="icon-share icon-style"></i>
												   <div class="title">SMO</div>
												</a>
											 </li>
										</ul>
									 </div>
								  </div>
							   </div> 
							   <div class="card">
								  <div class="card-header collapsed" data-toggle="collapse" href="#menu5" aria-expanded="true">
									 <a class="card-title"><span class="icon-box"><i class="icon-designs"></i></span>Design</a>
								  </div>
								  <div id="menu5" class="collapse" data-parent="#accordion">
									 <div class="card-body">
										<ul class="dcp-solution-nav">
									   <li class="nav-item">
										  <a class="nav-link" href="#">
											 <i class="icon-themes icon-style"></i>
											 <div class="title">Theme</div>
										  </a>
									   </li>
										 <li class="nav-item">
												<a class="nav-link" href="#">
												   <i class="icon-websites icon-style"></i>
												   <div class="title">Templates</div>
												</a>
											 </li>
											 <li class="nav-item">
												<a class="nav-link" href="#">
												   <i class="icon-headers icon-style"></i>
												   <div class="title">Headers</div>
												</a>
											 </li>
											 <li class="nav-item">
												<a class="nav-link" href="#">
												   <i class="icon-Footers icon-style"></i>
												   <div class="title">Footers</div>
												</a>
											 </li>
											 <li class="nav-item">
												<a class="nav-link" href="#">
												   <i class="icon-menu-one icon-style"></i>
												   <div class="title">Menu</div>
												</a>
											 </li>
											 <li class="nav-item">
												<a class="nav-link" href="#">
												   <i class="icon-widgetss icon-style"></i>
												   <div class="title">Widgets</div>
												</a>
											 </li>
											 <li class="nav-item">
												<a class="nav-link" href="#">
												   <i class="icon-create-your-own icon-style"></i>
												   <div class="title">Appearance</div>
												</a>
											 </li>
										</ul>
									 </div>
								  </div>
							   </div>
							   <div class="card">
								  <div class="card-header collapsed" data-toggle="collapse" href="#menu6" aria-expanded="true">
									 <a class="card-title"><span class="icon-box"><i class="icon-channel"></i></span>Channels</a>
								  </div>
								  <div id="menu6" class="collapse" data-parent="#accordion">
									 <div class="card-body">
										<ul class="dcp-solution-nav">
									   <li class="nav-item">
										  <a class="nav-link" href="#">
											 <i class="icon-websites icon-style"></i>
											 <div class="title">Website</div>
										  </a>
									   </li>
										 <li class="nav-item">
											<a class="nav-link" href="#">
											   <i class="icon-total-visited-pages icon-style"></i>
											   <div class="title">Landing Pages</div>
											</a>
										 </li>
										 <li class="nav-item">
											<a class="nav-link" href="#">
											   <i class="icon-channel icon-style"></i>
											   <div class="title">Integrated Channels</div>
											</a>
										 </li>
										</ul>
									 </div>
								  </div>
							   </div> 
							   <div class="card">
								  <div class="card-header collapsed" data-toggle="collapse" href="#menu7" aria-expanded="true">
									 <a class="card-title"><span class="icon-box"><i class="icon-settings"></i></span>Settings</a>
								  </div>
								  <div id="menu7" class="collapse" data-parent="#accordion">
									 <div class="card-body">
										<ul class="dcp-solution-nav">
									   <li class="nav-item">
										  <a class="nav-link" href="#">
											 <i class="icon-person icon-style"></i>
											 <div class="title">Profile</div>
										  </a>
									   </li>
										 <li class="nav-item">
												<a class="nav-link" href="#">
												   <i class="icon-smart-installation icon-style"></i>
												   <div class="title">Installation</div>
												</a>
											 </li>
											 <li class="nav-item">
												<a class="nav-link" href="#">
												   <i class="icon-mail icon-style"></i>
												   <div class="title">Mail</div>
												</a>
											 </li>
											 <li class="nav-item">
												<a class="nav-link" href="#">
												   <i class="icon-domain-management icon-style"></i>
												   <div class="title">Custom Domain</div>
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
												   <i class="icon-transaction icon-style"></i>
												   <div class="title">Transaction Email</div>
												</a>
											 </li> 
											 <li class="nav-item">
												<a class="nav-link" href="#">
												   <i class="icon-bonus icon-style"></i>
												   <div class="title">Bonuses</div>
												</a>
											 </li>
										</ul>
									 </div>
								  </div>
							   </div>
							</div>
						</div>
					 </div>				
                  </div>
               </div>
               <a href="#" class="d-md-none pr15">
               <img src="<?php echo $basedir; ?>images/logo-header-icon.png" class="img-fluid mh-50" alt="DotcomPal" title="DotcomPal">
               </a>
               <a href="#" class="d-none d-md-flex pr15 t-decoration-none" title="DotcomPal">
				<img src="<?php echo $basedir; ?>images/dcp-icon.png" class="img-fluid mh-50" alt="DotcomPal">
			    <span class="onboarding-solution-name">BMS <span class="w500"></span></span>
               </a>
            </div>
            <!-- Center -->
            <div class="d-flex align-items-center xs-smart-header">
               <!--Main Navigation Starts-->
               <nav class="navbar navbar-expand-xl navbar-light p0 smart-nav-header f-14 f-lg-16 w-100">
                  <button class="navbar-toggler ml-auto d-none" type="button" data-toggle="collapse" data-target="#smartappmenu" aria-controls="smartappmenu" aria-expanded="false" aria-label="Toggle navigation">
                     <div class="bar1"></div>
                     <div class="bar2"></div>
                     <div class="bar3"></div>
                  </button>
                  <div class="collapse navbar-collapse xs-device-menu" id="smartappmenu">
                     <ul class="navbar-nav">
						<li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Audience">
                           Audience 
                           </a>
                           <ul class="dropdown-menu mCustomScrollbar header-dropdown-scrollbar" aria-labelledby="navbarDropdown" data-mcs-theme="inset-3">
                             <li><a class="dropdown-item" href="#" title="Segments">Segments</a></li>
                              <li><a class="dropdown-item" href="#" title="Contacts">Contacts</a></li>                         
                              <li><a href="#" class="dropdown-item" title="Customers">Customers</a></li>
							   <li><a href="#" class="dropdown-item" title="Lists">Lists</a></li>
							   <li><a href="#" class="dropdown-item" title="Tags">Tags</a></li>
							   <li><a href="#" class="dropdown-item" title="Communication">Communication</a></li>
							</ul>
                        </li> 
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Sell">
                           Sell 
                           </a>
                              <ul class="dropdown-menu mCustomScrollbar header-dropdown-scrollbar" aria-labelledby="navbarDropdown" data-mcs-theme="inset-3">
                              <li><a class="dropdown-item" href="#" title="Solutions">Solutions</a></li>
                              <li><a class="dropdown-item" href="#" title="Packages">Packages</a></li>
                              <li><a class="dropdown-item" href="#" title="Features">Features</a></li>
                              <li><a href="#" class="dropdown-item" title="Ad-Ons">Ad-Ons</a></li>
                              <li><a href="#" class="dropdown-item" title="Orders">Orders</a></li>
                              <li><a href="#" class="dropdown-item" title="Transactions">Transactions</a></li>
                              <li><a href="#" class="dropdown-item" title="Coupons">Coupons</a></li>
                              <li><a href="#" class="dropdown-item" title="Category">Category</a></li>
							  </ul>
                        </li>
						<li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Grow">
                          Grow
                           </a>
                              <ul class="dropdown-menu mCustomScrollbar header-dropdown-scrollbar" aria-labelledby="navbarDropdown" data-mcs-theme="inset-3">
                              <li><a class="dropdown-item" href="#" title="Journey / Funnels">Journey / Funnels</a></li>
                              <li><a href="#" class="dropdown-item" title="Landing Pages">Landing Pages</a></li>
							  <li><a href="#" class="dropdown-item" title="Videos">Videos</a></li>
							  <li><a href="#" class="dropdown-item" title="Pops & Bars">Pops & Bars</a></li>
							  <li><a href="#" class="dropdown-item" title="Mails">Mails</a></li>
							  <li><a href="#" class="dropdown-item" title="Webinars">Webinars</a></li>
							  <li class="dropdown-sepration mt5"><a href="#" class="dropdown-item" title="All Campaigns">All Campaigns</a></li>
							  </ul>
                        </li>
						<li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="A/B Test">
                           A/B Test 
                           </a>
							<ul class="dropdown-menu mCustomScrollbar header-dropdown-scrollbar" aria-labelledby="navbarDropdown" data-mcs-theme="inset-3">
								<li><a class="dropdown-item" href="#" title="Page">Page</a></li>
								<li><a class="dropdown-item" href="#" title="Pops & Bars">Pops & Bars</a></li>
								<li><a class="dropdown-item" href="#" title="Mail">Mail</a></li>
							</ul>
                        </li> 
						<li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Analytics">
                           Analytics
                           </a>
							<ul class="dropdown-menu mCustomScrollbar header-dropdown-scrollbar" aria-labelledby="navbarDropdown" data-mcs-theme="inset-3">
								<li><a class="dropdown-item" href="#" title="Audience">Audience</a></li>
								<li><a class="dropdown-item" href="#" title="Journey / Funnels">Journey / Funnels</a></li>
								<li><a class="dropdown-item" href="#" title="Page">Page</a></li>
								<li><a class="dropdown-item" href="#" title="Video">Video</a></li>
								<li><a class="dropdown-item" href="#" title="Pops & Bars">Pops & Bars</a></li>
								<li><a class="dropdown-item" href="#" title="Mail">Mail</a></li>
							</ul>
                        </li> 
						<li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="More">
                           More
                           </a>
							<ul class="dropdown-menu mCustomScrollbar header-dropdown-scrollbar" aria-labelledby="navbarDropdown" data-mcs-theme="inset-3">
								<li><a class="dropdown-item" href="#" title="API">API</a></li>
								<li><a class="dropdown-item" href="#" title="Integrations">Integrations</a></li>
								<li><a class="dropdown-item" href="#" title="SEO">SEO</a></li>
								<li><a class="dropdown-item" href="#" title="SMO">SMO</a></li>
							</ul>
                        </li> 
                        <li class="nav-item campaign-dropdown d-none d-lg-block">
                           <a class="nav-link campaign-toggle" href="#" title="New" data-toggle="modal" data-target="#SalesSolutionModal">
                           <i class="icon-add-new f-14 align-middle"></i>&nbsp;&nbsp; New
                           </a>
                        </li>
                     </ul>
                  </div>
               </nav>
               <!--Main Navigation Ends-->
            </div>
            <!----- Right ---------->
            <div class="align-items-center d-flex ml-auto ml-lg-0">               
               <span class="business-sepration-line"></span>
               <ul class="top-right-icon f-16 f-md-20">
                  <!------------ DotcomPal Guide Dropdown----------------->
                  <li class="list-link dropdown caret-icon-none dcp-header-dropdown video-guide-dropdown">
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
									<p class="w500 f-14 f-md-15 lh140 text-capitalize">Training Videos</p>
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
                                    <p class="w500 f-14 f-md-15 lh140 text-capitalize">Knowledgebase</p>
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
                                    <p class="w500 f-14 f-md-15 lh140 text-capitalize">Online Business VIP Club</p>
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
                                    <p class="w500 f-14 f-md-15 lh140">Chat With Us</p>
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
                  <li class="list-link dropdown caret-icon-none dcp-header-dropdown noti-profile-dropdown">
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
                  <li class="list-link dropdown caret-icon-none dcp-header-dropdown">
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
                           <!--<a href="#" class="f-11 p-blue-clr mb10">Confirm your current position</a><br>-->
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
				  <div class="dcp-notification-wrapper mCustomScrollbar"  data-mcs-theme="inset-3">
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
</div>		
<div class="dcp-single-header-fixed-mrgn"></div>	
<!----------- Installation Alert bar-----------> 
<div class="vi-red-bg py5 px15 white-clr f-14 w400 text-center d-none">
	<marquee onMouseOver="this.stop()" onMouseOut="this.start()" scrollamount="10" >
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a href="#" class="s-yellow-clr w500">click here</a>
	</marquee>
</div>