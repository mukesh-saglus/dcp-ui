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
        <div class="d-flex justify-content-start flex-wrap mr15 mb5">
            <div class="circle-num"><span> 2</span></div>
            <div class="title align-self-center">Preview & Publish</div>
            <div class="sep-line align-self-center d-none d-lg-block"></div>
        </div>
    </div>
    <!-- Step Wizard Div End -->
    <!-- Page Listing Section Start -->
    <div class="row">
        <div class="col-md-4 col-lg-3 col-xl-2 pr-md0">
            <div class="nav flex-column nav-pills ui-vertical-tab f-16 w400 side-tab-fixed left-tab-fixed">
                <a class="nav-link active" href="pages.php"><i class="icon-total-visited-pages"></i>Pages</a>
                <a class="nav-link" href="files-and-folders.php"><i class="icon-folder"></i>Files & Folders</a>
                <a class="nav-link" href="videos-and-playlist.php"><i class="icon-total-viewed-videos"></i>Videos & Playlist</a>
            </div>
        </div>
        <div class="col-md-8 col-lg-9 col-xl-10 pl-md30">
            <!-- Filteration Div Start -->
            <div class="col-12 p0 sticky-design-selection mb15 mb-md30">
                <div class="row align-items-center bs-h40">
                    <div class="col-12 col-md-4 col-lg-3 mt15 mt-md0">
                        <p class="f-16 f-md-18 w500 text-truncate">Pages</p>
                    </div>
                    <div class="col-12 col-md-8 col-lg-9">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-7">
                                <div class="row align-items-center">
                                    <div class="col-5 col-md-4 col-lg-4 col-xl-3 mt15 mt-md0 pr-md0 f-14">
                                        Choose Pages
                                    </div>
                                    <div class="col-7 col-md-8 col-lg-8 col-xl-9 mt15 mt-md0">
                                        <div class="dropdown simple-dropdown">
                                            <button class="btn base-btn default-btn dropdown-toggle btn-block text-left" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="caret-right pull-left text-truncate pr15">Web Pages</span>
                                            </button>
                                            <div class="dropdown-menu w-100 stoppropagation h-auto f-14" aria-labelledby="dropdownMenu1">
                                                <!--- Scrollbar Div start ------->
                                                <div class="mCustomScrollbar f-14 mh-180" data-mcs-theme="inset-3">
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item">
                                                            <div class="smart-checkbox-btn checkbox-strong-blue">
                                                                <input id="WebPages" type="checkbox" />
                                                                <label for="WebPages">Web Pages</label>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item">
                                                            <div class="smart-checkbox-btn checkbox-strong-blue">
                                                                <input id="LandingPages" type="checkbox" />
                                                                <label for="LandingPages">Landing Pages</label>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-5 mt15 mt-lg0">
                                <div class="smart-search-field">
                                    <div class="input-group">
                                        <input class="form-control" placeholder="Search" type="text" />
                                        <div class="input-group-append">
                                            <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Filteration Div End -->
            <!-- Page List section -->
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb15 mb-md30">
                    <a href="javascript:void(0);" class="design-gallery-grid level-listing">
                        <img src="../../images/page-temp1.png" class="img-fluid d-block mx-auto" />
                        <!-- Checked icon Div -->
                        <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
                            <i class="icon-tick white-clr f-11"></i>
                        </div>
                    </a>
                    <div class="d-flex justify-content-between mt10">
                        <p class="f-14 w400 align-self-center text-truncate" title="Page Title">Page Title</p>
                        <div class="ml15">
                            <a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb15 mb-md30">
                    <a href="javascript:void(0);" class="design-gallery-grid level-listing recent-active-template">
                        <img src="../../images/page-temp2.png" class="img-fluid d-block mx-auto" />
                        <!-- Checked icon Div -->
                        <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
                            <i class="icon-tick white-clr f-11"></i>
                        </div>
                    </a>
                    <div class="d-flex justify-content-between mt10">
                        <p class="f-14 w400 align-self-center text-truncate" title="Page Title">Page Title</p>
                        <div class="ml15">
                            <a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb15 mb-md30">
                    <a href="javascript:void(0);" class="design-gallery-grid level-listing">
                        <img src="../../images/page-temp3.png" class="img-fluid d-block mx-auto" />
                        <!-- Checked icon Div -->
                        <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
                            <i class="icon-tick white-clr f-11"></i>
                        </div>
                    </a>
                    <div class="d-flex justify-content-between mt10">
                        <p class="f-14 w400 align-self-center text-truncate" title="Page Title">Page Title</p>
                        <div class="ml15">
                            <a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb15 mb-md30">
                    <a href="javascript:void(0);" class="design-gallery-grid level-listing">
                        <img src="../../images/page-temp4.png" class="img-fluid d-block mx-auto" />
                        <!-- Checked icon Div -->
                        <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
                            <i class="icon-tick white-clr f-11"></i>
                        </div>
                    </a>
                    <div class="d-flex justify-content-between mt10">
                        <p class="f-14 w400 align-self-center text-truncate" title="Page Title">Page Title</p>
                        <div class="ml15">
                            <a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb15 mb-md30">
                    <a href="javascript:void(0);" class="design-gallery-grid level-listing">
                        <img src="../../images/page-temp1.png" class="img-fluid d-block mx-auto" />
                        <!-- Checked icon Div -->
                        <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
                            <i class="icon-tick white-clr f-11"></i>
                        </div>
                    </a>
                    <div class="d-flex justify-content-between mt10">
                        <p class="f-14 w400 align-self-center text-truncate" title="Page Title">Page Title</p>
                        <div class="ml15">
                            <a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb15 mb-md30">
                    <a href="javascript:void(0);" class="design-gallery-grid level-listing">
                        <img src="../../images/page-temp2.png" class="img-fluid d-block mx-auto" />
                        <!-- Checked icon Div -->
                        <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
                            <i class="icon-tick white-clr f-11"></i>
                        </div>
                    </a>
                    <div class="d-flex justify-content-between mt10">
                        <p class="f-14 w400 align-self-center text-truncate" title="Page Title">Page Title</p>
                        <div class="ml15">
                            <a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb15 mb-md30">
                    <a href="javascript:void(0);" class="design-gallery-grid level-listing">
                        <img src="../../images/page-temp3.png" class="img-fluid d-block mx-auto" />
                        <!-- Checked icon Div -->
                        <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
                            <i class="icon-tick white-clr f-11"></i>
                        </div>
                    </a>
                    <div class="d-flex justify-content-between mt10">
                        <p class="f-14 w400 align-self-center text-truncate" title="Page Title">Page Title</p>
                        <div class="ml15">
                            <a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb15 mb-md30">
                    <a href="javascript:void(0);" class="design-gallery-grid level-listing">
                        <img src="../../images/page-temp4.png" class="img-fluid d-block mx-auto" />
                        <!-- Checked icon Div -->
                        <div class="absolute lib-popup-icon s-green-bg rounded-circle align-self-center d-none">
                            <i class="icon-tick white-clr f-11"></i>
                        </div>
                    </a>
                    <div class="d-flex justify-content-between mt10">
                        <p class="f-14 w400 align-self-center text-truncate" title="Page Title">Page Title</p>
                        <div class="ml15">
                            <a href="#" class="tem-preview-btn t-decoration-none" data-toggle="modal" data-target="#lightboxTempModal" data-backdrop="static" data-keyboard="false"><i class="icon-show"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Pagination Div Start-->
                <div class="col-12 d-flex justify-content-between flex-wrap f-14">
                    <div class="d-flex justify-content-start align-items-center mb5">
                        Show
                        <span class="bs-h40 entries-width px15">
                            <select class="selectpicker">
                                <option>10</option>
                                <option>20</option>
                                <option>30</option>
                            </select>
                        </span>
                        <span class="d-none d-xl-block">Showing 1 to 4 of 400 entries</span>
                    </div>
                    <div class="mb5">
                        <ul class="rounded-pagination f-14">
                            <li>
                                <a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li>
                                <a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#" class="active">6</a></li>
                            <li>
                                <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Pagination Div End-->
                <div class="col-12 text-center text-md-right mt-md20">
                    <a href="javascript:void(0)" class="base-btn default-btn mr5 mt15 mt-md0">Cancel</a>
                    <a href="javascript:void(0)" class="base-btn default-btn mr5 mt15 mt-md0">Save As Draft</a>
                    <a href="#" class="base-btn blue-btn mt15 mt-md0">Save & Next</a>
                </div>
            </div>
            <!-- Page List section end-->
        </div>
    </div>
    <!--Page Listing Section End-->
</div>
<!-- Footer Include File-->
<?php include '../../../smart/html/includes/dcp-footer.php'; ?>
<!-- Footer Include File end -->