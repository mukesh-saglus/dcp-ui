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
				<a class="nav-link active" href="site-map-additional-pages.php"><i class="icon-xml"></i>Additional Pages</a>
				<a class="nav-link" href="post-priority.php"><i class="icon-xml"></i>Post Priority</a>
				<a class="nav-link" href="sitemap-content.php"><i class="icon-xml"></i>Sitemap Content</a>
				<a class="nav-link" href="exclude-items.php"><i class="icon-xml"></i>Excluded Items</a>
				<a class="nav-link" href="change-frequencies.php"><i class="icon-xml"></i>Change Frequencies</a>
				<a class="nav-link" href="priorities.php"><i class="icon-xml"></i>Priorities</a>
			</div>
		</div>
		<div class="col-md-8 col-lg-9 col-xl-9 col-12">
			<div class="row smart-form">
				<div class="col-md-6 col-xl-4 col-lg-4 col-12 d-gblue-clr mb15 mb-xl0">
					<label>URL to the page</label>
					<input type="text" class="form-control" value="https://www.google.com">
				</div>
				<div class="col-md-6 col-xl-2 col-lg-4 col-12 d-gblue-clr mb15 mb-xl0">
					<label>Priority</label>
					<select class="selectpicker f-12" title="0.6">
					  <option>0.1</option>
					  <option>0.2</option>
					  <option>0.3</option>
					  <option>0.4</option>
					  <option>0.5</option>
					  <option>0.6</option>
					  <option>0.7</option>
					  <option>0.8</option>
					  <option>0.9</option>
					  <option>1.0</option>
					</select>

				</div>
				<div class="col-md-4 col-xl-2 col-lg-4 col-12 d-gblue-clr mb15 mb-xl0">
					<label>Change Frequency</label>
					<select class="selectpicker f-12" title="Always">
					  <option>Always</option>
					  <option>Hourly</option>
					</select>

				</div>
				<div class="col-md-6 col-xl-3 col-lg-4 col-12 d-gblue-clr mb15 mb-xl0">
				 <label>Last Changed</label>
				<div class="input-group calendar-input-group">
				  <input type="text" class="form-control f-14 " id="dob-primary-target" readonly="" placeholder="Choose Date">
				  <span class="input-group-btn" id="dob-primary">
				  <button class="btn calendar-btn d-gblue-clr h50 f-19" type="button"><i class="icon-calendar"></i></button>
				  </span>
				</div>
				</div>
				<div class="col-md-2 col-xl-1 col-12 col-lg-4 d-gblue-clr mt-md40 mb15 mb-xl0">
				<a href="#" class="d-gblue-clr segment-delete t-decoration-none"><i class="icon-delete"></i></a>
				</div>
				
			</div>
			<div class="row smart-form mt-md30">
				<div class="col-md-6 col-xl-4 col-lg-4 col-12 d-gblue-clr mb15 mb-xl0">
					<label>URL to the page</label>
					<input type="text" class="form-control" value="https://www.google.com">
				</div>
				<div class="col-md-6 col-xl-2 col-lg-4 col-12 d-gblue-clr mb15 mb-xl0">
					<label>Priority</label>
					<select class="selectpicker f-12" title="0.6">
					  <option>0.1</option>
					  <option>0.2</option>
					  <option>0.3</option>
					  <option>0.4</option>
					  <option>0.5</option>
					  <option>0.6</option>
					  <option>0.7</option>
					  <option>0.8</option>
					  <option>0.9</option>
					  <option>1.0</option>
					</select>

				</div>
				<div class="col-md-4 col-xl-2 col-lg-4 col-12 d-gblue-clr mb15 mb-xl0">
					<label>Change Frequency</label>
					<select class="selectpicker f-12" title="Hourly">
					  <option>Always</option>
					  <option>Hourly</option>
					</select>

				</div>
				<div class="col-md-6 col-xl-3 col-lg-4 col-12 d-gblue-clr mb15 mb-xl0">
				 <label>Last Changed</label>
				<div class="input-group calendar-input-group">
				  <input type="text" class="form-control f-14 " id="dob-secondary-target" readonly="" placeholder="Choose Date">
				  <span class="input-group-btn" id="dob-secondary">
				  <button class="btn calendar-btn d-gblue-clr h50 f-19" type="button"><i class="icon-calendar"></i></button>
				  </span>
				</div>
				</div>
				<div class="col-md-2 col-xl-1 col-12 col-lg-4 d-gblue-clr mt-md40">
				 <a href="#" class="d-gblue-clr segment-delete t-decoration-none"><i class="icon-delete"></i></a>
                   &nbsp; <a href="#" class="d-gblue-clr segment-add t-decoration-none"><i class="icon-add-three"></i></a>
				</div>
				<div class="col-12 text-right mt-md30 mt15 mb15 mb-xl0">
				  <a href="#" data-toggle="modal" data-target="#AddresetModal" class="base-btn default-btn mr5">&nbsp; Reset &nbsp;</a>
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