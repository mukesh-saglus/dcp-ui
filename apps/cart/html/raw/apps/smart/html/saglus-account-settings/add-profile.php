<!------- DCP Header Include File---------->
<?php include '../includes/dcp-header.php' ?>
<!------- DCP Header Include File end---------->

<div class="container-fluid p15 p-md30">

	<!------- Header Start----------->
	<div class="row mb15 mb-md30">
		<div class="col-12">
			<div class="d-flex align-items-center flex-wrap">
				<ul class="stepwizard-style2 f-18 f-sm-24 w400 lato-font mr15">
					<li> <a href="#">Profile</a> </li>
					<li> <a href="#">New Profile</a> </li>
				</ul>
				<div class="d-flex mt7">
					<a href="#" class="gblue-clr t-decoration-none f-17 mr5" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
					<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
				</div>
			</div>
			<p class="f-14 gblue-clr mt5">Get Complete Information about all your campaign here </p>
		</div>
	</div>
	<!------- Header End ----------->

	<!---------- Add Profile Section --------->
	<div class="row">
		<div class="col-12 segment-accordion smart-form">
			<div id="accordion" class="accordion hidetab-icon">
				<div class="card mb-0 f-16">
					<div class="card-header radiusb0" href="#collapseurl">
						<a class="card-title lato-font">Business</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select your business and enter the profile name." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="collapseurl" class="collapse show">
						<div class="card-body">
						<div class="form-group row">
							<label class="col-12 col-md-3 col-lg-2 d-flex align-self-center">Business Name</label>
							<div class="col-12 col-md-9 col-lg-4">
								<select class="selectpicker f-14">
								<option>eduncle.com</option>
								<option>saglus.com</option>
								</select>
							</div>
						</div>
						<div class="form-group row mb0">
							<label class="col-12 col-md-3 col-lg-2 d-flex align-self-center">Profile Name</label>
							<div class="col-12 col-md-9 col-lg-4">
								<input type="text" class="form-control" placeholder="Enter Profile Name">
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
					<div class="card-header collapsed" data-toggle="collapse" href="#blogrolestab">
						<a class="card-title lato-font">&nbsp; Blog</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select Blog features you want to give access to this profile." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
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
								<input id="checkPosts" class="checkbox-active" type="checkbox">
								<label for="checkPosts" class="w500">Posts</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ViewPosts" class="checkbox-active" type="checkbox">
								<label for="ViewPosts">View Posts</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="AddPosts" class="checkbox-active" type="checkbox" checked disabled>
								<label for="AddPosts">Add New Posts</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="EditPosts" class="checkbox-active" type="checkbox">
								<label for="EditPosts">Edit Posts</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="DeletePosts" class="checkbox-active" type="checkbox">
								<label for="DeletePosts">Delete Posts</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="RevisionHistory" class="checkbox-active" type="checkbox">
								<label for="RevisionHistory">Revision History</label>
								</div>
							</div>
							
						</div>
						<div class="row mb-md30 mb10">
							<div class="col-12 mb10">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="chackCategories" class="checkbox-active" type="checkbox">
								<label for="chackCategories" class="w500">Categories</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ViewCategories" class="checkbox-active" type="checkbox">
								<label for="ViewCategories">View categories</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Addnewcategory" class="checkbox-active" type="checkbox">
								<label for="Addnewcategory">Add new category</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Editcategories" class="checkbox-active" type="checkbox">
								<label for="Editcategories">Edit categories</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Deletecategories" class="checkbox-active" type="checkbox">
								<label for="Deletecategories">Delete categories</label>
								</div>
							</div>
						</div>
						<div class="row mb-md30 mb10">
							<div class="col-12 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="checkTags" class="checkbox-active" type="checkbox">
								<label for="checkTags" class="w500">Tags</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Viewtags" class="checkbox-active" type="checkbox">
								<label for="Viewtags">View tags</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Addnewtag" class="checkbox-active" type="checkbox">
								<label for="Addnewtag">Add new tag</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Edittags" class="checkbox-active" type="checkbox">
								<label for="Edittags">Edit tags</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Deletetags" class="checkbox-active" type="checkbox">
								<label for="Deletetags">Delete tags</label>
								</div>
							</div>
						</div>
						<div class="row mb-md30 mb10">
							<div class="col-12 mb10">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="checkComments" class="checkbox-active" type="checkbox">
								<label for="checkComments" class="w500">Comments</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Viewcomments" class="checkbox-active" type="checkbox">
								<label for="Viewcomments">View comment</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Editcomment" class="checkbox-active" type="checkbox">
								<label for="Editcomment">Edit comment</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Deletecomment" class="checkbox-active" type="checkbox">
								<label for="Deletecomment">Delete comment</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Approvecomment" class="checkbox-active" type="checkbox">
								<label for="Approvecomment">Approve comment</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Rejectcomment" class="checkbox-active" type="checkbox">
								<label for="Rejectcomment">Reject comment</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Replyoncomment" class="checkbox-active" type="checkbox">
								<label for="Replyoncomment">Reply on comment</label>
								</div>
							</div>
						</div>		
						<div class="row">
							<div class="col-12 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="checkPosts29" class="checkbox-active  parent-module-smart parent_check_29" module_id="29" type="checkbox">
								<label for="checkPosts29" class="w500 ng-binding">
								XML Sitemap
								</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="SitemapBasicOptions" class="checkbox-active" type="checkbox">
								<label for="SitemapBasicOptions">Sitemap Basic Options</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="SitemapBasicOptions1" class="checkbox-active" type="checkbox">
								<label for="SitemapBasicOptions1">Sitemap Additional Pages</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="SitemapBasicOptions2" class="checkbox-active" type="checkbox">
								<label for="SitemapBasicOptions2">Sitemap Post Priority</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="SitemapBasicOptions3" class="checkbox-active" type="checkbox">
								<label for="SitemapBasicOptions3">sitemap Sitemap Content</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="SitemapBasicOptions4" class="checkbox-active" type="checkbox">
								<label for="SitemapBasicOptions4">Sitemap Excluded Items</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="SitemapBasicOptions5" class="checkbox-active" type="checkbox">
								<label for="SitemapBasicOptions5">Sitemap Change Frequencies</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="SitemapBasicOptions6" class="checkbox-active" type="checkbox">
								<label for="SitemapBasicOptions6">Sitemap Priorities</label>
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
					<div class="card-header collapsed" data-toggle="collapse" href="#ProjectManagement" aria-expanded="true">
						<a class="card-title lato-font">&nbsp; Project Management</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select SMART Mail features you want to give access to this profile." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="ProjectManagement" class="collapse">
						<div class="card-body">
						<div class="row">
							<div class="col-12 mb10">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Project4" class="checkbox-active" type="checkbox">
								<label for="Project4" class="w500">Project</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="CreateProjects4" class="checkbox-active" type="checkbox">
								<label for="CreateProjects4">Create Projects</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="EditProjects4" class="checkbox-active" type="checkbox">
								<label for="EditProjects4">Edit Projects</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="DeleteProjects4" class="checkbox-active" type="checkbox">
								<label for="DeleteProjects4">Delete Projects</label>
								</div>
							</div>
							<!--<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ExportProjects" class="checkbox-active" type="checkbox">
								<label for="ExportProjects">Export Projects</label>
								</div>
							</div>-->
						</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#smartmail" aria-expanded="true">
						<a class="card-title lato-font">&nbsp; Mail</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select SMART Mail features you want to give access to this profile." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="smartmail" class="collapse">
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
								<input id="Mail1" class="checkbox-active" type="checkbox">
								<label for="Mail1" class="w500">Mail</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="AddMail" class="checkbox-active" type="checkbox">
								<label for="AddMail">Add Mail</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="EditMail" class="checkbox-active" type="checkbox">
								<label for="EditMail">Edit Mail</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="DeleteMail" class="checkbox-active" type="checkbox">
								<label for="DeleteMail">Delete Mail</label>
								</div>
							</div>
						</div>
						<div class="row mb-md30 mb10">
							<div class="col-12 mb10">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="abtest" class="checkbox-active" type="checkbox">
								<label for="abtest" class="w500">A/B Test</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="abtestBroadcast" class="checkbox-active" type="checkbox">
								<label for="abtestBroadcast">Add A/B Test Mail</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="editabtest" class="checkbox-active" type="checkbox">
								<label for="editabtest">Edit A/B Test Mail</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="deleteabtest" class="checkbox-active" type="checkbox">
								<label for="deleteabtest">Delete A/B Test Mail</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="viewabtest" class="checkbox-active" type="checkbox">
								<label for="viewabtest">View A/B Test Mail</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ViewTestMailAnalytics" class="checkbox-active" type="checkbox">
								<label for="ViewTestMailAnalytics">View A/B Test Mail Analytics</label>
								</div>
							</div>
						</div>	
						<div class="row">
							<div class="col-12 mb10">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="MailReports" class="checkbox-active" type="checkbox">
								<label for="MailReports" class="w500">Mail Analytics</label>
								</div>
							</div>
							<div class="col-12">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ViewReports" class="checkbox-active" type="checkbox">
								<label for="ViewReports">View Analytics</label>
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
					<div class="card-header collapsed" data-toggle="collapse" href="#videorolestab">
						<a class="card-title lato-font">&nbsp; Video</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select SMART Video features you want to give access to this profile." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="videorolestab" class="collapse">
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
								<input id="Video" class="checkbox-active" type="checkbox">
								<label for="Video" class="w500">Video</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="AddVideo" class="checkbox-active" type="checkbox">
								<label for="AddVideo">Add Video</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ManageVideo" class="checkbox-active" type="checkbox">
								<label for="ManageVideo">Manage Video</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="DeleteVideo" class="checkbox-active" type="checkbox">
								<label for="DeleteVideo">Delete Video</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="PreviewVideo" class="checkbox-active" type="checkbox">
								<label for="PreviewVideo">Preview Video</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="GetEmbedCode" class="checkbox-active" type="checkbox">
								<label for="GetEmbedCode">Get Embed Code</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ExportVideo" class="checkbox-active" type="checkbox">
								<label for="ExportVideo">Export Video</label>
								</div>
							</div>
						</div>
						<div class="row mb-md30 mb10">
							<div class="col-12 mb10">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Playlists" class="checkbox-active" type="checkbox">
								<label for="Playlists" class="w500">Playlists</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="CreatePlaylist" class="checkbox-active" type="checkbox">
								<label for="CreatePlaylist">Create Playlist</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="AddVideoinPlaylist" class="checkbox-active" type="checkbox">
								<label for="AddVideoinPlaylist">Add Video in Playlist</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="DeleteVideoFromPlaylist" class="checkbox-active" type="checkbox">
								<label for="DeleteVideoFromPlaylist">Delete Video From Playlist</label>
								</div>
							</div>
						</div>
						<div class="row mb-md30 mb10">
							<div class="col-12 mb10">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="checkComments1" class="checkbox-active" type="checkbox">
								<label for="checkComments1" class="w500">Comments</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Viewcomments1" class="checkbox-active" type="checkbox">
								<label for="Viewcomments1">View comment</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Editcomment1" class="checkbox-active" type="checkbox">
								<label for="Editcomment1">Edit comment</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Deletecomment1" class="checkbox-active" type="checkbox">
								<label for="Deletecomment1">Delete comment</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Approvecomment1" class="checkbox-active" type="checkbox">
								<label for="Approvecomment1">Approve comment</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Rejectcomment1" class="checkbox-active" type="checkbox">
								<label for="Rejectcomment1">Reject comment</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Replyoncomment1" class="checkbox-active" type="checkbox">
								<label for="Replyoncomment1">Reply on comment</label>
								</div>
							</div>
						</div>		
						<div class="row mb-md30 mb10">
							<div class="col-12 mb10">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="VideoReports" class="checkbox-active" type="checkbox">
								<label for="VideoReports" class="w500">Video Analytics</label>
								</div>
							</div>
							<div class="col-12">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ViewReports1" class="checkbox-active" type="checkbox">
								<label for="ViewReports1">View Analytics</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-lg-3 col-md-4 mb10">
								 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="SEO3" class="checkbox-active" type="checkbox">
								<label for="SEO3" class="w500">SEO</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Security" class="checkbox-active" type="checkbox">
								<label for="Security" class="w500">Security</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Comment12" class="checkbox-active" type="checkbox">
								<label for="Comment12" class="w500">Comment</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ChannelBanner" class="checkbox-active" type="checkbox">
								<label for="ChannelBanner" class="w500">Channel Banner</label>
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
						<a class="card-title lato-font">&nbsp; Page</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select SMART Page features you want to give access to this profile." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="pagerolestab" class="collapse">
						<div class="card-body">
						<div class="row mb-md30 mb10">
							<div class="col-12">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="SelectAll4" class="checkbox-active" type="checkbox">
								<label for="SelectAll4" class="w500">Select All</label>
								</div>
							</div>
						</div>
						<div class="row mb-md30 mb10">
							<div class="col-12 mb10">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Page1" class="checkbox-active" type="checkbox">
								<label for="Page1" class="w500">Page</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="CreatePage" class="checkbox-active" type="checkbox">
								<label for="CreatePage">Add Page</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="EditPage" class="checkbox-active" type="checkbox">
								<label for="EditPage">Edit Page</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="DeletePage" class="checkbox-active" type="checkbox">
								<label for="DeletePage">Delete Page</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ViewPage" class="checkbox-active" type="checkbox">
								<label for="ViewPage">View Page</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="DuplicatePage" class="checkbox-active" type="checkbox">
								<label for="DuplicatePage">Duplicate Page</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ExportPage" class="checkbox-active" type="checkbox">
								<label for="ExportPage">Export Page</label>
								</div>
							</div>
						</div>
						<div class="row mb-md30 mb10">
							<div class="col-12 mb10">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="abtestPage" class="checkbox-active" type="checkbox">
								<label for="abtestPage" class="w500">Page A/B Test</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="abtestPage1" class="checkbox-active" type="checkbox">
								<label for="abtestPage1">Add A/B Test Page</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="editabtestPage" class="checkbox-active" type="checkbox">
								<label for="editabtestPage">Edit A/B Test Page</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="deleteabtestPage" class="checkbox-active" type="checkbox">
								<label for="deleteabtestPage">Delete A/B Test Page</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="viewabtestPage" class="checkbox-active" type="checkbox">
								<label for="viewabtestPage">View A/B Test Page</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="DuplicateabtestPage" class="checkbox-active" type="checkbox">
								<label for="DuplicateabtestPage">Duplicate A/B Test Page</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ExportabtestPage" class="checkbox-active" type="checkbox">
								<label for="ExportabtestPage">Export A/B Test Page</label>
								</div>
							</div>
						</div>	
						<div class="row">
							<div class="col-12 mb10">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="PageReports" class="checkbox-active" type="checkbox">
								<label for="PageReports" class="w500">Page Analytics</label>
								</div>
							</div>
							<div class="col-12">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ViewReports2" class="checkbox-active" type="checkbox">
								<label for="ViewReports2">View Analytics</label>
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
					<div class="card-header collapsed" data-toggle="collapse" href="#Journeytab">
						<a class="card-title lato-font">&nbsp; Journey</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select SMART Page features you want to give access to this profile." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="Journeytab" class="collapse">
						<div class="card-body">
						<div class="row mb-md30 mb10">
							<div class="col-12">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="SelectAll5" class="checkbox-active" type="checkbox">
								<label for="SelectAll5" class="w500">Select All</label>
								</div>
							</div>
						</div>
						<div class="row mb-md30 mb10">
							<div class="col-12 mb10">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Journey" class="checkbox-active" type="checkbox">
								<label for="Journey" class="w500">Journey</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="AddJourney" class="checkbox-active" type="checkbox">
								<label for="AddJourney">Add Journey</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="EditJourney" class="checkbox-active" type="checkbox">
								<label for="EditJourney">Edit Journey</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="DeleteJourney" class="checkbox-active" type="checkbox">
								<label for="DeleteJourney">Delete Journey</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ViewJourney" class="checkbox-active" type="checkbox">
								<label for="ViewJourney">View Journey</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="DuplicateJourney" class="checkbox-active" type="checkbox">
								<label for="DuplicateJourney">Duplicate Journey</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="StopJourney" class="checkbox-active" type="checkbox">
								<label for="StopJourney">Stop Journey</label>
								</div>
							</div>
						</div>	
						<div class="row">
							<div class="col-12 mb10">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="JourneyAnalytics" class="checkbox-active" type="checkbox">
								<label for="JourneyAnalytics" class="w500">Journey Analytics</label>
								</div>
							</div>
							<div class="col-12">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="JourneyViewReports2" class="checkbox-active" type="checkbox">
								<label for="JourneyViewReports2">View Analytics</label>
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
						<a class="card-title lato-font">&nbsp; Popups & Bars</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select SMART Notification features you want to give access to this profile." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="notificationrolestab" class="collapse">
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
								<input id="Categories3" class="checkbox-active" type="checkbox">
								<label for="Categories3" class="w500">Popups & Sticky Bars</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="addcampaign" class="checkbox-active" type="checkbox">
								<label for="addcampaign">Add Campaign</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="EditCampaign" class="checkbox-active" type="checkbox">
								<label for="EditCampaign">Edit Campaign</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="DeleteCampaign" class="checkbox-active" type="checkbox">
								<label for="DeleteCampaign">Delete Campaign</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ViewCampaign" class="checkbox-active" type="checkbox">
								<label for="ViewCampaign">View Campaign</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="DuplicateCampaign" class="checkbox-active" type="checkbox">
								<label for="DuplicateCampaign">Duplicate Campaign</label>
								</div>
							</div>
						</div>
						<div class="row mb-md30 mb10">
							<div class="col-12 mb10">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="abtestcampaign" class="checkbox-active" type="checkbox">
								<label for="abtestcampaign" class="w500">A/B Test</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="abtestcampaign1" class="checkbox-active" type="checkbox">
								<label for="abtestcampaign1">Add A/B Test Campaign</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="editabtestcampaign" class="checkbox-active" type="checkbox">
								<label for="editabtestcampaign">Edit A/B Test Campaign</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="deleteabtestcampaign" class="checkbox-active" type="checkbox">
								<label for="deleteabtestcampaign">Delete A/B Test Campaign</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="viewabtestcampaign" class="checkbox-active" type="checkbox">
								<label for="viewabtestcampaign">View A/B Test Campaign</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Duplicateabtestcampaign" class="checkbox-active" type="checkbox">
								<label for="Duplicateabtestcampaign">Duplicate A/B Test Campaign</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Exportabtestcampaign" class="checkbox-active" type="checkbox">
								<label for="Exportabtestcampaign">Export A/B Test Campaign</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 mb10">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="NotificationReports" class="checkbox-active" type="checkbox">
								<label for="NotificationReports" class="w500">Popups & Bars Analytics</label>
								</div>
							</div>
							<div class="col-12">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ViewReports3" class="checkbox-active" type="checkbox">
								<label for="ViewReports3">View Analytics</label>
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
					<div class="card-header collapsed" data-toggle="collapse" href="#Accounts">
						<a class="card-title lato-font">&nbsp; Audience</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select Audience features you want to give access to this profile." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="Accounts" class="collapse">
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
									<input id="SuppContacts" class="checkbox-active" type="checkbox">
									<label for="SuppContacts" class="w500">Contacts</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SuppAllContacts" class="checkbox-active" type="checkbox">
									<label for="SuppAllContacts">Add Contacts</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SuppImportContacts" class="checkbox-active" type="checkbox">
									<label for="SuppImportContacts">Edit Contacts</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SuppDeleteContacts" class="checkbox-active" type="checkbox">
									<label for="SuppDeleteContacts">Delete Contacts</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Suppviewcontacts" class="checkbox-active" type="checkbox">
									<label for="Suppviewcontacts">View Contacts</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SuppExportContacts" class="checkbox-active" type="checkbox">
									<label for="SuppExportContacts">Export Contacts</label>
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
									<input id="AllSegment" class="checkbox-active" type="checkbox">
									<label for="AllSegment">Add Segment</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="EditSegment" class="checkbox-active" type="checkbox">
									<label for="EditSegment">Edit Segment</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="DeleteSegment" class="checkbox-active" type="checkbox">
									<label for="DeleteSegment">Delete Segment</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ViewSegmentReport" class="checkbox-active" type="checkbox">
									<label for="ViewSegmentReport">View Segment Analytics</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ExportSegment" class="checkbox-active" type="checkbox">
									<label for="ExportSegment">Duplicate Segment</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ExportSegment" class="checkbox-active" type="checkbox">
									<label for="ExportSegment">Export Segment</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Suppcustomfield" class="checkbox-active" type="checkbox">
									<label for="Suppcustomfield" class="w500">Custom Field</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SuppAddcustomfield" class="checkbox-active" type="checkbox">
									<label for="SuppAddcustomfield">Add New Custom Field</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Suppeditcustomfield" class="checkbox-active" type="checkbox">
									<label for="Suppeditcustomfield">Edit Custom Field</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Suppdeletecustomfield" class="checkbox-active" type="checkbox">
									<label for="Suppdeletecustomfield">Delete Custom Field</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SuppScoreRule" class="checkbox-active" type="checkbox">
									<label for="SuppScoreRule" class="w500">Score Rule</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SuppAddNewScoreRule" class="checkbox-active" type="checkbox">
									<label for="SuppAddNewScoreRule">Add New Score Rule</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SuppEditScoreRule" class="checkbox-active" type="checkbox">
									<label for="SuppEditScoreRule">Edit Score Rule</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SuppDeleteScoreRule" class="checkbox-active" type="checkbox">
									<label for="SuppDeleteScoreRule">Delete Score Rule</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SuppViewScoreRule" class="checkbox-active" type="checkbox">
									<label for="SuppViewScoreRule">View Score Rule</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SuppTags1" class="checkbox-active" type="checkbox">
									<label for="SuppTags1" class="w500">Tag</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SuppAddTag" class="checkbox-active" type="checkbox">
									<label for="SuppAddTag">Add Tag</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SuppEditTag" class="checkbox-active" type="checkbox">
									<label for="SuppEditTag">Edit Tag</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SuppDeleteTag" class="checkbox-active" type="checkbox">
									<label for="SuppDeleteTag">Delete Tag</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SuppViewTag" class="checkbox-active" type="checkbox">
									<label for="SuppViewTag">View Tag</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SuppList" class="checkbox-active" type="checkbox">
									<label for="SuppList" class="w500">List</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SuppCreateList" class="checkbox-active" type="checkbox">
									<label for="SuppCreateList">Create List</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SuppEditList" class="checkbox-active" type="checkbox">
									<label for="SuppEditList">Edit List</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SuppDeleteList" class="checkbox-active" type="checkbox">
									<label for="SuppDeleteList">Delete List</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SuppExportList" class="checkbox-active" type="checkbox">
									<label for="SuppExportList">Export List</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AddContactInList" class="checkbox-active" type="checkbox">
									<label for="AddContactInList">Add Contact In List</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SuppressionList" class="checkbox-active" type="checkbox">
									<label for="SuppressionList" class="w500">Suppression List</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AddContactsToList" class="checkbox-active" type="checkbox">
									<label for="AddContactsToList">Add Contacts To List</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SppEditList" class="checkbox-active" type="checkbox">
									<label for="SppEditList">Edit List</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SuppDeleteList" class="checkbox-active" type="checkbox">
									<label for="SuppDeleteList">Delete List</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SuppDeleteList" class="checkbox-active" type="checkbox">
									<label for="SuppDeleteList">Add Suppression List Contact Manually</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SuppDeleteList" class="checkbox-active" type="checkbox">
									<label for="SuppDeleteList">Add Suppression List Contact Import</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AudienceAnalytics" class="checkbox-active" type="checkbox">
									<label for="AudienceAnalytics" class="w500">Audience Analytics</label>
									</div>
								</div>
								<div class="col-12">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AudienceViewReports" class="checkbox-active" type="checkbox">
									<label for="AudienceViewReports">View Analytics</label>
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
					<div class="card-header collapsed" data-toggle="collapse" href="#Library" aria-expanded="false">
						<a class="card-title lato-font">&nbsp; MyDrive</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select library features you want to give access to this profile." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="Library" class="collapse">
						<div class="card-body">
							<div class="row mb-md30 mb10">
								<div class="col-12">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SelectAll9" class="checkbox-active" type="checkbox">
									<label for="SelectAll9" class="w500">Select All</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
							    <div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="FeaturesMyDrive1" class="checkbox-active" type="checkbox">
									<label for="FeaturesMyDrive1" class="w500">Folders</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AddFolder" class="checkbox-active" type="checkbox">
									<label for="AddFolder">Add Folder</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="EditFolder" class="checkbox-active" type="checkbox">
									<label for="EditFolder">Edit Folder</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ViewFolder" class="checkbox-active" type="checkbox">
									<label for="ViewFolder">View Folder</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="DeleteFolder" class="checkbox-active" type="checkbox">
									<label for="DeleteFolder">Delete Folder</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Status" class="checkbox-active" type="checkbox">
									<label for="Status">Folder Status</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="MyDriveAnalytics" class="checkbox-active" type="checkbox">
									<label for="MyDriveAnalytics" class="w500">MyDrive Analytics</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ViewAnalytics" class="checkbox-active" type="checkbox">
									<label for="ViewAnalytics">View Analytics</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
							    <div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="FeaturesMyDrive" class="checkbox-active" type="checkbox">
									<label for="FeaturesMyDrive" class="w500">All Files</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="UploadFile" class="checkbox-active" type="checkbox">
									<label for="UploadFile">Upload File</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="DownloadFile" class="checkbox-active" type="checkbox">
									<label for="DownloadFile">Download File</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="DeleteFile" class="checkbox-active" type="checkbox">
									<label for="DeleteFile">Delete File</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ViewFile" class="checkbox-active" type="checkbox">
									<label for="ViewFile">View File</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ShareFile" class="checkbox-active" type="checkbox">
									<label for="ShareFile">Share File</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="MoveFile" class="checkbox-active" type="checkbox">
									<label for="MoveFile">Move File</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="CopyFile" class="checkbox-active" type="checkbox">
									<label for="CopyFile">Copy File</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Renamefile" class="checkbox-active" type="checkbox">
									<label for="Renamefile">Rename file</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="fileStatus" class="checkbox-active" type="checkbox">
									<label for="fileStatus">file Status</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ReplaceFile" class="checkbox-active" type="checkbox">
									<label for="ReplaceFile">Replace File</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Branding" class="checkbox-active" type="checkbox">
									<label for="Branding">Branding</label>
									</div>
								</div><div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SharePageOption" class="checkbox-active" type="checkbox">
									<label for="SharePageOption">Share Page Option</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
							<div class="col-12 mb10">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="mydriveComments" class="checkbox-active" type="checkbox">
								<label for="mydriveComments" class="w500">Comments</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="mydriveViewcomments" class="checkbox-active" type="checkbox">
								<label for="mydriveViewcomments">View comment</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="mydriveEditcomment" class="checkbox-active" type="checkbox">
								<label for="mydriveEditcomment">Edit comment</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="mydriveDeletecomment" class="checkbox-active" type="checkbox">
								<label for="mydriveDeletecomment">Delete comment</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="mydriveApprovecomment" class="checkbox-active" type="checkbox">
								<label for="mydriveApprovecomment">Approve comment</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="mydriveRejectcomment" class="checkbox-active" type="checkbox">
								<label for="mydriveRejectcomment">Reject comment</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="mydriveReplyoncomment" class="checkbox-active" type="checkbox">
								<label for="mydriveReplyoncomment">Reply on comment</label>
								</div>
							</div>
						</div>
							<div class="row">
							<div class="col-12 col-lg-3 col-md-4 mb10">
								 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="SEO4" class="checkbox-active" type="checkbox">
								<label for="SEO4" class="w500">SEO</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ChannelBanner4" class="checkbox-active" type="checkbox">
								<label for="ChannelBanner4" class="w500">Channel Banner</label>
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
					<div class="card-header collapsed" data-toggle="collapse" href="#Integration" aria-expanded="false">
						<a class="card-title lato-font">&nbsp; Integration</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select integration features you want to give access to this profile." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="Integration" class="collapse">
						<div class="card-body">
							<div class="row mb-md30 mb10">
								<div class="col-12">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SelectAll10" class="checkbox-active" type="checkbox">
									<label for="SelectAll10" class="w500">Select All</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Integrationtitle" class="checkbox-active" type="checkbox">
									<label for="Integrationtitle" class="w500">Integration</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ViewIntegration" class="checkbox-active" type="checkbox">
									<label for="ViewIntegration">View Integration</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AddnewIntegration" class="checkbox-active" type="checkbox">
									<label for="AddnewIntegration">Add new Integration</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="InViewDetails" class="checkbox-active" type="checkbox">
									<label for="InViewDetails">View Details</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="InEditDetails" class="checkbox-active" type="checkbox">
									<label for="InEditDetails">Edit Details</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Autoresponder" class="checkbox-active" type="checkbox">
									<label for="Autoresponder" class="w500">Autoresponder</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ViewAutoresponder" class="checkbox-active" type="checkbox">
									<label for="ViewAutoresponder">View Autoresponder</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AddnewAutoresponder" class="checkbox-active" type="checkbox">
									<label for="AddnewAutoresponder">Add new Autoresponder</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AutoresponderViewDetails" class="checkbox-active" type="checkbox">
									<label for="AutoresponderViewDetails">View Details</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AutoresponderEditDetails" class="checkbox-active" type="checkbox">
									<label for="AutoresponderEditDetails">Edit Details</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="CRM" class="checkbox-active" type="checkbox">
									<label for="CRM" class="w500">CRM</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ViewCRM" class="checkbox-active" type="checkbox">
									<label for="ViewCRM">View CRM</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AddnewCRM" class="checkbox-active" type="checkbox">
									<label for="AddnewCRM">Add new CRM</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="CRMViewDetails" class="checkbox-active" type="checkbox">
									<label for="CRMViewDetails">View Details</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="CRMEditDetails" class="checkbox-active" type="checkbox">
									<label for="CRMEditDetails">Edit Details</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Webinar" class="checkbox-active" type="checkbox">
									<label for="Webinar" class="w500">Webinar</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ViewWebinar" class="checkbox-active" type="checkbox">
									<label for="ViewWebinar">View Webinar</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AddnewWebinar" class="checkbox-active" type="checkbox">
									<label for="AddnewWebinar">Add new Webinar</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="WebinarViewDetails" class="checkbox-active" type="checkbox">
									<label for="WebinarViewDetails">View Details</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="WebinarEditDetails" class="checkbox-active" type="checkbox">
									<label for="WebinarEditDetails">Edit Details</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ContentProvider" class="checkbox-active" type="checkbox">
									<label for="ContentProvider" class="w500">Content Provider</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ViewContentProvider" class="checkbox-active" type="checkbox">
									<label for="ViewContentProvider">View Content Provider</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AddnewContentProvider" class="checkbox-active" type="checkbox">
									<label for="AddnewContentProvider">Add new Content Provider</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ProviderViewDetails" class="checkbox-active" type="checkbox">
									<label for="ProviderViewDetails">View Details</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ProviderEditDetails" class="checkbox-active" type="checkbox">
									<label for="ProviderEditDetails">Edit Details</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Drive" class="checkbox-active" type="checkbox">
									<label for="Drive" class="w500">Drive</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ViewDrive" class="checkbox-active" type="checkbox">
									<label for="ViewDrive">View Drive</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AddnewDrive" class="checkbox-active" type="checkbox">
									<label for="AddnewDrive">Add new Drive</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="DriveViewDetails" class="checkbox-active" type="checkbox">
									<label for="DriveViewDetails">View Details</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="DriveEditDetails" class="checkbox-active" type="checkbox">
									<label for="DriveEditDetails">Edit Details</label>
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
					<div class="card-header collapsed" data-toggle="collapse" href="#TeamManagement1">
						<a class="card-title lato-font">&nbsp; Team Management</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select Team Management features you want to give access to this profile." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="TeamManagement1" class="collapse">
						<div class="card-body">
							<div class="row mb-md30 mb10">
							<div class="col-12">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="SelectAll13" class="checkbox-active" type="checkbox">
								<label for="SelectAll13" class="w500">Select All</label>
								</div>
							</div>
						</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Profile1" class="checkbox-active" type="checkbox">
									<label for="Profile1" class="w500">Profile</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AllProfile" class="checkbox-active" type="checkbox">
									<label for="AllProfile">All Profile</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AddProfile" class="checkbox-active" type="checkbox">
									<label for="AddProfile">Add Profile</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="EditProfile" class="checkbox-active" type="checkbox">
									<label for="EditProfile">Edit Profile</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ViewProfile" class="checkbox-active" type="checkbox">
									<label for="ViewProfile">View Profile</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="DeleteProfile" class="checkbox-active" type="checkbox">
									<label for="DeleteProfile">Delete Profile</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="TeamMembers" class="checkbox-active" type="checkbox">
									<label for="TeamMembers" class="w500">Team Members</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AllTeamMembers" class="checkbox-active" type="checkbox">
									<label for="AllTeamMembers">All Team Members</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AddTeamMembers" class="checkbox-active" type="checkbox">
									<label for="AddTeamMembers">Add Team Members</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="EditTeamMembers" class="checkbox-active" type="checkbox">
									<label for="EditTeamMembers">Edit Team Members</label>
									</div>
								</div>	
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ViewTeamMembers" class="checkbox-active" type="checkbox">
									<label for="ViewTeamMembers">View Team Members</label>
									</div>
								</div>	
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="DeleteTeamMembers" class="checkbox-active" type="checkbox">
									<label for="DeleteTeamMembers">Delete Team Members</label>
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
					<div class="card-header collapsed" data-toggle="collapse" href="#BusinessAccount" aria-expanded="false">
						<a class="card-title lato-font">&nbsp; Business Account Setting</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select Business Account Setting features you want to give access to this profile." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="BusinessAccount" class="collapse">
						<div class="card-body">
							<div class="row mb-md30 mb10">
							<div class="col-12">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="SelectAll14" class="checkbox-active" type="checkbox">
								<label for="SelectAll14" class="w500">Select All</label>
								</div>
							</div>
						</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="BusinessProfile" class="checkbox-active" type="checkbox">
									<label for="BusinessProfile" class="w500">Business Profile</label>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ViewBusiness" class="checkbox-active" type="checkbox">
									<label for="ViewBusiness">View Business Profile</label>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="EditBusiness" class="checkbox-active" type="checkbox">
									<label for="EditBusiness">Edit Business Profile</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="MailSetting" class="checkbox-active" type="checkbox">
									<label for="MailSetting" class="w500">Mail Setting - SMTP Setting</label>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ViewSMTP" class="checkbox-active" type="checkbox">
									<label for="ViewSMTP">View All Integrated SMTP</label>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AddIntegration" class="checkbox-active" type="checkbox">
									<label for="AddIntegration">Add New SMTP Integration</label>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="EditIntegration" class="checkbox-active" type="checkbox">
									<label for="EditIntegration">Edit SMTP Integration</label>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="DeleteIntegration" class="checkbox-active" type="checkbox">
									<label for="DeleteIntegration">Delete SMTP Integration</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="MailSettingFromReply" class="checkbox-active" type="checkbox">
									<label for="MailSettingFromReply" class="w500">Mail Setting - From & Reply Email Setting</label>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ViewFromReply" class="checkbox-active" type="checkbox">
									<label for="ViewFromReply">View From & Reply email</label>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AddFromReply" class="checkbox-active" type="checkbox">
									<label for="AddFromReply">Add New From & Reply email</label>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ResendFromReply" class="checkbox-active" type="checkbox">
									<label for="ResendFromReply">Resend From & Reply email</label>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="DeleteFromReply" class="checkbox-active" type="checkbox">
									<label for="DeleteFromReply">Delete From & Reply email</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="BounceSetting" class="checkbox-active" type="checkbox">
									<label for="BounceSetting" class="w500">Mail Setting - Bounce Setting</label>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="BounceSetting1" class="checkbox-active" type="checkbox">
									<label for="BounceSetting1">Allow Bounce Setting</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="FooterSetting" class="checkbox-active" type="checkbox">
									<label for="FooterSetting" class="w500">Mail Setting - Mail Footer Setting</label>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="FooterSetting1" class="checkbox-active" type="checkbox">
									<label for="FooterSetting1">Allow Mail Footer Setting</label>
									</div>
								</div>
							</div>
							<div class="row">
							<div class="col-12 col-lg-3 col-md-4 mb10">
								 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="BusinessSEO" class="checkbox-active" type="checkbox">
								<label for="BusinessSEO" class="w500">Business SEO</label>
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
								<input id="DotcomPalBranding" class="checkbox-active" type="checkbox">
								<label for="DotcomPalBranding" class="w500">DotcomPal Branding</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="IPAddress" class="checkbox-active" type="checkbox">
								<label for="IPAddress" class="w500">IP Address</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="HomePageSettings" class="checkbox-active" type="checkbox">
								<label for="HomePageSettings" class="w500">Home Page Settings</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="CookieSetting" class="checkbox-active" type="checkbox">
								<label for="CookieSetting" class="w500">Cookie Setting</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								 <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="WebMasterSettings" class="checkbox-active" type="checkbox">
								<label for="WebMasterSettings" class="w500">WebMaster Settings</label>
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
					<div class="card-header collapsed" data-toggle="collapse" href="#OthersTab">
						<a class="card-title lato-font">&nbsp; Others</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select heading features you want to give access to this profile." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="OthersTab" class="collapse">
						<div class="card-body">
							<div class="row mb-md30 mb10">
							<div class="col-12">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="SelectAll15" class="checkbox-active" type="checkbox">
								<label for="SelectAll15" class="w500">Select All</label>
								</div>
							</div>
						</div>
							<div class="row">
								<div class="col-12 col-md-4 col-lg-3 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Feedback" class="checkbox-active" type="checkbox">
									<label for="Feedback">Feedback</label>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Subscription" class="checkbox-active" type="checkbox">
									<label for="Subscription">Subscription</label>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="CommonUpload" class="checkbox-active" type="checkbox">
									<label for="CommonUpload">Common Upload</label>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Bonuses" class="checkbox-active" type="checkbox">
									<label for="Bonuses">Bonuses</label>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
		
		
		<!-- Save And Cancel Button -->
		<div class="text-right f-16 col-12 mt-md30 mt15">
			<a href="javascript:void(0)" class="base-btn default-btn mr5">Cancel</a>
			<a href="#" class="base-btn blue-btn">&nbsp;Save&nbsp;</a>
		</div>

	</div>
</div>
<!------- DCP Footer Include File---------->
<?php include '../includes/dcp-footer.php' ?>
<!------- DCP Footer Include File end ---------->