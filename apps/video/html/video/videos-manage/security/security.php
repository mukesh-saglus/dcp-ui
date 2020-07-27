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
	
	<!---------Security Section Start---------->
	<div class="row">
		<div class="col-md-4 col-lg-3 col-xl-2">
			<div class="nav flex-column nav-pills ui-vertical-tab f-14 w400">
            	<a class="nav-link"  href="../video-detail/video-detail.php">
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
				<a class="nav-link active" href="security.php">
				<i class="icon-security"></i> Security</a>
			</div>
		</div>
		<div class="col-md-8 col-lg-9 col-xl-10">	
			<!----- Security section------->
			<div class="row mt15 mt-md0 smart-form d-gblue-clr">
				<div class="col-12 col-md-3 col-xl-2 smart-radio-btn radio-strong-blue mb15 mb-md0">
					<input name="security" id="Public-Select" type="radio" checked="">
					<label for="Public-Select"> Public</label>
				</div>
				<div class="col-12 col-md-3 col-xl-2 smart-radio-btn radio-strong-blue mb15 mb-md0">
					<input name="security" id="Private-date" type="radio">
					<label for="Private-date"> Private</label>
				</div>
				<div class="col-12 col-md-6 col-xl-4 mb15 mb-md30">
					<div class="smart-radio-btn radio-strong-blue">
						<input name="security" id="Password-Select" type="radio">
						<label for="Password-Select"> Password Protected</label>
					</div>
					<div class="error-message relative mt15">
						<input class="form-control pr60" id="password-field" placeholder="Enter your password here" value="" type="password">
						<div class="form-control-icon-right">
						  <button class="btn addon-icon f-15 toggle-password" toggle="#password-field" type="button"><i class="toogle-icon icon-show f-18" aria-hidden="true"></i> </button>
						</div>
					</div>
					<small class="form-text f-14 text-left vi-red-clr">Please enter the correct value</small>
				</div>
				<div class="col-12 mt-md15 f-14">
					<div class="security-note-bg">
						<div class="w700 vd-gblue-clr"><i>Note:</i></div>
						<ul class="m0 pl20 lh190">
							<li>Private video can be embed on your web page as per your requirement. Private video can not be accessed on video page.</li> 
							<li>Public and Password Protected videos can be embed anywhere and can be accessed on video page as well.</li> 
							<li>For Password Protected video, The user will have to enter valid password to get the access</li>
						</ul>
					</div>
				</div>
				<div class="col-12 text-center text-md-right mt15 mt-md30">
					<a href="javascript:void(0)" class="base-btn default-btn btn-xs-block f-14 mr5">Save</a>
					<a href="#" class="base-btn blue-btn btn-xs-block f-14 mt15 mt-md0">Save & Activate</a>
				</div>			
			</div>
			<!----- Security section end------->
		</div>
	</div>
	<!---------Security Section End---------->
</div>

<!------- Smart Footer Include File---------->
<?php include '../../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->