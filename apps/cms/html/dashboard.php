<!------- Smart Header Include File---------->
<?php include '../../smart/html/includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<!------- CMS Stylesheet------=------->
<link rel="stylesheet" href="../css/cms.css">
<!------- CMS Stylesheet end---------->

<!--------- NVD3 Library Graph ------------------------>
<link href="<?php echo $basedir; ?>vendors/nvd3/nv.d3.css" rel="stylesheet" type="text/css">
<link href="<?php echo $basedir; ?>vendors/nvd3/nvd-style.css" rel="stylesheet" type="text/css">
<script src="<?php echo $basedir; ?>vendors/nvd3/d3.min.js"></script>
<script src="<?php echo $basedir; ?>vendors/nvd3/nv.d3.min.js"></script>
<script src="<?php echo $basedir; ?>vendors/nvd3/stream_layers.js"></script>

<!------- Business Header Start----------->
<div class="dash-header-bg">
<div class="container-fluid p15 px-md30 py-md20 p-blue-clr">
	<div class="row">
		<div class="col-4 col-lg-2 col-md-2 text-left text-md-left mb15 mb-md0">
			<div class="d-inline-block text-center">
				<img src="../../smart/images/tempreature-icon.png" class="img-fluid mb10">
			<div class="lato-font f-20 f-md-24">
				24<i class="icon-circle align-top f-5 w600 mt4 mt-md7 relative d-inline-block"></i>
				<span class="f-14 f-md-18">C</span>
			</div>
				<p class="f-12 text-uppercase">Cloudy</p>
			</div>
		</div>
		<div class="col-8 col-lg-8 col-md-6 text-left text-md-left mb15 mb-md0 align-self-center">
			<span class="f-18 f-md-18 lato-font w400">Welcome</span><br>
			<h4>Jordan Charlsbro!</h4>
			<p class="f-14 w400 lh140 gblue-clr">let’s create quality content that boosts engagement & viewership, and satisfies needs of your info-hungry targeted audience</p>
		</div>
		<div class="offset-4 col-8 offset-lg-0 offset-md-0 col-lg-2 col-md-4 lato-font text-left text-md-right align-self-center">
			<div class="f-14 p-blue-clr w400">Thursday, January 25, 2018</div>
			<div class="d-flex align-items-center justify-content-start justify-content-md-end gblue-clr">
				<div class="w300 f-30 f-md-35">02:33:17</div>
				<div class="w300 f-11 pl5">Pm<br>
				<span class="relative top5"><i class="icon-sun"></i></span>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!------- Business Header End ----------->


<div class="container-fluid p15 p-md30">
<!------- Business Overview Section Start----------->
	<div class="col-12 p0">
	<div class="row">
		<!------ Title Header-------------->
		<div class="col-12 col-md-8 col-lg-9 mb15 mb-md0">
			<h4>Blog Overview</h4>
			<p class="f-14 lh140 d-gblue-clr w400">Get a complete overview of all your blogs here</p>
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
					<img class="img-fluid d-block mx-auto" src="../../smart/images/all-account-icon.png">
				</span>
				<div class="media-body align-self-center ml15 ml-md30">
					<h5 class="vd-gblue-clr w400">All accounts</h5>
					<p class="lato-font vd-gblue-clr w700 f-30 f-lg-36 mt8">250</p>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-4 col-lg-4 mb15 mb-md0">
			<div class="media">
				<span class="d-flex align-items-center overview-icon">
					<img class="img-fluid d-block mx-auto" src="../../smart/images/unique-visitors.png">
				</span>
				<div class="media-body align-self-center ml15 ml-md30">
					<h5 class="vd-gblue-clr w400">Unique visitors</h5>
					<p class="lato-font vd-gblue-clr w700 f-30 f-lg-36 mt8">2.5 K</p>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-4 col-lg-4">
			<div class="media">
				<span class="d-flex align-items-center overview-icon">
					<img class="img-fluid d-block mx-auto" src="../../smart/images/acquisition-lead-for-blog-icon.png">
				</span>
				<div class="media-body align-self-center ml15 ml-md30">
					<h5 class="vd-gblue-clr w400">Acquisition lead for blog</h5>
					<p class="lato-font vd-gblue-clr w700 f-30 f-lg-36 mt8">400</p>
				</div>
			</div>
		</div>
	</div>
	</div>
