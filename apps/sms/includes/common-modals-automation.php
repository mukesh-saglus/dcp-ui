<!-- Automation Contact pop_up -->
<div class="modal automation-right-modal fade" id="ContactModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="p15 p-md30 smart-form modal-scrollbar">
			<input type="hidden" name="stencilid" id="stencilid" value="">
				<div class="f-md-18 f-16 w500">If any contact</div>
				<div class="row f-14 bs-h40">
					<div class="col-12 col-md-12 col-lg-10 d-gblue-clr">
						<div class="row">
							<div class="col-12 col-md-4 mt15 mt-md30">
								<label>Choose The Option</label>
								<select class="selectpicker" title="Added">
									<option>Added</option>
									<option>Removed</option>
								</select>
							</div>
							<div class="col-12 col-md-4 mt15 mt-md30">
								<label>Choose The Duration</label>
								<div class="input-group calendar-input-group">
									<input type="text" class="caleran-automaton form-control f-14 field-h40" id="target-cal" readonly="" data-plugin-options="{&quot;rangeOrientation&quot;:true,&quot;showButtons&quot;:true}" placeholder="Choose Date">
									<span class="input-group-btn caleran-show">
										<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
									</span>
								</div>
							</div>
							<div class="col-12 col-md-4 mt15 mt-md65">From/In</div>
						</div>
					</div>
					<div class="col-12">
					<div class="row">
					<div class="col-12 col-md-12 col-lg-10 d-gblue-clr">
						<div class="row">
							<div class="col-12 col-lg-4 col-md-4 mt15 mt-md30">								
									<label>Choose The Option</label>
									<select class="selectpicker" title="All Contacts">
									    <option>All Contacts</option>
										<option>List</option>
										
									</select>
							
							</div>
							<div class="col-12 col-lg-4 col-md-4 mt15 mt-md30">
								<label>Choose The Option</label>
								<div class="d-flex align-items-center w-100">
									<select class="selectpicker" title="List name">
									<option>List name One</option>
									<option>List name Two</option>
									<option>List name Three</option>
									<option>List name Four</option>
								</select>
									<a href="#" class="d-inline-block p-blue-clr segment-add ml15 f-16 t-decoration-none"><i class="icon-add-three"></i></a>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-4 mt15 mt-md30">
								<label class="d-gblue-clr">Enter Your List Name</label>
								<div class="d-flex align-items-center w-100">
									<input type="text" class="form-control field-h40" placeholder="Type Here">
									<a href="#" class="vi-red-clr ml15 f-12 t-decoration-none"><i class="icon-cross"></i></a>
									<a href="#" class="s-green-clr ml15 f-14 t-decoration-none"><i class="icon-tick"></i></a>
								</div>
							</div>
						</div>
					</div>
					</div>
					</div>
					
					
					<div class="col-12 mt15 mt-md40 f-md-18 f-16 w500">Satisfy the condition</div>
					<div class="col-12 col-md-12 col-lg-10 d-gblue-clr">
						<div class="row">
							<div class="col-12 col-md-4 mt15 mt-md30">
								<label>Choose The Option</label>
								<select class="selectpicker" title="Lead Score">
									<option>Name</option>
									<option>Email address</option>
									<option>Country</option>
									<option>State</option>
									<option>Zip</option>
									<option>Company name</option>
									<option>Role</option>
									<option>Mobile number</option>
									<option>Tag</option>
									<option>Lead score</option>
								</select>
							</div>
							<div class="col-12 col-md-4 mt15 mt-md30">
								<label>Choose The Option</label>
								<select class="selectpicker" title="Is equal to">
									<option>Is equal to</option>
									<option>Is not equal to</option>
									<option>Does contains</option>
								</select>
							</div>
							<div class="col-12 col-md-4 mt15 mt-md30">
								<label>Enter The Value</label>
								<input type="text" name="" class="form-control field-h40" placeholder="value" value="10">
							</div>
						</div>
					</div>

					<div class="col-12 mt-md40 mt15">
							<div class="smart-checkbox-btn checkbox-strong-blue">
							<input id="checkbox1" type="checkbox">
							<label for="checkbox1" class="d-inline"> Include the previously added contact also.</label>
							</div>
						<div class="f-md-18 f-16 w500 mt-md40 mt15">If any contact is added</div>
					</div>
					<div class="col-12 col-md-12 col-lg-10 d-gblue-clr">
						<div class="row">
							<div class="col-12 col-md-4 mt15 mt-md30">
								<label>Choose The Duration</label>
								<div class="input-group calendar-input-group">
									<input type="text" name="dob" readonly="" class="form-control f-14 field-h40" id="dob-primary-target" value="12/10/2016" placeholder="Date of Birth">
									<span class="input-group-btn" id="dob-primary">
									<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="p15 p-md30 custom-modal-foooter text-right border-top-0">
				<a href="javascript:void(0)" class="base-btn default-btn f-14 mr5" data-dismiss="modal">Cancel</a>
				<a href="#" class="base-btn blue-btn f-14">Save</a>
			</div>	
		</div>
	</div>
</div>

<!-- Automation Send Option (Design Selection) pop_up -->
<div class="modal automation-right-modal fade" id="DesignSelectionModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content" id="designmodal-scroll">
			<div class="crosspos text-right"><a href="#" class="crossicon" data-dismiss="modal"><span>Close this pop-up</span><i class="icon-cross"></i></a></div>
			<div class="p15 p-md30 smart-form">
				<div class="w500 f-md-18 f-16 mt10 mb15 mb-md25">Send on email “Email Subject” </div>
				<!------- Step Wizard Div Start----------->
				<div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md30">
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr10 mb5">
					<div class="circle-num"><span>1</span></div>
					<div class="title align-self-center">Design Selection</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="d-flex justify-content-start flex-wrap mr10 mb5">
					<div class="circle-num"><span> 2</span></div>
					<div class="title align-self-center">Editor</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="d-flex justify-content-start flex-wrap mr10 mb5">
					<div class="circle-num"><span>3</span></div>
					<div class="title align-self-center">Contact</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="d-flex justify-content-start flex-wrap mr10 mb5">
					<div class="circle-num"><span>4</span></div>
					<div class="title align-self-center">Sending Option</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="d-flex justify-content-start flex-wrap mr10 mb5">
					<div class="circle-num"><span>5</span></div>
					<div class="title align-self-center">Preview & Publish</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				</div>
				<!------- Step Wizard Div End----------->	
				
				<!---------Design Section Start---------->
				<div class="row">
					<div class="col-md-4 col-lg-3 col-xl-2 pr-lg8">
						<div class="nav flex-column nav-pills ui-vertical-tab f-16 w400 design-side-tab">
							<a class="nav-link active" href="#FromGallery" role="tab" data-toggle="tab"><i class="icon-gallery"></i>From MyDrive</a>
							<a class="nav-link" href="#YourCreation" role="tab" data-toggle="tab"><i class="icon-your-creation"></i>Your Creation</a>
							<a class="nav-link" href="#CreateYourOwn" role="tab" data-toggle="tab"><i class="icon-create-your-own"></i>Create Your Own </a>
					
						</div>
					</div>
					<div class="col-md-8 col-lg-9 col-xl-10 tab-content">		
						<!----- Tab Section Start---------->
						<div class="tab-pane fade show active" role="tabpanel" id="FromGallery">
							<!----- Filteration Div Start---------->
							<div class="col-12 p0 sticky-design-filter mb15 mb-md30">
							<div class="row bs-h40">
								<div class="col-12 col-md-6 col-lg-3 mt15 mt-md0">
									<select class="selectpicker f-16" title="All Industry">
										<option>All Industry 1</option>
										<option>All Industry 2</option>
										<option>All Industry 3</option>
									</select>
								</div>
						
								<div class="col-12 col-md-6 col-lg-4 ml-auto">
									<div class="smart-search-field mt15 mt-md0">
										<div class="input-group">
											<input class="form-control" placeholder="Search" type="text">
											<div class="input-group-append">
												<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
											</div>
										</div>
									</div>
								</div>
							</div>
							</div>
							<!----- Filteration Div End---------->
					
							<!----- Template List section------->				
								<div class="row">
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid recent-active-template p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <!----- Pagination Div Start----->
								   <div class="col-12 d-flex justify-content-between flex-wrap f-14 mt15 mt-md30">
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
											<li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i> </a>
											</li>
											<li><a href="#">1</a>
											</li>
											<li><a href="#">2</a>
											</li>
											<li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </a>
											</li>
											<li><a href="#" class="active">6</a>
											</li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> </a>
											</li>
										 </ul>
									  </div>
								   </div>
								   <!----- Pagination Div End----->
								</div>

							<!----- Template List section end------->
							
						</div>
						<div class="tab-pane fade" role="tabpanel" id="YourCreation">
							<!----- Filteration Div Start---------->
							<div class="col-12 p0 sticky-design-filter mb15 mb-md30">
							<div class="row bs-h40">
								<div class="col-12 col-md-6 col-lg-3 mt15 mt-md0">
									<select class="selectpicker f-16" title="All Industry">
										<option>All Industry 1</option>
										<option>All Industry 2</option>
										<option>All Industry 3</option>
									</select>
								</div>
						
								<div class="col-12 col-md-6 col-lg-4 ml-auto">
									<div class="smart-search-field mt15 mt-md0">
										<div class="input-group">
											<input class="form-control" placeholder="Search" type="text">
											<div class="input-group-append">
												<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
											</div>
										</div>
									</div>
								</div>
							</div>
							</div>
							<!----- Filteration Div End---------->
							
							<!----- Template List section------->
									<div class="row">
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid recent-active-template p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div><div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div><div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div><div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div><div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div><div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div><div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div><div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div><div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div><div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div><div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
							 <!----- Pagination Div Start----->
								   <div class="col-12 d-flex justify-content-between flex-wrap f-14 mt15 mt-md30">
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
											<li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i> </a>
											</li>
											<li><a href="#">1</a>
											</li>
											<li><a href="#">2</a>
											</li>
											<li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </a>
											</li>
											<li><a href="#" class="active">6</a>
											</li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> </a>
											</li>
										 </ul>
									  </div>
								   </div>
								   <!----- Pagination Div End--->
					
							</div>
							
							<!----- Template List section end------->
						</div>
						<div class="tab-pane fade mt15 mt-md0" role="tabpanel" id="CreateYourOwn">
							<div class="l-gblue-border p15 p-md50">
								<img src="images/create-your-own-img.png" class="img-fluid d-block mx-auto">
								<div class="text-center mt15 mt-md40">
									<a href="#" class="base-btn blue-btn f-16">Start From Scratch</a>
								</div>
							</div>
						</div>
						<!----- Tab Section End---------->
					</div>
				</div>
				<!---------Design Section End---------->
			</div>
		</div>
	</div>
</div>

<!-- Automation Send Option (Sending Option) pop_up -->
<div class="modal automation-right-modal fade" id="SendingOptionModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">	
			<div class="crosspos text-right"><a href="#" class="crossicon" data-dismiss="modal"><span>Close this pop-up</span><i class="icon-cross"></i></a></div>
			<div class="p15 p-md30 smart-form">
				<div class="row align-items-center mb15 mb-md25 mt15">
					<div class="col-12 col-md-12 col-lg-5 w500 f-md-18 f-16">Send on email “Email Subject”</div>
					<div class="col-12 col-md-12 col-lg-7 text-lg-right text-center mt15 mt-lg0">
						<a href="#" class="base-btn default-btn btn-xs-block mr5 mb15 mb-md0">Save as Draft</a>
						<a href="#" class="base-btn default-btn btn-xs-block mr5 mb15 mb-md0">Back</a>
						<a href="#" class="base-btn blue-btn btn-xs-block mt10 mt-md0">Next</a>
					</div>
				</div>
				<!------- Step Wizard Div Start----------->
				<div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md30">
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span><i class="fa fa-check"></i></span></div>
					<div class="title align-self-center">Design Selection</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span><i class="fa fa-check"></i></span></div>
					<div class="title align-self-center">Editor</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span><i class="fa fa-check"></i></span></div>
					<div class="title align-self-center">Contact</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span>4</span></div>
					<div class="title align-self-center">Sending Option</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span>5</span></div>
					<div class="title align-self-center">Preview & Publish</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				</div>
				<!------- Step Wizard Div End----------->	
				<!---------- Subject Section --------->
				<div class="row">
					<div class="col-12 f-18 w400">Sending Settings</div>
					<div class="col-12 segment-accordion mt-md20 mt15">
						<div id="accordion" class="accordion">
							<div class="card mb-0 f-16">
								<div class="card-header collapsed" data-toggle="collapse" href="#collapseurl">
									<a class="card-title lato-font">&nbsp; Subject</a>
								</div>
								 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define required details for this broadcast." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a>
								<div id="collapseurl" class="collapse smart-form f-14">
									<div class="card-body">
									<div class="form-group mb0">
									<label class="d-gblue-clr">Subject  Name <span class="vi-red-clr">*</span></label>
									<div class="input-group">
										<input type="text" class="emojiable-option form-control radiusrb0" placeholder="Subject">
										<div class="input-group-append">
									<div class="personalization-drop"><select class="selectpicker" title="Personalization">
												<option>Name</option>
												<option>Email</option>
												<option>Phone</option>
												<option>City</option>
												<option>Address</option>
											</select></div>
										</div>
									</div>	
										<p class="f-12 gblue-clr mt5">*This is the email subject, which would be visible to the subsciber</p>
									</div>
									
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!------- End Subject Section -------->
				<!---------- Sending Options Section --------->
				<div class="row">
					<div class="col-12 segment-accordion mt-md20 mt15">
						<div id="accordion" class="accordion">
							<div class="card mb-0 f-16">
								<div class="card-header collapsed" data-toggle="collapse" href="#collapsePublish">
									<a class="card-title lato-font">&nbsp; Sending Options</a>
								</div>
								 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Start this broadcast right now or define date & time for later." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a>
								 
								<div id="collapsePublish" class="collapse set-time-drop f-14">
								<div class="card-body">
									<div class="row">
										<div class="col-12 col-md-6">
								<div class="form-group mb-md30">
									<label class="d-gblue-clr">From Name & Email <span class="vi-red-clr">*</span></label>
									<select class="selectpicker" title="Select Email">
										<option selected>manisha (manisha@saglus.com)</option>
										<option>naved (naved@saglus.com)</option>
										<option>xyz (xyz@saglus.com)</option>
									</select>
									<p class="f-12 gblue-clr mt10">*This is the Sender name. It will be shown at the end of the email</p>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group mb-md0">
									<label class="d-gblue-clr">Reply Name & Email <span class="vi-red-clr">*</span></label>
									<select class="selectpicker" title="Select Email">
										<option selected>Naved (naved@saglus.com)</option>
										<option>manisha (manisha@saglus.com)</option>
										<option>xyz (xyz@saglus.com)</option>
									</select>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group mb0 smtp-dropdown">
									<label class="d-gblue-clr">SMTP option <span class="vi-red-clr">*</span></label>
									 <div class="dropdown smtp-setting-dropdown w-100">
										<button class="btn base-btn default-btn dropdown-toggle btn-block btn-h50 text-left" type="button" id="dropdownMenu1" data-toggle="dropdown"
										   aria-haspopup="true" aria-expanded="false"> <span class="caret-right pull-left text-truncate pr15">SMTP option</span> </button>
										<div class="dropdown-menu w-100 h-auto f-14"  aria-labelledby="dropdownMenu1">
										   <!--- Searchbox Field ------->
										   <div class="bs-searchbox-field">
											  <div class="input-group">
												 <input type="text" class="form-control" placeholder="Search">
												 <div class="input-group-append">
													<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
												 </div>
											  </div>
										   </div>
										   <!--- Scrollbar Div start ------->
										   <div class="selectplayer-drop f-14" data-mcs-theme="inset-3">
											  <!--<li class="smtp-item">Default SMTP</li>-->
											  <li class="dropdown-item">
												 <div class="smart-checkbox-btn checkbox-strong-blue text-truncate player-value">
													<input id="DefaultSMTP" type="checkbox">
													<label for="DefaultSMTP" title="Default SMTP">Default SMTP</label>
												 </div>
											  </li>
											  <li class="dropdown-item">
												 <div class="smart-checkbox-btn checkbox-strong-blue text-truncate player-value">
													<input id="DotcomPalSMTP" type="checkbox">
													<label for="DotcomPalSMTP" title="DotcomPal SMTP">DotcomPal SMTP</label>
												 </div>
											  </li>
											  <li class="dropdown-item">
												 <div class="smart-checkbox-btn checkbox-strong-blue text-truncate player-value">
													<input id="SMTPRotation" type="checkbox">
													<label for="SMTPRotation" title="SMTP Rotation">SMTP Rotation</label>
												 </div>
											  </li>
											  <li class="dropdown-divider"></li>
											  <!--<li class="smtp-item">SMTP 1</li>-->
											  <li class="dropdown-item">
												 <div class="smart-checkbox-btn checkbox-strong-blue text-truncate player-value player-delete-width">
													<input id="SMTP1" type="checkbox">
													<label for="SMTP1" title="SMTP 1">SMTP 1</label>
												 </div>
											  </li>
											  <li class="dropdown-item">
												 <div class="smart-checkbox-btn checkbox-strong-blue text-truncate player-value player-delete-width">
													<input id="SMTP2" type="checkbox">
													<label for="SMTP2" title="SMTP 2">SMTP 2</label>
												 </div>
											  </li>
											  <li class="dropdown-item">
												 <div class="smart-checkbox-btn checkbox-strong-blue text-truncate player-value player-delete-width">
													<input id="SMTP3" type="checkbox">
													<label for="SMTP3" title="SMTP 3">SMTP 3</label>
												 </div>
											  </li>
											  <li class="dropdown-item">
												 <div class="smart-checkbox-btn checkbox-strong-blue text-truncate player-value player-delete-width">
													<input id="SMTP4" type="checkbox">
													<label for="SMTP4" title="SMTP 4">SMTP 4</label>
												 </div>
											  </li>
											  
										   </div>
										</div>
									 </div>
								</div>
							</div>
									</div>
									
									
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 text-right mt15 mt-md30">
						<a href="#" class="base-btn default-btn f-14 mr5 btn-xs-block">Save as Draft</a>
						<a href="javascript:void(0)" class="base-btn default-btn f-14 mr5 btn-xs-block mt10 mt-md0">Back</a>
						<a href="#" class="base-btn blue-btn f-14 btn-xs-block mt10 mt-md0">Next</a>
					</div>
				</div>
				<!------ Sending Options Section ------>
			</div>
		</div>
	</div>
</div>


<!-- Automation Send Option (Contact) pop_up -->
<div class="modal automation-right-modal fade" id="AutomationContactModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">	
			<div class="crosspos text-right"><a href="#" class="crossicon" data-dismiss="modal"><span>Close this pop-up</span><i class="icon-cross"></i></a></div>
			<div class="p15 p-md30 smart-form">
				<div class="row align-items-center mb15 mb-md25 mt15">
					<div class="col-12 col-md-12 col-lg-5 w500 f-md-18 f-16">Send on email “Email Subject”</div>
					<div class="col-12 col-md-12 col-lg-7 text-lg-right text-center mt15 mt-lg0">
						<a href="#" class="base-btn default-btn f-16 btn-xs-block mr5 mb15 mb-md0">Save as Draft</a>
						<a href="#" class="base-btn default-btn f-16 btn-xs-block mr5 mb15 mb-md0">Back</a>
						<a href="#" class="base-btn blue-btn btn-xs-block mt10 mt-md0">Next </a>
					</div>
				</div>
				<!------- Step Wizard Div Start----------->
				<div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md30">
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span><i class="fa fa-check"></i></span></div>
					<div class="title align-self-center">Design Selection</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span><i class="fa fa-check"></i></span></div>
					<div class="title align-self-center">Editor</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span>3</span></div>
					<div class="title align-self-center">Contact</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span>4</span></div>
					<div class="title align-self-center">Sending Option</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div> 
				  <div class="d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span>4</span></div>
					<div class="title align-self-center">Preview & Publish</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				</div>
				<!------- Step Wizard Div End----------->
				<!------- Radio Button Div ----------->
				<div class="d-flex justify-content-start flex-wrap ml6 mt-md25 mb15 mb-md30 align-items-center">
					<div class="smart-radio-btn radio-strong-blue mr15 mr-md60">
					<input name="mailing" id="mailing1" value="option1" class="mail-group-switch" type="radio" checked="">
					<label for="mailing1" class="mb-lg0"> Choose Contacts Manually </label>
					</div>
					<div class="smart-radio-btn radio-strong-blue">
					<input name="mailing" id="mailing" value="option1" class="mail-group-switch" type="radio">
					<label for="mailing" class="mb-lg0"> Quick Mailing Group </label>
					</div>
					<span class="ml-auto base-btn gradient-btn w500">Total Contacts: 2000</span>
				</div>
				<!------- Radio Button Div End ----------->
				<!---------Choose Contacts Manually Start---------->
				<div class="row contact-manually-group">
					<div class="mCustomScrollbar contact-scrollbar w-100" data-mcs-theme="inset-3">
						<div class="col-12">
							<div class="row">
								<div class="col-12 col-md-12 col-lg-6 mb15 mb-md30">
									<div class="subscribers-section radius3">
										<div class="title-header f-16 lato-font w400 p15 px-md20 d-flex align-items-center">
											<i class="icon-add-third f-20 s-green-clr white-bg d-inline-block rounded-circle mr12"></i>Include List
										</div>
										<div class="d-flex justify-content-between flex-wrap bs-h40 pt15 pt-md20 px-md30 px15 row">
											<div class="col-md-7">
												<select class="selectpicker f-14" title="Highest Click Rate (10)">
													<option>All List (50)</option>
													<option>Sortby Highest Open Rate</option>
													<option>Sortby Highest Click Rate</option>
													<option>Sortby Frequently Used</option>
												</select>
											</div>
											<div class="col-md-5 smart-search-field mt15 mt-md0">
												<div class="input-group flex-lg-nowrap flex-wrap">
													<input class="form-control" placeholder="Search" type="text">
													<div class="input-group-append">
														<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
													</div>
												</div>
											</div>
										</div>
										<div class="mCustomScrollbar h392 f-14" data-mcs-theme="inset-3">
											<div class="p15 py-md20 px-md30 d-gblue-clr">
												<ul class="mailing-group-list">
													<li>
														<div class="row w500 vd-gblue-clr">
															<div class="col-8 col-md-9 col-lg-8 ">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox8" name="my_checkbox" type="checkbox">
																	<label for="checkbox8" class="mb0 pl-md15 d-inline"> Lists Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4">Contacts</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox9" type="checkbox">
																	<label for="checkbox9" class="mb0 pl-md15 d-inline"> Lists Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox10" type="checkbox">
																	<label for="checkbox10" class="mb0 pl-md15 d-inline"> Lists Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox11" type="checkbox">
																	<label for="checkbox11" class="mb0 pl-md15 d-inline"> Lists Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox12" type="checkbox">
																	<label for="checkbox12" class="mb0 pl-md15 d-inline"> Lists Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox13" type="checkbox">
																	<label for="checkbox13" class="mb0 pl-md15 d-inline"> Lists Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox14" type="checkbox">
																	<label for="checkbox14" class="mb0 pl-md15 d-inline"> Lists Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-12 col-lg-6 mb15 mb-md30">
									<div class="subscribers-section radius3">
										<div class="title-header f-16 lato-font w400 p15 px-md20 d-flex align-items-center">
											<i class="icon-add-third f-20 s-green-clr white-bg d-inline-block rounded-circle mr12"></i>Include Tags
										</div>
										<div class="d-flex justify-content-between flex-wrap bs-h40 pt15 pt-md20 px-md30 px15 row">
											<div class="col-md-7">
												<select class="selectpicker f-14" title="Highest Click Rate (10)">
													<option>All Tags (50)</option>
													<option>Sortby Highest Open Rate</option>
													<option>Sortby Highest Click Rate</option>
													<option>Sortby Frequently Used</option>
												</select>
											</div>
											<div class="col-md-5 pl-md15 smart-search-field mt15 mt-md0">
												<div class="input-group flex-lg-nowrap flex-wrap">
													<input class="form-control" placeholder="Search" type="text">
													<div class="input-group-append">
														<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
													</div>
												</div>
											</div>
										</div>
										<div class="mCustomScrollbar h392 f-14" data-mcs-theme="inset-3">
											<div class="p15 py-md20 px-md30 d-gblue-clr">
												<ul class="mailing-group-list">
													<li>
														<div class="smart-checkbox-btn checkbox-strong-blue">
															<input id="checkbox15" name="my_checkbox" type="checkbox">
															<label for="checkbox15" class="mb0 pl-md15 d-inline w500 vd-gblue-clr"> Tags Name</label>
														</div>
													</li>
													<li>
														<div class="smart-checkbox-btn checkbox-strong-blue">
															<input id="checkbox16" name="my_checkbox" type="checkbox">
															<label for="checkbox16" class="mb0 pl-md15 d-inline"> Tags Name 1</label>
														</div>
													</li>
													<li>
														<div class="smart-checkbox-btn checkbox-strong-blue">
															<input id="checkbox17" name="my_checkbox" type="checkbox">
															<label for="checkbox17" class="mb0 pl-md15 d-inline"> Tags Name 2</label>
														</div>
													</li>
													<li>
														<div class="smart-checkbox-btn checkbox-strong-blue">
															<input id="checkbox18" name="my_checkbox" type="checkbox">
															<label for="checkbox18" class="mb0 pl-md15 d-inline"> Tags Name 3</label>
														</div>
													</li>
													<li>
														<div class="smart-checkbox-btn checkbox-strong-blue">
															<input id="checkbox19" name="my_checkbox" type="checkbox">
															<label for="checkbox19" class="mb0 pl-md15 d-inline"> Tags Name 4</label>
														</div>
													</li>
													<li>
														<div class="smart-checkbox-btn checkbox-strong-blue">
															<input id="checkbox20" name="my_checkbox" type="checkbox">
															<label for="checkbox20" class="mb0 pl-md15 d-inline"> Tags Name 5</label>
														</div>
													</li>
													<li>
														<div class="smart-checkbox-btn checkbox-strong-blue">
															<input id="checkbox21" name="my_checkbox" type="checkbox">
															<label for="checkbox21" class="mb0 pl-md15 d-inline"> Tags Name 6</label>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-12 col-lg-6 mb15 mb-md30">
									<div class="subscribers-section radius3">
										<div class="title-header f-16 lato-font w400 p15 px-md20 d-flex align-items-center">
											<i class="icon-add-third f-20 s-green-clr white-bg d-inline-block rounded-circle mr12"></i>Suppression List
										</div>
										<div class="d-flex justify-content-between flex-wrap bs-h40 pt15 pt-md20 px-md30 px15 row">
											<div class="col-12 pl-md15 smart-search-field mt15 mt-md0">
												<div class="input-group flex-lg-nowrap flex-wrap">
													<input class="form-control" placeholder="Search" type="text">
													<div class="input-group-append">
														<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
													</div>
												</div>
											</div>
										</div>
										<div class="mCustomScrollbar h392 f-14" data-mcs-theme="inset-3">
											<div class="p15 py-md20 px-md30 d-gblue-clr">
												<ul class="mailing-group-list">
													<li>
														<div class="row w500 vd-gblue-clr">
															<div class="col-8 col-md-9 col-lg-8 ">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox22" name="my_checkbox" type="checkbox">
																	<label for="checkbox22" class="mb0 pl-md15 d-inline"> Suppression Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4">Contacts</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox23" type="checkbox">
																	<label for="checkbox23" class="mb0 pl-md15 d-inline"> Suppression List Name 1</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox24" type="checkbox">
																	<label for="checkbox24" class="mb0 pl-md15 d-inline"> Suppression List Name 2</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox25" type="checkbox">
																	<label for="checkbox25" class="mb0 pl-md15 d-inline"> Suppression List Name 3</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox26" type="checkbox">
																	<label for="checkbox26" class="mb0 pl-md15 d-inline"> Suppression List Name 4</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox27" type="checkbox">
																	<label for="checkbox27" class="mb0 pl-md15 d-inline"> Suppression List Name 5</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox28" type="checkbox">
																	<label for="checkbox28" class="mb0 pl-md15 d-inline"> Suppression List Name 6</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-12 col-lg-6 mb15 mb-md30">
									<div class="subscribers-section radius3">
										<div class="title-header f-16 lato-font w400 p15 px-md20 d-flex align-items-center">
											<i class="icon-exclude f-20 vi-red-clr white-bg d-inline-block rounded-circle mr12"></i>Exclude List
										</div>
										<div class="d-flex justify-content-between flex-wrap bs-h40 pt15 pt-md20 px-md30 px15 row">
											<div class="col-md-7">
												<select class="selectpicker f-14" title="Highest Click Rate (10)">
													<option>All List (50)</option>
													<option>Sortby Highest Open Rate</option>
													<option>Sortby Highest Click Rate</option>
													<option>Sortby Frequently Used</option>
												</select>
											</div>
											<div class="col-md-5 pl-md15 smart-search-field mt15 mt-md0">
												<div class="input-group flex-lg-nowrap flex-wrap">
													<input class="form-control" placeholder="Search" type="text">
													<div class="input-group-append">
														<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
													</div>
												</div>
											</div>
										</div>
										<div class="mCustomScrollbar h392 f-14" data-mcs-theme="inset-3">
											<div class="p15 py-md20 px-md30 d-gblue-clr">
												<ul class="mailing-group-list">
													<li>
														<div class="row w500 vd-gblue-clr">
															<div class="col-8 col-md-9 col-lg-8 ">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox29" name="my_checkbox" type="checkbox">
																	<label for="checkbox29" class="mb0 pl-md15 d-inline"> Lists Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4">Contacts</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox30" type="checkbox">
																	<label for="checkbox30" class="mb0 pl-md15 d-inline"> Lists Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox31" type="checkbox">
																	<label for="checkbox31" class="mb0 pl-md15 d-inline"> Lists Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox32" type="checkbox">
																	<label for="checkbox32" class="mb0 pl-md15 d-inline"> Lists Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox33" type="checkbox">
																	<label for="checkbox33" class="mb0 pl-md15 d-inline"> Lists Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox34" type="checkbox">
																	<label for="checkbox34" class="mb0 pl-md15 d-inline"> Lists Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox35" type="checkbox">
																	<label for="checkbox35" class="mb0 pl-md15 d-inline"> Lists Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-12 col-lg-6">
									<div class="subscribers-section radius3">
										<div class="title-header f-16 lato-font w400 p15 px-md20 d-flex align-items-center">
											<i class="icon-exclude f-20 vi-red-clr white-bg d-inline-block rounded-circle mr12"></i>Exclude Tags
										</div>
										<div class="d-flex justify-content-between flex-wrap bs-h40 pt15 pt-md20 px-md30 px15 row">
											<div class="col-md-7">
												<select class="selectpicker f-14" title="Highest Click Rate (10)">
													<option>All Tags (50)</option>
													<option>Sortby Highest Open Rate</option>
													<option>Sortby Highest Click Rate</option>
													<option>Sortby Frequently Used</option>
												</select>
											</div>
											<div class="col-md-5 pl-md15 smart-search-field mt15 mt-md0">
												<div class="input-group flex-lg-nowrap flex-wrap">
													<input class="form-control" placeholder="Search" type="text">
													<div class="input-group-append">
														<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
													</div>
												</div>
											</div>
										</div>
										<div class="mCustomScrollbar h392 f-14" data-mcs-theme="inset-3">
											<div class="p15 py-md20 px-md30 d-gblue-clr">
												<ul class="mailing-group-list">
													<li>
														<div class="smart-checkbox-btn checkbox-strong-blue">
															<input id="checkbox36" name="my_checkbox" type="checkbox">
															<label for="checkbox36" class="mb0 pl-md15 d-inline w500 vd-gblue-clr"> Tags Name</label>
														</div>
													</li>
													<li>
														<div class="smart-checkbox-btn checkbox-strong-blue">
															<input id="checkbox37" name="my_checkbox" type="checkbox">
															<label for="checkbox37" class="mb0 pl-md15 d-inline"> Tags Name 1</label>
														</div>
													</li>
													<li>
														<div class="smart-checkbox-btn checkbox-strong-blue">
															<input id="checkbox38" name="my_checkbox" type="checkbox">
															<label for="checkbox38" class="mb0 pl-md15 d-inline"> Tags Name 2</label>
														</div>
													</li>
													<li>
														<div class="smart-checkbox-btn checkbox-strong-blue">
															<input id="checkbox39" name="my_checkbox" type="checkbox">
															<label for="checkbox39" class="mb0 pl-md15 d-inline"> Tags Name 3</label>
														</div>
													</li>
													<li>
														<div class="smart-checkbox-btn checkbox-strong-blue">
															<input id="checkbox40" name="my_checkbox" type="checkbox">
															<label for="checkbox40" class="mb0 pl-md15 d-inline"> Tags Name 4</label>
														</div>
													</li>
													<li>
														<div class="smart-checkbox-btn checkbox-strong-blue">
															<input id="checkbox41" name="my_checkbox" type="checkbox">
															<label for="checkbox41" class="mb0 pl-md15 d-inline"> Tags Name 5</label>
														</div>
													</li>
													<li>
														<div class="smart-checkbox-btn checkbox-strong-blue">
															<input id="checkbox42" name="my_checkbox" type="checkbox">
															<label for="checkbox42" class="mb0 pl-md15 d-inline"> Tags Name 6</label>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!---------Choose Contacts Manually End---------->
				<!---------Quick Mailing Group Start---------->
				<div class="row quick-mailing-group">
					<div class="mCustomScrollbar contact-scrollbar w-100" data-mcs-theme="inset-3">
						<div class="col-12">
							<div class="row">
								<div class="col-12 col-md-12 col-lg-6 mb15 mb-lg0">
									<div class="subscribers-section radius3">

										<div class="title-header f-16 lato-font w400 p15 px-md20 d-flex align-items-center">
											<i class="icon-add-third f-20 s-green-clr white-bg d-inline-block rounded-circle mr12"></i>Include Quick Mailing Group
										</div>

										<div class="d-flex justify-content-between flex-wrap bs-h40 pt15 pt-md20 px-md30 px15 row">
											<div class="col-md-7">
												<select class="selectpicker f-14" title="Highest Click Rate (10)">
													<option>All Quick Mailing Group (50)</option>
													<option>Sortby Highest Open Rate</option>
													<option>Sortby Highest Click Rate</option>
													<option>Sortby Frequently Used</option>
												</select>
											</div>
											<div class="col-md-5 pl-md15 smart-search-field mt15 mt-md0">
												<div class="input-group">
													<input class="form-control" placeholder="Search" type="text">
													<div class="input-group-append">
														<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
													</div>
												</div>
											</div>
										</div>

										<div class="mCustomScrollbar h392 f-14" data-mcs-theme="inset-3">
											<div class="p15 py-md20 px-md30 d-gblue-clr">
												<ul class="mailing-group-list">
													<li>
														<div class="row w500 vd-gblue-clr">
															<div class="col-8 col-md-9 col-lg-8 ">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox1" name="my_checkbox" type="checkbox">
																	<label for="checkbox1" class="mb0 pl-md15 d-inline"> Quick Mailing Group Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4">Contacts</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox2" type="checkbox">
																	<label for="checkbox2" class="mb0 pl-md15 d-inline"> Quick Mailing Group 1</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox3" type="checkbox">
																	<label for="checkbox3" class="mb0 pl-md15 d-inline"> Quick Mailing Group 2</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox4" type="checkbox">
																	<label for="checkbox4" class="mb0 pl-md15 d-inline"> Quick Mailing Group 3</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox5" type="checkbox">
																	<label for="checkbox5" class="mb0 pl-md15 d-inline"> Quick Mailing Group 4</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox6" type="checkbox">
																	<label for="checkbox6" class="mb0 pl-md15 d-inline"> Quick Mailing Group 5</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox7" type="checkbox">
																	<label for="checkbox7" class="mb0 pl-md15 d-inline"> Quick Mailing Group 6</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
												</ul>
											</div>
										</div>

									</div>
								</div>
								<div class="col-12 col-md-12 col-lg-6">
									<div class="subscribers-section radius3">

										<div class="title-header f-16 lato-font w400 p15 px-md20 d-flex align-items-center">
											<i class="icon-exclude f-20 vi-red-clr white-bg d-inline-block rounded-circle mr12"></i>Exclude Quick Mailing Group
										</div>

										<div class="d-flex justify-content-between flex-wrap bs-h40 pt15 pt-md20 px-md30 px15 row">
											<div class="col-md-7">
												<select class="selectpicker f-14" title="Highest Click Rate (10)">
													<option>All Quick Mailing Group (50)</option>
													<option>Sortby Highest Open Rate</option>
													<option>Sortby Highest Click Rate</option>
													<option>Sortby Frequently Used</option>
												</select>
											</div>
											<div class="col-md-5 pl-md15 smart-search-field mt15 mt-md0">
												<div class="input-group">
													<input class="form-control" placeholder="Search" type="text">
													<div class="input-group-append">
														<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
													</div>
												</div>
											</div>
										</div>

										<div class="mCustomScrollbar h392 f-14" data-mcs-theme="inset-3">
											<div class="p15 py-md20 px-md30 d-gblue-clr">
												<ul class="mailing-group-list">
													<li>
														<div class="row w500 vd-gblue-clr">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox11" name="my_checkbox" type="checkbox">
																	<label for="checkbox11" class="mb0 pl-md15 d-inline"> Quick Mailing Group Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4">Contacts</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox22" type="checkbox">
																	<label for="checkbox22" class="mb0 pl-md15 d-inline"> Quick Mailing Group 1</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox33" type="checkbox">
																	<label for="checkbox33" class="mb0 pl-md15 d-inline"> Quick Mailing Group 2</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox44" type="checkbox">
																	<label for="checkbox44" class="mb0 pl-md15 d-inline"> Quick Mailing Group 3</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox55" type="checkbox">
																	<label for="checkbox55" class="mb0 pl-md15 d-inline"> Quick Mailing Group 4</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox66" type="checkbox">
																	<label for="checkbox66" class="mb0 pl-md15 d-inline"> Quick Mailing Group 5</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox77" type="checkbox">
																	<label for="checkbox77" class="mb0 pl-md15 d-inline"> Quick Mailing Group 6</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
												</ul>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!---------Quick Mailing Group End---------->
				<div class="row mt15 mt-md30">
					<div class="text-right col-12">
						<a href="#" class="base-btn default-btn btn-xs-block mr5 mb15 mb-md0">Save as Draft</a>
						<a href="#" class="base-btn default-btn btn-xs-block mr5 mb15 mb-md0">Back</a>
						<a href="#" class="base-btn blue-btn btn-xs-block mt10 mt-md0">Next </a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Automation Preview & Publish pop_up -->
