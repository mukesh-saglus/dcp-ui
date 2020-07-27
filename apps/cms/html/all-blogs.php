<!------- Smart Header Include File---------->
<?php include '../../smart/html/includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<!------- CMS Stylesheet------=------->
<link rel="stylesheet" href="../css/cms.css">
<!------- CMS Stylesheet end---------->


<!------- Header Start----------->
<div class="container-fluid p15 px-md30 py-md30">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-12">
			<span class="f-20 f-md-24 lato-font">Posts (139) </span> &nbsp;
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="f-14 mt5 gblue-clr">See all your posts here</p>
		</div>
		<div class="col-lg-4 col-md-4 col-12 text-center text-md-right align-self-center mt10 mt-md0">
			<a href="#" class="base-btn blue-btn f-14"><i class="icon-create-blog"></i> Add a new blog post</a>
		</div>
	</div>
</div>
<!------- Header End ----------->

<div class="container-fluid p15 p-md30 pt0 pt-md0">

	<!--- Filteration Div ---->
	<div class="row mb15 mb-md30 min-h-40 relative">
		
				<div class="table-option-manage manage animated fadeIn ml10 col-12">
						<ul class="list-inline f-14 w400 mb0">
							<li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Duplicate"><i class="icon-duplicate"></i>&nbsp;  Duplicate</a>
							</li>
							<li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i> &nbsp; Delete</a>
							</li>
						</ul>
					</div>
					 <!----- Table Option Div end---->
		
		<div class="col-md-2 col-lg-1 col-xl-1 align-items-center pr0">
			<div class="smart-checkbox-btn checkbox-strong-blue pull-left ml-md30">
				<input id="checkAll2" type="checkbox">
				<label for="checkAll2"></label>
			</div>
			
		</div>
		<div class="col-md-10 col-lg-11 col-xl-11 mt20 mt-md0 smart-form table-option-hide">
				
			<div class="row">
			    <div class="col-md-4 col-lg-4 col-xl-2 bs-h40 mb10 mb-xl0">
					<select class="selectpicker f-14" title="All Categories" data-live-search="true">
						<option>Categories 1</option>
						<option>Categories 2</option>
						<option>Categories 3</option>
					</select>
				</div>
				<div class="col-md-4 col-lg-4 col-xl-2 bs-h40 mb10 mb-xl0">
					<select class="selectpicker f-14" title="All Sub-Categories" data-live-search="true">
						<option>Sub-Categories 1</option>
						<option>Sub-Categories 2</option>
						<option>Sub-Categories 3</option>
					</select>
				</div>
				<div class="col-md-4 col-lg-4 col-xl-2 pr-xl30 bs-h40 mb10 mb-xl0">
					<select class="selectpicker f-14" title="All Status">
						<option>Status</option>
						<option>Status</option>
						<option>Status</option>
					</select>
				</div>
				<div class="col-md-4 col-lg-4 col-xl-2 p-xl0 bs-h40 mb10 mb-xl0">
					<div class="input-group calendar-input-group">
						<input type="text" class="caleran-ex-1 form-control f-14 field-h40" id="target-cal" readonly data-plugin-options='{"rangeOrientation":true,"showButtons":true}' placeholder="Choose Date"/>
						<span class="input-group-btn caleran-show">
							<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
							</span>
					</div>
				</div>
				<div class="col-md-4 col-lg-5 col-xl-2 pl-xl30 mb10 mb-xl0">
					<div class="smart-search-field">
						<div class="input-group">
							<input class="form-control" placeholder="Search" type="text">
							<div class="input-group-append">
								<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-lg-3 col-xl-2">
					<div class="row">
						<div class="col-3 col-md-4 col-lg-5 col-xl-5 d-flex align-self-center f-14">Show</div>
						<div class="col-9 col-md-8 col-lg-7 col-xl-7 bs-h40 pl-0">
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
		<div class="col-12 project-list-view-border">
			
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
										<img src="../../../images/project-img-lg.png" class="img-fluid d-block mx-auto">
											<div class="img-overlay" >
												<div class="text-right">
													<label id="#file"> <div class="hover-icon">
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
							<div class="col-xl-6 col-lg-12 col-md-12 col-12 pr-md15">
                            	<div class="d-flex align-items-center">
								<div class="f-20 f-md-24 w400 text-ellipsis">
                                How to Choose Between these 5 SSL Certificates for Your Site</div> 
                                <div class=""><a href="#" class="ml8 d-gblue-clr t-decoration-none edit-link"><i class="icon-edit f-16"></i></a></div>
                                </div>
								<p class="f-14 lh140 d-gblue-clr my15 my-md20">Modified on Nov 18, 2017 at 4:08 PM</p>

								<span class="f-12 private-btn mr5"><i class="icon-person"></i> Private</span>
								<span class="f-12 live-btn mr5"><i class="icon-live"></i> Live</span>
								<span class="f-12 schedule-btn"><i class="icon-pending"></i> Draft</span>
								<div class="mt15 f-14">Email Marketing, Video Marketing, Landing Page</div>

							</div>
							<div class="col-xl-6 col-lg-12 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap">

									<div class="d-flex justify-content-between flex-wrap w-100">
											<div class="d-flex mr15">
												<img class="img-fluid d-block mx-auto icon-width" src="../../../images/views-icon.png">
												<div class="ml10">
													<span class="f-16">Views</span>
													<div class="f-24">500 </div>
												</div>
											</div>
										
											<div class="d-flex mr15">
												<img class="img-fluid d-block mx-auto icon-width" src="../../../images/seo-score-icon.png">
												<div class="ml10">
													<span class="f-16">SEO Score</span>
												<div class="f-24"><i class="icon-dot f-10 s-green-clr"></i> </div>
												</div>
											</div>
										
											<div class="d-flex">
												<img class="img-fluid d-block mx-auto icon-width" src="../../../images/readability-icon.png">
												<div class="ml10">
													<span class="f-16">Readability</span>
												<div class="f-24"><i class="icon-dot f-10 vi-red-clr"></i> </div>
												</div>
											</div>
										
											</div>
							
									<!------ Button------>
									<div class="col-12 text-md-right p0 mt15 mt-xl50">
										<ul class="list-inline w400 mt-xl20 mb0">
											<li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14 d-gblue-clr"><i class="icon-dot f-10 s-green-clr"></i>&nbsp; 3 New Comments (33)</a>
											</li>
											<li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14"><i class="icon-edit"></i>&nbsp;  Edit</a>
											</li>
											<li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14"><i class="icon-show"></i>&nbsp;  Preview</a>
											</li>
											<li class="list-inline-item mt10 dropdown simple-dropdown caret-icon-none">
												<a href="#" class="base-btn default-btn btn-h30 f-14 dropdown-toggle" data-toggle="dropdown">
							<i class=" icon-more"></i>
						</a>
											
												<ul class="dropdown-menu dropdown-menu-right mCustomScrollbar f-14" data-mcs-theme="inset-3" aria-labelledby="dropdownMenu1">
													<li> <a class="dropdown-item revision-preview" href="#!">Revision History</a>
													</li>
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
									<input id="search2" type="checkbox" class="checkbox-active">
									<label for="search2"></label>
								</div>

								<div class="media-body ml5">
									
									<div class="hover-img d-flex align-items-center">
										<img src="../../../images/project-img-lg.png" class="img-fluid d-block mx-auto">
											<div class="img-overlay" >
												<div class="text-right">
													<label id="#file"> <div class="hover-icon">
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
							<div class="col-xl-6 col-lg-12 col-md-12 col-12 pr-md15">
                            	<div class="d-flex align-items-center">
								<div class="f-20 f-md-24 w400 text-ellipsis">
                                How to Choose Between these 5 SSL Certificates for Your Site</div> 
                                <div class=""><a href="#" class="ml8 d-gblue-clr t-decoration-none edit-link"><i class="icon-edit f-16"></i></a></div>
                                </div>
								<p class="f-14 lh140 d-gblue-clr my15 my-md20">Modified on Nov 18, 2017 at 4:08 PM</p>

								<span class="f-12 private-btn mr5"><i class="icon-person"></i> Private</span>
								<span class="f-12 live-btn mr5"><i class="icon-live"></i> Live</span>
								
								<div class="mt15 f-14">Email Marketing, Video Marketing, Landing Page</div>

							</div>
							<div class="col-xl-6 col-lg-12 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap">

									<div class="d-flex justify-content-between flex-wrap w-100">
											<div class="d-flex mr15">
												<img class="img-fluid d-block mx-auto icon-width" src="../../../images/views-icon.png">
												<div class="ml10">
													<span class="f-16">Views</span>
													<div class="f-24">500 </div>
												</div>
											</div>
										
											<div class="d-flex mr15">
												<img class="img-fluid d-block mx-auto icon-width" src="../../../images/seo-score-icon.png">
												<div class="ml10">
													<span class="f-16">SEO Score</span>
												<div class="f-24"><i class="icon-dot f-10 s-green-clr"></i> </div>
												</div>
											</div>
										
											<div class="d-flex">
												<img class="img-fluid d-block mx-auto icon-width" src="../../../images/readability-icon.png">
												<div class="ml10">
													<span class="f-16">Readability</span>
												<div class="f-24"><i class="icon-dot f-10 vi-red-clr"></i> </div>
												</div>
											</div>
										
											</div>
							
									<!------ Button------>
									<div class="col-12 text-md-right p0 mt15 mt-xl50">
										<ul class="list-inline w400 mt-xl20 mb0">
											<li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14 d-gblue-clr"><i class="icon-dot f-10"></i>&nbsp; 3 New Comments (33)</a>
											</li>
											<li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14"><i class="icon-edit"></i>&nbsp;  Edit</a>
											</li>
											<li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14"><i class="icon-show"></i>&nbsp;  Preview</a>
											</li>
											<li class="list-inline-item mt10 dropdown simple-dropdown caret-icon-none">
												<a href="#" class="base-btn default-btn btn-h30 f-14 dropdown-toggle" data-toggle="dropdown">
							<i class=" icon-more"></i>
						</a>
											
												<ul class="dropdown-menu dropdown-menu-right mCustomScrollbar f-14" data-mcs-theme="inset-3" aria-labelledby="dropdownMenu1">
													<li> <a class="dropdown-item revision-preview" href="#!">Revision History</a>
													</li>
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

