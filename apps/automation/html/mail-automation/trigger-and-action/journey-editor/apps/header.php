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
<!-- Smart Dahboard Css Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/css/custom.css">
<!-- Custom Scrollbar Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/scrollbar/jquery.mCustomScrollbar.css">
 <!-- boostrap select dropdwon for mobile & tablet js--->

<!-- boostrap select dropdwon  for mobile & tablet js end--->
<!------- Smart Mail Automation Stylesheet------=------->
<link rel="stylesheet" type="text/css" href="css/automation-header.css">
<link rel="stylesheet" type="text/css" href="css/automation.css">	
<link rel="stylesheet" type="text/css" href="../build/rappid.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<!------- Smart Mail Automation Stylesheet end---------->	
</head>
<body>

    <div id="app">
		<!-- Mail Automation Header -->
		<div class="automation-header">
			<header class="automation-header">
			<ul class="automation-header-icons">
			   <li>
				   <a href="" class="logo-icon"><i class="icon-saglus-help f-26"></i></a>
			   </li>
			   <li>
				   <a href="#"><i class="icon-test-pe"></i> Back</a>
			   </li>
				<li>
				   <a href="javascript:;" id="getjson" data-toggle="modal" data-target="#SettingModal"><i class="icon-settings"></i></a>
			   </li>	
			   <li class="edit-name d-none d-sm-block">
			  
				  <span class="max-limit text-truncate" contenteditable="true">Journey Name</span> 
				   <span class="journey-badge">Goal-Sales</span>
				  <a href="#"><i class="icon-edit edit-icon"></i></a>
				  <a href="#" class=""><i class="icon-save"></i></a>
			   </li>
			   <li class="d-none d-sm-block"> 
					<a href="#" class="" data-toggle="modal" data-target="#TrainingVideosModal">
						<span>Know Your Editor </span>
						&nbsp;&nbsp;<i class="icon icon-video-help" aria-hidden="true"></i>
					</a>
			   </li>
			   <li class="float-right">
				  <a href="#" class="logo-icon px-md30">
				  <span class="d-none d-md-block">Save & Next</span> 
				  <i class="icon-automation-next-two d-block d-md-none"></i>
				  </a>
			   </li>
			   <li class="float-right">
				  <a href="#">
				  <span class="d-none d-lg-block">Save as Template</span> 
				  <i class="icon-save d-block d-lg-none"></i>
				  </a>
			   </li>
				 <li class="float-right d-none d-lg-block">
				  <a href="#">Save as draft
				  </a>
			   </li>
			   <!--<li class="float-right">
				  <a href="#">
				  <i class="icon-show f-16"></i> 
				  </a>
			   </li>
			   <li class="float-right d-none d-sm-block">
				  <a href="#"><i class="icon-undo"></i></a>
				  <a href="#" class="disable-icon"><i class="icon-redo"></i></a>
			   </li>-->
			   <li class="float-right d-none d-xl-block border-left-0">
				   <div class="text-static">
				   <span class="ellipsis-loading">Saving</span>
				   <span><i class="icon-tick tick-icon"></i></span>
				   </div> 	   
				</li>
			</ul>
			</header>
		</div>