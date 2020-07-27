<!------- Smart Header Include File---------->
<?php include '../includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<!--------- NVD3 Library Graph ------------------------>
<link href="<?php echo $basedir; ?>vendors/nvd3/nv.d3.css" rel="stylesheet" type="text/css">
<link href="<?php echo $basedir; ?>vendors/nvd3/nvd-style.css" rel="stylesheet" type="text/css">
<script src="<?php echo $basedir; ?>vendors/nvd3/d3.min.js"></script>
<script src="<?php echo $basedir; ?>vendors/nvd3/nv.d3.min.js"></script>
<script src="<?php echo $basedir; ?>vendors/nvd3/stream_layers.js"></script>

<!------- Header Start----------->
<div class="container-fluid p15 px-md30 py-md30">
	<div class="row">
	      <div class="col-12">
         <ul class="stepwizard-style2 f-20 f-md-24 w400 lato-font">
            <li> <a href="#">Segments Analytics</a> </li>
            <li> <a href="#">Segment Name</a> </li>
         </ul>
         <p class="f-14 gblue-clr w400">Check detailed analytics of your segment</p>
      </div>
		
	</div>
</div>
<!------- Header End ----------->

<!------- Tabs Start ----------->
<ul class="nav tabs-style3 f-14 f-md-16 w-100 relative" role="tablist">
	<li class="nav-item ml15 ml-md30">
	<a class="nav-link active lh110" href="single-segment-analytics-overview.php">
		<span class="d-none d-md-block">Overview</span>
		<span class="d-block d-md-none"><i class="icon-overview f-18"></i></span></a>
	</li>
<li class="nav-item">
	<a class="nav-link lh110" href="single-segment-analytics-technology.php">	
		<span class="d-none d-md-block">Technology</span>
		<span class="d-block d-md-none"><i class="icon-technology f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="single-segment-analytics-location.php">
		<span class="d-none d-md-block">Location</span>
		<span class="d-block d-md-none"><i class="icon-location f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="single-segment-analytics-results.php">
	<span class="d-none d-md-block">Goal</span>
	<span class="d-block d-md-none"><i class="icon-result f-18"></i></span>
	</a>
</li>
<li class="d-flex align-items-center view-detail-img-icon"><a href="#"><img src="../../../../images/view-details-icon.png" class="img-fluid"></a> </li>	
</ul>
<!------- Tabs End ----------->


<div class="container-fluid p15 p-md30">
<!------- Audiences Overview Section Start----------->
	<div class="col-12 p0">
	<div class="row">
		<!------ Title Header-------------->
		<div class="col-12 col-md-8 col-lg-9 mb15 mb-md0">
			<h4>Audiences Overview</h4>
			<p class="f-14 lh140 d-gblue-clr w400">Check audience overview at a glance for the selected period </p>
		</div>
		<div class="col-12 col-md-4 col-lg-3 bs-h40 f-16 align-self-center smart-form">
       <input type="text" class="caleran-ex-1 field-h40 form-control" readonly  data-plugin-options='{"rangeOrientation":true,"showButtons":true}' />
		</div>
		
	</div>
	<div class="row mt15 mt-md40">
		<!---- Data Coloum--------->
		<div class="col-12 col-md-3 col-lg-3 mb15 mb-md0">
			<div class="media">
				<span class="d-flex align-items-center overview-icon">
					<img class="img-fluid d-block mx-auto" src="../../images/all-audiences-icon.png">
				</span>
				<div class="media-body align-self-center ml15 ml-md30">
					<h5 class="vd-gblue-clr w400">Visits</h5>
					<p class="lato-font vd-gblue-clr w700 f-30 f-lg-36 mt8">2.5 K</p>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-3 col-lg-3 mb15 mb-md0">
			<div class="media">
				<span class="d-flex align-items-center overview-icon">
					<img class="img-fluid d-block mx-auto" src="../../images/unique-audiences-icon.png">
				</span>
				<div class="media-body align-self-center ml15 ml-md30">
					<h5 class="vd-gblue-clr w400">Total Visitors</h5>
					<p class="lato-font vd-gblue-clr w700 f-30 f-lg-36 mt8">250</p>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-3 col-lg-3 mb15 mb-md0">
			<div class="media">
				<span class="d-flex align-items-center overview-icon">
					<img class="img-fluid d-block mx-auto" src="../../images/known-audiences-icon.png">
				</span>
				<div class="media-body align-self-center ml15 ml-md30">
					<h5 class="vd-gblue-clr w400">Total Contacts</h5>
					<p class="lato-font vd-gblue-clr w700 f-30 f-lg-36 mt8">400</p>
				</div>
			</div>
		</div>
			<div class="col-12 col-md-3 col-lg-3">
			<div class="media">
				<span class="d-flex align-items-center overview-icon">
					<img class="img-fluid d-block mx-auto" src="../../images/total-conversion-icon.png">
				</span>
				<div class="media-body align-self-center ml15 ml-md30">
					<h5 class="vd-gblue-clr w400">Total Conversion</h5>
					<p class="lato-font vd-gblue-clr w700 f-30 f-lg-36 mt8">180</p>
				</div>
			</div>
		</div>
	</div>
	</div>