<div class="modal automation-right-modal fade" id="SummarySendModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="crosspos text-right"><a href="#" class="crossicon" data-dismiss="modal"><span>Close this pop-up</span><i class="icon-cross"></i></a></div>
			<div class="p15 p-md30 smart-form">
				<div class="row align-items-center mb15 mb-md25 mt15">
					<div class="col-12 col-md-12 col-lg-5 w500 f-md-18 f-16">Send on email “Email Subject” </div>
					<div class="col-12 col-md-12 col-lg-7 text-lg-right text-center mt15 mt-lg0">
						<a href="javascript:void(0)" class="base-btn default-btn btn-xs-block mr5">Save as draft</a>
						<a href="javascript:void(0)" class="base-btn default-btn btn-xs-block mr5 mt10 mt-md0">Back</a>
						<a href="#" class="base-btn blue-btn btn-xs-block mt10 mt-md0">publish</a>
					</div>
				</div>
				<!------- Step Wizard Div Start----------->
				<div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md30">
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span><i class="fa fa-check"></i></span></div>
					<div class="title align-self-center">Design Selection</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span><i class="fa fa-check"></i></span></div>
					<div class="title align-self-center">Editor</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				   <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span><i class="fa fa-check"></i></span></div>
					<div class="title align-self-center">Contact</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span><i class="fa fa-check"></i></span></div>
					<div class="title align-self-center">Sending Option</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span>5</span></div>
					<div class="title align-self-center">Preview & Publish</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				</div>
				<!------- Step Wizard Div End----------->	
				<!---------- Preview & Publish --------->
				<div class="row">
					<div class="col-12">
						<div class="l-gblue-border radius5 p15 p-md30">
							<div class="row">
								<div class="col-lg-3 col-md-4">
									<div class="design-selection-img">
										<img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid">
									</div>
								<div class="d-flex justify-content-between mt10">
									<div class="f-14 w400">Template Name
									<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
									</div>
									<div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#libraryModalpreview" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
										</a>
									</div>
								</div>
								</div>
								<div class="col-lg-9 col-md-8 mt15 mt-md0 p0">
									<div class="table-responsive automation-table">
									<table width="100%" border="0" cellspacing="0" cellpadding="10" class="f-14 w400">
									  <tbody>
										<tr>
										  <td width="16%">Subject</td>
										  <td width="6%">:</td>
										  <td class="break-word">Demo Template</td>
										</tr>
										<tr>
										  <td>From Name</td>
										  <td>:</td>
										  <td class="break-word">Jay Prakash Nagar</td>
										</tr>
										<tr>
										  <td>From Mail</td>
										  <td>:</td>
										  <td class="break-word">divyanshup@gmail.com</td>
										</tr>
										<tr>
										  <td>Reply Mail</td>
										  <td>:</td>
										  <td class="break-word">info@gmail.com</td>
										</tr>
										<tr>
										  <td>SMTP</td>
										  <td>:</td>
										  <td>Amazon</td>
										</tr>
										<tr>
										  <td>Contacts</td>
										  <td>:</td>
										  <td>40250</td>
										</tr>
										<tr>
										  <td>Scheduled On</td>
										  <td>:</td>
										  <td>27 April, 2018</td>
										</tr>
									  </tbody>
									</table>	
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 text-right mt15 mt-md30">
						<a href="javascript:void(0)" class="base-btn default-btn btn-xs-block mr5">Save as draft</a>
						<a href="javascript:void(0)" class="base-btn default-btn btn-xs-block mr5 mt10 mt-md0">Back</a>
						<a href="#" class="base-btn blue-btn btn-xs-block mt10 mt-md0">publish</a>
					</div>
				</div>
				<!---------- Preview & Publish End --------->
			</div>
		</div>
	</div>
</div>

<!-- Automation Add tag to the contacts pop_up -->
<div class="modal automation-right-modal fade" id="AddTagModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="h-100 p15 p-md30 smart-form">
				<div class="row h-100">
					<div class="col-12">
						<div class="w500 f-md-18 f-16 mb15 mb-md30">Add “Tag” tag to the contacts</div>
						<div class="col-lg-5 p0 tagsinput-h40 f-14">
							<label class="d-gblue-clr">Choose Tags</label>
							<input class="form-control" value="Tags" name="tags" id="primary" style="display: none;">
						</div>
					</div>
					<div class="col-12 text-right mt15 align-self-end">
						<a href="javascript:void(0)" class="base-btn default-btn mr5" data-dismiss="modal">Cancel</a>
						<a href="#" class="base-btn blue-btn">Save</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Automation lead score pop_up -->
<div class="modal automation-right-modal fade" id="LeadScoreModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="p15 p-md30 smart-form h-100">
				<div class="row h-100">
					<div class="col-12">
						<div class="w500 f-md-18 f-16">Add / remove lead score “Specific Contacts”</div>
						<div class="row bs-h40">
							<div class="col-12 col-md-5 mt15 mt-md30">
								<label class="d-gblue-clr">Lead Score</label>
								<select class="selectpicker" title="Add">
									<option>Add</option>
									<option>Subtract</option>
								</select>
							</div>
							<div class="col-12 col-md-5 offset-md-1 mt15 mt-md30">
								<label class="d-gblue-clr">Enter The Lead Score Value</label>
								<input type="text" class="form-control field-h40" value="10" placeholder="Enter The Lead Score Value">
							</div>
						</div>
					</div>
					<div class="col-12 text-right mt15 align-self-end">
						<a href="javascript:void(0)" class="base-btn default-btn mr5" data-dismiss="modal">Cancel</a>
						<a href="#" class="base-btn blue-btn">Save</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Automation Attribute change pop_up -->
<div class="modal automation-right-modal fade" id="AttributeChangeModal1" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="p15 p-md30 smart-form modal-scrollbar bs-h40 f-14">
				<div class="f-md-18 f-16 w500">Attribute changes</div>
				<div class="row">
					<div class="col-12 col-md-6 col-lg-5 mt15 mt-md30">
						<label class="d-gblue-clr">Choose The Changed Attribute</label>
						<select class="selectpicker" title="Add">
							<option>Name</option>
							<option>Email address</option>
							<option>Mobile number</option>
							<option>Date of birth</option>
							<option>Role</option>
							<option>Company</option>
							<option>Lead score</option>
							<option>Tag</option>
							<option>Country</option>
							<option>Region</option>
							<option>City</option>
							<option>Zip</option>
						</select>
					</div>
					<div class="col-12 mt15 mt-md35"> 
						<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
							<input id="changedattribute" type="checkbox">
							<label for="changedattribute" class="d-gblue-clr">Filter the specific contacts according to the changed attribute.</label>
						</div>
					</div>
				</div>
				<div class="row align-items-end">
					<div class="col-12 col-md-6 col-lg-5 mt15 mt-md30">
						<label class="d-gblue-clr">Select The Option</label>
						<select class="selectpicker" title="Select one">
							<option>New value</option>
							<option>Old value</option>
						</select>
					</div>
					<div class="col-10 col-md-5 col-lg-5 offset-lg-1 mt15 mt-md30">
						<label class="d-gblue-clr">Type Your Text Here</label>
						<input type="text" class="form-control field-h40" placeholder="Type">
					</div>
					<div class="col-2 col-md-1 mb10">
						<a href="#" class="d-gblue-clr t-decoration-none"><i class="icon-refresh f-16"></i></a>
					 </div>
				</div>
				<div class="row">
					<div class="col-12 col-md-12 col-lg-11 mt-md30 mt15">
						<div class="row">
						 <div class="col-12 col-md-4 col-xl-5 pr0 d-none d-md-block">
							<div class="andor-seperator mt16"></div>
						 </div>
						 <div class="col-12 col-md-4 col-xl-2 p0 text-center">
							<div class="switch-field">
							   <input type="radio" id="Changed-Attribute" name="attribute1" value="and" checked>
							   <label for="Changed-Attribute" class="switch_left mb0">And</label>
							   <input type="radio" id="Changed-Attribute1" name="attribute1" value="or">
							   <label for="Changed-Attribute1" class="switch_right mb0">Or</label>
							</div>
						 </div>
						 <div class="col-12 col-md-4 col-xl-5 pl0 d-none d-md-block">
							<div class="andor-seperator mt16"></div>
						 </div>
					  </div>
					</div>
				</div>
				<div class="row align-items-end">
					<div class="col-12 col-md-6 col-lg-5 mt15 mt-md30">
						<label class="d-gblue-clr">Select The Option</label>
						<select class="selectpicker" title="Select one">
							<option>New value</option>
							<option>Old value</option>
						</select>
					</div>
					<div class="col-10 col-md-5 col-lg-5 offset-lg-1 mt15 mt-md30">
						<label class="d-gblue-clr">Type Your Text Here</label>
						<input type="text" class="form-control field-h40" placeholder="Type">
					</div>
					<div class="col-2 col-md-1 mb10">
						<a href="#" class="d-gblue-clr t-decoration-none"><i class="icon-refresh f-16"></i></a>
					 </div>
				</div>
				<!-- Lead Score Select -->
				<div class="row d-none">
					<div class="col-12 col-md-12 col-lg-5">
						<div class="row align-items-center">
							<div class="col-12 col-md mt15 mt-md30 pr-md0">
								<label class="d-gblue-clr">Score Value</label>
								<input type="text" class="form-control field-h40" placeholder="Type">
							</div>
							<div class="col-12 col-md-1 text-center mt10 mt-md50 p0">To</div>
							<div class="col-12 col-md mt10 mt-md30 pl-md0">
								<label class="d-gblue-clr">Score Value</label>
								<input type="text" class="form-control field-h40" placeholder="Type">
							</div>
						</div>
					</div>
				</div>
				<!-- Lead Score Select -->
			</div>
			<div class="p15 p-md30 custom-modal-foooter text-right border-top-0">
				<a href="javascript:void(0)" class="base-btn default-btn f-14 mr5" data-dismiss="modal">Cancel</a>
				<a href="#" class="base-btn blue-btn f-14">Save</a>
			</div>
		</div>
	</div>
</div>

<!-- Automation Add to list pop_up -->
<div class="modal automation-right-modal fade" id="AddToListModal1" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="p15 p-md30 smart-form modal-scrollbar">
				<div class="row">
					<div class="col-12">
						<div class="w500 f-md-18 f-16">Add the specific contacts in to any list</div>
						<div class="row bs-h40">
							<div class="col-12 col-md-6 col-lg-5 mt15 mt-md30">
								<label class="d-gblue-clr">Choose The List</label>
								<div class="d-flex align-items-center w-100">
									<select class="selectpicker" title="Select one" data-live-search="true">
										<option>List one</option>
										<option>List two</option>
										<option>List three</option>
										<option>List four</option>
									</select>
									<a href="#" class="d-inline-block p-blue-clr segment-add ml15 f-16 t-decoration-none"><i class="icon-add-three"></i></a>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-5 mt15 mt-md30">
								<label class="d-gblue-clr">Enter Your List Name</label>
								<div class="d-flex align-items-center w-100">
									<input type="text" class="form-control field-h40" placeholder="Type Here">
									<a href="#" class="d-gblue-clr ml15 f-12 t-decoration-none"><i class="icon-cross"></i></a>
									<a href="#" class="s-green-clr ml15 f-14 t-decoration-none"><i class="icon-tick"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="p15 p-md30 custom-modal-foooter text-right border-top-0">
				<a href="javascript:void(0)" class="base-btn default-btn f-14 mr5" data-dismiss="modal">Cancel</a>
				<a href="#" class="base-btn blue-btn f-14">Save</a>
			</div>
		</div>
	</div>
</div>

<!-- Automation Quick Mailing Group Pop_up -->
<div class="modal automation-right-modal fade" id="QuickMailingGroupModal1" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="p15 p-md30 smart-form modal-scrollbar">
				<div class="w500 f-md-18 f-16">Add the specific contacts in to any quick mailing group</div>
				<div class="row">
					<div class="col-12 col-md-12 col-lg-6 col-xl-5 mt15 mt-md30">
						<label class="d-gblue-clr">Choose The Quick Mailing Group</label>
						<div class="d-flex align-items-center w-100 bs-h40">
							<select class="selectpicker" title="Select one" data-live-search="true">
								<option>Quick mailing group one</option>
								<option>Quick mailing group two</option>
								<option>Quick mailing group three</option>
								<option>Quick mailing group four</option>
							</select>
							<a href="#" class="d-inline-block p-blue-clr segment-add ml15 f-16 t-decoration-none"><i class="icon-add-three"></i></a>
						</div>
					</div>
					<div class="col-12 col-md-12 col-lg-6 col-xl-5 mt15 mt-md30">
						<label class="d-gblue-clr">Enter Your Quick Mailing Group Name</label>
						<div class="d-flex align-items-center w-100">
							<input type="text" class="form-control field-h40" placeholder="Type Here">
							<a href="#" class="d-gblue-clr ml15 f-12 t-decoration-none"><i class="icon-cross"></i></a>
							<a href="#" class="s-green-clr ml15 f-14 t-decoration-none"><i class="icon-tick"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="p15 p-md30 custom-modal-foooter text-right border-top-0">
				<a href="javascript:void(0)" class="base-btn default-btn f-14 mr5" data-dismiss="modal">Cancel</a>
				<a href="#" class="base-btn blue-btn f-14">Save</a>
			</div>
		</div>
	</div>
</div>

<div class="modal automation-right-modal fade" id="WaitTimeModal1" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="p15 p-md30 smart-form h-100">
			<input type="hidden" name="timedelayid" id="timedelayid" value="">
				<div class="row h-100">
					<div class="col-12">
						<div class="w500 f-md-18 f-16">Wait Time</div>
						<p class="f-14 d-gblue-clr mt5">Are you sure you want to move this action</p>
						<div class="form-group mb0 mt15 mt-md40 mb0">
							<div class="d-flex justify-content-start flex-wrap f-14">	 
								<div class="smart-radio-btn radio-strong-blue mr15 mr-md30">
									<input name="radioTime" id="Immediately" type="radio" checked>
									<label for="Immediately"> Immediately </label>
								</div>
								<div class="smart-radio-btn radio-strong-blue mr15 mr-md30">
									<input name="radioTime" id="Later" type="radio">
									<label for="Later"> Later </label>
								</div>
								<div class="smart-radio-btn radio-strong-blue">
									<input name="radioTime" id="Schedule" type="radio">
									<label for="Schedule"> Schedule</label>
								</div>
							</div>
						</div>
						<!-- Later Div -->
				<div class="row mt15 mt-md30 later-Section">
					<div class="col-12 col-md-6 col-lg-5">
						<div class="row no-gutters align-items-center">
							<div class="col pr-md10">Wait for <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Info Text" class="d-gblue-clr t-decoration-none pl5"><i class="icon-information f-12"></i></a></div>
							<div class="col-12 col-md-7 col-lg-9 mt5 mt-md0">
								<input type="text" class="form-control field-h40" value="5">
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mt15 mt-md0 bs-h40">
						<select class="selectpicker">
							<option>Days</option>
							<option>Months</option>
							<option>Minutes</option>
							<option>Seconds</option>
						</select>
					</div>
				</div>
				<!-- Schedule Div -->
				<div class="row smart-form align-items-center bs-h40 mt15 mt-md30 schedule-Section">
					<div class="col-md-6 col-lg-4 col-12 pr-md5 account-merge mb10 mb-md0">
						<div class="input-group">
							<input type="text" name="dob" readonly class="form-control field-h40 radiusrb0" id="dob-secondary-target" value="12/10/2016" placeholder="Date of Birth">
							<span class="input-group-btn" id="dob-secondary">
							<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
							</span>
						</div>
					</div>
					<div class="px15 px-md5">at</div>
					<div class="px5 mb10 mb-md0">
						<select class="selectpicker f-14" title="HH">
							<option>01</option>
							<option>02</option>
							<option>03</option>
							<option>04</option>
							<option>05</option>
							<option>06</option>
							<option>07</option>
							<option>08</option>
							<option>09</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>
						</select>
					</div>
					<div class="px5">:</div>
					<div class="px5 mb10 mb-md0">
						<select class="selectpicker f-14" title="MM">
							<option>01</option>
							<option>02</option>
							<option>03</option>
							<option>04</option>
							<option>05</option>
							<option>06</option>
							<option>07</option>
							<option>08</option>
							<option>09</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>
						</select>
					</div>
					<div class="px5 mb10 mb-md0">
						<select class="selectpicker f-14" title="PM">
							<option>AM</option>
							<option>PM</option>
						</select>
					</div>
				</div>	
					</div>
					<div class="col-12 text-right mt15 align-self-end">
						<a href="javascript:void(0)" class="base-btn default-btn mr5" data-dismiss="modal">Cancel</a>
						<a href="#" class="base-btn blue-btn">Save</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Add New Broadcast Modal Popup -->
<div class="modal automation-right-modal fade" id="AddNewBroadcastModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="p15 p-md30 smart-form h-100">
				<div class="row h-100">
					<div class="col-12">
						<div class="w500 f-md-18 f-16">Add New Broadcast</div>
						<p class="f-14 d-gblue-clr mt5">What do you want to call your broadcast?</p>
						<div class="row bs-h40">
							<div class="col-12 col-md-6 col-lg-5 mt15 mt-md30">
								<label for="exampleSelect1">Project Name</label>
								<input type="text" class="form-control field-h40" value="Demo Project" placeholder="Enter Project Name" disabled>
							</div>
							<div class="col-12 col-md-6 col-lg-5 offset-lg-1 mt15 mt-md30">
								<label for="exampleSelect2">Broadcast Name</label>
								<input type="text" class="form-control field-h40" value="Jayprakash" placeholder="Enter Broadcast Name">
							</div>
							<div class="col-12 col-md-6 col-lg-5 mt15 mt-md30">
								<label for="exampleSelect1">Choose Mail Type</label>
								<select class="selectpicker">
									<option>Select One</option>
									<option>Select Two</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-12 text-right mt15 align-self-end">
						<a href="javascript:void(0)" class="base-btn default-btn mr5" data-dismiss="modal">Cancel</a>
						<a href="#" class="base-btn blue-btn">Send</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	

<!-- broadcast modal Pop_up -->
<div class="modal automation-right-modal fade" id="BroadcastModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="crosspos text-right"><a href="#" class="crossicon" data-dismiss="modal"><span>Close this pop-up</span><i class="icon-cross"></i></a></div>
			<div class="p15 p-md30 smart-form">
				<div class="row mt5 mt-md8 broadcast-email">
					<div class="col-12 col-md-7 col-lg-7">
					<div class="f-md-18 f-16 w500">Choose the broadcast email</div>
					</div>
					<div class="col-12 col-md-5 col-lg-5 text-center text-md-right mt10 mt-md0 f-16 w400">
					<a href="javascript:void(0)" class="base-btn blue-btn" data-toggle="modal" data-target="#AddNewBroadcastModal"><i class="icon-add-new f-18 align-middle"></i>&nbsp;&nbsp; New Broadcast</a>
					</div>
				</div>
				<div class="row mt5 mt-md8 autoresponder-email">
					<div class="col-12 col-md-7 col-lg-7">
					<div class="f-md-18 f-16 w500">Choose the autoresponder email</div>
					</div>
					<div class="col-12 col-md-5 col-lg-5 text-center text-md-right mt10 mt-md0 f-16 w400">
					<a href="javascript:void(0)" class="base-btn blue-btn" data-toggle="modal" data-target="#AddNewBroadcastModal"><i class="icon-add-new f-18 align-middle"></i>&nbsp;&nbsp; New Autoresponder</a>
					</div>
				</div>
				<!-- Nav tabs -->
				<ul class="nav tabs-style1 f-14 f-sm-16 mt20 mt-md0" role="tablist">
				  <li class="nav-item"> <a class="nav-link active broadcast" data-toggle="tab" data-target ="#Broadcast">Broadcast</a> </li>
				  <li class="nav-item"> <a class="nav-link autoresponder" data-toggle="tab"  data-target ="#Autoresponder">Autoresponder</a> </li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
				  <div id="Broadcast" class="tab-pane active px0">  
					<!--- Filteration Div ---->
					<div class="row mb15 mb-md30 relative min-h-40 mt-md30 mt-15 p0">
						<!----- Table Option Div end---->
						<div class="col-md-12 col-lg-7 col-xl-7 align-items-center mb-lg0 mb15">
							<div class="row">
							
							<span class="bs-h40 table-option-hide col-12 col-12 col-md-6 mt15 mt-md0">
								<select class="selectpicker f-14" title="All broadcast (1000)">
									<option>All broadcast (1000)</option>
									<option>Recently added broadcast (100)</option>
									<option>Recently modified broadcast (50)</option>
									<option>Broadcast added in last 07 days (30)</option>
									<option>Broadcast added in last 30 days (50)</option>
								</select>
							</span>
							<span class="bs-h40 table-option-hide col-12 col-12 col-md-6 mt15 mt-md0">
								<select class="selectpicker f-14">
									<option selected>Sent</option>
									<option>Draft</option>
									<option>Schedule</option>
								</select>
							</span>
							</div>	
						</div>
						<div class="col-md-12 col-lg-5 col-xl-5 smart-form table-option-hide">
							<div class="row">		
								<div class="col-md-8 col-lg-8 col-xl-8 mb15 mb-md0 pr-md30">
									<div class="smart-search-field">
										<div class="input-group">
											<input class="form-control" placeholder="Search" type="text">
											<div class="input-group-append">
												<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-lg-4 col-xl-4 pl-md0">
									<div class="row">
										<div class="col-3 col-md-3 col-lg-4 d-flex align-self-center f-14 d-md-none d-lg-block">Show</div>
										<div class="col-9 col-md-12 col-lg-8 bs-h40">
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
					<!------- Block Section----->
					<div class="row mCustomScrollbar hautobox" data-mcs-theme="inset-3">
				   <div class="col-12 col-md-12 col-lg-8 order-2 order-lg-1 t-wauto tw-100 transition-all">
					  <div class="col-12 project-list-view-border p0 auto-img">
						 <div class="project-list-view p15 p-md20">
							<div class="row">
							   <div class="col-12 col-md-3 col-lg-3 col-xl-3">
								  <div class="media">
									 
									 <div class="media-body ml5">
										<div class="hover-img d-flex align-items-center">
										   <img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">
										  
										</div>
									 </div>
								  </div>
							   </div>
							   <div class="col-12 col-md-9 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
								  <div class="row hide-edit-show no-gutters w-100">
									 <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
										<div class="d-flex align-items-center">
										   <div class="f-20 f-md-24 w400 text-ellipsis text-uppercase">"QUOTE OF THE WEEK"</div>
										   
										</div>
									   <div class="f-14 d-gblue-clr my10 my-md10"><p class="lh150"> Sent on Nov 18, 2017 at 4:08 PM </p><p class="lh150"><span>From name: Jay Nagar</span><br><span>From email: jayprakash@saglusinfo.com</span></p></div>
								

									 </div>
									 <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
										<div class="col-12 text-md-right p0">
											<div class="f-14 lh140 d-green-clr w500">Contacts : 5000</div>
										 </div> 
										
										<!------ Button------>
										<div class="col-12 text-md-right p0 align-self-end">
										   <ul class="list-inline w400 mb0">
											
											  <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
											  </li>
											  <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
											  </li>
											   <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
											   </li>
										   </ul>
										</div>
									 </div>
								  </div>
								  
							   </div>
							</div>
						 </div>
						 <div class="project-list-view p15 p-md20">
							<div class="row">
							   <div class="col-12 col-md-3 col-lg-3 col-xl-3">
								  <div class="media">
									 
									 <div class="media-body ml5">
										<div class="hover-img d-flex align-items-center">
										   <img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">
										  
										</div>
									 </div>
								  </div>
							   </div>
							   <div class="col-12 col-md-9 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
								  <div class="row hide-edit-show no-gutters w-100">
									 <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
										<div class="d-flex align-items-center">
										   <div class="f-20 f-md-24 w400 text-ellipsis text-uppercase">"QUOTE OF THE WEEK"</div>
										   
										</div>
									   <div class="f-14 d-gblue-clr my10 my-md10"><p class="lh150"> Sent on Nov 18, 2017 at 4:08 PM </p><p class="lh150"><span>From name: Jay Nagar</span><br><span>From email: jayprakash@saglusinfo.com</span></p></div>
								

									 </div>
									 <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
										<div class="col-12 text-md-right p0">
											<div class="f-14 lh140 d-green-clr w500">Contacts : 5000</div>
										 </div> 
										
										<!------ Button------>
										<div class="col-12 text-md-right p0 align-self-end">
										   <ul class="list-inline w400 mb0">
											
											  <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
											  </li>
											  <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
											  </li>
											  <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
											   </li>
										   </ul>
										</div>
									 </div>
								  </div>
								  
							   </div>
							</div>
						 </div>
						 <div class="project-list-view p15 p-md20">
							<div class="row">
							   <div class="col-12 col-md-3 col-lg-3 col-xl-3">
								  <div class="media">
									 
									 <div class="media-body ml5">
										<div class="hover-img d-flex align-items-center">
										   <img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">
										  
										</div>
									 </div>
								  </div>
							   </div>
							   <div class="col-12 col-md-9 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
								  <div class="row hide-edit-show no-gutters w-100">
									 <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
										<div class="d-flex align-items-center">
										   <div class="f-20 f-md-24 w400 text-ellipsis text-uppercase">"QUOTE OF THE WEEK"</div>
										   
										</div>
									   <div class="f-14 d-gblue-clr my10 my-md10"><p class="lh150"> Sent on Nov 18, 2017 at 4:08 PM </p><p class="lh150"><span>From name: Jay Nagar</span><br><span>From email: jayprakash@saglusinfo.com</span></p></div>
								

									 </div>
									 <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
										<div class="col-12 text-md-right p0">
											<div class="f-14 lh140 d-green-clr w500">Contacts : 5000</div>
										 </div> 
										
										<!------ Button------>
										<div class="col-12 text-md-right p0 align-self-end">
										   <ul class="list-inline w400 mb0">
											
											  <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
											  </li>
											  <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
											  </li>
											  <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
											   </li>
										   </ul>
										</div>
									 </div>
								  </div>
								  
							   </div>
							</div>
						 </div>
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
							   <li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i> </a>
							   </li>
							   <li><a href="#">1</a>
							   </li>
							   <li><a href="#">2</a>
							   </li>
							   <li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </a>
							   </li>
							   <li><a href="#" class="active">6</a>
							   </li>
							   <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> </a>
							   </li>
							</ul>
						 </div>
					  </div>
					  <!----- Pagination Div End----->
				   </div>  
				</div>	
					</div>	
				   <div id="Autoresponder" class="tab-pane fade">			
					<!--- Filteration Div ---->
					<div class="row mb15 mb-md30 relative min-h-40 mt-md30 mt-15 p0">
						<!----- Table Option Div end---->
						<div class="col-md-5 col-lg-5 col-xl-5 align-items-center mb-md0 mb15">
							<div class="d-flex flex-wrap">
							<span class="bs-h40 table-option-hide col-12 col-12 col-md-10 col-lg-9 col-xl-8 px0 mt15 mt-md0">
								<select class="selectpicker f-14" title="All Autoresponder (1000)">
								  <option>All Autoresponder (1000)</option>
								  <option>Recently added Autoresponder (10)</option>
								  <option>Recently modified Autoresponder (15)</option>
								  <option>Autoresponder added in last 07 days (10)</option>
								  <option>Autoresponder added in last 30 days (10)</option>
								</select>
							</span>
							</div>	
						</div>
						<div class="col-md-7 col-lg-7 col-xl-7 smart-form table-option-hide">
							<div class="row">
								<div class="col-md-4 col-lg-4 col-xl-4">
								</div>
								<div class="col-md-5 col-lg-5 col-xl-5 mb15 mb-md0">
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
										<div class="col-3 col-md-3 col-lg-4 d-flex align-self-center f-14 d-md-none d-lg-block">Show</div>
										<div class="col-9 col-md-12 col-lg-8 bs-h40">
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

					<!------- Block Section----->
				   <div class="row mCustomScrollbar hautobox" data-mcs-theme="inset-3">
				   <div class="col-12 col-md-12 col-lg-8 order-2 order-lg-1 t-wauto tw-100 transition-all">
					  <div class="col-12 project-list-view-border p0 auto-img">
						 <div class="project-list-view p15 p-md20">
							<div class="row">
							   <div class="col-12 col-md-3 col-lg-3 col-xl-3">
								  <div class="media">
									 
									 <div class="media-body ml5">
										<div class="hover-img d-flex align-items-center">
										   <img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">
										  
										</div>
									 </div>
								  </div>
							   </div>
							   <div class="col-12 col-md-9 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
								  <div class="row hide-edit-show no-gutters w-100">
									 <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
										<div class="d-flex align-items-center">
										   <div class="f-20 f-md-24 w400 text-ellipsis text-uppercase">"QUOTE OF THE WEEK"</div>
										   
										</div>
									   <div class="f-14 d-gblue-clr my10 my-md10"><p class="lh150"> Sent on Nov 18, 2017 at 4:08 PM </p><p class="lh150"><span>From name: Jay Nagar</span><br><span>From email: jayprakash@saglusinfo.com</span></p></div>
								

									 </div>
									 <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
										<div class="col-12 text-md-right p0">
											<div class="f-14 lh140 d-green-clr w500">Contacts : 5000</div>
										 </div> 
										
										<!------ Button------>
										<div class="col-12 text-md-right p0 align-self-end">
										   <ul class="list-inline w400 mb0">
											
											  <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
											  </li>
											  <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
											  </li>
											  <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
											   </li>
										   </ul>
										</div>
									 </div>
								  </div>
								  
							   </div>
							</div>
						 </div>
						 <div class="project-list-view p15 p-md20">
							<div class="row">
							   <div class="col-12 col-md-3 col-lg-3 col-xl-3">
								  <div class="media">
									 
									 <div class="media-body ml5">
										<div class="hover-img d-flex align-items-center">
										   <img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">
										  
										</div>
									 </div>
								  </div>
							   </div>
							   <div class="col-12 col-md-9 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
								  <div class="row hide-edit-show no-gutters w-100">
									 <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
										<div class="d-flex align-items-center">
										   <div class="f-20 f-md-24 w400 text-ellipsis text-uppercase">"QUOTE OF THE WEEK"</div>
										   
										</div>
									   <div class="f-14 d-gblue-clr my10 my-md10"><p class="lh150"> Sent on Nov 18, 2017 at 4:08 PM </p><p class="lh150"><span>From name: Jay Nagar</span><br><span>From email: jayprakash@saglusinfo.com</span></p></div>
								

									 </div>
									 <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
										<div class="col-12 text-md-right p0">
											<div class="f-14 lh140 d-green-clr w500">Contacts : 5000</div>
										 </div> 
										
										<!------ Button------>
										<div class="col-12 text-md-right p0 align-self-end">
										   <ul class="list-inline w400 mb0">
											
											  <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
											  </li>
											  <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
											  </li>
											  <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
											   </li>
										   </ul>
										</div>
									 </div>
								  </div>
								  
							   </div>
							</div>
						 </div>
						 <div class="project-list-view p15 p-md20">
							<div class="row">
							   <div class="col-12 col-md-3 col-lg-3 col-xl-3">
								  <div class="media">
									 
									 <div class="media-body ml5">
										<div class="hover-img d-flex align-items-center">
										   <img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">
										  
										</div>
									 </div>
								  </div>
							   </div>
							   <div class="col-12 col-md-9 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
								  <div class="row hide-edit-show no-gutters w-100">
									 <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
										<div class="d-flex align-items-center">
										   <div class="f-20 f-md-24 w400 text-ellipsis text-uppercase">"QUOTE OF THE WEEK"</div>
										   
										</div>
									   <div class="f-14 d-gblue-clr my10 my-md10"><p class="lh150"> Sent on Nov 18, 2017 at 4:08 PM </p><p class="lh150"><span>From name: Jay Nagar</span><br><span>From email: jayprakash@saglusinfo.com</span></p></div>
								

									 </div>
									 <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
										<div class="col-12 text-md-right p0">
											<div class="f-14 lh140 d-green-clr w500">Contacts : 5000</div>
										 </div> 
										
										<!------ Button------>
										<div class="col-12 text-md-right p0 align-self-end">
										   <ul class="list-inline w400 mb0">
											
											  <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
											  </li>
											  <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
											  </li>
											  <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
											   </li>
										   </ul>
										</div>
									 </div>
								  </div>
								  
							   </div>
							</div>
						 </div>
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
							   <li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i> </a>
							   </li>
							   <li><a href="#">1</a>
							   </li>
							   <li><a href="#">2</a>
							   </li>
							   <li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </a>
							   </li>
							   <li><a href="#" class="active">6</a>
							   </li>
							   <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> </a>
							   </li>
							</ul>
						 </div>
					  </div>
					  <!----- Pagination Div End----->
				   </div>
				   
				   </div>
					  
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Automation View Image Popup -->
<div class="modal" id="autoImageModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-library-size modal-img-size" role="document">
    <div class="modal-content radius5 border-0">
      <div class="modal-header library-modal-header p15 py-md20 px-md30 justify-content-between">
		  <div class="f-16 f-md-18 w500">Broadcast Subject</div>
		  <a href="javascript:void(0);" data-dismiss="modal" class="d-gblue-clr t-decoration-none f-12 align-self-center"><i class="icon-cross"></i></a>
      </div>
      <div class="modal-body p0">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-6 align-self-stretch d-flex pr-md0">
				<div class="vl-gblue-bg w-100 p15 p-md30 radiusbl5">
					<div class="">
				<img src="<?php echo $basedir; ?>images/popimg.png" class="img-fluid d-block mx-auto">
					</div>
					
					
					
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-6 align-self-stretch d-flex pl0">
				<div class="p30 p-md30 pr-md20 table-responsive library-table-padding mb20">
				<table class="table table-borderless f-14 w400">
					<tbody>
						<tr>
						<td width="30%">Subject	</td>
						<td width="5%">:</td>
						<td>Demo Template</td>
						</tr>
						<tr>
						<td>From Name</td>
						<td width="5%">:</td>
						<td>Jay Prakash Nagar</td>
						</tr>
						<tr>
						<td>From Mail</td>
						<td width="5%">:</td>
						<td>divyanshup@gmail.com</td>
						</tr>
						<tr>
						<td>Reply Mail</td>
						<td width="5%">:</td>
						<td>info@gmail.com</td>
						</tr>
						<tr>
						<td>SMTP</td>
						<td width="5%">:</td>
						<td>Amazon</td>
						</tr>
						<tr>
						<td>Contacts</td>
						<td width="5%">:</td>
						<td>40250</td>
						</tr>
						<tr>
						<td>Scheduled On</td>
						<td width="5%">:</td>
						<td>27 April, 2018</td>
						</tr>
					</tbody>
				</table>
				</div>
			</div>
		</div>
      </div>
    </div>
  </div>
