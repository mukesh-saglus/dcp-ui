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
<div class="sticky-fix">
<header class="relative">
<div class="s-header d-flex justify-content-between">
	
	<div class="d-flex align-items-center">
		<a href="#">
		<img src="<?php echo $basedir; ?>images/saglus-logo-header.png" class="img-fluid mh-50" alt="Saglus Logo">
		</a>			
	</div>
    
    <div class="align-self-center d-flex">
      
      <div class="collapse show xs-mobnav" id="collapsibleNavbar">
        <ul class="nav custom-nav-link">
          <li class="nav-item">
            <a class="" href="javascript:">Audience</a>
          </li>
          <li class="nav-item">
            <a class="" href="javascript:">Contact</a>
          </li>
          <li class="nav-item">
            <a class="" href="javascript:">Library</a>
          </li>
          <li class="nav-item">
            <a class="" href="javascript:">Design</a>
          </li>
          <li class="nav-item">
            <a class="" href="javascript:">Shop</a>
          </li>
          <li class="nav-item">
            <a class="" href="javascript:">Membership</a>
          </li>
          <li class="nav-item">
            <a class="" href="javascript:">Marketing Apps</a>
          </li>
        </ul>
      </div>      
        
    </div>
    

	<div class="align-self-center d-flex"> 
		<!----- Header Right Side Links---------->
		<ul class="top-right-icon f-20 f-md-20">
        
			<li class="list-link header-profile-dropdown noti-profile-dropdown d-block d-lg-none"> 
            <a class="list-inline-link" data-toggle="collapse" data-target="#collapsibleNavbar">
            <i class="icon-menu-two"></i> </a>            
            </li>
            
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
						<a class="dropdown-item" href="#">
							<div class="media"> <span class="app-icon-set d-flex align-items-center"><img class="img-fluid d-block mx-auto rounded-circle" src="<?php echo $basedir; ?>images/lillie_armstrong.png"></span>
								<div class="media-body align-self-center ml10">
									<h5 class="p-blue-clr w600 f-14 mb8">Lillie Armstrong</h5>
									<span class="f-12 d-gblue-clr">2 min. ago</span>
									<p class="vd-gblue-clr w400 f-14 mt8 lh140">I like all these pictures, the overall mood is perfect, we can definitely use them all for the project.</p>
								</div>
							</div>
						</a>
						<a class="dropdown-item" href="#">
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

						<div class="mt15 mt-md20 f-14">
							<a class="dropdown-item" href="#"><i class="icon-home f-16"></i>Home</a>
							<a class="dropdown-item" href="#"><i class="icon-blog-icon f-14"></i>Blog Dashboard</a>
							<a class="dropdown-item" href="#"><i class="icon-update-log f-16"></i>Update Log</a>
							<a class="dropdown-item" href="#"><i class="icon-sbuscription f-16"></i>Subscription</a>
							<a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#feedbackModal"><i class="icon-feedback-two f-16"></i>Feedback</a>
							<a class="dropdown-item" href="#"><i class="icon-logout f-16"></i>Logout</a>
						</div>
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

</div>

	
<!----------- Installation Alert bar-----------> 
<div class="vi-red-bg py5 px15 white-clr f-14 w400 text-center d-none">
	<marquee onMouseOver="this.stop()" onMouseOut="this.start()" scrollamount="10" >
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a href="#" class="s-yellow-clr w500">click here</a>
	</marquee>
</div>