<!------- Business Overview Section End----------->
	
<!------- Conversions Section Start----------->
	<div class="col-12 p0 mt15 mt-md80">
	<div class="row">
		<!------ Title Header-------------->
		<div class="col-12 col-md-8 col-lg-9 mb15 mb-md0">
			<h4>Conversions</h4>
			<p class="f-14 lh140 d-gblue-clr w400">Have a complete glimpse of your conversions data here</p>
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
					<h5 class="f-14 f-md-18 w700 text-center">Blog Conversion</h5>
				</div>
				
				<img class="img-fluid d-block mx-auto mt15 mb15 mt-md30 mb-md30" src="../images/blog-icon.png">
				
				<div class="lato-font f-14 f-md-18 w400 text-center">
					Acquired Lead<br>
					<span class="f-20 f-md-24 w700">400</span>
				</div>
				<!------ Sepration Line Div------->
				<div class="conver-block-sepline mt15 mb15 mt-md20 mb-md20">
				</div>
				
				<div class="lato-font f-14 f-md-18 w400 text-center mb-md25">Acquisition Lead Rate<br>
					<span class="f-20 f-md-24 w700">2%</span>
				</div>
				
			</div>
		</div>
		<div class="col-12 col-md-3 col-lg-3 mb15 mb-md0 align-self-stretch d-flex">
			<div class="conver-block p10 w-100">
				
				<div class="vl-gblue-bg p15">
					<h5 class="f-14 f-md-18 w700 text-center">Video Conversion</h5>
				</div>						
				
				<!------- Not Available div Start------->
				<div class="lato-font d-gblue-clr f-14 f-md-18 w400 d-flex align-items-center justify-content-center notavail">
					N.A.
				</div>
				<!------- Not Available div End------->
			</div>
		</div>
		<div class="col-12 col-md-3 col-lg-3 mb15 mb-md0 align-self-stretch d-flex">
			<div class="conver-block p10 w-100">
				
				<div class="vl-gblue-bg p15">
					<h5 class="f-14 f-md-18 w700 text-center">Email Open Rate</h5>
				</div>
				
				<!------- Not Available div Start------->
				<div class="lato-font d-gblue-clr f-14 f-md-18 w400 d-flex align-items-center justify-content-center notavail">
					N.A.
				</div>
				<!------- Not Available div End------->
				
				
			</div>
		</div>
		<div class="col-12 col-md-3 col-lg-3 align-self-stretch d-flex">
			<div class="conver-block p10 w-100">
				
				<div class="vl-gblue-bg p15">
					<h5 class="f-14 f-md-18 w700 text-center">Page Conversion</h5>
				</div>
				
				<!------- Not Available div Start------->
				<div class="lato-font d-gblue-clr f-14 f-md-18 w400 d-flex align-items-center justify-content-center notavail">
					N.A.
				</div>
				<!------- Not Available div End------->
				
			</div>
		</div>
	</div>
	</div>
<!------- Conversions Section End----------->
	
<!------- Traffic Graph Section Start----------->
	<div class="col-12 p0 mt15 mt-md80">
	<div class="row">
		<!------ Title Header-------------->
		<div class="col-12 col-md-8 col-lg-9 mb15 mb-md0">
			<h4>Traffic Graph</h4>
			<p class="f-14 lh140 d-gblue-clr w400">Here’s a graphical representation of traffic on your blog</p>
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
                    <th>All Visitors</th>
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
<!------- Traffic Graph Section End----------->
	
