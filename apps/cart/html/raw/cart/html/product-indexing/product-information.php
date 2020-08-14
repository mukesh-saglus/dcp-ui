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
<!--CKEditor Library -->
<script src="<?php echo $basedir; ?>vendors/ckeditor/ckeditor.js"></script>
<script src="<?php echo $basedir; ?>vendors/ckeditor/samples/js/sample.js"></script>

<!--- Cart CSS -->
<link rel="stylesheet" href="../../css/cart.css"/>
</head>

<body>
<!-- Product Information Header -->
<div class="sticky-fix">
	<header class="product-indexing-header">
		<div class="container-fluid px-md30">
			<div class="row align-items-center">
				<div class="col-8 col-sm-2 order-sm-1 pr-sm0">
					<a href="categories.php" class="t-decoration-none white-clr f-md-15 f-14"><i class="icon-back"></i>&nbsp;&nbsp;Item List</a>
				</div>
				<div class="col-4 col-sm-2 order-sm-3 text-right">
					<a href="javascript:void(0);" class="base-btn green-btn publish-btn">Save</a>
				</div>
				<div class="col-12 col-sm-8 order-sm-2 mt10 mt-sm0 p-md0">
					<ul class="item-info-step-wizard f-md-12 f-11 w400">
						<li>
							<a href="product-information.php" class="wizard-sep active">
								<!-- Current Step -->
								<span class="current-step__dot">
									<i class="icon-dot f-5 opacity20"></i>&nbsp;<i class="icon-dot f-5 opacity60"></i>&nbsp;<i class="icon-dot f-5"></i>
								</span>
								<span class="pl5 pl-lg12"><span class="d-none d-md-inline-block pr2">1.</span>Item Info</span>
							</a>
						</li>
						<li>
							<a href="payment.php" class="wizard-sep"> <span class="d-none d-md-inline-block pr2">2.</span>Payment </a>
						</li>
						<li>
							<a href="delivery.php" class="wizard-sep"> <span class="d-none d-md-inline-block pr2">3.</span>Delivery </a>
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
				<div class="w400 f-15">Item Info</div>
				<ul class="d-gblue-clr mt16">					
					<li class="active">Item Name</li>
					<li>Item ID</li>
					<li>Item Image</li>
					<li>Short Description</li>
					<li>Deatiled Descrip...</li>
					<li>Item Type</li>
					<li>Tags</li>
				</ul>
			</div>
		</div>
		<div class="col-xl-10 col-lg-9 col-md-9 col-12 px-md30 f-14">
			<div class="row">
				<div class="col-12 col-md-12 col-lg-6 py15 py-md30">
					<div class="w500 f-15 mb15 mb-md30">Details</div>
					<!-- Item Name -->
					<div class="form-group mb-md20">
						<div class="d-gblue-clr mb10">
							Item Name
							<a class="ml10 d-gblue-clr t-decoration-none" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Enter the name for your product."><i class="icon-information f-13"></i></a>
						</div>
						<input type="text" class="form-control" placeholder="" value="Item Name"/>
					</div>
					<!-- Item ID -->
					<div class="form-group mb-md20">
						<div class="d-gblue-clr mb10">
							Item ID
							<a class="ml10 d-gblue-clr t-decoration-none" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="This is Item ID for your product."><i class="icon-information f-13"></i></a>
						</div>
						<input type="text" class="form-control" placeholder="" value="ID247856" disabled />
					</div>
					<!-- Short Description -->
					<div class="form-group mb-md20">
						<div class="d-gblue-clr mb10">
							Short Description
							<a class="ml10 d-gblue-clr t-decoration-none" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Fill short description for your product."><i class="icon-information f-13"></i></a>
						</div>
						<input type="text" class="form-control" placeholder=""/>
					</div>
					<!-- Detailed Description -->
					<div class="form-group mb-md30">
						<div class="d-gblue-clr mb10">
							Detailed Description
							<a class="ml10 d-gblue-clr t-decoration-none" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Enter a deatiled description for your product. It can have multimedia with text."><i class="icon-information f-13"></i></a>
						</div>
						<div class="col-12 p0">
							<div id="editor">
							<h1>Hello world!</h1>
							</div>
							<script>
								initSample();
							</script>
						</div>
					</div>
					<!--  Customers purchase -->
					<div class="d-flex smart-checkbox-btn checkbox-strong-blue mb15 mb-md25 ml5">
						<input id="more_item" type="checkbox" value="more-than-one-item"/>
						<label for="more_item" class="mb0 w500"> Customers can purchase more than one item.</label>
					</div>
					<!--  more than one item Toggle Div -->
					<div class="row form-group mb-md20 more-than-one-item align-items-center">
						<div class="col-md-8 col-xl-8 col-12 mb10 mb-md0">
							Maximum unit of product that can be purchased
							<a class="ml10 d-gblue-clr t-decoration-none" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Enter the maximum number of unita allowed for the product."><i class="icon-information f-13"></i></a>
						</div>
						<div class="col-md-4 col-xl-3 col-12">
						<select class="selectpicker">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
						</select>
						</div>
					</div>
					<!--  physical item Div -->
					<div class="form-group mb10">
						<div class="d-flex align-items-center flex-wrap">
							<div class="mr15 mr-md35 mb10 w500">
								Is it a physical item?
							</div>
							<div class="smart-radio-btn radio-strong-blue mr15 mr-md30">
								<input name="radio2" id="p_yes" type="radio" checked />
								<label for="p_yes" class="d-gblue-clr"> Yes </label>
							</div>
							<div class="smart-radio-btn radio-strong-blue">
								<input name="radio2" id="p_no" type="radio"/>
								<label for="p_no" class="d-gblue-clr"> No</label>
							</div>
						</div>
					</div>
					<p class="d-gblue-clr mb15 mb-md20">
						We don't deliver your physical products. Please do it yourself to make your customers happy.
					</p>
					<!--  digital service Div -->
					<div class="form-group mb10">
						<div class="d-flex align-items-center flex-wrap">
							<div class="mr15 mr-md35 mb10 w500">
								Is it a digital service?
							</div>
							<div class="smart-radio-btn radio-strong-blue mr15 mr-md30">
								<input name="radio3" id="d_yes" type="radio" checked />
								<label for="d_yes" class="d-gblue-clr"> Yes </label>
							</div>
							<div class="smart-radio-btn radio-strong-blue">
								<input name="radio3" id="d_no" type="radio"/>
								<label for="d_no" class="d-gblue-clr"> No</label>
							</div>
						</div>
					</div>
					<!--  Item Type Div -->
					<div class="form-group mb-md20">
						<div class="d-gblue-clr mb10">
							Item Type
						</div>
						<div class="dropdown simple-dropdown">
							<button class="btn base-btn default-btn dropdown-toggle btn-block text-left btn-h50" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="caret-right pull-left text-truncate pr15">Digital Product</span>
							</button>
							<div class="dropdown-menu w-100 stoppropagation h-auto f-14" aria-labelledby="dropdownMenu1">
								<!-- Scrollbar Div start -->
								<div class="mCustomScrollbar f-14 mh-180" data-mcs-theme="inset-3">
									<li>
										<a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
												<input id="item-type1" type="checkbox"/>
												<label for="item-type1">Digital Product</label>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
												<input id="item-type2" type="checkbox"/>
												<label for="item-type2">Digital Service</label>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
												<input id="item-type3" type="checkbox"/>
												<label for="item-type3">Physical Product</label>
											</div>
										</a>
									</li>
								</div>
							</div>
						</div>
					</div>
					<!--  Maximum unit of product Div -->
					<div class="form-group mb-md20 custom-email-tags">
						<div class="d-gblue-clr mb10">
							Maximum unit of product that can be purchased
							<a class="ml10 d-gblue-clr t-decoration-none" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Enter the desired tags for the product."><i class="icon-information f-13"></i></a>
						</div>
						<input class="form-control" name="tags_primary" id="emailtags" style="display: none;"/>
						<p class="f-12 mt8 d-gblue-clr">Saperated by coma or enter</p>
					</div>
					<div class="text-center text-md-right">
						<a href="javascript:void(0)" class="base-btn default-btn mr5">Save as Draft</a>
						<a href="#" class="base-btn blue-btn">Save & Next</a>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-6 py15 py-md30">
					<div class="d-gblue-clr mb10 mt-lg45">
						Item Image
						<a class="ml10 d-gblue-clr t-decoration-none" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Upload images for your product."><i class="icon-information f-13"></i></a>
					</div>
					<!-- drop upload start-->
					<div class="dropzone-uploader-mail drag-drop-file-box p15 vd-gblue-clr text-center">
						<i class="icon-import-from-pc d-gblue-clr f-50"></i>
						<p class="f-14 w400 my15">Drag and Drop files here to Upload</p>
						<button type="button" class="base-btn blue-btn mr5 mb-2 mb-md0 btn-xs-block">Select File To Upload</button>
						<button type="button" class="base-btn blue-btn btn-xs-block mt-lg5 mt-xl0" data-toggle="modal" data-target="#librarymodalimage">Upload From MyDrive</button>
					</div>
					<!-- Drag Hover Div Start-->
					<div class="dropzone-uploader-mail-drag p15 p-md20 vd-gblue-clr text-center f-14 align-items-center d-flex justify-content-center"><i class="icon-drop-file-here f-45 d-gblue-clr mr15"></i> Drop Files Here</div>
					<!--<p class="text-right f-12 d-gblue-clr mt12">Supported Video Formats : mkv | wmv | mp4</p>-->
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