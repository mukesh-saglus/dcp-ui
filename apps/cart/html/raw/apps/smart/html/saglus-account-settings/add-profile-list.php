
<?php include '../includes/smart-header.php' ?>

<div class="container-fluid p15 p-md30">
  <div class="row align-items-center">
    <div class="col-12 col-md-7"> <span class="f-20 f-md-24 lato-font">Profile </span> &nbsp; <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a> <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
      <p class="gblue-clr f-14 w400 mt5">Create & manage business profiles</p>
    </div>
    <div class="col-12 col-md-5 text-center text-md-right mt10 mt-md0"> <a href="#" class="base-btn default-btn mr5">Export</a> <a href="add-profile.php" class="base-btn blue-btn user-info"><i class="icon-add-new f-18 align-middle"></i>&nbsp;&nbsp; Add Profile</a></div>
  </div>
  <div class="row mt-md30 mt15"> 
    <!----Filter Option List Start--->
	 <div class="col-12">            
            <div class="row">
              <div class="col-md-4 col-lg-4 col-xl-3 bs-h40 mb10 mb-md0 smart-form">
			   <select class="selectpicker f-14 bs-h40" title="Added in Last 7 Days (58)">
                    <option>Added in Last 7 Days (58)</option>
					<option>Added in Last 24 Hours (58)</option>
					<option>Added in Last 30 Days (85)</option>
					<option>Recently Updated List (25)</option>
                </select>
              </div>
              <div class="col-md-8 offset-md-0 col-lg-8 col-xl-7 offset-xl-2 offset-lg-0">
                <div class="row">
                  <div class="col-md-4 col-lg-4 col-xl-4 mb10 mb-md0 pl-xl0 text-right bs-h40">
				<select class="selectpicker f-14 " title="All Businesses" data-live-seacrh="true">
					<option>Business 1</option>
					<option>Business 2</option>
					<option>Business 3</option>
				</select>
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
    
    <div class="col-12 col-md-12 col-lg-8 t-wauto tw-100 mt20 transition-all order-2 order-lg-1">
      <div id="thori-scroll" class="table-responsive smart-table-style">
        <table class="table table-bordered">
                <thead>
                  <tr>
                    <th><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="checkAll" type="checkbox">
                        <label for="checkAll"></label>
                      </div></th>
					 <th></th>
                    <th>Profile Name &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Business &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Assigned Members</th>
                    <th>Actions</th>
                  </tr>
                </thead>
				 <!----- Table Option Div Show----> 
                <div class="table-option-manage animated fadeIn">
					<ul class="list-inline f-14 w400 mb0">
					<li class="list-inline-item"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Duplicate"><i class="icon-duplicate"></i> Duplicate</a></li>
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
					 <td><span class="caption s-green-bg">M</span></td> 
                    <td>Manager</td>
                    <td>eduncle.com</td>
                    <td>2</td>
                     <td><ul class="table-action">
                        <li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
                        <li class="action-menu"><a href="#" class="action-item" title="View" data-toggle="modal" data-target="#ProfileDetailsModal"><i class="icon-show"></i></a></li>
                        <li class="action-menu"><a href="team-management.php" class="action-item" title="View Members"><i class="icon-person"></i></a></li>
                       <li class="action-menu table-action-dropdown"> <a href="javascript:" class="dropdown-toggle action-item" data-toggle="dropdown">  <span data-toggle="tooltip" data-placement="top" title="More" data-original-title="More"><i class="icon-more"></i></span> </a>
                          <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li><a href="#" data-toggle="modal" data-target="#ProfileDeleteModal">Delete</a></li>
                          </ul>
                        </li>
                      </ul></td>
                  </tr>
				  <tr>
                    <td><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="tcheck3" type="checkbox" class="checkbox-active">
                        <label for="tcheck3"></label>
                      </div></td>
					  <td><span class="caption s-green-bg">M</span></td>
                    <td>Marketer</td>
                    <td>saglus.com</td>
                    <td>12</td>
                    <td><ul class="table-action">
                        <li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
                        <li class="action-menu"><a href="#" class="action-item" title="View" data-toggle="modal" data-target="#ProfileDetailsModal"><i class="icon-show"></i></a></li>
                        <li class="action-menu"><a href="team-management.php" class="action-item" title="View Members"><i class="icon-person"></i></a></li>
                       <li class="action-menu table-action-dropdown"> <a href="javascript:" class="dropdown-toggle action-item" data-toggle="dropdown">  <span data-toggle="tooltip" data-placement="top" title="More" data-original-title="More"><i class="icon-more"></i></span> </a>
                          <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li><a href="#" data-toggle="modal" data-target="#deleteModal">Delete</a></li>
                          </ul>
                        </li>
                      </ul></td>
                  </tr>
                </tbody>
              </table>
      </div>
      
      <!----- Pagination Div Start----->
      
      <div class="d-flex justify-content-between flex-wrap f-14 mt15 mt-md30">
        <div class="d-flex justify-content-start align-items-center mb5"> Show <span class="bs-h40 entries-width px15">
          <select class="selectpicker" >
            <option>10</option>
            <option>20</option>
            <option>30</option>
          </select>
          </span> <span class="d-none d-xl-block">Showing 1 to 4 of 400 entries</span> </div>
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

