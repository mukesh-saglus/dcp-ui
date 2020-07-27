<!-- Header Include File -->
<?php include '../../../../smart/html/includes/dcp-header-final.php'; ?>
<!-- Header Include File end -->

<!-- SMS Stylesheet -->
<link rel="stylesheet" href="../../../css/sms.css">
<!-- SMS Stylesheet end -->


<!-- NVD3 Library Graph -->
<link href="<?php echo $basedir; ?>vendors/nvd3/nv.d3.css" rel="stylesheet" type="text/css">
<link href="<?php echo $basedir; ?>vendors/nvd3/nvd-style.css" rel="stylesheet" type="text/css">
<script src="<?php echo $basedir; ?>vendors/nvd3/d3.min.js"></script>
<script src="<?php echo $basedir; ?>vendors/nvd3/nv.d3.min.js"></script>
<script src="<?php echo $basedir; ?>vendors/nvd3/stream_layers.js"></script>

<!-- Header Start-->
<div class="container-fluid p15 px-md30 py-md30">
	<div class="row align-items-center">
		<div class="col-12">
			<div class="d-flex align-items-center flex-wrap">
				<ul class="stepwizard-style2 f-18 f-sm-24 w400 lato-font mr15">
					<li> <a href="#"> Analytics</a> </li>
					<li> <a href="#"> SMS </a> </li>
				</ul>
				<div class="d-flex mt7">
					<a href="#" class="gblue-clr t-decoration-none f-17 mr5" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
					<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
				</div>
			</div>
			<p class="gblue-clr f-14 w400 mt5">Check analytics of your sms in details</p>
		</div>
	</div>
</div>
<!-- Header End -->

<!-- Tabs Start -->
<ul class="nav tabs-style3 f-14 f-md-16 w-100 relative" role="tablist">
	<li class="nav-item ml15 ml-md30">
	<a class="nav-link lh110" href="all-sms-overview-reports.php">
		<span class="d-none d-md-block">Overview</span>
		<span class="d-block d-md-none"><i class="icon-overview f-18"></i></span></a>
	</li>
<li class="nav-item">
	<a class="nav-link active lh110" href="all-sms-technology-reports.php">	
		<span class="d-none d-md-block">Technology</span>
		<span class="d-block d-md-none"><i class="icon-technology f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="all-sms-location-reports.php">	
		<span class="d-none d-md-block">Location</span>
		<span class="d-block d-md-none"><i class="icon-location f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="all-sms-link-activity.php">
		<span class="d-none d-md-block">Link Activity</span>
		<span class="d-block d-md-none"><i class="icon-link-activity f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="all-sms-subscriber-activity.php">
	<span class="d-none d-md-block">Subscriber Activity</span>
	<span class="d-block d-md-none"><i class="icon-person f-18"></i></span>
	</a>
</li>
<li class="d-flex align-items-center view-detail-img-icon"><a href="#" data-toggle="tooltip" data-placement="left"data-original-title="View In Details"><img src="<?php echo $basedir; ?>images/view-details-icon.png" class="img-fluid"></a> </li>
</ul>
<!-- Tabs End -->