</div>

<!-- Journey Preview Modal Popup -->
<div class="modal" id="journeyPreview">
	<div class="modal-dialog modal-dialog-centered modal-library-size">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header library-modal-header p15 py-md20 px-md30 justify-content-between">
				<div class="f-16 f-md-18 w500">Journey Name</div>
				<a href="javascript:void(0);" data-dismiss="modal" class="d-gblue-clr t-decoration-none f-12 align-self-center"><i class="icon-cross"></i></a>
			</div>
			<!-- end model header -->			
			<!-- Modal body -->
			<div class="modal-body journey-preview">				
				<img src="../../../images/journey-preview.png">
			</div>
			<!-- end model body -->
		</div>
	</div>
</div>

<!-- Journey Info Modal PopUp -->
<div class="modal" id="journeyInfo" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-copy-size" role="document">
    <div class="modal-content radius5 border-0">
      <div class="modal-header library-modal-header p15 py-md20 px-md30 justify-content-between">
		  <div class="f-16 f-md-18 w500">Journey Details</div>
		  <a href="javascript:void(0);" data-dismiss="modal" class="d-gblue-clr t-decoration-none f-12 align-self-center"><i class="icon-cross"></i></a>
      </div>
      <div class="modal-body p0">
		<div class="mCustomScrollbar journey-info-scroll" data-mcs-theme="inset-3">
			<div class="p15 px-md30 py-md20">
				<div class="row">
					<div class="col-12">
						<div class="f-14 w400 d-gblue-clr">Journey Name :</div>
						<div class="f-14 w400 vd-gblue-clr mt6 lh140">Journey Name 1</div>
					</div>
					<div class="col-12 mt15 mt-md20">
						<div class="f-14 w400 d-gblue-clr">Description :</div>
						<div class="f-14 w400 vd-gblue-clr mt6 lh140">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.	</div>
					</div>
				</div>
			</div>
		</div>
      </div>
    </div>
  </div>
</div>

<!-- Segment Modal pop_up -->
<div class="modal automation-right-modal fade" id="SegmentModal1" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="p15 p-md30 smart-form modal-scrollbar f-14">
				<div class="f-md-18 f-16 w500">If any contact/visitor is added/removed from a “Specific Segment”</div>				
				<div class="row align-items-end bs-h40">
					<div class="col-12 col-md-6 col-lg-5 mt15 mt-md30 bs-h40 pr-lg0">
						<label class="d-gblue-clr">From a segment</label>
						<div class="d-flex align-items-center">
							<div class="dropdown simple-dropdown dropas-select w-100">			
								<button class="customer-goalfield dropdown-toggle btn-block text-left vd-gblue-clr field-h40" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret-right pull-left">Choose Segment</span> </button>							
								<div class="dropdown-menu dropdown-menu-right w-100 h-auto f-14" aria-labelledby="dropdownMenu1">
									<!--- Searchbox Field ------->
									<div class="bs-searchbox-field stoppropagation">
									  <div class="input-group">
										<input type="text" class="form-control" placeholder="Search">
										<div class="input-group-append">
										  <a class="btn"> <i class="fa fa-search"></i></a>
										</div>
									  </div>
									</div>
									<!--- Scrollbar Div start ------->
									<div class="mCustomScrollbar f-14 mh-180" data-mcs-theme="inset-3">
										<li> <a href="javascript:void(0)" class="dropdown-item select-dropvalue">
										Segment name one
										</a> </li>
										<li> <a href="javascript:void(0)" class="dropdown-item select-dropvalue">
										Segment name two
										</a> </li>
										<li> <a href="javascript:void(0)" class="dropdown-item select-dropvalue">
										Segment name three
										</a> </li>
										<li> <a href="javascript:void(0)" class="dropdown-item select-dropvalue">
										Segment name four
										</a> </li>
									</div>
								</div>	
							</div>
							<a href="#" class="d-inline-block p-blue-clr ml15 f-16 t-decoration-none" title="Create a new segment"><i class="icon-add-three"></i></a>
						</div>
					</div>
				
				<div class="col-12 col-md-6 col-lg-5 offset-lg-1 mt15 mt-md30 p-lg0">
						<label class="d-gblue-clr">Enter the name of segment</label>
						<div class="d-flex align-items-center">
					 <input type="text" class="form-control  field-h40" placeholder="Enter the name of segment">
					 <a href="#" class="p-blue-clr f-14 ml15"><u>Add</u></a>
					</div>
					</div>
				
				</div>
				<!-- Visitors/Users Section -->
				<div class="l-gblue-border radius3 mt15 mt-md30 w-100">
					<div class="p15 p-md30">
					<div class="row">
					<div class="col-12 col-md-2 order-md-2 text-right mb5 mb-md0">
						<a href="#" class="p-blue-clr f-14"><u>Edit</u></a>
					</div>
					<div class="col-12 col-md-10 order-md-1">
						<div class="media"> <span class="d-flex align-items-center"><img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/visitors-icon.png"></span>
							<div class="media-body align-self-center ml30 d-gblue-clr">
								<h5 class="w900 f-14">Visitors/Users</h5>
								<p class="w400 f-14 mt10 lh180 ml24"><b>All users</b> from, <b>Rajasthan, India</b></p>
							</div>
						</div>
				
						<div class="media mt15 mt-md30"> <span class="d-flex align-items-center"><img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/beahaviour-icon.png"></span>
							<div class="media-body align-self-center ml30 d-gblue-clr">
								<h5 class="w900 f-14">Behaviour</h5>
								<p class="w400 f-14 mt10 lh180 ml24"><b>Time spend</b> on the page is equal to <b>00:30 sec</b></p>
							</div>
						</div>
				
						<div class="media mt15 mt-md30"> <span class="d-flex align-items-center"><img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/tehnology-icon.png"></span>
							<div class="media-body align-self-center ml30 d-gblue-clr">
								<h5 class="w900 f-14">Technology</h5>
								<p class="w400 f-14 mt10 lh180 ml24">
								having WEB device where <b>Device</b> is <b>Desktop</b> Operating system is <b>Windows</b>
								</p>
							</div>
						</div>
					</div>
					</div>
					</div>
				</div>
				<!-- Visitors/Users Section End -->
				<!-- Edit Visitors/Users Section -->
				<div class="row mt-md30 mt15">
				 <div class="col-12 t-decoration-none">
					<div class="row">
					   <div class="col-12 f-18 w400">Visitors/Users</div>
					   <div class="col-12 col-md-12 segment-accordion mt-md20 mt15">
						  <div id="accordion" class="accordion">
							 <div class="card mb-0 f-16">
								<div class="card-header collapsed" data-toggle="collapse" href="#collapseVisitor">
								   <a class="card-title lato-font">&nbsp; Visitor Type</a> 
								</div>
								<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define the type of visitors for this segment." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a>
								<div id="collapseVisitor" class="collapse">
								   <div class="card-body">
									  <div class="row">
										 <div class="col-12 col-md-9">
											<div class="row smart-form">
											   <div class="col-12 col-md-6">
												  <div class="form-group d-gblue-clr">
													 <select class="selectpicker" title="Select Visitor type">
														<option>All visitors</option>
														<option>New visitors</option>
														<option>Returning visitors</option>
														<option>No. of sessions of the visitors</option>
													 </select>
												  </div>
											   </div>
											   <div class="col-12 col-md-6">
												  <div class="form-group d-gblue-clr">
													 <select class="selectpicker" title="equal to">
														<option>equal to</option>
														<option>not equal to</option>
														<option>one of</option>
														<option>none of</option>
														<option>greater than</option>
														<option>less than</option>
														<option>greater than equal to</option>
														<option>less than equal to</option>
														<option>between</option>
														<option>not between</option>
													 </select>
												  </div>
											   </div>
											   <div class="col-12 col-md-6 form-group">
												  <input type="text" class="form-control" placeholder="Enter the value">
											   </div>
											   <div class="col-12 col-md-6 form-group">
												  <input type="text" class="form-control" placeholder="Enter the value">
											   </div>
											   <div class="col-12 col-md-12 form-group">
												  <input type="text" class="form-control" placeholder="Enter the value">
											   </div>
											   <div class="col-12 col-md-12">
												  <div class="smart-form form-group f-14">
													 <input class="form-control" value="Tags" name="tags" id="visitor-type" style="display: none;">
													 <p class="f-14 mt10 d-gblue-clr">Pls separate Tag by Comma or enter.</p>
												  </div>
											   </div>
											</div>
										 </div>
										 <div class="col-12 col-md-3"><a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a></div>
									  </div>
								   </div>
								</div>
							 </div>
						  </div>
						  <div class="row mt-md20 mt15">
							 <div class="col-12 col-md-4 col-xl-5 d-none d-md-block">
								<div class="andor-seperator mt16"></div>
							 </div>
							 <div class="col-12 col-md-4 col-xl-2 p0 text-center">
								<div class="switch-field">
								   <input type="radio" id="visitors-and" name="visitors" value="and" />
								   <label for="visitors-and" class="switch_left">And</label>
								   <input type="radio" id="visitors-or" name="visitors" value="or" />
								   <label for="visitors-or" class="switch_right">Or</label>
								</div>
							 </div>
							 <div class="col-12 col-md-4 col-xl-5 d-none d-md-block">
								<div class="andor-seperator mt16"></div>
							 </div>
						  </div>
					   </div>
					   <div class="col-12 col-md-12 segment-accordion mt10">
						  <div id="accordion" class="accordion">
							 <div class="card mb-0 f-16">
								<div class="card-header collapsed" data-toggle="collapse" href="#collapseLastSeen">
								   <a class="card-title lato-font">&nbsp; Last Seen</a> 
								</div>
								<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define last seen properties for this segment." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a>
								<div id="collapseLastSeen" class="collapse f-14">
								   <div class="card-body">
									  <div class="row smart-form d-gblue-clr">
										 <div class="col-12 col-md-9">
											<div class="row">
											   <div class="col-12 col-md-6">
												  <div class="form-group d-gblue-clr d-flex">
													 <div class="mt15">Is &nbsp; &nbsp;</div>
													 <select class="selectpicker" title="Select an option">
														<option>after</option>
														<option>before</option>
														<option>within</option>
														<option>present</option>
														<option>not present</option>
													 </select>
												  </div>
											   </div>
											   <div class="col-12 col-md-6">
												  <div class="form-group">
													 <select class="selectpicker" title="Select an option">
														<option>date</option>
														<option>last X time (Last 1 month)</option>
														<option>next Y time (Next 1 month)</option>
														<option>last X time to Y time</option>
														<option>next X time to Y time</option>
														<option>last X time to next Y time</option>
													 </select>
												  </div>
											   </div>
											</div>
										 </div>
										 <div class="col-12 col-md-3 mb10 mb-md0">
											<a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a>
										 </div>
										 <div class="col-12 col-md-3 col-lg-2 d-flex d-gblue-clr mb15 mb-md0">
											<div class="mt15 mr15">Last</div>
											<input  type="text" class="form-control col-8">
										 </div>
										 <div class="col-12 col-md-6 col-lg-3">
											<div class="form-group">
											   <select class="selectpicker" title="Select an option">
												  <option>minutes</option>
												  <option>hours</option>
												  <option>days</option>
												  <option>weeks</option>
												  <option>months</option>
												  <option>years</option>
											   </select>
											</div>
										 </div>
										 <div class="col-12 col-md-5 col-lg-3">
											<div class="row mb15 mb-md0">
											   <div class="col-5 col-lg-6 mt15">To &nbsp; &nbsp; Next</div>
											   <div class="col-7 col-lg-6"><input  type="text" class="form-control"></div>
											</div>
										 </div>
										 <div class="col-10 col-md-4 col-lg-3">
											<div class="form-group">
											   <select class="selectpicker" title="Select an option">
												  <option>minutes</option>
												  <option>hours</option>
												  <option>days</option>
												  <option>weeks</option>
												  <option>months</option>
												  <option>years</option>
											   </select>
											</div>
										 </div>
										 <div class="col-2 col-md-1 p0 mt15">
											<a href="#" class="d-gblue-clr"><i class="icon-refresh-final f-16"></i></a>
										 </div>
									  </div>
								   </div>
								</div>
							 </div>
						  </div>
						  <div class="row mt-md20 mt15">
							 <div class="col-12 col-md-4 col-xl-5 d-none d-md-block">
								<div class="andor-seperator mt16"></div>
							 </div>
							 <div class="col-12 col-md-4 col-xl-2 p0 text-center">
								<div class="switch-field">
								   <input type="radio" id="lastseen-and" name="lastseen" value="and" />
								   <label for="lastseen-and" class="switch_left">And</label>
								   <input type="radio" id="lastseen-or" name="lastseen" value="or" />
								   <label for="lastseen-or" class="switch_right">Or</label>
								</div>
							 </div>
							 <div class="col-12 col-md-4 col-xl-5 d-none d-md-block">
								<div class="andor-seperator mt16"></div>
							 </div>
						  </div>
					   </div>
					   <div class="col-12 col-md-12 segment-accordion mt-md20 mt15">
						  <div id="accordion" class="accordion">
							 <div class="card mb-0 f-16">
								<div class="card-header collapsed" data-toggle="collapse" href="#collapseGeo">
								   <a class="card-title lato-font">&nbsp; Geo Filtering/Position</a> 
								</div>
								<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define geographic locations for this segment." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
								<div id="collapseGeo" class="collapse">
								   <div class="card-body"> 		
								   <div class="row smart-form">
									  <div class="col-12 col-md-6 col-lg-4">
										 <div class="form-group d-gblue-clr bs-h30">
											<select class="selectpicker">
											   <option>None of these must satisfy</option>
											   <option>Any of these must satisfy</option>
											</select>
										 </div>
									  </div>
									  <div class="col-12 col-md-2 col-lg-2 offset-0 offset-md-4 offset-lg-6 mb10 mb-md0">
										 <a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a>
									  </div>
								   </div>
								   <div class="row smart-form">
									  <div class="col-12 col-md-10">
										 <div class="row">
											<div class="col-12 col-md-6 col-lg-4">
											   <div class="form-group d-gblue-clr">
												  <select class="selectpicker" title="Country" data-live-search="true">
													 <option>Country 1</option>
													 <option>Country 2</option>
													 <option>Country 3</option>
													 <option>Country 4</option>
												  </select>
											   </div>
											</div>
											<div class="col-12 col-md-6 col-lg-4">
											   <div class="form-group d-gblue-clr">
												  <select class="selectpicker" title="State" data-live-search="true">
													 <option>State 1</option>
													 <option>State 2</option>
													 <option>State 3</option>
													 <option>State 4</option>
												  </select>
											   </div>
											</div>
											<div class="col-12 col-md-6 col-lg-4 offset-md-4 offset-lg-0">
											   <div class="form-group d-gblue-clr">
												  <select class="selectpicker" title="City" data-live-search="true">
													 <option>City 1</option>
													 <option>City 2</option>
													 <option>City 3</option>
													 <option>City 4</option>
												  </select>
											   </div>
											</div>
										 </div>
									  </div>
									  <div class="col-12 col-md-2 p0 pl15 pl-md0">
										 <a href="#" class="d-inline-block d-gblue-clr segment-delete mt15"><i class="icon-delete f-16"></i></a>
									  </div>
								   </div>
								   </div> 	   
								</div>
							 </div>
						  </div>
						  <div class="row mt20">
							 <div class="col-12 col-md-4 col-xl-5 d-none d-md-block">
								<div class="andor-seperator mt16"></div>
							 </div>
							 <div class="col-12 col-md-4 col-xl-2 p0 text-center">
								<div class="switch-field">
								   <input type="radio" id="geo-and" name="geo" value="and" />
								   <label for="geo-and" class="switch_left">And</label>
								   <input type="radio" id="geo-or" name="geo" value="or" />
								   <label for="geo-or" class="switch_right">Or</label>
								</div>
							 </div>
							 <div class="col-12 col-md-4 col-xl-5 d-none d-md-block">
								<div class="andor-seperator mt16"></div>
							 </div>
						  </div>
					   </div>
					   <div class="col-12 col-md-12 segment-accordion mt10">
						  <div id="accordion" class="accordion">
							 <div class="card mb-0 f-16">
								<div class="card-header collapsed" data-toggle="collapse" href="#collapseUserAttributes">
								   <a class="card-title lato-font">&nbsp; User Attributes</a> 
								</div>
								 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define attributes of users for this segment." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
								<div id="collapseUserAttributes" class="collapse f-14">
								   <div class="card-body">
									  <div class="row smart-form">
									  <div class="col-12 col-md-6 col-lg-4">
										 <div class="form-group d-gblue-clr bs-h30">
											<select class="selectpicker">
											   <option>All of these must satisfy</option>
											   <option>Any of these must satisfy</option>
											</select>
										 </div>
									  </div>
									  <div class="col-12 col-md-2 col-lg-2 offset-0 offset-md-4 offset-lg-6 mb10 mb-md0">
										 <a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a>
									  </div>
								   </div>						   
								   <div class="row smart-form d-gblue-clr">
									  <div class="col-12 col-md-9">
										 <div class="row">
											<div class="col-12 col-md-6 col-lg-3">
											   <div class="form-group">
												  <select class="selectpicker" title="Select">
													 <option selected>Name</option>
													 <option>Birth Date</option>
													 <option>Phone</option>
													 <option>Gender</option>
													 <option>Email</option>
												  </select>
											   </div>
											</div>
											<div class="col-12 col-md-6 col-lg-4">
											   <div class="form-group d-gblue-clr d-flex">
												  <select class="selectpicker" title="Select">
													 <option>Starts with</option>
													 <option>does not start with</option>
													 <option>Ends with</option>
													 <option>does not end with</option>
													 <option>matches</option>
													 <option>does not matches</option>
													 <option>is equals to</option>
													 <option>does not equals to</option>
													 <option>contains</option>
													 <option>does not contains</option>
													 <option>contains a value</option>
													 <option>does not contains a value</option>
													 <option>is one of</option>
													 <option>is neither of</option>
												  </select>
											   </div>
											</div>
											<div class="col-12 col-md-12 col-lg-5 mb15 mb-lg0">
											   <input type="text" class="form-control" placeholder="Enter Value">
											</div>
										 </div>
									  </div>
									  <div class="col-12 col-md-3 p15 p-md0 pt0">
										 <a href="#" class="d-inline-block d-gblue-clr segment-delete mt15"><i class="icon-delete f-16"></i></a>
									  </div>
								   </div>
								   <div class="row smart-form d-gblue-clr">
									  <div class="col-12 col-md-9">
										 <div class="row">
											<div class="col-12 col-md-6 col-lg-3">
											   <div class="form-group">
												  <select class="selectpicker" title="Select">
													 <option selected>Name</option>
													 <option>Birth Date</option>
													 <option>Phone</option>
													 <option>Gender</option>
													 <option>Email</option>
												  </select>
											   </div>
											</div>
											<div class="col-12 col-md-6 col-lg-4">
											   <div class="form-group d-gblue-clr d-flex">
												  <select class="selectpicker" title="Select">
													 <option>after</option>
													 <option>before</option>
													 <option>within</option>
													 <option>present</option>
													 <option>not present</option>
												  </select>
											   </div>
											</div>
											<div class="col-12 col-md-12 col-lg-5">
											   <div class="form-group d-gblue-clr d-flex">
												  <select class="selectpicker" title="Last X Time to Y Time">
													 <option>date</option>
													 <option>last X time (Last 1 month)</option>
													 <option>next Y time (Next 1 month)</option>
													 <option>last X time to Y time</option>
													 <option>next X time to Y time</option>
													 <option>last X time to next Y time</option>
												  </select>
											   </div>
											</div>
										 </div>
									  </div>
									  <div class="col-12 col-md-3">
										
									  </div>
									  <div class="col-12 col-md-3 col-lg-2 d-flex d-gblue-clr mb15 mb-md0">
										 <div class="mt15 mr15">Last</div>
										 <input  type="text" class="form-control col-8">
									  </div>
									  <div class="col-12 col-md-6 col-lg-3">
										 <div class="form-group">
											<select class="selectpicker" title="Select an option">
											   <option>minutes</option>
											   <option>hours</option>
											   <option>days</option>
											   <option>weeks</option>
											   <option>months</option>
											   <option>years</option>
											</select>
										 </div>
									  </div>
									  <div class="col-12 col-md-5 col-lg-3 mb15 mb-md0">
										 <div class="row">
											<div class="col-6 mt15">To &nbsp; &nbsp; Next</div>
											<div class="col-6"><input  type="text" class="form-control"></div>
										 </div>
									  </div>
									  <div class="col-9 col-md-4 col-lg-3">
										 <div class="form-group">
											<select class="selectpicker" title="Select an option">
											   <option>minutes</option>
											   <option>hours</option>
											   <option>days</option>
											   <option>weeks</option>
											   <option>months</option>
											   <option>years</option>
											</select>
										 </div>
									  </div>
									  <div class="col-3 col-md-3 col-lg-1 p0 f-16 mt17">
										 <a href="#" class="d-gblue-clr"><i class="icon-refresh-final"></i></a>
										 <a href="#" class="d-inline-block d-gblue-clr segment-delete ml3"><i class="icon-delete f-16"></i></a>
										 <a href="#" class="d-gblue-clr segment-add ml3"><i class="icon-add-three"></i></a>
									  </div>
								   </div>
								   </div>	   
								</div>
							 </div>
						  </div>
						  <div class="row mt-md20 mt15">
							 <div class="col-12 col-md-4 col-xl-5 d-none d-md-block">
								<div class="andor-seperator mt16"></div>
							 </div>
							 <div class="col-12 col-md-4 col-xl-2 p0 text-center">
								<div class="switch-field">
								   <input type="radio" id="userattributes-and" name="userattributes" value="and" />
								   <label for="userattributes-and" class="switch_left">And</label>
								   <input type="radio" id="userattributes-or" name="userattributes" value="or" />
								   <label for="userattributes-or" class="switch_right">Or</label>
								</div>
							 </div>
							 <div class="col-12 col-md-4 col-xl-5 d-none d-md-block">
								<div class="andor-seperator mt16"></div>
							 </div>
						  </div>
					   </div>
					   <div class="col-12 col-md-12 segment-accordion mt-md20 mt15">
						  <div id="accordion" class="accordion">
							 <div class="card mb-0 f-16">
								<div class="card-header collapsed" data-toggle="collapse" href="#collapseSource">
								   <a class="card-title lato-font">&nbsp; Acquisition Source</a> 
								</div>
								 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define source of acquisition for this segment." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a>  
								<div id="collapseSource" class="collapse">
								   <div class="card-body">	
								   <div class="row smart-form">
									  <div class="col-12 col-md-9">
										 <div class="row">
											<div class="col-12 col-md-6">
											   <div class="form-group d-gblue-clr">
												  <select class="selectpicker" title="Refferal">
													 <option>Landing Page</option>
													 <option>Direct</option>
													 <option>Referral</option>
												  </select>
											   </div>
											</div>
											<div class="col-12 col-md-6">
											   <div class="form-group d-gblue-clr">
												  <select class="selectpicker" title="Referrer URL">
													 <option>equal to</option>
													 <option>not equal to</option>
													 <option>one of</option>
													 <option>none of</option>
													 <option>starts with</option>
													 <option>does not start with</option>
													 <option>ends with</option>
													 <option>does not end with</option>
													 <option>matches regex</option>
													 <option>does not match regex</option>
													 <option>contains</option>
													 <option>does not contain</option>
													 <option>is not empty</option>
													 <option>is empty</option>
												  </select>
											   </div>
											</div>
										 </div>
										 <div class="row">
											<div class="col-12 col-md-6">
											   <div class="form-group d-gblue-clr">
												  <select class="selectpicker" title="Landing Page">
													  <option>Landing Page</option>
													 <option>Direct</option>
													 <option>Referral</option>
												  </select>
											   </div>
											</div>
											<div class="col-12 col-md-6">
											   <div class="form-group d-gblue-clr">
												  <select class="selectpicker" title="Referrer URL">
													 <option>equal to</option>
													 <option>not equal to</option>
													 <option>one of</option>
													 <option>none of</option>
													 <option>starts with</option>
													 <option>does not start with</option>
													 <option>ends with</option>
													 <option>does not end with</option>
													 <option>matches regex</option>
													 <option>does not match regex</option>
													 <option>contains</option>
													 <option>does not contain</option>
													 <option>is not empty</option>
													 <option>is empty</option>
												  </select>
											   </div>
											</div>
										 </div>
									  </div>
									  <div class="col-12 col-md-3 mb10 mb-md0"><a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a></div>
									  <div class="col-9 col-md-9">
										 <input  type="text" class="form-control" placeholder="Enter the value">
									  </div>
									  <div class="col-3 col-md-3 mt17 f-16 p0">
										 <a href="#" class="d-gblue-clr"><i class="icon-refresh-final"></i></a>
										 &nbsp; <a href="#" class="d-inline-block d-gblue-clr segment-delete"><i class="icon-delete f-16"></i></a>
										 &nbsp; <a href="#" class="d-gblue-clr segment-add"><i class="icon-add-three"></i></a>
									  </div>
								   </div>
								   </div>	   
								</div>
							 </div>
						  </div>
					   </div>
					   <div class="col-12 f-18 w400 mt-md30 mt15">Behaviour</div>
					   <div class="col-12 col-md-12 segment-accordion mt-md20 mt15">
						  <div id="accordion" class="accordion">
							 <div class="card mb-0 f-16">
								<div class="card-header collapsed" data-toggle="collapse" href="#collapseEvents">
								   <a class="card-title lato-font">&nbsp; Users Who Did These Events</a> 
								</div>
								<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define specific events performed by users for this segment." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
								<div id="collapseEvents" class="collapse">
								   <div class="card-body">	
								   <div class="row smart-form">
									  <div class="col-12 col-md-9">
										 <div class="row">
											<div class="col-12 col-md-6">
											   <div class="form-group d-gblue-clr">
												  <select class="selectpicker" title="Select an event">
													 <option>Visited Website URL</option>
													 <option>Referral URL</option>
													 <option>Time spent on the page</option>
													 <option>Number of the page visited</option>
												  </select>
											   </div>
											</div>
											<div class="col-12 col-md-6">
											   <div class="form-group d-gblue-clr">
												  <select class="selectpicker" title="select a value">
													 <option>Starts with</option>
													 <option>does not start with</option>
													 <option>Ends with</option>
													 <option>does not end with</option>
													 <option>matches</option>
													 <option>does not matches</option>
													 <option>is equals to</option>
													 <option>does not equals to</option>
													 <option>contains</option>
													 <option>does not contains</option>
													 <option>contains a value</option>
													 <option>does not contains a value</option>
													 <option>is one of</option>
													 <option>is neither of</option>
												  </select>
											   </div>
											</div>
										 </div>
									  </div>
									  <div class="col-12 col-md-3 mb10 mb-md0"><a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a></div>
									  <div class="col-11 col-md-9">
										 <input  type="text" class="form-control" placeholder="Enter the value">
									  </div>
									  <div class="col-1 col-md-3 mt15 p0">
										 <a href="#" class="d-gblue-clr segment-delete f-16"><i class="icon-delete"></i></a>
									  </div>
								   </div>
								   <div class="row mt20">
									  <div class="col-12 col-md-4 col-xl-5 d-none d-md-block pl0">
										 <div class="andor-seperator mt16"></div>
									  </div>
									  <div class="col-12 col-md-4 col-xl-2 p0 text-center">
										 <div class="switch-field">
											<input type="radio" id="events-case-and" name="events-case" value="and" />
											<label for="events-case-and" class="switch_left">And</label>
											<input type="radio" id="events-case-or" name="events-case" value="or" />
											<label for="events-case-or" class="switch_right">Or</label>
										 </div>
									  </div>
									  <div class="col-12 col-md-4 col-xl-5 d-none d-md-block pr0">
										 <div class="andor-seperator mt16"></div>
									  </div>
								   </div>
								   <div class="row smart-form mt10">
									  <div class="col-12 col-md-9">
										 <div class="row">
											<div class="col-12 col-md-6">
											   <div class="form-group d-gblue-clr">
												  <select class="selectpicker" title="Select an event">
													 <option>Visited Website URL</option>
													 <option>Referral URL</option>
													 <option>Time spent on the page</option>
													 <option>Number of the page visited</option>
												  </select>
											   </div>
											</div>
											<div class="col-12 col-md-6">
											   <div class="form-group d-gblue-clr">
												  <select class="selectpicker" title="select a value">
													 <option>is equals to</option>
													 <option>is not equals to</option>
													 <option>greater than</option>
													 <option>less than</option>
													 <option>is greater than and equals to</option>
													 <option>is less than and equals to</option>
													 <option>between</option>
													 <option>not between</option>
												  </select>
											   </div>
											</div>
										 </div>
									  </div>
									  <div class="col-12 col-md-3 mb10 mb-md0"><a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a></div>
									  <div class="col-9 col-md-9">
										 <input type="text" class="form-control" placeholder="Enter the value">
									  </div>
									  <div class="col-3 col-md-3 mt15 f-16 p0">
										 <a href="#" class="d-gblue-clr segment-delete"><i class="icon-delete"></i></a>
										 &nbsp; <a href="#" class="d-gblue-clr segment-add"><i class="icon-add-three"></i></a>
									  </div>
								   </div>
								   </div>
								</div>
							 </div>
						  </div>
						  <div class="row mt-md20 mt15">
							 <div class="col-12 col-md-4 col-xl-5 d-none d-md-block">
								<div class="andor-seperator mt16"></div>
							 </div>
							 <div class="col-12 col-md-4 col-xl-2 p0 text-center">
								<div class="switch-field">
								   <input type="radio" id="events-and" name="events" value="and" />
								   <label for="events-and" class="switch_left">And</label>
								   <input type="radio" id="events-or" name="events" value="or" />
								   <label for="events-or" class="switch_right">Or</label>
								</div>
							 </div>
							 <div class="col-12 col-md-4 col-xl-5 d-none d-md-block">
								<div class="andor-seperator mt16"></div>
							 </div>
						  </div>
					   </div>
					   <div class="col-12 col-md-12 segment-accordion mt10">
						  <div id="accordion" class="accordion">
							 <div class="card mb-0 f-16">
								<div class="card-header collapsed" data-toggle="collapse" href="#collapseNotEvents">
								   <a class="card-title lato-font">&nbsp; Users Who Did Not Do These Events</a> 
								</div>
								 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define specific events did not perform by users for this segment." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
								<div id="collapseNotEvents" class="collapse">
								   <div class="card-body">	 
								   <div class="row smart-form">
									  <div class="col-12 col-md-9">
										 <div class="row">
											<div class="col-12 col-md-6">
											   <div class="form-group d-gblue-clr">
												  <select class="selectpicker" title="Select an event">
													 <option>Visited Website URL</option>
													 <option>Referral URL</option>
													 <option>Time spent on the page</option>
													 <option>Number of the page visited</option>
												  </select>
											   </div>
											</div>
											<div class="col-12 col-md-6">
											   <div class="form-group d-gblue-clr">
												  <select class="selectpicker" title="select a value">
													 <option>Starts with</option>
													 <option>does not start with</option>
													 <option>Ends with</option>
													 <option>does not end with</option>
													 <option>matches</option>
													 <option>does not matches</option>
													 <option>is equals to</option>
													 <option>does not equals to</option>
													 <option>contains</option>
													 <option>does not contains</option>
													 <option>contains a value</option>
													 <option>does not contains a value</option>
													 <option>is one of</option>
													 <option>is neither of</option>
												  </select>
											   </div>
											</div>
										 </div>
									  </div>
									  <div class="col-12 col-md-3 mb10 mb-md0"><a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a></div>
									  <div class="col-11 col-md-9">
										 <input  type="text" class="form-control" placeholder="Enter the value">
									  </div>
									  <div class="col-1 col-md-3 mt15 p0">
										 <a href="#" class="d-gblue-clr segment-add f-16"><i class="icon-add-three"></i></a>
									  </div>
								   </div>
								   </div>	   
								</div>
							 </div>
						  </div>
					   </div>
					   <div class="col-12 f-18 w400 mt-md30 mt15">Technology</div>
					   <div class="col-12 col-md-12 segment-accordion mt-md20 mt15">
						  <div id="accordion" class="accordion">
							 <div class="card mb-0 f-16">
								<div class="card-header collapsed" data-toggle="collapse" href="#collapseDevice">
								   <a class="card-title lato-font">&nbsp; Device</a> 
								</div>
								 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define devices used by users for this segment." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
								<div id="collapseDevice" class="collapse">
								   <div class="card-body">	
								   <div class="row smart-form">
									  <div class="col-12 col-md-9">
										<div class="row">
										<div class="col-12 col-md-12 col-lg-6">
										<div class="form-group mb-lg20 d-gblue-clr bs-h30">
										<select class="selectpicker">
										<option>One of these must satisfy</option>
										<option>Neither of these must satisfy</option>
										</select>
										</div>
										</div>
										</div>
										 <div class="row">
											<div class="col-xl-4 col-lg-6 col-12 pl20">
											   <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
												  <input id="DesktopLaptop" type="checkbox">
												  <label for="DesktopLaptop">Desktop / Laptop</label>
											   </div>
											</div>
											<div class="col-xl-4 col-lg-6 col-12 pl20">
											   <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
												  <input id="Tablet" type="checkbox">
												  <label for="Tablet">Tablet</label>
											   </div>
											</div>
											<div class="col-xl-4 col-lg-6 col-12 pl20">
											   <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
												  <input id="AndroidPhone" type="checkbox">
												  <label for="AndroidPhone">Android Phone</label>
											   </div>
											</div>
											<div class="col-xl-4 col-lg-6 col-12 pl20">
											   <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
												  <input id="iPhone" type="checkbox">
												  <label for="iPhone">iPhone</label>
											   </div>
											</div>
											<div class="col-xl-4 col-lg-6 col-12 pl20">
											   <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
												  <input id="iPad" type="checkbox">
												  <label for="iPad">iPad</label>
											   </div>
											</div>
											<div class="col-xl-4 col-lg-6 col-12 pl20">
											   <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
												  <input id="OtherMobile" type="checkbox">
												  <label for="OtherMobile">Other Mobile</label>
											   </div>
											</div>
										 </div>
									  </div>
									  <div class="col-12 col-md-3"><a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a></div>
								   </div>
								   </div>	   
								</div>
							 </div>
						  </div>
						  <div class="row mt-md20 mt15">
							 <div class="col-12 col-md-4 col-xl-5 d-none d-md-block">
								<div class="andor-seperator mt16"></div>
							 </div>
							 <div class="col-12 col-md-4 col-xl-2 p0 text-center">
								<div class="switch-field">
								   <input type="radio" id="device-and" name="device" value="and" />
								   <label for="device-and" class="switch_left">And</label>
								   <input type="radio" id="device-or" name="device" value="or" />
								   <label for="device-or" class="switch_right">Or</label>
								</div>
							 </div>
							 <div class="col-12 col-md-4 col-xl-5 d-none d-md-block">
								<div class="andor-seperator mt16"></div>
							 </div>
						  </div>
					   </div>
					   <div class="col-12 col-md-12 segment-accordion mt10">
						  <div id="accordion" class="accordion">
							 <div class="card mb-0 f-16">
								<div class="card-header collapsed" data-toggle="collapse" href="#collapseBrowser">
								   <a class="card-title lato-font">&nbsp; Browser</a> 
								</div>
								<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define browsers used by users for this segment." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a>  
								<div id="collapseBrowser" class="collapse">
								   <div class="card-body">
									<div class="row smart-form">
									  <div class="col-12 col-md-9">
										<div class="row">
										<div class="col-12 col-md-12 col-lg-6">
										<div class="form-group mb-lg20 d-gblue-clr bs-h30">
										<select class="selectpicker">
										<option>One of these must satisfy</option>
										<option>Neither of these must satisfy</option>
										</select>
										</div>
										</div>
										</div>
										 <div class="row">
											<div class="col-xl-4 col-lg-6 col-12 pl20">
											   <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
												  <input id="Chromeckbox" type="checkbox">
												  <label for="Chromeckbox">Chrome</label>
											   </div>
											</div>
											<div class="col-xl-4 col-lg-6 col-12 pl20">
											   <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
												  <input id="Firefox2" type="checkbox">
												  <label for="Firefox2">Firefox</label>
											   </div>
											</div>
											<div class="col-xl-4 col-lg-6 col-12 pl20">
											   <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
												  <input id="Edge" type="checkbox">
												  <label for="Edge">Edge</label>
											   </div>
											</div>
											<div class="col-xl-4 col-lg-6 col-12 pl20">
											   <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
												  <input id="Safari" type="checkbox">
												  <label for="Safari">Safari</label>
											   </div>
											</div>
											<div class="col-xl-4 col-lg-6 col-12 pl20">
											   <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
												  <input id="Opera" type="checkbox">
												  <label for="Opera">Opera</label>
											   </div>
											</div>
											<div class="col-xl-4 col-lg-6 col-12 pl20">
											   <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
												  <input id="OtherBrowser" type="checkbox">
												  <label for="OtherBrowser">Others</label>
											   </div>
											</div>
										 </div>
									  </div>
									  <div class="col-12 col-md-3"><a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a></div>
								   </div>
								   
								   </div>	   
								</div>
							 </div>
						  </div>
						  <div class="row mt-md20 mt15">
							 <div class="col-12 col-md-4 col-xl-5 d-none d-md-block">
								<div class="andor-seperator mt16"></div>
							 </div>
							 <div class="col-12 col-md-4 col-xl-2 p0 text-center">
								<div class="switch-field">
								   <input type="radio" id="browser-and" name="browser" value="and"/>
								   <label for="browser-and" class="switch_left">And</label>
								   <input type="radio" id="browser-or" name="browser" value="or"/>
								   <label for="browser-or" class="switch_right">Or</label>
								</div>
							 </div>
							 <div class="col-12 col-md-4 col-xl-5 d-none d-md-block">
								<div class="andor-seperator mt16"></div>
							 </div>
						  </div>
					   </div>
					   <div class="col-12 col-md-12 segment-accordion mt10">
						  <div id="accordion" class="accordion">
							 <div class="card mb-0 f-16">
								<div class="card-header collapsed" data-toggle="collapse" href="#collapseOS">
								   <a class="card-title lato-font">&nbsp; Operating System</a> 
								</div>
								 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define the OS used by users for this segment." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a>  
								<div id="collapseOS" class="collapse">
								   <div class="card-body">	
								  <div class="row smart-form">
									  <div class="col-12 col-md-9">
										<div class="row">
										<div class="col-12 col-md-12 col-lg-6">
										<div class="form-group mb-lg20 d-gblue-clr bs-h30">
										<select class="selectpicker">
										<option>One of these must satisfy</option>
										<option>Neither of these must satisfy</option>
										</select>
										</div>
										</div>
										</div>
										 <div class="row">
											<div class="col-xl-4 col-lg-6 col-12 pl20">
											   <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
												  <input id="Android3" type="checkbox">
												  <label for="Android3">Android</label>
											   </div>
											</div>
											<div class="col-xl-4 col-lg-6 col-12 pl20">
											   <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
												  <input id="Macintosh" type="checkbox">
												  <label for="Macintosh">Macintosh</label>
											   </div>
											</div>
											<div class="col-xl-4 col-lg-6 col-12 pl20">
											   <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
												  <input id="Windows" type="checkbox">
												  <label for="Windows">Windows</label>
											   </div>
											</div>
											<div class="col-xl-4 col-lg-6 col-12 pl20">
											   <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
												  <input id="Linux" type="checkbox">
												  <label for="Linux">Linux</label>
											   </div>
											</div>
											<div class="col-xl-4 col-lg-6 col-12 pl20">
											   <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
												  <input id="ios" type="checkbox">
												  <label for="ios">ios</label>
											   </div>
											</div>
											<div class="col-xl-4 col-lg-6 col-12 pl20">
											   <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
												  <input id="Otheros" type="checkbox">
												  <label for="Otheros">Others</label>
											   </div>
											</div>
										 </div>
									  </div>
									  <div class="col-12 col-md-3"><a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a></div>
								   </div> </div>	   
								</div>
							 </div>
						  </div>
					   </div>
					</div>
				 </div>
				
			  </div>
				
				<!-- Edit Visitors/Users Section End -->
			</div>
			<div class="p15 p-md30 custom-modal-foooter text-right border-top-0">
				<a href="javascript:void(0)" class="base-btn default-btn f-14 mr5" data-dismiss="modal">Cancel</a>
				<a href="#" class="base-btn blue-btn f-14">Save</a>
			</div>
		</div>
	</div>
