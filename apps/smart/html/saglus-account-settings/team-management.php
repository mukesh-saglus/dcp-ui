
<?php include '../includes/smart-header.php' ?>

<div class="container-fluid p15 p-md30">
  <div class="row align-items-center">
    <div class="col-12 col-md-7"> <span class="f-20 f-md-24 lato-font">Team Management </span> &nbsp; <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a> <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
      <p class="gblue-clr f-14 w400 mt5">Add & manage your team members</p>
    </div>
    <div class="col-12 col-md-5 text-center text-md-right mt10 mt-md0"> <a href="#" class="base-btn default-btn mr5">Export</a><a href="javascript:void(0)" class="base-btn blue-btn user-info"><i class="icon-add-new f-18 align-middle"></i>&nbsp;&nbsp;New Member</a></div>
  </div>
  <div class="row mt-md30 mt15"> 
    <!----Filter Option List Start--->
	 <div class="col-12">            
            <div class="row">
              <div class="col-md-4 col-lg-4 col-xl-3 bs-h40 mb10 mb-lg0 smart-form">
			   <select class="selectpicker f-14 bs-h40" title="Added in Last 7 Days (58)">
                    <option>Added in Last 7 Days (58)</option>
					<option>Added in Last 24 Hours (58)</option>
					<option>Added in Last 30 Days (85)</option>
					<option>Recently Updated List (25)</option>
                </select>
              </div>
              <div class="col-md-8 col-lg-8 col-xl-9">
                <div class="row">
                  <div class="col-md-6 col-lg-3 col-xl-3 bs-h40 mb10 mb-lg0 smart-form">
			   <select class="selectpicker f-14 bs-h40" title="Profile">
                    <option>Profile</option>
					<option>Manager</option>
					<option>Marketer</option>
                </select>
              </div>
			  <div class="col-md-6 col-lg-3 col-xl-3 bs-h40 mb10 mb-lg0 smart-form">
			   <select class="selectpicker f-14 bs-h40" title="Business">
                    <option>Business</option>
					<option>eduncle.com</option>
					<option>saglus.com</option>
                </select>
              </div>
                  <div class="col-md-6 col-lg-3 col-xl-4 mb10 mb-md0">
                    <div class="smart-search-field">
                      <div class="input-group">
                        <input class="form-control" placeholder="Search" type="text">
                        <div class="input-group-append">
                          <button class="btn" type="submit"> <i class="fa fa-search"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3 col-xl-2">
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
              <th></th>
              <th>Member Name &nbsp;<i class="fa fa-sort"></i></th>
              <th>Profile &nbsp;<i class="fa fa-sort"></i></th>
              <th>Business &nbsp;<i class="fa fa-sort"></i></th>
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
                  <input id="tcheck1" type="checkbox" class="checkbox-active">
                  <label for="tcheck1"></label>
                </div></td>
              <td><img src="../../../../images/email-pic.png" class="img-fluid img-circle"></td>
              <td>Dr. Amit Pareek</td>
              <td class="lh200">Super Admin</td>
              <td class="lh200">Saglus Info Pvt Ltd<br/>
                Eduncle Info Pvt Ltd</td>
              <td><ul class="table-action">
                        <li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
                        <li class="action-menu"><a href="#" class="action-item" title="View"><i class="icon-show"></i></a></li>
                      </ul></td>
            </tr>
            <tr>
              <td><div class="smart-checkbox-btn checkbox-strong-blue">
                  <input id="tcheck2" type="checkbox" class="checkbox-active">
                  <label for="tcheck2"></label>
                </div></td>
              <td><img src="../../../../images/mark-thomas.png" class="img-fluid img-circle"></td>
              <td>Sachin Garg</td>
              <td>Admin</td>
              <td class="lh200">Saglus Info Pvt Ltd</td>
              <td><ul class="table-action">
                        <li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
                        <li class="action-menu"><a href="#" class="action-item" title="View"><i class="icon-show"></i></a></li>
                        <li class="action-menu"><a href="#" class="action-item" title="Delete"><i class="icon-delete"></i></a></li>
                      </ul></td>
            </tr>
            <tr>
              <td><div class="smart-checkbox-btn checkbox-strong-blue">
                  <input id="tcheck3" type="checkbox" class="checkbox-active">
                  <label for="tcheck3"></label>
                </div></td>
              <td><span class="caption s-green-bg">J</span></td>
              <td>Jay Prakash Nagar</td>
              <td>Head</td>
              <td class="lh200">
				Saglus Info Pvt. Ltd.<br>
				Saglus Info Pvt Ltd<br>
				Eduncle Info Pvt Ltd<br>
				<!-- More Option btn -->
				<a href="javascript:void(0);" class="f-14 p-blue-clr" data-toggle="modal" data-target="#BusinessModal"><u>More</u></a>
			  </td>
              <td><ul class="table-action">
                        <li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
                        <li class="action-menu"><a href="#" class="action-item" title="View"><i class="icon-show"></i></a></li>
                        <li class="action-menu"><a href="#" class="action-item" title="Delete"><i class="icon-delete"></i></a></li>
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
  <div class="col-12 col-md-12 p0 add-account-scroll">
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
                <p class="f-14 p-blue-clr lh150 mt10 arrow-hover-text"> <strong>Manager,</strong> Internet Marketing </p>
                <div class="role_hover_box p20 f-14 radius5"> <strong>Manager,</strong> Internet Marketing </div>                
              </div>
            </div>
            
            <div class="smart-form mt-md30 mt15">
              <div class="form-group mb0">
                <p class="f-14 d-gblue-clr mb6">Profile</p>
                <div class="dropdown simple-dropdown">
                  <button class="btn base-btn default-btn dropdown-toggle btn-block btn-h50 text-left" type="button" id="dropdownMenu1" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false"> <span class="caret-right pull-left text-truncate pr15">Choose Profile</span> </button>
                  <div class="dropdown-menu w-100 stoppropagation h-auto f-14"  aria-labelledby="dropdownMenu1"> 
                        <!--- Searchbox Field ------->
                        <div class="bs-searchbox-field">
                          <div class="input-group">
                            <div class="smart-checkbox-btn checkbox-strong-blue">
                              <input id="saerch1" type="checkbox">
                              <label for="saerch1" class="mb4"></label>
                            </div>
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                              <button class="btn" type="submit"> <i class="fa fa-search"></i></button>
                            </div>
                          </div>
                        </div>
                    <!--- Scrollbar Div start ------->
                    <div class="mCustomScrollbar f-14 mh-180" data-mcs-theme="inset-3">
                      <li> <a href="javascript:void(0)" class="dropdown-item">
                        <div class="smart-checkbox-btn checkbox-strong-blue">
                          <input id="checkdrop1" type="checkbox">
                          <label for="checkdrop1"> Manager - Business1 </label>
                        </div>
                        </a> </li>
                      <li> <a href="javascript:void(0)" class="dropdown-item">
                        <div class="smart-checkbox-btn checkbox-strong-blue">
                          <input id="checkdrop2" type="checkbox">
                          <label for="checkdrop2"> Marketer - Business1 </label>
                        </div>
                        </a> </li>
                      
                    </div>
                  </div>
                </div>
           		<!--<select class="selectpicker f-14 " title="Choose Profile" data-live-search="true">
					<option>Manager - Business1</option>
					<option>Marketer - Business1</option>
				</select>-->
              </div>
              <div class="smart-checkbox-btn checkbox-strong-blue mt15">
					<input id="remember" type="checkbox">
					<label for="remember" class="d-gblue-clr f-13"> Allow to activate the notification of team member</label>
				</div>
            </div>
            <div class="smart-form flagstrap-h50 mt-md20 mt15">
              <div class="form-group mb0 f-14">
                <p class="f-14 d-gblue-clr mb6">Country</p>
                <div id="account_contries_primary" data-input-name="country_primary"> </div>
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
            <div class="smart-form mt-md25 mt15 text-right addacc-fixbtn">
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
            <div class="smart-form mt-md25 mt15 text-right addacc-fixbtn">
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
            <div class="smart-form mt-md25 mt15 text-right addacc-fixbtn">
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
          <div class="col-md-12 mt-md25 mt15 mb-md30 mb15 addacc-fixbtn">
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