<!------- Smart Header Include File---------->
<?php include '../../../../smart/html/includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<!------- Header Start----------->
<div class="container-fluid p15 px-md30 py-md30">
	<div class="row align-items-center">
		<div class="col-12">
			<div class="d-flex align-items-center flex-wrap">
				<ul class="stepwizard-style2 f-18 f-sm-24 w400 lato-font mr15">
					<li> <a href="#"> Analytics</a> </li>
					<li> <a href="#"> Mails </a> </li>
				</ul>
				<div class="d-flex mt7">
					<a href="#" class="gblue-clr t-decoration-none f-17 mr5" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
					<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
				</div>
			</div>
			<p class="gblue-clr f-14 w400 mt5">Check analytics of your emails in details</p>
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
	<a class="nav-link lh110" href="all-broadcast-link-activity.php">
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
	<a class="nav-link active lh110" href="all-broadcast-unsubscriber-activity.php">
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
				<select class="selectpicker f-14" title="All Unsubscriber Activity (1000)">
				  <option>All Unsubscriber Activity (1000)</option>
				  <option>Recent Unsubscriber Activity (10)</option>
                  <option>Unsubscriber Activity in last 07 days (10)</option>
				  <option>Unsubscriber Activity in last 30 days (10)</option>
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
		 <!----Filter Option List End--->
			
        <div class="col-12 mt20">
            <div id="thori-scroll" class="table-responsive smart-table-style">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th width="4%"><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="checkAll" type="checkbox">
                        <label for="checkAll"></label>
                      </div></th>
                    <th>Email Name</th>
					<th>Remark &nbsp;<i class="fa fa-sort"></i></th> 
					<th>Unsubscriber on &nbsp;<i class="fa fa-sort"></i></th>
					
                  </tr>
                </thead>
				 <!----- Table Option Div Show----> 
                <div class="table-option-manage animated fadeIn">
					<ul class="list-inline f-14 w400 mb0">
					<li class="list-inline-item"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Export in CSV"><i class="icon-export"></i> Export in CSV</a></li>
					</ul>
				</div>
				 <!----- Table Option Div end----> 
                <tbody>
                  <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck2" type="checkbox" class="checkbox-active">
                        <label for="tcheck2"></label>
                      </div></td>
					<td>sharmaanurag@gmail.com</td>
					 <td>I have received too many emails</td> 
					<td>Sep 11, 2018 11:30:00 PM</td>
                  </tr>
				   <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck3" type="checkbox" class="checkbox-active">
                        <label for="tcheck3"></label>
                      </div></td>
					<td>abhishekjain@gmail.com</td>
					<td>I never signed up for this mailing</td>
					<td>Sep 11, 2018 11:30:00 PM</td>
                    
                  </tr>
				   <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck4" type="checkbox" class="checkbox-active">
                        <label for="tcheck4"></label>
                      </div></td>
					<td>gauravsharma@outlook.com</td>
					<td>I have received too many emails</td>   
					<td>Sep 11, 2018 11:30:00 PM</td>
                  </tr>
				   <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck5" type="checkbox" class="checkbox-active">
                        <label for="tcheck5"></label>
                      </div></td>
					<td>divyanshupathak@gmail.com</td>
					<td>I have received too many emails</td>   
					<td>Sep 11, 2018 11:30:00 PM</td>
                    
                  </tr>
					<tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck6" type="checkbox" class="checkbox-active">
                        <label for="tcheck6"></label>
                      </div></td>
					<td>Saurabhanerjee@gmail.com</td>
					<td><span data-toggle="tooltip" data-placement="right" title="" data-original-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis." class="d-inline-block">Other: Lorem ipsum dolor sit amet...</span></td>	
					<td>Sep 11, 2018 11:30:00 PM</td>                    
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
		<!------- All Projects Section Start----------->
		<div class="col-12 mt15 mt-md40 details-section">
			<div class="row">
				<!------ Title Header-------------->
				<div class="col-12 mb15 mb-md0">
					<h4>All Projects</h4>
					<p class="f-14 lh140 d-gblue-clr w400">View quick stats of your projects instantly</p>
				</div>
			</div>
			<!--- Filteration Div ---->
			<div class="row mt-md30">
				<div class="col-md-4 col-lg-4 col-xl-3 bs-h40 mb10 mb-md0">
					<select class="selectpicker f-14" title="All Projects (1000)">
					  <option>All Projects (1000)</option>
					  <option>Recently added Projects (10)</option>
					  <option>Recently modified Projects (15)</option>
					  <option>Projects added in last 07 days (10)</option>
					  <option>Projects added in last 30 days (10)</option>
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
							<th>Projects Name &nbsp;<i class="fa fa-sort"></i></th>
							<th>Created On &nbsp;<i class="fa fa-sort"></i></th>
							<th>Contacts</th>
							<th>Sent</th>
							<th>Open</th>
							<th>Actions</th>
						  </tr>
						</thead>
						<tbody>
						   <tr>
								<td class="p-blue-clr"> Project Name 1</td>
								<td>Sep 11, 2018 11:30:00 PM</td>
								<td>300</td>
								<td>150</td>
								<td>100</td>
								<td><ul class="table-action">
									 <li class="action-menu"><a href="#" class="action-item" title="View Report"><i class="icon-report"></i></a></li>
								  </ul></td>
						   </tr>
						   <tr>
								<td class="p-blue-clr"> Project Name 2</td>
								<td>Sep 11, 2018 11:30:00 PM</td>
								<td>300</td>
								<td>150</td>
								<td>100</td>
								<td><ul class="table-action">
									 <li class="action-menu"><a href="#" class="action-item" title="View Report"><i class="icon-report"></i></a></li>
								  </ul></td>
							</tr>
							<tr>
								<td class="p-blue-clr"> Project Name 3</td>
								<td>Sep 11, 2018 11:30:00 PM</td>
								<td>300</td>
								<td>150</td>
								<td>100</td>
								<td><ul class="table-action">
									 <li class="action-menu"><a href="#" class="action-item" title="View Report"><i class="icon-report"></i></a></li>
								  </ul></td>
							</tr>
							<tr>
								<td class="p-blue-clr"> Project Name 4</td>
								<td>Sep 11, 2018 11:30:00 PM</td>
								<td>300</td>
								<td>150</td>
								<td>100</td>
								<td><ul class="table-action">
								<li class="action-menu"><a href="#" class="action-item" title="View Report"><i class="icon-report"></i></a></li>
								</ul></td>
							</tr>
							<tr>
								<td class="p-blue-clr"> Project Name 5</td>
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
		<!------- All Projects Section End----------->	
    </div>
<!------- Link Activity Section End----------->
	

</div>

<!------- Smart Footer Include File---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->