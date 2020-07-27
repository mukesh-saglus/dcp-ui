<!------- Smart Header Include File---------->
<?php include 'category-header.php'; ?>
<!------- Smart Header Include File end---------->

<!------- CMS Stylesheet------=------->
<link rel="stylesheet" href="../css/cms.css">
<!------- CMS Stylesheet end---------->

<!------- Header Start----------->
<div class="container-fluid pr15 pr-md30 smart-form">
	<div class="row d-flex align-items-stretch">
		<div class="col-12 col-md-3 col-lg-3 col-xl-2 blog-tree p0 d-flex align-self-stretch">
			<div class="blog-title-box f-14 w-100">
				<div class="w400">Category Details</div>
					<ul class="d-gblue-clr mt16">
				<li class="active">Title
				<li class="active">Blog URL
				<li>Category Type
				<li>Summary
				<li>Background Color
				<li>Featured Image
				<li>CTA Content
				</ul>
			</div>
		</div>
		<div class="col-xl-10 col-lg-9 col-md-9 col-12">
			<div class="row">
				<div class="col-12 col-md-12 col-lg-7 col-xl-7 py15 py-md30 smart-form">
					<div class="row f-14 align-items-center">
						<div class="col-12 col-md-3">
							<p class="lh140 mb5 mb-md0">Title</p>
						</div>
						<div class="col-12 col-md-9 smart-form">
							<input type="text" class="form-control" placeholder="Enter your Category title">
						</div>
					</div>
					<div class="row f-14 align-items-center mt15 mt-md30">
						<div class="col-12 col-md-3">
							<p class="lh140 mb5 mb-md0">Category URL</p>
						</div>
						<div class="col-12 col-md-9 smart-form">
							<div class="row">
								<div class="col-9 col-md-10 col-lg-10 f-16 w400 text-truncate">http://blog.saglus.com/</div>
								<div class="col-3 col-md-2 col-lg-2 align-self-center text-right">
									<a href="#" class="p-blue-clr t-decoration-none">Edit</a> 
								</div>
							</div>
							<div class="d-flex justify-content-between flex-xl-nowrap flex-wrap align-items-center">
								<div class="f-16 w400 text-truncate">http://blog.saglus.com/</div>
								<div class="col-12 col-md-9 col-lg-12 col-xl-4 pl0 mt10 mt-xl0">
									<input type="text" class="form-control" placeholder="Category URL" value="">
								</div>
								<div class="align-self-center text-center text-md-right mt10 mt-xl0 text-nowrap">
									<a href="#" class="p-blue-clr t-decoration-none">Save</a> &nbsp; &nbsp; <a href="#" class="d-gblue-clr t-decoration-none">Cancel</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row f-14 align-items-center mt15 mt-md30">
						<div class="col-12 col-md-3">
							<p class="lh140 mb5 mb-md0">Category Type</p>
						</div>
						<div class="col-12 col-md-7 smart-form">
							<select class="selectpicker f-14" title="Choose the category type">
								<option>Parent</option>
								<option>Child</option>
							</select>
						</div>
					</div>
					<div class="row f-14 align-items-center mt15 mt-md30">
						<div class="col-12 col-md-7 offset-md-3 smart-form">
							<select class="selectpicker f-14" title="Choose the parent category" data-live-search="true">
								<option>Email Marketing </option>
								<option>SEO</option>
								<option>Landing Page</option>
								<option>Video Marketing</option>
								<option>Marketing Automation</option>
								<option>Social</option>
							</select>
						</div>
					</div>
					<div class="row f-14 align-items-center mt15 mt-md30">
						<div class="col-12 col-md-3">
							<p class="lh140 mb5 mb-md0">Summary</p>
						</div>
						<div class="col-12 col-md-9 smart-form">
							<input type="text" class="form-control" placeholder="Enter summary">
						</div>
					</div>
					<div class="row f-14 align-items-center mt15 mt-md30">
						<div class="col-12 col-md-3 align-self-start">
							<p class="lh140 mb5 mb-md0">Background Color</p>
						</div>
						<div class="col-12 col-md-9 smart-form">
							<p class="lh140 mb5">Select a color to define your category:</p>	
							<div id="cp3" class="input-group colorpicker-component l-gblue-border radius5 px20 align-items-center">
								<span class="input-group-addon"><i></i></span>
								<input type="text" value="#00AABB" class="border-0"/>
							</div>
						</div>
					</div>
					<div class="row f-14 mt-md25 mt15">
						<div class="col-12 col-md-3">
							<p class="lh140">Banner Image</p>
						</div>
						<div class="col-12 col-md-9 smart-form">
							<div class="row">
								<div class="col-12">
									<p class="lh140 mb6">Choose Image</p>
								</div>
								<div class="col-12 mt8 d-flex align-items-end">
									<div class="featured-img align-items-center d-flex">
									<img src="../images/featured-img.png" class="img-fluid d-block mx-auto">
									</div>&nbsp; &nbsp;
									<a href="" class="base-btn default-btn" id="upload_link_primary">Browse...</a> &nbsp; &nbsp; 
									<a href="#" class="base-btn default-btn">Choose from Library</a>
									<input id="upload_primary" type="file" class="d-none"/>
								</div>
								<div class="col-12 mt15">
									<p class="d-gblue-clr">allowed file formats are .JPG , .PNG</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row f-14 mt-md25 mt15">
						<div class="col-12 col-md-3">
							<p class="lh140">Featured Image</p>
						</div>
						<div class="col-12 col-md-9 smart-form">
							<div class="row">
								<div class="col-12">
									<p class="lh140 mb6">Choose Image</p>
								</div>
								<div class="col-12 mt8 d-flex align-items-end">
									<div class="featured-img align-items-center d-flex">
									<img src="../images/featured-img.png" class="img-fluid d-block mx-auto">
									</div>&nbsp; &nbsp;
									<a href="" class="base-btn default-btn" id="upload_link_secondary">Browse...</a> &nbsp; &nbsp; 
									<a href="#" class="base-btn default-btn">Choose from Library</a>
									<input id="upload_secondary" type="file" class="d-none"/>
								</div>
								<div class="col-12 mt15">
									<p class="d-gblue-clr">allowed file formats are .JPG , .PNG</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row f-14 align-items-center mt15 mt-md30">
						<div class="col-12 f-md-18 f-16 w500 mb-md20 mb15">CTA Content</div>
						<div class="col-12 col-md-3">
							<p class="lh140 mb5 mb-md0">CTA Headline</p>
						</div>
						<div class="col-12 col-md-9 smart-form">
							<input type="text" class="form-control" placeholder="Enter your text">
						</div>
					</div>
					<div class="row f-14 align-items-center mt15 mt-md30">
						<div class="col-12 col-md-3 pr-md0">
							<p class="lh140 mb5 mb-md0">CTA Sub-headline One</p>
						</div>
						<div class="col-12 col-md-9 smart-form">
							<input type="text" class="form-control" placeholder="Enter your text">
						</div>
					</div>
					<div class="row f-14 align-items-center mt15 mt-md30">
						<div class="col-12 col-md-3 pr-md0">
							<p class="lh140 mb5 mb-md0">CTA Sub-headline Two</p>
						</div>
						<div class="col-12 col-md-9 smart-form">
							<input type="text" class="form-control" placeholder="Enter your text">
						</div>
					</div>
					<div class="row f-14 align-items-center mt15 mt-md30">
						<div class="col-12 col-md-3">
							<p class="lh140 mb5 mb-md0">CTA Button Text</p>
						</div>
						<div class="col-12 col-md-9 smart-form">
							<input type="text" class="form-control" placeholder="Enter your text">
						</div>
					</div>
					<div class="row f-14 align-items-center mt15 mt-md30">
						<div class="col-12 col-md-3">
							<p class="lh140 mb5 mb-md0">Post CTA Text One</p>
						</div>
						<div class="col-12 col-md-9 smart-form">
							<input type="text" class="form-control" placeholder="Enter your text">
						</div>
					</div>
					<div class="row f-14 align-items-center mt15 mt-md30">
						<div class="col-12 col-md-3">
							<p class="lh140 mb5 mb-md0">Post CTA Text Two</p>
						</div>
						<div class="col-12 col-md-9 smart-form">
							<input type="text" class="form-control" placeholder="Enter your text">
						</div>
					</div>
					
				</div>
			<div class="col-12 col-md-12 col-lg-5 col-xl-5 py15 py-md30 pt0 align-self-stretch f-14 word-wrap">
			<h5 class="w400 mb15">Keyword</h5>
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
					<textarea class="form-control" name="tags_secondary" id="secondary" style="display: none;">Meta keywords</textarea>
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
<!------- Header End ----------->

<!------- Smart Footer Include File---------->
<?php include '../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->