<!------- Smart Header Include File---------->
<?php include '../../../../smart/html/includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<!------- Smart Mail Stylesheet------=------->
<link rel="stylesheet" href="../../../css/mail.css">
<!------- Smart Mail Stylesheet end---------->


<div class="container-fluid p15 p-md30">

	<!------- Header Start----------->
	<div class="row mb15 mb-md30">
		<div class="col-12">
		<ul class="stepwizard-style2 w400 lato-font f-20 f-md-24">
          <li> <a href="#">Broadcast</a> </li>
          <li> <a href="#">40% Discount </a> </li>
        </ul>
			<p class="f-14 gblue-clr">Configure your broadcast details here</p>
		</div>
	</div>
	<!------- Header End ----------->
	
	<!------- Step Wizard Div Start----------->
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
            <div class="circle-num"><span><i class="fa fa-check"></i></span></div>
            <div class="title align-self-center">Contact</div>
            <div class="sep-line align-self-center d-none d-lg-block"></div>
          </div>
		   <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
            <div class="circle-num"><span><i class="fa fa-check"></i></span></div>
            <div class="title align-self-center">Sending option</div>
            <div class="sep-line align-self-center d-none d-lg-block"></div>
          </div>
			<div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
            <div class="circle-num"><span>5</span></div>
            <div class="title align-self-center">Review & Send</div>
            <div class="sep-line align-self-center d-none d-lg-block"></div>
          </div>
        </div>
	<!------- Step Wizard Div End----------->



	<div class="row">
		<div class="col-12">
			<div class="l-gblue-border radius5 p15 p-md30">
				<div class="row">
					<div class="col-lg-3 offset-lg-1 col-md-4">
					<div class="design-sel-block p15">
						<img src="../../../images/template-lg.png" class="img-fluid d-block mx-auto">
					</div>
					<div class="d-flex justify-content-between mt10">
						<div class="f-14 w400">Template Name
						<p class="f-10 mt4 d-gblue-clr">Created on Nov 18, 2017 at 4:08 PM</p>
						</div>
						<div class="ml15"><a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#libraryModalpreview" data-backdrop="static" data-keyboard="false">
								<i class="icon-show"></i>
							</a>
						</div>
					</div>
					</div>
					<div class="col-lg-7 offset-lg-1 col-md-8 mt15">
						<div class="table-responsive">
						<table width="100%" border="0" cellspacing="0" cellpadding="10" class="f-14 w400">
  <tbody>
    <tr>
      <td width="22%">Subject</td>
      <td>:-</td>
      <td class="break-word">Introducing Spring/Summer ‘18 New season fashion is here!</td>
    </tr>
    <tr>
      <td>From Name</td>
      <td>:-</td>
      <td class="break-word">Divyanshu</td>
    </tr>
    <tr>
      <td>From Mail</td>
      <td>:- </td>
      <td class="break-word">divyanshup@gmail.com</td>
    </tr>
    <tr>
      <td>Reply Mail</td>
      <td>:-</td>
      <td class="break-word">info@gmail.com</td>
    </tr>
    <tr>
      <td>SMTP</td>
      <td>:- </td>
      <td>Amazon</td>
    </tr>
    <tr>
      <td>Contacts</td>
      <td>:- </td>
      <td>40250</td>
    </tr>
    <tr>
      <td>Scheduled On</td>
      <td>:- </td>
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


	
	<!------ Button ------>
	<div class="row mt15 mt-md30">
		<div class="col-12 text-right">
			<a href="#" class="base-btn default-btn mr5">Save as Draft</a>
			<a href="#" class="base-btn default-btn mr5">Back</a>
			<a href="#" class="base-btn blue-btn">Send</a>
		</div>
	</div>
	
</div>
<!------- Smart Footer Include File---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->

<!--------- Emoji Date Picker Jquery Plugins---------->
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
