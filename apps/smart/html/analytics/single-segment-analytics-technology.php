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
	<a class="nav-link lh110" href="single-segment-analytics-overview.php">
		<span class="d-none d-md-block">Overview</span>
		<span class="d-block d-md-none"><i class="icon-overview f-18"></i></span></a>
	</li>
<li class="nav-item">
	<a class="nav-link active lh110" href="single-segment-analytics-technology.php">	
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
<!------- Operating Systems Section Start----------->
	<div class="col-12 p0">
	<div class="row">
		<!------ Title Header-------------->
		<div class="col-12 col-md-8 col-lg-9 mb15 mb-md0">
			<h4>Operating Systems</h4>
			<p class="f-14 lh140 d-gblue-clr w400">Top operating systems used by your visitors</p>
		</div>
		<div class="col-12 col-md-4 col-lg-3 bs-h40 f-16 align-self-center smart-form">
       <input type="text" class="caleran-ex-1 field-h40 form-control" readonly  data-plugin-options='{"rangeOrientation":true,"showButtons":true}' />
		</div>
		
	</div>
	<div class="row mt15 mt-md40">
		<!---- Data Coloum--------->
		<div class="col-12 col-md-7 col-lg-8 mb15 mb-md0">
			<div class="table-responsive smart-table-style2 thori-scroll">
              <table class="table table-borderless">
                <thead class="w500">
                  <tr>
                    <th>Operating Systems Name</th>
                    <th>Visits</th>
                    <th>Visitors</th>
                    <th>Contacts</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img src="../../../../images/andriod-icon.png" class="img-fluid mr30">Android</td>
                    <td>2044164</td>
                    <td>2498651</td>
                    <td>578926</td>
                  </tr>
				  <tr>
                    <td><img src="../../../../images/macintosh-icon.png" class="img-fluid mr30">Macintosh</td>
                    <td>8944164</td>
                    <td>2498651</td>
                    <td>578926</td>
                  </tr>
				  <tr>
                    <td><img src="../../../../images/windows-icon.png" class="img-fluid mr30">Windows</td>
                    <td>3544164</td>
                    <td>2498651</td>
                    <td>578926</td>
                  </tr>
					 <tr>
                    <td><img src="../../../../images/linux-icon.png" class="img-fluid mr30">Linux</td>
                    <td>4544164</td>
                    <td>2498651</td>
                    <td>578926</td>
                  </tr>
					 <tr>
                    <td><img src="../../../../images/ios-icon.png" class="img-fluid mr30">ios</td>
                    <td>2046164</td>
                    <td>2498651</td>
                    <td>578926</td>
                  </tr>
					 <tr>
                    <td><img src="../../../../images/other-icon.png" class="img-fluid mr30">Other</td>
                    <td>2044164</td>
                    <td>2498651</td>
                    <td>578926</td>
                  </tr>
                </tbody>
              </table>
            </div>
		</div>
			<div class="col-12 col-md-5 col-lg-4 mt10 mt-md0 mb15 mb-md0 tech-pie-chart-dropdown text-right">
			<select class="selectpicker col-lg-9 col-xl-6 p0" title="Visitors" >
					<option>Visits</option>
					<option>Visitors</option>
					<option>Contacts</option>
				</select>
			<div id="os-chart" class="mt10">
				<svg></svg>
			</div>
			
		</div>
			
	</div>
	</div>
<!------- Operating Systems Section End----------->
	
