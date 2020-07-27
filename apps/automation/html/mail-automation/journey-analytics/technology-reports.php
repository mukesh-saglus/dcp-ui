<!------- Mail Automation Main Header Include File---------->
<?php include '../../../includes/automation-header.php'; ?>
<!------- Mail Automation  Main Header Include File end---------->

<!------- DotcomPal Mail Automation Stylesheet------=------->
<link rel="stylesheet" href="../../../css/automation.css">
<!------- DotcomPal Mail Automation Stylesheet end---------->

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
			<div class="d-flex align-items-center flex-wrap">
				<ul class="stepwizard-style2 f-18 f-sm-24 w400 lato-font mr15">
					<li> <a href="#"> Journey Analytics</a> </li>
					<li> <a href="#"> Journey Name</a> </li>
				</ul>
				<div class="d-flex mt7">
					<a href="#" class="gblue-clr t-decoration-none f-17 mr5" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
					<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
				</div>
			</div>
			<p class="f-14 gblue-clr w400">Here you are manage your all notification</p>
		</div>
	</div>
</div>
<!------- Header End ----------->

<!------- Tabs Start ----------->
<ul class="nav tabs-style3 f-14 f-md-16 w-100 relative" role="tablist">
	<li class="nav-item ml15 ml-md30">
	<a class="nav-link lh110" href="overview-reports.php">
		<span class="d-none d-md-block">Overview</span>
		<span class="d-block d-md-none"><i class="icon-overview f-18"></i></span></a>
	</li>
<li class="nav-item">
	<a class="nav-link active lh110" href="technology-reports.php">	
		<span class="d-none d-md-block">Technology</span>
		<span class="d-block d-md-none"><i class="icon-technology f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="location-reports.php">
		<span class="d-none d-md-block">Location</span>
		<span class="d-block d-md-none"><i class="icon-location f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="results-reports.php">
	<span class="d-none d-md-block">Goal</span>
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
			<p class="f-14 lh140 d-gblue-clr w400">Top operating systems used by your Visits</p>
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
                    <th>Conversion</th>
                    <th>Conversion Rate</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img src="<?php echo $basedir; ?>images/andriod-icon.png" class="img-fluid mr30">Android</td>
                    <td>2044164</td>
                    <td>20000</td>
                    <td>30%</td>
                  </tr>
				  <tr>
                    <td><img src="<?php echo $basedir; ?>images/macintosh-icon.png" class="img-fluid mr30">Macintosh</td>
                    <td>8944164</td>
					<td>20000</td>
                    <td>30%</td>
                  </tr>
				  <tr>
                    <td><img src="<?php echo $basedir; ?>images/windows-icon.png" class="img-fluid mr30">Windows</td>
                    <td>3544164</td>
					<td>20000</td>
                    <td>30%</td>
                  </tr>
					 <tr>
                    <td><img src="<?php echo $basedir; ?>images/linux-icon.png" class="img-fluid mr30">Linux</td>
                    <td>4544164</td>
					<td>20000</td>
                    <td>30%</td>
                  </tr>
					 <tr>
                    <td><img src="<?php echo $basedir; ?>images/ios-icon.png" class="img-fluid mr30">ios</td>
                    <td>2046164</td>
					<td>20000</td>
                    <td>30%</td>
                  </tr>
					 <tr>
                    <td><img src="<?php echo $basedir; ?>images/other-icon.png" class="img-fluid mr30">Other</td>
                    <td>2044164</td>
					<td>20000</td>
                    <td>30%</td>
                  </tr>
                </tbody>
              </table>
            </div>
		</div>
		<div class="col-12 col-md-5 col-lg-4 mt10 mt-md0 mb15 mb-md0 tech-pie-chart-dropdown text-right">
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
			<p class="f-14 lh140 d-gblue-clr w400">Top browsers used by your Visits to land on your page</p>
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
					<th>Conversion</th>
                    <th>Conversion Rate</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img src="<?php echo $basedir; ?>images/chrome-icon.png" class="img-fluid mr30">Google Chrome</td>
                    <td>3544164</td>
					<td>20000</td>
                    <td>30%</td>
                  </tr>
				  <tr>
                    <td><img src="<?php echo $basedir; ?>images/mozila-icon.png" class="img-fluid mr30">Mozilla Firefox</td>
                    <td>3544164</td>
					<td>20000</td>
                    <td>30%</td>
                  </tr>
				  <tr>
                    <td><img src="<?php echo $basedir; ?>images/edge-icon.png" class="img-fluid mr30">Edge</td>
                    <td>8544164</td>
					<td>20000</td>
                    <td>30%</td>
                  </tr>
					 <tr>
                    <td><img src="<?php echo $basedir; ?>images/safari-icon.png" class="img-fluid mr30">Safari</td>
                    <td>6544164</td>
					<td>20000</td>
                    <td>30%</td>
                  </tr>
					 <tr>
                    <td><img src="<?php echo $basedir; ?>images/opera-icon.png" class="img-fluid mr30">Opera</td>
                    <td>2044164</td>
					<td>20000</td>
                    <td>30%</td>
                  </tr>
					 <tr>
                    <td><img src="<?php echo $basedir; ?>images/otherbrow-icon.png" class="img-fluid mr30">Others</td>
                    <td>1244164</td>
					<td>20000</td>
                    <td>30%</td>
                  </tr>
                </tbody>
              </table>
            </div>
		</div>
		<div class="col-12 col-md-5 col-lg-4 mt10 mt-md0 mb15 mb-md0 tech-pie-chart-dropdown text-right">
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
			<p class="f-14 lh140 d-gblue-clr w400">Top devices used by your Visits to view your page</p>
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
					<th>Conversion</th>
                    <th>Conversion Rate</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img src="<?php echo $basedir; ?>images/desktop-icon.png" class="img-fluid mr30">Desktop</td>
                    <td>3544164</td>
                    <td>2498651</td>
                    <td>30%</td>
                  </tr>
				  <tr>
                    <td><img src="<?php echo $basedir; ?>images/laptop-icon.png" class="img-fluid mr30">Laptop</td>
                    <td>3544164</td>
                    <td>2498651</td>
                    <td>30%</td>
                  </tr>
				  <tr>
                    <td><img src="<?php echo $basedir; ?>images/androidphone-icon.png" class="img-fluid mr30">Android Phone</td>
                    <td>8544164</td>
					<td>20000</td>
                    <td>30%</td>
                  </tr>
					 <tr>
                    <td><img src="<?php echo $basedir; ?>images/iphone-icon.png" class="img-fluid mr30">i Phone</td>
                    <td>6544164</td>
                    <td>2498651</td>
                    <td>30%</td>
                  </tr>
					 <tr>
                    <td><img src="<?php echo $basedir; ?>images/ipad-icon.png" class="img-fluid mr30">i Pad</td>
                    <td>2044164</td>
                    <td>2498651</td>
                    <td>30%</td>
                  </tr>
					 <tr>
                    <td><img src="<?php echo $basedir; ?>images/other-mobile-icon.png" class="img-fluid mr30">Other Mobile</td>
                    <td>1244164</td>
					<td>20000</td>
                    <td>30%</td>
                  </tr>
                </tbody>
              </table>
            </div>
		</div>
		<div class="col-12 col-md-5 col-lg-4 mt10 mt-md0 mb15 mb-md0 tech-pie-chart-dropdown text-right">
			<div id="devices-chart" class="mt10">
			<svg></svg>
			</div>
		</div>
			
	</div>
	</div>
