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
			<span class="f-20 f-md-24 lato-font">Segment Analytics </span> &nbsp;
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
	<a class="nav-link active lh110" href="segment-analytics-overview.php">
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
	<a class="nav-link lh110" href="segment-analytics-location.php">
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
<!------- Audiences Overview Section Start----------->
	<div class="col-12 p0">
	<div class="row">
		<!------ Title Header-------------->
		<div class="col-12 col-md-8 col-lg-9 mb15 mb-md0">
			<h4>Audiences Overview</h4>
			<p class="f-14 lh140 d-gblue-clr w400">Check audience overview at a glance for the selected period</p>
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
					<img class="img-fluid d-block mx-auto" src="../../images/segment-exist.png">
				</span>
				<div class="media-body align-self-center ml15 ml-md30">
					<h5 class="vd-gblue-clr w400">Total Segment</h5>
					<p class="lato-font vd-gblue-clr w700 f-30 f-lg-36 mt8">2.5 K</p>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-3 col-lg-3 mb15 mb-md0">
			<div class="media">
				<span class="d-flex align-items-center overview-icon">
					<img class="img-fluid d-block mx-auto" src="../../images/all-audiences-icon.png">
				</span>
				<div class="media-body align-self-center ml15 ml-md30">
					<h5 class="vd-gblue-clr w400">Visits</h5>
					<p class="lato-font vd-gblue-clr w700 f-30 f-lg-36 mt8">250</p>
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
					<p class="lato-font vd-gblue-clr w700 f-30 f-lg-36 mt8">400</p>
				</div>
			</div>
		</div>
			<div class="col-12 col-md-3 col-lg-3">
			<div class="media">
				<span class="d-flex align-items-center overview-icon">
					<img class="img-fluid d-block mx-auto" src="../../images/known-audiences-icon.png">
				</span>
				<div class="media-body align-self-center ml15 ml-md30">
					<h5 class="vd-gblue-clr w400">Total Contacts</h5>
					<p class="lato-font vd-gblue-clr w700 f-30 f-lg-36 mt8">180</p>
				</div>
			</div>
		</div>
	</div>
	</div>
<!------- Audiences Overview Section End----------->
	
<!------- Audience Traffic Graph Section Start----------->
	<div class="col-12 p0 mt15 mt-md80">
	<div class="row">
		<!------ Title Header-------------->
		<div class="col-12 col-md-8 col-lg-9 mb15 mb-md0">
			<h4>Segment Traffic Graph</h4>
			<p class="f-14 lh140 d-gblue-clr w400">Check traffic stats for the selected period </p>
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
			 <svg>
			 </svg>
        <!--<svg>
		<defs>
		<linearGradient id="grad3" x1="100%" y1="50%" x2="0%" y2="100%">
        <stop offset="0%" style="stop-color:rgba(255,0,0,0.5);stop-opacity:1" />
        <stop offset="100%" style="stop-color:rgba(255,0,0,0);stop-opacity:1" />
		</linearGradient>
	  
		<linearGradient id="grad4" x1="0%" y1="0%" x2="0%" y2="100%">
        <stop offset="0%" style="stop-color:rgba(0, 146, 255,0.5);stop-opacity:1" />
        <stop offset="100%" style="stop-color:rgba(0, 146, 255,0);stop-opacity:1" />
		</linearGradient>
		</defs>
		</svg>
  <style>
  .nv-series-0 .nv-area {fill: url(#grad3)}
  .nv-series-1 .nv-area {fill: url(#grad4)}
  </style>-->
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
<!------- Audience Traffic Graph Section End----------->
	
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
							 <li class="action-menu"><a href="#" class="action-item" title="Report"><i class="icon-report"></i></a></li>
						  </ul></td>
					  </tr>
					 <tr>
						<td class="p-blue-clr">Segment Title Two</td>
						<td>Nov 2, 2017</td>
						<td>300</td>
						<td>150</td>
						<td>6</td>
						<td><ul class="table-action">
							 <li class="action-menu"><a href="#" class="action-item" title="Report"><i class="icon-report"></i></a></li>
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