<!------- BMS Main Header Include File---------->
<?php include '../../../../smart/html/includes/smart-header-bms.php'; ?>
<!------- BMS Main Header Include File end---------->

<!------- BMS Stylesheet------=------->
<link rel="stylesheet" href="../../../css/bms.css">
<!-------BMS Stylesheet end---------->

<div class="container-fluid p15 p-md30">
	<div class="row align-items-center">
		<div class="col-12 col-md-7">
		<span class="f-20 f-md-24 lato-font">Solutions</span> &nbsp;
		<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
		<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
		<p class="gblue-clr f-14 w400 mt5">Here you can manage your all solutions</p>
		</div>
		<div class="col-12 col-md-5 text-center text-md-right mt10 mt-md0">
		<a href="#" data-toggle="modal" data-target="#solutionModal" class="base-btn blue-btn"><i class="icon-add-new f-18 align-middle"></i>&nbsp;&nbsp; New Solution</a>
		</div>
	</div>


   <div class="row mt-md30 mt15">
			<!----Filter Option List Start--->
          <div class="col-12">            
            <div class="row">
              <div class="col-md-4 col-lg-4 col-xl-3 bs-h40 mb10 mb-md0">
                <select class="selectpicker f-14" title="All Solutions (150)">
					<option>All Solutions (150)</option>
					<option>Recently added Solutions (25)</option>
					<option>Solutions added in last 7 days (32)</option>
					<option>Solutions added in last 30 days (45)</option>
                </select>
              </div>
              <div class="col-md-8 offset-md-0 col-lg-8 col-xl-6 offset-xl-3 offset-lg-0">
                <div class="row">
                  <div class="col-md-9 offset-lg-4 col-lg-5 offset-xl-4 col-xl-5 mb10 mb-md0 pr15 pl15 pr-md15 pl-md15">
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
                      <div class="col-4 col-md-3 col-lg-4 d-flex align-self-center d-md-none d-lg-block f-14 text-lg-right">Show</div>
                      <div class="col-8 col-md-12 col-lg-8 bs-h40">
                        <select class="selectpicker f-14">
                          <option>10</option>
                          <option>20</option>
                          <option>30</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
			<!----Filter Option List End--->
			
          <div class="col-12 col-md-12 col-lg-8 t-wauto tw-100 mt20 transition-all order-2 order-lg-1">
            <div id="thori-scroll" class="table-responsive smart-table-style">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="checkAll" type="checkbox">
                        <label for="checkAll"></label>
                      </div></th>					 
                    <th>Solution Name</th>
					<th>No of Packages &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Subscribers &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Actions</th>
                  </tr>
                </thead>
				 <!----- Table Option Div Show----> 
                <div class="table-option-manage animated fadeIn">
					<ul class="list-inline f-14 w400 mb0">
					<li class="list-inline-item"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Export"><i class="icon-export"></i> Export</a></li>
					</ul>
				</div>
				 <!----- Table Option Div end----> 
                <tbody>
                  <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck1" type="checkbox" class="checkbox-active">
                        <label for="tcheck1"></label>
                      </div></td>
                    <td>Smart Lead</td>
					<td>6</td>
                    <td>30</td>
                    <td>
					<ul class="table-action">
						<li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
						<li class="action-menu"><a href="#" class="action-item" title="View Package"><i class="icon-package f-16"></i></a></li>
						<li class="action-menu"><a href="#"  data-toggle="modal" data-target="#NewSolutionModal" class="action-item" title="View"><i class="icon-show f-16"></i></a></li>
						<li class="action-menu table-action-dropdown"> <a href="javascript:" class="dropdown-toggle action-item" data-toggle="dropdown">  <span data-toggle="tooltip" data-placement="top" title="More" data-original-title="More"><i class="icon-more"></i></span> </a>
						<ul class="dropdown-menu dropdown-menu-right" role="menu">
							<li><a href="#" data-toggle="modal" data-target="#deleteModal">Delete</a></li>
						</ul>
						</li>
					</ul>
					</td>
                  </tr>
				  <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck2" type="checkbox" class="checkbox-active">
                        <label for="tcheck2"></label>
                      </div></td>
                    <td>Smart Lead</td>
					<td>5</td>
                    <td>300</td>
                    <td>
					<ul class="table-action">
						<li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
						<li class="action-menu"><a href="#" class="action-item" title="View Package"><i class="icon-package f-16"></i></a></li>
						<li class="action-menu"><a href="#"  data-toggle="modal" data-target="#NewSolutionModal" class="action-item" title="View"><i class="icon-show f-16"></i></a></li>
						<li class="action-menu table-action-dropdown"> <a href="javascript:" class="dropdown-toggle action-item" data-toggle="dropdown">  <span data-toggle="tooltip" data-placement="top" title="More" data-original-title="More"><i class="icon-more"></i></span> </a>
						<ul class="dropdown-menu dropdown-menu-right" role="menu">
							<li><a href="#" data-toggle="modal" data-target="#deleteModal">Delete</a></li>
						</ul>
						</li>
					</ul>
					</td>
                  </tr>
				  <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck3" type="checkbox" class="checkbox-active">
                        <label for="tcheck3"></label>
                      </div></td>
                    <td>Smart Lead</td>
					<td>3</td>
                    <td>300</td>
                    <td>
					<ul class="table-action">
						<li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
						<li class="action-menu"><a href="#" class="action-item" title="View Package"><i class="icon-package f-16"></i></a></li>
						<li class="action-menu"><a href="#"  data-toggle="modal" data-target="#NewSolutionModal" class="action-item" title="View"><i class="icon-show f-16"></i></a></li>
						<li class="action-menu table-action-dropdown"> <a href="javascript:" class="dropdown-toggle action-item" data-toggle="dropdown">  <span data-toggle="tooltip" data-placement="top" title="More" data-original-title="More"><i class="icon-more"></i></span> </a>
						<ul class="dropdown-menu dropdown-menu-right" role="menu">
							<li><a href="#" data-toggle="modal" data-target="#deleteModal">Delete</a></li>
						</ul>
						</li>
					</ul>
					</td>
                  </tr>
				  <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck4" type="checkbox" class="checkbox-active">
                        <label for="tcheck4"></label>
                      </div></td>
                    <td>Smart Lead</td>
					<td>2</td>
                    <td>200</td>
                    <td>
					<ul class="table-action">
						<li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
						<li class="action-menu"><a href="#" class="action-item" title="View Package"><i class="icon-package f-16"></i></a></li>
						<li class="action-menu"><a href="#"  data-toggle="modal" data-target="#NewSolutionModal" class="action-item" title="View"><i class="icon-show f-16"></i></a></li>
						<li class="action-menu table-action-dropdown"> <a href="javascript:" class="dropdown-toggle action-item" data-toggle="dropdown">  <span data-toggle="tooltip" data-placement="top" title="More" data-original-title="More"><i class="icon-more"></i></span> </a>
						<ul class="dropdown-menu dropdown-menu-right" role="menu">
							<li><a href="#" data-toggle="modal" data-target="#deleteModal">Delete</a></li>
						</ul>
						</li>
					</ul>
					</td>
                  </tr>
				  <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck5" type="checkbox" class="checkbox-active">
                        <label for="tcheck5"></label>
                      </div></td>
                    <td>Smart Lead</td>
					<td>6</td>
                    <td>30</td>
                    <td>
					<ul class="table-action">
						<li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
						<li class="action-menu"><a href="#" class="action-item" title="View Package"><i class="icon-package f-16"></i></a></li>
						<li class="action-menu"><a href="#"  data-toggle="modal" data-target="#NewSolutionModal" class="action-item" title="View"><i class="icon-show f-16"></i></a></li>
						<li class="action-menu table-action-dropdown"> <a href="javascript:" class="dropdown-toggle action-item" data-toggle="dropdown">  <span data-toggle="tooltip" data-placement="top" title="More" data-original-title="More"><i class="icon-more"></i></span> </a>
						<ul class="dropdown-menu dropdown-menu-right" role="menu">
							<li><a href="#" data-toggle="modal" data-target="#deleteModal">Delete</a></li>
						</ul>
						</li>
					</ul>
					</td>
                  </tr>	
                </tbody>
              </table>
            </div>
			
			 <!----- Pagination Div Start ----->
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
			 <!----- Pagination Div End ------>	
			  
 </div>
			
		<!--- Filteration Div start---->
		<div class="col-12 col-md-12 col-lg-4 col-xl-4 white-bg filter-div-select transition-all mt15 mt-md30 order-1 order-lg-2">
		 <div class="border radius5 relative smart-form">
		  <a class="filter-hide remove-icon d-gblue-clr t-decoration-none" href="javascript:vodi(0)"><i class="icon-cross f-12"></i></a>
		  <!------ Header---->
		  <div class="p15 p-md30 clearfix">
			 <!-------- Heading ----->
			 <div class="f-16 f-md-18">Add Filter
				<span class="f-12 f-md-14 relative ml15">
				<a href="#" class="s-blue-clr t-decoration-none">Clear</a>
				</span>
			 </div>
			 <!------- Filteration list------------>
			 <div class="d-flex justify-content-between mt15 mt-md30">
				<div class="w-100 mr15 filter-single-width">
				   <select class="selectpicker f-14" title="Contact Name">
					  <option>Department</option>
					  <option>Status</option>
					  <option>Priority</option>
					  <option>Assigned</option>
					  <option>Group</option>
					  <option>Created on</option>
					  <option>Last Activity</option>
				   </select>
				</div>
				<div class="align-self-center mt4 d-flex justify-content-between">
				   <a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
				</div>
			 </div>
			 <!-------- Tags  ----->
			 <div class="mt5 mt-md20 clearfix">
				<ul class="list-inline f-14 w400 mb0">
				   <li class="list-inline-item vl-gblue-bg radius5 custom-tags-pad d-gblue-clr mt10">Added Date &nbsp;<a href="#" class="t-decoration-none d-gblue-clr" data-dismiss="alert" aria-label="close"><i class="icon-cross f-12"></i></a>
				   </li>
				   <li class="list-inline-item vl-gblue-bg radius5 custom-tags-pad d-gblue-clr mt10">Modified Date &nbsp;<a href="#" class="t-decoration-none d-gblue-clr"><i class="icon-cross f-12"></i></a>
				   </li>
				</ul>
			 </div>
			 <!-------- Tags end ----->
		  </div>
		  <!------- Header End------>
		  <div class="filter-scrollbar mCustomScrollbar" data-mcs-theme="inset-3">
			 <div class="clearfix filter-divide-bg">
				<div class="d-flex justify-content-between mb10">
				   <div class="w-100 mr15 filter-single-width">
					  <select class="selectpicker f-14" title="Department">
						 <option>Department</option>
					  </select>
				   </div>
				   <div class="align-self-center mt4 d-flex justify-content-between">
					<a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
				   </div>
				</div>



				<div class="form-group mb0">
				   <select class="selectpicker f-14" title="Sales">
					  <option>Sales</option>
					  <option>Is equal to 2</option>
					  <option>Is equal to 3</option>
				   </select>
				</div>
			 </div>
			 <!-------- And or div ------------>
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
				<div class="d-flex justify-content-between mb10">
				   <div class="w-100 mr15 filter-double-width">
					  <select class="selectpicker f-14" title="Status">
						 <option>Status</option>
					  </select>
				   </div>
				   <div class="align-self-center mt4 d-flex justify-content-between">
					  <a href="#" class="f-16 filter-delete-icon mr10"><i class="icon-delete"></i></a><a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
				   </div>
				</div>
				<div class="form-group mb0">
				   <select class="selectpicker f-14" title="Open">
					  <option>Open</option>
					  <option>Is equal to 2</option>
					  <option>Is equal to 3</option>
				   </select>
				</div>
			 </div>
			<!-------- And or div ------------>
			 <div class="p15 py-md15 px-md30">
				<div class="row">
				   <div class="col-12 col-md-2 col-lg-2 col-xl-3 d-none d-md-block">
					  <div class="andor-seperator mt16"></div>
				   </div>
				   <div class="col-12 col-md-8 col-lg-8 col-xl-6 p0 text-center">
					  <div class="switch-field f14 w400">
						 <input id="visitors-and1" name="visitors1" value="and" type="radio">
						 <label for="visitors-and1" class="switch_left mb0">And</label>
						 <input id="visitors-or1" name="visitors1" value="or" type="radio">
						 <label for="visitors-or1" class="switch_right mb0">Or</label>
					  </div>
				   </div>
				   <div class="col-12 col-md-2 col-lg-2 col-xl-3 d-none d-md-block">
					  <div class="andor-seperator mt16"></div>
				   </div>
				</div>
			 </div>
			 <div class="clearfix filter-divide-bg">
				<div class="d-flex justify-content-between mb10">
				   <div class="w-100 mr15 filter-double-width">
					  <select class="selectpicker f-14" title="Priority">
						 <option>Priority</option>
					  </select>
				   </div>
				   <div class="align-self-center mt4 d-flex justify-content-between">
					  <a href="#" class="f-16 filter-delete-icon mr10"><i class="icon-delete"></i></a><a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
				   </div>
				</div>
				<div class="form-group mb0">
				   <select class="selectpicker f-14" title="Urgent">
					  <option>Urgent</option>
					  <option>Is equal to 2</option>
					  <option>Is equal to 3</option>
				   </select>
				</div>
			 </div> 
			<!-------- And or div ------------>
			 <div class="p15 py-md15 px-md30">
				<div class="row">
				   <div class="col-12 col-md-2 col-lg-2 col-xl-3 d-none d-md-block">
					  <div class="andor-seperator mt16"></div>
				   </div>
				   <div class="col-12 col-md-8 col-lg-8 col-xl-6 p0 text-center">
					  <div class="switch-field f14 w400">
						 <input id="visitors-and2" name="visitors2" value="and" type="radio">
						 <label for="visitors-and2" class="switch_left mb0">And</label>
						 <input id="visitors-or2" name="visitors2" value="or" type="radio">
						 <label for="visitors-or2" class="switch_right mb0">Or</label>
					  </div>
				   </div>
				   <div class="col-12 col-md-2 col-lg-2 col-xl-3 d-none d-md-block">
					  <div class="andor-seperator mt16"></div>
				   </div>
				</div>
			 </div>
			 <div class="clearfix filter-divide-bg">
				<div class="d-flex justify-content-between mb10">
				   <div class="w-100 mr15 filter-double-width">
					  <select class="selectpicker f-14" title="Assigned to">
						 <option>Assigned to</option>
					  </select>
				   </div>
				   <div class="align-self-center mt4 d-flex justify-content-between">
					  <a href="#" class="f-16 filter-delete-icon mr10"><i class="icon-delete"></i></a><a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
				   </div>
				</div>
				<div class="form-group mb0">
				   <select class="selectpicker f-14" title="Assignee Name">
					  <option>Assignee Name</option>
					  <option>Is equal to 2</option>
					  <option>Is equal to 3</option>
				   </select>
				</div>
			 </div> 
			<!-------- And or div ------------>
			 <div class="p15 py-md15 px-md30">
				<div class="row">
				   <div class="col-12 col-md-2 col-lg-2 col-xl-3 d-none d-md-block">
					  <div class="andor-seperator mt16"></div>
				   </div>
				   <div class="col-12 col-md-8 col-lg-8 col-xl-6 p0 text-center">
					  <div class="switch-field f14 w400">
						 <input id="visitors-and3" name="visitors3" value="and" type="radio">
						 <label for="visitors-and3" class="switch_left mb0">And</label>
						 <input id="visitors-or3" name="visitors3" value="or" type="radio">
						 <label for="visitors-or3" class="switch_right mb0">Or</label>
					  </div>
				   </div>
				   <div class="col-12 col-md-2 col-lg-2 col-xl-3 d-none d-md-block">
					  <div class="andor-seperator mt16"></div>
				   </div>
				</div>
			 </div>
			 <div class="clearfix filter-divide-bg">
				<div class="d-flex justify-content-between mb10">
				   <div class="w-100 mr15 filter-double-width">
					  <select class="selectpicker f-14" title="Group">
						 <option>Group</option>
					  </select>
				   </div>
				   <div class="align-self-center mt4 d-flex justify-content-between">
					  <a href="#" class="f-16 filter-delete-icon mr10"><i class="icon-delete"></i></a><a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
				   </div>
				</div>
				<div class="form-group mb0">
				   <select class="selectpicker f-14" title="Smart Funnel">
					  <option>Smart Funnel</option>
					  <option>Is equal to 2</option>
					  <option>Is equal to 3</option>
				   </select>
				</div>
			 </div>
			 <!-------- And or div ------------>
			 <div class="p15 py-md15 px-md30">
				<div class="row">
				   <div class="col-12 col-md-2 col-lg-2 col-xl-3 d-none d-md-block">
					  <div class="andor-seperator mt16"></div>
				   </div>
				   <div class="col-12 col-md-8 col-lg-8 col-xl-6 p0 text-center">
					  <div class="switch-field f14 w400">
						 <input id="visitors-and4" name="visitors4" value="and" type="radio">
						 <label for="visitors-and4" class="switch_left mb0">And</label>
						 <input id="visitors-or4" name="visitors4" value="or" type="radio">
						 <label for="visitors-or4" class="switch_right mb0">Or</label>
					  </div>
				   </div>
				   <div class="col-12 col-md-2 col-lg-2 col-xl-3 d-none d-md-block">
					  <div class="andor-seperator mt16"></div>
				   </div>
				</div>
			 </div>
			 <div class="clearfix filter-divide-bg">
				<div class="d-flex justify-content-between mb10">
				   <div class="w-100 mr15 filter-double-width">
					  <select class="selectpicker f-14" title="Created On">
						 <option>Created On</option>
					  </select>
				   </div>
				   <div class="align-self-center mt4 d-flex justify-content-between">
					  <a href="#" class="f-16 filter-delete-icon mr10"><i class="icon-delete"></i></a><a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
				   </div>
				</div>
				<div class="form-group mb0">
					<div class="input-group singlecalendar-input-group">
						<input name="dob_primary" readonly="" class="form-control f-14" id="dob-primary-target" value="12/10/2016" placeholder="Date of Birth" type="text">
						<span class="input-group-btn" id="dob-primary">
						<button class="btn calendar-btn f-19" type="button"><i class="icon-calendar"></i></button>
						</span>
					</div>
				</div>
			 </div>  
			 <!-------- And or div ------------>
			 <div class="p15 py-md15 px-md30">
				<div class="row">
				   <div class="col-12 col-md-2 col-lg-2 col-xl-3 d-none d-md-block">
					  <div class="andor-seperator mt16"></div>
				   </div>
				   <div class="col-12 col-md-8 col-lg-8 col-xl-6 p0 text-center">
					  <div class="switch-field f14 w400">
						 <input id="visitors-and5" name="visitors5" value="and" type="radio">
						 <label for="visitors-and5" class="switch_left mb0">And</label>
						 <input id="visitors-or5" name="visitors5" value="or" type="radio">
						 <label for="visitors-or5" class="switch_right mb0">Or</label>
					  </div>
				   </div>
				   <div class="col-12 col-md-2 col-lg-2 col-xl-3 d-none d-md-block">
					  <div class="andor-seperator mt16"></div>
				   </div>
				</div>
			 </div>
			 <div class="clearfix filter-divide-bg">
				<div class="d-flex justify-content-between mb10">
				   <div class="w-100 mr15 filter-double-width">
					  <select class="selectpicker f-14" title="Last Activity">
						 <option>Last Activity</option>
					  </select>
				   </div>
				   <div class="align-self-center mt4 d-flex justify-content-between">
					  <a href="#" class="f-16 filter-delete-icon mr10"><i class="icon-delete"></i></a><a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
				   </div>
				</div>
				<div class="form-group mb0">
					<div class="input-group singlecalendar-input-group">
						<input name="dob_primary" readonly="" class="form-control f-14" id="dob-secondary-target" value="12/10/2016" placeholder="Date of Birth" type="text">
						<span class="input-group-btn" id="dob-secondary">
						<button class="btn calendar-btn f-19" type="button"><i class="icon-calendar"></i></button>
						</span>
					</div>
				</div>
			 </div>  
		  </div>
	   </div>
		</div>
		<!--- Filteration Div end---->	
			
        </div>
      </div>
<!------- Smart Footer Include File ---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->