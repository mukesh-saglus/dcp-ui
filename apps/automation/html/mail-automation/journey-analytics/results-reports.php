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
	<a class="nav-link lh110" href="location-reports.php">
		<span class="d-none d-md-block">Location</span>
		<span class="d-block d-md-none"><i class="icon-location f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link active lh110" href="results-reports.php">
	<span class="d-none d-md-block">Goal</span>
	<span class="d-block d-md-none"><i class="icon-result f-18"></i></span>
	</a>
</li>
<li class="d-flex align-items-center view-detail-img-icon"><a href="#"  data-toggle="tooltip" data-placement="left" title="" data-original-title="View Details"><img src="<?php echo $basedir; ?>images/view-details-icon.png" class="img-fluid"></a> </li>	
</ul>
<!------- Tabs End ----------->


<div class="container-fluid p15 p-md30">

<!------- Conversion Graph (Lead) Section Start----------->
	<div class="col-12 p0">
	<div class="row">
		<!------ Title Header-------------->
		<div class="col-12 col-md-8 col-lg-9 mb15 mb-md0">
			<h4>Conversion Graph (Page 1)</h4>
			<p class="f-14 lh140 d-gblue-clr w400">View conversion graph for the lead pages</p>
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
             <div id="leadgraph">
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
<!------- Conversion Graph (Lead) Section End----------->
	
<!------- Conversion Graph (Promo) Section Start----------->
	<div class="col-12 p0 mt15 mt-md80">
	<div class="row">
		<!------ Title Header-------------->
		<div class="col-12 col-md-8 col-lg-9 mb15 mb-md0">
			<h4>Conversion Graph (Page 2)</h4>
			<p class="f-14 lh140 d-gblue-clr w400">View conversion graph for the promo pages</p>
		</div>
		<div class="col-12 col-md-4 col-lg-3 bs-h40 f-16 align-self-center d-flex justify-content-between dropdown caret-icon-none simple-dropdown show-submenu">
		<!----- Graph Type icon section------->	
			<a href="#" class="align-self-center dropdown-toggle d-gblue-clr t-decoration-none" id="dropdownMenuDivider" data-toggle="dropdown"><i class="icon-more"></i> &nbsp;</a>
  
   		<div class="dropdown-menu dropdown-menu-right right-arrow">
	   <div class="p15 p-md20">
		   <div class="f-14 f-md-16 w400 d-gblue-clr mb15">View As</div>
			<ul class="nav tabs-style2 f-14" role="tablist">
			  <li class="nav-item"> <a class="nav-link active" data-toggle="tab" data-target="#linepromo">&nbsp; Line &nbsp;</a> </li>
			  <li class="nav-item"> <a class="nav-link" data-toggle="tab" data-target="#barpromo">&nbsp; Bar &nbsp;</a> </li>
			  <li class="nav-item"> <a class="nav-link show" data-toggle="tab" data-target="#tablepromo">&nbsp; Table &nbsp;</a> </li>
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
          <div id="linepromo" class="tab-pane active">
             <div id="promograph">
            <svg></svg>
            </div>
          </div>
          <div id="barpromo" class="tab-pane fade">
             <div id="graphpromobar">
            <svg></svg>
            </div>
          </div>
          <div id="tablepromo" class="tab-pane fade">
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
<!------- Conversion Graph (Promo) Section End----------->	
	
