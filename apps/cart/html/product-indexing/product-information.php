<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google" content="notranslate" />
<!-- Tell the browser to be responsive to screen width -->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
<!-- Page Title ----->
<title>Smart Header</title>
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
<!------- CMS Stylesheet------=------->
<link rel="stylesheet" href="<?php echo $basedir; ?>apps/cms/css/cms.css" />
<link rel="stylesheet" href="../../css/cart.css" />
<!------- CMS Stylesheet end---------->
</head>

<body>
<!-- DotCompal Login Header -->
	<div class="sticky-fix">
		<!--------- Step Header ---------->
		<div class="product-indexing-header">
			<div class="f-14 align-self-center mb10 mb-md0">
				<a href="categories.php" class="t-decoration-none white-clr"><i class="icon-back"></i>&nbsp;&nbsp;Item List</a>
			</div>
		
			<ul class="stepwizard-style1 white-theme f-12 w400">
				<li> 
				<a href="business-step1.html" class="wizard-sep"><i class="icon-dot f-6 opacity20"></i> <i class="icon-dot f-6 opacity60"></i> <i class="icon-dot f-6"></i></a>
				</li>
				<li> 
				<a href="javascript:void(0);" class="wizard-sep"></a>
				</li>
				<li> 
				<a href="javascript:void(0);" class="wizard-sep"></a>
				</li>
			</ul>
			
			<a href="javascript:void(0);" class="base-btn green-btn f-14 px-md40 publish-btn">Save</a>
		</div>
	</div>