</div>

<!-- web notification campaign Send Option (Design Selection) pop_up -->
<div class="modal automation-right-modal fade" id="webNotificationModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content" id="notification-design-scroll">
			<div class="crosspos text-right"><a href="#" class="crossicon" data-dismiss="modal"><span>Close this pop-up</span><i class="icon-cross"></i></a></div>
			<div class="p15 p-md30 smart-form">
				<div class="w500 f-md-18 f-16 mt10 mb15 mb-md25">Choose the web notification campaign</div>
				<!------- Step Wizard Div Start----------->
				<div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md30">
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span>1</span></div>
					<div class="title align-self-center">Design Selection</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span> 2</span></div>
					<div class="title align-self-center">Editor</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span>3</span></div>
					<div class="title align-self-center">Sending Option</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				</div>
				<!------- Step Wizard Div End----------->	
				
				<!---------Design Section Start---------->
				<div class="row">
					<div class="col-md-4 col-lg-3 col-xl-2 pr-lg8">
						<div class="nav flex-column nav-pills ui-vertical-tab f-16 w400 design-side-tab">
							<a class="nav-link active" href="#webFromGallery" role="tab" data-toggle="tab"><i class="icon-gallery"></i>From Gallery</a>
							<a class="nav-link" href="#webYourCreation" role="tab" data-toggle="tab"><i class="icon-your-creation"></i>Your Creation</a>
							<a class="nav-link" href="#webCreateYourOwn" role="tab" data-toggle="tab"><i class="icon-create-your-own"></i>Create Your Own </a>
					
						</div>
					</div>
					<div class="col-md-8 col-lg-9 col-xl-10 tab-content">		
						<!----- Tab Section Start---------->
						<div class="tab-pane fade show active" role="tabpanel" id="webFromGallery">
							<!----- Filteration Div Start---------->
							<div class="col-12 p0 sticky-design-filter mb15 mb-md30">
							<div class="row bs-h40">
								<div class="col-lg-8 col-xl-9">
									<div class="d-flex justify-content-start flex-wrap row bs-h40">
										<div class="col-12 col-md-6 col-xl-3 mt15 mt-md0">
											<select class="selectpicker f-16 " title="All">
												<option>All</option>
												<option>Most Converted</option>
												<option>Brand New</option>
											</select>
										 </div>
									   <div class="col-12 col-md-6 col-xl-3 mt15 mt-md0">
											<select class="selectpicker f-16" title="All Position">
												<option>Bar (Footer)</option>
												<option>Bar (Header)</option>
												<option>Light Box</option>
												<option>Popup Box</option>
												<option>Splash</option>
											</select>
										</div>
										<div class="col-12 col-md-6 col-xl-3 mt15 mt-xl0">
											<select class="selectpicker f-16" title="All Use Cases">
												<option>Lead Generation</option>
												<option>Promotional</option>
												<option>Social Sharing</option>
											</select>
										</div>
										<div class="col-12 col-md-6 col-xl-3 mt15 mt-xl0">
											<select class="selectpicker f-16" title="All Industry">
												<option>All Industry 1</option>
												<option>All Industry 2</option>
												<option>All Industry 3</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-xl-3">
									<div class="smart-search-field mt15 mt-lg0">
										<div class="input-group">
											<input class="form-control" placeholder="Search" type="text">
											<div class="input-group-append">
												<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
											</div>
										</div>
									</div>
								</div>
							</div>
							</div>
							<!----- Filteration Div End---------->
					
							<!----- Template List section------->
							<div class="row">
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<a href="#" class="design-gallery-grid recent-active-template p15">
									  <img src="images/plain-text-image.png" class="img-fluid d-block mx-auto">
									  <!---- Checked icon Div ---->
									  <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										 <i class="icon-tick white-clr f-11"></i>
									  </div>
								   </a>
								   <div class="d-flex mt10">
									  <div class="f-14 w400 align-self-center">
										Plain Template
									  </div>
								   </div>
								</div>
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10">
										<div class="f-14 w400 align-self-center">Template Name
										<p class="f-10 d-gblue-clr mt4">Uploaded on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
								<div class="d-flex justify-content-between mt10">
										<div class="f-14 w400 align-self-center">Template Name
										<p class="f-10 d-gblue-clr mt4">Uploaded on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
								<div class="d-flex justify-content-between mt10">
										<div class="f-14 w400 align-self-center">Template Name
										<p class="f-10 d-gblue-clr mt4">Uploaded on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
								<div class="d-flex justify-content-between mt10">
										<div class="f-14 w400 align-self-center">Template Name
										<p class="f-10 d-gblue-clr mt4">Uploaded on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
								<div class="d-flex justify-content-between mt10">
										<div class="f-14 w400 align-self-center">Template Name
										<p class="f-10 d-gblue-clr mt4">Uploaded on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
							<!----- Pagination Div Start----->
							<div class="col-12 d-flex justify-content-between flex-wrap f-14 mt15 mt-md30">
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
									 <li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i> </a>
									 </li>
									 <li><a href="#">1</a>
									 </li>
									 <li><a href="#">2</a>
									 </li>
									 <li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </a>
									 </li>
									 <li><a href="#" class="active">6</a>
									 </li>
									 <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> </a>
									 </li>
								  </ul>
							   </div>
							</div>
							<!----- Pagination Div End----->
							</div>
							<!----- Template List section end------->
						</div>
						<div class="tab-pane fade" role="tabpanel" id="webYourCreation">
							<!----- Filteration Div Start---------->
							<div class="col-12 p0 sticky-design-filter mb15 mb-md30">
							<div class="row bs-h40">
								<div class="col-lg-8 col-xl-9">
									<div class="d-flex justify-content-start flex-wrap row bs-h40">
										<div class="col-12 col-md-6 col-xl-3 mt15 mt-md0">
											<select class="selectpicker f-16 " title="All">
												<option>All</option>
												<option>Most Converted</option>
												<option>Brand New</option>
											</select>
										 </div>
									   <div class="col-12 col-md-6 col-xl-3 mt15 mt-md0">
											<select class="selectpicker f-16" title="All Position">
												<option>Bar (Footer)</option>
												<option>Bar (Header)</option>
												<option>Light Box</option>
												<option>Popup Box</option>
												<option>Splash</option>
											</select>
										</div>
										<div class="col-12 col-md-6 col-xl-3 mt15 mt-xl0">
											<select class="selectpicker f-16" title="All Use Cases">
												<option>Lead Generation</option>
												<option>Promotional</option>
												<option>Social Sharing</option>
											</select>
										</div>
										<div class="col-12 col-md-6 col-xl-3 mt15 mt-xl0">
											<select class="selectpicker f-16" title="All Industry">
												<option>All Industry 1</option>
												<option>All Industry 2</option>
												<option>All Industry 3</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-xl-3">
									<div class="smart-search-field mt15 mt-lg0">
										<div class="input-group">
											<input class="form-control" placeholder="Search" type="text">
											<div class="input-group-append">
												<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
											</div>
										</div>
									</div>
								</div>
							</div>
							</div>
							<!----- Filteration Div End---------->
							
							<!----- Template List section------->	
								<div class="row">
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid recent-active-template p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
								
								<!----- Pagination Div Start----->
								<div class="col-12 d-flex justify-content-between flex-wrap f-14 mt15 mt-md30">
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
										 <li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i> </a>
										 </li>
										 <li><a href="#">1</a>
										 </li>
										 <li><a href="#">2</a>
										 </li>
										 <li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </a>
										 </li>
										 <li><a href="#" class="active">6</a>
										 </li>
										 <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> </a>
										 </li>
									  </ul>
								   </div>
								</div>
								<!----- Pagination Div End----->
					
							</div>
	
							<!----- Template List section end------->
						</div>
						<div class="tab-pane fade mt15 mt-md0" role="tabpanel" id="webCreateYourOwn">
							<div class="l-gblue-border p15 p-md50">
								<img src="images/create-your-own-img.png" class="img-fluid d-block mx-auto">
								<div class="text-center mt15 mt-md40">
									<a href="#" class="base-btn blue-btn f-16">Start From Scratch</a>
								</div>
							</div>
						</div>
						<!----- Tab Section End---------->
					</div>
				</div>
				<!---------Design Section End---------->
			</div>
		</div>
	</div>
</div>

<!-- Choose the web notification campaign modal Pop_up -->
<div class="modal automation-right-modal fade" id="CampaignModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="crosspos text-right"><a href="#" class="crossicon" data-dismiss="modal"><span>Close this pop-up</span><i class="icon-cross"></i></a></div>
            <div class="p15 p-md30 smart-form">
                <div class="row mt5 mt-md8">
                    <div class="col-12 col-md-7 col-lg-7">
                        <div class="f-md-18 f-16 w500">Choose the web notification campaign</div>
                    </div>
                    <div class="col-12 col-md-5 col-lg-5 text-center text-md-right mt10 mt-md0 f-16 w400">
                        <a href="javascript:void(0)" class="base-btn blue-btn" data-toggle="modal" data-target="#AddCampaignModal"><i class="icon-add-new f-18 align-middle"></i>&nbsp;&nbsp; New Campaign</a>
                    </div>
                </div>
                <!-- Nav tabs -->
                <ul class="nav tabs-style1 f-14 f-sm-16 mt20 mt-md0" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" data-target="#CampaignSent">Active</a> </li>
                   <li class="nav-item"> <a class="nav-link" data-toggle="tab" data-target="#CampaignDraft">Draft</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" data-target="#CampaignSchedule">Schedule</a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="CampaignSent" class="tab-pane active px0">
                        <!--- Filteration Div ---->
                        <div class="row mb15 mb-md30 relative min-h-40 mt-md30 mt-15 p0">
                            <!----- Table Option Div end---->
                            <div class="col-md-5 col-lg-5 col-xl-5 align-items-center mb-md0 mb15">
                                <div class="d-flex flex-wrap">
                                    <span class="bs-h40 table-option-hide col-12 col-12 col-md-10 col-lg-9 col-xl-8 px0 mt15 mt-md0">
										<select class="selectpicker f-14" title="All campaigns (1000)">
										  <option>All campaigns (1000)</option>
										  <option>Recently added campaigns (10)</option>
										  <option>Recently modified campaigns (15)</option>
										  <option>campaigns added in last 07 days (10)</option>
										  <option>campaigns added in last 30 days (10)</option>
										</select>
									</span>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-7 col-xl-7 smart-form table-option-hide pl-xl0">
                                <div class="row">

                                    <div class="col-md-4 col-lg-4 col-xl-4">
                                    </div>

                                    <div class="col-md-5 col-lg-5 col-xl-5 mb15 mb-md0">
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
                                            <div class="col-3 col-md-3 col-lg-4 d-flex align-self-center f-14 d-md-none d-lg-block">Show</div>
                                            <div class="col-9 col-md-12 col-lg-8 bs-h40">
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
                        <!------- Block Section----->
                        <div class="row mCustomScrollbar hautobox" data-mcs-theme="inset-3">
                            <div class="col-12 col-md-12 col-lg-8 order-2 order-lg-1 t-wauto tw-100 transition-all">
                                <div class="col-12 project-list-view-border p0 auto-img">
                                    <div class="project-list-view p15 p-md20">
                                        <div class="row">
                                            <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                                                <div class="media">

                                                    <div class="media-body ml5">
                                                        <div class="hover-img d-flex align-items-center">
                                                            <img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-9 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
                                                <div class="row hide-edit-show no-gutters w-100">
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
                                                        <div class="d-flex align-items-center">
                                                            <div class="f-20 f-md-24 w400 text-ellipsis">Campaign Title</div>
                                                        </div>
                                                        <div class="f-14 d-gblue-clr my10 my-md10">
                                                            <p class="lh150"> Type: Web </p>
                                                            <p class="lh150"><span>Start Date Nov 18, 2017 at 4:08 PM</span>
                                                                <br>
                                                                <span>End Date Dec 18, 2018 at 4:08 PM</span></p>
                                                        </div>
                                                        <div class="mt15 f-14">Project Name : project 1</div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
                                                        <div class="col-12 text-md-right p0">
                                                            <div class="f-14 lh140 d-green-clr w500">Unique Viewers : 200</div>
                                                        </div>
                                                        <!------ Button------>
                                                        <div class="col-12 text-md-right p0 align-self-end">
                                                            <ul class="list-inline w400 mb0">
                                                                <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
                                                                </li>
                                                                <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
                                                                </li>
																 <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
																 </li>	
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-list-view p15 p-md20">
                                        <div class="row">
                                            <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                                                <div class="media">
                                                    <div class="media-body ml5">
                                                        <div class="hover-img d-flex align-items-center">
                                                            <img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-9 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
                                                <div class="row hide-edit-show no-gutters w-100">
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
                                                        <div class="d-flex align-items-center">
                                                            <div class="f-20 f-md-24 w400 text-ellipsis">Campaign Title</div>
                                                        </div>
                                                        <div class="f-14 d-gblue-clr my10 my-md10">
                                                            <p class="lh150"> Type: Web </p>
                                                            <p class="lh150"><span>Start Date Nov 18, 2017 at 4:08 PM</span>
                                                                <br>
                                                                <span>End Date Dec 18, 2018 at 4:08 PM</span></p>
                                                        </div>
                                                        <div class="mt15 f-14">Project Name : project 2</div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
                                                        <div class="col-12 text-md-right p0">
                                                            <div class="f-14 lh140 d-green-clr w500">Unique Viewers : 200</div>
                                                        </div>
                                                        <!------ Button------>
                                                        <div class="col-12 text-md-right p0 align-self-end">
                                                            <ul class="list-inline w400 mb0">

                                                                <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
                                                                </li>
                                                                <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
                                                                </li>
																<li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
																 </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-list-view p15 p-md20">
                                        <div class="row">
                                            <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                                                <div class="media">
                                                    <div class="media-body ml5">
                                                        <div class="hover-img d-flex align-items-center">
                                                            <img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-9 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
                                                <div class="row hide-edit-show no-gutters w-100">
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
                                                        <div class="d-flex align-items-center">
                                                            <div class="f-20 f-md-24 w400 text-ellipsis">Campaign Title</div>
                                                        </div>
                                                        <div class="f-14 d-gblue-clr my10 my-md10">
                                                            <p class="lh150"> Type: Web </p>
                                                            <p class="lh150"><span>Start Date Nov 18, 2017 at 4:08 PM</span>
                                                                <br>
                                                                <span>End Date Dec 18, 2018 at 4:08 PM</span></p>
                                                        </div>
                                                        <div class="mt15 f-14">Project Name : project 3</div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
                                                        <div class="col-12 text-md-right p0">
                                                            <div class="f-14 lh140 d-green-clr w500">Unique Viewers : 200</div>
                                                        </div>
                                                        <!------ Button------>
                                                        <div class="col-12 text-md-right p0 align-self-end">
                                                            <ul class="list-inline w400 mb0">

                                                                <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
                                                                </li>
                                                                <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
                                                                </li>
																<li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
																 </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
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
                                            <li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i> </a>
                                            </li>
                                            <li><a href="#">1</a>
                                            </li>
                                            <li><a href="#">2</a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </a>
                                            </li>
                                            <li><a href="#" class="active">6</a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!----- Pagination Div End----->
                            </div>
                        </div>
                    </div>
                   <div id="CampaignDraft" class="tab-pane fade">
                        <div class="row mb15 mb-md30 relative min-h-40 mt-md30 mt-15 p0">
                            <div class="col-md-5 col-lg-5 col-xl-5 align-items-center mb-md0 mb15">
                                <div class="d-flex flex-wrap">
                                    <span class="bs-h40 table-option-hide col-12 col-12 col-md-10 col-lg-9 col-xl-8 px0 mt15 mt-md0">
										<select class="selectpicker f-14" title="All campaigns (1000)">
										  <option>All campaigns (1000)</option>
										  <option>Recently added campaigns (10)</option>
										  <option>Recently modified campaigns (15)</option>
										  <option>campaigns added in last 07 days (10)</option>
										  <option>campaigns added in last 30 days (10)</option>
										</select>
									</span>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-7 col-xl-7 smart-form table-option-hide pl-xl0">
                                <div class="row">
                                    <div class="col-md-4 col-lg-4 col-xl-4">
                                    </div>
                                    <div class="col-md-5 col-lg-5 col-xl-5 mb15 mb-md0">
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
                                            <div class="col-3 col-md-3 col-lg-4 d-flex align-self-center f-14 d-md-none d-lg-block">Show</div>
                                            <div class="col-9 col-md-12 col-lg-8 bs-h40">
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
                        <div class="row mCustomScrollbar hautobox" data-mcs-theme="inset-3">
                            <div class="col-12 col-md-12 col-lg-8 order-2 order-lg-1 t-wauto tw-100 transition-all">
                                <div class="col-12 project-list-view-border p0 auto-img">
                                    <div class="project-list-view p15 p-md20">
                                        <div class="row">
                                            <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                                                <div class="media">

                                                    <div class="media-body ml5">
                                                        <div class="hover-img d-flex align-items-center">
                                                            <img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-9 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
                                                <div class="row hide-edit-show no-gutters w-100">
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
                                                        <div class="d-flex align-items-center">
                                                            <div class="f-20 f-md-24 w400 text-ellipsis">Campaign Title</div>

                                                        </div>
                                                        <div class="f-14 d-gblue-clr my10 my-md10">
                                                            <p class="lh150"> Type: Web </p>
                                                            <p class="lh150"><span>Start Date Nov 18, 2017 at 4:08 PM</span>
                                                                <br>
                                                                <span>End Date Dec 18, 2018 at 4:08 PM</span></p>
                                                        </div>
                                                        <div class="mt15 f-14">Project Name : project 1</div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
                                                        <div class="col-12 text-md-right p0">
                                                            <div class="f-14 lh140 d-green-clr w500">Unique Viewers : 200</div>
                                                        </div>
                                                        <div class="col-12 text-md-right p0 align-self-end">
                                                            <ul class="list-inline w400 mb0">

                                                                <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
                                                                </li>
                                                                <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
                                                                </li>
																<li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
																 </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-list-view p15 p-md20">
                                        <div class="row">
                                            <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                                                <div class="media">

                                                    <div class="media-body ml5">
                                                        <div class="hover-img d-flex align-items-center">
                                                            <img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-9 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
                                                <div class="row hide-edit-show no-gutters w-100">
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
                                                        <div class="d-flex align-items-center">
                                                            <div class="f-20 f-md-24 w400 text-ellipsis">Campaign Title</div>

                                                        </div>
                                                        <div class="f-14 d-gblue-clr my10 my-md10">
                                                            <p class="lh150"> Type: Web </p>
                                                            <p class="lh150"><span>Start Date Nov 18, 2017 at 4:08 PM</span>
                                                                <br>
                                                                <span>End Date Dec 18, 2018 at 4:08 PM</span></p>
                                                        </div>
                                                        <div class="mt15 f-14">Project Name : project 2</div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
                                                        <div class="col-12 text-md-right p0">
                                                            <div class="f-14 lh140 d-green-clr w500">Unique Viewers : 200</div>
                                                        </div>
                                                        <div class="col-12 text-md-right p0 align-self-end">
                                                            <ul class="list-inline w400 mb0">

                                                                <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
                                                                </li>
                                                                <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
                                                                </li>
																<li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
																 </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-list-view p15 p-md20">
                                        <div class="row">
                                            <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                                                <div class="media">

                                                    <div class="media-body ml5">
                                                        <div class="hover-img d-flex align-items-center">
                                                            <img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-9 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
                                                <div class="row hide-edit-show no-gutters w-100">
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
                                                        <div class="d-flex align-items-center">
                                                            <div class="f-20 f-md-24 w400 text-ellipsis">Campaign Title</div>

                                                        </div>
                                                        <div class="f-14 d-gblue-clr my10 my-md10">
                                                            <p class="lh150"> Type: Web </p>
                                                            <p class="lh150"><span>Start Date Nov 18, 2017 at 4:08 PM</span>
                                                                <br>
                                                                <span>End Date Dec 18, 2018 at 4:08 PM</span></p>
                                                        </div>
                                                        <div class="mt15 f-14">Project Name : project 3</div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
                                                        <div class="col-12 text-md-right p0">
                                                            <div class="f-14 lh140 d-green-clr w500">Unique Viewers : 200</div>
                                                        </div>
                                                        <div class="col-12 text-md-right p0 align-self-end">
                                                            <ul class="list-inline w400 mb0">

                                                                <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
                                                                </li>
                                                                <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
                                                                </li>
																<li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
																 </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                            <li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i> </a>
                                            </li>
                                            <li><a href="#">1</a>
                                            </li>
                                            <li><a href="#">2</a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </a>
                                            </li>
                                            <li><a href="#" class="active">6</a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="CampaignSchedule" class="tab-pane fade">
                        <!--- Filteration Div ---->
                        <div class="row mb15 mb-md30 relative min-h-40 mt-md30 mt-15 p0">
                            <!----- Table Option Div end---->
                            <div class="col-md-5 col-lg-5 col-xl-5 align-items-center mb-md0 mb15">
                                <div class="d-flex flex-wrap">
                                    <span class="bs-h40 table-option-hide col-12 col-12 col-md-10 col-lg-9 col-xl-8 px0 mt15 mt-md0">
										<select class="selectpicker f-14" title="All campaigns (1000)">
										  <option>All campaigns (1000)</option>
										  <option>Recently added campaigns (10)</option>
										  <option>Recently modified campaigns (15)</option>
										  <option>campaigns added in last 07 days (10)</option>
										  <option>campaigns added in last 30 days (10)</option>
										</select>
									</span>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-7 col-xl-7 smart-form table-option-hide pl-xl0">
                                <div class="row">

                                    <div class="col-md-4 col-lg-4 col-xl-4">
                                    </div>

                                    <div class="col-md-5 col-lg-5 col-xl-5 mb15 mb-md0">
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
                                            <div class="col-3 col-md-3 col-lg-4 d-flex align-self-center f-14 d-md-none d-lg-block">Show</div>
                                            <div class="col-9 col-md-12 col-lg-8 bs-h40">
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
                        <!------- Block Section----->
                        <div class="row mCustomScrollbar hautobox" data-mcs-theme="inset-3">
                            <div class="col-12 col-md-12 col-lg-8 order-2 order-lg-1 t-wauto tw-100 transition-all">
                                <div class="col-12 project-list-view-border p0 auto-img">
                                    <div class="project-list-view p15 p-md20">
                                        <div class="row">
                                            <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                                                <div class="media">

                                                    <div class="media-body ml5">
                                                        <div class="hover-img d-flex align-items-center">
                                                            <img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-9 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
                                                <div class="row hide-edit-show no-gutters w-100">
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
                                                        <div class="d-flex align-items-center">
                                                            <div class="f-20 f-md-24 w400 text-ellipsis">Campaign Title</div>

                                                        </div>
                                                        <div class="f-14 d-gblue-clr my10 my-md10">
                                                            <p class="lh150"> Type: Web </p>
                                                            <p class="lh150"><span>Start Date Nov 18, 2017 at 4:08 PM</span>
                                                                <br>
                                                                <span>End Date Dec 18, 2018 at 4:08 PM</span></p>
                                                        </div>
                                                        <div class="mt15 f-14">Project Name : project 1</div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
                                                        <div class="col-12 text-md-right p0">
                                                            <div class="f-14 lh140 d-green-clr w500">Unique Viewers : 200</div>
                                                        </div>

                                                        <!------ Button------>
                                                        <div class="col-12 text-md-right p0 align-self-end">
                                                            <ul class="list-inline w400 mb0">

                                                                <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
                                                                </li>
                                                                <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
                                                                </li>
																<li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
																 </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-list-view p15 p-md20">
                                        <div class="row">
                                            <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                                                <div class="media">

                                                    <div class="media-body ml5">
                                                        <div class="hover-img d-flex align-items-center">
                                                            <img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-9 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
                                                <div class="row hide-edit-show no-gutters w-100">
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
                                                        <div class="d-flex align-items-center">
                                                            <div class="f-20 f-md-24 w400 text-ellipsis">Campaign Title</div>

                                                        </div>
                                                        <div class="f-14 d-gblue-clr my10 my-md10">
                                                            <p class="lh150"> Type: Web </p>
                                                            <p class="lh150"><span>Start Date Nov 18, 2017 at 4:08 PM</span>
                                                                <br>
                                                                <span>End Date Dec 18, 2018 at 4:08 PM</span></p>
                                                        </div>
                                                        <div class="mt15 f-14">Project Name : project 2</div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
                                                        <div class="col-12 text-md-right p0">
                                                            <div class="f-14 lh140 d-green-clr w500">Unique Viewers : 200</div>
                                                        </div>

                                                        <!------ Button------>
                                                        <div class="col-12 text-md-right p0 align-self-end">
                                                            <ul class="list-inline w400 mb0">

                                                                <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
                                                                </li>
                                                                <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
                                                                </li>
																<li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
																 </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-list-view p15 p-md20">
                                        <div class="row">
                                            <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                                                <div class="media">

                                                    <div class="media-body ml5">
                                                        <div class="hover-img d-flex align-items-center">
                                                            <img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-9 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
                                                <div class="row hide-edit-show no-gutters w-100">
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
                                                        <div class="d-flex align-items-center">
                                                            <div class="f-20 f-md-24 w400 text-ellipsis">Campaign Title</div>

                                                        </div>
                                                        <div class="f-14 d-gblue-clr my10 my-md10">
                                                            <p class="lh150"> Type: Web </p>
                                                            <p class="lh150"><span>Start Date Nov 18, 2017 at 4:08 PM</span>
                                                                <br>
                                                                <span>End Date Dec 18, 2018 at 4:08 PM</span></p>
                                                        </div>
                                                        <div class="mt15 f-14">Project Name : project 3</div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
                                                        <div class="col-12 text-md-right p0">
                                                            <div class="f-14 lh140 d-green-clr w500">Unique Viewers : 200</div>
                                                        </div>

                                                        <!------ Button------>
                                                        <div class="col-12 text-md-right p0 align-self-end">
                                                            <ul class="list-inline w400 mb0">

                                                                <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
                                                                </li>
                                                                <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
                                                                </li>
																<li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
																 </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
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
                                            <li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i> </a>
                                            </li>
                                            <li><a href="#">1</a>
                                            </li>
                                            <li><a href="#">2</a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </a>
                                            </li>
                                            <li><a href="#" class="active">6</a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!----- Pagination Div End----->
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- Add New Campaign Modal Popup -->
<div class="modal automation-right-modal fade" id="AddCampaignModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="p15 p-md30 smart-form h-100">
				<div class="row h-100">
					<div class="col-12">
						<div class="w500 f-md-18 f-16">Add New Campaign</div>
						<p class="f-14 d-gblue-clr mt5">What do you want to call your Campaign?</p>
						<div class="row">
							<div class="col-12 col-md-6 col-lg-5 mt15 mt-md30">
								<label for="exampleSelect1">Campaign Title</label>
								<input type="text" class="form-control field-h40" value="Campaign Title" placeholder="Enter Campaign Title">
							</div>
						</div>
						<div class="row bs-h40">
							<div class="col-12 col-md-6 col-lg-5 mt15 mt-md30">
								<label for="exampleSelect1">Campaign Type</label>
								<select class="selectpicker">
									<option>Campaign Type 1</option>
									<option>Campaign Type 2</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-12 text-right mt15 align-self-end">
						<a href="javascript:void(0)" class="base-btn default-btn mr5" data-dismiss="modal">Cancel</a>
						<a href="#" class="base-btn blue-btn">Create</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	

