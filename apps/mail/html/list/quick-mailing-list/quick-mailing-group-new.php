<!------- Smart Header Include File---------->
<?php include '../../../../smart/html/includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<!------- Smart Mail Stylesheet------=------->
<link rel="stylesheet" href="../../../css/mail.css">
<!------- Smart Mail Stylesheet end---------->

<!--------- NVD3 Library Graph ------------------------>
<link href="<?php echo $basedir; ?>vendors/nvd3/nv.d3.css" rel="stylesheet" type="text/css">
<link href="<?php echo $basedir; ?>vendors/nvd3/nvd-style.css" rel="stylesheet" type="text/css">
<script src="<?php echo $basedir; ?>vendors/nvd3/d3.min.js"></script>
<script src="<?php echo $basedir; ?>vendors/nvd3/nv.d3.min.js"></script>
<script src="<?php echo $basedir; ?>vendors/nvd3/stream_layers.js"></script>

<div class="container-fluid p15 p-md30">
	<div class="row">
		<div class="col-12 col-md-7 align-self-center">
		<ul class="stepwizard-style2 w400 lato-font f-md-24 f-20">
          <li><a href="#">Quick Mailing Groups</a></li>
          <li><a href="#">New Group Name</a></li>
        </ul>
		<p class="lightgrey mt5">Configure your quick mailing group</p>
		</div>
	</div>

	<form action="" method="">
			<div class="row mt-md30 mt15">
			<div class="col-12 col-md-8 t-decoration-none">
			<div class="row">
			<div class="col-12 f-18 w400">Contacts</div>
			<div class="col-12 col-md-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#collapseInclude">
						<a class="card-title lato-font">&nbsp; Include</a> 
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select list you want to include in this mailing group." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="collapseInclude" class="collapse">
						<div class="card-body">
						<div class="row">
						<div class="col-12 col-md-12 col-lg-8 smart-form">
						<div class="form-group d-gblue-clr mb0">
						
						<div class="dropdown simple-dropdown">
							<button class="btn base-btn default-btn  btn-h50 dropdown-toggle btn-block  text-left" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret-right pull-left text-truncate pr15">Select list</span> </button>
									  <div class="dropdown-menu dropdown-menu-right w-100 h-auto f-14" aria-labelledby="dropdownMenu1">
										<!--- Searchbox Field ------->
										<div class="bs-searchbox-field stoppropagation">
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
										<div class="stoppropagation">
										  <li> <a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
											  <input id="name" type="checkbox">
											  <label for="name"> List 1</label>
											</div>
											</a> </li>
										  <li> <a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
											  <input id="email" type="checkbox">
											  <label for="email"> List 2</label>
											</div>
											</a> </li>
										  <li> <a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
											  <input id="mobile" type="checkbox">
											  <label for="mobile"> List 3</label>
											</div>
											</a> </li>
										  <li> <a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
											  <input id="company" type="checkbox">
											  <label for="company"> List 4</label>
											</div>
											</a> </li>
										  <li><a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
											  <input id="role" type="checkbox">
											  <label for="role"> List 5</label>
											</div>
											</a> </li>

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
			</div>
			</div>
			<div class="col-12 col-md-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#collapseExclude">
						<a class="card-title lato-font">&nbsp; Exclude</a> 
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select list you want to exclude from this mailing group." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="collapseExclude" class="collapse">
						<div class="card-body">
					  <div class="row">
						<div class="col-12 col-md-12 col-lg-8 smart-form">
						<div class="form-group d-gblue-clr mb0">
						<div class="dropdown simple-dropdown">
							<button class="btn base-btn default-btn  btn-h50 dropdown-toggle btn-block  text-left" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret-right pull-left text-truncate pr15">Select list</span> </button>
						    <div class="dropdown-menu dropdown-menu-right w-100 h-auto f-14" aria-labelledby="dropdownMenu1">
								<!--- Searchbox Field ------->
								<div class="bs-searchbox-field stoppropagation">
								  <div class="input-group">
									<div class="smart-checkbox-btn checkbox-strong-blue">
									  <input id="saerch2" type="checkbox">
									  <label for="saerch2" class="mb4"></label>
									</div>
									<input type="text" class="form-control" placeholder="Search">
									<div class="input-group-append">
									  <button class="btn" type="submit"> <i class="fa fa-search"></i></button>
									</div>
								  </div>
								</div>
								<!--- Scrollbar Div start ------->
								<div class="mCustomScrollbar f-14 mh-180" data-mcs-theme="inset-3">
								<div class="stoppropagation">
								  <li> <a href="javascript:void(0)" class="dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
									  <input id="List1" type="checkbox">
									  <label for="List1"> List 1</label>
									</div>
									</a> </li>
								  <li> <a href="javascript:void(0)" class="dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
									  <input id="List2" type="checkbox">
									  <label for="List2"> List 2</label>
									</div>
									</a> </li>
								  <li> <a href="javascript:void(0)" class="dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
									  <input id="List3" type="checkbox">
									  <label for="List3"> List 3</label>
									</div>
									</a> </li>
								  <li> <a href="javascript:void(0)" class="dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
									  <input id="List4" type="checkbox">
									  <label for="List4"> List 4</label>
									</div>
									</a> </li>
								  <li><a href="javascript:void(0)" class="dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
									  <input id="List5" type="checkbox">
									  <label for="List5"> List 5</label>
									</div>
									</a> </li>
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
			</div>
			</div>
			<div class="col-12 f-18 w400 mt-md30 mt15">Group Rules</div>
			<div class="col-12 col-md-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#collapseEmailStatus">
						<a class="card-title lato-font">&nbsp; Email Status</a> 
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define a rule for contact email status." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="collapseEmailStatus" class="collapse">
						<div class="card-body pb-1">
					   <div class="row"> 
						<div class="col-lg-12 col-md-12">
						<div class="row">
						<div class="col-12 col-md-12 col-lg-4 smart-form">
						<div class="form-group d-gblue-clr">
						<select class="selectpicker" title="Specific">
						<option>Specific</option>
						<option>Specific</option>
						<option>Specific</option>
						<option>Specific</option>
						</select>
						</div>
						</div>
						<div class="col-12 col-md-12 col-lg-4 smart-form">
						<div class="form-group d-gblue-clr">
						<select class="selectpicker" title="Broadcast">
						<option>Broadcast</option>
						<option>AB test</option>
						</select>
						</div>
						</div>
						<div class="col-12 col-md-12 col-lg-4 smart-form">
						<div class="form-group d-gblue-clr">
						<select class="selectpicker" title="Broadcast List">
						<option>Broadcast List</option>
						<option>Broadcast List 1</option>
						<option>Broadcast List 2</option>
						<option>Broadcast List 3</option>
						</select>
						</div>
						</div>
						<div class="col-12 col-md-12 col-lg-4 smart-form mt10">
						<div class="form-group d-gblue-clr">
						<select class="selectpicker" title="Any in last 7 days">
						<option>Any in last 7 days</option>
						<option>Select List</option>
						<option>Select List</option>
						<option>Select List</option>
						</select>
						</div>
						</div>
						<div class="col-12 col-md-12 col-lg-4 smart-form mt10">
						<div class="form-group d-gblue-clr">
						<select class="selectpicker" title="Opened">
						<option>Opened</option>
						<option>Select List</option>
						<option>Select List</option>
						<option>Select List</option>
						</select>
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
		
			
			<div class="col-12 col-md-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#collapseContactScore">
						<a class="card-title lato-font">&nbsp; Contact Score</a> 
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define a rule for contact score." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="collapseContactScore" class="collapse">
						<div class="card-body pb-1">
					   <div class="row"> 
						<div class="col-lg-11 col-md-12">
						<div class="row">
						<div class="col-12 col-md-12 col-lg-4 smart-form">
						<div class="form-group d-gblue-clr">
						<select class="selectpicker" title="Is equal to">
						<option>Is equal to</option>
						<option>Is equal to</option>
						</select>
						</div>
						</div>
						<div class="col-12 col-md-12 col-lg-4 smart-form">
						<div class="form-group d-gblue-clr">
						<input type="text" class="form-control" placeholder="">
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
			
			<div class="col-12 col-md-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#collapseContactAddedDate">
						<a class="card-title lato-font">&nbsp; Contact Added Date</a> 
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define a rule for contact acquisition date." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="collapseContactAddedDate" class="collapse">
						<div class="card-body pb-1">
					   <div class="row"> 
						<div class="col-lg-11 col-md-12">
						<div class="row">
						<div class="col-12 col-md-12 col-lg-4 smart-form">
						<div class="form-group d-gblue-clr">
						<select class="selectpicker" title="Is equal to">
						<option>Specific</option>
						<option>Specific</option>
						<option>Specific</option>
						<option>Specific</option>
						</select>
						</div>
						</div>
						<div class="col-12 col-md-12 col-lg-4 smart-form">
						<div class="input-group calendar-input-group mb15">
												<input type="text" class="caleran-ex-left form-control f-14 " id="target-cal" readonly data-plugin-options='{"rangeOrientation":true,"showButtons":true}' placeholder="Choose Date"/>
												<span class="input-group-btn caleran-show ">
													 <button class="btn calendar-btn d-gblue-clr h50 f-19" type="button"><i class="icon-calendar"></i></button>
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
			</div>
			
			<div class="col-12 col-md-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#collapseSource">
						<a class="card-title lato-font">&nbsp; Source</a> 
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define a rule for contact acquisition source." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="collapseSource" class="collapse">
						<div class="card-body pb-1">
					   <div class="row"> 
						<div class="col-lg-11 col-md-12">
						<div class="row">
						<div class="col-12 col-md-12 col-lg-4 smart-form">
						<div class="form-group d-gblue-clr">
						<select class="selectpicker" title="Pages">
						<option>Pages</option>
						<option>Pages</option>
						<option>Pages</option>
						<option>Pages</option>
						</select>
						</div>
						</div>
						<div class="col-12 col-md-12 col-lg-4 smart-form">
						<div class="form-group d-gblue-clr">
						<select class="selectpicker" title="Is equal to">
						<option>Select List</option>
						<option>Select List</option>
						<option>Select List</option>
						</select>
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
			
			<div class="col-12 col-md-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#collapseUserAttributes">
						<a class="card-title lato-font">&nbsp; User Attributes</a> 
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define a rule for some specific user attributes." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="collapseUserAttributes" class="collapse">
						<div class="card-body pb-1">
					   <div class="row"> 
						<div class="col-lg-11 col-md-12">
						<div class="row">
						<div class="col-12 col-md-12 col-lg-4 smart-form">
						<div class="form-group d-gblue-clr">
						<select class="selectpicker" title="Name">
						<option>Name</option>
						<option>Name</option>
						<option>Name</option>
						<option>Name</option>
						</select>
						</div>
						</div>
						<div class="col-12 col-md-12 col-lg-4 smart-form">
						<div class="form-group d-gblue-clr">
						<select class="selectpicker" title="Is equal to">
						<option>Is equal to</option>
						<option>Is equal to</option>
						<option>Is equal to</option>
						<option>Is equal to</option>
						</select>
						</div>
						</div>
						<div class="col-12 col-md-12 col-lg-4 smart-form">
						<div class="form-group d-gblue-clr">
						<select class="selectpicker" title="Is equal to">
						<option>Is equal to</option>
						<option>Is equal to</option>
						<option>Is equal to</option>
						<option>Is equal to</option>
						</select>
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
			<div class="col-12 col-md-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#collapseTag">
						<a class="card-title lato-font">&nbsp; Tag</a> 
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select a tag you want to include." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="collapseTag" class="collapse">
						<div class="card-body pb-1">
					   <div class="row"> 
						<div class="col-lg-11 col-md-12">
						<div class="row">
						<div class="col-12 col-md-12 col-lg-6 smart-form">
						<div class="form-group d-gblue-clr">
						<select class="selectpicker" data-live-search="true"  multiple="multiple" data-selected-text-format="count > 3"  title="Select tag">
						<option>Select Tag</option>
						<option>Select Tag</option>
						<option>Select Tag</option>
						<option>Select Tag</option>
						<option>Select Tag</option>
						<option>Select Tag</option>
						</select>
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
			
			<div class="col-12 mt-md30 mt15">
			<div class="smart-form mt-md8 f-16">
			<div class="smart-checkbox-btn checkbox-strong-blue">
			<input id="includeContact" name="includecontact" type="checkbox">
			<label for="includeContact" class="d-inline">Include the upcoming contacts also.</label>
			</div>
			</div>
			</div>
			
			<div class="col-12 mt-md30 mt15 set-time-drop" id="UpcomingContact">
			<div class="vl-gblue-bg p20 radius5 l-gblue-border">
			  <div class="d-flex justify-content-start flex-wrap">
									<div class="smart-radio-btn radio-strong-blue mr25 publish-radio">
										<input name="chkPassPort" id="Not-Select" value="option1" type="radio" checked="">
										<label for="Not-Select"> Never ends </label>
									</div>
									<div class="smart-radio-btn radio-strong-blue draft-radio">
										<input name="chkPassPort" id="select-date" value="option1" type="radio">
										<label for="select-date"> Select date & time </label>
									</div>
								</div>
								
									<div id="timeshow" class="mt15">
									<div class="d-flex smart-form justify-content-start flex-wrap align-items-center">
										<div class="col-lg-4 col-md-12 col-12 pl0 pr0 pr-md15">
											<div class="input-group calendar-input-group mb10 mb-lg0">
												<input type="text" class="form-control f-14 " id="dob-primary-target" readonly placeholder="Choose Date"/>
												<span class="input-group-btn" id="dob-primary">
													 <button class="btn calendar-btn d-gblue-clr h50 f-19" type="button"><i class="icon-calendar"></i></button>
													</span>
											</div>
										</div>
										<div class="pr15 pr15 pl-md5">at</div>
										<div class="px5 mb10 mb-md0">
											<select class="selectpicker f-14">
												<option>01</option>
												<option>02</option>
												<option>03</option>
												<option>04</option>
												<option>05</option>
												<option>06</option>
												<option>07</option>
												<option>08</option>
												<option>09</option>
												<option>10</option>
												<option>11</option>
												<option>12</option>
											</select>
										</div>
										<div class="px5">:</div>
										<div class="px5 mb10 mb-md0">
											<select class="selectpicker f-14">
												<option>01</option>
												<option>02</option>
												<option>03</option>
												<option>04</option>
												<option>05</option>
												<option>06</option>
												<option>07</option>
												<option>08</option>
												<option>09</option>
												<option>10</option>
												<option>11</option>
												<option>12</option>
											</select>
										</div>
										<div class="px-md5 mb10 mb-md0">
											<select class="selectpicker f-14">
												<option>AM</option>
												<option>PM</option>

											</select>
										</div>

									</div>
								</div>
							
			</div>
			</div>
		
			</div>
			</div>
			<div class="col-12 col-md-4">
            <div class="row">
             <div class="col-12 mt15 mt-md0">
				<div id="segment-donut-chart" class="mx-auto">
					<svg></svg>
				</div>
			 </div>
            <div class="col-12 text-right">
            <div class="sticky-donut-btn">
			<input type="button" value="Cancel" class="base-btn default-btn"> &nbsp;
			<input type="submit" value="Save" class="base-btn blue-btn"></div>
			</div>
            </div>            
			</div>
			</div>

	</form>
</div>
<!------- Smart Footer Include File---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->