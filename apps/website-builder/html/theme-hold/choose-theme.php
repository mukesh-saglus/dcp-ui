<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="google" content="notranslate"/>
<!-- Tell the browser to be responsive to screen width -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Page Title ----->
<title>DotcomPal - Website Builder</title>
<!-- Bootstrap 4 Stylesheet ----->
<?php $basedir = "http://".$_SERVER['SERVER_NAME'] . '/DCP-UI/'; ?>
<!-- Favicon Icon -->
<link rel="icon" href="<?php echo $basedir; ?>images/favicon.png" type="image/png">
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/bootstrap.min.css">
<!-- Common Css Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>css/general.css">
<link rel="stylesheet" href="<?php echo $basedir; ?>css/elements.css">
<!-- Bootstrap Select Dropdown Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/bootstrap-select.css">
<!-- DotComPal Dahboard Css Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/css/custom.css">
<!-- Custom Scrollbar Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/scrollbar/jquery.mCustomScrollbar.css">
<!----Website Builder Stylesheet ------>
<link rel="stylesheet" href="../../css/website-builder.css">
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
<div class="container-fluid p15 p-md30 choose-theme-bg">
	<div class="row">
		<div class="col-12 f-24 f-md-36 w300 vd-gblue-clr text-center">
		Choose your favourite theme
		</div>
	</div>
	<div class="row mt15 mt-md30">
		<div class="col-12 col-md-6 col-lg-4 col-xl-3 bs-h40">
			<select class="selectpicker f-14" title="All Themes">
			  <option>Themes 1</option>
			  <option>Themes 2</option>
			  <option>Themes 3</option>
			  <option>Themes 4</option>
			  <option>Themes 5</option>
			  <option>Themes 6</option>
			</select>
		</div>
		<div class="col-12 col-md-6 col-lg-4 offset-lg-4 col-xl-3 offset-xl-6 mt15 mt-md0">
			 <div class="smart-search-field">
				  <div class="input-group">
					<input class="form-control" placeholder="Search" type="text">
					<div class="input-group-append">
					  <button class="btn" type="submit"> <i class="fa fa-search"></i></button>
					</div>
				  </div>
				</div>
		</div>
		<!-- Theme 1 -->
		<div class="col-12 col-md-4 col-lg-3 mt15 mt-md30">
			<div class="choose-theme-box">
				<div class="theme-thumbnail">
					<img src="../../images/theme/theme-thumbnail1.png" class="img-fluid d-block mx-auto thumbnail-height">
					<!-- Theme name conatiner -->
					<div class="theme-name">
						<div class="d-flex flex-nowrap justify-content-between align-items-center">
							<div class="f-14 w400 vd-gblue-clr text-truncate" title="Template Name">
								Template Name
							</div>
							<div>
								<a href="#" class="preview">Preview</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- Theme 2 -->
		<div class="col-12 col-md-4 col-lg-3 mt15 mt-md30">
			<div class="choose-theme-box">
				<div class="theme-thumbnail">
					<img src="../../images/theme/theme-thumbnail2.png" class="img-fluid d-block mx-auto thumbnail-height">
					<!-- Theme name conatiner -->
					<div class="theme-name">
						<div class="d-flex flex-nowrap justify-content-between align-items-center">
							<div class="f-14 w400 vd-gblue-clr text-truncate" title="Template Name">
								Template Name
							</div>
							<div>
								<a href="#" class="preview">Preview</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- Theme 3 -->
		<div class="col-12 col-md-4 col-lg-3 mt15 mt-md30">
			<div class="choose-theme-box">
				<div class="theme-thumbnail">
					<img src="../../images/theme/theme-thumbnail3.png" class="img-fluid d-block mx-auto thumbnail-height">
					<!-- Theme name conatiner -->
					<div class="theme-name">
						<div class="d-flex flex-nowrap justify-content-between align-items-center">
							<div class="f-14 w400 vd-gblue-clr text-truncate" title="Template Name">
								Template Name
							</div>
							<div>
								<a href="#" class="preview">Preview</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- Theme 4 -->
		<div class="col-12 col-md-4 col-lg-3 mt15 mt-md30">
			<div class="choose-theme-box">
				<div class="theme-thumbnail">
					<img src="../../images/theme/theme-thumbnail4.png" class="img-fluid d-block mx-auto thumbnail-height">
					<!-- Theme name conatiner -->
					<div class="theme-name">
						<div class="d-flex flex-nowrap justify-content-between align-items-center">
							<div class="f-14 w400 vd-gblue-clr text-truncate" title="Template Name">
								Template Name
							</div>
							<div>
								<a href="#" class="preview">Preview</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- Theme 5 -->
		<div class="col-12 col-md-4 col-lg-3 mt15 mt-md30">
			<div class="choose-theme-box">
				<div class="theme-thumbnail">
					<img src="../../images/theme/theme-thumbnail5.png" class="img-fluid d-block mx-auto thumbnail-height">
					<!-- Theme name conatiner -->
					<div class="theme-name">
						<div class="d-flex flex-nowrap justify-content-between align-items-center">
							<div class="f-14 w400 vd-gblue-clr text-truncate" title="Template Name">
								Template Name
							</div>
							<div>
								<a href="#" class="preview">Preview</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- Theme 6 -->
		<div class="col-12 col-md-4 col-lg-3 mt15 mt-md30">
			<div class="choose-theme-box">
				<div class="theme-thumbnail">
					<img src="../../images/theme/theme-thumbnail6.png" class="img-fluid d-block mx-auto thumbnail-height">
					<!-- Theme name conatiner -->
					<div class="theme-name">
						<div class="d-flex flex-nowrap justify-content-between align-items-center">
							<div class="f-14 w400 vd-gblue-clr text-truncate" title="Template Name">
								Template Name
							</div>
							<div>
								<a href="#" class="preview">Preview</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- Theme 7 -->
		<div class="col-12 col-md-4 col-lg-3 mt15 mt-md30">
			<div class="choose-theme-box">
				<div class="theme-thumbnail">
					<img src="../../images/theme/theme-thumbnail7.png" class="img-fluid d-block mx-auto thumbnail-height">
					<!-- Theme name conatiner -->
					<div class="theme-name">
						<div class="d-flex flex-nowrap justify-content-between align-items-center">
							<div class="f-14 w400 vd-gblue-clr text-truncate" title="Template Name">
								Template Name
							</div>
							<div>
								<a href="#" class="preview">Preview</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- Theme 8 -->
		<div class="col-12 col-md-4 col-lg-3 mt15 mt-md30">
			<div class="choose-theme-box">
				<div class="theme-thumbnail">
					<img src="../../images/theme/theme-thumbnail8.png" class="img-fluid d-block mx-auto thumbnail-height">
					<!-- Theme name conatiner -->
					<div class="theme-name">
						<div class="d-flex flex-nowrap justify-content-between align-items-center">
							<div class="f-14 w400 vd-gblue-clr text-truncate" title="Template Name">
								Template Name
							</div>
							<div>
								<a href="#" class="preview">Preview</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<!---- Common Jquery Files ------> 
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/jquery/jquery.min.js"></script>
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/bootstrap/popper.min.js"></script> 
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/bootstrap/bootstrap.min.js"></script> 
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/bootstrap/bootstrap-select.js"></script>
</body>
</html>
