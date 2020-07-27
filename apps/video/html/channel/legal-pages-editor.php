<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="google" content="notranslate"/>
	<!-- Tell the browser to be responsive to screen width -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Page Title ----->
	<title>Legal Pages</title>
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
	<!------- Video Stylesheet ------------->
	<link rel="stylesheet" href="<?php echo $basedir; ?>apps/video/css/video.css">
	<!-- Custom Scrollbar Css -->
	<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/scrollbar/jquery.mCustomScrollbar.css">
	<!--CKEditor Library -->
	<script src="<?php echo $basedir; ?>vendors/ckeditor/ckeditor.js"></script>
	<script src="<?php echo $basedir; ?>vendors/ckeditor/samples/js/sample.js"></script>
	<style>
		body{
			overflow: visible !important;
		}
	</style>
</head>

<body>


<!------- Header Start----------->
<header class="video-editor-header">
	<ul class="video-header-icons f-14">
		<li><a href="" class="saglus-icon"><i class="icon-saglus-help f-26"></i></a>
		</li>
		<li class="border-right"><a href="" data-toggle="modal" data-target="#DontLeaveModal"><i class="icon-back"></i></a>
		</li>
		<li class="edit-name d-none d-md-block"><span class="max-limit">Term & Conditions</span>
		</li>
		<li class="float-right">
		<a href="#" class="saglus-icon f-14 px-md30">
		<span class="d-none d-md-block">Save</span> 
		<i class="icon-automation-next-two d-block d-md-none"></i>
		</a>
		</li>
		<li class="float-right">
		<a href="#" class="f-14 px-md30">
		<span class="d-none d-md-block">Save as Draft</span>
		<i class="fa fa-save d-block d-md-none"></i>
		</a>
		</li>
		<li class="float-right border-right">
		<a href="#" class="f-14 px-md30">
		<span class="d-none d-md-block">Preview</span>
		<i class="fa fa-save d-block d-md-none"></i>
		</a>
		</li>
	</ul>
</header>
<!------- Header End ----------->

<!-- CKEditor Start -->
<div id="ckeditor-frame">
	<div id="editor">
		<h1>Hello world!</h1>
	</div>
		<script>
		initSample();
		var count = 0;
		CKEDITOR.on('instanceReady',function( evt ){
			var editor = evt.editor;
			editor.execCommand('maximize');
			setTimeout(function(){
				var h = $("#cke_1_contents").height(); 
					h = h-50;
					$("#cke_1_contents").height(h+'px');
			},500);
			evt.editor.on('resize',function(reEvent){
				count++;
				setTimeout(function(){
					count--;
					if(count==0){
						var h = $("#cke_1_contents").height(); 
						h = h-50;
						$("#cke_1_contents").height(h+'px');
					}
					
				},500);
			});
		});
	</script>
</div>
<!-- CKEditor end -->
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