<!-- Automation Send Option (Choose the web notification campaign) pop_up -->
<div class="modal automation-right-modal fade" id="campaignSendingOptionModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">	
			<div class="crosspos text-right"><a href="#" class="crossicon" data-dismiss="modal"><span>Close this pop-up</span><i class="icon-cross"></i></a></div>
			<div class="p15 p-md30 smart-form">
				<div class="row align-items-center mb15 mb-md25 mt15">
					<div class="col-12 col-md-12 col-lg-5 w500 f-md-18 f-16">Choose the web notification campaign</div>
					<div class="col-12 col-md-12 col-lg-7 text-lg-right text-center mt15 mt-lg0">
						<a href="#" class="base-btn default-btn btn-xs-block mr5 mb15 mb-md0">Save as Draft</a>
						<a href="#" class="base-btn default-btn btn-xs-block mr5 mb15 mb-md0">Back</a>
						<a href="#" class="base-btn blue-btn btn-xs-block mt10 mt-md0">Save Activate</a>
					</div>
				</div>
				<!------- Step Wizard Div Start----------->
				<div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md30">
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span><i class="fa fa-check"></i></span></div>
					<div class="title align-self-center">Design Selection</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span><i class="fa fa-check"></i></span></div>
					<div class="title align-self-center">Editor</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span>3</span></div>
					<div class="title align-self-center">Sending Option</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				</div>
				<!------- Step Wizard Div End----------->	
				<div class="row">
					<div class="col-12 f-18 w400">Where to show this campaign?</div>
					<div class="col-12 segment-accordion mt-md20 mt15">
						<div id="accordion" class="accordion">
							<div class="card mb-0 f-16">
								<div class="card-header collapsed" data-toggle="collapse" href="#collapsewebsite">
									<a class="card-title lato-font">&nbsp; Location of campaign</a>
								</div>
								<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select where you want to show this campaign on your website." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a>
								<div id="collapsewebsite" class="collapse">
									<div class="card-body">
										<div class="row mb15 mb-md20">
											<div class="col-12 col-md-8 col-lg-9 d-gblue-clr">
												<div class="d-flex justify-content-start flex-wrap">
													<div class="smart-radio-btn radio-strong-blue mr25 publish-radio">
														<input name="location" id="OnWholeWebsite" value="option1" checked="" type="radio">
														<label for="OnWholeWebsite">On Whole Website</label>
													</div>
													<div class="smart-radio-btn radio-strong-blue draft-radio">
														<input name="location" id="OnSpecificLocation" value="option1" type="radio">
														<label for="OnSpecificLocation">On Specific Location</label>
													</div>
												</div>
											</div>
											<div class="col-12 col-md-4 col-lg-3 bs-h30 mt15 mt-md0" id="SatisfyLocation">
												<select class="selectpicker">
													<option>All of these must satisfy</option>
													<option>Any of these must satisfy</option>

												</select>
											</div>
										</div>
										<div id="SpecificLocation">
										<div class="row">
											<div class="col-md-10 col-12 col-lg-9 d-gblue-clr d-flex flex-wrap p0 smart-form">
												<div class="form-group d-gblue-clr mb0 col-xl-4 col-lg-5 col-md-5 col-12">
													<select class="selectpicker" title="On specific location" data-live-search="true">
														<option>Dropdown Option 1</option>
														<option>Dropdown Option 2</option>
														<option>Dropdown Option 3</option>
														<option>Dropdown Option 4</option>
													</select>
												</div>
												<div class="mb0 col-xl-4 col-lg-5 col-md-5 col-11 mt15 mt-md0">
													<input type="text" class="form-control rounded-left-0" placeholder="Enter URL">
												</div>
												<div class="align-self-center mt18 mt-md0"><a class="d-gblue-clr segment-delete f-16 t-decoration-none" href="#"><i class="icon-delete"></i></a>
												</div>
											</div>

											<div class="col-12 col-md-2 col-lg-3 mt10 mt-md0">
												<a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a>
											</div>
										</div>
										<hr class="border-dotted">
										<div class="row">
											<div class="col-md-10 col-12 col-lg-9 d-gblue-clr d-flex flex-wrap p0 smart-form">
												<div class="form-group d-gblue-clr mb0 col-xl-4 col-lg-5 col-md-5 col-12">
													<select class="selectpicker" title="On specific location" data-live-search="true">
														<option>Dropdown Option 1</option>
														<option>Dropdown Option 2</option>
														<option>Dropdown Option 3</option>
														<option>Dropdown Option 4</option>
													</select>
												</div>
												<div class="mb0 col-xl-4 col-lg-5 col-md-5 col-9 mt15 mt-md0">
													<input type="text" class="form-control rounded-left-0" placeholder="Enter URL">
												</div>
												<div class="align-self-center mt18 mt-md0">
													<a class="d-gblue-clr segment-delete f-16 t-decoration-none mr10 mr-md15" href="#"><i class="icon-delete"></i></a>
													<a class="p-blue-clr t-decoration-none" href="#"><i class="icon-add-third"></i></a>
												</div>
											</div>

											<div class="col-12 col-md-2 col-lg-3 mt10 mt-md0">
												<a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a>
											</div>
										</div>
									</div>
									</div>
								</div>
							</div>
						</div>
					</div>


				</div>

				<div class="row mt-md30 mt15">
					<div class="col-12 f-18 w400">How to show this campaign?</div>
					<div class="col-12 segment-accordion mt-md20 mt15">
						<div id="accordion" class="accordion">
							<div class="card mb-0 f-16">
								<div class="card-header collapsed" data-toggle="collapse" href="#collapseOption">
									<a class="card-title lato-font">&nbsp; Option</a>
								</div>
								<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select on what occasion you want to show this campaign." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a>
								<div id="collapseOption" class="collapse">
									<div class="card-body">
										<div class="row">
											<div class="col-md-10 col-12 col-lg-9 d-gblue-clr d-flex flex-wrap p0 smart-form">
												<div class="form-group d-gblue-clr mb0 col-xl-4 col-lg-5 col-md-5 col-12 onselectoption2">
													<select class="selectpicker" title="On Scroll">
														<option value="onlanding2">On Landing</option>
														<option value="onexit2">On Exit</option>
														<option value="ondelay2">On Delay</option>
														<option value="onscroll2">On Scroll</option>
													</select>
												</div>
												<div class="mb0 col-xl-4 col-lg-5 col-md-5 col-9 mt15 mt-md0">
													<span class="ondelay2 timeshow2">
													<input type="text" class="form-control rounded-left-0" placeholder="00:35">
													</span>
												
													<span class="onscroll2 timeshow2">
														<input type="text" class="form-control rounded-left-0" placeholder="10%"></span>
												
												</div>
												<div class="align-self-center f-16 px-md15 pl-md0 mt15 mt-md0">
													<span class="ondelay2 timeshow2">(In Sec)</span>
													<span class="onscroll2 timeshow2">(In %)</span>
												</div>


											</div>
											<div class="col-12 col-md-2 col-lg-3 mt10 mt-md0">
												<a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 segment-accordion mt-md20 mt15">
						<div id="accordion" class="accordion">
							<div class="card mb-0 f-16">
								<div class="card-header collapsed" data-toggle="collapse" href="#collapseEntryExit">
									<a class="card-title lato-font">&nbsp; Entry / Exit animation</a>
								</div>
								<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="You can select animation types for this campaign." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a>
								<div id="collapseEntryExit" class="collapse">
									<div class="card-body">
										<div class="row">
											<div class="col-md-10 col-12 col-lg-9 d-gblue-clr d-flex flex-wrap p0 smart-form">
												<div class="form-group d-gblue-clr Facebook-dropdown mb0 col-xl-4 col-lg-5 col-md-6 col-12">
													<select class="selectpicker" title="Select entry animation" data-live-search="true">
														<option value='bounce'>Bounce</option>
														<option value='bounceIn'>Bounce in </option>
														<option value='bounceInUp'>Bounce in up </option>
														<option value='bounceInDown'>Bounce in down </option>
														<option value='bounceInLeft'>Bounce in left </option>
														<option value='bounceInRight'>Bounce in right </option>
														<option value='fadeIn'>Fade in </option>
														<option value='fadeInDown'>Fade in down </option>
														<option value='fadeInDownBig'>Fade in down big </option>
														<option value='fadeInLeft'>Fade in left </option>
														<option value='fadeInLeftBig'>Fade in left big </option>
														<option value='fadeInRight'>Fade in right </option>
														<option value='fadeInRightBig'>Fade in right big </option>
														<option value='fadeInUp'>Fade in up </option>
														<option value='fadeInUpBig'>Fade in up big </option>
														<option value='flash'>Flash </option>
														<option value='flipInX'>Flip in X </option>
														<option value='flipInY'>Flip in Y </option>
														<option value='jello'>Jello </option>
														<option value='lightSpeedIn'>Light speed in </option>
														<option value='pulse'>Pulse </option>
														<option value='rollIn'>Roll in </option>
														<option value='rotateIn'>Rotate in </option>
														<option value='rotateInDownLeft'>Rotate in down left </option>
														<option value='rotateInDownRight'>Rotate in down right </option>
														<option value='rotateInUpLeft'>Rotate in up left </option>
														<option value='rotateInUpRight'>Rotate in up right </option>
														<option value='rubberBand'>Rubber band </option>
														<option value='shake'>Shake </option>
														<option value='slideInDown'>Side in down </option>
														<option value='slideInUp'>Side in up </option>
														<option value='slideInLeft'>Side in left </option>
														<option value='slideInRight'>Side in right </option>
														<option value='swing'>Swing </option>
														<option value='tada'>Tada </option>
														<option value='wobble'>Wobble </option>
														<option value='zoomIn'>Zoom in </option>
														<option value='zoomInLeft'>Zoom in left </option>
														<option value='zoomInRight'>Zoom in right </option>
														<option value='zoomInUp'>Zoom in up </option>
														<option value='zoomInDown'>Zoom in down </option>
													</select>
												</div>
												<div class="form-group d-gblue-clr Facebook-dropdown mb0 col-xl-4 col-lg-5 col-md-6 col-12 mt15 mt-md0">
													<select class="selectpicker" title="Select exit animation" data-live-search="true">
														<option value='bounce'> Bounce </option>
														<option value='bounceOut'>Bounce out </option>
														<option value='bounceOutDown'>Bounce out down </option>
														<option value='bounceOutUp'>Bounce out up </option>
														<option value='bounceOutLeft'>Bounce out left </option>
														<option value='bounceOutRight'>Bounce out right </option>
														<option value='fadeOut'>
															Fade out </option>
														<option value='fadeOutDown'>Fade out down </option>
														<option value='fadeOutDownBig'>Fade out down big </option>
														<option value='fadeOutLeft'>Fade out left </option>
														<option value='fadeOutLeftBig'>Fade out left big </option>
														<option value='fadeOutRight'>Fade out right </option>
														<option value='fadeOutRightBig'>Fade out right big </option>
														<option value='fadeOutUp'>Fade out up </option>
														<option value='fadeOutUpBig'>Fade out up big </option>
														<option value='flipOutX'>Flip out X </option>
														<option value='flipOutY'>Flip out Y </option>
														<option value='hinge'>Hinge </option>
														<option value='lightSpeedOut'>Light speed out </option>
														<option value='rotateOut'>Rotate out </option>
														<option value='rotateOutDownLeft'>Rotate out down left </option>
														<option value='rotateOutDownRight'>Rotate out down right </option>
														<option value='rotateOutUpLeft'>Rotate out up left </option>
														<option value='rotateOutUpRight'>Rotate out up right </option>
														<option value='rollOut'>Roll out </option>
														<option value='slideOutDown'>Slide out down </option>
														<option value='slideOutLeft'>Slide out left </option>
														<option value='slideOutRight'>Slide out right </option>
														<option value='slideOutUp'>Slide out up </option>
														<option value='zoomOut'>Zoom out </option>
														<option value='zoomOutDown'>Zoom out down </option>
														<option value='zoomOutLeft'>Zoom out left </option>
														<option value='zoomOutRight'>Zoom out right </option>
														<option value='zoomOutUp'>Zoom out up </option>
														<option value='flash'>Flash </option>
														<option value='pulse'>Pulse </option>
														<option value='rubberBand'>RubberBand </option>
														<option value='shake'>Shake </option>
														<option value='swing'>Swing </option>
														<option value='tada'>Tada </option>
														<option value='wobble'>Wobble </option>
														<option value='jello'>Jello </option>
													</select>
												</div>
											</div>
											<div class="col-12 col-md-2 col-lg-3 mt10 mt-md0">
												<a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="row mt-md30 mt15">
					<div class="col-12 f-18 w400">Maximum number of times this campaign is shown to visitor?</div>
					<div class="col-12 segment-accordion mt-md20 mt15">
						<div id="accordion" class="accordion">
							<div class="card mb-0 f-16">
								<div class="card-header collapsed" data-toggle="collapse" href="#collapsemaximumlimits">
									<a class="card-title lato-font">&nbsp; Set maximum limits</a>
								</div>
								<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define how many times (maximum limit) you want to show this campaign." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a>
								<div id="collapsemaximumlimits" class="collapse">
									<div class="card-body">
										<div class="row">
											<div class="col-md-10 col-12 col-lg-9 d-gblue-clr">
												<div class="d-flex justify-content-start flex-wrap">
													<div class="d-flex ml5 smart-radio-btn radio-strong-blue mr25 publish-radio">
														<input name="chkMaxlimit" id="Not-Maxlimit" value="option1" checked="" type="radio">
														<label for="Not-Maxlimit"> Exclude from campaign limits </label>
													</div>
													<div class="d-flex ml5 smart-radio-btn radio-strong-blue draft-radio">
														<input name="chkMaxlimit" id="select-Maxlimit" value="option1" type="radio">
														<label for="select-Maxlimit"> Set maximum limits </label>
													</div>
												</div>
												<div id="Max-limit" class="mt15">
													<div class="d-flex smart-form">
														<div class="col-12 pl0">
															<form>
																<div class="form-group row">
																	<label class="col-xl-4 col-lg-5 col-md-6 col-12 d-flex align-items-center">Enter maximum limit</label>
																	<div class="col-xl-4 col-lg-5 col-md-6 col-12 pr0 pr-md15">
																		<input type="number" class="form-control" placeholder="15">
																	</div>
																</div>
																<div class="mb-md0 row">
																	<label class="col-xl-4 col-lg-5 col-md-6 col-12 d-flex align-items-center">Enter maximum limit in one session</label>
																	<div class="col-xl-4 col-lg-5 col-md-6 col-12 pr0 pr-md15">
																		<input type="number" class="form-control" placeholder="15">
																	</div>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
											<div class="col-12 col-md-2 col-lg-3 mt10 mt-md0">
												<a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 mt15 mt-md30 text-right">
						<a href="#" class="base-btn default-btn btn-xs-block mr5 mb15 mb-md0">Save as Draft</a>
						<a href="#" class="base-btn default-btn btn-xs-block mr5 mb15 mb-md0">Back</a>
						<button type="submit" class="base-btn blue-btn f-16  btn-xs-block">Save & Activate</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Automation Package Purchase pop_up -->
<div class="modal automation-right-modal fade" id="PackagePurchaseModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="p15 p-md30 smart-form modal-scrollbar bs-h40 f-14">
				<div class="f-md-18 f-16 w500">If someone buy “solution - Package name”</div>
				<div class="row">
					<div class="col-12 col-md-6 col-lg-5 mt15 mt-md30">
						<label class="d-gblue-clr">Choose The Solution</label>
						<select class="selectpicker" title="Solution">
							<option>Solution 1</option>
							<option>Solution 2</option>
							<option>Solution 3</option>
							<option>Solution 4</option>
						</select>
					</div>
					<div class="col-12 col-md-6 col-lg-5 offset-lg-1 mt15 mt-md30">
						<label class="d-gblue-clr">Choose The Package</label>
						<select class="selectpicker" title="Package">
							<option>Package 1</option>
							<option>Package 2</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-6 col-lg-5 mt15 mt-md50">
						<label class="d-gblue-clr">Choose The Option</label>
						<select class="selectpicker" title="Option ">
							<option>Option 1</option>
							<option>Option 2</option>
							<option>Option 3</option>
						</select>
					</div>
					<div class="col-12 col-md-6 col-lg-5 offset-lg-1 mt15 mt-md50">
						<label class="d-gblue-clr">Choose The Frequency</label>
						<select class="selectpicker" title="Frequency">
							<option>Frequency 1</option>
							<option>Frequency 2</option>
							<option>Frequency 3</option>
						</select>
					</div>
				</div>
			</div>
			<div class="p15 p-md30 custom-modal-foooter text-right border-top-0">
				<a href="javascript:void(0)" class="base-btn default-btn f-14 mr5" data-dismiss="modal">Cancel</a>
				<a href="#" class="base-btn blue-btn f-14">Save</a>
			</div>
		</div>
	</div>
</div>

<!-- Automation Training Videospop_up -->
<div class="modal automation-right-modal fade" id="TrainingVideosModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="crosspos text-right"><a href="#" class="crossicon" data-dismiss="modal"><span>Close this pop-up</span><i class="icon-cross"></i></a></div>
			<div class="p15 p-md30 f-14">
				<div class="row ">
					<div class="col-12 f-md-18 f-16 w500">Watch Training Videos</div>
					<div class="col-12 col-md-4 col-lg training-videos-col mt15 mt-md30">
						<div class="gradient-border1 relative">
							<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
								<a href="#">
								<img src="<?php echo $basedir; ?>images/library-popup/lib-image.png" class="d-block mx-auto img-fluid">
								<!-- video icon -->
								<a href="#" class="lib-video-icon white-clr t-decoration-none"><i class="icon-total-viewed-videos f-35"></i></a>
								</a>
							</div>
						</div>
						<div class="f-14 mt10">Video Name</div>
						<p class="f-12 mt4 d-gblue-clr">Duration : 15.10.00</p>
					</div>

					<div class="col-12 col-md-4 col-lg training-videos-col mt15 mt-md30">
						<div class="gradient-border1 relative">
							<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
							<a href="#">
								<img src="<?php echo $basedir; ?>images/library-popup/lib-image2.png" class="d-block mx-auto img-fluid">
								<!-- video icon -->
								<a href="#" class="lib-video-icon white-clr t-decoration-none"><i class="icon-total-viewed-videos f-35"></i></a>
							 </a> 
							</div>
						</div>
						<div class="f-14 mt10">Video Name</div>
						<p class="f-12 mt4 d-gblue-clr">Duration : 15.10.00</p>
					</div>

					<div class="col-12 col-md-4 col-lg training-videos-col mt15 mt-md30">
						<div class="gradient-border1 relative">
							<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
								<a href="#">
								<img src="<?php echo $basedir; ?>images/library-popup/lib-image3.png" class="d-block mx-auto img-fluid">
								<!-- video icon -->
								<a href="#" class="lib-video-icon white-clr t-decoration-none"><i class="icon-total-viewed-videos f-35"></i></a>
							</a>
							</div>
						</div>
						<div class="f-14 mt10">Video Name</div>
						<p class="f-12 mt4 d-gblue-clr">Duration : 15.10.00</p>
					</div>

					<div class="col-12 col-md-4 col-lg training-videos-col mt15 mt-md30">
						<div class="gradient-border1 relative">
							<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
								<a href="#">
								<img src="<?php echo $basedir; ?>images/library-popup/lib-image4.png" class="d-block mx-auto img-fluid">
								<!-- video icon -->
								<a href="#" class="lib-video-icon white-clr t-decoration-none"><i class="icon-total-viewed-videos f-35"></i></a>
								</a> 
							</div>
						</div>
						<div class="f-14 mt10">Video Name</div>
						<p class="f-12 mt4 d-gblue-clr">Duration : 15.10.00</p>
					</div>


					<div class="col-12 col-md-4 col-lg training-videos-col mt15 mt-md30">
						<div class="gradient-border1 relative">
							<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
							  <a href="#">
								<img src="<?php echo $basedir; ?>images/library-popup/lib-image5.png" class="d-block mx-auto img-fluid">
								<!-- video icon -->
								<a href="#" class="lib-video-icon white-clr t-decoration-none"><i class="icon-total-viewed-videos f-35"></i></a>
								</a>
							</div>
						</div>
						<div class="f-14 mt10">Video Name</div>
						<p class="f-12 mt4 d-gblue-clr">Duration : 15.10.00</p>
					</div>

					<div class="col-12 col-md-4 col-lg training-videos-col mt15 mt-md30">
						<div class="gradient-border1 relative">
							<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
							  <a href="#">
								<img src="<?php echo $basedir; ?>images/library-popup/lib-image6.png" class="d-block mx-auto img-fluid">
								<!-- video icon -->
								<a href="#" class="lib-video-icon white-clr t-decoration-none"><i class="icon-total-viewed-videos f-35"></i></a>
								</a>
							</div>
						</div>
						<div class="f-14 mt10">Video Name</div>
						<p class="f-12 mt4 d-gblue-clr">Duration : 15.10.00</p>
					</div>

					<div class="col-12 col-md-4 col-lg training-videos-col mt15 mt-md30">
						<div class="gradient-border1 relative">
							<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
							  <a href="#">
								<img src="<?php echo $basedir; ?>images/library-popup/lib-image7.png" class="d-block mx-auto img-fluid">
								<!-- video icon -->
								<a href="#" class="lib-video-icon white-clr t-decoration-none"><i class="icon-total-viewed-videos f-35"></i></a>
								</a>
							</div>
						</div>
						<div class="f-14 mt10">Video Name</div>
						<p class="f-12 mt4 d-gblue-clr">Duration : 15.10.00</p>
					</div>

					<div class="col-12 col-md-4 col-lg training-videos-col mt15 mt-md30">
						<div class="gradient-border1 relative">
							<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
							 <a href="#">
								<img src="<?php echo $basedir; ?>images/library-popup/lib-image8.png" class="d-block mx-auto img-fluid">
								<!-- video icon -->
								<a href="#" class="lib-video-icon white-clr t-decoration-none"><i class="icon-total-viewed-videos f-35"></i></a>
								</a>
							</div>
						</div>
						<div class="f-14 mt10">Video Name</div>
						<p class="f-12 mt4 d-gblue-clr">Duration : 15.10.00</p>
					</div>
					
					<div class="col-12 col-md-4 col-lg training-videos-col mt15 mt-md30">
						<div class="gradient-border1 relative">
							<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
								<a href="#">
								<img src="<?php echo $basedir; ?>images/library-popup/lib-image.png" class="d-block mx-auto img-fluid">
								<!-- video icon -->
								<a href="#" class="lib-video-icon white-clr t-decoration-none"><i class="icon-total-viewed-videos f-35"></i></a>
								</a>
							</div>
						</div>
						<div class="f-14 mt10">Video Name</div>
						<p class="f-12 mt4 d-gblue-clr">Duration : 15.10.00</p>
					</div>

					<div class="col-12 col-md-4 col-lg training-videos-col mt15 mt-md30">
						<div class="gradient-border1 relative">
							<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
							<a href="#">
								<img src="<?php echo $basedir; ?>images/library-popup/lib-image2.png" class="d-block mx-auto img-fluid">
								<!-- video icon -->
								<a href="#" class="lib-video-icon white-clr t-decoration-none"><i class="icon-total-viewed-videos f-35"></i></a>
							 </a> 
							</div>
						</div>
						<div class="f-14 mt10">Video Name</div>
						<p class="f-12 mt4 d-gblue-clr">Duration : 15.10.00</p>
					</div>

					<div class="col-12 col-md-4 col-lg training-videos-col mt15 mt-md30">
						<div class="gradient-border1 relative">
							<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
								<a href="#">
								<img src="<?php echo $basedir; ?>images/library-popup/lib-image3.png" class="d-block mx-auto img-fluid">
								<!-- video icon -->
								<a href="#" class="lib-video-icon white-clr t-decoration-none"><i class="icon-total-viewed-videos f-35"></i></a>
							</a>
							</div>
						</div>
						<div class="f-14 mt10">Video Name</div>
						<p class="f-12 mt4 d-gblue-clr">Duration : 15.10.00</p>
					</div>

					<div class="col-12 col-md-4 col-lg training-videos-col mt15 mt-md30">
						<div class="gradient-border1 relative">
							<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
								<a href="#">
								<img src="<?php echo $basedir; ?>images/library-popup/lib-image4.png" class="d-block mx-auto img-fluid">
								<!-- video icon -->
								<a href="#" class="lib-video-icon white-clr t-decoration-none"><i class="icon-total-viewed-videos f-35"></i></a>
								</a> 
							</div>
						</div>
						<div class="f-14 mt10">Video Name</div>
						<p class="f-12 mt4 d-gblue-clr">Duration : 15.10.00</p>
					</div>

					<div class="col-12 col-md-4 col-lg training-videos-col mt15 mt-md30">
						<div class="gradient-border1 relative">
							<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
							  <a href="#">
								<img src="<?php echo $basedir; ?>images/library-popup/lib-image5.png" class="d-block mx-auto img-fluid">
								<!-- video icon -->
								<a href="#" class="lib-video-icon white-clr t-decoration-none"><i class="icon-total-viewed-videos f-35"></i></a>
								</a>
							</div>
						</div>
						<div class="f-14 mt10">Video Name</div>
						<p class="f-12 mt4 d-gblue-clr">Duration : 15.10.00</p>
					</div>

					<div class="col-12 col-md-4 col-lg training-videos-col mt15 mt-md30">
						<div class="gradient-border1 relative">
							<div class="library-block d-flex align-items-center justify-content-center vl-gblue-bg">
							  <a href="#">
								<img src="<?php echo $basedir; ?>images/library-popup/lib-image6.png" class="d-block mx-auto img-fluid">
								<!-- video icon -->
								<a href="#" class="lib-video-icon white-clr t-decoration-none"><i class="icon-total-viewed-videos f-35"></i></a>
								</a>
							</div>
						</div>
						<div class="f-14 mt10">Video Name</div>
						<p class="f-12 mt4 d-gblue-clr">Duration : 15.10.00</p>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Landing Page modal Pop_up -->