<!------- Account Graph Section Start----------->
	<div class="col-12 p0 mt15 mt-md80">
	<div class="row">
		<!------ Title Header-------------->
		<div class="col-12 col-md-8 col-lg-9 mb15 mb-md0">
			<h4>Subscriber Graph</h4>
			<p class="f-14 lh140 d-gblue-clr w400">Get a complete overview of all your subscribers here</p>
		</div>
		<div class="col-12 col-md-4 col-lg-3 bs-h40 f-16 align-self-center d-flex justify-content-between dropdown caret-icon-none simple-dropdown show-submenu">
		<!----- Graph Type icon section------->	
			<a href="#" class="align-self-center dropdown-toggle d-gblue-clr t-decoration-none" id="dropdownMenuDivider" data-toggle="dropdown"><i class="icon-more"></i> &nbsp;</a>
  
   		<div class="dropdown-menu dropdown-menu-right right-arrow">
	   <div class="p15 p-md20">
		   <div class="f-14 f-md-16 w400 d-gblue-clr mb15">View As</div>
			<ul class="nav tabs-style2 f-14" role="tablist">
			  <li class="nav-item"> <a class="nav-link active" data-toggle="tab" data-target="#line1">&nbsp; Line &nbsp;</a> </li>
			  <li class="nav-item"> <a class="nav-link" data-toggle="tab" data-target="#bar1">&nbsp; Bar &nbsp;</a> </li>
			  <li class="nav-item"> <a class="nav-link" data-toggle="tab" data-target="#table1">&nbsp; Table &nbsp;</a> </li>
			</ul>
			</div>
   		</div>
			
		<!----- Select Date Selectpicker------->		
       	<div class="col-9 p0 smart-form">
       <input type="text" class="caleran-ex-1 field-h40 form-control" readonly data-plugin-options='{"rangeOrientation":true,"showButtons":true}' /></div>
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
          <div id="line1" class="tab-pane active">
             <div id="allsubscribergraph">
            <svg></svg>
            </div>
          </div>
          <div id="bar1" class="tab-pane fade">
             <div id="graphpromobar">
            <svg></svg>
            </div>
          </div>
          <div id="table1" class="tab-pane fade">
              <div id="thori-scroll" class="table-responsive smart-table-style">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Time</th>
                    <th>All Visitors</th>
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
<!------- Account Graph Section End----------->	

	
<!-------  Activity Section Start----------->
	<div class="row mt15 mt-md80">
	<!------- Recent Team Activity Section start----------->	
	<div class="col-12 col-md-12 col-lg-6 mb15 mb-lg0">
		<div class="row">
			<!------ Title Header-------------->
			<div class="col-12">
				<h4>Recent Team Activities</h4>
				<p class="f-14 lh140 d-gblue-clr w400">Checkout your recent activities here</p>
			</div>
			<div class="col-12 mt15 mt-md30">
				<div class="recent-block mCustomScrollbar h392" data-mcs-theme="inset-3">
				<div class="media p15 px-md30 py-md15 list-hover">
					<span class="app-icon-set d-flex align-items-center"><img class="img-fluid d-block mx-auto rounded-circle" src="../../smart/images/louis-elliot.png"></span>
				<div class="media-body align-self-center ml10">
					<div class="d-flex justify-content-between">
						<h5 class="vd-gblue-clr w400">Louis Elliot</h5>
						<span class="f-12 d-gblue-clr align-self-center text-nowrap">5 min. ago</span>
					</div>
					<p class="d-gblue-clr w400 f-14 mt4">You have some messages & notifications today</p>
				</div>
				</div>
				<div class="media p15 px-md30 py-md15 list-hover">
					<span class="app-icon-set d-flex align-items-center"><img class="img-fluid d-block mx-auto rounded-circle" src="../../smart/images/terry-moore.png"></span>
				<div class="media-body align-self-center ml10">
					<div class="d-flex justify-content-between">
						<h5 class="vd-gblue-clr w400">Terry Moore</h5>
						<span class="f-12 d-gblue-clr align-self-center text-nowrap">Today at 5:25 am </span>
					</div>
					<p class="d-gblue-clr w400 f-14 mt4">You have some messages & notifications today</p>
				</div>
				</div>
				<div class="media p15 px-md30 py-md15 list-hover">
					<span class="app-icon-set d-flex align-items-center"><img class="img-fluid d-block mx-auto rounded-circle" src="../../smart/images/walter-paler.png"></span>
				<div class="media-body align-self-center ml10">
					<div class="d-flex justify-content-between">
						<h5 class="vd-gblue-clr w400">Walter Paler</h5>
						<span class="f-12 d-gblue-clr align-self-center text-nowrap">Today at 4:25 am </span>
					</div>
					<p class="d-gblue-clr w400 f-14 mt4">You have some messages & notifications today</p>
				</div>
				</div>
				<div class="media p15 px-md30 py-md15 list-hover">
					<span class="app-icon-set d-flex align-items-center"><img class="img-fluid d-block mx-auto rounded-circle" src="../../smart/images/mogen-polish.png"></span>
				<div class="media-body align-self-center ml10">
					<div class="d-flex justify-content-between">
						<h5 class="vd-gblue-clr w400">Mogen Polish</h5>
						<span class="f-12 d-gblue-clr align-self-center text-nowrap">Today at 1:25 am </span>
					</div>
					<p class="d-gblue-clr w400 f-14 mt4">You have some messages & notifications today</p>
				</div>
				</div>
				<div class="media p15 px-md30 py-md15 list-hover">
					<span class="app-icon-set d-flex align-items-center"><img class="img-fluid d-block mx-auto rounded-circle" src="../../smart/images/amanda-archere.png"></span>
				<div class="media-body align-self-center ml10">
					<div class="d-flex justify-content-between">
						<h5 class="vd-gblue-clr w400">Amanda Archere</h5>
						<span class="f-12 d-gblue-clr align-self-center text-nowrap">Today at 10:25 am </span>
					</div>
					<p class="d-gblue-clr w400 f-14 mt4">You have some messages & notifications today</p>
				</div>
				</div>
				
				</div>
				</div>
		</div>
	</div>
	<!------- Recent Team Activity Section End----------->	
		
	<!------- Permium Accounts Section start----------->	
	<div class="col-12 col-md-12 col-lg-6">
		<div class="row">
			
		<!------ Title Header-------------->
		<div class="col-12 col-md-8 col-lg-8 col-xl-7 mb15 mb-md0">
			<h4>Permium Accounts</h4>
			<p class="f-14 lh140 d-gblue-clr w400">You have some messages & notifications today</p>
		</div>
		<div class="col-12 col-md-4 col-lg-4 col-xl-5 bs-h40 f-16 align-self-center">
        	<div class="smart-form">
       <input type="text" class="caleran-ex-1 field-h40 form-control" readonly data-plugin-options='{"rangeOrientation":true,"showButtons":true}' /></div>
		</div>
	
			<div class="col-12 mt15 mt-md30">
				<div class="recent-block mCustomScrollbar h392" data-mcs-theme="inset-3">
					<div class="row p15 px-md30 py-md15 list-hover">
						<div class="col-12 col-md-6 col-lg-6">
						<div class="media">
					<span class="app-icon-set d-flex align-items-center"><img class="img-fluid d-block mx-auto rounded-circle" src="../../smart/images/brendon-moore.png"></span>
				<div class="media-body align-self-center ml10 break-word">
					<h5 class="vd-gblue-clr w400">Brendon Moore</h5>
					<p class="d-gblue-clr w400 f-14 mt4">brendon41@email.com</p>
				</div>
				</div>
						</div>
						<div class="col-12 col-md-6 col-lg-6 align-self-center mt15 mt-md0">
						<div class="d-flex justify-content-between vd-gblue-clr">
						<div>
							<span class="icon-circle32 mr10">
							<i class="icon-mail d-gblue-clr"></i>
							</span> 40
						</div>	
						<div>
							<span class="icon-circle32 mr10">
							<i class="icon-dollar d-gblue-clr"></i>
							</span> 300
						</div>
						<div>
							<span class="icon-circle32 mr10">
							<i class="icon-person d-gblue-clr"></i>
							</span> 20
						</div>
							
						</div>
						
						</div>
					</div>
					<div class="row p15 px-md30 py-md15 list-hover">
						<div class="col-12 col-md-6 col-lg-6">
						<div class="media">
					<span class="app-icon-set d-flex align-items-center"><img class="img-fluid d-block mx-auto rounded-circle" src="../../smart/images/joseph-kennedy.png"></span>
				<div class="media-body align-self-center ml10 break-word">
					<h5 class="vd-gblue-clr w400">Joseph Kennedy</h5>
					<p class="d-gblue-clr w400 f-14 mt4">joseph@email.com</p>
				</div>
				</div>
						</div>
						<div class="col-12 col-md-6 col-lg-6 align-self-center mt15 mt-md0">
						<div class="d-flex justify-content-between vd-gblue-clr">
						<div>
							<span class="icon-circle32 mr10">
							<i class="icon-mail d-gblue-clr"></i>
							</span> 40
						</div>	
						<div>
							<span class="icon-circle32 mr10">
							<i class="icon-dollar d-gblue-clr"></i>
							</span> 300
						</div>
						<div>
							<span class="icon-circle32 mr10">
							<i class="icon-person d-gblue-clr"></i>
							</span> 20
						</div>
							
						</div>
						
						</div>
					</div>
					<div class="row p15 px-md30 py-md15 list-hover">
						<div class="col-12 col-md-6 col-lg-6">
						<div class="media">
					<span class="app-icon-set d-flex align-items-center"><img class="img-fluid d-block mx-auto rounded-circle" src="../../smart/images/frank-malone.png"></span>
				<div class="media-body align-self-center ml10 break-word">
					<h5 class="vd-gblue-clr w400">Frank Malone</h5>
					<p class="d-gblue-clr w400 f-14 mt4">frank@email.com</p>
				</div>
				</div>
						</div>
						<div class="col-12 col-md-6 col-lg-6 align-self-center mt15 mt-md0">
						<div class="d-flex justify-content-between vd-gblue-clr">
						<div>
							<span class="icon-circle32 mr10">
							<i class="icon-mail d-gblue-clr"></i>
							</span> 40
						</div>	
						<div>
							<span class="icon-circle32 mr10">
							<i class="icon-dollar d-gblue-clr"></i>
							</span> 300
						</div>
						<div>
							<span class="icon-circle32 mr10">
							<i class="icon-person d-gblue-clr"></i>
							</span> 20
						</div>
							
						</div>
						
						</div>
					</div>
					<div class="row p15 px-md30 py-md15 list-hover">
						<div class="col-12 col-md-6 col-lg-6">
						<div class="media">
					<span class="app-icon-set d-flex align-items-center"><img class="img-fluid d-block mx-auto rounded-circle" src="../../smart/images/nancy-gomez.png"></span>
				<div class="media-body align-self-center ml10 break-word">
					<h5 class="vd-gblue-clr w400">Nancy Gomez</h5>
					<p class="d-gblue-clr w400 f-14 mt4">nancy@email.com</p>
				</div>
				</div>
						</div>
						<div class="col-12 col-md-6 col-lg-6 align-self-center mt15 mt-md0">
						<div class="d-flex justify-content-between vd-gblue-clr">
						<div>
							<span class="icon-circle32 mr10">
							<i class="icon-mail d-gblue-clr"></i>
							</span> 40
						</div>	
						<div>
							<span class="icon-circle32 mr10">
							<i class="icon-dollar d-gblue-clr"></i>
							</span> 300
						</div>
						<div>
							<span class="icon-circle32 mr10">
							<i class="icon-person d-gblue-clr"></i>
							</span> 20
						</div>
							
						</div>
						
						</div>
					</div>
					<div class="row p15 px-md30 py-md15 list-hover">
						<div class="col-12 col-md-6 col-lg-6">
						<div class="media">
					<span class="app-icon-set d-flex align-items-center"><img class="img-fluid d-block mx-auto rounded-circle" src="../../smart/images/nannie.png"></span>
				<div class="media-body align-self-center ml10 break-word">
					<h5 class="vd-gblue-clr w400">Nannie</h5>
					<p class="d-gblue-clr w400 f-14 mt4">Nannie@email.com</p>
				</div>
				</div>
						</div>
						<div class="col-12 col-md-6 col-lg-6 align-self-center mt15 mt-md0">
						<div class="d-flex justify-content-between vd-gblue-clr">
						<div>
							<span class="icon-circle32 mr10">
							<i class="icon-mail d-gblue-clr"></i>
							</span> 40
						</div>	
						<div>
							<span class="icon-circle32 mr10">
							<i class="icon-dollar d-gblue-clr"></i>
							</span> 300
						</div>
						<div>
							<span class="icon-circle32 mr10">
							<i class="icon-person d-gblue-clr"></i>
							</span> 20
						</div>
							
						</div>
						
						</div>
					</div>
				</div>
				</div>
		</div>
	</div>
	<!------- Permium Accounts Section End----------->	
	
	</div>