<!------- Audiences Overview Section End----------->
	
<!------- Segment overview and visitors graph Section Start----------->
	<div class="col-12 p0 mt15 mt-md80">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<!------ Title Header-------------->
				<div class="col-12 mb15 mb-md0 p0">
					<h4>Segments Details</h4>
					<p class="f-14 lh140 d-gblue-clr w400">View quick stats of your segment instantly</p>
				<div class="l-gblue-border mCustomScrollbar segment-details-scrollbar radius3 mt15 mt-md30 w-100" data-mcs-theme="inset-3">
					<div class="p15 p-md30 pb-md0">
					<div class="media"> <span class="d-flex align-items-center"><img class="img-fluid d-block mx-auto" src="../../../../images/visitors-icon.png"></span>
								<div class="media-body align-self-center ml30 d-gblue-clr">
									<h5 class="w900 f-14">Visits/Users</h5>
									<p class="w400 f-14 mt10 lh180 ml24"><b>All users</b> from, <b>Rajasthan, India</b></p>
								</div>
							</div>
					
							<div class="media mt15 mt-md30"> <span class="d-flex align-items-center"><img class="img-fluid d-block mx-auto" src="../../../../images/beahaviour-icon.png"></span>
								<div class="media-body align-self-center ml30 d-gblue-clr">
									<h5 class="w900 f-14">Behaviour</h5>
									<p class="w400 f-14 mt10 lh180 ml24"><b>Time spend</b> on the page<br>
									is equal to <b>00:30 sec</b></p>
								</div>
							</div>
					
					<div class="media mt15 mt-md30"> <span class="d-flex align-items-center"><img class="img-fluid d-block mx-auto" src="../../../../images/tehnology-icon.png"></span>
								<div class="media-body align-self-center ml30 d-gblue-clr">
									<h5 class="w900 f-14">Technology</h5>
									<p class="w400 f-14 mt10 lh180 ml24">
									having WEB device<br>
									where <b>Device</b> is <b>Desktop</b><br>
									Operating system is <b>Windows</b>
									</p>
								</div>
							</div>
					</div>
				</div>
				</div>
				
				
				
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<!------ Title Header-------------->
				<div class="col-12 mb15 mb-md0 p0 w-100">
					<h4>Visits Graph</h4>
					<p class="f-14 lh140 d-gblue-clr w400">View Visits graph from this segment & others</p>
					
					<div class="l-gblue-border p15 p-md30 radius3 mt15 mt-md30 w-100 mh-355 relative">
						<div class="row">
							<div class="col-md-12 mt15 mt-md0">
								<div id="visitor-chart" class="mx-auto">
									<svg></svg>
								</div>
							</div>	
						</div>
						<div class="d-xl-block d-flex segment-overview f-14">
							<div class="mb-xl20 mb0"><i class="icon-dot f-8 s-green-clr mr15"></i> Segment</div>
							<div class="ml15 ml-xl0"><i class="icon-dot f-8 l-gblue-clr  mr15"></i> Other</div>
						</div>
					</div>
				</div>
			</div>
		
		</div>
		
			
	</div>
