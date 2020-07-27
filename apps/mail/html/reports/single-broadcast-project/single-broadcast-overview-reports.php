<!------- Smart Header Include File---------->
<?php include '../../../../smart/html/includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<!------- Smart Mail Stylesheet------=------->
<link rel="stylesheet" href="../../../css/mail.css">
<!------- Smart Mail Stylesheet end---------->

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
					<li> <a href="#"> Analytics</a> </li>
					<li> <a href="#"> Mails </a> </li>
					<li> <a href="#">  Campaign Title</a> </li>
				</ul>
				<!--<div class="d-flex mt7">
					<a href="#" class="gblue-clr t-decoration-none f-17 mr5" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
					<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
				</div>-->
			</div>
			<p class="f-14 mt5 gblue-clr">Check analytics of your emails in details</p>	
		</div>
	</div>
</div>
<!------- Header End ----------->

<!------- Tabs Start ----------->
<ul class="nav tabs-style3 f-14 f-md-16 w-100 relative" role="tablist">
	<li class="nav-item ml15 ml-md30">
	<a class="nav-link active lh110" href="single-broadcast-overview-reports.php">
		<span class="d-none d-md-block">Overview</span>
		<span class="d-block d-md-none"><i class="icon-overview f-18"></i></span></a>
	</li>
<li class="nav-item">
	<a class="nav-link lh110" href="single-broadcast-technology-reports.php">	
		<span class="d-none d-md-block">Technology</span>
		<span class="d-block d-md-none"><i class="icon-technology f-18"></i></span>
	</a>
</li>	
<li class="nav-item">
	<a class="nav-link lh110" href="single-broadcast-location-reports.php">	
		<span class="d-none d-md-block">Location</span>
		<span class="d-block d-md-none"><i class="icon-location f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="single-broadcast-link-activity.php">
		<span class="d-none d-md-block">Link Activity</span>
		<span class="d-block d-md-none"><i class="icon-link-activity f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="single-broadcast-subscriber-activity.php">
	<span class="d-none d-md-block">Subscriber Activity</span>
	<span class="d-block d-md-none"><i class="icon-person  f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="single-broadcast-unsubscriber-activity.php">
	<span class="d-none d-md-block">Unsubscriber Activity</span>
	<span class="d-block d-md-none"><i class="icon-on-unsubscribers f-18"></i></span>
	</a>
</li>
</ul>
<!------- Tabs End ----------->


