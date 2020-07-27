<!-- Header Include File -->
<?php include '../../../smart/html/includes/dcp-header-final.php'; ?>
<!-- Header Include File end -->

<!-- SMS Stylesheet -->
<link rel="stylesheet" href="../../css/sms.css">
<!-- SMS Stylesheet end -->

<div class="container-fluid p15 px-md30 py-md30">
	<!-- Header Start -->
	<div class="row mb15 mb-md30 align-items-center">
		<div class="col-12 col-md-7">
			<div class="d-flex align-items-center flex-wrap">
				<ul class="stepwizard-style2 f-18 f-sm-24 w400 lato-font mr15">
					<li> <a href="#"> Campaigns</a> </li>
					<li> <a href="#"> Playlists</a> </li>
				</ul>
				<div class="d-flex mt7">
					<a href="#" class="gblue-clr t-decoration-none f-17 mr5" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
					<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
				</div>
			</div>
			<p class="f-14 mt5 gblue-clr">Here you are manage your all Campaign details</p>
		</div>
		<div class="col-12 col-md-5 f-16 text-center text-md-right">		
			<a href="javascript:void(0)" class="base-btn blue-btn mt10 mt-md0" data-toggle="modal" data-target="#createNewPageModal"><i class="icon-add-new f-18 align-middle"></i>&nbsp;&nbsp; New Playlist</a>
		</div>
	</div>
	<!-- Header End  -->
	<div class="row">
		<div class="col-xl-2 col-lg-3 col-md-3 col-12">
			<!-- Heading -->
			<h5 class="f-16 w500 mb10 pb10 campaign-border-bottom">Manage</h5>
			<div class="nav flex-column nav-pills ui-vertical-tab f-16 w400">
				<a class="nav-link" href="all-campaign.php"><i class="icon-project-update f-16"></i> All Campaigns</a>
				<a class="nav-link" href="single-folder.php"><i class="icon-project f-18"></i> Projects</a>
				<a class="nav-link" href="journey-listing.php"><i class="icon-all-journey f-16"></i> Funnels/Journey</a>
				<a class="nav-link active" href="page-listing.php"><i class="icon-total-visited-pages f-16"></i> Pages</a>
				<a class="nav-link" href="video-listing.php"><i class="icon-total-viewed-videos f-16"></i> Videos</a>
				<a class="nav-link" href="popup-and-bars-listing.php"><i class="icon-editor-popup f-16"></i> Popups & Bars</a>
				<a class="nav-link" href="mail-listing.php"><i class="icon-mail f-16"></i> Mails</a>
				<a class="nav-link" href="sms-listing.php"><i class="icon-sms f-16"></i> SMS</a>
			</div>
		</div>
		<div class="col-xl-10 col-lg-9 col-md-9 col-12">
			<!-- Filteration Div -->
			<div class="row mb15 mb-md30 min-h-40 relative">
				<!-- Table Option Div -->
				<div class="table-option-manage manage animated fadeIn ml-md10 ml0 col-12 pt2">
					<ul class="list-inline f-14 w400 mb0">
						<li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" data-toggle="modal" data-target="#filemoveModal" class="base-btn default-btn btn-h30 f-14" title="Move"><i class="icon-move"></i><span class="d-none d-md-inline-block">&nbsp;  Move</span></a>
						</li>
						<li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Duplicate"><i class="icon-duplicate"></i><span class="d-none d-md-inline-block">&nbsp;  Duplicate</span></a>
						</li>
						<li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i><span class="d-none d-md-inline-block"> &nbsp; Delete</span></a>
						</li>
					</ul>
				</div>
				<!-- Table Option Div end-->
				<!-- Filter Div Start -->
				<div class="col-12 col-md-1 d-flex">
					<div class="smart-checkbox-btn checkbox-strong-blue ml5">
						<input id="checkAll" type="checkbox">
						<label for="checkAll"></label>
					</div>
				</div>
				<div class="col-12 col-md-11 bs-h40 table-option-hide pl-md0">
					<div class="row">
						<div class="col-12 col-md-4 col-xl-2 mt15 mt-md0">
							<select class="selectpicker f-14" title="All Playlists (400)">
								<option>All Playlists (400)</option>
								<option>Recently added Playlists (10)</option>
								<option>Recently modified Playlists (15)</option>
								<option>Playlists added in last 07 days (10)</option>
								<option>Playlists added in last 30 days (10)</option>
							</select>
						</div>
						<div class="col-12 col-md-4 col-xl-2 mt10 mt-md0">
							<select class="selectpicker" title="Sort by Result">
								<option>Sort By</option>
								<option>Views</option>
								<option>Plays</option>
								<option>Play Rate</option>
								<option>Like</option>
								<option>Dislike</option>
								<option>Engagement Rate</option>
								<option>Size</option>
								<option>Created Date</option>
								<option>Modified Date</option>
							</select>
						</div>
						<div class="col-12 col-md-4 col-xl-2 mt10 mt-md0">
							<select class="selectpicker f-14" title="Playlists">
								<option>Videos</option>
								<option>Playlists</option>
							</select>
						</div>
						<div class="col-12 col-md-4 col-xl-2 mt10 mt-xl0">
							<button type="button" class="base-btn default-btn filter-list-open btn-block">Add Filter &nbsp;<i class="icon-filter" aria-hidden="true"></i> </button>
						</div>
						<div class="col-12 col-md-4 col-xl-2 mt10 mt-xl0">
							<div class="smart-search-field">
								<div class="input-group">
									<input class="form-control" placeholder="Search" type="text">
									<div class="input-group-append">
										<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4 col-xl-2 mt10 mt-xl0">
							<div class="row">
								<div class="col-3 col-md-3 col-lg-4 d-flex align-self-center f-14 d-md-none d-lg-block">Show</div>
								<div class="col-9 col-md-12 col-lg-8 bs-h40">
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
				<!-- Filter Div End -->
			</div>
			<!-- Filteration Div End -->
			<!-- Campaigns List Section -->
			<div class="row">
				<div class="col-12 col-md-12 col-lg-8 order-2 order-lg-1 t-wauto tw-100 transition-all">
					<div class="col-12 project-list-view-border p0">
						<!-- First List -->
						<div class="project-list-view p15 px-md20 py-md15">						
							<div class="row">
								<div class="col-12 col-md-4 col-lg-3 col-xl-2">
									<div class="media">
										<div class="smart-checkbox-btn checkbox-strong-blue mtm7">
											<input id="search1" type="checkbox" class="checkbox-active">
											<label for="search1"></label>
										</div>
										<div class="media-body ml5">
											<div class="campaign-list-view">
												<img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid">
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-8 col-lg-9 col-xl-10 mt15 mt-md0 d-flex flex-wrap pl-md5">
									<div class="row hide-edit-show no-gutters w-100">
										<div class="col-xl-6 col-lg-5 col-md-12 col-12 pr-md15">
											<div class="d-flex align-items-center">
												<div class="f-18 f-md-20 w500 text-ellipsis">Playlist Name Goes Here </div><a href="#" class="ml8 d-gblue-clr t-decoration-none edit-link"><i class="icon-edit f-12"></i></a>
											</div>
											<div class="d-gblue-clr mb5 mt5">
												<p class="lh150 f-13">Total Videos : 100</p>
												<p class="lh150 f-13">Created on Nov 18, 2017 at 4:08 PM</p>
											</div>
										
											
											
										</div>
										<div class="col-xl-6 col-lg-7 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap">

											<div class="d-flex justify-content-between flex-wrap w-100">
												<div class="d-flex mr10">
													<div class="campaign-list-icon"><i class="icon-show"></i></div>
													<div class="ml10">
														<span class="f-15">Visits</span>
														<div class="f-24 w700">500 </div>
													</div>
												</div>
												<div class="d-flex mr10">
													<div class="campaign-list-icon"><i class="icon-total-viewed-videos f-16"></i></div>
													<div class="ml10">
														<span class="f-15">Plays</span>
														<div class="f-24 w700">500 </div>
													</div>
												</div>
												<div class="d-flex">
													<div class="campaign-list-icon"><i class="icon-conversion-rate"></i></div>
													<div class="ml10">
														<span class="f-15">Engagement Rate</span>
														<div class="f-24 w700">20% </div>
													</div>
												</div>
											</div>
											<!-- Button -->
											<div class="col-12 text-md-right p0 align-self-end">
												<ul class="list-inline w400 mb0">
													<li class="list-inline-item mt10 mt-md15"><a href="#" class="base-btn default-btn list-btn-h25" title="Add Videos"><i class="icon-add-new"></i><span class="hide-text-md">&nbsp;  Add Videos</span></a>
													</li>
													<li class="list-inline-item mt10 mt-md15"><a href="#" class="base-btn default-btn list-btn-h25" title="View"><i class="icon-show f-20"></i><span class="hide-text-md">&nbsp;  View</span></a>
													</li>
													<li class="list-inline-item mt10 mt-md15"><a href="#" class="base-btn default-btn list-btn-h25" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i><span class="hide-text-md">&nbsp;  Delete</span></a>
													</li>
													
												</ul>
											</div>
										</div>
									</div>
									<!-- Edit option Link div Show on Click  -->
									<div class="row edit-field-show no-gutters w-100">
										<div class="col-12 col-lg-11 col-xl-8 smart-form campaign-input-field">
											<div class="input-group">
												<input type="text" class="form-control field-h40 fw100 mb15 mb-md0" value="Page Name Goes Here">
												<div class="input-group-append">
													<span class="input-group-text" id="basic-addon2">
													  <button type="button" class="base-btn f-14 cancel-edit">Cancel</button>
													  <button type="button" class="base-btn green-btn f-14">Save</button>
												    </span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Second List -->
						<div class="project-list-view p15 px-md20 py-md15">						
							<div class="row">
								<div class="col-12 col-md-4 col-lg-3 col-xl-2">
									<div class="media">
										<div class="smart-checkbox-btn checkbox-strong-blue mtm7">
											<input id="search2" type="checkbox" class="checkbox-active">
											<label for="search2"></label>
										</div>
										<div class="media-body ml5">
											<div class="campaign-list-view">
												<img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid">
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-8 col-lg-9 col-xl-10 mt15 mt-md0 d-flex flex-wrap pl-md5">
									<div class="row hide-edit-show no-gutters w-100">
										<div class="col-xl-6 col-lg-5 col-md-12 col-12 pr-md15">
											<div class="d-flex align-items-center">
												<div class="f-18 f-md-20 w500 text-ellipsis">Playlist Name Goes Here </div><a href="#" class="ml8 d-gblue-clr t-decoration-none edit-link"><i class="icon-edit f-12"></i></a>
											</div>
											<div class="d-gblue-clr mb5 mt5">
												<p class="lh150 f-13">Total Videos : 100</p>
												<p class="lh150 f-13">Created on Nov 18, 2017 at 4:08 PM</p>
											</div>
										
											
											
										</div>
										<div class="col-xl-6 col-lg-7 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap">

											<div class="d-flex justify-content-between flex-wrap w-100">
												<div class="d-flex mr10">
													<div class="campaign-list-icon"><i class="icon-show"></i></div>
													<div class="ml10">
														<span class="f-15">Visits</span>
														<div class="f-24 w700">500 </div>
													</div>
												</div>
												<div class="d-flex mr10">
													<div class="campaign-list-icon"><i class="icon-total-viewed-videos f-16"></i></div>
													<div class="ml10">
														<span class="f-15">Plays</span>
														<div class="f-24 w700">500 </div>
													</div>
												</div>
												<div class="d-flex">
													<div class="campaign-list-icon"><i class="icon-conversion-rate"></i></div>
													<div class="ml10">
														<span class="f-15">Engagement Rate</span>
														<div class="f-24 w700">20% </div>
													</div>
												</div>
											</div>
											<!-- Button -->
											<div class="col-12 text-md-right p0 align-self-end">
												<ul class="list-inline w400 mb0">
													<li class="list-inline-item mt10 mt-md15"><a href="#" class="base-btn default-btn list-btn-h25" title="Add Videos"><i class="icon-add-new"></i><span class="hide-text-md">&nbsp;  Add Videos</span></a>
													</li>
													<li class="list-inline-item mt10 mt-md15"><a href="#" class="base-btn default-btn list-btn-h25" title="View"><i class="icon-show f-20"></i><span class="hide-text-md">&nbsp;  View</span></a>
													</li>
													<li class="list-inline-item mt10 mt-md15"><a href="#" class="base-btn default-btn list-btn-h25" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i><span class="hide-text-md">&nbsp;  Delete</span></a>
													</li>
													
												</ul>
											</div>
										</div>
									</div>
									<!-- Edit option Link div Show on Click  -->
									<div class="row edit-field-show no-gutters w-100">
										<div class="col-12 col-lg-11 col-xl-8 smart-form campaign-input-field">
											<div class="input-group">
												<input type="text" class="form-control field-h40 fw100 mb15 mb-md0" value="Page Name Goes Here">
												<div class="input-group-append">
													<span class="input-group-text" id="basic-addon2">
													  <button type="button" class="base-btn f-14 cancel-edit">Cancel</button>
													  <button type="button" class="base-btn green-btn f-14">Save</button>
												    </span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Third List -->
						<div class="project-list-view p15 px-md20 py-md15">						
							<div class="row">
								<div class="col-12 col-md-4 col-lg-3 col-xl-2">
									<div class="media">
										<div class="smart-checkbox-btn checkbox-strong-blue mtm7">
											<input id="search3" type="checkbox" class="checkbox-active">
											<label for="search3"></label>
										</div>
										<div class="media-body ml5">
											<div class="campaign-list-view">
												<img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid">
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-8 col-lg-9 col-xl-10 mt15 mt-md0 d-flex flex-wrap pl-md5">
									<div class="row hide-edit-show no-gutters w-100">
										<div class="col-xl-6 col-lg-5 col-md-12 col-12 pr-md15">
											<div class="d-flex align-items-center">
												<div class="f-18 f-md-20 w500 text-ellipsis">Playlist Name Goes Here </div><a href="#" class="ml8 d-gblue-clr t-decoration-none edit-link"><i class="icon-edit f-12"></i></a>
											</div>
											<div class="d-gblue-clr mb5 mt5">
												<p class="lh150 f-13">Total Videos : 100</p>
												<p class="lh150 f-13">Created on Nov 18, 2017 at 4:08 PM</p>
											</div>
										
											
											
										</div>
										<div class="col-xl-6 col-lg-7 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap">

											<div class="d-flex justify-content-between flex-wrap w-100">
												<div class="d-flex mr10">
													<div class="campaign-list-icon"><i class="icon-show"></i></div>
													<div class="ml10">
														<span class="f-15">Visits</span>
														<div class="f-24 w700">500 </div>
													</div>
												</div>
												<div class="d-flex mr10">
													<div class="campaign-list-icon"><i class="icon-total-viewed-videos f-16"></i></div>
													<div class="ml10">
														<span class="f-15">Plays</span>
														<div class="f-24 w700">500 </div>
													</div>
												</div>
												<div class="d-flex">
													<div class="campaign-list-icon"><i class="icon-conversion-rate"></i></div>
													<div class="ml10">
														<span class="f-15">Engagement Rate</span>
														<div class="f-24 w700">20% </div>
													</div>
												</div>
											</div>
											<!-- Button -->
											<div class="col-12 text-md-right p0 align-self-end">
												<ul class="list-inline w400 mb0">
													<li class="list-inline-item mt10 mt-md15"><a href="#" class="base-btn default-btn list-btn-h25" title="Add Videos"><i class="icon-add-new"></i><span class="hide-text-md">&nbsp;  Add Videos</span></a>
													</li>
													<li class="list-inline-item mt10 mt-md15"><a href="#" class="base-btn default-btn list-btn-h25" title="View"><i class="icon-show f-20"></i><span class="hide-text-md">&nbsp;  View</span></a>
													</li>
													<li class="list-inline-item mt10 mt-md15"><a href="#" class="base-btn default-btn list-btn-h25" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i><span class="hide-text-md">&nbsp;  Delete</span></a>
													</li>
													
												</ul>
											</div>
										</div>
									</div>
									<!-- Edit option Link div Show on Click  -->
									<div class="row edit-field-show no-gutters w-100">
										<div class="col-12 col-lg-11 col-xl-8 smart-form campaign-input-field">
											<div class="input-group">
												<input type="text" class="form-control field-h40 fw100 mb15 mb-md0" value="Page Name Goes Here">
												<div class="input-group-append">
													<span class="input-group-text" id="basic-addon2">
													  <button type="button" class="base-btn f-14 cancel-edit">Cancel</button>
													  <button type="button" class="base-btn green-btn f-14">Save</button>
												    </span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>						
						
					</div>
					<!-- Pagination Div Start -->
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
								<li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i> </a>
								</li>
								<li><a href="#">1</a>
								</li>
								<li><a href="#">2</a>
								</li>
								<li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </a>
								</li>
								<li><a href="#" class="active">6</a>
								</li>
								<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> </a>
								</li>
							</ul>
						</div>
					</div>
					<!-- Pagination Div End -->
				</div>
				<!-- Filteration Div start -->
				<div class="col-12 col-md-12 col-lg-4 col-xl-4 order-1 order-lg-2  white-bg filter-div-select transition-all mb15 mb-lg0">
					<div class="border radius5 relative">
						<a class="filter-hide remove-icon d-gblue-clr t-decoration-none" href="javascript:vodi(0)"><i class="icon-cross f-12"></i></a>
						<!-- Header -->
						<div class="p15 p-md30 clearfix">
							<!-- Heading -->
							<div class="f-16 f-md-18">Add Filter
								<span class="f-12 f-md-14 relative ml15">
							<a href="#" class="s-blue-clr t-decoration-none">Clear</a>
							</span>
							</div>
							<!-- Filteration list -->
							<div class="d-flex justify-content-between mt15 mt-md30">
								<div class="w-100 mr15 filter-single-width">
									<select class="selectpicker f-14" title="Choose">
										<option>Video Name</option>
										<option>Created Date</option>
										<option>Project Name</option>
										<option>Playlist Name</option>
									</select>
								</div>
								<div class="align-self-center mt4 d-flex justify-content-between">
									<a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
								</div>
							</div>
							<!-- Tags -->
							<div class="mt5 mt-md20 clearfix">
								<ul class="list-inline f-14 w400 mb0">
									<li class="list-inline-item vl-gblue-bg radius5 custom-tags-pad d-gblue-clr mt10">Added Date &nbsp;<a href="#" class="t-decoration-none d-gblue-clr" data-dismiss="alert" aria-label="close"><i class="icon-cross f-12"></i></a>
									</li>
									<li class="list-inline-item vl-gblue-bg radius5 custom-tags-pad d-gblue-clr mt10">Modified Date &nbsp;<a href="#" class="t-decoration-none d-gblue-clr"><i class="icon-cross f-12"></i></a>
									</li>
								</ul>
							</div>
							<!-- Tags end -->
						</div>
						<!------- Header End------>
		<div class="filter-scrollbar mCustomScrollbar" data-mcs-theme="inset-3">
         <div class="clearfix filter-divide-bg">
            <div class="d-flex justify-content-between">
               <div class="w-100 mr15 filter-single-width">
                  <select class="selectpicker f-14" title="Select title">
                     <option>Title</option>
                  </select>
               </div>
               <div class="align-self-center mt4 d-flex justify-content-between">
            	<a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
               </div>
            </div>
			 

			 
            <div class="form-group mb0">
               <select class="selectpicker mt5 f-14" title="Is equal to">
                  <option>Is equal to 1</option>
                  <option>Is equal to 2</option>
                  <option>Is equal to 3</option>
               </select>
            </div>
            <div class="form-group mb0 smart-form f-14">
               <input type="text" class="form-control border-top-0" placeholder="Enter Title">
            </div>
         </div>
         <!-------- And or div ------------>
         <div class="p15 py-md15 px-md30">
            <div class="row">
               <div class="col-12 col-md-2 col-lg-2 col-xl-3 d-none d-md-block">
                  <div class="andor-seperator mt16"></div>
               </div>
               <div class="col-12 col-md-8 col-lg-8 col-xl-6 p0 text-center">
                  <div class="switch-field f14 w400">
                     <input id="Visitsors-and" name="Visitsors" value="and" type="radio">
                     <label for="Visitsors-and" class="switch_left mb0">And</label>
                     <input id="Visitsors-or" name="Visitsors" value="or" type="radio">
                     <label for="Visitsors-or" class="switch_right mb0">Or</label>
                  </div>
               </div>
               <div class="col-12 col-md-2 col-lg-2 col-xl-3 d-none d-md-block">
                  <div class="andor-seperator mt16"></div>
               </div>
            </div>
         </div>
         <div class="clearfix filter-divide-bg">
            <div class="d-flex justify-content-between">
               <div class="w-100 mr15 filter-double-width">
                  <select class="selectpicker f-14" title="Select Created Date">
                     <option>Created Date</option>
                  </select>
               </div>
               <div class="align-self-center mt4 d-flex justify-content-between">
                  <a href="#" class="f-16 filter-delete-icon mr10"><i class="icon-delete"></i></a><a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
               </div>
            </div>
            <div class="form-group mb0">
               <select class="selectpicker mt5 f-14" title="Is equal to">
                  <option>Is equal to 1</option>
                  <option>Is equal to 2</option>
                  <option>Is equal to 3</option>
               </select>
            </div>
            <div class="form-group mb0 smart-form f-14">
               <input type="text" class="caleran-ex-1 form-control f-14 border-top-0" readonly data-plugin-options='{"rangeOrientation":true,"showButtons":true}' placeholder="Choose Date"/>
            </div>
         </div>
        
		
		<!-------- And or div ------------>
         <div class="p15 py-md15 px-md30">
            <div class="row">
               <div class="col-12 col-md-2 col-lg-2 col-xl-3 d-none d-md-block">
                  <div class="andor-seperator mt16"></div>
               </div>
               <div class="col-12 col-md-8 col-lg-8 col-xl-6 p0 text-center">
                  <div class="switch-field f14 w400">
                     <input id="Visitsors-and2" name="Visitsors2" value="and" type="radio">
                     <label for="Visitsors-and2" class="switch_left mb0">And</label>
                     <input id="Visitsors-or2" name="Visitsors2" value="or" type="radio">
                     <label for="Visitsors-or2" class="switch_right mb0">Or</label>
                  </div>
               </div>
               <div class="col-12 col-md-2 col-lg-2 col-xl-3 d-none d-md-block">
                  <div class="andor-seperator mt16"></div>
               </div>
            </div>
         </div>
		<div class="clearfix filter-divide-bg">
            <div class="d-flex justify-content-between">
               <div class="w-100 mr15 filter-single-width">
                  <select class="selectpicker f-14" title="Select Project Title">
                     <option>Project Title</option>
                  </select>
               </div>
               <div class="align-self-center mt4 d-flex justify-content-between">
            	<a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
               </div>
            </div>
            <div class="form-group mb0">
               <select class="selectpicker mt5 f-14" title="Is equal to">
                  <option>Project Name 1</option>
                  <option>Project Name 2</option>
                  <option>Project Name 3</option>
               </select>
            </div>
         </div>
         
		 
		 <!-------- And or div ------------>
         <div class="p15 py-md15 px-md30">
            <div class="row">
               <div class="col-12 col-md-2 col-lg-2 col-xl-3 d-none d-md-block">
                  <div class="andor-seperator mt16"></div>
               </div>
               <div class="col-12 col-md-8 col-lg-8 col-xl-6 p0 text-center">
                  <div class="switch-field f14 w400">
                     <input id="Visitsors-and2" name="Visitsors3" value="and" type="radio">
                     <label for="Visitsors-and3" class="switch_left mb0">And</label>
                     <input id="Visitsors-or3" name="Visitsors3" value="or" type="radio">
                     <label for="Visitsors-or3" class="switch_right mb0">Or</label>
                  </div>
               </div>
               <div class="col-12 col-md-2 col-lg-2 col-xl-3 d-none d-md-block">
                  <div class="andor-seperator mt16"></div>
               </div>
            </div>
         </div>
		<div class="clearfix filter-divide-bg">
            <div class="d-flex justify-content-between">
               <div class="w-100 mr15 filter-single-width">
                  <select class="selectpicker f-14" title="Select Playlist Title">
                     <option>Playlist Title</option>
                  </select>
               </div>
               <div class="align-self-center mt4 d-flex justify-content-between">
            	<a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
               </div>
            </div>
            <div class="form-group mb0">
               <select class="selectpicker mt5 f-14" title="Is equal to">
                  <option>Playlist Name 1</option>
                  <option>Playlist Name 2</option>
                  <option>Playlist Name 3</option>
               </select>
            </div>
         </div>
         </div>
					</div>
				</div>
				<!-- Filteration Div end -->
			</div>
			<!-- Campaigns List Section End -->
		</div>
	</div>
</div>

<!-- Footer Include File-------->
<?php include '../../../smart/html/includes/dcp-footer.php'; ?>
<!-- Footer Include File end -------->