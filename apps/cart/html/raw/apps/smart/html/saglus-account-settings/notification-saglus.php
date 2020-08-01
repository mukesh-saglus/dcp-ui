<!------- Smart Header Include File---------->
<?php include '../includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->



<!------- Header Start----------->
<div class="container-fluid p15 px-md30 py-md30">
	<div class="row">
		<div class="col-12 col-md-7 align-self-center">
			<span class="f-20 f-md-24 lato-font">Notification Settings </span>&nbsp; <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="gblue-clr f-14 w400 mt5">Configure DotComPal & Email notifications settings</p>
		</div>

	</div>
</div>
<!------- Header End ----------->

<!------- Tabs Start ----------->
<ul class="nav tabs-style3 f-14 f-md-16 w-100 relative" role="tablist">
	<li class="nav-item ml15 ml-md30">
		<a class="nav-link active lh110" href="notification-saglus.php">
		<span class="d-none d-md-block">DotcomPal Notification
		</span>
		<span class="d-block d-md-none"><i class="icon-saglus-help f-18"></i></span></a>
	
	</li>
	<li class="nav-item">
		<a class="nav-link lh110" href="notification-email.php">
		<span class="d-none d-md-block">Email Notification
		</span>
		<span class="d-block d-md-none"><i class="icon-mail f-18"></i></span>
	</a>
	
	</li>

</ul>
<!------- Tabs End ----------->


<div class="container-fluid p15 p-md30">
	<div class="row">
		<div class="col-12">
			
			<div class="d-flex justify-content-start mb15 mb-md20">
				<div class="mr15 mr-md20"><span class="notification-circle"><i class="icon-smart-marketers f-14"></i></span>
				</div>
				<div class="f-14">
					<p class="w500 lh140">Activity that envolves your team members</p>
					<span class="d-gblue-clr lh140">You’ll always get notification about activity that envolves your team members.</span>

					<div class="d-block clearfix mt15 mt-md30">
						<label class="switchtoggle-btn mb15 mb-md20">
							<input class="switchtoggle-input" type="checkbox" checked>
							<span class="switchtoggle-label" data-on="On" data-off="Off"></span> <span class="switchtoggle-handle"></span>
						</label>
                        <div class="mb15 mb-md20">				
                            <div class="f-14">
                                <p class="w500 lh140">Choose the team member</p>
                            </div>
                            <div class="mt-md20 mt15">
                            <div class="form-group mb0 row">	
                            <div class="col-12 col-md-10 col-lg-8 bs-h40">
                            <select class="selectpicker f-14" name="lead" title="Select One" data-live-search="true">
                                <option>Lead One</option>
                                <option>Lead two</option>
                                <option>Lead three</option>
                            </select>
                            </div>
                            </div>
                            </div>
            
                        </div>
					</div>

				</div>

			</div>
            
            
            
            
            
			
			<div class="d-flex justify-content-start mb15 mb-md20">
				<div class="mr15 mr-md20"><span class="notification-circle"><i class="fa fa-briefcase f-12"></i></span>
				</div>
				<div class="f-14 mt8 w-100">
					<p class="w500 lh140">Businesses you manage</p>
					<span class="d-gblue-clr lh140">Choose whether you want to get notification from the business</span>

					<div class="d-block clearfix mt15 mt-md30">
						<div class="row">
							<div class="col-md-6 col-12 mb15 mb-m20">
								<div class="row align-items-center">
								<div class="col-7 col-md-6 col-lg-4 col-xl-4">1. Business One</div>
								<div class=" col-5 col-md-6 col-lg-8 col-xl-8">
									<label class="switchtoggle-btn">
										<input class="switchtoggle-input" type="checkbox" checked>
										<span class="switchtoggle-label" data-on="On" data-off="Off"></span> <span class="switchtoggle-handle"></span>	
									</label>
								</div>
								</div>
							</div>
							<div class="col-md-6 col-12 mb15 mb-m20">
								<div class="row align-items-center">
								<div class="col-7 col-md-6 col-lg-4 col-xl-4">2. Business Two</div>
								<div class=" col-5 col-md-6 col-lg-8 col-xl-8">
									<label class="switchtoggle-btn">
										<input class="switchtoggle-input" type="checkbox" checked>
										<span class="switchtoggle-label" data-on="On" data-off="Off"></span> <span class="switchtoggle-handle"></span>	
									</label>
								</div>
								</div>
							</div>
							<div class="col-md-6 col-12 mb15 mb-m20">
								<div class="row align-items-center">
								<div class="col-7 col-md-6 col-lg-4 col-xl-4">3. Business Three</div>
								<div class=" col-5 col-md-6 col-lg-8 col-xl-8">
									<label class="switchtoggle-btn">
										<input class="switchtoggle-input" type="checkbox" checked>
										<span class="switchtoggle-label" data-on="On" data-off="Off"></span> <span class="switchtoggle-handle"></span>	
									</label>
								</div>
								</div>
							</div>
							<div class="col-md-6 col-12 mb15 mb-m20">
								<div class="row align-items-center">
								<div class="col-7 col-md-6 col-lg-4 col-xl-4">4. Business Four</div>
								<div class=" col-5 col-md-6 col-lg-8 col-xl-8">
									<label class="switchtoggle-btn">
										<input class="switchtoggle-input" type="checkbox" checked>
										<span class="switchtoggle-label" data-on="On" data-off="Off"></span> <span class="switchtoggle-handle"></span>	
									</label>
								</div>
								</div>
							</div>
						</div>
						
					</div>

				</div>

			</div>
			
			<div class="text-right f-16">
				<a href="javascript:void(0)" class="base-btn default-btn mr5">Cancel</a>
				<a href="#" class="base-btn blue-btn">&nbsp;Save&nbsp;</a>
			</div>
			

		</div>
		
	</div>
</div>

<!------- Smart Footer Include File---------->
<?php include '../includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->