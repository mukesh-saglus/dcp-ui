<!------- Smart Header Include File---------->
<?php include '../../../../smart/html/includes/smart-header.php'; ?>
<!------- Smart Header Include File end----------> 

<!------- Smart Page Stylesheet------=------->
<link rel="stylesheet" href="../../../css/page.css">
<!------- Smart Page Stylesheet end---------->

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
		<ul class="stepwizard-style2 f-20 f-md-24 lato-font">
          <li> <a href="#">A/B Test Project Name Report</a> </li>
          <li> <a href="#">Variant A </a> </li>
        </ul>
			<p class="f-14 gblue-clr w400">Check results of your A/B test in details</p>
		</div>
    </div>
</div>
<!------- Header End ----------->

<!------- Tabs Start ----------->
<ul class="nav tabs-style3 f-14 f-md-16 w-100 relative" role="tablist">
	<li class="nav-item ml15 ml-md30">
	<a class="nav-link lh110" href="overview-reports.php">
		<span class="d-none d-md-block">Overview<br>
		<span class="f-12 w300">0 Lists</span>
		</span>
		<span class="d-block d-md-none"><i class="icon-overview f-18"></i></span></a>
	</li>
<li class="nav-item">
	<a class="nav-link lh110" href="technology-reports.php">	
		<span class="d-none d-md-block">Technology<br>
		<span class="f-12 w300">0 Segments</span>
		</span>
		<span class="d-block d-md-none"><i class="icon-technology f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link active lh110" href="location-reports.php">
		<span class="d-none d-md-block">Location<br>
		<span class="f-12 w300">0 Suppression</span>
		</span>
		<span class="d-block d-md-none"><i class="icon-location f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="results-reports.php">
	<span class="d-none d-md-block">Goal<br>
	<span class="f-12 w300">0 Suppression</span>
	</span>
	<span class="d-block d-md-none"><i class="icon-result f-18"></i></span>
	</a>
</li>	
</ul>
<!------- Tabs End ----------->


<div class="container-fluid p15 p-md30">
<!------- Country Section Start----------->
	<div class="col-12 p0">
	<div class="row">
		<!------ Title Header-------------->
		<div class="col-12 col-md-12 col-lg-6 mb15 mb-lg0">
			<ul class="stepwizard-style2 w400 lato-font f-20 f-md-24" id="CountriesName">
          <li> <a href="#">Top 10 Countries </a> </li>
        </ul>
			<p class="f-14 gblue-clr">Top countries from where you get most traffic & conversions</p>
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
                    <th>Conversion</th>
                    <th>Conversion Rate</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="<?php echo $basedir; ?>images/united-states.png" class="img-fluid mr30">United States</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
				 <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="<?php echo $basedir; ?>images/malaysia.png" class="img-fluid mr30">Malaysia</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
				 <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="<?php echo $basedir; ?>images/india.png" class="img-fluid mr30">India</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
				 <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="<?php echo $basedir; ?>images/philippines.png" class="img-fluid mr30">Philippines</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
				 <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="<?php echo $basedir; ?>images/canada.png" class="img-fluid mr30">Canada</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
				 <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="<?php echo $basedir; ?>images/nigeria.png" class="img-fluid mr30">Nigeria</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
				 <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="<?php echo $basedir; ?>images/netherlands.png" class="img-fluid mr30">Netherlands</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
				 <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="<?php echo $basedir; ?>images/vietnam.png" class="img-fluid mr30">Vietnam</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
				 <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="<?php echo $basedir; ?>images/mexico.png" class="img-fluid mr30">Mexico</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
				 <tr>
                    <td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="<?php echo $basedir; ?>images/south-africa.png" class="img-fluid mr30">South Africa</a></td>
                    <td>3544164</td>
                    <td>3544164</td>
                    <td>2498</td>
                    <td>12%</td>
                  </tr>
		          <tr>
                    <td><img src="<?php echo $basedir; ?>images/other.png" class="img-fluid mr30">Other</td>
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
					<label class="mb-lg20" for="Audience" onclick="updatePieChart('audiencepie')">Visits</label>
				</div>
				<div class="smart-radio-btn text-truncate radio-strong-purple col-md-6 col-12">
					<input name="locationmap" id="Conversion" value="option1" type="radio">
					<label class="mb-lg20" for="Conversion" onclick="updatePieChart('uaudiencepie')">Visitors</label>
					
				</div>
				<div class="smart-radio-btn text-truncate radio-strong-yellow col-md-6 col-12">
					
					<input name="locationmap" id="UniqueAudience" value="option1" type="radio">
					<label for="UniqueAudience" onclick="updatePieChart('conversionpie')">Conversion</label>
					
				</div>
				<div class="smart-radio-btn text-truncate radio-strong-green col-md-6 col-12">
					<input name="locationmap" id="ConversionRate" value="option1" type="radio">
					<label for="ConversionRate" onclick="updatePieChart('conversionratepie')">Conversion Rate</label>
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
</div>
<!------- Smart Footer Include File---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->