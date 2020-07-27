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
            	<a class="nav-link"  href="video-url.php">
                <i class="icon-url"></i> Video URL</a>
				<a class="nav-link active"  href="inline-embed.php">
                <i class="icon-get-code"></i> Embed Code</a>
			</div>
		</div>
		<div class="col-md-8 col-lg-9 col-xl-10">	
						
			<!----- Video Details Form section------->
			<div class="row">
				<div class="col-12 col-lg-8 mt15 mt-md0 smart-form f-14">
					<div class="form-group mb-md30">
					<div class="w600">Embed Type</div>
					<div class="d-flex mt15 mt-md20">
						<div class="smart-radio-btn radio-strong-blue publish-radio col-lg-3 col-md-5 col-6 p0">
							<input name="chkPassPort1" id="Standard" value="option2" type="radio" checked>
							<label for="Standard">Standard</label>
						</div>
						<div class="smart-radio-btn radio-strong-blue draft-radio col-lg-9 col-md-7 col-6">
							<input name="chkPassPort1" id="IFrame" value="option2" type="radio">
							<label for="IFrame">IFrame</label>
						</div>
					</div>
					</div>
					<div class="form-group">
						<div class="w600">Video Dimension</div>
						<div class="d-flex mt15 mt-md20">
							<div class="smart-radio-btn radio-strong-blue publish-radio col-lg-3 col-md-5 col-6 p0">
								<input name="chkPassPort" id="select-date" value="option2" type="radio">
								<label for="select-date">Fixed </label>
							</div>
							<div class="smart-radio-btn radio-strong-blue draft-radio col-lg-9 col-md-7 col-6">
								<input name="chkPassPort" id="FitToFrame" value="option2" type="radio" checked>
								<label for="FitToFrame"> Fit To Frame </label>
							</div>
						</div>
					</div>
					
					<div class="row" id="timeshow">
						<div class="col-12 col-md-5 col-lg-4 col-xl-3">
							<input type="text" name="" class="form-control" placeholder="640">
						</div>
						<div class="col-12 col-md-2 col-lg-2 col-xl-1 text-center align-self-center f-16 my10 my-md0">X</div>
						<div class="col-12 col-md-5 col-lg-4 col-xl-3">
							<input type="text" name="" class="form-control" placeholder="360">
						</div>
					</div>
					<div class="form-group mb0 mt15 mt-md20 d-gblue-clr">
						<textarea class="form-control f-14" rows="4"><iframe src="https://mukesh.vidmozo.com/frame/izij3hg2i7" style="width:100%;height:100%">
</iframe>
						</textarea>
					</div>
					 <div class="mt15 mt-md30 text-right mb10">
						<a href="#" class="base-btn default-btn mr5">&nbsp; Back &nbsp;</a>
						<button type="submit" class="base-btn blue-btn">Copy Code</button>
					</div>
				</div>				
			</div>
			<!----- Video Details Form section end------->
		</div>
	</div>
	<!---------Design Section End---------->
</div>
<!------- Smart Footer Include File---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->