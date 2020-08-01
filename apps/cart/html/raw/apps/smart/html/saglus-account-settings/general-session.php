<!------- Smart Header Include File---------->
<?php include '../includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->



<!------- Header Start----------->
<div class="container-fluid p15 px-md30 py-md30">
	<div class="row">
		<div class="col-12 col-md-7 align-self-center">
		<span class="f-20 f-md-24 lato-font">General Settings </span>&nbsp; <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
		<p class="gblue-clr f-14 w400 mt5">Configure your general account settings</p>
		</div>
		
	</div>
</div>
<!------- Header End ----------->

<!------- Tabs Start ----------->
<ul class="nav tabs-style3 f-14 f-md-16 w-100 relative" role="tablist">
<li class="nav-item ml15 ml-md30">
	<a class="nav-link lh110" href="general-social-account.php">	
		<span class="d-none d-md-block">Social Account<br>
		<span class="f-12 w300">Fill your social user name or Id</span>
		</span>
		<span class="d-block d-md-none"><i class="icon-social-account f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link active lh110" href="general-session.php">
		<span class="d-none d-md-block">Session<br>
		<span class="f-12 w300">20 Sessions</span>
		</span>
		<span class="d-block d-md-none"><i class="icon-session f-18"></i></span>
	</a>
</li>
</ul>
<!------- Tabs End ----------->


<div class="container-fluid p15 p-md30">
<!------- Segment Audience Details Section Start----------->
	<div class="col-12 p0">
    
		<!--- Filteration Div ---->
		<div class="row">
			<div class="col-md-8 col-lg-7 col-xl-6 offset-xl-6 offset-lg-5 offset-md-4">
				<div class="row">
					<div class="col-md-8 col-lg-8 col-xl-6 offset-xl-3 mb10 mb-md0">
						<div class="smart-search-field">
							<div class="input-group">
								<input class="form-control" placeholder="Search" type="text">
								<div class="input-group-append">
									<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg-4 col-xl-3">
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
                    <th>IP Address</th>
					<th>Operating System / Browser </th>
                    <th>Login &nbsp;<i class="fa fa-sort"></i></th>
					<th>Logout &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Login Status</th>
                    <th>Logout Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>115.178.99.134</td>
					<td>Unkonwn Window OS/Chrome</td>
                    <td>06 May 2019 at 03:41 Pm</td>
					<td>-</td>
					<td>Login Successful</td>
                    <td>-</td>
                  </tr>
					<tr>
                    <td>115.178.99.134</td>
					<td>Unkonwn Window OS/Chrome</td>
                    <td>06 May 2019 at 03:41 Pm</td>
					<td>06 May 2019 at 03:55 Pm</td>
					<td>Login Successful</td>
                    <td>-</td>
                  </tr>
				<tr>
                    <td>115.178.99.134</td>
					<td>Unkonwn Window OS/Chrome</td>
                    <td>06 May 2019 at 03:41 Pm</td>
					<td>-</td>
					<td>Login Successful</td>
                    <td>-</td>
                  </tr>
					<tr>
                    <td>115.178.99.134</td>
					<td>Unkonwn Window OS/Chrome</td>
                    <td>06 May 2019 at 03:41 Pm</td>
					<td>06 May 2019 at 03:55 Pm</td>
					<td>Login Successful</td>
                    <td>-</td>
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