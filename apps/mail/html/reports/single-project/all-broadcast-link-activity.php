<!------- Smart Header Include File---------->
<?php include '../../../../smart/html/includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<!------- Header Start----------->
<div class="container-fluid p15 px-md30 py-md30">
	<div class="row">
		<div class="col-12">
			<div class="d-flex align-items-center flex-wrap">
				<ul class="stepwizard-style2 f-18 f-sm-24 w400 lato-font mr15">
					<li> <a href="#"> Mail Analytics</a> </li>
					<li> <a href="#"> Project Name</a> </li>
				</ul>
				<div class="d-flex mt7">
					<a href="#" class="gblue-clr t-decoration-none f-17 mr5" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
					<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
				</div>
			</div>
			<p class="f-14 mt5 gblue-clr">Check analytics of your emails in details</p>	
		</div>
	</div>
</div>
<!------- Header End ----------->

<!------- Tabs Start ----------->
<ul class="nav tabs-style3 f-14 f-md-16 w-100 relative" role="tablist">
	<li class="nav-item ml15 ml-md30">
	<a class="nav-link lh110" href="all-broadcast-overview-reports.php">
		<span class="d-none d-md-block">Overview</span>
		<span class="d-block d-md-none"><i class="icon-overview f-18"></i></span></a>
	</li>
<li class="nav-item">
	<a class="nav-link lh110" href="all-broadcast-technology-reports.php">	
		<span class="d-none d-md-block">Technology</span>
		<span class="d-block d-md-none"><i class="icon-technology f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="all-broadcast-location-reports.php">	
		<span class="d-none d-md-block">Location</span>
		<span class="d-block d-md-none"><i class="icon-location f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link active lh110" href="all-broadcast-link-activity.php">
		<span class="d-none d-md-block">Link Activity</span>
		<span class="d-block d-md-none"><i class="icon-link-activity f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="all-broadcast-subscriber-activity.php">
	<span class="d-none d-md-block">Subscriber Activity</span>
	<span class="d-block d-md-none"><i class="icon-person f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="all-broadcast-unsubscriber-activity.php">
	<span class="d-none d-md-block">Unsubscriber Activity</span>
	<span class="d-block d-md-none"><i class="icon-on-unsubscribers f-18"></i></span>
	</a>
