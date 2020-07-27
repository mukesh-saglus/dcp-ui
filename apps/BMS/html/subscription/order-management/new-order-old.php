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
			<span class="f-20 f-md-24 lato-font">Order ID- 0112358, Account</span> &nbsp;
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="gblue-clr f-14 w400 mt5">Here you are manage your all accounts details</p>
		</div>
		<div class="col-12">
			<div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md30">
				<div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span>1</span></div>
					<div class="title align-self-center">Choose The Feature</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				</div>
				<div class="d-flex justify-content-start flex-wrap mr15 mb5">
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
    
    <div class="row d-gblue-clr">
		<div class="col-12 col-md-4 mb15 mb-md30">
			<label>Choose Solution</label>
			<select class="selectpicker f-14" title="Select Solution">
				<option>Option One</option>
				<option>Option Two</option>
			</select>
		</div>
		<div class="col-12 col-md-4 mb15 mb-md30">
			<label>Choose Package</label>
			<select class="selectpicker f-14" title="Select Package">
				<option>Option One</option>
				<option>Option Two</option>
			</select>
		</div>		
		
	</div>
	<div class="row">
		<div class="col-10 col-md-8 mb15 mb-md30 smart-form">
			<label class="d-gblue-clr">Package Name</label>
			<input type="text" class="form-control" placeholder="Package Name" value="Demo ABC">
		</div>
	</div>
	

	<!---------- Choose The Feature Section --------->
	<div class="row">
		<div class="col-12 f-18 w400">Features</div>
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#blogrolestab">
						<a class="card-title lato-font">&nbsp; Mail</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="blogrolestab" class="collapse">
						<div class="card-body">
						<div class="row mb-md30 mb10">
							<div class="col-12 mb10">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="checkPosts" class="checkbox-active" type="checkbox">
								<label for="checkPosts" class="w500">Contacts</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ViewPosts" class="checkbox-active" type="checkbox">
								<label for="ViewPosts">All Contacts</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="AddPosts" class="checkbox-active" type="checkbox">
								<label for="AddPosts">Import Contacts</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="EditPosts" class="checkbox-active" type="checkbox">
								<label for="EditPosts">Export Contacts</label>
								</div>
							</div>
						</div>
						<div class="row mb-md30 mb10">
							<div class="col-12 mb10">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="checkComments" class="checkbox-active" type="checkbox">
								<label for="checkComments" class="w500">A/B Test</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ReplyEmailWise" class="checkbox-active" type="checkbox">
								<label for="ReplyEmailWise">From And Reply Email Wise</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="SubjectWise" class="checkbox-active" type="checkbox">
								<label for="SubjectWise">Subject Wise</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Approvecomment" class="checkbox-active" type="checkbox">
								<label for="Approvecomment">Content Wise</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ScheduleABTest" class="checkbox-active" type="checkbox">
								<label for="ScheduleABTest">Schedule A/B Test</label>
								</div>
							</div>
						</div>	
						<div class="row mb-md30 mb10">
							<div class="col-12 mb10">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="TeamManagement" class="checkbox-active" type="checkbox">
								<label for="TeamManagement" class="w500">Analytics</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="AddMember" class="checkbox-active" type="checkbox">
								<label for="AddMember">Overview</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ViewMember" class="checkbox-active" type="checkbox">
								<label for="ViewMember">Location</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="DeleteMember" class="checkbox-active" type="checkbox">
								<label for="DeleteMember">Link Activity</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="AddProfile" class="checkbox-active" type="checkbox">
								<label for="AddProfile">Subscriber Activity</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Unsubscriber" class="checkbox-active" type="checkbox">
								<label for="Unsubscriber">Unsubscriber Activity</label>
								</div>
							</div>
						</div>	
						<div class="row">
							<div class="col-12 col-lg-3 col-md-4 mb10 mb-md30">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="chackCategories" class="checkbox-active" type="checkbox">
								<label for="chackCategories" class="w500">Schedule Broadcast</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10 mb-md30">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ViewCategories" class="checkbox-active" type="checkbox">
								<label for="ViewCategories" class="w500">Score Rule</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10 mb-md30">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Addnewcategory" class="checkbox-active" type="checkbox">
								<label for="Addnewcategory" class="w500">Tag</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Deletecategories" class="checkbox-active" type="checkbox">
								<label for="Deletecategories" class="w500">Quick Mailing Group</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Deletecategories1" class="checkbox-active" type="checkbox">
								<label for="Deletecategories1" class="w500">Suppression List</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="EditMember" class="checkbox-active" type="checkbox">
								<label for="EditMember" class="w500">Automation</label>
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
					<div class="card-header collapsed" data-toggle="collapse" href="#pagerolestab">
						<a class="card-title lato-font">&nbsp; Video</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="pagerolestab" class="collapse">
						<div class="card-body">
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="checkPosts1" class="checkbox-active" type="checkbox">
									<label for="checkPosts1" class="w500">Players</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AddNewPlayer" class="checkbox-active" type="checkbox">
									<label for="AddNewPlayer">Add New Player</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="PlayerOne" class="checkbox-active" type="checkbox">
									<label for="PlayerOne">Player One</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="PlayerTwo" class="checkbox-active" type="checkbox">
									<label for="PlayerTwo">Player Two</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="PlayerThree" class="checkbox-active" type="checkbox">
									<label for="PlayerThree">Player Three</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="PlayerFour" class="checkbox-active" type="checkbox">
									<label for="PlayerFour">Player Four</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Categories2" class="checkbox-active" type="checkbox">
									<label for="Categories2" class="w500">Frames</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="FrameOne" class="checkbox-active" type="checkbox">
									<label for="FrameOne">Frame One</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="FrameTwo" class="checkbox-active" type="checkbox">
									<label for="FrameTwo">Frame Two</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="FrameThree" class="checkbox-active" type="checkbox">
									<label for="FrameThree">Frame Three</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Comments2" class="checkbox-active" type="checkbox">
									<label for="Comments2" class="w500">Analytics</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Viewcomments" class="checkbox-active" type="checkbox">
									<label for="Viewcomments">Overview</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Replyoncomment" class="checkbox-active" type="checkbox">
									<label for="Replyoncomment">Technology</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Location1" class="checkbox-active" type="checkbox">
									<label for="Location1">Location</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Deletecomment" class="checkbox-active" type="checkbox">
									<label for="Deletecomment">Compare</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10 mb-md30">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Result5" class="checkbox-active" type="checkbox">
									<label for="Result5">Result</label>
									</div>
								</div>
								<div class="col-12">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Automation" class="checkbox-active" type="checkbox">
									<label for="Automation" class="w500">Automation</label>
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
					<div class="card-header collapsed" data-toggle="collapse" href="#notificationrolestab">
						<a class="card-title lato-font">&nbsp; Page</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="notificationrolestab" class="collapse">
						<div class="card-body">
							<div class="row mb10">
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="LeadPages" class="checkbox-active" type="checkbox">
									<label for="LeadPages" class="w500">Create Your Own Pages</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="PromoPages" class="checkbox-active" type="checkbox">
									<label for="PromoPages" class="w500">Create Your Own A/B test Pages</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Automation1" class="checkbox-active" type="checkbox">
									<label for="Automation1" class="w500">Automation</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 mb10">
								 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Analytics3" class="checkbox-active" type="checkbox">
									<label for="Analytics3" class="w500">Analytics (Page & A/B test)</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Overview3" class="checkbox-active" type="checkbox">
									<label for="Overview3">Overview </label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Technology3" class="checkbox-active" type="checkbox">
									<label for="Technology3">Technology</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Location3" class="checkbox-active" type="checkbox">
									<label for="Location3">Location</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Compare3" class="checkbox-active" type="checkbox">
									<label for="Compare3">Compare</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Result3" class="checkbox-active" type="checkbox">
									<label for="Result3">Result</label>
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
					<div class="card-header collapsed" data-toggle="collapse" href="#SmartNotification">
						<a class="card-title lato-font">&nbsp; Notification</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="SmartNotification" class="collapse">
						<div class="card-body">
							<div class="row mb10">
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="OwnNotification" class="checkbox-active" type="checkbox">
									<label for="OwnNotification" class="w500">Create Your Own Notification</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="OwnWebforms" class="checkbox-active" type="checkbox">
									<label for="OwnWebforms" class="w500">Create Your Own Webforms</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Splash" class="checkbox-active" type="checkbox">
									<label for="Splash" class="w500">Create Your Own A/B Test</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="LightBox" class="checkbox-active" type="checkbox">
									<label for="LightBox" class="w500">Automation</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="PublishWebNotification" class="checkbox-active" type="checkbox">
									<label for="PublishWebNotification" class="w500">Publish Web Notification</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="OnScroll" class="checkbox-active" type="checkbox">
									<label for="OnScroll">On Scroll</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="OnDelay" class="checkbox-active" type="checkbox">
									<label for="OnDelay">On Delay</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="OnEntry" class="checkbox-active" type="checkbox">
									<label for="OnEntry">On Entry</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="OnExit" class="checkbox-active" type="checkbox">
									<label for="OnExit">On Exit</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="EntryAnimation" class="checkbox-active" type="checkbox">
									<label for="EntryAnimation">Entry Animation</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ExitAnimation" class="checkbox-active" type="checkbox">
									<label for="ExitAnimation">Exit Animation</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="CampaignScheduling" class="checkbox-active" type="checkbox">
									<label for="CampaignScheduling">Campaign Scheduling</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="PublishABTest" class="checkbox-active" type="checkbox">
									<label for="PublishABTest" class="w500">Publish A/B Test</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="OnScroll2" class="checkbox-active" type="checkbox">
									<label for="OnScroll2">On Scroll</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="OnDelay2" class="checkbox-active" type="checkbox">
									<label for="OnDelay2">On Delay</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="OnEntry2" class="checkbox-active" type="checkbox">
									<label for="OnEntry2">On Entry</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="OnExit2" class="checkbox-active" type="checkbox">
									<label for="OnExit2">On Exit</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="EntryAnimation2" class="checkbox-active" type="checkbox">
									<label for="EntryAnimation2">Entry Animation</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ExitAnimation2" class="checkbox-active" type="checkbox">
									<label for="ExitAnimation2">Exit Animation</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="CampaignScheduling2" class="checkbox-active" type="checkbox">
									<label for="CampaignScheduling2">Campaign Scheduling</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Analytics4" class="checkbox-active" type="checkbox">
									<label for="Analytics4" class="w500">Analytics (Web Notification & A/B Test)</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Overview4" class="checkbox-active" type="checkbox">
									<label for="Overview4">Overview</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Technology4" class="checkbox-active" type="checkbox">
									<label for="Technology4">Technology</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Location4" class="checkbox-active" type="checkbox">
									<label for="Location4">Location</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Compare4" class="checkbox-active" type="checkbox">
									<label for="Compare4">Compare</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Result4" class="checkbox-active" type="checkbox">
									<label for="Result4">Result</label>
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
					<div class="card-header collapsed" data-toggle="collapse" href="#AccountsTab">
						<a class="card-title lato-font">&nbsp; Accounts</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="AccountsTab" class="collapse">
						<div class="card-body">
							<div class="row">
								<div class="col-12 mb10">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Accounts" class="checkbox-active" type="checkbox">
									<label for="Accounts" class="w500">Accounts</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AllAccount" class="checkbox-active" type="checkbox">
									<label for="AllAccount">All Account</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ImportAccounts" class="checkbox-active" type="checkbox">
									<label for="ImportAccounts">Import Accounts</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ExportAccounts" class="checkbox-active" type="checkbox">
									<label for="ExportAccounts">Export Accounts</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AccountsSummary" class="checkbox-active" type="checkbox">
									<label for="AccountsSummary">Accounts Summary</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AccountsRecentActivity" class="checkbox-active" type="checkbox">
									<label for="AccountsRecentActivity">Accounts Feed & Recent Activity</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="EmailToAccount" class="checkbox-active" type="checkbox">
									<label for="EmailToAccount">Email To Account</label>
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
					<div class="card-header collapsed" data-toggle="collapse" href="#OtherFeatures">
						<a class="card-title lato-font">&nbsp; Other Features</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="OtherFeatures" class="collapse">
						<div class="card-body">
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Segments" class="checkbox-active" type="checkbox">
									<label for="Segments" class="w500">Segments</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AllSegments" class="checkbox-active" type="checkbox">
									<label for="AllSegments">All Segments</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ExportSegmentReport" class="checkbox-active" type="checkbox">
									<label for="ExportSegmentReport">Export Segment Report</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SegmentAnalytics" class="checkbox-active" type="checkbox">
									<label for="SegmentAnalytics" class="w500">Segment Analytics</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Overview1" class="checkbox-active" type="checkbox">
									<label for="Overview1">Overview</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Technology1" class="checkbox-active" type="checkbox">
									<label for="Technology1">Technology</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Location2" class="checkbox-active" type="checkbox">
									<label for="Location2">Location</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Compare2" class="checkbox-active" type="checkbox">
									<label for="Compare2">Compare</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Result1" class="checkbox-active" type="checkbox">
									<label for="Result1">Result</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="WebAnalytics" class="checkbox-active" type="checkbox">
									<label for="WebAnalytics" class="w500">Web Analytics</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Overview5" class="checkbox-active" type="checkbox">
									<label for="Overview5">Overview</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Technology5" class="checkbox-active" type="checkbox">
									<label for="Technology5">Technology</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Location5" class="checkbox-active" type="checkbox">
									<label for="Location5">Location</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Compare5" class="checkbox-active" type="checkbox">
									<label for="Compare5">Compare</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Result6" class="checkbox-active" type="checkbox">
									<label for="Result6">Result</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Library" class="checkbox-active" type="checkbox">
									<label for="Library" class="w500">Library</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="FolderManagement" class="checkbox-active" type="checkbox">
									<label for="FolderManagement">Folder Management</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ShareLibraryItems" class="checkbox-active" type="checkbox">
									<label for="ShareLibraryItems">Share Library Items</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Integration" class="checkbox-active" type="checkbox">
									<label for="Integration" class="w500">Integration</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="CategoryOne" class="checkbox-active" type="checkbox">
									<label for="CategoryOne">Category One</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="CategoryTwo" class="checkbox-active" type="checkbox">
									<label for="CategoryTwo">Category Two</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="CategoryThree" class="checkbox-active" type="checkbox">
									<label for="CategoryThree">Category Three</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="CustomField" class="checkbox-active" type="checkbox">
									<label for="CustomField" class="w500">Custom Field</label>
									</div>
								</div>
							</div>	
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 f-18 w400 mt-md30 mt15">Feature’s Price</div>
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#Pricing">
						<a class="card-title lato-font">&nbsp; Pricing</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="Pricing" class="collapse">
						<div class="card-body">
							<div class="d-flex justify-content-start flex-wrap">
								<div class="smart-radio-btn radio-strong-blue mr25 publish-radio">
									<input name="subcprice" class="subc-prices" id="paid-subscription" value="option1" type="radio" checked="checked">
									<label for="paid-subscription"> Paid Subscription </label>
								</div>
								<div class="smart-radio-btn radio-strong-blue mr25 draft-radio">
									<input name="subcprice" class="subc-prices" id="one-time-prices" value="option1" type="radio">
									<label for="one-time-prices"> One Time Prices </label>
								</div>
								<div class="smart-radio-btn radio-strong-blue draft-radio">
									<input name="subcprice" class="subc-prices" id="free-subc" value="option1" type="radio">
									<label for="free-subc"> Life Time Free </label>
								</div>
							</div>
							<div class="row smart-form d-gblue-clr mt15 mt-md25" id="hidden_fields_one">
								<div class="col-12 mb10 mb-md20">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="trialduration" name="trialdur" type="checkbox">
									<label for="trialduration" class="mb0">Set trial for certain duration</label>
									</div>
								</div>
                                
                                <div class="col-12" id="certainduration">
                                <div class="row align-items-center">
								
									<div class="col-12 col-md-7 col-lg-7 col-xl-5 mb-md30 mb20">
										<label>Days</label>
										<input type="text" class="form-control" placeholder="Days" value="50">
									</div>
                                    <div class="col-12 col-md-5 col-lg-5 col-xl-3 mb-md30 mb20 new-package-form">
                                        <div class="d-flex row align-items-center">
                                            <div class="col-12 col-md-8">
                                                <label>Price</label>
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
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="col-12 mb15">
                                    <p class="w600 vd-gblue-clr">Price after free trial</p>
                                    </div>
									
                                </div>
                                </div>
								
								<div class="col-12">
									<div class="row align-items-center">
										<div class="col-12 col-md-7 col-lg-7 col-xl-5 new-package-form">
											<label>Price</label>
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
										<div class="col-12 col-md-5 col-lg-5 col-xl-3 mt-md0 mt15">
											<div class="d-flex row align-items-center">
												<div class="col-12 col-md-8">
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
										<div class="row align-items-center mt-md20 mt0">
											<div class="col-12 col-md-7 col-lg-7 col-xl-5 mt-md0 mt15 new-package-form">
												<label>Price</label>
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
											<div class="col-12 col-md-5 col-lg-5 col-xl-3 mt-md0 mt15">
												<div class="d-flex row align-items-center">
													<div class="col-12 col-md-8">
														<label>Duration</label>
														<select class="selectpicker f-14" title="Half-Yearly">
															<option>Monthly</option>
															<option>Half-Yearly</option>
															<option>Yearly</option>
														</select>
													</div>
													<a href="#" class="d-inline-block d-gblue-clr segment-delete mt15 mt-md25 px10 f-16 t-decoration-none"><i class="icon-delete"></i></a>
													<a href="#" class="d-inline-block p-blue-clr segment-add f-16 mt15 mt-md25 px10 t-decoration-none"><i class="icon-add-three"></i></a>
												</div>
											</div>
											
										</div>
								</div>
							</div>
							<div class="row align-items-center smart-form d-gblue-clr mt15 mt-md25" id="hidden_fields_Two">
								<div class="col-12 col-md-7 col-lg-5 new-package-form">
									<label>Enter One Time Price</label>
									<div class="input-group">
										<input type="text" class="form-control radiusrb0" placeholder="Enter One Time Price" aria-label="" aria-describedby="basic-addon2" value="50">
										<div class="input-group-append">
											<select class="selectpicker f-14">
												<option>$</option>
												<option>Rs</option>
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
		
		<!-- Next & Cancel Button -->
		<div class="text-right f-16 col-12 mt-md30 mt15">
			<a href="javascript:void(0)" class="base-btn default-btn mr5 btn-xs-block">Save as Draft</a>
			<a href="javascript:void(0)" class="base-btn default-btn mr5 btn-xs-block mt10 mt-md0">Cancel</a>
			<a href="#" class="base-btn blue-btn btn-xs-block mt10 mt-md0">&nbsp;Next&nbsp;</a>
		</div>
	</div>
</div>
<!------- Smart Footer Include File ---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->