<!--Right Fixed Section-->
<div class="add-account-section addnew-acc-width p0 no-hover-focus user-info-block d-none"> 
  
  <!-- Nav tabs -->
  <ul class="nav nav-justified tabs-style4 f-9 f-md-11 f-lg-14 lato-font w600 single-account-bbottom" role="tablist">
    <li class="nav-item"> <a class="nav-link active px-md-2 px-lg-3" data-toggle="tab" data-target ="#basic">Basic Information</a></li>
    <li class="nav-item"> <a class="nav-link px-md-2 px-lg-3" data-toggle="tab"  data-target ="#social">Social Information</a></li>
    <li class="nav-item"> <a class="nav-link px-md-2 px-lg-3" data-toggle="tab"  data-target ="#tag">Tag Information</a></li>
  </ul>
  <div class="col-12 col-md-12 p0 mCustomScrollbar add-account-scroll" data-mcs-theme="inset-3">
    <div class="col-12 col-md-12 px15"> 
      <!-- Tab panes -->
      <div class="tab-content mt-md20 mt15 mb30">
        <div id="basic" class="container-fluid tab-pane active">
          <form action="" method="post">
            <div class="thumb-upload">
              <input type="hidden" value="../../../../images/profile-pic.png" name="pic">
              <img src="../../../../images/profile-pic.png" class="d-block img-fluid img-circle single-thumb mx-auto"> <a href="" class="thumb-upload-icon text-center" id="upload_link_primary"><i class="icon-edit"></i></a>
              <input id="upload_primary" type="file" class="d-none"/>
            </div>
            <p class="f-11 gblue-clr mt5 text-center">Upload Photo Min: 130px x 130px</p>
            <div class="smart-form mt-md25 mt15">
              <div class="form-group mb0">
                <p class="f-14 d-gblue-clr mb6">Name</p>
                <input type="text" name="name" class="form-control f-14" value="Dr. Amit Pareek">
              </div>
            </div>
            <div class="smart-form mt-md20 mt15">
        	<div class="form-group mb0">
				<p class="f-14 d-gblue-clr mb6">Joining Date</p>
				<input type="text" name="doj" class="form-control f-14" placeholder="Joining Date" value="21 Jul 2018" disabled>
				</div>
            </div>
            <div class="smart-form mt-md20 mt15">
              <div class="form-group mb0">
                <p class="f-14 d-gblue-clr mb6">Date Of Birth</p>
                <div class="input-group">
                  <input type="text" name="dob" readonly class="form-control f-14" id="dob-secondary-target" value="1/1/1990" placeholder="Date of Birth">
                  <span class="input-group-btn" id="dob-secondary">
                  <button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
                  </span> </div>
              </div>
            </div>
            <div class="smart-form mt-md20 mt15">
              <div class="form-group mb0">
                <p class="f-14 d-gblue-clr mb6">Email</p>
                <input type="email" name="email" class="form-control f-14" value="dr.amitpareek@saglusinfo.com">
              </div>
            </div>
            <div class="smart-form mt-md20 mt15">
              <div class="form-group mb0 f-14">
                <p class="f-14 d-gblue-clr mb6">Mobile</p>
                <input id="phone" type="tel" name="mobile" class="form-control f-14" placeholder="Mobile no">
              </div>
            </div>
			 <div class="smart-form mt-md20 mt15">
              <div class="form-group mb0">
                <p class="f-14 d-gblue-clr mb6">Description</p>
                <textarea name="address" class="form-control f-14" placeholder="Description"></textarea>
              </div>
            </div> 
			  
            <div class="mt-md30 mt15">
              <div class="relative d-block">
                <p class="f-14 p-blue-clr lh150 arrow-hover-text"> <strong>Head,</strong> Email Markaeting  (Saglus Info Pvt Ltd)</p>
                <div class="role_hover_box p20 f-14 radius5"> <strong>Manager,</strong> Email Marketing  (Saglus Info Pvt Ltd) </div>
              </div>
              <div class="relative d-block relative">
                <p class="f-14 p-blue-clr lh150 mt10 arrow-hover-text"> <strong>Manager,</strong> Internet Marketing  (Eduncle Info Pvt Ltd)</p>
                <div class="role_hover_box p20 f-14 radius5"> <strong>Manager,</strong> Internet Marketing  (Eduncle Info Pvt Ltd) </div>
              </div>
            </div>
            <div class="smart-form mt-md30 mt15">
              <div class="form-group mb0">
                <p class="f-14 d-gblue-clr mb6">Role</p>
                <div class="input-group">
                  <input type="text" name="role" class="form-control f-14 radiusrb0">
                  <span class="input-group-append">
                  <button class="btn base-btn blue-btn f-14" type="button" id="assign-role"> Assign Role</button>
                  </span> </div>
              </div>
            </div>
            <div class="smart-form flagstrap-h50 mt-md20 mt15">
              <div class="form-group mb0 f-14">
                <p class="f-14 d-gblue-clr mb6">Country</p>
                <div id="account_contries_primary" data-selected-country="IN" data-input-name="country_primary"> </div>
              </div>
            </div>
            <div class="smart-form mt-md20 mt15">
              <div class="form-group mb0">
                <p class="f-14 d-gblue-clr mb6">State</p>
                <select class="selectpicker f-14" name="state" title="Select State" data-live-search="true">
                  <option selected>Rajasthan</option>
                  <option>Rajasthan 2</option>
                  <option>Rajasthan 3</option>
                </select>
              </div>
            </div>
            <div class="smart-form mt-md20 mt15">
              <div class="form-group mb0">
                <p class="f-14 d-gblue-clr mb6">City</p>
                <select class="selectpicker f-14" name="city" title="Select City" data-live-search="true">
                  <option selected>Kota</option>
                  <option>Kota 2</option>
                  <option>Kota 3</option>
                </select>
              </div>
            </div>
            <div class="smart-form mt-md20 mt15">
              <div class="form-group mb0">
                <p class="f-14 d-gblue-clr mb6">Pin</p>
                <input type="text" name="pin" class="form-control f-14" value="324001">
              </div>
            </div>
            <div class="smart-form mt-md20 mt15">
              <div class="form-group mb0">
                <p class="f-14 d-gblue-clr mb6">Address</p>
                <textarea name="address" class="form-control f-14" placeholder="Address">2-K-3 A, Rangbari Main Road, Mahaveer Nagar IIIrd,