<div class="modal automation-right-modal fade" id="landingpageModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="crosspos text-right"><a href="#" class="crossicon" data-dismiss="modal"><span>Close this pop-up</span><i class="icon-cross"></i></a></div>
			<div class="p15 p-md30 smart-form">
				<div class="row mt5 mt-md8">
					
			<div class="col-12 col-md-7 col-lg-7">
				<div class="f-md-18 f-16 w500">Choose the Landing Page</div>
				</div>
				<div class="col-12 col-md-5 col-lg-5 text-center text-md-right mt10 mt-md0 f-16 w400">
			<a href="javascript:void(0)" class="base-btn blue-btn" data-toggle="modal" data-target="#AddnewPageModal"><i class="icon-add-new f-18 align-middle"></i>&nbsp;&nbsp; New Page</a>
		</div>
		</div>
				
				
			 
        <!-- Nav tabs -->
        <ul class="nav tabs-style1 f-14 f-sm-16 mt20 mt-md0" role="tablist">
          <li class="nav-item"> <a class="nav-link active" data-toggle="tab" data-target ="#live">Live</a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab"  data-target ="#pagedraft">Draft</a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" data-target ="#pageschedule">Schedule</a> </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <div id="live" class="tab-pane active px0">
           
			  
	<!--- Filteration Div ---->
	<div class="row mb15 mb-md30 relative min-h-40 mt-md30 mt-15 p0">

	
		<!----- Table Option Div end---->

		<div class="col-md-5 col-lg-5 col-xl-5 align-items-center mb-md0 mb15">
			<div class="d-flex flex-wrap">
			
			<span class="bs-h40 table-option-hide col-12 col-12 col-md-10 col-lg-9 col-xl-8 px0 mt15 mt-md0">
				<select class="selectpicker f-14" title="All Pages (1000)">
				  <option>All Pages (1000)</option>
				  <option>Recently added Pages (10)</option>
                  <option>Recently modified Pages (15)</option>
                  <option>Pages added in last 07 days (10)</option>
				  <option>Pages added in last 30 days (10)</option>
				</select>
			</span>
			</div>	
		</div>
		<div class="col-md-7 col-lg-7 col-xl-7 smart-form table-option-hide">
			<div class="row">

				<div class="col-md-4 col-lg-4 col-xl-4">
				</div>
				
				<div class="col-md-5 col-lg-5 col-xl-5 mb15 mb-md0">
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
						<div class="col-3 col-md-3 col-lg-4 d-flex align-self-center f-14 d-md-none d-lg-block">Show</div>
						<div class="col-9 col-md-12 col-lg-8 bs-h40">
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

	<!------- Block Section----->
	<div class="row mCustomScrollbar hautobox" data-mcs-theme="inset-3">
   <div class="col-12 col-md-12 col-lg-8 order-2 order-lg-1 t-wauto tw-100 transition-all">
      <div class="col-12 project-list-view-border p0 auto-img">
         <div class="project-list-view p15 p-md20">
            <div class="row">
               <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                  <div class="media">
                     
                     <div class="media-body ml5">
                        <div class="hover-img d-flex align-items-center">
                           <img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">
                          
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-9 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
                  <div class="row hide-edit-show no-gutters w-100">
                     <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
                        <div class="d-flex align-items-center">
                           <div class="f-20 f-md-24 w400 text-ellipsis text-capitalize">Page Title</div>                           
                        </div>
                       <div class="mt10">
						 <p class="lh150 f-14 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM </p>
						 <p class="lh150 f-14 vd-gblue-clr">Project Name </p>
						 <p class="mt5">
						 	<span class="f-12 private-btn mr5"><i class="icon-person"></i> Private</span>
						 	<span class="f-12 live-btn"><i class="icon-live"></i> Live</span>
						 </p>
					   </div>
                

                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
                        <div class="col-12 text-md-right p0">
							<div class="f-14 lh140 d-green-clr w500">Unique Viewers : 200</div>
						 </div> 
						 <div class="col-12 p0 mt-lg15 mt10">
							<div class="f-14 lh140 w400">This page can't be choose, as it is already<br class="d-none d-xl-block"> being used with another Funnel/Journey </div>
						 </div> 
                        
                        <!------ Button------>
                        <div class="col-12 text-md-right p0 align-self-end">
                           <ul class="list-inline w400 mb0">
                            
                              <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
                              </li>
                              <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14 disable-btn" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
                              </li>
							   <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
         <div class="project-list-view p15 p-md20">
            <div class="row">
               <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                  <div class="media">
                     
                     <div class="media-body ml5">
                        <div class="hover-img d-flex align-items-center">
                           <img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">
                          
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-9 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
                  <div class="row hide-edit-show no-gutters w-100">
                     <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
                        <div class="d-flex align-items-center">
                           <div class="f-20 f-md-24 w400 text-ellipsis text-capitalize">Page Title</div>                           
                        </div>
                       <div class="mt10">
						 <p class="lh150 f-14 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM </p>
						 <p class="lh150 f-14 vd-gblue-clr">Project Name </p>
						 <p class="mt5">
						 	<span class="f-12 private-btn mr5"><i class="icon-person"></i> Private</span>
						 	<span class="f-12 live-btn"><i class="icon-draft"></i> Draft</span>
						 </p>
					   </div>
                

                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
                        <div class="col-12 text-md-right p0">
							<div class="f-14 lh140 d-green-clr w500">Unique Viewers : 200</div>
						 </div> 
                        
                        <!------ Button------>
                        <div class="col-12 text-md-right p0 align-self-end">
                           <ul class="list-inline w400 mb0">
                            
                              <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
                              </li>
                              <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
                              </li>
							   <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
		 <div class="project-list-view p15 p-md20">
            <div class="row">
               <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                  <div class="media">
                     
                     <div class="media-body ml5">
                        <div class="hover-img d-flex align-items-center">
                           <img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">
                          
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-9 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
                  <div class="row hide-edit-show no-gutters w-100">
                     <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
                        <div class="d-flex align-items-center">
                           <div class="f-20 f-md-24 w400 text-ellipsis text-capitalize">Page Title</div>                           
                        </div>
                       <div class="mt10">
						 <p class="lh150 f-14 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM </p>
						 <p class="lh150 f-14 vd-gblue-clr">Project Name </p>
						 <p class="mt5">
						 	<span class="f-12 private-btn mr5"><i class="icon-person"></i> Private</span>
						 	<span class="f-12 live-btn"><i class="icon-live"></i> Live</span>
						 	<span class="f-12 live-btn"><i class="icon-draft"></i> Draft</span>
						 </p>
					   </div>
                

                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
                        <div class="col-12 text-md-right p0">
							<div class="f-14 lh140 d-green-clr w500">Unique Viewers : 200</div>
						 </div> 
                        
                        <!------ Button------>
                        <div class="col-12 text-md-right p0 align-self-end">
                           <ul class="list-inline w400 mb0">
                            
                              <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
                              </li>
                              <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
                              </li>
							   <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
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
               <li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i> </a>
               </li>
               <li><a href="#">1</a>
               </li>
               <li><a href="#">2</a>
               </li>
               <li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </a>
               </li>
               <li><a href="#" class="active">6</a>
               </li>
               <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> </a>
               </li>
            </ul>
         </div>
      </div>
      <!----- Pagination Div End----->
   </div>
   
</div>
				
			</div>
		  
		  <div id="pagedraft" class="tab-pane fade">
           
			  
	<!--- Filteration Div ---->
	<div class="row mb15 mb-md30 relative min-h-40 mt-md30 mt-15 p0">

	
		<!----- Table Option Div end---->

		<div class="col-md-5 col-lg-5 col-xl-5 align-items-center mb-md0 mb15">
			<div class="d-flex flex-wrap">
			
			<span class="bs-h40 table-option-hide col-12 col-12 col-md-10 col-lg-9 col-xl-8 px0 mt15 mt-md0">
				<select class="selectpicker f-14" title="All Pages (1000)">
				  <option>All Pages (1000)</option>
				  <option>Recently added Pages (10)</option>
                  <option>Recently modified Pages (15)</option>
                  <option>Pages added in last 07 days (10)</option>
				  <option>Pages added in last 30 days (10)</option>
				</select>
			</span>
			</div>	
		</div>
		<div class="col-md-7 col-lg-7 col-xl-7 smart-form table-option-hide">
			<div class="row">

				<div class="col-md-4 col-lg-4 col-xl-4">
				</div>
				
				<div class="col-md-5 col-lg-5 col-xl-5 mb15 mb-md0">
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
						<div class="col-3 col-md-3 col-lg-4 d-flex align-self-center f-14 d-md-none d-lg-block">Show</div>
						<div class="col-9 col-md-12 col-lg-8 bs-h40">
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

	<!------- Block Section----->
	<div class="row mCustomScrollbar hautobox" data-mcs-theme="inset-3">
   <div class="col-12 col-md-12 col-lg-8 order-2 order-lg-1 t-wauto tw-100 transition-all">
      <div class="col-12 project-list-view-border p0 auto-img">
         <div class="project-list-view p15 p-md20">
            <div class="row">
               <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                  <div class="media">
                     
                     <div class="media-body ml5">
                        <div class="hover-img d-flex align-items-center">
                           <img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">
                          
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-9 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
                  <div class="row hide-edit-show no-gutters w-100">
                     <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
                        <div class="d-flex align-items-center">
                           <div class="f-20 f-md-24 w400 text-ellipsis text-capitalize">Page Title</div>                           
                        </div>
                       <div class="mt10">
						 <p class="lh150 f-14 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM </p>
						 <p class="lh150 f-14 vd-gblue-clr">Project Name </p>
						 <p class="mt5">
						 	<span class="f-12 private-btn mr5"><i class="icon-person"></i> Private</span>
						 	<span class="f-12 live-btn"><i class="icon-live"></i> Live</span>
						 </p>
					   </div>
                

                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
                        <div class="col-12 text-md-right p0">
							<div class="f-14 lh140 d-green-clr w500">Unique Viewers : 200</div>
						 </div> 
                        
                        <!------ Button------>
                        <div class="col-12 text-md-right p0 align-self-end">
                           <ul class="list-inline w400 mb0">
                            
                              <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
                              </li>
                              <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
                              </li>
							   <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
         <div class="project-list-view p15 p-md20">
            <div class="row">
               <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                  <div class="media">
                     
                     <div class="media-body ml5">
                        <div class="hover-img d-flex align-items-center">
                           <img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">
                          
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-9 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
                  <div class="row hide-edit-show no-gutters w-100">
                     <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
                        <div class="d-flex align-items-center">
                           <div class="f-20 f-md-24 w400 text-ellipsis text-capitalize">Page Title</div>                           
                        </div>
                       <div class="mt10">
						 <p class="lh150 f-14 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM </p>
						 <p class="lh150 f-14 vd-gblue-clr">Project Name </p>
						 <p class="mt5">
						 	<span class="f-12 private-btn mr5"><i class="icon-person"></i> Private</span>
						 	<span class="f-12 live-btn"><i class="icon-draft"></i> Draft</span>
						 </p>
					   </div>
                

                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
                        <div class="col-12 text-md-right p0">
							<div class="f-14 lh140 d-green-clr w500">Unique Viewers : 200</div>
						 </div> 
                        
                        <!------ Button------>
                        <div class="col-12 text-md-right p0 align-self-end">
                           <ul class="list-inline w400 mb0">
                            
                              <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
                              </li>
                              <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
                              </li>
							   <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
		 <div class="project-list-view p15 p-md20">
            <div class="row">
               <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                  <div class="media">
                     
                     <div class="media-body ml5">
                        <div class="hover-img d-flex align-items-center">
                           <img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">
                          
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-9 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
                  <div class="row hide-edit-show no-gutters w-100">
                     <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
                        <div class="d-flex align-items-center">
                           <div class="f-20 f-md-24 w400 text-ellipsis text-capitalize">Page Title</div>                           
                        </div>
                       <div class="mt10">
						 <p class="lh150 f-14 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM </p>
						 <p class="lh150 f-14 vd-gblue-clr">Project Name </p>
						 <p class="mt5">
						 	<span class="f-12 private-btn mr5"><i class="icon-person"></i> Private</span>
						 	<span class="f-12 live-btn"><i class="icon-live"></i> Live</span>
						 	<span class="f-12 live-btn"><i class="icon-draft"></i> Draft</span>
						 </p>
					   </div>
                

                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
                        <div class="col-12 text-md-right p0">
							<div class="f-14 lh140 d-green-clr w500">Unique Viewers : 200</div>
						 </div> 
                        
                        <!------ Button------>
                        <div class="col-12 text-md-right p0 align-self-end">
                           <ul class="list-inline w400 mb0">
                            
                              <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
                              </li>
                              <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
                              </li>
							   <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
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
               <li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i> </a>
               </li>
               <li><a href="#">1</a>
               </li>
               <li><a href="#">2</a>
               </li>
               <li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </a>
               </li>
               <li><a href="#" class="active">6</a>
               </li>
               <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> </a>
               </li>
            </ul>
         </div>
      </div>
      <!----- Pagination Div End----->
   </div>
   
</div>
				
			</div>	
		
		  <div id="pageschedule" class="tab-pane fade">
           
			  
	<!--- Filteration Div ---->
	<div class="row mb15 mb-md30 relative min-h-40 mt-md30 mt-15 p0">

	
		<!----- Table Option Div end---->

		<div class="col-md-5 col-lg-5 col-xl-5 align-items-center mb-md0 mb15">
			<div class="d-flex flex-wrap">
			
			<span class="bs-h40 table-option-hide col-12 col-12 col-md-10 col-lg-9 col-xl-8 px0 mt15 mt-md0">
				<select class="selectpicker f-14" title="All Pages (1000)">
				  <option>All Pages (1000)</option>
				  <option>Recently added Pages (10)</option>
                  <option>Recently modified Pages (15)</option>
                  <option>Pages added in last 07 days (10)</option>
				  <option>Pages added in last 30 days (10)</option>
				</select>
			</span>
			</div>	
		</div>
		<div class="col-md-7 col-lg-7 col-xl-7 smart-form table-option-hide">
			<div class="row">

				<div class="col-md-4 col-lg-4 col-xl-4">
				</div>
				
				<div class="col-md-5 col-lg-5 col-xl-5 mb15 mb-md0">
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
						<div class="col-3 col-md-3 col-lg-4 d-flex align-self-center f-14 d-md-none d-lg-block">Show</div>
						<div class="col-9 col-md-12 col-lg-8 bs-h40">
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

	<!------- Block Section----->
	<div class="row mCustomScrollbar hautobox" data-mcs-theme="inset-3">
   <div class="col-12 col-md-12 col-lg-8 order-2 order-lg-1 t-wauto tw-100 transition-all">
      <div class="col-12 project-list-view-border p0 auto-img">
         <div class="project-list-view p15 p-md20">
            <div class="row">
               <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                  <div class="media">
                     
                     <div class="media-body ml5">
                        <div class="hover-img d-flex align-items-center">
                           <img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">
                          
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-9 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
                  <div class="row hide-edit-show no-gutters w-100">
                     <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
                        <div class="d-flex align-items-center">
                           <div class="f-20 f-md-24 w400 text-ellipsis text-capitalize">Page Title</div>                           
                        </div>
                       <div class="mt10">
						 <p class="lh150 f-14 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM </p>
						 <p class="lh150 f-14 vd-gblue-clr">Project Name </p>
						 <p class="mt5">
						 	<span class="f-12 private-btn mr5"><i class="icon-person"></i> Private</span>
						 	<span class="f-12 live-btn"><i class="icon-live"></i> Live</span>
						 </p>
					   </div>
                

                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
                        <div class="col-12 text-md-right p0">
							<div class="f-14 lh140 d-green-clr w500">Unique Viewers : 200</div>
						 </div> 
                        
                        <!------ Button------>
                        <div class="col-12 text-md-right p0 align-self-end">
                           <ul class="list-inline w400 mb0">
                            
                              <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
                              </li>
                              <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
                              </li>
							   <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
         <div class="project-list-view p15 p-md20">
            <div class="row">
               <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                  <div class="media">
                     
                     <div class="media-body ml5">
                        <div class="hover-img d-flex align-items-center">
                           <img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">
                          
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-9 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
                  <div class="row hide-edit-show no-gutters w-100">
                     <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
                        <div class="d-flex align-items-center">
                           <div class="f-20 f-md-24 w400 text-ellipsis text-capitalize">Page Title</div>                           
                        </div>
                       <div class="mt10">
						 <p class="lh150 f-14 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM </p>
						 <p class="lh150 f-14 vd-gblue-clr">Project Name </p>
						 <p class="mt5">
						 	<span class="f-12 private-btn mr5"><i class="icon-person"></i> Private</span>
						 	<span class="f-12 live-btn"><i class="icon-draft"></i> Draft</span>
						 </p>
					   </div>
                

                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
                        <div class="col-12 text-md-right p0">
							<div class="f-14 lh140 d-green-clr w500">Unique Viewers : 200</div>
						 </div> 
                        
                        <!------ Button------>
                        <div class="col-12 text-md-right p0 align-self-end">
                           <ul class="list-inline w400 mb0">
                            
                              <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
                              </li>
                              <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
                              </li>
							   <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
		 <div class="project-list-view p15 p-md20">
            <div class="row">
               <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                  <div class="media">
                     
                     <div class="media-body ml5">
                        <div class="hover-img d-flex align-items-center">
                           <img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid d-block mx-auto">
                          
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-9 col-lg-9 col-xl-9 mt15 mt-md0 d-flex flex-wrap">
                  <div class="row hide-edit-show no-gutters w-100">
                     <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
                        <div class="d-flex align-items-center">
                           <div class="f-20 f-md-24 w400 text-ellipsis text-capitalize">Page Title</div>                           
                        </div>
                       <div class="mt10">
						 <p class="lh150 f-14 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM </p>
						 <p class="lh150 f-14 vd-gblue-clr">Project Name </p>
						 <p class="mt5">
						 	<span class="f-12 private-btn mr5"><i class="icon-person"></i> Private</span>
						 	<span class="f-12 live-btn"><i class="icon-live"></i> Live</span>
						 	<span class="f-12 live-btn"><i class="icon-draft"></i> Draft</span>
						 </p>
					   </div>
                

                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
                        <div class="col-12 text-md-right p0">
							<div class="f-14 lh140 d-green-clr w500">Unique Viewers : 200</div>
						 </div> 
                        
                        <!------ Button------>
                        <div class="col-12 text-md-right p0 align-self-end">
                           <ul class="list-inline w400 mb0">
                            
                              <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
                              </li>
                              <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
                              </li>
							   <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
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
               <li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i> </a>
               </li>
               <li><a href="#">1</a>
               </li>
               <li><a href="#">2</a>
               </li>
               <li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </a>
               </li>
               <li><a href="#" class="active">6</a>
               </li>
               <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> </a>
               </li>
            </ul>
         </div>
      </div>
      <!----- Pagination Div End----->
   </div>
   
</div>
				
			</div>	
			
			
			
        </div>
     	
				
				
			</div>
		</div>
	</div>
</div>

<!-- Landing Page Design Selection pop_up -->
<div class="modal automation-right-modal fade" id="landingDesignModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content" id="landing-design-scroll">
			<div class="crosspos text-right"><a href="#" class="crossicon" data-dismiss="modal"><span>Close this pop-up</span><i class="icon-cross"></i></a></div>
			<div class="p15 p-md30 smart-form">
				<div class="w500 f-md-18 f-16 mt10 mb15 mb-md25">Choose the Landing Page</div>
				<!------- Step Wizard Div Start----------->
				<div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md30">
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span>1</span></div>
					<div class="title align-self-center">Design Selection</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span> 2</span></div>
					<div class="title align-self-center">Editor</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span>3</span></div>
					<div class="title align-self-center">Publish & Activate</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				</div>
				<!------- Step Wizard Div End----------->	
				
				<!---------Design Section Start---------->
				<div class="row">
					<div class="col-md-4 col-lg-3 col-xl-2 pr-lg8">
						<div class="nav flex-column nav-pills ui-vertical-tab f-16 w400 design-side-tab">
							<a class="nav-link active" href="#FromGallery1" role="tab" data-toggle="tab"><i class="icon-gallery"></i>From MyDrive</a>
							<a class="nav-link" href="#YourCreation1" role="tab" data-toggle="tab"><i class="icon-your-creation"></i>Your Creation</a>
							<a class="nav-link" href="#CreateYourOwn1" role="tab" data-toggle="tab"><i class="icon-create-your-own"></i>Create Your Own </a>
					
						</div>
					</div>
					<div class="col-md-8 col-lg-9 col-xl-10 tab-content">		
						<!----- Tab Section Start---------->
						<div class="tab-pane fade show active" role="tabpanel" id="FromGallery1">
							<!----- Filteration Div Start---------->
							
							<div class="col-12 p0 sticky-design-filter mb15 mb-md30">
							<div class="row bs-h40">
								<div class="col-12 col-md-6 col-lg-3 mt15 mt-md0">
									<select class="selectpicker f-16" title="All">
										<option>All </option>
										<option>Most Converted</option>
										<option>Brand New</option>
									</select>
								</div>
								<div class="col-12 col-md-6 col-lg-3 mt15 mt-md0">
									<select class="selectpicker f-16" title="All Use Cases">
										<option>Lead Generation</option>
										<option>Promotional</option>
										<option>Social Sharing</option>
									</select>
								</div>
								<div class="col-12 col-md-6 col-lg-3 mt15 mt-md0">
									<select class="selectpicker f-16" title="All Industry">
										<option>All Industry 1</option>
										<option>All Industry 2</option>
										<option>All Industry 3</option>
									</select>
								</div>
						
								<div class="col-12 col-md-6 col-lg-3 ml-auto">
									<div class="smart-search-field mt15 mt-md0">
										<div class="input-group">
											<input class="form-control" placeholder="Search" type="text">
											<div class="input-group-append">
												<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
											</div>
										</div>
									</div>
								</div>
							</div>
							</div>
							<!----- Filteration Div End---------->
					
							<!----- Template List section------->
										<div class="row">
											<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
												<div class="design-gallery-grid recent-active-template p15">
													<img src="images/template.png" class="img-fluid d-block mx-auto">
													<!---- Checked icon Div ---->
													<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
													<i class="icon-tick white-clr f-11"></i>
													</div>
												</div>
											<div class="d-flex justify-content-between mt10">
													<div class="f-14 w400 align-self-center">Template Name
													<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
													</div>
													<div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
															<i class="icon-show"></i>
														</a>
													</div>
												</div>
												
											</div>
											<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
												<div class="design-gallery-grid p15">
													<img src="images/template.png" class="img-fluid d-block mx-auto">
													<!---- Checked icon Div ---->
													<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
													<i class="icon-tick white-clr f-11"></i>
													</div>
												</div>
											<div class="d-flex justify-content-between mt10">
													<div class="f-14 w400 align-self-center">Template Name
													<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
													</div>
													<div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
															<i class="icon-show"></i>
														</a>
													</div>
												</div>
												
											</div>
											<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
												<div class="design-gallery-grid p15">
													<img src="images/template.png" class="img-fluid d-block mx-auto">
													<!---- Checked icon Div ---->
													<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
													<i class="icon-tick white-clr f-11"></i>
													</div>
												</div>
											<div class="d-flex justify-content-between mt10">
													<div class="f-14 w400 align-self-center">Template Name
													<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
													</div>
													<div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
															<i class="icon-show"></i>
														</a>
													</div>
												</div>
												
											</div>
											<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
												<div class="design-gallery-grid p15">
													<img src="images/template.png" class="img-fluid d-block mx-auto">
													<!---- Checked icon Div ---->
													<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
													<i class="icon-tick white-clr f-11"></i>
													</div>
												</div>
											<div class="d-flex justify-content-between mt10">
													<div class="f-14 w400 align-self-center">Template Name
													<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
													</div>
													<div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
															<i class="icon-show"></i>
														</a>
													</div>
												</div>
												
											</div>
											<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
												<div class="design-gallery-grid p15">
													<img src="images/template.png" class="img-fluid d-block mx-auto">
													<!---- Checked icon Div ---->
													<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
													<i class="icon-tick white-clr f-11"></i>
													</div>
												</div>
											<div class="d-flex justify-content-between mt10">
													<div class="f-14 w400 align-self-center">Template Name
													<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
													</div>
													<div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
															<i class="icon-show"></i>
														</a>
													</div>
												</div>
												
											</div>
											<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
												<div class="design-gallery-grid p15">
													<img src="images/template.png" class="img-fluid d-block mx-auto">
													<!---- Checked icon Div ---->
													<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
													<i class="icon-tick white-clr f-11"></i>
													</div>
												</div>
											<div class="d-flex justify-content-between mt10">
													<div class="f-14 w400 align-self-center">Template Name
													<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
													</div>
													<div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
															<i class="icon-show"></i>
														</a>
													</div>
												</div>
												
											</div>
										<!----- Pagination Div Start----->
										<div class="col-12 d-flex justify-content-between flex-wrap f-14 mt15 mt-md30">
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
												 <li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i> </a>
												 </li>
												 <li><a href="#">1</a>
												 </li>
												 <li><a href="#">2</a>
												 </li>
												 <li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </a>
												 </li>
												 <li><a href="#" class="active">6</a>
												 </li>
												 <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> </a>
												 </li>
											  </ul>
										   </div>
										</div>
										<!----- Pagination Div End----->
										</div>
		
							<!----- Template List section end------->
						</div>
						<div class="tab-pane fade" role="tabpanel" id="YourCreation1">
							<!----- Filteration Div Start---------->
							<div class="col-12 p0 sticky-design-filter mb15 mb-md30">
							<div class="row bs-h40">
								<div class="col-12 col-md-6 col-lg-3 mt15 mt-md0">
									<select class="selectpicker f-16" title="All">
										<option>All </option>
										<option>Most Converted</option>
										<option>Brand New</option>
									</select>
								</div>
								<div class="col-12 col-md-6 col-lg-3 mt15 mt-md0">
									<select class="selectpicker f-16" title="All Use Cases">
										<option>Lead Generation</option>
										<option>Promotional</option>
										<option>Social Sharing</option>
									</select>
								</div>
								<div class="col-12 col-md-6 col-lg-3 mt15 mt-md0">
									<select class="selectpicker f-16" title="All Industry">
										<option>All Industry 1</option>
										<option>All Industry 2</option>
										<option>All Industry 3</option>
									</select>
								</div>
						
								<div class="col-12 col-md-6 col-lg-3 ml-auto">
									<div class="smart-search-field mt15 mt-md0">
										<div class="input-group">
											<input class="form-control" placeholder="Search" type="text">
											<div class="input-group-append">
												<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
											</div>
										</div>
									</div>
								</div>
							</div>
							</div>
							<!----- Filteration Div End---------->
							
							<!----- Template List section------->	
									<div class="row">
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid recent-active-template p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
								<!----- Pagination Div Start----->
								<div class="col-12 d-flex justify-content-between flex-wrap f-14 mt15 mt-md30">
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
										 <li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i> </a>
										 </li>
										 <li><a href="#">1</a>
										 </li>
										 <li><a href="#">2</a>
										 </li>
										 <li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </a>
										 </li>
										 <li><a href="#" class="active">6</a>
										 </li>
										 <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> </a>
										 </li>
									  </ul>
								   </div>
								</div>
								<!----- Pagination Div End----->
					
							</div>
	
							<!----- Template List section end------->
						</div>
						<div class="tab-pane fade mt15 mt-md0" role="tabpanel" id="CreateYourOwn1">
							<div class="l-gblue-border p15 p-md50">
								<img src="images/create-your-own-img.png" class="img-fluid d-block mx-auto">
								<div class="text-center mt15 mt-md40">
									<a href="#" class="base-btn blue-btn f-16">Start From Scratch</a>
								</div>
							</div>
						</div>
						<!----- Tab Section End---------->
					</div>
				</div>
				<!---------Design Section End---------->
			</div>
		</div>
	</div>
</div>

<!-- Landing Page Publish & Activate pop_up -->
<div class="modal automation-right-modal fade" id="landingpublishModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="crosspos text-right"><a href="#" class="crossicon" data-dismiss="modal"><span>Close this pop-up</span><i class="icon-cross"></i></a></div>
			<div class="p15 p-md30 smart-form">
				<div class="row align-items-center mb15 mb-md25 mt15">
					<div class="col-12 col-md-12 col-lg-5 w500 f-md-18 f-16">Choose the Landing Page</div>
					<div class="col-12 col-md-12 col-lg-7 text-lg-right text-center mt15 mt-lg0">
						<a href="#" class="base-btn default-btn btn-xs-block mr5 mb15 mb-md0">Save as Draft</a>
						<a href="#" class="base-btn default-btn btn-xs-block mr5 mb15 mb-md0">Back</a>
						<a href="#" class="base-btn blue-btn btn-xs-block mt10 mt-md0">Save Activate</a>
					</div>
				</div>
				<!------- Step Wizard Div Start----------->
				<div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md30">
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span>1</span></div>
					<div class="title align-self-center">Design Selection</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span> 2</span></div>
					<div class="title align-self-center">Editor</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span>3</span></div>
					<div class="title align-self-center">Publish & Activate</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				</div>
				<!------- Step Wizard Div End----------->	
					<!---------- Where to Publish Section --------->
	<div class="row">
		<div class="col-12 f-18 w400">Where you want to publish this page?</div>
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#Onurl">
						<a class="card-title lato-font">&nbsp; On URL</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="If you want to publish & activate this page on a URL, choose this option" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="Onurl" class="collapse">
						<div class="card-body">
						<div class="smart-form puplish-form row">
							<div class="col-md-9 col-12 col-lg-9">
								<div class="input-group mb-2">
									<div class="input-group-prepend addon-icon">
										<div class="input-group-text  f-15 l-gblue-bg">eduncle.saglus.com/</div>
									</div>
									<input type="text" class="form-control rounded-left-0" placeholder="your url...">
								</div>
								<p class="f-14 mt10 d-gblue-clr mt15 mt-md20 pl-md20 pl0">You have not redirected your sub-domain to your domain,
									<a href="#" class="p-blue-clr"><u>click here</u></a> to redirect the sub-domain to your domain.
								</p>
							</div>
							<div class="col-12 col-md-3 col-lg-3 mt10 mt-md0">
								<a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a>
							</div>
						</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#collapseDownload">
						<a class="card-title lato-font">&nbsp; Download</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="You can download and save this page for future use." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="collapseDownload" class="collapse">
						<div class="card-body">
						<div class="row">
						<div class="col-12 col-md-6 col-lg-4">
						<div class="d-flex align-items-center flex-wrap">
							<p class="f-14 d-gblue-clr mb-md0 mb10 ml0 mr15  mr-md30">Download Page here</p>
							<div class="form-group mb-md0 mb10">
								<button type="submit" class="base-btn blue-btn f-16">Download </button>
							</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
						<div class="d-flex align-items-center flex-wrap">
							<p class="f-14 d-gblue-clr mb-md0 mb10 ml0 mr15  mr-md30">Download this template</p>
							<div class="form-group mb-md0 mb10">
								<button type="submit" class="base-btn blue-btn f-16">Download</button>
							</div>
							</div>
						</div>
						</div>
						<div class="row mt15 mt-md30">
						<div class="col-12 col-md-5 col-lg-3 f-14 d-gblue-clr w400 d-flex align-items-center ">
						Copy this template to other business
						</div>
						<div class="col-12 col-md-7 col-lg-3 mt15 mt-md0">
						<select class="selectpicker f-14" title="Choose Your Business" data-live-search="true">
						<option>Business Name 1</option>
						<option>Business Name 2</option>
						<option>Business Name 3</option>
						</select>
						</div>
						</div>						
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#collapseBranding">
						<a class="card-title lato-font">&nbsp; DotcomPal Branding</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="You can manage the “DotcomPal” branding from here." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="collapseBranding" class="collapse">
						<div class="card-body">						
						<div class="d-flex align-items-center flex-wrap">
							<p class="f-14 d-gblue-clr mb-md0 mb10 ml0 mr15  mr-md30">Show DotcomPal Branding</p>
							<div class="form-group mb-md0 mb10">
								<label class="switchtoggle-btn">
								<input class="switchtoggle-input" type="checkbox" checked="">
								<span class="switchtoggle-label" data-on="On" data-off="Off"></span> <span class="switchtoggle-handle"></span>
							</label>
							</div>
							</div>					
									
						</div>	
					</div>
				</div>
			</div>
		</div>
		
	</div>

   <!---------- Privacy Status Section --------->
	<div class="row mt-md30 mt15">
		<div class="col-12 f-18 w400">Privacy Status</div>
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0">
					<div class="card-header collapsed f-16" data-toggle="collapse" href="#collapsePrivacyStatus">
						<a class="card-title lato-font">&nbsp; Status of Page</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="You can set your page’s protection, status & visibility." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 	
					<div id="collapsePrivacyStatus" class="collapse set-time-drop f-14">
						<div class="card-body">
						<div class="row smart-form">
							<div class="col-md-10 col-12 col-lg-9 d-gblue-clr">
								<div class="d-flex justify-content-start flex-wrap">
									<div class="smart-radio-btn radio-strong-blue mr25 publish-radio">
										<input name="PrivacyStatus" id="Public" value="option1"  type="radio" checked>
										<label for="Public"> Public </label>
									</div>
							<!--		<div class="smart-radio-btn radio-strong-blue mr25 draft-radio">
										<input name="PrivacyStatus" id="Private" value="option1" type="radio">
										<label for="Private"> Private </label>
									</div>-->
									<div class="smart-radio-btn radio-strong-blue draft-radio">
										<input name="PrivacyStatus" id="Password" value="option1" type="radio">
										<label for="Password"> Password Protected </label>
									</div>
								</div>
								<div class="row">
								<div class="col-lg-6 col-xl-5 col-md-6 col-12 mt15">
									<div class=" relative">
									<input class="form-control f-14 pr60" id="password-field" placeholder="Password" value="" type="password">
									<div class="form-control-icon-right">
									  <button class="btn addon-icon f-15 toggle-password" toggle="#password-field" type="button"><i class="toogle-icon icon-show f-18" aria-hidden="true"></i> </button>
									</div>
									</div>
								</div>
								</div>
							</div>
							<div class="col-12 col-md-2 col-lg-3 mt10 mt-md0">
								<a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a>
							</div>
						</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 mt15 mt-md30 text-right">
				<a href="#" class="base-btn default-btn btn-xs-block mr5 mb15 mb-md0">Save as Draft</a>
				<a href="#" class="base-btn default-btn btn-xs-block mr5 mb15 mb-md0">Back</a>
				<button type="submit" class="base-btn blue-btn f-16  btn-xs-block">Save & Activate</button>
			</div>
	</div>
	<!---------- End Privacy Status Section --------->
	
	
	<!------- End Where to Publish Section -------->


			</div>
		</div>
	</div>
