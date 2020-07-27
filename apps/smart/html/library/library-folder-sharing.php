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
<!-- Bootstrap Select Dropdown Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/bootstrap-select.css">
<!-- Smart Header Css Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/css/header.css">
<!-- Smart Dahboard Css Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/css/custom.css">
<!-- Custom Scrollbar Stylesheet ----->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/scrollbar/jquery.mCustomScrollbar.css">
<!---- Country Code Plugin Stylesheet ------>
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/tel-input/intlTelInput.css">
<!---- Country Chooser Flags ------>
<link href="<?php echo $basedir; ?>vendors/flagstrap/css/flags.css" rel="stylesheet">
</head>
<body>
      <div class="container-fluid p15 p-md30">
         <div class="row">
            <div class="col-12">
               <span class="f-20 f-md-24 lato-font">Folder Name </span> &nbsp;
               <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
               <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
               <p class="lightgrey mt5">Manage files found in this folder</p>
            </div>
         </div>
         <div class="row mt15 mt-md30">
            <div class="col-12 col-md-7 col-lg-8 t-wauto tw-100 transition-all">
               <div id="thori-scroll" class="table-responsive smart-table-style">
                  <table class="table table-bordered">
                     <thead>
                        <tr>
                           <th width="4%">
                              <div class="smart-checkbox-btn checkbox-strong-blue">
                                 <input id="checkAll" type="checkbox">
                                 <label for="checkAll"></label>
                              </div>
                           </th>
                           <th width="2%"></th>
                           <th>File Name &nbsp;<i class="fa fa-sort"></i></th>
                           <th>Size &nbsp;<i class="fa fa-sort"></i></th>
                           <th>Status &nbsp;<i class="fa fa-sort"></i></th>
                           <th>Actions</th>
                        </tr>
                     </thead>
                     <!----- Table Option Div Show----> 
                     <div class="table-option-manage animated fadeIn">
                        <ul class="list-inline f-14 w400 mb0">
                           <li class="list-inline-item"><a href="#" class="base-btn default-btn btn-h30 f-14"><i class="icon-download"></i> Download</a></li>
                        </ul>
                     </div>
                     <!----- Table Option Div end----> 
                     <tbody>
                        <tr>
                           <td>
                              <div class="smart-checkbox-btn checkbox-strong-blue">
                                 <input id="tcheck2" type="checkbox" class="checkbox-active">
                                 <label for="tcheck2"></label>
                              </div>
                           </td>
                           <td><i class="icon-audios f-16 d-gblue-clr"></i></td>
                           <td><a href="#">Audio Name Audio Name Audio Name</a></td>
                           <td>20 MB</td>
                           <td>Public</td>
                           <td>
                              <ul class="table-action">
                                 <li class="action-menu"><a href="#" class="action-item" data-toggle="modal" data-target="#PasswordProtectedModal">
                                    <i class="icon-show"></i></a>
                                 </li>
                                 <li class="action-menu"><a href="#" class="action-item"><i class="icon-download"></i></a></li>
                              </ul>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <div class="smart-checkbox-btn checkbox-strong-blue">
                                 <input id="tcheck2" type="checkbox" class="checkbox-active">
                                 <label for="tcheck2"></label>
                              </div>
                           </td>
                           <td><i class="icon-image f-16 d-gblue-clr"></i></td>
                           <td><a href="#">Image Name</a></td>
                           <td>200 KB</td>
                           <td>Public</td>
                           <td>
                              <ul class="table-action">
                                 <li class="action-menu"><a href="#" class="action-item" data-toggle="modal" data-target="#PasswordProtectedModal">
                                    <i class="icon-show"></i></a>
                                 </li>
                                 <li class="action-menu"><a href="#" class="action-item"><i class="icon-download"></i></a></li>
                              </ul>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <div class="smart-checkbox-btn checkbox-strong-blue">
                                 <input id="tcheck2" type="checkbox" class="checkbox-active">
                                 <label for="tcheck2"></label>
                              </div>
                           </td>
                           <td><i class="icon-doc f-16 d-gblue-clr"></i></td>
                           <td><a href="#">File Name</a></td>
                           <td>200 KB</td>
                           <td>Protected</td>
                           <td>
                              <ul class="table-action">
                                 <li class="action-menu"><a href="#" class="action-item" data-toggle="modal" data-target="#PasswordProtectedModal">
                                    <i class="icon-show"></i></a>
                                 </li>
                                 <li class="action-menu"><a href="#" class="action-item"><i class="icon-download"></i></a></li>
                              </ul>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <div class="smart-checkbox-btn checkbox-strong-blue">
                                 <input id="tcheck2" type="checkbox" class="checkbox-active">
                                 <label for="tcheck2"></label>
                              </div>
                           </td>
                           <td><i class="icon-total-viewed-videos f-16 d-gblue-clr"></i></td>
                           <td><a href="#">Video Name</a></td>
                           <td>200 MB</td>
                           <td>Protected</td>
                           <td>
                              <ul class="table-action">
                                 <li class="action-menu"><a href="#" class="action-item" data-toggle="modal" data-target="#PasswordProtectedModal">
                                    <i class="icon-show"></i></a>
                                 </li>
                                 <li class="action-menu"><a href="#" class="action-item"><i class="icon-download"></i></a></li>
                              </ul>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
	
      <!-- Password Protected Modal Popup -->
      <div class="modal" id="PasswordProtectedModal" tabindex="-1" role="dialog">
         <div class="modal-dialog modal-dialog-centered modal-copy-size" role="document">
            <div class="modal-content radius5 border-0">
               <div class="modal-body p15 p-md30 smart-form">
                  <img class="img-fluid d-block mx-auto mb15 mb-md20" src="<?php echo $basedir; ?>images/password-modal-icon.png">
                  <div class="w400 vd-gblue-clr f-16 f-md-18 mb5 text-center">Password Protected</div>
                  <p class="f-14 d-gblue-clr text-center">This file is password protected, please enter<br/>
                     the valid password to open this file.
                  </p>
                  <div class="mt15 mt-md30">
                     <label for="exampleSelect1" class="f-14 d-gblue-clr">Enter your password</label>
                  </div>
                  <div class="form-group relative mb0">
                     <input class="form-control f-14 pr60 field-h40" id="password-field2" placeholder="Password" value="" type="password">
                     <div class="form-control-icon-right">
                        <button class="btn addon-icon f-15 toggle-password" toggle="#password-field2" type="button"><i class="toogle-icon icon-show f-18" aria-hidden="true"></i> </button>
                     </div>
                  </div>
               </div>
               <div class="p15 p-md30 custom-modal-foooter text-center">
                  <a href="javascript:void(0)" class="base-btn default-btn f-14 mr5" data-dismiss="modal">Cancel</a>
                  <a href="#" class="base-btn blue-btn f-14">Submit</a>
               </div>
            </div>
         </div>
      </div>
	
<!---- Common Jquery Files ------> 
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/jquery/jquery.min.js"></script>
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/bootstrap/popper.min.js"></script> 
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/bootstrap/bootstrap.min.js"></script> 
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/bootstrap/bootstrap-select.js"></script>
<!---- Add Custom Javacscript File ------> 
<script type='text/javascript' src="<?php echo $basedir; ?>js/script.js"></script>
<!---- Custom Scrollbar Jquery File ------>
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>	
<!--- Horizontal Scrollbar Plugins js -->
<script type="text/javascript">
	(function($){
		$(window).on("load",function(){
			$("#thori-scroll").mCustomScrollbar({
				axis:"x",
				scrollButtons:{enable:true},
				theme:"3d-thick"
			});
		});
	})(jQuery);
</script>
<script type="text/javascript">
	(function($){
		$(window).on("load",function(){
			$(".thori-scroll").mCustomScrollbar({
				axis:"x",
				scrollButtons:{enable:true},
				theme:"3d-thick"
			});
		});
	})(jQuery);
</script>
</body>
</html>
