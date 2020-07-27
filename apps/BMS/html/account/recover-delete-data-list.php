<!------- BMS Main Header Include File---------->
<?php include '../../../smart/html/includes/smart-header-bms.php'; ?>
<!------- BMS Main Header Include File end---------->

<!------- BMS Stylesheet Strat ------->
<link rel="stylesheet" href="../../css/bms.css">
<!------- BMS Stylesheet end ------->

<div class="container-fluid p15 p-md30">
	<!------ Header---------->
	<div class="row align-items-center">
		<div class="col-12">
			<div class="d-flex align-items-center flex-wrap">
				<ul class="stepwizard-style2 f-18 f-sm-24 w400 lato-font mr15">
					<li> <a href="#"> Xander Paige</a> </li>
					<li> <a href="#"> Recover Deleted Data</a> </li>
				</ul>
				<div class="d-flex mt7">
					<a href="#" class="gblue-clr t-decoration-none f-17 mr5" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
					<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
				</div>
			</div>
			<p class="gblue-clr f-14 w400 mt5">Here you are manage your all packages</p>
		</div>
	</div>
	<!------ Header End---------->

	<div class="row mt15 mt-md30">
		<!----Filter Option List Start--->
		<div class="col-12">            
			<div class="row  smart-form bs-h40">
				<div class="col-md-4 col-lg-2 mb10 mb-lg0">
					<select class="selectpicker f-14" title="Page">
						<option>Page</option>
					</select>
				</div>
				<div class="col-md-4 col-lg-2 mb10 mb-lg0">
					<select class="selectpicker f-14" title="All Page">
						<option>All Page</option>
					</select>
				</div>
				<div class="col-md-4 col-lg-2 mb10 mb-lg0">
					<select class="selectpicker f-14">
						<option>Business-name MyDrive</option>
						<option>Personal MyDrive</option>
					</select>
				</div>
				<div class="col-md-4 col-lg-2 mb10 mb-md0 pr-lg0">
					<div class="input-group calendar-input-group">
						<input type="text" class="caleran-ex-left form-control f-14 field-h40" id="target-cal" readonly="" data-plugin-options='{"rangeOrientation":true,"showButtons":true}' placeholder="Choose Date">
						<span class="input-group-btn caleran-show ">
							 <button class="btn calendar-btn d-gblue-clr f-19" type="button"><i class="icon-calendar"></i></button>
							</span>
					</div>
				</div>
				<div class="col-md-4 col-lg-2 mb10 mb-md0 pl-lg30 pr-lg0">
					<div class="smart-search-field">
						<div class="input-group">
							<input class="form-control" placeholder="Search" type="text">
							<div class="input-group-append">
								<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-lg-2 pl-lg30">
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
					 <th></th>
                    <th>Name &nbsp;<i class="fa fa-sort"></i></th>
					<th>Created On &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Deleted On &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Actions</th>
                  </tr>
                </thead>
				 <!----- Table Option Div Show----> 
                <div class="table-option-manage animated fadeIn">
					<ul class="list-inline f-14 w400 mb0">
						<li class="list-inline-item"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Recover"><i class="icon-recover"></i>&nbsp; Recover</a></li>
					</ul>
				</div>
				 <!----- Table Option Div end----> 
                <tbody>
                  <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck2" type="checkbox" class="checkbox-active">
                        <label for="tcheck2"></label>
                      </div></td>
					  <td><img src="../../../../images/email-pic.png" class="img-fluid img-circle"></td>
                    <td><a href="#" class="p-blue-clr t-decoration-none">Anurag Sharma</a></td>
                    <td>10 Dec 2017</td>
                    <td>20 Dec 2017</td>
                    <td><ul class="table-action">
                        <li class="action-menu"><a href="#" class="action-item" title="Recover"><i class="icon-recover"></i></a></li>
                      </ul></td>
                  </tr>
				  <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck5" type="checkbox" class="checkbox-active">
                        <label for="tcheck5"></label>
                      </div></td>
					  <td><img src="../../../../images/email-pic.png" class="img-fluid img-circle"></td>
                    <td><a href="#" class="p-blue-clr t-decoration-none">Anurag Sharma</a></td>
					<td>10 Dec 2017</td>
                    <td>20 Dec 2017</td>
                    <td><ul class="table-action">
                        <li class="action-menu"><a href="#" class="action-item" title="Recover"><i class="icon-recover"></i></a></li>
                      </ul></td>
                  </tr> 
                  <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck3" type="checkbox" class="checkbox-active">
                        <label for="tcheck3"></label>
                      </div></td>
                    <td><span class="caption s-blue-bg">S</span></td>
					<td><a href="#" class="p-blue-clr t-decoration-none">Anurag Sharma</a></td>
                   <td>10 Dec 2017</td>
                    <td>20 Dec 2017</td>
                    <td><ul class="table-action">
                        <li class="action-menu"><a href="#" class="action-item" title="Recover"><i class="icon-recover"></i></a></li>
                      </ul></td>
                  </tr>
				  <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck4" type="checkbox" class="checkbox-active">
                        <label for="tcheck4"></label>
                      </div></td>
                    <td><span class="caption s-green-bg">S</span></td>
					<td><a href="#" class="p-blue-clr t-decoration-none">Anurag Sharma</a></td>
					<td>10 Dec 2017</td>
                    <td>20 Dec 2017</td>
                    <td><ul class="table-action">
                        <li class="action-menu"><a href="#" class="action-item" title="Recover"><i class="icon-recover"></i></a></li>
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
	  
<!------- Smart Footer Include File ---------->
<?php include '../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->