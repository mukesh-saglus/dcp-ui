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
<header class="mydrive-header d-flex align-items-center justify-content-between sticky-fix">
	
	<img src="../../../../images/my-drive-logo.png" class="img-fluid d-block">
	<!--<div class="p-blue-clr f-20 w500 text-capitalize text-truncate">Business Name</div>-->
	
	<!--<a href="javascript:" class="base-btn m-blue-btn btn-h30">Login</a>-->
   <div class="profile-icon">
		<div class="dropdown simple-dropdown caret-icon-none"> 
		  <a href="#" class="profile-drop-icon dropdown-toggle d-flex align-items-center" data-toggle="dropdown"> 
		   <span class="mx-auto f-20">R</span> 
		  <!--<img src="../../../../images/profile-icon.png" class="img-fluid d-block mx-auto mydrive-profile-img"> -->
		  </a>
		  <div class="dropdown-menu dropdown-menu-right h-auto right-arrow m-right-arrow f-14 mt12">
			<li><a class="dropdown-item d-flex justify-content-start" href="#!"><div class="mr10 w12"><i class="icon-home f-12"></i></div><div>Dashboard</div></a>
			</li>
			<li><a class="dropdown-item d-flex justify-content-start" href="#!"><div class="mr10 w12"><i class="icon-person f-12"></i></div><div>Profile</div></a>
			</li>
			<li><a class="dropdown-item d-flex justify-content-start" href="#!"><div class="mr10 w12"><i class="icon-logout f-12"></i></div><div>Logout</div></a>
			</li>
		  </div>
		</div>
    </div>
</header>