<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google" content="notranslate" />
<!-- Tell the browser to be responsive to screen width -->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
<!-- Page Title ----->
<title>New Discount Page</title>
<!-- Bootstrap 4 Stylesheet ----->
<?php $basedir = "http://".$_SERVER['SERVER_NAME'] . '/DCP-UI/'; ?>
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/bootstrap.min.css" />
<!-- Common Css Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>css/general.css" />
<link rel="stylesheet" href="<?php echo $basedir; ?>css/elements.css" />
<!-- Bootstrap Select Dropdown Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/bootstrap-select.css" />
<!-- Smart Header Css Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/css/header.css" />
<!-- Smart Dahboard Css Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/css/custom.css" />
<!-- Custom Scrollbar Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/scrollbar/jquery.mCustomScrollbar.css" />
<!---- Country Code Plugin Stylesheet ------>
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/tel-input/intlTelInput.css" />
<!---- Country Chooser Flags ------>
<link href="<?php echo $basedir; ?>vendors/flagstrap/css/flags.css" rel="stylesheet" />
<link rel="stylesheet" href="../../css/cart.css" />

</head>

<body>
<div class="sticky-fix">
	<!-- DotCompal Login Header -->
	<header class="product-indexing-header">
		<div class="container-fluid px-md30">
			<div class="row align-items-center">
				<div class="col-8 col-sm-2 order-sm-1 pr-sm0">
					<a href="#" class="t-decoration-none white-clr f-md-15 f-14"><i class="icon-back"></i>&nbsp;&nbsp;Edit Mode</a>
				</div>
				<div class="col-4 col-sm-2 order-sm-3 text-right">
					<a href="javascript:void(0);" class="base-btn green-btn publish-btn">Save</a>
				</div>
				<div class="col-12 col-sm-8 order-sm-2 mt10 mt-sm0 p-md0">
					<p class="white-clr">
						last Modified on June 18, 2020 at 4:08 PM by Abhishek Jain
						<a href="#" class="t-decoration-none view-history">View revision history</a>
					</p>
				</div>
			</div>
		</div>
	</header>
</div>
<!------- Header Start----------->
<div class="container-fluid pr15 pr-md30 smart-form">
	<div class="row align-items-stretch">
		<div class="col-12 col-md-3 col-lg-3 col-xl-2 product-tree p0 d-flex align-self-stretch">
			<div class="product-title-box f-14 w-100">
				<div class="w400 f-15">Coupon Details</div>
				<ul class="d-gblue-clr mt16">
					<li class="active">Name/Title</li>
					<li>Coupon Code</li>
					<li>Usage</li>
					<li>Expires On</li>
					<li>Discount</li>
					<li>Condition</li>
				</ul>
			</div>
		</div>
		<div class="col-xl-10 col-lg-9 col-md-9 col-12 px-md30 f-14">
			<div class="row">
				<div class="col-12 col-md-12 col-lg-6 py15 py-md30">
					<!-- <div class="w500 f-15 mb15 mb-md30">Details</div> -->
					<div class="form-group mb-md20">
						<div class="d-gblue-clr mb10">
							Name/Title
						</div>
						<input type="text" class="form-control" placeholder="">										
					</div>
					<div class="form-group mb-md20">
						<div class="d-gblue-clr mb10">
							Coupon Code
						</div>
						<input type="text" class="form-control" placeholder="">										
					</div>
					<div class="form-group mb-md20">
						<div class="d-gblue-clr mb10">
							Maximum Number of Usage
						</div>
						<input type="text" class="form-control" placeholder="1 to 100">
						<!-- <select class="selectpicker f-14"  title="1 to 100">
							<option>01</option>
							<option>50</option>
							<option>100</option>
						</select> -->									
					</div>
					<div class="form-group mb-md25">
						<div class="d-gblue-clr mb10">
							Expires On
						</div>
						<div class="caleran-h50 no-hover-focus">
							<div class="input-group">
								<input type="text" class="caleran-ex-left1 form-control radiusrb0" readonly data-plugin-options="{&quot;rangeOrientation&quot;:true,&quot;showButtons&quot;:true}" placeholder="Choose Date">
								<span class="input-group-btn caleran-show1">
									<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
								</span>
							</div>
						</div>					
					</div>
					<div class="w500 f-15 mb15 mb-md15">Choose what the discount will do</div>
					<div class="form-group mb-md30">
						<div class="d-gblue-clr mb10">
							Apply
						</div>
						<div class="mb-md20 mb15">
							<select class="selectpicker f-14" id="discount-condition">
								<option value="discount">If % discount</option>
								<option value="currency">If currency</option>
							</select>
						</div>
						<div class="apply-box apply-box1" id="discount">
							<div class="row mb-md20">
								<div class="col-4 col-md-3 col-lg-3 pr0 d-flex align-self-center f-14">Percentage Value</div>
								<div class="col-8 col-md-8 col-lg-7">
									<div class="input-group dcp-input-group">
										<input type="text" class="form-control radiusrb0" placeholder="">
										<div class="input-group-append">
											<span class="input-group-text d-gblue-clr"><i class="icon-percent"></i></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="apply-box" id="currency">
							<div class="row mb-md20 mb15">
								<div class="col-3 col-md-2 col-lg-2 pr0 d-flex align-self-center f-14">Amount</div>
								<div class="col-9 col-md-8 col-lg-7">
									<div class="input-group dcp-input-group">
										<div class="input-group-prepend">
											<span class="input-group-text d-gblue-clr"><i class="icon-dollar"></i></span>
										</div>
										<input type="text" class="form-control radiustl0" placeholder="">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="w500 f-15 mb15 mb-md15">Choose when the discount should be applied</div>
					<div class="form-group mb-md0">
						<div class="d-gblue-clr mb10">
							Condition
						</div>
						<div class="mb-md20">
							<select class="selectpicker f-14">
								<option>When a specific product is added</option>
								<option>When an order reaches a specific amount</option>
								<option>When a product is added a number of times</option>
								<option>When a cart only contains  specific products</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!------- Header End ----------->

<!-- Footer Include File-->
<?php include '../../../smart/html/includes/dcp-footer.php'; ?>
<!-- Footer Include File end -->
<script src="../../js/script.js"></script>

</body>
</html>