<!------- Segment overview and visitors graph Section End----------->	
	
<!------- Segment Traffic Graph Section Start----------->
	<div class="col-12 p0 mt15 mt-md80">
	<div class="row">
		<!------ Title Header-------------->
		<div class="col-12 col-md-8 col-lg-9 mb15 mb-md0">
			<h4>Segment Traffic Graph</h4>
			<p class="f-14 lh140 d-gblue-clr w400">Check traffic stats for the selected period</p>
		</div>
		<div class="col-12 col-md-4 col-lg-3 bs-h40 f-16 align-self-center d-flex justify-content-between dropdown caret-icon-none simple-dropdown show-submenu">
		<!----- Graph Type icon section------->	
			<a href="#" class="align-self-center dropdown-toggle d-gblue-clr t-decoration-none" id="dropdownMenuDivider" data-toggle="dropdown"><i class="icon-more"></i> &nbsp;</a>
  
   		<div class="dropdown-menu dropdown-menu-right right-arrow">
	   <div class="p15 p-md20">
		   <div class="f-14 f-md-16 w400 d-gblue-clr mb15">View As</div>
			<ul class="nav tabs-style2 f-14" role="tablist">
			  <li class="nav-item"> <a class="nav-link active" data-toggle="tab" data-target="#line">&nbsp; Line &nbsp;</a> </li>
			  <li class="nav-item"> <a class="nav-link" data-toggle="tab" data-target="#bar">&nbsp; Bar &nbsp;</a> </li>
			  <li class="nav-item"> <a class="nav-link show" data-toggle="tab" data-target="#table">&nbsp; Table &nbsp;</a> </li>
			</ul>
			</div>
   		</div>
			
		<!----- Select Date Selectpicker------->
			<div class="col-9 p0 smart-form">
       <input type="text" class="caleran-ex-1 field-h40 form-control" readonly  data-plugin-options='{"rangeOrientation":true,"showButtons":true}' /></div>
			<!----- refresh Icon------->	
			<span class="align-self-center">
				<a href="#" class="d-gblue-clr t-decoration-none">
				<i class="icon-refresh"></i></a>
			</span>
		</div>
	</div>
	<div class="row mt15 mt-md30">
		<!---- Tabs Graph Coloum--------->
		<div class="col-12">
		<div class="tab-content">
          <div id="line" class="tab-pane active">
             <div id="trafficgraph">
            <svg></svg>
            </div>
          </div>
          <div id="bar" class="tab-pane fade">
             <div id="bargraph">
            <svg></svg>
            </div>
          </div>
          <div id="table" class="tab-pane fade">
              <div id="thori-scroll" class="table-responsive smart-table-style">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Time</th>
                    <th>Visits</th>
                    <th>Visitors</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Monday</td>
                    <td>2000</td>
                    <td>500</td>
                  </tr>
				  <tr>
                    <td>Monday</td>
                    <td>2000</td>
                    <td>500</td>
                  </tr>
				  <tr>
                    <td>Monday</td>
                    <td>2000</td>
                    <td>500</td>
                  </tr>
                </tbody>
              </table>
            </div>
			
          </div>
        </div>	
		</div>
		
	</div>
	</div>
<!------- Segment Traffic Graph Section End----------->
	
<!------- Segment Audience Details Section Start----------->
	<div class="col-12 p0 mt15 mt-md50 details-section">
	<div class="row">
		<!------ Title Header-------------->
		<div class="col-12 mb15 mb-md0">
			<h4>Segment Audience Details</h4>
			<p class="f-14 lh140 d-gblue-clr w400">View detailed overview of your segment audience</p>
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
					<div class="col-12 col-md-4 col-lg-4 col-xl-4 offset-xl-2  bs-h40 f-16 align-self-center smart-form mb15 mb-md0">
						<input type="text" class="caleran-ex-1 field-h40 form-control" readonly  data-plugin-options='{"rangeOrientation":true,"showButtons":true}' />
					</div>
					<div class="col-md-4 col-lg-4 col-xl-4 mb10 mb-md0">
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
<!------- Segment Audience Details Section End----------->		
	
</div>


<!------- Smart Footer Include File---------->
<?php include '../includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->