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
				<a class="nav-link" href="exclude-items.php"><i class="icon-xml"></i>Excluded Items</a>
				<a class="nav-link active" href="change-frequencies.php"><i class="icon-xml"></i>Change Frequencies</a>
				<a class="nav-link" href="priorities.php"><i class="icon-xml"></i>Priorities</a>
			</div>
		</div>
		<div class="col-md-8 col-lg-9 col-xl-9 col-12">
			<div class="row smart-form">
			<div class="col-12 mb15 mb-md50">
				<p class="f-12 w400 d-gblue-clr lh160">
					<i><span class="f-14 w500 vd-gblue-clr">Note:</span><br>
Please note that the value of this tag is considered a hint and not a command. Even though search engine crawlers consider this information when making decisions, they may crawl pages marked "hourly" less frequently than that, and they may crawl pages marked "yearly" more fre quently than that. It is also likely that crawlers will periodically crawl pages marked "never" so that they can handle unexpected changes to those pages.</i></p>
								
			</div>	
				
				<div class="col-md-6 col-12 d-gblue-clr mb15 mb-md30">
					<label>Homepage</label>
					<select class="selectpicker">
					<option>Always</option>
					<option>Hourly</option>
					<option>Daily </option>
					<option>Weekly </option>
					<option>Monthly </option>
					<option>yearly </option>
					<option>Never </option>
					</select>
				</div>
				<div class="col-md-6 col-12 d-gblue-clr mb15 mb-md30">
					<label>Posts</label>
					<select class="selectpicker">
					<option>Always</option>
					<option>Hourly</option>
					<option>Daily </option>
					<option>Weekly </option>
					<option>Monthly </option>
					<option>yearly </option>
					<option>Never </option>
					</select>
				</div>
				<div class="col-md-6 col-12 d-gblue-clr mb15 mb-md30">
					<label>Static pages</label>
					<select class="selectpicker">
					<option>Always</option>
					<option>Hourly</option>
					<option>Daily </option>
					<option>Weekly </option>
					<option>Monthly </option>
					<option>yearly </option>
					<option>Never </option>
					</select>
				</div>
				<div class="col-md-6 col-12 d-gblue-clr mb15 mb-md30">
					<label>Static pages</label>
					<select class="selectpicker">
					<option>Always</option>
					<option>Hourly</option>
					<option>Daily </option>
					<option>Weekly </option>
					<option>Monthly </option>
					<option>yearly </option>
					<option>Never </option>
					</select>
				</div>
				<div class="col-md-6 col-12 d-gblue-clr mb15 mb-md30">
					<label>The current archive of this month (Should be the same like your Homepage)</label>
					<select class="selectpicker">
					<option>Always</option>
					<option>Hourly</option>
					<option>Daily </option>
					<option>Weekly </option>
					<option>Monthly </option>
					<option>yearly </option>
					<option>Never </option>
					</select>
				</div>
				<div class="col-md-6 col-12 d-gblue-clr mb15 mb-md30">
					<label>Older archives (Changes only if you edit an old post)<br><br></label>
					<select class="selectpicker">
					<option>Always</option>
					<option>Hourly</option>
					<option>Daily </option>
					<option>Weekly </option>
					<option>Monthly </option>
					<option>yearly </option>
					<option>Never </option>
					</select>
				</div>
				<div class="col-md-6 col-12 d-gblue-clr mb15 mb-md30">
					<label>Tag pages</label>
					<select class="selectpicker">
					<option>Always</option>
					<option>Hourly</option>
					<option>Daily </option>
					<option>Weekly </option>
					<option>Monthly </option>
					<option>yearly </option>
					<option>Never </option>
					</select>
				</div>
				<div class="col-md-6 col-12 d-gblue-clr mb15 mb-md30">
					<label>Author pages</label>
					<select class="selectpicker">
					<option>Always</option>
					<option>Hourly</option>
					<option>Daily </option>
					<option>Weekly </option>
					<option>Monthly </option>
					<option>yearly </option>
					<option>Never </option>
					</select>
				</div>

				<div class="col-12 text-right">
				  <input type="submit" value="Save" class="base-btn blue-btn">
				</div>
			</div>
          		  
		</div>
	</div>
	<!---------XML Section End---------->
</div>

<!------- Smart Footer Include File---------->
<?php include '../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->