<!------- Smart Header Include File---------->
<?php include '../../../smart/html/includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<!------- Smart funnel Stylesheet------=------->
<link rel="stylesheet" href="../../../css/funnel.css">
<!------- Smart funnel Stylesheet end---------->

<div class="container-fluid p15 p-md30">
	<!------- Header Start----------->
	<div class="row mb15 mb-md30 align-items-center">
		<div class="col-12">
			<span class="f-20 f-md-24 lato-font">Funnels Analytics </span> &nbsp;
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="f-14 mt5 gblue-clr">Here you can manage all your funnel analytics</p>
		</div>
	</div>
	<!------- Header End ----------->

	<!--- Filteration Div ---->
	<div class="row mb15 mb-md30 min-h-40 relative">
		<div class="bs-h40 col-12 col-md-4 col-lg-4 col-xl-3 mb15 mb-md0">
			<select class="selectpicker f-14" title="Sort by">
				<option>Unique Visitors</option>
				<option>EPC</option>
				<option>Conversion Rate</option>
			</select>
		</div>
		<div class="col-md-5 col-lg-4 col-xl-3 offset-lg-1 offset-xl-4 mb15 mb-md0">
			<div class="smart-search-field">
				<div class="input-group">
					<input class="form-control" placeholder="Search" type="text">
					<div class="input-group-append">
						<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-lg-3 col-xl-2 pl-md15">
			<div class="row">
				<div class="col-3 col-md-3 col-lg-4 4 d-flex align-self-center f-14">Show</div>
				<div class="col-9 col-md-9 col-lg-8 bs-h40">
					<select class="selectpicker f-14">
						<option>10</option>
						<option>20</option>
						<option>30</option>
					</select>
				</div>
			</div>
		</div>
	</div>

	<!------- Block Section----->
	<div class="row">
		<div class="col-12 col-md-12 col-lg-8 order-2 order-lg-1 t-wauto tw-100 transition-all">
			<div class="col-12 project-list-view-border p0">
				<div class="project-list-view p15 p-md30">
					<div class="row">
						<div class="col-12 col-md-4 col-lg-3 col-xl-3">
							<div class="media">
								<div class="media-body">
									<div class="hover-img d-flex align-items-center">
										<img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">
										<div class="img-overlay">
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
								<div class="col-xl-5 col-lg-6 col-md-12 col-12 pr-md15">
									<div class="d-flex align-items-center">
										<div class="f-20 f-md-24 w400 text-ellipsis">Funnel Name Goes Here</div><a href="#" class="ml8 d-gblue-clr t-decoration-none edit-link"><i class="icon-edit f-16"></i></a>
									</div>
									<div class="f-14 d-gblue-clr my10 my-md10">
										<p class="lh150">Total Pages : 12</p>
										<p class="lh150">Type : Webinar</p>
										<p class="lh150">Created on 17 Feb 2019 at 4:08 PM</p>
									</div>
									<span class="f-12 live-btn"><i class="icon-live"></i> &nbsp;&nbsp;Live</span>
									<div class="mt15 f-14">Project Name : project 1</div>
								</div>
								<div class="col-xl-7 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap">
									<div class="d-flex justify-content-between flex-wrap w-100">
										<div class="d-flex mr15 mr-md20">
											<img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/visitors-circle-icon.png">
											<div class="ml10">
												<span class="f-16">Unique Visitors</span>
												<div class="f-24">500 </div>
											</div>
										</div>
										<div class="d-flex mr15 mr-md20">
											<img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/epc-icon.png">
											<div class="ml10">
												<span class="f-16">EPC</span>
												<div class="f-24">30 </div>
											</div>
										</div>
										<div class="d-flex">
											<img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/conversion-rate-icon.png">
											<div class="ml10">
												<span class="f-16">Conversion Rate</span>
												<div class="f-24">20% </div>
											</div>
										</div>
									</div>
									<!------ Button------>
									<div class="col-12 text-md-right p0 align-self-end">
										<ul class="list-inline w400 mt-xl20 mb0">
											<li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View Reports"><i class="icon-report"></i><span class="hide-text-md">&nbsp;  View Reports</span></a>
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
								<div class="media-body">
									<div class="hover-img d-flex align-items-center">
										<img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">
										<div class="img-overlay">
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
								<div class="col-xl-5 col-lg-6 col-md-12 col-12 pr-md15">
									<div class="d-flex align-items-center">
										<div class="f-20 f-md-24 w400 text-ellipsis">Funnel Name Goes Here</div><a href="#" class="ml8 d-gblue-clr t-decoration-none edit-link"><i class="icon-edit f-16"></i></a>
									</div>
									<div class="f-14 d-gblue-clr my10 my-md10">
										<p class="lh150">Total Pages : 12</p>
										<p class="lh150">Type : Lead</p>
										<p class="lh150">Created on 17 Feb 2019 at 4:08 PM</p>
									</div>
									<span class="f-12 live-btn"><i class="icon-enable"></i> &nbsp;&nbsp;Inactive</span>
									<div class="mt15 f-14">Project Name : project 2</div>
								</div>
								<div class="col-xl-7 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap">
									<div class="d-flex justify-content-between flex-wrap w-100">
										<div class="d-flex mr15 mr-md20">
											<img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/visitors-circle-icon.png">
											<div class="ml10">
												<span class="f-16">Unique Visitors</span>
												<div class="f-24">500 </div>
											</div>
										</div>
										<div class="d-flex mr15 mr-md20">
											<img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/epc-icon.png">
											<div class="ml10">
												<span class="f-16">EPC</span>
												<div class="f-24">30 </div>
											</div>
										</div>
										<div class="d-flex">
											<img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/conversion-rate-icon.png">
											<div class="ml10">
												<span class="f-16">Conversion Rate</span>
												<div class="f-24">20% </div>
											</div>
										</div>
									</div>
									<!------ Button------>
									<div class="col-12 text-md-right p0 align-self-end">
										<ul class="list-inline w400 mt-xl20 mb0">

											<li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View Reports"><i class="icon-report"></i><span class="hide-text-md">&nbsp;  View Reports</span></a>
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
								<div class="media-body">
									<div class="hover-img d-flex align-items-center">
										<img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">
										<div class="img-overlay">
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
								<div class="col-xl-5 col-lg-6 col-md-12 col-12 pr-md15">
									<div class="d-flex align-items-center">
										<div class="f-20 f-md-24 w400 text-ellipsis">Funnel Name Goes Here</div><a href="#" class="ml8 d-gblue-clr t-decoration-none edit-link"><i class="icon-edit f-16"></i></a>
									</div>
									<div class="f-14 d-gblue-clr my10 my-md10">
										<p class="lh150">Total Pages : 12</p>
										<p class="lh150">Type : Sales</p>
										<p class="lh150">Created on 17 Feb 2019 at 4:08 PM</p>
									</div>
									<span class="f-12 live-btn"><i class="icon-calendar"></i> &nbsp;&nbsp;Scheduled : May 06, 2018 </span>
									<div class="mt15 f-14">Project Name : project 3</div>
								</div>
								<div class="col-xl-7 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap">
									<div class="d-flex justify-content-between flex-wrap w-100">
										<div class="d-flex mr15 mr-md20">
											<img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/visitors-circle-icon.png">
											<div class="ml10">
												<span class="f-16">Unique Visitors</span>
												<div class="f-24">500 </div>
											</div>
										</div>
										<div class="d-flex mr15 mr-md20">
											<img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/epc-icon.png">
											<div class="ml10">
												<span class="f-16">EPC</span>
												<div class="f-24">30 </div>
											</div>
										</div>
										<div class="d-flex">
											<img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/conversion-rate-icon.png">
											<div class="ml10">
												<span class="f-16">Conversion Rate</span>
												<div class="f-24">20% </div>
											</div>
										</div>
									</div>
									<!------ Button------>
									<div class="col-12 text-md-right p0 align-self-end">
										<ul class="list-inline w400 mt-xl20 mb0">
											<li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View Reports"><i class="icon-report"></i><span class="hide-text-md">&nbsp;  View Reports</span></a>
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
								<div class="media-body">
									<div class="hover-img d-flex align-items-center">
										<img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">
										<div class="img-overlay">
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
								<div class="col-xl-5 col-lg-6 col-md-12 col-12 pr-md15">
									<div class="d-flex align-items-center">
										<div class="f-20 f-md-24 w400 text-ellipsis">Funnel Name Goes Here</div> <a href="#" class="ml8 d-gblue-clr t-decoration-none edit-link"><i class="icon-edit f-16"></i></a>
									</div>
									<div class="f-14 d-gblue-clr my10 my-md10">
										<p class="lh150">Total Pages : 12</p>
										<p class="lh150">Type : Lead</p>
										<p class="lh150">Created on 17 Feb 2019 at 4:08 PM</p>
									</div>
									<span class="f-12 live-btn"><i class="icon-draft"></i> &nbsp;&nbsp;Draft </span>
									<div class="mt15 f-14">Project Name : project 4</div>
								</div>
								<div class="col-xl-7 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap">
									<div class="d-flex justify-content-between flex-wrap w-100">
										<div class="d-flex mr15 mr-md20">
											<img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/visitors-circle-icon.png">
											<div class="ml10">
												<span class="f-16">Unique Visitors</span>
												<div class="f-24">500 </div>
											</div>
										</div>
										<div class="d-flex mr15 mr-md20">
											<img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/epc-icon.png">
											<div class="ml10">
												<span class="f-16">EPC</span>
												<div class="f-24">30 </div>
											</div>
										</div>
										<div class="d-flex">
											<img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/conversion-rate-icon.png">
											<div class="ml10">
												<span class="f-16">Conversion Rate</span>
												<div class="f-24">20% </div>
											</div>
										</div>
									</div>
									<!------ Button------>
									<div class="col-12 text-md-right p0 align-self-end">
										<ul class="list-inline w400 mt-xl20 mb0">
											<li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View Reports"><i class="icon-report"></i><span class="hide-text-md">&nbsp;  View Reports</span></a>
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
								<option>Create Date</option>
								<option>Status</option>
								<option>Type</option>
								<option>Project Name</option>
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
								<select class="selectpicker f-14" title="Select Title">
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
									<input id="visitors-and1" name="visitors1" value="and" type="radio">
									<label for="visitors-and1" class="switch_left mb0">And</label>
									<input id="visitors-or1" name="visitors1" value="or" type="radio">
									<label for="visitors-or1" class="switch_right mb0">Or</label>
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
								<select class="selectpicker f-14" title="Select Create Date">
									<option>Select Create Date</option>
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
									<input id="visitors-and" name="visitors" value="and" type="radio">
									<label for="visitors-and" class="switch_left mb0">And</label>
									<input id="visitors-or" name="visitors" value="or" type="radio">
									<label for="visitors-or" class="switch_right mb0">Or</label>
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
								<select class="selectpicker f-14" title="Select Status">
									<option>Status</option>
								</select>
							</div>
							<div class="align-self-center mt4 d-flex justify-content-between">
								<a href="#" class="f-16 filter-delete-icon mr10"><i class="icon-delete"></i></a><a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
							</div>
						</div>
						<div class="form-group mb0">
							<select class="selectpicker mt5 f-14" title="Active">
								<option>Active</option>
								<option>In Active</option>
								<option>Draft</option>
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
									<input id="visitors-and2" name="visitors" value="and" type="radio">
									<label for="visitors-and2" class="switch_left mb0">And</label>
									<input id="visitors-or2" name="visitors" value="or" type="radio">
									<label for="visitors-or2" class="switch_right mb0">Or</label>
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
								<select class="selectpicker f-14" title="Select Type">
									<option>Type</option>
								</select>
							</div>
							<div class="align-self-center mt4 d-flex justify-content-between">
								<a href="#" class="f-16 filter-delete-icon mr10"><i class="icon-delete"></i></a><a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
							</div>
						</div>
						<div class="form-group mb0">
							<select class="selectpicker mt5 f-14" title="Webinar">
								<option>Webinar</option>
								<option>Web Notification</option>
								<option>Web Form</option>
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
									<input id="visitors-and3" name="visitors" value="and" type="radio">
									<label for="visitors-and3" class="switch_left mb0">And</label>
									<input id="visitors-or3" name="visitors" value="or" type="radio">
									<label for="visitors-or3" class="switch_right mb0">Or</label>
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
								<select class="selectpicker f-14" title="Select Project Name">
									<option>Select Project Name</option>
								</select>
							</div>
							<div class="align-self-center mt4 d-flex justify-content-between">
								<a href="#" class="f-16 filter-delete-icon mr10"><i class="icon-delete"></i></a><a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
							</div>
						</div>
						<div class="form-group mb0">
							<select class="selectpicker mt5 f-14">
								<option>Project Name 1</option>
								<option>Project Name 2</option>
								<option>Project Name 3</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--- Filteration Div end---->
	</div>
</div>

<!------- Smart Footer Include File---------->
<?php include '../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->