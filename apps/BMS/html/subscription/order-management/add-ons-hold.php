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
			<span class="f-20 f-md-24 lato-font">Demo Package Name</span> &nbsp;
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="gblue-clr f-14 w400 mt5">Here you are manage your all accounts details</p>
		</div>
		<div class="col-12">
			<div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md30">
				<div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span><i class="fa fa-check"></i></span></div>
					<div class="title align-self-center">Choose The Feature</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				</div>
				<div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span> 2</span></div>
					<div class="title align-self-center">Add Ons & Prices</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				</div>
				<div class="d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span> 3</span></div>
					<div class="title align-self-center">Preview & Update</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				</div>
			</div>
		</div>
	</div>
	<!------- Header End ----------->

	<!---------- Add Ons Section --------->
	<div class="row segment-accordion">
		<div class="col-12 accordion"  id="accordion">
			<!-- Add Ons First--> 
			<div class="row">
				<div class="col-12 col-md-12 col-xl-12">
					<div class="card mb-0 f-16">
						<div class="card-header" data-toggle="collapse" href="#AddOn1" aria-expanded="true">
							<a class="card-title lato-font">&nbsp; Addon Option</a>
						</div>
						<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
						<div id="AddOn1" class="collapse show" data-parent="#accordion">
								
                            	<div class="card-body smart-form">
								<div class="row">
									<div class="col-12 mb-md30 mb15">
										<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
										<input id="DummyTextHere" class="checkbox-active" type="checkbox" checked disabled>
										<label for="DummyTextHere" class="mb0">All features chosen in the first step</label>
										</div>
									</div>
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
											<input type="text" class="form-control" placeholder="Visitors" value="50">
											</div>
											<div class="col-12 col-md-3 mt10 mt-md0">
												<div class="label-active smart-checkbox-btn checkbox-strong-blue d-flex float-right float-md-left">
												<input id="Contacts" type="checkbox">
												<label for="Contacts" class="mb0 l-gblue-clr">Unlimited</label>
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
											<input type="text" class="form-control" placeholder="Accounts" value="50">
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
											<div class="col-12 col-md-3 f-14 pr0">
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
												Notifications
											</div>
											<div class="col-12 col-md-5 mt15 mt-md0">
											<input type="text" class="form-control" placeholder="Notifications" value="50">
											</div>
											<div class="col-12 col-md-3 mt10 mt-md0">
												<div class="label-active smart-checkbox-btn checkbox-strong-blue d-flex float-right float-md-left">
												<input id="Notifications" type="checkbox">
												<label for="Notifications" class="mb0 l-gblue-clr">Unlimited</label>
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
								</div>
								<div class="row smart-form mt-md35 mt15">
									<div class="col-12 f-16 w500 mb-md30 mb15">Addon Prices</div>
									
									<div class="col-12 clear">
										<div class="row align-items-center">
										<div class="col-12 col-md-5  col-xl-3 new-package-form">
											<label class="d-gblue-clr">Price</label>
											<div class="input-group">
												<input type="text" class="form-control radiusrb0" placeholder="Enter Price" aria-label="" aria-describedby="basic-addon1" value="150">
												<div class="input-group-append">
													<select class="selectpicker f-14">
														<option>$</option>
														<option>Rs</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-12 col-md-4 col-xl-3 mt-md0 mt15">
											<div class="d-flex row align-items-center">
												<div class="col-10 col-md-8">
													<label class="d-gblue-clr">Duration</label>
													<select class="selectpicker f-14">
														<option>Monthly</option>
														<option>Half-Yearly</option>
														<option>Yearly</option>
													</select>
												</div>
												<a href="#" class="d-inline-block p-blue-clr segment-add f-16 mt-md25 mt15 px15 t-decoration-none">
												<i class="icon-add-three"></i></a>
											</div>
										</div>
										<div class="col-12 col-md-3 col-xl-4 mt-md0 mt15 f-14 mt-md20 mt15">Suggested price <span class="w500 vd-gblue-clr">$50</span><span class="w500 vi-red-clr">*</span>
										</div>
										</div>
									</div>
									
									<div class="col-12">
									<div class="row align-items-center">
									<div class="col-12 col-md-5 col-xl-3 mt-md20 mt15 new-package-form">
										<label class="d-gblue-clr">Price</label>
										<div class="input-group">
											<input type="text" class="form-control radiusrb0" placeholder="Enter Price" aria-label="" aria-describedby="basic-addon1" value="150">
											<div class="input-group-append">
												<select class="selectpicker f-14">
													<option>$</option>
													<option>Rs</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 mt-md20 mt15">
										<div class="d-flex row align-items-center">
											<div class="col-9 col-md-8">
												<label class="d-gblue-clr">Duration</label>
												<select class="selectpicker f-14" title="Half-Yearly">
													<option>Monthly</option>
													<option>Half-Yearly</option>
													<option>Yearly</option>
												</select>
											</div>
											<a href="#" class="d-inline-block d-gblue-clr segment-delete mt15 mt-md25 px10 f-16 t-decoration-none"><i class="icon-delete"></i></a>
											<a href="#" class="d-inline-block p-blue-clr segment-add f-16 mt15 mt-md25 px5 t-decoration-none"><i class="icon-add-three"></i></a>
										</div>
									</div>
									<div class="col-12 col-md-3 col-xl-4 mt-md45 mt15 f-14 mt15">Suggested price <span class="w500 vd-gblue-clr">$50</span><span class="w500 vi-red-clr">*</span>
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
		
		<!-- Back Cancel And Next Button -->
		<div class="text-right f-16 col-12 mt-md30 mt15">
        	<a href="javascript:void(0)" class="base-btn default-btn btn-xs-block mr5">
            &nbsp;Save as Draft&nbsp;</a>
			<a href="javascript:void(0)" class="base-btn default-btn btn-xs-block mt10 mt-md0 mr5">&nbsp;Back&nbsp;</a>
			<a href="javascript:void(0)" class="base-btn default-btn btn-xs-block mt10 mt-md0 mr5">Cancel</a>
			<a href="#" class="base-btn blue-btn btn-xs-block mt10 mt-md0">&nbsp;Next&nbsp;</a>
		</div>
	</div>
</div>

<!------- Smart Footer Include File ---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->