</div>

<!-- Add New Page Modal Popup -->
<div class="modal automation-right-modal fade" id="AddnewPageModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="p15 p-md30 smart-form h-100">
				<div class="row h-100">
					<div class="col-12">
						<div class="w500 f-md-18 f-16">Create New Page</div>
						<p class="f-14 d-gblue-clr mt5">Fill the details to create an awesome landing page</p>
						<div class="row">
							<div class="col-12 col-md-6 col-lg-5 mt15 mt-md30">
								<label for="exampleSelect1">Page Name</label>
								<input type="text" class="form-control field-h40" value="Page Name" placeholder="Page Name">
							</div>
						</div>
					</div>
					<div class="col-12 text-right mt15 align-self-end">
						<a href="javascript:void(0)" class="base-btn default-btn mr5" data-dismiss="modal">Cancel</a>
						<a href="javascript:void(0)" class="base-btn blue-btn" data-dismiss="modal" data-toggle="modal" data-target="#landingDesignModal">Create</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	

<!-- Marketing Automation (Setting) pop_up -->
<div class="modal automation-right-modal fade" id="SettingModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="p15 p-md30 smart-form modal-scrollbar">
				<div class="f-md-18 f-16 w500">Setting</div>
				<div class="mt15 mt-md30 f-14 w500">Select Conversion Goal</div>
				<div class="row mt15 mt-md25">
					<div class="col-12 col-md-6 col-lg-3 col-xl-2 smart-radio-btn radio-strong-blue">
						<input name="select-goal" type="radio" id="LeadAcquisition" checked>
						<label for="LeadAcquisition"> Lead Acquisition </label>
					</div>
					<div class="col-12 col-md-6 col-lg-3 col-xl-2 smart-radio-btn radio-strong-blue">
						<input name="select-goal" type="radio" id="Sales">
						<label for="Sales"> Sales </label>
					</div>
					<div class="col-12 col-md-6 col-lg-3 col-xl-2 smart-radio-btn radio-strong-blue">
						<input name="select-goal" type="radio" id="LinkClicks">
						<label for="LinkClicks"> Link Clicks </label>
					</div>
					<div class="col-12 col-md-6 col-lg-3 col-xl-2 smart-radio-btn radio-strong-blue">
						<input name="select-goal" type="radio" id="ShareCount">
						<label for="ShareCount"> Share Count </label>
					</div>
				</div>
				
				<div class="row f-14">
		
					<div class="col-12 mt15 mt-md30">
						<div class="f-14 w500">Select Sales Page Link</div>
						<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5 mt15 mt-md20">
							<input id="SalesPageLink1" type="checkbox">
							<label for="SalesPageLink1" class="d-inline mb0"> https://thenounproject.com/search/?q=Tick&i=675774</label>
						</div>
						<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5 mt15 mt-md20">
							<input id="SalesPageLink2" type="checkbox">
							<label for="SalesPageLink2" class="d-inline mb0"> https://thenounproject.com/search/?q=Tick&i=675774</label>
						</div>
						<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5 mt15 mt-md20">
							<input id="SalesPageLink3" type="checkbox">
							<label for="SalesPageLink3" class="d-inline mb0"> https://thenounproject.com/search/?q=Tick&i=675774</label>
						</div>
						<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5 mt15 mt-md20">
							<input id="SalesPageLink4" type="checkbox">
							<label for="SalesPageLink4" class="d-inline mb0"> https://thenounproject.com/search/?q=Tick&i=675774</label>
						</div>
					</div>
				
					<div class="col-12 mt15 mt-md30">
						<label class="d-gblue-clr">Enter this Dotcompal- Pixel Into Success URL</label>
						<div class="d-flex">
							<textarea class="form-control" rows="3"><!-- You can do this --> <iframe src="https://example.com"></iframe> <!-- But 
you CANNOT do this --> <iframe> <!DOCTYPE html> <html> <head> . . . 
</head> <body> . . . </body> </html> </iframe>https://html.com/tags/iframe/#ixzz5DxIseAXP</textarea>
							<div class="col-1">
								<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="d-gblue-clr segment-info  t-decoration-none" aria-describedby="tooltip627098"><i class="icon-information"></i></a>
							</div>
						</div>
					</div>
					
					<div class="col-12 col-md-6 mt15 mt-md30">
						<label class="d-gblue-clr">Sale Value</label>
						<input type="text" name="" class="form-control field-h40" value="10">
						<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5 mt15 mt-md20">
							<input id="analytics" type="checkbox">
							<label for="analytics" class="d-inline mb0">Update all the analytics</label>
						</div>
					</div>
		
					<div class="col-12 col-md-6 mt15 mt-md30">
						<label class="d-gblue-clr">Enter Acquired Lead Score</label>
						<input type="text" name="" class="form-control field-h40" value="10">
						<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5 mt15 mt-md20">
							<input id="analytics1" type="checkbox">
							<label for="analytics1" class="d-inline mb0">Update all the analytics</label>
						</div>
					</div>
				</div>
			</div>
			<div class="p15 p-md30 custom-modal-foooter text-right border-top-0">
				<a href="javascript:void(0)" class="base-btn default-btn f-14 mr5">Reset to default</a>
				<a href="javascript:void(0)" class="base-btn default-btn f-14 mr5" data-dismiss="modal">Cancel</a>
				<a href="#" class="base-btn blue-btn f-14">Save</a>
			</div>	
		</div>
	</div>
</div>

<!-- SMS Modal PopUp Start -->
<!-- SMS modal Pop_up -->
<div class="modal automation-right-modal fade" id="SMSModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="crosspos text-right"><a href="#" class="crossicon" data-dismiss="modal"><span>Close this pop-up</span><i class="icon-cross"></i></a></div>
			<div class="p15 p-md30 smart-form">
				<div class="row mt5 mt-md8 broadcast-email">
					<div class="col-12 col-md-7 col-lg-7">
					<div class="f-md-18 f-16 w500">Choose the Broadcast SMS</div>
					</div>
					<div class="col-12 col-md-5 col-lg-5 text-center text-md-right mt10 mt-md0 f-16 w400">
					<a href="javascript:void(0)" class="base-btn blue-btn" data-toggle="modal" data-target="#AddNewBroadcastModal"><i class="icon-add-new f-18 align-middle"></i>&nbsp;&nbsp; New SMS</a>
					</div>
				</div>
				<div class="row mt5 mt-md8 autoresponder-email">
					<div class="col-12 col-md-7 col-lg-7">
					<div class="f-md-18 f-16 w500">Choose the autoresponder sms</div>
					</div>
					<div class="col-12 col-md-5 col-lg-5 text-center text-md-right mt10 mt-md0 f-16 w400">
					<a href="javascript:void(0)" class="base-btn blue-btn" data-toggle="modal" data-target="#AddNewBroadcastModal"><i class="icon-add-new f-18 align-middle"></i>&nbsp;&nbsp; New SMS</a>
					</div>
				</div>
				<!-- Nav tabs -->
				<ul class="nav tabs-style1 f-14 f-sm-16 mt20 mt-md0" role="tablist">
				  <li class="nav-item"> <a class="nav-link active broadcast" data-toggle="tab" data-target ="#smsBroadcast">Broadcast</a> </li>
				  <li class="nav-item"> <a class="nav-link autoresponder" data-toggle="tab"  data-target ="#smsAutoresponder">Autoresponder</a> </li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
				  <div id="smsBroadcast" class="tab-pane active px0">  
					<!--- Filteration Div ---->
					<div class="row mb15 mb-md30 relative min-h-40 mt-md30 mt-15 p0">
						<!-- Table Option Div end -->
						<div class="col-md-12 col-lg-7 col-xl-7 align-items-center mb-lg0 mb15">
							<div class="row">
							
							<span class="bs-h40 table-option-hide col-12 col-12 col-md-6 mt15 mt-md0">
								<select class="selectpicker f-14" title="All SMS (1000)">
									<option>All SMS (1000)</option>
									<option>Recently added SMS (100)</option>
									<option>Recently modified SMS (50)</option>
									<option>SMS added in last 07 days (30)</option>
									<option>SMS added in last 30 days (50)</option>
								</select>
							</span>
							<span class="bs-h40 table-option-hide col-12 col-12 col-md-6 mt15 mt-md0">
								<select class="selectpicker f-14">
									<option selected>Sent</option>
									<option>Draft</option>
									<option>Schedule</option>
								</select>
							</span>
							</div>	
						</div>
						<div class="col-md-12 col-lg-5 col-xl-5 smart-form table-option-hide">
							<div class="row">		
								<div class="col-md-8 col-lg-8 col-xl-8 mb15 mb-md0 pr-md30">
									<div class="smart-search-field">
										<div class="input-group">
											<input class="form-control" placeholder="Search" type="text">
											<div class="input-group-append">
												<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-lg-4 col-xl-4 pl-md0">
									<div class="row">
										<div class="col-3 col-md-3 col-lg-4 d-flex align-self-center f-14 d-md-none d-lg-block">Show</div>
										<div class="col-9 col-md-12 col-lg-8 bs-h40">
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
					<!-- Block Section -->
					<div class="row mCustomScrollbar hautobox" data-mcs-theme="inset-3">
				   <div class="col-12 col-md-12 col-lg-8 order-2 order-lg-1 t-wauto tw-100 transition-all">
					  <div class="col-12 project-list-view-border p0 auto-img">
						 <div class="project-list-view p15 p-md20">
							<div class="row">
							   <div class="col-12 col-md-3 col-lg-3 col-xl-2">
								  <div class="media">
									 <div class="media-body ml5">
										<div class="campaign-list-view">
										   <img src="../../../images/project-img.png" class="img-fluid d-block mx-auto">
										</div>
									 </div>
								  </div>
							   </div>
							   <div class="col-12 col-md-9 col-lg-9 col-xl-10 mt15 mt-md0 d-flex flex-wrap pl-lg5">
								  <div class="row hide-edit-show no-gutters w-100">
									 <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
										<div class="d-flex align-items-center">
										   <div class="f-180 f-md-20 w500 text-ellipsis text-capitalize">SMS Title</div>
										</div>
									   <div class="f-13 d-gblue-clr mt5">
										   <p class="lh150"> Sent on Nov 18, 2017 at 4:08 PM </p>
										   <p class="lh150"><span>Sender : AR-EDUNCLE</span></p>
									   </div>
									 </div>
									 <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
										<div class="col-12 text-md-right p0">
											<div class="f-14 lh140 d-green-clr w500">Contacts : 5000</div>
										 </div> 
										
										<!-- Button -->
										<div class="col-12 text-md-right p0 align-self-end">
										   <ul class="list-inline w400 mb0">
											
											  <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
											  </li>
											  <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
											  </li>
											   <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
											   </li>
										   </ul>
										</div>
									 </div>
								  </div>
								  
							   </div>
							</div>
						 </div>
						 <div class="project-list-view p15 p-md20">
							<div class="row">
							   <div class="col-12 col-md-3 col-lg-3 col-xl-2">
								  <div class="media">
									 <div class="media-body ml5">
										<div class="campaign-list-view">
										   <img src="../../../images/project-img.png" class="img-fluid d-block mx-auto">
										</div>
									 </div>
								  </div>
							   </div>
							   <div class="col-12 col-md-9 col-lg-9 col-xl-10 mt15 mt-md0 d-flex flex-wrap pl-lg5">
								  <div class="row hide-edit-show no-gutters w-100">
									 <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
										<div class="d-flex align-items-center">
										   <div class="f-180 f-md-20 w500 text-ellipsis text-capitalize">SMS Title</div>
										</div>
									   <div class="f-13 d-gblue-clr mt5">
										   <p class="lh150"> Sent on Nov 18, 2017 at 4:08 PM </p>
										   <p class="lh150"><span>Sender : AR-EDUNCLE</span></p>
									   </div>
									 </div>
									 <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
										<div class="col-12 text-md-right p0">
											<div class="f-14 lh140 d-green-clr w500">Contacts : 5000</div>
										 </div> 
										
										<!-- Button -->
										<div class="col-12 text-md-right p0 align-self-end">
										   <ul class="list-inline w400 mb0">
											
											  <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
											  </li>
											  <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
											  </li>
											  <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
											   </li>
										   </ul>
										</div>
									 </div>
								  </div>
								  
							   </div>
							</div>
						 </div>
						 <div class="project-list-view p15 p-md20">
							<div class="row">
							   <div class="col-12 col-md-3 col-lg-3 col-xl-2">
								  <div class="media">
									 <div class="media-body ml5">
										<div class="campaign-list-view">
										   <img src="../../../images/project-img.png" class="img-fluid d-block mx-auto">
										</div>
									 </div>
								  </div>
							   </div>
							   <div class="col-12 col-md-9 col-lg-9 col-xl-10 mt15 mt-md0 d-flex flex-wrap pl-lg5">
								  <div class="row hide-edit-show no-gutters w-100">
									 <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
										<div class="d-flex align-items-center">
										   <div class="f-180 f-md-20 w500 text-ellipsis text-capitalize">SMS Title</div>
										</div>
									   <div class="f-13 d-gblue-clr mt5">
										   <p class="lh150"> Sent on Nov 18, 2017 at 4:08 PM </p>
										   <p class="lh150"><span>Sender : AR-EDUNCLE</span></p>
									   </div>
									 </div>
									 <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
										<div class="col-12 text-md-right p0">
											<div class="f-14 lh140 d-green-clr w500">Contacts : 5000</div>
										 </div> 
										
										<!-- Button -->
										<div class="col-12 text-md-right p0 align-self-end">
										   <ul class="list-inline w400 mb0">
											
											  <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
											  </li>
											  <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
											  </li>
											  <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
											   </li>
										   </ul>
										</div>
									 </div>
								  </div>
								  
							   </div>
							</div>
						 </div>
					  </div>
					  <!-- Pagination Div Start -->
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
							   <li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i> </a>
							   </li>
							   <li><a href="#">1</a>
							   </li>
							   <li><a href="#">2</a>
							   </li>
							   <li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </a>
							   </li>
							   <li><a href="#" class="active">6</a>
							   </li>
							   <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> </a>
							   </li>
							</ul>
						 </div>
					  </div>
					  <!-- Pagination Div End -->
				   </div>  
				</div>	
					</div>	
				   <div id="smsAutoresponder" class="tab-pane fade">			
					<!--- Filteration Div ---->
					<div class="row mb15 mb-md30 relative min-h-40 mt-md30 mt-15 p0">
						<!-- Table Option Div end -->
						<div class="col-md-5 col-lg-5 col-xl-5 align-items-center mb-md0 mb15">
							<div class="d-flex flex-wrap">
							<span class="bs-h40 table-option-hide col-12 col-12 col-md-10 col-lg-9 col-xl-8 px0 mt15 mt-md0">
								<select class="selectpicker f-14" title="All Autoresponder (1000)">
								  <option>All Autoresponder (1000)</option>
								  <option>Recently added Autoresponder (10)</option>
								  <option>Recently modified Autoresponder (15)</option>
								  <option>Autoresponder added in last 07 days (10)</option>
								  <option>Autoresponder added in last 30 days (10)</option>
								</select>
							</span>
							</div>	
						</div>
						<div class="col-md-7 col-lg-7 col-xl-7 smart-form table-option-hide">
							<div class="row">
								<div class="col-md-4 col-lg-4 col-xl-4">
								</div>
								<div class="col-md-5 col-lg-5 col-xl-5 mb15 mb-md0">
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
										<div class="col-3 col-md-3 col-lg-4 d-flex align-self-center f-14 d-md-none d-lg-block">Show</div>
										<div class="col-9 col-md-12 col-lg-8 bs-h40">
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

					<!-- Block Section -->
				   <div class="row mCustomScrollbar hautobox" data-mcs-theme="inset-3">
				   <div class="col-12 col-md-12 col-lg-8 order-2 order-lg-1 t-wauto tw-100 transition-all">
					  <div class="col-12 project-list-view-border p0 auto-img">
						 <div class="project-list-view p15 p-md20">
							<div class="row">
							   <div class="col-12 col-md-3 col-lg-3 col-xl-2">
								  <div class="media">
									 <div class="media-body ml5">
										<div class="campaign-list-view">
										   <img src="../../../images/project-img.png" class="img-fluid d-block mx-auto">
										</div>
									 </div>
								  </div>
							   </div>
							   <div class="col-12 col-md-9 col-lg-9 col-xl-10 mt15 mt-md0 d-flex flex-wrap pl-lg5">
								  <div class="row hide-edit-show no-gutters w-100">
									 <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
										<div class="d-flex align-items-center">
										   <div class="f-180 f-md-20 w500 text-ellipsis text-capitalize">SMS Title</div>
										</div>
									   <div class="f-13 d-gblue-clr mt5">
										   <p class="lh150"> Sent on Nov 18, 2017 at 4:08 PM </p>
										   <p class="lh150"><span>Sender : AR-EDUNCLE</span></p>
									   </div>
									 </div>
									 <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
										<div class="col-12 text-md-right p0">
											<div class="f-14 lh140 d-green-clr w500">Contacts : 5000</div>
										 </div> 
										
										<!-- Button -->
										<div class="col-12 text-md-right p0 align-self-end">
										   <ul class="list-inline w400 mb0">
											
											  <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
											  </li>
											  <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
											  </li>
											  <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
											   </li>
										   </ul>
										</div>
									 </div>
								  </div>
								  
							   </div>
							</div>
						 </div>
						 <div class="project-list-view p15 p-md20">
							<div class="row">
							   <div class="col-12 col-md-3 col-lg-3 col-xl-2">
								  <div class="media">
									 <div class="media-body ml5">
										<div class="campaign-list-view">
										   <img src="../../../images/project-img.png" class="img-fluid d-block mx-auto">
										</div>
									 </div>
								  </div>
							   </div>
							   <div class="col-12 col-md-9 col-lg-9 col-xl-10 mt15 mt-md0 d-flex flex-wrap pl-lg5">
								  <div class="row hide-edit-show no-gutters w-100">
									 <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
										<div class="d-flex align-items-center">
										   <div class="f-180 f-md-20 w500 text-ellipsis text-capitalize">SMS Title</div>
										</div>
									   <div class="f-13 d-gblue-clr mt5">
										   <p class="lh150"> Sent on Nov 18, 2017 at 4:08 PM </p>
										   <p class="lh150"><span>Sender : AR-EDUNCLE</span></p>
									   </div>
									 </div>
									 <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
										<div class="col-12 text-md-right p0">
											<div class="f-14 lh140 d-green-clr w500">Contacts : 5000</div>
										 </div> 
										
										<!-- Button -->
										<div class="col-12 text-md-right p0 align-self-end">
										   <ul class="list-inline w400 mb0">
											
											  <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
											  </li>
											  <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
											  </li>
											  <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
											   </li>
										   </ul>
										</div>
									 </div>
								  </div>
								  
							   </div>
							</div>
						 </div>
						 <div class="project-list-view p15 p-md20">
							<div class="row">
							   <div class="col-12 col-md-3 col-lg-3 col-xl-2">
								  <div class="media">
									 <div class="media-body ml5">
										<div class="campaign-list-view">
										   <img src="../../../images/project-img.png" class="img-fluid d-block mx-auto">
										</div>
									 </div>
								  </div>
							   </div>
							   <div class="col-12 col-md-9 col-lg-9 col-xl-10 mt15 mt-md0 d-flex flex-wrap pl-lg5">
								  <div class="row hide-edit-show no-gutters w-100">
									 <div class="col-xl-6 col-lg-6 col-md-12 col-12 pr-md15">
										<div class="d-flex align-items-center">
										   <div class="f-180 f-md-20 w500 text-ellipsis text-capitalize">SMS Title</div>
										</div>
									   <div class="f-13 d-gblue-clr mt5">
										   <p class="lh150"> Sent on Nov 18, 2017 at 4:08 PM </p>
										   <p class="lh150"><span>Sender : AR-EDUNCLE</span></p>
									   </div>
									 </div>
									 <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt15 mt-xl0 d-flex flex-wrap text-md-right p0">
										<div class="col-12 text-md-right p0">
											<div class="f-14 lh140 d-green-clr w500">Contacts : 5000</div>
										 </div> 
										
										<!-- Button -->
										<div class="col-12 text-md-right p0 align-self-end">
										   <ul class="list-inline w400 mb0">
											
											  <li class="list-inline-item mt10"><a href="#" class="base-btn default-btn btn-h30 f-14" title="View" data-toggle="modal" data-target="#autoImageModal"><i class="icon-show"></i><span class="hide-text-md">&nbsp;  View</span></a>
											  </li>
											  <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Choose"><i class="icon-clicked"></i><span class="hide-text-md">&nbsp;  Choose</span></a>
											  </li>
											  <li class="list-inline-item mt10"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Copy"><i class="icon-copy"></i><span class="hide-text-md">&nbsp;  Copy</span></a>
											   </li>
										   </ul>
										</div>
									 </div>
								  </div>
								  
							   </div>
							</div>
						 </div>
					  </div>
					  <!-- Pagination Div Start -->
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
							   <li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i> </a>
							   </li>
							   <li><a href="#">1</a>
							   </li>
							   <li><a href="#">2</a>
							   </li>
							   <li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </a>
							   </li>
							   <li><a href="#" class="active">6</a>
							   </li>
							   <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> </a>
							   </li>
							</ul>
						 </div>
					  </div>
					  <!-- Pagination Div End -->
				   </div>
				   </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- SMS Send Option (Design Selection) pop_up -->
<div class="modal automation-right-modal fade" id="SMSDesignSelectionModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content" id="designmodal-scroll">
			<div class="crosspos text-right"><a href="#" class="crossicon" data-dismiss="modal"><span>Close this pop-up</span><i class="icon-cross"></i></a></div>
			<div class="p15 p-md30 smart-form">
				<div class="w500 f-md-18 f-16 mt10 mb15 mb-md25">Send SMS</div>
				<!------- Step Wizard Div Start----------->
				<div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md30">
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr10 mb5">
					<div class="circle-num"><span>1</span></div>
					<div class="title align-self-center">Design Selection</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="d-flex justify-content-start flex-wrap mr10 mb5">
					<div class="circle-num"><span> 2</span></div>
					<div class="title align-self-center">Editor</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="d-flex justify-content-start flex-wrap mr10 mb5">
					<div class="circle-num"><span>3</span></div>
					<div class="title align-self-center">Contact</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="d-flex justify-content-start flex-wrap mr10 mb5">
					<div class="circle-num"><span>4</span></div>
					<div class="title align-self-center">Sending Option</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="d-flex justify-content-start flex-wrap mr10 mb5">
					<div class="circle-num"><span>5</span></div>
					<div class="title align-self-center">Summary & Send</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				</div>
				<!------- Step Wizard Div End----------->	
				
				<!---------Design Section Start---------->
				<div class="row">
					<div class="col-md-4 col-lg-3 col-xl-2 pr-lg8">
						<div class="nav flex-column nav-pills ui-vertical-tab f-14 f-md-15 w400 design-side-tab">
							<a class="nav-link active" href="#smsFromGallery" role="tab" data-toggle="tab"><i class="icon-gallery"></i>From Gallery</a>
							<a class="nav-link" href="#smsYourCreation" role="tab" data-toggle="tab"><i class="icon-your-creation"></i>From My Templates</a>
					
						</div>
					</div>
					<div class="col-md-8 col-lg-9 col-xl-10 tab-content">		
						<!----- Tab Section Start---------->
						<div class="tab-pane fade show active" role="tabpanel" id="smsFromGallery">
							<!----- Filteration Div Start---------->
							<div class="col-12 p0 sticky-design-filter mb15 mb-md30">
							<div class="row bs-h40">
								<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt15 mt-md0">
									<select class="selectpicker f-16" title="All">
										<option>All </option>
										<option>Most Converted</option>
										<option>Brand New</option>
									</select>
								</div>
								<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt15 mt-md0">
									<select class="selectpicker f-16" title="All Industry">
										<option>All Industry 1</option>
										<option>All Industry 2</option>
										<option>All Industry 3</option>
									</select>
								</div>
						
								<div class="col-12 col-md-12 col-lg-4 col-xl-4 ml-auto">
									<div class="smart-search-field mt15 mt-lg0">
										<div class="input-group">
											<input class="form-control" placeholder="Search" type="text">
											<div class="input-group-append">
												<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
											</div>
										</div>
									</div>
								</div>
							</div>
							</div>
							<!----- Filteration Div End---------->
					
							<!----- Template List section------->				
								<div class="row">
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<a href="#" class="design-gallery-grid recent-active-template p15">
									  <img src="images/plain-text-image.png" class="img-fluid d-block mx-auto">
									  <!---- Checked icon Div ---->
									  <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										 <i class="icon-tick white-clr f-11"></i>
									  </div>
								   </a>
								   <div class="d-flex mt10">
									  <div class="f-14 w400 align-self-center">
										Plain Template
									  </div>
								   </div>
								</div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <!----- Pagination Div Start----->
								   <div class="col-12 d-flex justify-content-between flex-wrap f-14 mt15 mt-md30">
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
											<li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i> </a>
											</li>
											<li><a href="#">1</a>
											</li>
											<li><a href="#">2</a>
											</li>
											<li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </a>
											</li>
											<li><a href="#" class="active">6</a>
											</li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> </a>
											</li>
										 </ul>
									  </div>
								   </div>
								   <!----- Pagination Div End----->
								</div>

							<!----- Template List section end------->
							
						</div>
						<div class="tab-pane fade" role="tabpanel" id="smsYourCreation">
							<!----- Filteration Div Start---------->
							<div class="col-12 p0 sticky-design-filter mb15 mb-md30">
							<div class="row bs-h40">
								<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt15 mt-md0">
									<select class="selectpicker f-16" title="All">
										<option>All </option>
										<option>Most Converted</option>
										<option>Brand New</option>
									</select>
								</div>
								<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt15 mt-md0">
									<select class="selectpicker f-16" title="All Industry">
										<option>All Industry 1</option>
										<option>All Industry 2</option>
										<option>All Industry 3</option>
									</select>
								</div>
						
								<div class="col-12 col-md-12 col-lg-4 col-xl-4 ml-auto">
									<div class="smart-search-field mt15 mt-lg0">
										<div class="input-group">
											<input class="form-control" placeholder="Search" type="text">
											<div class="input-group-append">
												<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
											</div>
										</div>
									</div>
								</div>
							</div>
							</div>
							<!----- Filteration Div End---------->
							
							<!----- Template List section------->
									<div class="row">
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<a href="#" class="design-gallery-grid recent-active-template p15">
									  <img src="images/plain-text-image.png" class="img-fluid d-block mx-auto">
									  <!---- Checked icon Div ---->
									  <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										 <i class="icon-tick white-clr f-11"></i>
									  </div>
								   </a>
								   <div class="d-flex mt10">
									  <div class="f-14 w400 align-self-center">
										Plain Template
									  </div>
								   </div>
								</div>
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
								<div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div><div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div><div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div><div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div><div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div><div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div><div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div><div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div><div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div><div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div><div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									<div class="design-gallery-grid p15">
										<img src="images/template.png" class="img-fluid d-block mx-auto">
										<!---- Checked icon Div ---->
										<div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
										</div>
									</div>
									<div class="d-flex justify-content-between mt10 flex-md-wrap flex-xl-nowrap">
										<div class="f-14 w400">Template Name
										<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
										</div>
										<div class="col-4 col-md-12 col-xl-4 p0 text-right mt10 mt-xl0"><a href="#" class="automation-delete-btn  t-decoration-none mr5" data-toggle="modal" data-target="#deleteModal">
												<i class="icon-delete"></i>
											</a>
											<a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
												<i class="icon-show"></i>
											</a>
										</div>
									</div>
									
								</div>
							 <!----- Pagination Div Start----->
								   <div class="col-12 d-flex justify-content-between flex-wrap f-14 mt15 mt-md30">
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
											<li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i> </a>
											</li>
											<li><a href="#">1</a>
											</li>
											<li><a href="#">2</a>
											</li>
											<li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </a>
											</li>
											<li><a href="#" class="active">6</a>
											</li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> </a>
											</li>
										 </ul>
									  </div>
								   </div>
								   <!----- Pagination Div End--->
					
							</div>
							
							<!----- Template List section end------->
						</div>
						<!----- Tab Section End---------->
					</div>
				</div>
				<!---------Design Section End---------->
			</div>
		</div>
	</div>
</div>

