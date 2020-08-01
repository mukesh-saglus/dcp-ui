<!------- DCP Header Include File---------->
<?php include '../includes/smart-header.php' ?>
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
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ExportProjects" class="checkbox-active" type="checkbox">
								<label for="ExportProjects">Export Projects</label>
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
								<input id="AllContacts" class="checkbox-active" type="checkbox">
								<label for="AllContacts">Add Contacts</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ImportContacts" class="checkbox-active" type="checkbox">
								<label for="ImportContacts">Edit Contacts</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="DeleteContacts" class="checkbox-active" type="checkbox">
								<label for="DeleteContacts">Delete Contacts</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="viewcontacts" class="checkbox-active" type="checkbox">
								<label for="viewcontacts">View Contacts</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ExportContacts" class="checkbox-active" type="checkbox">
								<label for="ExportContacts">Export Contacts</label>
								</div>
							</div>
						</div>
						<div class="row mb-md30 mb10">
							<div class="col-12 mb10">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="customfield" class="checkbox-active" type="checkbox">
								<label for="customfield" class="w500">Custom Field</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Addcustomfield" class="checkbox-active" type="checkbox">
								<label for="Addcustomfield">Add New Custom Field</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="editcustomfield" class="checkbox-active" type="checkbox">
								<label for="editcustomfield">Edit Custom Field</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="deletecustomfield" class="checkbox-active" type="checkbox">
								<label for="deletecustomfield">Delete Custom Field</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Exportcustomfield" class="checkbox-active" type="checkbox">
								<label for="Exportcustomfield">Export Custom Field</label>
								</div>
							</div>
						</div>
						<div class="row mb-md30 mb10">
							<div class="col-12 mb10">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ScoreRule" class="checkbox-active" type="checkbox">
								<label for="ScoreRule" class="w500">Score Rule</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="AddNewScoreRule" class="checkbox-active" type="checkbox">
								<label for="AddNewScoreRule">Add New Score Rule</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="EditScoreRule" class="checkbox-active" type="checkbox">
								<label for="EditScoreRule">Edit Score Rule</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="DeleteScoreRule" class="checkbox-active" type="checkbox">
								<label for="DeleteScoreRule">Delete Score Rule</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ExportScoreRule" class="checkbox-active" type="checkbox">
								<label for="ExportScoreRule">Export Score Rule</label>
								</div>
							</div>
						</div>
						<div class="row mb-md30 mb10">
							<div class="col-12 mb10">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Tags1" class="checkbox-active" type="checkbox">
								<label for="Tags1" class="w500">Tag</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="DeleteTag" class="checkbox-active" type="checkbox">
								<label for="DeleteTag">Delete Tag</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ViewTag" class="checkbox-active" type="checkbox">
								<label for="ViewTag">View Tag</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ExportTag" class="checkbox-active" type="checkbox">
								<label for="ExportTag">Export Tag</label>
								</div>
							</div>
						</div>
						<div class="row mb-md30 mb10">
							<div class="col-12 mb10">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="List" class="checkbox-active" type="checkbox">
								<label for="List" class="w500">List</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="CreateList" class="checkbox-active" type="checkbox">
								<label for="CreateList">Create List</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="EditList" class="checkbox-active" type="checkbox">
								<label for="EditList">Edit List</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="DeleteList" class="checkbox-active" type="checkbox">
								<label for="DeleteList">Delete List</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ExportList" class="checkbox-active" type="checkbox">
								<label for="ExportList">Export List</label>
								</div>
							</div>
						</div>
						<div class="row mb-md30 mb10">
							<div class="col-12 mb10">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="QuickMailingGroup" class="checkbox-active" type="checkbox">
								<label for="QuickMailingGroup" class="w500">Quick Mailing Group</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="AddQuickMailingGroup" class="checkbox-active" type="checkbox">
								<label for="AddQuickMailingGroup">Add Quick Mailing Group</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="EditQuickMailingGroup" class="checkbox-active" type="checkbox">
								<label for="EditQuickMailingGroup">Edit Quick Mailing Group</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="DeleteQuickMailingGroup" class="checkbox-active" type="checkbox">
								<label for="DeleteQuickMailingGroup">Delete Quick Mailing Group</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ExportQuickMailingGroup" class="checkbox-active" type="checkbox">
								<label for="ExportQuickMailingGroup">Export Quick Mailing Group</label>
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
								<input id="AddSuppressionListContactManually" class="checkbox-active" type="checkbox">
								<label for="AddSuppressionListContactManually">Add Suppression List Contact Manually</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="AddSuppressionListContactImport" class="checkbox-active" type="checkbox">
								<label for="AddSuppressionListContactImport">Add Suppression List Contact Import</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="EditList1" class="checkbox-active" type="checkbox">
								<label for="EditList1">Edit Suppression List</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="DeleteList1" class="checkbox-active" type="checkbox">
								<label for="DeleteList1">Delete Suppression List</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ExportList1" class="checkbox-active" type="checkbox">
								<label for="ExportList1">Export Suppression List</label>
								</div>
							</div>
						</div>
						<div class="row mb-md30 mb10">
							<div class="col-12 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Broadcast" class="checkbox-active" type="checkbox">
								<label for="Broadcast" class="w500">Broadcast</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="AddBroadcast" class="checkbox-active" type="checkbox">
								<label for="AddBroadcast">Add Broadcast</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="EditBroadcast" class="checkbox-active" type="checkbox">
								<label for="EditBroadcast">Edit Broadcast</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="DeleteBroadcast" class="checkbox-active" type="checkbox">
								<label for="DeleteBroadcast">Delete Broadcast</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="DuplicateBroadcast" class="checkbox-active" type="checkbox">
								<label for="DuplicateBroadcast">Reuse Broadcast</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ExportBroadcast" class="checkbox-active" type="checkbox">
								<label for="ExportBroadcast">Export Broadcast</label>
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
								<label for="abtestBroadcast">Add A/B Test Broadcast</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="editabtest" class="checkbox-active" type="checkbox">
								<label for="editabtest">Edit A/B Test Broadcast</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="deleteabtest" class="checkbox-active" type="checkbox">
								<label for="deleteabtest">Delete A/B Test Broadcast</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="viewabtest" class="checkbox-active" type="checkbox">
								<label for="viewabtest">View A/B Test Broadcast</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Duplicateabtest" class="checkbox-active" type="checkbox">
								<label for="Duplicateabtest">Reuse A/B Test Broadcast</label>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-md-4 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ExportABTestBroadcast" class="checkbox-active" type="checkbox">
								<label for="ExportABTestBroadcast">Export A/B Test Broadcast</label>
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
								<input id="Project" class="checkbox-active" type="checkbox">
								<label for="Project" class="w500">Project</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="CreateProjects" class="checkbox-active" type="checkbox">
								<label for="CreateProjects">Create Projects</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="EditProjects" class="checkbox-active" type="checkbox">
								<label for="EditProjects">Edit Projects</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="DeleteProjects" class="checkbox-active" type="checkbox">
								<label for="DeleteProjects">Delete Projects</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="MergeProjects" class="checkbox-active" type="checkbox">
								<label for="MergeProjects">Merge Projects</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ExportProjects5" class="checkbox-active" type="checkbox">
								<label for="ExportProjects5">Export Projects</label>
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
						<div class="row">
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
								<input id="Project1" class="checkbox-active" type="checkbox">
								<label for="Project1" class="w500">Project</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="CreateProjects1" class="checkbox-active" type="checkbox">
								<label for="CreateProjects1">Create Projects</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="EditProjects1" class="checkbox-active" type="checkbox">
								<label for="EditProjects1">Edit Projects</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="DeleteProjects1" class="checkbox-active" type="checkbox">
								<label for="DeleteProjects1">Delete Projects</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="DuplicateProjects1" class="checkbox-active" type="checkbox">
								<label for="DuplicateProjects1">Duplicate Project</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="MergeProjects1" class="checkbox-active" type="checkbox">
								<label for="MergeProjects1">Merge Projects</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ExportProjects1" class="checkbox-active" type="checkbox">
								<label for="ExportProjects1">Export Projects</label>
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
								<input id="Project2" class="checkbox-active" type="checkbox">
								<label for="Project2" class="w500">Project</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="CreateProjects2" class="checkbox-active" type="checkbox">
								<label for="CreateProjects2">Create Projects</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="EditProjects2" class="checkbox-active" type="checkbox">
								<label for="EditProjects2">Edit Projects</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="DeleteProjects2" class="checkbox-active" type="checkbox">
								<label for="DeleteProjects2">Delete Projects</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="MergeProjects2" class="checkbox-active" type="checkbox">
								<label for="MergeProjects2">Merge Projects</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ExportProjects2" class="checkbox-active" type="checkbox">
								<label for="ExportProjects2">Export Projects</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="DuplicateProjects2" class="checkbox-active" type="checkbox">
								<label for="DuplicateProjects2">Duplicate Project</label>
								</div>
							</div>
						</div>
						<div class="row mb-md30 mb10">
							<div class="col-12 mb10">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="Categories3" class="checkbox-active" type="checkbox">
								<label for="Categories3" class="w500">Web Notification</label>
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
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ExportCampaign" class="checkbox-active" type="checkbox">
								<label for="ExportCampaign">Export Campaign</label>
								</div>
							</div>
						</div>
						<div class="row mb-md30 mb10">
							<div class="col-12 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="WebForm" class="checkbox-active" type="checkbox">
								<label for="WebForm" class="w500">Web Form</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="AddWebFormCampaign" class="checkbox-active" type="checkbox">
								<label for="AddWebFormCampaign">Add Web Form Campaign</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="EditWebFormCampaign" class="checkbox-active" type="checkbox">
								<label for="EditWebFormCampaign">Edit Web Form Campaign</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="DeleteWebFormCampaign" class="checkbox-active" type="checkbox">
								<label for="DeleteWebFormCampaign">Delete Web Form Campaign</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="ViewWebFormCampaign" class="checkbox-active" type="checkbox">
								<label for="ViewWebFormCampaign">View Web Form Campaign</label>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb10">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="GetembedWebFormCampaign" class="checkbox-active" type="checkbox">
								<label for="GetembedWebFormCampaign">Get Embed Code Web Form Campaign</label>
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
						<a class="card-title lato-font">&nbsp; Account</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select account features you want to give access to this profile." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
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
									<input id="AllSubscribers" class="checkbox-active" type="checkbox">
									<label for="AllSubscribers" class="w500">All Subscribers</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AddSubscribers" class="checkbox-active" type="checkbox">
									<label for="AddSubscribers">Add Subscribers</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="EditSubscribers" class="checkbox-active" type="checkbox">
									<label for="EditSubscribers">Edit Subscribers</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ViewSubscribers" class="checkbox-active" type="checkbox">
									<label for="ViewSubscribers">View Subscribers</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ExportSubscribers" class="checkbox-active" type="checkbox">
									<label for="ExportSubscribers">Export Subscribers</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="CopytoList1" class="checkbox-active" type="checkbox">
									<label for="CopytoList1">Copy to List</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AllCustomers" class="checkbox-active" type="checkbox">
									<label for="AllCustomers" class="w500">All Customers</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="EditCustomers" class="checkbox-active" type="checkbox">
									<label for="EditCustomers">Edit Customers</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ViewCustomers" class="checkbox-active" type="checkbox">
									<label for="ViewCustomers">View Customers</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ExportCustomers" class="checkbox-active" type="checkbox">
									<label for="ExportCustomers">Export Customers</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="CopytoList2" class="checkbox-active" type="checkbox">
									<label for="CopytoList2">Copy to List</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="DataRecovery" class="checkbox-active" type="checkbox">
									<label for="DataRecovery">Data Recovery</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="PackageUsage" class="checkbox-active" type="checkbox">
									<label for="PackageUsage">Package Usage</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="View Package" class="checkbox-active" type="checkbox">
									<label for="ViewPackage">View Package</label>
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
					<div class="card-header collapsed" data-toggle="collapse" href="#Segment">
						<a class="card-title lato-font">&nbsp; Segment</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select segment features you want to give access to this profile." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="Segment" class="collapse">
						<div class="card-body">
							<div class="row mb-md30 mb10">
							<div class="col-12">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="SelectAll8" class="checkbox-active" type="checkbox">
								<label for="SelectAll8" class="w500">Select All</label>
								</div>
							</div>
						</div>
							<div class="row">
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
									<input id="ExportSegment" class="checkbox-active" type="checkbox">
									<label for="ExportSegment">Export Segment</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="DuplicateSegment" class="checkbox-active" type="checkbox">
									<label for="DuplicateSegment">Duplicate Segment</label>
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
							</div>
							<div class="row mb-md30 mb10">
							    <div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="FeaturesMyDrive1" class="checkbox-active" type="checkbox">
									<label for="FeaturesMyDrive1" class="w500">Features</label>
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
							<div class="row">
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
							<div class="row">
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AddNewIntegration" class="checkbox-active" type="checkbox">
									<label for="AddNewIntegration">Add New Integration</label>
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
									<input id="ViewDetails" class="checkbox-active" type="checkbox">
									<label for="ViewDetails">View Details</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="EditDetails" class="checkbox-active" type="checkbox">
									<label for="EditDetails">Edit Details</label>
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
					<div class="card-header collapsed" data-toggle="collapse" href="#Product">
						<a class="card-title lato-font">&nbsp; Product</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select Product features you want to give access to this profile." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="Product" class="collapse">
						<div class="card-body">
							<div class="row mb-md30 mb10">
							<div class="col-12">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="SelectAll11" class="checkbox-active" type="checkbox">
								<label for="SelectAll11" class="w500">Select All</label>
								</div>
							</div>
						</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Solution" class="checkbox-active" type="checkbox">
									<label for="Solution" class="w500">Solution</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AllSolution" class="checkbox-active" type="checkbox">
									<label for="AllSolution">All Solution</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AddSolution" class="checkbox-active" type="checkbox">
									<label for="AddSolution">Add Solution</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="EditSolution" class="checkbox-active" type="checkbox">
									<label for="EditSolution">Edit Solution</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="DeleteSolution" class="checkbox-active" type="checkbox">
									<label for="DeleteSolution">Delete Solution</label>
									</div>
								</div>
							</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Package1" class="checkbox-active" type="checkbox">
									<label for="Package1" class="w500">Package</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ViewPackage1" class="checkbox-active" type="checkbox">
									<label for="ViewPackage1">View Package</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AllPackage" class="checkbox-active" type="checkbox">
									<label for="AllPackage">All Package</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AddPackage" class="checkbox-active" type="checkbox">
									<label for="AddPackage">Add Package</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="EditPackage" class="checkbox-active" type="checkbox">
									<label for="EditPackage">Edit Package</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="DeletePackage" class="checkbox-active" type="checkbox">
									<label for="DeletePackage">Delete Package</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="DuplicatePackage" class="checkbox-active" type="checkbox">
									<label for="DuplicatePackage">Duplicate Package</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="BasePrice" class="checkbox-active" type="checkbox">
									<label for="BasePrice" class="w500">Base Price</label>
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
					<div class="card-header collapsed" data-toggle="collapse" href="#Orders">
						<a class="card-title lato-font">&nbsp; Orders</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select Orders features you want to give access to this profile." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="Orders" class="collapse">
						<div class="card-body">
							<div class="row mb-md30 mb10">
							<div class="col-12">
							    <div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
								<input id="SelectAll12" class="checkbox-active" type="checkbox">
								<label for="SelectAll12" class="w500">Select All</label>
								</div>
							</div>
						</div>
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="OrderManagement" class="checkbox-active" type="checkbox">
									<label for="OrderManagement" class="w500">Order Management</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AllOrder" class="checkbox-active" type="checkbox">
									<label for="AllOrder">All Order</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AddOrders" class="checkbox-active" type="checkbox">
									<label for="AddOrders">Add Orders</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="EditOrders" class="checkbox-active" type="checkbox">
									<label for="EditOrders">Edit Orders</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ExportOrders" class="checkbox-active" type="checkbox">
									<label for="ExportOrders">Export Orders</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="SendOrder" class="checkbox-active" type="checkbox">
									<label for="SendOrder">Send Order</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ApproveOrders" class="checkbox-active" type="checkbox">
									<label for="ApproveOrders">Approve Orders</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="CancelOrder" class="checkbox-active" type="checkbox">
									<label for="CancelOrder">Denied Order</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="InactivePackage" class="checkbox-active" type="checkbox">
									<label for="InactivePackage">Inactive Package</label>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-4 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="DeliverOrders" class="checkbox-active" type="checkbox">
									<label for="DeliverOrders">Deliver Order</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AllTransaction" class="checkbox-active" type="checkbox">
									<label for="AllTransaction" class="w500">All Transaction</label>
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
									<input id="BusinessWebsite" class="checkbox-active" type="checkbox">
									<label for="BusinessWebsite" class="w500">Business Website Installation</label>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="Installation" class="checkbox-active" type="checkbox">
									<label for="Installation">Allow Business Website Installation</label>
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
							<div class="row mb-md30 mb10">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="TemplateManagement" class="checkbox-active" type="checkbox">
									<label for="TemplateManagement" class="w500">Template Management</label>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AllTemplates" class="checkbox-active" type="checkbox">
									<label for="AllTemplates">All Templates </label>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AddTemplate" class="checkbox-active" type="checkbox">
									<label for="AddTemplate">Add Template</label>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="EditTemplate" class="checkbox-active" type="checkbox">
									<label for="EditTemplate">Edit Template</label>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ViewTemplate" class="checkbox-active" type="checkbox">
									<label for="ViewTemplate">View Template</label>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="DeleteTemplate" class="checkbox-active" type="checkbox">
									<label for="DeleteTemplate">Delete Template</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="CustomField1" class="checkbox-active" type="checkbox">
									<label for="CustomField1" class="w500">Custom Field</label>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="AddNewCustomField" class="checkbox-active" type="checkbox">
									<label for="AddNewCustomField">Add New Custom Field</label>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="EditCustomField" class="checkbox-active" type="checkbox">
									<label for="EditCustomField">Edit Custom Field</label>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="DeleteCustomField" class="checkbox-active" type="checkbox">
									<label for="DeleteCustomField">Delete Custom Field</label>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3 mb10">
									<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
									<input id="ExportCustomField" class="checkbox-active" type="checkbox">
									<label for="ExportCustomField">Export Custom Field</label>
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
<?php include '../includes/smart-footer.php' ?>
<!------- DCP Footer Include File end ---------->