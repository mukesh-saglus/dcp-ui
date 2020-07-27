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
			<div class="title align-self-center">Editor</div>
			<div class="sep-line align-self-center d-none d-lg-block"></div>
		</div>
		<div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
			<div class="circle-num"><span>2</span>
			</div>
			<div class="title align-self-center">Subject</div>
			<div class="sep-line align-self-center d-none d-lg-block"></div>
		</div>
        <div class="d-flex justify-content-start flex-wrap mr15 mb5">
			<div class="circle-num"><span>3</span>
			</div>
			<div class="title align-self-center">Contacts</div>
			<div class="sep-line align-self-center d-none d-lg-block"></div>
		</div>
        <div class="d-flex justify-content-start flex-wrap mr15 mb5">
			<div class="circle-num"><span>4</span>
			</div>
			<div class="title align-self-center">Sending Options</div>
			<div class="sep-line align-self-center d-none d-lg-block"></div>
		</div>
        <div class="d-flex justify-content-start flex-wrap mr15 mb5">
			<div class="circle-num"><span>5</span>
			</div>
			<div class="title align-self-center">Review and Send</div>
			<div class="sep-line align-self-center d-none d-lg-block"></div>
		</div>
	</div>
	<!------- Step Wizard Div End----------->


	<!---------- Where to Publish Section --------->
	<div class="row">
		<div class="col-12 f-18 w400">Configure Sending Settings</div>
		<div class="col-md-11 col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#varianta">
						<a class="card-title lato-font">&nbsp; Variant A</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define sender name & email for variant A" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="varianta" class="collapse">
						<div class="card-body">
						<div class="smart-form d-gblue-clr row">                            
                             <div class="col-12 col-md-6">
								<div class="form-group mb-md0">
									<label class="d-gblue-clr">From Name & Email <span class="vi-red-clr">*</span></label>
									<select class="selectpicker" title="Select Email">
										<option selected>manisha (manisha@saglus.com)</option>
										<option>naved (naved@saglus.com)</option>
										<option>xyz (xyz@saglus.com)</option>
									</select>
									<p class="f-12 gblue-clr mt10">*This is the Sender name. It will be shown at the end of the email</p>
								</div>
							</div>
						</div>
						</div>	
					</div>
				</div>
			</div>
		
		</div>
		<div class="col-md-1 col-12 mt-md34 mt15"><a href="#" class="filter-delete-icon f-16"><i class="icon-delete"></i></a></div>
        
        <div class="col-md-11 col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#variantb">
						<a class="card-title lato-font">&nbsp; Variant B</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define sender name & email for variant B" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="variantb" class="collapse">
						<div class="card-body">
						<div class="smart-form d-gblue-clr row">                            
                             <div class="col-12 col-md-6">
								<div class="form-group mb-md0">
									<label class="d-gblue-clr">From Name & Email <span class="vi-red-clr">*</span></label>
									<select class="selectpicker" title="Select Email">
										<option selected>manisha (manisha@saglus.com)</option>
										<option>naved (naved@saglus.com)</option>
										<option>xyz (xyz@saglus.com)</option>
									</select>
									<p class="f-12 gblue-clr mt10">*This is the Sender name. It will be shown at the end of the email</p>
								</div>
							</div>
						</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
        
        
       <div class="col-md-1 col-12 mt-md34 mt15">
	   <div class="align-self-center d-flex">
		 <a href="#" class="f-16 filter-delete-icon mr15">
		 <i class="icon-delete"></i>
		 </a>
		 <a href="#" class="f-16 p-blue-clr t-decoration-none">
		 <i class="icon-add-third"></i>
		 </a>
		</div>
	   </div>
	   <div class="col-md-11 col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#collapseurl">
						<a class="card-title lato-font">&nbsp; All Variant</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define subject, reply email & SMTP for all variants" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="collapseurl" class="collapse">
						<div class="card-body">
						<div class="smart-form d-gblue-clr row">
							<div class="col-md-6 col-12">		
                            	<label for="exampleSelect1" class="d-gblue-clr f-14">Subject Name <span class="vi-red-clr">*</span></label>
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
								<p class="f-12 mt10 gblue-clr">
                                *This is the email subject, which would be visible to the subsciber
								</p>
							</div>
							  <div class="col-md-6 form-group f-14 mb0 mt15 mt-md0">
								<label class="d-gblue-clr" for="exampleSelect3">Reply Name & Email  <span class="vi-red-clr">*</span></label>
								 <div class="form-group d-gblue-clr mb0">
									<select class="selectpicker" title="Select Email">
										<option selected>Naved (naved@saglus.com)</option>
										<option>manisha (manisha@saglus.com)</option>
										<option>xyz (xyz@saglus.com)</option>
									</select>
								</div>
							  </div>
								<div class="col-md-6 form-group f-14 mb0 mt15 mt-md30">
								<label class="d-gblue-clr" for="exampleSelect3">Choose SMTP <span class="vi-red-clr">*</span></label>
								 <div class="form-group d-gblue-clr mb0">
									<select class="selectpicker" title="Default">
										<option>Email 1</option>
										<option>Email 2</option>
										<option>Email 3</option>
										<option>Email 4</option>
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


	<!------- End Where to Publish Section -------->

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