<!-- SMS Send Option (Contact) pop_up -->
<div class="modal automation-right-modal fade" id="SMSContactModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">	
			<div class="crosspos text-right"><a href="#" class="crossicon" data-dismiss="modal"><span>Close this pop-up</span><i class="icon-cross"></i></a></div>
			<div class="p15 p-md30 smart-form">
				<div class="row align-items-center mb15 mb-md25 mt15">
					<div class="col-12 col-md-12 col-lg-5 w500 f-md-18 f-16">Send SMS </div>
					<div class="col-12 col-md-12 col-lg-7 text-lg-right text-center mt15 mt-lg0">
						<a href="#" class="base-btn default-btn f-16 btn-xs-block mr5 mb15 mb-md0">Save as Draft</a>
						<a href="#" class="base-btn default-btn f-16 btn-xs-block mr5 mb15 mb-md0">Back</a>
						<a href="#" class="base-btn blue-btn btn-xs-block mt10 mt-md0">Next </a>
					</div>
				</div>
				<!-- Step Wizard Div Start -->
				<div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md25">
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span><i class="fa fa-check"></i></span></div>
					<div class="title align-self-center">Design Selection</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span><i class="fa fa-check"></i></span></div>
					<div class="title align-self-center">Editor</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span>3</span></div>
					<div class="title align-self-center">Contact</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span>4</span></div>
					<div class="title align-self-center">Sending Option</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div> 
				  <div class="d-flex justify-content-start flex-wrap mb5">
					<div class="circle-num"><span>5</span></div>
					<div class="title align-self-center">Summary & Send</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				</div>
				<!-- Step Wizard Div End -->
				<!-- Radio Button Div -->
				<div class="d-flex justify-content-start flex-wrap mb15 mb-md25 align-items-center">
					<!--<div class="smart-radio-btn radio-strong-blue mr15 mr-md60">
					<input name="mailing" id="mailing1" value="option1" class="mail-group-switch" type="radio" checked="">
					<label for="mailing1" class="mb-lg0"> Choose Contacts Manually </label>
					</div>
					<div class="smart-radio-btn radio-strong-blue">
					<input name="mailing" id="mailing" value="option1" class="mail-group-switch" type="radio">
					<label for="mailing" class="mb-lg0"> Quick Mailing Group </label>
					</div>-->
					<span class="ml-auto base-btn gradient-btn w500">Total Contacts: 2000</span>
				</div>
				<!-- Radio Button Div End -->
				<!-- Choose Contacts Manually Start -->
				<div class="row contact-manually-group">
					<div class="mCustomScrollbar contact-scrollbar w-100" data-mcs-theme="inset-3">
						<div class="col-12">
							<div class="row">
								<div class="col-12 col-md-12 col-lg-6 mb15 mb-md30">
									<div class="subscribers-section radius3">
										<div class="title-header f-16 lato-font w400 p15 px-md20 d-flex align-items-center">
											<i class="icon-add-third f-20 s-green-clr white-bg d-inline-block rounded-circle mr12"></i>Include List
										</div>
										<div class="d-flex justify-content-between flex-wrap bs-h40 pt15 pt-md20 px-md30 px15 row">
											<div class="col-md-7">
												<select class="selectpicker f-14" title="Highest Click Rate (10)">
													<option>All List (50)</option>
													<option>Sortby Highest Open Rate</option>
													<option>Sortby Highest Click Rate</option>
													<option>Sortby Frequently Used</option>
												</select>
											</div>
											<div class="col-md-5 smart-search-field mt15 mt-md0">
												<div class="input-group flex-lg-nowrap flex-wrap">
													<input class="form-control" placeholder="Search" type="text">
													<div class="input-group-append">
														<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
													</div>
												</div>
											</div>
										</div>
										<div class="mCustomScrollbar h392 f-14" data-mcs-theme="inset-3">
											<div class="p15 py-md20 px-md30 d-gblue-clr">
												<ul class="mailing-group-list">
													<li>
														<div class="row w500 vd-gblue-clr">
															<div class="col-8 col-md-9 col-lg-8 ">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox8" name="my_checkbox" type="checkbox">
																	<label for="checkbox8" class="mb0 pl-md15 d-inline"> Lists Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4">Contacts</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox9" type="checkbox">
																	<label for="checkbox9" class="mb0 pl-md15 d-inline"> Lists Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox10" type="checkbox">
																	<label for="checkbox10" class="mb0 pl-md15 d-inline"> Lists Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox11" type="checkbox">
																	<label for="checkbox11" class="mb0 pl-md15 d-inline"> Lists Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox12" type="checkbox">
																	<label for="checkbox12" class="mb0 pl-md15 d-inline"> Lists Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox13" type="checkbox">
																	<label for="checkbox13" class="mb0 pl-md15 d-inline"> Lists Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox14" type="checkbox">
																	<label for="checkbox14" class="mb0 pl-md15 d-inline"> Lists Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-12 col-lg-6 mb15 mb-md30">
									<div class="subscribers-section radius3">
										<div class="title-header f-16 lato-font w400 p15 px-md20 d-flex align-items-center">
											<i class="icon-add-third f-20 s-green-clr white-bg d-inline-block rounded-circle mr12"></i>Include Tags
										</div>
										<div class="d-flex justify-content-between flex-wrap bs-h40 pt15 pt-md20 px-md30 px15 row">
											<div class="col-md-7">
												<select class="selectpicker f-14" title="Highest Click Rate (10)">
													<option>All Tags (50)</option>
													<option>Sortby Highest Open Rate</option>
													<option>Sortby Highest Click Rate</option>
													<option>Sortby Frequently Used</option>
												</select>
											</div>
											<div class="col-md-5 pl-md15 smart-search-field mt15 mt-md0">
												<div class="input-group flex-lg-nowrap flex-wrap">
													<input class="form-control" placeholder="Search" type="text">
													<div class="input-group-append">
														<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
													</div>
												</div>
											</div>
										</div>
										<div class="mCustomScrollbar h392 f-14" data-mcs-theme="inset-3">
											<div class="p15 py-md20 px-md30 d-gblue-clr">
												<ul class="mailing-group-list">
													<li>
														<div class="smart-checkbox-btn checkbox-strong-blue">
															<input id="checkbox15" name="my_checkbox" type="checkbox">
															<label for="checkbox15" class="mb0 pl-md15 d-inline w500 vd-gblue-clr"> Tags Name</label>
														</div>
													</li>
													<li>
														<div class="smart-checkbox-btn checkbox-strong-blue">
															<input id="checkbox16" name="my_checkbox" type="checkbox">
															<label for="checkbox16" class="mb0 pl-md15 d-inline"> Tags Name 1</label>
														</div>
													</li>
													<li>
														<div class="smart-checkbox-btn checkbox-strong-blue">
															<input id="checkbox17" name="my_checkbox" type="checkbox">
															<label for="checkbox17" class="mb0 pl-md15 d-inline"> Tags Name 2</label>
														</div>
													</li>
													<li>
														<div class="smart-checkbox-btn checkbox-strong-blue">
															<input id="checkbox18" name="my_checkbox" type="checkbox">
															<label for="checkbox18" class="mb0 pl-md15 d-inline"> Tags Name 3</label>
														</div>
													</li>
													<li>
														<div class="smart-checkbox-btn checkbox-strong-blue">
															<input id="checkbox19" name="my_checkbox" type="checkbox">
															<label for="checkbox19" class="mb0 pl-md15 d-inline"> Tags Name 4</label>
														</div>
													</li>
													<li>
														<div class="smart-checkbox-btn checkbox-strong-blue">
															<input id="checkbox20" name="my_checkbox" type="checkbox">
															<label for="checkbox20" class="mb0 pl-md15 d-inline"> Tags Name 5</label>
														</div>
													</li>
													<li>
														<div class="smart-checkbox-btn checkbox-strong-blue">
															<input id="checkbox21" name="my_checkbox" type="checkbox">
															<label for="checkbox21" class="mb0 pl-md15 d-inline"> Tags Name 6</label>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!--<div class="col-12 col-md-12 col-lg-6 mb15 mb-md30">
									<div class="subscribers-section radius3">
										<div class="title-header f-16 lato-font w400 p15 px-md20 d-flex align-items-center">
											<i class="icon-add-third f-20 s-green-clr white-bg d-inline-block rounded-circle mr12"></i>Suppression List
										</div>
										<div class="d-flex justify-content-between flex-wrap bs-h40 pt15 pt-md20 px-md30 px15 row">
											<div class="col-12 pl-md15 smart-search-field mt15 mt-md0">
												<div class="input-group flex-lg-nowrap flex-wrap">
													<input class="form-control" placeholder="Search" type="text">
													<div class="input-group-append">
														<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
													</div>
												</div>
											</div>
										</div>
										<div class="mCustomScrollbar h392 f-14" data-mcs-theme="inset-3">
											<div class="p15 py-md20 px-md30 d-gblue-clr">
												<ul class="mailing-group-list">
													<li>
														<div class="row w500 vd-gblue-clr">
															<div class="col-8 col-md-9 col-lg-8 ">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox22" name="my_checkbox" type="checkbox">
																	<label for="checkbox22" class="mb0 pl-md15 d-inline"> Suppression Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4">Contacts</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox23" type="checkbox">
																	<label for="checkbox23" class="mb0 pl-md15 d-inline"> Suppression List Name 1</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox24" type="checkbox">
																	<label for="checkbox24" class="mb0 pl-md15 d-inline"> Suppression List Name 2</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox25" type="checkbox">
																	<label for="checkbox25" class="mb0 pl-md15 d-inline"> Suppression List Name 3</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox26" type="checkbox">
																	<label for="checkbox26" class="mb0 pl-md15 d-inline"> Suppression List Name 4</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox27" type="checkbox">
																	<label for="checkbox27" class="mb0 pl-md15 d-inline"> Suppression List Name 5</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox28" type="checkbox">
																	<label for="checkbox28" class="mb0 pl-md15 d-inline"> Suppression List Name 6</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>-->
								<div class="col-12 col-md-12 col-lg-6 mb15 mb-md30">
									<div class="subscribers-section radius3">
										<div class="title-header f-16 lato-font w400 p15 px-md20 d-flex align-items-center">
											<i class="icon-exclude f-20 vi-red-clr white-bg d-inline-block rounded-circle mr12"></i>Exclude List
										</div>
										<div class="d-flex justify-content-between flex-wrap bs-h40 pt15 pt-md20 px-md30 px15 row">
											<div class="col-md-7">
												<select class="selectpicker f-14" title="Highest Click Rate (10)">
													<option>All List (50)</option>
													<option>Sortby Highest Open Rate</option>
													<option>Sortby Highest Click Rate</option>
													<option>Sortby Frequently Used</option>
												</select>
											</div>
											<div class="col-md-5 pl-md15 smart-search-field mt15 mt-md0">
												<div class="input-group flex-lg-nowrap flex-wrap">
													<input class="form-control" placeholder="Search" type="text">
													<div class="input-group-append">
														<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
													</div>
												</div>
											</div>
										</div>
										<div class="mCustomScrollbar h392 f-14" data-mcs-theme="inset-3">
											<div class="p15 py-md20 px-md30 d-gblue-clr">
												<ul class="mailing-group-list">
													<li>
														<div class="row w500 vd-gblue-clr">
															<div class="col-8 col-md-9 col-lg-8 ">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox29" name="my_checkbox" type="checkbox">
																	<label for="checkbox29" class="mb0 pl-md15 d-inline"> Lists Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4">Contacts</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox30" type="checkbox">
																	<label for="checkbox30" class="mb0 pl-md15 d-inline"> Lists Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox31" type="checkbox">
																	<label for="checkbox31" class="mb0 pl-md15 d-inline"> Lists Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox32" type="checkbox">
																	<label for="checkbox32" class="mb0 pl-md15 d-inline"> Lists Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox33" type="checkbox">
																	<label for="checkbox33" class="mb0 pl-md15 d-inline"> Lists Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox34" type="checkbox">
																	<label for="checkbox34" class="mb0 pl-md15 d-inline"> Lists Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox35" type="checkbox">
																	<label for="checkbox35" class="mb0 pl-md15 d-inline"> Lists Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-12 col-lg-6">
									<div class="subscribers-section radius3">
										<div class="title-header f-16 lato-font w400 p15 px-md20 d-flex align-items-center">
											<i class="icon-exclude f-20 vi-red-clr white-bg d-inline-block rounded-circle mr12"></i>Exclude Tags
										</div>
										<div class="d-flex justify-content-between flex-wrap bs-h40 pt15 pt-md20 px-md30 px15 row">
											<div class="col-md-7">
												<select class="selectpicker f-14" title="Highest Click Rate (10)">
													<option>All Tags (50)</option>
													<option>Sortby Highest Open Rate</option>
													<option>Sortby Highest Click Rate</option>
													<option>Sortby Frequently Used</option>
												</select>
											</div>
											<div class="col-md-5 pl-md15 smart-search-field mt15 mt-md0">
												<div class="input-group flex-lg-nowrap flex-wrap">
													<input class="form-control" placeholder="Search" type="text">
													<div class="input-group-append">
														<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
													</div>
												</div>
											</div>
										</div>
										<div class="mCustomScrollbar h392 f-14" data-mcs-theme="inset-3">
											<div class="p15 py-md20 px-md30 d-gblue-clr">
												<ul class="mailing-group-list">
													<li>
														<div class="smart-checkbox-btn checkbox-strong-blue">
															<input id="checkbox36" name="my_checkbox" type="checkbox">
															<label for="checkbox36" class="mb0 pl-md15 d-inline w500 vd-gblue-clr"> Tags Name</label>
														</div>
													</li>
													<li>
														<div class="smart-checkbox-btn checkbox-strong-blue">
															<input id="checkbox37" name="my_checkbox" type="checkbox">
															<label for="checkbox37" class="mb0 pl-md15 d-inline"> Tags Name 1</label>
														</div>
													</li>
													<li>
														<div class="smart-checkbox-btn checkbox-strong-blue">
															<input id="checkbox38" name="my_checkbox" type="checkbox">
															<label for="checkbox38" class="mb0 pl-md15 d-inline"> Tags Name 2</label>
														</div>
													</li>
													<li>
														<div class="smart-checkbox-btn checkbox-strong-blue">
															<input id="checkbox39" name="my_checkbox" type="checkbox">
															<label for="checkbox39" class="mb0 pl-md15 d-inline"> Tags Name 3</label>
														</div>
													</li>
													<li>
														<div class="smart-checkbox-btn checkbox-strong-blue">
															<input id="checkbox40" name="my_checkbox" type="checkbox">
															<label for="checkbox40" class="mb0 pl-md15 d-inline"> Tags Name 4</label>
														</div>
													</li>
													<li>
														<div class="smart-checkbox-btn checkbox-strong-blue">
															<input id="checkbox41" name="my_checkbox" type="checkbox">
															<label for="checkbox41" class="mb0 pl-md15 d-inline"> Tags Name 5</label>
														</div>
													</li>
													<li>
														<div class="smart-checkbox-btn checkbox-strong-blue">
															<input id="checkbox42" name="my_checkbox" type="checkbox">
															<label for="checkbox42" class="mb0 pl-md15 d-inline"> Tags Name 6</label>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Choose Contacts Manually End -->
				<!-- Quick Mailing Group Start -->
				<div class="row quick-mailing-group">
					<div class="mCustomScrollbar contact-scrollbar w-100" data-mcs-theme="inset-3">
						<div class="col-12">
							<div class="row">
								<div class="col-12 col-md-12 col-lg-6 mb15 mb-lg0">
									<div class="subscribers-section radius3">

										<div class="title-header f-16 lato-font w400 p15 px-md20 d-flex align-items-center">
											<i class="icon-add-third f-20 s-green-clr white-bg d-inline-block rounded-circle mr12"></i>Include Quick Mailing Group
										</div>

										<div class="d-flex justify-content-between flex-wrap bs-h40 pt15 pt-md20 px-md30 px15 row">
											<div class="col-md-7">
												<select class="selectpicker f-14" title="Highest Click Rate (10)">
													<option>All Quick Mailing Group (50)</option>
													<option>Sortby Highest Open Rate</option>
													<option>Sortby Highest Click Rate</option>
													<option>Sortby Frequently Used</option>
												</select>
											</div>
											<div class="col-md-5 pl-md15 smart-search-field mt15 mt-md0">
												<div class="input-group">
													<input class="form-control" placeholder="Search" type="text">
													<div class="input-group-append">
														<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
													</div>
												</div>
											</div>
										</div>

										<div class="mCustomScrollbar h392 f-14" data-mcs-theme="inset-3">
											<div class="p15 py-md20 px-md30 d-gblue-clr">
												<ul class="mailing-group-list">
													<li>
														<div class="row w500 vd-gblue-clr">
															<div class="col-8 col-md-9 col-lg-8 ">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox1" name="my_checkbox" type="checkbox">
																	<label for="checkbox1" class="mb0 pl-md15 d-inline"> Quick Mailing Group Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4">Contacts</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox2" type="checkbox">
																	<label for="checkbox2" class="mb0 pl-md15 d-inline"> Quick Mailing Group 1</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox3" type="checkbox">
																	<label for="checkbox3" class="mb0 pl-md15 d-inline"> Quick Mailing Group 2</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox4" type="checkbox">
																	<label for="checkbox4" class="mb0 pl-md15 d-inline"> Quick Mailing Group 3</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox5" type="checkbox">
																	<label for="checkbox5" class="mb0 pl-md15 d-inline"> Quick Mailing Group 4</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox6" type="checkbox">
																	<label for="checkbox6" class="mb0 pl-md15 d-inline"> Quick Mailing Group 5</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox7" type="checkbox">
																	<label for="checkbox7" class="mb0 pl-md15 d-inline"> Quick Mailing Group 6</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
												</ul>
											</div>
										</div>

									</div>
								</div>
								<div class="col-12 col-md-12 col-lg-6">
									<div class="subscribers-section radius3">

										<div class="title-header f-16 lato-font w400 p15 px-md20 d-flex align-items-center">
											<i class="icon-exclude f-20 vi-red-clr white-bg d-inline-block rounded-circle mr12"></i>Exclude Quick Mailing Group
										</div>

										<div class="d-flex justify-content-between flex-wrap bs-h40 pt15 pt-md20 px-md30 px15 row">
											<div class="col-md-7">
												<select class="selectpicker f-14" title="Highest Click Rate (10)">
													<option>All Quick Mailing Group (50)</option>
													<option>Sortby Highest Open Rate</option>
													<option>Sortby Highest Click Rate</option>
													<option>Sortby Frequently Used</option>
												</select>
											</div>
											<div class="col-md-5 pl-md15 smart-search-field mt15 mt-md0">
												<div class="input-group">
													<input class="form-control" placeholder="Search" type="text">
													<div class="input-group-append">
														<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
													</div>
												</div>
											</div>
										</div>

										<div class="mCustomScrollbar h392 f-14" data-mcs-theme="inset-3">
											<div class="p15 py-md20 px-md30 d-gblue-clr">
												<ul class="mailing-group-list">
													<li>
														<div class="row w500 vd-gblue-clr">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox11" name="my_checkbox" type="checkbox">
																	<label for="checkbox11" class="mb0 pl-md15 d-inline"> Quick Mailing Group Name</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4">Contacts</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox22" type="checkbox">
																	<label for="checkbox22" class="mb0 pl-md15 d-inline"> Quick Mailing Group 1</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox33" type="checkbox">
																	<label for="checkbox33" class="mb0 pl-md15 d-inline"> Quick Mailing Group 2</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox44" type="checkbox">
																	<label for="checkbox44" class="mb0 pl-md15 d-inline"> Quick Mailing Group 3</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox55" type="checkbox">
																	<label for="checkbox55" class="mb0 pl-md15 d-inline"> Quick Mailing Group 4</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox66" type="checkbox">
																	<label for="checkbox66" class="mb0 pl-md15 d-inline"> Quick Mailing Group 5</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-8 col-md-9 col-lg-8">
																<div class="smart-checkbox-btn checkbox-strong-blue">
																	<input id="checkbox77" type="checkbox">
																	<label for="checkbox77" class="mb0 pl-md15 d-inline"> Quick Mailing Group 6</label>
																</div>
															</div>
															<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
														</div>
													</li>
												</ul>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- Quick Mailing Group End -->
				<div class="row mt15 mt-md30">
					<div class="text-right col-12">
						<a href="#" class="base-btn default-btn btn-xs-block mr5 mb15 mb-md0">Save as Draft</a>
						<a href="#" class="base-btn default-btn btn-xs-block mr5 mb15 mb-md0">Back</a>
						<a href="#" class="base-btn blue-btn btn-xs-block mt10 mt-md0">Next </a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- SMS Send Option (Sending Option) pop_up -->
<div class="modal automation-right-modal fade" id="SMSSendingOptionModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">	
			<div class="crosspos text-right"><a href="#" class="crossicon" data-dismiss="modal"><span>Close this pop-up</span><i class="icon-cross"></i></a></div>
			<div class="p15 p-md30 smart-form">
				<div class="row align-items-center mb15 mb-md25 mt15">
					<div class="col-12 col-md-12 col-lg-5 w500 f-md-18 f-16">Send SMS</div>
					<div class="col-12 col-md-12 col-lg-7 text-lg-right text-center mt15 mt-lg0">
						<a href="#" class="base-btn default-btn btn-xs-block mr5 mb15 mb-md0">Save as Draft</a>
						<a href="#" class="base-btn default-btn btn-xs-block mr5 mb15 mb-md0">Back</a>
						<a href="#" class="base-btn blue-btn btn-xs-block mt10 mt-md0">Next</a>
					</div>
				</div>
				<!-- Step Wizard Div Start -->
				<div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md30">
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span><i class="fa fa-check"></i></span></div>
					<div class="title align-self-center">Design Selection</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span><i class="fa fa-check"></i></span></div>
					<div class="title align-self-center">Editor</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span><i class="fa fa-check"></i></span></div>
					<div class="title align-self-center">Contact</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span>4</span></div>
					<div class="title align-self-center">Sending Option</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span>5</span></div>
					<div class="title align-self-center">Summary & Send</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				</div>
				<!-- Step Wizard Div End -->	
				<!-- Sending Options Section -->
				<div class="row">
					<div class="col-12 f-18 w400">Sending Option</div>
					<div class="col-12 segment-accordion mt-md20 mt15">
						<div id="accordion" class="accordion">
							<div class="card mb-0 f-16">
								<div class="card-header collapsed" data-toggle="collapse" href="#collapsePublish1">
									<a class="card-title lato-font">&nbsp; Configure Sending Setting</a>
								</div>
								 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define required details for this SMS" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a>
								 
								<div id="collapsePublish1" class="collapse set-time-drop f-14">
								<div class="card-body">
									<div class="row">
										<div class="col-12 col-md-6">
                                    <div class="form-group mb-md0">
                                        <label class="d-gblue-clr">
                                            Sender <span class="vi-red-clr">*</span>
                                            <a href="javascript:void(0);"
                                                data-toggle="tooltip"
                                                data-placement="right"
                                                title=""
                                                data-original-title="Choose shortcode or phone number that the SMS is to be sent from"
                                                class="d-inline-block d-gblue-clr ml10 t-decoration-none">
                                                <i class="icon-information"></i>
                                            </a>
                                        </label>
                                        <select class="selectpicker" title="Select">
                                            <option selected>AR-EDUNCLE</option>
                                            <option>MD-SAGLUS</option>
                                            <option>+919100000000</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 smtp-dropdown">
                                    <div class="form-group mb-md0">
                                        <label class="d-gblue-clr">
                                            SSP<span class="vi-red-clr">*</span>

                                            <a href="javascript:void(0);"
                                                data-toggle="tooltip"
                                                data-placement="right"
                                                title=""
                                                data-original-title="Choose Sending SMS Provider that will send the SMS to the contacts"
                                                class="d-inline-block d-gblue-clr ml10 t-decoration-none">
                                                <i class="icon-information"></i>
                                            </a>
                                        </label>
                                        <div class="dropdown smtp-setting-dropdown w-100">
                                            <button class="btn base-btn default-btn dropdown-toggle btn-block btn-h50 text-left" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="caret-right pull-left text-truncate pr15">Default SSP </span>
                                            </button>
                                            <div class="dropdown-menu w-100 h-auto f-14" aria-labelledby="dropdownMenu1">
                                                <!-- Searchbox Field -->
                                                <div class="bs-searchbox-field">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search" />
                                                        <div class="input-group-append">
                                                            <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Scrollbar Div start -->
                                                <div class="selectplayer-drop f-14" data-mcs-theme="inset-3">
                                                    <!--<li class="smtp-item">Default SMTP</li>-->
                                                    <li class="dropdown-item">
                                                        <div class="smart-checkbox-btn checkbox-strong-blue text-truncate player-value">
                                                            <input id="DefaultSMS" type="checkbox" checked />
                                                            <label for="DefaultSMS" title="Default SSP">Default SSP </label>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <div class="smart-checkbox-btn checkbox-strong-blue text-truncate player-value">
                                                            <input id="SMSRotation" type="checkbox" />
                                                            <label for="SMSRotation" title="SSP Rotation">SSP Rotation</label>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <!--<li class="smtp-item">SMTP 1</li>-->
                                                    <li class="dropdown-item">
                                                        <div class="smart-checkbox-btn checkbox-strong-blue text-truncate player-value player-delete-width">
                                                            <input id="GupShup" type="checkbox" />
                                                            <label for="GupShup" title="GupShup">GupShup</label>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <div class="smart-checkbox-btn checkbox-strong-blue text-truncate player-value player-delete-width">
                                                            <input id="Twilio" type="checkbox" />
                                                            <label for="Twilio" title="Twilio">Twilio</label>
                                                        </div>
                                                    </li>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
									</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 text-right mt15 mt-md30">
						<a href="#" class="base-btn default-btn f-14 mr5 btn-xs-block">Save as Draft</a>
						<a href="javascript:void(0)" class="base-btn default-btn f-14 mr5 btn-xs-block mt10 mt-md0">Back</a>
						<a href="#" class="base-btn blue-btn f-14 btn-xs-block mt10 mt-md0">Next</a>
					</div>
				</div>
				<!-- Sending Options Section -->
			</div>
		</div>
	</div>
</div>


<!-- SMS Summary & Send pop_up -->
<div class="modal automation-right-modal fade" id="SMSSummarySendModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="crosspos text-right"><a href="#" class="crossicon" data-dismiss="modal"><span>Close this pop-up</span><i class="icon-cross"></i></a></div>
			<div class="p15 p-md30 smart-form">
				<div class="row align-items-center mb15 mb-md25 mt15">
					<div class="col-12 col-md-12 col-lg-5 w500 f-md-18 f-16">Send SMS </div>
					<div class="col-12 col-md-12 col-lg-7 text-lg-right text-center mt15 mt-lg0">
						<a href="javascript:void(0)" class="base-btn default-btn btn-xs-block mr5">Save as draft</a>
						<a href="javascript:void(0)" class="base-btn default-btn btn-xs-block mr5 mt10 mt-md0">Back</a>
						<a href="#" class="base-btn blue-btn btn-xs-block mt10 mt-md0">Send</a>
					</div>
				</div>
				<!-- Step Wizard Div Start -->
				<div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md30">
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span><i class="fa fa-check"></i></span></div>
					<div class="title align-self-center">Design Selection</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span><i class="fa fa-check"></i></span></div>
					<div class="title align-self-center">Editor</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				   <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span><i class="fa fa-check"></i></span></div>
					<div class="title align-self-center">Contact</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span><i class="fa fa-check"></i></span></div>
					<div class="title align-self-center">Sending Option</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span>5</span></div>
					<div class="title align-self-center">Summary & Send</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				  </div>
				</div>
				<!-- Step Wizard Div End -->	
				<!-- Preview & Publish -->
				<div class="row">
					<div class="col-12">
						<div class="l-gblue-border radius5 p15 p-md30 pr-md20">
							<div class="row">
								<div class="col-lg-3 col-md-4">
									<div class="design-selection-img">
										<img src="<?php echo $basedir; ?>images/project-img-lg.png" class="img-fluid">
									</div>
								<div class="d-flex justify-content-between mt10">
									<div class="f-14 w400">Template Name
									<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
									</div>
									<div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#libraryModalpreview" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
										</a>
									</div>
								</div>
								</div>
								<div class="col-lg-9 col-md-8 mt15 mt-md0 p0">
									<div class="table-responsive automation-table">
									<table width="100%" border="0" cellspacing="0" cellpadding="10" class="f-14 w400">
									  <tbody>
										<tr>
										  <td width="19%">Sender</td>
										  <td width="6%">:</td>
										  <td class="break-word">AR-EDUNCLE</td>
										</tr>
										<tr>
										  <td>SSP</td>
										  <td>:</td>
										  <td class="break-word">GupShup</td>
										</tr>
										<tr>
										  <td>Contacts</td>
										  <td>:</td>
										  <td class="break-word">40250</td>
										</tr>
										<tr>
										  <td>Send Insantly On</td>
										  <td>:</td>
										  <td class="break-word">27 Jun 2020 at 03:00 AM</td>
										</tr>
									  </tbody>
									</table>	
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 text-right mt15 mt-md30">
						<a href="javascript:void(0)" class="base-btn default-btn btn-xs-block mr5">Save as draft</a>
						<a href="javascript:void(0)" class="base-btn default-btn btn-xs-block mr5 mt10 mt-md0">Back</a>
						<a href="#" class="base-btn blue-btn btn-xs-block mt10 mt-md0">Send</a>
					</div>
				</div>
				<!-- Preview & Publish End -->
			</div>
		</div>
	</div>
</div>

<!-- Choose SMS Templates pop_up -->
<div class="modal automation-right-modal fade" id="ChooseSMSTemplates" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content" id="designmodal-scroll">
			<div class="crosspos text-right"><a href="#" class="crossicon" data-dismiss="modal"><span>Close this pop-up</span><i class="icon-cross"></i></a></div>
			<div class="p15 p-md30 smart-form">
				<div class="w500 f-md-18 f-16 mt10 mb15 mb-md25">Choose SMS Templates</div>
				<!---------Design Section Start---------->
				<div class="row">
					<div class="col-md-4 col-lg-3 col-xl-2 pr-lg8">
						<div class="nav flex-column nav-pills ui-vertical-tab f-14 f-md-15 w400 design-side-tab">
							<a class="nav-link active" href="#FromGallerytab" role="tab" data-toggle="tab"><i class="icon-gallery pr8"></i>From Gallery</a>
							<a class="nav-link" href="#FromMyTemplates" role="tab" data-toggle="tab"><i class="icon-your-creation pr8"></i>From My Templates</a>
							<a class="nav-link" href="#CreateFromScratch" role="tab" data-toggle="tab"><i class="icon-your-creation pr8"></i>Create From Scratch</a>
					
						</div>
					</div>
					<div class="col-md-8 col-lg-9 col-xl-10 tab-content">		
						<!----- Tab Section Start---------->
						<div class="tab-pane fade show active" role="tabpanel" id="FromGallerytab">
							<!----- Template List section------->				
								<div class="row">
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Uploaded on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Uploaded on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Uploaded on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Uploaded on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Uploaded on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Uploaded on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Uploaded on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
									  <div class="design-gallery-grid p15">
										 <img src="images/template.png" class="img-fluid d-block mx-auto">
										 <!---- Checked icon Div ---->
										 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
											<i class="icon-tick white-clr f-11"></i>
										 </div>
									  </div>
									  <div class="d-flex justify-content-between mt10">
										 <div class="f-14 w400 align-self-center">
											Template Name
											<p class="f-10 d-gblue-clr mt4">Uploaded on Nov 18, 2017 at 4:08 PM</p>
										 </div>
										 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
											<i class="icon-show"></i>
											</a>
										 </div>
									  </div>
								   </div>
								 </div>
							<!----- Template List section end------->
							
						</div>
						<div class="tab-pane fade" role="tabpanel" id="FromMyTemplates">
							<!----- Template List section------->
							<div class="row">
							   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
								  <div class="design-gallery-grid p15">
									 <img src="images/template.png" class="img-fluid d-block mx-auto">
									 <!---- Checked icon Div ---->
									 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
									 </div>
								  </div>
								  <div class="d-flex justify-content-between mt10">
									 <div class="f-14 w400 align-self-center">
										Template Name
										<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
									 </div>
									 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
										<i class="icon-show"></i>
										</a>
									 </div>
								  </div>
							   </div>
							   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
								  <div class="design-gallery-grid p15">
									 <img src="images/template.png" class="img-fluid d-block mx-auto">
									 <!---- Checked icon Div ---->
									 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
									 </div>
								  </div>
								  <div class="d-flex justify-content-between mt10">
									 <div class="f-14 w400 align-self-center">
										Template Name
										<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
									 </div>
									 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
										<i class="icon-show"></i>
										</a>
									 </div>
								  </div>
							   </div>
							   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
								  <div class="design-gallery-grid p15">
									 <img src="images/template.png" class="img-fluid d-block mx-auto">
									 <!---- Checked icon Div ---->
									 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
									 </div>
								  </div>
								  <div class="d-flex justify-content-between mt10">
									 <div class="f-14 w400 align-self-center">
										Template Name
										<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
									 </div>
									 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
										<i class="icon-show"></i>
										</a>
									 </div>
								  </div>
							   </div>
							   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
								  <div class="design-gallery-grid p15">
									 <img src="images/template.png" class="img-fluid d-block mx-auto">
									 <!---- Checked icon Div ---->
									 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
									 </div>
								  </div>
								  <div class="d-flex justify-content-between mt10">
									 <div class="f-14 w400 align-self-center">
										Template Name
										<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
									 </div>
									 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
										<i class="icon-show"></i>
										</a>
									 </div>
								  </div>
							   </div>
							   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
								  <div class="design-gallery-grid p15">
									 <img src="images/template.png" class="img-fluid d-block mx-auto">
									 <!---- Checked icon Div ---->
									 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
									 </div>
								  </div>
								  <div class="d-flex justify-content-between mt10">
									 <div class="f-14 w400 align-self-center">
										Template Name
										<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
									 </div>
									 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
										<i class="icon-show"></i>
										</a>
									 </div>
								  </div>
							   </div>
							   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
								  <div class="design-gallery-grid p15">
									 <img src="images/template.png" class="img-fluid d-block mx-auto">
									 <!---- Checked icon Div ---->
									 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
									 </div>
								  </div>
								  <div class="d-flex justify-content-between mt10">
									 <div class="f-14 w400 align-self-center">
										Template Name
										<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
									 </div>
									 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
										<i class="icon-show"></i>
										</a>
									 </div>
								  </div>
							   </div>
							   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
								  <div class="design-gallery-grid p15">
									 <img src="images/template.png" class="img-fluid d-block mx-auto">
									 <!---- Checked icon Div ---->
									 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
									 </div>
								  </div>
								  <div class="d-flex justify-content-between mt10">
									 <div class="f-14 w400 align-self-center">
										Template Name
										<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
									 </div>
									 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
										<i class="icon-show"></i>
										</a>
									 </div>
								  </div>
							   </div>
							   <div class="col-12 col-md-6 col-lg-3 mb15 mb-md30">
								  <div class="design-gallery-grid p15">
									 <img src="images/template.png" class="img-fluid d-block mx-auto">
									 <!---- Checked icon Div ---->
									 <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
										<i class="icon-tick white-clr f-11"></i>
									 </div>
								  </div>
								  <div class="d-flex justify-content-between mt10">
									 <div class="f-14 w400 align-self-center">
										Template Name
										<p class="f-10 d-gblue-clr mt4">Created on Nov 18, 2017 at 4:08 PM</p>
									 </div>
									 <div class="ml15"><a href="#" class="automation-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false">
										<i class="icon-show"></i>
										</a>
									 </div>
								  </div>
							   </div>
							 </div>
							<!----- Template List section end------->
						</div>
						<div class="tab-pane fade mt15 mt-md0" role="tabpanel" id="CreateFromScratch">
							<div class="l-gblue-border p15 p-md50">
								<img src="images/create-your-own-img.png" class="img-fluid d-block mx-auto mt-lg20">
								<div class="text-center mt15 mt-md50 mb-lg20">
									<a href="#" class="base-btn blue-btn f-16">Start From Scratch</a>
								</div>
							</div>
						</div>
						<!----- Tab Section End---------->
					</div>
				</div>
				<!---------Design Section End---------->
			</div>
		</div>
	</div>
</div>
<!-- SMS Modal PopUp End -->