</li>
<li class="d-flex align-items-center view-detail-img-icon"><a href="#" data-toggle="tooltip" data-placement="left"data-original-title="View In Details"><img src="<?php echo $basedir; ?>images/view-details-icon.png" class="img-fluid"></a> </li>
</ul>
<!------- Tabs End ----------->
<div class="container-fluid p15 p-md30">
	<!------- Link Activity Section Start----------->
	<div class="row">
		<!----Filter Option List Start--->
        <div class="col-12">            
            <div class="row">
              <div class="col-md-4 col-lg-4 col-xl-3 bs-h40 mb10 mb-md0 smart-form">
				<select class="selectpicker f-14" title="All Link Activity (1000)">
				  <option>All Link Activity (1000)</option>
				  <option>Recent Link Activity (10)</option>
                  <option>Link Activity in last 07 days (10)</option>
				  <option>Link Activity in last 30 days (10)</option>
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
                        <input class="form-control" placeholder="Search by email, name or tags" type="text">
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
		<!----Filter Option List End--->
        <div class="col-12 mt20">
            <div id="thori-scroll" class="table-responsive smart-table-style">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Links</th>
					<th>Total Clicks &nbsp;<i class="fa fa-sort"></i></th>
					<th>Unique Clicks &nbsp;<i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
					<td>https://www.google.co.in</td>
					<td>200</td>
                    <td>100</td>
                  </tr>
				   <tr>
					<td>https://www.google.co.in</td>
					<td>200</td>
                    <td>100</td>
                  </tr>
				   <tr>
					<td>https://www.google.co.in</td>
					<td>200</td>
                    <td>100</td>
                  </tr>
				   <tr>
					<td>https://www.google.co.in</td>
					<td>200</td>
                    <td>100</td>
                  </tr>
					<tr>
					<td>https://www.yahoo.com/?p=us</td>
					<td>200</td>
                    <td>100</td>
                  </tr>

                </tbody>
              </table>
            </div>
			<!----- Pagination Div Start----->
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
			<!----- Pagination Div End----->	  
        </div>
		<!------- All Broadcast Section Start----------->
		<div class="col-12 mt15 mt-md40 details-section">
			<div class="row">
				<!------ Title Header-------------->
				<div class="col-12 mb15 mb-md0">
					<h4>All Broadcast</h4>
					<p class="f-14 lh140 d-gblue-clr w400">View quick stats of your Broadcast instantly<</p>
				</div>
			</div>
			<!--- Filteration Div ---->
			<div class="row mt-md30">
				<div class="col-md-4 col-lg-4 col-xl-3 bs-h40 mb10 mb-md0">
					<select class="selectpicker f-14" title="All Broadcast (1000)">
					  <option>All Broadcast (1000)</option>
					  <option>Recently added Broadcast (10)</option>
					  <option>Recently modified Broadcast (15)</option>
					  <option>Broadcast added in last 07 days (10)</option>
					  <option>Broadcast added in last 30 days (10)</option>
					</select>
				</div>
				<div class="col-md-8 col-lg-8 col-xl-9">
					<div class="row">
					<div class="col-md-4 col-lg-4 col-xl-4 offset-xl-2 mb10 mb-md0 smart-form">
						<input type="text" class="caleran-ex-1 field-h40 form-control" readonly  data-plugin-options='{"rangeOrientation":true,"showButtons":true}' />
					  </div>
						<div class="col-md-4 col-lg-4 col-xl-4 mb10 mb-md0">
							<div class="smart-search-field">
								<div class="input-group">
									<input class="form-control" placeholder="Search" type="text">
									<div class="input-group-append">
										<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-lg-4 col-xl-2">
							<div class="row">
								<div class="col-3 col-md-4 col-lg-4 d-flex align-self-center f-14">Show</div>
								<div class="col-9 col-md-8 col-lg-8 bs-h40">
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
			<!----- Table Data --------->
			<div class="row mt15 mt-md30">
				<div class="col-12">
				<!------- Library Grid View------>
					<div class="table-responsive smart-table-style mb15 mb-md30 thori-scroll">
					  <table class="table table-bordered">
						<thead>
						  <tr>
							<th>Broadcast Name &nbsp;<i class="fa fa-sort"></i></th>
							<th>Created On &nbsp;<i class="fa fa-sort"></i></th>
							<th>Contacts</th>
							<th>Sent</th>
							<th>Open</th>
							<th>Actions</th>
						  </tr>
						</thead>
						<tbody>
						   <tr>
								<td class="p-blue-clr"> Broadcast Name 1</td>
								<td>Sep 11, 2018 11:30:00 PM</td>
								<td>300</td>
								<td>150</td>
								<td>100</td>
								<td><ul class="table-action">
									 <li class="action-menu"><a href="#" class="action-item" title="View Report"><i class="icon-report"></i></a></li>
								  </ul></td>
						   </tr>
						   <tr>
								<td class="p-blue-clr"> Broadcast Name 2</td>
								<td>Sep 11, 2018 11:30:00 PM</td>
								<td>300</td>
								<td>150</td>
								<td>100</td>
								<td><ul class="table-action">
									 <li class="action-menu"><a href="#" class="action-item" title="View Report"><i class="icon-report"></i></a></li>
								  </ul></td>
							</tr>
							<tr>
								<td class="p-blue-clr"> Broadcast Name 3</td>
								<td>Sep 11, 2018 11:30:00 PM</td>
								<td>300</td>
								<td>150</td>
								<td>100</td>
								<td><ul class="table-action">
									 <li class="action-menu"><a href="#" class="action-item" title="View Report"><i class="icon-report"></i></a></li>
								  </ul></td>
							</tr>
							<tr>
								<td class="p-blue-clr"> Broadcast Name 4</td>
								<td>Sep 11, 2018 11:30:00 PM</td>
								<td>300</td>
								<td>150</td>
								<td>100</td>
								<td><ul class="table-action">
								<li class="action-menu"><a href="#" class="action-item" title="View Report"><i class="icon-report"></i></a></li>
								</ul></td>
							</tr>
							<tr>
								<td class="p-blue-clr"> Broadcast Name 5</td>
								<td>Sep 11, 2018 11:30:00 PM</td>
								<td>300</td>
								<td>150</td>
								<td>100</td>
								<td><ul class="table-action">
									 <li class="action-menu"><a href="#" class="action-item" title="View Report"><i class="icon-report"></i></a></li>
								  </ul></td>
							</tr>
						</tbody>
					  </table>
					</div>
					<!----- Pagination Div Start----->
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
					<!----- Pagination Div End----->			
				</div>
			</div>
		</div>
		<!------- All Broadcast Section End----------->
	</div>
	<!------- Link Activity Section End----------->
</div>

<!------- Smart Footer Include File---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->