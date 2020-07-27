<!-- Smart Header Include File -->
<?php include '../includes/dcp-header.php'; ?>
<!-- Smart Header Include File end -->

<div class="container-fluid p15 px-md30 py-md30">
	<!-- Header Start -->
	<div class="row mb15 mb-md30 align-items-center">
		<div class="col-12 col-md-7">
			<span class="f-20 f-md-24 lato-font">Campaigns</span> &nbsp;
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="gblue-clr f-14 w400 mt5">Here you can manage your all Campaigns</p>
		</div>
		<div class="col-12 col-md-5 f-16 text-center text-md-right mt10 mt-md0">
			<a href="javascript:void(0)" class="base-btn blue-btn" data-toggle="modal" data-target="#SalesSolutionModal"><i class="icon-add-new f-18 align-middle"></i>&nbsp;&nbsp; New Campaign</a>
		</div>
	</div>
	<!-- Header End  -->
	<div class="row">
		<div class="col-xl-2 col-lg-3 col-md-3 col-12">
			<!-- Heading -->
			<h5 class="f-16 w500 mb10 pb10 campaign-border-bottom">Manage</h5>
			<div class="nav flex-column nav-pills ui-vertical-tab f-16 w400">
				<a class="nav-link active" href="all-campaign.php"><i class="icon-project-update f-16"></i> All Campaigns</a>
				<a class="nav-link" href="single-folder.php"><i class="icon-project f-18"></i> Projects</a>
				<a class="nav-link" href="journey-listing.php"><i class="icon-all-journey f-16"></i> Funnels/Journey</a>
				<a class="nav-link" href="page-listing.php"><i class="icon-total-visited-pages f-16"></i> Pages</a>
				<a class="nav-link" href="video-listing.php"><i class="icon-total-viewed-videos f-16"></i> Videos</a>
				<a class="nav-link" href="popup-and-bars-listing.php"><i class="icon-editor-popup f-16"></i> Popups & Bars</a>
				<a class="nav-link" href="mail-listing.php"><i class="icon-mail f-16"></i> Mails <span class="campaign-beta-btn">Beta</span></a>
			</div>
		</div>
		<div class="col-xl-10 col-lg-9 col-md-9 col-12">
			<!-- Summary of campaigns Section -->
			<div class="row">
				<div class="col-12 mt15 mt-md0">
					<h5 class="f-16 w500">Summary of campaigns</h5>
				</div>	
				<div class="col-12">
					<div class="row">
						<!-- column 1 -->
						<div class="col-12 col-md-6 col-xl-3 mt20">
							<div class="campaign-block">
								<div class="vl-gblue-bg p10">
									<h5 class="f-16 f-md-18 w500 text-center">Campaigns</h5>
								</div>
								<div class="p15 p-md20 text-center">
									<div class="campaign-icon mx-auto"><i class="icon-project-update"></i></div>
									<div class="f-16 f-md-24 w700 mt15">
										300 <span class="f-14 f-md-16 w400 d-block">Total Campaigns</span>
									</div>
								</div>
							</div>
						</div>
						<!-- column 2 -->
						<div class="col-12 col-md-6 col-xl-3 mt20">
							<div class="campaign-block">
								<div class="vl-gblue-bg p10">
									<h5 class="f-16 f-md-18 w500 text-center">Audience</h5>
								</div>
								<div class="p15 p-md20">
									<div class="d-flex align-items-center">
										<div class="campaign-icon"><i class="icon-all-accounts"></i></div>
										<div class="f-16 f-md-24 w700 ml15 ml-md20">
											<span class="f-14 f-md-16 w400 d-block">All Audience</span>
											5000
										</div>
									</div>
									<div class="campaign-sepline mt15 mb15 mt-md20 mb-md20"></div>
									<div class="d-flex align-items-center">
										<div class="campaign-icon"><i class="icon-contactts"></i></div>
										<div class="f-16 f-md-24 w700 ml15 ml-md20">
											<span class="f-14 f-md-16 w400 d-block">Contacts</span>
											2000
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- column 3 -->
						<div class="col-12 col-md-6 col-xl-3 mt20">
							<div class="campaign-block">
								<div class="vl-gblue-bg p10">
									<h5 class="f-16 f-md-18 w500 text-center">Goals</h5>
								</div>
								<div class="p15 p-md20">
									<div class="d-flex align-items-center">
										<div class="campaign-icon"><i class="icon-conversion f-25"></i></div>
										<div class="f-16 f-md-24 w700 ml15 ml-md20">
											<span class="f-14 f-md-16 w400 d-block">Conversions</span>
											300
										</div>
									</div>
									<div class="campaign-sepline mt15 mb15 mt-md20 mb-md20"></div>
									<div class="d-flex align-items-center">
										<div class="campaign-icon"><i class="icon-conversion-rate"></i></div>
										<div class="f-16 f-md-24 w700 ml15 ml-md20">
											<span class="f-14 f-md-16 w400 d-block">Conversions Rate</span>
											30%
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- column 4 -->
						<div class="col-12 col-md-6 col-xl-3 mt20">
							<div class="campaign-block">
								<div class="vl-gblue-bg p10">
									<h5 class="f-16 f-md-18 w500 text-center">Sales</h5>
								</div>
								<div class="p15 p-md20">
									<div class="d-flex align-items-center">
										<div class="campaign-icon"><i class="icon-dollar"></i></div>
										<div class="f-16 f-md-24 w700 ml15 ml-md20">
											<span class="f-14 f-md-16 w400 d-block">Revenue</span>
											$16000
										</div>
									</div>
									<div class="campaign-sepline mt15 mb15 mt-md20 mb-md20"></div>
									<div class="d-flex align-items-center">
										<div class="campaign-icon"><i class="icon-epc f-25"></i></div>
										<div class="f-16 f-md-24 w700 ml15 ml-md20">
											<span class="f-14 f-md-16 w400 d-block">EPCs</span>
											$16
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Summary of campaigns Section End -->
			<!-- Status of campaigns Section -->
			<div class="row">
				<div class="col-12">
					<h5 class="f-16 w500 mt20 mt-md30">Status of campaigns</h5>
				</div>	
				<div class="col-12 mt20">
					<div class="campaign-status-block">
						<div class="row align-items-stretch break-all">
							<!-- Status 1 -->
							<div class="col-12 col-md-6 col-xl-3">
								<div class="d-flex align-items-center campaign-right-border">
									<img class="img-fluid" src="<?php echo $basedir; ?>images/active-campaigns-icon.png">
									<div class="f-16 f-md-24 w700 mx10 ml-lg20">
										300
										<span class="f-14 f-md-16 w400 d-block mt5">Active Campaigns</span>
									</div>
								</div>
							</div>
							<!-- Status 2 -->
							<div class="col-12 col-md-6 col-xl-3 mt15 mt-md0">
								<div class="d-flex align-items-center campaign-right-border campaign-right-0">
									<img class="img-fluid" src="<?php echo $basedir; ?>images/inactive-campaigns-icon.png">
									<div class="f-16 f-md-24 w700 mx10 ml-lg20">
										20
										<span class="f-14 f-md-16 w400 d-block mt5">Inactive Campaigns</span>
									</div>
								</div>
							</div>
							<!-- Status 3 -->
							<div class="col-12 col-md-6 col-xl-3 mt15 mt-xl0">
								<div class="d-flex align-items-center campaign-right-border">
									<img class="img-fluid" src="<?php echo $basedir; ?>images/draft-icon.png">
									<div class="f-16 f-md-24 w700 mx10 ml-lg20">
										40
										<span class="f-14 f-md-16 w400 d-block mt5">Draft</span>
									</div>
								</div>
							</div>
							<!-- Status 4 -->
							<div class="col-12 col-md-6 col-xl-3 mt15 mt-xl0">
								<div class="d-flex align-items-center campaign-right-border last-border">
									<img class="img-fluid" src="<?php echo $basedir; ?>images/completed-icon.png">
									<div class="f-16 f-md-24 w700 mx10 ml-lg20">
										150
										<span class="f-14 f-md-16 w400 d-block mt5">Completed</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Status of campaigns Section End -->
			<!-- Projects Section -->
			<div class="row">
				<div class="col-12 d-flex align-items-center flex-wrap mt20 mt-md30">
					<h5 class="f-16 w500">Projects (50)</h5>
					<a href="single-folder.php" class="f-14 t-decoration-none m-blue-clr ml-auto"><u>View All Projects</u> <i class="icon-testimonial-next f-12 pl10"></i></a>
				</div>	
				<div class="col-12">
					<div class="row break-word">
						<!-- Folders column 1 -->
						<div class="col-12 col-md-6 col-xl-3 mt20">
							<a href="javascript:void(0)" class="folders-block">
								<div class="folder-icon-size"><i class="icon-folder"></i></div>
								<div class="f-14 w400 mt15">
									<span class="f-16 d-block">Projects Name A</span> <span class="f-16 f-md-24 w700 d-block mt7">500</span> Campaigns
								</div>
							</a>
						</div>
						<!-- Folders column 2 -->
						<div class="col-12 col-md-6 col-xl-3 mt20">
							<a href="javascript:void(0)" class="folders-block">
								<div class="folder-icon-size"><i class="icon-folder"></i></div>
								<div class="f-14 w400 mt15">
									<span class="f-16 d-block">Projects Name B</span> <span class="f-16 f-md-24 w700 d-block mt7">500</span> Campaigns
								</div>
							</a>
						</div>
						<!-- Folders column 3 -->
						<div class="col-12 col-md-6 col-xl-3 mt20">
							<a href="javascript:void(0)" class="folders-block">
								<div class="folder-icon-size"><i class="icon-folder"></i></div>
								<div class="f-14 w400 mt15">
									<span class="f-16 d-block">Projects Name C</span> <span class="f-16 f-md-24 w700 d-block mt7">500</span> Campaigns
								</div>
							</a>
						</div>
						<!-- Folders column 4 -->
						<div class="col-12 col-md-6 col-xl-3 mt20">
							<a href="javascript:void(0)" class="folders-block">
								<div class="folder-icon-size"><i class="icon-folder"></i></div>
								<div class="f-14 w400 mt15">
									<span class="f-16 d-block">Projects Name D</span> <span class="f-16 f-md-24 w700 d-block mt7">500</span> Campaigns
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- Folders Section End -->
			<!-- Type of campaigns Section -->
			<div class="row">
				<div class="col-12 mt20 mt-md30">
					<h5 class="f-16 w500">Type of campaigns</h5>
				</div>	
				<div class="col-12 campaign-type-list-wrap break-word mt20">
					<!-- Type 1 -->
					<div class="campaign-type-list">
						<div class="row align-items-center text-center text-md-left">
							<div class="col-12 col-md-7 col-xl-8 d-flex flex-column flex-md-row align-items-center flex-wrap flex-md-nowrap">
								<div class="campaign-type-icon"><i class="icon-all-journey"></i></div>
								<div class="ml-md20 mt10 mt-md0">
									<div class="f-18 w500">Funnels/Journey</div>
									<p class="f-12 d-gblue-clr mt2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
								</div>
							</div>
							<div class="col-12 col-md-5 col-xl-4 d-flex align-items-center justify-content-between flex-wrap pl-xl0">
								<div class="f-16 f-md-24 w700 mt15 mt-md0">500</div>
								<a href="javascript:void(0)" class="base-btn default-btn view-all-btn mt15 mt-md0">View All</a>
							</div>
						</div>
					</div>
					<!-- Type 2 -->
					<div class="campaign-type-list">
						<div class="row align-items-center text-center text-md-left">
							<div class="col-12 col-md-7 col-xl-8 d-flex flex-column flex-md-row align-items-center flex-wrap flex-md-nowrap">
								<div class="campaign-type-icon"><i class="icon-total-visited-pages"></i></div>
								<div class="ml-md20 mt10 mt-md0">
									<div class="f-18 w500">Pages</div>
									<p class="f-12 d-gblue-clr mt2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
								</div>
							</div>
							<div class="col-12 col-md-5 col-xl-4 d-flex align-items-center justify-content-between flex-wrap pl-xl0">
								<div class="f-16 f-md-24 w700 mt15 mt-md0">500</div>
								<a href="javascript:void(0)" class="base-btn default-btn view-all-btn mt15 mt-md0">View All</a>
							</div>
						</div>
					</div>
					<!-- Type 3 -->
					<div class="campaign-type-list">
						<div class="row align-items-center text-center text-md-left">
							<div class="col-12 col-md-7 col-xl-8 d-flex flex-column flex-md-row align-items-center flex-wrap flex-md-nowrap">
								<div class="campaign-type-icon"><i class="icon-total-viewed-videos"></i></div>
								<div class="ml-md20 mt10 mt-md0">
									<div class="f-18 w500">Videos</div>
									<p class="f-12 d-gblue-clr mt2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
								</div>
							</div>
							<div class="col-12 col-md-5 col-xl-4 d-flex align-items-center justify-content-between flex-wrap pl-xl0">
								<div class="f-16 f-md-24 w700 mt15 mt-md0">500</div>
								<a href="javascript:void(0)" class="base-btn default-btn view-all-btn mt15 mt-md0">View All</a>
							</div>
						</div>
					</div>
					<!-- Type 4 -->
					<div class="campaign-type-list">
						<div class="row align-items-center text-center text-md-left">
							<div class="col-12 col-md-7 col-xl-8 d-flex flex-column flex-md-row align-items-center flex-wrap flex-md-nowrap">
								<div class="campaign-type-icon"><i class="icon-mail"></i></div>
								<div class="ml-md20 mt10 mt-md0">
									<div class="f-18 w500">Mails</div>
									<p class="f-12 d-gblue-clr mt2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
								</div>
							</div>
							<div class="col-12 col-md-5 col-xl-4 d-flex align-items-center justify-content-between flex-wrap pl-xl0">
								<div class="f-16 f-md-24 w700 mt15 mt-md0">500</div>
								<a href="javascript:void(0)" class="base-btn default-btn view-all-btn mt15 mt-md0">View All</a>
							</div>
						</div>
					</div>
					<!-- Type 5 -->
					<div class="campaign-type-list">
						<div class="row align-items-center text-center text-md-left">
							<div class="col-12 col-md-7 col-xl-8 d-flex flex-column flex-md-row align-items-center flex-wrap flex-md-nowrap">
								<div class="campaign-type-icon"><i class="icon-editor-popup"></i></div>
								<div class="ml-md20 mt10 mt-md0">
									<div class="f-18 w500">Popups & Bars</div>
									<p class="f-12 d-gblue-clr mt2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
								</div>
							</div>
							<div class="col-12 col-md-5 col-xl-4 d-flex align-items-center justify-content-between flex-wrap pl-xl0">
								<div class="f-16 f-md-24 w700 mt15 mt-md0">500</div>
								<a href="javascript:void(0)" class="base-btn default-btn view-all-btn mt15 mt-md0">View All</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Type of campaigns Section End -->
		</div>
	</div>
</div>

<!-- Smart Footer Include File-------->
<?php include '../includes/smart-footer.php'; ?>
<!-- Smart Footer Include File end -------->