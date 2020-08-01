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
			<span class="f-20 f-md-24 lato-font">Web Analytics </span> &nbsp;
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="f-14 mt5 gblue-clr">Check your web analytics in detail</p>
		</div>
	</div>
</div>
<!------- Header End ----------->

<!------- Tabs Start ----------->
<ul class="nav tabs-style3 f-14 f-md-16 w-100 relative" role="tablist">
	<li class="nav-item ml15 ml-md30">
	<a class="nav-link lh110" href="web-analytics-overview.php">
		<span class="d-none d-md-block">Overview</span>
		<span class="d-block d-md-none"><i class="icon-overview f-18"></i></span></a>
	</li>
<li class="nav-item">
	<a class="nav-link lh110" href="web-analytics-technology.php">	
		<span class="d-none d-md-block">Technology</span>
		<span class="d-block d-md-none"><i class="icon-technology f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link active lh110" href="web-analytics-location.php">
		<span class="d-none d-md-block">Location</span>
		<span class="d-block d-md-none"><i class="icon-location f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="web-analytics-results.php">
	<span class="d-none d-md-block">Goal</span>
	<span class="d-block d-md-none"><i class="icon-result f-18"></i></span>
	</a>
</li>
<li class="d-flex align-items-center view-detail-img-icon"><a href="#"  data-toggle="tooltip" data-placement="left" title="" data-original-title="View Details"><img src="../../../../images/view-details-icon.png" class="img-fluid"></a> </li>	
</ul>
<!------- Tabs End ----------->


