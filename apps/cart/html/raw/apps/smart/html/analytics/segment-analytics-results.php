<!------- Smart Header Include File---------->
<?php include '../includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<!------- Header Start----------->
<div class="container-fluid p15 px-md30 py-md30">
	<div class="row">
		<div class="col-12">
			<span class="f-20 f-md-24 lato-font">Segment Analytics </span> &nbsp;
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="f-14 mt5 gblue-clr">Check analytics of your segments in details</p>
		</div>
	</div>
</div>
<!------- Header End ----------->

<!------- Tabs Start ----------->
<ul class="nav tabs-style3 f-14 f-md-16 w-100 relative" role="tablist">
<li class="nav-item ml15 ml-md30">
	<a class="nav-link lh110" href="segment-analytics-overview.php">
		<span class="d-none d-md-block">Overview</span>
		<span class="d-block d-md-none"><i class="icon-overview f-18"></i></span></a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="segment-analytics-technology.php">	
		<span class="d-none d-md-block">Technology</span>
		<span class="d-block d-md-none"><i class="icon-technology f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="segment-analytics-location.php">
		<span class="d-none d-md-block">Location</span>
		<span class="d-block d-md-none"><i class="icon-location f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link active lh110" href="segment-analytics-results.php">
	<span class="d-none d-md-block">Goal</span>
	<span class="d-block d-md-none"><i class="icon-result f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="segment-analytics-compare.php">
	<span class="d-none d-md-block">Compare</span>
	<span class="d-block d-md-none"><i class="icon-compare f-18"></i></span>
	</a>
</li>
</ul>
<!------- Tabs End ----------->


<div class="container-fluid p15 p-md30">
<!------- Segment Audience Details Section Start----------->
	<div class="col-12 p0">
	<div class="row">
		<!------ Title Header-------------->
		<div class="col-12 col-md-8 col-lg-9 mb15 mb-md0">
			<h4>Segment Audience Details</h4>
			<p class="f-14 lh140 d-gblue-clr w400">View detailed overview of your segment audience</p>
		</div>
		<div class="col-12 col-md-4 col-lg-3 bs-h40 f-16 align-self-center smart-form mb15 mb-md0">
       <input type="text" class="caleran-ex-1 field-h40 form-control" readonly  data-plugin-options='{"rangeOrientation":true,"showButtons":true}' />
		</div>
		
	</div>
		
		<!--- Filteration Div ---->
		<div class="row mt-md30">
			<div class="col-md-4 col-lg-4 col-xl-3 bs-h40 mb10 mb-md0">
				<select class="selectpicker f-14">
					<option>All Unique ID (400)</option>
					<option>Recently updated in 24 hours (500)</option>
					<option>Uploaded in last 24 hours (330)</option>
				</select>
			</div>
			<div class="col-md-8 col-lg-8 col-xl-9">
				<div class="row">
					<div class="col-md-8 col-lg-4 offset-lg-4 col-xl-4 offset-xl-6 mb10 mb-md0">
						<div class="smart-search-field">
							<div class="input-group">
								<input class="form-control" placeholder="Search" type="text">
								<div class="input-group-append">
									<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg-4 col-xl-2">
						<div class="row">
							<div class="col-3 col-md-4 col-lg-4 d-flex align-self-center f-14">Show</div>
							<div class="col-9 col-md-8 col-lg-8 bs-h40">
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
						<th>
							<div class="smart-checkbox-btn checkbox-strong-blue pull-left mt6">
								<input id="checkAll" type="checkbox">
								<label for="checkAll"></label>
							</div>
						</th>
						<th>Unique ID</th>
						<th>IP Address</th>
						<th>Name &nbsp;<i class="fa fa-sort"></i></th>
						<th>Email</th>
						<th>Location</th>
						<th>Browser</th>
						<th>Operating System</th>
						<th>Time Spent</th>
						<th>Visit</th>
						<th>Last Seen</th>
						<th>Actions</th>
					  </tr>

					</thead>
					  
					<div class="table-option-manage animated fadeIn ml10">
						<ul class="list-inline f-14 w400 mb0">
							<li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Export"><i class="icon-export"></i>&nbsp;  Export</a>
							</li>
						</ul>
					</div>
					 <!----- Table Option Div end---->


					<tbody>
					  <tr>
						<td width="3%"><div class="smart-checkbox-btn checkbox-strong-blue">
							<input id="lcheck2" type="checkbox" class="checkbox-active">
							<label for="lcheck2"></label>
						  </div></td>
						 <td>engage123</td>
						 <td>192.168.1.78</td>
						<td class="p-blue-clr">Anurag Sharma</td>
						<td>sharmaanurag@gmail.com</td>
						<td>India</td>
						<td>Google Chrome</td>
						<td>Windows</td>
						<td>01:50:00 Hrs</td>
						<td>2</td>
						<td>Nov 2, 2017 at 09:20:03 am</td>
						<td><ul class="table-action">
							 <li class="action-menu"><a href="#" class="action-item" title="Export"><i class="icon-export"></i></a></li>
						  </ul></td>
					  </tr>
						
						 <tr>
						<td width="3%"><div class="smart-checkbox-btn checkbox-strong-blue">
							<input id="lcheck3" type="checkbox" class="checkbox-active">
							<label for="lcheck3"></label>
						  </div></td>
						 <td>engage123</td>
						 <td>192.168.1.78</td>
						<td class="p-blue-clr">Abhishek Jain</td>
						<td>abhishekjain@gmail.com</td>
						<td>Canada</td>
						<td>Mozilla Firefox</td>
						<td>Windows</td>
						<td>01:50:00 Hrs</td>
						<td>2</td>
						<td>Nov 2, 2017 at 09:20:03 am</td>
						<td><ul class="table-action">
							 <li class="action-menu"><a href="#" class="action-item" title="Export"><i class="icon-export"></i></a></li>
						  </ul></td>
					  </tr>
						
						 <tr>
						<td width="3%"><div class="smart-checkbox-btn checkbox-strong-blue">
							<input id="lcheck4" type="checkbox" class="checkbox-active">
							<label for="lcheck4"></label>
						  </div></td>
						 <td>engage123</td>
						 <td>192.168.1.78</td>
						<td class="p-blue-clr">Gaurav Sharma</td>
						<td>gauravsharma@outlook.com</td>
						<td>UK</td>
						<td>Safari</td>
						<td>MAC</td>
						<td>01:50:00 Hrs</td>
						<td>2</td>
						<td>Nov 2, 2017 at 09:20:03 am</td>
						<td><ul class="table-action">
							 <li class="action-menu"><a href="#" class="action-item" title="Export"><i class="icon-export"></i></a></li>
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