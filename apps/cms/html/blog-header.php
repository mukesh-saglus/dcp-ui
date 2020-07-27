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
<!------- Blog Header Start----------->
<div class="blog-header py5 px15">
<div class="container-fluid">
	<div class="row align-items-center">
		<div class="col-12 col-md-3 col-lg-2 col-xl-2">
		<p class="white-clr f-14 lh140"><a href="#" class="white-clr t-decoration-none"><i class="icon-back"></i></a> &nbsp; Edit mode</p>
		</div>
		<div class="col-12 col-md-4 col-lg-6 col-xl-6 mt10 mt-md0">
		<p class="white-clr f-14 lh140">last Modified on Nov 18, 2017 at 4:08 PM by Mandeep Sahni &nbsp; <a href="#" class="p-blue-clr t-decoration-none">View revision history</a></p>
		</div>
		<div class="col-12 col-md-5 col-lg-4 col-xl-4 f-14 mt10 mt-md0 text-left text-md-right pl0">
		<span class="mr-md15"><a href="#" class="base-btn white-btn f-14 restore-detail px-md30">Preview</a>
			</span>

				<span class="relative d-inline-block"><a href="javascript:void(0);" class="base-btn green-btn f-14 px-md30 publish-btn">Publish &nbsp; <i class="icon-down-dropdown f-10"></i></a>
			<div class="publish-dropdown smart-form text-left">
				
				<div class="form-group f-14 mb-md20">
						<label class="mb15">Status</label>
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
									<input type="text" id="dob-primary-target" class="form-control f-14 field-h40" value="05/06/1990"  readonly />
									<span class="input-group-btn" id="dob-primary">
										<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
									</span>
								</div>
							</div>
							
						</div>
					
						<label class="mb15">Visibility</label>
					
						<div class="d-flex justify-content-between flex-wrap mb15 mb-md20">
							<div class="smart-radio-btn radio-strong-blue password-field-hide">
								<input name="Visibility" id="Public1" value="option1" checked="" type="radio">
								<label for="Public1"> Public </label>
							</div>
							<div class="smart-radio-btn radio-strong-blue protected-radio">
								<input name="Visibility" id="Protected" value="option1" type="radio">
								<label for="Protected"> Protected </label>
							</div>
							<div class="smart-radio-btn radio-strong-blue password-field-hide">
								<input name="Visibility" id="Private" value="option1" type="radio">
								<label for="Private"> Private </label>
							</div>
							
								<div class="col-12 p0 mt15 mt-md20 password-field">
									<input type="text" class="form-control field-h40 f-14" placeholder="Add Password">
								</div>
						</div>
											
				</div>
				
				<div class="form-group f-14 mb-md20">
				<div class="smart-checkbox-btn checkbox-strong-blue mb10">
					<input id="Comments" class="checkbox-active" type="checkbox">
					<label for="Comments">Allow Comments</label>
				</div>
					
				<div class="smart-checkbox-btn checkbox-strong-blue">
					<input id="Post" class="checkbox-active" type="checkbox">
					<label for="Post">Featured Post</label>
				</div>
				</div>
				
				<div class="form-group mb-md20 f-14">
					<div class="d-flex justify-content-start flex-wrap">
						<div class="smart-radio-btn radio-strong-blue mr25">
							<input name="date" id="Originaldate" value="option1" checked="" type="radio">
							<label for="Originaldate"> Original date </label>
						</div>
						<div class="smart-radio-btn radio-strong-blue">
							<input name="date" id="Updateddate" value="option1" type="radio">
							<label for="Updateddate"> Updated date </label>
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
</div>
<!------- Blog Header End ----------->