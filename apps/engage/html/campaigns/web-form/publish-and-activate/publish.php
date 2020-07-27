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
				<li> <a href="#">Web Form</a> </li>
				<li> <a href="#">Web Form Title</a> </li>
			</ul>
			<p class="f-14 gblue-clr">Publish and activate freshly built web form campaign</p>
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
			<div class="title align-self-center">Publish</div>
			<div class="sep-line align-self-center d-none d-lg-block"></div>
		</div>
	</div>
	<!------- Step Wizard Div End----------->
           	
		<div class="row">
		<div class="col-12 f-18 w400">Embedded Codes</div>
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed radiusb0" data-toggle="collapse" href="#collapseJavascriptcode">
						<a class="card-title lato-font"> &nbsp; JavaScript code
						</a>
					</div>
					<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="You can use this JavaScript Code to embed your web forms on your website." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a>
					<div id="collapseJavascriptcode" class="collapse show">
						<div class="card-body">
							<div class="row">
								<div class="col-12 smart-form">
									 <div class="form-control f-14 mCustomScrollbar h220 400 vd-gblue-clr" data-mcs-theme="inset-3">
<xmp class="firasans-font f-14 embed-code-pre"><pre>    <!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" ng-app="mainApp" ng-controller="mainCtrl">

<head>



<base href="http://test.smartlocal.com/SagSmart-v1.0/">



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="google" content="notranslate" /> 

<!-- Tell the browser to be responsive to screen width -->

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<META NAME="ROBOTS" CONTENT="NOINDEX">

<META NAME="ROBOTS" CONTENT="NOFOLLOW">

<!-- fonts-->

<style>

[ng-cloakl]{

display: none;

}

</style>

<script>

var baseUrl = 'http://test.smartlocal.com/SagSmart-v1.0/';

var cdnUrl = 'http://test.smartlocal.com/SagSmart-v1.0/';

var http_type = 'http://';

var remain_domain = '.smartlocal.com/SagSmart-v1.0/';

var full_domain = 'http://www.smartlocal.com/SagSmart-v1.0/';

var bms_domain = 'http://bms.smartlocal.com/SagSmart-v1.0/';

var frontend_domain = 'http://test.smartlocal.com/SagSmart-v1.0/';

</script>







<link rel="stylesheet" href="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/bootstrap/bootstrap.min.css">

<link rel="stylesheet" href="http://test.smartlocal.com/SagSmart-v1.0/assets/css/general.css">

<link rel="stylesheet" href="http://test.smartlocal.com/SagSmart-v1.0/assets/css/elements.css">

<link rel="stylesheet" href="http://test.smartlocal.com/SagSmart-v1.0/assets/css/pagination.css">

<link rel="stylesheet" href="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/bootstrap/bootstrap-select.css">

<link rel="stylesheet" href="http://test.smartlocal.com/SagSmart-v1.0/apps/smart/css/header.css">

<link rel="stylesheet" href="http://test.smartlocal.com/SagSmart-v1.0/apps/smart/css/custom.css">

<link rel="stylesheet" href="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/scrollbar/jquery.mCustomScrollbar.css">

<link rel="stylesheet" href="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/tel-input/intlTelInput.css">

<link rel="stylesheet" href="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/flagstrap/css/flags.css" >

<link rel="stylesheet" href="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/tags/ng-tags-input.min.css" />

<link rel="stylesheet" href="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/caleran/caleran.min.css" />

<link rel="stylesheet" href="http://test.smartlocal.com/SagSmart-v1.0/assets/css/style_developer.css" />



</head>

<body ng-cloak ng-init='init({"baseUrl":"http:\/\/test.smartlocal.com\/SagSmart-v1.0\/","cdnUrl":"http:\/\/test.smartlocal.com\/SagSmart-v1.0\/"})'>

<div ></div>



<div ng-view class="main-view"></div>



<get-template item='apps/smart/html/smart-confirmation-box.html'></get-template>







<!-- Loader Section start -->

	<div ng-show="loader" id="smart_loader" style="position: fixed; height: 100%; background: rgba(0,0,0,0.7); z-index: 99999; left: 0; right: 0; bottom: 0; right: 0;transition: all linear 0.2s;display:none">

		<i class="icon-saglus-help icon-loader"></i>

		<div class="smart-loader"></div>

	</div>

	<!-- Loader Section end -->

	

	

<div class="javascript-files">

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/jquery/jquery.min.js" ></script>



<!-- load ck -->



<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/ckeditor/ckeditor.js"></script>

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/ckeditor/samples/js/sample.js"></script>





<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/bootstrap/popper.min.js"></script>

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/bootstrap/bootstrap.min.js" ></script>

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/bootstrap/bootstrap-select.js"></script>

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/notify/notify.js"></script>

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/js/screenfull.js"></script>



