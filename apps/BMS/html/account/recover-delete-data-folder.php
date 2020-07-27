<!------- BMS Main Header Include File---------->
<?php include '../../../smart/html/includes/smart-header-bms.php'; ?>
<!------- BMS Main Header Include File end---------->

<!------- BMS Stylesheet Strat ------->
<link rel="stylesheet" href="../../css/bms.css">
<!------- BMS Stylesheet end ------->

<div class="container-fluid p15 p-md30">
	<!------ Header---------->
	<div class="row">
		<div class="col-12">
			<div class="d-flex align-items-center flex-wrap">
				<ul class="stepwizard-style2 f-18 f-sm-24 w400 lato-font mr15">
					<li> <a href="#"> Xander Paige</a> </li>
					<li> <a href="#"> Recover Deleted Data</a> </li>
				</ul>
				<div class="d-flex mt7">
					<a href="#" class="gblue-clr t-decoration-none f-17 mr5" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
					<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
				</div>
			</div>
			<p class="gblue-clr f-14 w400 mt5">Here you are manage your all packages</p>
		</div>
	</div>
	<!------ Header end---------->
	<!---- Blank Section ---->    
	<div class="row mt15 mt-md30 smart-form bs-h40">
		<div class="col-md-4 col-lg-2 mb10 mb-lg0">
			<select class="selectpicker f-14" title="Page">
				<option>Page</option>
			</select>
		</div>
		<div class="col-md-4 col-lg-2 mb10 mb-lg0">
			<select class="selectpicker f-14" title="All Page">
				<option>All Page</option>
			</select>
		</div>
		<div class="col-md-4 col-lg-2 mb10 mb-lg0">
			<select class="selectpicker f-14">
				<option>Business-name MyDrive</option>
				<option>Personal MyDrive</option>
			</select>
		</div>
		<div class="col-md-4 col-lg-2 mb10 mb-md0 pr-lg0">
			<div class="input-group calendar-input-group">
				<input type="text" class="caleran-ex-left form-control f-14 field-h40" id="target-cal" readonly="" data-plugin-options='{"rangeOrientation":true,"showButtons":true}' placeholder="Choose Date">
				<span class="input-group-btn caleran-show ">
					 <button class="btn calendar-btn d-gblue-clr f-19" type="button"><i class="icon-calendar"></i></button>
					</span>
			</div>
		</div>
		<div class="col-md-4 col-lg-2 mb10 mb-md0 pl-lg30 pr-lg0">
			<div class="smart-search-field">
				<div class="input-group">
					<input class="form-control" placeholder="Search" type="text">
					<div class="input-group-append">
						<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-lg-2 pl-lg30">
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
	<!------- Recovery delete data Table View------>
	<div class="row align-content-start mt-md30 mt15 relative">
		<div class="col-12 smart-checkbox-btn checkbox-strong-blue mb-md0 mb15">
			<input id="checkAll2" type="checkbox">
			<label for="checkAll2"></label>
		</div>
		<div class="table-option-manage manage animated fadeIn ml-md0 pl-md0 col-12 pt2">
			<ul class="list-inline f-14 w400 mb0">
				<li class="list-inline-item"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Recover"><i class="icon-recover"></i>&nbsp; Recover</a>
				</li>
			</ul>
		</div>
	</div>
	
	<div class="row mt-md35 mt15">
		<div class="col-12 col-md-4 col-lg-3 col-xl-2 mb15 mb-md30">
			<div class="gradient-border1 relative">
				<div class="library-block d-flex align-items-center vl-gblue-bg">
					<i class="icon-folder f-65 d-gblue-clr d-block mx-auto"></i>
					<!---- Checkbox Div ---->
					<div class="smart-checkbox-btn checkbox-strong-blue">
						<input id="tcheck1" type="checkbox" class="checkbox-active">
						<label class="d-block" for="tcheck1"></label>
					</div>
				</div>
			</div>
			<!-- File Description -->
			<div class="mt10">
				<div class="f-14 break-all">Folder Name</div>
				<div class="f-10 d-gblue-clr mt5">Created on : 10 Nov 2018</div>
				<div class="f-10 d-gblue-clr mt5">Deleted on : 25 Nov 2018</div>
			</div>
		</div>
		
		<div class="col-12 col-md-4 col-lg-3 col-xl-2 mb15 mb-md30">
			<div class="gradient-border1 relative mytooltip-hover">
				<a data-toggle="modal" class="cursor" data-target="#libraryModal">
				<div class="library-block d-flex align-items-center vl-gblue-bg">
					<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
				</div>
				</a>
				<!---- Checkbox Div ---->
				<div class="smart-checkbox-btn checkbox-strong-blue">
					<input id="tcheck2" type="checkbox" class="checkbox-active">
					<label class="d-block" for="tcheck2"></label>
				</div>
			</div>
			<!-- File Description -->
			<div class="mt10">
				<div class="f-14 break-all">Folder Name</div>
				<div class="f-10 d-gblue-clr mt5">Created on : 10 Nov 2018</div>
				<div class="f-10 d-gblue-clr mt5">Deleted on : 25 Nov 2018</div>
			</div>
		</div>
		
		<div class="col-12 col-md-4 col-lg-3 col-xl-2 mb15 mb-md30">
			<div class="gradient-border1 relative mytooltip-hover">
				<div class="library-block d-flex align-items-center vl-gblue-bg">
					<i class="icon-folder f-65 d-gblue-clr d-block mx-auto"></i>
					<!---- Checkbox Div ---->
					<div class="smart-checkbox-btn checkbox-strong-blue">
						<input id="tcheck6" type="checkbox" class="checkbox-active">
						<label class="d-block" for="tcheck6"></label>
					</div>
				</div>
			</div>
			<!-- File Description -->
			<div class="mt10">
				<div class="f-14 break-all">Folder Name</div>
				<div class="f-10 d-gblue-clr mt5">Created on : 10 Nov 2018</div>
				<div class="f-10 d-gblue-clr mt5">Deleted on : 25 Nov 2018</div>
			</div>
		</div>
		
		<div class="col-12 col-md-4 col-lg-3 col-xl-2 mb15 mb-md30">
			<div class="gradient-border1 relative mytooltip-hover">
			   <a data-toggle="modal" class="cursor" data-target="#videoModal">
					<div class="library-block d-flex align-items-center vl-gblue-bg">
						<img src="../../../../images/lib-video-img.png" class="d-block mx-auto img-fluid">
						<!----- Video icon css--->
						<span class="lib-video-icon white-clr"><i class="icon-total-viewed-videos f-35"></i></span>
					</div>
				</a>
				<!---- Checkbox Div ---->
				<div class="smart-checkbox-btn checkbox-strong-blue">
					<input id="tcheck4" type="checkbox" class="checkbox-active">
					<label class="d-block" for="tcheck4"></label>
				</div>
			</div>
			<!-- File Description -->
			<div class="mt10">
				<div class="f-14 break-all">Folder Name</div>
				<div class="f-10 d-gblue-clr mt5">Created on : 10 Nov 2018</div>
				<div class="f-10 d-gblue-clr mt5">Deleted on : 25 Nov 2018</div>
			</div>
		</div>
		
		<div class="col-12 col-md-4 col-lg-3 col-xl-2 mb15 mb-md30">
			<div class="gradient-border1 relative mytooltip-hover">
				<div class="library-block d-flex align-items-center vl-gblue-bg">
					<i class="icon-audios f-65 d-gblue-clr d-block mx-auto"></i>
					<!---- Checkbox Div ---->
					<div class="smart-checkbox-btn checkbox-strong-blue">
						<input id="tcheck5" type="checkbox" class="checkbox-active">
						<label class="d-block" for="tcheck5"></label>
					</div>
				</div>
			</div>
			<!-- File Description -->
			<div class="mt10">
				<div class="f-14 break-all">Folder Name</div>
				<div class="f-10 d-gblue-clr mt5">Created on : 10 Nov 2018</div>
				<div class="f-10 d-gblue-clr mt5">Deleted on : 25 Nov 2018</div>
			</div>
		</div>
		
		<div class="col-12 col-md-4 col-lg-3 col-xl-2 mb15 mb-md30">
			<div class="gradient-border1 relative mytooltip-hover">
				<div class="library-block d-flex align-items-center vl-gblue-bg">
					<i class="icon-doc f-65 d-gblue-clr d-block mx-auto"></i>
					<!---- Checkbox Div ---->
					<div class="smart-checkbox-btn checkbox-strong-blue">
						<input id="tcheck3" type="checkbox" class="checkbox-active">
						<label class="d-block" for="tcheck3"></label>
					</div>
				</div>
			</div>
			<!-- File Description -->
			<div class="mt10">
				<div class="f-14 break-all">Folder Name</div>
				<div class="f-10 d-gblue-clr mt5">Created on : 10 Nov 2018</div>
				<div class="f-10 d-gblue-clr mt5">Deleted on : 25 Nov 2018</div>
			</div>
		</div>
		
		<div class="col-12 col-md-4 col-lg-3 col-xl-2 mb15 mb-md30">
			<div class="gradient-border1 relative mytooltip-hover">
				<div class="library-block d-flex align-items-center vl-gblue-bg">
					<i class="icon-folder f-65 d-gblue-clr d-block mx-auto"></i>
					<!---- Checkbox Div ---->
					<div class="smart-checkbox-btn checkbox-strong-blue">
						<input id="tcheck7" type="checkbox" class="checkbox-active">
						<label class="d-block" for="tcheck7"></label>
					</div>
				</div>
			</div>
			<!-- File Description -->
			<div class="mt10">
				<div class="f-14 break-all">Folder Name</div>
				<div class="f-10 d-gblue-clr mt5">Created on : 10 Nov 2018</div>
				<div class="f-10 d-gblue-clr mt5">Deleted on : 25 Nov 2018</div>
			</div>
		</div>
		
		<div class="col-12 col-md-4 col-lg-3 col-xl-2 mb15 mb-md30">
			<div class="gradient-border1 relative mytooltip-hover">
				<a data-toggle="modal" class="cursor" data-target="#libraryModal">
				<div class="library-block d-flex align-items-center vl-gblue-bg">
					<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
				</div>
				</a>
				<!---- Checkbox Div ---->
				<div class="smart-checkbox-btn checkbox-strong-blue">
					<input id="tcheck8" type="checkbox" class="checkbox-active">
					<label class="d-block" for="tcheck8"></label>
				</div>
			</div>
			<!-- File Description -->
			<div class="mt10">
				<div class="f-14 break-all">Folder Name</div>
				<div class="f-10 d-gblue-clr mt5">Created on : 10 Nov 2018</div>
				<div class="f-10 d-gblue-clr mt5">Deleted on : 25 Nov 2018</div>
			</div>
		</div>
		
		<div class="col-12 col-md-4 col-lg-3 col-xl-2 mb15 mb-md30">
			<div class="gradient-border1 relative mytooltip-hover">
				<div class="library-block d-flex align-items-center vl-gblue-bg">
					<i class="icon-folder f-65 d-gblue-clr d-block mx-auto"></i>
					<!---- Checkbox Div ---->
					<div class="smart-checkbox-btn checkbox-strong-blue">
						<input id="tcheck9" type="checkbox" class="checkbox-active">
						<label class="d-block" for="tcheck9"></label>
					</div>
				</div>
			</div>
			<!-- File Description -->
			<div class="mt10">
				<div class="f-14 break-all">Folder Name</div>
				<div class="f-10 d-gblue-clr mt5">Created on : 10 Nov 2018</div>
				<div class="f-10 d-gblue-clr mt5">Deleted on : 25 Nov 2018</div>
			</div>
		</div>
		
		<div class="col-12 col-md-4 col-lg-3 col-xl-2 mb15 mb-md30">
			<div class="gradient-border1 relative mytooltip-hover">
				<a data-toggle="modal" class="cursor" data-target="#videoModal">
					<div class="library-block d-flex align-items-center vl-gblue-bg">
						<img src="../../../../images/lib-video-img.png" class="d-block mx-auto img-fluid">
						<!----- Video icon css--->
						<span class="lib-video-icon white-clr"><i class="icon-total-viewed-videos f-35"></i></span>
					</div>
				</a>	
				<!---- Checkbox Div ---->
				<div class="smart-checkbox-btn checkbox-strong-blue">
					<input id="tcheck10" type="checkbox" class="checkbox-active">
					<label class="d-block" for="tcheck10"></label>
				</div>
			</div>
			<!-- File Description -->
			<div class="mt10">
				<div class="f-14 break-all">Folder Name</div>
				<div class="f-10 d-gblue-clr mt5">Created on : 10 Nov 2018</div>
				<div class="f-10 d-gblue-clr mt5">Deleted on : 25 Nov 2018</div>
			</div> 
		</div>
		
		<div class="col-12 col-md-4 col-lg-3 col-xl-2 mb15 mb-md30">
			<div class="gradient-border1 relative mytooltip-hover">
				<div class="library-block d-flex align-items-center vl-gblue-bg">
					<i class="icon-audios f-65 d-gblue-clr d-block mx-auto"></i>
					<!---- Checkbox Div ---->
					<div class="smart-checkbox-btn checkbox-strong-blue">
						<input id="tcheck11" type="checkbox" class="checkbox-active">
						<label class="d-block" for="tcheck11"></label>
					</div>
				</div>
			</div>
			<!-- File Description -->
			<div class="mt10">
				<div class="f-14 break-all">Folder Name</div>
				<div class="f-10 d-gblue-clr mt5">Created on : 10 Nov 2018</div>
				<div class="f-10 d-gblue-clr mt5">Deleted on : 25 Nov 2018</div>
			</div>
		</div>
		
		<div class="col-12 col-md-4 col-lg-3 col-xl-2 mb15 mb-md30">
			<div class="gradient-border1 relative mytooltip-hover">
				<div class="library-block d-flex align-items-center vl-gblue-bg">
					<i class="icon-doc f-65 d-gblue-clr d-block mx-auto"></i>
					<!---- Checkbox Div ---->
					<div class="smart-checkbox-btn checkbox-strong-blue">
						<input id="tcheck12" type="checkbox" class="checkbox-active">
						<label class="d-block" for="tcheck12"></label>
					</div>
				</div>
			</div>
			<!-- File Description -->
			<div class="mt10">
				<div class="f-14 break-all">Folder Name</div>
				<div class="f-10 d-gblue-clr mt5">Created on : 10 Nov 2018</div>
				<div class="f-10 d-gblue-clr mt5">Deleted on : 25 Nov 2018</div>
			</div>
		</div>
		
		<div class="col-12 col-md-4 col-lg-3 col-xl-2 mb15 mb-md30">
			<div class="gradient-border1 relative mytooltip-hover">
				<div class="library-block d-flex align-items-center vl-gblue-bg">
					<i class="icon-folder f-65 d-gblue-clr d-block mx-auto"></i>
					<!---- Checkbox Div ---->
					<div class="smart-checkbox-btn checkbox-strong-blue">
						<input id="tcheck13" type="checkbox" class="checkbox-active">
						<label class="d-block" for="tcheck13"></label>
					</div>
				</div>
			</div>
			<!-- File Description -->
			<div class="mt10">
				<div class="f-14 break-all">Folder Name</div>
				<div class="f-10 d-gblue-clr mt5">Created on : 10 Nov 2018</div>
				<div class="f-10 d-gblue-clr mt5">Deleted on : 25 Nov 2018</div>
			</div>
		</div>
		
		<div class="col-12 col-md-4 col-lg-3 col-xl-2 mb15 mb-md30">
			<div class="gradient-border1 relative mytooltip-hover">
				<a data-toggle="modal" class="cursor" data-target="#libraryModal">
				<div class="library-block d-flex align-items-center vl-gblue-bg">
					<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
				</div>
				</a>
				<!---- Checkbox Div ---->
				<div class="smart-checkbox-btn checkbox-strong-blue">
					<input id="tcheck14" type="checkbox" class="checkbox-active">
					<label class="d-block" for="tcheck14"></label>
				</div>
			</div>
			<!-- File Description -->
			<div class="mt10">
				<div class="f-14 break-all">Folder Name</div>
				<div class="f-10 d-gblue-clr mt5">Created on : 10 Nov 2018</div>
				<div class="f-10 d-gblue-clr mt5">Deleted on : 25 Nov 2018</div>
			</div>
		</div>
		
		<div class="col-12 col-md-4 col-lg-3 col-xl-2 mb15 mb-md30">
			<div class="gradient-border1 relative mytooltip-hover">
				<div class="library-block d-flex align-items-center vl-gblue-bg">
					<i class="icon-folder f-65 d-gblue-clr d-block mx-auto"></i>
					<!---- Checkbox Div ---->
					<div class="smart-checkbox-btn checkbox-strong-blue">
						<input id="tcheck15" type="checkbox" class="checkbox-active">
						<label class="d-block" for="tcheck15"></label>
					</div>
				</div>
			</div>
			<!-- File Description -->
			<div class="mt10">
				<div class="f-14 break-all">Folder Name</div>
				<div class="f-10 d-gblue-clr mt5">Created on : 10 Nov 2018</div>
				<div class="f-10 d-gblue-clr mt5">Deleted on : 25 Nov 2018</div>
			</div>
		</div>
		
		<div class="col-12 col-md-4 col-lg-3 col-xl-2 mb15 mb-md30">
				<div class="gradient-border1 relative mytooltip-hover">
					<a data-toggle="modal" class="cursor" data-target="#videoModal">
						<div class="library-block d-flex align-items-center vl-gblue-bg">
							<img src="../../../../images/lib-video-img.png" class="d-block mx-auto img-fluid">
							<!----- Video icon css--->
							<span class="lib-video-icon white-clr"><i class="icon-total-viewed-videos f-35"></i></span>
						</div>
					</a>
					<!---- Checkbox Div ---->
					<div class="smart-checkbox-btn checkbox-strong-blue">
						<input id="tcheck16" type="checkbox" class="checkbox-active">
						<label class="d-block" for="tcheck16"></label>
					</div>
				</div>
			<!-- File Description -->
			<div class="mt10">
				<div class="f-14 break-all">Folder Name</div>
				<div class="f-10 d-gblue-clr mt5">Created on : 10 Nov 2018</div>
				<div class="f-10 d-gblue-clr mt5">Deleted on : 25 Nov 2018</div>
			</div>
		</div>
		
		<div class="col-12 col-md-4 col-lg-3 col-xl-2 mb15 mb-md30">
			<div class="gradient-border1 relative mytooltip-hover">
				<div class="library-block d-flex align-items-center vl-gblue-bg">
					<i class="icon-audios f-65 d-gblue-clr d-block mx-auto"></i>
					<!---- Checkbox Div ---->
					<div class="smart-checkbox-btn checkbox-strong-blue">
						<input id="tcheck17" type="checkbox" class="checkbox-active">
						<label class="d-block" for="tcheck17"></label>
					</div>
				</div>
			</div>
			<!-- File Description -->
			<div class="mt10">
				<div class="f-14 break-all">Folder Name</div>
				<div class="f-10 d-gblue-clr mt5">Created on : 10 Nov 2018</div>
				<div class="f-10 d-gblue-clr mt5">Deleted on : 25 Nov 2018</div>
			</div>
		</div>
		
		<div class="col-12 col-md-4 col-lg-3 col-xl-2 mb15 mb-md30">
			<div class="gradient-border1 relative mytooltip-hover">
				<div class="library-block d-flex align-items-center vl-gblue-bg">
					<i class="icon-doc f-65 d-gblue-clr d-block mx-auto"></i>
					<!---- Checkbox Div ---->
					<div class="smart-checkbox-btn checkbox-strong-blue">
						<input id="tcheck18" type="checkbox" class="checkbox-active">
						<label class="d-block" for="tcheck18"></label>
					</div>
				</div>
			</div>
			<!-- File Description -->
			<div class="mt10">
				<div class="f-14 break-all">Folder Name</div>
				<div class="f-10 d-gblue-clr mt5">Created on : 10 Nov 2018</div>
				<div class="f-10 d-gblue-clr mt5">Deleted on : 25 Nov 2018</div>
			</div>
		</div>
		
	</div>
	<!----- Pagination Div Start----->
	<div class="d-flex justify-content-between flex-wrap f-14">
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

<!------- Smart Footer Include File ---------->
<?php include '../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->