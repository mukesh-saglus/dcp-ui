<?php include 'merge-accounts-header.php'; ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-12 col-md-3 col-lg-3 col-xl-2 p0 order-2 order-xl-1 d-none d-md-block">
			<div class="merge-title-box f-14">
				<div class="w500 underline title">Basic Information</div>
				<div>Image</div>
				<div class="mt20">Name</div>
				<div>Joining Date</div>
				<div>Date Of Birth</div>
				<div>Email</div>
				<div>Mobile</div>
				<div>Role</div>
				<div>Company</div>
				<div>Country</div>
				<div>State</div>
				<div>City</div>
				<div>Pin</div>
				<div>Address</div>
				
				<div class="w500 underline title mt-md30">Social Information</div>
				<div class="mt8">Facebook</div>
				<div>Twitter</div>
				<div>Instagram</div>
				<div>LinkedIn</div>
				<div>WhatsApp</div>
				<div>Tumblr</div>
				<div>Google+</div>
				<div>Skype</div>
				<div>Viber</div>
				<div>SnapChat</div>
				<div>Reddit</div>
				
				<div class="w500 underline title mt-md30">Tag Information</div>
				<div class="mt8 mb-md100 mb0">Tags</div>
			</div>
		</div>
		
		<div class="col-12 col-md-9 col-lg-9 col-xl-10 mt20 order-3 order-xl-2" id="section-accounts">
			<form action="" method="post">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-6 col-xl-6 account-merge account-merge-primary-section px30">
						<div id="section-primary" class="section-draggable" ondrop="drop(event)" ondragover="allowDrop(event)">
						<div class="primary-bar radius5 f-14 w500 d-block text-center" draggable="true" ondragstart="drag(event)" id="drag1">Primary
						</div>
						</div>
					</div>
					
					<div class="col-12 col-md-6 col-lg-6 col-xl-6 account-merge px30">
						<div id="section-secondary" class="section-draggable" ondrop="drop(event)" ondragover="allowDrop(event)">
						</div>
					</div>
					<!-- Account Primary -->
					<div class="col-12 col-md-6 col-lg-6 col-xl-6 account-merge account-merge-primary px30">
					
						<div class="w500 underline title d-md-none d-block mb7">Basic Information</div>
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt16">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Image</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="pic" id="pic_primary" value="primary">
								<label for="pic_primary"></label>
							</div>
							<div class="form-group mb0 f-14">
								<input type="hidden" value="../../../../images/profile-pic.png" name="pic_primary">
								<img src="../../../../images/profile-pic.png" class="img-fluid img-circle mtm4 profile-pic" width="50"><span class="profile-controllers"> &nbsp; &nbsp; <a href="" class="p-blue-clr" id="upload_link_primary">Upload</a> &nbsp; &nbsp; <a href="#" class="vd-gblue-clr">Remove</a></span>
								<input id="upload_primary" type="file" class="d-none"/>
							</div>
						</div>
						
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt24">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Name</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="name" id="name_primary" value="primary">
								<label for="name_primary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="name_primary" class="form-control f-14" placeholder="Enter name" value="Anurag Sharma">
							</div>
						</div>
						
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Joining Date</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="doj" id="doj_primary" value="primary">
								<label for="doj_primary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="doj_primary" class="form-control f-14" value="12/10/2016" disabled>
							</div>
						</div>
						
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Date Of Birth</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="dob" id="dob_primary" value="primary">
								<label for="dob_primary"></label>
							</div>
							<div class="form-group mb0">
								<div class="input-group">
									<input type="text" name="dob_primary" readonly class="form-control f-14" id="dob-primary-target" value="12/10/2016" placeholder="Date of Birth">
									<span class="input-group-btn" id="dob-primary">
										<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
									</span>
								</div>
							</div>
						</div>
						
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Email</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="email" id="email_primary" value="primary">
								<label for="email_primary"></label>
							</div>
							<div class="form-group mb0">
								<input type="email" name="email_primary" class="form-control f-14" value="anurag@saglusinfo.com" placeholder="Your email">
							</div>
						</div>
						
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Mobile</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="mobile" id="mobile_primary" value="primary">
								<label for="mobile_primary"></label>
							</div>
							<div class="form-group mb0 f-14">
								<input id="phone" type="tel" name="mobile_primary" class="form-control f-14" value="+91-9988998899" placeholder="Your mobile no">
							</div>
						</div>
						
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Role</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="role" id="role_primary" value="primary">
								<label for="role_primary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="role_primary" class="form-control f-14" value="Sr. Graphic Designer" placeholder="Your role">
							</div>
						</div>
						
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Company</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="company" id="company_primary" value="primary">
								<label for="company_primary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="company_primary" class="form-control f-14" value="Saglus Info" placeholder="Your company">
							</div>
						</div>
						
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Country</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="country" id="country_primary" value="primary">
								<label for="country_primary"></label>
							</div>
							<div class="form-group mb0 f-14">
								<div id="account_contries_primary" data-selected-country="IN" data-input-name="country_primary">
								</div>
							</div>
						</div>
						
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">State</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="state" id="state_primary" value="primary">
								<label for="state_primary"></label>
							</div>
							<div class="form-group mb0 bs-h40">
								<select class="selectpicker f-14" name="state_primary" title="Select State" data-live-search="true">
									<option selected>Rajasthan</option>
									<option>Rajasthan 2</option>
									<option>Rajasthan 3</option>
								</select>
							</div>
						</div>
						
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">City</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="city" id="city_primary" value="primary">
								<label for="city_primary"></label>
							</div>
							<div class="form-group mb0 bs-h40">
								<select class="selectpicker f-14" name="city_primary" title="Select City" data-live-search="true">
									<option selected>Kota</option>
									<option>Kota 2</option>
									<option>Kota 3</option>
								</select>
							</div>
						</div>
						
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Pin</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="pin" id="pin_primary" value="primary">
								<label for="pin_primary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="pin_primary" class="form-control f-14" value="324005" placeholder="Pin">
							</div>
						</div>
						
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Address</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="address" id="address_primary" value="primary">
								<label for="address_primary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="address_primary" class="form-control f-14" value="2-K-3 A, Rangbari Main Road, Mahaveer Nagar IIIrd" placeholder="Your address">
							</div>
						</div>
						
						<div class="w500 underline title d-md-none d-block mb7 mt30">Social Information</div>
						
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md90 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Facebook</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="facebook" id="facebook_primary" value="primary">
								<label for="facebook_primary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="facebook_primary" class="form-control f-14" value="www.facebook.com/jaynagar" placeholder="Facebook profile URL">
							</div>
						</div>
						
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Twitter</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="twitter" id="twitter_primary" value="primary">
								<label for="twitter_primary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="twitter_primary" class="form-control f-14" value="www.facebook.com/jaynagar" placeholder="Twitter profile URL">
							</div>
						</div>
						
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Instagram</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="instagram" id="instagram_primary" value="primary">
								<label for="instagram_primary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="instagram_primary" class="form-control f-14" value="www.facebook.com/jaynagar" placeholder="Instagram profile URL">
							</div>
						</div>
						
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">LinkedIn</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="linkedin" id="linkedin_primary" value="primary">
								<label for="linkedin_primary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="linkedin_primary" class="form-control f-14" value="www.facebook.com/jaynagar" placeholder="LinkedIn profile URL">
							</div>
						</div>
						
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">WhatsApp</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="whatsapp" id="whatsapp_primary" value="primary">
								<label for="whatsapp_primary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="whatsapp_primary" class="form-control f-14" value="www.facebook.com/jaynagar" placeholder="WhatsApp profile URL">
							</div>
						</div>
						
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Tumblr</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="tumblr" id="tumblr_primary" value="primary">
								<label for="tumblr_primary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="tumblr_primary" class="form-control f-14" value="www.facebook.com/jaynagar" placeholder="Tumblr profile URL">
							</div>
						</div>
						
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Google+</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="gplus" id="gplus_primary" value="primary">
								<label for="gplus_primary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="gplus_primary" class="form-control f-14" value="www.facebook.com/jaynagar" placeholder="Google+ profile URL">
							</div>
						</div>
						
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Skype</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="skype" id="skype_primary" value="primary">
								<label for="skype_primary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="skype_primary" class="form-control f-14" value="www.facebook.com/jaynagar" placeholder="Skype ID">
							</div>
						</div>
						
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Viber</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="viber" id="viber_primary" value="primary">
								<label for="viber_primary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="viber_primary" class="form-control f-14" value="www.facebook.com/jaynagar" placeholder="Viber profile URL">
							</div>
						</div>
						
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">SnapChat</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="snapchat" id="snapchat_primary" value="primary">
								<label for="snapchat_primary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="snapchat_primary" class="form-control f-14" value="www.facebook.com/jaynagar" 	placeholder="SnapChat profile URL">
							</div>
						</div>
						
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Reddit</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="reddit" id="reddit_primary" value="primary">
								<label for="reddit_primary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="reddit_primary" class="form-control f-14" value="www.facebook.com/jaynagar" placeholder="Reddit profile URL">
							</div>
						</div>
						
						<div class="w500 underline title d-md-none d-block mb7 mt30">Tag Information</div>
						
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md90 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Tags</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="tags" id="tags_primary" value="primary">
								<label for="tags_primary"></label>
							</div>
							<div class="form-group mb0 f-14">
								<input class="form-control" value="Tags" name="tags_primary" id="primary" style="display: none;">
							<p class="f-14 mt10 d-gblue-clr tag-instructions">Please separate Tag by Comma or enter.</p>
							</div>
						</div>
						
					</div>
					<!-- Account Primary -->
					
					<!-- Account Secondary -->
					<div class="col-12 col-md-6 col-lg-6 col-xl-6 account-merge account-merge-secondary px30 mt40 mt-md0 mt-lg0  mt-xs0">
						<div class="w500 underline title d-md-none d-block mb7">Basic Information</div>
						<div class="d-flex flex-wrap flex-md-nowrap  smart-form mt16">
							<p class="f-14 mb7 col-12 p0 mb10 d-md-none d-block w500">Image</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="pic" id="pic_secondary" value="secondary">
								<label for="pic_secondary"></label>
							</div>
							<div class="form-group mb0 f-14">
								<input type="hidden" value="https://itechway.net/wp-content/uploads/2017/09/geek-boys-whatsapp-dp-1.jpg" name="pic_secondary">
								<img src="https://itechway.net/wp-content/uploads/2017/09/geek-boys-whatsapp-dp-1.jpg" class="img-fluid img-circle mtm4 profile-pic" width="50"><span class="profile-controllers"> &nbsp; &nbsp; <a href="" class="p-blue-clr" id="upload_link_secondary">Upload</a> &nbsp; &nbsp; <a href="#" class="vd-gblue-clr">Remove</a></span>
								<input id="upload_secondary" type="file" class="d-none"/>
							</div>
						</div>
					
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt24">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Name</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="name" id="name_secondary" value="secondary">
								<label for="name_secondary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="name_secondary" class="form-control f-14 text-truncate" placeholder="Enter name" value="Anurag Sharma1">
							</div>
						</div>
					
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Joining Date</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="doj" id="doj_secondary" value="secondary">
								<label for="doj_secondary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="doj_secondary" class="form-control f-14 text-truncate" value="13/10/2016" disabled>
							</div>
						</div>
						
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Date Of Birth</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="dob" id="dob_secondary" value="secondary">
								<label for="dob_secondary"></label>
							</div>
							<div class="form-group mb0">
								<div class="input-group">
									<input type="text" name="dob_secondary" readonly class="form-control f-14" id="dob-secondary-target" value="12/12/2016" placeholder="Date of Birth">
									<span class="input-group-btn" id="dob-secondary">
										<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
									</span>
								</div>
							</div>
						</div>
					
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Email</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="email" id="email_secondary" value="secondary">
								<label for="email_secondary"></label>
							</div>
							<div class="form-group mb0">
								<input type="email" name="email_secondary" class="form-control f-14 text-truncate" value="anurag1@saglusinfo.com" placeholder="Your email">
							</div>
						</div>
					
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Mobile</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="mobile" id="mobile_secondary" value="secondary">
								<label for="mobile_secondary"></label>
							</div>
							<div class="form-group mb0 f-14">
								<input id="phone1" type="tel" name="mobile_secondary" class="form-control f-14" value="+91-9988998810" placeholder="Your mobile no">
							</div>
						</div>
					
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Role</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="role" id="role_secondary" value="secondary">
								<label for="role_secondary"></label>
							</div>
							<div class="form-group mb0">
									<input type="text" name="role_secondary" class="form-control f-14 text-truncate" value="Jr. Graphic Designer" placeholder="Your role">
							</div>
						</div>
					
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Company</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="company" id="company_secondary" value="secondary">
								<label for="company_secondary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="company_secondary" class="form-control f-14 text-truncate" value="Eduncle" placeholder="Your company">
							</div>
						</div>
					
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">country</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="country" id="country_secondary" value="secondary">
								<label for="country_secondary"></label>
							</div>
							<div class="form-group mb0 f-14">
								<div id="account_contries_secondary" data-selected-country="US" data-input-name="country_secondary">
								</div>
							</div>
						</div>
					
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">State</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="state" id="state_secondary" value="secondary">
								<label for="state_secondary"></label>
							</div>
							<div class="form-group mb0 bs-h40">
								<select class="selectpicker f-14" name="state_secondary" title="Select State" data-live-search="true">
									<option selected>Maharashtra</option>
									<option>Rajasthan 2</option>
									<option>Rajasthan 3</option>
								</select>
							</div>
						</div>
					
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">City</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="city" id="city_secondary" value="secondary">
								<label for="city_secondary"></label>
							</div>
							<div class="form-group mb0 bs-h40">
								<select class="selectpicker f-14" name="city_secondary" title="Select City" data-live-search="true">
									<option selected>Mumbai</option>
									<option>Kota 2</option>
									<option>Kota 3</option>
								</select>
							</div>
						</div>
					
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Pin</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="pin" id="pin_secondary" value="secondary">
								<label for="pin_secondary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="pin_secondary" class="form-control f-14" value="350005" placeholder="Pin">
							</div>
						</div>
					
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Address</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="address" id="address_secondary" value="secondary">
								<label for="address_secondary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="address_secondary" class="form-control f-14 text-truncate" value="2-K-4 A, Rangbari Main Road, Mahaveer Nagar IIIrd" placeholder="Your address">
							</div>
						</div>
					
						<div class="w500 underline title d-md-none d-block mb7 mt30">Social Information</div>
						
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md90 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Facebook</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="facebook" id="facebook_secondary" value="secondary">
								<label for="facebook_secondary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="facebook_secondary" class="form-control f-14 text-truncate" value="www.facebook.com/jaynagar1" placeholder="Facebook profile URL">
							</div>
						</div>
					
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Twitter</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="twitter" id="twitter_secondary" value="secondary">
								<label for="twitter_secondary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="twitter_secondary" class="form-control f-14 text-truncate" value="www.facebook.com/jaynagar2" placeholder="Twitter profile URL">
							</div>
						</div>
					
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Instagram</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="instagram" id="instagram_secondary" value="secondary">
								<label for="instagram_secondary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="instagram_secondary" class="form-control f-14 text-truncate" value="www.facebook.com/jaynagar3" placeholder="Instagram profile URL">
							</div>
						</div>
					
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">LinkedIn</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="linkedin" id="linkedin_secondary" value="secondary">
								<label for="linkedin_secondary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="linkedin_secondary" class="form-control f-14 text-truncate" value="www.facebook.com/jaynagar4" placeholder="LinkedIn profile URL">
							</div>
						</div>
					
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">WhatsApp</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="whatsapp" id="whatsapp_secondary" value="secondary">
								<label for="whatsapp_secondary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="whatsapp_secondary" class="form-control f-14 text-truncate" value="www.facebook.com/jaynagar5" placeholder="WhatsApp profile URL">
							</div>
						</div>
					
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Tumblr</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="tumblr" id="tumblr_secondary" value="secondary">
								<label for="tumblr_secondary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="tumblr_secondary" class="form-control f-14 text-truncate" value="www.facebook.com/jaynagar6" placeholder="Tumblr profile URL">
							</div>
						</div>
					
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Google+</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="gplus" id="gplus_secondary" value="secondary">
								<label for="gplus_secondary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="gplus_secondary" class="form-control f-14 text-truncate" value="www.facebook.com/jaynagar7" placeholder="Google+ profile URL">
							</div>
						</div>
					
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Skype</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="skype" id="skype_secondary" value="secondary">
								<label for="skype_secondary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="skype_secondary" class="form-control f-14 text-truncate" value="www.facebook.com/jaynagar8" placeholder="Skype ID">
							</div>
						</div>
					
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Viber</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="viber" id="viber_secondary" value="secondary">
								<label for="viber_secondary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="viber_secondary" class="form-control f-14 text-truncate" value="www.facebook.com/jaynagar9" placeholder="Viber profile URL">
							</div>
						</div>
					
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">SnapChat</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="snapchat" id="snapchat_secondary" value="secondary">
								<label for="snapchat_secondary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="snapchat_secondary" class="form-control f-14 text-truncate" value="www.facebook.com/jaynagar10" placeholder="SnapChat profile URL">
							</div>
						</div>
					
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md12 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Reddit</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="reddit" id="reddit_secondary" value="secondary">
								<label for="reddit_secondary"></label>
							</div>
							<div class="form-group mb0">
								<input type="text" name="reddit_secondary" class="form-control f-14 text-truncate" value="www.facebook.com/jaynagar11" placeholder="Reddit profile URL">
							</div>
						</div>
					
						<div class="w500 underline title d-md-none d-block mb7 mt30">Tag Information</div>
						
						<div class="d-flex flex-wrap flex-md-nowrap smart-form mt-md90 mt20">
							<p class="f-14 mb7 col-12 p0 d-md-none d-block w500">Tags</p>
							<div class="smart-radio-btn radio-strong-blue">
								<input type="radio" name="tags" id="tags_secondary" value="secondary">
								<label for="tags_secondary"></label>
							</div>
							<div class="form-group mb0 f-14">
								<input class="form-control" value="Tags11" name="tags_secondary" id="secondary" style="display: none;">
								<p class="f-14 mt10 d-gblue-clr tag-instructions">Please separate Tag by Comma or enter.</p>
							</div>
						</div>
					
					</div>
					<!-- Account Secondary -->
				</div>
			</form>
		</div>
		
		<div class="col-12 col-md-12 col-lg-12 col-xl-4 p0 section-preview order-1 order-xl-3" id="section-preview">
			<div class="preview-title-box">
				<span class="f-18 w500">Preview</span><a href="#" class="d-gblue-clr mt2 d-inline-block pull-right" id="section-preview-btn-close"><i class="icon-cross f-14"></i></a>
			</div>
			
			<div class="preview-content-box f-14">
				<div class="col-12 w500 underline title">Basic Information</div>
				
				<div class="d-flex mt25">
					<div class="col-12 col-md-5">Image <span class="pull-right">:</span></div>
					<div class="col-12 col-md-7" id="preview-pic">
					<img src="../../../../images/profile-pic.png" class="img-fluid img-circle mtm4 profile-pic" width="50">
					</div>
				</div>
				
				<div class="d-flex mt20">
					<div class="col-12 col-md-5">Name <span class="pull-right">:</span></div>
					<div class="col-12 col-md-7 text-truncate" id="preview-name"></div>
				</div>
				
				<div class="d-flex">
					<div class="col-12 col-md-5">Joining Date <span class="pull-right">:</span></div>
					<div class="col-12 col-md-7" id="preview-doj"></div>
				</div>
				
				<div class="d-flex">
					<div class="col-12 col-md-5">Date Of Birth <span class="pull-right">:</span></div>
					<div class="col-12 col-md-7" id="preview-dob"></div>
				</div>
				
				<div class="d-flex">
					<div class="col-12 col-md-5">Email <span class="pull-right">:</span></div>
					<div class="col-12 col-md-7 text-truncate" id="preview-email"></div>
				</div>
				
				<div class="d-flex">
					<div class="col-12 col-md-5">Mobile <span class="pull-right">:</span></div>
					<div class="col-12 col-md-7" id="preview-mobile"></div>
				</div>
				
				<div class="d-flex">
					<div class="col-12 col-md-5">Role <span class="pull-right">:</span></div>
					<div class="col-12 col-md-7 text-truncate" id="preview-role"></div>
				</div>
				
				<div class="d-flex">
					<div class="col-12 col-md-5">Company <span class="pull-right">:</span></div>
					<div class="col-12 col-md-7 text-truncate" id="preview-company"></div>
				</div>
				
				<div class="d-flex">
					<div class="col-12 col-md-5">Country <span class="pull-right">:</span></div>
					<div class="col-12 col-md-7 text-truncate" id="preview-country"></div>
				</div>
				
				<div class="d-flex">
					<div class="col-12 col-md-5">State <span class="pull-right">:</span></div>
					<div class="col-12 col-md-7 text-truncate" id="preview-state"></div>
				</div>
				
				<div class="d-flex">
					<div class="col-12 col-md-5">City <span class="pull-right">:</span></div>
					<div class="col-12 col-md-7 text-truncate" id="preview-city"></div>
				</div>
				
				<div class="d-flex">
					<div class="col-12 col-md-5">Pin <span class="pull-right">:</span></div>
					<div class="col-12 col-md-7 text-truncate" id="preview-pin"></div>
				</div>
				
				<div class="d-flex">
					<div class="col-12 col-md-5">Address <span class="pull-right">:</span></div>
					<div class="col-12 col-md-7 text-truncate" id="preview-address"></div>
				</div>
						
				<div class="col-12 w500 underline title mt30">Social Information</div>
				
				<div class="d-flex">
					<div class="col-12 col-md-5 mt8">Facebook <span class="pull-right">:</span></div>
					<div class="col-12 col-md-7 text-truncate" id="preview-facebook"></div>
				</div>
				
				<div class="d-flex">
					<div class="col-12 col-md-5">Twitter <span class="pull-right">:</span></div>
					<div class="col-12 col-md-7 text-truncate" id="preview-twitter"></div>
				</div>
				
				<div class="d-flex">
					<div class="col-12 col-md-5">Instagram <span class="pull-right">:</span></div>
					<div class="col-12 col-md-7 text-truncate" id="preview-instagram"></div>
				</div>
				
				<div class="d-flex">
					<div class="col-12 col-md-5">LinkedIn <span class="pull-right">:</span></div>
					<div class="col-12 col-md-7 text-truncate" id="preview-linkedin"></div>
				</div>
				
				<div class="d-flex">
					<div class="col-12 col-md-5">WhatsApp <span class="pull-right">:</span></div>
					<div class="col-12 col-md-7 text-truncate" id="preview-whatsapp"></div>
				</div>
				
				<div class="d-flex">
					<div class="col-12 col-md-5">Tumblr <span class="pull-right">:</span></div>
					<div class="col-12 col-md-7 text-truncate" id="preview-tumblr"></div>
				</div>
				
				<div class="d-flex">
					<div class="col-12 col-md-5">Google+ <span class="pull-right">:</span></div>
					<div class="col-12 col-md-7 text-truncate" id="preview-gplus"></div>
				</div>
				
				<div class="d-flex">
					<div class="col-12 col-md-5">Skype <span class="pull-right">:</span></div>
					<div class="col-12 col-md-7 text-truncate" id="preview-skype"></div>
				</div>
				
				<div class="d-flex">
					<div class="col-12 col-md-5">Viber <span class="pull-right">:</span></div>
					<div class="col-12 col-md-7 text-truncate" id="preview-viber"></div>
				</div>
				
				<div class="d-flex">
					<div class="col-12 col-md-5">SnapChat <span class="pull-right">:</span></div>
					<div class="col-12 col-md-7 text-truncate" id="preview-snapchat"></div>
				</div>
				
				<div class="d-flex">
					<div class="col-12 col-md-5">Reddit <span class="pull-right">:</span></div>
					<div class="col-12 col-md-7 text-truncate" id="preview-reddit"></div>
				</div>
						
				<div class="col-12 w500 underline title mt30">Tag Information</div>
				
				<div class="d-flex mt8 mb-xl100 mb15">
					<div class="col-12 col-md-5">Tags <span class="pull-right">:</span></div>
					<div class="col-12 col-md-7" id="preview-tags"></div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<?php include '../includes/smart-footer.php'; ?>
