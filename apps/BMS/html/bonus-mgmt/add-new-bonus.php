<!------- knowledge Base Header Include File---------->
<?php include 'bonus-header.php'; ?>
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
				<div class="w500 mt5">Bonus Details</div>
				<ul class="d-gblue-clr mt16">
                <li class="active">Category
				<li class="active">Solution
				<li class="active">Package
				<li>Title
				<li>Slug
				<li>URL
				<li>Description
				<li>Bonus Image
				</ul>
			</div>
		</div>
		
		<div class="col-xl-10 col-lg-9 col-md-9 col-12">
		<div class="row">
		<div class="col-12 col-md-12 col-lg-7 col-xl-7 py15 py-md30">
        	<div class="row f-14 align-items-center mt20">
			<div class="col-12 col-md-3">
			<p class="lh140 mb5 mb-md0">Category<span class="vi-red-clr">*</span></p>
			</div>
			<div class="col-12 col-md-9 smart-form">
				<select class="selectpicker" title="Select Category" data-live-search="true">
						<option>Forgot password</option>
						<option>Trial version buy</option>
						<option>Email confirmation Link</option>
						<option>Email verfication </option>
				</select>
			</div>
			</div> 
            
			<div class="row f-14 align-items-center mt20">
			<div class="col-12 col-md-3">
			<p class="lh140 mb5 mb-md0">Solution<span class="vi-red-clr">*</span></p>
			</div>
			<div class="col-12 col-md-9 smart-form">
				<select class="selectpicker" title="Select Solution Type" data-live-search="true">
						<optgroup>
						<option>All Solution</option>
						</optgroup>
						<option>Solution 1</option>
						<option>Solution 2</option>
						<option>Solution 3</option>
						<option>Solution 4</option>
				</select>
			</div>
			</div>
			<div class="row f-14 align-items-center mt20">
			<div class="col-12 col-md-3">
			<p class="lh140 mb5 mb-md0">Package<span class="vi-red-clr">*</span></p>
			</div>
			<div class="col-12 col-md-9 smart-form">
				<select class="selectpicker" title="Select Package Type" data-live-search="true">
						<optgroup>
						<option>All Package</option>
						</optgroup>
						<option>Package 1</option>
						<option>Package 2</option>
						<option>Package 3</option>
						<option>Package 4</option>
				</select>
			</div>
			</div>
			
			<div class="row f-14 align-items-center mt20">
			<div class="col-12 col-md-3">
			<p class="lh140 mb5 mb-md0">Title<span class="vi-red-clr">*</span></p>
			</div>
			<div class="col-12 col-md-9 smart-form">
				<input type="text" class="form-control" placeholder="Demo">
			</div>
			</div>
			<div class="row f-14 align-items-center mt20">
			<div class="col-12 col-md-3">
			<p class="lh140 mb5 mb-md0">Slug</p>
			</div>
			<div class="col-12 col-md-9 smart-form">
				<input type="text" class="form-control" placeholder="Demo">
			</div>
			</div>
			<div class="row f-14 align-items-center mt20">
			<div class="col-12 col-md-3">
			<p class="lh140 mb5 mb-md0">URL<span class="vi-red-clr">*</span></p>
			</div>
			<div class="col-12 col-md-9 smart-form">
				<input type="text" class="form-control" placeholder="www.google.com">
			</div>
			</div>
			<!--<div class="row f-14 mt20">
			<div class="col-12 col-md-3">
			<p class="lh140 mb5 mb-md0">Description<span class="vi-red-clr">*</span></p>
			</div>
			<div class="col-12 col-md-9 smart-form">
				<textarea rows="5" placeholder="Demo" class="form-control">Demo</textarea>
			</div>
			</div>-->
			<div class="row f-14 mt-md20 mt20">
			<div class="col-12 col-md-3">
			<p class="lh140 mb5 mb-md0">Description<span class="vi-red-clr">*</span></p>
			</div>
			<div class="col-12 col-md-9">
			<div id="editor">
			<h1>Hello world!</h1>
			</div>
			<script>
			initSample();
			</script>
			</div>	
			</div>
            
            
            <div class="row f-14 mt-md25 mt15">
				<div class="col-12 col-md-3">
					<p class="lh140 mb5 mb-md0">Bonus Image<span class="vi-red-clr">*</span></p>
				</div>
				<div class="col-12 col-md-9 smart-form">
					<div class="row">
						<div class="col-12 mt8 d-flex align-items-end">
							<div class="featured-img align-items-center d-flex">
							<img src="../../images/featured-img.png" class="img-fluid d-block mx-auto">
							</div>&nbsp; &nbsp;
							<a href="" class="base-btn default-btn" id="upload_link_primary">Browse...</a> &nbsp; &nbsp; 
                            <a href="javascript:void(0)"  data-toggle="modal" data-target="#librarymodalVideo" class="base-btn default-btn">Choose from MyDrive</a>
							<input id="upload_primary" type="file" class="d-none"/>
						</div>
						<div class="col-12 mt15">
							<p class="d-gblue-clr">Allowed file formats are .JPG , .PNG<br>
							Size of Image should be 770 x 415 px</p>
						</div>
					</div>
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