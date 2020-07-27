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
            <a class="nav-link active"  href="advertise.php">
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
            <div class="col-12 col-md-12 col-lg-5 order-2 order-lg-1 smart-form">
               <div class="form-group mb-md20 error-message">
                  <label class="d-gblue-clr f-14">Advertisement Name</label>
                  <input type="text" name="Enter Title" class="form-control f-14" placeholder="Enter Title"><small class="form-text f-14 text-left d-none">The Advertisement Name is required...</small>
               </div>
               <div class="form-group mb-md20">
                  <label class="d-gblue-clr f-14">Select Advertisement start time from player</label>
                  <input type="text" name="Enter Title" class="form-control f-14" value="0:00:00">
               </div>
               <div class="form-group mb-md20">
                  <label class="d-gblue-clr f-14">Segment</label>
                  <select class="selectpicker f-14" title="Choose Segment" disabled>
                     <option>Segment 1</option>
                     <option>Segment 2</option>
                     <option>Segment 3</option>
                     <option>Segment 4</option>
                     <option>Segment 5</option>
                     <option>Segment 6</option>
                  </select>
               </div>
               <div class="form-group mb-md20">
                  <label class="d-gblue-clr f-14">Select Advertisement Type</label>
                  <select id="advertismentType" class="selectpicker f-14" title="Select Advertisment Type">
                     <option value="Apps">Pop-ups</option>
                     <option value="Video">Video App</option>
                     <option value="HTML">HTML</option>
                     <option value="Image">Image</option>
                     <option value="Text">Text</option>
                  </select>
               </div>
               <!------- Select DropDown Output Section---------->
               
               <div class="output-div">
			
               	<!------- Select Lead Output Section---------->
				<div id="Apps" class="advertisment-block">
					<ul class="nav tabs-style1 f-14" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" data-target="#Fromgallerylead">From Gallery</a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" data-target="#Yourcreationlead">Your Creation</a> </li>
					</ul>  
					<div class="tab-content mt15 mt-md20">
						  <div id="Fromgallerylead" class="tab-pane active">
							<div class="row mb-md20 mb20">
								<div class="col-md-6 col-12 mb15 mb-md0">
									<select class="selectpicker f-14" title="Select Industry">
									<option>Industry One</option>
									<option>Industry Two</option>
									<option>Industry Three</option>
									<option>Industry Four</option>
									</select>
								</div>
								<div class="col-md-6 col-12">
									<select class="selectpicker f-14" title="Select Use Cases">
									<option>Use Cases One</option>
									<option>Use Cases Two</option>
									<option>Use Cases Three</option>
									<option>Use Cases Four</option>
									<option>Use Cases Five</option>
									</select>
								</div>
							</div>
							 <div class="py20 px10 advertisment-template l-gblue-border radius3">
								<div class="mCustomScrollbar template-scroll" data-mcs-theme="inset-3">
								   <div class="row">
									  <div class="col-12 col-md-6">
										 <div class="relative">
										 <div class="hover-img  d-flex align-items-center l-gblue-border">
											<img src="../../../../images/lead-temp1.png" class="img-fluid d-block mx-auto">
											<div class="img-overlay"></div>
											<!---Ribbon Premium Div --->
											<div class="ribbon-overlay">
												<div class="premium-ribbon"><span>Premium</span></div>
											</div>
										 </div>
										  <div class="text-right hover-icon">
											<a href="#" class="t-decoration-none" data-toggle="modal" data-target="#libraryModalpreview" data-backdrop="static" data-keyboard="false">
											<i class="icon-show rounded"></i>
											</a>
										  </div>
										  </div>	  
										 <p class="text-center mt8">Black Blink New</p>
									  </div>
									   <div class="col-12 col-md-6">
										 <div class="hover-img  d-flex align-items-center l-gblue-border">
											<img src="../../../../images/lead-temp1.png" class="img-fluid d-block mx-auto">
											<div class="img-overlay">
											   <div class="text-right hover-icon">
												  <a href="#" class="t-decoration-none" data-toggle="modal" data-target="#libraryModalpreview" data-backdrop="static" data-keyboard="false">
												  <i class="icon-show rounded"></i>
												  </a>
											   </div>
											</div>
										 </div>
										 <p class="text-center mt8">Black Blink</p>
									  </div>
									  <div class="col-12 col-md-6 mt15 mt-md25">
										 <div class="hover-img">
											<img src="../../../../images/lead-temp2.png" class="img-fluid d-block mx-auto l-gblue-border">
											<div class="img-overlay">
											   <div class="text-right hover-icon">
												  <a href="#" class="t-decoration-none" data-toggle="modal" data-target="#libraryModalpreview" data-backdrop="static" data-keyboard="false">
												  <i class="icon-show rounded"></i>
												  </a>
											   </div>
											</div>
										 </div>
										 <p class="text-center mt8">BlueBubble</p>
									  </div>
									  <div class="col-12 col-md-6 mt15 mt-md25">
										 <div class="hover-img  d-flex align-items-center l-gblue-border">
											<img src="../../../../images/lead-temp3.png" class="img-fluid d-block mx-auto">
											<div class="img-overlay">
											   <div class="text-right hover-icon">
												  <a href="#" class="t-decoration-none" data-toggle="modal" data-target="#libraryModalpreview" data-backdrop="static" data-keyboard="false">
												  <i class="icon-show rounded"></i>
												  </a>
											   </div>
											</div>
										 </div>
										 <p class="text-center mt8">Cool Pie</p>
									  </div>
									  <div class="col-12 col-md-6 mt15 mt-md25">
										 <div class="hover-img">
											<img src="../../../../images/lead-temp4.png" class="img-fluid d-block mx-auto l-gblue-border">
											<div class="img-overlay">
											   <div class="text-right hover-icon">
												  <a href="#" class="t-decoration-none" data-toggle="modal" data-target="#libraryModalpreview" data-backdrop="static" data-keyboard="false">
												  <i class="icon-show rounded"></i>
												  </a>
											   </div>
											</div>
										 </div>
										 <p class="text-center mt8">Cordial</p>
									  </div>
									  <div class="col-12 col-md-6 mt15 mt-md25">
										 <div class="hover-img  d-flex align-items-center l-gblue-border">
											<img src="../../../../images/lead-temp5.png" class="img-fluid d-block mx-auto">
											<div class="img-overlay">
											   <div class="text-right hover-icon">
												  <a href="#" class="t-decoration-none" data-toggle="modal" data-target="#libraryModalpreview" data-backdrop="static" data-keyboard="false">
												  <i class="icon-show rounded"></i>
												  </a>
											   </div>
											</div>
										 </div>
										 <p class="text-center mt8">Hi5</p>
									  </div>
									  <div class="col-12 col-md-6 mt15 mt-md25">
										 <div class="hover-img">
											<img src="../../../../images/lead-temp6.png" class="img-fluid d-block mx-auto l-gblue-border">
											<div class="img-overlay">
											   <div class="text-right hover-icon">
												  <a href="#" class="t-decoration-none" data-toggle="modal" data-target="#libraryModalpreview" data-backdrop="static" data-keyboard="false">
												  <i class="icon-show rounded"></i>
												  </a>
											   </div>
											</div>
										 </div>
										 <p class="text-center mt8">Multikick</p>
									  </div>
								   </div>
								</div>
							 </div>
							  <!---- Allow Skip Advertiesment div---->
							 <div class="row mt15 mt-md20 lato-font">
								<div class="col-12 col-md-3 col-lg-4 col-xl-3">
								   <label class="text-nowrap">Allow Skip</label>
								   <label class="switchtoggle-btn">
									  <input class="switchtoggle-input" type="checkbox" checked="">
									  <span class="switchtoggle-label" data-on="On" data-off="Off"></span> <span class="switchtoggle-handle"></span> </label>
								</div>
								<div class="col-12 col-md-9 col-lg-8 col-xl-9 mt15 mt-md0">
								   <label>Skip Duration</label>
								   <div class="error-message"><input type="text" name="" class="form-control f-14" value="00:00:30">
								   <small class="form-text f-14 text-left d-none">Specify the duration for Skipping the Ad.</small>
								   </div>
								</div>
							 </div>
						  </div>
						  <div id="Yourcreationlead" class="tab-pane">
							 <div class="py20 px10 advertisment-template l-gblue-border radius3">
								<div class="mCustomScrollbar template-scroll" data-mcs-theme="inset-3">
								   <div class="row">
									 <!------ No Record Found Div-->
										<div class="col-12 text-center blank-page-h d-flex align-items-center">
											<div class="w-100">
											<img src="<?php echo $basedir; ?>images/no-result.png" class="img-fluid d-block mx-auto">
											<p class="mt15 mt-md25 w700 lato-font">No Record found</p>
											</div>
										</div>
									 <!------ No Record Found Div end--> 
								   </div>
								</div>
							 </div>
						  </div>
					</div> 
				 </div>  
                <!------- Select Lead Output Section End---------->
               
                <!------- Select Video Output Section---------->
                  <div id="Video" class="advertisment-block">
                  	   <div class="form-group mb-md20 row">  
                        <div class="col-12 col-md-3 col-lg-12 col-xl-3 align-self-center pr0 mb15 mb-md0 mb-lg15 mb-xl0">
                           <a href="javascript:" class="base-btn green-btn btn-h30" data-toggle="modal" data-target="#librarymodalVideo">&nbsp; Upload &nbsp;</a>
                        </div>
                        <div class="col-12 col-md-9 col-lg-12 col-xl-9 pl-xl5">
                           <div class="d-flex align-items-center">
                             <p class="f-12">Video Thumbnail must be 20 kb<br/>
                              Video Thumbnail Minimum size 100 Width x 35 Height </p>
                           </div>
                        </div>                             
                       </div>
                       
                       <div class="form-group mb-md20 row">
                        <div class="col-12 col-md-6">
                           <div class="player-thumb-area d-flex align-items-center">
                              <img src="../../../../images/video-thumb.png" class="d-block mx-auto img-fluid">	
                           </div>
                        </div>
                       </div>
                       
                       <div class="row">
                          <label class="col-12">Link to</label>
                          <div class="col-12">
                             <input type="text" class="form-control" value="http://www.videowhizz.com" placeholder="Video Thumbnail Link">
                          </div>
                       </div>
                                  
                       <div class="row">
                         <div class="col-12 mt15 mt-md30 text-right">
                            <a href="#" class="base-btn default-btn mr5">&nbsp; Reset &nbsp;</a>
							<a href="#" class="base-btn blue-btn">&nbsp; Add Action &nbsp;</a>
                         </div>                            
                       </div>
                  </div>
                <!------- Select Video Output Section End---------->
                
                
                <!------- Select HTML Output Section---------->
                  <div id="HTML" class="advertisment-block">
                  	   
                       <div class="mb-md20 row">
                          <label class="col-12">HTML Page Url</label>
                          <div class="col-12">
                             <input type="text" class="form-control" value="" placeholder="Give Full Path Url">
                          </div>
                       </div>
                       
                        <!---- Allow Skip Advertiesment div---->
                     <div class="row mt15 mt-md20 lato-font">
                        <div class="col-12 col-md-3 col-lg-4 col-xl-3">
                           <label class="text-nowrap">Allow Skip</label>
                           <label class="switchtoggle-btn">
                              <input class="switchtoggle-input" type="checkbox" checked="">
                              <span class="switchtoggle-label" data-on="On" data-off="Off"></span> <span class="switchtoggle-handle"></span> </label>
                        </div>
                        <div class="col-12 col-md-9 col-lg-8 col-xl-9 mt15 mt-md0">
                           <label>Skip Duration</label>
                           <div class="error-message"><input type="text" name="" class="form-control f-14" value="00:00:30">
						   <small class="form-text f-14 text-left d-none">Specify the duration for Skipping the Ad.</small>
						   </div>
                        </div>
                     </div>
                       
                  </div>
                <!------- Select HTML Output Section End---------->
                
                <!------- Select Image Output Section---------->
                  <div id="Image" class="advertisment-block">
                  	   <div class="form-group mb-md20 row">  
                        <div class="col-12 col-md-3 col-lg-12 col-xl-3 align-self-center pr0 mb15 mb-md0 mb-lg15 mb-xl0">
                           <a href="javascript:" class="base-btn green-btn btn-h30" data-toggle="modal" data-target="#librarymodalimage">&nbsp; Upload &nbsp;</a>
                        </div>
                        <div class="col-12 col-md-9 col-lg-12 col-xl-9 pl-xl5">
                           <div class="d-flex align-items-center">
                             <p class="f-12">Image must be 20 kb<br/>
                              Image Minimum size 100 Width x 35 Height </p>
                           </div>
                        </div>                             
                       </div>
                       
                       <div class="form-group mb-md20 row">
                        <div class="col-12 col-md-6">
                           <div class="player-thumb-area d-flex align-items-center radius0">
                              <img src="../../../../images/google.png" class="d-block mx-auto img-fluid">	
                           </div>
                        </div>
                       </div>
                       
                       <div class="row">
                          <label class="col-12">Link to</label>
                          <div class="col-12">
                             <input type="text" class="form-control" value="http://www.google.com" placeholder="Image Logo Link">
                          </div>
                       </div>
                                  
                       <div class="row mt15 mt-md30 mt15 ">
                         <div class="col-12 text-right">
                            <a href="#" class="base-btn default-btn mr5">&nbsp; Reset &nbsp;</a>
                           
							<a href="#" class="base-btn blue-btn">&nbsp; Add Action &nbsp;</a>
                         </div>                            
                       </div>
                  </div>
                <!------- Select Image Output Section End---------->
                
                <!------- Select Text Output Section---------->
                  <div id="Text" class="advertisment-block">
                  	   <div class="form-group mb-md20 row">
                          <label class="col-12 col-md-4 col-lg-12 col-xl-4 align-self-center mb-xl0">Text Color</label>
                          <div class="col-12 col-md-8 col-lg-12 col-xl-8">
                             <div id="cp3" class="input-group colorpicker-component align-items-center row">
                                <span class="input-group-addon col-6"><i class="w-100 h50 l-gblue-border"></i></span>
                                <input type="text" value="#ffffff" class="border-0 col-6 pr0" />
                             </div>
                          </div>
                       </div>
                       <div class="form-group mb-md20 row">
                          <label class="col-12 col-md-4 col-lg-12 col-xl-4 align-self-center mb-xl0">Background Color</label>
                          <div class="col-12 col-md-8 col-lg-12 col-xl-8">
                             <div id="cp4" class="input-group colorpicker-component1 align-items-center row">
                                <span class="input-group-addon col-6"><i class="w-100 h50 l-gblue-border"></i></span>
                                <input type="text" value="#0f456d" class="border-0 col-6 pr0" />
                             </div>
                          </div>
                       </div>
                       
                       <div class="form-group mb-md20 row">
                          <label class="col-12">Title</label>
                          <div class="col-12">
                             <input type="text" class="form-control" value="" placeholder="Title">
                          </div>
                       </div>
                       
                       <div class="form-group mb-md20 row">
                          <label class="col-12">Description</label>
                          <div class="col-12">                             
                             <textarea class="form-control" placeholder="Description..."></textarea>
                          </div>
                       </div>
                       
                       <div class="form-group mb-md20 row">
                          <label class="col-12">Link to</label>
                          <div class="col-12">
                             <input type="text" class="form-control" value="" placeholder="http://">
                          </div>
                       </div>
                                  
                       <div class="row">
                         <div class="col-12 mt15 mt-md15 text-right">
                            <a href="#" class="base-btn default-btn mr5">&nbsp; Reset &nbsp;</a>
                            
                            <a href="#" class="base-btn blue-btn">&nbsp; Add Action &nbsp;</a>
                         </div>                            
                       </div>
                  </div>
                <!------- Select Text Output Section End---------->
                
               </div>   
               <!------- Select DropDown Output Section End------------>
               
            </div>
            
            <div class="col-12 col-md-12 col-lg-7 mt15 mt-md0 order-1 order-lg-2">
			<div id="videosticky">
               <h5 class="p-blue-clr mb15 mb-md25 text-center">Video Preview</h5>
               <div class="embed-responsive embed-responsive-16by9">
					<!--        <iframe id="preview-player" scrolling="no" class="embed-responsive-item" src="https://mukesh.videowhizz.com/player/Player_controller/player_back/t3m1m6lgva" allowfullscreen=""></iframe>-->
			   </div>
                
               <!------- Advertisement Information Section---------->
               <div class="ads-info">
               	<div class="row">
                 <div class="col-12">
                  <h5 class="p-blue-clr w600 my20 text-center text-md-left f-18">
                  Advertisement Information</h5>
                 </div>
                </div>
                
               	<div class="row">
                 <div class="col-12 col-md-6 col-lg-6 col-xl-2 align-self-center">
                  <img src="../../../../images/lead-temp1.png" class="img-fluid d-block mx-auto l-gblue-border">
                 </div>
                 
                 <div class="col-12 col-md-6 col-lg-6 col-xl-10">
                 <div class="row">
                 <div class="col-12 col-md-12 col-lg-12 col-xl-6 align-items-center text-center text-md-left mt15 mt-md0">
                  <h5 class="lh150 text-ellipsis firasans-font f-18 w400">Advertisement Name 1</h5>
                  <p class="f-12">Starting Time : 00.00.10</p>
				  <div class="draft-btn mt10"><i class="icon-draft mr5"></i>Draft</div>	 
                 </div>
                 <div class="col-12 col-md-12 col-lg-12 col-xl-6 d-flex align-items-center justify-content-end mt15 mt-xl0">
                  <div class="mr10">
                  <a href="#" class="base-btn green-btn btn-h30">&nbsp; Jump &nbsp;</a>
				  </div>
                  <div class="mr10">
                  <a href="javascript:" class="ads-action-item" data-toggle="modal" data-target="#editadsinfoModal"><i class="icon-edit"></i></a></div>
                  <div>
                  <a href="javascript:" class="ads-action-item" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i></a>
				   </div>
                 </div>
                 </div>
                 </div>
                 
                </div>
                
                <div class="row mt15 mt-md25">
                 <div class="col-12 col-md-6 col-lg-6 col-xl-2 align-self-center">
                  <img src="../../../../images/lead-temp1.png" class="img-fluid d-block mx-auto l-gblue-border">
                 </div>
                 
                 <div class="col-12 col-md-6 col-lg-6 col-xl-10">
                 <div class="row">
                 <div class="col-12 col-md-12 col-lg-12 col-xl-6 align-items-center text-center text-md-left mt15 mt-md0">
                   <h5 class="lh150 text-ellipsis firasans-font f-18 w400">Grab Your Free Coupon</h5>
                  <p class="f-12">Starting Time : 00.00.10</p>
				  <div class="draft-btn mt10"><i class="icon-draft mr5"></i>Draft</div>	 
                 </div>
                 <div class="col-12 col-md-12 col-lg-12 col-xl-6 d-flex align-items-center justify-content-end mt15 mt-xl0">
                  <div class="mr10">
                  <a href="#" class="base-btn green-btn btn-h30">&nbsp; Jump &nbsp;</a>
				  </div>
                  <div class="mr10">
                  <a href="javascript:" class="ads-action-item" data-toggle="modal" data-target="#editadsinfoModal"><i class="icon-edit"></i></a></div>
                  <div>
                  <a href="javascript:" class="ads-action-item" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i></a>
				   </div>
                 </div>
                 </div>
                 </div>
                 
                </div>                
                
               </div>
               <!------- Advertisement Information Section End---------->
                         
               <div class="my15 mt-md30 text-right">
                  <a href="#" class="base-btn default-btn mr5">&nbsp; Save &nbsp;</a>
                  <a href="#" class="base-btn blue-btn">Save & Activate</a>
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
<!------- Smart Footer Include File end ---------->>>>