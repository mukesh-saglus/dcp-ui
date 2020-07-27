<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="google" content="notranslate"/>
	<!-- Tell the browser to be responsive to screen width -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Page Title ----->
	<title>Smart Header</title>
	<!-- Bootstrap 4 Stylesheet ----->
	<?php $basedir = "http://".$_SERVER['SERVER_NAME'] . '/DCP-UI/'; ?>
	<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/bootstrap.min.css">
	<!-- Common Css Stylesheet ----->
	<link rel="stylesheet" href="<?php echo $basedir; ?>css/general.css">
	<link rel="stylesheet" href="<?php echo $basedir; ?>css/elements.css">
	<!-- Bootstrap Select Dropdown Stylesheet ----->
	<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/bootstrap-select.css">
	<!-- Smart Header Css Stylesheet ----->
	<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/css/header.css">
	<!-- Smart Dahboard Css Stylesheet ----->
	<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/css/custom.css">
	<!-- Custom Scrollbar Stylesheet ----->
	<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/scrollbar/jquery.mCustomScrollbar.css">
	<!---- Country Code Plugin Stylesheet ------>
	<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/tel-input/intlTelInput.css">
	<!---- Country Chooser Flags ------>
	<link href="<?php echo $basedir; ?>vendors/flagstrap/css/flags.css" rel="stylesheet">

</head>

<body>
	<!----------- CMS header Section---------->
	<div class="blog-header py5 px15 px-md30">
		<div class="d-flex justify-content-between flex-wrap">
			<div class="f-14 align-self-center mb10 mb-md0">
				<a href="categories.php" class="t-decoration-none white-clr"><i class="icon-back"></i>&nbsp;&nbsp;Create Category</a>
			</div>
			<div>
				<span class="mr-md15"><a href="#" class="base-btn white-btn f-14 restore-detail px-md40">Preview</a>
			</span>

				<span class="relative d-inline-block"><a href="javascript:void(0);" class="base-btn green-btn f-14 px-md40 publish-btn">Publish &nbsp; <i class="icon-down-dropdown f-10"></i></a>
			<div class="publish-dropdown smart-form">
				
				<div class="form-group f-14 mb-md20">
						<div class="d-flex justify-content-start flex-wrap mb15 mb-md20">
							<div class="smart-radio-btn radio-strong-blue mr25 publish-radio">
								<input name="Status" id="Publish" value="option1" checked="" type="radio">
								<label for="Publish"> Publish </label>
							</div>
							<div class="smart-radio-btn radio-strong-blue draft-radio">
								<input name="Status" id="Draft" value="option1" type="radio">
								<label for="Draft"> Draft </label>
							</div>
						</div>
				</div>
				
				<div class="publish-options">
					<div class="form-group f-14 mb-md20">
						<div class="d-flex justify-content-start flex-wrap mb15 mb-md20">
								<div class="smart-radio-btn radio-strong-blue mr25 now-radio">
									<input name="Status1" id="Now" value="option1" checked="" type="radio">
									<label for="Now"> Now </label>
								</div>
								<div class="smart-radio-btn radio-strong-blue later-radio">
									<input name="Status1" id="Later" value="option1"  type="radio">
									<label for="Later"> Later </label>
								</div>

								<div class="col-12 p0 mt15 mt-md20 schedule-date">
									<div class="input-group calendar-input-group">
										<input type="text" id="dob-primary-target" class="form-control f-14 field-h40"  readonly />
										<span class="input-group-btn" id="dob-primary">
											<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
										</span>
									</div>
								</div>

							</div>
					</div>
				</div>
				
				<input type="submit" value="Publish" class="base-btn green-btn btn-block" id="publish-action">
					
				
			</div>
			</span>

	</div>
	</div>
	</div>
	<!----------- CMS header Section end---------->