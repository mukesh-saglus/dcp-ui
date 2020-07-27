<!--- BMS Main Header Include File--->
<?php include '../../../../smart/html/includes/smart-header-bms.php'; ?>
<!--- BMS Main Header Include File end--->

<!--- BMS Stylesheet--->
<link rel="stylesheet" href="../../../css/bms.css">
<!---BMS Stylesheet end--->

<div class="container-fluid p15 p-md30">
	<!--- Header Start --->
	<div class="row align-items-center mb15 mb-md30">
		<div class="col-12">
			<span class="f-20 f-md-24 lato-font">Testing All Features </span> &nbsp;
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="d-gblue-clr w400 mt5">Check out your Package details</p>
		</div>
	</div>
	
	<!--- Step Wizard Div Start --->
	<div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md25">
         <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
				<div class="circle-num"><span><i class="fa fa-check"></i></span></div>
				<div class="title align-self-center">Choose The Feature</div>
				<div class="sep-line align-self-center d-none d-lg-block"></div>
			</div>
			<div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
				<div class="circle-num"><span><i class="fa fa-check"></i></span></div>
				<div class="title align-self-center">Add Ons & Prices</div>
				<div class="sep-line align-self-center d-none d-lg-block"></div>
			</div>
			<div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
				<div class="circle-num"><span><i class="fa fa-check"></i></span></div>
				<div class="title align-self-center">Product ID Configuration</div>
				<div class="sep-line align-self-center d-none d-lg-block"></div>
			</div>
			<div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
				<div class="circle-num"><span> 4</span></div>
				<div class="title align-self-center">Preview & Update</div>
				<div class="sep-line align-self-center d-none d-lg-block"></div>
			</div>
        </div>
	<!--- Step Wizard Div End --->
	
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
		<div class="col-12 text-center text-md-right mt-md30 mt15">
			<a href="#" class="base-btn default-btn mr5">&nbsp;Back&nbsp;</a>
			<a href="#" class="base-btn default-btn  mr5">Cancel</a>
			<a href="#" class="base-btn blue-btn">&nbsp;Save&nbsp;</a>
		</div>
	</div>
</div>


<!--- Smart Footer Include File --->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!--- Smart Footer Include File end --->