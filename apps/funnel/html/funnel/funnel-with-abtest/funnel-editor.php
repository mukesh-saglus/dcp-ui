<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="google" content="notranslate"/>
	<!-- Tell the browser to be responsive to screen width -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Page Title ----->
	<title>Header</title>
	<!-- Bootstrap 4 Stylesheet ----->
	<?php $basedir = "http://".$_SERVER['SERVER_NAME'] . '/DCP-UI/'; ?>
	<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/bootstrap.min.css">
	<!-- Common Css Stylesheet ----->
	<!-- Bootstrap Select Dropdown Stylesheet ----->
	<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/bootstrap-select.css">
	<link rel="stylesheet" href="<?php echo $basedir; ?>css/general.css">
	<link rel="stylesheet" href="<?php echo $basedir; ?>css/elements.css">
	<!-- Smart Header Css Stylesheet ----->
	<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/css/header.css">
	<!-- Smart Dahboard Css Stylesheet ----->
	<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/css/custom.css">
	<!------- Smart Mail Stylesheet------=------->
	<link rel="stylesheet" href="../../../css/funnel.css">
	<link rel="stylesheet" href="../../../css/funnel-drag-ui.css">
	<!-- Custom Scrollbar Css -->
	<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/scrollbar/jquery.mCustomScrollbar.css">
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
<body class="funnel-bg">
<!------- Header Start----------->
<header class="funnel-header">
	<ul class="funnel-header-icons">
	   <li>
		   <a href="" class="logo-icon"><i class="icon-saglus-help f-26"></i></a>
	   </li>
	   <li>
		   <a href=""><i class="icon-settings"></i></a>
	   </li>
	   <li class="edit-name d-none d-sm-block">
		  <span class="max-limit text-truncate" contenteditable="true">Template Name</span> 
		  <a href="#"><i class="icon-edit edit-icon"></i></a>
		  <a href="#" class=""><i class="icon-save"></i></a>
	   </li>
	   <li class="float-right">
		  <a href="#" class="logo-icon px-md30">
		  <span class="d-none d-md-block">Next</span> 
		  <i class="icon-automation-next-two d-block d-md-none"></i>
		  </a>
	   </li>
	   <li class="float-right">
		  <a href="#" data-toggle="modal" data-target="#savetemplateModal">
		  <span class="d-none d-md-block">Save as Funnel Template</span> 
		  <i class="icon-save d-block d-md-none"></i>
		  </a>
	   </li>
	   <li class="float-right">
		  <a href="#" data-toggle="modal" data-target="#PageselectionModal">
		  <i class="icon-show f-16"></i> 
		  </a>
	   </li>
	   <li class="float-right d-none d-sm-block">
		  <a href="#"><i class="icon-undo"></i></a>
		  <a href="#" class="disable-icon"><i class="icon-redo"></i></a>
	   </li>
	   <li class="float-right d-none d-sm-block border-left-0">
		   <div class="text-static">
		   <span class="ellipsis-loading">Saving</span>
		   <span><i class="icon-tick tick-icon"></i></span>
		   </div> 	   
		</li>
	</ul>
	</header>