<!---------------- Revision History Div Start------------------>

	<div class="revision-history mCustomScrollbar mh-100" data-mcs-theme="inset-3">
		<!-------- Header------------>
		<div class="p15 px-md25 py-md20 d-flex justify-content-between">
			<h6 class="w900">Blog Revision History</h6>
			<a href="javascript:void(0);" class="align-self-center revision-history-close t-decoration-none"><i class="icon-cross f-13 d-gblue-clr"></i></a>
		</div>

			<div id="accordion-history" class="accordion">
			<div class="card mb-0 border-0 radius0">
				<div class="card-header collapsed align-items-center d-flex" data-toggle="collapse" href="#collapseOne">
					<a class="card-title">
					   <div class="f-16 w400">Nov 18, 2017 at 4:08 PM</div>
						<p class="f-14 w400 d-gblue-clr mt5">by Mandeep Sahni</p>
					</a>
				</div>
				<div id="collapseOne" class="card-body collapse" data-parent="#accordion-history" >
				<div class="f-14 w400 mb10">Updated Sections:</div>
				<ul class="f-14 w400 updated-points">
				<li>Title</li>
				<li>Body Content</li>
				<li>Blog Settings</li>
				<li>SEO Settings</li>
				<li>Publish Settings</li>
				</ul>

				<div class="text-right"><a href="revision-history.php" class="f-14 p-blue-clr t-decoration-none">Preview</a></div>	
				</div>

				<div class="card-header collapsed align-items-center d-flex" data-toggle="collapse" href="#collapseTwo">
					<a class="card-title">
					   <div class="f-16 w400">Oct 20, 2017 at 4:38 PM</div>
						<p class="f-14 w400 d-gblue-clr mt5">by Mandeep Sahni</p>
					</a>
				</div>
				<div id="collapseTwo" class="card-body collapse" data-parent="#accordion-history" >
				<div class="f-14 w400 mb10">Updated Sections:</div>
				<ul class="f-14 w400 updated-points">
				<li>Title</li>
				<li>Body Content</li>
				<li>Blog Settings</li>
				<li>SEO Settings</li>
				<li>Publish Settings</li>
				</ul>

				<div class="text-right"><a href="revision-history.php" class="f-14 p-blue-clr t-decoration-none">Preview</a></div>	
				</div>

				<div class="card-header collapsed align-items-center d-flex" data-toggle="collapse" href="#collapseThree">
					<a class="card-title">
						<div class="f-16 w400">Oct 15, 2017 at 5:20 PM</div>
						<p class="f-14 w400 d-gblue-clr mt5">by Kamal Jalwania</p>
					</a>
				</div>
				<div id="collapseThree" class="card-body collapse" data-parent="#accordion-history" >
				<div class="f-14 w400 mb10">Updated Sections:</div>
				<ul class="f-14 w400 updated-points">
				<li>Title</li>
				<li>Body Content</li>
				<li>Blog Settings</li>
				<li>SEO Settings</li>
				<li>Publish Settings</li>
				</ul>

				<div class="text-right"><a href="revision-history.php" class="f-14 p-blue-clr t-decoration-none">Preview</a></div>	
				</div>
				
			</div>
		</div>



	</div>

<!---------------- Revision History Div End------------------>

<!------- Smart Footer Include File---------->
<?php include '../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->