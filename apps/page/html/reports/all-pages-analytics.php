<!------- Smart Header Include File---------->
<?php include '../../../smart/html/includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<!------- Smart Page Stylesheet------=------->
<link rel="stylesheet" href="../../../css/page.css">
<!------- Smart Page Stylesheet end---------->


<div class="container-fluid p15 p-md30">

	<!------- Header Start----------->
	<div class="row mb15 mb-md30 align-items-center">
		<div class="col-12 col-md-7 col-lg-8 col-xl-9">
			<span class="f-20 f-md-24 lato-font">Analytics</span> &nbsp;
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="f-14 mt5 gblue-clr">Check detailed analytics of your pages</p>
		</div>
		<div class="col-12 col-md-5 col-lg-4 col-xl-3 px-lg30 mt10 mt-md0">
			<p class="f-14 d-gblue-clr w500">Analytics last updated on :</p>
			<p class="f-14 vd-gblue-clr">20 Feb 2020 at 11:04 AM (2 hours before)</p>
		</div>
	</div>
	<!------- Header End ----------->

	<!--- Filteration Div ---->
	<div class="row mb15 mb-md30 min-h-40 relative">
		<div class="bs-h40 col-12 col-md-4 col-lg-4 col-xl-3 mb15 mb-md0">
			<select class="selectpicker f-14" title="Sort by">
			  <option>Visits</option>
			  <option>Conversion</option>
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
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-8 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
							<div class="row hide-edit-show no-gutters w-100">
								<div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
									<div class="d-flex align-items-center">
										<div class="f-20 f-md-24 w400 text-ellipsis">Page Name Goes Here </div><a href="#" class="ml8 d-gblue-clr t-decoration-none edit-link"><i class="icon-edit f-16"></i></a>
									</div>
									<div class="f-14 d-gblue-clr my10 my-md10">
										<p class="lh150">
											<span>Created on Nov 18, 2017 at 4:08 PM</span>
										</p>
									</div>
									<span class="f-12 private-btn mr5"><i class="icon-person"></i> Private</span>
									<span class="f-12 live-btn"><i class="icon-live"></i> Live</span>
									<div class="mt15 f-14">Project Name : Project 1</div>

								</div>
								<div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap">
									<div class="d-flex justify-content-between flex-wrap w-100">
										<div class="d-flex mr15 mr-md20">
											<img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/visitors-circle-icon.png">
											<div class="ml10">
												<span class="f-16">Visits</span>
												<div class="f-24">500 </div>
											</div>
										</div>
										<div class="d-flex mr15 mr-md20">
											<img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/conversion-circle-icon.png">
											<div class="ml10">
												<span class="f-16">Conversion</span>
												<div class="f-24">500 </div>
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
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-8 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
							<div class="row hide-edit-show no-gutters w-100">
								<div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
									<div class="d-flex align-items-center">
										<div class="f-20 f-md-24 w400 text-ellipsis">Page Name Goes Here </div><a href="#" class="ml8 d-gblue-clr t-decoration-none edit-link"><i class="icon-edit f-16"></i></a>
									</div>
									<div class="f-14 d-gblue-clr my10 my-md10">
										<p class="lh150">
											<span>Created on Nov 18, 2017 at 4:08 PM</span>
										</p>
									</div>

									<span class="f-12 private-btn mr5"><i class="icon-person"></i> Private</span>
									<span class="f-12 live-btn"><i class="icon-draft"></i> Draft</span>
									<div class="mt15 f-14">Project Name : Project 1</div>

								</div>
								<div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap">

									<div class="d-flex justify-content-between flex-wrap w-100">
										<div class="d-flex mr15 mr-md20">
											<img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/visitors-circle-icon.png">
											<div class="ml10">
												<span class="f-16">Visits</span>
												<div class="f-24">500 </div>
											</div>
										</div>

										<div class="d-flex mr15 mr-md20">
											<img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/conversion-circle-icon.png">
											<div class="ml10">
												<span class="f-16">Conversion</span>
												<div class="f-24">500 </div>
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
	</div>
</div>
<!------- Smart Footer Include File---------->
<?php include '../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->