<!------- Header End ----------->
<div class="funnel-wrapper">
	<a href="#" class="add-page-btn" data-toggle="modal" data-target="#funnelpagemodal"><i class="icon-adding"></i></a>
	<a href="#" class="back-page-btn"><i class="icon-back"></i></a>
	<!-- Container Start --->
	<div class="container">
		<div class="row" id="sortable">
		<div class="col-12">
			<!-- Page template div start -->
			<div class="template-wrapper">
				<div class="template-section">
					<div class="page-template drag-picker">
						<img src="../../../images/page-template.png" class="img-fluid mx-auto template-size">
					</div>
					<div class="template-control">
						<a href="#" class="control-btn"><i class="icon-adding"></i></a>
						<a href="#" class="control-btn"><i class="icon-minus-minus"></i></a>
					</div>
				</div>
				<div class="template-options">
					<ul class="nav nav-pills nav-justified options-btn">
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="icon-edit"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="icon-report"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="icon-settings"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="icon-delete"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="icon-show"></i></a>
						</li>	
					</ul>
				</div>
			</div>
			<!-- Page template div end -->
			<!-- Page template div start -->
			<div class="template-wrapper">
				<div class="template-section">
					<div class="page-template drag-picker">
						<img src="../../../images/page-template.png" class="img-fluid mx-auto template-size">
					</div>
					<div class="template-control">
						<a href="#" class="control-btn"><i class="icon-adding"></i></a>
						<a href="#" class="control-btn"><i class="icon-minus-minus"></i></a>
					</div>
				</div>	
				<div class="template-options">
					<ul class="nav nav-pills nav-justified options-btn">
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="icon-edit"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="icon-report"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="icon-settings"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="icon-delete"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="icon-show"></i></a>
						</li>	
					</ul>
				</div>
			</div>
			<!-- Page template div end -->
			<!-- SVG Polyline -->
			<svg style="margin-left: 150px; margin-top: 50px;">
			<defs>
				<!-- arrowhead marker definition -->
				<marker id="arrow" viewBox="0 0 10 10" refX="7" refY="5"
				markerWidth="4" markerHeight="4"
				orient="auto-start-reverse" fill="#7f7c88" class="marker-color">
				<path d="M 0 0 L 10 5 L 0 10 z" />
				</marker>
			</defs>
			<polyline points="0,100 60,100 60,100 60,10 250,10 120" marker-start="url(#arrow)" marker-end="url(#arrow)" stroke-width="3" fill="none" stroke="#7f7c88"  />
			Sorry, your browser does not support inline SVG.
			</svg>
		</div>

	</div>
	<!-- Container End --->
</div>


<!---- Common Jquery Files ------> 
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/jquery/jquery.min.js"></script>
<!---- Bootstrap Jquery Files ------> 
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/bootstrap/popper.min.js"></script> 
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/bootstrap/bootstrap.min.js"></script>
<!-- Custom Scrollbar Css -->
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script> 
<!------ Expand Searchbar js---------->
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/bootstrap/bootstrap-select.js"></script>
<!---- Add Custom Javacscript File ------> 
<script type='text/javascript' src="<?php echo $basedir; ?>js/script.js"></script>

<!-- Dashboard Drag & Drop Js --->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/jquery-ui-drag/jquery-ui.css">
<script src="<?php echo $basedir; ?>vendors/jquery-ui-drag/jquery-ui.js"></script>
		<script>/* Dashboard Drag & Drop Js */
			
		
$(function(){
	$(".template-wrapper").draggable({handle:".drag-picker",containment: $(".template-wrapper").closest('.funnel-wrapper'),scroll: false});
});
	</script>
	
