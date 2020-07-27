<!------- Mail Automation Main Header Include File---------->
<?php include '../../../includes/automation-header.php'; ?>
<!------- Mail Automation  Main Header Include File end---------->
<!------- DotcomPal Mail Automation Stylesheet------------->
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
   <div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md25">
      <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
         <div class="circle-num"><span>1</span></div>
         <div class="title align-self-center">Template Selection</div>
         <div class="sep-line align-self-center d-none d-lg-block"></div>
      </div>
      <div class="d-flex justify-content-start flex-wrap mr15 mb5">
         <div class="circle-num"><span> 2</span></div>
         <div class="title align-self-center">Manage your Journey</div>
         <div class="sep-line align-self-center d-none d-lg-block"></div>
      </div>
      <div class="d-flex justify-content-start flex-wrap mr15 mb5">
         <div class="circle-num"><span> 3</span></div>
         <div class="title align-self-center">Review & Publish</div>
         <div class="sep-line align-self-center d-none d-lg-block"></div>
      </div>
   </div>
   <!------- Step Wizard Div End----------->
   <!---------Design Section Start---------->
   <div class="row">
      <div class="col-md-4 col-lg-3 col-xl-2">
         <div class="nav flex-column nav-pills ui-vertical-tab f-16 w400 side-tab-fixed">
            <a class="nav-link"  href="choose-from-gallery.php"><i class="icon-gallery"></i>From Gallery</a>
            <a class="nav-link active"  href="your-creation-designs.php"><i class="icon-your-creation"></i>From My Templates</a>
            <a class="nav-link" href="create-your-own-design.php"><i class="icon-create-your-own"></i>Create From Scratch</a>
         </div>
      </div>
      <div class="col-md-8 col-lg-9 col-xl-10">
         <!----- Filteration Div Start---------->
         <div class="col-12 p0 sticky-design-selection mb15 mb-md30">
            <div class="row">
               <div class="col-12 col-md-6 col-lg-4 col-xl-3 mt15 mt-md0 bs-h40">
                  <select class="selectpicker f-16" title="All">
                     <option>All </option>
                     <option>Most Converted</option>
                     <option>Brand New</option>
                  </select>
               </div>
               <div class="col-md-6 col-lg-4 ml-auto">
                  <div class="smart-search-field mt15 mt-md0">
                     <div class="input-group">
                        <input class="form-control" placeholder="Search" type="text">
                        <div class="input-group-append">
                           <button class="btn" type="submit"> <i class="fa fa-search"></i></button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!----- Filteration Div End---------->
         <!----- Journey List section------->
         <div class="row">
            <div class="col-12 col-md-4 col-lg-3 mb15 mb-md30">
               <div class="journey-gallery-grid recent-active-template p15">
                  <div class="journey-icon"><i class="icon-journey-cart"></i></div>
                  <!---- Checked icon Div ---->
                  <div class="journey-popup-icon"><i class="icon-tick white-clr f-11"></i></div>
                  <!---- Journey Detail Popup Icon -->
                  <a href="javascript:void(0);" data-toggle="modal" data-target="#journeyInfo" data-backdrop="static" data-keyboard="false" class="journey-detail-btn"><i class="icon-information"></i></a>
               </div>
               <div class="d-flex justify-content-between mt10">
                  <div class="f-14 w400 align-self-center">
                     Journey Name 
                     <p class="f-10 d-gblue-clr mt4">Uploaded on 17 Feb 2019 at 4:08 PM</p>
                  </div>
                  <div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#JourneytemplatepreviewModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a></div>
               </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3 mb15 mb-md30">
               <div class="journey-gallery-grid p15">
                  <div class="journey-icon"><i class="icon-journey-mail"></i></div>
                  <!---- Checked icon Div ---->
                  <div class="journey-popup-icon"><i class="icon-tick white-clr f-11"></i></div>
                  <!---- Journey Detail Popup Icon -->
                  <a href="javascript:void(0);" data-toggle="modal" data-target="#journeyInfo" data-backdrop="static" data-keyboard="false" class="journey-detail-btn"><i class="icon-information"></i></a>
               </div>
               <div class="d-flex justify-content-between mt10">
                  <div class="f-14 w400 align-self-center">
                     Journey Name 
                     <p class="f-10 d-gblue-clr mt4">Uploaded on 17 Feb 2019 at 4:08 PM</p>
                  </div>
                  <div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#JourneytemplatepreviewModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a></div>
               </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3 mb15 mb-md30">
               <div class="journey-gallery-grid p15">
                  <div class="journey-icon"><i class="icon-journey-cart"></i></div>
                  <!---- Checked icon Div ---->
                  <div class="journey-popup-icon"><i class="icon-tick white-clr f-11"></i></div>
                  <!---- Journey Detail Popup Icon -->
                  <a href="javascript:void(0);" data-toggle="modal" data-target="#journeyInfo" data-backdrop="static" data-keyboard="false" class="journey-detail-btn"><i class="icon-information"></i></a>
               </div>
               <div class="d-flex justify-content-between mt10">
                  <div class="f-14 w400 align-self-center">
                     Journey Name 
                     <p class="f-10 d-gblue-clr mt4">Uploaded on 17 Feb 2019 at 4:08 PM</p>
                  </div>
                  <div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#JourneytemplatepreviewModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a></div>
               </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3 mb15 mb-md30">
               <div class="journey-gallery-grid p15">
                  <div class="journey-icon"><i class="icon-journey-mail"></i></div>
                  <!---- Checked icon Div ---->
                  <div class="journey-popup-icon"><i class="icon-tick white-clr f-11"></i></div>
                  <!---- Journey Detail Popup Icon -->
                  <a href="javascript:void(0);" data-toggle="modal" data-target="#journeyInfo" data-backdrop="static" data-keyboard="false" class="journey-detail-btn"><i class="icon-information"></i></a>
               </div>
               <div class="d-flex justify-content-between mt10">
                  <div class="f-14 w400 align-self-center">
                     Journey Name 
                     <p class="f-10 d-gblue-clr mt4">Uploaded on 17 Feb 2019 at 4:08 PM</p>
                  </div>
                  <div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#JourneytemplatepreviewModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a></div>
               </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3 mb15 mb-md30">
               <div class="journey-gallery-grid p15">
                  <div class="journey-icon"><i class="icon-journey-cart"></i></div>
                  <!---- Checked icon Div ---->
                  <div class="journey-popup-icon"><i class="icon-tick white-clr f-11"></i></div>
                  <!---- Journey Detail Popup Icon -->
                  <a href="javascript:void(0);" data-toggle="modal" data-target="#journeyInfo" data-backdrop="static" data-keyboard="false" class="journey-detail-btn"><i class="icon-information"></i></a>
               </div>
               <div class="d-flex justify-content-between mt10">
                  <div class="f-14 w400 align-self-center">
                     Journey Name 
                     <p class="f-10 d-gblue-clr mt4">Uploaded on 17 Feb 2019 at 4:08 PM</p>
                  </div>
                  <div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#JourneytemplatepreviewModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a></div>
               </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3 mb15 mb-md30">
               <div class="journey-gallery-grid p15">
                  <div class="journey-icon"><i class="icon-journey-custom"></i></div>
                  <!---- Checked icon Div ---->
                  <div class="journey-popup-icon"><i class="icon-tick white-clr f-11"></i></div>
                  <!---- Journey Detail Popup Icon -->
                  <a href="javascript:void(0);" data-toggle="modal" data-target="#journeyInfo" data-backdrop="static" data-keyboard="false" class="journey-detail-btn"><i class="icon-information"></i></a>
               </div>
               <div class="d-flex justify-content-between mt10">
                  <div class="f-14 w400 align-self-center">
                     Journey Name 
                     <p class="f-10 d-gblue-clr mt4">Uploaded on 17 Feb 2019 at 4:08 PM</p>
                  </div>
                  <div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#JourneytemplatepreviewModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a></div>
               </div>
            </div>
            <!----- Pagination Div Start----->
            <div class="col-12 d-flex justify-content-between flex-wrap f-14 mt15 mt-md30">
               <div class="d-flex justify-content-start align-items-center mb5">
                  Show
                  <span class="bs-h40 entries-width px15">
                     <select class="selectpicker" >
                        <option>10</option>
                        <option>20</option>
                        <option>30</option>
                     </select>
                  </span>
                  <span class="d-none d-xl-block">Showing 1 to 4 of 400 entries</span>
               </div>
               <div class="mb5">
                  <ul class="rounded-pagination f-14">
                     <li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i> </a>
                     </li>
                     <li><a href="#">1</a>
                     </li>
                     <li><a href="#">2</a>
                     </li>
                     <li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </a>
                     </li>
                     <li><a href="#" class="active">6</a>
                     </li>
                     <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> </a>
                     </li>
                  </ul>
               </div>
            </div>
            <!----- Pagination Div End----->
         </div>
         <!----- Journey List section end------->
      </div>
   </div>
   <!---------Design Section End---------->
</div>
<!------- DotcomPal Mail Automation Footer Include File ---------->
<?php include '../../../includes/automation-footer.php'; ?>
<!------- DotcomPal Mail Automation Footer Include File end ---------->
