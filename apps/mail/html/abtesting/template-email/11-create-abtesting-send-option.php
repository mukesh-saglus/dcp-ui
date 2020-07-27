<!------- Smart Header Include File---------->
<?php include '../../../../smart/html/includes/dcp-header-final.php'; ?>
<!------- Smart Header Include File end---------->

<!------- Smart Mail Stylesheet------=------->
<link rel="stylesheet" href="../../../css/mail.css">
<!------- Smart Mail Stylesheet end---------->

<div class="container-fluid p15 p-md30">

	<!-- Header Start -->
	<div class="row align-items-center mb15 mb-md30">
		<div class="col-12 col-md-8">
		<ul class="stepwizard-style2 w400 lato-font f-20 f-md-24">
		  <li> <a href="#">A/B Test</a> </li>
		  <li> <a href="#">A/B Test Title </a> </li>
		</ul>
			<p class="f-14 gblue-clr">Configure email settings for A/B test variants</p>
		</div>
		<div class="col-12 col-md-4 text-center text-md-right mt15 mt-md0">
			<a href="#" class="base-btn default-btn mr5">&nbsp; Back &nbsp;</a>
			<a href="#" class="base-btn blue-btn">&nbsp; Next &nbsp;</a>
		</div>
	</div>
	<!-- Header End -->
	
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
			<div class="circle-num"><span><i class="fa fa-check"></i></span>
			</div>
			<div class="title align-self-center">Subject</div>
			<div class="sep-line align-self-center d-none d-lg-block"></div>
		</div>
        <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
			<div class="circle-num"><span><i class="fa fa-check"></i></span>
			</div>
			<div class="title align-self-center">Contacts</div>
			<div class="sep-line align-self-center d-none d-lg-block"></div>
		</div>
        <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
			<div class="circle-num"><span>5</span>
			</div>
			<div class="title align-self-center">Sending Options</div>
			<div class="sep-line align-self-center d-none d-lg-block"></div>
		</div>
        <div class="d-flex justify-content-start flex-wrap mr15 mb5">
			<div class="circle-num"><span>6</span>
			</div>
			<div class="title align-self-center">Review and Send</div>
			<div class="sep-line align-self-center d-none d-lg-block"></div>
		</div>
	</div>
	<!------- Step Wizard Div End----------->


	<!---------- Where to Publish Section --------->
	<div class="row">
		<div class="col-12 f-18 w400">A/B Test Setting</div>
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#collapseurl">
						<a class="card-title lato-font">&nbsp; Configure Your A/B Test</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define percentage for your mailing subject" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="collapseurl" class="collapse">
						<div class="card-body">
						<div class="row">
				 <div class="col-md-12 col-12 col-lg-12">
				<p class="f-14 mt10 d-gblue-clr">Get complete information about all your...</p>				 
                 <div class="row mt20 f-14">
                 <div class="col-md-3 col-sm-3">
                 <span class="dot-subject-a"></span> &nbsp;<span class="w400">Subject Name A : </span><span class="myClass2">20% </span>(2)
			     </div>
                 <div class="col-md-3 col-sm-3">
                 <span class="dot-subject-b"></span> &nbsp;<span class="w400">Subject Name B : </span><span class="myClass2">20%</span> (2)
				 </div>
                 <div class="col-md-6 col-sm-6">
                 <span class="dot-subject-final"></span> &nbsp;<span class="w400">Final Mails : </span><span class="myClass22">60%</span> (9)
				 </div>
				 </div>
               <!-- Slider-->
               <div class="col-md-12 col-sm-12 col-xs-12 p0 mt30">
                  <form action="" id="choose-recipients-form">
                     <div class="slider" data-count="2" data-width="960">
                        <div class="fields subject">
                           <div class="split" data-slider="split" style="width: 50%;">
                              <div class="field">
                                 <div class="percent">
                                    <div data-count="field" class="myClass1">25%</div>
                                    <div class="spacing"></div>
                                 </div>
                              </div>
                              <div class="field">
                                 <div class="percent">
                                    <div data-count="field">25%</div>
                                    <div class="spacing"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="winning" data-slider="winning" style="width: 50%;">
                              <div class="percent">
                                 <div class="spacing"></div>
                                 <div data-count="winning" class="myClass11">50%</div>
                              </div>
                           </div>
                           <div class="scrollbar" data-scrollbar="" style="left: 40%; right: 50%;"></div>
                        </div>
                        <div class="scroll" data-slider="scroll" draggable="true" data-percent="50" style="right: 58%;">
                           <div class="circle">
                              <div></div>
                           </div>
                        </div>
                     </div>
                  </form>
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
					<div class="card-header collapsed" data-toggle="collapse" href="#collapseFacebookTab">
						<a class="card-title lato-font">&nbsp; Win Accordingly</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Choose how you want to decide winning variant" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="collapseFacebookTab" class="collapse">
						<div class="card-body">
						<div class="col-12 col-md-6 col-lg-5 col-xl-3 colxs-4 p0">
                        	<div class="smart-form row no-gutters">
                            	<div class="col-12">
                            	<label for="exampleSelect1" class="f-14 d-gblue-clr">
                                Select A/B Test Type</label></div>
                             <div class="col-12">   
							<div class="form-group d-gblue-clr mb0">
								<select class="selectpicker" title="Select">
									<option>Opened Rate</option>
									<option>Clicked Rate</option>
								</select>
							</div></div>
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
	<div class="row mt-md40 mt15">
		<div class="col-12 f-18 w400">Scheduling</div>
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#collapsePublish">
						<a class="card-title lato-font">&nbsp; Start Date</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Send now or choose for later" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="collapsePublish" class="collapse abtest-set-time-drop">		<div class="card-body">				
						<div class="row">
							<div class="col-md-10 col-12 col-lg-9 d-gblue-clr">
							<div class="f-14 vd-gblue-clr">Mail Sending Option</div>
								<div class="d-flex justify-content-start flex-wrap f-14 mt-md20 mt15">
									<div class="smart-radio-btn radio-strong-blue mr25 publish-radio">
										<input name="EndDate" id="Never-ends" value="option1" checked="" type="radio">
										<label for="Never-ends"> Now </label>
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
												<input type="text" name="dob1" class="form-control f-14 " id="dob-secondary-target"  placeholder="Choose Date"/>
												<span class="input-group-btn" id="dob-secondary">
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
							
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!------ Set campaign Section ------>

		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#collapsefrequency">
						<a class="card-title lato-font">&nbsp; Test Analysis Duration</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Choose date 7 time for analysis this test" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="collapsefrequency" class="collapse abtest-set-time-drop">
						<div class="card-body">
						<div class="row">
						<div class="col-md-10 col-12 col-lg-9">
								<div class="d-flex smart-form justify-content-start flex-wrap align-items-center">
										<div class="col-xl-4 col-md-5 col-12 pl0 pr0 pr-md15">
											<div class="input-group calendar-input-group mb10 mb-md0">
												<input type="text" name="dob" class="form-control f-14 "  id="dob-primary-target" placeholder="Choose Date"/>
												<span class="input-group-btn" id="dob-primary">
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
						</div>	
					</div>
				</div>
			</div>
		</div>
	<!------End Set campaign Section ------>
	</div>
	<!---------- End Want to Publish Section --------->
    
    <!---------- Button Section --------->
	<div class="row mt-md30 mt15">
		<div class="col-12">
			<div class="text-right">
			    <a href="javascript:void(0)" data-toggle="modal" data-target="#testmailModal" class="base-btn default-btn mr5">Test Mail</a>  
				<a href="#" class="base-btn default-btn f-16 mr5">Back</a>
				<button type="submit" class="base-btn blue-btn f-16">Next</button>
			</div>
		</div>
	</div>
	<!---------- End Button Section --------->
</div>
<!------- Smart Footer Include File---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->


<!--Slider CSS-JS Starts-->
<link rel="stylesheet" href="../../../css/ab-test-slider.css" type="text/css" />
<script type="text/javascript" src="../../../js/ab-test-slider.js"></script> 
<script type="text/javascript" src="../../../js/ab-test-slider.min.js"></script> 
<script type="text/javascript">
   $.register = {
   stid: 'new:1',
   counterSelfRefresh: true,
   };
</script> 
<!--Slider CSS-JS Ends-->


<!-- A/B Test value update js start-->
<script>
$('body').on('mousemove','.circle',function(e){
	var con1 = $(".myClass1").html(); 
	$(".myClass2").html(con1);
	var con2 = $(".myClass11").html(); 
	$(".myClass22").html(con2);
});

</script>
<!-- A/B Test value update js end-->