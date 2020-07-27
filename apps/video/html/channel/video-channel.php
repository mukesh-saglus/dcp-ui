<!------- Smart Header Include File---------->
<?php include '../../../smart/html/includes/dcp-header.php'; ?>
<!------- Smart Header Include File end---------->

<!------- Smart Video Stylesheet------=------->
<link rel="stylesheet" href="../../css/video.css">
<!------- Smart Video Stylesheet end---------->

<div class="container-fluid p15 p-md30">

	<!------- Header Start----------->
	<div class="row mb15 mb-md30 align-items-center">
		<div class="col-12">
			<span class="f-20 f-md-24 lato-font">Banners </span> &nbsp;
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="f-14 mt5 gblue-clr">Upload and Manage your Video and Docs channel's Banners</p>
		</div>
	</div>
	<!------- Header End ----------->
		
	<!---------Design Section Start---------->
	<div class="row">
		<div class="col-md-4 col-lg-3 col-xl-2">
			<div class="nav flex-column nav-pills ui-vertical-tab f-14 w400">
            	<a class="nav-link active"  href="video-channel.php">
                <i class="icon-home"></i>Home </a>				
				<a class="nav-link" href="#">
                <i class="icon-my-businesses"></i> About</a>				
			</div>
		</div>
		<div class="col-md-8 col-lg-9 col-xl-10 mt15 mt-md0">	
						
			<!----- Video Details Form section------->
			<div class="row">
				<div class="col-12">
					 <!--- drop upload start--->            
					 <div class="dropzone-uploader-mail p15 vd-gblue-clr text-center">
						<i class="icon-import-from-pc d-gblue-clr f-50"></i>
						<p class="f-14 w400 my15">Drag and Drop files here to Upload</p>
						 <button type="button" class="base-btn blue-btn btn-xs-block mt-lg5 mt-xl0" data-toggle="modal" data-target="#librarymodalimage">Select from MyDrive</button>
					 </div>
					 <div class="gblue-clr f-14 w400 text-right mt10">Recommended Image size : 1349px X 350px</div>
					 
					<div class="row py15 vd-gblue-clr f-14">
						<!------ Files Listing--->
						<div class="col-12 p0">
						   <div class="d-lg-flex justify-content-start mt15 mt-md30">
							   <div class="d-flex col-xl-3 col-lg-6 col-12">
									<div class="d-flex align-items-center"><i class="icon-image f-50 d-gblue-clr"></i></div>
									<div class="ml15 ml-md20 text-truncate">
										<h5 class="vd-gblue-clr w400 f-14 text-truncate" title="Salecopy_210docSalecopy_210.doc">Salecopy_210docSalecopy_210.doc</h5>
										<p class="d-gblue-clr w400 f-12 mt8">5.7 MB</p>
									</div>
									<div class="d-flex align-items-center ml20">
										<a href="#" class="d-gblue-clr t-decoration-none"><i class="icon-cross f-12"></i></a>
									</div>
								</div>
								<div class="col-xl-7 col-lg-6 col-12 d-flex align-items-sm-center f-14 mt-lg0 mt15">
									<a href="#" class="p-blue-clr">Set to Default</a>
									<span class="ml20 mr20 gblue-clr">|</span>
									<a href="#" class="p-blue-clr">Change Banner</a>
								</div>
						   </div>
						</div>
					</div>
				</div>
			</div>
			<!----- Video Details Form section end------->
		</div>
	</div>
	<!---------Design Section End---------->
</div>

<!------- Smart Footer Include File---------->
<?php include '../../../smart/html/includes/dcp-footer.php'; ?>
<!------- Smart Footer Include File end ---------->