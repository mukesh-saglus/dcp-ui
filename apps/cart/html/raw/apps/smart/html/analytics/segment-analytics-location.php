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
			<span class="f-20 f-md-24 lato-font">Segment Analytics</span> &nbsp;
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
	<a class="nav-link active lh110" href="segment-analytics-location.php">
		<span class="d-none d-md-block">Location</span>
		<span class="d-block d-md-none"><i class="icon-location f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="segment-analytics-results.php">
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
		   <div class="input-group">
								<input class="form-control" placeholder="Search" type="text">
								<div class="input-group-append">
									<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
								</div>
							</div>
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
                    <th>Contacts</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="../../../../images/united-states.png" class="img-fluid mr30">United States</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                  </tr>
				 <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="../../../../images/malaysia.png" class="img-fluid mr30">Malaysia</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                  </tr>
				 <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="../../../../images/india.png" class="img-fluid mr30">India</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                  </tr>
				 <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="../../../../images/philippines.png" class="img-fluid mr30">Philippines</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                  </tr>
				 <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="../../../../images/canada.png" class="img-fluid mr30">Canada</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                  </tr>
				 <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="../../../../images/nigeria.png" class="img-fluid mr30">Nigeria</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                  </tr>
				 <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="../../../../images/netherlands.png" class="img-fluid mr30">Netherlands</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                  </tr>
				 <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="../../../../images/vietnam.png" class="img-fluid mr30">Vietnam</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                  </tr>
				 <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="../../../../images/mexico.png" class="img-fluid mr30">Mexico</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                  </tr>
				 <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="../../../../images/south-africa.png" class="img-fluid mr30">South Africa</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                  </tr>
		          <tr>
                    <td><img src="../../../../images/other.png" class="img-fluid mr30">Other</td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
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
                    <th>Contacts</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Mumbai</td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                  </tr>
				 <tr>
                    <td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Delhi</td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                  </tr>
				 <tr>
                    <td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Pune</td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                  </tr>
				 <tr>
                    <td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Kolkatta</td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                  </tr>
				 <tr>
                    <td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Jaipur</td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                  </tr>
				 <tr>
                    <td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Kota</td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                  </tr>
				 <tr>
                    <td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Chennai</td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                  </tr>
				 <tr>
                    <td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Bengaluru</td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                  </tr>
				 <tr>
                    <td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Indore</td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                  </tr>
				 <tr>
                    <td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Other</td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
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
					<label class="mb-lg20" for="Conversion" onclick="updatePieChart('conversionpie')"> Contacts  </label>
				</div>
				<div class="smart-radio-btn text-truncate radio-strong-purple col-md-6 col-12">
					<input name="locationmap" id="UniqueAudience" value="option1" type="radio">
					<label for="UniqueAudience" onclick="updatePieChart('uaudiencepie')"> Visitors </label>
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

<!------- Segment Details Section Start----------->
	<div class="col-12 p0 mt15 mt-md50 details-section">
	<div class="row">
		<!------ Title Header-------------->
		<div class="col-12 mb15 mb-md0">
			<h4>Segments Details</h4>
			<p class="f-14 lh140 d-gblue-clr w400">View quick stats of your segments instantly</p>
		</div>	
	</div>
		
		<!--- Filteration Div ---->
		<div class="row mt-md30">
			<div class="col-md-4 col-lg-4 col-xl-3 bs-h40 mb10 mb-md0">
				<select class="selectpicker f-14">
					<option>All Segments (400)</option>
					<option>All Segments (400)</option>
					<option>All Segments (400)</option>
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
						<th>Segment Title &nbsp;<i class="fa fa-sort"></i></th>
						<th>Created On &nbsp;<i class="fa fa-sort"></i></th>
						<th>Visits</th>
						<th>Visitors</th>
						<th>Contacts</th>
						<th>Actions</th>
					  </tr>

					</thead>

					<tbody>
					  <tr>
						<td class="p-blue-clr">Segment Title One</td>
						<td>Nov 2, 2017</td>
						<td>300</td>
						<td>150</td>
						<td>6</td>
						<td><ul class="table-action">
							 <li class="action-menu"><a href="#" class="action-item" title="View Report"><i class="icon-report"></i></a></li>
						  </ul></td>
					  </tr>
					 <tr>
						<td class="p-blue-clr">Segment Title Two</td>
						<td>Nov 2, 2017</td>
						<td>300</td>
						<td>150</td>
						<td>6</td>
						<td><ul class="table-action">
							 <li class="action-menu"><a href="#" class="action-item" title="View Report"><i class="icon-report"></i></a></li>
						  </ul></td>
					  </tr>
						
						 <tr>
						<td class="p-blue-clr">Segment Title Three</td>
						<td>Nov 2, 2017</td>
						<td>300</td>
						<td>150</td>
						<td>6</td>
						<td><ul class="table-action">
							 <li class="action-menu"><a href="#" class="action-item" title="View Report"><i class="icon-report"></i></a></li>
						  </ul></td>
					  </tr>
						
						 <tr>
						<td class="p-blue-clr">Segment Title Four</td>
						<td>Nov 2, 2017</td>
						<td>300</td>
						<td>150</td>
						<td>6</td>
						<td><ul class="table-action">
							 <li class="action-menu"><a href="#" class="action-item" title="View Report"><i class="icon-report"></i></a></li>
						  </ul></td>
					  </tr>
						
						 <tr>
						<td class="p-blue-clr">Segment Title Five</td>
						<td>Nov 2, 2017</td>
						<td>300</td>
						<td>150</td>
						<td>6</td>
						<td><ul class="table-action">
							 <li class="action-menu"><a href="#" class="action-item" title="View Report"><i class="icon-report"></i></a></li>
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
<!------- Segment Details Section End----------->		
	
</div>

<!------- Smart Footer Include File---------->
<?php include '../includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->