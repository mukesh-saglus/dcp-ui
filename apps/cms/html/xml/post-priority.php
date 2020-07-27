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
				<a class="nav-link active" href="post-priority.php"><i class="icon-xml"></i>Post Priority</a>
				<a class="nav-link" href="sitemap-content.php"><i class="icon-xml"></i>Sitemap Content</a>
				<a class="nav-link" href="exclude-items.php"><i class="icon-xml"></i>Excluded Items</a>
				<a class="nav-link" href="change-frequencies.php"><i class="icon-xml"></i>Change Frequencies</a>
				<a class="nav-link" href="priorities.php"><i class="icon-xml"></i>Priorities</a>
			</div>
		</div>
			<div class="col-md-8 col-lg-9 col-xl-9 col-12">
			<div class="f-18 w500">Please select how the priority of each post should be calculated</div>
			<div class="mt15 mt-md30">
			<div class="d-flex smart-radio-btn radio-strong-blue mr25 publish-radio">
			<input name="chkPassPort" id="Not-Select" value="option1" type="radio" checked="">
			<label for="Not-Select" class="mb5">Do not use automatic priority calculation</label>
			</div>
			<div class="f-12 ml28 d-gblue-clr">All posts will have the same priority which is defined in "Priorities"</div>
			</div>
			<div class="mt-md30 mt15">
			<div class="d-flex smart-radio-btn radio-strong-blue draft-radio">
			<input name="chkPassPort" id="select-date" value="option1" type="radio">
			<label for="select-date" class="mb5"> Comment Count </label>
			</div>
			<div class="f-12 ml28 d-gblue-clr">Uses the number of comments of the post to calculate the priority</div>
			</div>
			<div class="mt-md30 mt15">
			<div class="d-flex smart-radio-btn radio-strong-blue draft-radio">
			<input name="chkPassPort" id="select-Average" value="option1" type="radio">
			<label for="select-Average" class="mb5">Comment Average</label>
			</div>
			<div class="f-12 ml28 d-gblue-clr">Uses the average comment count to calculate the priority</div>
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