<!------- Smart Header Include File---------->
<?php include '../../../../../smart/html/includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<!------- Smart Video Stylesheet------=------->
<link rel="stylesheet" href="../../../../css/video.css">
<!------- Smart Video Stylesheet end---------->

<div class="container-fluid p15 p-md30">

	<!------- Header Start----------->
	<div class="row mb15 mb-md30">
		<div class="col-12">
			<div class="d-flex align-items-center flex-wrap">
				<ul class="stepwizard-style2 f-18 f-sm-24 w400 lato-font mr15">
					<li> <a href="#"> Project Name</a> </li>
					<li> <a href="#"> Uploaded Video Title</a> </li>
				</ul>
				<div class="d-flex mt7">
					<a href="#" class="gblue-clr t-decoration-none f-17 mr5" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
					<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
				</div>
			</div>
			<p class="gblue-clr f-14 w400 mt5">Upload, customize and activate videos here</p>
		</div>
	</div>
	<!------- Header End ----------->
	
	<!------- Step Wizard Div Start----------->
	<div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md25">
          <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
            <div class="circle-num"><span><i class="fa fa-check"></i></span></div>
            <div class="title align-self-center">Upload Video</div>
            <div class="sep-line align-self-center d-none d-lg-block"></div>
          </div>
          <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
            <div class="circle-num"><span> 2</span></div>
            <div class="title align-self-center">Video Customization</div>
            <div class="sep-line align-self-center d-none d-lg-block"></div>
          </div>
          <div class="d-flex justify-content-start flex-wrap mr15 mb5">
            <div class="circle-num"><span>3</span></div>
            <div class="title align-self-center">Activate & Get Embed Code</div>
            <div class="sep-line align-self-center d-none d-lg-block"></div>
          </div>		   
        </div>
	<!------- Step Wizard Div End----------->
	
	<!---------Design Section Start---------->
	<div class="row">
		<div class="col-md-4 col-lg-3 col-xl-2">
			<div class="nav flex-column nav-pills ui-vertical-tab f-14 w400">
            	<a class="nav-link"  href="../video-detail/video-detail.php">
                <i class="icon-video-detail"></i> Video Detail</a>
				<a class="nav-link"  href="../customize/customize.php">
                <i class="icon-player-customization"></i> Player Customize</a>
				<a class="nav-link"  href="../advertise/advertise.php">
                <i class="icon-advertisement"></i> Advertisement</a>
				<a class="nav-link active" href="#" data-toggle="modal" data-target="#ReplaceVideoModal">
                <i class="icon-replace"></i> Replace Video</a>
				<a class="nav-link" href="../seo/seo.php">
                <i class="icon-seo"></i> SEO</a>
				<a class="nav-link" href="../analytics/analytics.php">
				<i class="icon-analytics"></i> Analytics Script</a>
				<a class="nav-link" href="../security/security.php">
				<i class="icon-security"></i> Security</a>
			</div>
		</div>
		<div class="col-md-8 col-lg-9 col-xl-10 mt15 mt-md0">	
						
			<!----- Video Details Form section------->
			<div class="row">
				<div class="col-12 col-md-12 col-lg-5 order-2 order-lg-1 mt-lg0 mt15">
					<div class="f-18 mb15 mb-md20">Replace Video</div>
					 <!--- drop upload start--->            
					 <div class="dropzone-uploader-mail p15 vd-gblue-clr text-center">
						<i class="icon-import-from-pc d-gblue-clr f-50"></i>
						<p class="f-14 w400 my15">Drag-n-Drop files here to replace</p>
						<button type="button" class="base-btn blue-btn mr5 mb-2 mb-md0 btn-xs-block">Upload Video from PC</button>
						 <button type="button" class="base-btn blue-btn btn-xs-block mt-lg5 mt-xl0" data-toggle="modal" data-target="#librarymodalimage">Select from MyDrive</button>
					 </div>
					 <!--------- Drag Hover Div Start---->
					 <div class="dropzone-uploader-mail-drag p15 p-md20 vd-gblue-clr text-center f-14 align-items-center d-flex justify-content-center">
						<i class="icon-drop-file-here f-45 d-gblue-clr mr15"></i> Drop Files Here
					 </div>
					<p class="text-right f-12 d-gblue-clr mt12">Supported Video Formats : mkv | wmv | mp4</p> 
					<div class="row py15 vd-gblue-clr f-14">
						<!------ Files Listing--->
						<div class="col-12">
						   <div class="d-flex justify-content-start">
								<div class="d-flex align-items-center"><i class="icon-doc f-50 d-gblue-clr"></i></div>
								<div class="align-self-center ml15 ml-md20 w-100">
									<h5 class="vd-gblue-clr w400 f-14">Salecopy_210.doc</h5>
									<div class="rounded-progress mt8">
										<div class="rounded-progress-bar s-green-bg" style="width:90%"></div>
									</div>
									<div class="d-gblue-clr w400 f-12 mt8 d-flex justify-content-between flex-wrap">
										<div>5.7 MB of 7.8 MB</div>
										<div>45% Completed</div>
									</div>
								</div>
								<div class="d-flex align-items-center ml20">
									<a href="#" class="d-gblue-clr t-decoration-none"><i class="icon-cross f-12"></i></a>
								</div>
						   </div>
						   <div class="d-flex justify-content-start mt15 mt-md30">
								<div class="d-flex align-items-center"><i class="icon-image f-50 d-gblue-clr"></i></div>
								<div class="align-self-center ml15 ml-md20 w-100">
									<h5 class="vd-gblue-clr w400 f-14">Salecopy_210.doc</h5>
									<div class="rounded-progress mt8">
										<div class="rounded-progress-bar s-green-bg" style="width:90%"></div>
									</div>
									<div class="d-gblue-clr w400 f-12 mt8 d-flex justify-content-between flex-wrap">
										<div>5.7 MB of 7.8 MB</div>
										<div>45% Completed</div>
									</div>
								</div>
								<div class="d-flex align-items-center ml20">
								<a href="#" class="d-gblue-clr t-decoration-none"><i class="icon-cross f-12"></i></a>
								</div>
						   </div>
						   <div class="d-flex justify-content-start mt15 mt-md30">
								<div class="d-flex align-items-center"><i class="icon-total-viewed-videos f-50 d-gblue-clr"></i></div>
								<div class="align-self-center ml15 ml-md20 w-100">
									<h5 class="vd-gblue-clr w400 f-14">Salecopy_210.doc</h5>
									<div class="rounded-progress mt8">
										<div class="rounded-progress-bar s-green-bg" style="width:90%"></div>
									</div>
									<div class="d-gblue-clr w400 f-12 mt8 d-flex justify-content-between flex-wrap">
										<div>5.7 MB of 7.8 MB</div>
										<div>45% Completed</div>
									</div>
								</div>
								<div class="d-flex align-items-center ml20">
									<a href="#" class="d-gblue-clr t-decoration-none"><i class="icon-cross f-12"></i></a>
								</div>
						   </div>	
						   <div class="d-flex justify-content-start mt15 mt-md30">
								<div class="d-flex align-items-center"><i class="icon-doc f-50 d-gblue-clr"></i></div>
								<div class="align-self-center ml15 ml-md20">
									<h5 class="vd-gblue-clr w400 f-14">Salecopy_210.doc</h5>
									<p class="d-gblue-clr w400 f-12 mt8">5.7 MB of 7.8 MB </p>
								</div>
								<div class="d-flex align-items-center ml20">
									<a href="#" class="d-gblue-clr t-decoration-none"><i class="icon-cross f-12"></i></a>
								</div>
						   </div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-7 text-center order-1 order-lg-2">
					<div class="video-sticky-height">
						<div id="videostickydiv">
							<h5 class="p-blue-clr mb15 mb-md25">Video Preview</h5>
							<div class="embed-responsive embed-responsive-16by9">
								<iframe id="preview-player" scrolling="no" class="embed-responsive-item" src="https://mukesh.videowhizz.com/player/Player_controller/player_back/t3m1m6lgva" allowfullscreen=""></iframe>
							</div>
							<div class="mt15 mt-md30 text-right">
								<a href="#" class="base-btn blue-btn">Save & Activate</a>
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
<?php include '../../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->