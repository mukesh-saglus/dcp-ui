<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google" content="notranslate" />
<!-- Tell the browser to be responsive to screen width -->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
<!-- Page Title -->
<title>Smart Header</title>
<!-- Bootstrap 4 Stylesheet -->
<?php $basedir = "http://".$_SERVER['SERVER_NAME'] . '/dcpMaxfunnels2.0/DotcomPal/'; ?>
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/bootstrap.min.css" />
<!-- Common Css Stylesheet -->
<link rel="stylesheet" href="<?php echo $basedir; ?>css/general.css" />
<link rel="stylesheet" href="<?php echo $basedir; ?>css/elements.css" />
<!-- Bootstrap Select Dropdown Stylesheet -->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/bootstrap-select.css" />
<!-- Smart Header Css Stylesheet -->
<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/css/header.css" />
<!-- Smart Dahboard Css Stylesheet -->
<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/css/custom.css" />
<!-- Custom Scrollbar Stylesheet -->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/scrollbar/jquery.mCustomScrollbar.css" />
<!-- Country Code Plugin Stylesheet -->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/tel-input/intlTelInput.css" />
<!-- Country Chooser Flags -->
<link href="<?php echo $basedir; ?>vendors/flagstrap/css/flags.css" rel="stylesheet" />
<link rel="stylesheet" href="../../css/cart.css" />
</head>

<body>
<!-- Product Information Header -->
<div class="sticky-fix">
	<header class="product-indexing-header">
		<div class="container-fluid px-md30">
			<div class="row align-items-center">
				<div class="col-8 col-sm-2 order-sm-1 pr-sm0">
					<a href="categories.php" class="t-decoration-none white-clr f-md-15 f-14"><i class="icon-back"></i>&nbsp;&nbsp;Product List</a>
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
							<a href="delivery.php" class="wizard-sep active">
								<!-- Current Step -->
								<span class="current-step__dot">
									<i class="icon-dot f-5 opacity20"></i>&nbsp;<i class="icon-dot f-5 opacity60"></i>&nbsp;<i class="icon-dot f-5"></i>
								</span>
								<span class="pl5 pl-lg12"><span class="d-none d-md-inline-block pr2">3.</span>Delivery</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);" class="wizard-sep preview-publish-step"> <span class="d-none d-md-inline-block pr2">4.</span>Preview & Publish </a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>
</div>
<!-- Product Information Header End -->
<!-- Min container -->
<div class="container-fluid smart-form">
	<div class="row align-items-stretch">
		<div class="col-12 col-md-3 col-lg-3 col-xl-2 product-tree p0 d-flex align-self-stretch">
			<div class="product-title-box f-14 w-100">
				<div class="w400 f-15">Delivery</div>
				<ul class="d-gblue-clr mt16">
					<li class="active">Digital Delivery</li>
					<li>Advance Integrat...</li>
				</ul>
			</div>
		</div>
		<div class="col-xl-10 col-lg-9 col-md-9 col-12 px-md30 f-14">
			<div class="row">
				<div class="col-12 col-md-12 col-lg-6 py15 py-md30">
					<div class="w500 f-15 mb15">Digital Delivery</div>
					<!-- Deliver in member’s area -->
					<div class="form-group mb-md30">
						<div class="mb15">
							Deliver in member’s area
							<a
								class="ml10 d-gblue-clr t-decoration-none"
								href="javascript:void(0);"
								data-toggle="tooltip"
								data-placement="top"
								title=""
								data-original-title="Choose the Membership Level for delivery with this product item."
							>
								<i class="icon-information f-13"></i>
							</a>
						</div>
						<div class="f-14 mb5">Choose Level for Variety 1</div>
						<!-- Dropdown -->
						<div class="dropdown simple-dropdown mb-md30 mb20">
							<button class="btn base-btn default-btn dropdown-toggle btn-block text-left btn-h50" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="caret-right pull-left text-truncate pr15">Choose level</span>
							</button>
							<div class="dropdown-menu w-100 stoppropagation h-auto f-14" aria-labelledby="dropdownMenu1">
								<!-- Scrollbar Div start -->
								<div class="mCustomScrollbar f-14 mh-180" data-mcs-theme="inset-3">
									<li>
										<a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
												<input id="level-type1" type="checkbox" />
												<label for="level-type1">level 1</label>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
												<input id="level-type2" type="checkbox" />
												<label for="level-type2">level 2</label>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
												<input id="level-type3" type="checkbox" />
												<label for="level-type3">level 3</label>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
												<input id="level-type4" type="checkbox" />
												<label for="level-type4">level 4</label>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
												<input id="level-type5" type="checkbox" />
												<label for="level-type5">level 5</label>
											</div>
										</a>
									</li>
								</div>
							</div>
						</div>
						<div class="f-14 mb5">Choose Level for Variety 2</div>
						<!-- Dropdown -->
						<div class="dropdown simple-dropdown">
							<button class="btn base-btn default-btn dropdown-toggle btn-block text-left btn-h50" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="caret-right pull-left text-truncate pr15">Choose level</span>
							</button>
							<div class="dropdown-menu w-100 stoppropagation h-auto f-14" aria-labelledby="dropdownMenu1">
								<!-- Scrollbar Div start -->
								<div class="mCustomScrollbar f-14 mh-180" data-mcs-theme="inset-3">
									<li>
										<a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
												<input id="level-type1" type="checkbox" />
												<label for="level-type1">level 1</label>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
												<input id="level-type2" type="checkbox" />
												<label for="level-type2">level 2</label>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
												<input id="level-type3" type="checkbox" />
												<label for="level-type3">level 3</label>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
												<input id="level-type4" type="checkbox" />
												<label for="level-type4">level 4</label>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
												<input id="level-type5" type="checkbox" />
												<label for="level-type5">level 5</label>
											</div>
										</a>
									</li>
								</div>
							</div>
						</div>
					</div>
					<!-- product is service -->
					<div class="form-group mb-md30">
						<div class="mb15 mb-md20">
							If the product is service
							<a
								class="ml10 d-gblue-clr t-decoration-none"
								href="javascript:void(0);"
								data-toggle="tooltip"
								data-placement="top"
								title=""
								data-original-title="For Digital Service, the customer will receive this email with service link."
							>
								<i class="icon-information f-13"></i>
							</a>
						</div>
						<div class="d-flex smart-checkbox-btn checkbox-strong-blue mb15 ml5">
							<input id="purchase" type="checkbox" />
							<label for="purchase" class="d-gblue-clr mb0"> Add your additional information to be sent with the purchase email</label>
						</div>
						<textarea class="form-control enable-mail" rows="4" disabled>
