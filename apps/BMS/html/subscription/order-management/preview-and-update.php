<!------- BMS Main Header Include File---------->
<?php include '../../../../smart/html/includes/dcp-header-business-setting.php'; ?>
<!------- BMS Main Header Include File end------->

<!------- BMS Stylesheet------=------->
<link rel="stylesheet" href="../../../css/bms.css">
<!-------BMS Stylesheet end---------->


<div class="container-fluid p15 p-md30">

	<!------- Header Start----------->
	<div class="row">
		<div class="col-12 mb15 mb-md30">
			<span class="f-20 f-md-24 lato-font">Order ID- 0112358, Account</span> &nbsp;
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
					<div class="title align-self-center">Preview & Update</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				</div>
			</div>
		</div>
	</div>
	<!------- Header End ----------->
	
	<!-- Preview And Update Section -->
	<div class="row">	
		<div class="col-12 segment-accordion smart-form">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header card-header-icon-remove d-flex align-items-center flex-wrap px20 px-md30">
						<div class="col-lg-6 col-md-6 col-12 card-title current-plan-card-title mb-md0 p0">
							<img src="<?php echo $basedir; ?>images/favicon-icon.png" class="img-fluid " width="22px">
							<span class="f-18 f-md-20 w500 ml10 mb-md0 align-middle">All_Solution All_Package </span>
						</div>
						
						<div class="col-lg-6 col-md-6 col-12 d-flex align-items-center justify-content-md-end p0">
							<span class="f-16 f-md-18 w400 text-nowrap text-capitalize pr-lg15">Price <span class="f-20 f-md-24 w500">$97</span></span>
							<div class="col-7 col-md-5 col-xl-3 pr0 package-dropdown-h30">
							   <select class="selectpicker f-14" title="Monthly">
								  <option>Monthly</option>
								  <option>Half-Yearly</option>
								  <option>Yearly</option>
							   </select>
							</div>
						</div>
					</div>
					
					<div id="current-plan-accordion" class="collapse show">
						<div class="card-body current-plan-card-body">
							<div class="row no-gutters">
								<div class="col-12 col-md-12 col-lg-8">
									<div class="planlist-section">
									<div class="heading">Features</div>
									<!-- Plan List section start -->
									<div class="d-flex flex-column flex-md-row word-wrap currentplan-section ">
										<div class="currentplan-icon">
											<i class="icon-total-viewed-videos circle-icon"></i>
										</div>	
										<div class="mt6 w-100">
											<div class="f-20 f-md-22 w500">Video</div>
											<div class="row no-gutters mt10">
												<div class="col-4 col-md-4 f-14 w500 mt3">Players</div>	
												<div class="col-2 col-md-1 text-center mt3">-</div>	
												<div class="col-6 col-md-7 f-14 w400 line-height">Blue Eyed, &nbsp;&nbsp;BigMaxx,&nbsp;&nbsp;Blimes,&nbsp;&nbsp;Tickled Pink,&nbsp;&nbsp;Blue Blood</div>
											</div>
											<div class="row no-gutters mt10 d-flex">
												<div class="col-4 col-md-4 f-14 w500 mt3">Frames</div>	
												<div class="col-2 col-md-1 text-center mt3">-</div>	
												<div class="col-6 col-md-7 f-14 w400 line-height">Laptop: Orion (Black),&nbsp;&nbsp;Laptop: Nebula White),&nbsp;&nbsp;Laptop: Mariana (Grey),&nbsp;&nbsp;Tablet: Lvory (White),&nbsp;&nbsp;Tablet: Nova (Grey),&nbsp;&nbsp;Tablet: Abyss (Black),&nbsp;&nbsp;Mobile: Cosmos (White),&nbsp;&nbsp;Mobile: Polaris (Black)</div>	
											</div>
											<div class="row no-gutters mt10 d-flex">
												<div class="col-4 col-md-4 f-14 w500 mt3">Analytics</div>	
												<div class="col-2 col-md-1 text-center mt3">-</div>	
												<div class="col-6 col-md-7 f-14 w400 line-height">Result,&nbsp;&nbsp;Overview,&nbsp;&nbsp;Technology,&nbsp;&nbsp;Location,&nbsp;&nbsp;Compare</div>	
											</div>
											<div class="row no-gutters mt10 d-flex">
												<div class="col-4 col-md-4 f-14 w500">Others</div>	
												<div class="col-2 col-md-1 text-center mt3">-</div>	
												<div class="col-6 col-md-7 f-14 w400 line-height">Automation</div>	
											</div>
										</div>	
									</div>
									<div class="d-flex flex-column flex-md-row word-wrap currentplan-section ">
										<div class="currentplan-icon">
											<i class="icon-mail circle-icon"></i>
										</div>	
										<div class="mt6 w-100">
											<div class="f-20 f-md-22 w500">Mail</div>
											<div class="row no-gutters mt10">
												<div class="col-4 col-md-4 f-14 w500 mt3">Contacts</div>	
												<div class="col-2 col-md-1 text-center mt3">-</div>	
												<div class="col-6 col-md-7 f-14 w400 line-height">All Contacts,&nbsp;&nbsp;Import Contacts,&nbsp;&nbsp;Export Contacts</div>
											</div>
											<div class="row no-gutters mt10 d-flex">
												<div class="col-4 col-md-4 f-14 w500 mt3">A/B Test</div>	
												<div class="col-2 col-md-1 text-center mt3">-</div>	
												<div class="col-6 col-md-7 f-14 w400 line-height">From And Reply Email Wise,&nbsp;&nbsp;Subject Wise,&nbsp;&nbsp;Content Wise,&nbsp;&nbsp;Schedule A/B Test</div>	
											</div>
											<div class="row no-gutters mt10 d-flex">
												<div class="col-4 col-md-4 f-14 w500 mt3">Analytics</div>	
												<div class="col-2 col-md-1 text-center mt3">-</div>	
												<div class="col-6 col-md-7 f-14 w400 line-height">Overview,&nbsp;&nbsp;Location,&nbsp;&nbsp;Link,    Activity,&nbsp;&nbsp;Subscriber Activity,&nbsp;&nbsp;Unsubscriber Activity</div>	
											</div>
											<div class="row no-gutters mt10 d-flex">
												<div class="col-4 col-md-4 f-14 w500">Others</div>	
												<div class="col-2 col-md-1 text-center mt3">-</div>	
												<div class="col-6 col-md-7 f-14 w400 line-height">Schedule Broadcast,&nbsp;&nbsp;Score Rule,&nbsp;&nbsp;Tag,&nbsp;&nbsp;Quick Mailing Group,    Suppression List,&nbsp;&nbsp;Automation</div>	
											</div>
										</div>	
									</div>
									<div class="d-flex flex-column flex-md-row word-wrap currentplan-section ">
										<div class="currentplan-icon">
											<i class="icon-total-visited-pages circle-icon"></i>
										</div>	
										<div class="mt6 w-100">
											<div class="f-20 f-md-22 w500">Page</div>
											<div class="row no-gutters mt10">
												<div class="col-4 col-md-4 f-14 w500 mt3">Others</div>	
												<div class="col-2 col-md-1 text-center mt3">-</div>	
												<div class="col-6 col-md-7 f-14 w400 line-height">Create Your Own Pages,&nbsp;&nbsp;Create Your Own A/B Test Pages,&nbsp;&nbsp;Automation</div>
											</div>
											<div class="row no-gutters mt10 d-flex">
												<div class="col-4 col-md-4 f-14 w500 mt3">Analytics (Page & A/B Test)</div>	
												<div class="col-2 col-md-1 text-center mt3">-</div>	
												<div class="col-6 col-md-7 f-14 w400 line-height">Overview,&nbsp;&nbsp;Technology,&nbsp;&nbsp;Location,&nbsp;&nbsp;Compare,&nbsp;&nbsp;Result</div>	
											</div>
										</div>	
									</div>
									<div class="d-flex flex-column flex-md-row word-wrap currentplan-section ">
										<div class="currentplan-icon">
											<i class="icon-all-accounts circle-icon"></i>
										</div>	
										<div class="mt6 w-100">
											<div class="f-20 f-md-22 w500">Accounts</div>
											<div class="row no-gutters mt10">
												<div class="col-4 col-md-4 f-14 w500 mt3">Accounts	</div>	
												<div class="col-2 col-md-1 text-center mt3">-</div>	
												<div class="col-6 col-md-7 f-14 w400 line-height">All Accounts,&nbsp;&nbsp;Import Accounts,&nbsp;&nbsp;Export Accounts,&nbsp;&nbsp;Accounts Summary,&nbsp;&nbsp;Account Feed & Recent Activity,&nbsp;&nbsp;Email To Account</div>
											</div>
											<div class="row no-gutters mt10 d-flex">
												<div class="col-4 col-md-4 f-14 w500 mt3">Analytics (Page & A/B Test)</div>	
												<div class="col-2 col-md-1 text-center mt3">-</div>	
												<div class="col-6 col-md-7 f-14 w400 line-height">Overview,&nbsp;&nbsp;Technology,&nbsp;&nbsp;Location,&nbsp;&nbsp;Compare,&nbsp;&nbsp;Result</div>	
											</div>
										</div>	
									</div>
									<div class="d-flex flex-column flex-md-row word-wrap currentplan-section ">
										<div class="currentplan-icon">
											<i class="icon-subscription-other circle-icon"></i>
										</div>	
										<div class="mt6 w-100">
											<div class="f-20 f-md-22 w500">Others</div>
											<div class="row no-gutters mt10">
												<div class="col-4 col-md-4 f-14 w500 mt3">Segment	</div>	
												<div class="col-2 col-md-1 text-center mt3">-</div>	
												<div class="col-6 col-md-7 f-14 w400 line-height">All Segments,&nbsp;&nbsp;Export Segment,&nbsp;&nbsp;Report</div>
											</div>
											<div class="row no-gutters mt10">
												<div class="col-4 col-md-4 f-14 w500 mt3">Segment Analytics</div>	
												<div class="col-2 col-md-1 text-center mt3">-</div>	
												<div class="col-6 col-md-7 f-14 w400 line-height">Overview,&nbsp;&nbsp;Technology,&nbsp;&nbsp;Location,&nbsp;&nbsp;Compare,&nbsp;&nbsp;Result</div>
											</div>
											<div class="row no-gutters mt10">
												<div class="col-4 col-md-4 f-14 w500 mt3">Web Analytics	</div>	
												<div class="col-2 col-md-1 text-center mt3">-</div>	
												<div class="col-6 col-md-7 f-14 w400 line-height">Overview,&nbsp;&nbsp;Technology,&nbsp;&nbsp;Location,    &nbsp;&nbsp;Result</div>
											</div>
											<div class="row no-gutters mt10">
												<div class="col-4 col-md-4 f-14 w500 mt3">My Drive </div>	
												<div class="col-2 col-md-1 text-center mt3">-</div>	
												<div class="col-6 col-md-7 f-14 w400 line-height">Folder Management,&nbsp;&nbsp;Share My Drive Items</div>
											</div>
											<div class="row no-gutters mt10">
												<div class="col-4 col-md-4 f-14 w500 mt3">Integration	</div>	
												<div class="col-2 col-md-1 text-center mt3">-</div>	
												<div class="col-6 col-md-7 f-14 w400 line-height">Autoresponder,&nbsp;&nbsp;CRM,&nbsp;&nbsp;Webinar,&nbsp;&nbsp;Social</div>
											</div>
											<div class="row no-gutters mt10">
												<div class="col-4 col-md-4 f-14 w500 mt3">Others	</div>	
												<div class="col-2 col-md-1 text-center mt3">-</div>	
												<div class="col-6 col-md-7 f-14 w400 line-height">Custom Field</div>
											</div>
										</div>	
									</div>	
									<!-- Plan List section end -->
									
									</div>
								</div>
								<div class="col-12 col-md-12 col-lg-4 h-100">
									<div class="addon-section">
									<div class="f-18 w500 p-blue-clr">Ad-Ons</div>
										<div class="table-responsive plan-table-style mt15 mt-md20">
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
										  <tbody>
											<tr>
											  <td>• Bandwidth</td>
											  <td class="px-md20 text-center">-</td>
											  <td>1 Gb/Month</td>
											</tr>
											 <tr>
											  <td>• Storage</td>
											  <td class="px-md20 text-center">-</td>
											  <td>10 Gb/Month</td>
											</tr> 
												 <tr>
											  <td>• Visitors</td>
											  <td class="px-md20 text-center">-</td>
											  <td>10000 Visitors/Month</td>
											</tr> 
											 <tr>
											  <td>• Contacts</td>
											  <td class="px-md20 text-center">-</td>
											  <td>1000 Contacts/Month</td>
											</tr>
												 <tr>
											  <td>• Custom Domain</td>
											  <td class="px-md20 text-center">-</td>
											  <td>1 Custom Domain</td>
											</tr> 
											  <tr>
											  <td>• Team Members</td>
											  <td class="px-md20 text-center">-</td>
											  <td>1 Team Member</td>
											</tr> 
											 <tr>
											  <td>• Pages</td>
											  <td class="px-md20 text-center">-</td>
											  <td>100 Pages</td>
											</tr>
											  
											 <tr>
											  <td>• Videos</td>
											  <td class="px-md20 text-center">-</td>
											  <td>1000 Videos</td>
											</tr>
											  <tr>
											  <td>• Notifications</td>
											  <td class="px-md20 text-center">-</td>
											  <td>100 Notifications</td>
											</tr> 
											<tr>
											  <td>• Mails</td>
											  <td class="px-md20 text-center">-</td>
											  <td>1000 Mails</td>
											</tr>

										  </tbody>
										</table>
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
	
	<div class="row">
        <!-- Discounted Price Section Start -->
		<div class="f-14 w500 mt-md30 mt15 col-12">Discounted Price</div>
		<div class="col-12 mt-md20 mt15 d-gblue-clr smart-form">
			<div class="row align-items-center">
				<div class="col-12 col-md-4 new-package-form">
					<label>Price</label>
					<div class="input-group">
						<input type="text" class="form-control radiusrb0" placeholder="Enter Discounted Price" aria-label="" aria-describedby="basic-addon1" value="30">
						<div class="input-group-append">
							<select class="selectpicker f-14">
								<option>$</option>
								<option>Rs</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 col-lg-3 mt-md0 mt15">
					<div class="d-flex row align-items-center">
						<div class="col-8">
							<label>Duration</label>
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
			</div>
			<div class="row align-items-center mt-md30 mt0">
				<div class="col-12 col-md-4 mt-md0 mt15 new-package-form">
					<label>Price</label>
					<div class="input-group">
						<input type="text" class="form-control radiusrb0" placeholder="Enter Discounted Price" aria-label="" aria-describedby="basic-addon1" value="40">
						<div class="input-group-append">
							<select class="selectpicker f-14">
								<option>$</option>
								<option>Rs</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 col-lg-3 mt-md0 mt15">
					<div class="d-flex row align-items-center">
						<div class="col-8">
							<label>Duration</label>
							<select class="selectpicker f-14" title="Half-Yearly">
								<option>Monthly</option>
								<option>Half-Yearly</option>
								<option>Yearly</option>
							</select>
						</div>
						<a href="#" class="d-inline-block d-gblue-clr segment-delete mt25 px10 f-16 t-decoration-none"><i class="icon-delete"></i></a>
						<a href="#" class="d-inline-block p-blue-clr segment-add f-16 mt25 px10 t-decoration-none"><i class="icon-add-three"></i></a>
					</div>
				</div>
			</div>
			<div class="row align-items-center mt-md30 mt0">
				<div class="col-12 col-md-4 mt-md0 mt15 new-package-form">
					<label>Price</label>
					<div class="input-group">
						<input type="text" class="form-control radiusrb0" placeholder="Enter Discounted Price" aria-label="" aria-describedby="basic-addon1" value="50">
						<div class="input-group-append">
							<select class="selectpicker f-14">
								<option>$</option>
								<option>Rs</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 col-lg-3 mt-md0 mt15">
					<div class="d-flex row align-items-center">
						<div class="col-8">
							<label>Duration</label>
							<select class="selectpicker f-14" title="Half-Yearly">
								<option>Monthly</option>
								<option>Half-Yearly</option>
								<option>Yearly</option>
							</select>
						</div>
						<a href="#" class="d-inline-block d-gblue-clr segment-delete mt25 px10 f-16 t-decoration-none"><i class="icon-delete"></i></a>
						<a href="#" class="d-inline-block p-blue-clr segment-add f-16 mt25 px10 t-decoration-none"><i class="icon-add-three"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Free Subscription Section -->
	<div class="row align-items-center smart-form d-gblue-clr mt15 mt-md25" id="hidden_fields_Three">
		<div class="col-12"><label>Duration</label></div>
		<div class="col-12 col-md-4 new-package-form">
			<select class="selectpicker f-14" id="durationselect">
				<option value="1">Days</option>
				<option value="2" selected>Life Time</option>
			</select>
		</div>
		<div class="col-12 col-md-3 col-lg-2 mt-md0 mt15" id="show-duration">
			<input type="text" class="form-control" placeholder="Days" value="50">
		</div>
		<div class="col-12 col-md-4 col-lg-5 mt-md0 mt15">
		<a href="#" class="f-14 p-blue-clr t-decoration-none">Add Extra Add Ons</a>
		</div>
	</div>
	
	<div class="row">	
		<!-- Generate The Order And cancel Button -->
		<div class="text-right f-16 col-12 mt-md30 mt15">
			<a href="javascript:void(0)" class="base-btn default-btn btn-xs-block mr5">Save as Draft</a>
			<a href="javascript:void(0)" class="base-btn default-btn btn-xs-block mt10 mt-md0 mr5">Cancel</a>
			<a href="#" class="base-btn blue-btn btn-xs-block mt10 mt-md0">Save The Order</a>
		</div>
	</div>
		
</div>

<!------- Smart Footer Include File ---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->