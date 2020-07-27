<!------- Smart Header Include File---------->
<?php include '../../../smart/html/includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<!------- CMS Stylesheet------=------->
<link rel="stylesheet" href="../../css/cms.css">
<!------- CMS Stylesheet end---------->

<div class="container-fluid p15 p-md30">
	<!------- Header Start----------->
	<div class="row mb15 mb-md30">
		<div class="col-12">
		<span class="f-md-24 f-20 lato-font">XML </span> &nbsp;
		<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
		<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
		<p class="lightgrey mt5">Define your email message details here</p>
		</div>
	</div>
	<!------- Header End ----------->
	
	<!---------XML Section Start---------->
	<div class="row">
		<div class="col-md-4 col-lg-3 col-xl-3 mb15 mb-md0">
		<div class="nav flex-column nav-pills ui-vertical-tab f-16 w400">
            	<a class="nav-link" href="site-map-basic-option.php"><i class="icon-xml"></i>CMS Sitemap Basic Options</a>
				<a class="nav-link" href="site-map-additional-pages.php"><i class="icon-xml"></i>Additional Pages</a>
				<a class="nav-link" href="post-priority.php"><i class="icon-xml"></i>Post Priority</a>
				<a class="nav-link active" href="sitemap-content.php"><i class="icon-xml"></i>Sitemap Content</a>
				<a class="nav-link" href="exclude-items.php"><i class="icon-xml"></i>Excluded Items</a>
				<a class="nav-link" href="change-frequencies.php"><i class="icon-xml"></i>Change Frequencies</a>
				<a class="nav-link" href="priorities.php"><i class="icon-xml"></i>Priorities</a>
			</div>
		</div>
			<div class="col-md-8 col-lg-9 col-xl-9 col-12">
			<div class="f-18 w700 lato-font">Blog Standard Content</div>
			
			<div class="row mt-md20 mt15">
			<div class="col-12 col-md-6 col-lg-4 col-xl-3 pl20">
                     <div class="d-flex smart-checkbox-btn checkbox-strong-blue">
                        <input id="Homepage" type="checkbox">
                        <label for="Homepage">Include Homepage</label>
                     </div>
                  </div>
				  <div class="col-12 col-md-6 col-lg-4 col-xl-3 pl20">
                     <div class="d-flex smart-checkbox-btn checkbox-strong-blue">
                        <input id="IncludePosts" type="checkbox">
                        <label for="IncludePosts">Include Posts</label>
                     </div>
                  </div>
				  <div class="col-12 col-md-6 col-lg-4 col-xl-3 pl20">
                     <div class="d-flex smart-checkbox-btn checkbox-strong-blue">
                        <input id="IncludeStaticPages" type="checkbox">
                        <label for="IncludeStaticPages">Include Static Pages</label>
                     </div>
                  </div>
			</div>
			<div class="row mt-md15 mt0">
			<div class="col-12 col-md-6 col-lg-4 col-xl-3 pl20">
                     <div class="d-flex smart-checkbox-btn checkbox-strong-blue">
                        <input id="IncludeCategories" type="checkbox">
                        <label for="IncludeCategories">Include Categories</label>
                     </div>
                  </div>
				  <div class="col-12 col-md-6 col-lg-4 col-xl-3 pl20">
                     <div class="d-flex smart-checkbox-btn checkbox-strong-blue">
                        <input id="IncludeAuthorPages" type="checkbox">
                        <label for="IncludeAuthorPages">Include Author Pages</label>
                     </div>
                  </div>
				  <div class="col-12 col-md-6 col-lg-4 col-xl-3 pl20">
                     <div class="d-flex smart-checkbox-btn checkbox-strong-blue">
                        <input id="IncludeTagPages" type="checkbox">
                        <label for="IncludeTagPages">Include Tag Pages</label>
                     </div>
                  </div>
				<div class="col-12">
				<div class="f-18 w700 lato-font mt15 mt-md50">Further Options</div>
				<div class="d-flex smart-checkbox-btn checkbox-strong-blue mt15 mt-md20 pl5">
				<input id="LastModification" type="checkbox">
				<label for="LastModification">Include the last modification time.</label>
				</div>
				<div class="f-14 mt15">This is highly recommended and helps the search engines to know when your content has changed. This option affects all sitemap entries.</div>
				<div class="text-right mt-md30 mt15">
				<input type="submit" value="Save" class="base-btn blue-btn">
				</div>
				</div>
				  </div>
				  
			</div>
			
	</div>
	<!---------XML Section End---------->
</div>

<!------- Smart Footer Include File---------->
<?php include '../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->