<div class="container-fluid p15 p-md30">
<!-- Operating Systems Section Start-->
	<div class="col-12 p0">
	<div class="row">
		<!-- Title Header-->
		<div class="col-12 col-md-8 col-lg-9 mb15 mb-md0">
			<h4>Operating Systems</h4>
			<p class="f-14 lh140 d-gblue-clr w400">Top operating systems used by your visitors</p>
		</div>
		<div class="col-12 col-md-4 col-lg-3 bs-h40 f-16 align-self-center smart-form">
       <input type="text" class="caleran-ex-1 field-h40 form-control" readonly  data-plugin-options='{"rangeOrientation":true,"showButtons":true}' />
		</div>
		
	</div>
	<div class="row mt15 mt-md40">
		<!-- Data Coloum-->
		<div class="col-12 col-md-7 col-lg-8 mb15 mb-md0">
			<div class="table-responsive smart-table-style2 thori-scroll">
              <table class="table table-borderless">
                <thead class="w500">
                  <tr>
                    <th>Operating Systems Name</th>
                    <th>Opened SMS</th>
                    <th>Clicked SMS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img src="<?php echo $basedir; ?>images/andriod-icon.png" class="img-fluid mr30">Android</td>
                    <td>8000</td>
                    <td>5000</td>
                  </tr>
				  <tr>
                    <td><img src="<?php echo $basedir; ?>images/macintosh-icon.png" class="img-fluid mr30">Macintosh</td>
                    <td>8000</td>
                    <td>5000</td>
                  </tr>
				  <tr>
                    <td><img src="<?php echo $basedir; ?>images/windows-icon.png" class="img-fluid mr30">Windows</td>
                    <td>8000</td>
                    <td>5000</td>
                  </tr>
					 <tr>
                    <td><img src="<?php echo $basedir; ?>images/linux-icon.png" class="img-fluid mr30">Linux</td>
                    <td>8000</td>
                    <td>5000</td>
                  </tr>
					 <tr>
                    <td><img src="<?php echo $basedir; ?>images/ios-icon.png" class="img-fluid mr30">ios</td>
                    <td>8000</td>
                    <td>5000</td>
                  </tr>
					 <tr>
                    <td><img src="<?php echo $basedir; ?>images/other-icon.png" class="img-fluid mr30">Other</td>
                    <td>8000</td>
                    <td>5000</td>
                  </tr>
                </tbody>
              </table>
            </div>
		</div>
		<div class="col-12 col-md-5 col-lg-4 mt10 mt-md0 mb15 mb-md0 tech-pie-chart-dropdown text-right">
			<select class="selectpicker col-lg-9 col-xl-6 p0" title="Clicked SMS">
					<option>Opened SMS</option>
					<option>Clicked SMS</option>
			</select>
			<div id="os-chart" class="mt10">
				<svg></svg>
			</div>
		</div>
			
	</div>
	</div>
<!-- Operating Systems Section End-->
	
<!-- Browser Section Start-->
	<div class="col-12 p0 mt15 mt-md40">
	<div class="row">
		<!-- Title Header-->
		<div class="col-12 col-md-8 col-lg-9 mb15 mb-md0">
			<h4>Browser</h4>
			<p class="f-14 lh140 d-gblue-clr w400">Top browsers used by your visitors</p>
		</div>
		<div class="col-12 col-md-4 col-lg-3 bs-h40 f-16 align-self-center smart-form">
       <input type="text" class="caleran-ex-1 field-h40 form-control" readonly  data-plugin-options='{"rangeOrientation":true,"showButtons":true}' />
		</div>
		
	</div>
	<div class="row mt15 mt-md40">
		<!-- Data Coloum-->
		<div class="col-12 col-md-7 col-lg-8 mb15 mb-md0">
			<div class="table-responsive smart-table-style2 thori-scroll">
              <table class="table table-borderless">
                <thead class="w500">
                  <tr>
                    <th>Browser Name			</th>
                    <th>Opened SMS</th>
                    <th>Clicked SMS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img src="<?php echo $basedir; ?>images/chrome-icon.png" class="img-fluid mr30">Google Chrome</td>
                    <td>8000</td>
                    <td>5000</td>
                  </tr>
				  <tr>
                    <td><img src="<?php echo $basedir; ?>images/mozila-icon.png" class="img-fluid mr30">Mozilla Firefox</td>
                    <td>8000</td>
                    <td>5000</td>
                  </tr>
				  <tr>
                    <td><img src="<?php echo $basedir; ?>images/edge-icon.png" class="img-fluid mr30">Edge</td>
                    <td>8000</td>
                    <td>5000</td>
                  </tr>
					 <tr>
                    <td><img src="<?php echo $basedir; ?>images/safari-icon.png" class="img-fluid mr30">Safari</td>
                    <td>8000</td>
                    <td>5000</td>
                  </tr>
					 <tr>
                    <td><img src="<?php echo $basedir; ?>images/opera-icon.png" class="img-fluid mr30">Opera</td>
                    <td>8000</td>
                    <td>5000</td>
                  </tr>
					 <tr>
                    <td><img src="<?php echo $basedir; ?>images/otherbrow-icon.png" class="img-fluid mr30">Others</td>
                    <td>8000</td>
                    <td>5000</td>
                  </tr>
                </tbody>
              </table>
            </div>
		</div>
		<div class="col-12 col-md-5 col-lg-4 mt10 mt-md0 mb15 mb-md0 tech-pie-chart-dropdown text-right">
			<select class="selectpicker col-lg-9 col-xl-6 p0" title="Clicked SMS">
					<option>Opened SMS</option>
					<option>Clicked SMS</option>
			</select>
			<div id="browserchart" class="mt10">
				<svg></svg>
			</div>
		</div>
			
	</div>
	</div>
