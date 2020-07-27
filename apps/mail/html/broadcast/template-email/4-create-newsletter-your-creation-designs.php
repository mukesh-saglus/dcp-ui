<!------- Smart Header Include File---------->
<?php include '../../../../smart/html/includes/dcp-header.php'; ?>
<!------- Smart Header Include File end---------->
<!------- Smart Mail Stylesheet------------->
<link rel="stylesheet" href="../../../css/mail.css">
<!------- Smart Mail Stylesheet end---------->

<div class="container-fluid p15 p-md30">
   <!------- Header Start----------->
   <div class="row mb15 mb-md30">
      <div class="col-12">
         <ul class="stepwizard-style2 w400 lato-font f-20 f-md-24">
            <li> <a href="#">Broadcast</a> </li>
            <li> <a href="#">Broadcast Name </a> </li>
         </ul>
         <p class="f-14 gblue-clr">Choose from our converting templates or start creating your own</p>
      </div>
   </div>
   <!------- Header End ----------->
   <!------- Step Wizard Div Start----------->
   <div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md25">
      <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
         <div class="circle-num"><span>1</span></div>
         <div class="title align-self-center">Design Selection</div>
         <div class="sep-line align-self-center d-none d-lg-block"></div>
      </div>
      <div class="d-flex justify-content-start flex-wrap mr15 mb5">
         <div class="circle-num"><span> 2</span></div>
         <div class="title align-self-center">Editor</div>
         <div class="sep-line align-self-center d-none d-lg-block"></div>
      </div>
      <div class="d-flex justify-content-start flex-wrap mr15 mb5">
         <div class="circle-num"><span>3</span></div>
         <div class="title align-self-center">Contact</div>
         <div class="sep-line align-self-center d-none d-lg-block"></div>
      </div>
      <div class="d-flex justify-content-start flex-wrap mr15 mb5">
         <div class="circle-num"><span>4</span></div>
         <div class="title align-self-center">Sending Option</div>
         <div class="sep-line align-self-center d-none d-lg-block"></div>
      </div>
      <div class="d-flex justify-content-start flex-wrap mr15 mb5">
         <div class="circle-num"><span>5</span></div>
         <div class="title align-self-center">Review & Send</div>
         <div class="sep-line align-self-center d-none d-lg-block"></div>
      </div>
   </div>
   <!------- Step Wizard Div End----------->
   <!---------Design Section Start---------->
   <div class="row">
      <div class="col-md-4 col-lg-3 col-xl-2">
         <div class="nav flex-column nav-pills ui-vertical-tab f-16 w400 side-tab-fixed">
            <a class="nav-link"  href="3-create-newsletter-gallery.php"><i class="icon-gallery"></i>From Gallery</a>
            <a class="nav-link active"  href="4-create-newsletter-your-creation-designs.php"><i class="icon-your-creation"></i>From My Templates</a>
         </div>
      </div>
      <div class="col-md-8 col-lg-9 col-xl-10">
         <!----- Filteration Div Start---------->
         <div class="col-12 p0 sticky-design-selection mb15 mb-md30">
            <div class="row">
               <div class="col-lg-8 col-xl-9">
                  <div class="d-flex justify-content-start flex-wrap row bs-h40">
                     <div class="col-12 col-md-6 col-lg-5 col-xl-4 mt15 mt-md0">
                        <select class="selectpicker f-16" title="All">
                           <option>All </option>
                           <option>Most Converted</option>
                           <option>Brand New</option>
                        </select>
                     </div>
                     <div class="col-12 col-md-6 col-lg-5 col-xl-4 mt15 mt-md0">
                        <select class="selectpicker f-16" title="All Industry">
                           <option>All Industry 1</option>
                           <option>All Industry 2</option>
                           <option>All Industry 3</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-xl-3 col-md-12">
                  <div class="smart-search-field mt15 mt-lg0">
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
         <!----- Template List section------->
         <div class="row">
            <div class="col-12 col-md-4 col-lg-3 mb15 mb-md30">
               <div class="design-gallery-grid p15">
                  <img src="../../../images/template.png" class="img-fluid d-block mx-auto">
                  <!---- Checked icon Div ---->
                  <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
                     <i class="icon-tick white-clr f-11"></i>
                  </div>
               </div>
               <div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
                  <div class="f-14 w400">
                     Template Name
                     <p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
                  </div>
                  <div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="tem-delete-btn t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
                     <i class="icon-delete"></i>
                     </a>
                     <a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
                     <i class="icon-show"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3 mb15 mb-md30">
               <div class="design-gallery-grid recent-active-template p15">
                  <img src="../../../images/template.png" class="img-fluid d-block mx-auto">
                  <!---- Checked icon Div ---->
                  <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
                     <i class="icon-tick white-clr f-11"></i>
                  </div>
               </div>
               <div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
                  <div class="f-14 w400">
                     Template Name
                     <p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
                  </div>
                  <div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="tem-delete-btn t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
                     <i class="icon-delete"></i>
                     </a>
                     <a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
                     <i class="icon-show"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3 mb15 mb-md30">
               <div class="design-gallery-grid p15">
                  <img src="../../../images/template.png" class="img-fluid d-block mx-auto">
                  <!---- Checked icon Div ---->
                  <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
                     <i class="icon-tick white-clr f-11"></i>
                  </div>
               </div>
               <div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
                  <div class="f-14 w400">
                     Template Name
                     <p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
                  </div>
                  <div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="tem-delete-btn t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
                     <i class="icon-delete"></i>
                     </a>
                     <a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
                     <i class="icon-show"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3 mb15 mb-md30">
               <div class="design-gallery-grid p15">
                  <img src="../../../images/template.png" class="img-fluid d-block mx-auto">
                  <!---- Checked icon Div ---->
                  <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
                     <i class="icon-tick white-clr f-11"></i>
                  </div>
               </div>
               <div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
                  <div class="f-14 w400">
                     Template Name
                     <p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
                  </div>
                  <div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="tem-delete-btn t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
                     <i class="icon-delete"></i>
                     </a>
                     <a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
                     <i class="icon-show"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3 mb15 mb-md30">
               <div class="design-gallery-grid p15">
                  <img src="../../../images/template.png" class="img-fluid d-block mx-auto">
                  <!---- Checked icon Div ---->
                  <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
                     <i class="icon-tick white-clr f-11"></i>
                  </div>
               </div>
               <div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
                  <div class="f-14 w400">
                     Template Name
                     <p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
                  </div>
                  <div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="tem-delete-btn t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
                     <i class="icon-delete"></i>
                     </a>
                     <a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
                     <i class="icon-show"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3 mb15 mb-md30">
               <div class="design-gallery-grid p15">
                  <img src="../../../images/template.png" class="img-fluid d-block mx-auto">
                  <!---- Checked icon Div ---->
                  <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
                     <i class="icon-tick white-clr f-11"></i>
                  </div>
               </div>
               <div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
                  <div class="f-14 w400">
                     Template Name
                     <p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
                  </div>
                  <div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="tem-delete-btn t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
                     <i class="icon-delete"></i>
                     </a>
                     <a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
                     <i class="icon-show"></i>
                     </a>
                  </div>
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
         <!----- Template List section end------->
      </div>
   </div>
   <!---------Design Section End---------->
</div>
<!------- Smart Footer Include File---------->
<?php include '../../../../smart/html/includes/dcp-footer.php'; ?>
<!------- Smart Footer Include File end ---------->
