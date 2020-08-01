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
			<span class="f-20 f-md-24 lato-font">Web Analytics </span> &nbsp;
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="f-14 mt5 gblue-clr">Check your web analytics in detail</p>
		</div>
	</div>
</div>
<!------- Header End ----------->

<!------- Tabs Start ----------->
<ul class="nav tabs-style3 f-14 f-md-16 w-100 relative" role="tablist">
	<li class="nav-item ml15 ml-md30">
	<a class="nav-link lh110" href="web-analytics-overview.php">
		<span class="d-none d-md-block">Overview</span>
		<span class="d-block d-md-none"><i class="icon-overview f-18"></i></span></a>
	</li>
<li class="nav-item">
	<a class="nav-link lh110" href="web-analytics-technology.php">	
		<span class="d-none d-md-block">Technology</span>
		<span class="d-block d-md-none"><i class="icon-technology f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link active lh110" href="web-analytics-location.php">
		<span class="d-none d-md-block">Location</span>
		<span class="d-block d-md-none"><i class="icon-location f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="web-analytics-results.php">
	<span class="d-none d-md-block">Goal</span>
	<span class="d-block d-md-none"><i class="icon-result f-18"></i></span>
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
			<select class="selectpicker" data-live-search="true">
				<option>Andorra (AD)</option>
				<option>United Arab Emirates (AE)</option>
				<option>Afghanistan (AF)</option>
				<option>Afghanistan (AF)</option>
				<option>Anguilla (AI)</option>
			</select>
           </div>  		   
		   <div class="col-12 col-md-5 mt10 mt-md0">
		   <input type="text" class="caleran-ex-1 field-h40 form-control" readonly  data-plugin-options='{"rangeOrientation":true,"showButtons":true}' />
		   </div>
		 </div>
		</div>
		
	</div>

	<!--- Location No Data Record found sectuion start --->
	<div class="row mt15 mt-md40">
		<div class="col-12 ">
			<div class="relative">
			<img src="../../../../images/location-map-blank.png" class="mx-auto d-block img-fluid">
			<div class="conutry-not-found">
				<h1 class="f-18 f-md-24">Visitor Locations</h1>
				<p class="f-14">Here you can check top locations around the world your visitors are coming from.</p>
			</div>
			</div>	
		</div>
	</div>
	<!--- Location No Data Record found sectuion end --->	

	</div>
<!------- Country Section End----------->


</div>

<!------- Smart Footer Include File---------->
<?php include '../includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->