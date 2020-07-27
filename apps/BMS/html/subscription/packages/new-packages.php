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
					<div class="title align-self-center">Product ID Configuration</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				</div>
				<div class="d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span> 4</span></div>
					<div class="title align-self-center">Preview & Update</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				</div>
			</div>
		</div>
	</div>
	<!------- Header End ----------->

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
							<div class="col-12">
								 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="SelectAll1" class="checkbox-active" type="checkbox">
								<label for="SelectAll1" class="w500">Select All</label>
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
							<div class="col-12 col-lg-3 col-md-4 mb10">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="chackCategories" class="checkbox-active" type="checkbox">
								<label for="chackCategories" class="w500">Schedule Mail</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="SpamChecker" class="checkbox-active" type="checkbox">
								<label for="SpamChecker" class="w500">Spam Checker</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Inbuilttext" class="checkbox-active" type="checkbox">
								<label for="Inbuilttext" class="w500">Inbuilt text</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="inlineeditor" class="checkbox-active" type="checkbox">
								<label for="inlineeditor" class="w500">inline editor</label>
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
								<div class="col-12">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SelectAll2" class="checkbox-active" type="checkbox">
									<label for="SelectAll2" class="w500">Select All</label>
									</div>
								</div>
							</div>
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
									<label for="AddNewPlayer">Customize New Player</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="PlayerOne" class="checkbox-active" type="checkbox">
									<label for="PlayerOne">Blue-Eyed</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="PlayerTwo" class="checkbox-active" type="checkbox">
									<label for="PlayerTwo">BigMaxx</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="PlayerThree" class="checkbox-active" type="checkbox">
									<label for="PlayerThree">Blimes</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="PlayerFour" class="checkbox-active" type="checkbox">
									<label for="PlayerFour">Tickled Pink</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="BlueBlood" class="checkbox-active" type="checkbox">
									<label for="BlueBlood">BlueBlood</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="PlayerCustomization" class="checkbox-active" type="checkbox">
									<label for="PlayerCustomization" class="w500">Player Customization</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="PlayerDetails" class="checkbox-active" type="checkbox">
									<label for="PlayerDetails">Branding</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Appearance" class="checkbox-active" type="checkbox">
									<label for="Appearance">Appearance</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="PlayerControls" class="checkbox-active" type="checkbox">
									<label for="PlayerControls">Controls</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="VideoActions" class="checkbox-active" type="checkbox">
									<label for="VideoActions">Video Actions</label>
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
									<input id="CosmosWhite" class="checkbox-active" type="checkbox">
									<label for="CosmosWhite">Mobile : Cosmos(White)</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="PolarisBlack" class="checkbox-active" type="checkbox">
									<label for="PolarisBlack">Mobile : Polaris(Black)</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="NebulaWhite" class="checkbox-active" type="checkbox">
									<label for="NebulaWhite">Laptop : Nebula(White)</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="MarianaGrey" class="checkbox-active" type="checkbox">
									<label for="MarianaGrey">Laptop : Mariana(Grey)</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="OrionBlack" class="checkbox-active" type="checkbox">
									<label for="OrionBlack">Laptop : Orion(Black)</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="IvoryWhite" class="checkbox-active" type="checkbox">
									<label for="IvoryWhite">Tablet : Ivory(White)</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="NovaGrey" class="checkbox-active" type="checkbox">
									<label for="NovaGrey">Tablet : Nova(Grey)</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AbyssBlack" class="checkbox-active" type="checkbox">
									<label for="AbyssBlack">Tablet : Abyss(Black)</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AdvertisementType" class="checkbox-active" type="checkbox">
									<label for="AdvertisementType" class="w500">Advertisement Type</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="VideoApp" class="checkbox-active" type="checkbox">
									<label for="VideoApp">Video App</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="HTML" class="checkbox-active" type="checkbox">
									<label for="HTML">HTML</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Image" class="checkbox-active" type="checkbox">
									<label for="Image">Image</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Text" class="checkbox-active" type="checkbox">
									<label for="Text">Text</label>
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
								
							</div>	
							<div class="row">
							<div class="col-12 col-lg-3 col-md-4 mb10 mb-md0">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SEO" class="checkbox-active" type="checkbox">
									<label for="SEO" class="w500">SEO</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10 mb-md0">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Security" class="checkbox-active" type="checkbox">
									<label for="Security" class="w500">Security</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="playlist" class="checkbox-active" type="checkbox">
									<label for="playlist" class="w500">Playlist</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ChannelsBanner" class="checkbox-active" type="checkbox">
									<label for="ChannelsBanner" class="w500">Channels Banner</label>
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
							<div class="row mb-md30 mb10">
								<div class="col-12">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SelectAll3" class="checkbox-active" type="checkbox">
									<label for="SelectAll3" class="w500">Select All</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
							<div class="col-12 mb10">
								 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Pageselect" class="checkbox-active" type="checkbox">
									<label for="Pageselect" class="w500">Page</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ownPage" class="checkbox-active" type="checkbox">
									<label for="ownPage">Create your own Page</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ABtestPage" class="checkbox-active" type="checkbox">
									<label for="ABtestPage">Create your own A/B Test Page</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="RestoreVersion" class="checkbox-active" type="checkbox">
									<label for="RestoreVersion">Restore Version</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="DuplicatePage" class="checkbox-active" type="checkbox">
									<label for="DuplicatePage">Duplicate Page</label>
									</div>
								</div>
									<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SaveasPageTemplate" class="checkbox-active" type="checkbox">
									<label for="SaveasPageTemplate">Save as Page Template</label>
									</div>
								</div>								
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
								 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Download" class="checkbox-active" type="checkbox">
									<label for="Download" class="w500">Download Option</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="DownloadPages" class="checkbox-active" type="checkbox">
									<label for="DownloadPages">Download Page</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="downloadpagetemplates" class="checkbox-active" type="checkbox">
									<label for="downloadpagetemplates">Download Page templates</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="otherbusiness" class="checkbox-active" type="checkbox">
									<label for="otherbusiness">Copy to other business</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="dcpbranding" class="checkbox-active" type="checkbox">
									<label for="dcpbranding">DotcomPal Branding</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SaveasPageTemplate" class="checkbox-active" type="checkbox">
									<label for="SaveasPageTemplate">Save as Page Template</label>
									</div>
								</div>
					
							</div>
							<div class="row">
								<div class="col-12 mb10">
								 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="PagesAnalytics3" class="checkbox-active" type="checkbox">
									<label for="PagesAnalytics3" class="w500">Analytics (Pages & A/B Test)</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="PagesOverview3" class="checkbox-active" type="checkbox">
									<label for="PagesOverview3">Overview </label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="PagesTechnology3" class="checkbox-active" type="checkbox">
									<label for="PagesTechnology3">Technology</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="PagesLocation3" class="checkbox-active" type="checkbox">
									<label for="PagesLocation3">Location</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="PagesCompare3" class="checkbox-active" type="checkbox">
									<label for="PagesCompare3">Compare</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="PagesResult3" class="checkbox-active" type="checkbox">
									<label for="PagesResult3">Result</label>
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
					<div class="card-header collapsed" data-toggle="collapse" href="#journeytab">
						<a class="card-title lato-font">&nbsp; Journey</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="journeytab" class="collapse">
						<div class="card-body">
							<div class="row mb-md30 mb10">
								<div class="col-12">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="journeyselectall" class="checkbox-active" type="checkbox">
									<label for="journeyselectall" class="w500">Select All</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
							<div class="col-12 mb10">
								 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Journeyselect" class="checkbox-active" type="checkbox">
									<label for="Journeyselect" class="w500">Journey</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ownjourney" class="checkbox-active" type="checkbox">
									<label for="ownjourney">Create your Journey</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="duplicatejourney" class="checkbox-active" type="checkbox">
									<label for="duplicatejourney">Duplicate Journey</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="saveastemplate" class="checkbox-active" type="checkbox">
									<label for="saveastemplate">Save As Template</label>
									</div>
								</div>
									<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="saveasjourneytemplate" class="checkbox-active" type="checkbox">
									<label for="saveasjourneytemplate">Save as Journey Template</label>
									</div>
								</div>								
							</div>
							<div class="row mb-md30 mb10">
							<div class="col-12 mb10">
								 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="JourneyType" class="checkbox-active" type="checkbox">
									<label for="JourneyType" class="w500">Journey Type</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="TargetedLeads" class="checkbox-active" type="checkbox">
									<label for="TargetedLeads">Targeted Leads</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="MoreSales" class="checkbox-active" type="checkbox">
									<label for="MoreSales">More Sales</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="WebinarRegistration" class="checkbox-active" type="checkbox">
									<label for="WebinarRegistration">Webinar Registration</label>
									</div>
								</div>
									<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="LeadsOnWebsite" class="checkbox-active" type="checkbox">
									<label for="LeadsOnWebsite">Leads On Website</label>
									</div>
								</div>	
									<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="PromoOnWebsite" class="checkbox-active" type="checkbox">
									<label for="PromoOnWebsite">Promo On Website</label>
									</div>
								</div>	
									<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ProductDealLaunch" class="checkbox-active" type="checkbox">
									<label for="ProductDealLaunch">Product/Deal Launch</label>
									</div>
								</div>	
									<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="FollowUp" class="checkbox-active" type="checkbox">
									<label for="FollowUp">Follow Up</label>
									</div>
								</div>									
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
								 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Trigger" class="checkbox-active" type="checkbox">
									<label for="Trigger" class="w500">Trigger</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Contacts" class="checkbox-active" type="checkbox">
									<label for="Contacts">Contacts</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AttributeChanges" class="checkbox-active" type="checkbox">
									<label for="AttributeChanges">Attribute Changes</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Segments" class="checkbox-active" type="checkbox">
									<label for="Segments">Segments</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Email" class="checkbox-active" type="checkbox">
									<label for="Email">Email</label>
									</div>
								</div>				
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
								 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Action" class="checkbox-active" type="checkbox">
									<label for="Action" class="w500">Action</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AddtoList" class="checkbox-active" type="checkbox">
									<label for="AddtoList">Add to List</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SendEmail" class="checkbox-active" type="checkbox">
									<label for="SendEmail">Send Email</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AddTag" class="checkbox-active" type="checkbox">
									<label for="AddTag">Add Tag</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AddToQMG" class="checkbox-active" type="checkbox">
									<label for="AddToQMG">Add To QMG</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="LeadScore" class="checkbox-active" type="checkbox">
									<label for="LeadScore">Lead Score</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ShowLandingPage" class="checkbox-active" type="checkbox">
									<label for="ShowLandingPage">Show Landing Page</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Showpop-upBars" class="checkbox-active" type="checkbox">
									<label for="Showpop-upBars">Show pop-up & Bars</label>
									</div>
								</div>
					
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
								 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="DownloadOption" class="checkbox-active" type="checkbox">
									<label for="DownloadOption" class="w500">Download Option</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="DownloadJourney" class="checkbox-active" type="checkbox">
									<label for="DownloadJourney">Download Journey</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="DownloadJourneyTemplate" class="checkbox-active" type="checkbox">
									<label for="DownloadJourneyTemplate">Download Journey Template</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="copyotherbusiness" class="checkbox-active" type="checkbox">
									<label for="copyotherbusiness">Copy to other business</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 mb10">
								 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="JourneyAnalytics" class="checkbox-active" type="checkbox">
									<label for="JourneyAnalytics" class="w500">Analytics</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="JourneyOverview" class="checkbox-active" type="checkbox">
									<label for="JourneyOverview">Journey Overview </label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="overview" class="checkbox-active" type="checkbox">
									<label for="overview">Overview </label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="journeyLocation3" class="checkbox-active" type="checkbox">
									<label for="journeyLocation3">Location</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="journeyTechnology3" class="checkbox-active" type="checkbox">
									<label for="journeyTechnology3">Technology</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="journeyResult3" class="checkbox-active" type="checkbox">
									<label for="journeyResult3">Result</label>
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
						<a class="card-title lato-font">&nbsp; Popups and Bars</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="SmartNotification" class="collapse">
						<div class="card-body">
							<div class="row mb-md30 mb10">
								<div class="col-12">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SelectAll4" class="checkbox-active" type="checkbox">
									<label for="SelectAll4" class="w500">Select All</label>
									</div>
								</div>
							</div>
								<div class="row mb10">
								<div class="col-12">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="PopupsSticky Bars" class="checkbox-active" type="checkbox">
									<label for="PopupsSticky Bars" class="w500">Popups and Bars</label>
									</div>
								</div>
							</div>
							<div class="row mb10 mb-md30">
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="OwnNotification" class="checkbox-active" type="checkbox">
									<label for="OwnNotification">Create Your Popups and Bars</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Splash" class="checkbox-active" type="checkbox">
									<label for="Splash">Create Your Own A/B Test</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="DuplicateCampaign" class="checkbox-active" type="checkbox">
									<label for="DuplicateCampaign">Duplicate Campaign</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SaveasTemplate" class="checkbox-active" type="checkbox">
									<label for="SaveasTemplate">Save as Template</label>
									</div>
								</div>
							</div>
							<div class="row mb10 mb-md30">
								<div class="col-12 mb10">
								 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="PopupDownload" class="checkbox-active" type="checkbox">
									<label for="PopupDownload" class="w500">Download Option</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="popuppage" class="checkbox-active" type="checkbox">
									<label for="popuppage">Download Popups and Bars</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="popuptemplates" class="checkbox-active" type="checkbox">
									<label for="popuptemplates">Download Templates</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="popupbusiness" class="checkbox-active" type="checkbox">
									<label for="popupbusiness">Copy to other business</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="PopupBranding" class="checkbox-active" type="checkbox">
									<label for="PopupBranding">DotcomPal Branding</label>
									</div>
								</div>
					
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="PublishWebNotification" class="checkbox-active" type="checkbox">
									<label for="PublishWebNotification" class="w500">Publish Popups and Bars</label>
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
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Setmaximumlimits" class="checkbox-active" type="checkbox">
									<label for="Setmaximumlimits">Set Maximum Limits</label>
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
							<div class="row mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Analytics4" class="checkbox-active" type="checkbox">
									<label for="Analytics4" class="w500">Analytics (Popups and Bars & A/B Test)</label>
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
						<a class="card-title lato-font">&nbsp; Audience</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="AccountsTab" class="collapse">
						<div class="card-body">
							<div class="row mb-md30 mb10">
								<div class="col-12">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SelectAll6" class="checkbox-active" type="checkbox">
									<label for="SelectAll6" class="w500">Select All</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Contacts" class="checkbox-active" type="checkbox">
									<label for="Contacts" class="w500">Contacts</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AllAccount" class="checkbox-active" type="checkbox">
									<label for="AllAccount">All Contact</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ImportAccounts" class="checkbox-active" type="checkbox">
									<label for="ImportAccounts">Import Contact</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AccountsSummary" class="checkbox-active" type="checkbox">
									<label for="AccountsSummary">Contact Summary</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AccountsRecentActivity" class="checkbox-active" type="checkbox">
									<label for="AccountsRecentActivity">Contact Feed & Recent Activity</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="EmailToAccount" class="checkbox-active" type="checkbox">
									<label for="EmailToAccount">Email To Contact</label>
									</div>
								</div>
							</div>
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
									<label for="AllSegments">All Segment</label>
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
									<label for="SegmentAnalytics" class="w500">Audience Analytics</label>
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

							<div class="row">
								<div class="col-12 col-lg-3 col-md-4 mb10 mb-md30">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="List1" class="checkbox-active" type="checkbox">
									<label for="List1" class="w500">List</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10 mb-md30">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="HealthCheck" class="checkbox-active" type="checkbox">
									<label for="HealthCheck" class="w500">List Health Check</label>
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
									<input id="Deletecategories1" class="checkbox-active" type="checkbox">
									<label for="Deletecategories1" class="w500">Suppression List</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="CustomField" class="checkbox-active" type="checkbox">
									<label for="CustomField" class="w500">Custom Field</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SingleAccountSystem" class="checkbox-active" type="checkbox">
									<label for="SingleAccountSystem" class="w500">Single Account System</label>
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
					<div class="card-header collapsed" data-toggle="collapse" href="#SmartMyDrive">
						<a class="card-title lato-font">&nbsp; MyDrive</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="SmartMyDrive" class="collapse">
						<div class="card-body">
							<div class="row mb-md30 mb10">
								<div class="col-12">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SelectAllMyDrive" class="checkbox-active" type="checkbox">
									<label for="SelectAllMyDrive" class="w500">Select All</label>
									</div>
								</div>
							</div>
							<div class="row mb10">
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="FolderManagement" class="checkbox-active" type="checkbox">
									<label for="FolderManagement" class="w500">Folder Management</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SEO" class="checkbox-active" type="checkbox">
									<label for="SEO" class="w500">S.E.O.</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ImageResolution" class="checkbox-active" type="checkbox">
									<label for="ImageResolution" class="w500">Image Resolution</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="PersonalMyDrive" class="checkbox-active" type="checkbox">
									<label for="PersonalMyDrive" class="w500">Personal MyDrive</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ChannelBanner" class="checkbox-active" type="checkbox">
									<label for="ChannelBanner" class="w500">Channel Banner</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Share" class="checkbox-active" type="checkbox">
									<label for="Share" class="w500">Share</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="DriveImage" class="checkbox-active" type="checkbox">
									<label for="DriveImage">Image</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Video" class="checkbox-active" type="checkbox">
									<label for="Video">Video</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Audio" class="checkbox-active" type="checkbox">
									<label for="Audio">Audio</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Document" class="checkbox-active" type="checkbox">
									<label for="Document">Document</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Folder" class="checkbox-active" type="checkbox">
									<label for="Folder">Folder</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Others" class="checkbox-active" type="checkbox">
									<label for="Others">Others</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SubscriberManagement" class="checkbox-active" type="checkbox">
									<label for="SubscriberManagement" class="w500">Subscriber Management</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="LikeDislike" class="checkbox-active" type="checkbox">
									<label for="LikeDislike">Like/Dislike</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="LoginSignup" class="checkbox-active" type="checkbox">
									<label for="LoginSignup">Login/Signup</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SocialShare" class="checkbox-active" type="checkbox">
									<label for="SocialShare">Social Share</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AnalyticsDrive" class="checkbox-active" type="checkbox">
									<label for="AnalyticsDrive" class="w500">Analytics</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="OverviewDrive" class="checkbox-active" type="checkbox">
									<label for="OverviewDrive">Overview</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Location" class="checkbox-active" type="checkbox">
									<label for="Location">Location</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Technology" class="checkbox-active" type="checkbox">
									<label for="Technology">Technology</label>
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
								<div class="col-12">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SelectAll7" class="checkbox-active" type="checkbox">
									<label for="SelectAll7" class="w500">Select All</label>
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
									<label for="CategoryOne">Autoresponder</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="CategoryTwo" class="checkbox-active" type="checkbox">
									<label for="CategoryTwo">Customer Relationship Management</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="CategoryThree" class="checkbox-active" type="checkbox">
									<label for="CategoryThree">Webinar</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ContentProvider" class="checkbox-active" type="checkbox">
									<label for="ContentProvider">Content Provider</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Drives" class="checkbox-active" type="checkbox">
									<label for="Drives">Drives</label>
									</div>
								</div>
							</div>
							
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Integration" class="checkbox-active" type="checkbox">
									<label for="Integration" class="w500">Storage</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="CategoryOne" class="checkbox-active" type="checkbox">
									<label for="CategoryOne">BackBlaze</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="CategoryTwo" class="checkbox-active" type="checkbox">
									<label for="CategoryTwo">Amazon S3</label>
									</div>
								</div>
								
							</div>
							
							<div class="row">
								<div class="col-12 col-lg-3 col-md-4 mb10">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="TeamActivity" class="checkbox-active" type="checkbox">
									<label for="TeamActivity" class="w500">Team Activity</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="BusinessSEO" class="checkbox-active" type="checkbox">
									<label for="BusinessSEO" class="w500">Business SEO</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="DotcomPalBranding" class="checkbox-active" type="checkbox">
									<label for="DotcomPalBranding" class="w500">DotcomPal Branding</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="DedicatedIPAddresses" class="checkbox-active" type="checkbox">
									<label for="DedicatedIPAddresses" class="w500">Dedicated IP Address</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Installation" class="checkbox-active" type="checkbox">
									<label for="Installation" class="w500">Installation</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="HomePageSetting" class="checkbox-active" type="checkbox">
									<label for="HomePageSetting" class="w500">Home Page Setting</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="WebmasterSetting" class="checkbox-active" type="checkbox">
									<label for="WebmasterSetting" class="w500">Webmaster Setting</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="CookieConsent" class="checkbox-active" type="checkbox">
									<label for="CookieConsent" class="w500">Cookie Consent</label>
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
							<div class="row smart-form mt15 mt-md25" id="hidden_fields_one">
								<div class="col-12 mb10 mb-md20">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="trialduration" name="trialdur" type="checkbox">
									<label for="trialduration" class="mb0">Set trial for certain duration</label>
									</div>
								</div>
                                
                                <div class="col-12" id="certainduration">
								<div class="row align-items-center d-gblue-clr">
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
													<div class="col-9 col-md-8">
														<label>Days</label>
														<input type="text" class="form-control" placeholder="Days" value="50">
													</div>												
												</div>
											</div>
											 <div class="col-12 my15">
										<p class="w600 vd-gblue-clr">Price after free trial</p>
                                    </div>
											
										</div>
                           
								
                                </div>
								
								<div class="col-12">
									<div class="row align-items-center d-gblue-clr">
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
												<div class="col-10 col-md-8">
													<label>Duration</label>
													<select class="selectpicker f-14" title="Duration">
														<option>Monthly</option>
														<option>Half-Yearly</option>
														<option>Yearly</option>
														<option>2 Yearly</option>
														<option>5 Yearly</option>
														<option>20 Yearly</option>
													</select>
												</div>
												<a href="#" class="d-inline-block p-blue-clr segment-add f-16 mt25 px15 t-decoration-none">
												<i class="icon-add-three"></i></a>
											</div>
										</div>
										
										</div>
										<div class="row align-items-center mt-md20 mt0 d-gblue-clr">
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
													<div class="col-9 col-md-8">
														<label>Duration</label>
														<select class="selectpicker f-14" title="Duration">
															<option>Monthly</option>
															<option>Half-Yearly</option>
															<option>Yearly</option>
															<option>2 Yearly</option>
															<option>5 Yearly</option>
															<option>20 Yearly</option>
														</select>
													</div>
													<a href="#" class="d-inline-block d-gblue-clr segment-delete mt25 px10 f-16 t-decoration-none"><i class="icon-delete"></i></a>
													<a href="#" class="d-inline-block p-blue-clr segment-add f-16 mt25 px-md10 t-decoration-none"><i class="icon-add-three"></i></a>
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