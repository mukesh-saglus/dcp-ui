<!------- Smart Header Include File---------->
<?php include '../../../../smart/html/includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<!------- Smart Video Stylesheet------=------->
<link rel="stylesheet" href="../../../css/video.css">
<!------- Smart Video Stylesheet end---------->

<div class="container-fluid p15 p-md30">

	<!------- Header Start----------->
	<div class="row mb15 mb-md30">
		<div class="col-12">
		<ul class="stepwizard-style2 f-20 f-md-24 w400 lato-font">
          <li> <a href="#">Project Name</a> </li>
          <li> <a href="#">Biggest Marketing Strategies for 2017</a> </li>
        </ul>
			<p class="f-14 gblue-clr">Upload new video and video links here</p>
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
            <div class="circle-num"><span><i class="fa fa-check"></i></span></div>
            <div class="title align-self-center">Video Customization</div>
            <div class="sep-line align-self-center d-none d-lg-block"></div>
          </div>
          <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
            <div class="circle-num"><span>3</span></div>
            <div class="title align-self-center">Activate & Get Embed Code
</div>
            <div class="sep-line align-self-center d-none d-lg-block"></div>
          </div>		   
    </div>
	<!------- Step Wizard Div End----------->
	
	<!---------Design Section Start---------->
	<div class="row">
		<div class="col-md-4 col-lg-3 col-xl-2">
			<div class="nav flex-column nav-pills ui-vertical-tab f-14 w400">
            	<a class="nav-link active"  href="video-url.php">
                <i class="icon-url"></i> Video URL</a>
				<a class="nav-link"  href="inline-embed.php">
                <i class="icon-get-code"></i> Embed Code</a>
			</div>
		</div>
		<div class="col-md-8 col-lg-9 col-xl-10">	
						
			<!----- Video Details Form section------->
			<div class="row">
				<div class="col-12 mt15 mt-md0 smart-form f-14 video-url-form">
					<div class="row">
						<div class="col-12 col-lg-8 col-xl-9">
							<div class="text-right">
							<span class="front-end-sup-btn">Private</span>	
							</div>
						<div class="input-group">
							<div class="input-group-prepend addon-icon">
								<div class="input-group-text f-md-16 f-14 l-gblue-bg relative">https://business.dotcompal.co/video/					
								</div>
							</div>
							<input type="text" class="form-control field-h40 radiustl0" placeholder="" value="video_title" disabled>
						</div>
						<ul class="m0 pl20 lh190 d-gblue-clr mt5">
							<li>This video is private. To access this video page, make this video public or password-protected from the <a href="#" class="p-blue-clr t-decoration-none"><u>Security Setting</u></a></li>
						</ul>
						</div>
						<div class="col-12 col-lg-4 col-xl-3 pr0 mt15 mt-lg0">
							<a href="#" class="base-btn blue-btn mr5">Edit</a>
							<a href="#" class="base-btn default-btn">Copy Link</a>
						</div>
					</div>
					<div class="row mt15 mt-md30">
						<div class="col-12 col-lg-8 col-xl-9">
						<div class="input-group">
							<div class="input-group-prepend addon-icon">
								<div class="input-group-text f-md-16 f-14 l-gblue-bg">https://business.dotcompal.co/video/</div>
							</div>
							<input type="text" class="form-control field-h40 radiustl0" placeholder="" value="video_title">
						</div>
						</div>
						<div class="col-12 col-lg-4 col-xl-3 pr0 mt15 mt-lg0">
							<a href="#" class="base-btn blue-btn mr5">Save</a>
							<a href="#" class="base-btn default-btn">Cancel</a>
						</div>
					</div>
					<div class="row">
					<div class="col-12 mt15 mt-md30">
					<div class="f-14 w600">Share on Social Media</div>
					<!-- Social Media Icons -->	
					<ul class="nav mt15 mt-md20">
						<li class="nav-item mr15 mr-md30">
						<a href="#" class="fb-btn social-group-icon" title="Facebook"><i class="icon-facebook"></i></a>
						</li>
						<li class="nav-item mr15 mr-md30">
						<a href="#" class="twitter-btn social-group-icon" title="Twitter"><i class="icon-twitter f-md-23 f-18"></i></a>
						</li>
						<li class="nav-item mr15 mr-md30">
						<a href="#" class="pinterest-btn social-group-icon" title="Pinterest"><i class="icon-pinterest"></i></a>
						</li>
						<li class="nav-item mr15 mr-md30">
						<a href="#" class="linkin-btn social-group-icon" title="Linkedin"><i class="icon-linkedin"></i></a>
						</li>
					</ul>	
					</div>
				</div>
				</div>				
			</div>
			<!----- Video Details Form section end------->
		</div>
		<!----- Back Button Div ------->
		<div class="col-12 mt15 mt-md30 text-right">
		  <a href="#" class="base-btn default-btn">&nbsp; Back &nbsp;</a>
	   </div>
	</div>
	<!---------Design Section End---------->
</div>
<!------- Smart Footer Include File---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->