<!-- Funnel Page Add modal popup --->
<div class="modal" id="funnelpagemodal">
	<div class="modal-dialog modal-dialog-centered modal-library-size">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header library-modal-header p15 py-md20 px-md30 justify-content-between">
				<div class="f-16 f-md-18 w500">Add Page Into The Funnel</div>
				<a href="javascript:void(0);" data-dismiss="modal" class="d-gblue-clr t-decoration-none f-12 align-self-center"><i class="icon-cross"></i></a>
			</div>
			<!-- end model header -->
			<!-- Modal body -->
			<div class="modal-body py-md30 py15 px0">
				<div class="row no-gutters">
					<div class="col-xl-2 col-lg-3 col-md-3 col-12 mb10 mb-md0">
						<div class="px15 pl-md30 pr-md0">
							<!-- Tab Heading -->
							<div class="nav flex-column nav-pills ui-vertical-tab f-14 w400">
								<a class="nav-link active pr-0" href="#ChooseFromPage" data-toggle="tab">From Page</a>
								<a class="nav-link pr-0" href="#ChooseFromABTest" data-toggle="tab">From AB Test</a>
								<a class="nav-link pr-0" href="#ChooseFromGallery" data-toggle="tab">From Gallery</a>
								<a class="nav-link pr-0" href="#YourCreation" data-toggle="tab">Your Creation</a>
								<a class="nav-link pr-0" href="#CreateYourOwn" data-toggle="tab">Create Your Own</a>
							</div>
							<!-- End Tab Heading -->
						</div>
					</div>
					<div class="col-xl-10 col-lg-9 col-md-9 col-12 tab-content">
						<!--  Choose From Page Tab  -->
						<div class="col-12 p0 tab-pane active" id="ChooseFromPage">
							<div class="px15 px-md30">
							<div class="row ">
								<div class="col-lg-8 pr-xl0">
									<div class="d-flex justify-content-start flex-wrap row bs-h40">
										<div class="col-12 col-md-4 col-lg-4">
										<select class="selectpicker f-16" title="All Industry">
											<option>All Industry 1</option>
											<option>All Industry 2</option>
											<option>All Industry 3</option>
										</select>
										</div>
										<div class="col-12 col-md-4 col-lg-4 mt15 mt-md0">
										<select class="selectpicker f-16" title="All Use Cases">
											<option>Lead Generation</option>
											<option>Promotional</option>
											<option>Social Sharing</option>
										</select>
										</div>
										<div class="col-12 col-md-4 col-lg-4 mt15 mt-md0">
										<select class="selectpicker f-16" title="All">
											<option>All </option>
											<option>Most Converted</option>
											<option>Brand New</option>
										</select>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-xl-4 pl-xl60">
									<div class="smart-search-field mt15 mt-lg0">
										<div class="input-group">
											<input class="form-control" placeholder="Search" type="text">
											<div class="input-group-append">
												<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
											</div>
										</div>
									</div>
								</div>
							</div>
							</div>
							
							<div class="mCustomScrollbar library-h380 mt15 mt-md30" data-mcs-theme="inset-3">
								<div class="px15 px-md30">
									<div class="row">
										<div class="col-12  col-lg-3 col-xl-3 col-md-4  mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
													<a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image.png" class="d-block mx-auto img-fluid">
													</a>
												</div>
												<!---- Checked icon Div ---->
												<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center">
													<i class="icon-tick white-clr f-10"></i>
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>

										<div class="col-12  col-lg-3 col-xl-3 col-md-4 mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
												<a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image2.png" class="d-block mx-auto img-fluid">
												 </a> 
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>

										<div class="col-12  col-lg-3 col-xl-3 col-md-4  mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
													<a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image3.png" class="d-block mx-auto img-fluid">
													</a>
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>

										<div class="col-12  col-lg-3 col-xl-3 col-md-4  mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
													<a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image4.png" class="d-block mx-auto img-fluid">
													</a> 
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>


										<div class="col-12  col-lg-3 col-xl-3 col-md-4  mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
												  <a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image5.png" class="d-block mx-auto img-fluid">
													</a>
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>

										<div class="col-12  col-lg-3 col-xl-3 col-md-4  mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
												  <a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image6.png" class="d-block mx-auto img-fluid">
													</a>
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>

										<div class="col-12  col-lg-3 col-xl-3 col-md-4 mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
												  <a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image7.png" class="d-block mx-auto img-fluid">
													</a>
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>

										<div class="col-12  col-lg-3 col-xl-3 col-md-4  mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
												 <a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image8.png" class="d-block mx-auto img-fluid">
													</a>
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Choose From Page Tab-->

						<!--  Choose From AB Test Tab  -->
						<div class="col-12 p0 tab-pane" id="ChooseFromABTest">
							<div class="px15 px-md30">
							<div class="row ">
								<div class="col-lg-8 pr-xl0">
									<div class="d-flex justify-content-start flex-wrap row bs-h40">
										<div class="col-12 col-md-4 col-lg-4">
										<select class="selectpicker f-16" title="All Industry">
											<option>All Industry 1</option>
											<option>All Industry 2</option>
											<option>All Industry 3</option>
										</select>
										</div>
										<div class="col-12 col-md-4 col-lg-4 mt15 mt-md0">
										<select class="selectpicker f-16" title="All Use Cases">
											<option>Lead Generation</option>
											<option>Promotional</option>
											<option>Social Sharing</option>
										</select>
										</div>
										<div class="col-12 col-md-4 col-lg-4 mt15 mt-md0">
										<select class="selectpicker f-16" title="All">
											<option>All </option>
											<option>Most Converted</option>
											<option>Brand New</option>
										</select>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-xl-4 pl-xl60">
									<div class="smart-search-field mt15 mt-lg0">
										<div class="input-group">
											<input class="form-control" placeholder="Search" type="text">
											<div class="input-group-append">
												<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
											</div>
										</div>
									</div>
								</div>
							</div>
							</div>
							
							<div class="mCustomScrollbar library-h380 mt15 mt-md30" data-mcs-theme="inset-3">
								<div class="px15 px-md30">
									<div class="row">
										<div class="col-12  col-lg-3 col-xl-3 col-md-4  mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
													<a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image.png" class="d-block mx-auto img-fluid">
													</a>
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>

										<div class="col-12  col-lg-3 col-xl-3 col-md-4 mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
												<a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image2.png" class="d-block mx-auto img-fluid">
												 </a> 
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>

										<div class="col-12  col-lg-3 col-xl-3 col-md-4  mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
													<a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image3.png" class="d-block mx-auto img-fluid">
													</a>
												</div>
												<!---- Checked icon Div ---->
												<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center">
													<i class="icon-tick white-clr f-10"></i>
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>

										<div class="col-12  col-lg-3 col-xl-3 col-md-4  mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
													<a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image4.png" class="d-block mx-auto img-fluid">
													</a> 
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>


										<div class="col-12  col-lg-3 col-xl-3 col-md-4  mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
												  <a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image5.png" class="d-block mx-auto img-fluid">
													</a>
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>

										<div class="col-12  col-lg-3 col-xl-3 col-md-4  mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
												  <a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image6.png" class="d-block mx-auto img-fluid">
													</a>
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>

										<div class="col-12  col-lg-3 col-xl-3 col-md-4 mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
												  <a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image7.png" class="d-block mx-auto img-fluid">
													</a>
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>

										<div class="col-12  col-lg-3 col-xl-3 col-md-4  mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
												 <a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image8.png" class="d-block mx-auto img-fluid">
													</a>
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Choose From AB Test Tab-->
						
						<!-- Choose From Gallery Tab -->
						<div class="col-12 p0 tab-pane" id="ChooseFromGallery">
							<div class="px15 px-md30">
								<div class="row">
									<div class="col-lg-8 pr-xl0">
										<div class="d-flex justify-content-start flex-wrap row bs-h40">
											<div class="col-12 col-md-4 col-lg-4">
											<select class="selectpicker f-16" title="All Industry">
												<option>All Industry 1</option>
												<option>All Industry 2</option>
												<option>All Industry 3</option>
											</select>
											</div>
											<div class="col-12 col-md-4 col-lg-4 mt15 mt-md0">
											<select class="selectpicker f-16" title="All Use Cases">
												<option>Lead Generation</option>
												<option>Promotional</option>
												<option>Social Sharing</option>
											</select>
											</div>
											<div class="col-12 col-md-4 col-lg-4 mt15 mt-md0">
											<select class="selectpicker f-16" title="All">
												<option>All </option>
												<option>Most Converted</option>
												<option>Brand New</option>
											</select>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-xl-4 pl-xl60">
										<div class="smart-search-field mt15 mt-lg0">
											<div class="input-group">
												<input class="form-control" placeholder="Search" type="text">
												<div class="input-group-append">
													<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="mCustomScrollbar library-h380 mt15 mt-md30" data-mcs-theme="inset-3">
								<div class="px15 px-md30">
									<div class="row">
										<div class="col-12  col-lg-3 col-xl-3 col-md-4  mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
													<a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image.png" class="d-block mx-auto img-fluid">
													</a>
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>

										<div class="col-12  col-lg-3 col-xl-3 col-md-4 mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
												<a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image2.png" class="d-block mx-auto img-fluid">
												 </a> 
												 <!---- Checked icon Div ---->
												<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center">
													<i class="icon-tick white-clr f-10"></i>
												</div>
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>

										<div class="col-12  col-lg-3 col-xl-3 col-md-4  mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
													<a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image3.png" class="d-block mx-auto img-fluid">
													</a>
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>

										<div class="col-12  col-lg-3 col-xl-3 col-md-4  mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
													<a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image4.png" class="d-block mx-auto img-fluid">
													</a> 
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>

										<div class="col-12  col-lg-3 col-xl-3 col-md-4  mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
												  <a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image5.png" class="d-block mx-auto img-fluid">
													</a>
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>

										<div class="col-12  col-lg-3 col-xl-3 col-md-4  mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
												  <a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image6.png" class="d-block mx-auto img-fluid">
													</a>
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>

										<div class="col-12  col-lg-3 col-xl-3 col-md-4 mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
												  <a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image7.png" class="d-block mx-auto img-fluid">
													</a>
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>

										<div class="col-12  col-lg-3 col-xl-3 col-md-4  mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
												 <a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image8.png" class="d-block mx-auto img-fluid">
													</a>
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					
						<!-- Your Creation Tab -->
						<div class="col-12 p0 tab-pane" id="YourCreation">
							<div class="px15 px-md30">
								<div class="row">
									<div class="col-lg-8 pr-xl0">
										<div class="d-flex justify-content-start flex-wrap row bs-h40">
											<div class="col-12 col-md-4 col-lg-4">
											<select class="selectpicker f-16" title="All Industry">
												<option>All Industry 1</option>
												<option>All Industry 2</option>
												<option>All Industry 3</option>
											</select>
											</div>
											<div class="col-12 col-md-4 col-lg-4 mt15 mt-md0">
											<select class="selectpicker f-16" title="All Use Cases">
												<option>Lead Generation</option>
												<option>Promotional</option>
												<option>Social Sharing</option>
											</select>
											</div>
											<div class="col-12 col-md-4 col-lg-4 mt15 mt-md0">
											<select class="selectpicker f-16" title="All">
												<option>All </option>
												<option>Most Converted</option>
												<option>Brand New</option>
											</select>
											</div>
										</div>
										</div>
									<div class="col-lg-4 col-xl-4 pl-xl60">
										<div class="smart-search-field mt15 mt-lg0">
											<div class="input-group">
												<input class="form-control" placeholder="Search" type="text">
												<div class="input-group-append">
													<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="mCustomScrollbar library-h380 mt15 mt-md30" data-mcs-theme="inset-3">
								<div class="px15 px-md30">
									<div class="row">
										<div class="col-12  col-lg-3 col-xl-3 col-md-4  mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
													<a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image.png" class="d-block mx-auto img-fluid">
													</a>
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>

										<div class="col-12  col-lg-3 col-xl-3 col-md-4 mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
												<a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image2.png" class="d-block mx-auto img-fluid">
												 </a> 
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>

										<div class="col-12  col-lg-3 col-xl-3 col-md-4  mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
													<a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image3.png" class="d-block mx-auto img-fluid">
													</a>
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>

										<div class="col-12  col-lg-3 col-xl-3 col-md-4  mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
													<a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image4.png" class="d-block mx-auto img-fluid">
													</a> 
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>


										<div class="col-12  col-lg-3 col-xl-3 col-md-4  mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
												  <a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image5.png" class="d-block mx-auto img-fluid">
													</a>
													<!---- Checked icon Div ---->
													<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center">
														<i class="icon-tick white-clr f-10"></i>
													</div>
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>

										<div class="col-12  col-lg-3 col-xl-3 col-md-4  mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
												  <a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image6.png" class="d-block mx-auto img-fluid">
													</a>
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>

										<div class="col-12  col-lg-3 col-xl-3 col-md-4 mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
												  <a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image7.png" class="d-block mx-auto img-fluid">
													</a>
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>

										<div class="col-12  col-lg-3 col-xl-3 col-md-4  mb15 mb-md30">
											<div class="gradient-border1 relative">
												<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
												 <a href="#">
													<img src="<?php echo $basedir; ?>images/library-popup/lib-image8.png" class="d-block mx-auto img-fluid">
													</a>
												</div>
											</div>
											<div class="d-flex justify-content-between mt10">
												<div class="f-14 w400 align-self-center text-truncate">Template Name</div>
												<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					
						<!-- Create Your Own Tab -->
						<div class="col-12 px-md30 tab-pane" id="CreateYourOwn">
							<div class="l-gblue-border p15 funnel-create-own-design mt15 mt-md0">
								<img src="../../../images/create-your-own-img.png" class="img-fluid d-block mx-auto">
								<div class="text-center mt15 mt-md40">
									<a href="#" class="base-btn blue-btn f-16">Start From Scratch</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end model body -->
		</div>
	</div>
