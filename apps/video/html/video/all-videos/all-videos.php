<!------- Smart Header Include File---------->
<?php include '../../../../smart/html/includes/dcp-header.php'; ?>
<!------- Smart Header Include File end---------->

<!------- Smart Video Stylesheet------=------->
<link rel="stylesheet" href="../../../css/video.css">
<!------- Smart Video Stylesheet end---------->


<div class="container-fluid p15 p-md30">

	<!------- Header Start----------->
	<div class="row mb15 mb-md30 align-items-center">
		<div class="col-12 col-md-7 col-lg-7">
			<span class="f-20 f-md-24 lato-font">All Videos </span> &nbsp;
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="f-14 mt5 gblue-clr">Here you can add & manage your all videos</p>
		</div>
		<div class="col-12 col-md-5 col-lg-5 text-center text-md-right mt10 mt-md0 f-16 w400">
			<a href="javascript:void(0)" class="base-btn default-btn mr5"><i class="icon-video-help f-18 align-middle"></i>&nbsp;&nbsp; View Video Channel</a>
			<a href="javascript:void(0)" class="base-btn blue-btn"><i class="icon-add-new f-18 align-middle"></i>&nbsp;&nbsp; New Video</a>
		</div>

	</div>
	<!------- Header End ----------->


	<!--- Filteration Div ---->
	<div class="row mb15 mb-md30 relative min-h-40">

		<div class="table-option-manage manage animated fadeIn ml-md10 ml0 col-12 pt2">
			<ul class="list-inline f-14 w400 mb0">
				<li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" data-toggle="modal" data-target="#filemoveModal" class="base-btn default-btn btn-h30 f-14" title="Move"><i class="icon-move"></i><span class="d-none d-md-inline-block">&nbsp;  Move</span></a>
				</li>
				<li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Add into Playlist" data-toggle="modal" data-target="#AddVideoPlayListModal"><i class="icon-playlist"></i><span class="d-none d-md-inline-block">&nbsp;  Add into Playlist</span></a>
				</li>
				<li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Delete"><i class="icon-delete"></i><span class="d-none d-md-inline-block">&nbsp;  Delete</span></a>
				</li>
			</ul>
		</div>
		<!----- Table Option Div end---->

		<div class="col-md-12 col-lg-12 col-xl-7 align-items-center mb-lg0 mb15">
			<div class="d-flex flex-wrap">
			<div class="smart-checkbox-btn checkbox-strong-blue pull-left ml-md30">
				<input id="checkAll2" type="checkbox">
				<label for="checkAll2"></label>
			</div>
			<span class="bs-h40 table-option-hide col-12 col-md-4 col-lg-4 px0 px-md15 mt15 mt-md0">
				<select class="selectpicker f-14" title="All Videos (400)">
				  <option>All Videos (400)</option>
				  <option>Recently added Video (10)</option>
                  <option>Recently modified Video (15)</option>
                  <option>Video added in last 07 days (10)</option>
				  <option>Video added in last 30 days (10)</option>
				</select>
			</span> 
			<span class="bs-h40 table-option-hide col-12 col-md-4 col-lg-4 px0 px-md15 mt15 mt-md0">
				<select class="selectpicker f-14" title="Sort by">
				  <option>Visits</option>
				  <option>Plays</option>
                  <option>Play Rate</option>
                  <option>Like</option>
				  <option>Dislike</option>
				  <option>Engagement Rate</option>
				  <option>Size</option>
				</select>
			</span>
			<span class="bs-h40 table-option-hide col-12 col-md-3 col-lg-3 px0 px-md15 mt15 mt-md0">
				<select class="selectpicker f-14" title="Videos">
				  <option>Videos</option>
				  <option>Playlists</option>
				</select>
			</span>
			</div>	
		</div>
		<div class="col-md-12 col-lg-12 col-xl-5 smart-form table-option-hide pl-md0 mt-lg15 mt-xl0">
			<div class="row">

				<div class="col-md-4 col-lg-4 col-xl-3 bs-h40 mb15 mb-md0 pl-md0 text-md-right">
					<button type="button" class="base-btn default-btn filter-list-open f-14 btn-xs-block">Add Filter &nbsp;<i class="icon-filter" aria-hidden="true"></i> </button>
				</div>
				
				<div class="col-md-5 col-lg-5 col-xl-5 mb15 mb-md0">
					<div class="smart-search-field">
						<div class="input-group">
							<input class="form-control" placeholder="Search and press enter" type="text">
							<div class="input-group-append">
								<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-lg-3 col-xl-4">
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
	</div>

	<!------- Block Section----->
	<div class="row">
		
		<div class="col-12 col-md-12 col-lg-8 order-2 order-lg-1 t-wauto tw-100 transition-all">
			
				<div class="col-12 project-list-view-border p0">
					
				<div class="project-list-view p15 p-md30">
				 <!-- Error Message Div -->
					 <div class="video-upload-error">Corrupted video file, Processing aborted</div>
					  <!-- Error Message Div end-->
					<div class="row">
						<div class="col-12 col-md-4 col-lg-3 col-xl-3">
                  <div class="media">
                     <div class="smart-checkbox-btn checkbox-strong-blue mtm7">
                        <input id="search1" type="checkbox" class="checkbox-active">
                        <label for="search1"></label>
                     </div>
                     <div class="media-body ml5">
                        <div class="hover-img d-flex align-items-center">
                           <img src="<?php echo $basedir; ?>images/corrupt-video-image.png" class="img-fluid d-block mx-auto">
                           <div class="img-overlay" >
                              <div class="text-right">
                                 <label id="#file">
                                    <div class="hover-icon">
                                       <i class="icon-edit"></i>
                                    </div>
                                    <input type="file" id="File" size="60">
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
						 <div class="col-12 col-md-8 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
                  <div class="row hide-edit-show no-gutters w-100">
                     <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
                        <div class="d-flex align-items-center">
                           <div class="f-20 f-md-24 w400 text-ellipsis">Video Name Goes Here</div>
                           <div class=""><a href="#" class="ml8 d-gblue-clr t-decoration-none edit-link"><i class="icon-edit f-16"></i></a></div>
                        </div>
                        <p class="f-14 lh140 d-gblue-clr my15 my-md20">Created on Nov 18, 2017 at 4:08 PM
                        </p>
						<!-- Like And Comments -->
						<div class="d-flex flex-wrap f-14">
							<div class="d-flex align-items-center mr15 mr-md25">
								<span class="like-comment-icon d-gblue-clr mr8"><i class="icon-Like f-11"></i></span>520
							</div>
							<div class="d-flex align-items-center">
								<span class="like-comment-icon d-gblue-clr mr8"><i class="icon-commentt f-11"></i></span>520
							</div>
						</div>
						<span class="f-12 private-btn mt15"><i class="icon-person"></i> Private</span>
						<div class="mt15 f-14">Project Name : Project 1</div>
                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap">
					 <div class="d-flex justify-content-between flex-wrap w-100">
                           <div class="d-flex mr15 mr-md20 mb10">
                              <img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/views-icon.png">
                              <div class="ml10">
                                 <span class="f-16">Visits</span>
                                 <div class="f-24">500 </div>
                              </div>
                           </div>
                           <div class="d-flex mr15 mr-md20 mb10">
                              <img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/play-icon.png">
                              <div class="ml10">
                                 <span class="f-16">Plays</span>
                                 <div class="f-24">30 </div>
                              </div>
                           </div>
                           <div class="d-flex mb10">
                              <img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/conversion-rate-icon.png">
                              <div class="ml10">
                                 <span class="f-16">Engagement Rate</span>
                                 <div class="f-24">20% </div>
                              </div>
                           </div>
                        </div>
                        <!------ Button------>
                        <div class="col-12 text-md-right p0 align-self-end">
                           <ul class="list-inline w400 mb0">                       
							  <li class="list-inline-item mt10"><a data-toggle="modal" data-target="#deleteModal" class="base-btn default-btn btn-h30 f-14" title="Delete"><i class="icon-delete"></i><span class="hide-text-md">&nbsp;  Delete</span></a>
                              </li>
                             
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!-------- Edit option Link div Show on Click------>
                  <div class="row edit-field-show no-gutters w-100">
                     <div class="col-12 smart-form">
                        <div class="input-group">
                           <input type="text" class="form-control field-h40 fw100 mb15 mb-md0" value="Driverless Hotel Rooms: The End of Uber, Airbnb and Human Landlords.">
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

				<div class="project-list-view p15 p-md30">
				 <!-- Error Message Div -->
					 <div class="video-upload-error">Corrupted dfsdfsd file, Processing aborted</div>
					  <!-- Error Message Div end-->
					<div class="row">
						<div class="col-12 col-md-4 col-lg-3 col-xl-3">
                  <div class="media">
                     <div class="smart-checkbox-btn checkbox-strong-blue mtm7">
                        <input id="search1" type="checkbox" class="checkbox-active">
                        <label for="search1"></label>
                     </div>
                     <div class="media-body ml5">
                        <div class="hover-img d-flex align-items-center">
                           <img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">
                           <div class="img-overlay" >
                              <div class="text-right">
                                 <label id="#file">
                                    <div class="hover-icon">
                                       <i class="icon-edit"></i>
                                    </div>
                                    <input type="file" id="File" size="60">
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
						 <div class="col-12 col-md-8 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
                  <div class="row hide-edit-show no-gutters w-100">
                     <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
                        <div class="d-flex align-items-center">
                           <div class="f-20 f-md-24 w400 text-ellipsis">Video Name Goes Here</div>
                           <div class=""><a href="#" class="ml8 d-gblue-clr t-decoration-none edit-link"><i class="icon-edit f-16"></i></a></div>
                        </div>
                        <p class="f-14 lh140 d-gblue-clr my15 my-md20">Created on Nov 18, 2017 at 4:08 PM
                        </p>
                        <!-- Like And Comments -->
						<div class="d-flex flex-wrap f-14">
							<div class="d-flex align-items-center mr15 mr-md25">
								<span class="like-comment-icon d-gblue-clr mr8"><i class="icon-Like f-11"></i></span>520
							</div>
							<div class="d-flex align-items-center">
								<span class="like-comment-icon d-gblue-clr mr8"><i class="icon-commentt f-11"></i></span>520
							</div>
						</div>
						<span class="f-12 private-btn mt15"><i class="icon-public"></i> Public</span>
						<div class="mt15 f-14">Project Name : Project 2</div>
                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap">
                        <div class="d-flex justify-content-between flex-wrap w-100">
                           <div class="d-flex mr15 mr-md20 mb10">
                              <img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/views-icon.png">
                              <div class="ml10">
                                 <span class="f-16">Visits</span>
                                 <div class="f-24">500 </div>
                              </div>
                           </div>
                           <div class="d-flex mr15 mr-md20 mb10">
                              <img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/play-icon.png">
                              <div class="ml10">
                                 <span class="f-16">Plays</span>
                                 <div class="f-24">30 </div>
                              </div>
                           </div>
                           <div class="d-flex mb10">
                              <img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/conversion-rate-icon.png">
                              <div class="ml10">
                                 <span class="f-16">Engagement Rate</span>
                                 <div class="f-24">20% </div>
                              </div>
                           </div>
                        </div>
                        <!------ Button------>
                        <div class="col-12 text-md-right p0 align-self-end">
                           <ul class="list-inline w400 mb0">
                              <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Manage"><i class="icon-manage"></i><span class="hide-text-md">&nbsp;  Manage</span></a>
                              </li>
                              <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View Reports"><i class="icon-report"></i><span class="hide-text-md">&nbsp;  View Reports</span></a>
                              </li>
                              <li class="list-inline-item mt10"><a data-toggle="modal" data-target="#videoModal" class="base-btn default-btn btn-h30 f-14" title="Preview"><i class="icon-preview"></i><span class="hide-text-md">&nbsp;  Preview</span></a>
                              </li>
                              <li class="list-inline-item mt10 simple-dropdown caret-icon-none">
                                 <a href="#" class="base-btn default-btn btn-h30 f-14 dropdown-toggle" data-toggle="dropdown" title="More">
                                 <i class=" icon-more"></i>
                                 </a>
                                 <ul class="dropdown-menu dropdown-menu-right mCustomScrollbar f-14" data-mcs-theme="inset-3" aria-labelledby="dropdownMenu1">
									<li><a class="dropdown-item" href="#">Get Embed Code</a></li>
									<li><a class="dropdown-item" href="#">View Video Page</a></li>
									<li><a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#RemovePlayListModal">Remove From Playlist</a></li>
                                    <li> <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal">Delete</a>
                                    </li>
                                 </ul>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!-------- Edit option Link div Show on Click------>
                  <div class="row edit-field-show no-gutters w-100">
                     <div class="col-12 smart-form">
                        <div class="input-group">
                           <input type="text" class="form-control field-h40 fw100 mb15 mb-md0" value="Driverless Hotel Rooms: The End of Uber, Airbnb and Human Landlords.">
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
				
				<div class="project-list-view p15 p-md30">
					<div class="row">
						<div class="col-12 col-md-4 col-lg-3 col-xl-3">
                  <div class="media">
                     <div class="smart-checkbox-btn checkbox-strong-blue mtm7">
                        <input id="search1" type="checkbox" class="checkbox-active">
                        <label for="search1"></label>
                     </div>
                     <div class="media-body ml5">
                        <div class="hover-img d-flex align-items-center">
                           <img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">
                           <div class="img-overlay" >
                              <div class="text-right">
                                 <label id="#file">
                                    <div class="hover-icon">
                                       <i class="icon-edit"></i>
                                    </div>
                                    <input type="file" id="File" size="60">
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
						 <div class="col-12 col-md-8 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
                  <div class="row hide-edit-show no-gutters w-100">
                     <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
                        <div class="d-flex align-items-center">
                           <div class="f-20 f-md-24 w400 text-ellipsis">Video Name Goes Here</div>
                           <div class=""><a href="#" class="ml8 d-gblue-clr t-decoration-none edit-link"><i class="icon-edit f-16"></i></a></div>
                        </div>
                        <p class="f-14 lh140 d-gblue-clr my15 my-md20">Created on Nov 18, 2017 at 4:08 PM
                        </p>
                        <!-- Like And Comments -->
						<div class="d-flex flex-wrap f-14">
							<div class="d-flex align-items-center mr15 mr-md25">
								<span class="like-comment-icon d-gblue-clr mr8"><i class="icon-Like f-11"></i></span>520
							</div>
							<div class="d-flex align-items-center">
								<span class="like-comment-icon d-gblue-clr mr8"><i class="icon-commentt f-11"></i></span>520
							</div>
						</div>
						<span class="f-12 private-btn mt15"><i class="icon-locked"></i> Password protected</span>
						<div class="mt15 f-14">Project Name : Project 3</div>
                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap">
                        <div class="d-flex justify-content-between flex-wrap w-100">
                           <div class="d-flex mr15 mr-md20 mb10">
                              <img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/views-icon.png">
                              <div class="ml10">
                                 <span class="f-16">Visits</span>
                                 <div class="f-24">500 </div>
                              </div>
                           </div>
                           <div class="d-flex mr15 mr-md20 mb10">
                              <img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/play-icon.png">
                              <div class="ml10">
                                 <span class="f-16">Plays</span>
                                 <div class="f-24">30 </div>
                              </div>
                           </div>
                           <div class="d-flex mb10">
                              <img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/conversion-rate-icon.png">
                              <div class="ml10">
                                 <span class="f-16">Engagement Rate</span>
                                 <div class="f-24">20% </div>
                              </div>
                           </div>
                        </div>
                        <!------ Button------>
                        <div class="col-12 text-md-right p0 align-self-end">
                           <ul class="list-inline w400 mb0">
                              <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Manage"><i class="icon-manage"></i><span class="hide-text-md">&nbsp;  Manage</span></a>
                              </li>
                              <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View Reports"><i class="icon-report"></i><span class="hide-text-md">&nbsp;  View Reports</span></a>
                              </li>
                              <li class="list-inline-item mt10"><a data-toggle="modal" data-target="#videoModal" class="base-btn default-btn btn-h30 f-14" title="Preview"><i class="icon-preview"></i><span class="hide-text-md">&nbsp;  Preview</span></a>
                              </li>
                              <li class="list-inline-item mt10 simple-dropdown caret-icon-none">
                                 <a href="#" class="base-btn default-btn btn-h30 f-14 dropdown-toggle" data-toggle="dropdown" title="More">
                                 <i class=" icon-more"></i>
                                 </a>
                                 <ul class="dropdown-menu dropdown-menu-right mCustomScrollbar f-14" data-mcs-theme="inset-3" aria-labelledby="dropdownMenu1">
									<li><a class="dropdown-item" href="#">Get Embed Code</a></li>
									<li><a class="dropdown-item" href="#">View Video Page</a></li>
									<li><a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#RemovePlayListModal">Remove From Playlist</a></li>
                                    <li> <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal">Delete</a>
                                    </li>
                                 </ul>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!-------- Edit option Link div Show on Click------>
                  <div class="row edit-field-show no-gutters w-100">
                     <div class="col-12 smart-form">
                        <div class="input-group">
                           <input type="text" class="form-control field-h40 fw100 mb15 mb-md0" value="Driverless Hotel Rooms: The End of Uber, Airbnb and Human Landlords.">
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

		<!----- Pagination Div End----->
		</div>	
		
		<!--- Filteration Div start---->
		<div class="col-12 col-md-12 col-lg-4 col-xl-4 order-1 order-lg-2  white-bg filter-div-select transition-all mb15 mb-lg0">
		 <div class="border radius5 relative">
		<a class="filter-hide remove-icon d-gblue-clr t-decoration-none" href="javascript:vodi(0)"><i class="icon-cross f-12"></i></a>
		<!------ Header---->
		<div class="p15 p-md30 clearfix">
         <!-------- Heading ----->
         <div class="f-16 f-md-18">Add Filter
            <span class="f-12 f-md-14 relative ml15">
            <a href="#" class="s-blue-clr t-decoration-none">Clear</a>
            </span>
         </div>
         <!------- Filteration list------------>
         <div class="d-flex justify-content-between mt15 mt-md30">
            <div class="w-100 mr15 filter-single-width">
               <select class="selectpicker f-14" title="Choose">
                  <option>Title</option>
                  <option>Created Date</option>
                  <option>Status</option>
				  <option>Project Title</option>
				  <option>Playlist Title</option>
               </select>
            </div>
            <div class="align-self-center mt4 d-flex justify-content-between">
               <a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
            </div>
         </div>
         <!-------- Tags  ----->
         <div class="mt5 mt-md20 clearfix">
            <ul class="list-inline f-14 w400 mb0">
               <li class="list-inline-item vl-gblue-bg radius5 custom-tags-pad d-gblue-clr mt10">Added Date &nbsp;<a href="#" class="t-decoration-none d-gblue-clr" data-dismiss="alert" aria-label="close"><i class="icon-cross f-12"></i></a>
               </li>
               <li class="list-inline-item vl-gblue-bg radius5 custom-tags-pad d-gblue-clr mt10">Modified Date &nbsp;<a href="#" class="t-decoration-none d-gblue-clr"><i class="icon-cross f-12"></i></a>
               </li>
            </ul>
         </div>
         <!-------- Tags end ----->
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
                  <select class="selectpicker f-14" title="Select Project Title">
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
	    
    </div>
</div>
			
<!------- Smart Footer Include File---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->