<script>
$('#section-preview').hide();
$("#section-preview-btn").click(function(){
    $('#section-preview').show();
    $('#section-accounts').removeClass('col-xl-10 mt20');
    $('#section-accounts').addClass('col-xl-6 mt20');
});
$("#section-preview-btn-close").click(function(){
    $('#section-preview').hide();
    $('#section-accounts').removeClass('col-xl-6 mt20');
    $('#section-accounts').addClass('col-xl-10 mt20');
});
</script>
<script type="text/javascript">
//Pic Preview Update
function preview_pic() {
    var radio = $("input[name='pic']:checked").val();
	var input = "pic_"+radio;
	var value=$("input[name="+input+"]").val();
	$('#preview-pic img').attr('src',value);
}
//Input Preview Update
function preview(name) {
    var radio = $("input[name="+name+"]:checked").val();
	var input = name+"_"+radio;
	var value=$("input[name="+input+"]").val();
    $("#preview-"+name).text(value);
}
//Select Preview Update
function preview_select(name) {
    var radio = $("input[name="+name+"]:checked").val();
	var input = name+"_"+radio;
	var value=$("select[name="+input+"] option:selected").text();
    $("#preview-"+name).text(value);
}
//Select Preview Update
function preview_tags(name) {
    var radio = $("input[name="+name+"]:checked").val();
	var input = radio+"_tagsinput";
	var htmlString = $("#"+input).text();
	//$( this ).text( htmlString );
	alert(htmlString);
    //$("#preview-"+name).text(value);
}



