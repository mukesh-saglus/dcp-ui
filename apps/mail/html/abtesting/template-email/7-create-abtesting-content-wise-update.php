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
			<div class="circle-num"><span>3</span>
			</div>
			<div class="title align-self-center">Subject</div>
			<div class="sep-line align-self-center d-none d-lg-block"></div>
		</div>
        <div class="d-flex justify-content-start flex-wrap mr15 mb5">
			<div class="circle-num"><span>4</span>
			</div>
			<div class="title align-self-center">Contacts</div>
			<div class="sep-line align-self-center d-none d-lg-block"></div>
		</div>
        <div class="d-flex justify-content-start flex-wrap mr15 mb5">
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
		<div class="col-12 f-18 w400">Configure Sending Settings</div>
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed radiusb0" data-toggle="collapse" href="#collapseallvariant">
						<a class="card-title lato-font">&nbsp; All Variant</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define subject, sender details, reply email & SMTP for all variants" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="collapseallvariant" class="collapse show">
						<div class="card-body">
						<div class="smart-form row">
							<div class="col-12">
								<div class="form-group">
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
									<p class="f-12 gblue-clr mt10">*This is the email subject, which would be visible to the subsciber</p>
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
				<div class="card-header collapsed" data-toggle="collapse" href="#SendingOptions">
					<a class="card-title lato-font">&nbsp; Sending Options</a>
				</div>
				 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Start this broadcast right now or define date & time for later." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a>
				<div id="SendingOptions" class="collapse set-time-drop f-14">
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
	</div>
    
	<!---------- Button Section --------->
	<div class="row mt-md30 mt15">
		<div class="col-12">
			<div class="text-right">
				<a href="#" class="base-btn default-btn f-16 btn-xs-block mr5 mb15 mb-md0">Back</a>
				<button type="submit" class="base-btn blue-btn f-16  btn-xs-block">Next</button>
			</div>
		</div>
	</div>
	<!---------- End Button Section --------->
</div>
<!------- Smart Footer Include File---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->


<link rel="stylesheet" type="text/css" href="<?php echo $basedir; ?>vendors/emoji/emojipicker.css">
  <script type="text/javascript" src="<?php echo $basedir; ?>vendors/emoji/jquery.emojipicker.js"></script>
  <!-- Emoji Data -->
  <link rel="stylesheet" type="text/css" href="<?php echo $basedir; ?>vendors/emoji/jquery.emojipicker.a.css">
  <script type="text/javascript" src="<?php echo $basedir; ?>vendors/emoji/jquery.emojipicker.a.js"></script>

  <script type="text/javascript">
    $(document).ready(function(e) {
		$('.emojiable-option').emojiPicker({
		height: '180px',
		width:  '320px',
		iconColor :'yellow'
      });
    });
  </script>
