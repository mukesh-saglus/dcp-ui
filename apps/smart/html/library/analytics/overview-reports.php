<!------- Smart Header Include File---------->
<?php include '../../../../smart/html/includes/dcp-header.php'; ?>
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
					<li> <a href="#"> MyDrive</a> </li>
					<li> <a href="#"> Analytics</a> </li>
					<li> <a href="#"> Image Name</a> </li>
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


</ul>
<!------- Tabs End ----------->


<div class="container-fluid p15 p-md30">
	<!------- Audience Overview Section Start----------->
	<div class="col-12 p0">
		<div class="row">
			<!------ Title Header-------------->
			<div class="col-12 col-md-8 col-lg-9 mb15 mb-md0">
				<h4>Visits Overview</h4>
				<p class="f-14 lh140 d-gblue-clr w400">You have some messages & notifications today, finish them all! or you can also manage reports</p>
			</div>
			<div class="col-12 col-md-4 col-lg-3 bs-h40 f-16 align-self-center smart-form">
		   <input type="text" class="caleran-ex-1 field-h40 form-control" readonly  data-plugin-options='{"rangeOrientation":true,"showButtons":true}' />
			</div>
		</div>
		<div class="row mt15 mt-md40">
			<!---- Data Coloum--------->
			<div class="col-12 col-md-4 col-lg-4 mb15 mb-md0">
				<div class="media">
					<span class="d-flex align-items-center overview-icon">
						<img class="img-fluid d-block mx-auto" src="../../../../smart/images/all-audiences-icon.png">
					</span>
					<div class="media-body align-self-center ml15 ml-md30">
						<h5 class="vd-gblue-clr w400">Visits</h5>
						<p class="lato-font vd-gblue-clr w700 f-30 f-lg-36 mt8">5k</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4 col-lg-4 mb15 mb-md0">
				<div class="media">
					<span class="d-flex align-items-center overview-icon">
						<img class="img-fluid d-block mx-auto" src="../../../../smart/images/unique-audiences-icon.png">
					</span>
					<div class="media-body align-self-center ml15 ml-md30">
						<h5 class="vd-gblue-clr w400">Total Visitors</h5>
						<p class="lato-font vd-gblue-clr w700 f-30 f-lg-36 mt8">2.5k</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4 col-lg-4 mb15 mb-md0">
				<div class="media">
					<span class="d-flex align-items-center overview-icon">
						<img class="img-fluid d-block mx-auto" src="../../../../smart/images/likes-icon.png">
					</span>
					<div class="media-body align-self-center ml15 ml-md30">
						<h5 class="vd-gblue-clr w400">Like</h5>
						<p class="lato-font vd-gblue-clr w700 f-30 f-lg-36 mt8">1.8k</p>
					</div>
				</div>
			</div>
				<!--<div class="col-12 col-md-3 col-lg-3">
				<div class="media">
					<span class="d-flex align-items-center overview-icon">
						<img class="img-fluid d-block mx-auto" src="../../../../smart/images/dislike-icon.png">
					</span>
					<div class="media-body align-self-center ml15 ml-md30">
						<h5 class="vd-gblue-clr w400">Dislike</h5>
						<p class="lato-font vd-gblue-clr w700 f-30 f-lg-36 mt8">100</p>
					</div>
				</div>
			</div>-->
		</div>
	</div>
	<!------- Audience Overview Section End----------->
	<!-------Traffic Graph Section Start----------->
	<div class="col-12 p0 mt15 mt-md80">
		<div class="row">
			<!------ Traffic Header-------------->
			<div class="col-12 col-md-8 col-lg-9 mb15 mb-md0">
				<h4>Visitors Graph</h4>
				<p class="f-14 lh140 d-gblue-clr w400">You have some messages & notifications today, finish them all! or you can also manage reports</p>
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
	<!-------Traffic Graph Section End----------->
		
</div>

<!------- Smart Footer Include File---------->
<?php include '../../../../smart/html/includes/dcp-footer.php'; ?>
<!------- Smart Footer Include File end ---------->