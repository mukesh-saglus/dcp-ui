<!------- Smart Header Include File---------->
<?php include '../../../../smart/html/includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<!------- Header Start----------->
<div class="container-fluid p15 px-md30 py-md30">
	<div class="row">
		<div class="col-12">
			<span class="f-20 f-md-24 lato-font">Campaign Analytics</span> &nbsp;
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="f-14 mt5 gblue-clr">Check detailed reports of your campaigns</p>
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
	<a class="nav-link lh110" href="technology-reports.php">	
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
<li class="nav-item">
	<a class="nav-link active lh110" href="compare-reports.php">
	<span class="d-none d-md-block">Compare
	</span>
	<span class="d-block d-md-none"><i class="icon-compare f-18"></i></span>
	</a>
</li>
</ul>
<!------- Tabs End ----------->

<!--------- Compare Overview Section------>
<div class="container-fluid p15 p-md30 compare-div">
	<div class="row">
		<div class="col-12 col-md-3 col-lg-3 f-18 w400 d-gblue-clr  align-self-center mb15 mb-md0">
			Compare (Overview)
		</div>
		<div class="col-12 col-md-4 col-lg-4">
			<div class="vl-gblue-bg p15 p-md30 radius5">
				<label for="exampleSelect1" class="gblue-clr f-16 w400">Choose Project</label>
				<select class="selectpicker f-14" data-live-search="true" title="Select from a list">
					<option>Dropdown option 1</option>
					<option>Dropdown option 2</option>
					<option>Dropdown option 3</option>
				</select>
			</div>
		</div>
		<div class="col-12 col-md-1 col-lg-1  align-self-center p15"><img src="../../../../../images/vs-icon.png" class="img-fluid d-block mx-auto">
		</div>
		<div class="col-12 col-md-4 col-lg-4">
			<div class="vl-gblue-bg p15 p-md30 radius5">
				<label for="exampleSelect1" class="gblue-clr f-16 w400">Choose Project</label>
				<select class="selectpicker f-14" data-live-search="true" title="Select from a list">
					<option>Dropdown option 1</option>
					<option>Dropdown option 2</option>
					<option>Dropdown option 3</option>
				</select>
			</div>
		</div>
	</div>
</div>
<!--------- Compare Overview Section end------>

<div class="container-fluid p15 p-md30 compare-mtop">

	<!------- Overview Section Start----------->
	<div class="row">
		<div class="col-12 f-18 w400">Overview</div>
		<div class="col-12 segment-accordion mt20">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#collapseVisitor">
						<a class="card-title lato-font">&nbsp; Overview</a>
					</div>
					<div id="collapseVisitor" class="collapse">
					<div class="card-body">
						<div class="table-responsive smart-table-style2 thori-scroll ml-md20">
							<table class="table table-borderless f-16">
								<tbody>
									<tr>
										<td width="34%">Visits</td>
										<td>4654644</td>
										<td class="text-center">4654644</td>
									</tr>
									<tr>
										<td>Visitors</td>
										<td>4654644</td>
										<td class="text-center">4654644</td>
									</tr>
									<tr>
										<td>Conversion</td>
										<td>4654644</td>
										<td class="text-center">4654644</td>
									</tr>
                                    <tr>
										<td>Conversion Rate</td>
										<td>6.5%</td>
										<td class="text-center">7.3%</td>
									</tr>  
								</tbody>
							</table>
						</div>
