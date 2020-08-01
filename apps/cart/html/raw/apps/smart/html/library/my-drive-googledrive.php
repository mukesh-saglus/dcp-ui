<!------- Smart Header Include File---------->
<?php include '../includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<!------- MyDrive Stylesheet------=------->
<link rel="stylesheet" href="../../css/mydrive.css">
<!------- MyDrive Stylesheet end---------->

<div class="container-fluid p15 px-md30 py-md30">
	<!------- Header Start----------->
	<div class="row mb15 mb-md30 align-items-center">
		<div class="col-12  col-md-7">
			<span class="f-20 f-md-24 lato-font">MyDrive</span> &nbsp;
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="f-14 mt5 gblue-clr">Your central drive to upload & manage files</p>
		</div>
		<div class="col-12 col-md-5 f-16 text-center text-md-right mt10 mt-md0">
			<a href="javascript:void(0);" class="base-btn default-btn mr5" data-toggle="modal" data-target="#createfolderModal">Create New Folder</a>
			<a href="javascript:void(0);" class="base-btn blue-btn" data-toggle="modal" data-target="#uploadfileModal">Upload</a>
		</div>
	</div>
	<!------- Header End ----------->

	<div class="row">
		<div class="col-xl-2 col-lg-3 col-md-3 col-12">
			<!--- Heading ---->
			<h5 class="w600 mb15 mb-md30">Types:</h5>
			<div class="nav flex-column nav-pills ui-vertical-tab f-14 w400" id="third-party-sticky">
				<a class="nav-link" href="#"><i class="icon-all-files f-16"></i> All Files</a>
				<a class="nav-link" data-toggle="pill" href="#"><i class="icon-folder f-16"></i> Folders</a>
				<a class="nav-link" data-toggle="pill" href="#"><i class="icon-image f-16"></i> Images</a>
				<a class="nav-link" data-toggle="pill" href="#"><i class="icon-doc f-16"></i> Documents</a>
				<a class="nav-link" data-toggle="pill" href="#"><i class="icon-total-viewed-videos f-16"></i> Videos</a>
				<a class="nav-link" data-toggle="pill" href="#"><i class="icon-audios f-16"></i> Audios</a>
				<a class="nav-link" data-toggle="pill" href="#"><i class="icon-others f-16"></i> Others</a>
				<a class="nav-link active" data-toggle="pill" href="#"><i class="icon-third-party f-18"></i> Third Party</a>
			</div>
		</div>
		<div class="col-xl-10 col-lg-9 col-md-9 col-12">
			<!--- Heading ---->
			<h5 class="w600 mb15 mb-md30 mt30 mt-md0">Third Party Image Providers</h5>
			
			<div class="row mb15 mb-md0 mt30 mt-md0">

			<!-- Nav tabs -->
			<ul class="nav nav-tabs thirdparty-navs nav-justified w-100" role="tablist">
			  <li class="nav-item">
				<a class="nav-link" href="#pixabay" role="tab" data-toggle="tab"><img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/my-drive-pixabay.png"></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#pexels" role="tab" data-toggle="tab"><img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/my-drive-pexels.png"></a>
			  </li>
			   <li class="nav-item">
				<a class="nav-link" href="#shutterstock" role="tab" data-toggle="tab"><img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/my-drive-shutterstock.png"></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link active" href="#googledrive" role="tab" data-toggle="tab"><img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/my-drive-googledrive.png"></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#onedrive" role="tab" data-toggle="tab"><img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/my-drive-onedrive.png"></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#dropbox" role="tab" data-toggle="tab"><img class="img-fluid d-block mx-auto" src="<?php echo $basedir; ?>images/my-drive-dropbox.png"></a>
			  </li>
			</ul>

				
			<!-- Tab panes -->
				
				<div class="col-12 tab-content mt15 mt-md20">
					
			<!--- Filteration Div ---->
			<div class="row align-items-center mb15 mb-md30">
				<div class="col-12 col-md-8 col-lg-7">
					<div class="d-flex align-items-center flex-wrap mb15 mb-md0">
						<a href="#" class="d-gblue-clr f-12 t-decoration-none pr15 pr-md20"><i class="icon-back"></i></a>
						<ul class="stepwizard-style2 max-drive-stepwizard f-16 f-md-18 w500">
							<li> 
								<a href="#">Folder Name </a> 
							</li>
							<li> <a href="#">Subfolder Name</a> </li>
						</ul>
					</div>
					<!-- <div class="row">
						<div class="col-12 col-md-6 bs-h40 mb10 mb-md0">
							<select class="selectpicker f-14" title="Select Category">
								<option>Images</option>
								<option>Videos</option>
							</select>
						</div>
						<div class="col-12 col-md-6 bs-h40 mb10 mb-md0">
							<select class="selectpicker f-14" title="Options">
								<option>Option 1</option>
								<option>Option 2</option>
								<option>Option 3</option>
							</select>
						</div>
					</div> -->
				</div>
				<div class="col-12 col-md-4 col-lg-5">
					<div class="smart-search-field">
						<div class="input-group">
							<input class="form-control" placeholder="Search" type="text">
							<div class="input-group-append">
								<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
				<!--- Filteration Div ---->
				
				<!------- Pixabay Black Section Start ---->				
				<div class="row d-none">
				    <div class="col-12">
						<div class="Pixabay-bg">
							<div class="d-block text-center">
								<img src="<?php echo $basedir; ?>images/Pixabay-icon.png" class="img-fluid mx-auto">
								<div class="f-14 mt15 mt-md35">Search Keywords To Bring Images From Pixabay</div>
							</div>
						</div>
					</div>
				</div>
				<!------- Pixabay Black Section End ---->
				
				<!------- Pixabay Section Start ---->
			    <div role="tabpanel" class="tab-pane" id="pixabay">
					<!------- Pixabay Search Result Start ---->
					<div class="row">
						<div class="w-100">
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
						</div>
						<!------- Load More Button ---->
						<div class="col-12 col-md-6 col-lg-4 offset-lg-4 offset-md-3 text-center">
							<a href="javascript:void(0)" class="base-btn default-btn btn-h50 btn-block">Load More...</a>
						</div>
					</div>
					<!------- Pixabay Search Result End ---->
				</div>
				<!------- Pixabay Section Start ---->
					
					<!------- Pexels Section Start ---->
			    <div role="tabpanel" class="tab-pane" id="pexels">
					<!------- Pixabay Black Section End ---->
					<!------- Pixabay Search Result Start ---->
					<div class="row">
						<div class="w-100">
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
						</div>
						<!------- Load More Button ---->
						<div class="col-12 col-md-6 col-lg-4 offset-lg-4 offset-md-3 text-center">
							<a href="javascript:void(0)" class="base-btn default-btn btn-h50 btn-block">Load More...</a>
						</div>
					</div>
					<!------- Pixabay Search Result End ---->
				  </div>
				<!------- Pexels Section Start ---->
					
				<!------- Shutterstock Section Start ---->
				<div role="tabpanel" class="tab-pane" id="shutterstock">
					<!------- Pixabay Search Result Start ---->
					<div class="row">
						<div class="w-100">
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-1-5 col-sm-1-5 col-md-1-5 mb15 mb-md30">
								<div class="gradient-border1 relative mytooltip-hover">
									<a data-toggle="modal" class="cursor" data-target="#PixabayModal">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../../../images/lib-img.png" class="d-block mx-auto img-fluid">
										</div>
									</a>
								</div>
							</div>
						</div>
						<!------- Load More Button ---->
						<div class="col-12 col-md-6 col-lg-4 offset-lg-4 offset-md-3 text-center">
							<a href="javascript:void(0)" class="base-btn default-btn btn-h50 btn-block">Load More...</a>
						</div>
					</div>
					<!------- Pixabay Search Result End ---->
			    </div>
				
				<!------- Shutterstock Section Start ---->
					
				<!------- Googledrive Section Start ---->
				<div role="tabpanel" class="tab-pane active" id="googledrive">
					<div class="row">
				    <div class="col-12">
					<!------- Googledrive Table Section Start ---->
					 <div id="thori-scroll" class="table-responsive smart-table-style">
                	 <table class="table table-bordered">
					<thead>
						<tr>
							<th><div class="smart-checkbox-btn checkbox-strong-blue">
								<input id="checkAll" type="checkbox">
								<label for="checkAll"></label>
							  </div></th>					 
							<th>File &nbsp;<i class="fa fa-sort"></i></th>
							<th>Type </th>
							<th>Modified Date &nbsp;<i class="fa fa-sort"></i></th>
							<th>Size &nbsp;<i class="fa fa-sort"></i></th>
							<th>Actions</th>
						</tr>
					</thead>
					<!----- Table Option Div Show----> 
					<div class="table-option-manage animated fadeIn">
						<ul class="list-inline f-14 w400 mb0">
							<li class="list-inline-item"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Add"><i class="icon-add"></i> Add to MyDrive</a>
							</li>
						</ul>
					</div>
					<!----- Table Option Div end----> 
					<tbody>
						<tr>
							<td><div class="smart-checkbox-btn checkbox-strong-blue">
								<input id="tcheck1" type="checkbox" class="checkbox-active">
								<label for="tcheck1"></label>
							  </div></td>
							<td><a href="#" class="p-blue-clr t-decoration-none">File 1</a></td>
							<td><a href="#" class="p-blue-clr t-decoration-none">Images</a></td>
							<td>17 Feb 2019 at 10:41 AM </td>
							<td>5 KB</td>
							<td><ul class="table-action">
							
								<li class="action-menu"><a href="#" class="action-item"><span data-toggle="tooltip" data-placement="top" data-original-title="Add to MyDrive"><i class="icon-add"></i></span></a></li>
							  </ul></td>
						</tr>
						<tr>
							<td><div class="smart-checkbox-btn checkbox-strong-blue">
								<input id="tcheck1" type="checkbox" class="checkbox-active">
								<label for="tcheck1"></label>
							  </div></td>
							<td><a href="#" class="p-blue-clr t-decoration-none">File 2</a></td>
							<td><a href="#" class="p-blue-clr t-decoration-none">Video</a></td>
							<td>17 Feb 2019 at 10:41 AM </td>
							<td>2.5 KB</td>
							<td><ul class="table-action">
							
								<li class="action-menu"><a href="#" class="action-item"><span data-toggle="tooltip" data-placement="top" data-original-title="Add to MyDrive"><i class="icon-add"></i></span></a></li>
							  </ul></td>
						</tr>
						<tr>
							<td><div class="smart-checkbox-btn checkbox-strong-blue">
								<input id="tcheck1" type="checkbox" class="checkbox-active">
								<label for="tcheck1"></label>
							  </div></td>
							<td><a href="#" class="p-blue-clr t-decoration-none">File 3</a></td>
							<td><a href="#" class="p-blue-clr t-decoration-none">Audio</a></td>
							<td>17 Feb 2019 at 10:41 AM </td>
							<td>2.5 KB</td>
							<td><ul class="table-action">
							
								<li class="action-menu"><a href="#" class="action-item"><span data-toggle="tooltip" data-placement="top" data-original-title="Add to MyDrive"><i class="icon-add"></i></span></a></li>
							  </ul></td>
						</tr>
						<tr>
							<td><div class="smart-checkbox-btn checkbox-strong-blue">
								<input id="tcheck1" type="checkbox" class="checkbox-active">
								<label for="tcheck1"></label>
							  </div></td>
							<td><a href="#" class="p-blue-clr t-decoration-none">File 4</a></td>
							<td><a href="#" class="p-blue-clr t-decoration-none">Folder</a></td>
							<td>17 Feb 2019 at 10:41 AM </td>
							<td>5 KB</td>
							<td><ul class="table-action">
							
								<li class="action-menu"><a href="#" class="action-item"><span data-toggle="tooltip" data-placement="top" data-original-title="Add to MyDrive"><i class="icon-add"></i></span></a></li>
							  </ul></td>
						</tr>
						<tr>
							<td><div class="smart-checkbox-btn checkbox-strong-blue">
								<input id="tcheck1" type="checkbox" class="checkbox-active">
								<label for="tcheck1"></label>
							  </div></td>
							<td><a href="#" class="p-blue-clr t-decoration-none">File 5</a></td>
							<td><a href="#" class="p-blue-clr t-decoration-none">Images</a></td>
							<td>17 Feb 2019 at 10:41 AM </td>
							<td>5 KB</td>
							<td><ul class="table-action">
							
								<li class="action-menu"><a href="#" class="action-item"><span data-toggle="tooltip" data-placement="top" data-original-title="Add to MyDrive"><i class="icon-add"></i></span></a></li>
							  </ul></td>
						</tr>
					</tbody>
                </table>
           			 </div>
					 <!----- Pagination Div Start----->
					 <div class="d-flex justify-content-between flex-wrap f-14 mt15 mt-md30">
						<div class="d-flex justify-content-start align-items-center mb5">
							Show
							<span class="bs-h40 entries-width px15">
								<select class="selectpicker" >
									<option>10</option>
									<option>20</option>
									<option>30</option>
								</select>
							</span>
							<span class="d-none d-xl-block">Showing 1 to 4 of 400 entries</span>
						</div> 	
						<div class="mb5">
							<ul class="rounded-pagination f-14">
								<li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i> </a></li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </a></li>
								<li><a href="#" class="active">6</a></li>
								<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> </a></li>
							</ul>
						</div> 
					</div> 
					 <!----- Pagination Div End----->	
					<!------- Googledrive Table Section End ---->
					</div>
					</div>	
				</div>
				<!------- Googledrive Section Start ---->
				
				<!------- Onedrive Section Start ---->
				<div role="tabpanel" class="tab-pane" id="onedrive">
				
				<div class="row">
				    <div class="col-12">
					<!------- Onedrive Table Section Start ---->
					 <div id="thori-scroll" class="table-responsive smart-table-style">
                	 <table class="table table-bordered">
					<thead>
						<tr>
							<th><div class="smart-checkbox-btn checkbox-strong-blue">
								<input id="checkAll" type="checkbox">
								<label for="checkAll"></label>
							  </div></th>					 
							<th>File &nbsp;<i class="fa fa-sort"></i></th>
							<th>Modified Date &nbsp;<i class="fa fa-sort"></i></th>
							<th>Size &nbsp;<i class="fa fa-sort"></i></th>
							<th>Actions</th>
						</tr>
					</thead>
					<!----- Table Option Div Show----> 
					<div class="table-option-manage animated fadeIn">
						<ul class="list-inline f-14 w400 mb0">
							<li class="list-inline-item"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Add"><i class="icon-add"></i> Add to MyDrive</a>
							</li>
						</ul>
					</div>
					<!----- Table Option Div end----> 
					<tbody>
						<tr>
							<td><div class="smart-checkbox-btn checkbox-strong-blue">
								<input id="tcheck1" type="checkbox" class="checkbox-active">
								<label for="tcheck1"></label>
							  </div></td>
							<td><a href="#" class="p-blue-clr t-decoration-none">File 1</a></td>
							<td>17 Feb 2019 at 10:41 AM </td>
							<td>5 KB</td>
							<td><ul class="table-action">
							
								<li class="action-menu"><a href="#" class="action-item"><span data-toggle="tooltip" data-placement="top" data-original-title="Add to MyDrive"><i class="icon-add"></i></span></a></li>
							  </ul></td>
						</tr>
						<tr>
							<td><div class="smart-checkbox-btn checkbox-strong-blue">
								<input id="tcheck1" type="checkbox" class="checkbox-active">
								<label for="tcheck1"></label>
							  </div></td>
							<td><a href="#" class="p-blue-clr t-decoration-none">File 2</a></td>
							<td>17 Feb 2019 at 10:41 AM </td>
							<td>2.5 KB</td>
							<td><ul class="table-action">
							
								<li class="action-menu"><a href="#" class="action-item"><span data-toggle="tooltip" data-placement="top" data-original-title="Add to MyDrive"><i class="icon-add"></i></span></a></li>
							  </ul></td>
						</tr>
						<tr>
							<td><div class="smart-checkbox-btn checkbox-strong-blue">
								<input id="tcheck1" type="checkbox" class="checkbox-active">
								<label for="tcheck1"></label>
							  </div></td>
							<td><a href="#" class="p-blue-clr t-decoration-none">File 3</a></td>
							<td>17 Feb 2019 at 10:41 AM </td>
							<td>2.5 KB</td>
							<td><ul class="table-action">
							
								<li class="action-menu"><a href="#" class="action-item"><span data-toggle="tooltip" data-placement="top" data-original-title="Add to MyDrive"><i class="icon-add"></i></span></a></li>
							  </ul></td>
						</tr>
						<tr>
							<td><div class="smart-checkbox-btn checkbox-strong-blue">
								<input id="tcheck1" type="checkbox" class="checkbox-active">
								<label for="tcheck1"></label>
							  </div></td>
							<td><a href="#" class="p-blue-clr t-decoration-none">File 4</a></td>
							<td>17 Feb 2019 at 10:41 AM </td>
							<td>5 KB</td>
							<td><ul class="table-action">
							
								<li class="action-menu"><a href="#" class="action-item"><span data-toggle="tooltip" data-placement="top" data-original-title="Add to MyDrive"><i class="icon-add"></i></span></a></li>
							  </ul></td>
						</tr>
						<tr>
							<td><div class="smart-checkbox-btn checkbox-strong-blue">
								<input id="tcheck1" type="checkbox" class="checkbox-active">
								<label for="tcheck1"></label>
							  </div></td>
							<td><a href="#" class="p-blue-clr t-decoration-none">File 5</a></td>
							<td>17 Feb 2019 at 10:41 AM </td>
							<td>5 KB</td>
							<td><ul class="table-action">
							
								<li class="action-menu"><a href="#" class="action-item"><span data-toggle="tooltip" data-placement="top" data-original-title="Add to MyDrive"><i class="icon-add"></i></span></a></li>
							  </ul></td>
						</tr>
					</tbody>
                </table>
           			 </div>
					 <!----- Pagination Div Start----->
					 <div class="d-flex justify-content-between flex-wrap f-14 mt15 mt-md30">
						<div class="d-flex justify-content-start align-items-center mb5">
							Show
							<span class="bs-h40 entries-width px15">
								<select class="selectpicker" >
									<option>10</option>
									<option>20</option>
									<option>30</option>
								</select>
							</span>
							<span class="d-none d-xl-block">Showing 1 to 4 of 400 entries</span>
						</div> 	
						<div class="mb5">
							<ul class="rounded-pagination f-14">
								<li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i> </a></li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </a></li>
								<li><a href="#" class="active">6</a></li>
								<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> </a></li>
							</ul>
						</div> 
					</div> 
					 <!----- Pagination Div End----->	
					<!------- Onedrive Table Section End ---->
					</div>
					</div>
				
				</div>
				<!------- Onedrive Section ends ---->
					
				<!------- Dropbox Section Start ---->
				<div role="tabpanel" class="tab-pane" id="dropbox">
				
				<div class="row">
				    <div class="col-12">
					<!------- Dropbox Table Section Start ---->
					 <div id="thori-scroll" class="table-responsive smart-table-style">
                	 <table class="table table-bordered">
					<thead>
						<tr>
							<th><div class="smart-checkbox-btn checkbox-strong-blue">
								<input id="checkAll" type="checkbox">
								<label for="checkAll"></label>
							  </div></th>					 
							<th>File &nbsp;<i class="fa fa-sort"></i></th>
							<th>Modified Date &nbsp;<i class="fa fa-sort"></i></th>
							<th>Size &nbsp;<i class="fa fa-sort"></i></th>
							<th>Actions</th>
						</tr>
					</thead>
					<!----- Table Option Div Show----> 
					<div class="table-option-manage animated fadeIn">
						<ul class="list-inline f-14 w400 mb0">
							<li class="list-inline-item"><a href="#" class="base-btn default-btn btn-h30 f-14" title="Add"><i class="icon-add"></i> Add to MyDrive</a>
							</li>
						</ul>
					</div>
					<!----- Table Option Div end----> 
					<tbody>
						<tr>
							<td><div class="smart-checkbox-btn checkbox-strong-blue">
								<input id="tcheck1" type="checkbox" class="checkbox-active">
								<label for="tcheck1"></label>
							  </div></td>
							<td><a href="#" class="p-blue-clr t-decoration-none">File 1</a></td>
							<td>17 Feb 2019 at 10:41 AM </td>
							<td>5 KB</td>
							<td><ul class="table-action">
							
								<li class="action-menu"><a href="#" class="action-item"><span data-toggle="tooltip" data-placement="top" data-original-title="Add to MyDrive"><i class="icon-add"></i></span></a></li>
							  </ul></td>
						</tr>
						<tr>
							<td><div class="smart-checkbox-btn checkbox-strong-blue">
								<input id="tcheck1" type="checkbox" class="checkbox-active">
								<label for="tcheck1"></label>
							  </div></td>
							<td><a href="#" class="p-blue-clr t-decoration-none">File 2</a></td>
							<td>17 Feb 2019 at 10:41 AM </td>
							<td>2.5 KB</td>
							<td><ul class="table-action">
							
								<li class="action-menu"><a href="#" class="action-item"><span data-toggle="tooltip" data-placement="top" data-original-title="Add to MyDrive"><i class="icon-add"></i></span></a></li>
							  </ul></td>
						</tr>
						<tr>
							<td><div class="smart-checkbox-btn checkbox-strong-blue">
								<input id="tcheck1" type="checkbox" class="checkbox-active">
								<label for="tcheck1"></label>
							  </div></td>
							<td><a href="#" class="p-blue-clr t-decoration-none">File 3</a></td>
							<td>17 Feb 2019 at 10:41 AM </td>
							<td>2.5 KB</td>
							<td><ul class="table-action">
							
								<li class="action-menu"><a href="#" class="action-item"><span data-toggle="tooltip" data-placement="top" data-original-title="Add to MyDrive"><i class="icon-add"></i></span></a></li>
							  </ul></td>
						</tr>
						<tr>
							<td><div class="smart-checkbox-btn checkbox-strong-blue">
								<input id="tcheck1" type="checkbox" class="checkbox-active">
								<label for="tcheck1"></label>
							  </div></td>
							<td><a href="#" class="p-blue-clr t-decoration-none">File 4</a></td>
							<td>17 Feb 2019 at 10:41 AM </td>
							<td>5 KB</td>
							<td><ul class="table-action">
							
								<li class="action-menu"><a href="#" class="action-item"><span data-toggle="tooltip" data-placement="top" data-original-title="Add to MyDrive"><i class="icon-add"></i></span></a></li>
							  </ul></td>
						</tr>
						<tr>
							<td><div class="smart-checkbox-btn checkbox-strong-blue">
								<input id="tcheck1" type="checkbox" class="checkbox-active">
								<label for="tcheck1"></label>
							  </div></td>
							<td><a href="#" class="p-blue-clr t-decoration-none">File 5</a></td>
							<td>17 Feb 2019 at 10:41 AM </td>
							<td>5 KB</td>
							<td><ul class="table-action">
							
								<li class="action-menu"><a href="#" class="action-item"><span data-toggle="tooltip" data-placement="top" data-original-title="Add to MyDrive"><i class="icon-add"></i></span></a></li>
							  </ul></td>
						</tr>
					</tbody>
                </table>
           			 </div>
					 <!----- Pagination Div Start----->
					 <div class="d-flex justify-content-between flex-wrap f-14 mt15 mt-md30">
						<div class="d-flex justify-content-start align-items-center mb5">
							Show
							<span class="bs-h40 entries-width px15">
								<select class="selectpicker" >
									<option>10</option>
									<option>20</option>
									<option>30</option>
								</select>
							</span>
							<span class="d-none d-xl-block">Showing 1 to 4 of 400 entries</span>
						</div> 	
						<div class="mb5">
							<ul class="rounded-pagination f-14">
								<li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i> </a></li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </a></li>
								<li><a href="#" class="active">6</a></li>
								<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> </a></li>
							</ul>
						</div> 
					</div> 
					 <!----- Pagination Div End----->	
					<!------- Dropbox Table Section End ---->
					</div>
					</div>
				
				</div>
				<!------- Dropbox Section Start ---->
					
				</div>

			</div>
			
		
		</div>
	</div>
</div>

<!------- Smart Footer Include File---------->
<?php include '../includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->

<script>
//PixaBay Lest OnScroll Sticky
window.onscroll = function() {
	pixabayfixed();
};
function pixabayfixed() {
	if($('#third-party-sticky').length){
		var mydrivepixabay = document.getElementById("third-party-sticky");
		var newsticky = 250;
		  if (window.pageYOffset >= newsticky) {
			mydrivepixabay.classList.add("pixabay-sticky")
		  } else {
			mydrivepixabay.classList.remove("pixabay-sticky");
		  }
	}
};
</script>