<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/caleran/moment.min.js"></script>

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/caleran/caleran.min.js"></script>

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/js/expandsearch.js"></script>



<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/tags/jquery.tagsinput.js"></script>

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/tel-input/intlTelInput.js"></script>

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/flagstrap/js/jquery.flagstrap.js"></script>

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>



<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/angularjs/angular.min.js"></script>

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/angularjs/angular-animate.min.js"></script>

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/angularjs/angular-resource.min.js"></script>

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/angularjs/angular-route.min.js"></script>

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/angularjs/angular-sanitize.min.js"></script>

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/angularjs/ng-pattern-restrict.js"></script>



<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/bootstrap/ui-bootstrap-tpls-2.5.0.js"></script> 

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/tags/ng-tags-input.min.js"></script> 

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/js/ng-file-upload.js"></script>

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/js/ng-file-upload-shim.js"></script>



<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/js/angular-app.js"></script>

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/js/routeResolver.js"></script>

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/js/angular-config.js"></script>

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/js/angular-controller.js"></script>

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/js/angular-directive.js"></script>

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/js/angular-filter.js"></script>

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/js/angular-helper.js"></script>



<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/color-picker/bootstrap-colorpicker-module.js"></script>

<link rel="stylesheet" href="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/color-picker/colorpicker.css"/>



<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/nvd3/ng/d3.js"></script>

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/nvd3/ng/nv.d3.js"></script>

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/nvd3/ng/angularjs-nvd3-directives.js"></script>

<link  href="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/nvd3/ng/nv.d3.css" rel="stylesheet"/>

<link  href="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/nvd3/nv.d3.css" rel="stylesheet"/>



<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/js/script.js"></script>

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/js/require.js" data-main="http://test.smartlocal.com/SagSmart-v1.0/assets/js/main"></script>



<!--------- graph start------------------------>

<script src="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/nvd3/stream_layers.js"></script>



<script src="http://test.smartlocal.com/SagSmart-v1.0/apps/smart/js/timer.js"></script>

<!--------- Visitors  Line Graph ------>

<!-- html2canvas js------>

  <script async src="http://test.smartlocal.com/SagSmart-v1.0/assets/plugins/html2canvas/html2canvas.js"></script>

<!-- html2canvas js------>



</div>

















</body>

</html></pre></xmp></div>   			
								 </div>
 <div class="col-12 text-right mt20">
  <button type="submit" class="base-btn blue-btn btn-h40">
                Copy Code</button>
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
					<div class="card-header collapsed" data-toggle="collapse" href="#collapseSmarthostedlink">
						<a class="card-title lato-font">&nbsp; Smart hosted link</a>
					</div>
					<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="You can use our hosted link to embed your web forms." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a>
					<div id="collapseSmarthostedlink" class="collapse">
						<div class="card-body">
							<div class="row">
								<div class="col-12 smart-form">
									 <div class="form-control f-14 mCustomScrollbar h220 400 vd-gblue-clr" data-mcs-theme="inset-3">
 <xmp class="firasans-font"><head>
  <title>CodeMirror: HTML completion demo</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../doc/docs.css"> 
  
  <link rel="stylesheet" href="../lib/codemirror.css">
  <link rel="stylesheet" href="../addon/hint/show-hint.css">
  <script src="../lib/codemirror.js"></script>
  <script src="../addon/hint/show-hint.js"></script></xmp></div>  			
								</div>
 <div class="col-12 text-right mt20">
  <button type="submit" class="base-btn blue-btn btn-h40">
                Copy Code</button>
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
					<div class="card-header collapsed" data-toggle="collapse" href="#collapseSmartHTMLcode">
						<a class="card-title lato-font">&nbsp; Smart HTML code </a>
					</div>
					<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="You can use our HTML code to embed your web forms on your website." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a>
					<div id="collapseSmartHTMLcode" class="collapse">
						<div class="card-body">
							<div class="row">
								<div class="col-12 smart-form">
									  <div class="form-control f-14 mCustomScrollbar h220 400 vd-gblue-clr" data-mcs-theme="inset-3">
 <xmp class="firasans-font"><head>
  <title>CodeMirror: HTML completion demo</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../doc/docs.css"> 
  
  <link rel="stylesheet" href="../lib/codemirror.css">
  <link rel="stylesheet" href="../addon/hint/show-hint.css">
  <script src="../lib/codemirror.js"></script>
  <script src="../addon/hint/show-hint.js"></script></xmp></div>  			
								</div>
 <div class="col-12 text-right mt20">
  <button type="submit" class="base-btn blue-btn btn-h40">
                Copy Code</button>
  </div>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	 <div class="col-12 mt15 mt-md30 text-right">
	<a href="#" class="base-btn default-btn f-16">Back</a>
     </div>
</div>
<!------- Smart Footer Include File---------->
<?php include '../../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->