<!-- Header Include File -->
<?php include '../../../../smart/html/includes/dcp-header-final.php'; ?>
<!-- Header Include File end -->

<!-- SMS Stylesheet -->
<link rel="stylesheet" href="../../../css/sms.css">
<!-- SMS Stylesheet end -->

<!-- Header Start-->
<div class="container-fluid p15 px-md30 py-md30">
	<div class="row">
		<div class="col-12">
			<div class="d-flex align-items-center flex-wrap">
				<ul class="stepwizard-style2 f-18 f-sm-24 w400 lato-font mr15">
					<li> <a href="#"> Analytics</a> </li>
					<li> <a href="#"> SMS </a> </li>
					<li> <a href="#">  Campaign Title</a> </li>
				</ul>
				<!--<div class="d-flex mt7">
					<a href="#" class="gblue-clr t-decoration-none f-17 mr5" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
					<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
				</div>-->
			</div>
			<p class="f-14 mt5 gblue-clr">Check analytics of your sms in details</p>	
		</div>
	</div>
</div>
<!-- Header End -->

<!-- Tabs Start -->
<ul class="nav tabs-style3 f-14 f-md-16 w-100 relative" role="tablist">
	<li class="nav-item ml15 ml-md30">
	<a class="nav-link lh110" href="single-sms-overview-reports.php">
		<span class="d-none d-md-block">Overview</span>
		<span class="d-block d-md-none"><i class="icon-overview f-18"></i></span></a>
	</li>
<li class="nav-item">
	<a class="nav-link lh110" href="single-sms-technology-reports.php">	
		<span class="d-none d-md-block">Technology</span>
		<span class="d-block d-md-none"><i class="icon-technology f-18"></i></span>
	</a>
</li>	
<li class="nav-item">
	<a class="nav-link lh110" href="single-sms-location-reports.php">	
		<span class="d-none d-md-block">Location</span>
		<span class="d-block d-md-none"><i class="icon-location f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="single-sms-link-activity.php">
		<span class="d-none d-md-block">Link Activity</span>
		<span class="d-block d-md-none"><i class="icon-link-activity f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link active lh110" href="single-sms-subscriber-activity.php">
	<span class="d-none d-md-block">Subscriber Activity</span>
	<span class="d-block d-md-none"><i class="icon-person f-18"></i></span>
	</a>
</li>
</ul>
<!-- Tabs End -->


<div class="container-fluid p15 p-md30">
<!-- Link Activity Section Start-->
	<div class="row">
		 <!--Filter Option List Start--->
         <div class="col-12">            
            <div class="row">
              <div class="col-md-4 col-lg-4 col-xl-3 bs-h40 mb10 mb-md0 smart-form">
				<select class="selectpicker f-14" title="All Subscriber Activity (1000)">
				  <option>Recent Subscriber Activity (10)</option>
                  <option>Subscriber Activity in last 07 days (10)</option>
				  <option>Subscriber Activity in last 30 days (10)</option>
				</select>
              </div>
              <div class="col-md-8 offset-md-0 col-lg-8 col-xl-7 offset-xl-2 offset-lg-0">
                <div class="row">
                 <div class="col-md-4 col-lg-4 col-xl-4 mb10 mb-md0 smart-form">
                    <input type="text" class="caleran-ex-1 field-h40 form-control" readonly  data-plugin-options='{"rangeOrientation":true,"showButtons":true}' />
                  </div>
                  <div class="col-md-5 col-lg-5 col-xl-5 mb10 mb-md0">
                    <div class="smart-search-field">
                      <div class="input-group">
                        <input class="form-control" placeholder="Search" type="text">
                        <div class="input-group-append">
                          <button class="btn" type="submit"> <i class="fa fa-search"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-lg-3 col-xl-3">
                    <div class="row">
                      <div class="col-4 col-md-3 col-lg-4 d-flex align-self-center d-md-none d-lg-block f-14">Show</div>
                      <div class="col-8 col-md-12 col-lg-8 bs-h40">
                        <select class="selectpicker f-14">
                          <option>10</option>
                          <option>20</option>
                          <option>30</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		 <!--Filter Option List End--->
			
        <div class="col-12 mt20">
            <div id="thori-scroll" class="table-responsive smart-table-style">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th width="4%"><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="checkAll" type="checkbox">
                        <label for="checkAll"></label>
                      </div></th>
                    <th>Contact Number</th>
					<th>Opens &nbsp;<i class="fa fa-sort"></i></th>
					<th>Clicks &nbsp;<i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
				 <!-- Table Option Div Show--> 
                <div class="table-option-manage animated fadeIn">
					<ul class="list-inline f-14 w400 mb0">
					<li class="list-inline-item"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Copy To List"><i class="icon-copy"></i> Copy To List</a></li>
					<li class="list-inline-item"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Export in CSV"><i class="icon-export"></i> Export in CSV</a></li>
					</ul>
				</div>
				 <!-- Table Option Div end--> 
                <tbody>
                  <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck2" type="checkbox" class="checkbox-active">
                        <label for="tcheck2"></label>
                      </div></td>
					<td>9840000000</td>
					<td>200</td>
                    <td>100</td>
                  </tr>
				   <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck3" type="checkbox" class="checkbox-active">
                        <label for="tcheck3"></label>
                      </div></td>
					<td>9840000000</td>
					<td>200</td>
                    <td>100</td>
                  </tr>
				   <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck4" type="checkbox" class="checkbox-active">
                        <label for="tcheck4"></label>
                      </div></td>
					<td>9840000000</td>
					<td>200</td>
                    <td>100</td>
                  </tr>
				   <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck5" type="checkbox" class="checkbox-active">
                        <label for="tcheck5"></label>
                      </div></td>
					<td>9840000000</td>
					<td>200</td>
                    <td>100</td>
                  </tr>
					<tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck6" type="checkbox" class="checkbox-active">
                        <label for="tcheck6"></label>
                      </div></td>
					<td>9840000000</td>
					<td>200</td>
                    <td>100</td>
                  </tr>

                </tbody>
              </table>
            </div>
			
			<!-- Pagination Div Start-->
			
			<div class="d-flex justify-content-between flex-wrap f-14 mt15 mt-md30">
				<div class="d-flex justify-content-start align-items-center mb5">
				Show
				<span class="bs-h40 entries-width px15">
				<select class="selectpicker" >
					<option>10</option>
					<option>20</option>
					<option>30</option>
				</select>
				</span>
				<span class="d-none d-xl-block">Showing 1 to 4 of 400 entries</span>
				</div> 	
				<div class="mb5">
				<ul class="rounded-pagination f-14">
					<li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i> </a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </a></li>
					<li><a href="#" class="active">6</a></li>
					<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> </a></li>
				</ul>
				</div> 
			</div> 
			<!-- Pagination Div End-->	
	    </div>
			
		
	</div>
	<!-- Link Activity Section End-->
</div>

<!-- Footer Include File-->
<?php include '../../../../smart/html/includes/dcp-footer.php'; ?>
<!-- Footer Include File end -->