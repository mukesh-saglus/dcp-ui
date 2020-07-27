<!------- Smart Header Include File---------->
<?php include 'blog-header.php'; ?>
<!------- Smart Header Include File end---------->

<!------- CMS Stylesheet------=------->
<link rel="stylesheet" href="../css/cms.css">
<!------- CMS Stylesheet end---------->

<!--CKEditor Library -->
<script src="../../../vendors/ckeditor/ckeditor.js"></script>
<script src="../../../vendors/ckeditor/samples/js/sample.js"></script>


<!------- Header Start----------->
<div class="container-fluid pr15 pr-md30">
	<div class="row d-flex align-items-stretch">
		<div class="col-12 col-md-3 col-lg-3 col-xl-2 blog-tree p0 align-self-stretch d-flex">
			<div class="blog-title-box w-100 f-14">
				<div class="w500 mt5">Blog Details</div>
				<ul class="d-gblue-clr mt16">
				<li class="active">Title
				<li class="active">Blog URL
				<li>Body Content
				<li>Category
				<li>CTA Content From
				<li>Featured Image
				<li>Tags
				</ul>
			</div>
		</div>
		
		<div class="col-xl-10 col-lg-9 col-md-9 col-12">
		<div class="row">
		<div class="col-12 col-md-12 col-lg-7 col-xl-7 py15 py-md30">
			<div class="row f-14 align-items-center">
			<div class="col-12 col-md-3">
			<p class="lh140 mb5 mb-md0">Blog Title</p>
			</div>
			<div class="col-12 col-md-9 smart-form">
			<input type="text" class="form-control" placeholder="Enter your blog title">
			</div>
			</div>
			<div class="row f-14 align-items-center mt20">
			<div class="col-12 col-md-3">
			<p class="lh140 mb5 mb-md0">Blog URL</p>
			</div>
			<div class="col-12 col-md-9 smart-form">
			<div class="row">
			<div class="col-12 col-md-8 col-lg-9"><input type="text" class="form-control" placeholder="Post URL"></div>
			<div class="col-12 col-md-4 col-lg-3 align-self-center text-center text-md-right  mt10 mt-md0"><a href="#" class="p-blue-clr">Save</a> &nbsp; &nbsp; <a href="#" class="d-gblue-clr">Cancel</a></div>
			</div>
			</div>
			</div>
			<div class="row f-14 mt-md20 mt15">
			<div class="col-12">
			<div id="editor">
			<h1>Hello world!</h1>
			</div>
			<script>
				initSample();
			</script>
			</div>
			</div>
			<div class="row f-14 mt-md25 mt15">
				<div class="col-12 col-md-3 col-lg-3 col-xl3">
				<p class="lh140 mb5 mb-md0">Category</p>
				</div>
			 <div class="col-12 col-md-7 col-lg-9 col-xl-7 smart-form">
				<div class="row">
					<div class="col-12"><p class="lh140 mb6">Select one or multiple categories from below :</p></div>
					<div class="col-12 col-sm-12 mt8">
						<div class="dropdown simple-dropdown">
						  <button class="btn base-btn default-btn dropdown-toggle btn-block btn-h50 text-left" type="button" id="dropdownMenu1" data-toggle="dropdown"
						  aria-haspopup="true" aria-expanded="false"> <span class="caret-right pull-left text-truncate pr15">Select the category</span> </button>
						  <div class="dropdown-menu w-100 stoppropagation h-auto f-14"  aria-labelledby="dropdownMenu1"> 
								<!--- Searchbox Field ------->
								<div class="bs-searchbox-field">
								  <div class="input-group">
									<div class="smart-checkbox-btn checkbox-strong-blue">
									  <input id="saerch1" type="checkbox">
									  <label for="saerch1" class="mb4"></label>
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
								  <input id="checkdrop1" type="checkbox">
								  <label for="checkdrop1"> Email Marketing </label>
								</div>
								</a> </li>
							  <li> <a href="javascript:void(0)" class="dropdown-item">
								<div class="smart-checkbox-btn checkbox-strong-blue">
								  <input id="checkdrop2" type="checkbox">
								  <label for="checkdrop2"> SEO </label>
								</div>
								</a> </li>
							  <li> <a href="javascript:void(0)" class="dropdown-item">
								<div class="smart-checkbox-btn checkbox-strong-blue">
								  <input id="checkdrop3" type="checkbox">
								  <label for="checkdrop3"> Landing Page </label>
								</div>
								</a> </li>
							  <li> <a href="javascript:void(0)" class="dropdown-item">
								<div class="smart-checkbox-btn checkbox-strong-blue">
								  <input id="checkdrop4" type="checkbox">
								  <label for="checkdrop4"> Video Marketing </label>
								</div>
								</a> </li>
							  <li> <a href="javascript:void(0)" class="dropdown-item">
								<div class="smart-checkbox-btn checkbox-strong-blue">
								  <input id="checkdrop5" type="checkbox">
								  <label for="checkdrop5"> Marketing Automation </label>
								</div>
								</a> </li>
								<li> <a href="javascript:void(0)" class="dropdown-item">
								<div class="smart-checkbox-btn checkbox-strong-blue">
								  <input id="checkdrop6" type="checkbox">
								  <label for="checkdrop6"> Social </label>
								</div>
								</a> </li>
							</div>
						  </div>
						</div>
					</div>
					<div class="mCustomScrollbar mt-md25 mt15 category-height w-100" data-mcs-theme="inset-3">
						<div class="col-12"> 
							<!---- Video Marketing ---->
							<div class="row smart-form">
							<div class="col-12">
							<p class="lh140 mb5 mb-md0 w500">Video Marketing</p>
							</div>
							<div class="col-12 col-md-12 col-lg-6 mt15">
							<div class="smart-checkbox-btn checkbox-strong-blue d-flex pl10">
								  <input id="checkbox1" type="checkbox">
								  <label for="checkbox1"> Email Marketing </label>
								</div>
							</div>
							<div class="col-12 col-md-12 col-lg-6 mt15">
							<div class="smart-checkbox-btn checkbox-strong-blue d-flex pl10">
								  <input id="checkbox2" type="checkbox">
								  <label for="checkbox2"> Email Marketing </label>
								</div>
							</div>
							<div class="col-12 col-md-12 col-lg-6 mt15">
							<div class="smart-checkbox-btn checkbox-strong-blue d-flex pl10">
								  <input id="checkbox3" type="checkbox">
								  <label for="checkbox3"> Email Marketing </label>
								</div>
							</div>
							<div class="col-12 col-md-12 col-lg-6 mt15">
							<div class="smart-checkbox-btn checkbox-strong-blue d-flex pl10">
								  <input id="checkbox4" type="checkbox">
								  <label for="checkbox4"> Email Marketing </label>
								</div>
							</div>
							</div>
							<!----end Video Marketing ---->
							
							<!----Marketing Automation ---->
							<div class="row smart-form mt-md25 mt15">
							<div class="col-12">
							<p class="lh140 mb5 mb-md0 w500">Marketing Automation</p>
							</div>
							<div class="col-12 col-md-12 col-lg-6 mt15">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex pl10">
									  <input id="checkbox5" type="checkbox">
									  <label for="checkbox5"> Email Marketing </label>
									</div>
								</div>
								<div class="col-12 col-md-12 col-lg-6 mt15">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex pl10">
									  <input id="checkbox6" type="checkbox">
									  <label for="checkbox6"> Email Marketing </label>
									</div>
								</div>
								<div class="col-12 col-md-12 col-lg-6 mt15">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex pl10">
									  <input id="checkbox7" type="checkbox">
									  <label for="checkbox7"> Email Marketing </label>
									</div>
								</div>
								<div class="col-12 col-md-12 col-lg-6 mt15">
								<div class="smart-checkbox-btn checkbox-strong-blue d-flex pl10">
									  <input id="checkbox8" type="checkbox">
									  <label for="checkbox8"> Email Marketing </label>
									</div>
								</div>
							</div>
							<!--- end Marketing Automation --->
						</div>
					</div>
					</div>
				</div>
			</div>
			<div class="row f-14 align-items-center mt-md20 mt15">
				<div class="col-12 col-md-3 col-lg-3 col-xl3">
					<p class="lh140 mb5 mb-md0">CTA Content From</p>
				</div>
				<div class="col-12 col-md-7 col-lg-9 col-xl-7 smart-form tagsinput-h50">
					<select class="selectpicker" title="Subcategory one" data-live-search="true">
					<option>Subcategory one</option>
					<option>Subcategory two</option>
					<option>Subcategory three </option>
					<option>Subcategory four</option>
					<option>Subcategory Five</option>
					<option>Subcategory Six</option>
					</select>
				</div>
			</div>
			<div class="row f-14 mt-md25 mt15">
				<div class="col-12 col-md-3">
					<p class="lh140 mb5 mb-md0">Feature Image</p>
				</div>
				<div class="col-12 col-md-9 smart-form">
					<div class="row">
						<div class="col-12">
							<p class="lh140 mb6">Select one or multiple categories from below :</p>
						</div>
						<div class="col-12 mt8 d-flex align-items-end">
							<div class="featured-img align-items-center d-flex">
							<img src="../images/featured-img.png" class="img-fluid d-block mx-auto">
							</div>&nbsp; &nbsp;
							<a href="" class="base-btn default-btn" id="upload_link_primary">Browse...</a> &nbsp; &nbsp; 
							<a href="javascript:void(0)"  data-toggle="modal" data-target="#librarymodalVideo" class="base-btn default-btn">Choose from Library</a>
							<input id="upload_primary" type="file" class="d-none"/>
						</div>
						<div class="col-12 mt15">
							<p class="d-gblue-clr">Allowed file formats are .JPG , .PNG<br>
							Size of Image should be 770 x 415 px</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row f-14 align-items-center mt-md20 mt15">
				<div class="col-12 col-md-3">
					<p class="lh140 mb5 mb-md0">Tags</p>
				</div>
				<div class="col-12 col-md-9 smart-form tagsinput-h50">
					<input class="form-control" type="text" name="tags_secondary" value="tags" id="secondary" style="display: none;">
					<p class="lh140 mt8">Hit enter to separate</p>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-12 col-lg-5 col-xl-5 py15 py-md20 pt0 word-wrap">
        <!-- Nav tabs -->
        <ul class="nav tabs-style1 f-14" role="tablist">
          <li class="nav-item"> <a class="nav-link active" data-toggle="tab" data-target ="#readibility">Readibility</a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab"  data-target ="#seosettings">SEO Settings</a> </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content mt15 f-14 smart-form">
          <div id="readibility" class="container p0 tab-pane active">
			<div class="d-flex justify-content-start mb15 mb-md20">
			<div class="mr15"><i class="icon-dot sl-green-clr f-10"></i></div>
			<div class="lh140">The text does not contain any subheadings. Add at least one subheading.</div>
			</div>
			
			<div class="d-flex justify-content-start mb15 mb-md20">
			<div class="mr15"><i class="icon-dot vi-red-clr f-10"></i></div>
			<div class="lh140">40% of the sentences contain more than 20 words, which is more than the recommended maximum of 25%. Try to shorten the sentences.</div>
			</div>
			
			<div class="d-flex justify-content-start mb15 mb-md20">
			<div class="mr15"><i class="icon-dot vi-red-clr f-10"></i></div>
			<div class="lh140">40% of the sentences contain more than 20 words, which is more than the recommended maximum of 25%. Try to shorten the sentences.</div>
			</div>
          </div>
          <div id="seosettings" class="container p0 tab-pane fade">
            <div class="form-group mb-md20">
				<label>Meta Title</label>
				<input type="text" class="form-control field-h40 f-14">
			</div>
			<div class="form-group mb-md20">
				<label>Meta Description</label>
				<textarea class="form-control"></textarea>
				<div class="rounded-progress h10 mt10">
					<div class="rounded-progress-bar s-green-bg" style="width:90%"></div>
				</div>
			</div>
			<div class="form-group mb-md20 meta-keyword">
				<label>Meta keywords (comma separated)</label>
				<textarea class="form-control" name="tags_secondary" id="secondary">Meta keywords</textarea>
			</div>
			<div class="form-group mb-md20">
				<label>Focus keywords</label>
				<input type="text" class="form-control field-h40 f-14">
			</div>
			<div class="form-group mb-md20">
				<div class="smart-checkbox-btn checkbox-strong-blue mb10">
					<input id="NoIndex" class="checkbox-active" type="checkbox">
					<label for="NoIndex">Robots Meta NoIndex</label>
				</div>
					
				<div class="smart-checkbox-btn checkbox-strong-blue">
					<input id="NoFollow" class="checkbox-active" type="checkbox">
					<label for="NoFollow">Robots Meta NoFollow</label>
				</div>
			</div>
			
			
			<h5 class="w400 mb15">Snippet Preview</h5>
			<p class="f-14 lh140">Show information about the snippet editor This is a
