<!------- Smart Header Include File---------->
<?php include '../includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->



<!------- Header Start----------->
<div class="container-fluid p15 px-md30 py-md30">
	<div class="row">
		<div class="col-12 col-md-7 align-self-center">
		<span class="f-20 f-md-24 lato-font">Mail Settings </span>&nbsp; <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
		<p class="gblue-clr f-14 w400 mt5">Configure your all email settings</p>
		</div>
		
	</div>
</div>
<!------- Header End ----------->

<!------- Tabs Start ----------->
<ul class="nav tabs-style3 f-14 f-md-16 w-100 relative" role="tablist">
	<li class="nav-item ml15 ml-md30">
	<a class="nav-link lh110 active" href="smtp-setting.php">
		<span class="d-none d-md-block">SMTP Setting</span>
		<span class="d-block d-md-none"><i class="icon-smtp-setting f-18"></i></span></a>
	</li>
<li class="nav-item">
	<a class="nav-link lh110" href="from-reply-email.php">	
		<span class="d-none d-md-block">From & Reply Email Setting</span>
		<span class="d-block d-md-none"><i class="icon-from-and-reply-mail f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="bounce-setting.php">
		<span class="d-none d-md-block">Bounce Setting</span>
		<span class="d-block d-md-none"><i class="icon-bounce-setting f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="mail-footer-setting.php">
		<span class="d-none d-md-block">Mail Footer Setting</span>
		<span class="d-block d-md-none"><i class="icon-bounce-setting f-18"></i></span>
	</a>
</li>
</ul>
<!------- Tabs End ----------->