<div class="container-fluid p15 p-md30">
<!------- Country Section Start----------->
	<div class="col-12 p0">
	<div class="row">
		<!------ Title Header-------------->
		<div class="col-12 col-md-12 col-lg-6 mb15 mb-lg0">
			<ul class="stepwizard-style2 w500 lato-font f-20 f-md-24" id="CountriesName">
          <li> <a href="#">Top 10 Countries </a> </li>
        </ul>
			<p class="f-14 lh140 d-gblue-clr w400">Top countries your visitors are coming from</p>
		</div>
		<div class="col-12 col-md-12 col-lg-6 bs-h40 f-16 align-self-center smart-form">
         <div class="row">
		   <div class="col-3 col-md-2 text-right">
		
		   <span class="base-btn default-btn btn-xs-block px10" data-toggle="tooltip" data-placement="top"  data-original-title="Get report in detail"><i class="icon-download"></i></span>
		  
           </div> 	
           <div class="col-9 col-md-5 smart-search-field">
			<select class="selectpicker" data-live-search="true">
				<option>Andorra (AD)</option>
				<option>United Arab Emirates (AE)</option>
				<option>Afghanistan (AF)</option>
				<option>Afghanistan (AF)</option>
				<option>Anguilla (AI)</option>
			</select>
           </div>  		   
		   <div class="col-12 col-md-5 mt10 mt-md0">
		   <input type="text" class="caleran-ex-1 field-h40 form-control" readonly  data-plugin-options='{"rangeOrientation":true,"showButtons":true}' />
		   </div>
		 </div>
		</div>
		
	</div>

	<div class="row mt15 mt-md40">
		<!---- Country City Data Table --------->
		
		 <!--- Country Table --->
		<div class="col-12 col-md-12 col-lg-8" id="hide-country-table">
		<div class="table-responsive smart-table-style2 thori-scroll ">
              <table class="table table-borderless">
                <thead class="w500">
                  <tr>
                    <th>Country Name</th>
                    <th>Visits</th>
                    <th>Visitors</th>
                    <th>Conversion</th>
                    <th>Conversion Rate</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="../../../../images/country-flag/us.png" class="img-fluid mr30">United States</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
				 <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="../../../../images/country-flag/my.png" class="img-fluid mr30">Malaysia</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
				 <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="../../../../images/country-flag/in.png" class="img-fluid mr30">India</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
				 <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="../../../../images/country-flag/ph.png" class="img-fluid mr30">Philippines</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
				 <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="../../../../images/country-flag/ca.png" class="img-fluid mr30">Canada</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
				 <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="../../../../images/country-flag/ng.png" class="img-fluid mr30">Nigeria</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
				 <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="../../../../images/country-flag/nl.png" class="img-fluid mr30">Netherlands</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
				 <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="../../../../images/country-flag/vn.png" class="img-fluid mr30">Vietnam</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
				 <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="../../../../images/country-flag/mx.png" class="img-fluid mr30">Mexico</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
				 <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="../../../../images/country-flag/za.png" class="img-fluid mr30">South Africa</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
		          <tr>
                    <td><img src="../../../../images/other.png" class="img-fluid mr30">Other</td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
                </tbody>
              </table>
            </div>
		</div>
		<!---End Country Table --->
		<!--- City Table --->
		<div class="col-12 col-md-12 col-lg-8" id="show-city-table">
			<div class="table-responsive smart-table-style2 thori-scroll">
              <table class="table table-borderless">
                <thead class="w500">
                  <tr>
                    <th>City Name</th>
                    <th>Visits</th>
                    <th>Visitors</th>
                    <th>Conversion</th>
                    <th>Conversion Rate</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Mumbai</td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
				 <tr>
                    <td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Delhi</td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
				 <tr>
                    <td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Pune</td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
				 <tr>
                    <td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Kolkatta</td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
				 <tr>
                    <td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Jaipur</td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
				 <tr>
                    <td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Kota</td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
				 <tr>
                    <td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Chennai</td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
				 <tr>
                    <td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Bengaluru</td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
				 <tr>
                    <td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Indore</td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
				 <tr>
                    <td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Other</td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
                </tbody>
              </table>
            </div>
		</div>
		<!---End City TAble ---->
		
		<!--- End Country City Data Table --->
		
		<div class="col-12 col-md-12 col-lg-4 mt20 mt-lg10">
	
			<div class="row small-radio-btn">
			
				<div class="smart-radio-btn text-truncate radio-strong-blue col-md-6 col-12">	
					<input name="locationmap" id="Audience" value="option1" checked="" type="radio">
					<label class="mb-lg20" for="Audience" onclick="updatePieChart('audiencepie')"> Visits </label>
				</div>
				<div class="smart-radio-btn text-truncate radio-strong-yellow col-md-6 col-12">
					<input name="locationmap" id="Conversion" value="option1" type="radio">
					<label class="mb-lg20" for="Conversion" onclick="updatePieChart('conversionpie')"> Conversion </label>
					
				</div>
				<div class="smart-radio-btn text-truncate radio-strong-purple col-md-6 col-12">
					
					<input name="locationmap" id="UniqueAudience" value="option1" type="radio">
					<label for="UniqueAudience" onclick="updatePieChart('uaudiencepie')"> Visitors </label>
					
				</div>
				<div class="smart-radio-btn text-truncate radio-strong-green col-md-6 col-12">
					<input name="locationmap" id="ConversionRate" value="option1" type="radio">
					<label for="ConversionRate" onclick="updatePieChart('conversionratepie')"> Conversion Rate </label>
				</div>
			</div>
			<!--- Chart -->
			<div id="audiencepie" class="mt15">
			<svg></svg>
			</div>
		</div>	
	</div>
		
	</div>
<!------- Country Section End----------->
	
<!------- Audience Details Section Start----------->
	<div class="col-12 p0 mt15 mt-md50 details-section">
	<div class="row">
		<!------ Title Header-------------->
		<div class="col-12 mb15 mb-md0">
			<h4>Audience Details</h4>
			<p class="f-14 lh140 d-gblue-clr w400">View detailed overview of your audience instantly</p>
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
<!------- Audience Details Section End----------->
	
</div>

<!------- Smart Footer Include File---------->
<?php include '../includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->