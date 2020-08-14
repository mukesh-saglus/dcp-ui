<!-- Header Include File -->
<?php include '../../../smart/html/includes/dcp-header-final.php'; ?>
<!-- Header Include File end -->
<!-- SMS Stylesheet -->
<link rel="stylesheet" href="../../css/cart.css">
<!-- SMS Stylesheet end -->
<div class="container-fluid p15 p-md30  pt-md10">
	<div class="row align-items-center">
		<div class="col-12 mb10">
			<div class="d-flex align-items-center flex-wrap">
				<ul class="stepwizard-style4 f-14 w400">
					<li><a href="#"><i class="icon-home f-14"></i></a>
					</li>
					<li><a href="#"><span>Sell</span></a>
					</li>
					<li><a href="#" class="p-blue-clr"><span>Abandoned Carts</span></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-12 col-md-7">	<span class="f-md-24 f-20 lato-font">Abandoned Carts </span> &nbsp;	<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="lightgrey mt5">Here you are manage your all funnel</p>
		</div>
		<div class="col-12 col-md-5 mt10 mt-md0 text-center text-md-right">
			<!-- <a href="javascript:void(0)" class="base-btn default-btn mt10 mt-md0 mr5">Import History</a> -->	
			<!-- <a href="#" class="base-btn blue-btn" data-toggle="modal" data-target="#createLevelModal"><i class="icon-add-new f-18 align-middle"></i>&nbsp;&nbsp; New Order </a> -->	
		</div>
	</div>
	<div class="row mt-md30 mt15">
		<!-- Filter Option List Start -->
		<div class="col-12">
			<div class="row">
				<div class="col-md-3 col-lg-4 col-xl-3 bs-h40 mb10 mb-md0 smart-form">
					<select class="selectpicker f-14" title="All Abandoned Carts (400)">
						<option>All Abandoned Carts (400)</option>
						<option>Recently added Abandoned Carts (10)</option>
						<option>Recently modified Abandoned Carts (15)</option>
						<option>Abandoned Carts added in last 07 days (10)</option>
						<option>Abandoned Carts added in last 30 days (10)</option>
					</select>
				</div>
				<div class="col-md-9 offset-md-0 col-lg-8 col-xl-9">
					<div class="row">
						<div class="col-md-3 col-lg-3 col-xl-2 offset-xl-0 mb10 mb-md0 smart-form bs-h40">
							<select class="selectpicker f-14" title="Status">
								<option>In process</option>
								<option>Cancelled</option>
								<option>Pending</option>
							</select>
						</div>
						<div class="col-md-3 col-lg-3 col-xl-4 offset-xl-0 mb10 mb-md0 smart-form">
							<div class="input-group calendar-input-group">
								<input type="text" class="caleran-ex-1 form-control f-14 field-h40" id="target-cal" readonly="" data-plugin-options="{&quot;rangeOrientation&quot;:true,&quot;showButtons&quot;:true}" placeholder="Choose Date">	<span class="input-group-btn caleran-show">
							<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
							</span>
							</div>
						</div>
						<div class="col-md-3 col-lg-3 col-xl-4 mb10 mb-md0">
							<div class="smart-search-field">
								<div class="input-group">
									<input class="form-control" placeholder="Search" type="text">
									<div class="input-group-append">
										<button class="btn" type="submit"> <i class="fa fa-search"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-lg-3 col-xl-2">
							<div class="row">
								<div class="col-4 col-md-3 col-lg-4 d-flex align-self-center d-md-none d-lg-block f-14">Show</div>
								<div class="col-8 col-md-12 col-lg-8 bs-h40">
									<select class="selectpicker f-14">
										<option>04</option>
										<option>08</option>
										<option>12</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Filter Option List End -->
		<div class="col-12 mt20">
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
							<th>User ID</th>
							<th>Customer Email</th>
							<th>Status</th>
							<th>Last Modification</th>
							<th>Total Items</th>
							<th>Item Title &nbsp;<i class="fa fa-sort"></i></th>
							<th>Price &nbsp;<i class="fa fa-sort"></i></th>
							<th>Actions</th>
						</tr>
					</thead>
					<!-- Table Option Div Show -->
					<div class="table-option-manage animated fadeIn">
						<ul class="list-inline f-14 w400 mb0">
							<li class="list-inline-item"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Export"><i class="icon-export"></i> Export</a>
							</li>
							<li class="list-inline-item"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i> Delete</a>
							</li>
						</ul>
					</div>
					<!-- Table Option Div end -->
					<tbody>
						<tr>
							<td>
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="tcheck2" type="checkbox" class="checkbox-active">
									<label for="tcheck2"></label>
								</div>
							</td>
							<td>24782</td>
							<td>abc@abc.com</td>
							<td>Successful</td>
							<td>02 May 2020 at 02:15 PM</td>
							<td>24984</td>
							<td><a href="#" class="p-blue-clr t-decoration-none">Item Name 1</a></td>
							<td>$49</td>
							<td>
								<ul class="table-action">
									<li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a>
									</li>
									<li class="action-menu"><a href="#" class="action-item" title="Show"><i class="icon-show"></i></a>
									</li>
									<li class="action-menu"><a href="#" class="action-item" title="Export"><i class="icon-export"></i></a>
									</li>
									<li class="action-menu table-action-dropdown">
										<a href="javascript:" class="dropdown-toggle action-item" data-toggle="dropdown"> <span data-toggle="tooltip" data-placement="top" data-original-title="More"><i class="icon-more"></i></span> 
										</a>
										<ul class="dropdown-menu dropdown-menu-right" role="menu">
											<li><a href="#" data-toggle="modal" data-target="#deleteModal">Delete</a>
											</li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="tcheck3" type="checkbox" class="checkbox-active">
									<label for="tcheck3"></label>
								</div>
							</td>
							<td>24745</td>
							<td>abc@abc.com</td>
							<td>Successful</td>
							<td>02 May 2020 at 02:15 PM</td>
							<td>32584</td>
							<td><a href="#" class="p-blue-clr t-decoration-none">Item Name 2</a></td>
							<td>$59</td>
							<td>
								<ul class="table-action">
									<li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a>
									</li>
									<li class="action-menu"><a href="#" class="action-item" title="Show"><i class="icon-show"></i></a>
									</li>
									<li class="action-menu"><a href="#" class="action-item" title="Export"><i class="icon-export"></i></a>
									</li>
									<li class="action-menu table-action-dropdown">
										<a href="javascript:" class="dropdown-toggle action-item" data-toggle="dropdown"> <span data-toggle="tooltip" data-placement="top" data-original-title="More"><i class="icon-more"></i></span> 
										</a>
										<ul class="dropdown-menu dropdown-menu-right" role="menu">
											<li><a href="#" data-toggle="modal" data-target="#deleteModal">Delete</a>
											</li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="tcheck4" type="checkbox" class="checkbox-active">
									<label for="tcheck4"></label>
								</div>
							</td>
							<td>26582</td>
							<td>abc@abc.com</td>
							<td>Successful</td>
							<td>02 May 2020 at 02:15 PM</td>
							<td>32654</td>
							<td><a href="#" class="p-blue-clr t-decoration-none">Item Name 3</a></td>
							<td>$69</td>
							<td>
								<ul class="table-action">
									<li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a>
									</li>
									<li class="action-menu"><a href="#" class="action-item" title="Show"><i class="icon-show"></i></a>
									</li>
									<li class="action-menu"><a href="#" class="action-item" title="Export"><i class="icon-export"></i></a>
									</li>
									<li class="action-menu table-action-dropdown">
										<a href="javascript:" class="dropdown-toggle action-item" data-toggle="dropdown"> <span data-toggle="tooltip" data-placement="top" data-original-title="More"><i class="icon-more"></i></span> 
										</a>
										<ul class="dropdown-menu dropdown-menu-right" role="menu">
											<li><a href="#" data-toggle="modal" data-target="#deleteModal">Delete</a>
											</li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="tcheck5" type="checkbox" class="checkbox-active">
									<label for="tcheck5"></label>
								</div>
							</td>
							<td>24785</td>
							<td>abc@abc.com</td>
							<td>Successful</td>
							<td>02 May 2020 at 02:15 PM</td>
							<td>33584</td>
							<td><a href="#" class="p-blue-clr t-decoration-none">Item Name 4</a></td>
							<td>$79</td>
							<td>
								<ul class="table-action">
									<li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a>
									</li>
									<li class="action-menu"><a href="#" class="action-item" title="Show"><i class="icon-show"></i></a>
									</li>
									<li class="action-menu"><a href="#" class="action-item" title="Export"><i class="icon-export"></i></a>
									</li>
									<li class="action-menu table-action-dropdown">
										<a href="javascript:" class="dropdown-toggle action-item" data-toggle="dropdown"> <span data-toggle="tooltip" data-placement="top" data-original-title="More"><i class="icon-more"></i></span> 
										</a>
										<ul class="dropdown-menu dropdown-menu-right" role="menu">
											<li><a href="#" data-toggle="modal" data-target="#deleteModal">Delete</a>
											</li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- Pagination Div Start -->
			<div class="d-flex justify-content-between flex-wrap f-14 mt15 mt-md30">
				<div class="d-flex justify-content-start align-items-center mb5">Show	<span class="bs-h40 entries-width px15">
				<select class="selectpicker" >
					<option>04</option>
					<option>08</option>
					<option>12</option>
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
			<!-- Pagination Div End -->
		</div>
	</div>
</div>
<!-- Footer Include File -->
<?php include '../../../smart/html/includes/dcp-footer.php'; ?>
<!-- Footer Include File end -->







 