<div class="container-fluid p15 p-md30">
<!------- Segment Audience Details Section Start----------->
	<div class="col-12 p0">
    
		<!--- Filteration Div ---->
		<div class="row">
			<div class="col-md-4 col-lg-3 col-xl-3 bs-h40 mb10 mb-md0">
				<select class="selectpicker f-14" data-live-search="true">
					<option>Gmail SMTP</option>
					<option>Yahoo SMTP</option>
					<option>Outlook SMTP</option>
                    <option>Elastic Mail API</option>
					<option>MailGun SMTP</option>
                    <option>MailGun API</option>
                    <option>SparkPost API</option>
                    <option>SendGrid API</option>
                    <option>Elastic Email SMTP</option>
                    <option>Spark Post SMTP</option>
                    <option>Amazon SES API</option>
				</select>
			</div>
			<div class="col-md-8 col-lg-9 col-xl-9">
				<div class="row">                
                <div class="col-md-4 col-lg-3 col-xl-3 text-md-right offset-md-0 offset-lg-2 offset-xl-3 mb10 mb-md0 pl-md0">
                    <div class="btn-group dropdown simple-dropdown w-100">       
					  <button type="button" class="btn-h40 dropdown-toggle btn-block base-btn blue-btn f-14 text-left" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret-right pull-left">Add Server</span></button>					  
                      <div class="dropdown-menu dropdown-menu-right h-auto">
                       <!--- Searchbox Field ------->
                        <div class="bs-searchbox-field px10">
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                              <button class="btn" type="submit"> <i class="fa fa-search"></i></button>
                            </div>
                          </div>
                        </div>
						<div class="mCustomScrollbar mh-180" data-mcs-theme="inset-3">
							<a class="dropdown-item" href="#!">Mandrill API</a>
							<a class="dropdown-item" href="#!">Mandrill SMTP</a>
							<a class="dropdown-item" href="#!">Amazon SES SMTP</a>
							<a class="dropdown-item" href="#!">Sendgrid web API</a>
							<a class="dropdown-item" href="#!">Mailjet web API</a>
							<a class="dropdown-item" href="#!">ElasticMail API</a>
						</div>
                      </div>
                    </div>
                </div>


				<div class="col-md-4 col-lg-4 col-xl-4 mb10 mb-md0">					
                    <div class="smart-search-field">
                        <div class="input-group">
                            <input class="form-control" placeholder="Search" type="text">
                            <div class="input-group-append">
                                <button class="btn" type="submit"> <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
				</div>
                
                <div class="col-md-4 col-lg-3 col-xl-2">
                    <div class="row">
                        <div class="col-3 col-md-3 col-lg-4 d-flex align-self-center f-14">Show</div>
                        <div class="col-9 col-md-9 col-lg-8 bs-h40">
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
						<th>
							<div class="smart-checkbox-btn checkbox-strong-blue pull-left mt6">
								<input id="checkAll2" type="checkbox">
								<label for="checkAll2"></label>
							</div>
						</th>
						<th>Server Name &nbsp;<i class="fa fa-sort"></i></th>
						<th>Server Type</th>						
						<th>Limit Status &nbsp;<i class="fa fa-sort"></i></th>
						<th>Status &nbsp;<i class="fa fa-sort"></i></th>
						<th>Action</th>
					
					  </tr>

					</thead>
					  
					<div class="table-option-manage animated fadeIn ml10">
						<ul class="list-inline f-14 w400 mb0">
							<li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Enable"><i class="icon-enable"></i>&nbsp; Enable</a>
							</li>
							<li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Disable"><i class="icon-disable"></i> &nbsp; Disable</a>
							</li>
                            <li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Delete"><i class="icon-delete"></i> &nbsp; Delete</a>
							</li>
						</ul>
					</div>
					 <!----- Table Option Div end---->


					<tbody>
                    <tr>
						<td width="3%"><div class="smart-checkbox-btn checkbox-strong-blue">
							<input id="lcheck1" type="checkbox" class="checkbox-active">
							<label for="lcheck1"></label>
						  </div></td>
						 <td>Local Server One 
								<!-- Make Default Button -->
								<a href="javascript:void(0);" class="make-default-btn default-btn-toggle ml5" data-toggle="modal" data-target="#SetDefaultSMTPModal">Make Default</a>
								<!-- Default Button -->
								<sup class="smtp-default-btn ml5 d-none">Deafult</sub>
						 </td>
						 <td>Turboinboxer API</td>
						<td>2000 / 1 Hour</td>						
						<td>
                        <label class="switchtoggle-btn m-0">
                        <input class="switchtoggle-input" type="checkbox">
                        <span class="switchtoggle-label" data-on="On" data-off="Off"></span> <span class="switchtoggle-handle"></span> </label>
                        </td>
						<td><ul class="table-action">
							 <li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
							<li class="action-menu"><a href="javascript:void(0)" class="action-item" data-toggle="modal" data-target="#deleteModal" title="Delete"><i class="icon-delete"></i></a></li>
						  </ul></td>
					  </tr>
                      
					  <tr>
						<td width="3%"><div class="smart-checkbox-btn checkbox-strong-blue">
							<input id="lcheck2" type="checkbox" class="checkbox-active">
							<label for="lcheck2"></label>
						  </div></td>
						  <td>Local Server Two 
								<!-- Make Default Button -->
								<a href="javascript:void(0);" class="make-default-btn default-btn-toggle ml5 d-none" data-toggle="modal" data-target="#SetDefaultSMTPModal">Make Default</a>
								<!-- Default Button -->
								<sup class="smtp-default-btn ml5">Deafult</sub>
							</td>
						 <td>Mandrill API</td>
						<td>2000 / 1 Hour</td>						
						<td>
                        <label class="switchtoggle-btn m-0">
                        <input class="switchtoggle-input" type="checkbox">
                        <span class="switchtoggle-label" data-on="On" data-off="Off"></span> <span class="switchtoggle-handle"></span> </label>
                        </td>
						<td><ul class="table-action">
							 <li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
							<li class="action-menu"><a href="javascript:void(0)" class="action-item" data-toggle="modal" data-target="#deleteModal" title="Delete"><i class="icon-delete"></i></a></li>
						  </ul></td>
					  </tr>
                      
                      <tr>
						<td width="3%"><div class="smart-checkbox-btn checkbox-strong-blue">
							<input id="lcheck3" type="checkbox" class="checkbox-active">
							<label for="lcheck3"></label>
						  </div></td>
						 <td>Local Server Three 
								<!-- Make Default Button -->
								<a href="javascript:void(0);" class="make-default-btn default-btn-toggle ml5" data-toggle="modal" data-target="#SetDefaultSMTPModal">Make Default</a>
								<!-- Default Button -->
								<sup class="smtp-default-btn ml5 d-none">Deafult</sub>
						  </td>
						 <td>Amazon SES API</td>
						<td>2000 / 1 Hour</td>						
						<td>
                        <label class="switchtoggle-btn m-0">
                        <input class="switchtoggle-input" type="checkbox">
                        <span class="switchtoggle-label" data-on="On" data-off="Off"></span> <span class="switchtoggle-handle"></span> </label>
                        </td>
						<td><ul class="table-action">
							 <li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
							<li class="action-menu"><a href="javascript:void(0)" class="action-item" data-toggle="modal" data-target="#deleteModal" title="Delete"><i class="icon-delete"></i></a></li>
						  </ul></td>
					  </tr>
                      
                      <tr>
						<td width="3%"><div class="smart-checkbox-btn checkbox-strong-blue">
							<input id="lcheck4" type="checkbox" class="checkbox-active">
							<label for="lcheck4"></label>
						  </div></td>
						  <td>Local Server Four 
							    <!-- Make Default Button -->
								<a href="javascript:void(0);" class="make-default-btn default-btn-toggle ml5" data-toggle="modal" data-target="#SetDefaultSMTPModal">Make Default</a>
								<!-- Default Button -->
								<sup class="smtp-default-btn ml5 d-none">Deafult</sub>
						  </td>
						 <td>Amazon SES SMTP</td>
						<td>2000 / 1 Hour</td>						
						<td>
                        <label class="switchtoggle-btn m-0">
                        <input class="switchtoggle-input" type="checkbox">
                        <span class="switchtoggle-label" data-on="On" data-off="Off"></span> <span class="switchtoggle-handle"></span> </label>
                        </td>
						<td><ul class="table-action">
							 <li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
							<li class="action-menu"><a href="javascript:void(0)" class="action-item" data-toggle="modal" data-target="#deleteModal" title="Delete"><i class="icon-delete"></i></a></li>
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
	</div>
<!------- Segment Audience Details Section End----------->		



<!------- Smart Footer Include File---------->
<?php include '../includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->