$(document).ready(function(){
	//On Load
	preview("name");
	preview("doj");
	preview("dob");
	preview("email");
	preview("mobile");
	preview("role");
	preview("company");
	preview_select("country");
	preview_select("state");
	preview_select("city");
	preview("pin");
	preview("address");
	preview("facebook");
	preview("twitter");
	preview("instagram");
	preview("linkedin");
	preview("whatsapp");
	preview("tumblr");
	preview("gplus");
	preview("skype");
	preview("viber");
	preview("snapchat");
	preview("reddit");
	preview("tags");
	//preview_tags("tags");
	
	//On Radio Change
	$('input[type=radio][name=pic]').change(function() {
        preview_pic();
    });
	$('input[type=radio][name=name]').change(function() {
        preview("name");
    });
	$('input[type=radio][name=doj]').change(function() {
        preview("doj");
    });
	$('input[type=radio][name=dob]').change(function() {
        preview("dob");
    });
	$('input[type=radio][name=email]').change(function() {
        preview("email");
    });
	$('input[type=radio][name=mobile]').change(function() {
        preview("mobile");
    });
	$('input[type=radio][name=role]').change(function() {
        preview("role");
    });
	$('input[type=radio][name=company]').change(function() {
        preview("company");
    });
	$('input[type=radio][name=country]').change(function() {
        preview_select("country");
    });
	$('input[type=radio][name=state]').change(function() {
        preview_select("state");
    });
	$('input[type=radio][name=city]').change(function() {
        preview_select("city");
    });
	$('input[type=radio][name=pin]').change(function() {
        preview("pin");
    });
	$('input[type=radio][name=address]').change(function() {
        preview("address");
    });
	$('input[type=radio][name=facebook]').change(function() {
        preview("facebook");
    });
	$('input[type=radio][name=twitter]').change(function() {
        preview("twitter");
    });
	$('input[type=radio][name=instagram]').change(function() {
        preview("instagram");
    });
	$('input[type=radio][name=linkedin]').change(function() {
        preview("linkedin");
    });
	$('input[type=radio][name=whatsapp]').change(function() {
        preview("whatsapp");
    });
	$('input[type=radio][name=tumblr]').change(function() {
        preview("tumblr");
    });
	$('input[type=radio][name=gplus]').change(function() {
        preview("gplus");
    });
	$('input[type=radio][name=skype]').change(function() {
        preview("skype");
    });
	$('input[type=radio][name=viber]').change(function() {
        preview("viber");
    });
	$('input[type=radio][name=snapchat]').change(function() {
        preview("snapchat");
    });
	$('input[type=radio][name=reddit]').change(function() {
        preview("reddit");
    });
	$('input[type=radio][name=tags]').change(function() {
        preview("tags");
    });
	
	
	//On KeyUp Update
	$("input[name='name_primary']").keyup(function(){
        preview("name");
	});
	$("input[name='name_secondary']").keyup(function(){
        preview("name");
	});
	
	$("input[name='email_primary']").keyup(function(){
        preview("email");
	});
	$("input[name='email_secondary']").keyup(function(){
        preview("email");
	});
	
	$("input[name='mobile_primary']").keyup(function(){
        preview("mobile");
	});
	$("input[name='mobile_secondary']").keyup(function(){
        preview("mobile");
	});
	
	$("input[name='role_primary']").keyup(function(){
        preview("role");
	});
	$("input[name='role_secondary']").keyup(function(){
        preview("role");
	});
	
	$("input[name='company_primary']").keyup(function(){
        preview("company");
	});
	$("input[name='company_secondary']").keyup(function(){
        preview("company");
	});
	
	$('select[name="country_primary"]').on('change', function(){    
		preview_select("country");
	});
	$('select[name="country_secondary"]').on('change', function(){    
		preview_select("country");
	});
	
	$('select[name="state_primary"]').on('change', function(){    
		preview_select("state");
	});
	$('select[name="state_secondary"]').on('change', function(){    
		preview_select("state");
	});
	
	$('select[name="city_primary"]').on('change', function(){    
		preview_select("city");
	});
	$('select[name="city_secondary"]').on('change', function(){    
		preview_select("city");
	});
	
	$("input[name='pin_primary']").keyup(function(){
        preview("pin");
	});
	$("input[name='pin_secondary']").keyup(function(){
        preview("pin");
	});
	
	$("input[name='address_primary']").keyup(function(){
        preview("address");
	});
	$("input[name='address_secondary']").keyup(function(){
        preview("address");
	});
	
	
	$("input[name='facebook_primary']").keyup(function(){
        preview("facebook");
	});
	$("input[name='facebook_secondary']").keyup(function(){
        preview("facebook");
	});
	
	$("input[name='twitter_primary']").keyup(function(){
        preview("twitter");
	});
	$("input[name='twitter_secondary']").keyup(function(){
        preview("twitter");
	});
	
	$("input[name='instagram_primary']").keyup(function(){
        preview("instagram");
	});
	$("input[name='instagram_secondary']").keyup(function(){
        preview("instagram");
	});
	
	$("input[name='linkedin_primary']").keyup(function(){
        preview("linkedin");
	});
	$("input[name='linkedin_secondary']").keyup(function(){
        preview("linkedin");
	});
	
	$("input[name='whatsapp_primary']").keyup(function(){
        preview("whatsapp");
	});
	$("input[name='whatsapp_secondary']").keyup(function(){
        preview("whatsapp");
	});
	
	$("input[name='tumblr_primary']").keyup(function(){
        preview("tumblr");
	});
	$("input[name='tumblr_secondary']").keyup(function(){
        preview("tumblr");
	});
	
	$("input[name='gplus_primary']").keyup(function(){
        preview("gplus");
	});
	$("input[name='gplus_secondary']").keyup(function(){
        preview("gplus");
	});
	
	$("input[name='skype_primary']").keyup(function(){
        preview("skype");
	});
	$("input[name='skype_secondary']").keyup(function(){
        preview("skype");
	});
	
	$("input[name='viber_primary']").keyup(function(){
        preview("viber");
	});
	$("input[name='viber_secondary']").keyup(function(){
        preview("viber");
	});
	
	$("input[name='snapchat_primary']").keyup(function(){
        preview("snapchat");
	});
	$("input[name='snapchat_secondary']").keyup(function(){
        preview("snapchat");
	});
	
	$("input[name='reddit_primary']").keyup(function(){
        preview("reddit");
	});
	$("input[name='reddit_secondary']").keyup(function(){
        preview("reddit");
	});
	
	$("input[name='reddit_primary']").keyup(function(){
        preview("reddit");
	});
	$("input[name='reddit_secondary']").keyup(function(){
        preview("reddit");
	});

});
</script>



