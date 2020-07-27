<!------- BMS Main Header Include File---------->
<?php include '../../includes/smart-header-bms.php'; ?>
<!------- BMS Main Header Include File end---------->

<!--CKEditor Library -->
<script src="<?php echo $basedir; ?>vendors/ckeditor/ckeditor.js"></script>
<script src="<?php echo $basedir; ?>vendors/ckeditor/samples/js/sample.js"></script>

<div class="container-fluid p15 p-md30">
	<div class="row align-items-center">
		<div class="col-12">
			<span class="f-20 f-md-24 lato-font">Payment History</span> &nbsp;
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="gblue-clr f-14 w400 mt5">Check out your payment history</p>
		</div>
	</div>

    <div class="row mt-md30 mt15">
	    <!----Filter Option List Start--->
		<div class="col-12">
			<div class="row">
				<div class="col-md-4 col-lg-4 col-xl-3 bs-h40 mb10 mb-md0 smart-form">
					<select class="selectpicker f-14" title="All Payment (20)">
						<option>All Payment (20)</option>
						<option>Recently added Payment (10)</option>
						<option>Recently modified Payment (15)</option>
						<option>Payment added in last 07 days (10)</option>
						<option>Payment added in last 30 days (10)</option>
					</select>
				</div>
				<div class="col-md-8 col-lg-8 col-xl-9">
					<div class="row">
						<div class="col-md-4 col-lg-4 col-xl-4 offset-xl-2 mb10 mb-md0 smart-form">
							<div class="input-group calendar-input-group">
								<input type="text" class="caleran-ex-1 form-control f-14 field-h40" id="target-cal" readonly="" data-plugin-options="{&quot;rangeOrientation&quot;:true,&quot;showButtons&quot;:true}" placeholder="Choose Date">
								<span class="input-group-btn caleran-show">
									<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
								</span>
							</div>
						</div>
						<div class="col-md-5 col-lg-5 col-xl-4 mb10 mb-md0">
							<div class="smart-search-field">
								<div class="input-group">
									<input class="form-control" placeholder="Search" type="text">
									<div class="input-group-append">
										<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-lg-3 col-xl-2">
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
                    <th><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="checkAll" type="checkbox">
                        <label for="checkAll"></label>
                      </div></th>					 
                    <th>Sr No. &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Order ID &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Package Name &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Date & Time &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Transactions Amount &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
				 <!----- Table Option Div Show----> 
                <div class="table-option-manage animated fadeIn">
					<ul class="list-inline f-14 w400 mb0">
					<li class="list-inline-item"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Export"><i class="icon-export"></i> Export</a></li>
					</ul>
				</div>
				 <!----- Table Option Div end----> 
                <tbody>
                  <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck1" type="checkbox" class="checkbox-active">
                        <label for="tcheck1"></label>
                      </div></td>
					<td>1</td>
                    <td><a href="#" class="p-blue-clr t-decoration-none">#123456789</a></td>
					<td>Smart Lead</td>
                    <td>22 Nov 2017 at 12:50 Pm</td>
                    <td>$ 500</td>
                    <td><i class="icon-tick s-green-clr"></i>&nbsp; Successful</td>
                    <td>
					<ul class="table-action">
						<li class="action-menu"><a href="#" class="action-item" title="Download"><i class="icon-download"></i></a></li>
					</ul>
					</td>
                  </tr>
				  <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck2" type="checkbox" class="checkbox-active">
                        <label for="tcheck2"></label>
					   </div></td>
                    <td>2</td>
                    <td><a href="#" class="p-blue-clr t-decoration-none">#123456789</a></td>
					<td>Smart Mail</td>
                    <td>22 Nov 2017 at 12:50 Pm</td>
                    <td>$ 500</td>
                    <td><i class="icon-in-process p-yellow-clr"></i>&nbsp; In Progress</td>
					<td>
					<ul class="table-action">
						<li class="action-menu"><a href="#" class="action-item" title="Download"><i class="icon-download"></i></a></li>
					</ul>
					</td>
                  </tr>
				  <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck3" type="checkbox" class="checkbox-active">
                        <label for="tcheck3"></label>
                      </div></td>
                    <td>3</td>
                    <td><a href="#" class="p-blue-clr t-decoration-none">#123456789</a></td>
					<td>Smart Library</td>
                    <td>22 Nov 2017 at 12:50 Pm</td>
                    <td>$ 500</td>
                    <td><i class="icon-cross vi-red-clr f-12"></i>&nbsp; Denied
					<a href="#" class="pay-now-btn ml15">Pay Now</a>
					</td>
                    <td>
					<ul class="table-action">
						<li class="action-menu"><a href="#" class="action-item" title="Download"><i class="icon-download"></i></a></li>
					</ul>
					</td>
                  </tr>	
				  <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck4" type="checkbox" class="checkbox-active">
                        <label for="tcheck4"></label>
                      </div></td>
                    <td>4</td>
                    <td><a href="#" class="p-blue-clr t-decoration-none">#123456789</a></td>
					<td>Smart Page</td>
                    <td>22 Nov 2017 at 12:50 Pm</td>
                    <td>$ 500</td>
                    <td><i class="icon-in-process p-yellow-clr"></i>&nbsp; In Progress</td>
                    <td>
					<ul class="table-action">
						<li class="action-menu"><a href="#" class="action-item" title="Download"><i class="icon-download"></i></a></li>
					</ul>
					</td>
                  </tr>	
				  <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck5" type="checkbox" class="checkbox-active">
                        <label for="tcheck5"></label>
                      </div></td>
                    <td>5</td>
                    <td><a href="#" class="p-blue-clr t-decoration-none">#123456789</a></td>
					<td>Smart Video</td>
                    <td>22 Nov 2017 at 12:50 Pm</td>
                    <td>$ 500</td>
                    <td><i class="icon-tick s-green-clr"></i>&nbsp; Successful</td>
                    <td>
					<ul class="table-action">
						<li class="action-menu"><a href="#" class="action-item" title="Download"><i class="icon-download"></i></a></li>
					</ul>
					</td>
                  </tr>	
                </tbody>
              </table>
            </div>
			
			<!----- Pagination Div Start ----->
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
			<!----- Pagination Div End ------>	  
		</div>
	</div>
</div>

<!------- Smart Footer Include File ---------->
<?php include '../../includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->