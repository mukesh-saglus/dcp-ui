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
            <a class="nav-link active"  href="customize.php">
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
      <div class="col-md-8 col-lg-9 col-xl-10 mt15 mt-md0">
         <!----- Video Details Form section------->
         <div class="row">
            <div class="col-12 col-md-12 col-lg-5 order-2 order-lg-1 smart-form mt15 mt-lg0">
               <ul class="nav tabs-style1 nav-justified f-14 f-sm-16 w400 mb15 mb-md25" role="tablist">
                  <li class="nav-item">
                     <a class="nav-link" href="customize.php" title="Player">
                     <span class="d-block d-xl-none"><i class="icon-player"></i></span>
                     <span class="d-none d-xl-block">Player</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active"  href="frame.php" title="Frame">
                     <span class="d-block d-xl-none"><i class="icon-frame"></i></span>
                     <span class="d-none d-xl-block">Frame</span>	
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="thumbnail.php" title="Thumbnail">
                     <span class="d-block d-xl-none"><i class="icon-thumb-view"></i></span>
                     <span class="d-none d-xl-block">Thumbnail</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="subtitle.php" title="Subtitle">
                     <span class="d-block d-xl-none"><i class="icon-subtitle"></i></span>
                     <span class="d-none d-xl-block">Subtitle</span>
                     </a>
                  </li>
               </ul>
               <p class="f-14 mb15 mb-md20 w500 text-uppercase">Full Screen</p>
               <div class="form-group mb-md20 row">
                  <div class="col-6 col-md-6">
                     <a href="#" class="relative d-inline-block frames-img-height">
                        <img src="../../../../images/fullscreen-frame.png" class="img-fluid">
                        <!------- Select frames Div----->
                        <div class="selected-frame">
                           <span class="d-inline-block   pull-right"><i class="icon-dot-tick  s-green-clr white-bg f-20 rounded-circle d-inline-block"></i>	</span>
                        </div>
                     </a>
                  </div>
               </div>
               <p class="f-14 mb15 mb-md20 w500 text-uppercase">Mobile</p>
               <div class="form-group mb-md20 row">
                  <div class="col-6 col-md-6">
                     <a href="#" class="relative d-inline-block frames-img-height">
                        <img src="../../../../images/mobile-frame.png" class="img-fluid">
						  <div class="selected-frame">
                           <span class="d-inline-block pull-right"><i class="icon-dot-tick  s-green-clr white-bg f-20 rounded-circle d-inline-block"></i>	</span>
                        </div>
                     </a>
					  <p class="text-center f-14 w400 d-gblue-clr mt10">Cosmos</p>
                  </div>
                  <div class="col-6 col-md-6">
                     <a href="#" class="relative d-inline-block frames-img-height">
                        <img src="../../../../images/mobile-frame-black.png" class="img-fluid">
                     </a>
					   <p class="text-center f-14 w400 d-gblue-clr">Polaris</p>
                  </div>
               </div>
               <p class="f-14 mb15 mb-md20 w500 text-uppercase">Laptop</p>
               <div class="form-group mb-md20 row">
                  <div class="col-6 col-md-6">
                     <a href="#" class="relative d-inline-block frames-img-height">
                        <img src="../../../../images/laptop-frame.png" class="img-fluid">
                     </a>
					   <p class="text-center f-14 w400 d-gblue-clr">Nebula</p>
                  </div>
                  <div class="col-6 col-md-6">
                     <a href="#" class="relative d-inline-block frames-img-height">
                        <img src="../../../../images/laptop-frame-black.png" class="img-fluid">
                     </a>
					   <p class="text-center f-14 w400 d-gblue-clr">Mariana</p>
                  </div>
                  <div class="col-6 col-md-6 mt15 mt-md30">
                     <a href="#" class="relative d-inline-block frames-img-height">
                        <img src="../../../../images/laptop-frame-black1.png" class="img-fluid">
                     </a>
					   <p class="text-center f-14 w400 d-gblue-clr">Orion</p>
                  </div>
               </div>
               <p class="f-14 mb15 mb-md20 w500 text-uppercase">Tablet</p>
               <div class="form-group mb-md20 row">
                  <div class="col-6 col-md-6">
                     <a href="#" class="relative d-inline-block frames-img-height">
                        <img src="../../../../images/tablet-frame.png" class="img-fluid">
                     </a>
					   <p class="text-center f-14 w400 d-gblue-clr">Ivory</p>
                  </div>
                  <div class="col-6 col-md-6">
                     <a href="#" class="relative d-inline-block frames-img-height">
                        <img src="../../../../images/tablet-frame-grey.png" class="img-fluid">
                     </a>
					   <p class="text-center f-14 w400 d-gblue-clr">Abyss</p>
                  </div>
                  <div class="col-6 col-md-6 mt15 mt-md30">
                     <a href="#" class="relative d-inline-block frames-img-height">
                        <img src="../../../../images/tablet-frame-black.png" class="img-fluid">
                     </a>
					   <p class="text-center f-14 w400 d-gblue-clr">Nova</p>
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
						  <a href="#" class="base-btn default-btn mr5">&nbsp; Save &nbsp;</a>
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
