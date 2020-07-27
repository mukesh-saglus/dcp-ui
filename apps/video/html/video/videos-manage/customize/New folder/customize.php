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
                     <a class="nav-link active" href="customize.php" title="Player">
                     <span class="d-block d-xl-none"><i class="icon-player"></i></span>
                     <span class="d-none d-xl-block">Player</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link"  href="frame.php" title="Frame">
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
               <div class="form-group mb-md20">
                  <label class="d-gblue-clr">Select Player / Create Your Own Player</label>
                  <div class="d-flex align-items-center player-dropdown">
						<select class="selectpicker show-tick" data-live-search="true" title="Choose Video Player">
							<optgroup label="DotcomPal Players">
								<option>Convertstream</option>
								<option>LeadIris</option>
								<option>EyeEngage</option>
								<option>LeadFrame</option>
								<option>StarkMark</option>
								<option>LeadFesto</option>
							</optgroup>
							<optgroup label="Your Custom Players">
								<option>Custom Player One</option>
								<option>Custom Player Two</option>
								<option>Custom Player Three</option>
							</optgroup>
						</select>
						<a href="#" class="d-inline-block p-blue-clr ml15 f-16 t-decoration-none"><i class="icon-add-three"></i></a>
					</div>
               </div>
               <div class="form-group mb-md20">
                  <label class="d-gblue-clr">Player Name</label>
                  <input type="text" class="form-control" value="LeadIris">
               </div>
               <div class="form-group mb-md20">
                  <label class="d-gblue-clr">Select Player Layout</label>
                  <select class="selectpicker f-14">
                     <option>Convertstream
                     <option>LeadIris</option>
                     <option>EyeEngage</option>
                     <option>LeadFrame</option>
                     <option>StarkMark</option>
                     <option>LeadFesto</option>
                  </select>
               </div>
				
               <p class="f-14 mb10 w500">Player Details</p>
				
               <div class="form-group mb-md20 row">
                  <label class="col-12 col-md-4 col-lg-12 col-xl-4 align-self-center">Player Logo</label>
                  <div class="col-12 col-md-8 col-lg-12 col-xl-8">
                     <div class="row">
                        <div class="col-6 col-md-6">
                           <div class="player-logo-area d-flex align-items-center">
                              <img src="../../../../images/player-logo.png" class="d-block mx-auto img-fluid">	
                           </div>
                        </div>
                        <div class="col-6 col-md-6 align-self-center">
							<a href="javascript:;" class="gblue-clr f-14 d-block mb10">Remove</a>
							<a href="" class="base-btn btn-h30 green-btn" data-toggle="modal" data-target="#librarymodalimage">Upload</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="form-group mb-md20 row">
                  <label class="col-12 col-md-4 col-lg-12 col-xl-4 align-self-center mb-xl0">Logo  Link</label>
                  <div class="col-12 col-md-8 col-lg-12 col-xl-8">
                     <input type="text" class="form-control" value="http://www.dotcompal.com" placeholder="Logo Link">
                  </div>
               </div>
               <p class="f-14 mb10 w500">Appearance</p>
               <div class="form-group mb-md20 row">
                  <label class="col-12 col-md-4 col-lg-12 col-xl-4 align-self-center mb-xl0">Player Color</label>
                  <div class="col-12 col-md-8 col-lg-12 col-xl-8">
                     <div id="cp3" class="input-group colorpicker-component align-items-center row">
                        <span class="input-group-addon col-6">
                        <div></div><i class="w-100 h50 l-gblue-border"></i></span>
                        <input type="text" value="#990000" class="border-0 col-6 px0" />
                     </div>
                  </div>
               </div>
               <div class="form-group mb-md20 row">
                  <label class="col-12 col-md-4 col-lg-12 col-xl-4 align-self-center mb-xl0">Player Text Color</label>
                  <div class="col-12 col-md-8 col-lg-12 col-xl-8">
                     <div id="cp4" class="input-group colorpicker-component1 align-items-center row">
                        <span class="input-group-addon col-6"><i class="w-100 h50 l-gblue-border"></i></span>
                        <input type="text" value="#eff3f6" class="border-0 col-6 px0" />
                     </div>
                  </div>
               </div>
				
               <p class="f-14 mb10 w500">Controls</p>
				
               <div class="form-group mb-md20 row video-control-margin">
                  <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                     <div class="smart-checkbox-btn checkbox-strong-blue mb5">
                        <input id="CenterPlayButton" type="checkbox">
                        <label for="CenterPlayButton">Center Play Button</label>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                     <div class="smart-checkbox-btn checkbox-strong-blue mb5">
                        <input id="BottomPlayButton" type="checkbox">
                        <label for="BottomPlayButton">Bottom Play Button</label>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                     <div class="smart-checkbox-btn checkbox-strong-blue mb5">
                        <input id="ShareOptions" type="checkbox">
                        <label for="ShareOptions">Share Options</label>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                     <div class="smart-checkbox-btn checkbox-strong-blue mb5">
                        <input id="VolumeControls" type="checkbox">
                        <label for="VolumeControls">Volume Controls</label>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                     <div class="smart-checkbox-btn checkbox-strong-blue mb5">
                        <input id="VideoTitle" type="checkbox">
                        <label for="VideoTitle">Video Title</label>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                     <div class="smart-checkbox-btn checkbox-strong-blue mb5">
                        <input id="VideoTimer" type="checkbox">
                        <label for="VideoTimer">Video Timer</label>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                     <div class="smart-checkbox-btn checkbox-strong-blue mb5">
                        <input id="PlayBar" type="checkbox">
                        <label for="PlayBar">Play Bar</label>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                     <div class="smart-checkbox-btn checkbox-strong-blue mb5">
                        <input id="FullScreenButton" type="checkbox">
                        <label for="FullScreenButton">FullScreen Button</label>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                     <div class="smart-checkbox-btn checkbox-strong-blue mb5">
                        <input id="ControlButton" type="checkbox">
                        <label for="ControlButton">Control Button</label>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                     <div class="smart-checkbox-btn checkbox-strong-blue mb5">
                        <input id="Logo" type="checkbox">
                        <label for="Logo">Logo</label>
                     </div>
                  </div>
				  <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                     <div class="smart-checkbox-btn checkbox-strong-blue mb5">
                        <input id="Player-Bar" type="checkbox">
                        <label for="Player-Bar">Player-Bar</label>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                     <div class="smart-checkbox-btn checkbox-strong-blue mb5">
                        <input id="Player-Bar-Slide-Effect" type="checkbox">
                        <label for="Player-Bar-Slide-Effect">Player-Bar Slid Effect</label>
                     </div>
                  </div>
				  <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                     <div class="smart-checkbox-btn checkbox-strong-blue mb5">
                        <input id="ABLoop" type="checkbox">
                        <label for="ABLoop">AB Loop</label>
                     </div>
                  </div>
               </div>
				
               <p class="f-14 mb10 w500">Video Actions</p>
				
               <div class="form-group mb-md5 row video-control-margin">
                  <div class="col-12 col-md-3 col-lg-12 col-xl-4 f-14 w400 mb15">
                     Start Action
                  </div>
                  <div class="col-12 col-md-4 col-lg-12 col-xl-3 pr0">
                     <div class="smart-radio-btn radio-strong-blue protected-radio mb5">
                        <input name="action" id="AutoPlay" value="option1" type="radio" checked>
                        <label for="AutoPlay"> AutoPlay </label>
                     </div>
                  </div>
                  <div class="col-12 col-md-5 col-lg-12 col-xl-5">
                     <div class="smart-radio-btn radio-strong-blue protected-radio mb5">
                        <input name="action" id="DisplayThumbnail" value="option1" type="radio">
                        <label for="DisplayThumbnail"> Display Thumbnail </label>
                     </div>
                  </div>
               </div>
               <div class="form-group mb-md20 row video-control-margin">
                  <div class="col-12 col-md-3 col-lg-12 col-xl-4 f-14 w400 mb15">
                     End Action
                  </div>
                  <div class="col-12 col-md-4 col-lg-12 col-xl-3">
                     <div class="smart-radio-btn radio-strong-blue protected-radio mb5">
                        <input name="Visibility" id="Loop" value="option1" type="radio" checked>
                        <label for="Loop"> Loop </label>
                     </div>
                  </div>
                  <div class="col-12 col-md-5 col-lg-12 col-xl-5">
                     <div class="smart-radio-btn radio-strong-blue protected-radio mb5">
                        <input name="Visibility" id="StopEndFrame" value="option1" type="radio">
                        <label for="StopEndFrame"> Stop End Frame </label>
                     </div>
                  </div>
                  <div class="col-12 col-md-9 offset-md-3 col-lg-12 offset-lg-0 col-xl-8 offset-xl-4">
                     <div class="smart-radio-btn radio-strong-blue protected-radio mb5">
                        <input name="Visibility" id="ResetFirstframe" value="option1" type="radio">
                        <label for="ResetFirstframe"> Reset First frame </label>
                     </div>
                  </div>
               </div>
				
			   <div class="smart-checkbox-btn checkbox-strong-blue mt15 mt-md30">
                <input id="DefaultTheme" type="checkbox">
                <label for="DefaultTheme">Set as Default Theme</label>
               </div>
				
			<!--------- button------->
			<div class="d-flex justify-content-between flex-wrap mt15">
			<a href="#" class="base-btn default-btn">Reset</a>	
			<a href="#" class="base-btn blue-btn">Make Custom Player</a>	
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