<!-- Browser Section End-->	
	
<!-- Devices Section Start-->
	<div class="col-12 p0 mt15 mt-md40">
	<div class="row">
		<!-- Title Header-->
		<div class="col-12 col-md-8 col-lg-9 mb15 mb-md0">
			<h4>Devices</h4>
			<p class="f-14 lh140 d-gblue-clr w400">Top devices used by your visitors to view your SMS</p>
		</div>
		<div class="col-12 col-md-4 col-lg-3 bs-h40 f-16 align-self-center smart-form">
       <input type="text" class="caleran-ex-1 field-h40 form-control" readonly  data-plugin-options='{"rangeOrientation":true,"showButtons":true}' />
		</div>
		
	</div>
	<div class="row mt15 mt-md40">
		<!-- Data Coloum-->
		<div class="col-12 col-md-7 col-lg-8 mb15 mb-md0">
			<div class="table-responsive smart-table-style2 thori-scroll">
              <table class="table table-borderless">
                <thead class="w500">
                  <tr>
                    <th>Devices Name</th>
                    <th>Opened SMS</th>
                    <th>Clicked SMS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img src="<?php echo $basedir; ?>images/desktop-icon.png" class="img-fluid mr30">Desktop</td>
                    <td>8000</td>
                    <td>5000</td>
                  </tr>
				  <tr>
                    <td><img src="<?php echo $basedir; ?>images/laptop-icon.png" class="img-fluid mr30">Laptop</td>
                    <td>8000</td>
                    <td>5000</td>
                  </tr>
				  <tr>
                    <td><img src="<?php echo $basedir; ?>images/androidphone-icon.png" class="img-fluid mr30">Android Phone</td>
                    <td>8000</td>
                    <td>5000</td>
                  </tr>
					 <tr>
                    <td><img src="<?php echo $basedir; ?>images/iphone-icon.png" class="img-fluid mr30">i Phone</td>
                    <td>8000</td>
                    <td>5000</td>
                  </tr>
					 <tr>
                    <td><img src="<?php echo $basedir; ?>images/ipad-icon.png" class="img-fluid mr30">i Pad</td>
                    <td>8000</td>
                    <td>5000</td>
                  </tr>
					 <tr>
                    <td><img src="<?php echo $basedir; ?>images/otherdevi-icon.png" class="img-fluid mr30">Others</td>
                    <td>8000</td>
                    <td>5000</td>
                  </tr>
                </tbody>
              </table>
            </div>
		</div>
		<div class="col-12 col-md-5 col-lg-4 mt10 mt-md0 mb15 mb-md0 tech-pie-chart-dropdown text-right">
			<select class="selectpicker col-lg-9 col-xl-6 p0" title="Clicked SMS">
					<option>Opened SMS</option>
					<option>Clicked SMS</option>
			</select>
			<div id="devices-chart" class="mt10">
			<svg></svg>
			</div>
		</div>
			
	</div>
	</div>
