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
                        <a href="#" class="p-blue-clr"><span>New Level</span></a>
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
            <p class="f-14 mt5 gblue-clr">Give access to the content to customers at the level.</p>
        </div>
    </div>
    <!-- Header End -->
    <!-- Step Wizard Div Start -->
    <div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md25">
        <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
            <div class="circle-num"><span>1</span></div>
            <div class="title align-self-center">Give Access To Content</div>
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
                        <div class="d-flex align-items-center flex-wrap cart-radio-btn mt5">
							<span class="d-flex align-items-center">
								<img src="../../images/ipn-delivery.png" class="img-fluid mr15" />
								<p class="f-md-16 w500">IPN Delivery</p>
							</span>                                      
                        </div>
                    </div>

                    <div id="current-plan-accordion" class="collapse show">
						<div class="card-body p-md30 smart-form">
						   <div class="row align-items-center">
							  <div class="col-12">
								 <div class="d-flex align-items-center flex-wrap">
									<div class="mr15 mr-md35 mb10 w400 f-14 f-md-16">
									   Do you want to deliver this product's membership on your platform <a class="ml3 d-gblue-clr t-decoration-none" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Enter IPN value here or in business settings to give successfull access of the level"><i class="icon-information f-13"></i></a>
									</div>
									<div class="smart-radio-btn radio-strong-blue mr15 mr-md30">
									   <input name="ipn-delivery" id="p_yes" type="radio" value="ipn-delivery-yes" checked="">
									   <label for="p_yes" class="d-gblue-clr"> Yes </label>
									</div>
									<div class="smart-radio-btn radio-strong-blue">
									   <input name="ipn-delivery" id="p_no" value="ipn-delivery-no" type="radio">
									   <label for="p_no" class="d-gblue-clr"> No</label>
									</div>
								 </div>
							  </div>
						   </div>
						   <div class="row align-items-center mt15">
							  <div class="col-12 f-14 f-md-16 pr5 ipn-delivery-yes">
								 <div class="">
									Setup your IPN values in business settings
								 </div>
							  </div>
							  <div class="col-12 ipn-delivery-no">								
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
        $(".ipn-delivery-no").hide();
        $("input[name='ipn-delivery']").click(function () {
            var radioValue = $("input[name='ipn-delivery']:checked").val();
            $("." + radioValue).show().siblings().hide();
        });
    });
</script>