<div class="container-fluid p15 p-md30">
<!------- Mail Overview Section Start----------->
	<div class="col-12 p0">
		<div class="row">
			<!------ Title Header-------------->
			<div class="col-12 col-md-8 col-lg-9 mb15 mb-md0">
				<h4>Mail Overview</h4>
				<p class="f-14 lh140 d-gblue-clr w400">Check mail overview at a glance for the selected period</p>
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
						<img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/mails-opened.png">
					</span>
					<div class="media-body align-self-center ml15 ml-md30">
						<h5 class="vd-gblue-clr w400">Open Rate</h5>
						<p class="lato-font vd-gblue-clr w700 f-30 f-lg-36 mt8">12%</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-3 col-lg-3 mb15 mb-md0">
				<div class="media">
					<span class="d-flex align-items-center overview-icon">
						<img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/clicked-rate-icon.png">
					</span>
					<div class="media-body align-self-center ml15 ml-md30">
						<h5 class="vd-gblue-clr w400">Clicked Rate</h5>
						<p class="lato-font vd-gblue-clr w700 f-30 f-lg-36 mt8">7%</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-3 col-lg-3 mb15 mb-md0">
				<div class="media">
					<span class="d-flex align-items-center overview-icon">
						<img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/unsubscriber-rate-icon.png">
					</span>
					<div class="media-body align-self-center ml15 ml-md30">
						<h5 class="vd-gblue-clr w400">Unsubscriber Rate</h5>
						<p class="lato-font vd-gblue-clr w700 f-30 f-lg-36 mt8">4%</p>
					</div>
				</div>
			</div>
				<div class="col-12 col-md-3 col-lg-3">
				<div class="media">
					<span class="d-flex align-items-center overview-icon">
						<img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/complaint-rate-icon.png">
					</span>
					<div class="media-body align-self-center ml15 ml-md30">
						<h5 class="vd-gblue-clr w400">Complaint Rate</h5>
						<p class="lato-font vd-gblue-clr w700 f-30 f-lg-36 mt8">1.2%</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!------- Mail Overview Section End----------->
	<!------- Conversions Section Start----------->
	<div class="col-12 p0 mt15 mt-md80">
		<div class="row">
			<!------ Title Header-------------->
			<div class="col-12 col-md-8 col-lg-9 mb15 mb-md0">
				<h4>Conversions</h4>
				<p class="f-14 lh140 d-gblue-clr w400">Check out conversion details for the selected period</p>
			</div>
			<div class="col-12 col-md-4 col-lg-3 bs-h40 f-16 align-self-center smart-form">
			<input type="text" class="caleran-ex-1 field-h40 form-control" readonly  data-plugin-options='{"rangeOrientation":true,"showButtons":true}' />
			</div>
		</div>
		<div class="row mt15 mt-md30 d-flex align-items-stretch">
			<!---- Conversions Coloum--------->
			<div class="col-12 col-md-3 col-lg-3 mb15 mb-md0 align-self-stretch d-flex">
				<div class="conver-block p10 w-100">
					
					<div class="vl-gblue-bg p15">
						<h5 class="f-14 f-md-18 w700 text-center">Delivery Information</h5>
					</div>
					
					<img class="img-fluid d-block mx-auto mt15 mb15 mt-md30 mb-md30" src="<?php echo $basedir; ?>images/mail-delivery-icon.png">
					
					<div class="lato-font f-14 f-md-18 w400 text-center">
						Sent<br>
						<span class="f-20 f-md-24 w700">4000</span>
					</div>
					<!------ Sepration Line Div------->
					<div class="conver-block-sepline mt15 mb15 mt-md20 mb-md20">
					</div>
					
					<div class="lato-font f-14 f-md-18 w400 text-center mb-md25">
						Delivered<br>
						<span class="f-20 f-md-24 w700">2500</span>
					</div>
					
				</div>
			</div>
			<div class="col-12 col-md-3 col-lg-3 mb15 mb-md0 align-self-stretch d-flex">
				<div class="conver-block p10 w-100">
					
					<div class="vl-gblue-bg p15">
						<h5 class="f-14 f-md-18 w700 text-center">Mail Action Information</h5>
					</div>
					
					<img class="img-fluid d-block mx-auto mt15 mb15 mt-md30 mb-md30" src="<?php echo $basedir; ?>images/mail-action-icon.png">
					
					<div class="lato-font f-14 f-md-18 w400 text-center">
						Open Mail<br>
						<span class="f-20 f-md-24 w700">2500</span>
					</div>
					<!------ Sepration Line Div------->
					<div class="conver-block-sepline mt15 mb15 mt-md20 mb-md20">
					</div>
					
					<div class="lato-font f-14 f-md-18 w400 text-center mb-md25">
						Click Mail<br>
						<span class="f-20 f-md-24 w700">2000</span>
					</div>
					
				</div>
			</div>
			<div class="col-12 col-md-3 col-lg-3 mb15 mb-md0 align-self-stretch d-flex">
				<div class="conver-block p10 w-100">
					
					<div class="vl-gblue-bg p15">
						<h5 class="f-14 f-md-18 w700 text-center">Subscriber Information</h5>
					</div>
					
					<img class="img-fluid d-block mx-auto mt15 mb15 mt-md30 mb-md30" src="<?php echo $basedir; ?>images/subscriber-info-icon.png">
					
					<div class="lato-font f-14 f-md-18 w400 text-center">
						Unsubscriber<br>
						<span class="f-20 f-md-24 w700">400</span>
					</div>
					<!------ Sepration Line Div------->
					<div class="conver-block-sepline mt15 mb15 mt-md20 mb-md20">
					</div>
					
					<div class="lato-font f-14 f-md-18 w400 text-center mb-md25">
						Complaint<br>
						<span class="f-20 f-md-24 w700">100</span>
					</div>
					
				</div>
			</div>
			<div class="col-12 col-md-3 col-lg-3 align-self-stretch d-flex">
				<div class="conver-block p10 w-100">
					
					<div class="vl-gblue-bg p15">
						<h5 class="f-14 f-md-18 w700 text-center">Bounce Information</h5>
					</div>
					
					<img class="img-fluid d-block mx-auto mt15 mb15 mt-md30 mb-md30" src="<?php echo $basedir; ?>images/bounce-info-icon.png">
					
					<div class="lato-font f-14 f-md-18 w400 text-center">
						Bounce<br>
						<span class="f-20 f-md-24 w700">200</span>
					</div>
					<!------ Sepration Line Div------->
					<div class="conver-block-sepline mt15 mb15 mt-md20 mb-md20">
					</div>
					
					<div class="lato-font f-14 f-md-18 w400 text-center mb-md25">
						Bounce Rate<br>
						<span class="f-20 f-md-24 w700">2%</span>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!------- Conversions Section End----------->		
	<!-------Visitors Graph Section Start----------->
	<div class="col-12 p0 mt15 mt-md80">
		<div class="row">
			<!------ Title Header-------------->
			<div class="col-12 col-md-8 col-lg-9 mb15 mb-md0">
				<h4>Open vs Clicked Graph</h4>
				<p class="f-14 lh140 d-gblue-clr w400">Check open vs clicked graph for the selected period</p>
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
				 <div id="openclickedgraph">
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
	<!-------Visitors Graph Section End----------->
</div>

<!------- Smart Footer Include File---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->