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
<div class="category-container min-h100 text-center">
	    <div class="row row-width">
			<div class="col-12 col-lg-6 mx-auto">
				<div class="row">
					<div class="col-12 f-24 f-md-36 w300 vd-gblue-clr">
						Choose the category for which you want
to build your amazing website !
					</div>					
					<div class="col-12 col-md-4 mt15 mt-md30">
						<a href="#" class="t-decoration-none">
							<div class="category-box category-business">
								<div class="middle-box">
									<img src="../../images/category-icon/business.png" class="img-fluid d-block mx-auto">
								</div>
								<div class="bottom-box">
									Business
								</div>
							</div>
						</a>	
					</div>
					<div class="col-12 col-md-4 mt15 mt-md30">
						<a href="#" class="t-decoration-none">
							<div class="category-box category-designer">
								<div class="middle-box">
									<img src="../../images/category-icon/designer.png" class="img-fluid d-block mx-auto">
								</div>
								<div class="bottom-box">
									Designer
								</div>
							</div>
						</a>	
					</div>
					<div class="col-12 col-md-4 mt15 mt-md30">
						<a href="#" class="t-decoration-none">
							<div class="category-box category-onlinestore">
								<div class="middle-box">
									<img src="../../images/category-icon/online-store.png" class="img-fluid d-block mx-auto">
								</div>
								<div class="bottom-box">
									Online Store
								</div>
							</div>
						</a>	
					</div>
					<div class="col-12 col-md-4 mt15 mt-md30">
						<a href="#" class="t-decoration-none">
							<div class="category-box category-music">
								<div class="middle-box">
									<img src="../../images/category-icon/music.png" class="img-fluid d-block mx-auto">
								</div>
								<div class="bottom-box">
									Music
								</div>
							</div>
						</a>	
					</div>
					<div class="col-12 col-md-4 mt15 mt-md30">
						<a href="#" class="t-decoration-none">
							<div class="category-box category-photography">
								<div class="middle-box">
									<img src="../../images/category-icon/photography.png" class="img-fluid d-block mx-auto">
								</div>
								<div class="bottom-box">
									Photography
								</div>
							</div>
						</a>	
					</div>
					<div class="col-12 col-md-4 mt15 mt-md30">
						<a href="#" class="t-decoration-none">
							<div class="category-box category-events">
								<div class="middle-box">
									<img src="../../images/category-icon/events.png" class="img-fluid d-block mx-auto">
								</div>
								<div class="bottom-box">
									Events
								</div>
							</div>
						</a>	
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
