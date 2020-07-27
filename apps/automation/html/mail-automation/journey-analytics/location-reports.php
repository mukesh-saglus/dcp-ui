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
	<a class="nav-link lh110" href="technology-reports.php">	
		<span class="d-none d-md-block">Technology</span>
		<span class="d-block d-md-none"><i class="icon-technology f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link active lh110" href="location-reports.php">
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
	<!------- Country Section Start----------->
	<div class="col-12 p0">
		<div class="row">
			<!------ Title Header-------------->
			<div class="col-12 col-md-12 col-lg-6 mb15 mb-lg0">
				<ul class="stepwizard-style2 w500 lato-font f-20 f-md-24" id="CountriesName">
				  <li> <a href="#">Top 10 Countries </a> </li>
				</ul>
				<p class="f-14 lh140 d-gblue-clr w400">Learn from which top countries your page gets most traffic & conversions.</p>
			</div>
			<div class="col-12 col-md-12 col-lg-6 bs-h40 f-16 align-self-center smart-form">
				<div class="row">
				   <div class="col-3 col-md-2 text-right">
				
				   <span class="base-btn default-btn btn-xs-block px10" data-toggle="tooltip" data-placement="top"  data-original-title="Get report in detail"><i class="icon-download"></i></span>
				  
				   </div> 	
				   <div class="col-9 col-md-5">
						<select class="selectpicker" data-live-search="true" title="Select Country">
							<option>Afghanistan</option>
							<option>Albania</option>
							<option>Algeria</option>
							<option>American Samoa</option>
							<option>Andorra</option>
							<option>Angola</option>
							<option>Anguilla</option>
							<option>Antarctica</option>
							<option>Antigua And Barbuda</option>
							<option>Argentina</option>
							<option>Armenia</option>
							<option>Aruba</option>
							<option>Australia</option>
							<option>Austria</option>
							<option>Azerbaijan</option>
							<option>Bahamas The</option>
							<option>Bahrain</option>
							<option>Bangladesh</option>
							<option>Barbados</option>
							<option>Belarus</option>
							<option>Belgium</option>
							<option>Belize</option>
							<option>Benin</option>
							<option>Bermuda</option>
							<option>Bhutan</option>
							<option>Bolivia</option>
							<option>Bosnia and Herzegovina </option>
							<option>Botswana</option>
							<option>Bouvet Island</option>
							<option>Brazil</option>
							<option>British Indian Ocean Territory</option>
							<option>Brunei</option>
							<option>Bulgaria</option>
							<option>Burkina Faso</option>
							<option>Burundi</option>
							<option>Cambodia</option>
							<option>Cameroon</option>
							<option>Canada</option>
							<option>Cape Verde</option>
							<option>Cayman Islands</option>
							<option>Central African Republic</option>
							<option>Chad</option>
							<option>Chile</option>
							<option>China</option>
							<option>Christmas Island</option>
							<option>Cocos (Keeling)Islands</option>
							<option>Colombia</option>
							<option>Comoros</option>
							<option>Republic Of The Congo</option>
							<option>Democratic Republic Of The Congo</option>
							<option>Cook Islands</option>
							<option>Costa Rica</option>
							<option>Cote D'Ivoire (Ivory Coast)</option>
							<option>Croatia (Hrvatska)</option>
							<option>Cuba</option>
							<option>Cyprus</option>
							<option>Czech Republic</option>
							<option>Denmark</option>
							<option>Djibouti</option>
							<option>Dominica</option>
							<option>Dominican Republic</option>
							<option>East Timor</option>
							<option>Ecuador</option>
							<option>Egypt</option>
							<option>El Salvador</option>
							<option>Equatorial Guinea</option>
							<option>Eritrea</option>
							<option>Estonia</option>
							<option>Ethiopia</option>
							<option>External Territories of Australia</option>
							<option>Falkland Islands</option>
							<option>Faroe Islands</option>
							<option>Fiji Islands</option>
							<option>Finland</option>
							<option>France</option>
							<option>French Guiana</option>
							<option>French Polynesia</option>
							<option>French Southern Territories</option>
							<option>Gabon</option>
							<option>Gambia The</option>
							<option>Georgia</option>
							<option>Germany</option>
							<option>Ghana</option>
							<option>Gibraltar</option>
							<option>Greece</option>
							<option>Greenland</option>
							<option>Grenada</option>
							<option>Guadeloupe</option>
							<option>Guam</option>
							<option>Guatemala</option>
							<option>Guernsey and Alderney</option>
							<option>Guinea</option>
							<option>Guinea-Bissau</option>
							<option>Guyana</option>
							<option>Haiti</option>
							<option>Heard and McDonald Islands</option>
							<option>Honduras</option>
							<option>Hong Kong S.A.R.</option>
							<option>Hungary</option>
							<option>Iceland</option>
							<option>India</option>
							<option>Indonesia</option>
							<option>Iran</option>
							<option>Iraq</option>
							<option>Ireland</option>
							<option>Israel</option>
							<option>Italy</option>
							<option>Jamaica</option>
							<option>Japan</option>
							<option>Jersey</option>
							<option>Jordan</option>
							<option>Kazakhstan</option>
							<option>Kenya</option>
							<option>Kiribati</option>
							<option>Korea North</option>
							<option>Korea South</option>
							<option>Kuwait</option>
							<option>Kyrgyzstan</option>
							<option>Laos</option>
							<option>Latvia</option>
							<option>Lebanon</option>
							<option>Lesotho</option>
							<option>Liberia</option>
							<option>Libya</option>
							<option>Liechtenstein</option>
							<option>Lithuania</option>
							<option>Luxembourg</option>
							<option>Macau S.A.R.</option>
							<option>Macedonia</option>
							<option>Madagascar</option>
							<option>Malawi</option>
							<option>Malaysia</option>
							<option>Maldives</option>
							<option>Mali</option>
							<option>Malta</option>
							<option>Man (Isle of)</option>
							<option>Marshall Islands</option>
							<option>Martinique</option>
							<option>Mauritania</option>
							<option>Mauritius</option>
							<option>Mayotte</option>
							<option>Mexico</option>
							<option>Micronesia</option>
							<option>Moldova</option>
							<option>Monaco</option>
							<option>Mongolia</option>
							<option>Montserrat</option>
							<option>Morocco</option>
							<option>Mozambique</option>
							<option>Myanmar</option>
							<option>Namibia</option>
							<option>Nauru</option>
							<option>Nepal</option>
							<option>Netherlands Antilles</option>
							<option>Netherlands The</option>
							<option>New Caledonia</option>
							<option>New Zealand</option>
							<option>Nicaragua</option>
							<option>Niger</option>
							<option>Nigeria</option>
							<option>Niue</option>
							<option>Norfolk Island</option>
							<option>Northern Mariana Islands</option>
							<option>Norway</option>
							<option>Oman</option>
							<option>Pakistan</option>
							<option>Palau</option>
							<option>Palestinian Territory Occupied</option>
							<option>Panama</option>
							<option>Papua new Guinea</option>
							<option>Paraguay</option>
							<option>Peru</option>
							<option>Philippines</option>
							<option>Pitcairn Island</option>
							<option>Poland</option>
							<option>Portugal</option>
							<option>Puerto Rico</option>
							<option>Qatar</option>
							<option>Reunion</option>
							<option>Romania</option>
							<option>Russia</option>
							<option>Rwanda</option>
							<option>Saint Helena</option>
							<option>Saint Kitts And Nevis</option>
							<option>Saint Lucia</option>
							<option>Saint Pierre and Miquelon</option>
							<option>Saint Vincent And The Grenadines</option>
							<option>Samoa</option>
							<option>San  Marino</option>
							<option>Sao Tome and Principe</option>
							<option>Saudi Arabia</option>
							<option>Senegal</option>
							<option>Serbia</option>
							<option>Seychelles</option>
							<option>Sierra  Leone </option>
							<option>Singapore</option>
							<option>Slovakia</option>
							<option>Slovenia</option>
							<option>Smaller Territories of the UK</option>
							<option>Solomon  Islands </option>
							<option>Somalia</option>
							<option>South Africa</option>
							<option>South Georgia</option>
							<option>South Sudan</option>
							<option>Spain</option>
							<option>Sri  Lanka </option>
							<option>Sudan</option>
							<option>Suriname</option>
							<option>Svalbard And Jan Mayen Islands</option>
							<option>Swaziland</option>
							<option>Sweden</option>
							<option>Switzerland</option>
							<option>>Syria</option>
							<option>Taiwan</option>
							<option>Tajikistan</option>
							<option>Tanzania</option>
							<option>Thailand</option>
							<option>Togo</option>
							<option>Tokelau</option>
							<option>Tonga</option>
							<option>Trinidad And Tobago</option>
							<option>Tunisia</option>
							<option>Turkey</option>
							<option>Turkmenistan</option>
							<option>Turks And Caicos Islands</option>
							<option>Tuvalu</option>
							<option>>Uganda</option>
							<option>Ukraine</option>
							<option>United Arab Emirates</option>
							<option>United Kingdom</option>
							<option>United States</option>
							<option>United States Minor Outlying Islands</option>
							<option>Uruguay</option>
							<option>>Uzbekistan</option>
							<option>Vanuatu</option>
							<option>>Vatican City State (Holy See) </option>
							<option>Venezuela</option>
							<option>Vietnam</option>
							<option>Virgin Islands (British) </option>
							<option>Virgin Islands (US)</option>
							<option>Wallis And Futuna  Islands</option>
							<option>Western Sahara</option>
							<option>Yemen</option>
							<option>Yugoslavia</option>
							<option>Zambia</option>
							<option>Zimbabwe</option>
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
				<div class="table-responsive smart-table-style2 thori-scroll">
				  <table class="table table-borderless">
					<thead class="w500">
					  <tr>
						<th>Country Name</th>
						<th>Visits</th>
						<th>Conversion</th>
						<th>Conversion Rate</th>
					  </tr>
					</thead>
				   <tbody>
					  <tr>
						<td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="<?php echo $basedir; ?>images/united-states.png" class="img-fluid mr30">United States</a></td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="<?php echo $basedir; ?>images/malaysia.png" class="img-fluid mr30">Malaysia</a></td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="<?php echo $basedir; ?>images/india.png" class="img-fluid mr30">India</a></td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="<?php echo $basedir; ?>images/philippines.png" class="img-fluid mr30">Philippines</a></td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="<?php echo $basedir; ?>images/canada.png" class="img-fluid mr30">Canada</a></td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="<?php echo $basedir; ?>images/nigeria.png" class="img-fluid mr30">Nigeria</a></td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="<?php echo $basedir; ?>images/netherlands.png" class="img-fluid mr30">Netherlands</a></td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="<?php echo $basedir; ?>images/vietnam.png" class="img-fluid mr30">Vietnam</a></td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="<?php echo $basedir; ?>images/mexico.png" class="img-fluid mr30">Mexico</a></td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><a href="#" class="t-decoration-none p-blue-clr country-select"><img src="<?php echo $basedir; ?>images/south-africa.png" class="img-fluid mr30">South Africa</a></td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					  <tr>
						<td><img src="<?php echo $basedir; ?>images/other.png" class="img-fluid mr30">Other</td>
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
						<th>State Name</th>
						<th>Visits</th>
						<th>Conversion</th>
						<th>Conversion Rate</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td><a href="#" class="t-decoration-none p-blue-clr city-select"><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Tamil Nadu</a></td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><a href="#" class="t-decoration-none p-blue-clr city-select"><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Delhi</a></td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><a href="#" class="t-decoration-none p-blue-clr city-select"><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Pune</a></td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><a href="#" class="t-decoration-none p-blue-clr city-select"><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Kolkatta</a></td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><a href="#" class="t-decoration-none p-blue-clr city-select"><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Jaipur</a></td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><a href="#" class="t-decoration-none p-blue-clr city-select"><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Kota</a></td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><a href="#" class="t-decoration-none p-blue-clr city-select"><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Chennai</a></td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><a href="#" class="t-decoration-none p-blue-clr city-select"><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Bengaluru</a></td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><a href="#" class="t-decoration-none p-blue-clr city-select"><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Indore</a></td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><a href="#" class="t-decoration-none p-blue-clr city-select"><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Other</a></td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					</tbody>
				  </table>
				</div>
			</div>
			<!---End City TAble ---->
			
			<!--- State Table --->
			<div class="col-12 col-md-12 col-lg-8" id="show-State-table">
				<div class="table-responsive smart-table-style2 thori-scroll">
				  <table class="table table-borderless">
					<thead class="w500">
					  <tr>
						<th>City Name</th>
						<th>Visits</th>
						<th>Conversion</th>
						<th>Conversion Rate</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td><i class="icon-next-one mr15 d-gblue-clr f-10"></i>Chennai</td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Coimbatore</td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Madurai</td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Trichy</td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Salem</td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Vellore</td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Erode</td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Tuticorin</td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Tirunelveli</td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Other</td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					</tbody>
				  </table>
				</div>
			</div>
			<!---End State TAble ---->
			
			<!---- End Country City Data Table --------->	
			<div class="col-12 col-md-12 col-lg-4 mt20 mt-lg10">
				<div class="row small-radio-btn">
					<div class="smart-radio-btn text-truncate radio-strong-blue col-md-6 col-12">	
						<input name="locationmap" id="Visits" value="option1" checked="" type="radio">
						<label class="mb-lg20" for="Visits" onclick="updatePieChart('audiencepie')"> Visits </label>
					</div>
					<div class="smart-radio-btn text-truncate radio-strong-yellow col-md-6 col-12">
						<input name="locationmap" id="Conversion" value="option1" type="radio">
						<label class="mb-lg20" for="Conversion" onclick="updatePieChart('conversionpie')"> Conversion </label>
						
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
	<!------- Country Section Start----------->
	<div class="col-12 p0 mt15 mt-md50">
		<div class="row">
			<!------ Title Header-------------->
			<div class="col-12 col-md-12 col-lg-6 mb15 mb-lg0">
				<ul class="stepwizard-style2 w500 lato-font f-20 f-md-24">
				  <li> <a href="#">Top 10 Cities</a> </li>
				</ul>
				<p class="f-14 lh140 d-gblue-clr w400">Learn from which top Cities your page gets most traffic & conversions.</p>
			</div>
			<div class="col-12 col-md-12 col-lg-6 bs-h40 f-16 align-self-center smart-form">
			 <div class="row justify-content-end">
			   <div class="col-3 col-md-2 text-right">
				<span class="base-btn default-btn btn-xs-block px10" data-toggle="tooltip" data-placement="top"  data-original-title="Get report in detail"><i class="icon-download"></i></span>
			   </div>  		   
			   <div class="col-9 col-md-5">
				<input type="text" class="caleran-ex-1 field-h40 form-control" readonly  data-plugin-options='{"rangeOrientation":true,"showButtons":true}' />
			   </div>
			 </div>
			</div>
		</div>
		<div class="row mt15 mt-md40">
		<!---- Country City Data Table --------->
			<!--- City Table --->
			<div class="col-12 col-md-12 col-lg-8">
				<div class="table-responsive smart-table-style2 thori-scroll">
				  <table class="table table-borderless">
					<thead class="w500">
					  <tr>
						<th>City Name</th>
						<th>Visits</th>
						<th>Conversion</th>
						<th>Conversion Rate</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Mumbai</td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Delhi</td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Pune</td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Kolkatta</td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Jaipur</td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Kota</td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Chennai</td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Bengaluru</td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Indore</td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					 <tr>
						<td><i class="icon-next-one mr15 d-gblue-clr f-10"></i> Other</td>
						<td>3544164</td>
						<td>2498</td>
						<td>12%</td>
					  </tr>
					</tbody>
				  </table>
				</div>
			</div>
			<!---End City TAble ---->
			<!---- End Country City Data Table --------->	
			<div class="col-12 col-md-12 col-lg-4 mt20 mt-lg10">
				<div class="row small-radio-btn">
					<div class="smart-radio-btn text-truncate radio-strong-blue col-md-6 col-12">	
						<input name="locationmap1" id="Visits1" value="option1" checked="" type="radio">
						<label class="mb-lg20" for="Visits1" onclick="updatecityPieChart('topcitiespie')"> Visits </label>
					</div>
					<div class="smart-radio-btn text-truncate radio-strong-yellow col-md-6 col-12">
						<input name="locationmap1" id="Conversion1" value="option1" type="radio">
						<label class="mb-lg20" for="Conversion1" onclick="updatecityPieChart('citiesconversionpie')"> Conversion </label>
					</div>
					<div class="smart-radio-btn text-truncate radio-strong-green col-md-6 col-12">
						<input name="locationmap1" id="ConversionRate1" value="option1" type="radio">
						<label for="ConversionRate1" onclick="updatecityPieChart('citiesconversionratepie')"> Conversion Rate </label>
					</div>
				</div>
				<!--- Chart -->
				<div id="topcitiespie" class="mt15">
				<svg></svg>
				</div>
			</div>			
		</div>
	</div>
	<!------- Country Section End----------->
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
						<td>Segment</td>
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
						<td>Pop-ups & Bars</td>
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
	<!------- All Page Section End----------->			
</div>

<!------- DotcomPal Mail Automation Footer Include File ---------->
<?php include '../../../includes/automation-footer.php'; ?>
<!------- DotcomPal Mail Automation Footer Include File end ---------->