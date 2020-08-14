<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="google" content="notranslate"/>
<!-- Tell the browser to be responsive to screen width -->
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
<!-- Page Title -->
<title>Smart Header</title>
<!-- Bootstrap 4 Stylesheet -->
<?php $basedir = "http://".$_SERVER['SERVER_NAME'] . '/DCP-UI/'; ?>
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/bootstrap.min.css"/>
<!-- Common Css Stylesheet -->
<link rel="stylesheet" href="<?php echo $basedir; ?>css/general.css"/>
<link rel="stylesheet" href="<?php echo $basedir; ?>css/elements.css"/>
<!-- Bootstrap Select Dropdown Stylesheet -->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/bootstrap-select.css"/>
<!-- Smart Header Css Stylesheet -->
<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/css/header.css"/>
<!-- Smart Dahboard Css Stylesheet -->
<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/css/custom.css"/>
<!-- Custom Scrollbar Stylesheet -->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/scrollbar/jquery.mCustomScrollbar.css"/>
<!-- Country Code Plugin Stylesheet -->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/tel-input/intlTelInput.css"/>
<!-- Country Chooser Flags -->
<link href="<?php echo $basedir; ?>vendors/flagstrap/css/flags.css" rel="stylesheet"/>
<link rel="stylesheet" href="../../css/cart.css"/>
</head>

<body>
<!-- Product Information Header -->
<div class="sticky-fix">
	<header class="product-indexing-header">
		<div class="container-fluid px-md30">
			<div class="row align-items-center">
				<div class="col-8 col-sm-2 order-sm-1 pr-sm0">
					<a href="categories.php" class="t-decoration-none white-clr f-md-15 f-14"><i class="icon-back"></i>&nbsp;&nbsp;Delivery</a>
				</div>
				<div class="col-4 col-sm-2 order-sm-3 text-right">
					<a href="javascript:void(0);" class="base-btn green-btn publish-btn">Save</a>
				</div>
				<div class="col-12 col-sm-8 order-sm-2 mt10 mt-sm0 p-md0">
					<ul class="item-info-step-wizard f-md-12 f-11 w400">
						<li>
							<a href="product-information.php" class="wizard-sep complete-step">
								<!-- Done Step -->
								<i class="icon-tick f-9"></i>
								<span class="pl5 pl-lg12"><span class="d-none d-md-inline-block pr2">1.</span>Item Info</span>
							</a>
						</li>
						<li>
							<a href="payment.php" class="wizard-sep complete-step">
								<!-- Done Step -->
								<i class="icon-tick f-9"></i>
								<span class="pl5 pl-lg12"><span class="d-none d-md-inline-block pr2">2.</span>Payment</span>
							</a>
						</li>
						<li>
							<a href="delivery.php" class="wizard-sep complete-step">
								<!-- Done Step -->
								<i class="icon-tick f-9"></i>
								<span class="pl5 pl-lg12"><span class="d-none d-md-inline-block pr2">3.</span>Delivery</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);" class="wizard-sep active preview-publish-step">
								<!-- Current Step -->
								<span class="current-step__dot"> <i class="icon-dot f-5 opacity20"></i>&nbsp;<i class="icon-dot f-5 opacity60"></i>&nbsp;<i class="icon-dot f-5"></i> </span>
								<span class="pl2 pl-lg12"><span class="d-none d-md-inline-block pr2">4.</span>Preview & Publish</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>