</textarea>
              </div>
            </div>
            <div class="smart-form mt-md25 mt15 text-right">
              <input type="button" class="base-btn default-btn addnewacc-close" value="Cancel">
              &nbsp;
              <input type="submit" name="add-account" class="base-btn blue-btn" value="Save">
            </div>
          </form>
        </div>
        <div id="social" class="container-fluid tab-pane">
          <form action="" method="post">
            <div class="smart-form mt-md25 mt15">
              <div class="form-group mb0">
                <p class="f-14 d-gblue-clr mb6">Facebook</p>
                <input type="text" name="facebook" class="form-control f-14" placeholder="Facebook profile URL">
              </div>
            </div>
            <div class="smart-form mt-md20 mt15">
              <div class="form-group mb0">
                <p class="f-14 d-gblue-clr mb6">Twitter</p>
                <input type="text" name="twitter" class="form-control f-14" placeholder="Twitter profile URL">
              </div>
            </div>
            <div class="smart-form mt-md20 mt15">
              <div class="form-group mb0">
                <p class="f-14 d-gblue-clr mb6">Instagram</p>
                <input type="text" name="instagram" class="form-control f-14" placeholder="Instagram profile URL">
              </div>
            </div>
            <div class="smart-form mt-md20 mt15">
              <div class="form-group mb0">
                <p class="f-14 d-gblue-clr mb6">LinkedIn</p>
                <input type="text" name="linkedin" class="form-control f-14" placeholder="LinkedIn profile URL">
              </div>
            </div>
            <div class="smart-form mt-md20 mt15">
              <div class="form-group mb0">
                <p class="f-14 d-gblue-clr mb6">WhatsApp</p>
                <input type="text" name="whatsapp" class="form-control f-14" placeholder="WhatsApp profile URL">
              </div>
            </div>
            <div class="smart-form mt-md20 mt15">
              <div class="form-group mb0">
                <p class="f-14 d-gblue-clr mb6">Tumblr</p>
                <input type="text" name="tumblr" class="form-control f-14" placeholder="Tumblr profile URL">
              </div>
            </div>
            <div class="smart-form mt-md20 mt15">
              <div class="form-group mb0">
                <p class="f-14 d-gblue-clr mb6">Google+</p>
                <input type="text" name="gplus" class="form-control f-14" placeholder="Google+ profile URL">
              </div>
            </div>
            <div class="smart-form mt-md20 mt15">
              <div class="form-group mb0">
                <p class="f-14 d-gblue-clr mb6">Skype</p>
                <input type="text" name="skype" class="form-control f-14" placeholder="Skype ID">
              </div>
            </div>
            <div class="smart-form mt-md20 mt15">
              <div class="form-group mb0">
                <p class="f-14 d-gblue-clr mb6">Viber</p>
                <input type="text" name="viber" class="form-control f-14" placeholder="Viber profile URL">
              </div>
            </div>
            <div class="smart-form mt-md20 mt15">
              <div class="form-group mb0">
                <p class="f-14 d-gblue-clr mb6">SnapChat</p>
                <input type="text" name="snapchat" class="form-control f-14" placeholder="SnapChat profile URL">
              </div>
            </div>
            <div class="smart-form mt-md20 mt15">
              <div class="form-group mb0">
                <p class="f-14 d-gblue-clr mb6">Reddit</p>
                <input type="text" name="reddit" class="form-control f-14" placeholder="Reddit profile URL">
              </div>
            </div>
            <div class="smart-form mt-md25 mt15 text-right">
              <input type="button" class="base-btn default-btn addnewacc-close" value="Cancel">
              &nbsp;
              <input type="submit" name="add-account" class="base-btn blue-btn" value="Save">
            </div>
          </form>
        </div>
        <div id="tag" class="container-fluid tab-pane">
          <form action="" method="post">
            <div class="smart-form mt-md25 mt15">
              <div class="form-group mb0 f-14">
                <input class="form-control" value="Tags" name="tags" id="primary" style="display: none;">
                <p class="f-14 mt10 d-gblue-clr">Pls separate Tag by Comma or enter.</p>
              </div>
            </div>
            <div class="smart-form mt-md25 mt15 text-right">
              <input type="button" class="base-btn default-btn addnewacc-close" value="Cancel">
              &nbsp;
              <input type="submit" name="add-account" class="base-btn blue-btn" value="Save">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="add-account-section addnew-acc-width assign-role addnew-acc-assign-role no-hover-focus d-none">
  <div class="col-12 col-md-12 p0 mCustomScrollbar h-100" data-mcs-theme="inset-3">
    <div class="col-12 col-md-12 px30">
      <form action="" method="post">
        <h5 class="w600 mt-md30 mt15">Assign Role</h5>
        <div class="smart-form mt-md20 mt15">
          <div class="form-group mb0">
            <p class="f-14 d-gblue-clr mb6">Select Role</p>
            <select class="selectpicker f-14" name="state" title="Select Role">
                 <option selected>Admin</option>
                  <option>Head</option>
                  <option>Manager</option>
				  <option>Analyst</option>
                  <option>Executive</option>
				  <option>Custom</option>
            </select>
          </div>
        </div>
        <div class="smart-form mt-md20 mt15">
          <div class="form-group mb0">
            <p class="f-14 d-gblue-clr mb6">Select Business</p>
            <select class="selectpicker f-14" name="city" title="Select City">
              <option selected>Saglus Info Pvt Ltd</option>
              <option>Eduncle Info Pvt Ltd</option>
            </select>
          </div>
        </div>

        <div class="smart-form mt-md20 mt15">
          <div class="form-group mb0">
            <p class="f-14 d-gblue-clr mb6">Select department</p>
            <select class="selectpicker f-14" name="city" title="Select City">
                 <option selected>Video Marketing</option>
                  <option>Email Marketing</option>
                  <option>Page Marketing</option>
				  <option>Engagement Marketing</option>
                  <option>Marketing</option>
            </select>
          </div>
        </div>
        <div class="row mt-md15 f-14">
          <div class="col-12 col-lg-6 mt15">
            <div class="smart-checkbox-btn checkbox-strong-blue">
              <input id="rolecheck1" type="checkbox" class="">
              <label for="rolecheck1">Manage campaign</label>
            </div>
          </div>
          <div class="col-12 col-lg-6 mt15">
            <div class="smart-checkbox-btn checkbox-strong-blue">
              <input id="rolecheck2" type="checkbox" class="">
              <label for="rolecheck2">Add subscriber</label>
            </div>
          </div>
          <div class="col-12 col-lg-6 mt15">
            <div class="smart-checkbox-btn checkbox-strong-blue">
              <input id="rolecheck3" type="checkbox" class="">
              <label for="rolecheck3">Suppression list</label>
            </div>
          </div>
          <div class="col-12 col-lg-6 mt15">
            <div class="smart-checkbox-btn checkbox-strong-blue">
              <input id="rolecheck4" type="checkbox" class="">
              <label for="rolecheck4">Custom field</label>
            </div>
          </div>
          <div class="col-12 col-lg-6 mt15">
            <div class="smart-checkbox-btn checkbox-strong-blue">
              <input id="rolecheck5" type="checkbox" class="">
              <label for="rolecheck5">Manage subscribers</label>
            </div>
          </div>
          <div class="col-12 col-lg-6 mt15">
            <div class="smart-checkbox-btn checkbox-strong-blue">
              <input id="rolecheck6" type="checkbox" class="">
              <label for="rolecheck6">Manage newsletter</label>
            </div>
          </div>
          <div class="col-12 col-lg-6 mt15">
            <div class="smart-checkbox-btn checkbox-strong-blue">
              <input id="rolecheck12" type="checkbox" class="">
              <label for="rolecheck12">Manage autoresponder</label>
            </div>
          </div>
          <div class="col-12 col-lg-6 mt15">
            <div class="smart-checkbox-btn checkbox-strong-blue">
              <input id="rolecheck8" type="checkbox" class="">
              <label for="rolecheck8">Manage AB testing</label>
            </div>
          </div>
          <div class="col-12 col-lg-6 mt15">
            <div class="smart-checkbox-btn checkbox-strong-blue">
              <input id="rolecheck9" type="checkbox" class="">
              <label for="rolecheck9">Manage forms</label>
            </div>
          </div>
          <div class="col-12 col-lg-6 mt15">
            <div class="smart-checkbox-btn checkbox-strong-blue">
              <input id="rolecheck10" type="checkbox" class="">
              <label for="rolecheck10">Statistics</label>
            </div>
          </div>
          <div class="col-12 col-lg-6 mt15">
            <div class="smart-checkbox-btn checkbox-strong-blue">
              <input id="rolecheck11" type="checkbox" class="">
              <label for="rolecheck11">Manage templates</label>
            </div>
          </div>
          <div class="col-md-12 mt-md25 mt15 mb-md30 mb15">
            <div class="smart-form text-right">
              <input type="button" class="base-btn default-btn addnewacc-assign-close" value="Cancel">
              &nbsp;
              <input type="submit" name="add-account" class="base-btn blue-btn" value="Save">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!--Right Fixed Section End--> 

<!--Screen Overlay Section-->
<div id="screen-overlay" class="screen-overlay d-none"> </div>

<?php include '../includes/smart-footer.php' ?>
