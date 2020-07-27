<!------- BMS Main Header Include File---------->
<?php include '../../../smart/html/includes/smart-header-bms.php'; ?>
<!------- BMS Main Header Include File end---------->

<!------- BMS Stylesheet Strat ------->
<link rel="stylesheet" href="../../css/bms.css">
<!------- BMS Stylesheet end ------->

<div class="container-fluid p15 p-md30">
	<!------- Header Start----------->
	<div class="row mb15 mb-md30 align-items-center">
		<div class="col-12 col-md-6 col-lg-7">
			<span class="f-20 f-md-24 lato-font">All Templates </span> &nbsp;
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="f-14 mt5 gblue-clr">Here you can manage a single project</p>
		</div>
		<div class="col-12 col-md-6 col-lg-5 text-center text-md-right mt10 mt-md0 f-16 w400">
			<a href="add-template.php" class="base-btn blue-btn"><i class="icon-add-new f-18 align-middle"></i>&nbsp;&nbsp;  Add Template</a>
		</div>
	</div>
	<!------- Header End ----------->
	<!--- Filteration Div ---->
	<div class="row mb-xl30 mb15 min-h-40 relative">
		<div class="table-option-manage manage animated fadeIn ml-md10 col-12 pt2">
			<ul class="list-inline f-14 w400 mb0">
				<li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i> &nbsp; Delete</a>
				</li>
			</ul>
		</div>
		<div class="col-md-2 col-lg-1 col-xl-1 pr0">
			<div class="smart-checkbox-btn checkbox-strong-blue ml15 ml-md30">
				<input id="checkAll" type="checkbox">
				<label for="checkAll"></label>
			</div>
		</div>
		<div class="col-md-10 col-lg-11 col-xl-11 mt20 mt-md0 smart-form table-option-hide pl-md0">
			<div class="row">
				<div class="bs-h40 col-12 col-md-4 col-lg-4 col-xl-2 pr-xl30">
					<select class="selectpicker f-14" title="Type">
					  <option>Page</option>
					  <option>Notification</option>
					  <option>Video App</option>
					  <option>Email Templates</option>
					</select>
				</div>
				<div class="bs-h40 col-12 col-md-4 col-lg-4 col-xl-2 mt15 mt-md0 p-xl0">
					<select class="selectpicker f-14" title="All Templates (100)">
					  <option>All Templates (100)</option>
					  <option>Recently Added Templates (50)</option>
					  <option>Recently Modified Templates (20)</option>
					  <option>Templates Added In last 07 Days (10)</option>
					  <option>Templates Added In Last 30 Days (30)</option>
					</select>
				</div>
				<div class="bs-h40 col-12 col-md-4 col-lg-4 col-xl-2 mt15 mt-md0 pl-xl30">
					<select class="selectpicker f-14" title="Web Form">
					  <option>Web Form</option>
					  <option>Web Notification</option>
					</select>
				</div>
				<div class="col-xl-4 col-lg-9 col-md-8 col-12 mt-xl0 mt-md15">
					<div class="row">
						<div class="col-12 col-md-5 col-xl-5 col-lg-4 bs-h40 mt15 mt-md0 text-md-right pl-lg0">
							<button type="button" class="base-btn default-btn filter-list-open f-14 btn-xs-block">Add Filter &nbsp;<i class="icon-filter" aria-hidden="true"></i> </button>
						</div>
						<div class="col-12 col-md-7 col-xl-7 col-lg-8 mt15 mt-md0">
							<div class="smart-search-field">
								<div class="input-group">
									<input class="form-control" placeholder="Search" type="text">
									<div class="input-group-append">
										<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-lg-3 col-xl-2 mt15 mt-md15 mt-xl0">
					<div class="row">
						<div class="col-3 col-md-3 col-lg-4 d-flex align-self-center f-14">Show</div>
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
		</div>	
		<!----- Table Option Div end---->
   </div>
	<!------- Block Section----->
	<div class="row">
		<div class="col-12 col-md-12 col-lg-8 order-2 order-lg-1 t-wauto tw-100 transition-all">
				<div class="col-12 project-list-view-border p0">
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
								   <img src="../../images/templates/template1.png" class="img-fluid d-block mx-auto">
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
								<div class="col-xl-5 col-lg-6 col-md-12 col-12 pr-md15">
									<div class="d-flex align-items-center">
									   <div class="f-20 f-md-24 w400 text-ellipsis">Template Name </div><a href="#" class="ml8 d-gblue-clr t-decoration-none edit-link"><i class="icon-edit f-16"></i></a>
									</div>
                                    <div class="f-14 d-gblue-clr my10 my-md10">
										<p class="lh150">Type: Page</p>
										<p class="lh150">
										<span>Added On: 24 Nov 2018 at 5:00 PM</span><br/>
										<span>Last Modification : 12 Dec 2018 at 4:08 PM</span>
										</p>
									</div> 
									<button class="f-12 live-btn campaign-active"><i class="icon-enable"></i>&nbsp;&nbsp;<span>Active</span></button>
									
									<div class="mt15 f-14 lh150">
										<span>Industry: Name</span><br/>
										<span>Use Case : Name</span>
									</div>
								</div>
								<div class="col-xl-7 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap">
									<div class="d-flex justify-content-between flex-wrap w-100">
										<div class="d-flex mr15 mr-md20">
											<img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/unique-visitors-circle-icon.png">
											<div class="ml10">
												<span class="f-16">Unique Visitors</span>
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
												<div class="f-24">2% </div>
											</div>
										</div>
									</div>
									<!------ Button------>
									<div class="col-12 text-md-right p0 align-self-end">
										<ul class="list-inline w400 mt-xl20 mb0">
											<li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Edit"><i class="icon-edit"></i><span class="hide-text-md">&nbsp;  Edit</span></a>
											</li>
											<li class="list-inline-item mt10"><a data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false" class="base-btn default-btn btn-h30 f-14" title="View"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
											</li>
											<li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i><span class="hide-text-md">&nbsp;  Delete</span></a>
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
								   <img src="../../images/templates/template2.png" class="img-fluid d-block mx-auto">
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
								<div class="col-xl-5 col-lg-6 col-md-12 col-12 pr-md15">
									<div class="d-flex align-items-center">
									   <div class="f-20 f-md-24 w400 text-ellipsis">Template Name </div><a href="#" class="ml8 d-gblue-clr t-decoration-none edit-link"><i class="icon-edit f-16"></i></a>
									</div>
                                    <div class="f-14 d-gblue-clr my10 my-md10">
										<p class="lh150">Type: Notification (Web Notification)</p>
										<p class="lh150">
										<span>Added On: 24 Nov 2018 at 5:00 PM</span><br/>
										<span>Last Modification : 12 Dec 2018 at 4:08 PM</span>
										</p>
									</div>
									<button class="f-12 live-btn campaign-active"><i class="icon-enable"></i>&nbsp;&nbsp;<span>Active</span></button>
									<div class="mt15 f-14 lh150">
										<span>Industry: Name</span><br/>
										<span>Use Case : Name</span>
									</div>
								</div>
								<div class="col-xl-7 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap">
									<div class="d-flex justify-content-between flex-wrap w-100">
										<div class="d-flex mr15 mr-md20">
											<img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/unique-visitors-circle-icon.png">
											<div class="ml10">
												<span class="f-16">Unique Visitors</span>
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
												<div class="f-24">2% </div>
											</div>
										</div>
									</div>
									<!------ Button------>
									<div class="col-12 text-md-right p0 align-self-end">
										<ul class="list-inline w400 mt-xl20 mb0">
											<li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Edit"><i class="icon-edit"></i><span class="hide-text-md">&nbsp;  Edit</span></a>
											</li>
											<li class="list-inline-item mt10"><a data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false" class="base-btn default-btn btn-h30 f-14" title="View"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
											</li>
											<li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i><span class="hide-text-md">&nbsp;  Delete</span></a>
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
								<input id="search3" type="checkbox" class="checkbox-active">
								<label for="search3"></label>
							 </div>
							 <div class="media-body ml5">
								<div class="hover-img d-flex align-items-center">
								   <img src="../../images/templates/template3.png" class="img-fluid d-block mx-auto">
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
								<div class="col-xl-5 col-lg-6 col-md-12 col-12 pr-md15">
									<div class="d-flex align-items-center">
									   <div class="f-20 f-md-24 w400 text-ellipsis">Template Name </div> <a href="#" class="ml8 d-gblue-clr t-decoration-none edit-link"><i class="icon-edit f-16"></i></a>
									</div>
                                    <div class="f-14 d-gblue-clr my10 my-md10">
										<p class="lh150">Type: Notification (Web Form)</p>
										<p class="lh150">
										<span>Added On: 24 Nov 2018 at 5:00 PM</span><br/>
										<span>Last Modification : 12 Dec 2018 at 4:08 PM</span>
										</p>
									</div>
									<button class="f-12 live-btn campaign-active"><i class="icon-enable"></i>&nbsp;&nbsp;<span>Active</span></button>
									<div class="mt15 f-14 lh150">
										<span>Industry: Name</span><br/>
										<span>Use Case : Name</span>
									</div>
								</div>
								<div class="col-xl-7 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap">
									<div class="d-flex justify-content-between flex-wrap w-100">
										<div class="d-flex mr15 mr-md20">
											<img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/unique-visitors-circle-icon.png">
											<div class="ml10">
												<span class="f-16">Unique Visitors</span>
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
												<div class="f-24">2% </div>
											</div>
										</div>
									</div>
									<!------ Button------>
									<div class="col-12 text-md-right p0 align-self-end">
										<ul class="list-inline w400 mt-xl20 mb0">
											<li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Edit"><i class="icon-edit"></i><span class="hide-text-md">&nbsp;  Edit</span></a>
											</li>
											<li class="list-inline-item mt10"><a data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false" class="base-btn default-btn btn-h30 f-14" title="View"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
											</li>
											<li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i><span class="hide-text-md">&nbsp;  Delete</span></a>
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
								<input id="search4" type="checkbox" class="checkbox-active">
								<label for="search4"></label>
							 </div>
							 <div class="media-body ml5">
								<div class="hover-img d-flex align-items-center">
								   <img src="../../images/templates/template4.png" class="img-fluid d-block mx-auto">
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
								<div class="col-xl-5 col-lg-6 col-md-12 col-12 pr-md15">
									<div class="d-flex align-items-center">
										<div class="f-20 f-md-24 w400 text-ellipsis">Template Name </div><a href="#" class="ml8 d-gblue-clr t-decoration-none edit-link"><i class="icon-edit f-16"></i></a>
									</div>
                                    <div class="f-14 d-gblue-clr my10 my-md10">
										<p class="lh150">Type: Video App</p>
										<p class="lh150">
										<span>Added On: 24 Nov 2018 at 5:00 PM</span><br/>
										<span>Last Modification : 12 Dec 2018 at 4:08 PM</span>
										</p>
									</div>
									<button class="f-12 live-btn campaign-active"><i class="icon-enable"></i>&nbsp;&nbsp;<span>Active</span></button>
									<div class="mt15 f-14 lh150">
										<span>Industry: Name</span><br/>
										<span>Use Case : Name</span>
									</div>
								</div>
								<div class="col-xl-7 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap">
									<div class="d-flex justify-content-between flex-wrap w-100">
										<div class="d-flex mr15 mr-md20">
											<img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/unique-visitors-circle-icon.png">
											<div class="ml10">
												<span class="f-16">Unique Visitors</span>
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
											<li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Edit"><i class="icon-edit"></i><span class="hide-text-md">&nbsp;  Edit</span></a>
											</li>
											<li class="list-inline-item mt10"><a data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false" class="base-btn default-btn btn-h30 f-14" title="View"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
											</li>
											<li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i><span class="hide-text-md">&nbsp;  Delete</span></a>
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
								<input id="search5" type="checkbox" class="checkbox-active">
								<label for="search5"></label>
							 </div>
							 <div class="media-body ml5">
								<div class="hover-img d-flex align-items-center">
								   <img src="../../images/templates/template5.png" class="img-fluid d-block mx-auto">
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
								<div class="col-xl-5 col-lg-6 col-md-12 col-12 pr-md15">
									<div class="d-flex align-items-center">
										<div class="f-20 f-md-24 w400 text-ellipsis">Template Name </div><a href="#" class="ml8 d-gblue-clr t-decoration-none edit-link"><i class="icon-edit f-16"></i></a>
									</div>
                                    <div class="f-14 d-gblue-clr my10 my-md10">
										<p class="lh150">Type: Email Template</p>
										<p class="lh150">
										<span>Added On: 24 Nov 2018 at 5:00 PM</span><br/>
										<span>Last Modification : 12 Dec 2018 at 4:08 PM</span>
										</p>
									</div>
									<button class="f-12 live-btn campaign-active"><i class="icon-enable"></i>&nbsp;&nbsp;<span>Active</span></button>
									<div class="mt15 f-14 lh150">
										<span>Industry: Name</span><br/>
										<span>Use Case : Name</span>
									</div>
								</div>
								<div class="col-xl-7 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap">
									<div class="d-flex justify-content-between flex-wrap w-100">
										<div class="d-flex mr15 mr-md20">
											<img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/contact-icon1.png">
											<div class="ml10">
												<span class="f-16">Contacts</span>
												<div class="f-24">500 </div>
											</div>
										</div>
										<div class="d-flex mr15 mr-md20">
											<img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/sent-icon.png">
											<div class="ml10">
												<span class="f-16">Sent</span>
												<div class="f-24">500 </div>
											</div>
										</div>
										<div class="d-flex">
											<img class="img-fluid d-block mx-auto icon-width" src="<?php echo $basedir; ?>images/open-icon.png">
											<div class="ml10">
												<span class="f-16">Open</span>
												<div class="f-24">200</div>
											</div>
										</div>
									</div>
									<!------ Button------>
									<div class="col-12 text-md-right p0 align-self-end">
										<ul class="list-inline w400 mt-xl20 mb0">
											<li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Edit"><i class="icon-edit"></i><span class="hide-text-md">&nbsp;  Edit</span></a>
											</li>
											<li class="list-inline-item mt10"><a data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false" class="base-btn default-btn btn-h30 f-14" title="View"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
											</li>
											<li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i><span class="hide-text-md">&nbsp;  Delete</span></a>
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
						  <option>Industry</option>
						  <option>Use Cases</option>
						  <option>Position</option>
						  <option>Date</option>
						  <option>Status</option>
					   </select>
					</div>
					<div class="align-self-center mt4 d-flex justify-content-between">
					   <a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
					</div>
				 </div>
			    </div>
			    <!------- Header End------>
			  <div class="filter-scrollbar mCustomScrollbar" data-mcs-theme="inset-3">
				<div class="clearfix filter-divide-bg">
					<div class="d-flex justify-content-between">
					   <div class="w-100 mr15 filter-single-width">
						  <select class="selectpicker f-14">
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
					   <input type="text" class="form-control border-top-0" placeholder="Title">
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
					   <div class="w-100 mr15 filter-single-width">
						  <select class="selectpicker f-14">
							 <option>Industry</option>
						  </select>
					   </div>
					   <div class="align-self-center mt4 d-flex justify-content-between">
						<a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
					   </div>
					</div>
					<div class="form-group mb0">
					   <select class="selectpicker mt5 f-14" title="Select Industry">
						  <option>Industry One</option>
						  <option>Industry Two</option>
						  <option>Industry Three</option>
						  <option>Industry Four</option>
						  <option>Industry Five</option>
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
					   <div class="w-100 mr15 filter-single-width">
						  <select class="selectpicker f-14">
							 <option>Use Case</option>
						  </select>
					   </div>
					   <div class="align-self-center mt4 d-flex justify-content-between">
						<a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
					   </div>
					</div>
					<div class="form-group mb0">
					   <select class="selectpicker mt5 f-14" title="Select Use Case">
							<option>Use Case One</option>
							<option>Use Case Two</option>
							<option>Use Case Three</option>
							<option>Use Case Four</option>
							<option>Use Case Five</option>
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
							 <input id="visitors-and2" name="visitors2" value="and" type="radio">
							 <label for="visitors-and2" class="switch_left mb0">And</label>
							 <input id="visitors-or2" name="visitors2" value="or" type="radio">
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
					   <div class="w-100 mr15 filter-single-width">
						  <select class="selectpicker f-14" title="Position">
							 <option>Position</option>
						  </select>
					   </div>
					  <div class="align-self-center mt4 d-flex justify-content-between">
						<a href="#" class="f-16 p-blue-clr t-decoration-none"><i class="icon-add-third"></i></a>
					   </div>
					</div>
					<div class="form-group mb0">
					   <select class="selectpicker mt5 f-14" title="Select Position">
						  <option>Select Position</option>
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
							 <input id="visitors-and3" name="visitors3" value="and" type="radio">
							 <label for="visitors-and3" class="switch_left mb0">And</label>
							 <input id="visitors-or3" name="visitors3" value="or" type="radio">
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
						  <select class="selectpicker f-14" title="Select Added Date">
							 <option>Select Added Date</option>
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
					<div class="smart-form caleran-h50">
					   <div class="form-group mb0">
						  <div class="input-group">
							 <input type="text" name="dob" readonly="" class="form-control f-14 border-top-0" id="dob-primary-target"  placeholder="Date of Birth">
							 <span class="input-group-btn no-hover-focus" id="dob-primary">
							 <button class="btn calendar-btn grey f-19 border-top-0" type="button"><i class="icon-calendar"></i></button>
							 </span>
						  </div>
					   </div>
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
							 <input id="visitors-and6" name="visitors1" value="and" type="radio">
							 <label for="visitors-and6" class="switch_left mb0">And</label>
							 <input id="visitors-or6" name="visitors1" value="or" type="radio">
							 <label for="visitors-or6" class="switch_right mb0">Or</label>
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
						  <option>Inactive</option>
					   </select>
					</div>
				 </div>
			  </div>
			</div>
		</div>
		<!--- Filteration Div end----> 
	</div>
</div>

<!------- Smart Footer Include File ---------->
<?php include '../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->