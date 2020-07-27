<!------- BMS Main Header Include File---------->
<?php include '../../../../smart/html/includes/smart-header-bms.php'; ?>
<!------- BMS Main Header Include File end---------->

<!------- BMS Stylesheet------=------->
<link rel="stylesheet" href="../../../css/bms.css">
<!-------BMS Stylesheet end---------->


<!--CKEditor Library -->
<script src="<?php echo $basedir; ?>vendors/ckeditor/ckeditor.js"></script>
<script src="<?php echo $basedir; ?>vendors/ckeditor/samples/js/sample.js"></script>

<div class="container-fluid p15 p-md30">
	<div class="row align-items-center">
		<div class="col-12 col-md-7">
		<span class="f-20 f-md-24 lato-font">Order Management</span> &nbsp;
		<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
		<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
		<p class="gblue-clr f-14 w400 mt5">Here you are manage your all accounts details</p>
		</div>
		<div class="col-12 col-md-5 text-center text-md-right mt10 mt-md0">
		<a href="javascript:void(0)" class="base-btn blue-btn" data-toggle="modal" data-target="#neworderModal"><i class="icon-add-new f-18 align-middle"></i>&nbsp;&nbsp; New Order</a>
		</div>
	</div>


   <div class="row mt-md30 mt15">
			<!----Filter Option List Start--->
          <div class="col-12">            
            <div class="row">
              <div class="col-md-4 col-lg-4 col-xl-3 bs-h40 mb10 mb-md0">
				<select class="selectpicker f-14" title="All Orders (150)">
					<option>All Orders (150)</option>
					<option>Recently added Orders (25)</option>
					<option>Orders added in last 7 days (32)</option>
					<option>Orders added in last 30 days (45)</option>
                </select>
              </div>
              <div class="col-md-8 offset-md-0 col-lg-8 col-xl-6 offset-xl-3 offset-lg-0">
                <div class="row">
                  <div class="col-md-4 col-lg-4 col-xl-4 mb10 mb-md0 pr15 pr-md15 text-right">
                    <button type="button" class="base-btn default-btn btn-xs-block filter-list-open f-14">Add Filter &nbsp;<i class="icon-filter" aria-hidden="true"></i> </button>
                  </div>
                  <div class="col-md-5 col-lg-5 col-xl-5 mb10 mb-md0 pr15 pl15 pr-md15 pl-md15">
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
            <div class="table-responsive smart-table-style">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="checkAll" type="checkbox">
                        <label for="checkAll"></label>
                      </div></th>					 
                    <th>Order ID &nbsp;<i class="fa fa-sort"></i></th>
					<th>Package Subscriber &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Price &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Payment Mode &nbsp;<i class="fa fa-sort"></i></th>
					 <th>Solution - Package  Name &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Order Status &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Payment Status &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Delivery Status &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Order Date & Time &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Action</th>
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
                    <td><a href="#" class="p-blue-clr t-decoration-none">#123456789</a></td>
					<td>demo@mail.com</td>
                    <td>$ 77 /M</td>
                    <td>Paypal</td>
					<td>Smart Lead Pro</td>
                    <td><i class="icon-in-process p-yellow-clr"></i>&nbsp; In Review</td>
                    <td><i class="icon-pending p-yellow-clr"></i>&nbsp; Pending</td>
                    <td><i class="icon-pending p-yellow-clr"></i>&nbsp; Pending</td>
                    <td>22 Nov 2018 at 12:50 Pm</td>
                    <td>
					<ul class="table-action">
						<li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
						<li class="action-menu"><a href="#" class="action-item" title="Export"><i class="icon-export"></i></a></li>
						<li class="action-menu table-action-dropdown"> <a class="dropdown-toggle action-item" data-toggle="dropdown" aria-expanded="false"><span data-toggle="tooltip" data-placement="top" title="" data-original-title="More"><i class="icon-status"></i></span> </a>
                          <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li><a href="#">Initiate</a></li>
                            <li><a href="#">Denied</a></li>
                            <li><a href="#">Inactive Package</a></li>
							<li><a href="#" id="profile-mail">Send This Order</a></li>
							<li><a href="#" data-toggle="modal" data-target="#Deliverorder">Deliver This Order</a></li>
                          </ul>
                        </li>
					</ul>
					</td>
                  </tr>
				  <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck2" type="checkbox" class="checkbox-active">
                        <label for="tcheck2"></label>
                    <td><a href="#" class="p-blue-clr t-decoration-none">#123456789</a></td>
					<td>demo@mail.com</td>
                    <td>$ 77 /M</td>
                    <td>Paypal</td>
					<td>Smart Lead Pro</td>
                    <td><i class="icon-tick s-green-clr"></i>&nbsp; Successful</td>
                    <td><i class="icon-tick s-green-clr"></i>&nbsp; Successful</td>
                    <td><i class="icon-in-process p-yellow-clr"></i>&nbsp; In Progress</td>
                    <td>22 Nov 2018 at 12:50 Pm</td>
                    <td>
					<ul class="table-action">
						<li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
						<li class="action-menu"><a href="#" class="action-item" title="Export"><i class="icon-export"></i></a></li>
						<li class="action-menu table-action-dropdown"> <a class="dropdown-toggle action-item" data-toggle="dropdown" aria-expanded="false"><span data-toggle="tooltip" data-placement="top" title="" data-original-title="More"><i class="icon-status"></i></span> </a>
                          <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li><a href="#">Initiate</a></li>
                            <li><a href="#">Denied</a></li>
							<li><a href="#">Inactive Package</a></li>
							<li><a href="#" id="profile-mail">Send This Order</a></li>
							  <li><a href="#" data-toggle="modal" data-target="#Deliverorder">Deliver This Order</a></li>
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
                    <td><a href="#" class="p-blue-clr t-decoration-none">#123456789</a></td>
					<td>demo@mail.com</td>
                    <td>$ 77 /M</td>
                    <td>Paypal</td>
					<td>Smart Lead Pro</td>
                    <td><i class="icon-initiated s-cyan-clr"></i>&nbsp; Initiated</td>
                    <td><i class="icon-cross vi-red-clr f-12"></i>&nbsp; Failed</td>
                    <td><i class="icon-tick s-green-clr"></i>&nbsp; Delivered</td>
                    <td>22 Nov 2018 at 12:50 Pm</td>
                    <td>
					<ul class="table-action">
						<li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
						<li class="action-menu"><a href="#" class="action-item" title="Export"><i class="icon-export"></i></a></li>
						<li class="action-menu table-action-dropdown"> <a class="dropdown-toggle action-item" data-toggle="dropdown" aria-expanded="false"><span data-toggle="tooltip" data-placement="top" title="" data-original-title="More"><i class="icon-status"></i></span> </a>
                          <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li><a href="#">Initiate</a></li>
                            <li><a href="#">Denied</a></li>
							<li><a href="#">Inactive Package</a></li>
							<li><a href="#" id="profile-mail">Send This Order</a></li>
							  <li><a href="#" data-toggle="modal" data-target="#Deliverorder">Deliver This Order</a></li>
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
                    <td><a href="#" class="p-blue-clr t-decoration-none">#123456789</a></td>
					<td>demo@mail.com</td>
                    <td>$ 77 /M</td>
                    <td>Paypal</td>
					<td>Smart Lead Pro</td>
                    <td><i class="icon-cross vi-red-clr f-12"></i>&nbsp; Denied</td>
                    <td><i class="icon-refunded l-red-clr"></i>&nbsp; Refunded</td>
                    <td><i class="icon-cross vi-red-clr f-12"></i>&nbsp; Canceled</td>
                    <td>22 Nov 2018 at 12:50 Pm</td>
                    <td>
					<ul class="table-action">
						<li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
						<li class="action-menu"><a href="#" class="action-item" title="Export"><i class="icon-export"></i></a></li>
						<li class="action-menu table-action-dropdown"> <a class="dropdown-toggle action-item" data-toggle="dropdown" aria-expanded="false"><span data-toggle="tooltip" data-placement="top" title="" data-original-title="More"><i class="icon-status"></i></span> </a>
                          <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li><a href="#">Initiate</a></li>
                            <li><a href="#">Denied</a></li>
							<li><a href="#">Inactive Package</a></li>
							<li><a href="#" id="profile-mail">Send This Order</a></li>
							  <li><a href="#" data-toggle="modal" data-target="#Deliverorder">Deliver This Order</a></li>
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
                    <td><a href="#" class="p-blue-clr t-decoration-none">#123456789</a></td>
					<td>demo@mail.com</td>
                    <td>$ 77 /M</td>
                    <td>Paypal</td>
					<td>Smart Lead Pro</td>
                    <td><i class="icon-cross vi-red-clr f-12"></i>&nbsp; Canceled</td>
                    <td><i class="icon-refunded l-red-clr"></i>&nbsp; Refunded</td>
                    <td><i class="icon-cross gblue-clr f-12"></i>&nbsp; Disable</td>
                    <td>22 Nov 2018 at 12:50 Pm</td>
                    <td>
					<ul class="table-action">
						<li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
						<li class="action-menu"><a href="#" class="action-item" title="Export"><i class="icon-export"></i></a></li>
						<li class="action-menu table-action-dropdown"> <a class="dropdown-toggle action-item" data-toggle="dropdown" aria-expanded="false"><span data-toggle="tooltip" data-placement="top" title="" data-original-title="More"><i class="icon-status"></i></span> </a>
                          <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li><a href="#">Initiate</a></li>
                            <li><a href="#">Denied</a></li>
							<li><a href="#">Inactive Package</a></li>
							<li><a href="#" id="profile-mail">Send This Order</a></li>
							  <li><a href="#" data-toggle="modal" data-target="#Deliverorder">Deliver This Order</a></li>
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
				   <select class="selectpicker f-14" title="Choose">
					  <option>Package Subscriber</option>
					  <option>Package</option>
					  <option>Solution</option>
					  <option>Payment Mode</option>
					  <option>Status</option>
					  <option>Date & Time</option>
				   </select>
				</div>
				<div class="align-self-center mt4 d-flex justify-content-between">
				   <a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
				</div>
			 </div>
		  </div>
		  <!------- Header End------>
		  <div class="filter-scrollbar mCustomScrollbar" data-mcs-theme="inset-3">
			 <div class="clearfix filter-divide-bg">
				<div class="d-flex justify-content-between mb10">
				   <div class="w-100 mr15 filter-single-width">
					  <select class="selectpicker f-14" title="Package Subscriber">
						 <option>Package Subscriber</option>
					  </select>
				   </div>
				   <div class="align-self-center mt4 d-flex justify-content-between">
					<a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
				   </div>
				</div>
				<div class="form-group mb0">
				   <select class="selectpicker f-14" title="Is equal to">
					  <option>Is equal 1</option>
					  <option>Is equal 2</option>
					  <option>Is equal 3</option>
				   </select>
				</div>
				<div class="form-group mb0 smart-form f-14">
               <input type="text" class="form-control border-top-0" placeholder="Enter Company">
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
					  <select class="selectpicker f-14" title="Package">
						 <option>Package</option>
					  </select>
				   </div>
				   <div class="align-self-center mt4 d-flex justify-content-between">
					  <a href="#" class="f-16 filter-delete-icon mr10"><i class="icon-delete"></i></a><a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
				   </div>
				</div>
				<div class="form-group mb0">
				 <select class="selectpicker f-14" title="Choose">
					  <option>Package 1</option>
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
					  <select class="selectpicker f-14" title="Solution">
						 <option>Solution</option>
					  </select>
				   </div>
				   <div class="align-self-center mt4 d-flex justify-content-between">
					  <a href="#" class="f-16 filter-delete-icon mr10"><i class="icon-delete"></i></a><a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
				   </div>
				</div>
				<div class="form-group mb0">
				 <select class="selectpicker f-14" title="Choose">
					  <option>Solution 1</option>
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
						 <input id="visitors-and6" name="visitors6" value="and" type="radio">
						 <label for="visitors-and6" class="switch_left mb0">And</label>
						 <input id="visitors-or6" name="visitors6" value="or" type="radio">
						 <label for="visitors-or6" class="switch_right mb0">Or</label>
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
					  <select class="selectpicker f-14" title="Payment Mode">
						 <option>Payment Mode</option>
					  </select>
				   </div>
				   <div class="align-self-center mt4 d-flex justify-content-between">
					  <a href="#" class="f-16 filter-delete-icon mr10"><i class="icon-delete"></i></a><a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
				   </div>
				</div>
				<div class="form-group mb0">
				   <select class="selectpicker f-14" title="Choose">
					  <option>Paypal</option>
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
					  <select class="selectpicker f-14" title="Order Status">
						 <option>Order Status</option>
					  </select>
				   </div>
				   <div class="align-self-center mt4 d-flex justify-content-between">
					  <a href="#" class="f-16 filter-delete-icon mr10"><i class="icon-delete"></i></a><a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
				   </div>
				</div>
				<div class="form-group mb0">
				   <select class="selectpicker f-14" title="Choose">
                   	  <option>In Review</option>
					  <option>Successful</option>
                      <option>Initiated</option>
                      <option>Canceled</option>
					  <option>Denied</option>					  
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
					  <select class="selectpicker f-14" title="Payment Status">
						 <option>Payment Status</option>
					  </select>
				   </div>
				   <div class="align-self-center mt4 d-flex justify-content-between">
					  <a href="#" class="f-16 filter-delete-icon mr10"><i class="icon-delete"></i></a><a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
				   </div>
				</div>
				<div class="form-group mb0">
				   <select class="selectpicker f-14" title="Choose">
                   	  <option>Pending</option>
					  <option>Successful</option>
                      <option>Failed</option>
                      <option>Refunded</option>					  				  
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
					  <select class="selectpicker f-14" title="Delivery Status">
						 <option>Delivery Status</option>
					  </select>
				   </div>
				   <div class="align-self-center mt4 d-flex justify-content-between">
					  <a href="#" class="f-16 filter-delete-icon mr10"><i class="icon-delete"></i></a><a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
				   </div>
				</div>
				<div class="form-group mb0">
				   <select class="selectpicker f-14" title="Choose">
                   	  <option>Pending</option>
					  <option>In Progress</option>
                      <option>Delivered</option>
                      <option>Canceled</option>
					  <option>Disable</option>					  
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
					  <select class="selectpicker f-14" title="Date & Time">
						 <option>Date & Time</option>
					  </select>
				   </div>
				   <div class="align-self-center mt4 d-flex justify-content-between">
					  <a href="#" class="f-16 filter-delete-icon mr10"><i class="icon-delete"></i></a><a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
				   </div>
				</div>
				<div class="form-group mb0 smart-form caleran-h50 f-14">
			   <input type="text" class="caleran-ex-1 form-control f-14" readonly="" data-plugin-options='{"rangeOrientation":true,"showButtons":true}' placeholder="Choose Date">
            </div>
			 </div>  
			 
		  </div>
	   </div>
		</div>
		<!--- Filteration Div end---->	
			
        </div>
      </div>