</div>
	
<!-- Save As Template Modal Popup -->
<div class="modal" id="savetemplateModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-delete-size" role="document">
		<div class="modal-content radius5 border-0">
		  <div class="modal-body p15 p-md30 smart-form">
			<img class="img-fluid d-block mx-auto mb15 mb-md20" src="../../../images/saveas-template-icon.png">
			  <div class="w400 vd-gblue-clr f-16 f-md-18 mb5 text-center">Save The Template</div>
			  <p class="f-14 d-gblue-clr text-center">Do you realy want to save this template</p>
		  </div>
		  <div class="p15 p-md30 custom-modal-foooter text-center">
			<a href="javascript:void(0)" class="base-btn default-btn mr5" data-dismiss="modal">No</a>
			<a href="#" class="base-btn blue-btn" data-dismiss="modal" data-toggle="modal" data-target="#templatenameModal">Yes</a>
		  </div>
		</div>
	</div>
</div>

<!-- Template Name Modal Popup -->
<div class="modal" id="templatenameModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-delete-size" role="document">
		<div class="modal-content radius5 border-0">
			<div class="modal-body p15 p-md30 smart-form">
			    <img class="img-fluid d-block mx-auto mb15 mb-md20" src="../../../images/saveas-template-icon.png">
				<div class="w400 vd-gblue-clr f-16 f-md-18 mb5 text-center">Save The Template</div>
				<div class="form-group d-gblue-clr f-14 mb0 mt15 mt-md20">
					<label>Template Name</label>
					<input type="text" class="form-control field-h40" value="Demo Template" placeholder="Enter Template Name">
				</div>
			</div>
			<div class="p15 p-md30 custom-modal-foooter text-center">
				<a href="javascript:void(0)" class="base-btn default-btn mr5" data-dismiss="modal">Cancel</a>
				<a href="#" class="base-btn blue-btn">Save</a>
			</div>
		</div>
	</div>
</div>

<!-- Page selection Modal Pop_up -->
<div class="modal" id="PageselectionModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-copy-size" role="document">
		<div class="modal-content radius5 border-0">
			<div class="modal-body p15 p-md30">
				<a href="javascript:void(0);" data-dismiss="modal" class="t-decoration-none f-10 cross-feedback d-gblue-clr"><i class="icon-cross"></i></a>
				<div class="row mt10 text-center">
					<a href="#" class="col-12 col-md-6 t-decoration-none">
						<div class="page-selection-link">
							<img src="../../../images/single-page.png" class="img-fluid">
						</div>
						<div class="mt10 mt-md15 f-14 f-md-18 p-blue-clr">Single Page</div>
					</a>
					<a href="#" class="col-12 col-md-6 t-decoration-none mt15 mt-md0">
						<div class="page-selection-link">
							<img src="../../../images/ab-test-page.png" class="img-fluid">
						</div>
						<div class="mt10 mt-md15 f-14 f-md-18 p-blue-clr">A/B Test Page</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