rendering of what this post might look like in Google's
search results. Read this post for more info.</p>
			
			<div class="my15 my-md20"><a href="#" class="p-blue-clr t-decoration-none">http://blog.sagsmartmailer.com/demo-compose</a></div>
			
			<h5 class="w400 mb15">SEO Analysis</h5>
			
			<div class="d-flex justify-content-start mb15 mb-md20">
			<div class="mr15"><i class="icon-dot sl-green-clr f-10"></i></div>
			<div class="lh140">No focus keyword was set for this page. If you do not set a focus keyword, no score can be calculated.</div>
			</div>
			
			<div class="d-flex justify-content-start mb15 mb-md20">
			<div class="mr15"><i class="icon-dot vi-red-clr f-10"></i></div>
			<div class="lh140">The text contains 1053 words. This is more than or equal to the recommended minimum of 300 words.
Meta Description text contains 0 character. This is far too low and should be increased.text up to 156 characters</div>
			</div>
			
			<div class="d-flex justify-content-start mb15 mb-md20">
			<div class="mr15"><i class="icon-dot vi-red-clr f-10"></i></div>
			<div class="lh140">Meta title text contains 13 character. This is far too low and should be increased.text up to 60 characters
The images on this page are missing alt attributes</div>
			</div>
          </div>
        </div>

		</div>
		
	   </div>
	   </div>
	   </div>
</div>
<!------- Header End ----------->

<!------- Smart Footer Include File---------->
<?php include '../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->