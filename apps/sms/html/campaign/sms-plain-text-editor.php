<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google" content="notranslate" />
<!-- Tell the browser to be responsive to screen width -->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
<!-- Page Title ----->
<title>Smart Header</title>
<!-- Bootstrap 4 Stylesheeat ----->
<?php $basedir = "http://".$_SERVER['SERVER_NAME'] . '/dcpMaxfunnels2.0/DotcomPal/'; ?>
<!-- Favicon Icon -->
<link rel="icon" href="<?php echo $basedir; ?>images/favicon.png" type="image/png" />
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/bootstrap.min.css" />
<!-- Common Css Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>css/general.css" />
<link rel="stylesheet" href="<?php echo $basedir; ?>css/elements.css" />
<!-- Bootstrap Select Dropdown Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/bootstrap-select.css" />
<!-- DotComPal Header Css Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/css/dcp-header.css" />
<!-- DotComPal Dahboard Css Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/css/custom.css" />
<!-- Custom Scrollbar Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/scrollbar/jquery.mCustomScrollbar.css" />
<!---- Country Code Plugin Stylesheet ------>
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/tel-input/intlTelInput.css" />
<!---- Country Chooser Flags ------>
<link href="<?php echo $basedir; ?>vendors/flagstrap/css/flags.css" rel="stylesheet" />
<!-- boostrap select dropdwon for mobile & tablet js--->
<script type="text/javascript">
$(function () {
$(".selectpicker").selectpicker({
container: "body",
});

if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
$(".selectpicker").selectpicker("mobile");
}
});
</script>
<!-- boostrap select dropdwon  for mobile & tablet js end--->
<link rel="stylesheet" href="../../css/sms.css" />
<!-- SMS Stylesheet end -->
<!-- Custom Scrollbar Css -->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/scrollbar/jquery.mCustomScrollbar.css" />
<style>
body {
overflow: visible !important;
}
</style>
</head>
<body>
<!-- Header Start-->
<header class="mail-editor-header">
	<ul class="mail-header-icons f-14">
		<li>
			<a href="#" data-toggle="modal" data-target="#DontLeaveModal" class="saglus-icon f-14 px-lg20"> <i class="icon-previous-a f-10"></i> <span class="d-none d-md-inline-block pl-md5">Back</span> </a>
		</li>
		<li class="edit-name plain-header-list">
			<span class="max-limit text-truncate" contenteditable="true">Demo SMS</span>
			<!-- Edit Icon -->
			<a href="#"><i class="icon-edit"></i></a>
			<!-- Save Icon -->
			<a href="#" class="f-16 d-none"><i class="fa fa-save"></i></a>
		</li>

		<li class="float-right">
			<a href="#" class="saglus-icon f-14 px-lg20"> <span class="d-none d-md-inline-block pr-md5">Next</span> <i class="icon-next-b f-10"></i> </a>
		</li>
		<li class="float-right plain-header-list">
			<a href="#" class="f-14 px-lg20">
				<span class="d-none d-md-block">Save as Draft</span>
				<i class="fa fa-save d-block d-md-none"></i>
			</a>
		</li>
		<li class="float-right plain-header-list">
			<a href="#" class="f-14 px-lg20">
				<span class="d-none d-md-block">Save as Template</span>
				<i class="fa fa-save d-block d-md-none"></i>
			</a>
		</li>
		<li class="float-right plain-header-list">
			<a href="#" class="f-14 px-lg20" title="Redo">
				<i class="icon-redo"></i>
			</a>
		</li>
		<li class="float-right plain-header-list">
			<a href="#" class="f-14 px-lg20" title="Undo">
				<i class="icon-undo"></i>
			</a>
		</li>
	</ul>
