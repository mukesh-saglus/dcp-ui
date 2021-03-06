<!------- Smart Header Include File---------->
<?php include '../../../../smart/html/includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<!------- Smart funnel Stylesheet------=------->
<link rel="stylesheet" href="../../../css/funnel.css">
<!------- Smart funnel Stylesheet end---------->

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
					<li> <a href="#"> Funnel Analytics</a> </li>
					<li> <a href="#"> Funnel Name</a> </li>
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
	<a class="nav-link active lh110" href="overview-reports.php">
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
	<a class="nav-link lh110" href="location-reports.php">
		<span class="d-none d-md-block">Location</span>
		<span class="d-block d-md-none"><i class="icon-location f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="results-reports.php">
	<span class="d-none d-md-block">Goal<br></span>
	<span class="d-block d-md-none"><i class="icon-result f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="compare-reports.php">
	<span class="d-none d-md-block">Compare</span>
	<span class="d-block d-md-none"><i class="icon-compare f-18"></i></span>
	</a>
</li>
<li class="d-flex align-items-center view-detail-img-icon"><a href="#"  data-toggle="tooltip" data-placement="left" title="" data-original-title="View Details"><img src="<?php echo $basedir; ?>images/view-details-icon.png" class="img-fluid"></a> </li>	
</ul>
<!------- Tabs End ----------->