<script>
function allowDrop(ev) {
    ev.preventDefault();
	//Assigned borders to draggable elements while dragged
	document.getElementById("section-primary").style.border = "1px dashed #ccc";
	document.getElementById("section-secondary").style.border = "1px dashed #ccc";
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
	//Removed borders to draggable elements while dropped
	document.getElementById("section-primary").style.border = "1px dotted transparent";
	document.getElementById("section-secondary").style.border = "1px dotted transparent";
	
	//Swap Classes of primary and secondary accounts
	$(".account-merge-primary, .account-merge-secondary").toggleClass("account-merge-primary account-merge-secondary");
	
	//Disable inputs and uncheck radios of Secondary Account
	$(".account-merge-secondary :input[type='text']").prop("disabled", true);
    $(".account-merge-secondary :input[type='email']").prop("disabled", true);
    $(".account-merge-secondary :input[type='tel']").prop("disabled", true);
    $(".account-merge-secondary textarea").prop('disabled', true);
	$(".account-merge-secondary :input[type='radio']").prop("checked", false);
	
	//Enable inputs and Check radios of Primary Account
	$(".account-merge-primary :input[type='text']").prop("disabled", false);
    $(".account-merge-primary :input[type='email']").prop("disabled", false);
    $(".account-merge-primary :input[type='tel']").prop("disabled", false);
	$(".account-merge-primary textarea").prop('disabled', false);
	$(".account-merge-primary :input[type='radio']").prop("checked", true);
	
	//Keep Joining date Disabled
	$(".account-merge :input[name='doj_primary']").prop("disabled", true);
	$(".account-merge :input[name='doj_secondary']").prop("disabled", true);
	
	//Update Preview on Primary Bar switch
	preview_pic();
	preview("name");
	preview("doj");
	preview("dob");
	preview("email");
	preview("mobile");
	preview("role");
	preview("company");
	preview_select("country");
	preview_select("state");
	preview_select("city");
	preview("pin");
	preview("address");
	preview("facebook");
	preview("twitter");
	preview("instagram");
	preview("linkedin");
	preview("whatsapp");
	preview("tumblr");
	preview("gplus");
	preview("skype");
	preview("viber");
	preview("snapchat");
	preview("reddit");
	preview("tags");
}
</script>