<!-- Header Include File -->
<?php include '../../../smart/html/includes/dcp-header-final.php'; ?>
<!-- Header Include File end -->

<!-- Cart Stylesheet -->
<link rel="stylesheet" href="../../css/cart.css" />
<!-- Cart Stylesheet end -->

<div class="container-fluid p15 p-md30 pt-md10">
    <!-- Header Start -->
    <div class="row mb10">
        <div class="col-12">
            <div class="d-flex align-items-center flex-wrap">
                <ul class="stepwizard-style4 f-14 w400">
                    <li>
                        <a href="#"><i class="icon-home f-14"></i></a>
                    </li>
                    <li>
                        <a href="#"><span>Sell</span></a>
                    </li>
                    <li>
                        <a href="#"><span>Levels</span></a>
                    </li>
                    <li>
                        <a href="#"><span>New Level</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row mb15 mb-md30">
        <div class="col-12">
            <span class="f-20 f-md-24 lato-font">Membership Level </span> &nbsp;
            <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
            <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
            <p class="f-14 mt5 gblue-clr">Create new membership level & assign access from here</p>
        </div>
    </div>
    <!-- Header End -->
    <!-- Step Wizard Div Start -->
    <div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md25">
        <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
            <div class="circle-num"><span>1</span></div>
            <div class="title align-self-center">Level’s Access</div>
            <div class="sep-line align-self-center d-none d-lg-block"></div>
        </div>
        <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
            <div class="circle-num"><span> 2</span></div>
            <div class="title align-self-center">Preview & Publish</div>
            <div class="sep-line align-self-center d-none d-lg-block"></div>
        </div>
    </div>
    <!-- Step Wizard Div End -->
    <div class="row">
        <div class="col-12 f-16 w400">Preview the levels</div>
        <div class="col-12 segment-accordion mt-md20 mt15">
            <div id="accordion" class="accordion">
                <div class="card mb-0 f-16">
                    <div class="card-header" data-toggle="collapse" href="#" aria-expanded="true">
                        <a class="card-title lato-font">&nbsp; Pages</a>
                    </div>
                    <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Preview the level for Pages." class="pull-right d-gblue-clr segment-info">
                        <i class="icon-information"></i>
                    </a>
                    <div id="Pages" class="collapse show">
                        <div class="card-body p15 pt-md30 px-md30">
                            <div class="row">
								<div class="col-xs-12 col-md-4 col-lg-3 col-xl preview-col-xl mb15 mb-md30">
									<div class="design-gallery-grid level-listing">
										<img src="../../images/page-temp1.png" class="img-fluid d-block mx-auto" />
									</div>
									<p class="f-14 w400 align-self-center text-truncate mt10" title="Page Title">Page Title</p>
								</div>
								<div class="col-xs-12 col-md-4 col-lg-3 col-xl preview-col-xl mb15 mb-md30">
									<div class="design-gallery-grid level-listing">
										<img src="../../images/page-temp2.png" class="img-fluid d-block mx-auto" />
									</div>
									<p class="f-14 w400 align-self-center text-truncate mt10" title="Page Title">Page Title</p>
								</div>
								<div class="col-xs-12 col-md-4 col-lg-3 col-xl preview-col-xl mb15 mb-md30">
									<div class="design-gallery-grid level-listing">
										<img src="../../images/page-temp3.png" class="img-fluid d-block mx-auto" />
									</div>
									<p class="f-14 w400 align-self-center text-truncate mt10" title="Page Title">Page Title</p>
								</div>
								<div class="col-xs-12 col-md-4 col-lg-3 col-xl preview-col-xl mb15 mb-md30">
									<div class="design-gallery-grid level-listing">
										<img src="../../images/page-temp4.png" class="img-fluid d-block mx-auto" />
									</div>
									<p class="f-14 w400 align-self-center text-truncate mt10" title="Page Title">Page Title</p>
								</div>
								<div class="col-xs-12 col-md-4 col-lg-3 col-xl preview-col-xl mb15 mb-md30">
									<div class="design-gallery-grid level-listing">
										<img src="../../images/page-temp4.png" class="img-fluid d-block mx-auto" />
									</div>
									<p class="f-14 w400 align-self-center text-truncate mt10" title="Page Title">Page Title</p>
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
                    <div class="card-header collapsed" data-toggle="collapse" href="#FilesFolders">
                        <a class="card-title lato-font">&nbsp; Files & Folders</a>
                    </div>
                    <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Preview the level for Files & Folders." class="pull-right d-gblue-clr segment-info">
                        <i class="icon-information"></i>
                    </a>
                    <div id="FilesFolders" class="collapse">
                        <div class="card-body p15 pt-md30 px-md30">
                            <div class="row">
								<div class="col-xs-12 col-md-4 col-lg-3 col-xl preview-col-xl mb15 mb-md30">
									<div class="gradient-border1 relative mytooltip-hover">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<i class="icon-folder f-65 d-gblue-clr d-block mx-auto"></i>
										</div>
									</div>
									<div class="f-14 mt10">Folder Name | 20 MB</div>
								</div>
								<div class="col-xs-12 col-md-4 col-lg-3 col-xl preview-col-xl mb15 mb-md30">
									<div class="gradient-border1 relative mytooltip-hover">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<i class="icon-doc f-65 d-gblue-clr d-block mx-auto"></i>
										</div>
									</div>
									<div class="f-14 mt10">Doc Name.doc | 50 MB</div>
								</div>
								<div class="col-xs-12 col-md-4 col-lg-3 col-xl preview-col-xl mb15 mb-md30">
									<div class="gradient-border1 relative mytooltip-hover">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../images/video-image.png" class="d-block mx-auto img-fluid" />
											<!----- Video icon css--->
											<span class="lib-video-icon white-clr">
												<i class="icon-total-viewed-videos f-35"></i>
											</span>
										</div>
									</div>
									<div class="f-14 mt10">Video Name.avi | 50 MB</div>
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
                    <div class="card-header collapsed" data-toggle="collapse" href="#VideoPlaylists">
                        <a class="card-title lato-font">&nbsp; Video & Playlists</a>
                    </div>
                    <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Preview the level for Videos & Playlists." class="pull-right d-gblue-clr segment-info">
                        <i class="icon-information"></i>
                    </a>
                    <div id="VideoPlaylists" class="collapse">
                        <div class="card-body p15 pt-md30 px-md30">
                            <div class="row">
								<div class="col-xs-12 col-md-4 col-lg-3 col-xl preview-col-xl mb15 mb-md30">
									<div class="gradient-border1 relative mytooltip-hover">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../images/video-image1.png" class="d-block mx-auto img-fluid" />
											<!----- Video icon css--->
											<span class="lib-video-icon white-clr">
												<i class="icon-total-viewed-videos f-35"></i>
											</span>
										</div>
									</div>
									<div class="f-14 mt10">Video Name.avi | 50 MB</div>
								</div>
								<div class="col-xs-12 col-md-4 col-lg-3 col-xl preview-col-xl mb15 mb-md30">
									<div class="gradient-border1 relative mytooltip-hover">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../images/video-image2.png" class="d-block mx-auto img-fluid" />
											<!----- Video icon css--->
											<span class="lib-video-icon white-clr">
												<i class="icon-total-viewed-videos f-35"></i>
											</span>
										</div>
									</div>
									<div class="f-14 mt10">Video Name.avi | 50 MB</div>
								</div>
								<div class="col-xs-12 col-md-4 col-lg-3 col-xl preview-col-xl mb15 mb-md30">
									<div class="gradient-border1 relative mytooltip-hover">
										<div class="library-block d-flex align-items-center vl-gblue-bg">
											<img src="../../images/video-image3.png" class="d-block mx-auto img-fluid" />
										</div>
									</div>
									<div class="f-14 mt10">Video Playlist Name | 10 Videos</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-md30 mt15">
        <div class="col-12 f-16 w400">Select where to deliver</div>
        <div class="col-12 segment-accordion mt-md20 mt15">
            <div id="accordion" class="accordion white-bg-accordion">
                <div class="card mb-0 f-16">
                    <div class="card-header card-header-icon-remove d-flex align-items-center flex-wrap px20 px-md30">
                        <div class="d-flex align-items-center flex-wrap cart-radio-btn">
                            <div class="smart-radio-btn radio-strong-blue mr25 publish-radio mt5">
                                <input name="deliver" id="IPN_Select" value="ipn-delivery" type="radio" checked />
                                <label for="IPN_Select" class="m0">
                                    <span class="d-flex align-items-center">
                                        <img src="../../images/ipn-delivery.png" class="img-fluid mx10" />
                                        <p class="f-md-16 w500">IPN Delivery</p>
                                    </span>
                                </label>
                            </div>
                            <div class="smart-radio-btn radio-strong-blue draft-radio mt5">
                                <input name="deliver" id="select_url" value="registration-url" type="radio" />
                                <label for="select_url" class="m0">
                                    <span class="d-flex align-items-center">
                                        <img src="../../images/registration-url.png" class="img-fluid mx10" />
                                        <p class="f-md-16 w500">Registration URL</p>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div id="current-plan-accordion" class="collapse show">
                        <div class="card-body p-md30 smart-form">
                            <div class="ipn-delivery">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-3 col-xl-2 f-14 f-md-16 pr5">
                                        Level Name
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit your level name before delivery." class="d-gblue-clr t-decoration-none ml5"><i class="icon-information f-14"></i></a>
                                    </div>
                                    <div class="col-10 col-md-6 col-xl-6 pl-md0 mt10 mt-md0">
                                        <input type="text" name="business-name" class="form-control" placeholder="Level Name" value="Demo Level Name" />
                                    </div>
                                    <div class="col-2 col-md-3 col-xl-4 pl-md0 mt10 mt-md0 pl0 pl-md15">
                                        <a href="javascript:void(0)" class="f-14 p-blue-clr">Edit</a>
                                    </div>
                                </div>
                                <div class="row align-items-center mt15 mt-md30">
                                    <div class="col-12 col-md-3 col-xl-2 f-14 f-md-16 pr5">
                                        IPN / URL
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Paste or enter the IPN / URL here." class="d-gblue-clr t-decoration-none ml5"><i class="icon-information f-14"></i></a>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6 pl-md0 mt10 mt-md0">
                                        <input type="text" name="business-name" class="form-control" placeholder="Paste here" />
                                    </div>
                                </div>
                            </div>
                            <div class="registration-url">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-3 col-xl-2 f-14 f-md-16 pr5">
                                        Level Name
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title=" Edit your level name before delivery." class="d-gblue-clr t-decoration-none ml5"><i class="icon-information f-14"></i></a>
                                    </div>
                                    <div class="col-10 col-md-6 col-xl-6 pl-md0 mt10 mt-md0">
                                        <input type="text" name="business-name" class="form-control" placeholder="Level Name" value="Demo Level Name" />
                                    </div>
                                    <div class="col-2 col-md-3 col-xl-4 pl-md0 mt10 mt-md0 pl0 pl-md15">
                                        <a href="javascript:void(0)" class="f-14 p-blue-clr">Edit</a>
                                    </div>
                                </div>
                                <div class="row align-items-center mt15 mt-md30">
                                    <div class="col-12 col-md-3 col-xl-2 f-14 f-md-16 pr5">
                                        Registration URL
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Paste or enter the registration URL here." class="d-gblue-clr t-decoration-none ml5"><i class="icon-information f-14"></i></a>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6 pl-md0 mt10 mt-md0">
                                        <input type="text" name="business-name" class="form-control" placeholder="Paste here" value="https://register.demobiz.co/" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt15 mt-md30 text-right">
                <a href="#" class="base-btn default-btn btn-xs-block mr5 mb15 mb-md0">Cancel</a>
                <a href="#" class="base-btn default-btn btn-xs-block mr5 mb15 mb-md0">Save As Draft</a>
                <button type="submit" class="base-btn blue-btn btn-xs-block">Publish</button>
            </div>
        </div>
    </div>
</div>
<!-- Footer Include File-->
<?php include '../../../smart/html/includes/dcp-footer.php'; ?>
<!-- Footer Include File end -->

<script>
    $(document).ready(function () {
        $(".registration-url").hide();
        $("input[name='deliver']").click(function () {
            var radioValue = $("input[name='deliver']:checked").val();
            $("." + radioValue).show().siblings().hide();
        });
    });
</script>