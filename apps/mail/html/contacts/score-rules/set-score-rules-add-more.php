<!------- Smart Header Include File---------->
<?php include '../../../../smart/html/includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<!------- Smart Mail Stylesheet------=------->
<link rel="stylesheet" href="../../../css/mail.css">
<!------- Smart Mail Stylesheet end---------->

<div class="container-fluid p15 p-md30">
	<div class="row">
		<div class="col-12 col-md-12 col-lg-12">
		<span class="f-md-24 f-20 lato-font">Score Rule Name</span> &nbsp;
		<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
		<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
		<p class="lightgrey mt5">Configure your score rule</p>
		</div>
		<div class="col-12 segment-accordion mt-md30 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed ScoreRule-collapsed px15 radiusb0" data-toggle="collapse" href="#collapseurl">
						<a class="card-title lato-font"> Choose Contact Score</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define score rule details & expiry time." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="collapseurl" class="collapse show">
						<div class="card-body">
						<div class="row">
							<div class="col-md-12 col-12 col-lg-5">
								<div class="d-flex smart-form justify-content-start flex-wrap align-items-center">
											<div class="pr10 mb10 mb-lg0 d-gblue-clr f-14">Score</div>
											<div class="px-md10 px0 mb10 mb-lg0  col-lg-4 col-md-4 col-12">
												<select class="selectpicker f-14">
													<option>Add</option>
													<option>Subtract</option>
													
												</select>
											</div>
											<div class="px-md10 px0 mb10 mb-lg0 col-lg-4 col-md-4 col-12">
												<input type="text" name="" class="form-control" placeholder="Enter the value">
											</div>
								</div>
							</div>
							<div class="col-12 col-md-12 col-lg-7 mt10 mt-md0 pr-md0">
								<div class="d-flex smart-form justify-content-start flex-wrap align-items-center">
											<div class="pr10 mb10 mb-lg0 d-gblue-clr f-14">Expiring In</div>
											<div class="px-md10 px0 mb10 mb-md0  col-lg-3 col-md-4 col-12">
												<select class="selectpicker f-14">
													<option>Never</option>
													<option>Specific</option>
												</select>
											</div>
											<div class="px-md10 px0 mb10 mb-md0  col-lg-3 col-md-4 col-12">
												<select class="selectpicker f-14">
													<option>Hours</option>
													<option>Days</option>
													<option>Weeks</option>
													<option>Months</option>
													<option>Years</option>
												</select>
											</div>
											<div class="px-md10 px0 col-lg-2 col-md-2 col-12 m-w70">
												<input type="text" name="" class="form-control px10 text-lg-center" placeholder="00">
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
        <div class="row mt15 mt-md30">
          <div class="col-12 col-md-12 col-lg-12 t-decoration-none">
        
				<p class="f-18 w400  lh130">Configure Score Rule</p>
				
			<div class="row mt-md15">
			    <div class="col-12 col-md-6 col-lg-3 mt15">
				<div class="smart-form d-flex">
				<select class="selectpicker f-14">
					<option>Choose the source</option>
					<option>Option 1</option>
					<option>Option 2</option>
					<option>Option 3</option>
					<option>Option 4</option>
				</select>
				 &nbsp; &nbsp; &nbsp;<a href="#" class="p-blue-clr align-self-center f-16"><i class="icon-add-three"></i></a>
				</div>
				</div>
            </div>
			 <div class="row mt-md15">
			    <div class="col-12 col-md-4 col-lg-3 mt15">
				<select class="selectpicker f-14">
					<option>Email Status</option>
					<option>Email Status</option>
					<option>Email Status</option>
				</select>
				</div>
				<div class="col-12 col-md-4 col-lg-3  mt15">
				<select class="selectpicker f-14">
					<option>Specific</option>
					<option>Specific</option>
					<option>Specific</option>
				</select>
				</div>
				<div class="col-12 col-md-4 col-lg-3  mt15">
				<div class="smart-form d-flex">
				<select class="selectpicker f-14">
					<option>Broadcast Name</option>
					<option>Broadcast Name</option>
					<option>Broadcast Name</option>
				</select>
				 &nbsp; &nbsp; &nbsp; <a href="#" class="align-self-center f-16 filter-delete-icon"><i class="icon-delete"></i></a>
				</div>
				</div>
            </div> 
			<div class="row justify-content-md-center mt15 mt-md30">
				<div class="col-12 col-md-6 col-xl-4">
					<div class="row">
						<div class="col-12 col-md-4 col-xl-4 d-none d-md-block">
						<div class="andor-seperator mt16"></div>
						</div>
						<div class="col-12 col-md-4 col-xl-4 p0 text-center">
						<div class="switch-field">
						<input type="radio" id="browser-and" name="browser" value="and" />
						<label for="browser-and" class="switch_left mb0">And</label>
						<input type="radio" id="browser-or" name="browser" value="or" />
						<label for="browser-or" class="switch_right mb0">Or</label>
						</div>
						</div>
						<div class="col-12 col-md-4 col-xl-4 d-none d-md-block">
						<div class="andor-seperator mt16"></div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row  mt-md15">
			    <div class="col-12 col-md-4 col-lg-3 mt15">
				<select class="selectpicker f-14">
					<option>Custom Fields</option>
					<option>Custom Fields</option>
					<option>Custom Fields</option>
				</select>
				</div>
				<div class="col-12 col-md-4 col-lg-3  mt15">
				<select class="selectpicker f-14">
					<option>Email</option>
					<option>Email</option>
					<option>Email</option>
				</select>
				</div>
				<div class="col-12 col-md-4 col-lg-3  mt15">
				<select class="selectpicker f-14">
					<option>Is Equals To</option>
					<option>Is Equals To</option>
					<option>Is Equals To</option>
				</select>
				</div>
				<div class="col-12 col-md-4 col-lg-3  mt15">
				<div class="smart-form d-flex">
				<select class="selectpicker f-14">
					<option>Email Address</option>
					<option>Email Address</option>
					<option>Email Address</option>
				</select>
				 &nbsp; &nbsp; &nbsp; <a href="#" class="mt15 f-16 filter-delete-icon mr10"><i class="icon-delete"></i></a>
				 <a href="#" class="p-blue-clr align-self-center f-16"><i class="icon-add-three"></i></a>
				</div>
				</div>
            </div>
		</div>

		<div class="col-12 col-md-12 col-lg-12">            
			<div class="row d-flex align-items-center">
			<div class="col-12 col-md-6 mt-md30 mt15">
			<div class="smart-form mt-md8 f-16">
			<div class="smart-checkbox-btn checkbox-strong-blue">
			<input id="checkbox1" type="checkbox">
			<label for="checkbox1" class="d-inline"> Apply to all previously added contacts</label>
			</div>
			</div>
			</div>
	
			<div class="col-12 col-md-6 mt-md30 mt15 text-right">
			<a href="#" class="base-btn default-btn f-16 btn-xs-block mr5 mb15 mb-md0">Cancel</a>
				<button type="submit" class="base-btn blue-btn f-16  btn-xs-block">Save & Apply</button>
			</div>
			</div>
        </div>
        </div>
      </div>

<!------- Smart Footer Include File---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->