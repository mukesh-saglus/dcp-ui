<!------- knowledge Base Header Include File---------->
<?php include 'add-template-header.php'; ?>
<!------- knowledge Base Header Include File end---------->

<!------- CMS Stylesheet------=------->
<link rel="stylesheet" href="<?php echo $basedir; ?>apps/cms/css/cms.css">
<link rel="stylesheet" href="../../css/bms.css">
<!------- CMS Stylesheet end---------->
<!--CKEditor Library -->
<script src="<?php echo $basedir; ?>vendors/ckeditor/ckeditor.js"></script>
<script src="<?php echo $basedir; ?>vendors/ckeditor/samples/js/sample.js"></script>


<!------- Header Start----------->
<div class="container-fluid pr15 pr-md30">
	<div class="row d-flex align-items-stretch">
		<div class="col-12 col-md-3 col-lg-3 col-xl-2 blog-tree p0 align-self-stretch d-flex">
			<div class="blog-title-box w-100 f-14">
				<div class="w500 mt5">Template Details</div>
				<ul class="d-gblue-clr mt16">
				<li class="active">Title
				<li class="active">Description
				<li class="active">Type
				<li class="active">Industry
				<li>Use Cases
				<li>Position
				<li>Solution & Package
				<li>Asset Zip File
				</ul>
			</div>
		</div>
		
		<div class="col-xl-10 col-lg-9 col-md-9 col-12 py15 py-md30 smart-form">
			<div class="row f-14 align-items-center">
				<div class="col-12 col-md-3 col-lg-2">
					<p class="lh140 mb5 mb-md0">Title</p>
				</div>
				<div class="col-12 col-md-6 col-lg-7 smart-form error-message">
					<input type="text" class="form-control" placeholder="Enter your template title">
					<small class="form-text f-14 text-left d-none">Title required</small>
				</div>
			</div>
			
			<div class="row f-14 mt-md25 mt15">
				<div class="col-12 col-md-3 col-lg-2 mt-md15">
					<p class="lh140 mb5 mb-md0">Description</p>
				</div>
				<div class="col-12 col-md-6 col-lg-7 smart-form">
					<textarea rows="5" class="form-control" placeholder="Description"></textarea>
				</div>
			</div>
			
			<div class="row f-14 mt-md25 mt15 align-items-center">
				<div class="col-12 col-md-3 col-lg-2">
					<p class="lh140 mb5 mb-md0">Type</p>
				</div>
				<div class="col-12 col-md-6 col-lg-7">
					<div class="dropdown simple-dropdown error-message">
						<button class="btn base-btn default-btn dropdown-toggle btn-block btn-h50 text-left" type="button" id="dropdownMenu1" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false"> <span class="caret-right pull-left text-truncate pr15">Type</span></button>
						<div class="dropdown-menu w-100 stoppropagation h-auto f-14"  aria-labelledby="dropdownMenu1"> 
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
							<div class="mCustomScrollbar f-14 mh-180" data-mcs-theme="inset-3">
								<li> <a href="javascript:void(0)" class="dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkdrop21" type="checkbox">
									<label for="checkdrop21">Page</label>
									</div>
									</a> 
								</li>
								<li> <a href="javascript:void(0)" class="dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkdrop22" type="checkbox">
									<label for="checkdrop22">Notification</label>
									</div>
									</a> 
								</li>
								<li> <a href="javascript:void(0)" class="dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkdrop24" type="checkbox">
									<label for="checkdrop24">Video App</label>
									</div>
									</a> 
								</li>
								<li> <a href="javascript:void(0)" class="dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkdrop25" type="checkbox">
									<label for="checkdrop25">Email Templates</label>
									</div>
									</a> 
								</li>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row f-14 mt-md25 mt15 align-items-center">
				<div class="col-12 col-md-3 col-lg-2">
					<p class="lh140 mb5 mb-md0">Notification Type</p>
				</div>
				<div class="col-12 col-md-6 col-lg-7 smart-form">
					<div class="dropdown simple-dropdown error-message">
						<button class="btn base-btn default-btn dropdown-toggle btn-block btn-h50 text-left required-field" type="button" id="dropdownMenu1" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false"> <span class="caret-right pull-left text-truncate pr15">Notification Type</span> </button>
						<div class="dropdown-menu w-100 stoppropagation h-auto f-14"  aria-labelledby="dropdownMenu1"> 
							<!--- Scrollbar Div start ------->
							<div class="mCustomScrollbar f-14 mh-180" data-mcs-theme="inset-3">
								<li> <a href="javascript:void(0)" class="dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkdrop211" type="checkbox">
									<label for="checkdrop211">Web Form</label>
									</div>
									</a> 
								</li>
								<li> <a href="javascript:void(0)" class="dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkdrop221" type="checkbox">
									<label for="checkdrop221">Web Notification</label>
									</div>
									</a> 
								</li>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row f-14 mt-md25 mt15 align-items-center">
				<div class="col-12 col-md-3 col-lg-2">
					<p class="lh140 mb5 mb-md0">Industry</p>
				</div>
				<div class="col-12 col-md-6 col-lg-7 smart-form">
					<div class="dropdown simple-dropdown">
						<button class="btn base-btn default-btn dropdown-toggle btn-block btn-h50 text-left" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="caret-right pull-left text-truncate pr15">Industry</span> </button>
						<div class="dropdown-menu w-100 stoppropagation h-auto f-14"  aria-labelledby="dropdownMenu1"> 
							<!--- Searchbox Field ------->
							<div class="bs-searchbox-field">
								<div class="input-group">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="saerch2" type="checkbox">
									<label for="saerch2" class="mb4"></label>
								</div>
									<input type="text" class="form-control" placeholder="Search">
								<div class="input-group-append">
									<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
								</div>
								</div>
							</div>
							<!--- Scrollbar Div start ------->
							<div class="mCustomScrollbar f-14 mh-180" data-mcs-theme="inset-3">
								<li> <a href="javascript:void(0)" class="dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkdrop11" type="checkbox">
									<label for="checkdrop11">Industry One</label>
									</div>
									</a> 
								</li>
								<li> <a href="javascript:void(0)" class="dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkdrop12" type="checkbox">
									<label for="checkdrop12">Industry Tow</label>
									</div>
									</a> 
								</li>
								<li> <a href="javascript:void(0)" class="dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkdrop13" type="checkbox">
									<label for="checkdrop13">Industry Three</label>
									</div>
									</a>
								</li>
								<li> <a href="javascript:void(0)" class="dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkdrop14" type="checkbox">
									<label for="checkdrop14">Industry Four</label>
									</div>
									</a> 
								</li>
								<li> <a href="javascript:void(0)" class="dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkdrop15" type="checkbox">
									<label for="checkdrop15">Industry Five</label>
									</div>
									</a> 
								</li>
								<li> <a href="javascript:void(0)" class="dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkdrop16" type="checkbox">
									<label for="checkdrop16">Industry Six</label>
									</div>
									</a> 
								</li>
								<li> <a href="javascript:void(0)" class="dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkdrop17" type="checkbox">
									<label for="checkdrop17">Industry Seven</label>
									</div>
									</a> 
								</li>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-3 col-lg-3 mt10 mt-md0">
					<a href="#" class="p-blue-clr f-14"><u>Create New Industry</u></a>
				</div>
			</div>
			
			<div class="row f-14 mt-md25 mt15 align-items-center">
				<div class="col-12 col-md-3 col-lg-2">
					<p class="lh140 mb5 mb-md0">Industry Name</p>
				</div>
				<div class="col-12 col-md-6 col-lg-7 smart-form">
					<input type="text" class="form-control" placeholder="Type here">
				</div>
				<div class="col-12 col-md-3 col-lg-3 mt10 mt-md0 f-14">
					<a href="#" class="p-blue-clr">Save</a> &nbsp; &nbsp; <a href="#" class="d-gblue-clr">Cancel</a>
				</div>
			</div>
			
			<div class="row f-14 mt-md25 mt15 align-items-center">
				<div class="col-12 col-md-3 col-lg-2">
					<p class="lh140 mb5 mb-md0">Use Cases</p>
				</div>
				<div class="col-12 col-md-6 col-lg-7 smart-form">
				<div class="error-message">
					<select class="selectpicker f-14" title="Choose One">
					  <option>Use Case One</option>
					  <option>Use Case Two</option>
					  <option>Use Case Three</option>
					  <option>Use Case Four</option>
					  <option>Use Case Five</option>
					</select>
					<small class="form-text f-14 text-left d-none">Use Case required</small>
				</div>
				</div>
				<div class="col-12 col-md-3 col-lg-3 mt10 mt-md0">
					<a href="#" class="p-blue-clr f-14"><u>Create new Use Cases</u></a>
				</div>
			</div>
			
			<div class="row f-14 mt-md25 mt15 align-items-center">
				<div class="col-12 col-md-3 col-lg-2">
					<p class="lh140 mb5 mb-md0">Use Cases Name</p>
				</div>
				<div class="col-12 col-md-6 col-lg-7 smart-form">
					<input type="text" class="form-control" placeholder="Type here">
				</div>
				<div class="col-12 col-md-3 col-lg-3 mt10 mt-md0 f-14">
					<a href="#" class="p-blue-clr">Save</a> &nbsp; &nbsp; <a href="#" class="d-gblue-clr">Cancel</a>
				</div>
			</div>

			
			<div class="row f-14 mt-md25 mt15 align-items-center">
				<div class="col-12 col-md-3 col-lg-2">
					<p class="lh140 mb5 mb-md0">Position</p>
				</div>
				<div class="col-12 col-md-6 col-lg-7 smart-form">
					<select class="selectpicker f-14" title="Choose One">
					  <option>Splash</option>
					  <option>LightBox</option>
					  <option>Sticky Bar - Header</option>
					  <option>Sticky Bar - Footer</option>
					  <option>Notification Box- Top Left</option>
					  <option>Notification Box- Bottom Left</option>
					  <option>Notification Box- Top Right</option>
					  <option>Notification Box- Bottom Right</option>
					</select>
				</div>
			</div>
			
			<div class="row f-14 mt-md25 mt15 align-items-center">
				<div class="col-12 col-md-3 col-lg-2">
					<p class="lh140 mb5 mb-md0">Conversion Goal</p>
				</div>
				<div class="col-12 col-md-6 col-lg-7">
					<div class="dropdown simple-dropdown error-message">
						<button class="btn base-btn default-btn dropdown-toggle btn-block btn-h50 text-left" type="button" id="dropdownMenu1" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false"> <span class="caret-right pull-left text-truncate pr15">Conversion Goal</span></button>
						<div class="dropdown-menu w-100 stoppropagation h-auto f-14"  aria-labelledby="dropdownMenu1"> 
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
							<div class="mCustomScrollbar f-14 mh-180" data-mcs-theme="inset-3">
								<li> <a href="javascript:void(0)" class="dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="Sales" type="checkbox">
									<label for="Sales">Sales</label>
									</div>
									</a> 
								</li>
								<li> <a href="javascript:void(0)" class="dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="LeadAcquisition" type="checkbox">
									<label for="LeadAcquisition">Lead Acquisition </label>
									</div>
									</a> 
								</li>
								<li> <a href="javascript:void(0)" class="dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="LinkClicks" type="checkbox">
									<label for="LinkClicks">Link Clicks</label>
									</div>
									</a> 
								</li>
								<li> <a href="javascript:void(0)" class="dropdown-item">
									<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="ShareCount" type="checkbox">
									<label for="ShareCount">Share Count</label>
									</div>
									</a> 
								</li>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row f-14 mt-md25 mt15">
				<div class="col-12 col-md-3 col-lg-2">
				<p class="lh140 mb5 mb-md0">Solution & Package</p>
				</div>
				<div class="col-12 col-md-6 col-lg-7 smart-form">
					<div class="row">
						<div class="col-12"><p class="lh140 mb6">Select one or multiple solutions from below :</p></div>
						<div class="col-12 col-sm-12 mt8">
							<div class="dropdown simple-dropdown">
								<button class="btn base-btn default-btn dropdown-toggle d-flex align-items-center btn-block btn-h50 text-left" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="caret-right pull-left hidden-text1">Solution Name</span> 
									<p class="multiSel text-truncate text-truncate w-100 pr15"></p> 
								</button>
								<div class="dropdown-menu w-100 stoppropagation h-auto f-14"  aria-labelledby="dropdownMenu1"> 
									<!--- Searchbox Field ------->
									<div class="bs-searchbox-field">
										<div class="input-group">
										<div class="smart-checkbox-btn checkbox-strong-blue">
											<input id="saerch3" type="checkbox">
											<label for="saerch3" class="mb4"></label>
										</div>
											<input type="text" class="form-control" placeholder="Search">
										<div class="input-group-append">
											<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
										</div>
										</div>
									</div>
									<!--- Scrollbar Div start ------->
									<div class="mCustomScrollbar f-14 mh-180 mutli-select-dropdown" data-mcs-theme="inset-3">
										<li> <a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
											<input id="checkdrop1" type="checkbox" value="Solution Name One">
											<label for="checkdrop1">Solution Name One</label>
											</div>
											</a> 
										</li>
										<li> <a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
											<input id="checkdrop2" type="checkbox" value="Solution Name Two">
											<label for="checkdrop2">Solution Name Tow</label>
											</div>
											</a> 
										</li>
										<li> <a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
											<input id="checkdrop3" type="checkbox" value="Solution Name Three">
											<label for="checkdrop3">Solution Name Three</label>
											</div>
											</a>
										</li>
										<li> <a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
											<input id="checkdrop4" type="checkbox" value="Solution Name Four">
											<label for="checkdrop4">Solution Name Four</label>
											</div>
											</a> 
										</li>
										<li> <a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
											<input id="checkdrop5" type="checkbox" value="Solution Name Five">
											<label for="checkdrop5">Solution Name Five</label>
											</div>
											</a> 
										</li>
										<li> <a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
											<input id="checkdrop6" type="checkbox" value="Solution Name Six">
											<label for="checkdrop6">Solution Name Six</label>
											</div>
											</a> 
										</li>
										<li> <a href="javascript:void(0)" class="dropdown-item">
											<div class="smart-checkbox-btn checkbox-strong-blue">
											<input id="checkdrop7" type="checkbox" value="Solution Name Seven">
											<label for="checkdrop7">Solution Name Seven</label>
											</div>
											</a> 
										</li>
									</div>
								</div>
							</div>
						</div>
						<div class="mCustomScrollbar mt-md25 mt15 h280 w-100" data-mcs-theme="inset-3">
							<div class="col-12"> 
							<!---- Solution Name ---->
							<div class="row smart-form">
								<div class="col-12">
									<p class="lh140 mb5 mb-md0 w500">Solution Name</p>
								</div>
								<div class="col-12 col-md-12 col-xl-6 mt15">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex pl10">
									  <input id="checkbox1" type="checkbox">
									  <label for="checkbox1">Package Name</label>
									</div>
								</div>
								<div class="col-12 col-md-12 col-xl-6 mt15">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex pl10">
									  <input id="checkbox2" type="checkbox">
									  <label for="checkbox2">Package Name</label>
									</div>
								</div>
								<div class="col-12 col-md-12 col-xl-6 mt15">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex pl10">
									  <input id="checkbox3" type="checkbox">
									  <label for="checkbox3">Package Name</label>
									</div>
								</div>
								<div class="col-12 col-md-12 col-xl-6 mt15">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex pl10">
									  <input id="checkbox4" type="checkbox">
									  <label for="checkbox4">Package Name</label>
									</div>
								</div>
							</div>
							<!----end Solution ---->
							<!----Solution Name ---->
							<div class="row smart-form mt-md25 mt15 mb15">
								<div class="col-12">
								<p class="lh140 mb5 mb-md0 w500">Solution Name</p>
								</div>
								<div class="col-12 col-md-12 col-xl-6 mt15">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex pl10">
									  <input id="checkbox5" type="checkbox">
									  <label for="checkbox5">Package Name</label>
									</div>
								</div>
								<div class="col-12 col-md-12 col-xl-6 mt15">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex pl10">
									  <input id="checkbox6" type="checkbox">
									  <label for="checkbox6">Package Name</label>
									</div>
								</div>
								<div class="col-12 col-md-12 col-xl-6 mt15">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex pl10">
									  <input id="checkbox7" type="checkbox">
									  <label for="checkbox7">Package Name</label>
									</div>
								</div>
								<div class="col-12 col-md-12 col-xl-6 mt15">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex pl10">
									  <input id="checkbox8" type="checkbox">
									  <label for="checkbox8">Package Name</label>
									</div>
								</div>
							</div>
							<!--- end Solution Name --->
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row f-14  mt-md25 mt15">
				<div class="col-12 col-md-3 col-lg-2">
				<p class="lh140 mb5 mb-md0">Asset Zip File</p>
				</div>
				<div class="col-12 col-md-6 col-lg-7 smart-form">
					<p class="f-12 d-gblue-clr mb8">Zip asset file related to this template has been already uploaded on live, you can replace that file from here.</p>
					<div class="d-flex">
						<a href="" class="base-btn default-btn px-md30" id="upload_link_primary">Browse...</a>
						<input id="upload_primary" type="file" class="d-none"/>
						<div class="f-14 d-flex col-7 align-items-center pl20">
							<span class="text-truncate">File Name.zip</span>
							<a href="#" class="t-decoration-none d-gblue-clr ml20"><i class="icon-cross f-9"></i></a>
						</div>
					</div>
					
				</div>
			</div>
		</div>
    </div>
</div>
<!------- Header End ----------->
<!------- Smart Footer Include File ---------->
<?php include '../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->

<script>
// Multi Select DropDown Show DropDown Selected Text
$('.mutli-select-dropdown input[type="checkbox"]').on('click', function() {
	  var title = $(this).closest('.mutli-select-dropdown').find('input[type="checkbox"]').val(),
		title = $(this).val() + ",";
	  if ($(this).is(':checked')) {
		var html = '<span title="' + title + '">' + title + '</span>';
		$('.multiSel').append(html);
		$(".hidden-text1").hide();
	  } 
	  else {
		$('span[title="' + title + '"]').remove();
		var ret = $(".hidden-text1");
	  }
	});
$('.mutli-select-dropdown input[type="checkbox"]').on('click', function() {
	var checked = $('.mutli-select-dropdown').find("li").find(":checkbox:checked").length;
		if (checked == 0) {
		$(".hidden-text1").show();
	}
});
</script>