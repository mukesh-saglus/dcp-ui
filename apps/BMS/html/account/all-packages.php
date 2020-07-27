<!------- BMS Main Header Include File---------->
<?php include '../../../smart/html/includes/dcp-header-business-setting.php'; ?>
<!------- BMS Main Header Include File end---------->

<!------- Smart Page Stylesheet------=------->
<link rel="stylesheet" href="../../css/page.css">
<!------- Smart Page Stylesheet end---------->

<div class="container-fluid p15 p-md30">
	<!------- Header Start----------->
	<div class="row align-items-center mb15 mb-md30">
		<div class="col-12">
         <div class="d-flex align-items-center flex-wrap">
            <ul class="stepwizard-style2 f-20 f-md-24 w400 lato-font mr15">
               <li> <a href="#">Accounts</a> </li>
               <li> <a href="#">User Name</a> </li>
            </ul>
            <div class="d-flex mt7">
               <a href="#" class="gblue-clr t-decoration-none f-17 mr5" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
               <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
            </div>
         </div>
         <p class="f-14 gblue-clr w400">Check out your current plan details</p>
      </div>
	</div>
	<div class="row">	
		<div class="col-12 segment-accordion smart-form">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed d-flex align-items-center flex-wrap px20" data-toggle="collapse" href="#current-plan-accordion">
						<a class="card-title current-plan-card-title ml20 mb-md0">
							<img src="<?php echo $basedir; ?>images/favicon-icon.png" class="img-fluid " width="22px">
							<span class="f-18 f-md-20 w500 ml10 mb-md0 align-middle">All_Solution All_Package </span>
						</a>
						<span class="f-14 px15 ml-sm-auto">Purchased On: 18 Mar 2019 at 10:41 PM</span>
						<span class="current-plan-border"></span>
						<span class="f-16 f-md-18 w400 pl15 text-nowrap text-capitalize">Price 
						<span class="f-20 f-md-24 w500">$97</span> Monthly</span>
					</div>
					
					<div id="current-plan-accordion" class="collapse">
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
										<!-- Sepration -->
										<div class="text-right">
										<div class="addon-sepration my15 my-md30"></div>
											<a href="#" class="base-btn blue-btn f-16">Package Usage</a>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed d-flex align-items-center flex-wrap px20" data-toggle="collapse" href="#current-plan-accordion1">
						<a class="card-title current-plan-card-title ml20 mb-md0">
							<img src="<?php echo $basedir; ?>images/favicon-icon.png" class="img-fluid " width="22px">
							<span class="f-18 f-md-20 w500 ml10 mb-md0 align-middle">All_Solution All_Package </span>
						</a>
						<span class="f-14 px15 ml-sm-auto">Purchased On: 18 Mar 2019 at 10:41 PM</span>
						<span class="current-plan-border"></span>
						<span class="f-16 f-md-18 w400 pl15 text-nowrap text-capitalize">Price 
						<span class="f-20 f-md-24 w500">$97</span> Monthly</span>
					</div>
					
					<div id="current-plan-accordion1" class="collapse">
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
										<!-- Sepration -->
										<div class="text-right">
										<div class="addon-sepration my15 my-md30"></div>
											<a href="#" class="base-btn blue-btn f-16">Package Usage</a>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 segment-accordion inactive-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed d-flex align-items-center flex-wrap px20" data-toggle="collapse" href="#current-plan-accordion2">
						<a class="card-title current-plan-card-title ml20 mb-md0">
							<img src="<?php echo $basedir; ?>images/favicon-icon.png" class="img-fluid " width="22px">
							<span class="f-18 f-md-20 w500 ml10 mb-md0 align-middle">All_Solution All_Package </span>
						</a>
						<div class="ml-sm-auto px15">
						<span class="base-btn vi-red-bg white-clr btn-h25 cursor-auto">Inactive</span>
						</div>
						<span class="f-14 px15">Purchased On: 18 Mar 2019 at 10:41 PM</span>
						<span class="current-plan-border"></span>
						<span class="f-16 f-md-18 w400 pl15 text-nowrap text-capitalize">Price 
						<span class="f-20 f-md-24 w500">$97</span> Monthly</span>
					</div>
					
					<div id="current-plan-accordion2" class="collapse">
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
										<!-- Sepration -->
										<div class="text-right">
										<div class="addon-sepration my15 my-md30"></div>
											<a href="#" class="base-btn blue-btn f-16">Package Usage</a>
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


<!------- Smart Footer Include File ---------->
<?php include '../../../smart/html/includes/dcp-footer.php'; ?>
<!------- Smart Footer Include File end ---------->