</header>
<div class="dcp-plain-text-header-fixed"></div>
<!-- Header End -->
<div class="container-fluid p0">
	<div class="row no-gutters smart-form align-content-stretch">
		<div class="col-12 col-md-7">
			<div class="p15 p-md30 pb-md10">
				<div class="row">
					<div class="col-12 col-lg-10 mx-auto">
						<div class="row align-items-center mb15 mb-md30">
							<div class="col-12 col-md-4 col-lg-5 f-16 f-md-18 w500">Message</div>
							<div class="col-12 col-md-8 col-lg-7 mt10 mt-md0">
								<div class="row align-items-center">
									<div class="col-2">
										<a href="" class="sms-attachment-btn" data-toggle="modal" data-target="#FileAttachmentModal">
											<i class="icon-text-attachment"></i>
										</a>
									</div>
									<div class="col-10 bs-h40">
										<div class="sms-input-field-append">
											<select class="selectpicker" title="Personalization">
												<option>Name</option>
												<option>Email</option>
												<option>Phone</option>
												<option>City</option>
												<option>Address</option>
											</select>
											<button id="trigger" class="emojiable-question emoji-icon"><img src="../../images/emoji-icon.png" class="img-fluid" /></button>
										</div>
									</div>
								</div>
							</div>
						</div>

						<textarea class="form-control emojiable-option sms-editor-input-field">Hi {Name}
						
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						
Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</textarea>

						<div class="d-flex align-items-center f-14 f-md-16 d-gblue-clr">
							<div class="mt10 pr5">Current Count : 120</div>
							<div class="mt10 ml-auto">2 SMS</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-5">
			<div class="preview-container">
				<div class="d-flex align-items-center">
					<h4 class="f-16 f-md-18">Preview</h4>

					<ul class="nav nav-tabs device-preview ml-auto">
						<li>
							<a data-toggle="tab" href="#android" class="active"><i class="icon-android-phonee"></i></a>
						</li>
						<li>
							<a data-toggle="tab" href="#iphone"><i class="icon-apple-phone"></i></a>
						</li>
					</ul>
				</div>

				<div class="tab-content mt15">
					<div id="android" class="tab-pane active">
						<div class="android-wrapper">
							<div class="android-inner-container mCustomScrollbar" data-mcs-theme="inset-3">
								<div class="px15">
									<div class="d-flex mt20">
										<div class="message-backround">
											Hi {Name}
											<br />
											<br />
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</div>
										<img src="../../images/dummy-image.png" class="img-fluid align-self-end ml10 mb12 dummy-image-size" />
									</div>

									<!--<div class="d-flex mt15">
								<div class="message-backround">
								Hi {Name}
								<br><br>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
								</div>
								<img src="../../images/dummy-image.png" class="img-fluid align-self-end ml10 mb12">
							</div>-->
								</div>
							</div>
						</div>
					</div>
					<div id="iphone" class="tab-pane fade">
						<div class="iphone-wrapper">
							<div class="iphone-inner-container mCustomScrollbar" data-mcs-theme="inset-3">
								<div class="px15">
									<div class="d-flex mt30">
										<div class="message-backround">
											Hi {Name}
											<br />
											<br />
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</div>
										<img src="../../images/dummy-image.png" class="img-fluid align-self-end ml10 mb12 dummy-image-size" />
									</div>

									<div class="d-flex mt15">
										<div class="message-backround">
											Hi {Name}
											<br />
											<br />
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</div>
										<img src="../../images/dummy-image.png" class="img-fluid align-self-end ml10 mb12 dummy-image-size" />
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
<!------- DotCompal Common modal Include File---------->
<?php include '../../../smart/html/includes/common-modals.php'; ?>
<!------- DotCompal Common modal Include File end ---------->
<!-- Inline Editor Attachment Modal Popup -->
<div class="modal" id="AttachmentModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-delete-size" role="document">
		<div class="modal-content radius5 border-0">
			<div class="modal-body p0 smart-form">
				<a href="javascript:void(0);" data-dismiss="modal" class="t-decoration-none f-10 cross-feedback d-gblue-clr"><i class="icon-cross"></i></a>
				<div class="p15 p-md30 text-center">
					<img class="img-fluid d-block mx-auto mb15 mb-md20" src="<?php echo $basedir; ?>images/attachment-icon.png" />
					<div class="w400 vd-gblue-clr f-16 f-md-18 mb5 text-center">Attachment</div>
					<p class="f-14 d-gblue-clr text-center">Maximum attachment size 1 Mb</p>
					<a href="#" class="base-btn blue-btn f-14 mx-auto mt15 mt-md30" id="library_link_upload">Choose File</a>
					<input id="library_upload" class="d-none" type="file" />
				</div>
				<div class="attachment-scroll mb15 mb-md30" data-mcs-theme="inset-3">
					<div class="px15 px-md30">
						<div class="row">
							<div class="col-12">
								<div class="attachment-file-list">
									<div class="text-truncate mr15 mr-md30">
										<span class="f-14 w500 text-truncate">1. Smart Account List</span>
										<div class="d-gblue-clr f-12 mt5">Size : 2 MB</div>
									</div>
									<a href="javascript:void(0);" class="d-gblue-clr t-decoration-none f-7"><i class="icon-cross"></i></a>
								</div>
								<div class="attachment-file-list">
									<div class="text-truncate mr15 mr-md30">
										<span class="f-14 w500 text-truncate">2. Smart Account List Account Lorem...</span>
										<div class="d-gblue-clr f-12 mt5">Size : 2 MB</div>
									</div>
									<a href="javascript:void(0);" class="d-gblue-clr t-decoration-none f-7"><i class="icon-cross"></i></a>
								</div>
								<div class="attachment-file-list">
									<div class="text-truncate mr15 mr-md30">
										<span class="f-14 w500 text-truncate">3. Smart Account List Account Lorem...</span>
										<div class="d-gblue-clr f-12 mt5">Size : 2 MB</div>
									</div>
									<a href="javascript:void(0);" class="d-gblue-clr t-decoration-none f-7"><i class="icon-cross"></i></a>
								</div>
								<div class="attachment-file-list">
									<div class="text-truncate mr15 mr-md30">
										<span class="f-14 w500 text-truncate">4. Smart Account List Account Lorem...</span>
										<div class="d-gblue-clr f-12 mt5">Size : 2 MB</div>
									</div>
									<a href="javascript:void(0);" class="d-gblue-clr t-decoration-none f-7"><i class="icon-cross"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Inline Editor Attachment Modal Popup End-->