</div>
<!-- Product Information Header End -->
<!-- Min container -->
<div class="container-fluid p15 p-md30">
	<div class="row">
		<div class="col-12 col-md-6">
			<!-- Image Box -->
			<div class="preview-publish-image-block">
				<img src="../../images/agenciez-image.png" class="img-fluid"/>
			</div>
		</div>
		<div class="col-12 col-md-6 pr-md0 mt15 mt-md0 f-14 lh170 break-word">
			<!-- Item Summary Section -->
			<div class="w500 f-15">Item Summary</div>
			<div class="row no-gutters mt15 mt-md25">
				<div class="col-5 col-xl-3">
					<p class="d-gblue-clr">
						Item Name
					</p>
				</div>
				<div class="col-1 col-xl-1 d-gblue-clr">:</div>
				<div class="col-6 col-xl-8"><p>ABC-123</p></div>
			</div>
			<div class="row no-gutters mt15 mt-md25">
				<div class="col-5 col-xl-3">
					<p class="d-gblue-clr">
						Item ID
					</p>
				</div>
				<div class="col-1 col-xl-1 d-gblue-clr">:</div>
				<div class="col-6 col-xl-8"><p>DB-123-123</p></div>
			</div>
			<div class="row no-gutters mt15 mt-md25">
				<div class="col-5 col-xl-3">
					<p class="d-gblue-clr">
						Sort Description
					</p>
				</div>
				<div class="col-1 col-xl-1 d-gblue-clr">:</div>
				<div class="col-6 col-xl-8">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="row no-gutters mt15 mt-md25">
				<div class="col-5 col-xl-3">
					<p class="d-gblue-clr">
						Detailed Description
					</p>
				</div>
				<div class="col-1 col-xl-1 d-gblue-clr">:</div>
				<div class="col-6 col-xl-8 pr-md0">
					<div class="mCustomScrollbar description-scrollber" data-mcs-theme="inset-3">
						<div class="pr-md30">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								<u><i>“Lorem ipsum dolor sit amet, consectetur adipisicing elit,”</i></u> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>

							<span class="d-flex mt15 mt-md30">
								<span class="f-14 mr10 mr-md20 s-green-clr"><i class="icon-tick"></i></span>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing
								</p>
							</span>
							<span class="d-flex mt5">
								<span class="f-14 mr10 mr-md20 s-green-clr"><i class="icon-tick"></i></span>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing
								</p>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row no-gutters mt15 mt-md25">
				<div class="col-5 col-xl-3">
					<p class="d-gblue-clr">
						Item Type
					</p>
				</div>
				<div class="col-1 col-xl-1 d-gblue-clr">:</div>
				<div class="col-6 col-xl-8">
					<p>Digital Product</p>
				</div>
			</div>
			<div class="row no-gutters align-items-xl-center mt15 mt-md25">
				<div class="col-5 col-xl-3">
					<p class="d-gblue-clr">
						Varieties
					</p>
				</div>
				<div class="col-1 col-xl-1 d-gblue-clr">:</div>
				<div class="col-6 col-xl-8">
					<div class="row align-items-center">
						<div class="col-12 col-xl-6 bs-h40">
							<select class="selectpicker">
								<option>Variety One</option>
								<option>Variety Two</option>
								<option>Variety Three</option>
								<option>Variety Four</option>
							</select>
						</div>
						<div class="col-12 col-xl-6 mt10 mt-xl0">
							<h3 class="f-18 f-md20 w500 m-blue-clr"><span class="f-24 f-md-30">$47.99</span> USD</h3>
						</div>
					</div>
				</div>
			</div>
			<!-- Item Summary Section End -->
			<!-- Button -->
			<div class="text-center text-md-right mt15 mt-md30">
				<a href="javascript:void(0)" class="base-btn default-btn mr5 btn-xs-block">Back</a>
				<a href="javascript:void(0)" class="base-btn default-btn mr5 btn-xs-block mt10 mt-md0">Save as Draft</a>
				<a href="#" class="base-btn blue-btn btn-xs-block mt10 mt-md0">Publish</a>
			</div>
		</div>
	</div>
</div>
<!-- Min container End -->

<!-- Footer Include File-->
<?php include '../../../smart/html/includes/dcp-footer.php'; ?>
<!-- Footer Include File end -->
<script src="../../js/script.js"></script>
</body>
</html>