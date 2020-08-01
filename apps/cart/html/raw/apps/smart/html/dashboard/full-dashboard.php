<!------- Smart Header Include File---------->
<?php include '../includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

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
		<div class="col-12">
		<div class="d-flex justify-content-center justify-content-md-between align-items-center flex-wrap flex-md-nowrap">
			<div class="d-flex align-items-center flex-wrap flex-md-nowrap justify-content-center justify-content-md-start">
				<div class="d-inline-block text-center mr-md30 mr-lg50" style
				="min-width:120px;">
					<div class="analog-outer-wrap">
						<div id="AnalogClock" style="display:none">
							<div id="hour" style="transform: rotate(334.5deg);"><img src="<?php echo $basedir; ?>vendors/clock/hourhand.png"></div>
							<div id="minute" style="transform: rotate(54deg);"><img src="<?php echo $basedir; ?>vendors/clock/minhand.png"></div>
							<div id="second" style="transform: rotate(108deg);"><img src="<?php echo $basedir; ?>vendors/clock/sechand.png"></div>
						</div>
					</div>
				</div>
				<div class="text-center text-md-left my15 my-md0">
				<span class="f-18 f-md-18 lato-font w400">Hello</span><br>
				<h4>Jordan Charlsbro!</h4>
				<p class="f-14 w400 lh140 gblue-clr">Welcome to DotcomPal, this is your dashboard with configurable widgets.</p>
				</div>
			</div>	
			<div class="ml-md30 text-center text-md-left">
				<div class="f-14 f-md-18 p-blue-clr w400">Tuesday</div>
				<div class="w300 f-18 f-md-25 lato-font gblue-clr w400 w-100">November 25, 2018</div>
			</div>	
		</div>
		</div>
	</div>
</div>
</div>
<!------- Business Header End ----------->


<!------- Action Bar Start----------->
<div class="vl-gblue-bg">
	<div class="container-fluid p15 px-md30 py-md10 white-clr">
		<div class="row">
			<div class="col-md-6 col-lg-4 col-xl-3 bs-h30 smart-form">
				<select class="selectpicker f-14" title="Default Dashboard">
				  <option>Default Dashboard</option>
				  <option>Dashboard Name One</option>
				  <option>Dashboard Name Two</option>
				  <option>Dashboard Name Three</option>
				  <option>Dashboard Name Four</option>
				</select>
			</div>
			<div class="col-md-6 col-lg-8 col-xl-9 text-left text-md-right">
				<ul class="list-inline f-14 w400 mb0">
					<li class="list-inline-item mt-md0 mt10 dropdown simple-dropdown caret-icon-none">
						<a href="#" class="base-btn default-btn btn-h30 bg-transparent widgets-dropdown dropdown-toggle" data-toggle="dropdown">
						<span data-toggle="tooltip" data-placement="top" title="" data-original-title="More"><i class=" icon-more"></i></span>
						</a>
						<ul class="dropdown-menu dropdown-menu-right mCustomScrollbar f-14" data-mcs-theme="inset-3" aria-labelledby="dropdownMenu1">
						<li> <a class="dropdown-item" href="javascript:void(0)">Rename</a></li>
						<li> <a class="dropdown-item" href="javascript:void(0)">Duplicate</a></li>
						<li> <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal">Delete</a></li>
						</ul>
					</li>
					<li class="list-inline-item mt-md0 mt10">
						<div class="dropdown simple-dropdown dropdown-caret-margin">
							<button type="button" class="dropdown-toggle btn base-btn blue-btn f-14 px15 py3 w-100 text-left" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="icon-add-three w300"></i>&nbsp; New</button>
							<div class="dropdown-menu dropdown-menu-right w200 h-auto py10">
							<div class="mCustomScrollbar mh-180" data-mcs-theme="inset-3">
								<a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#addwidgetsModal">Widgets</a>
								<a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#createnewdbmodal">Dashboard</a>
							</div>
							</div>
						</div>
					</li>

				</ul>
			</div>
		</div>
	</div>
</div>
<!------- Action Bar End----------->

