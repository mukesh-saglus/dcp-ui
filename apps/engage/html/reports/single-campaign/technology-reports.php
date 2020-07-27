<!------- Smart Header Include File---------->
<?php include '../../../../smart/html/includes/smart-header.php'; ?>
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
				<li> <a href="#">Campaign Analytics</a> </li>
				<li> <a href="#">Project Name</a> </li>
				<li><a href="#"></a>Campaign Name</li>
			</ul>
			<p class="f-14 gblue-clr w400">Check detailed reports of your campaign</p>
		</div>
	</div>
</div>
<!------- Header End ----------->

<!------- Tabs Start ----------->
<ul class="nav tabs-style3 f-14 f-md-16 w-100 relative" role="tablist">
	<li class="nav-item ml15 ml-md30">
	<a class="nav-link lh110" href="overview-reports.php">
		<span class="d-none d-md-block">Overview
		</span>
		<span class="d-block d-md-none"><i class="icon-overview f-18"></i></span></a>
	</li>
<li class="nav-item">
	<a class="nav-link active lh110" href="technology-reports.php">	
		<span class="d-none d-md-block">Technology
		</span>
		<span class="d-block d-md-none"><i class="icon-technology f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="location-reports.php">
		<span class="d-none d-md-block">Location
		</span>
		<span class="d-block d-md-none"><i class="icon-location f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="results-reports.php">
	<span class="d-none d-md-block">Goal
	</span>
	<span class="d-block d-md-none"><i class="icon-result f-18"></i></span>
	</a>
</li>
<li class="d-flex align-items-center view-detail-img-icon"><a href="#"  data-toggle="tooltip" data-placement="left" title="" data-original-title="View Details"><img src="<?php echo $basedir; ?>images/view-details-icon.png" class="img-fluid"></a> </li>	
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
                    <td><img src="<?php echo $basedir; ?>images/andriod-icon.png" class="img-fluid mr30">Android</td>
                    <td>2044164</td>
                    <td>2498651</td>
					<td>2498651</td>
                  </tr>
				  <tr>
                    <td><img src="<?php echo $basedir; ?>images/macintosh-icon.png" class="img-fluid mr30">Macintosh</td>
                    <td>8944164</td>
                    <td>2498651</td>
					<td>8944164</td>
                  </tr>
				  <tr>
                    <td><img src="<?php echo $basedir; ?>images/windows-icon.png" class="img-fluid mr30">Windows</td>
                    <td>3544164</td>
                    <td>2498651</td>
					<td>2498651</td>
                  </tr>
					 <tr>
                    <td><img src="<?php echo $basedir; ?>images/linux-icon.png" class="img-fluid mr30">Linux</td>
                    <td>4544164</td>
                    <td>2498651</td>
					<td>6544164</td>
                  </tr>
					 <tr>
                    <td><img src="<?php echo $basedir; ?>images/ios-icon.png" class="img-fluid mr30">ios</td>
                    <td>2046164</td>
                    <td>2498651</td>
					<td>2498651</td>
                  </tr>
					 <tr>
                    <td><img src="<?php echo $basedir; ?>images/other-icon.png" class="img-fluid mr30">Other</td>
                    <td>2044164</td>
                    <td>2498651</td>
					<td>2498651</td>
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
			<svg>
			</svg>
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
                    <td><img src="<?php echo $basedir; ?>images/chrome-icon.png" class="img-fluid mr30">Google Chrome</td>
                    <td>3544164</td>
                    <td>2498651</td>
					<td>6544164</td>
                  </tr>
				  <tr>
                    <td><img src="<?php echo $basedir; ?>images/mozila-icon.png" class="img-fluid mr30">Mozilla Firefox</td>
                    <td>3544164</td>
                    <td>2498651</td>
					<td>6544164</td>
                  </tr>
				  <tr>
                    <td><img src="<?php echo $basedir; ?>images/edge-icon.png" class="img-fluid mr30">Edge</td>
                    <td>8544164</td>
					<td>6544164</td>
                    <td>2498651</td>
                  </tr>
					 <tr>
                    <td><img src="<?php echo $basedir; ?>images/safari-icon.png" class="img-fluid mr30">Safari</td>
                    <td>6544164</td>
                    <td>2498651</td>
					<td>6544164</td>
                  </tr>
					 <tr>
                    <td><img src="<?php echo $basedir; ?>images/opera-icon.png" class="img-fluid mr30">Opera</td>
                    <td>2044164</td>
					<td>6544164</td>
                    <td>2498651</td>
                  </tr>
					 <tr>
                    <td><img src="<?php echo $basedir; ?>images/otherbrow-icon.png" class="img-fluid mr30">Others</td>
                    <td>1244164</td>
					<td>6544164</td>
                    <td>2498651</td>
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
			<svg>
			</svg>
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
			<p class="f-14 lh140 d-gblue-clr w400">Top devices your visitors used to view your campaigns</p>
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
                    <td><img src="<?php echo $basedir; ?>images/desktop-icon.png" class="img-fluid mr30">Desktop</td>
                    <td>3544164</td>
                    <td>2498651</td>
					<td>6544164</td>
                  </tr>
				  <tr>
                    <td><img src="<?php echo $basedir; ?>images/laptop-icon.png" class="img-fluid mr30">Laptop</td>
                    <td>3544164</td>
                    <td>2498651</td>
					<td>6544164</td>
                  </tr>
				  <tr>
                    <td><img src="<?php echo $basedir; ?>images/androidphone-icon.png" class="img-fluid mr30">Android Phone</td>
                    <td>8544164</td>
                    <td>2498651</td>
					<td>6544164</td>
                  </tr>
					 <tr>
                    <td><img src="<?php echo $basedir; ?>images/iphone-icon.png" class="img-fluid mr30">i Phone</td>
                    <td>6544164</td>
					<td>6544164</td>
                    <td>2498651</td>
                  </tr>
					 <tr>
                    <td><img src="<?php echo $basedir; ?>images/ipad-icon.png" class="img-fluid mr30">i Pad</td>
                    <td>2044164</td>
                    <td>2498651</td>
					<td>6544164</td>
                  </tr>
					 <tr>
                    <td><img src="<?php echo $basedir; ?>images/otherdevi-icon.png" class="img-fluid mr30">Others</td>
                    <td>1244164</td>
                    <td>2498651</td>
					<td>6544164</td>
                  </tr>
                </tbody>
              </table>
            </div>
		</div>
		<div class="col-12 col-md-5 col-lg-4 mt10 mt-md0 mb15 mb-md0 tech-pie-chart-dropdown text-right">
			<select class="selectpicker col-lg-9 col-xl-6 p0" title="Visitors">
					<option>Visits</option>
					<option>Visitors</option>
					<option>Contacts</option>
			</select>
			<div id="devices-chart" class="mt10">
			<svg>
			</svg>
			</div>
		</div>	
	</div>
	</div>
