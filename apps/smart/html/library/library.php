<!------- Smart Header Include File---------->
<?php include '../includes/dcp-header.php'; ?>
<!------- Smart Header Include File end---------->


<div class="container-fluid p15 px-md30 py-md30">
	<!------- Header Start----------->
	<div class="row mb15 mb-md30 align-items-center">

		<div class="col-12  col-md-7">
			<div class="d-flex align-items-center flex-wrap">
			<ul class="stepwizard-style2 f-18 f-sm-24 w400 lato-font mr15">
					<li> <a href="#"> MyDrive</a> </li>
					<li> <a href="#"> Business Name MyDrive</a> </li>
				</ul>
			
			<!--<span class="f-20 f-md-24 lato-font">MyDrive</span> &nbsp;
			<span class="f-20 f-md-24 lato-font">Business Name MyDrive</span> &nbsp;-->
			<div class="d-flex mt7">
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>&nbsp;
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			</div>
			</div>
			<p class="f-14 mt5 gblue-clr">Your central drive to upload & manage files</p>
		</div>
		<div class="col-12 col-md-5 f-16 text-center text-md-right mt10 mt-md0">
			<a href="javascript:void(0)" class="base-btn default-btn mr5"><i class="icon-add-to-list f-18 align-middle"></i>&nbsp;&nbsp;View Docs Channel
