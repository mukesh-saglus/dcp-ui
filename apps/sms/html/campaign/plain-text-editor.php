<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="google" content="notranslate"/>
	<!-- Tell the browser to be responsive to screen width -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Page Title ----->
	<title>Smart Header</title>
	<!-- Bootstrap 4 Stylesheet ----->
	<?php $basedir = "http://".$_SERVER['SERVER_NAME'] . '/DCP-UI/'; ?>
	<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/bootstrap.min.css">
	<!-- Common Css Stylesheet ----->
	<link rel="stylesheet" href="<?php echo $basedir; ?>css/general.css">
	<link rel="stylesheet" href="<?php echo $basedir; ?>css/elements.css">
	<!-- Smart Header Css Stylesheet ----->
	<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/css/header.css">
	<!-- Smart Dahboard Css Stylesheet ----->
	<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/css/custom.css">
	<!-- Smart Mail Stylesheet------=------->
	<!-- SMS Stylesheet -->
	<link rel="stylesheet" href="../../css/sms.css">
	<!-- SMS Stylesheet end -->
	<!-- Custom Scrollbar Css -->
	<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/scrollbar/jquery.mCustomScrollbar.css">
	<style>
		body{
			overflow: visible !important;
		}
	</style>
</head>

<body>


<!-- Header Start-->
<header class="mail-editor-header">
	<ul class="mail-header-icons f-14">
		<li>
			<a href="#" data-toggle="modal" data-target="#DontLeaveModal" class="saglus-icon f-14 px-lg20">
				<i class="icon-previous-a f-10"></i> <span class="d-none d-md-inline-block pl-md5">Back</span> 
			</a>
		</li>
		<li class="d-none d-md-block plain-header-list">
			<a href="" data-toggle="modal" data-target="#AttachmentModal"><i class="icon-text-attachment"></i>
				<span class="badge-label">5</span>
			</a>
		</li>
		<li class="edit-name plain-header-list">
			<span class="max-limit text-truncate" contenteditable="true">Demo</span> 
			<!-- Edit Icon -->
			<a href="#"><i class="icon-edit"></i></a>
			<!-- Save Icon -->
			<a href="#" class="f-16 d-none"><i class="fa fa-save"></i></a>
		</li>
		<li class="d-none d-lg-block plain-header-list">
		<div class="dropdown plaintext-editor-dropdown personalization-dropdown">
			<a class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Personalization</a>
				<ul class="dropdown-menu p0 m0 mCustomScrollbar h280" aria-labelledby="dropdownMenu1" data-mcs-theme="inset-3">
					<li><a class="dropdown-item" href="#">Firstname</a></li>
					<li><a class="dropdown-item" href="#">Lastname</a></li>
					<li><a class="dropdown-item" href="#">City</a></li>
					<li><a class="dropdown-item" href="#">Country</a></li>
					<li><a class="dropdown-item" href="#">Number</a></li>
					<li><a class="dropdown-item" href="#">Brand</a></li>
				</ul>
		</div>
		</li>
		<li class="float-right">
			<a href="#" class="saglus-icon f-14 px-lg20">
				<span class="d-none d-md-inline-block pr-md5">Next</span> <i class="icon-next-b f-10"></i> 
			</a>
		</li>
		<li class="float-right plain-header-list">
			<a href="#" class="f-14 px-lg20" data-toggle="modal">
				<span class="d-none d-md-block">Preview</span>
				<i class="icon-show d-block d-md-none"></i>
			</a>
		</li>
		<li class="float-right plain-header-list">
			<a href="#" class="f-14 px-lg20" data-toggle="modal" data-target="#SpamScorePointModal">
				<span class="d-none d-md-block">Spam Checker</span>
				<i class="icon-spam-checker d-block d-md-none"></i>
			</a>
		</li>
		<li class="float-right plain-header-list d-none d-lg-block">
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
	<div class="row no-gutters smart-form">
		<div class="col-12 plain-text-editor-textarea">
			<textarea class="form-control f-14" rows="10">hello
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</textarea> 
		</div>
	</div>
</div>	


<!-- Inline Editor Attachment Modal Popup -->
<div class="modal" id="AttachmentModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-delete-size" role="document">
		<div class="modal-content radius5 border-0">
			<div class="modal-body p0 smart-form">
				<a href="javascript:void(0);" data-dismiss="modal" class="t-decoration-none f-10 cross-feedback d-gblue-clr"><i class="icon-cross"></i></a>
				<div class="p15 p-md30 text-center">
					<img class="img-fluid d-block mx-auto mb15 mb-md20" src="<?php echo $basedir; ?>images/attachment-icon.png">
					<div class="w400 vd-gblue-clr f-16 f-md-18 mb5 text-center">Attachment</div>
					<p class="f-14 d-gblue-clr text-center">Maximum attachment size 1 Mb</p>
					<a href="#" class="base-btn blue-btn f-14 mx-auto mt15 mt-md30" id="library_link_upload">Choose File</a>
					<input id="library_upload" class="d-none" type="file">
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
				<img class="img-fluid d-block mx-auto mb15 mb-md20" src="<?php echo $basedir; ?>images/do-not-leave-it-icon.png">
				<div class="w400 vd-gblue-clr f-16 f-md-18 mb15 text-center">Do Not Leave This Page</div>
				<p class="f-14 d-gblue-clr text-center lh140">Are you sure you want to leave this page,<br class="d-none d-md-block">changes you made may not be saved?</p>
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
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/jquery/jquery.min.js"></script>
<!---- Bootstrap Jquery Files ------> 
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/bootstrap/popper.min.js"></script> 
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/bootstrap/bootstrap.min.js"></script>
<script type='text/javascript' src="<?php echo $basedir; ?>js/script.js"></script> 
<!-- Custom Scrollbar Css -->
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script> 	
</body>
</html>