<!------- Smart Header Include File---------->
<?php include '../../smart/html/includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<!------- CMS Stylesheet------=------->
<link rel="stylesheet" href="../css/cms.css">
<!------- CMS Stylesheet end---------->

<div class="container-fluid p15 p-md30">
	<div class="row align-items-center">
		<div class="col-12 col-md-6 col-lg-6">
		<span class="f-md-24 f-20 lato-font">Tags</span> &nbsp;
		<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
		<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
		<p class="lightgrey mt5">View all your tags here</p>
		</div>
		<div class="col-12 col-md-6 col-lg-6 text-center text-md-right">
		<a href="#" class="base-btn default-btn mt10 mt-md0">Export</a>&nbsp;
		<a href="#" class="base-btn blue-btn mt10 mt-md0" data-toggle="modal" data-target="#"><i class="icon-add-new f-18 align-middle"></i>&nbsp;&nbsp; New Tag</a>
		</div>
	</div>
        <div class="row mt-md30 mt15">
			<!----Filter Option List Start--->
          <div class="col-12">
           <div class="row">
			<div class="col-md-12 col-lg-9 col-xl-9 offset-xl-3 offset-lg-3">
				<div class="row smart-form">
				<div class="col-md-5 col-lg-5 col-xl-4 offset-xl-2 bs-h40 mb10 mb-lg0">
					<div class="input-group calendar-input-group">
						<input type="text" class="caleran-ex-1 form-control f-14 field-h40" id="target-cal" readonly data-plugin-options='{"rangeOrientation":true,"showButtons":true}' placeholder="Choose Date"/>
						<span class="input-group-btn caleran-show">
							<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
							</span>
					</div>
				</div>
					<div class="col-md-4 col-lg-4 col-xl-4 mb10 mb-lg0">
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
							<div class="col-3 col-md-4 col-lg-4 d-flex align-self-center f-14">Show</div>
							<div class="col-9 col-md-8 col-lg-8 bs-h40">
								<select class="selectpicker f-14">
									<option>08</option>
									<option>09</option>
									<option>10</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
          </div>
			<!----Filter Option List End--->
			
          <div class="col-12 col-md-7 col-lg-8 t-wauto tw-100 mt20 transition-all">
            <div id="thori-scroll" class="table-responsive smart-table-style">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th width="4%"><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="checkAll" type="checkbox">
                        <label for="checkAll"></label>
                      </div></th>
                    <th>Title &nbsp;<i class="fa fa-sort"></i></th>
					<th>Created on &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Total Blogs &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Actions</th>
                  </tr>
                </thead>
				 <!----- Table Option Div Show----> 
                <div class="table-option-manage animated fadeIn">
					<ul class="list-inline f-14 w400 mb0">
					<li class="list-inline-item"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Export"><i class="icon-export"></i> Export</a></li>
					<li class="list-inline-item"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i> Delete</a></li>
					</ul>
				</div>
				 <!----- Table Option Div end----> 
                <tbody>
                  <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck2" type="checkbox" class="checkbox-active">
                        <label for="tcheck2"></label>
                      </div>
					</td>
                    <td><a href="#" class="p-blue-clr t-decoration-none">Automation</a></td>
					<td>17 Jan 2018</td>
                    <td>10</td>
                    <td><ul class="table-action">
                        <li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
                        <li class="action-menu"><a href="#" class="action-item" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i></a></li>
                      </ul>
					</td>
                  </tr>
                  <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck3" type="checkbox" class="checkbox-active">
                        <label for="tcheck3"></label>
                      </div>
					</td>
					<td><a href="#" class="p-blue-clr t-decoration-none">Email</a></td>
                    <td>01 Jan 2018</td>
                    <td>20</td>
                    <td><ul class="table-action">
                        <li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
                        <li class="action-menu"><a href="#" class="action-item" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i></a></li>
                      </ul>
					</td>
                  </tr>
				  <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck4" type="checkbox" class="checkbox-active">
                        <label for="tcheck4"></label>
                      </div>
					</td>
                    <td><a href="#" class="p-blue-clr t-decoration-none">Videos</a></td>
					<td>01 Jan 2018</td>
                    <td>10</td>
                    <td><ul class="table-action">
                        <li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
                        <li class="action-menu"><a href="#" class="action-item" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i></a></li>
                      </ul>
					</td>
                  </tr>
                  <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck5" type="checkbox" class="checkbox-active">
                        <label for="tcheck5"></label>
                      </div>
					</td>
					<td><a href="#" class="p-blue-clr t-decoration-none">Marketing Automation</a></td>
                    <td>01 Jan 2018</td>
					<td>5</td>
                    <td><ul class="table-action">
                        <li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
                        <li class="action-menu"><a href="#" class="action-item" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i></a></li>
                      </ul>
					</td>
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
					<option>08</option>
					<option>09</option>
					<option>10</option>
				</select>
				</span>
				<span class="d-none d-xl-block">Showing 1 to 8 of 400 entries</span>
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
	   
<!------- Smart Footer Include File---------->
<?php include '../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->