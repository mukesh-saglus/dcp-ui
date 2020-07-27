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
				<a class="nav-link" href="sitemap-content.php"><i class="icon-xml"></i>Sitemap Content</a>
				<a class="nav-link active" href="exclude-items.php"><i class="icon-xml"></i>Excluded Items</a>
				<a class="nav-link" href="change-frequencies.php"><i class="icon-xml"></i>Change Frequencies</a>
				<a class="nav-link" href="priorities.php"><i class="icon-xml"></i>Priorities</a>
			</div>
		</div>
			<div class="col-md-8 col-lg-8 col-xl-6 col-12">
			<div class="f-18 w700 lato-font">Excluded Categories</div>
		
			<!---- Advanced Options Section Start ---->
			<div class="l-gblue-border radius5 mCustomScrollbar mt15 h280 pl15 pr5 py20" data-mcs-theme="inset-3">
			<div class="row">
			<div class="col-12">
				<div class="d-flex smart-checkbox-btn checkbox-strong-blue ml10">
							<input id="NewParentCategory" type="checkbox">
							<label for="NewParentCategory">New Parent Category</label>
				</div>	
					  <div class="row mt15 ml-lg20 ml15">
						<div class="col-md-6 col-lg-5 col-12">
						<div class="d-flex smart-checkbox-btn checkbox-strong-blue ml5">
						<input id="NewParentCategory1" type="checkbox">
						<label for="NewParentCategory1">New Parent Category 1</label>
						</div>
						</div>
						<div class="col-md-6 col-lg-5 col-12">
						<div class="d-flex smart-checkbox-btn checkbox-strong-blue ml5">
						<input id="NewParentCategory2" type="checkbox">
						<label for="NewParentCategory2">New Parent Category 2</label>
						</div>
						</div>					
					  </div>  	
				<div class="d-flex smart-checkbox-btn checkbox-strong-blue ml10 mt15 mt-md20">
					<input id="NewParentCategory3" type="checkbox">
					<label for="NewParentCategory3">New Parent Category 2</label>
				</div>
				<div class="d-flex smart-checkbox-btn checkbox-strong-blue ml10 mt15 mt-md20">
					<input id="NewParentCategory4" type="checkbox">
					<label for="NewParentCategory4">Tester Category For Testing Purpose</label>
				</div>
				<div class="d-flex smart-checkbox-btn checkbox-strong-blue ml10 mt15 mt-md20">
					<input id="NewParentCategory5" type="checkbox">
					<label for="NewParentCategory5">New Parent Category 3</label>
				</div>
				<div class="d-flex smart-checkbox-btn checkbox-strong-blue ml10 mt15 mt-md20">
					<input id="NewParentCategory6" type="checkbox">
					<label for="NewParentCategory6">New Parent Category 4</label>
				</div>	
			</div>
			</div>
			</div>
 			<!---- Advanced Options Section End ---->
			
			<div class="f-18 w700 lato-font mt15 mt-md30">Exclude Posts</div>
				<div class="row">
				<div class="col-12 d-gblue-clr mt-15 mt-md20">
				<label>Exclude the following posts or pages (List of IDs, separated by comma)</label>
				<select class="selectpicker f-12" title="Nothing Selected">
				<option>Nothing Selected</option>
				<option>Select 1</option>
				<option>Select 2</option>
				<option>Select 3</option>
				</select>
                <div class="f-12 mt10">Note: Child posts won't be excluded automatically!</div>
				</div>
				</div>
			
			<div class="text-right mt-md30 mt15">
			<input type="submit" value="Save" class="base-btn blue-btn">
			</div>
		</div>
	</div>
	<!---------XML Section End---------->
</div>

<!------- Smart Footer Include File---------->
<?php include '../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->