<!------- Devices Section End----------->	


<!------- All Segment Section Start----------->
	<div class="col-12 p0 mt15 mt-md30 details-section">
	<div class="row">
		<!------ Title Header-------------->
		<div class="col-12 col-md-12 col-lg-12 mb15 mb-md0">
			<h4>Segment</h4>
			<p class="f-14 lh140 d-gblue-clr w400">View quick stats of your segment instantly</p>
		</div>
		
	</div>
	
		<!----- Table Data --------->
		
			<div class="col-12 mt15 mt-md25">
			<div class="row l-gblue-border p15 py-md25 px-md30 rounded-top">
			   <div class="col-lg-3 col-md-3 p0">
			   <div class="f-18 w700">Segment Title</div>
			   <div class="f-14 grey mt3">Created on Sep 11, 2018 11:30:00 PM</div>
			   <a href="<?php echo $basedir; ?>apps/smart/html/analytics/single-segment-analytics-overview.php" target="_blank" class="f-12 p-blue-clr">View Report</a>
			   </div>
			   <div class="col-lg-9 col-12 col-md-9 col-xl-8 align-self-center p0">
						<div class="row grey">
						<div class="col-lg-4 col-12 col-md-4 col-xl-4 d-flex mt15 mt-md0">
							<span class="segment-icon-circle mr10">
							<i class="icon-all-accounts d-gblue-clr f-22"></i>
							</span>
							<div class="align-self-center"><p>Visits</p>
                               <h5 class="w700 mt5 firasans-font">300</h5>							
							</div>
						</div>	
						<div class="col-lg-4 col-12 col-md-4 col-xl-4 d-flex mt15 mt-md0">
							<span class="segment-icon-circle mr10">
							<i class="icon-unique-visitor d-gblue-clr f-22"></i>
							</span> 
							<div class="align-self-center"><p>Visitors</p>
                               <h5 class="w700 mt5 firasans-font">150</h5>							
							</div>
						</div>
						<div class="col-lg-4 col-12 col-md-4 col-xl-4 d-flex mt15 mt-md0">
							<span class="segment-icon-circle mr10">
							<i class="icon-total-known-audience d-gblue-clr f-22"></i>
							</span> 
							<div class="align-self-center"><p>Contacts</p>
                               <h5 class="w700 mt5 firasans-font">6</h5>							
							</div>
						</div>
						</div>
				</div>
			   
			</div>
			</div>
	
		
	</div>
<!------- All Segment Section End----------->		
</div>


<!------- Smart Footer Include File---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->