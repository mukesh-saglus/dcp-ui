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
<script src="<?php echo $basedir; ?>vendors/nvd3/linechart.js"></script>

<!------- Header Start----------->
<div class="container-fluid p15 px-md30 pt-md30">
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

<div class="container-fluid p15 p-md30">
	<!------- Audience  Section Start----------->
	<div class="col-12 p0">
		<div class="row">
			<!------ Title Header-------------->
			<div class="col-12 col-md-8 col-lg-9 mb15 mb-md0">
				<h4>Audience Overview</h4>
				<p class="f-14 lh140 d-gblue-clr w400">Checkout Audience details for the selected period</p>
			</div>
			<div class="col-12 col-md-4 col-lg-3 bs-h40 f-16 align-self-center smart-form">
				<input type="text" class="caleran-ex-1 field-h40 form-control" readonly data-plugin-options='{"rangeOrientation":true,"showButtons":true}' />
			</div>
		</div>
		<div class="row mt15 mt-md30 d-flex align-items-stretch">
			<!---- 1. Audience Coloum--------->
			<div class="col-12 col-md-6 col-lg-3 mb15 mb-lg0 align-self-stretch d-flex">
				<div class="conver-block p10 w-100">
					<div class="vl-gblue-bg p15">
						<h5 class="f-14 f-md-18 w700 text-center">Funnels/Journey Goal</h5>
					</div>
					<img class="img-fluid d-block mx-auto mt15 mb15 mt-md30 mb-md30" src="../../../images/journey-type.png">
					<div class="lato-font f-14 f-md-18 w400 text-center">
						Funnels/Journey Goal
						<br><span class="f-20 f-md-24 w500">Lead Generation</span>
					</div>
					<!------ Sepration Line Div
					<div class="conver-block-sepline mt15 mb15 mt-md20 mb-md20"></div>
					<div class="lato-font f-14 f-md-18 w400 text-center mb-md25">
						Conversion Type
						<br><span class="f-20 f-md-24 w500">NA</span>
					</div>------->
				</div>
			</div>
			<!---- 2. Audience Coloum--------->
			<div class="col-12 col-md-6 col-lg-3 mb15 mb-lg0 align-self-stretch d-flex">
				<div class="conver-block p10 w-100">
					<div class="vl-gblue-bg p15">
						<h5 class="f-14 f-md-18 w700 text-center">Audience</h5>
					</div>
					<img class="img-fluid d-block mx-auto mt15 mb15 mt-md30 mb-md30" src="../../../images/audience-icon.png">
					<div class="lato-font f-14 f-md-18 w400 text-center">
						Triggered
						<br><span class="f-20 f-md-24 w500">1000</span>
					</div>
					<!------ Sepration Line Div------->
					<div class="conver-block-sepline mt15 mb12 mt-md20"></div>
					<div class="row f-14 f-md-18 w400 lh150 text-center relative">
						<div class="col-6 pr5 mb-lg4">
							<img class="img-fluid d-block mx-auto mb5" src="../../../images/in-progress-icon.png"> In Progress
							<br>
							<span class="f-20 f-md-24 w500">200</span>
						</div>
						<div class="col-6 pl5 mb-lg4">
							<img class="img-fluid d-block mx-auto mb5" src="../../../images/ended-icon.png"> Ended
							<br>
							<span class="f-20 f-md-24 w500">100</span>
						</div>
						<div class="journey-triggered-border"></div>
					</div>
				</div>
			</div>
			<!---- 3. Audience Coloum--------->
			<div class="col-12 col-md-6 col-lg-3 mb15 mb-md0 align-self-stretch d-flex">
				<div class="conver-block p10 w-100">
					<div class="vl-gblue-bg p15">
						<h5 class="f-14 f-md-18 w700 text-center">Lead Generation</h5>
					</div>
					<img class="img-fluid d-block mx-auto mt15 mb15 mt-md30 mb-md30" src="../../../images/conversion-icon.png">

					<div class="lato-font f-14 f-md-18 w400 text-center">
						Conversion
						<br><span class="f-20 f-md-24 w500">NA</span>
					</div>
					<!------ Sepration Line Div------->
					<div class="conver-block-sepline mt15 mb15 mt-md20 mb-md20"></div>
					<div class="lato-font f-14 f-md-18 w400 text-center mb-md25">
						Conversion Rate
						<br><span class="f-20 f-md-24 w500">NA</span>
					</div>
				</div>
			</div>
			<!---- 4. Audience Coloum--------->
			<div class="col-12 col-md-6 col-lg-3 align-self-stretch d-flex">
				<div class="conver-block p10 w-100">
					<div class="vl-gblue-bg p15">
						<h5 class="f-14 f-md-18 w700 text-center">E.P.C.</h5>
					</div>
					<img class="img-fluid d-block mx-auto mt15 mb15 mt-md30 mb-md30" src="../../../images/epc-icon.png">
					<div class="lato-font f-14 f-md-18 w400 text-center">
						Total Sale
						<br><span class="f-20 f-md-24 w500">NA</span>
					</div>
					<!------ Sepration Line Div------->
					<div class="conver-block-sepline mt15 mb15 mt-md20 mb-md20"></div>
					<div class="lato-font f-14 f-md-18 w400 text-center mb-md25">
						E.P.C.
						<br><span class="f-20 f-md-24 w500">NA</span>
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
				<h4>Audience Triggered & Ended Graph</h4>
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
					<input type="text" class="caleran-ex-1 field-h40 form-control" readonly data-plugin-options='{"rangeOrientation":true,"showButtons":true}' />
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
						<div id="triggeredendedgraph">
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
	<!-------Audience Graph Section End----------->
</div>

<!------- DotcomPal Mail Automation Footer Include File ---------->
<?php include '../../../includes/automation-footer.php'; ?>
<!------- DotcomPal Mail Automation Footer Include File end ---------->