</a>
			<a href="javascript:void(0);" class="base-btn default-btn mr5" data-toggle="modal" data-target="#createfolderModal">Create New Folder</a>
			<a href="javascript:void(0);" class="base-btn blue-btn" data-toggle="modal" data-target="#uploadfileModal">Upload</a>
		</div>
	</div>
	<!------- Header End ----------->

	<div class="row">

		<div class="col-xl-2 col-lg-3 col-md-3 col-12">
			<!--- Heading ---->
			<h5 class="w600 mb15 mb-md30">Types:</h5>
			<div class="nav flex-column nav-pills ui-vertical-tab f-14 w400">
				<a class="nav-link active" href="#"><i class="icon-all-files f-16"></i> All Files</a>
				<a class="nav-link" data-toggle="pill" href="#"><i class="icon-folder f-16"></i> Folders</a>
				<a class="nav-link" data-toggle="pill" href="#"><i class="icon-image f-16"></i> Images</a>
				<a class="nav-link" data-toggle="pill" href="#"><i class="icon-doc f-16"></i> Documents</a>
				<a class="nav-link" data-toggle="pill" href="#"><i class="icon-total-viewed-videos f-16"></i> Videos</a>
				<a class="nav-link" data-toggle="pill" href="#"><i class="icon-audios f-16"></i> Audios</a>
				<a class="nav-link" data-toggle="pill" href="#"><i class="icon-others f-16"></i> Others</a>
				<a class="nav-link" data-toggle="pill" href="#"><i class="icon-pixabay f-18"></i> Pixabay</a>
			</div>

		</div>
		<div class="col-xl-10 col-lg-9 col-md-9 col-12">

			<!--- Heading ---->
			<!--<h5 class="w600 mb15 mb-md30">All Files</h5>-->
			<div class="d-flex align-items-center flex-wrap mb15 mb-md25">
				<ul class="stepwizard-style2 max-drive-stepwizard f-16 f-md-18 w500">
				  <li> <a href="#">Folder Name </a> </li>
				  <li> <a href="#">Subfolder Name</a> </li>
				  <li> <a href="#">Sub-Subfolder Name </a> </li>
				</ul>
			</div>

			<!--- Filteration Div ---->
			<div class="row mb15 mb-md30">
				<div class="col-md-12 col-lg-5 col-xl-6 bs-h40 mb10 mb-md0">
					<div class="row">
				<div class="col-md-6 col-lg-6 col-xl-6 bs-h40 mb10 mb-md0">
					<select class="selectpicker f-14" title="All Files (4000)">
						<option>All Files (4000)</option>
						<option>Recently updated in 24 hours (500)</option>
						<option>Uploaded in last 24 hours (330)</option>
					</select>
				</div>
				<div class="col-md-6 col-lg-6 col-xl-6 bs-h40 mb10 mb-md0">
						<select class="selectpicker f-14" title="Business Name MyDrive">
							<option>Business Name MyDrive</option>
							<option>Personal MyDrive</option>
						</select>
				</div>
				</div>
				</div>
				<div class="col-md-12 col-lg-7 col-xl-6 mt-md15 mt-lg0">
					<div class="row">
						
						<div class="col-md-3 col-lg-4 col-xl-3 mb10 mb-md0  text-right p-md0">
							<button type="button" class="base-btn default-btn btn-xs-block filter-list-open f-14 lib-fbtn">Add Filter &nbsp;<i class="icon-filter" aria-hidden="true"></i> </button>
						</div>
						<div class="col-md-5 col-lg-4 col-xl-5 mb10 mb-md0">
							<div class="smart-search-field">
								<div class="input-group">
									<input class="form-control" placeholder="Search" type="text">
									<div class="input-group-append">
										<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-lg-4 col-xl-4">
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
			</div>

			<!------- Checkbox Dropdown & View Icon ---->
			<div class="d-flex justify-content-between align-items-center lib-table-view-hide">
				<div class="d-flex justify-content-start flex-wrap">
					<div class="dropdown simple-dropdown">
						<div class="smart-checkbox-btn checkbox-strong-blue pull-left">
							<input id="saerch1" type="checkbox">
							<label for="saerch1"></label>
						</div>
						<div class="dropdown-toggle pull-left f-14 base-btn p5" data-toggle="dropdown">&nbsp;</div>

						<div class="dropdown-menu stoppropagation h-auto center-arrow f-14 left-100">
							<!--- Scrollbar Div start ------->
							<div class="mCustomScrollbar f-16 h280" data-mcs-theme="inset-3">
								<li class="d-flex justify-content-between dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
										<input id="checkdrop1" type="checkbox">
										<label for="checkdrop1"> All Files </label>
									</div>
									<div class="pl20">(4000)</div>
								</li>
								<li class="d-flex justify-content-between dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
										<input id="checkdrop2" type="checkbox">
										<label for="checkdrop2"> Folders</label>
									</div>
									<div class="pl20">(500)</div>
								</li>
								<li class="d-flex justify-content-between dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
										<input id="checkdrop3" type="checkbox">
										<label for="checkdrop3"> Images </label>
									</div>
									<div class="pl20">(2000)</div>
								</li>
								<li class="d-flex justify-content-between dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
										<input id="checkdrop4" type="checkbox">
										<label for="checkdrop4"> Documents </label>
									</div>
									<div class="pl20">(500)</div>
								</li>
								<li class="d-flex justify-content-between dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
										<input id="checkdrop5" type="checkbox">
										<label for="checkdrop5"> Videos </label>
									</div>
									<div class="pl20">(500)</div>
								</li>
								<li class="d-flex justify-content-between dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
										<input id="checkdrop6" type="checkbox">
										<label for="checkdrop6"> Audios </label>
									</div>
									<div class="pl20">(500)</div>
								</li>
							</div>

						</div>
					</div>
					<!----- Table Option Div Show---->
					<div class="table-option-manage library-filter-option ml0 ml-lg15">
						<ul class="list-inline f-14 w400 mb0">
							<li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" data-toggle="modal" data-target="#copyModal" class="base-btn default-btn btn-h30 f-14" title="copy"><i class="icon-copy"></i> <span class="hiddenxs">Copy</span></a>
							</li>
							<li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" data-toggle="modal" data-target="#moveModal" class="base-btn default-btn btn-h30 f-14" title="Move"><i class="icon-move"></i> <span class="hiddenxs">Move</span></a>
							</li>
							<li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal" class="base-btn default-btn btn-h30 f-14" title="Delete"><i class="icon-delete"></i> <span class="hiddenxs">Delete</span></a>
							</li>
							<li class="list-inline-item mb10 mb-lg0"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Download"><i class="icon-download"></i> <span class="hiddenxs">Download</span></a>
							</li>
							<li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" data-toggle="modal" data-target="#sharelinkModal" class="base-btn default-btn btn-h30 f-14" title="Share"><i class="icon-share"></i> <span class="hiddenxs">Share</span></a>
							</li>
							<li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" data-toggle="modal" data-target="#statusModal" class="base-btn default-btn btn-h30 f-14" title="Status"><i class="icon-locked"></i> <span class="hiddenxs">Status</span></a>
							</li>
							<li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" data-toggle="modal" data-target="#MovetoBusinessDriveModal" class="base-btn default-btn btn-h30 f-14" title="Move to Business Drive"><i class="icon-drive"></i> <span class="hiddenxs">Move to Business Drive</span></a>
							</li>
						</ul>
					</div>
					<!----- Table Option Div end---->
				</div>
				<div class="d-flex justify-content-end">
					<div class="dropdown simple-dropdown caret-icon-none">
						<a href="#" class="base-btn default-btn p6 d-flex align-middle dropdown-toggle" title="Sort By" data-toggle="dropdown"><i class="icon-sorting"></i></a>

						<div class="dropdown-menu dropdown-menu-right h-auto right-arrow m-right-arrow mCustomScrollbar f-14 mt12" data-mcs-theme="inset-3">
							<li>
								<a class="dropdown-item d-flex justify-content-start" href="#!">
									<div class="mr10 w12"><i class="icon-tick-one f-12 s-green-clr"></i>
									</div>
									<div>Name</div>
								</a>
							</li>
							<li>
								<a class="dropdown-item d-flex justify-content-start" href="#!">
									<div class="mr10 w12"></div>
									<div>Modified</div>
								</a>
							</li>
							<li>
								<a class="dropdown-item d-flex justify-content-start" href="#!">
									<div class="mr10 w12"></div>
									<div>File Size</div>
								</a>
							</li>
							<!--- Dropdown divider  ------->
							<li class="drop-footer p0 mt8 mb8"></li>
							<li>
								<a class="dropdown-item d-flex justify-content-start" href="#!">
									<div class="mr10 w12"><i class="icon-tick-one f-12 s-green-clr"></i>
									</div>
									<div>Ascending</div>
								</a>
							</li>
							<li>
								<a class="dropdown-item d-flex justify-content-start" href="#!">
									<div class="mr10 w12"></div>
									<div>Decending</div>
								</a>
							</li>
						</div>

					</div>
					<!------ Table View Icon---->
					<a href="javascript:void(0)" class="base-btn default-btn p6 d-flex align-middle ml10 f-14" id="lib-grid-view"><i class="icon-table-view" title="List View"></i></a>

				</div>
			</div>

			<!------- Files & Filter ---->
			<div class="row mt15 mt-md20">
				<div class="col-xl-7 col-lg-7 col-md-12 col-12 order-2 order-lg-1 t-wauto tw-100 transition-all">
			<!------- Library Table View------>
			<div class="row lib-table-view-hide">
				<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
					<div class="gradient-border1 relative mytooltip-hover">
						<div class="library-block d-flex align-items-center vl-gblue-bg">
							<i class="icon-folder f-65 d-gblue-clr d-block mx-auto"></i>
							<!---- Hover Checkbox Div ---->
							<div class="smart-checkbox-btn checkbox-strong-blue">
								<input id="tcheck1" type="checkbox" class="checkbox-active">
								<label for="tcheck1"></label>
							</div>
						</div>
					</div>



					<div class="d-flex justify-content-between align-items-center mt10">
						<div class="f-14">Folder Name | 20 MB</div>
						<div>
							<div class="dropdown simple-dropdown caret-icon-none">

								<a class="dropdown-toggle f-14 d-gblue-clr t-decoration-none cursor" data-toggle="dropdown"><i class="icon-more"></i></a>

								<div class="dropdown-menu dropdown-menu-right h-auto right-arrow m-right-arrow f-14">
									<!--- Scrollbar Div start ------->
									<div class="mCustomScrollbar f-16 h-auto" data-mcs-theme="inset-3">
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#statusModal" class="dropdown-item">Status</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#sharelinkModal" class="dropdown-item">Share</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#GeetFileLinkModal" class="dropdown-item">Get File's Link</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#" class="dropdown-item">Get Embed Code</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#MovetoBusinessDriveModal" class="dropdown-item">Move to Business Drive</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#MoreActionModal" class="dropdown-item">More Action</a>
										</li>
									</div>

								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
					
						<div class="gradient-border1 relative mytooltip-hover">
						<a data-toggle="modal" class="cursor" data-target="#librarymodalimage">
							<div class="library-block d-flex align-items-center vl-gblue-bg">
								<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
							</div>
							</a>
								<!---- Hover Checkbox Div ---->
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="tcheck2" type="checkbox" class="checkbox-active">
									<label for="tcheck2"></label>
								</div>
						</div>
					



					<div class="d-flex justify-content-between align-items-center mt10">
						<div class="f-14">File Name.jpg | 10 MB</div>
						<div>
							<div class="dropdown simple-dropdown caret-icon-none">

								<a class="dropdown-toggle f-14 d-gblue-clr t-decoration-none cursor" data-toggle="dropdown"><i class="icon-more"></i></a>

								<div class="dropdown-menu dropdown-menu-right h-auto right-arrow m-right-arrow f-14">
									<!--- Scrollbar Div start ------->
									<div class="mCustomScrollbar f-16 h-auto" data-mcs-theme="inset-3">
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#statusModal" class="dropdown-item">Status</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#sharelinkModal" class="dropdown-item">Share</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#GeetFileLinkModal" class="dropdown-item">Get File's Link</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#" class="dropdown-item">Get Embed Code</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#MovetoBusinessDriveModal" class="dropdown-item">Move to Business Drive</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#MoreActionModal" class="dropdown-item">More Action</a>
										</li>
									</div>

								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
						<div class="gradient-border1 relative mytooltip-hover">
							<a data-toggle="modal" class="cursor" data-target="#DocDetailModal">
								<div class="library-block d-flex align-items-center vl-gblue-bg">
								<i class="icon-doc f-65 d-gblue-clr d-block mx-auto"></i>
								</div>
							</a>
							<!---- Hover Checkbox Div ---->
							<div class="smart-checkbox-btn checkbox-strong-blue">
								<input id="tcheck3" type="checkbox" class="checkbox-active">
								<label for="tcheck3"></label>
							</div>
						</div>



					<div class="d-flex justify-content-between align-items-center mt10">
						<div class="f-14">File Name.doc | 10 KB</div>
						<div>
							<div class="dropdown simple-dropdown caret-icon-none">

								<a class="dropdown-toggle f-14 d-gblue-clr t-decoration-none cursor" data-toggle="dropdown"><i class="icon-more"></i></a>

								<div class="dropdown-menu dropdown-menu-right h-auto right-arrow m-right-arrow f-14">
									<!--- Scrollbar Div start ------->
									<div class="mCustomScrollbar f-16 h-auto" data-mcs-theme="inset-3">
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#statusModal" class="dropdown-item">Status</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#sharelinkModal" class="dropdown-item">Share</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#GeetFileLinkModal" class="dropdown-item">Get File's Link</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#" class="dropdown-item">Get Embed Code</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#MovetoBusinessDriveModal" class="dropdown-item">Move to Business Drive</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#MoreActionModal" class="dropdown-item">More Action</a>
										</li>
									</div>

								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
					<a data-toggle="modal" class="cursor" data-target="#videoModal">
					<div class="gradient-border1 relative mytooltip-hover">
						<div class="library-block d-flex align-items-center vl-gblue-bg">
							<img src="../../../../images/lib-video-img.png" class="d-block mx-auto img-fluid">
							<!----- Video icon css--->
							<a href="#" data-toggle="modal" data-target="#videoModal" class="lib-video-icon white-clr t-decoration-none"><i class="icon-total-viewed-videos f-35"></i></a>

							<!---- Hover Checkbox Div ---->
							<div class="smart-checkbox-btn checkbox-strong-blue">
								<input id="tcheck4" type="checkbox" class="checkbox-active">
								<label for="tcheck4"></label>
							</div>
						</div>
					</div>
					</a>


					<div class="d-flex justify-content-between align-items-center mt10">
						<div class="f-14">Video Name.avi | 30 MB</div>
						<div>
							<div class="dropdown simple-dropdown caret-icon-none">

								<a class="dropdown-toggle f-14 d-gblue-clr t-decoration-none cursor" data-toggle="dropdown"><i class="icon-more"></i></a>

								<div class="dropdown-menu dropdown-menu-right h-auto right-arrow m-right-arrow f-14">
									<!--- Scrollbar Div start ------->
									<div class="mCustomScrollbar f-16 h-auto" data-mcs-theme="inset-3">
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#statusModal" class="dropdown-item">Status</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#sharelinkModal" class="dropdown-item">Share</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#GeetFileLinkModal" class="dropdown-item">Get File's Link</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#" class="dropdown-item">Get Embed Code</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#MovetoBusinessDriveModal" class="dropdown-item">Move to Business Drive</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#MoreActionModal" class="dropdown-item">More Action</a>
										</li>
									</div>

								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
					<div class="gradient-border1 relative mytooltip-hover">
						<div class="library-block d-flex align-items-center vl-gblue-bg">
							<i class="icon-audios f-65 d-gblue-clr d-block mx-auto"></i>
							<!---- Hover Checkbox Div ---->
							<div class="smart-checkbox-btn checkbox-strong-blue">
								<input id="tcheck5" type="checkbox" class="checkbox-active">
								<label for="tcheck5"></label>
							</div>
						</div>
					</div>



					<div class="d-flex justify-content-between align-items-center mt10">
						<div class="f-14">Audio Name.mp3 | 20 KB</div>
						<div>
							<div class="dropdown simple-dropdown caret-icon-none">

								<a class="dropdown-toggle f-14 d-gblue-clr t-decoration-none cursor" data-toggle="dropdown"><i class="icon-more"></i></a>

								<div class="dropdown-menu dropdown-menu-right h-auto right-arrow m-right-arrow f-14">
									<!--- Scrollbar Div start ------->
									<div class="mCustomScrollbar f-16 h-auto" data-mcs-theme="inset-3">
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#statusModal" class="dropdown-item">Status</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#sharelinkModal" class="dropdown-item">Share</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#GeetFileLinkModal" class="dropdown-item">Get File's Link</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#" class="dropdown-item">Get Embed Code</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#MovetoBusinessDriveModal" class="dropdown-item">Move to Business Drive</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#MoreActionModal" class="dropdown-item">More Action</a>
										</li>
									</div>

								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
					<div class="gradient-border1 relative mytooltip-hover">
						<div class="library-block d-flex align-items-center vl-gblue-bg">
							<i class="icon-folder f-65 d-gblue-clr d-block mx-auto"></i>
							<!---- Hover Checkbox Div ---->
							<div class="smart-checkbox-btn checkbox-strong-blue">
								<input id="tcheck6" type="checkbox" class="checkbox-active">
								<label for="tcheck6"></label>
							</div>
						</div>
					</div>



					<div class="d-flex justify-content-between align-items-center mt10">
						<div class="f-14">Folder Name | 20 MB</div>
						<div>
							<div class="dropdown simple-dropdown caret-icon-none">

								<a class="dropdown-toggle f-14 d-gblue-clr t-decoration-none cursor" data-toggle="dropdown"><i class="icon-more"></i></a>

								<div class="dropdown-menu dropdown-menu-right h-auto right-arrow m-right-arrow f-14">
									<!--- Scrollbar Div start ------->
									<div class="mCustomScrollbar f-16 h-auto" data-mcs-theme="inset-3">
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#statusModal" class="dropdown-item">Status</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#sharelinkModal" class="dropdown-item">Share</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#GeetFileLinkModal" class="dropdown-item">Get File's Link</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#" class="dropdown-item">Get Embed Code</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#MovetoBusinessDriveModal" class="dropdown-item">Move to Business Drive</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#MoreActionModal" class="dropdown-item">More Action</a>
										</li>
									</div>

								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
						<div class="gradient-border1 relative mytooltip-hover">
							<a data-toggle="modal" class="cursor" data-target="#libraryModal">
								<div class="library-block d-flex align-items-center vl-gblue-bg">
									<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
								</div>
							</a>
								<!---- Hover Checkbox Div ---->
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="tcheck7" type="checkbox" class="checkbox-active">
									<label for="tcheck7"></label>
								</div>
							
						</div>



					<div class="d-flex justify-content-between align-items-center mt10">
						<div class="f-14">File Name.jpg | 10 MB</div>
						<div>
							<div class="dropdown simple-dropdown caret-icon-none">

								<a class="dropdown-toggle f-14 d-gblue-clr t-decoration-none cursor" data-toggle="dropdown"><i class="icon-more"></i></a>

								<div class="dropdown-menu dropdown-menu-right h-auto right-arrow m-right-arrow f-14">
									<!--- Scrollbar Div start ------->
									<div class="mCustomScrollbar f-16 h-auto" data-mcs-theme="inset-3">
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#statusModal" class="dropdown-item">Status</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#sharelinkModal" class="dropdown-item">Share</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#GeetFileLinkModal" class="dropdown-item">Get File's Link</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#" class="dropdown-item">Get Embed Code</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#MovetoBusinessDriveModal" class="dropdown-item">Move to Business Drive</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#MoreActionModal" class="dropdown-item">More Action</a>
										</li>
									</div>

								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
					<div class="gradient-border1 relative mytooltip-hover">
						<div class="library-block d-flex align-items-center vl-gblue-bg">
							<i class="icon-doc f-65 d-gblue-clr d-block mx-auto"></i>
							<!---- Hover Checkbox Div ---->
							<div class="smart-checkbox-btn checkbox-strong-blue">
								<input id="tcheck8" type="checkbox" class="checkbox-active">
								<label for="tcheck8"></label>
							</div>
						</div>
					</div>




					<div class="d-flex justify-content-between align-items-center mt10">
						<div class="f-14">File Name.doc | 10 KB</div>
						<div>
							<div class="dropdown simple-dropdown caret-icon-none">

								<a class="dropdown-toggle f-14 d-gblue-clr t-decoration-none cursor" data-toggle="dropdown"><i class="icon-more"></i></a>

								<div class="dropdown-menu dropdown-menu-right h-auto right-arrow m-right-arrow f-14">
									<!--- Scrollbar Div start ------->
									<div class="mCustomScrollbar f-16 h-auto" data-mcs-theme="inset-3">
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#statusModal" class="dropdown-item">Status</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#sharelinkModal" class="dropdown-item">Share</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#GeetFileLinkModal" class="dropdown-item">Get File's Link</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#" class="dropdown-item">Get Embed Code</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#MovetoBusinessDriveModal" class="dropdown-item">Move to Business Drive</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#MoreActionModal" class="dropdown-item">More Action</a>
										</li>
									</div>

								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
					<a data-toggle="modal" class="cursor" data-target="#videoModal">
					<div class="gradient-border1 relative mytooltip-hover">
						<div class="library-block d-flex align-items-center vl-gblue-bg">
							<img src="../../../../images/lib-video-img.png" class="d-block mx-auto img-fluid">
							<!----- Video icon css--->
							<a href="#" data-toggle="modal" data-target="#videoModal" class="lib-video-icon white-clr t-decoration-none"><i class="icon-total-viewed-videos f-35"></i></a>

							<!---- Hover Checkbox Div ---->
							<div class="smart-checkbox-btn checkbox-strong-blue">
								<input id="tcheck9" type="checkbox" class="checkbox-active">
								<label for="tcheck9"></label>
							</div>
						</div>
					</div>
					</a>


					<div class="d-flex justify-content-between align-items-center mt10">
						<div class="f-14">Video Name.avi | 30 MB</div>
						<div>
							<div class="dropdown simple-dropdown caret-icon-none">

								<a class="dropdown-toggle f-14 d-gblue-clr t-decoration-none cursor" data-toggle="dropdown"><i class="icon-more"></i></a>

								<div class="dropdown-menu dropdown-menu-right h-auto right-arrow m-right-arrow f-14">
									<!--- Scrollbar Div start ------->
									<div class="mCustomScrollbar f-16 h-auto" data-mcs-theme="inset-3">
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#statusModal" class="dropdown-item">Status</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#sharelinkModal" class="dropdown-item">Share</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#GeetFileLinkModal" class="dropdown-item">Get File's Link</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#" class="dropdown-item">Get Embed Code</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#MovetoBusinessDriveModal" class="dropdown-item">Move to Business Drive</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#MoreActionModal" class="dropdown-item">More Action</a>
										</li>
									</div>

								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
					<div class="gradient-border1 relative mytooltip-hover">
						<a href="#" class="t-decoration-none" data-toggle="modal" data-target="#AudioModal">
						<div class="library-block d-flex align-items-center vl-gblue-bg">
							<i class="icon-audios f-65 d-gblue-clr d-block mx-auto"></i>
							<!---- Hover Checkbox Div ---->
							<div class="smart-checkbox-btn checkbox-strong-blue">
								<input id="tcheck10" type="checkbox" class="checkbox-active">
								<label for="tcheck10"></label>
							</div>
						</div>
						</a>
					</div>



					<div class="d-flex justify-content-between align-items-center mt10">
						<div class="f-14">Audio Name.mp3 | 20 KB</div>
						<div>
							<div class="dropdown simple-dropdown caret-icon-none">

								<a class="dropdown-toggle f-14 d-gblue-clr t-decoration-none cursor" data-toggle="dropdown"><i class="icon-more"></i></a>

								<div class="dropdown-menu dropdown-menu-right h-auto right-arrow m-right-arrow f-14">
									<!--- Scrollbar Div start ------->
									<div class="mCustomScrollbar f-16 h-auto" data-mcs-theme="inset-3">
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#statusModal" class="dropdown-item">Status</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#sharelinkModal" class="dropdown-item">Share</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#GeetFileLinkModal" class="dropdown-item">Get File's Link</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#" class="dropdown-item">Get Embed Code</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#MovetoBusinessDriveModal" class="dropdown-item">Move to Business Drive</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#MoreActionModal" class="dropdown-item">More Action</a>
										</li>
									</div>

								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
					
			<!------- Library Grid View------>
			<div id="thori-scroll" class="table-responsive smart-table-style mb15 mb-md30 lib-grid-view-show d-none">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="dropdown simple-dropdown lib-check-drop-label pr0" width="12%">
						<div class="smart-checkbox-btn checkbox-strong-blue pull-left mt6">
							<input id="saerch1" type="checkbox">
							<label for="saerch1"></label>
						</div>
						<div class="dropdown-toggle pull-left f-14 p5" data-toggle="dropdown">&nbsp;</div>

						<div class="dropdown-menu stoppropagation h-auto left-arrow f-14 mt33 left-25">
							<!--- Scrollbar Div start ------->
							<div class="mCustomScrollbar f-16 h280" data-mcs-theme="inset-3">
								<li class="d-flex justify-content-between dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
										<input id="checkdrop11" type="checkbox">
										<label for="checkdrop11"> All Files </label>
									</div>
									<div class="pl20">(4000)</div>
								</li>
								<li class="d-flex justify-content-between dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
										<input id="checkdrop22" type="checkbox">
										<label for="checkdrop22"> Folders</label>
									</div>
									<div class="pl20">(500)</div>
								</li>
								<li class="d-flex justify-content-between dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
										<input id="checkdrop33" type="checkbox">
										<label for="checkdrop33"> Images </label>
									</div>
									<div class="pl20">(2000)</div>
								</li>
								<li class="d-flex justify-content-between dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
										<input id="checkdrop44" type="checkbox">
										<label for="checkdrop44"> Documents </label>
									</div>
									<div class="pl20">(500)</div>
								</li>
								<li class="d-flex justify-content-between dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
										<input id="checkdrop55" type="checkbox">
										<label for="checkdrop55"> Videos </label>
									</div>
									<div class="pl20">(500)</div>
								</li>
								<li class="d-flex justify-content-between dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
										<input id="checkdrop66" type="checkbox">
										<label for="checkdrop66"> Audios </label>
									</div>
									<div class="pl20">(500)</div>
								</li>
							</div>

						</div>
					</th>
					 <th></th>
                    <th>File Name &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Size &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Modified &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Modified by &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Status &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Actions </th>
                  </tr>
		
                </thead>
				  		<!-------- Table View Button------>
				  <a class="base-btn default-btn px8 py6 f-14" id="lib-table-view" title="Grid View"><i class="icon-thumb-view"></i></a>
				 <!----- Table Option Div Show----> 
                <div class="table-option-manage animated fadeIn ml10">
					<ul class="list-inline f-14 w400 mb0">
							<li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" data-toggle="modal" data-target="#copyModal" class="base-btn default-btn btn-h30 f-14" title="copy"><i class="icon-copy"></i> <span class="hiddenxs">Copy</span></a>
							</li>
							<li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" data-toggle="modal" data-target="#moveModal" class="base-btn default-btn btn-h30 f-14" title="Move"><i class="icon-move"></i> <span class="hiddenxs">Move</span></a>
							</li>
							<li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal" class="base-btn default-btn btn-h30 f-14" title="Delete"><i class="icon-delete"></i> <span class="hiddenxs">Delete</span></a>
							</li>
							<li class="list-inline-item mb10 mb-lg0"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Download"><i class="icon-download"></i> <span class="hiddenxs">Download</span></a>
							</li>
							<li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" data-toggle="modal" data-target="#sharelinkModal" class="base-btn default-btn btn-h30 f-14" title="Share"><i class="icon-share"></i> <span class="hiddenxs">Share</span></a>
							</li>
							<li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" data-toggle="modal" data-target="#statusModal" class="base-btn default-btn btn-h30 f-14" title="Status"><i class="icon-locked"></i> <span class="hiddenxs">Status</span></a>
							</li>
						</ul>
				
				</div>
				 <!----- Table Option Div end---->
				
				  
                <tbody>
				  <tr>
                    <td width="3%"><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="lcheck2" type="checkbox" class="checkbox-active">
                        <label for="lcheck2"></label>
                      </div></td>
                    <td class="p0 text-center"><i class="icon-folder d-gblue-clr"></i></td>
                    <td class="p-blue-clr">Folder Name</td>
                    <td>20 MB</td>
                    <td>Dec 18, 2017</td>
                    <td>Jay Prakash Nagar</td>
                    <td>Shared with 10 people</td>
                    <td><ul class="table-action">
						 <li class="action-menu"><a href="#" data-toggle="modal" data-target="#statusModal" class="action-item" title="Status"><i class="icon-locked"></i></a></li>
                        <li class="action-menu"><a href="#" data-toggle="modal" data-target="#sharelinkModal" class="action-item" title="Share"><i class="icon-share"></i></a></li>                       
                        <li class="action-menu table-action-dropdown"> <a class="dropdown-toggle action-item" data-toggle="dropdown"><span data-toggle="tooltip" data-placement="top" title="" data-original-title="More"><i class=" icon-more"></i></span> </a>
                          <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li><a href="#">Copy</a></li>
							<li><a href="#">Move</a></li>
							<li><a href="#" data-toggle="modal" data-target="#MoreActionModal">More Action</a></li>
                          </ul>
                        </li>
                      </ul></td>
                  </tr>
					<tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="lcheck3" type="checkbox" class="checkbox-active">
                        <label for="lcheck3"></label>
                      </div></td>
                    <td class="p0 text-center"><i class="icon-image d-gblue-clr"></i></td>
                    <td class="p-blue-clr">Image Name</td>
                    <td>20 MB</td>
                    <td>Dec 18, 2017</td>
                    <td>Jay Prakash Nagar</td>
                    <td>Private</td>
                    <td><ul class="table-action">
						 <li class="action-menu"><a href="#" data-toggle="modal" data-target="#statusModal" class="action-item" title="Status"><i class="icon-locked"></i></a></li>
                        <li class="action-menu"><a href="#" data-toggle="modal" data-target="#sharelinkModal" class="action-item" title="Share"><i class="icon-share"></i></a></li>                       
                        <li class="action-menu table-action-dropdown"> <a class="dropdown-toggle action-item" data-toggle="dropdown"><span data-toggle="tooltip" data-placement="top" title="" data-original-title="More"><i class=" icon-more"></i></span> </a>
                          <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li><a href="#">Copy</a></li>
							<li><a href="#">Move</a></li>
							<li><a href="#" data-toggle="modal" data-target="#MoreActionModal">More Action</a></li>
                          </ul>
                        </li>
                      </ul></td>
                  </tr>
					<tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="lcheck4" type="checkbox" class="checkbox-active">
                        <label for="lcheck4"></label>
                      </div></td>
                    <td class="p0 text-center"><i class="icon-total-viewed-videos d-gblue-clr"></i></td>
                    <td class="p-blue-clr">Video Name</td>
                    <td>20 MB</td>
                    <td>Dec 18, 2017</td>
                    <td>Jay Prakash Nagar</td>
                    <td>Shared with 10 people</td>
                    <td><ul class="table-action">
						 <li class="action-menu"><a href="#" data-toggle="modal" data-target="#statusModal" class="action-item" title="Status"><i class="icon-locked"></i></a></li>
                        <li class="action-menu"><a href="#" data-toggle="modal" data-target="#sharelinkModal" class="action-item" title="Share"><i class="icon-share"></i></a></li>
						<li class="action-menu"><a href="#" data-toggle="modal" data-target="#" class="action-item" title="Get Embed Code"><i class="icon-get-code"></i></a></li>						
                        <li class="action-menu table-action-dropdown"> <a class="dropdown-toggle action-item" data-toggle="dropdown"><span data-toggle="tooltip" data-placement="top" title="" data-original-title="More"><i class=" icon-more"></i></span> </a>
                          <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li><a href="#">Copy</a></li>
							<li><a href="#">Move</a></li>
							<li><a href="#" data-toggle="modal" data-target="#MoreActionModal">More Action</a></li>
                          </ul>
                        </li>
                      </ul></td>
                  </tr>
					<tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="lcheck5" type="checkbox" class="checkbox-active">
                        <label for="lcheck5"></label>
                      </div></td>
                    <td class="p0 text-center"><i class="icon-audios d-gblue-clr"></i></td>
                    <td class="p-blue-clr">Audio Name</td>
                    <td>20 MB</td>
                    <td>Dec 18, 2017</td>
                    <td>Jay Prakash Nagar</td>
                    <td>Private</td>
                    <td><ul class="table-action">
						 <li class="action-menu"><a href="#" data-toggle="modal" data-target="#statusModal" class="action-item" title="Status"><i class="icon-locked"></i></a></li>
                        <li class="action-menu"><a href="#" data-toggle="modal" data-target="#sharelinkModal" class="action-item" title="Share"><i class="icon-share"></i></a></li>
						<li class="action-menu"><a href="#" data-toggle="modal" data-target="#" class="action-item" title="Get Embed Code"><i class="icon-get-code"></i></a></li>						
                        <li class="action-menu table-action-dropdown"> <a class="dropdown-toggle action-item" data-toggle="dropdown"><span data-toggle="tooltip" data-placement="top" title="" data-original-title="More"><i class=" icon-more"></i></span> </a>
                          <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li><a href="#">Copy</a></li>
							<li><a href="#">Move</a></li>
							<li><a href="#" data-toggle="modal" data-target="#MoreActionModal">More Action</a></li>
                          </ul>
                        </li>
                      </ul></td>
                  </tr>
                </tbody>
              </table>
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

				<!--- Filteration Div start---->
				<div class="col-12 col-md-12 col-lg-5 col-xl-5 order-1 order-lg-2  white-bg filter-div-select transition-all">
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
                  <option>Name</option>
                  <option>Created Date</option>
                  <option>Email</option>
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
                  <select class="selectpicker f-14" title="Select Added Date / Uploaded Date">
                     <option>Added Date / Uploaded Date</option>
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
                  <select class="selectpicker f-14" title="Select Modified Date">
                     <option>Modified Date</option>
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
      </div>
   </div>

				</div>

				<!--- Filteration Div end---->

			</div>


		</div>
	</div>

</div>

<!---- Library Items Details Tooltip Div ---->
<div class="library-tooltip-div tooltipright p15 p-md20 f-12 lh180 white-clr w400">
	File Name<br> Type: Doc file<br> Size: 5kb<br> Date modified: Feb 8, 2018 at 2:40 pm<br> Modified by: Jay prakash nagar<br> Pages: 15<br> Shared: <u>Shared with 10 people</u>
</div>


<!------- Smart Footer Include File---------->
<?php include '../includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->