<div class="container-fluid p15 p-md30">
	<!------- Visits  Section Start----------->
	<div class="col-12 p0">
		<div class="row">
			<!------ Title Header-------------->
			<div class="col-12 col-md-8 col-lg-9 mb15 mb-md0">
				<h4>Visits Overview</h4>
				<p class="f-14 lh140 d-gblue-clr w400">Checkout Visits details for the selected period</p>
			</div>
			<div class="col-12 col-md-4 col-lg-3 bs-h40 f-16 align-self-center smart-form">
			<input type="text" class="caleran-ex-1 field-h40 form-control" readonly  data-plugin-options='{"rangeOrientation":true,"showButtons":true}' />
			</div>
		</div>
		<div class="row mt15 mt-md30 d-flex align-items-stretch">
			<!---- 1. Audience Coloum--------->
			<div class="col-12 col-md-3 col-lg-3 mb15 mb-md0 align-self-stretch d-flex">
				<div class="conver-block p10 w-100">
					<div class="vl-gblue-bg p15">
						<h5 class="f-14 f-md-18 w700 text-center">Funnel Type</h5>
					</div>
					<img class="img-fluid d-block mx-auto mt15 mb15 mt-md30 mb-md30" src="../../../images/funnel-type.png">
					<div class="lato-font f-14 f-md-18 w400 text-center">
						Funnel Type<br><span class="f-20 f-md-24 w500">Webinar</span>
					</div>
					<!------ Sepration Line Div------->
					<div class="conver-block-sepline mt15 mb15 mt-md20 mb-md20"></div>
					<div class="lato-font f-14 f-md-18 w400 text-center mb-md25">
						Conversion Type<br><span class="f-20 f-md-24 w500">Lead Acquisition</span>
					</div>
				</div>
			</div>
			<!---- 2. Audience Coloum--------->
			<div class="col-12 col-md-3 col-lg-3 mb15 mb-md0 align-self-stretch d-flex">
				<div class="conver-block p10 w-100">
					<div class="vl-gblue-bg p15">
						<h5 class="f-14 f-md-18 w700 text-center">Visitors</h5>
					</div>
					<img class="img-fluid d-block mx-auto mt15 mb15 mt-md30 mb-md30" src="../../../images/visitor-icon.png">
					<div class="lato-font f-14 f-md-18 w400 text-center">
						Total Visitors<br><span class="f-20 f-md-24 w500">1000</span>
					</div>
					<!------ Sepration Line Div------->
					<div class="conver-block-sepline mt15 mb15 mt-md20 mb-md20"></div>
					<div class="lato-font f-14 f-md-18 w400 text-center mb-md25">
						Unique Visitors<br><span class="f-20 f-md-24 w500">400</span>
					</div>
				</div>
			</div>
			<!---- 3. Audience Coloum--------->
			<div class="col-12 col-md-3 col-lg-3 mb15 mb-md0 align-self-stretch d-flex">
				<div class="conver-block p10 w-100">
					<div class="vl-gblue-bg p15">
						<h5 class="f-14 f-md-18 w700 text-center">Conversion</h5>
					</div>
					<img class="img-fluid d-block mx-auto mt15 mb15 mt-md30 mb-md30" src="../../../images/conversion-icon.png">
					
					<div class="lato-font f-14 f-md-18 w400 text-center">
						Conversion<br><span class="f-20 f-md-24 w500">1000</span>
					</div>
					<!------ Sepration Line Div------->
					<div class="conver-block-sepline mt15 mb15 mt-md20 mb-md20"></div>
					<div class="lato-font f-14 f-md-18 w400 text-center mb-md25">
						Conversion Rate<br><span class="f-20 f-md-24 w500">50%</span>
					</div>
				</div>
			</div>
			<!---- 4. Audience Coloum--------->
			<div class="col-12 col-md-3 col-lg-3 align-self-stretch d-flex">
				<div class="conver-block p10 w-100">
					<div class="vl-gblue-bg p15">
						<h5 class="f-14 f-md-18 w700 text-center">E.P.C.</h5>
					</div>
					<img class="img-fluid d-block mx-auto mt15 mb15 mt-md30 mb-md30" src="../../../images/epc-icon.png">
					<div class="lato-font f-14 f-md-18 w400 text-center">
						Total Sale<br><span class="f-20 f-md-24 w500">10,000</span>
					</div>
					<!------ Sepration Line Div------->
					<div class="conver-block-sepline mt15 mb15 mt-md20 mb-md20"></div>
					<div class="lato-font f-14 f-md-18 w400 text-center mb-md25">
						E.P.C.<br><span class="f-20 f-md-24 w500">4.7%</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!------- Audience Section End----------->
	
	<!-------Audience Graph Section Start----------->
	<div class="col-12 p0 mt15 mt-md80">
		<div class="row">
			<!------ Title Header-------------->
			<div class="col-12 col-md-8 col-lg-9 mb15 mb-md0">
				<h4>Visits Graph</h4>
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
					<input type="text" class="caleran-ex-1 field-h40 form-control" readonly  data-plugin-options='{"rangeOrientation":true,"showButtons":true}' />
				</div>
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
				 <div id="allvisitorsgraph">
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
						<th>Visitors</th>
						<th>Unique Visitors</th>
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
	<!-------Audience Graph Section End----------->
	
	<!------- All Pages Section Start----------->
	<div class="col-12 p0 mt15 mt-md50 details-section">
	<div class="row">
		<!------ Title Header-------------->
		<div class="col-12 mb15 mb-md0">
			<h4>All Pages</h4>
			<p class="f-14 lh140 d-gblue-clr w400">View quick stats of your pages instantly</p>
		</div>	
	</div>
		
		<!--- Filteration Div ---->
		<div class="row mt-md30">
			<div class="col-md-4 col-lg-4 col-xl-3 bs-h40 mb10 mb-md0">
				<select class="selectpicker f-14">
					<option>All Pages (400)</option>
					<option>All Pages (400)</option>
					<option>All Pages (400)</option>
				</select>
			</div>
			<div class="col-md-8 col-lg-8 col-xl-9">
				<div class="row">
					<div class="col-12 col-md-4 col-lg-4 col-xl-4 offset-xl-2 bs-h40 f-16 align-self-center smart-form mb15 mb-md0">	
						   <div class="input-group calendar-input-group">
								<input type="text" class="caleran-ex-1 form-control f-14 field-h40" id="target-cal" readonly="" data-plugin-options='{"rangeOrientation":true,"showButtons":true}' placeholder="Choose Date">
								<span class="input-group-btn caleran-show">
								<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
								</span>
							</div>
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
						<th>Title &nbsp;<i class="fa fa-sort"></i></th>
						<th>Created On &nbsp;<i class="fa fa-sort"></i></th>
						<th>Variant</th>
						<th>Visits</th>
						<th>Visitors</th>
						<th>Conversion</th>
						<th>Conversion Rate</th>
						<th>Actions</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td class="p-blue-clr">Page Name 1 <sup class="front-end-sup-btn">Front-end</sup></td>
						<td>17 Feb 2019 at 10:41 AM</td>
						<td>NA</td>
						<td>300</td>
						<td>150</td>
						<td>50</td>
						<td>6%</td>
						<td><ul class="table-action">
							 <li class="action-menu"><a href="#" class="action-item" title="Page Analytics"><i class="icon-report"></i></a></li>
						  </ul></td>
					  </tr>
					 <tr>
						<td class="p-blue-clr">A/B Test Name</td>
						<td>17 Feb 2019 at 10:41 AM</td>
						<td>2</td>
						<td>300</td>
						<td>100</td>
						<td>90</td>
						<td>6%</td>
						<td><ul class="table-action">
							 <li class="action-menu"><a href="#" class="action-item" title="A/B Test Analytics"><i class="icon-report"></i></a></li>
						  </ul></td>
					  </tr>
						
						 <tr>
						<td class="p-blue-clr">Page Name 3</td>
						<td>17 Feb 2019 at 10:41 AM</td>
						<td>NA</td>
						<td>300</td>
						<td>150</td>
						<td>50</td>
						<td>6%</td>
						<td><ul class="table-action">
							 <li class="action-menu"><a href="#" class="action-item" title="Page Analytics"><i class="icon-report"></i></a></li>
						  </ul></td>
					  </tr>
						
						 <tr>
						<td class="p-blue-clr">Page Name 4</td>
						<td>17 Feb 2019 at 10:41 AM</td>
						<td>NA</td>
						<td>100</td>
						<td>250</td>
						<td>40</td>
						<td>6%</td>
						<td><ul class="table-action">
							 <li class="action-menu"><a href="#" class="action-item" title="Page Analytics"><i class="icon-report"></i></a></li>
						  </ul></td>
					  </tr>
					  <tr>
						<td class="p-blue-clr">Page Name 5</td>
						<td>17 Feb 2019 at 10:41 AM</td>
						<td>NA</td>
						<td>300</td>
						<td>200</td>
						<td>40</td>
						<td>9%</td>
						<td><ul class="table-action">
							 <li class="action-menu"><a href="#" class="action-item" title="Page Analytics"><i class="icon-report"></i></a></li>
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

<!------- Smart Footer Include File---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->