<!------- Devices Section End----------->	

	<!------- All Pages Section Start----------->
	<div class="col-12 p0 mt15 mt-md50 details-section">
		<div class="row">
			<!------ Title Header-------------->
			<div class="col-12 col-md-8 mb15 mb-md0">
				<h4>Journey Elements</h4>
				<p class="f-14 lh140 d-gblue-clr w400">View quick stats of your Journey Elements instantly</p>
			</div>	
			<div class="col-12 col-md-4">
				<div class="smart-search-field">
					<div class="input-group">
						<input class="form-control" placeholder="Search" type="text">
						<div class="input-group-append">
							<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
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
						<th>Campaign Name &nbsp;<i class="fa fa-sort"></i></th>
						<th>Type &nbsp;<i class="fa fa-sort"></i></th>
						<th>Visits &nbsp;<i class="fa fa-sort"></i></th>
						<th>Conversion &nbsp;<i class="fa fa-sort"></i></th>
						<th>Conversion Rate &nbsp;<i class="fa fa-sort"></i></th>
						<th>Actions</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td class="p-blue-clr">Campaign Name One</td>
						<td>Pop-ups & Bars</td>
						<td>300</td>
						<td>50</td>
						<td>6%</td>
						<td><ul class="table-action">
							 <li class="action-menu"><a href="#" class="action-item" title="Report"><i class="icon-report"></i></a></li>
						  </ul></td>
					  </tr>
					  <tr>
						<td class="p-blue-clr">Campaign Name Two</td>
						<td>Page</td>
						<td>300</td>
						<td>50</td>
						<td>6%</td>
						<td><ul class="table-action">
							 <li class="action-menu"><a href="#" class="action-item" title="Report"><i class="icon-report"></i></a></li>
						  </ul></td>
					    </tr>
						<tr>
						<td class="p-blue-clr">Campaign Name Three</td>
						<td>Pop-ups & Bars</td>
						<td>300</td>
						<td>50</td>
						<td>6%</td>
						<td><ul class="table-action">
							 <li class="action-menu"><a href="#" class="action-item" title="Report"><i class="icon-report"></i></a></li>
						  </ul></td>
					    </tr>
						<tr>
						<td class="p-blue-clr">Campaign Name Four</td>
						<td>Page</td>
						<td>300</td>
						<td>50</td>
						<td>6%</td>
						<td><ul class="table-action">
							 <li class="action-menu"><a href="#" class="action-item" title="Report"><i class="icon-report"></i></a></li>
						  </ul></td>
					    </tr>
					   <tr>
						<td class="p-blue-clr">Campaign Name Five</td>
						<td>Segment</td>
						<td>300</td>
						<td>50</td>
						<td>6%</td>
						<td><ul class="table-action">
							 <li class="action-menu"><a href="#" class="action-item" title="Report"><i class="icon-report"></i></a></li>
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
					<select class="selectpicker">
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
	<!------- All Page Section End----------->			
</div>

<!------- DotcomPal Mail Automation Footer Include File ---------->
<?php include '../../../includes/automation-footer.php'; ?>
<!------- DotcomPal Mail Automation Footer Include File end ---------->