<!------- Mail Automation Main Header Include File---------->
<?php include '../../../includes/automation-header.php'; ?>
<!------- Mail Automation  Main Header Include File end---------->
<!------- DotcomPal Mail Automation Stylesheet------=------->
<link rel="stylesheet" href="../../../css/automation.css">
<!------- DotcomPal Mail Automation Stylesheet end---------->
<div class="container-fluid p15 p-md30">
   <!------- Header Start----------->
   <div class="row mb15 mb-md30">
      <div class="col-12">
         <div class="d-flex align-items-center flex-wrap">
            <ul class="stepwizard-style2 f-18 f-sm-24 w400 lato-font mr15">
               <li><a href="#"> Journey</a></li>
               <li><a href="#"> Journey Title</a></li>
            </ul>
            <div class="d-flex mt7">
               <a href="#" class="gblue-clr t-decoration-none f-17 mr5" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
               <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
            </div>
         </div>
         <p class="f-14 gblue-clr w400">Here you are manage your all notification</p>
      </div>
   </div>
   <!------- Header End ----------->
   <!------- Step Wizard Div Start----------->
   <div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md30">
      <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
         <div class="circle-num"><span><i class="fa fa-check"></i></span></div>
         <div class="title align-self-center">Template Selection</div>
         <div class="sep-line align-self-center d-none d-lg-block"></div>
      </div>
      <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
         <div class="circle-num"><span><i class="fa fa-check"></i></span></div>
         <div class="title align-self-center">Manage your Journey</div>
         <div class="sep-line align-self-center d-none d-lg-block"></div>
      </div>
      <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
         <div class="circle-num"><span> 3</span></div>
         <div class="title align-self-center">Review & Publish</div>
         <div class="sep-line align-self-center d-none d-lg-block"></div>
      </div>
   </div>
   <!------- Step Wizard Div End----------->
   <!---------Review & Activate Section Start---------->
   <div class="row">
      <div class="col-12">
         <div class="l-gblue-border radius5 p15 p-md30 smart-form">
            <div class="row">
               <div class="col-10 col-md-8 col-lg-6">
                  <label class="d-gblue-clr">Name of the journey</label>
                  <input type="text" class="form-control" value="Make Home Page" disabled>
               </div>
               <div class="col-2 col-md-4 col-lg-6 mt45 mt-md45">
                  <!-- Edit Icon -->
                  <a href="#" class="f-14 d-gblue-clr t-decoration-none"><i class="icon-edit edit-icon"></i></a>
                  <!-- Save & Cross Icon -->
                  <div class="d-none">
                     <a href="#" class="vi-red-clr f-12 t-decoration-none"><i class="icon-cross"></i></a>
                     <a href="#" class="s-green-clr ml10 f-14 t-decoration-none"><i class="icon-tick"></i></a>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12 mt15 mt-md30">
                  <div class="review-journey-view-list flex-column flex-md-row">
                     <div class="col-md-4 col-lg-3 w500 vd-gblue-clr text-center text-md-left">Trigge of the journey</div>
                     <div class="col-md-1 col-lg-1 d-none d-md-block"><img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/line-break.png"></div>
                     <div class="col-md-7 col-lg-8">
					 <div class="col-12 p0">
                        <div class="flex-column flex-md-row d-flex align-items-center mt15 mt-md0 flex-wrap">
                           <div class="journey-view-icon1 m-blue-clr"><i class="icon-attribute-changes f-25"></i></div>
                           <div class="col-md-8 px0 pl-md20 mt10 mt-md0 mb-md15 mb-lg0 mr-auto">
                              <h5 class="f-16 w500">Attribute Canges </h5>
                              <p class="f-14 d-gblue-clr">If attribute type "name" is changed by "attribute"</p>
                           </div>
                        </div>
                     </div>
                     </div>
                  </div>
               </div>
			   
               <div class="col-12 mt15 mt-md30">
                  <div class="review-journey-view-list flex-column flex-md-row">
                     <div class="col-md-4 col-lg-3 w500 vd-gblue-clr text-center text-md-left">End action of the journey</div>
                     <div class="col-md-1 col-lg-1 d-none d-md-block"><img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/line-break.png"></div>
                     <div class="col-md-7 col-lg-8">
					 <div class="col-12 p0">
                        <div class="flex-column flex-md-row d-flex align-items-center mt15 mt-md0 flex-wrap">
                           <div class="journey-view-icon1 d-green-clr"><i class="icon-tagss f-20"></i></div>
                           <div class="col-md-8 px0 pl-md20 mt10 mt-md0 mb-md15 mb-lg0 mr-auto">
                              <h5 class="f-16 w500">Add Tag</h5>
                              <p class="f-14 d-gblue-clr">Add "Tag" tag to the contacts</p>
                           </div>
                        </div>
                     </div>
                     </div>
                  </div>
               </div>
			   
               <div class="col-12 mt15 mt-md30">
                  <div class="review-journey-view-list flex-column flex-md-row">
                     <div class="col-md-2 col-md-4 col-lg-3 w500 vd-gblue-clr text-center text-md-left">Trigge of the journey</div>
                     <div class="col-md-1 col-lg-1 d-none d-md-block"><img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/line-break.png"></div>
                     <div class="col-md-7 col-lg-8">
						 <div class="col-12 p0">
                        <div class="flex-column flex-md-row d-flex align-items-center mt15 mt-md0 flex-wrap">
                           <div class="journey-view-icon1 m-blue-clr"><i class="icon-total-visited-pages"></i></div>
                           <div class="col-md-8 px0 pl-md20 mt10 mt-md0 mb-md15 mb-lg0 mr-auto">
                              <h5 class="f-16 w500">Page</h5>
                              <p class="f-14 d-gblue-clr">If someone perform any activity on "Page Title"</p>
                           </div>
                           <a href="#" class="base-btn default-btn list-btn-h25 mt10 mt-md0" title="Copy URL">Copy URL</a>	
                           <a href="#" class="base-btn default-btn list-btn-h25 mt10 mt-md0 ml-md15" title="Edit URL">Edit URL</a>					
                        </div>
                        </div>
								<!-- Edit URL Div -->
							<div class="col-12 p0">
							<div class="d-flex align-items-center w-100">
								<div class="input-group mb-2">
							<div class="input-group-prepend addon-icon">
							<div class="input-group-text  f-15 l-gblue-bg">eduncle.dotcompal.com/							
							</div>
							</div>
							<input type="text" class="form-control rounded-left-0" placeholder="your url...">
						</div>
								<a href="#" class="vi-red-clr ml15 f-12 t-decoration-none"><i class="icon-cross"></i></a>
								<a href="#" class="s-green-clr ml15 f-14 t-decoration-none"><i class="icon-tick"></i></a>
							</div>
							</div>
							<!-- Edit URL Div End -->
                     </div>
                  </div>
               </div>
			   
               <div class="col-12 mt15 mt-md30">
                  <div class="review-journey-view-list flex-column flex-md-row">
                     <div class="col-md-2 col-md-4 col-lg-3 w500 vd-gblue-clr text-center text-md-left">End action of the journey</div>
                     <div class="col-md-1 col-lg-1 d-none d-md-block"><img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/line-break.png"></div>
                     <div class="col-md-7 col-lg-8">
						 <div class="col-12 p0">
							<div class="flex-column flex-md-row d-flex align-items-center mt15 mt-md0 flex-wrap">
							   <div class="journey-view-icon1 d-green-clr"><i class="icon-show-page"></i></div>
							   <div class="col-md-8 px0 pl-md20 mt10 mt-md0 mb-md15 mb-lg0 mr-auto">
								  <h5 class="f-16 w500">Show Page</h5>
								  <p class="f-14 d-gblue-clr">Redirect to the page "Page Title"Redirect to the page "Page Title"Redirect to the page "Page Title"</p>
							   </div>
							   <a href="#" class="base-btn default-btn list-btn-h25 mt10 mt-md0" title="Copy URL">Copy URL</a>	
							   <a href="#" class="base-btn default-btn list-btn-h25 mt10 mt-md0 ml-md15" title="Edit URL">Edit URL</a>					
							</div>
							 </div>
							<!-- Edit URL Div -->
							<div class="col-12 p0 mt15 mt-md0">
							<div class="d-flex align-items-center w-100">
								<div class="input-group mb-2">
							<div class="input-group-prepend addon-icon">
							<div class="input-group-text  f-15 l-gblue-bg">eduncle.dotcompal.com/							
							</div>
							</div>
							<input type="text" class="form-control rounded-left-0" placeholder="your url...">
						</div>
								<a href="#" class="vi-red-clr ml15 f-12 t-decoration-none"><i class="icon-cross"></i></a>
								<a href="#" class="s-green-clr ml15 f-14 t-decoration-none"><i class="icon-tick"></i></a>
							</div>
							</div>
							<!-- Edit URL Div End -->
						
                     </div>
                  </div>
               </div>
			   
            </div>
            <div class="text-right mt15 mt-md30">
               <a href="#" class="base-btn default-btn mr-md5 btn-xs-block">Back</a>
               <a href="#" class="base-btn default-btn mr-md5 btn-xs-block mt10 mt-md0">Save as draft</a>
               <a href="#" class="base-btn blue-btn btn-xs-block mt10 mt-md0" data-toggle="modal" data-target="#ActivateJourneyModal">Publish</a>
            </div>
         </div>
      </div>
   </div>
   <!---------Review & Activate Section End---------->
</div>
<!------- DotcomPal Mail Automation Footer Include File ---------->
<?php include '../../../includes/automation-footer.php'; ?>
<!------- DotcomPal Mail Automation Footer Include File end ---------->