<!-- Do Not Leave This Page Popup -->
<div class="modal" id="DontLeaveModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-copy-size" role="document">
		<div class="modal-content radius5 border-0">
			<div class="modal-body p15 p-md30">
				<img class="img-fluid d-block mx-auto mb15 mb-md20" src="<?php echo $basedir; ?>images/do-not-leave-it-icon.png" />
				<div class="w400 vd-gblue-clr f-16 f-md-18 mb15 text-center">Do Not Leave This Page</div>
				<p class="f-14 d-gblue-clr text-center lh140">
					Are you sure you want to leave this page,<br class="d-none d-md-block" />
					changes you made may not be saved?
				</p>
			</div>
			<div class="p15 p-md30 custom-modal-foooter text-center">
				<a href="javascript:void(0)" class="base-btn default-btn f-14 mr5" data-dismiss="modal">No</a>
				<a href="#" class="base-btn blue-btn f-14">Yes</a>
			</div>
		</div>
	</div>
</div>
<!-- Do Not Leave This Page Popup End-->
<!---- Common Jquery Files ------>
<script type="text/javascript" src="<?php echo $basedir; ?>vendors/jquery/jquery.min.js"></script>
<!---- Bootstrap Jquery Files ------>
<script type="text/javascript" src="<?php echo $basedir; ?>vendors/bootstrap/popper.min.js"></script>
<script type="text/javascript" src="<?php echo $basedir; ?>vendors/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $basedir; ?>vendors/bootstrap/bootstrap-select.js"></script>
<script type="text/javascript" src="<?php echo $basedir; ?>js/script.js"></script>
<!-- Custom Scrollbar Css -->
<script type="text/javascript" src="<?php echo $basedir; ?>vendors/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
</body>
</html>

<link rel="stylesheet" type="text/css" href="<?php echo $basedir; ?>vendors/emoji/emojipicker.css" />
<script type="text/javascript" src="<?php echo $basedir; ?>vendors/emoji/jquery.emojipicker.js"></script>
<!-- Emoji Data -->
<link rel="stylesheet" type="text/css" href="<?php echo $basedir; ?>vendors/emoji/jquery.emojipicker.a.css" />
<script type="text/javascript" src="<?php echo $basedir; ?>vendors/emoji/jquery.emojipicker.a.js"></script>

<script type="text/javascript">
	//Emoji JS
    $(document).ready(function (e) {
        $(".emojiable-question").emojiPicker({
			height: '180px',
			width:  '320px',
            button: false,
        });
        $("#trigger").click(function (e) {
            e.preventDefault();
            $("#trigger").emojiPicker("toggle");
            $(".sms-editor-input-field").focus();
        });
    });

    $(document).ready(function () {
		// Emoji Select JS
        $(".emoji").click(function () {
            var emoji_value = $("#trigger").val();
            $("#trigger").removeAttr("value");
            $(".sms-editor-input-field").append(emoji_value);
        });
		// File Upload JS
		$("#upload_link_file").on('click', function(e){
			e.preventDefault();
			$("#upload_file:hidden").trigger('click');
		});	
    });
</script>