<!------- Header Start----------->
<div class="container-fluid pr15 pr-md30 smart-form">
	<div class="row d-flex align-items-stretch">
		<div class="col-12 col-md-3 col-lg-3 col-xl-2 blog-tree p0 d-flex align-self-stretch">
			<div class="blog-title-box f-14 w-100">
				<div class="w400">Category Details</div>
				<ul class="d-gblue-clr mt16">
					<li class="active">Title</li>
					<li class="active">Blog URL</li>
					<li>Category Type</li>
					<li>Summary</li>
					<li>Background Color</li>
					<li>Featured Image</li>
					<li>CTA Content</li>
				</ul>
			</div>
		</div>
		<div class="col-xl-10 col-lg-9 col-md-9 col-12">
			<div class="row">
				<div class="col-12 col-md-12 col-lg-7 col-xl-7 py15 py-md30 smart-form">
					<div class="row f-14 align-items-center">
						<div class="col-12 col-md-3">
							<p class="lh140 mb5 mb-md0">Title</p>
						</div>
						<div class="col-12 col-md-9 smart-form">
							<input type="text" class="form-control" placeholder="Enter your Category title" />
						</div>
					</div>
					<div class="row f-14 align-items-center mt15 mt-md30">
						<div class="col-12 col-md-3">
							<p class="lh140 mb5 mb-md0">Category URL</p>
						</div>
						<div class="col-12 col-md-9 smart-form">
							<div class="row">
								<div class="col-9 col-md-10 col-lg-10 f-16 w400 text-truncate">http://blog.saglus.com/</div>
								<div class="col-3 col-md-2 col-lg-2 align-self-center text-right">
									<a href="#" class="p-blue-clr t-decoration-none">Edit</a>
								</div>
							</div>
							<div class="d-flex justify-content-between flex-xl-nowrap flex-wrap align-items-center">
								<div class="f-16 w400 text-truncate">http://blog.saglus.com/</div>
								<div class="col-12 col-md-9 col-lg-12 col-xl-4 pl0 mt10 mt-xl0">
									<input type="text" class="form-control" placeholder="Category URL" value="" />
								</div>
								<div class="align-self-center text-center text-md-right mt10 mt-xl0 text-nowrap">
									<a href="#" class="p-blue-clr t-decoration-none">Save</a> &nbsp; &nbsp; <a href="#" class="d-gblue-clr t-decoration-none">Cancel</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row f-14 align-items-center mt15 mt-md30">
						<div class="col-12 col-md-3">
							<p class="lh140 mb5 mb-md0">Category Type</p>
						</div>
						<div class="col-12 col-md-7 smart-form">
							<select class="selectpicker f-14" title="Choose the category type">
								<option>Parent</option>
								<option>Child</option>
							</select>
						</div>
					</div>
					<div class="row f-14 align-items-center mt15 mt-md30">
						<div class="col-12 col-md-7 offset-md-3 smart-form">
							<select class="selectpicker f-14" title="Choose the parent category" data-live-search="true">
								<option>Email Marketing </option>
								<option>SEO</option>
								<option>Landing Page</option>
								<option>Video Marketing</option>
								<option>Marketing Automation</option>
								<option>Social</option>
							</select>
						</div>
					</div>
					<div class="row f-14 align-items-center mt15 mt-md30">
						<div class="col-12 col-md-3">
							<p class="lh140 mb5 mb-md0">Summary</p>
						</div>
						<div class="col-12 col-md-9 smart-form">
							<input type="text" class="form-control" placeholder="Enter summary" />
						</div>
					</div>
					<div class="row f-14 align-items-center mt15 mt-md30">
						<div class="col-12 col-md-3 align-self-start">
							<p class="lh140 mb5 mb-md0">Background Color</p>
						</div>
						<div class="col-12 col-md-9 smart-form">
							<p class="lh140 mb5">Select a color to define your category:</p>
							<div id="cp3" class="input-group colorpicker-component l-gblue-border radius5 px20 align-items-center">
								<span class="input-group-addon"><i></i></span>
								<input type="text" value="#00AABB" class="border-0" />
							</div>
						</div>
					</div>
					<div class="row f-14 mt-md25 mt15">
						<div class="col-12 col-md-3">
							<p class="lh140">Banner Image</p>
						</div>
						<div class="col-12 col-md-9 smart-form">
							<div class="row">
								<div class="col-12">
									<p class="lh140 mb6">Choose Image</p>
								</div>
								<div class="col-12 mt8 d-flex align-items-end">
									<div class="featured-img align-items-center d-flex">
										<img src="../images/featured-img.png" class="img-fluid d-block mx-auto" />
									</div>
									&nbsp; &nbsp; <a href="" class="base-btn default-btn" id="upload_link_primary">Browse...</a> &nbsp; &nbsp;
									<a href="#" class="base-btn default-btn">Choose from Library</a>
									<input id="upload_primary" type="file" class="d-none" />
								</div>
								<div class="col-12 mt15">
									<p class="d-gblue-clr">allowed file formats are .JPG , .PNG</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row f-14 mt-md25 mt15">
						<div class="col-12 col-md-3">
							<p class="lh140">Featured Image</p>
						</div>
						<div class="col-12 col-md-9 smart-form">
							<div class="row">
								<div class="col-12">
									<p class="lh140 mb6">Choose Image</p>
								</div>
								<div class="col-12 mt8 d-flex align-items-end">
									<div class="featured-img align-items-center d-flex">
										<img src="../images/featured-img.png" class="img-fluid d-block mx-auto" />
									</div>
									&nbsp; &nbsp; <a href="" class="base-btn default-btn" id="upload_link_secondary">Browse...</a> &nbsp; &nbsp;
									<a href="#" class="base-btn default-btn">Choose from Library</a>
									<input id="upload_secondary" type="file" class="d-none" />
								</div>
								<div class="col-12 mt15">
									<p class="d-gblue-clr">allowed file formats are .JPG , .PNG</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row f-14 align-items-center mt15 mt-md30">
						<div class="col-12 f-md-18 f-16 w500 mb-md20 mb15">CTA Content</div>
						<div class="col-12 col-md-3">
							<p class="lh140 mb5 mb-md0">CTA Headline</p>
						</div>
						<div class="col-12 col-md-9 smart-form">
							<input type="text" class="form-control" placeholder="Enter your text" />
						</div>
					</div>
					<div class="row f-14 align-items-center mt15 mt-md30">
						<div class="col-12 col-md-3 pr-md0">
							<p class="lh140 mb5 mb-md0">CTA Sub-headline One</p>
						</div>
						<div class="col-12 col-md-9 smart-form">
							<input type="text" class="form-control" placeholder="Enter your text" />
						</div>
					</div>
					<div class="row f-14 align-items-center mt15 mt-md30">
						<div class="col-12 col-md-3 pr-md0">
							<p class="lh140 mb5 mb-md0">CTA Sub-headline Two</p>
						</div>
						<div class="col-12 col-md-9 smart-form">
							<input type="text" class="form-control" placeholder="Enter your text" />
						</div>
					</div>
					<div class="row f-14 align-items-center mt15 mt-md30">
						<div class="col-12 col-md-3">
							<p class="lh140 mb5 mb-md0">CTA Button Text</p>
						</div>
						<div class="col-12 col-md-9 smart-form">
							<input type="text" class="form-control" placeholder="Enter your text" />
						</div>
					</div>
					<div class="row f-14 align-items-center mt15 mt-md30">
						<div class="col-12 col-md-3">
							<p class="lh140 mb5 mb-md0">Post CTA Text One</p>
						</div>
						<div class="col-12 col-md-9 smart-form">
							<input type="text" class="form-control" placeholder="Enter your text" />
						</div>
					</div>
					<div class="row f-14 align-items-center mt15 mt-md30">
						<div class="col-12 col-md-3">
							<p class="lh140 mb5 mb-md0">Post CTA Text Two</p>
						</div>
						<div class="col-12 col-md-9 smart-form">
							<input type="text" class="form-control" placeholder="Enter your text" />
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-5 col-xl-5 py15 py-md30 pt0 align-self-stretch f-14 word-wrap">
					
				</div>
			</div>
		</div>
	</div>
</div>
<!------- Header End ----------->

<!-- Footer Include File-->
<?php include '../../../smart/html/includes/dcp-footer.php'; ?>
<!-- Footer Include File end -->
</body>
</html>