<div class="container-fluid p15 p-md30">
	<div class="row">
		<!-- Title -->
		<div class="col-12 col-md-6">
			<div class="d-flex align-items-center flex-wrap">
				<div class="lato-font f-16 f-md-18 w700">Dashboard Name</div>
				<div class="ml-lg30 mt10 mt-lg0">
					<p class="f-14 d-gblue-clr w500">Analytics last updated on :</p>
					<p class="f-14 vd-gblue-clr">20 Feb 2020 at 11:04 AM (2 hours before)</p>
				</div>
			</div>		
		</div>
		<div class="col-12 col-md-6 mt15 mt-md0">
		
		</div>
		<!-- Title end -->
	</div>
	
	<div class="row" id="sortable">
		
		<!-- My Drive Overview -->
		<div class="col-12 col-md-6 drag-box mt15 mt-md30 minmaxwindow">
			<div class="widgets-box h-100">
				<div class="widgets-title p15 px-md30 justify-content-between align-items-center flex-wrap flex-lg-nowrap drag-picker">
					<!-- Heading -->
					<div class="mr15">
					<h4 class="f-16 f-md-18">MyDrive</h4>
					<p class="f-14 d-gblue-clr w400 mt3">Your MyDrive overview at a glance</p>
					</div>
					<!-- Actions -->
					<div class="smart-form d-flex align-items-center mt15 mt-lg0">
						<div class="bs-h40 calendar-min-width">
							<div class="input-group calendar-input-group">
								<input type="text" class="caleran-ex-left1 form-control f-14 field-h40" readonly data-plugin-options="{&quot;rangeOrientation&quot;:true,&quot;showButtons&quot;:true}" placeholder="Choose Date">
								<span class="input-group-btn caleran-show1">
								<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
								</span>
							</div>
						</div>
						<a href="#" class="px15 px-md20 t-decoration-none d-gblue-clr"><i class="icon-refresh" aria-hidden="true"></i></a>
						<!-- More option -->
						<div class="dropdown simple-dropdown caret-icon-none">
						<a href="javascript:void(0)" class="dropdown-toggle t-decoration-none d-gblue-clr" data-toggle="dropdown">
						<i class="icon-ellipsis-v" aria-hidden="true"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right f-14 right-arrow widget-drop">
							 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#mydrivemodal">Customize</a>
							 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal">Remove</a>
						</div>
						</div>
					</div>
				</div>
				<!-- Content Section -->
				<div class="p15 px-md30 pb-md30 pt0">
					<div class="d-flex flex-wrap justify-content-between">                      
                        <!-- Data Coloum 1 -->
                        <div class="mt25 mt-md50">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/mydrive/total-files-viewed.png">
                                </span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                    <p class="f-16 vd-gblue-clr w400">Total Files Viewed</p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">250</p>
                                </div>
                            </div>
                        </div>
						<!-- Data Coloum 2 -->	
                        <div class="mt25 mt-md50">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/mydrive/all-visitors.png">
                                </span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                	<p class="f-16 vd-gblue-clr w400"> Visits</p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">2.5 K</p>
                                </div>
                            </div>
                        </div>
						<!-- Data Coloum 3 -->
                        <div class=" mt25 mt-md50">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/mydrive/all-image-visitors.png">
                                </span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                    <p class="f-16 vd-gblue-clr w400">All Image<br> Visits</p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">400</p>
                                </div>
                            </div>
                        </div>
						<!-- Data Coloum 4 -->	
                        <div class=" mt25 mt-md50">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/mydrive/all-documents-visitors.png">
                                </span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                    <p class="f-16 vd-gblue-clr w400">All Documents<br> Visits</p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">400</p>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>	
				<!-- Content Section end -->
				<!-- Click to expand full width button -->
				<a href="javascript:" class="expand-column minmaxwindow-btn"><i class="icon-expand-column"></i></a>
				<!-- Click to expand full width button -->
			</div>
		</div>
		<!-- My Drive end -->
		
		<!-- Video Overview -->
		<div class="col-12 col-md-6 drag-box mt15 mt-md30 minmaxwindow">
			<div class="widgets-box h-100">
				<div class="widgets-title p15 px-md30 justify-content-between align-items-center flex-wrap flex-lg-nowrap drag-picker">
					<!-- Heading -->
					<div class="mr15">
					<h4 class="f-16 f-md-18">Video</h4>
					<p class="f-14 d-gblue-clr w400 mt3">Your Video overview at a glance</p>
					</div>
					<!-- Actions -->
					<div class="smart-form d-flex align-items-center mt15 mt-lg0">
						<div class="bs-h40 calendar-min-width">
							<div class="input-group calendar-input-group">
								<input type="text" class="caleran-ex-left1 form-control f-14 field-h40" readonly data-plugin-options="{&quot;rangeOrientation&quot;:true,&quot;showButtons&quot;:true}" placeholder="Choose Date">
								<span class="input-group-btn caleran-show1">
								<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
								</span>
							</div>
						</div>
						<a href="#" class="px15 px-md20 t-decoration-none d-gblue-clr"><i class="icon-refresh" aria-hidden="true"></i></a>
						<!-- More option -->
						<div class="dropdown simple-dropdown caret-icon-none">
						<a href="javascript:void(0)" class="dropdown-toggle t-decoration-none d-gblue-clr" data-toggle="dropdown">
						<i class="icon-ellipsis-v" aria-hidden="true"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right f-14 right-arrow widget-drop">
							 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#widgetvideoModal">Customize</a>
							 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal">Remove</a>
						</div>
						</div>
					</div>
				</div>
				<!-- Content Section -->
				<div class="p15 px-md30 pb-md30 pt0">
					<div class="d-flex flex-wrap justify-content-between">                      
                        <!-- Data Coloum 1 -->
                        <div class="mt25 mt-md50">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/video/total-video.png">
                                </span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                    <p class="f-16 vd-gblue-clr w400">Total Video</p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">250</p>
                                </div>
                            </div>
                        </div>
						<!-- Data Coloum 2 -->	
                        <div class="mt25 mt-md50">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/video/total-video-views.png">
                                </span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                	<p class="f-16 vd-gblue-clr w400">Total Video Visits</p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">2.5 K</p>
                                </div>
                            </div>
                        </div>
						<!-- Data Coloum 3 -->
                        <div class=" mt25 mt-md50">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/video/total-video-play.png">
                                </span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                    <p class="f-16 vd-gblue-clr w400">Total Video Play</p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">400</p>
                                </div>
                            </div>
                        </div>
						<!-- Data Coloum 4 -->	
                        <div class=" mt25 mt-md50">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/video/total-video-engagement.png">
                                </span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                    <p class="f-16 vd-gblue-clr w400">Total Video<br> Engagement</p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">400</p>
                                </div>
                            </div>
                        </div>
						
                    </div>
				</div>	
				<!-- Content Section end -->
				<!-- Click to expand full width button -->
				<a href="javascript:" class="expand-column minmaxwindow-btn"><i class="icon-expand-column"></i></a>
				<!-- Click to expand full width button -->
			</div>
		</div>
		<!-- Video end -->
		
		<!-- Funnels Overview -->
		<div class="col-12 col-md-6 drag-box mt15 mt-md30 minmaxwindow">
			<div class="widgets-box h-100">
				<div class="widgets-title p15 px-md30 justify-content-between align-items-center flex-wrap flex-lg-nowrap drag-picker">
					<!-- Heading -->
					<div class="mr15">
					<h4 class="f-16 f-md-18">Funnels</h4>
					<p class="f-14 d-gblue-clr w400 mt3">Your Funnels overview at a glance</p>
					</div>
					<!-- Actions -->
					<div class="smart-form d-flex align-items-center mt15 mt-lg0">
						<div class="bs-h40 calendar-min-width">
							<div class="input-group calendar-input-group">
								<input type="text" class="caleran-ex-left1 form-control f-14 field-h40" readonly data-plugin-options="{&quot;rangeOrientation&quot;:true,&quot;showButtons&quot;:true}" placeholder="Choose Date">
								<span class="input-group-btn caleran-show1">
								<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
								</span>
							</div>
						</div>
						<a href="#" class="px15 px-md20 t-decoration-none d-gblue-clr"><i class="icon-refresh" aria-hidden="true"></i></a>
						<!-- More option -->
						<div class="dropdown simple-dropdown caret-icon-none">
						<a href="javascript:void(0)" class="dropdown-toggle t-decoration-none d-gblue-clr" data-toggle="dropdown">
						<i class="icon-ellipsis-v" aria-hidden="true"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right f-14 right-arrow widget-drop">
							 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#widgetfunnelsModal">Customize</a>
							 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal">Remove</a>
						</div>
						</div>
					</div>
				</div>
				<!-- Content Section -->
				<div class="p15 px-md30 pb-md30 pt0">
					<div class="d-flex flex-wrap justify-content-between">                      
                        <!-- Data Coloum 1 -->
                        <div class="mt25 mt-md50">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/funnels/total-funnels.png">
                                </span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                    <p class="f-16 vd-gblue-clr w400">Total Funnels</p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">250</p>
                                </div>
                            </div>
                        </div>
						<!-- Data Coloum 2 -->	
                        <div class="mt25 mt-md50">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/funnels/total-pages.png">
                                </span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                	<p class="f-16 vd-gblue-clr w400">Total Pages</p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">2.5 K</p>
                                </div>
                            </div>
                        </div>
						<!-- Data Coloum 3 -->
                        <div class=" mt25 mt-md50">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/funnels/total-ab-tests.png">
                                </span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                    <p class="f-16 vd-gblue-clr w400">Total AB Tests</p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">400</p>
                                </div>
                            </div>
                        </div>
						<!-- Data Coloum 4 -->	
                        <div class=" mt25 mt-md50">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/funnels/total-visitors.png">
                                </span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                    <p class="f-16 vd-gblue-clr w400">Visits</p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">400</p>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>	
				<!-- Content Section end -->
				<!-- Click to expand full width button -->
				<a href="javascript:" class="expand-column minmaxwindow-btn"><i class="icon-expand-column"></i></a>
				<!-- Click to expand full width button -->
			</div>
		</div>
		<!-- Funnels end -->
		
		<!-- Journey Overview -->
		<div class="col-12 col-md-6 drag-box mt15 mt-md30 minmaxwindow">
			<div class="widgets-box h-100">
				<div class="widgets-title p15 px-md30 justify-content-between align-items-center flex-wrap flex-lg-nowrap drag-picker">
					<!-- Heading -->
					<div class="mr15">
					<h4 class="f-16 f-md-18">Funnels/Journey</h4>
					<p class="f-14 d-gblue-clr w400 mt3">Your Funnels/Journey overview at a glance</p>
					</div>
					<!-- Actions -->
					<div class="smart-form d-flex align-items-center mt15 mt-lg0">
						<div class="bs-h40 calendar-min-width">
							<div class="input-group calendar-input-group">
								<input type="text" class="caleran-ex-left1 form-control f-14 field-h40" readonly data-plugin-options="{&quot;rangeOrientation&quot;:true,&quot;showButtons&quot;:true}" placeholder="Choose Date">
								<span class="input-group-btn caleran-show1">
								<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
								</span>
							</div>
						</div>
						<a href="#" class="px15 px-md20 t-decoration-none d-gblue-clr"><i class="icon-refresh" aria-hidden="true"></i></a>
						<!-- More option -->
						<div class="dropdown simple-dropdown caret-icon-none">
						<a href="javascript:void(0)" class="dropdown-toggle t-decoration-none d-gblue-clr" data-toggle="dropdown">
						<i class="icon-ellipsis-v" aria-hidden="true"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right f-14 right-arrow widget-drop">
							 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#widgetjourneyModal">Customize</a>
							 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal">Remove</a>
						</div>
						</div>
					</div>
				</div>
				<!-- Content Section -->
				<div class="p15 px-md30 pb-md30 pt0">
					<div class="d-flex flex-wrap justify-content-between">                      
                        <!-- Data Coloum 1 -->
                        <div class="mt25 mt-md50">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/journey/journey.png">
                                </span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                    <p class="f-16 vd-gblue-clr w400">Funnels/Journey</p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">250</p>
                                </div>
                            </div>
                        </div>
						<!-- Data Coloum 2 -->	
                        <div class="mt25 mt-md50">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/journey/visits.png">
                                </span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                	<p class="f-16 vd-gblue-clr w400">Visits </p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">2.5 K</p>
                                </div>
                            </div>
                        </div>	
						<!-- Data Coloum 3 -->	
                        <div class=" mt25 mt-md50">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/journey/visitors.png">
                                </span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                    <p class="f-16 vd-gblue-clr w400">Visitors</p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">400</p>
                                </div>
                            </div>
                        </div>						
						<!-- Data Coloum 4 -->	
                        <div class=" mt25 mt-md50">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/journey/leads-acquired.png">
                                </span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                    <p class="f-16 vd-gblue-clr w400">Total Leads Acquired</p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">400</p>
                                </div>
                            </div>
                        </div>
						<!-- Data Coloum 5 -->	
                        <div class=" mt25 mt-md50">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/journey/sales.png">
                                </span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                    <p class="f-16 vd-gblue-clr w400">Sales</p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">400</p>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>	
				<!-- Content Section end -->
				<!-- Click to expand full width button -->
				<a href="javascript:" class="expand-column minmaxwindow-btn"><i class="icon-expand-column"></i></a>
				<!-- Click to expand full width button -->
			</div>
		</div>
		<!-- Journey end -->
		
		<!-- Notification Overview -->
		<div class="col-12 col-md-6 drag-box mt15 mt-md30 minmaxwindow">
			<div class="widgets-box h-100">
				<div class="widgets-title p15 px-md30 justify-content-between align-items-center flex-wrap flex-lg-nowrap drag-picker">
					<!-- Heading -->
					<div class="mr15">
					<h4 class="f-16 f-md-18">Notification</h4>
					<p class="f-14 d-gblue-clr w400 mt3">Your Notification overview at a glance</p>
					</div>
					<!-- Actions -->
					<div class="smart-form d-flex align-items-center mt15 mt-lg0">
						<div class="bs-h40 calendar-min-width">
							<div class="input-group calendar-input-group">
								<input type="text" class="caleran-ex-left1 form-control f-14 field-h40" readonly data-plugin-options="{&quot;rangeOrientation&quot;:true,&quot;showButtons&quot;:true}" placeholder="Choose Date">
								<span class="input-group-btn caleran-show1">
								<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
								</span>
							</div>
						</div>
						<a href="#" class="px15 px-md20 t-decoration-none d-gblue-clr"><i class="icon-refresh" aria-hidden="true"></i></a>
						<!-- More option -->
						<div class="dropdown simple-dropdown caret-icon-none">
						<a href="javascript:void(0)" class="dropdown-toggle t-decoration-none d-gblue-clr" data-toggle="dropdown">
						<i class="icon-ellipsis-v" aria-hidden="true"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right f-14 right-arrow widget-drop">
							 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#widgetnotificationModal">Customize</a>
							 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal">Remove</a>
						</div>
						</div>
					</div>
				</div>
				<!-- Content Section -->
				<div class="p15 px-md30 pb-md30 pt0">
					<div class="d-flex flex-wrap justify-content-between">                      
                        <!-- Data Coloum 1 -->
                        <div class="mt25 mt-md50">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/notification/total-web-notifications.png">
                                </span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                    <p class="f-16 vd-gblue-clr w400">Total Web<br> Notifications</p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">250</p>
                                </div>
                            </div>
                        </div>
						<!-- Data Coloum 2 -->	
                        <div class="mt25 mt-md50">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/notification/total-web-forms.png">
                                </span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                	<p class="f-16 vd-gblue-clr w400">Total Web Forms</p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">2.5 K</p>
                                </div>
                            </div>
                        </div>
						<!-- Data Coloum 3 -->
                        <div class=" mt25 mt-md50">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/notification/total-ab-tests.png">
                                </span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                    <p class="f-16 vd-gblue-clr w400">Total AB Tests</p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">400</p>
                                </div>
                            </div>
                        </div>
						<!-- Data Coloum 4 -->	
                        <div class=" mt25 mt-md50">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/notification/web-notification-visitors.png">
                                </span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                    <p class="f-16 vd-gblue-clr w400">Web Notification<br> Visits</p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">400</p>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>	
				<!-- Content Section end -->
				<!-- Click to expand full width button -->
				<a href="javascript:" class="expand-column minmaxwindow-btn"><i class="icon-expand-column"></i></a>
				<!-- Click to expand full width button -->
			</div>
		</div>
		<!-- Notification end -->
		
		<!-- Mail Overview -->
		<div class="col-12 col-md-6 drag-box mt15 mt-md30 minmaxwindow">
			<div class="widgets-box h-100">
				<div class="widgets-title p15 px-md30 justify-content-between align-items-center flex-wrap flex-lg-nowrap drag-picker">
					<!-- Heading -->
					<div class="mr15">
					<h4 class="f-16 f-md-18">Mail</h4>
					<p class="f-14 d-gblue-clr w400 mt3">Your mail overview at a glance</p>
					</div>
					<!-- Actions -->
					<div class="smart-form d-flex align-items-center mt15 mt-lg0">
						<div class="bs-h40 calendar-min-width">
							<div class="input-group calendar-input-group">
								<input type="text" class="caleran-ex-left1 form-control f-14 field-h40" readonly data-plugin-options="{&quot;rangeOrientation&quot;:true,&quot;showButtons&quot;:true}" placeholder="Choose Date">
								<span class="input-group-btn caleran-show1">
								<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
								</span>
							</div>
						</div>
						<a href="#" class="px15 px-md20 t-decoration-none d-gblue-clr"><i class="icon-refresh" aria-hidden="true"></i></a>
						<!-- More option -->
						<div class="dropdown simple-dropdown caret-icon-none">
						<a href="javascript:void(0)" class="dropdown-toggle t-decoration-none d-gblue-clr" data-toggle="dropdown">
						<i class="icon-ellipsis-v" aria-hidden="true"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right f-14 right-arrow widget-drop">
							 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#widgetmailModal">Customize</a>
							 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal">Remove</a>
						</div>
						</div>
					</div>
				</div>
				<!-- Content Section -->
				<div class="p15 px-md30 pb-md30 pt0">
					<div class="d-flex flex-wrap justify-content-between">                      
                        <!-- Data Coloum 1 -->	
                        <div class="mt25 mt-md50">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/mail/total-broadcasts.png">
                                </span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                	<p class="f-16 vd-gblue-clr w400">Total Broadcasts</p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">2.5 K</p>
                                </div>
                            </div>
                        </div>
						<!-- Data Coloum 2 -->
                        <div class=" mt25 mt-md50">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/mail/total-ab-tests.png">
                                </span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                    <p class="f-16 vd-gblue-clr w400">Total AB Tests</p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">400</p>
                                </div>
                            </div>
                        </div>
						<!-- Data Coloum 3 -->	
                        <div class=" mt25 mt-md50">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/mail/total-broadcasts-sent.png">
                                </span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                    <p class="f-16 vd-gblue-clr w400">Total Broadcasts<br> Sent Visits</p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">400</p>
                                </div>
                            </div>
                        </div>
						<!-- Data Coloum 4 -->
                        <div class="mt25 mt-md50">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/mail/total-broadcasts-delivered.png">
                                </span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                    <p class="f-16 vd-gblue-clr w400">Total Broadcasts<br> Delivered</p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">250</p>
                                </div>
                            </div>
                        </div>
						
                    </div>
				</div>	
				<!-- Content Section end -->
				<!-- Click to expand full width button -->
				<a href="javascript:" class="expand-column minmaxwindow-btn"><i class="icon-expand-column"></i></a>
				<!-- Click to expand full width button -->
			</div>
		</div>
		<!-- Mail end -->
		
		<!-- Business Overview -->
		<div class="col-12 col-md-6 drag-box mt15 mt-md30 minmaxwindow">
			<div class="widgets-box h-100">
				<div class="widgets-title p15 px-md30 justify-content-between align-items-center flex-wrap flex-lg-nowrap drag-picker">
					<!-- Heading -->
					<div class="mr15">
					<h4 class="f-16 f-md-18">Business Overview</h4>
					<p class="f-14 d-gblue-clr w400 mt3">Your business overview at a glance</p>
					</div>
					<!-- Actions -->
					<div class="smart-form d-flex align-items-center mt15 mt-lg0">
						<div class="bs-h40 calendar-min-width">
							<div class="input-group calendar-input-group">
								<input type="text" class="caleran-ex-left1 form-control f-14 field-h40" readonly data-plugin-options="{&quot;rangeOrientation&quot;:true,&quot;showButtons&quot;:true}" placeholder="Choose Date">
								<span class="input-group-btn caleran-show1">
								<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
								</span>
							</div>
						</div>
						<a href="#" class="px15 px-md20 t-decoration-none d-gblue-clr"><i class="icon-refresh" aria-hidden="true"></i></a>
						<!-- More option -->
						<div class="dropdown simple-dropdown caret-icon-none">
						<a href="javascript:void(0)" class="dropdown-toggle t-decoration-none d-gblue-clr" data-toggle="dropdown">
						<i class="icon-ellipsis-v" aria-hidden="true"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right f-14 right-arrow widget-drop">
							 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#overviewstatsmodal">Customize</a>
							 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal">Remove</a>
						</div>
						</div>
					</div>
				</div>
				<!-- Content Section -->
				<div class="p15 px-md30 pb-md30 pt0">
					<div class="d-flex flex-wrap justify-content-between">                      
                        <!-- Data Coloum 1 -->
                        <div class="mt15 mt-md30">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/mydrive/all-visitors.png">
                                </span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                	<p class="f-16 vd-gblue-clr w400">Visits</p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">2.5 K</p>
                                </div>
                            </div>
                        </div>
						<!-- Data Coloum 2 -->	
                         <div class=" mt15 mt-md30">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
									<img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/overview/no-of-unique-visitor.png"></span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                    <p class="f-16 vd-gblue-clr w400">Contacts</p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">400</p>
                                </div>
                            </div>
                        </div>
						<!-- Data Coloum 3 -->
                        <div class=" mt15 mt-md30">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
									<img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/overview/sales-icon.png">
								</span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                    <p class="f-16 vd-gblue-clr w400">Sales</p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">400</p>
                                </div>
                            </div>
                        </div>
						<!-- Data Coloum 4 -->	
                        <div class=" mt15 mt-md30">
                            <div class="media">
                                <span class="d-flex align-items-center overview-icon">
									<img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/widgets/overview/total-revenue.png">
								</span>
                                <div class="media-body align-self-center ml15 ml-md30 mw-150">
                                    <p class="f-16 vd-gblue-clr w400">Revenue</p>
                                    <p class="lato-font vd-gblue-clr w700 f-24 mt4">400</p>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>	
				<!-- Content Section end -->
				<!-- Click to expand full width button -->
				<a href="javascript:" class="expand-column minmaxwindow-btn"><i class="icon-expand-column"></i></a>
				<!-- Click to expand full width button -->
			</div>
		</div>
		<!-- Business Overview end -->
        <!-- Conversions Section Start -->
		<div class="col-12 col-md-6 mt15 mt-md30 drag-box minmaxwindow1">
			<div class="widgets-box h-100">
				<div class="widgets-title p15 px-md30 justify-content-between align-items-center flex-wrap flex-lg-nowrap drag-picker">
					<!-- Heading -->
					<div class="mr15">
					<h4 class="f-16 f-md-18">Conversions</h4>
					<p class="f-14 d-gblue-clr w400 mt3">Conversions stats at a glance</p>
					</div>
					<!-- Actions -->
					<div class="smart-form d-flex align-items-center mt15 mt-lg0">
						<div class="bs-h40 calendar-min-width">
							<div class="input-group calendar-input-group">
								<input type="text" class="caleran-ex-1 form-control f-14 field-h40" id="target-cal" readonly data-plugin-options="{&quot;rangeOrientation&quot;:true,&quot;showButtons&quot;:true}" placeholder="Choose Date">
								<span class="input-group-btn caleran-show">
								<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
								</span>
							</div>
						</div>
						<a href="#" class="px15 px-md20 t-decoration-none d-gblue-clr"><i class="icon-refresh" aria-hidden="true"></i></a>
						<!-- More option -->
						<div class="dropdown simple-dropdown caret-icon-none">
						<a href="javascript:void(0)" class="dropdown-toggle t-decoration-none d-gblue-clr" data-toggle="dropdown">
						<i class="icon-ellipsis-v" aria-hidden="true"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right f-14 right-arrow widget-drop">
							 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#conversionstatmodal">Customize</a>
							 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal">Remove</a>
						</div>
						</div>
					</div>
				</div>
				<!-- Content Section -->
				<div class="widgets-box-padding">
					<div class="d-flex justify-content-between flex-wrap flex-xl-nowrap row">                      
                        <!-- Data Coloum 1 -->
                        <div class="conversion-box col mt15 mt-md30">
							<h5 class="f-14 w700 text-center lh130">Page Lead Conversion</h5>
							<img class="img-fluid d-block mx-auto mt15 mb15 mb-md20" src="<?php echo $basedir; ?>/images/widgets/conversion/page-lead-conversion-icon.png">
							<div class="f-14 w400 text-center lh140">
								Promotions<br>
								400
							</div>
							<!------ Sepration Line Div------->
							<div class="conver-block-sepline1 mx-auto mt15 mb8"></div>
							<div class="f-14 w400 text-center lh140">Conversion Rate<br>1%</div>
                        </div>
						<!-- Data Coloum 2 -->
                        <div class="conversion-box mt15 mt-md30 col">
							<h5 class="f-14 w700 text-center">Page Sales Conversion</h5>
							<img class="img-fluid d-block mx-auto mt15 mb15 mb-md20" src="<?php echo $basedir; ?>/images/widgets/conversion/page-sales-conversion-icon.png">
							<div class="f-14 w400 text-center lh140">
								Open Mail<br>
								400
							</div>
							<!------ Sepration Line Div------->
							<div class="conver-block-sepline1 mx-auto mt15 mb10"></div>
							<div class="f-14 w400 text-center lh140">Open Rate<br>1%</div>
                        </div>						
						<!-- Data Coloum 4-->
                        <div class="conversion-box mt15 mt-md30 col">
							<h5 class="f-14 w700 text-center">Funnel/Journey Sales Conversion</h5>
							<img class="img-fluid d-block mx-auto mt15 mb15 mb-md20" src="<?php echo $basedir; ?>/images/widgets/conversion/funnel-journey-sales-conversion-icon.png">
							<div class="f-14 w400 text-center lh140">
								Sales<br>
								400
							</div>
							<!------ Sepration Line Div------->
							<div class="conver-block-sepline1 mx-auto mt15 mb10"></div>
							<div class="f-14 w400 text-center lh140">Conversion Rate<br>1%</div>
                        </div>
						<!-- Data Coloum 5 -->
                        <div class="conversion-box mt15 mt-md30 col">
							<h5 class="f-14 w700 text-center">Funnel/Journey Lead Conversion </h5>
							<img class="img-fluid d-block mx-auto mt15 mb15 mb-md20" src="<?php echo $basedir; ?>/images/widgets/conversion/funnel-journey-lead-conversion-icon.png">
							<div class="f-14 w400 text-center lh140">
								Lead<br>
								400
							</div>
							<!------ Sepration Line Div------->
							<div class="conver-block-sepline1 mx-auto mt15 mb10"></div>
							<div class="f-14 w400 text-center lh140">Conversion Rate<br>1%</div>
                        </div>
                    </div>			
				</div>	
				<!-- Content Section end -->
				<!-- Click to expand full width button -->
				<a href="javascript:" class="expand-column minmaxwindow-btn1"><i class="icon-expand-column"></i></a>
				<!-- Click to expand full width button -->
			</div>
		</div>
		<div class="col-12 col-md-6 mt15 mt-md30 drag-box minmaxwindow1">
			<div class="widgets-box h-100">
				<div class="widgets-title p15 px-md30 justify-content-between align-items-center flex-wrap flex-lg-nowrap drag-picker">
					<!-- Heading -->
					<div class="mr15">
					<h4 class="f-16 f-md-18">Conversions</h4>
					<p class="f-14 d-gblue-clr w400 mt3">Conversions stats at a glance</p>
					</div>
					<!-- Actions -->
					<div class="smart-form d-flex align-items-center mt15 mt-lg0">
						<div class="bs-h40 calendar-min-width">
							<div class="input-group calendar-input-group">
								<input type="text" class="caleran-ex-1 form-control f-14 field-h40" id="target-cal" readonly data-plugin-options="{&quot;rangeOrientation&quot;:true,&quot;showButtons&quot;:true}" placeholder="Choose Date">
								<span class="input-group-btn caleran-show">
								<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
								</span>
							</div>
						</div>
						<a href="#" class="px15 px-md20 t-decoration-none d-gblue-clr"><i class="icon-refresh" aria-hidden="true"></i></a>
						<!-- More option -->
						<div class="dropdown simple-dropdown caret-icon-none">
						<a href="javascript:void(0)" class="dropdown-toggle t-decoration-none d-gblue-clr" data-toggle="dropdown">
						<i class="icon-ellipsis-v" aria-hidden="true"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right f-14 right-arrow widget-drop">
							 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#conversionstatmodal">Customize</a>
							 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal">Remove</a>
						</div>
						</div>
					</div>
				</div>
				<!-- Content Section -->
				<div class="widgets-box-padding">
					<!-- No widget found screen -->
					<div class="h-100 mt30">
					<img class="img-fluid d-block mx-auto mb15" src="<?php echo $basedir; ?>/images/no-widget-found.png">
					<p class="f-14 w400 d-gblue-clr text-center lh160">Your widget has been added. <a href="#" class="t-decoration-none p-blue-clr"><u>Click here</u></a> to customize this widget or click on the option found at three dots on the upper-right corner of this widget.</p>
					</div>
					
				</div>	
				<!-- Content Section end -->
				<!-- Click to expand full width button -->
				<a href="javascript:" class="expand-column minmaxwindow-btn1"><i class="icon-expand-column"></i></a>
				<!-- Click to expand full width button -->
			</div>
		</div>
		
		<!-- Conversions Section end -->
		<!-- Add New widgets -->
		<div class="col-12 col-md-6 mt15 mt-md30">
			<div class="add-new-widgets h-100 p15 p-md30 text-center d-flex align-items-center justify-content-center">
				<!-- Content Section -->
				<a href="#" data-toggle="modal" data-target="#addwidgetsModal" class="t-decoration-none p-blue-clr align-self-center">
				<div class="w-100 text-center"><i class="icon-add-three f-20 d-block"></i></div>
				<div class="f-14 f-md-16 w400 t-decoration-none mt15">Add a new widget</div></a>
				<!-- Content Section end -->
			</div>
		</div>
		<!-- Add New widgets end -->
		<!-- Quick Overview Section -->
		<div class="col-12 mt-md30 mt15 drag-box">
			<div class="widgets-box1">
				<div class="widgets-title p15 px-md30 justify-content-between align-items-center flex-wrap flex-lg-nowrap drag-picker">
					<!-- Heading -->
					<div class="mr15">
					<h4 class="f-16 f-md-18">Quick Overview</h4>
					<p class="f-14 d-gblue-clr w400 mt3">Your quick overview at a glance</p>
					</div>
					<!-- Actions -->
					<div class="smart-form d-flex align-items-center mt15 mt-lg0">
						<div class="bs-h40 calendar-min-width">
							<div class="input-group calendar-input-group">
								<input type="text" class="caleran-ex-1 form-control f-14 field-h40" readonly data-plugin-options="{&quot;rangeOrientation&quot;:true,&quot;showButtons&quot;:true}" placeholder="Choose Date">
								<span class="input-group-btn caleran-show1">
								<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
								</span>
							</div>
						</div>
						<a href="#" class="px15 px-md20 t-decoration-none d-gblue-clr"><i class="icon-refresh" aria-hidden="true"></i></a>
						<!-- More option -->
						<div class="dropdown simple-dropdown caret-icon-none">
						<a href="javascript:void(0)" class="dropdown-toggle t-decoration-none d-gblue-clr" data-toggle="dropdown">
						<i class="icon-ellipsis-v" aria-hidden="true"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right f-14 right-arrow widget-drop">
							 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal">Remove</a>
						</div>
						</div>
					</div>
				</div>
				<div class="quick-overview-bg1">
					<div class="row mt15 mt-md30">
						<div class="col-12 col-md-6 col-lg-5 col-xl-4 p-md0 mx-auto">
						<select class="selectpicker" title="Choose from the option">
						  <option>Business Visits Graph</option>
						  <option>Business Lead Graph</option>
						  <option>Business Sales Graph</option>
						  <option>Business Sales Conversion Rate  Graph</option>
						  <option>Page Lead Conversion Graph</option>
						  <option>Notification Lead Conversion Graph</option>
						  <option>Web Form Lead Conversion Graph</option>
						  <option>Video Engagement Graph</option>
						  <option>Mail Open/Click Graph</option>
						  <option>Page Visits Graph</option>
						  <option>Notification Visits Graph</option>
						  <option>Video Visits Graph</option>
						  <option>Visits & Visitors Triggered </option>
						  <option>Visits Triggered & Ended </option>
						</select>
						</div>
					</div>
				</div>
			</div>	
		</div>
		<!-- Quick Overview Section End-->
		<!-- Traffic Graph Overview Section -->
		<div class="col-12 mt-md30 mt15 drag-box">
			<div class="widgets-box1">
				<!-- Heading -->
				<div class="widgets-title p15 px-md30 drag-picker">
					<div class="d-flex flex-wrap align-items-center w-100">
						<div class="col-lg-6 col-md-5 pl0">
						<h4 class="f-16 f-md-18">Traffic Graph</h4>
						<p class="f-14 d-gblue-clr w400 mt3">View different graphs quickly</p>
						</div>
						<!-- Actions -->
						<div class="col-lg-6 col-md-7 mt15 mt-lg0 bs-h40 smart-form">
							<div class="row align-items-center justify-content-end">
								<div class="col-md-5 col-12 px0 px-md10">
									<select class="selectpicker" title="Choose from the option">
									  <option>Email conversion report</option>
									  <option>Page conversion report</option>
									  <option>Video conversion report</option>
									  <option>None</option>
									</select>
								</div>
								<div class="col-md-7 col-12 mt10 mt-md0 p0">
									<div class="d-flex align-items-center  caret-icon-none">
										<div class="input-group calendar-input-group pl-md10 pr10 bs-h40 calendar-min-width">
											<input type="text" class="caleran-ex-1 form-control f-14 field-h40" readonly data-plugin-options="{&quot;rangeOrientation&quot;:true,&quot;showButtons&quot;:true}" placeholder="Choose Date">
											<span class="input-group-btn caleran-show1">
											<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
											</span>
										</div>
										<a href="#" class="px10 mt10 mt-md0 t-decoration-none d-gblue-clr"><i class="icon-refresh" aria-hidden="true"></i></a>
										<!-- More option -->
										 <ul class="nav nav-tabs graph-drop-btn border-0">
										  <li class="nav-item dropdown">
											<a class="dropdown-toggle f-18 w500 t-decoration-none" data-toggle="dropdown"
											   href="#!"><i class="icon-ellipsis-v" aria-hidden="true"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right p0 f-14 right-arrow widget-drop">
											  <a class="nav-link active" data-toggle="tab" data-target="#line">Line </a>
											  <a class="nav-link" data-toggle="tab" data-target="#bar">Bar</a>
											  <a class="nav-link" data-toggle="tab" data-target="#table1">Table</a>
											  <a class="nav-link" data-toggle="modal" data-target="#deleteModal">Remove</a>
											</div>
										  </li>
										</ul>

										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!---- Tabs Graph Coloum--------->
				<div class="tab-content pt20">
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
				  <div id="table1" class="tab-pane fade p-md20 p15">
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
		<!-- Traffic Graph Overview Section End-->
		<!-- Recent Team Activity Section -->
		<div class="col-12 col-md-6 mt15 mt-md30 drag-box">
			<div class="widgets-box1">
				<div class="widgets-title p15 px-md30 justify-content-between align-items-center flex-wrap flex-lg-nowrap drag-picker">
					<!-- Heading -->
					<div class="mr15">
					<h4 class="f-16 f-md-18">Recent Team Activity</h4>
					<p class="f-14 d-gblue-clr w400 mt3">Look at your team members’ activities</p>
					</div>
					<!-- Actions -->
					<div class="smart-form d-flex align-items-center mt15 mt-lg0">
						<div class="bs-h40 calendar-min-width">
							<div class="input-group calendar-input-group">
								<input type="text" class="caleran-ex-left4 form-control f-14 field-h40" readonly data-plugin-options="{&quot;rangeOrientation&quot;:true,&quot;showButtons&quot;:true}" placeholder="Choose Date">
								<span class="input-group-btn caleran-show4">
								<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
								</span>
							</div>
						</div>
						<a href="#" class="px15 px-md20 t-decoration-none d-gblue-clr"><i class="icon-refresh" aria-hidden="true"></i></a>
						<!-- More option -->
						<div class="dropdown simple-dropdown caret-icon-none">
						<a href="javascript:void(0)" class="dropdown-toggle t-decoration-none d-gblue-clr" data-toggle="dropdown">
						<i class="icon-ellipsis-v" aria-hidden="true"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right f-14 right-arrow widget-drop">
							 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal">Remove</a>
						</div>
						</div>
					</div>
				</div>
				<!-- Content Section -->
				<div class="mCustomScrollbar activity-height" data-mcs-theme="inset-3">
				<div class="media activity-hover">
					<span class="app-icon-set d-flex align-items-center"><img class="img-fluid d-block mx-auto rounded-circle" src="../../images/louis-elliot.png"></span>
				<div class="media-body align-self-center ml20">
					<div class="d-flex justify-content-between flex-wrap">
						<h5 class="heading-style">Louis Elliot</h5>
						<span class="f-14 d-gblue-clr align-self-center text-nowrap mt5 mt-lg0">5 min. ago</span>
					</div>
					<p class="d-gblue-clr w400 f-14 mt5">You have some messages & notifications today</p>
				</div>
				</div>
				<div class="media activity-hover">
					<span class="app-icon-set d-flex align-items-center"><img class="img-fluid d-block mx-auto rounded-circle" src="../../images/terry-moore.png"></span>
				<div class="media-body align-self-center ml20">
					<div class="d-flex justify-content-between flex-wrap">
						<h5 class="heading-style">Terry Moore</h5>
						<span class="f-14 d-gblue-clr align-self-center text-nowrap mt5 mt-lg0">Today at 5:25 am </span>
					</div>
					<p class="d-gblue-clr w400 f-14 mt5">You have some messages & notifications today</p>
				</div>
				</div>
				<div class="media activity-hover">
					<span class="app-icon-set d-flex align-items-center"><img class="img-fluid d-block mx-auto rounded-circle" src="../../images/walter-paler.png"></span>
				<div class="media-body align-self-center ml20">
					<div class="d-flex justify-content-between flex-wrap">
						<h5 class="heading-style">Walter Paler</h5>
						<span class="f-14 d-gblue-clr align-self-center text-nowrap mt5 mt-lg0">Today at 4:25 am </span>
					</div>
					<p class="d-gblue-clr w400 f-14 mt5">You have some messages & notifications today</p>
				</div>
				</div>
				<div class="media activity-hover"><img class="img-fluid d-block mx-auto rounded-circle" src="../../images/mogen-polish.png"></span>
				<div class="media-body align-self-center ml20">
					<div class="d-flex justify-content-between flex-wrap">
						<h5 class="heading-style">Mogen Polish</h5>
						<span class="f-14 d-gblue-clr align-self-center text-nowrap mt5 mt-lg0">Today at 1:25 am </span>
					</div>
					<p class="d-gblue-clr w400 f-14 mt5">You have some messages & notifications today</p>
				</div>
				</div>
				<div class="media activity-hover">
					<span class="app-icon-set d-flex align-items-center"><img class="img-fluid d-block mx-auto rounded-circle" src="../../images/amanda-archere.png"></span>
				<div class="media-body align-self-center ml20">
					<div class="d-flex justify-content-between flex-wrap">
						<h5 class="heading-style">Amanda Archere</h5>
						<span class="f-14 d-gblue-clr align-self-center text-nowrap mt5 mt-lg0">Today at 10:25 am </span>
					</div>
					<p class="d-gblue-clr w400 f-14 mt5">You have some messages & notifications today</p>
				</div>
				</div>
				
				</div>
				<!-- Content Section end -->
			</div>
		</div>
		<!-- Recent Team Activity Section end -->
		<!-- Quick Links Section -->
		<div class="col-12 col-md-12 col-lg-6 mt15 mt-md30 drag-box">
			<div class="widgets-box1 h-100">
				<div class="widgets-title p15 px-md30 justify-content-between align-items-center flex-wrap flex-lg-nowrap drag-picker">
					<!-- Heading -->
					<div class="mr15">
					<h4 class="f-16 f-md-18">Quick Links</h4>
					<p class="f-14 d-gblue-clr w400 mt3">Quickly navigate to an option</p>
					</div>
					<!-- Actions -->
					<div class="smart-form d-flex align-items-center mt15 mt-lg0">
						<!-- More option -->
						<div class="dropdown simple-dropdown caret-icon-none">
						<a href="javascript:void(0)" class="dropdown-toggle t-decoration-none d-gblue-clr" data-toggle="dropdown">
						<i class="icon-ellipsis-v" aria-hidden="true"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right f-14 right-arrow widget-drop">
							 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#addquicklinksModal">Customize</a>
							 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal">Remove</a>
						</div>
						</div>
					</div>
				</div>
				<!-- Content Section -->
				<div class="p15 p-md30">
				<div class="row">
					<div class="col-12 col-md-4 col-lg-4">
						<a href="#" class="t-decoration-none">
							<div class="quicklinks-box text-center p15 py-md20 h-100 d-flex align-content-center justify-content-center flex-wrap">
							<div class="w-100 text-center"><i class="icon-add-video d-gblue-clr f-35 d-block"></i></div>
							<h6 class="f-14 firasans-font vd-gblue-clr w400 mt8">Add Video Campaign</h6>
							</div>
						</a>
					</div>
					<div class="col-12 col-md-4 col-lg-4 mt15 mt-md0">
						<a href="#" class="t-decoration-none">
							<div class="quicklinks-box text-center p15 py-md20 h-100 d-flex align-content-center justify-content-center flex-wrap">
							<div class="w-100 text-center"><i class="icon-add-page-campaign d-gblue-clr f-35 d-block"></i></div>
							<h6 class="f-14 firasans-font vd-gblue-clr w400 mt8">Add Page Campaign</h6>
							</div>
						</a>
					</div>
					<div class="col-12 col-md-4 col-lg-4 mt15 mt-md0">
						<a href="#" class="t-decoration-none">
							<div class="quicklinks-box text-center p15 py-md20 h-100 d-flex align-content-center justify-content-center flex-wrap">
							<div class="w-100 text-center"><i class="icon-all-journey d-gblue-clr f-30 d-block"></i></div>
							<h6 class="f-14 firasans-font vd-gblue-clr w400 mt8">Add Funnel/Journey</h6>
							</div>
						</a>
					</div>
					<div class="col-12 col-md-4 col-lg-4 mt15 mt-md30">
						<a href="#" class="t-decoration-none">
							<div class="quicklinks-box text-center p15 py-md20 h-100 d-flex align-content-center justify-content-center flex-wrap">
							<div class="w-100 text-center"><i class="icon-add-page-ab-test-campaign d-gblue-clr f-35 d-block"></i></div>
							<h6 class="f-14 firasans-font vd-gblue-clr w400 mt8">Add Page AB Test Campaign</h6>
							</div>
						</a>
					</div>
					<div class="col-12 col-md-4 col-lg-4 mt15 mt-md30">
						<a href="#" class="t-decoration-none">
							<div class="quicklinks-box text-center p15 py-md20 h-100 d-flex align-content-center justify-content-center flex-wrap">
							<div class="w-100 text-center"><i class="icon-add-new-broadcast d-gblue-clr f-35 d-block"></i></div>
							<h6 class="f-14 firasans-font vd-gblue-clr w400 mt8">Add Broadcast Campaign</h6>
							</div>
						</a>
					</div>
					<div class="col-12 col-md-4 col-lg-4 mt15 mt-md30">
						<a href="#" class="t-decoration-none">
							<div class="quicklinks-box text-center p15 py-md20 h-100 d-flex align-content-center justify-content-center flex-wrap">
							<div class="w-100 text-center"><i class="icon-add-web-notification-campaign d-gblue-clr f-30 d-block"></i></div>
							<h6 class="f-14 firasans-font vd-gblue-clr w400 mt8">Add Web Notification Campaign</h6>
							</div>
						</a>
					</div>
				</div>
				</div>	
				<!-- Content Section end -->
			</div>
		</div>
		<!-- Quick Links Section end -->
	</div>
</div>

<!------- Smart Footer Include File---------->
<?php include '../includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->

<!-- Dashboard Drag & Drop Js --->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/jquery-ui-drag/jquery-ui.css">
<script src="<?php echo $basedir; ?>vendors/jquery-ui-drag/jquery-ui.js"></script>