<!------- Conversion Graph (Share) Section Start----------->
	<div class="col-12 p0 mt15 mt-md80">
	<div class="row">
		<!------ Title Header-------------->
		<div class="col-12 col-md-8 col-lg-9 mb15 mb-md0">
			<h4>Conversion Graph (Page 3)</h4>
			<p class="f-14 lh140 d-gblue-clr w400">View conversion graph for the share pages</p>
		</div>
		<div class="col-12 col-md-4 col-lg-3 bs-h40 f-16 align-self-center d-flex justify-content-between dropdown caret-icon-none simple-dropdown show-submenu">
		<!----- Graph Type icon section------->	
			<a href="#" class="align-self-center dropdown-toggle d-gblue-clr t-decoration-none" id="dropdownMenuDivider" data-toggle="dropdown"><i class="icon-more"></i> &nbsp;</a>
  
   		<div class="dropdown-menu dropdown-menu-right right-arrow">
	   <div class="p15 p-md20">
		   <div class="f-14 f-md-16 w400 d-gblue-clr mb15">View As</div>
			<ul class="nav tabs-style2 f-14" role="tablist">
			  <li class="nav-item"> <a class="nav-link active" data-toggle="tab" data-target="#lineshare">&nbsp; Line &nbsp;</a> </li>
			  <li class="nav-item"> <a class="nav-link" data-toggle="tab" data-target="#barshare">&nbsp; Bar &nbsp;</a> </li>
			  <li class="nav-item"> <a class="nav-link show" data-toggle="tab" data-target="#tableshare">&nbsp; Table &nbsp;</a> </li>
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
          <div id="lineshare" class="tab-pane active">
             <div id="sharegraph">
            <svg></svg>
            </div>
          </div>
          <div id="barshare" class="tab-pane fade">
             <div id="graphsharebar">
            <svg></svg>
            </div>
          </div>
          <div id="tableshare" class="tab-pane fade">
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
<!------- Conversion Graph (Share) Section End----------->
<!------- Conversion Graph (Share) Section Start----------->
	<div class="col-12 p0 mt15 mt-md80">
	<div class="row">
		<!------ Title Header-------------->
		<div class="col-12 col-md-8 col-lg-9 mb15 mb-md0">
			<h4>Conversion Graph (Page 4)</h4>
			<p class="f-14 lh140 d-gblue-clr w400">View conversion graph for the share pages</p>
		</div>
		<div class="col-12 col-md-4 col-lg-3 bs-h40 f-16 align-self-center d-flex justify-content-between dropdown caret-icon-none simple-dropdown show-submenu">
		<!----- Graph Type icon section------->	
			<a href="#" class="align-self-center dropdown-toggle d-gblue-clr t-decoration-none" id="dropdownMenuDivider" data-toggle="dropdown"><i class="icon-more"></i> &nbsp;</a>
  
   		<div class="dropdown-menu dropdown-menu-right right-arrow">
	   <div class="p15 p-md20">
		   <div class="f-14 f-md-16 w400 d-gblue-clr mb15">View As</div>
			<ul class="nav tabs-style2 f-14" role="tablist">
			  <li class="nav-item"> <a class="nav-link active" data-toggle="tab" data-target="#linesharepage">&nbsp; Line &nbsp;</a> </li>
			  <li class="nav-item"> <a class="nav-link" data-toggle="tab" data-target="#barsharepage">&nbsp; Bar &nbsp;</a> </li>
			  <li class="nav-item"> <a class="nav-link show" data-toggle="tab" data-target="#tablesharepage">&nbsp; Table &nbsp;</a> </li>
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
          <div id="linesharepage" class="tab-pane active">
             <div id="salesgraph">
            <svg></svg>
            </div>
          </div>
          <div id="barsharepage" class="tab-pane fade">
             <div id="engagementgraphbar">
            <svg></svg>
            </div>
          </div>
          <div id="tablesharepage" class="tab-pane fade">
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
<!------- Conversion Graph (Share) Section End----------->
	
<!------- Conversion Rate Graph Section Start----------->
	<div class="col-12 p0 mt15 mt-md80">
	<div class="row">
		<!------ Title Header-------------->
		<div class="col-12 col-md-8 col-lg-9 mb15 mb-md0">
			<h4>Conversion Rate Graph</h4>
			<p class="f-14 lh140 d-gblue-clr w400">View conversion rate graph for your pages</p>
		</div>
		<div class="col-12 col-md-4 col-lg-3 bs-h40 f-16 align-self-center d-flex justify-content-between dropdown caret-icon-none simple-dropdown show-submenu">
		<!----- Graph Type icon section------->	
			<a href="#" class="align-self-center dropdown-toggle d-gblue-clr t-decoration-none" id="dropdownMenuDivider" data-toggle="dropdown"><i class="icon-more"></i> &nbsp;</a>
  
   		<div class="dropdown-menu dropdown-menu-right right-arrow">
	   <div class="p15 p-md20">
		   <div class="f-14 f-md-16 w400 d-gblue-clr mb15">View As</div>
			<ul class="nav tabs-style2 f-14" role="tablist">
			  <li class="nav-item"> <a class="nav-link active" data-toggle="tab" data-target="#linerate">&nbsp; Line &nbsp;</a> </li>
			  <li class="nav-item"> <a class="nav-link" data-toggle="tab" data-target="#barrate">&nbsp; Bar &nbsp;</a> </li>
			  <li class="nav-item"> <a class="nav-link show" data-toggle="tab" data-target="#tablerate">&nbsp; Table &nbsp;</a> </li>
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
          <div id="linerate" class="tab-pane active">
             <div id="conversionrategraph1">
            <svg></svg>
            </div>
          </div>
          <div id="barrate" class="tab-pane fade">
             <div id="conversionrategraphbar">
            <svg></svg>
            </div>
          </div>
          <div id="tablerate" class="tab-pane fade">
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
<!------- Conversion Rate Graph Section End----------->	
	
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