<!------- MyDrive Header Include File---------->
<?php include '../includes/mydrive-header.php'; ?>
<!------- MyDrive Header Include File end---------->

<!------- MyDrive Stylesheet------=------->
<link rel="stylesheet" href="../../css/mydrive.css">
<!------- MyDrive Stylesheet end---------->

<div class="container-fluid p15 p-md30">
	<div class="row align-items-center">
		<div class="col-12">
			<span class="f-md-24 f-20 lato-font">Folder Name</span>
			<p class="lightgrey mt5">Here you are manage your all accounts details</p>
		</div>
	</div>
	<div class="row mt-md30 mt15">
		<!----Filter Option List Start--->
		<div class="col-12">
			<div class="row bs-h40">
			   <div class="col-12 col-md-5 col-xl-4">
				   <div class="row">
						<div class="col-12 col-md-6 mb10 mb-md0">
							<select class="selectpicker" title="All Files (4000)">
								<option>All Files (4000)</option>
								<option>Recently updated in 24 hours (500)</option>
								<option>Uploaded in last 24 hours (330)</option>
							</select>
						</div>
						<div class="col-12 col-md-6 mb10 mb-md0">
							<select class="selectpicker f-14" title="All Status">
							  <option>All Status</option>
							  <option>Public</option>
							  <option>Protected</option>
							  <option>Private</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-7 col-xl-8">
					<div class="row">
						<div class="col-md-7 col-lg-6 col-lg-4 offset-lg-2 col-xl-4 offset-xl-5 mb10 mb-md0">
							<div class="smart-search-field">
								<div class="input-group">
									<input class="form-control" placeholder="Search" type="text">
									<div class="input-group-append">
										<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-5 col-lg-4 col-xl-3">
							<div class="row">
								<div class="col-3 col-md-4 col-lg-4 d-flex align-self-center f-14">Show</div>
								<div class="col-9 col-md-8 col-lg-8">
									<select class="selectpicker f-14">
										<option>08</option>
										<option>09</option>
										<option>10</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
		<!----Filter Option List End--->
		<div class="col-12 mt20">
			<div id="thori-scroll" class="table-responsive smart-table-style">
			  <table class="table table-bordered">
				<thead>
				  <tr>
					<th width="4%"><div class="smart-checkbox-btn checkbox-strong-blue">
						<input id="checkAll" type="checkbox">
						<label for="checkAll"></label>
					  </div></th>
					<th></th>
					<th>File/Folder Name &nbsp;<i class="fa fa-sort"></i></th>
					<th>Size &nbsp;<i class="fa fa-sort"></i></th>
					<th>Status &nbsp;<i class="fa fa-sort"></i></th>
					<th>Actions</th>
				  </tr>
				</thead>
				 <!----- Table Option Div Show----> 
				<div class="table-option-manage animated fadeIn">
					<ul class="list-inline f-14 w400 mb0">
					<li class="list-inline-item"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Download"><i class="icon-download"></i> Download</a></li>
					</ul>
				</div>
				 <!----- Table Option Div end----> 
				<tbody>
				  <tr>
					<td><div class="smart-checkbox-btn checkbox-strong-blue">
						<input id="tcheck2" type="checkbox" class="checkbox-active">
						<label for="tcheck2"></label>
					  </div>
					</td>
					<td class="p0 text-center"><i class="icon-audios d-gblue-clr"></i></td>
					<td><a href="#" class="w400 p-blue-clr t-decoration-none">Audio Name</a></td>
					<td>20 MB</td>
					<td>Public</td>
					<td><ul class="table-action">
					<li class="action-menu"><a href="#" class="action-item" title="View"><i class="icon-show"></i></a></li>
					<li class="action-menu"><a href="#" class="action-item" title="Download"><i class="icon-download"></i></a></li>
					</ul>
					</td>
				  </tr>
				  <tr>
					<td><div class="smart-checkbox-btn checkbox-strong-blue">
						<input id="tcheck22" type="checkbox" class="checkbox-active">
						<label for="tcheck22"></label>
					  </div>
					</td>
					<td class="p0 text-center"><i class="icon-folder d-gblue-clr"></i></td>
					<td><a href="#" class="w400 p-blue-clr t-decoration-none">Subfolder Name</a></td>
					<td>20 MB</td>
					<td>Public</td>
					<td><ul class="table-action">
					<li class="action-menu"><a href="#" class="action-item" title="View"><i class="icon-show"></i></a></li>
					<li class="action-menu"><a href="#" class="action-item" title="Download"><i class="icon-download"></i></a></li>
					</ul>
					</td>
				  </tr>
				  <tr>
					<td><div class="smart-checkbox-btn checkbox-strong-blue">
						<input id="tcheck3" type="checkbox" class="checkbox-active">
						<label for="tcheck3"></label>
					  </div>
					</td>
					<td class="p0 text-center"><i class="icon-image d-gblue-clr"></i></td>
					<td><a href="#" class="w400 p-blue-clr t-decoration-none">Image Name</a></td>
					<td>10 MB</td>
					<td>Public</td>
					<td><ul class="table-action">
					<li class="action-menu"><a href="#" class="action-item" title="View"><i class="icon-show"></i></a></li>
					<li class="action-menu"><a href="#" class="action-item" title="Download"><i class="icon-download"></i></a></li>
					</ul>
					</td>
				  </tr>
				  <tr>
					<td><div class="smart-checkbox-btn checkbox-strong-blue">
						<input id="tcheck4" type="checkbox" class="checkbox-active">
						<label for="tcheck4"></label>
					  </div>
					</td>
					<td class="p0 text-center"><i class="icon-doc d-gblue-clr"></i></td>
					<td><a href="#" class="w400 p-blue-clr t-decoration-none">File Name</a></td>
					<td>10 KB</td>
					<td>Protected</td>
					<td><ul class="table-action">
					<li class="action-menu"><a href="#" class="action-item" title="View"><i class="icon-show"></i></a></li>
					<li class="action-menu"><a href="#" class="action-item" title="Download"><i class="icon-download"></i></a></li>
					</ul>
					</td>
				  </tr>
				  <tr>
					<td><div class="smart-checkbox-btn checkbox-strong-blue">
						<input id="tcheck5" type="checkbox" class="checkbox-active">
						<label for="tcheck5"></label>
					  </div>
					</td>
					<td class="p0 text-center"><i class="icon-total-viewed-videos d-gblue-clr"></i></td>
					<td><a href="#" class="w400 p-blue-clr t-decoration-none">Video Name</a></td>
					<td>30 MB</td>
					<td>Public</td>
					<td><ul class="table-action">
					<li class="action-menu"><a href="#" class="action-item" title="View"><i class="icon-show"></i></a></li>
					<li class="action-menu"><a href="#" class="action-item" title="Download"><i class="icon-download"></i></a></li>
					</ul>
					</td>
				  </tr>
				  <tr>
					<td><div class="smart-checkbox-btn checkbox-strong-blue">
						<input id="tcheck6" type="checkbox" class="checkbox-active">
						<label for="tcheck6"></label>
					  </div>
					</td>
					<td class="p0 text-center"><i class="icon-audios d-gblue-clr"></i></td>
					<td><a href="#" class="w400 p-blue-clr t-decoration-none">Audio Name Audio Name Audio Name</a></td>
					<td>20 MB</td>
					<td>Public</td>
					<td><ul class="table-action">
					<li class="action-menu"><a href="#" class="action-item" title="View"><i class="icon-show"></i></a></li>
					<li class="action-menu"><a href="#" class="action-item" title="Download"><i class="icon-download"></i></a></li>
					</ul>
					</td>
				  </tr>
				  <tr>
					<td><div class="smart-checkbox-btn checkbox-strong-blue">
						<input id="tcheck7" type="checkbox" class="checkbox-active">
						<label for="tcheck7"></label>
					  </div>
					</td>
					<td class="p0 text-center"><i class="icon-doc d-gblue-clr"></i></td>
					<td><a href="#" class="w400 p-blue-clr t-decoration-none">File Name</a></td>
					<td>10 KB</td>
					<td>Protected</td>
					<td><ul class="table-action">
					<li class="action-menu"><a href="#" class="action-item" title="View"><i class="icon-show"></i></a></li>
					<li class="action-menu"><a href="#" class="action-item" title="Download"><i class="icon-download"></i></a></li>
					</ul>
					</td>
				  </tr>
				  <tr>
					<td><div class="smart-checkbox-btn checkbox-strong-blue">
						<input id="tcheck8" type="checkbox" class="checkbox-active">
						<label for="tcheck8"></label>
					  </div>
					</td>
					<td class="p0 text-center"><i class="icon-total-viewed-videos d-gblue-clr"></i></td>
					<td><a href="#" class="w400 p-blue-clr t-decoration-none">Video Name</a></td>
					<td>30 MB</td>
					<td>Public</td>
					<td><ul class="table-action">
					<li class="action-menu"><a href="#" class="action-item" title="View"><i class="icon-show"></i></a></li>
					<li class="action-menu"><a href="#" class="action-item" title="Download"><i class="icon-download"></i></a></li>
					</ul>
					</td>
				  </tr>
				  <tr>
					<td><div class="smart-checkbox-btn checkbox-strong-blue">
						<input id="tcheck9" type="checkbox" class="checkbox-active">
						<label for="tcheck9"></label>
					  </div>
					</td>
					<td class="p0 text-center"><i class="icon-audios d-gblue-clr"></i></td>
					<td><a href="#" class="w400 p-blue-clr t-decoration-none">Audio Name Audio Name Audio Name</a></td>
					<td>20 MB</td>
					<td>Public</td>
					<td><ul class="table-action">
					<li class="action-menu"><a href="#" class="action-item" title="View"><i class="icon-show"></i></a></li>
					<li class="action-menu"><a href="#" class="action-item" title="Download"><i class="icon-download"></i></a></li>
					</ul>
					</td>
				  </tr>
				  <tr>
					<td><div class="smart-checkbox-btn checkbox-strong-blue">
						<input id="tcheck10" type="checkbox" class="checkbox-active">
						<label for="tcheck10"></label>
					  </div>
					</td>
					<td class="p0 text-center"><i class="icon-audios d-gblue-clr"></i></td>
					<td><a href="#" class="w400 p-blue-clr t-decoration-none">Audio Name Audio Name Audio Name</a></td>
					<td>20 MB</td>
					<td>Public</td>
					<td><ul class="table-action">
					<li class="action-menu"><a href="#" class="action-item" title="View"><i class="icon-show"></i></a></li>
					<li class="action-menu"><a href="#" class="action-item" title="Download"><i class="icon-download"></i></a></li>
					</ul>
					</td>
				  </tr>
				  <tr>
					<td><div class="smart-checkbox-btn checkbox-strong-blue">
						<input id="tcheck11" type="checkbox" class="checkbox-active">
						<label for="tcheck11"></label>
					  </div>
					</td>
					<td class="p0 text-center"><i class="icon-audios d-gblue-clr"></i></td>
					<td><a href="#" class="w400 p-blue-clr t-decoration-none">Audio Name Audio Name Audio Name</a></td>
					<td>20 MB</td>
					<td>Public</td>
					<td><ul class="table-action">
					<li class="action-menu"><a href="#" class="action-item" title="View"><i class="icon-show"></i></a></li>
					<li class="action-menu"><a href="#" class="action-item" title="Download"><i class="icon-download"></i></a></li>
					</ul>
					</td>
				  </tr>
				  <tr>
					<td><div class="smart-checkbox-btn checkbox-strong-blue">
						<input id="tcheck12" type="checkbox" class="checkbox-active">
						<label for="tcheck12"></label>
					  </div>
					</td>
					<td class="p0 text-center"><i class="icon-others d-gblue-clr"></i></td>
					<td><a href="#" class="w400 p-blue-clr t-decoration-none">Audio Name Audio Name Audio Name</a></td>
					<td>20 MB</td>
					<td>Public</td>
					<td><ul class="table-action">
					<li class="action-menu"><a href="#" class="action-item" title="View"><i class="icon-show"></i></a></li>
					<li class="action-menu"><a href="#" class="action-item" title="Download"><i class="icon-download"></i></a></li>
					</ul>
					</td>
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
						<option>08</option>
						<option>09</option>
						<option>10</option>
					</select>
					</span>
					<span class="d-none d-xl-block">Showing 1 to 8 of 400 entries</span>
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
	</div>
</div>
	   
<!------- MyDrive Footer Include File---------->
<?php include '../includes/mydrive-footer.php'; ?>
<!------- MyDrive Footer Include File end ---------->