<!-- Email Editor Starts -->
<div class="me-container col-12 col-md-8 col-lg-6 col-xl-5 p0" id="me-section">

<div class="me-header">
<div class="row">
<div class="col-4 white-clr lato-font f-14">Send Mail</div>
<div class="col-8 text-right t-decoration-none f-12 mt3">
<a href="#!" class="white-clr d-btn-inline-block" id="me-minimize" title="minimize"><i class="icon-minus"></i></a> &nbsp; &nbsp; 
<a href="#!" class="white-clr d-btn-inline-block" id="me-fullscreen" title="full screen"><i class="icon-fullscreen-two"></i></a><a href="#!" class="white-clr d-btn-inline-block" id="me-smallscreen" title="exit full screen" style="display:none;"><i class="icon-exit-fullscreen-two"></i></a> &nbsp; &nbsp; 
<a href="#!" class="white-clr d-inline-block" id="me-close" title="close window"><i class="icon-cross"></i></a>
</div>
</div>
</div>

<div class="me-body">
	<div class="me-to-box">
		<div class="row">
			<div class="col-12 f-12">
				<div class="row">
					<div class="col-2 d-gblue-clr lato-font f-14 mt8">To :</div>
					<div class="col-10 f-12 pl0">
						<div class="f-14 to-email-field">
						anurag@saglusinfo.com
						</div>
					</div>
				</div>
			</div>
	</div>
	</div>


