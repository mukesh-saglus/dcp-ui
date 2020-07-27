<!------- Smart Header Include File---------->
<?php include '../../../../smart/html/includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<!------- Smart Page Stylesheet------=------->
<link rel="stylesheet" href="../../../css/page.css">
<!------- Smart Page Stylesheet end---------->


<div class="container-fluid p15 p-md30">

	<!------- Header Start----------->
	<div class="row mb15 mb-md30">
		<div class="col-12">
			<ul class="stepwizard-style2 f-20 f-md-24 w400 lato-font">
				<li> <a href="#">A/B Test</a> </li>
				<li> <a href="#">A/B Test Title </a> </li>
			</ul>
			<p class="f-14 w400 gblue-clr">Publish and activate your A/B test design</p>
		</div>
	</div>
	<!------- Header End ----------->

	<!------- Step Wizard Div Start----------->
	<div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md25">
		<div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
			<div class="circle-num"><span><i class="fa fa-check"></i></span>
			</div>
			<div class="title align-self-center">Design Selection</div>
			<div class="sep-line align-self-center d-none d-lg-block"></div>
		</div>
		<div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
			<div class="circle-num"><span><i class="fa fa-check"></i></span>
			</div>
			<div class="title align-self-center">Editor</div>
			<div class="sep-line align-self-center d-none d-lg-block"></div>
		</div>
		<div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
			<div class="circle-num"><span>3</span>
			</div>
			<div class="title align-self-center">Review & Publish</div>
			<div class="sep-line align-self-center d-none d-lg-block"></div>
		</div>
	</div>
	<!------- Step Wizard Div End----------->


	<!---------- Where to Publish Section --------->
	<div class="row">
		<div class="col-12 f-18 w400">Where you want to publish this A/B test?</div>
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#collapseurl">
						<a class="card-title lato-font">&nbsp; On URL</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="If you want to publish & activate this A/B test page on a URL, choose this option." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="collapseurl" class="collapse">
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
					<div class="card-header collapsed" data-toggle="collapse" href="#collapseSocialSharing">
						<a class="card-title lato-font">&nbsp; Social Sharing</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select social accounts where you want to share this A/B test page." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="collapseSocialSharing" class="collapse">
						<div class="card-body pb-1">
						<div class="col-12 col-md-12 col-lg-12 p0">
							<div class="row">

								<div class="col-md-4 col-lg-3 col-xs5 mb20">
									<a href="#" class="social-circle-icon t-decoration-none">
										<div class="fb-btn text-center social-circle-icon-size d-flex justify-content-center align-items-center">
											<i class="icon-facebook f-16 "></i>
										</div>
										<div class="px15 px-md20 f-16 text-left">Facebook</div>
									</a>
								</div>

								<div class="col-md-4 col-lg-3 col-xs5 mb20">
									<a href="#" class="social-circle-icon t-decoration-none">
										<div class="twitter-btn text-center social-circle-icon-size d-flex justify-content-center align-items-center">
											<i class="icon-twitter f-16 "></i>
										</div>
										<div class="px15 px-md20 f-16 text-left">Twitter</div>
									</a>
								</div>

								<div class="col-md-4 col-lg-3 col-xs5 mb20">
									<a href="#" class="social-circle-icon t-decoration-none">
										<div class="pinterest-btn text-center social-circle-icon-size d-flex justify-content-center align-items-center">
											<i class="icon-pinterest f-16 "></i>
										</div>
										<div class="px15 px-md20 f-16 text-left">Pinterest</div>
									</a>
								</div>

								<div class="col-md-4 col-lg-3 col-xs5 mb20">
									<a href="#" class="social-circle-icon t-decoration-none ">
										<div class="linkin-btn text-center social-circle-icon-size d-flex justify-content-center align-items-center">
											<i class="icon-linkedin f-16 "></i>
										</div>
										<div class="px15 px-md20 f-16 text-left">Linkedin</div>
									</a>
								</div>

								<div class="col-md-4 col-lg-3 col-xs5 mb20">
									<a href="#" class="social-circle-icon t-decoration-none">
										<div class="tumblr-btn text-center social-circle-icon-size d-flex justify-content-center align-items-center">
											<i class="icon-tumblr f-14 "></i>
										</div>
										<div class="px15 px-md20 f-16 text-left">Tumblr</div>
									</a>
								</div>

								<div class="col-md-4 col-lg-3 col-xs5 mb20">
									<a href="#" class="social-circle-icon t-decoration-none">
										<div class="reddit-btn text-center social-circle-icon-size d-flex justify-content-center align-items-center">
											<i class="icon-reddit f-16 "></i>
										</div>
										<div class="px15 px-md20 f-16 text-left">Reddit</div>
									</a>
								</div>

								<div class="col-md-4 col-lg-3 col-xs5 mb20">
									<a href="#" class="social-circle-icon t-decoration-none">
										<div class="reddit-btn text-center social-circle-icon-size d-flex justify-content-center align-items-center">
											<i class="icon-flipboard f-14"></i>
										</div>
										<div class="px15 px-md20 f-16 text-left">Flipboard</div>
									</a>
								</div>

								<div class="col-md-4 col-lg-3 col-xs5 mb20">
									<a href="#" class="social-circle-icon t-decoration-none">
										<div class="reddit-btn  text-center social-circle-icon-size d-flex justify-content-center align-items-center">
											<i class=" f-16 "></i>
										</div>
										<div class="px15 px-md20 f-16 text-left">Linkedin</div>
									</a>
								</div>

								<div class="col-md-4 col-lg-3 col-xs5 mb20">
									<a href="#" class="social-circle-icon t-decoration-none">
										<div class="insta-btn text-center social-circle-icon-size d-flex justify-content-center align-items-center">
											<i class="icon-instagram f-16 "></i>
										</div>
										<div class="px15 px-md20 f-16 text-left">Instagram</div>
									</a>
								</div>



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
							<p class="f-14 d-gblue-clr mb-md0 mb10 ml0 mr15  mr-md30">Download A/B Test here</p>
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


	<!------- End Where to Publish Section -------->

	<!---------- Want to Publish Section --------->
	<div class="row mt-md30 mt15">
		<div class="col-12 f-18 w400">When you want to publish?</div>
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0">
					<div class="card-header collapsed" data-toggle="collapse" href="#collapsePublish">
						<a class="card-title f-16 lato-font">&nbsp; A/B Test start date and time</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Choose to publish this A/B test page right now or later." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="collapsePublish" class="collapse set-time-drop f-14">
						<div class="card-body">
						<div class="row">
							<div class="col-md-10 col-12 col-lg-9 d-gblue-clr">
							<div class="f-14 vd-gblue-clr">A/B Test Start date</div>
								<div class="d-flex justify-content-start flex-wrap mt-md20 mt15">
									<div class="smart-radio-btn radio-strong-blue mr25 publish-radio">
										<input name="chkPassPort" id="Not-Select" value="option1" checked="" type="radio">
										<label for="Not-Select"> Now </label>
									</div>
									<div class="smart-radio-btn radio-strong-blue draft-radio">
										<input name="chkPassPort" id="select-date" value="option1" type="radio">
										<label for="select-date"> Select date and time </label>
									</div>
								</div>
								<div id="timeshow" class="mt15">
									<div class="d-flex smart-form justify-content-start flex-wrap align-items-center">
										<div class="col-xl-4 col-md-5 col-12 pl0 pr0 pr-md15 caleran-h50 mb10 mb-md0">
											<div class="input-group">
												<input type="text" name="dob" readonly class="form-control f-14" id="dob-primary-target" placeholder="Date of Birth">
												<span class="input-group-btn no-hover-focus" id="dob-primary">
												<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
												</span>
											</div>
										</div>
										<div class="pr15 pr15 pl-md5">at</div>
										<div class="px5 mb10 mb-md0">
											<select class="selectpicker f-14">
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
											<select class="selectpicker f-14">
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
										<div class="px-md5 mb10 mb-md0">
											<select class="selectpicker f-14">
												<option>AM</option>
												<option>PM</option>

											</select>
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
	</div>
	<!---------- End Want to Publish Section --------->
	
	
		  <!---------- Decide Winner Section --------->
	<div class="row mt-md30 mt15">
		<div class="col-12 f-18 w400">Decide Winner</div>
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0">
					<div class="card-header collapsed  f-16" data-toggle="collapse" href="#collapsewinner">
						<a class="card-title lato-font">&nbsp; Decide Winner</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Decide a winner of you’re A/B test based on selected attributes." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="collapsewinner" class="collapse">
						<div class="card-body smart-form">
						<div class="row">
							<div class="col-12 col-md-4 col-lg-4 col-xl-3">
								<div class="form-group d-gblue-clr mb0">
									<label class="f-14">Select A/B Test Type</label>
									<select class="selectpicker" title="Select">
										<option>Lead</option>
										<option>Promo</option>
										<option>Share</option>
										<option>Sales</option>
										<option>View</option>
									</select>
								</div>
							</div>
                            <div class="col-12 col-md-4 col-lg-4 col-xl-3 mt15 mt-md0">
								<div class="form-group d-gblue-clr mb0">
									<label class="f-14">Enter the no. of viewers</label>
									 <input type="text" class="form-control" value="" placeholder="1000" />  
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 offset-xl-3 offset-lg-1 col-xl-3 mt10 mt-md0">
									<a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a>
								</div>
						</div>
						<div class="row mt15 mt-md25"> 
						<div class="col-xs-1-5 col-sm-1-5 col-md-1-5">
								<div class="form-group d-gblue-clr mb-lg0">
									<label class="f-14">Variant A</label>
									 <input type="text" class="form-control" value="" placeholder="1000" />  
								</div>
					    </div>
						<div class="col-xs-1-5 col-sm-1-5 col-md-1-5">
								<div class="form-group d-gblue-clr mb-lg0">
									<label class="f-14">Variant B</label>
									 <input type="text" class="form-control" value="" placeholder="1000" />  
								</div>
					    </div>
						<div class="col-xs-1-5 col-sm-1-5 col-md-1-5">
								<div class="form-group d-gblue-clr mb-lg0">
									<label class="f-14">Variant C</label>
									 <input type="text" class="form-control" value="" placeholder="1000" />  
								</div>
					    </div>
						<div class="col-xs-1-5 col-sm-1-5 col-md-1-5">
								<div class="form-group d-gblue-clr mb-lg0">
									<label class="f-14">Variant D</label>
									 <input type="text" class="form-control" value="" placeholder="1000" />  
								</div>
					    </div>
						<div class="col-xs-1-5 col-sm-1-5 col-md-1-5">
								<div class="form-group d-gblue-clr mb-lg0">
									<label class="f-14">Variant E</label>
									 <input type="text" class="form-control" value="" placeholder="1000" />  
								</div>
					    </div>
						</div>
						<div class="row mt-md25 set-time-drop">
							<div class="col-md-12 col-12 col-lg-12 d-gblue-clr">
							<label class="f-14">Winning date</label>	
									<div class="d-flex smart-form justify-content-start flex-wrap align-items-center">
										<div class="col-12 col-md-4 col-lg-4 col-xl-3 pl0 pr0 pr-md15 caleran-h50">
											<div class="input-group mb10 mb-md0">
												<input type="text" name="dob" readonly class="form-control f-14" id="dob-secondary-target" placeholder="Date of Birth">
												<span class="input-group-btn no-hover-focus" id="dob-secondary">
												<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
												</span>
											</div>
										</div>
										<div class="pr15 pr15 pl-md5">at</div>
										<div class="px5 mb10 mb-md0">
											<select class="selectpicker f-14">
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
											<select class="selectpicker f-14">
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
										<div class="px-md5 mb10 mb-md0">
											<select class="selectpicker f-14">
												<option>AM</option>
												<option>PM</option>

											</select>
										</div>
								</div>
							</div>
						</div>
						</div>	
						
					</div>
				</div>
			</div>			
			   
            <div class="mt15 mt-md30 text-right">
				<a href="#" class="base-btn default-btn f-16 btn-xs-block mr5 mb15 mb-md0">Save as Draft</a>
				<a href="#" class="base-btn default-btn f-16 btn-xs-block mr5 mb15 mb-md0">Back</a>
				<button type="submit" class="base-btn blue-btn f-16  btn-xs-block">Save & Activate</button>
			</div>
		</div>
	</div>
	<!---------- End Decide Winner Section --------->
	
</div>
<!------- Smart Footer Include File---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->