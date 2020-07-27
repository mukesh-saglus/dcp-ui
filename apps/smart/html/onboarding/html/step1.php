<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google" content="notranslate" />
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
<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/html/onboarding/css/onboarding.css">
<!-- Bootstrap Select Dropdown Stylesheet -->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/bootstrap-select.css">
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/selectpicker-style.css">
<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/css/dcp-header.css">
<!-- DotCompal Dahboard Css Stylesheet -->
<!-- Custom Scrollbar Stylesheet -->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/scrollbar/jquery.mCustomScrollbar.css">
<!-- boostrap select dropdwon for mobile & tablet js -->
<script type="text/javascript">
	$(function() {
		$('.selectpicker').selectpicker({
			container: 'body'
		});

		if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
			$('.selectpicker').selectpicker('mobile');
		}
	});
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
					<div class="list-link dropdown caret-icon-none dcp-header-dropdown video-guide-dropdown">
                     <a class="list-inline-link dropdown-toggle f-16 f-md-18 w400 help-link" id="help" data-toggle="dropdown"><span class="help-none">Help</span> <i class="icon-help-n-training top-right-icon-margin"></i> </a>
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
                  
					
					</div>
                  
				</div>
				<div class="col-12 col-sm-7 col-md-7 col-lg-7 col-xl-6 order-sm-2 d-flex align-items-center justify-content-center mt15 mt-md0">
					<ul class="business-step-wizard f-12 w400 text-center">
						<li>
							<a href="step1.php" class="wizard-sep">
								<i class="icon-dot f-6 opacity20"></i>
								<i class="icon-dot f-6 opacity60"></i>
								<i class="icon-dot f-6"></i>
							</a>
							<div class="wizard-title">Business
								<br class="d-md-none"> name </div>
						</li>
						<li>
							<a href="step2.php" class="wizard-sep active">
								<i class="icon-tick d-none"></i>
							</a>
							<div class="wizard-title">Business
								<br class="d-md-none"> address</div>
						</li>
						<li>
							<a href="step3.php" class="wizard-sep">
								<i class="icon-tick d-none"></i>
							</a>
							<div class="wizard-title">What your
								<br class="d-md-none"> business does?</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>
</div>
<!-- Alert -->
<div class="col-12 p0">
	<div class="alert alertSuccess d-flex align-items-center alert-dismissible" role="alert">
		<button type="button" class="closeAlert" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
		<div class="container p0">
			<div class="f-14 lh160 text-center vd-gblue-clr">
				"Congratulations! You’ve successfully got your DotcomPal (Start Plan). Let’s start setting up your business inside DotcomPal."
			</div>
		</div>
	</div>
</div>
<!-- Container Start -->
<div class="container-fluid px15 px-md30 mt20">
	<div class="row">
		<div class="col-12 text-md-right">
			<a href="#" class="f-14 d-gblue-clr t-decoration-none p-blue-hover-clr" data-toggle="modal" data-target="#vhelpModal">
				<i class="icon-video-help pr5 gblue-clr align-middle f-16"></i>How to setup your business ?
			</a>
		</div>
	</div>
</div>
<section class="onboarding-middle-container">
	<div class="container p15 mb-md50">
		<div class="row">
			<div class="col-12 col-md-7 order-md-2 smart-form t-decoration-none">
				<div class="f-20 f-md-28 w500 mb5">Enter your business name <sup class="vi-red-clr f-16">*</sup>
					<a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="It can be your company, product or website name. It will enable you to search b/w your businesses easily" class="d-gblue-clr segment-info"><i class="icon-information f-16"></i></a>
				</div>
				<p class="f-14 d-gblue-clr lh160">Required to create a separate subdomain for this business. You can change subdomain or connect your own custom domain/subdomain later inside dashboard – but only once.</p>
				<div class="form-group mt15 mt-md30 mb0">
					<input type="text" class="form-control f-14" placeholder="Type your business name here (Max 50 character)">
				</div>
				<div class="f-20 f-md-28 w500 mt15 mt-md40 mb5">Do you have a website for this?
					<sup class="vi-red-clr f-16">*</sup> <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="It can either be a website, shop or even a blog running on your own domain" class="d-gblue-clr segment-info"><i class="icon-information f-16"></i></a>
				</div>
				<p class="f-14 d-gblue-clr lh160">DotcomPal connects all your marketing & sales channels for better audience analysis to boost engagement & conversions.</p>
				<div class=" align-items-center mt15 mt-md20 ml5">
					<div class="smart-radio-btn bunsiness-radio radio-strong-blue show-cheked mb20">
						<input name="action" id="Yes" value="option1" type="radio">
						<label for="Yes" class="label-18 w500"> Yes! I do
						</label>
						<p class="f-14 d-gblue-clr ml30 hide-cheked lh160">(Great! You can connect it with DotcomPal later inside dashboard to show behavior-oriented Popups & Bars to boost conversions on your website.)</p>
					</div>
					<div class="smart-radio-btn bunsiness-radio radio-strong-blue draft-radio show-cheked">
						<input name="action" id="No" value="option1" type="radio">
						<label for="No" class="label-18 w500"> No! I don’t </label>
						<p class="f-14  d-gblue-clr ml30 hide-cheked lh160">(No problem, DotcomPal enables you to create high converting landing pages with HD videos to start generating leads and sell your products, services and offers online.)</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-5 order-md-1 mt15 mt-md90">
				<img src="<?php echo $basedir; ?>apps/smart/html/onboarding/images/business-name.png" class="img-fluid d-block mx-auto">
			</div>
		</div>
	</div>
</section>
<!-- Container End -->
<!----------- Footer Section-------------->
<div class="step-footer-height"></div>
<footer class="step-footer">
	<div class="container-fluid px-md30">
		<div class="row">
			<div class="col-12 text-right">
				<a href="#" class="base-btn blue-btn">Next</a>
			</div>
		</div>
	</div>
</footer>
<!---- Common Jquery and Bootstrap 4 & Select Dropdown Jquery Files ------>
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/jquery/jquery.min.js"></script>
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/bootstrap/popper.min.js"></script>
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/bootstrap/bootstrap.min.js"></script>
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/bootstrap/bootstrap-select.js"></script>
<!---- Custom Scrollbar Jquery File ------>
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<!---- Add Custom Javacscript File ------>
<script type='text/javascript' src="<?php echo $basedir; ?>js/script.js"></script>

<!-- Common Modals Include File -->
<?php include '../../includes/common-modals.php'; ?>
<!-- Common Modals Include File end -->
</body>
</html>