<div class="me-subject-box">
	<div class="row">
		<div class="col-4 col-md-2 d-gblue-clr lato-font f-14 mt6">Subject :</div>
		<div class="col-8 col-md-10 pl0">
			<div class="smart-form">
			<input type="text" class="form-control f-14" placeholder="Enter Subject" name="subject" value="Regarding packagename_order OrderID">
			</div>
		</div>
	</div>
</div>

<div class="mail-editor">
	<div id="mail-editor">
		<h1>Hello {account name}</h1>
	<p>Here is your order link from where you can buy the product</p>
	<p><b>Order Link :</b> http://www.smart/apps/BMS/html/subscription/order-management/order-management.php</p>
	</div>
	<!-- File Attachement box -->
	<div class="attached-boxarea">
		<div class="p15">
		  <div class="w400 vd-gblue-clr f-14 f-md-16 mb5 text-center">Attachment</div>
		  <p class="f-12 d-gblue-clr text-center">Upload your attachment file here</p>
		 </div> 
		  <div class="mCustomScrollbar pb-md30 pb15 attached-boxscroll" data-mcs-theme="inset-3">
				<div class="p15 p-md30 pt0 pt-md0">
					
					<div class="dropzone-uploader p15 p-md20 d-gblue-clr text-center">
					<i class="icon-others l-gblue-clr f-35"></i>
						<p class="f-12 w400 mt15">Drag and drop or <a href="#" class="p-blue-clr t-decoration-none"><u>browse</u></a> your files.</p>
					</div>
					
					<!--------- Drag Hover Div Start---->
					<div class="dropzone-uploader p15 p-md20 vd-gblue-clr text-center f-12 align-items-center d-flex justify-content-center">
					<i class="icon-drop-file-here f-35 d-gblue-clr mr15"></i> Drop Files Here
					</div>
					
					<p class="f-12 d-gblue-clr mt10"><i class="icon-information"></i>  Maximum 5 files can be uploaded at a time</p>				
				

					<!----- Files Listing----------->
					<div class="d-flex justify-content-start mt15 mt-md20">
						<div class="d-flex align-items-top"><i class="icon-doc f-25 d-gblue-clr"></i></div>
						<div class="align-self-top ml10 break-all">
							<h5 class="vd-gblue-clr w400 f-12">Salecopy_210.doc</h5>
							<p class="d-gblue-clr w400 f-10 mt8">5.7 MB of 7.8 MB </p>
						</div>
						<div class="d-flex align-items-center ml20">
						<a href="#" class="d-gblue-clr t-decoration-none"><i class="icon-cross f-10"></i></a>
						</div>
					</div>

					<div class="d-flex justify-content-start mt15 mt-md20">
						<div class="d-flex align-items-top"><i class="icon-doc f-25 d-gblue-clr"></i></div>
						<div class="align-self-top ml10 w-100 break-all">
							<h5 class="vd-gblue-clr w400 f-12">Salecopy_210.doc</h5>
							<div class="rounded-progress mt8">
							<div class="rounded-progress-bar s-green-bg" style="width:90%"></div>
							</div>
							<div class="d-gblue-clr w400 f-10 mt8 d-flex justify-content-between flex-wrap">
							<div>5.7 MB of 7.8 MB</div>
							<div>45% Completed</div>
							</div>
						</div>
						<div class="d-flex align-items-center ml20">
						<a href="#" class="d-gblue-clr t-decoration-none"><i class="icon-cross f-10"></i></a>
						</div>
					</div>
				</div>
			</div>
		   
	</div>
</div>


<div class="me-actions-box">
<div class="row align-items-center">
<div class="col-4 col-md-5 d-gblue-clr lato-font f-18">
<a href="#!" class="d-gblue-clr d-inline-block t-decoration-none upload-icon active"><i class="icon-text-attachment"></i></a>
</div>
<div class="col-8 col-md-7 text-right">
<ul class="mail-editor-buttons f-14">
<li class="list-link"><a href="#" class="list-inline-link white-btn cancel-button t-decoration-none">Cancel</a></li>
<li class="list-link"><a href="#" class="list-inline-link blue-btn send-button t-decoration-none">Send</a></li>
</ul>
</div>
</div>
</div>
</div>



<script>
var ckEditorID;
ckEditorID = 'mail-editor';
CKEDITOR.config.forcePasteAsPlainText = true;
CKEDITOR.replace(ckEditorID,
{
    toolbar :
    [
      {
        items : [ 'Font','FontSize','Bold','Italic','Underline','TextColor','BGColor','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','BulletedList','NumberedList','Image']
      }
    ],toolbarLocation: 'top'
});			
initSample();
</script>

</div>
<!-- Email Editor Ends -->


<div class="screen-overlay-dark" style="display:none;"></div>
  
<!------- Smart Footer Include File ---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->