<!------- Smart Header Include File---------->
<?php include '../includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<div class="container-fluid p15 p-md30">
	<!-- Header Section Start -->
	<div class="row">
		<div class="col-12">
			<span class="f-md-24 f-20 lato-font">Add New Contact </span> &nbsp;
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="lightgrey mt5">Here you can add & manage all your business contacts.</p>
		</div>
	</div>
	<!-- Header Section End -->
	<!-- Add Contacts Section Start -->
	<form action="" method="post">
		<div class="row mt15 mt-md30">
			<div class="col-12 col-md-4 col-lg-3 text-center">
				<div id="AddContacsSticky">
					<div class="business-profile-thumb d-flex align-items-center">
						<img src="<?php echo $basedir; ?>images/profile-pic.png" class="img-fluid d-block mx-auto">
					</div>
					<p class="f-12 gblue-clr mt12">Upload your Image in 130px X 130px</p>
					<p class="f-14 mt5 lh150">
						<input id="upload_primary" type="file" class="d-none"/>
						<a href="" class="p-blue-clr" id="upload_link_primary">Upload</a><br>
						<a href="#" class="p-blue-clr">Remove</a>
					</p>
					<div class="p15 p-md30 vl-gblue-bg mt15 radius5 f-14">
						<div class="f-18 f-md-24">John Snow Winterfell</div>
						<div class="mt7">General Manager</div>
						<div class="my5">Company Name Goes Here</div>
						<a href="#" class="p-blue-clr break-all"><u>johnsnowwinterfell@xyz.com</u></a>
						<div class="mt5">Kota, India</div>
						<ul class="d-flex justify-content-center nav f-12 mt15">
							<li class="share-contact-icon"><a href="#" class="white-clr" title="Facebook"><i class="icon-facebook-p"></i></a>
							</li>
							<li class="share-contact-icon"><a href="#" class="white-clr" title="twitter"><i class="icon-twitter-p"></i></a>
							</li>
							<li class="share-contact-icon"><a href="#" class="white-clr" title="Instagram"><i class="icon-instagram-p"></i></a>
							</li>
							<li class="share-contact-icon"><a href="#" class="white-clr" title="Linkedin"><i class="icon-linkedin-p"></i></a>
							</li>
							<li class="share-contact-icon"><a href="#" class="white-clr" title="Whatsapp"><i class="icon-whatsapp-p"></i></a>
							</li>
							<li class="share-contact-icon"><a href="#" class="white-clr" title="Tumblr"><i class="icon-tumblr-p"></i></a>
							</li>
							<li class="share-contact-icon"><a href="#" class="white-clr" title="Skype"><i class="icon-skype-p"></i></a>
							</li>
							<li class="share-contact-icon"><a href="#" class="white-clr" title="Viber"><i class="icon-viber-p"></i></a>
							</li>
							<li class="share-contact-icon"><a href="#" class="white-clr" title="Snapchat"><i class="icon-snapchat-p"></i></a>
							</li>
							<li class="share-contact-icon"><a href="#" class="white-clr" title="Reddit"><i class="icon-reddit-p"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-8 col-lg-8 mt15 mt-md0 smart-form">
				<div class="row">
					<div class="col-12 f-18 w500">Basic Information:</div>
					
					<div class="col-12 col-md-6 mt15 mt-md25">
						<label class="d-gblue-clr">Name</label>
						<input type="text" name="business-name" class="form-control" placeholder="Enter Name" value="Abhishek Jain">
					</div>
					
					<div class="col-12 col-md-6 mt15 mt-md25 caleran-h50 no-hover-focus">
						<label class="d-gblue-clr">Joining Date</label>
						<div class="input-group">
							<input type="text" name="dob" readonly="" class="form-control radiusrb0" id="dob-primary-target" placeholder="Date of Birth">
							<span class="input-group-btn" id="dob-primary">
								<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
							</span>
						</div>
					</div>
					
					<div class="col-12 col-md-6 mt15 mt-md25 caleran-h50 no-hover-focus">
						<label class="d-gblue-clr">Date of Birth</label>
						<div class="input-group">
							<input type="text" name="dob" readonly="" class="form-control radiusrb0" id="dob-secondary-target" placeholder="Date of Birth">
							<span class="input-group-btn" id="dob-secondary">
								<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
							</span>
						</div>
					</div>
					
					<div class="col-12 col-md-6 mt15 mt-md25">
						<label class="d-gblue-clr">Email</label>
						<input type="text" name="business-name" class="form-control" placeholder="Enter Email Address" value="abhishek@gmail.com">
					</div>
					
					<div class="col-12 col-md-6 mt15 mt-md25 f-14">
						<label class="d-gblue-clr">Mobile</label>
						<input id="phone" type="tel" name="mobile" class="form-control" placeholder="Mobile no">
					</div>
					
					<div class="col-12 col-md-6 mt15 mt-md25">
						<label class="d-gblue-clr">Role</label>
						<input type="text" class="form-control" placeholder="Enter Role" value=" ">
					</div>
					
					<div class="col-12 col-md-6 mt15 mt-md25">
						<label class="d-gblue-clr">Company</label>
						<input type="text" class="form-control" placeholder="Company" value=" ">
					</div>
					
					<div class="col-12 col-md-6 mt15 mt-md25">
						<label class="d-gblue-clr">Company Size</label>
						<select class="selectpicker" title="Select one">
						  <option>0 - 10</option>
						  <option>11 - 50</option>
						  <option>51 - 200</option>
						  <option>201 - 500</option>
						  <option>501 - 1000</option>
						  <option>Greater than 1000</option>
						</select>
					</div>
					<div class="col-12 mt15 mt-md25">
						<div class="row">
							<div class="col-12 col-md-6">
								<div class="form-group mb0">
                <p class="f-14 d-gblue-clr mb6">Profile</p>
				 <div class="">
                <div class="dropdown simple-dropdown error-message">
                  <button class="btn base-btn default-btn dropdown-toggle btn-block btn-h50 text-left customer-goalfield" type="button" id="dropdownMenu1" data-toggle="dropdown"
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
                </div>
           		<!--<select class="selectpicker f-14 " title="Choose Profile" data-live-search="true">
					<option>Manager - Business1</option>
					<option>Marketer - Business1</option>
				</select>-->
              </div>
							</div>
							<div class="col-12 mt15">
								<div class="smart-checkbox-btn checkbox-strong-blue ml20 ml-md0">
								<input id="remember" type="checkbox">
								<label for="remember" class="d-gblue-clr f-13"> Allow to activate the notification of team member</label>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-12 col-md-6 mt15 mt-md25">
						<label class="d-gblue-clr">Country</label>
						<div class="no-hover-focus flagstrap-h50 f-14">
							<div id="account_contries_primary" data-input-name="country_primary">
							</div>
						</div>
					</div>
					
					<div class="col-12 col-md-6 mt15 mt-md25">
						<label class="d-gblue-clr">State</label>
						<select class="selectpicker f-14" title="Select one">
							<option>Rajasthan</option>
							<option>Rajasthan</option>
							<option>Rajasthan</option>
							<option>Rajasthan</option>
							<option>Rajasthan</option>
							<option>Rajasthan</option>
						</select>
					</div>
					
					<div class="col-12 col-md-6 mt15 mt-md25">
						<label class="d-gblue-clr">City</label>
						<select class="selectpicker f-14" name="city_primary" title="Select City">
							<option selected>Kota</option>
							<option>Kota 2</option>
							<option>Kota 3</option>
						</select>
					</div>
					
					<div class="col-12 col-md-6 mt15 mt-md25">
						<label class="d-gblue-clr">Pin</label>
						<input type="text" name="zip" class="form-control" placeholder="Enter Pin Code" value="324005">
					</div>
					
					<div class="col-12 mt15 mt-md25">
						<label class="d-gblue-clr">Address</label>
						<textarea class="form-control" rows="5"></textarea>
					</div>
					
					<div class="col-12 f-18 w500 mt-md40 mt15">Social Information</div>
				
					<div class="col-12 col-md-6 mt15 mt-md25">
						<label class="d-gblue-clr">Facebook</label>
						<input type="text"class="form-control" placeholder="">
					</div>
					
					<div class="col-12 col-md-6 mt15 mt-md25">
						<label class="d-gblue-clr">Twitter</label>
						<input type="text"  class="form-control" placeholder="">
					</div>
					
					<div class="col-12 col-md-6 mt15 mt-md25">
						<label class="d-gblue-clr">Instagram</label>
						<input type="text"class="form-control" placeholder="">
					</div>
					
					<div class="col-12 col-md-6 mt15 mt-md25">
						<label class="d-gblue-clr">LinkedIn</label>
						<input type="text"  class="form-control" placeholder="">
					</div>
					
					<div class="col-12 col-md-6 mt15 mt-md25">
						<label class="d-gblue-clr">Whatsapp</label>
						<input type="text"class="form-control" placeholder="">
					</div>
					
					<div class="col-12 col-md-6 mt15 mt-md25">
						<label class="d-gblue-clr">Tumblr</label>
						<input type="text"  class="form-control" placeholder="">
					</div>
					
					<div class="col-12 col-md-6 mt15 mt-md25">
						<label class="d-gblue-clr">Skype</label>
						<input type="text"class="form-control" placeholder="">
					</div>
					
					<div class="col-12 col-md-6 mt15 mt-md25">
						<label class="d-gblue-clr">Viber</label>
						<input type="text"  class="form-control" placeholder="">
					</div>
					
					<div class="col-12 col-md-6 mt15 mt-md25">
						<label class="d-gblue-clr">Snapchat</label>
						<input type="text"class="form-control" placeholder="">
					</div>
					
					<div class="col-12 col-md-6 mt15 mt-md25">
						<label class="d-gblue-clr">Reddit</label>
						<input type="text"  class="form-control" placeholder="">
					</div>
					
				   <div class="col-12 f-18 w500 mt-md40 mt15">Tag Information</div>
				
					<div class="col-12 mt15 mt-md25 f-14 account-merge">
						<label class="d-gblue-clr">Tag</label>
						<input class="form-control d-none" value="Tags" name="tags" id="primary">
					</div>
					
					<div class="col-12 text-right mt15 mt-md30">
						<input type="button" class="base-btn default-btn" value="Cancel"> &nbsp; 
						<input type="submit" name="add-account" class="base-btn blue-btn" value="Save">
					</div>
				</div>
			</div>
		</div>
	</form>
	<!-- Add Contacts Section End -->
</div>

<!------- Smart Footer Include File---------->
<?php include '../includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->