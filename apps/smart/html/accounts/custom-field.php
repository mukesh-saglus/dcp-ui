<!------- Smart Header Include File---------->
<?php include '../includes/smart-header.php' ?>
<!------- Smart Header Include File end---------->

<!------- Smart Mail Stylesheet------=------->
<link rel="stylesheet" href="../../../css/mail.css">
<!------- Smart Mail Stylesheet end---------->

<div class="container-fluid p15 p-md30">
	<div class="row align-items-center">
		<div class="col-12 col-md-7">
		<span class="f-md-24 f-20 lato-font">Custom Fields </span> &nbsp;
		<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
		<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
		<p class="lightgrey mt5">Here you can add & manage all your business contacts.</p>
		</div>
		<div class="col-12 col-md-5 text-center text-md-right mt10 mt-md0">
		<a href="#" class="base-btn blue-btn" data-toggle="modal" data-target="#AddCustomFieldPopup"><i class="icon-add-new f-18 align-middle"></i>&nbsp;&nbsp; New Custom Field</a>
		</div>
	</div>
        <div class="row mt-md30 mt15">
			<!----Filter Option List Start--->
        <div class="col-12">
          <div class="row">
			<div class="col-md-4 col-lg-4 col-xl-3 bs-h40 mb10 mb-md0">
				<select class="selectpicker f-14" title="All Custom Fields (1000)">
				  <option>All Custom Fields (1000)</option>
				  <option>Recently added Custom Field (10)</option>
                  <option>Recently modified Custom Field (15)</option>
                  <option>Custom Field added in last 07 days (10)</option>
				  <option>Custom Field added in last 30 days (10)</option>
				</select>
			</div>
			<div class="col-md-8 col-lg-8 col-xl-9">
				<div class="row">
					<div class="col-md-8 col-lg-4 offset-lg-4 col-xl-4 offset-xl-6 mb10 mb-md0 pl-md0">
						<div class="smart-search-field">
							<div class="input-group">
								<input class="form-control f-14" placeholder="Search Score Rules by Name" type="text">
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
			
          <div class="col-12 mt20">
            <div id="thori-scroll" class="table-responsive smart-table-style">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="checkAll" type="checkbox">
                        <label for="checkAll"></label>
                      </div></th>
                    <th>Field Name &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Created On</th>
                    <th>Type</th>
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
                      </div></td>
                    <td><a href="#" class="p-blue-clr t-decoration-none">Email</a></td>
					<td class="d-gblue-clr">15/04/2018</td>
                    <td class="d-gblue-clr">Text</td>
                    <td><ul class="table-action">
                        <li class="action-menu"><a href="#" class="disable-item"><i class="icon-edit"></i></a></li>
                        <li class="action-menu"><a href="#" class="disable-item"><i class="icon-delete"></i></a></li>
                      </ul></td>
                  </tr>
                  <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck3" type="checkbox" class="checkbox-active">
                        <label for="tcheck3"></label>
                      </div></td>
					<td><a href="#" class="p-blue-clr t-decoration-none">Name</a></td>
                    <td>15/04/2018</td>
                    <td>Text</td>
                    <td><ul class="table-action">
                        <li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
                        <li class="action-menu"><a href="#" class="action-item" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i></a></li>
                        </li>
                      </ul></td>
                  </tr>
				  <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck4" type="checkbox" class="checkbox-active">
                        <label for="tcheck4"></label>
                      </div></td>
                    <td><a href="#" class="p-blue-clr t-decoration-none">Joining Date</a></td>
					<td>15/04/2018</td>
                    <td>Text</td>
                    <td><ul class="table-action">
                        <li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
                        <li class="action-menu"><a href="#" class="action-item" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i></a></li>
                      </ul></td>
                  </tr>
                  <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck5" type="checkbox" class="checkbox-active">
                        <label for="tcheck5"></label>
                      </div></td>
					<td><a href="#" class="p-blue-clr t-decoration-none">Date of Birth</a></td>
                    <td>15/04/2018</td>
                    <td>Text</td>
                    <td><ul class="table-action">
                        <li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
                        <li class="action-menu"><a href="#" class="action-item" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i></a></li>
                      </ul></td>
                  </tr>
				  <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck6" type="checkbox" class="checkbox-active">
                        <label for="tcheck6"></label>
                      </div></td>
					<td><a href="#" class="p-blue-clr t-decoration-none">Age</a></td>
                    <td>15/04/2018</td>
                    <td>Text</td>
                    <td><ul class="table-action">
                        <li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
                        <li class="action-menu"><a href="#" class="action-item" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i></a></li>
                        </li>
                      </ul></td>
                  </tr>
				   <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck7" type="checkbox" class="checkbox-active">
                        <label for="tcheck7"></label>
                      </div></td>
                    <td><a href="#" class="p-blue-clr t-decoration-none">Mobile Number</a></td>
					<td>15/04/2018</td>
                    <td>Text</td>
                    <td><ul class="table-action">
                        <li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
                        <li class="action-menu"><a href="#" class="action-item" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i></a></li>
                      </ul></td>
                  </tr>
                  <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck8" type="checkbox" class="checkbox-active">
                        <label for="tcheck8"></label>
                      </div></td>
					<td><a href="#" class="p-blue-clr t-decoration-none">Zip Code</a></td>
                    <td>15/04/2018</td>
                    <td>Text</td>
                    <td><ul class="table-action">
                        <li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
                        <li class="action-menu"><a href="#" class="action-item" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i></a></li>
                      </ul></td>
                  </tr>
				  <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck9" type="checkbox" class="checkbox-active">
                        <label for="tcheck9"></label>
                      </div></td>
					<td><a href="#" class="p-blue-clr t-decoration-none">City</a></td>
                    <td>15/04/2018</td>
                    <td>Text</td>
                    <td><ul class="table-action">
                        <li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
                        <li class="action-menu"><a href="#" class="action-item" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i></a></li>
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
<?php include '../includes/smart-footer.php' ?>
<!------- Smart Footer Include File end ---------->