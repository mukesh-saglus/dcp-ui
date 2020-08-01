<!------- Smart Header Include File---------->
<?php include '../includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<!------- Header Start----------->
<div class="container-fluid p15 px-md30 py-md30">
	<div class="row">
		<div class="col-12 col-md-7 align-self-center">
		<span class="f-20 f-md-24 lato-font">General Settings </span>&nbsp; <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
		<p class="gblue-clr f-14 w400 mt5">Configure your general account settings</p>
		</div>
		
	</div>
</div>
<!------- Header End ----------->

<!------- Tabs Start ----------->
<ul class="nav tabs-style3 f-14 f-md-16 w-100 relative" role="tablist">
	<li class="nav-item ml15 ml-md30">
	<a class="nav-link active lh110" href="general-linked-account.php">
		<span class="d-none d-md-block">Linked Account<br>
		<span class="f-12 w300">20 Linked Account</span>
		</span>
		<span class="d-block d-md-none"><i class="icon-linked-account f-18"></i></span></a>
	</li>
<li class="nav-item">
	<a class="nav-link lh110" href="general-social-account.php">	
		<span class="d-none d-md-block">Social Account<br>
		<span class="f-12 w300">Fill your social user name or Id</span>
		</span>
		<span class="d-block d-md-none"><i class="icon-social-account f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="general-session.php">
		<span class="d-none d-md-block">Session<br>
		<span class="f-12 w300">20 Sessions</span>
		</span>
		<span class="d-block d-md-none"><i class="icon-session f-18"></i></span>
	</a>
</li>
</ul>
<!------- Tabs End ----------->


<div class="container-fluid p15 p-md30">
<!------- Segment Audience Details Section Start----------->
	<div class="col-12 p0">
		<!--- Filteration Div ---->
		<div class="row mt-md30">
			<div class="col-md-4 col-lg-4 col-xl-3 bs-h40 mb10 mb-md0 smart-form">
				<select class="selectpicker f-14" title="All Accounts (400)">
					<option>All Accounts (400)</option>
					<option>Recently added Account (10)</option>
					<option>Recently modified Account (15)</option>
					<option>Account added in last 07 days (10)</option>
					<option>Account added in last 30 days (10)</option>
				</select>
			</div>
			<div class="col-md-8 col-lg-8 col-xl-9">
				<div class="row">
					<div class="col-md-4 col-lg-4 col-xl-4 offset-xl-2 mb10 mb-md0 bs-h40 smart-form">
						<select class="selectpicker f-14" title="Select Profile">
							<option>Select Profile 1</option>
							<option>Select Profile 2</option>
							<option>Select Profile 3</option>
							<option>Select Profile 4</option>
							<option>Select Profile 5</option>
						</select>
					</div>
					<div class="col-md-5 col-lg-5 col-xl-4 mb10 mb-md0">
						<div class="smart-search-field">
							<div class="input-group">
								<input class="form-control" placeholder="Search" type="text">
								<div class="input-group-append">
									<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-lg-3 col-xl-2">
						<div class="row">
							<div class="col-4 col-md-3 col-lg-4 d-flex align-self-center d-md-none d-lg-block f-14">Show</div>
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
		<!----- Table Data --------->
		<div class="row mt15 mt-md30">
			<div class="col-12">
			<!------- Library Grid View------>
				<div class="table-responsive smart-table-style mb15 mb-md30 thori-scroll">
					<table class="table table-bordered">
					<thead>
					  <tr>
						<th><div class="smart-checkbox-btn checkbox-strong-blue">
							<input id="checkAll" type="checkbox">
							<label for="checkAll"></label>
						  </div></th>
						 <th></th>
						<th>Name &nbsp;<i class="fa fa-sort"></i></th>
						<th>Account Email Address &nbsp;<i class="fa fa-sort"></i></th>
						<th>Business Name</th>
						<th>Profile</th>
						<th>Status &nbsp;<i class="fa fa-sort"></i></th>
						<th>Actions</th>
					  </tr>
					</thead>
					 <!----- Table Option Div Show----> 
					<div class="table-option-manage animated fadeIn">
						<ul class="list-inline f-14 w400 mb0">
						<li class="list-inline-item"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Delete"><i class="icon-delete"></i> Delete</a></li>
						</ul>
					</div>
					 <!----- Table Option Div end---->
					<tbody>
					  <tr>
						<td><div class="smart-checkbox-btn checkbox-strong-blue">
							<input id="tcheck2" type="checkbox" class="checkbox-active">
							<label for="tcheck2"></label>
						  </div></td>
						  <td><img src="../../../../images/email-pic.png" class="img-fluid img-circle"></td>
						<td><a href="#" class="p-blue-clr t-decoration-none">Anurag Sharma</a></td>
						<td>sharmaanurag@gmail.com</td>
						<td>Eduncle<br>
							Eduncle<br>
							Eduncle
						</td>
						<td>Main<br>
							Only Projects All Apps<br>
							notify Without Project
						</td>
						<td><span class="base-btn sl-green-bg white-clr btn-h25 cursor-auto px10 f-12">&nbsp; Active &nbsp;</span></td>
						<td><ul class="table-action">
							<li class="action-menu"><a href="#" class="action-item" title="View"><i class="icon-show"></i></a></li>
							<li class="action-menu"><a href="#" class="action-item" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i></a></li>
						  </ul></td>
					  </tr>
					  <tr>
						<td><div class="smart-checkbox-btn checkbox-strong-blue">
							<input id="tcheck3" type="checkbox" class="checkbox-active">
							<label for="tcheck3"></label>
						  </div></td>
						<td><span class="caption s-blue-bg">S</span></td>
						<td><a href="#" class="p-blue-clr t-decoration-none">Abhishek Jain</a></td>
						<td>abhishekjain@gmail.com</td>
						<td>BizoMart</td>
						<td>bizomart.com</td>
						<td><span class="base-btn vi-red-bg white-clr btn-h25 cursor-auto px10 f-12">Inactive</span></td>
						<td><ul class="table-action">
							<li class="action-menu"><a href="#" class="action-item" title="View"><i class="icon-show"></i></a></li>
							<li class="action-menu"><a href="#" class="action-item" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i></a></li>
						  </ul></td>
					  </tr>
					  <tr>
						<td><div class="smart-checkbox-btn checkbox-strong-blue">
							<input id="tcheck3" type="checkbox" class="checkbox-active">
							<label for="tcheck3"></label>
						  </div></td>
						<td><span class="caption p-yellow-bg">G</span></td>
						<td><a href="#" class="p-blue-clr t-decoration-none">Gaurav Sharma</a></td>
						<td>gauravsharma@gmail.com</td>
						<td>Saglus Smart</td>
						<td>saglus.com</td>
						<td><span class="base-btn sl-green-bg white-clr btn-h25 cursor-auto px10 f-12">&nbsp; Active &nbsp;</span></td>
						<td><ul class="table-action">
							<li class="action-menu"><a href="#" class="action-item" title="View"><i class="icon-show"></i></a></li>
							<li class="action-menu"><a href="#" class="action-item" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i></a></li>
						  </ul></td>
					  </tr>
					</tbody>
					</table>
				</div>

				 <!----- Pagination Div Start----->
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
			   <!----- Pagination Div End----->		
			</div>
		</div>
	</div>
</div>
<!------- Segment Audience Details Section End----------->		

<!------- Smart Footer Include File---------->
<?php include '../includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->