</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!------- Overview Section End----------->

	<!------- Technology Section Start----------->
	<div class="row mt15 mt-md30">

		<div class="col-12 f-18 w400">Technology</div>

		<!----- Technology table data---->
		<div class="col-12 segment-accordion mt20">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#ostable">
						<a class="card-title lato-font">&nbsp; Operating Systems</a>
					</div>
					<div id="ostable" class="collapse">
					<div class="card-body">
						<div class="table-responsive smart-table-style2 thori-scroll fc-paddingauto">
							<table class="table table-borderless f-16">
								<thead>
									<tr class="text-center">
										<th width="18%" class="text-left"></th>
										<th class="w400" width="20%">Visits</th>
										<th class="w400" width="20%">Visitors</th>
										<th class="w400" width="21%">Visits</th>
										<th class="w400" width="21%">Visitors</th>
									</tr>
								</thead>
								<tbody class="text-center">
									<tr>
										<td class="text-left"><img src="<?php echo $basedir; ?>images/andriod-icon.png" class="img-fluid mr30">Android</td>
										<td>2044164</td>
										<td>2044164</td>
										<td>578926</td>
										<td>578926</td>
									</tr>
									<tr>
										<td class="text-left"><img src="<?php echo $basedir; ?>images/macintosh-icon.png" class="img-fluid mr30">Macintosh</td>
										<td>2044164</td>
										<td>2044164</td>
										<td>578926</td>
										<td>578926</td>
									</tr>
									<tr>
										<td class="text-left"><img src="<?php echo $basedir; ?>images/windows-icon.png" class="img-fluid mr30">Windows</td>
										<td>2044164</td>
										<td>2044164</td>
										<td>578926</td>
										<td>578926</td>
									</tr>
									<tr>
										<td class="text-left"><img src="<?php echo $basedir; ?>images/linux-icon.png" class="img-fluid mr30">Linux</td>
										<td>2044164</td>
										<td>2044164</td>
										<td>578926</td>
										<td>578926</td>
									</tr>
									<tr>
										<td class="text-left"><img src="<?php echo $basedir; ?>images/ios-icon.png" class="img-fluid mr30">ios</td>
										<td>2044164</td>
										<td>2044164</td>
										<td>578926</td>
										<td>578926</td>
									</tr>
									<tr>
										<td class="text-left"><img src="<?php echo $basedir; ?>images/other-icon.png" class="img-fluid mr30">Other</td>
										<td>2044164</td>
										<td>2044164</td>
										<td>578926</td>
										<td>578926</td>
									</tr>
								</tbody>
							</table>
						</div>

                     </div>
					</div>
				</div>
			</div>
		</div>
		<!----- Technology table data end---->

		<!------- Browser Table Data Start----------->
		<div class="col-12 segment-accordion mt10">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#browsertable">
						<a class="card-title lato-font">&nbsp; Browser</a>
					</div>
					<div id="browsertable" class="collapse">
					<div class="card-body">
						<div class="table-responsive smart-table-style2 thori-scroll fc-paddingauto">
							<table class="table table-borderless f-16">
								<thead>
									<tr class="text-center">
										<th width="18%"></th>
										<th class="w400" width="20%">Visits</th>
										<th class="w400" width="20%">Visitors</th>
										<th class="w400" width="21%">Visits</th>
										<th class="w400" width="21%">Visitors</th>
									</tr>
								</thead>
								<tbody class="text-center">
									<tr>
										<td class="text-left"><img src="<?php echo $basedir; ?>images/chrome-icon.png" class="img-fluid mr30">Google Chrome</td>
										<td>2044164</td>
										<td>2044164</td>
										<td>578926</td>
										<td>578926</td>
									</tr>
									<tr>
										<td class="text-left"><img src="<?php echo $basedir; ?>images/mozila-icon.png" class="img-fluid mr30">Mozilla Firefox</td>
										<td>2044164</td>
										<td>2044164</td>
										<td>578926</td>
										<td>578926</td>
									</tr>
									<tr>
										<td class="text-left"><img src="<?php echo $basedir; ?>images/edge-icon.png" class="img-fluid mr30">Edge</td>
										<td>2044164</td>
										<td>2044164</td>
										<td>578926</td>
										<td>578926</td>
									</tr>
									<tr>
										<td class="text-left"><img src="<?php echo $basedir; ?>images/safari-icon.png" class="img-fluid mr30">Safari</td>
										<td>2044164</td>
										<td>2044164</td>
										<td>578926</td>
										<td>578926</td>
									</tr>
									<tr>
										<td class="text-left"><img src="<?php echo $basedir; ?>images/opera-icon.png" class="img-fluid mr30">Opera</td>
										<td>2044164</td>
										<td>2044164</td>
										<td>578926</td>
										<td>578926</td>
									</tr>
									<tr>
										<td class="text-left"><img src="<?php echo $basedir; ?>images/otherbrow-icon.png" class="img-fluid mr30">Others</td>
										<td>2044164</td>
										<td>2044164</td>
										<td>578926</td>
										<td>578926</td>
									</tr>
								</tbody>
							</table>


						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		<!------- Browser Table Data End----------->

		<!------- Devices Table Data Start----------->
		<div class="col-12 segment-accordion mt10">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#devicetable">
						<a class="card-title lato-font">&nbsp; Device</a>
					</div>
					<div id="devicetable" class="collapse">
                      <div class="card-body">
						<div class="table-responsive smart-table-style2 thori-scroll fc-paddingauto">
							<table class="table table-borderless f-16">
								<thead>
									<tr class="text-center">
										<th width="18%"></th>
										<th class="w400" width="20%">Visits</th>
										<th class="w400" width="20%">Visitors</th>
										<th class="w400" width="21%">Visits</th>
										<th class="w400" width="21%">Visitors</th>
									</tr>
								</thead>
								<tbody class="text-center">
									<tr>
										<td class="text-left"><img src="<?php echo $basedir; ?>images/desktop-icon.png" class="img-fluid mr30">Desktop</td>
										<td>2044164</td>
										<td>2044164</td>
										<td>578926</td>
										<td>578926</td>
									</tr>
									<tr>
										<td class="text-left"><img src="<?php echo $basedir; ?>images/laptop-icon.png" class="img-fluid mr30">Laptop</td>
										<td>2044164</td>
										<td>2044164</td>
										<td>578926</td>
										<td>578926</td>
									</tr>
									<tr>
										<td class="text-left"><img src="<?php echo $basedir; ?>images/androidphone-icon.png" class="img-fluid mr30">Android Phone</td>
										<td>2044164</td>
										<td>2044164</td>
										<td>578926</td>
										<td>578926</td>
									</tr>
									<tr>
										<td class="text-left"><img src="<?php echo $basedir; ?>images/iphone-icon.png" class="img-fluid mr30">i Phone</td>
										<td>2044164</td>
										<td>2044164</td>
										<td>578926</td>
										<td>578926</td>
									</tr>
									<tr>
										<td class="text-left"><img src="<?php echo $basedir; ?>images/ipad-icon.png" class="img-fluid mr30">i Pad</td>
										<td>2044164</td>
										<td>2044164</td>
										<td>578926</td>
										<td>578926</td>
									</tr>
									<tr>
										<td class="text-left"><img src="<?php echo $basedir; ?>images/otherdevi-icon.png" class="img-fluid mr30">Others</td>
										<td>2044164</td>
										<td>2044164</td>
										<td>578926</td>
										<td>578926</td>
									</tr>
								</tbody>
							</table>


						</div>

					</div>
					</div>
				</div>
			</div>
		</div>
		<!------- Devices Table Data End----------->

	</div>
	<!------- Technology Section End----------->


	<!------- Conutry Section Start----------->
	<div class="row mt15 mt-md30">

		<div class="col-12 f-18 w400">Top 10 Location</div>


		<div class="col-12 segment-accordion mt20">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#conutrytable">
						<a class="card-title lato-font">&nbsp; Country</a>
					</div>
					<div id="conutrytable" class="collapse">
					 <div class="card-body">
						<div class="table-responsive smart-table-style2 thori-scroll fc-paddingauto">
							<table class="table table-borderless f-16">
								<thead>
									<tr class="text-center">
										<th class="text-left" width="16%"></th>
										<th class="w400" width="16%">Visitors</th>
										<th class="w400" width="18%">Conversion</th>
										<th class="w400 text-left" width="16%">Country</th>
										<th class="w400" width="18%">Visitors</th>
										<th class="w400" width="16%">Conversion</th>
									</tr>
								</thead>
								<tbody class="text-center">
									<tr>
										<td class="text-left"><img src="<?php echo $basedir; ?>images/united-states.png" class="img-fluid mr30">United States</td>
										<td>3544164</td>
										<td>3544164</td>
										<td class="heading-dark-clr text-left"><img src="<?php echo $basedir; ?>images/united-states.png" class="img-fluid mr30">United States</td>
										<td>2498</td>
										<td>2498</td>
									</tr>
									<tr>
										<td class="text-left"><img src="<?php echo $basedir; ?>images/malaysia.png" class="img-fluid mr30">Malaysia</td>
										<td>3544164</td>
										<td>3544164</td>
										<td class="heading-dark-clr text-left"><img src="<?php echo $basedir; ?>images/malaysia.png" class="img-fluid mr30">Malaysia</td>
										<td>2498</td>
										<td>2498</td>
									</tr>
									<tr>
										<td class="text-left"><img src="<?php echo $basedir; ?>images/india.png" class="img-fluid mr30">Philippines</td>
										<td>3544164</td>
										<td>3544164</td>
										<td class="heading-dark-clr text-left"><img src="<?php echo $basedir; ?>images/india.png" class="img-fluid mr30">India</td>
										<td>2498</td>
										<td>2498</td>
									</tr>
									<tr>
										<td class="text-left"><img src="<?php echo $basedir; ?>images/philippines.png" class="img-fluid mr30">Philippines</td>
										<td>3544164</td>
										<td>3544164</td>
										<td class="heading-dark-clr text-left"><img src="<?php echo $basedir; ?>images/philippines.png" class="img-fluid mr30">India</td>
										<td>2498</td>
										<td>2498</td>
									</tr>
									<tr>
										<td class="text-left"><img src="<?php echo $basedir; ?>images/canada.png" class="img-fluid mr30">Canada</td>
										<td>3544164</td>
										<td>3544164</td>
										<td class="heading-dark-clr text-left"><img src="<?php echo $basedir; ?>images/canada.png" class="img-fluid mr30">Canada</td>
										<td>2498</td>
										<td>2498</td>
									</tr>

									<tr>
										<td class="text-left"><img src="<?php echo $basedir; ?>images/nigeria.png" class="img-fluid mr30">Nigeria</td>
										<td>3544164</td>
										<td>3544164</td>
										<td class="heading-dark-clr text-left"><img src="<?php echo $basedir; ?>images/nigeria.png" class="img-fluid mr30">Nigeria</td>
										<td>2498</td>
										<td>2498</td>
									</tr>

									<tr>
										<td class="text-left"><img src="<?php echo $basedir; ?>images/netherlands.png" class="img-fluid mr30">Netherlands</td>
										<td>3544164</td>
										<td>3544164</td>
										<td class="heading-dark-clr text-left"><img src="<?php echo $basedir; ?>images/netherlands.png" class="img-fluid mr30">Netherlands</td>
										<td>2498</td>
										<td>2498</td>
									</tr>


									<tr>
										<td class="text-left"><img src="<?php echo $basedir; ?>images/vietnam.png" class="img-fluid mr30">Vietnam</td>
										<td>3544164</td>
										<td>3544164</td>
										<td class="heading-dark-clr text-left"><img src="<?php echo $basedir; ?>images/vietnam.png" class="img-fluid mr30">Vietnam</td>
										<td>2498</td>
										<td>2498</td>
									</tr>
									<tr>
										<td class="text-left"><img src="<?php echo $basedir; ?>images/mexico.png" class="img-fluid mr30">Mexico</td>
										<td>3544164</td>
										<td>3544164</td>
										<td class="heading-dark-clr text-left"><img src="<?php echo $basedir; ?>images/mexico.png" class="img-fluid mr30">Mexico</td>
										<td>2498</td>
										<td>2498</td>
									</tr>
									<tr>
										<td class="text-left"><img src="<?php echo $basedir; ?>images/south-africa.png" class="img-fluid mr30">South Africa</td>
										<td>3544164</td>
										<td>3544164</td>
										<td class="heading-dark-clr text-left"><img src="<?php echo $basedir; ?>images/south-africa.png" class="img-fluid mr30">South Africa</td>
										<td>2498</td>
										<td>2498</td>
									</tr>
								</tbody>
							</table>
						</div>


					</div>
				</div>
				</div>
			</div>
		</div>




	</div>
	<!------- Conutry Section End----------->





</div>


<!------- Smart Footer Include File---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->