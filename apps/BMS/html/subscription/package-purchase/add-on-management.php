<!------- BMS Main Header Include File---------->
<?php include '../../../../smart/html/includes/smart-header-bms.php'; ?>
<!------- BMS Main Header Include File end---------->

<!------- BMS Stylesheet------=------->
<link rel="stylesheet" href="../../../css/bms.css">
<!-------BMS Stylesheet end---------->

<div class="container-fluid p15 p-md30">
	<!------- Header Start----------->
	<div class="row">
		<div class="col-12 mb15 mb-md30">
			<span class="f-20 f-md-24 lato-font">Add-on Management</span> &nbsp;
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="gblue-clr f-14 w400 mt5">Here you can manage all the accounts in BMS</p>
		</div>
	</div>
	<!------- Header End ----------->

	<!---------- Choose Add-on Management Section --------->
	<div class="row">
		<div class="col-12 segment-accordion">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header" data-toggle="collapse" href="#PackageDetails">
						<a class="card-title lato-font">&nbsp; Package Details</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="PackageDetails" class="collapse show">
						<div class="card-body smart-form d-gblue-clr f-14">
							<div class="row align-items-center">
								<div class="col-12 col-md-3 col-xl-2 mb5 mb-md0">Choose Solution</div>	
								<div class="col-12 col-md-5 col-xl-4">
									<select class="selectpicker f-14" title="Select">
										<option>option 1</option>
										<option>option 2</option>
										<option>option 3</option>
										<option>option 4</option>
									</select>
								</div>
							</div>
							<div class="row align-items-center mt15 mt-md20">
								<div class="col-12 col-md-3 col-xl-2 mb5 mb-md0">Choose Package</div>	
								<div class="col-12 col-md-5 col-xl-4">
									<select class="selectpicker f-14" title="Select">
										<option>option 1</option>
										<option>option 2</option>
										<option>option 3</option>
										<option>option 4</option>
									</select>
								</div>
							</div>
							<div class="row align-items-center mt15 mt-md20">
								<div class="col-12 col-md-3 col-xl-2 mb5 mb-md0">Choose Option</div>	
								<div class="col-12 col-md-5 col-xl-4">
									<select class="selectpicker f-14" title="Select">
										<option>option 1</option>
										<option>option 2</option>
										<option>option 3</option>
										<option>option 4</option>
									</select>
								</div>
							</div>
							<div class="row align-items-center mt15 mt-md20">
								<div class="col-12 col-md-3 col-xl-2 mb5 mb-md0">Choose Customer</div>	
								<div class="col-12 col-md-5 col-xl-4">
									<div class="dropdown simple-dropdown">
									  <button class="btn base-btn default-btn dropdown-toggle btn-block btn-h50 text-left" type="button" id="dropdownMenu1" data-toggle="dropdown"
									  aria-haspopup="true" aria-expanded="false"> <span class="caret-right pull-left text-truncate pr15">Select</span> </button>
									  <div class="dropdown-menu w-100 stoppropagation h-auto f-14" aria-labelledby="dropdownMenu1"> 
											<!--- Searchbox Field ------->
											<div class="bs-searchbox-field">
											  <div class="input-group">
												<div class="smart-checkbox-btn checkbox-strong-blue">
												  <input id="saerch1" type="checkbox">
												  <label for="saerch1" class="mb4"></label>
												</div>
												<input type="text" class="form-control" placeholder="Search">
												<div class="input-group-append">
												  <button class="btn" type="submit"> <i class="fa fa-search"></i></button>
												</div>
											  </div>
											</div>
										<!--- Scrollbar Div start ------->
										<div class="mCustomScrollbar f-14 mh-180" data-mcs-theme="inset-3">
										  <li> <a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
											  <input id="checkdrop1" type="checkbox">
											  <label for="checkdrop1">demo1@demo.com</label>
											</div>
											</a> </li>
										  <li> <a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
											  <input id="checkdrop2" type="checkbox">
											  <label for="checkdrop2">demo2@demo.com</label>
											</div>
											</a> </li>
										  <li> <a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
											  <input id="checkdrop3" type="checkbox">
											  <label for="checkdrop3">demo3@demo.com</label>
											</div>
											</a> </li>
										  <li> <a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
											  <input id="checkdrop4" type="checkbox">
											  <label for="checkdrop4">demo4@demo.com</label>
											</div>
											</a> </li>
										</div>
									  </div>
									</div>
								</div>
							</div>
							<div class="row mt-md20 mt15">
								<div class="col-12 col-md-8 col-xl-6 text-right">
									<a href="#" class="base-btn blue-btn">Fatch Features</a>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 f-18 w400 mt-md30 mt15">Features</div>
		
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#adons">
						<a class="card-title lato-font">&nbsp; Ad Ons</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="adons" class="collapse">
						<div class="card-body smart-form">
							<div class="row">
								<div class="col-lg-6 col-md-12 col-12">
									<div class="row align-items-center">
										<div class="col-12 col-md-3 f-14 w400">
											Storage
										</div>
										<div class="col-12 col-md-5 mt15 mt-md0 new-package-form">
											<div class="input-group">
											<input type="text" class="form-control radiusrb0" placeholder="Storage" value="50" disabled>
											<div class="input-group-append">
											<select class="selectpicker f-14" disabled>
												<option>MB</option>
												<option>GB</option>
												<option>TB</option>
											</select>
											</div>
											</div>
										</div>
										<div class="col-12 col-md-3 mt10 mt-md0">
											<div class="label-active smart-checkbox-btn checkbox-strong-blue d-flex float-right float-md-left">
											<input id="Unlimited" type="checkbox" checked>
											<label for="Unlimited" class="mb0 l-gblue-clr">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-12 mt15 mt-md30 mt-lg0">
									<div class="row align-items-center">
										<div class="col-12 col-md-3 f-14 w400">
										Bandwidth
										</div>
										<div class="col-12 col-md-5 mt15 mt-md0 new-package-form">
											<div class="input-group">
												<input type="text" class="form-control radiusrb0" placeholder="Storage" value="50">
												<div class="input-group-append">
													<select class="selectpicker f-14">
														<option>MB</option>
														<option>GB</option>
														<option>TB</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-12 col-md-3 mt10 mt-md0">
											<div class="label-active smart-checkbox-btn checkbox-strong-blue d-flex float-right float-md-left">
											<input id="Bandwidth" type="checkbox">
											<label for="Bandwidth" class="mb0 l-gblue-clr">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-12 mt15 mt-md30">
									<div class="row align-items-center">
										<div class="col-12 col-md-3 f-14 w400">
										User
										</div>
										<div class="col-12 col-md-5 mt15 mt-md0">
										<input type="text" class="form-control" placeholder="User" value="50">
										</div>
										<div class="col-12 col-md-3 mt10 mt-md0">
											<div class="label-active smart-checkbox-btn checkbox-strong-blue d-flex float-right float-md-left">
											<input id="User" type="checkbox">
											<label for="User" class="mb0 l-gblue-clr">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-12 mt15 mt-md30">
									<div class="row align-items-center">
										<div class="col-12 col-md-3 f-14 w400">
										Contacts
										</div>
										<div class="col-12 col-md-5 mt15 mt-md0">
										<input type="text" class="form-control" placeholder="Accounts" value="50">
										</div>
										<div class="col-12 col-md-3 mt10 mt-md0">
											<div class="label-active smart-checkbox-btn checkbox-strong-blue d-flex float-right float-md-left">
											<input id="Accounts" type="checkbox">
											<label for="Accounts" class="mb0 l-gblue-clr">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-12 mt15 mt-md30">
									<div class="row align-items-center">
										<div class="col-12 col-md-3 f-14 w400">
										Custom Domain
										</div>
										<div class="col-12 col-md-5 mt15 mt-md0">
										<input type="text" class="form-control" placeholder="Custom Domain" value="50">
										</div>
										<div class="col-12 col-md-3 mt10 mt-md0">
											<div class="label-active smart-checkbox-btn checkbox-strong-blue d-flex float-right float-md-left">
											<input id="CustomDomain" type="checkbox">
											<label for="CustomDomain" class="mb0 l-gblue-clr">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-12 mt15 mt-md30">
									<div class="row align-items-center">
										<div class="col-12 col-md-3 f-14 w400">
											Visitors
										</div>
										<div class="col-12 col-md-5 mt15 mt-md0">
										<input type="text" class="form-control" placeholder="Visitors" value="50">
										</div>
										<div class="col-12 col-md-3 mt10 mt-md0">
											<div class="label-active smart-checkbox-btn checkbox-strong-blue d-flex float-right float-md-left">
											<input id="Visitors" type="checkbox">
											<label for="Visitors" class="mb0 l-gblue-clr">Unlimited</label>
											</div>
										</div>
										
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-12 mt15 mt-md30">
									<div class="row align-items-center">
										<div class="col-12 col-md-3 pr0 f-14 w400">
										Pages
										</div>
										<div class="col-12 col-md-5 mt15 mt-md0">
										<input type="text" class="form-control" placeholder="Pages" value="50">
										</div>
										<div class="col-12 col-md-3 mt10 mt-md0">
											<div class="label-active smart-checkbox-btn checkbox-strong-blue d-flex float-right float-md-left">
											<input id="Pages" type="checkbox">
											<label for="Pages" class="mb0 l-gblue-clr">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-12 mt15 mt-md30">
									<div class="row align-items-center">
										<div class="col-12 col-md-3 pr0 f-14 w400">
										Journey
										</div>
										<div class="col-12 col-md-5 mt15 mt-md0">
										<input type="text" class="form-control" placeholder="Journey" value="50">
										</div>
										<div class="col-12 col-md-3 mt10 mt-md0">
											<div class="label-active smart-checkbox-btn checkbox-strong-blue d-flex float-right float-md-left">
											<input id="Journey" type="checkbox">
											<label for="Journey" class="mb0 l-gblue-clr">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-12 mt15 mt-md30">
									<div class="row align-items-center">
										<div class="col-12 col-md-3 f-14 w400">
											Videos
										</div>
										<div class="col-12 col-md-5 mt15 mt-md0">
										<input type="text" class="form-control" placeholder="Videos" value="50">
										</div>
										<div class="col-12 col-md-3 mt10 mt-md0">
											<div class="label-active smart-checkbox-btn checkbox-strong-blue d-flex float-right float-md-left">
											<input id="Videos" type="checkbox">
											<label for="Videos" class="mb0 l-gblue-clr">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-12 mt15 mt-md30">
									<div class="row align-items-center">
										<div class="col-12 col-md-3 f-14 w400">
											Playlist
										</div>
										<div class="col-12 col-md-5 mt15 mt-md0">
										<input type="text" class="form-control" placeholder="Playlist" value="50">
										</div>
										<div class="col-12 col-md-3 mt10 mt-md0">
											<div class="label-active smart-checkbox-btn checkbox-strong-blue d-flex float-right float-md-left">
											<input id="Playlist" type="checkbox">
											<label for="Playlist" class="mb0 l-gblue-clr">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-12 mt15 mt-md30">
									<div class="row align-items-center">
										<div class="col-12 col-md-3 f-14 w400">
											Popups & Bars
										</div>
										<div class="col-12 col-md-5 mt15 mt-md0">
										<input type="text" class="form-control" placeholder="Popups & Bars" value="50">
										</div>
										<div class="col-12 col-md-3 mt10 mt-md0">
											<div class="label-active smart-checkbox-btn checkbox-strong-blue d-flex float-right float-md-left">
											<input id="PopupsBars" type="checkbox">
											<label for="PopupsBars" class="mb0 l-gblue-clr">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-12 mt15 mt-md30">
									<div class="row align-items-center">
										<div class="col-12 col-md-3 f-14 w400">
											Mail
										</div>
										<div class="col-12 col-md-5 mt15 mt-md0">
										<input type="text" class="form-control" placeholder="Mail" value="50">
										</div>
										<div class="col-12 col-md-3 mt10 mt-md0">
											<div class="label-active smart-checkbox-btn checkbox-strong-blue d-flex float-right float-md-left">
											<input id="Mail" type="checkbox">
											<label for="Mail" class="mb0 l-gblue-clr">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-12 mt15 mt-md30">
									<div class="row align-items-center">
										<div class="col-12 col-md-3 f-14 w400">
											List
										</div>
										<div class="col-12 col-md-5 mt15 mt-md0">
										<input type="text" class="form-control" placeholder="List" value="50">
										</div>
										<div class="col-12 col-md-3 mt10 mt-md0">
											<div class="label-active smart-checkbox-btn checkbox-strong-blue d-flex float-right float-md-left">
											<input id="List" type="checkbox">
											<label for="List" class="mb0 l-gblue-clr">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-12 mt15 mt-md30">
									<div class="row align-items-center">
										<div class="col-12 col-md-3 f-14 w400">
											Segments
										</div>
										<div class="col-12 col-md-5 mt15 mt-md0">
										<input type="text" class="form-control" placeholder="Segments" value="50">
										</div>
										<div class="col-12 col-md-3 mt10 mt-md0">
											<div class="label-active smart-checkbox-btn checkbox-strong-blue d-flex float-right float-md-left">
											<input id="Segments" type="checkbox">
											<label for="Segments" class="mb0 l-gblue-clr">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-12 mt15 mt-md30">
									<div class="row align-items-center">
										<div class="col-12 col-md-3 f-14 w400">
											Business
										</div>
										<div class="col-12 col-md-5 mt15 mt-md0">
										<input type="text" class="form-control" placeholder="Business" value="50">
										</div>
										<div class="col-12 col-md-3 mt10 mt-md0">
											<div class="label-active smart-checkbox-btn checkbox-strong-blue d-flex float-right float-md-left">
											<input id="Business" type="checkbox">
											<label for="Business" class="mb0 l-gblue-clr">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-12 mt15 mt-md30">
									<div class="row align-items-center">
										<div class="col-12 col-md-3 f-14 w400">
											Folder/Subfolder
										</div>
										<div class="col-12 col-md-5 mt15 mt-md0">
										<input type="text" class="form-control" placeholder="Business" value="50">
										</div>
										<div class="col-12 col-md-3 mt10 mt-md0">
											<div class="label-active smart-checkbox-btn checkbox-strong-blue d-flex float-right float-md-left">
											<input id="AddSubfolder/Folder" type="checkbox">
											<label for="AddSubfolder/Folder" class="mb0 l-gblue-clr">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Next & Cancel Button -->
		<div class="col-12 text-right mt-md30 mt15">
			<a href="#" class="base-btn blue-btn">Apply and Activate</a>
		</div>
	</div>
</div>
<!------- Smart Footer Include File ---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->