<!------- Browser Section Start----------->
	<div class="col-12 p0 mt15 mt-md40">
	<div class="row">
		<!------ Title Header-------------->
		<div class="col-12 col-md-8 col-lg-9 mb15 mb-md0">
			<h4>Browser</h4>
			<p class="f-14 lh140 d-gblue-clr w400">Top browsers used by your visitors</p>
		</div>
		<div class="col-12 col-md-4 col-lg-3 bs-h40 f-16 align-self-center smart-form">
       <input type="text" class="caleran-ex-1 field-h40 form-control" readonly  data-plugin-options='{"rangeOrientation":true,"showButtons":true}' />
		</div>
		
	</div>
	<div class="row mt15 mt-md40">
		<!---- Data Coloum--------->
		<div class="col-12 col-md-7 col-lg-8 mb15 mb-md0">
			<div class="table-responsive smart-table-style2 thori-scroll">
              <table class="table table-borderless">
                <thead class="w500">
                  <tr>
                    <th>Browser Name</th>
                    <th>Visits</th>
                    <th>Visitors</th>
                    <th>Contacts</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img src="../../../../images/chrome-icon.png" class="img-fluid mr30">Google Chrome</td>
                    <td>3544164</td>
                    <td>2498651</td>
                    <td>578926</td>
                  </tr>
				  <tr>
                    <td><img src="../../../../images/mozila-icon.png" class="img-fluid mr30">Mozilla Firefox</td>
                    <td>3544164</td>
                    <td>2498651</td>
                    <td>578926</td>
                  </tr>
				  <tr>
                    <td><img src="../../../../images/edge-icon.png" class="img-fluid mr30">Edge</td>
                    <td>8544164</td>
                    <td>2498651</td>
                    <td>578926</td>
                  </tr>
					 <tr>
                    <td><img src="../../../../images/safari-icon.png" class="img-fluid mr30">Safari</td>
                    <td>6544164</td>
                    <td>2498651</td>
                    <td>578926</td>
                  </tr>
					 <tr>
                    <td><img src="../../../../images/opera-icon.png" class="img-fluid mr30">Opera</td>
                    <td>2044164</td>
                    <td>2498651</td>
                    <td>578926</td>
                  </tr>
					 <tr>
                    <td><img src="../../../../images/otherbrow-icon.png" class="img-fluid mr30">Others</td>
                    <td>1244164</td>
                    <td>2498651</td>
                    <td>578926</td>
                  </tr>
                </tbody>
              </table>
            </div>
		</div>
			<div class="col-12 col-md-5 col-lg-4 mt10 mt-md0 mb15 mb-md0 tech-pie-chart-dropdown text-right">
			<select class="selectpicker col-lg-9 col-xl-6 p0" title="Visitors" >
					<option>Visits</option>
					<option>Visitors</option>
					<option>Contacts</option>
				</select>
			<div id="browserchart" class="mt10">
				<svg></svg>
			</div>
			
		</div>
			
	</div>
	</div>
<!------- Browser Section End----------->	
	
<!------- Devices Section Start----------->
	<div class="col-12 p0 mt15 mt-md40">
	<div class="row">
		<!------ Title Header-------------->
		<div class="col-12 col-md-8 col-lg-9 mb15 mb-md0">
			<h4>Devices</h4>
			<p class="f-14 lh140 d-gblue-clr w400">Top devices used by your visitors</p>
		</div>
		<div class="col-12 col-md-4 col-lg-3 bs-h40 f-16 align-self-center smart-form">
       <input type="text" class="caleran-ex-1 field-h40 form-control" readonly  data-plugin-options='{"rangeOrientation":true,"showButtons":true}' />
		</div>
		
	</div>
	<div class="row mt15 mt-md40">
		<!---- Data Coloum--------->
		<div class="col-12 col-md-7 col-lg-8 mb15 mb-md0">
			<div class="table-responsive smart-table-style2 thori-scroll">
              <table class="table table-borderless">
                <thead class="w500">
                  <tr>
                    <th>Devices Name</th>
                    <th>Visits</th>
                    <th>Visitors</th>
                    <th>Contacts</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img src="../../../../images/desktop-icon.png" class="img-fluid mr30">Desktop</td>
                    <td>3544164</td>
                    <td>2498651</td>
                    <td>578926</td>
                  </tr>
				  <tr>
                    <td><img src="../../../../images/laptop-icon.png" class="img-fluid mr30">Laptop</td>
                    <td>3544164</td>
                    <td>2498651</td>
                    <td>578926</td>
                  </tr>
				  <tr>
                    <td><img src="../../../../images/androidphone-icon.png" class="img-fluid mr30">Android Phone</td>
                    <td>8544164</td>
                    <td>2498651</td>
                    <td>578926</td>
                  </tr>
					 <tr>
                    <td><img src="../../../../images/iphone-icon.png" class="img-fluid mr30">i Phone</td>
                    <td>6544164</td>
                    <td>2498651</td>
                    <td>578926</td>
                  </tr>
					 <tr>
                    <td><img src="../../../../images/ipad-icon.png" class="img-fluid mr30">i Pad</td>
                    <td>2044164</td>
                    <td>2498651</td>
                    <td>578926</td>
                  </tr>
					 <tr>
                    <td><img src="../../../../images/otherdevi-icon.png" class="img-fluid mr30">Others</td>
                    <td>1244164</td>
                    <td>2498651</td>
                    <td>578926</td>
                  </tr>
                </tbody>
              </table>
            </div>
		</div>
			<div class="col-12 col-md-5 col-lg-4 mt10 mt-md0 mb15 mb-md0 tech-pie-chart-dropdown text-right">
			<select class="selectpicker col-lg-9 col-xl-6 p0" title="Visitors" >
					<option>Visits</option>
					<option>Visitors</option>
					<option>Contacts</option>
				</select>
			<div id="devices-chart" class="mt10">
			<svg></svg>
			</div>
			
		</div>
			
	</div>
	</div>
<!------- Devices Section End----------->	
	
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