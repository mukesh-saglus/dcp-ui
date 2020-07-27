<!-- Header Include File-->
<?php include '../../../../smart/html/includes/dcp-header.php'; ?>
<!-- Header Include File end-->

<!-- Mail Stylesheet -->
<link rel="stylesheet" href="../../../css/mail.css">
<div class="container-fluid p15 p-md30">
   <div class="row align-items-center">
      <div class="col-12">
         <span class="f-20 f-md-24 lato-font">Account Review</span> &nbsp;
         <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
         <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
         <p class="d-gblue-clr w400 mt5">Here you can review customer’s account for SMTP</p>
      </div>
   </div>
   <div class="row mt15 mt-md30">
      <!-- Filter Option List Start -->
      <div class="col-12">
         <div class="row">
            <div class="col-md-6 col-lg-3 col-xl-3 bs-h40 mb10 mb-lg0 smart-form">
               <select class="selectpicker f-14" title="All Account Reviews (43)">
                  <option>All Account Reviews (43)</option>
                  <option>Reviews in Account 24 hours</option>
                  <option>Reviews in Account 7 days</option>
                  <option>Reviews in Account 30 days</option>
               </select>
            </div>
            <div class="col-md-12 col-lg-7 offset-lg-2 col-xl-6 offset-xl-3">
               <div class="row">
                  <div class="col-md-4 col-lg-4 col-xl-3 mb10 mb-md0 pl-xl0 text-right">
                     <button type="button" class="base-btn default-btn btn-xs-block filter-list-open f-14" title="Add Filter">Add Filter &nbsp;<i class="icon-filter" aria-hidden="true"></i> </button>
                  </div>
                  <div class="col-md-5 col-lg-5 col-xl-6 mb10 mb-md0">
                     <div class="smart-search-field">
                        <div class="input-group">
                           <input class="form-control" placeholder="Search" type="text">
                           <div class="input-group-append">
                              <button class="btn" type="submit"> <i class="fa fa-search"></i></button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 col-lg-3 col-xl-3">
                     <div class="row">
                        <div class="col-4 col-md-3 col-lg-4 d-flex align-self-center d-md-none d-lg-block f-14">Show</div>
                        <div class="col-8 col-md-12 col-lg-8 bs-h40">
                           <select class="selectpicker f-14">
                              <option>10</option>
                              <option>20</option>
                              <option>50</option>
                              <option>100</option>
                              <option>200</option>
                              <option>500</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Filter Option List End -->
      <div class="col-12 col-md-12 col-lg-8 t-wauto tw-100 mt20 transition-all order-2 order-lg-1">
         <div id="thori-scroll" class="table-responsive smart-table-style">
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th>
                        <div class="smart-checkbox-btn checkbox-strong-blue">
                           <input id="checkAll" type="checkbox">
                           <label for="checkAll"></label>
                        </div>
                     </th>
                     <th>Customer Email ID &nbsp;<i class="fa fa-sort"></i></th>
                     <th>Date &nbsp;<i class="fa fa-sort"></i></th>
                     <th>Reason</th>
                     <th>SMTP Unblocked</th>
                     <th>Actions</th>
                  </tr>
               </thead>
               <!-- Table Option Div Show --> 
               <div class="table-option-manage animated fadeIn">
                  <ul class="list-inline f-14 w400 mb0">
                     <li class="list-inline-item"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Unblock"><i class="icon-unlock"></i> Unblock</a></li>
                  </ul>
               </div>
               <!-- Table Option Div end --> 
               <tbody>
                  <tr>
                     <td>
                        <div class="smart-checkbox-btn checkbox-strong-blue">
                           <input id="tcheck1" type="checkbox" class="checkbox-active">
                           <label for="tcheck1"></label>
                        </div>
                     </td>
                     <td>jayprakash@saglus.com</td>
                     <td>16 March 2020 at 12:05 PM</td>
                     <td>Contact Unapproved</td>
                     <td>1</td>
                     <td><a href="#" class="base-btn default-btn-theme btn-h30">Unblock</a></td>
                  </tr>
                  <tr>
                     <td>
                        <div class="smart-checkbox-btn checkbox-strong-blue">
                           <input id="tcheck2" type="checkbox" class="checkbox-active">
                           <label for="tcheck2"></label>
                        </div>
                     </td>
                     <td>naved@saglus.com</td>
					 <td>16 March 2020 at 12:05 PM</td>
                     <td>Email Bounce</td>
                     <td>1</td>
                     <td><a href="#" class="base-btn default-btn-theme btn-h30">Unblock</a></td>
                  </tr>
				  <tr>
                     <td>
                        <div class="smart-checkbox-btn checkbox-strong-blue">
                           <input id="tcheck3" type="checkbox" class="checkbox-active">
                           <label for="tcheck3"></label>
                        </div>
                     </td>
                     <td>jayprakash@saglus.com</td>
					 <td>16 March 2020 at 12:05 PM</td>
                     <td>Contact Unapproved</td>
                     <td>0</td>
                     <td><a href="#" class="base-btn default-btn-theme btn-h30">Unblock</a></td>
                  </tr>
                  <tr>
                     <td>
                        <div class="smart-checkbox-btn checkbox-strong-blue">
                           <input id="tcheck4" type="checkbox" class="checkbox-active">
                           <label for="tcheck4"></label>
                        </div>
                     </td>
                     <td>naved@saglus.com</td>
					 <td>16 March 2020 at 12:05 PM</td>
                     <td>Email Bounce</td>
                     <td>1</td>
                     <td><a href="#" class="base-btn default-btn-theme btn-h30">Unblock</a></td>
                  </tr>
                  
               </tbody>
            </table>
         </div>
         <!-- Pagination Div Start -->
         <div class="d-flex justify-content-between flex-wrap f-14 mt15 mt-md30">
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
                  <li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i> </a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </a></li>
                  <li><a href="#" class="active">6</a></li>
                  <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> </a></li>
               </ul>
            </div>
         </div>
         <!-- Pagination Div End -->	
      </div>
      <!-- Filteration Div start -->
      <div class="col-12 col-md-12 col-lg-4 col-xl-4 white-bg filter-div-select transition-all mt15 mt-md30 order-1 order-lg-2">
         <div class="border radius5 relative">
            <a class="filter-hide remove-icon d-gblue-clr t-decoration-none" href="javascript:vodi(0)"><i class="icon-cross f-12"></i></a>
            <!-- Header -->
            <div class="p15 p-md30 clearfix">
               <!-- Heading  -->
               <div class="f-16 f-md-18">Add Filter
                  <span class="f-12 f-md-14 relative ml15">
                  <a href="#" class="s-blue-clr t-decoration-none">Clear</a>
                  </span>
               </div>
               <!-- Filteration list -->
               <div class="d-flex justify-content-between mt15 mt-md30">
                  <div class="w-100 mr15 filter-single-width">
                     <select class="selectpicker f-14" title="Choose">
                        <option>Date</option>
                        <option>Email</option>
                     </select>
                  </div>
                  <div class="align-self-center mt4 d-flex justify-content-between">
                     <a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
                  </div>
               </div>
               <!-- 
               <div class="mt5 mt-md20 clearfix">
                  <ul class="list-inline f-14 w400 mb0">
                     <li class="list-inline-item vl-gblue-bg radius5 custom-tags-pad d-gblue-clr mt10">Added Date &nbsp;<a href="#" class="t-decoration-none d-gblue-clr" data-dismiss="alert" aria-label="close"><i class="icon-cross f-12"></i></a>
                     </li>
                     <li class="list-inline-item vl-gblue-bg radius5 custom-tags-pad d-gblue-clr mt10">Modified Date &nbsp;<a href="#" class="t-decoration-none d-gblue-clr"><i class="icon-cross f-12"></i></a>
                     </li>
                  </ul>
               </div>-->
            </div>
            <!-- Header End -->
            <div class="filter-scrollbar mCustomScrollbar" data-mcs-theme="inset-3">
               <div class="clearfix filter-divide-bg">
                  <div class="d-flex justify-content-between">
                     <div class="w-100 mr15 filter-single-width">
                        <select class="selectpicker f-14" title="Select Date">
                           <option>Date</option>
                        </select>
                     </div>
                     <div class="align-self-center mt4 d-flex justify-content-between">
                        <a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
                     </div>
                  </div>
                  <div class="form-group mb0">
                     <select class="selectpicker mt5 f-14" title="Is equal to">
                        <option>Is equal to 1</option>
                        <option>Is equal to 2</option>
                        <option>Is equal to 3</option>
                     </select>
                  </div>
                  <div class="form-group mb0 smart-form f-14">
                     <input type="text" class="caleran-ex-1 form-control f-14 border-top-0" readonly data-plugin-options='{"rangeOrientation":true,"showButtons":true}' placeholder="Choose Date"/>
                  </div>
               </div>
               <!-- And or div -->
               <div class="p15 py-md15 px-md30">
                  <div class="row">
                     <div class="col-12 col-md-2 col-lg-2 col-xl-3 d-none d-md-block">
                        <div class="andor-seperator mt16"></div>
                     </div>
                     <div class="col-12 col-md-8 col-lg-8 col-xl-6 p0 text-center">
                        <div class="switch-field f14 w400">
                           <input id="visitors-and" name="visitors" value="and" type="radio">
                           <label for="visitors-and" class="switch_left mb0">And</label>
                           <input id="visitors-or" name="visitors" value="or" type="radio">
                           <label for="visitors-or" class="switch_right mb0">Or</label>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2 col-xl-3 d-none d-md-block">
                        <div class="andor-seperator mt16"></div>
                     </div>
                  </div>
               </div>
               <div class="clearfix filter-divide-bg">
                  <div class="d-flex justify-content-between">
                     <div class="w-100 mr15 filter-double-width">
                        <select class="selectpicker f-14" title="Select Email">
                           <option>Email</option>
                        </select>
                     </div>
                     <div class="align-self-center mt4 d-flex justify-content-between">
                        <a href="#" class="f-16 filter-delete-icon mr10"><i class="icon-delete"></i></a><a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
                     </div>
                  </div>
                  <div class="form-group mb0">
                     <select class="selectpicker mt5 f-14" title="Is equal to">
                        <option>Equal</option>
                        <option>Not Equal</option>
                        <option>Start With</option>
                        <option>Not Start With</option>
                        <option>End With</option>
                        <option>Not End With</option>
                        <option>Contains</option>
                        <option>Not Contains</option>
                     </select>
                  </div>
                   <div class="form-group mb0 smart-form f-14">
					   <input type="text" class="form-control border-top-0" placeholder="Enter Title">
					</div>
               </div>
               </div>
         </div>
      </div>
      <!-- Filteration Div end -->	
   </div>
</div>
<!-- Footer Include File -->
<?php include '../../../../smart/html/includes/dcp-footer.php'; ?>
<!-- Footer Include File end -->