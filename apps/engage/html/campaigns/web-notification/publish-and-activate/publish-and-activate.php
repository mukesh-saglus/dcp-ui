<!------- Smart Header Include File---------->
<?php include '../../../../../smart/html/includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<!------- Smart engage Stylesheet------=------->
<link rel="stylesheet" href="../../../../css/engage.css">
<!------- Smart engage Stylesheet end---------->



<div class="container-fluid p15 p-md30">

	<!------- Header Start----------->
	<div class="row mb15 mb-md30">
		<div class="col-12">
			<ul class="stepwizard-style2 w400 lato-font f-md-24 f-20">
				<li> <a href="#">Web Notification Campaign</a> </li>
				<li> <a href="#">Web Notification Campaign Title </a> </li>
			</ul>
			<p class="f-14 gblue-clr">Publish and activate freshly built web notification campaign</p>
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
		<div class="col-12 f-18 w400">Where you want to publish this campaign?</div>
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#collapseChoosesegment">
						<a class="card-title lato-font">&nbsp; Choose the segment</a>
					</div>
					<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Choose any existing segment or create a new one." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a>
					<div id="collapseChoosesegment" class="collapse">
						<div class="card-body">
							<div class="row">
								<div class="col-md-10 col-12 col-lg-9 d-gblue-clr d-flex flex-wrap p0">
									<div class="form-group d-gblue-clr Facebook-dropdown mb0 col-xl-4 col-lg-5 col-md-6 col-12">
										<select class="selectpicker" title="Select your Segment" data-live-search="true">
											<option>Dropdown Option 1</option>
											<option>Dropdown Option 2</option>
											<option>Dropdown Option 3</option>
											<option>Dropdown Option 4</option>
										</select>
									</div>
									<div class="mt-md0 mt15 px15 pl-md0">
										<a href="#" class="base-btn blue-btn f-16"><i class="icon-add-new f-18 align-middle"></i>&nbsp;&nbsp; New Segment</a>
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
									
									
									<div class="col-12 d-flex flex-wrap align-items-center d-gblue-clr mt10 mt-md20">
										<label class="mr12 mr-md32"> Allow visitors to close bar</label>
										<label class="switchtoggle-btn m-0">
											<input class="switchtoggle-input" type="checkbox" checked="">
											<span class="switchtoggle-label" data-on="On" data-off="Off"></span> 
											<span class="switchtoggle-handle"></span>
										</label>
									</div>
									<div class="col-12 d-flex flex-wrap align-items-center d-gblue-clr mt10 mt-md20">
										<label class="mr54 mr-md73"> Pushes page down</label>
										<label class="switchtoggle-btn m-0">
											<input class="switchtoggle-input" type="checkbox" checked="">
											<span class="switchtoggle-label" data-on="On" data-off="Off"></span> 
											<span class="switchtoggle-handle"></span>
										</label>
									</div>
									<div class="col-12 d-flex flex-wrap align-items-center d-gblue-clr mt10 mt-md20">
										<label class="mr10 mr-md30"> Remains in place on scroll </label>
										<label class="switchtoggle-btn m-0">
											<input class="switchtoggle-input" type="checkbox" checked="">
											<span class="switchtoggle-label" data-on="On" data-off="Off"></span> 
											<span class="switchtoggle-handle"></span>
										</label>
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
	 <!---------- DotcomPal Branding Section --------->
	<div class="row mt-md30 mt15">
		<div class="col-12 f-18 w400">DotcomPal Branding</div>
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#collapseDCPBranding">
						<a class="card-title lato-font">&nbsp; DotcomPal Branding</a>
					</div>
					<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Manage DotcomPal branding for this campaign." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a>
					<div id="collapseDCPBranding" class="collapse">
						<div class="card-body">
							<div class="row">
								<div class="col-12 d-flex flex-wrap align-items-center d-gblue-clr">
									<label class="mr10 mr-md30" for="Not-Maxlimit"> Show DotcomPal branding</label>
									<label class="switchtoggle-btn m-0">
										<input class="switchtoggle-input" type="checkbox" checked="">
										<span class="switchtoggle-label" data-on="On" data-off="Off"></span> 
										<span class="switchtoggle-handle"></span>
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	 <!---------- DotcomPal Branding Section End --------->
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
										<div class="smart-radio-btn radio-strong-blue mr25 publish-radio">
											<input name="chkMaxlimit" id="Not-Maxlimit" value="option1" checked="" type="radio">
											<label for="Not-Maxlimit"> Exclude from campaign limits </label>
										</div>
										<div class="smart-radio-btn radio-strong-blue draft-radio">
											<input name="chkMaxlimit" id="select-Maxlimit" value="option1" type="radio">
											<label for="select-Maxlimit"> Set maximum limits </label>
										</div>
									</div>
									<div id="Max-limit" class="mt15">
										<div class="d-flex smart-form">
											<div class="col-xl-10 col-md-12 col-12 pl0">
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


	</div>


	<div class="row mt-md30 mt15">
		<div class="col-12 f-18 w400">When to show?</div>
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0">
					<div class="card-header collapsed" data-toggle="collapse" href="#collapseDateAndTime">
						<a class="card-title lato-font f-16">&nbsp; Campaign start date and time</a>
					</div>
					<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define start & end date for this campaign." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a>
					<div id="collapseDateAndTime" class="collapse set-time-drop f-14">
						<div class="card-body">
							<div class="row">
								<div class="col-md-10 col-12 col-lg-9 d-gblue-clr">
									<div class="f-14 vd-gblue-clr">Campaign start date</div>
									<div class="d-flex justify-content-start flex-wrap mt20">
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
											<div class="col-xl-4 col-md-5 col-12 pl0 pr0 pr-md15">
												<div class="input-group calendar-input-group mb10 mb-md0">
													<input type="text" class="caleran-ex-left form-control f-14 " id="target-cal" readonly data-plugin-options='{"rangeOrientation":true,"showButtons":true}' placeholder="Choose Date"/>
													<span class="input-group-btn caleran-show ">
													 <button class="btn calendar-btn d-gblue-clr h50 f-19" type="button"><i class="icon-calendar"></i></button>
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
								<div class="col-12 col-md-2 col-lg-3">
									<a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a>
								</div>
							</div>
							<hr class="border-dotted">
							<div class="row">
								<div class="col-md-10 col-12 col-lg-9 d-gblue-clr">
									<div class="f-14 vd-gblue-clr">Campaign end date</div>
									<div class="d-flex justify-content-start flex-wrap mt20">
										<div class="smart-radio-btn radio-strong-blue mr25 publish-radio">
											<input name="EndDate" id="Never-ends" value="option1" checked="" type="radio">
											<label for="Never-ends"> Never ends </label>
										</div>
										<div class="smart-radio-btn radio-strong-blue draft-radio">
											<input name="EndDate" id="select-datetime" value="option1" type="radio">
											<label for="select-datetime"> Select date and time </label>
										</div>
									</div>
									<div id="Testingenddate" class="mt15">
										<div class="d-flex smart-form justify-content-start flex-wrap align-items-center">
											<div class="col-xl-4 col-md-5 col-12 pl0 pr0 pr-md15">
												<div class="input-group calendar-input-group mb10 mb-md0">
													<input type="text" class="caleran-ex-left form-control f-14 " id="target-cal" readonly data-plugin-options='{"rangeOrientation":true,"showButtons":true}' placeholder="Choose Date"/>
													<span class="input-group-btn caleran-show ">
													 <button class="btn calendar-btn d-gblue-clr h50 f-19" type="button"><i class="icon-calendar"></i></button>
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
								<div class="col-12 col-md-2 col-lg-3">
									<a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!------ Set campaign Section ------>

		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0">
					<div class="card-header collapsed f-16" data-toggle="collapse" href="#collapsefrequency">
						<a class="card-title lato-font">&nbsp; Set campaign frequency</a>
					</div>
					<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="You can choose days and time of the day for this campaign to be shown." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a>
					<div id="collapsefrequency" class="collapse set-time-drop f-14">
						<div class="card-body">
							<div class="row">
								<div class="col-md-10 col-12 col-lg-9 ">
									<div class="form-group d-gblue-clr mb0">
										<label>Days of week</label>
										<div class="smart-form d-flex smart-form justify-content-start flex-wrap align-items-center mb0 mb-md25">
										
										<div class="pr5 mb10 mb-md0">
											<input type="checkbox" id="Mo" class="publish-checkbox">
											<label class="f-18 grey px15 px-md25" for="Mo">Mon</label>
										</div>
										<div class="px5 mb10 mb-md0">
											<input type="checkbox" id="Tu" class="publish-checkbox">
											<label class="f-18 grey px15 px-md25" for="Tu">Tue</label>
										</div>
										<div class="px5 mb10 mb-md0">
										   <input type="checkbox" id="We" class="publish-checkbox">
										   <label class="f-18 grey px15 px-md25" for="We">Wed</label>
										</div>
										<div class="px5 mb10 mb-md0">
										   <input type="checkbox" id="Th" class="publish-checkbox">
										   <label class="f-18 grey px15 px-md25" for="Th">Thu</label>
										</div>
										<div class="px5 mb10 mb-md0">
										  <input type="checkbox" id="Fr" class="publish-checkbox">
										  <label class="f-18 grey px15 px-md25" for="Fr">Fri</label>
										</div>
										<div class="px5 mb10 mb-md0">
										  <input type="checkbox" id="Sa" class="publish-checkbox">
										  <label class="f-18 grey px15 px-md25" for="Sa">Sat</label>
										</div>
										<div class="px5 mb10 mb-md0">
										  <input type="checkbox" id="Su" class="publish-checkbox disable">
										  <label class="f-18 grey px15 px-md25" for="Su">Sun</label>
										</div>

									</div>
									</div>

									<div class="form-group d-gblue-clr mb0">
										<label>Time of the day</label>
										<div class="d-flex smart-form justify-content-start flex-wrap align-items-center">

											<div class="pr5 mb10 mb-md0">
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
											<div class="px5">to</div>
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
								<div class="col-12 col-md-2 col-lg-3">
									<a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a>
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
		<!------End Set campaign Section ------>
	</div>
	<!---------- End Want to Publish Section --------->


</div>
<!------- Smart Footer Include File---------->
<?php include '../../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->