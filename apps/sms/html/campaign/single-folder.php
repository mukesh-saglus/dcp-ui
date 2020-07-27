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
					<li> <a href="#"> Projects</a> </li>
				</ul>
				<div class="d-flex mt7">
					<a href="#" class="gblue-clr t-decoration-none f-17 mr5" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
					<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
				</div>
			</div>
			<p class="f-14 mt5 gblue-clr">Here you are manage your all Campaign details</p>
		</div>
		<div class="col-12 col-md-5 f-16 text-center text-md-right mt10 mt-md0">
			<a href="javascript:void(0)" class="base-btn blue-btn" data-toggle="modal" data-target="#createnewprojectsModal"><i class="icon-add-new f-18 align-middle"></i>&nbsp;&nbsp; New Project</a>
		</div>
	</div>
	<!-- Header End  -->
	<div class="row">
		<div class="col-xl-2 col-lg-3 col-md-3 col-12">
			<!-- Heading -->
			<h5 class="f-16 w500 mb10 pb10 campaign-border-bottom">Manage</h5>
			<div class="nav flex-column nav-pills ui-vertical-tab f-16 w400">
				<a class="nav-link" href="all-campaign.php"><i class="icon-project-update f-16"></i> All Campaigns</a>
				<a class="nav-link active" href="single-folder.php"><i class="icon-project f-18"></i> Projects</a>
				<a class="nav-link" href="journey-listing.php"><i class="icon-all-journey f-16"></i> Funnels/Journey</a>
				<a class="nav-link" href="page-listing.php"><i class="icon-total-visited-pages f-16"></i> Pages</a>
				<a class="nav-link" href="video-listing.php"><i class="icon-total-viewed-videos f-16"></i> Videos</a>
				<a class="nav-link" href="popup-and-bars-listing.php"><i class="icon-editor-popup f-16"></i> Popups & Bars</a>
				<a class="nav-link" href="mail-listing.php"><i class="icon-mail f-16"></i> Mails</a>
				<a class="nav-link" href="sms-listing.php"><i class="icon-sms f-16"></i> SMS</a>
			</div>
		</div>
		<div class="col-xl-10 col-lg-9 col-md-9 col-12">
			<!-- Filteration Div -->
			<div class="row min-h-40 relative">
				<div class="table-option-manage manage animated fadeIn ml-md10 col-12 pt2">
					<ul class="list-inline f-14 w400 mb0">
						<li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" data-toggle="modal" data-target="#filemoveModal" class="base-btn default-btn btn-h30 f-14" title="Rename"><i class="icon-rename"></i><span class="d-none d-md-inline-block">&nbsp;  Rename</span></a>
						</li>
						<li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Duplicate"><i class="icon-duplicate"></i><span class="d-none d-md-inline-block">&nbsp;  Duplicate</span></a>
						</li>
						<li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Merge"><i class="icon-merge"></i><span class="d-none d-md-inline-block">&nbsp;  Merge</span></a>
						</li>
						
						<li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i><span class="d-none d-md-inline-block"> &nbsp; Delete</span></a>
						</li>
					</ul>
				</div>
				<!-- Table Option Div end -->
				<div class="col-md-12 col-lg-6 col-xl-6 align-items-center mb-lg0 mb15">
					<div class="d-flex flex-wrap">
						<div class="smart-checkbox-btn checkbox-strong-blue pull-left">
							<input id="checkAll2" type="checkbox">
							<label for="checkAll2"></label>
						</div>
						<span class="bs-h40 table-option-hide col-12 col-md-6 col-xl-5 mt15 mt-md0 px0 px-md15">
							<select class="selectpicker f-14" title="All Projects (500)">
								   <option>All Projects (500)</option>
								  <option>Recently added Projects (10)</option>
								  <option>Recently modified Projects (15)</option>
								  <option>Projects added in last 07 days (10)</option>
								  <option>Projects added in last 30 days (10)</option>
							</select>
						</span>
						<span class="bs-h40 table-option-hide col-12 col-md-5 col-xl-5 mt15 mt-md0 px0 pl-md15 pr-md0">
							<select class="selectpicker f-14" title="Sort by Campaign">
							  <option>Videos</option>
							  <option>Pages</option>
							  <option>Funnels/Journey</option>
							  <option>Popups & Bars</option>
							  <option>Mails</option>
							</select>
						</span>
					</div>
				</div>
				<div class="col-md-12 col-lg-6 col-xl-6 smart-form table-option-hide">
					<div class="row">
						<div class="col-md-6 col-xl-5 offset-xl-3 mb15 mb-md0">
							<div class="smart-search-field">
								<div class="input-group">
									<input class="form-control" placeholder="Search" type="text">
									<div class="input-group-append">
										<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-xl-4">
							<div class="row">
								<div class="col-3 col-md-4 col-ld-4 col-xl-4 d-flex align-self-center f-14 d-md-none d-lg-block">Show</div>
								<div class="col-9 col-md-12 col-lg-8 col-lg-8 bs-h40">
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
			<!-- Filteration Div End -->
			<!-- Projects Section -->
			<div class="row">
				<div class="col-12">
					<div class="row break-word">
						<!-- Projects column 1 -->
						<div class="col-12 col-md-6 col-xl-3 mt20 mt-md30">
							<div class="folders-block">
								<div class="folder-icon-size"><i class="icon-project"></i></div>
								<div class="f-14 w400 mt15 hide-edit-show">
									<span class="f-16 d-block">Projects Name A <a href="#" class="f-10 d-gblue-clr t-decoration-none pl15 edit-link"><i class="icon-edit edit-icon"></i></a>
									</span> 
									<span class="f-16 f-md-24 w700 d-block mt7">500</span> Campaigns
								</div>
								
								<div class="row edit-field-show no-gutters w-100 mt14">
									 <div class="col-12 smart-form">
										 <input type="text" class="form-control field-h40 fw100 mb15 mb-md0" value="Driverless Hotel Rooms: The End of Uber, Airbnb and Human Landlords.">
										
									    <button type="button" class="base-btn f-14 cancel-edit mt10 mr5">Cancel</button>
									    <button type="button" class="base-btn green-btn f-14 mt10">Save</button>
									 </div>
								  </div>
								  
								<!-- Hover Div -->
								<div class="smart-checkbox-btn checkbox-strong-blue folders-top-right-overlay">
									<input id="tcheck1" type="checkbox" class="checkbox-active">
									<label for="tcheck1"></label>
								</div>
								<!-- More option -->
								<div class="dropdown simple-dropdown caret-icon-none folders-bottom-right-overlay">
									<a href="javascript:void(0)" class="dropdown-toggle t-decoration-none d-gblue-clr" data-toggle="dropdown">
										<i class="icon-more" aria-hidden="true"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right f-14 right-arrow widget-drop">
										 <a class="dropdown-item" href="javascript:void(0)">Duplicate</a>
										 <a class="dropdown-item" href="javascript:void(0)">Merge</a>
										 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal">Delete</a>
									</div>
								</div>
								<!-- Hover Div End -->
							</div>
						</div>
						<!-- Projects column 2 -->
						<div class="col-12 col-md-6 col-xl-3 mt20 mt-md30">
							<div class="folders-block">
								<div class="folder-icon-size"><i class="icon-project"></i></div>
								<div class="f-14 w400 mt15 hide-edit-show">
									<span class="f-16 d-block">Projects Name A <a href="#" class="f-10 d-gblue-clr t-decoration-none pl15 edit-link"><i class="icon-edit edit-icon"></i></a>
									</span> 
									<span class="f-16 f-md-24 w700 d-block mt7">500</span> Campaigns
								</div>
								
								<div class="row edit-field-show no-gutters w-100 mt14">
									 <div class="col-12 smart-form">
										 <input type="text" class="form-control field-h40 fw100 mb15 mb-md0" value="Driverless Hotel Rooms: The End of Uber, Airbnb and Human Landlords.">
										
									    <button type="button" class="base-btn f-14 cancel-edit mt10 mr5">Cancel</button>
									    <button type="button" class="base-btn green-btn f-14 mt10">Save</button>
									 </div>
								  </div>
								  
								<!-- Hover Div -->
								<div class="smart-checkbox-btn checkbox-strong-blue folders-top-right-overlay">
									<input id="tcheck2" type="checkbox" class="checkbox-active">
									<label for="tcheck2"></label>
								</div>
								<!-- More option -->
								<div class="dropdown simple-dropdown caret-icon-none folders-bottom-right-overlay">
									<a href="javascript:void(0)" class="dropdown-toggle t-decoration-none d-gblue-clr" data-toggle="dropdown">
										<i class="icon-more" aria-hidden="true"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right f-14 right-arrow widget-drop">
										 <a class="dropdown-item" href="javascript:void(0)">Duplicate</a>
										 <a class="dropdown-item" href="javascript:void(0)">Merge</a>
										 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal">Delete</a>
									</div>
								</div>
								<!-- Hover Div End -->
							</div>
						</div>
						
						<!-- Projects column 3 -->
						<div class="col-12 col-md-6 col-xl-3 mt20 mt-md30">
							<div class="folders-block">
								<div class="folder-icon-size"><i class="icon-project"></i></div>
								<div class="f-14 w400 mt15 hide-edit-show">
									<span class="f-16 d-block">Projects Name A <a href="#" class="f-10 d-gblue-clr t-decoration-none pl15 edit-link"><i class="icon-edit edit-icon"></i></a>
									</span> 
									<span class="f-16 f-md-24 w700 d-block mt7">500</span> Campaigns
								</div>
								
								<div class="row edit-field-show no-gutters w-100 mt14">
									 <div class="col-12 smart-form">
										 <input type="text" class="form-control field-h40 fw100 mb15 mb-md0" value="Driverless Hotel Rooms: The End of Uber, Airbnb and Human Landlords.">
										
									    <button type="button" class="base-btn f-14 cancel-edit mt10 mr5">Cancel</button>
									    <button type="button" class="base-btn green-btn f-14 mt10">Save</button>
									 </div>
								  </div>
								  
								<!-- Hover Div -->
								<div class="smart-checkbox-btn checkbox-strong-blue folders-top-right-overlay">
									<input id="tcheck3" type="checkbox" class="checkbox-active">
									<label for="tcheck3"></label>
								</div>
								<!-- More option -->
								<div class="dropdown simple-dropdown caret-icon-none folders-bottom-right-overlay">
									<a href="javascript:void(0)" class="dropdown-toggle t-decoration-none d-gblue-clr" data-toggle="dropdown">
										<i class="icon-more" aria-hidden="true"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right f-14 right-arrow widget-drop">
										 <a class="dropdown-item" href="javascript:void(0)">Duplicate</a>
										 <a class="dropdown-item" href="javascript:void(0)">Merge</a>
										 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal">Delete</a>
									</div>
								</div>
								<!-- Hover Div End -->
							</div>
						</div>
						
						<!-- Projects column 4 -->
						<div class="col-12 col-md-6 col-xl-3 mt20 mt-md30">
							<div class="folders-block">
								<div class="folder-icon-size"><i class="icon-project"></i></div>
								<div class="f-14 w400 mt15 hide-edit-show">
									<span class="f-16 d-block">Projects Name A <a href="#" class="f-10 d-gblue-clr t-decoration-none pl15 edit-link"><i class="icon-edit edit-icon"></i></a>
									</span> 
									<span class="f-16 f-md-24 w700 d-block mt7">500</span> Campaigns
								</div>
								
								<div class="row edit-field-show no-gutters w-100 mt14">
									 <div class="col-12 smart-form">
										 <input type="text" class="form-control field-h40 fw100 mb15 mb-md0" value="Driverless Hotel Rooms: The End of Uber, Airbnb and Human Landlords.">
										
									    <button type="button" class="base-btn f-14 cancel-edit mt10 mr5">Cancel</button>
									    <button type="button" class="base-btn green-btn f-14 mt10">Save</button>
									 </div>
								  </div>
								  
								<!-- Hover Div -->
								<div class="smart-checkbox-btn checkbox-strong-blue folders-top-right-overlay">
									<input id="tcheck4" type="checkbox" class="checkbox-active">
									<label for="tcheck4"></label>
								</div>
								<!-- More option -->
								<div class="dropdown simple-dropdown caret-icon-none folders-bottom-right-overlay">
									<a href="javascript:void(0)" class="dropdown-toggle t-decoration-none d-gblue-clr" data-toggle="dropdown">
										<i class="icon-more" aria-hidden="true"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right f-14 right-arrow widget-drop">
										 <a class="dropdown-item" href="javascript:void(0)">Duplicate</a>
										 <a class="dropdown-item" href="javascript:void(0)">Merge</a>
										 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal">Delete</a>
									</div>
								</div>
								<!-- Hover Div End -->
							</div>
						</div>
						
						<!-- Projects column 5 -->
						<div class="col-12 col-md-6 col-xl-3 mt20 mt-md30">
							<div class="folders-block">
								<div class="folder-icon-size"><i class="icon-project"></i></div>
								<div class="f-14 w400 mt15 hide-edit-show">
									<span class="f-16 d-block">Projects Name A <a href="#" class="f-10 d-gblue-clr t-decoration-none pl15 edit-link"><i class="icon-edit edit-icon"></i></a>
									</span> 
									<span class="f-16 f-md-24 w700 d-block mt7">500</span> Campaigns
								</div>
								
								<div class="row edit-field-show no-gutters w-100 mt14">
									 <div class="col-12 smart-form">
										 <input type="text" class="form-control field-h40 fw100 mb15 mb-md0" value="Driverless Hotel Rooms: The End of Uber, Airbnb and Human Landlords.">
										
									    <button type="button" class="base-btn f-14 cancel-edit mt10 mr5">Cancel</button>
									    <button type="button" class="base-btn green-btn f-14 mt10">Save</button>
									 </div>
								  </div>
								  
								<!-- Hover Div -->
								<div class="smart-checkbox-btn checkbox-strong-blue folders-top-right-overlay">
									<input id="tcheck5" type="checkbox" class="checkbox-active">
									<label for="tcheck5"></label>
								</div>
								<!-- More option -->
								<div class="dropdown simple-dropdown caret-icon-none folders-bottom-right-overlay">
									<a href="javascript:void(0)" class="dropdown-toggle t-decoration-none d-gblue-clr" data-toggle="dropdown">
										<i class="icon-more" aria-hidden="true"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right f-14 right-arrow widget-drop">
										 <a class="dropdown-item" href="javascript:void(0)">Duplicate</a>
										 <a class="dropdown-item" href="javascript:void(0)">Merge</a>
										 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal">Delete</a>
									</div>
								</div>
								<!-- Hover Div End -->
							</div>
						</div>
						
						<!-- Projects column 6 -->
						<div class="col-12 col-md-6 col-xl-3 mt20 mt-md30">
							<div class="folders-block">
								<div class="folder-icon-size"><i class="icon-project"></i></div>
								<div class="f-14 w400 mt15 hide-edit-show">
									<span class="f-16 d-block">Projects Name A <a href="#" class="f-10 d-gblue-clr t-decoration-none pl15 edit-link"><i class="icon-edit edit-icon"></i></a>
									</span> 
									<span class="f-16 f-md-24 w700 d-block mt7">500</span> Campaigns
								</div>
								
								<div class="row edit-field-show no-gutters w-100 mt14">
									 <div class="col-12 smart-form">
										 <input type="text" class="form-control field-h40 fw100 mb15 mb-md0" value="Driverless Hotel Rooms: The End of Uber, Airbnb and Human Landlords.">
										
									    <button type="button" class="base-btn f-14 cancel-edit mt10 mr5">Cancel</button>
									    <button type="button" class="base-btn green-btn f-14 mt10">Save</button>
									 </div>
								  </div>
								  
								<!-- Hover Div -->
								<div class="smart-checkbox-btn checkbox-strong-blue folders-top-right-overlay">
									<input id="tcheck6" type="checkbox" class="checkbox-active">
									<label for="tcheck6"></label>
								</div>
								<!-- More option -->
								<div class="dropdown simple-dropdown caret-icon-none folders-bottom-right-overlay">
									<a href="javascript:void(0)" class="dropdown-toggle t-decoration-none d-gblue-clr" data-toggle="dropdown">
										<i class="icon-more" aria-hidden="true"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right f-14 right-arrow widget-drop">
										 <a class="dropdown-item" href="javascript:void(0)">Duplicate</a>
										 <a class="dropdown-item" href="javascript:void(0)">Merge</a>
										 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal">Delete</a>
									</div>
								</div>
								<!-- Hover Div End -->
							</div>
						</div>
						
						<!-- Projects column 7 -->
						<div class="col-12 col-md-6 col-xl-3 mt20 mt-md30">
							<div class="folders-block">
								<div class="folder-icon-size"><i class="icon-project"></i></div>
								<div class="f-14 w400 mt15 hide-edit-show">
									<span class="f-16 d-block">Projects Name A <a href="#" class="f-10 d-gblue-clr t-decoration-none pl15 edit-link"><i class="icon-edit edit-icon"></i></a>
									</span> 
									<span class="f-16 f-md-24 w700 d-block mt7">500</span> Campaigns
								</div>
								
								<div class="row edit-field-show no-gutters w-100 mt14">
									 <div class="col-12 smart-form">
										 <input type="text" class="form-control field-h40 fw100 mb15 mb-md0" value="Driverless Hotel Rooms: The End of Uber, Airbnb and Human Landlords.">
										
									    <button type="button" class="base-btn f-14 cancel-edit mt10 mr5">Cancel</button>
									    <button type="button" class="base-btn green-btn f-14 mt10">Save</button>
									 </div>
								  </div>
								  
								<!-- Hover Div -->
								<div class="smart-checkbox-btn checkbox-strong-blue folders-top-right-overlay">
									<input id="tcheck7" type="checkbox" class="checkbox-active">
									<label for="tcheck7"></label>
								</div>
								<!-- More option -->
								<div class="dropdown simple-dropdown caret-icon-none folders-bottom-right-overlay">
									<a href="javascript:void(0)" class="dropdown-toggle t-decoration-none d-gblue-clr" data-toggle="dropdown">
										<i class="icon-more" aria-hidden="true"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right f-14 right-arrow widget-drop">
										 <a class="dropdown-item" href="javascript:void(0)">Duplicate</a>
										 <a class="dropdown-item" href="javascript:void(0)">Merge</a>
										 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal">Delete</a>
									</div>
								</div>
								<!-- Hover Div End -->
							</div>
						</div>
						
						<!-- Projects column 8 -->
						<div class="col-12 col-md-6 col-xl-3 mt20 mt-md30">
							<div class="folders-block">
								<div class="folder-icon-size"><i class="icon-project"></i></div>
								<div class="f-14 w400 mt15 hide-edit-show">
									<span class="f-16 d-block">Projects Name A <a href="#" class="f-10 d-gblue-clr t-decoration-none pl15 edit-link"><i class="icon-edit edit-icon"></i></a>
									</span> 
									<span class="f-16 f-md-24 w700 d-block mt7">500</span> Campaigns
								</div>
								
								<div class="row edit-field-show no-gutters w-100 mt14">
									 <div class="col-12 smart-form">
										 <input type="text" class="form-control field-h40 fw100 mb15 mb-md0" value="Driverless Hotel Rooms: The End of Uber, Airbnb and Human Landlords.">
										
									    <button type="button" class="base-btn f-14 cancel-edit mt10 mr5">Cancel</button>
									    <button type="button" class="base-btn green-btn f-14 mt10">Save</button>
									 </div>
								  </div>
								  
								<!-- Hover Div -->
								<div class="smart-checkbox-btn checkbox-strong-blue folders-top-right-overlay">
									<input id="tcheck8" type="checkbox" class="checkbox-active">
									<label for="tcheck8"></label>
								</div>
								<!-- More option -->
								<div class="dropdown simple-dropdown caret-icon-none folders-bottom-right-overlay">
									<a href="javascript:void(0)" class="dropdown-toggle t-decoration-none d-gblue-clr" data-toggle="dropdown">
										<i class="icon-more" aria-hidden="true"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right f-14 right-arrow widget-drop">
										 <a class="dropdown-item" href="javascript:void(0)">Duplicate</a>
										 <a class="dropdown-item" href="javascript:void(0)">Merge</a>
										 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal">Delete</a>
									</div>
								</div>
								<!-- Hover Div End -->
							</div>
						</div>
						
						<!-- Projects column 9 -->
						<div class="col-12 col-md-6 col-xl-3 mt20 mt-md30">
							<div class="folders-block">
								<div class="folder-icon-size"><i class="icon-project"></i></div>
								<div class="f-14 w400 mt15 hide-edit-show">
									<span class="f-16 d-block">Projects Name A <a href="#" class="f-10 d-gblue-clr t-decoration-none pl15 edit-link"><i class="icon-edit edit-icon"></i></a>
									</span> 
									<span class="f-16 f-md-24 w700 d-block mt7">500</span> Campaigns
								</div>
								
								<div class="row edit-field-show no-gutters w-100 mt14">
									 <div class="col-12 smart-form">
										 <input type="text" class="form-control field-h40 fw100 mb15 mb-md0" value="Driverless Hotel Rooms: The End of Uber, Airbnb and Human Landlords.">
										
									    <button type="button" class="base-btn f-14 cancel-edit mt10 mr5">Cancel</button>
									    <button type="button" class="base-btn green-btn f-14 mt10">Save</button>
									 </div>
								  </div>
								  
								<!-- Hover Div -->
								<div class="smart-checkbox-btn checkbox-strong-blue folders-top-right-overlay">
									<input id="tcheck9" type="checkbox" class="checkbox-active">
									<label for="tcheck9"></label>
								</div>
								<!-- More option -->
								<div class="dropdown simple-dropdown caret-icon-none folders-bottom-right-overlay">
									<a href="javascript:void(0)" class="dropdown-toggle t-decoration-none d-gblue-clr" data-toggle="dropdown">
										<i class="icon-more" aria-hidden="true"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right f-14 right-arrow widget-drop">
										 <a class="dropdown-item" href="javascript:void(0)">Duplicate</a>
										 <a class="dropdown-item" href="javascript:void(0)">Merge</a>
										 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal">Delete</a>
									</div>
								</div>
								<!-- Hover Div End -->
							</div>
						</div>
						
						<!-- Projects column 10 -->
						<div class="col-12 col-md-6 col-xl-3 mt20 mt-md30">
							<div class="folders-block">
								<div class="folder-icon-size"><i class="icon-project"></i></div>
								<div class="f-14 w400 mt15 hide-edit-show">
									<span class="f-16 d-block">Projects Name A <a href="#" class="f-10 d-gblue-clr t-decoration-none pl15 edit-link"><i class="icon-edit edit-icon"></i></a>
									</span> 
									<span class="f-16 f-md-24 w700 d-block mt7">500</span> Campaigns
								</div>
								
								<div class="row edit-field-show no-gutters w-100 mt14">
									 <div class="col-12 smart-form">
										 <input type="text" class="form-control field-h40 fw100 mb15 mb-md0" value="Driverless Hotel Rooms: The End of Uber, Airbnb and Human Landlords.">
										
									    <button type="button" class="base-btn f-14 cancel-edit mt10 mr5">Cancel</button>
									    <button type="button" class="base-btn green-btn f-14 mt10">Save</button>
									 </div>
								  </div>
								  
								<!-- Hover Div -->
								<div class="smart-checkbox-btn checkbox-strong-blue folders-top-right-overlay">
									<input id="tcheck10" type="checkbox" class="checkbox-active">
									<label for="tcheck10"></label>
								</div>
								<!-- More option -->
								<div class="dropdown simple-dropdown caret-icon-none folders-bottom-right-overlay">
									<a href="javascript:void(0)" class="dropdown-toggle t-decoration-none d-gblue-clr" data-toggle="dropdown">
										<i class="icon-more" aria-hidden="true"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right f-14 right-arrow widget-drop">
										 <a class="dropdown-item" href="javascript:void(0)">Duplicate</a>
										 <a class="dropdown-item" href="javascript:void(0)">Merge</a>
										 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal">Delete</a>
									</div>
								</div>
								<!-- Hover Div End -->
							</div>
						</div>
						
						<!-- Projects column 11 -->
						<div class="col-12 col-md-6 col-xl-3 mt20 mt-md30">
							<div class="folders-block">
								<div class="folder-icon-size"><i class="icon-project"></i></div>
								<div class="f-14 w400 mt15 hide-edit-show">
									<span class="f-16 d-block">Projects Name A <a href="#" class="f-10 d-gblue-clr t-decoration-none pl15 edit-link"><i class="icon-edit edit-icon"></i></a>
									</span> 
									<span class="f-16 f-md-24 w700 d-block mt7">500</span> Campaigns
								</div>
								
								<div class="row edit-field-show no-gutters w-100 mt14">
									 <div class="col-12 smart-form">
										 <input type="text" class="form-control field-h40 fw100 mb15 mb-md0" value="Driverless Hotel Rooms: The End of Uber, Airbnb and Human Landlords.">
										
									    <button type="button" class="base-btn f-14 cancel-edit mt10 mr5">Cancel</button>
									    <button type="button" class="base-btn green-btn f-14 mt10">Save</button>
									 </div>
								  </div>
								  
								<!-- Hover Div -->
								<div class="smart-checkbox-btn checkbox-strong-blue folders-top-right-overlay">
									<input id="tcheck11" type="checkbox" class="checkbox-active">
									<label for="tcheck11"></label>
								</div>
								<!-- More option -->
								<div class="dropdown simple-dropdown caret-icon-none folders-bottom-right-overlay">
									<a href="javascript:void(0)" class="dropdown-toggle t-decoration-none d-gblue-clr" data-toggle="dropdown">
										<i class="icon-more" aria-hidden="true"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right f-14 right-arrow widget-drop">
										 <a class="dropdown-item" href="javascript:void(0)">Duplicate</a>
										 <a class="dropdown-item" href="javascript:void(0)">Merge</a>
										 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal">Delete</a>
									</div>
								</div>
								<!-- Hover Div End -->
							</div>
						</div>
						
						<!-- Projects column 12 -->
						<div class="col-12 col-md-6 col-xl-3 mt20 mt-md30">
							<div class="folders-block">
								<div class="folder-icon-size"><i class="icon-project"></i></div>
								<div class="f-14 w400 mt15 hide-edit-show">
									<span class="f-16 d-block">Projects Name A <a href="#" class="f-10 d-gblue-clr t-decoration-none pl15 edit-link"><i class="icon-edit edit-icon"></i></a>
									</span> 
									<span class="f-16 f-md-24 w700 d-block mt7">500</span> Campaigns
								</div>
								
								<div class="row edit-field-show no-gutters w-100 mt14">
									 <div class="col-12 smart-form">
										 <input type="text" class="form-control field-h40 fw100 mb15 mb-md0" value="Driverless Hotel Rooms: The End of Uber, Airbnb and Human Landlords.">
										
									    <button type="button" class="base-btn f-14 cancel-edit mt10 mr5">Cancel</button>
									    <button type="button" class="base-btn green-btn f-14 mt10">Save</button>
									 </div>
								  </div>
								  
								<!-- Hover Div -->
								<div class="smart-checkbox-btn checkbox-strong-blue folders-top-right-overlay">
									<input id="tcheck12" type="checkbox" class="checkbox-active">
									<label for="tcheck12"></label>
								</div>
								<!-- More option -->
								<div class="dropdown simple-dropdown caret-icon-none folders-bottom-right-overlay">
									<a href="javascript:void(0)" class="dropdown-toggle t-decoration-none d-gblue-clr" data-toggle="dropdown">
										<i class="icon-more" aria-hidden="true"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right f-14 right-arrow widget-drop">
										 <a class="dropdown-item" href="javascript:void(0)">Duplicate</a>
										 <a class="dropdown-item" href="javascript:void(0)">Merge</a>
										 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal">Delete</a>
									</div>
								</div>
								<!-- Hover Div End -->
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- Projectss Section End -->
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
	</div>
</div>

<!-- Footer Include File-------->
<?php include '../../../smart/html/includes/dcp-footer.php'; ?>
<!-- Footer Include File end -------->