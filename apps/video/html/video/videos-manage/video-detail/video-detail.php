<!------- Smart Header Include File---------->
<?php include '../../../../../smart/html/includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<!------- Smart video Stylesheet------=------->
<link rel="stylesheet" href="../../../../css/video.css">
<!------- Smart video Stylesheet end---------->

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
            	<a class="nav-link active"  href="video-detail.php">
                <i class="icon-video-detail"></i> Video Detail</a>
				<a class="nav-link"  href="../customize/customize.php">
                <i class="icon-player-customization"></i> Player Customize</a>
				<a class="nav-link"  href="../advertise/advertise.php">
                <i class="icon-advertisement"></i> Advertisement</a>
				<a class="nav-link" href="../replace-video/replace-video-from-pc.php">
                <i class="icon-replace"></i> Replace Video</a>
				<a class="nav-link" href="../seo/seo.php">
				<i class="icon-seo"></i> SEO</a>
				<a class="nav-link" href="../analytics/analytics.php">
				<i class="icon-analytics"></i> Analytics Script</a>
				<a class="nav-link" href="../security/security.php">
				<i class="icon-security"></i> Security</a>
			</div>
		</div>
		<div class="col-md-8 col-lg-9 col-xl-10">	
						
			<!----- Video Details Form section------->
			<div class="row">
				<div class="col-12 mt15 mt-md0 smart-form d-gblue-clr f-14">
					<form>
						<div class="form-group row mb-md20 align-items-center">
							<label class="col-sm-4 col-lg-3 col-xl-2 mb-md0">Title</label>
							<div class="col-sm-8 col-lg-7 col-xl-7">
								<input type="text" class="form-control" placeholder="Enter video title here" value="">
							</div>
						</div>
						<div class="form-group row mb-md20">
							<label class="col-sm-4 col-lg-3 col-xl-2">Description</label>
							<div class="col-sm-8 col-lg-7 col-xl-7">
								<textarea rows="5" class="form-control" placeholder="Enter a brief description about your video"></textarea>
							</div>
						</div>
						<div class="form-group row mb-md30 align-items-center">
							<label class="col-sm-4 col-lg-3 col-xl-2 mb-md0">Tag</label>
							<div class="col-sm-8 col-lg-7 col-xl-7">
								<input class="form-control" value="Tags" name="tags" id="primary" style="display: none;">
							</div>
						</div>
						<div class="form-group row mb-md20">
							<label class="col-12 mb0">Choose any DotcomPal Business Category for gaining maximum exposure for your videos. (Optional)</label>
						</div>
						<div class="form-group row mb-md30 align-items-center">
							<label class="col-sm-4 col-lg-3 col-xl-2 mb-md0">
							Choose Any DotcomPal Category</label>
							<div class="col-sm-8 col-lg-7 col-xl-7">
								<select class="selectpicker f-14" title="Business">
									<option>Business 1</option>
									<option>Business 2</option>
									<option>Business 3</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-12 text-center text-md-right">
								<a href="javascript:void(0)" class="base-btn default-btn f-14 mr5">Save</a>
								<a href="#" class="base-btn blue-btn f-14">Save & Activate</a>
							</div>
						</div>
                    </form>					
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