<!-- Devices Section End-->	
<!-- All Projects Section Start-->
	<div class="col-12 p0 mt15 mt-md40 details-section">
		<div class="row">
			<!-- Title Header-->
			<div class="col-12 mb15 mb-md0">
				<h4>All Projects</h4>
				<p class="f-14 lh140 d-gblue-clr w400">View quick stats of your projects instantly</p>
			</div>
		</div>
		<!-- Filteration Div -->
		<div class="row mt-md30">
			<div class="col-md-4 col-lg-4 col-xl-3 bs-h40 mb10 mb-md0">
				<select class="selectpicker f-14" title="All Projects (1000)">
				  <option>All Projects (1000)</option>
				  <option>Recently added Projects (10)</option>
                  <option>Recently modified Projects (15)</option>
                  <option>Projects added in last 07 days (10)</option>
				  <option>Projects added in last 30 days (10)</option>
				</select>
			</div>
			<div class="col-md-8 col-lg-8 col-xl-9">
				<div class="row">
				<div class="col-md-4 col-lg-4 col-xl-4 offset-xl-2 mb10 mb-md0 smart-form">
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
		<!-- Table Data -->
		<div class="row mt15 mt-md30">
			<div class="col-12">
			<!-- Library Grid View-->
				<div class="table-responsive smart-table-style mb15 mb-md30 thori-scroll">
				  <table class="table table-bordered">
					<thead>
					  <tr>
						<th>Projects Name &nbsp;<i class="fa fa-sort"></i></th>
						<th>Created On &nbsp;<i class="fa fa-sort"></i></th>
						<th>Contacts</th>
						<th>Sent</th>
						<th>Open</th>
						<th>Actions</th>
					  </tr>
					</thead>
					<tbody>
					   <tr>
							<td class="p-blue-clr"> Project Name 1</td>
							<td>Sep 11, 2018 11:30:00 PM</td>
							<td>300</td>
							<td>150</td>
							<td>100</td>
							<td><ul class="table-action">
								 <li class="action-menu"><a href="#" class="action-item" title="View Report"><i class="icon-report"></i></a></li>
							  </ul></td>
					   </tr>
					   <tr>
							<td class="p-blue-clr"> Project Name 2</td>
							<td>Sep 11, 2018 11:30:00 PM</td>
							<td>300</td>
							<td>150</td>
							<td>100</td>
							<td><ul class="table-action">
								 <li class="action-menu"><a href="#" class="action-item" title="View Report"><i class="icon-report"></i></a></li>
							  </ul></td>
					    </tr>
						<tr>
							<td class="p-blue-clr"> Project Name 3</td>
							<td>Sep 11, 2018 11:30:00 PM</td>
							<td>300</td>
							<td>150</td>
							<td>100</td>
							<td><ul class="table-action">
								 <li class="action-menu"><a href="#" class="action-item" title="View Report"><i class="icon-report"></i></a></li>
							  </ul></td>
					    </tr>
						<tr>
							<td class="p-blue-clr"> Project Name 4</td>
							<td>Sep 11, 2018 11:30:00 PM</td>
							<td>300</td>
							<td>150</td>
							<td>100</td>
							<td><ul class="table-action">
							<li class="action-menu"><a href="#" class="action-item" title="View Report"><i class="icon-report"></i></a></li>
							</ul></td>
						</tr>
						<tr>
							<td class="p-blue-clr"> Project Name 5</td>
							<td>Sep 11, 2018 11:30:00 PM</td>
							<td>300</td>
							<td>150</td>
							<td>100</td>
							<td><ul class="table-action">
								 <li class="action-menu"><a href="#" class="action-item" title="View Report"><i class="icon-report"></i></a></li>
							  </ul></td>
						</tr>
					</tbody>
				  </table>
				</div>
				<!-- Pagination Div Start-->
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
				<!-- Pagination Div End-->			
			</div>
		</div>
	</div>
	<!-- All Projects Section End-->	
</div>

<!-- Footer Include File-->
<?php include '../../../../smart/html/includes/dcp-footer.php'; ?>
<!-- Footer Include File end -->