<!------- Activity Section End----------->	
	
<!-------  Quick Links Section Start----------->
	<div class="row mt15 mt-md80">
	<!------- Quick Links Section start----------->	
	<div class="col-12 col-md-12 col-lg-6 mb15 mb-lg0">
		<div class="row">
			<!------ Title Header-------------->
			<div class="col-12">
				<h4>Quick Links</h4>
				<p class="f-14 lh140 d-gblue-clr w400">Use these links to make your experience faster & smoother</p>
			</div>
			<div class="col-12 col-md-4 col-lg-4 mt15 mt-md30">
				<a href="#" class="t-decoration-none">
				<div class="quicklinks-hover text-center p15 py-md30">
				<i class="icon-create-blog d-gblue-clr f-35"></i>
				<h6 class="f-14 vd-gblue-clr w400 mt8">Create Blog</h6>
				</div>
				</a>
			</div>
				<div class="col-12 col-md-4 col-lg-4 mt15 mt-md30">
				<a href="#" class="t-decoration-none">
				<div class="quicklinks-hover text-center p15 py-md30">
				<i class="icon-saglus-help d-gblue-clr f-35"></i>
				<h6 class="f-14 vd-gblue-clr w400 mt8">Saglus Help</h6>
				</div>
				</a>
			</div>
			
			<div class="col-12 col-md-4 col-lg-4 mt15 mt-md30">
				<a href="#" class="t-decoration-none">
				<div class="quicklinks-hover text-center p15 py-md30">
				<i class="icon-integration d-gblue-clr f-30"></i>
				<h6 class="f-14 vd-gblue-clr w400 mt8">Integration</h6>
				</div>
				</a>
			</div>
			<div class="col-12 col-md-4 col-lg-4 mt15 mt-md30">
				<a href="#" class="t-decoration-none">
				<div class="quicklinks-hover text-center p15 py-md30">
				<i class="icon-feedback-two d-gblue-clr f-35"></i>
				<h6 class="f-14 vd-gblue-clr w400 mt8">Feedback</h6>
				</div>
				</a>
			</div>
				<div class="col-12 col-md-4 col-lg-4 mt15 mt-md30">
				<a href="#" class="t-decoration-none">
				<div class="quicklinks-hover text-center p15 py-md30">
				<i class="icon-api-documentation d-gblue-clr f-35"></i>
				<h6 class="f-14 vd-gblue-clr w400 mt8">API Documentation</h6>
				</div>
				</a>
			</div>
			
			<div class="col-12 col-md-4 col-lg-4 mt15 mt-md30">
				<a href="#" class="t-decoration-none">
				<div class="quicklinks-hover text-center p15 py-md30">
				<i class="icon-sbuscription d-gblue-clr f-30"></i>
				<h6 class="f-14 vd-gblue-clr w400 mt8">Subscription</h6>
				</div>
				</a>
			</div>
		</div>
	</div>
	<!------- Quick Links Section End----------->	
		
	<!------- Permium Accounts Section start----------->	
	<div class="col-12 col-md-12 col-lg-6 mt15 mt-lg80">
		<img src="../../smart/images/jv-prize-banner.png" class="img-fluid d-block mx-auto">
	</div>
	<!------- Permium Accounts Section End----------->	
	
	</div>
<!------- Activity Section End----------->		
	
</div>


<!------- Smart Footer Include File---------->
<?php include '../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->