An email has been sent to you regarding delivery. Please initiate
communicating from member’s area.
						</textarea>
						<div class="text-right mt10 save-btn-enable">
							<a href="#" class="base-btn blue-btn f-14 btn-h30">Save</a>
						</div>
					</div>
					<!-- Advance Inegration -->
					<div class="w500 f-15 mb15">Advance Inegration</div>
					<!-- IPN -->
					<div class="form-group mb-md20">
						<div class="d-gblue-clr mb10">
							IPN
							<a class="ml10 d-gblue-clr t-decoration-none" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Autofilled IPN value from Business settings.">
								<i class="icon-information f-13"></i>
							</a>
						</div>
						<input type="text" class="form-control edit-ipn" placeholder="" value="asdas645457sdsadf256d32s1f4sd5df386" disabled />
						<div class="text-right mt10">
							<a href="javascript:void(0)" class="p-blue-clr f-14 edit-ipn-value">Edit</a>
							<a href="javascript:void(0)" class="base-btn blue-btn f-14 btn-h30 ml15 ipn-save">Save</a>
						</div>
					</div>
					<!-- integrated tools when choosen -->
					<div class="form-group mb-md30">
						<div class="d-gblue-clr">
							List of integrated tools when choosen
						</div>
						<div class="row align-items-center">
							<div class="col-md-6 col-xl-5 d-felx mt15 mt-md20">
								<div class="smart-radio-btn radio-strong-blue d-flex ml5">
									<input name="radio2" id="Membership" type="radio" checked />
									<label for="Membership" class="m0"> Membership Softwares </label>
								</div>
							</div>
							<div class="col-md-6 col-xl-5 d-felx mt15 mt-md20">
								<div class="smart-radio-btn radio-strong-blue d-flex ml5">
									<input name="radio2" id="Autoresponders" type="radio" />
									<label for="Autoresponders" class="m0"> Autoresponders</label>
								</div>
							</div>
							<div class="col-md-6 col-xl-5 d-felx mt15 mt-md20">
								<div class="smart-radio-btn radio-strong-blue d-flex ml5">
									<input name="radio2" id="CRM" type="radio" />
									<label for="CRM" class="m0"> CRM </label>
								</div>
							</div>
							<div class="col-md-6 col-xl-5 d-felx mt15 mt-md20">
								<div class="smart-radio-btn radio-strong-blue d-flex ml5">
									<input name="radio2" id="Webinars" type="radio" />
									<label for="Webinars" class="m0"> Webinars</label>
								</div>
							</div>
						</div>
					</div>
					<div class="text-center text-md-right">
						<a href="javascript:void(0)" class="base-btn default-btn mr5 btn-xs-block">Back</a>
						<a href="javascript:void(0)" class="base-btn default-btn mr5 btn-xs-block mt10 mt-md0">Save as Draft</a>
						<a href="#" class="base-btn blue-btn btn-xs-block mt10 mt-md0">Save & Next</a>
					</div>
				</div>
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