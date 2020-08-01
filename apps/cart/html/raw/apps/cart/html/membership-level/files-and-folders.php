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
            <div class="title align-self-center">Give Access To Content</div>
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
                <a class="nav-link" href="pages.php"><i class="icon-total-visited-pages"></i>Pages <span class="page-count-btn">5</span></a>
                <a class="nav-link active" href="files-and-folders.php"><i class="icon-folder"></i>Files & Folders</a>
                <a class="nav-link" href="videos-and-playlist.php"><i class="icon-total-viewed-videos"></i>Videos & Playlist</a>
            </div>
        </div>
        <div class="col-md-8 col-lg-9 col-xl-10 pl-md30">
            <!-- Filteration Div Start -->
            <div class="col-12 p0 sticky-design-selection mb15 mb-md30">
                <div class="row align-items-center bs-h40">
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 mt15 mt-md0">
                        <p class="f-16 f-md-18 w500 text-truncate">Files & Folders</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 offset-xl-3 mt15 mt-md0">
                        <select class="selectpicker f-14" title="All Files">
                            <option>All Files</option>
                            <option>Folders</option>
                            <option>Images</option>
                            <option>Documents</option>
                            <option>Videos</option>
                            <option>Audios</option>
                            <option>Others</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 col-xl-3 mt15 mt-lg0">
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
            <!-- Filteration Div End -->
            <!-- Page List section -->
            <div class="row break-word">
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb15 mb-md30">
                    <div class="gradient-border1 relative mytooltip-hover">
                        <a href="#" class="library-block d-flex align-items-center vl-gblue-bg">
                            <i class="icon-folder f-65 d-gblue-clr d-block mx-auto"></i>
                            <!---- Hover Checkbox Div ---->
                            <div class="smart-checkbox-btn checkbox-strong-blue">
                                <input id="tcheck2" type="checkbox" class="checkbox-active" />
                                <label for="tcheck2"></label>
                            </div>
                        </a>
                    </div>
                    <div class="f-14 mt10">Folder Name | 20 MB</div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb15 mb-md30">
                    <div class="gradient-border1 relative mytooltip-hover">
                        <a href="#" class="library-block d-flex align-items-center vl-gblue-bg">
                            <i class="icon-doc f-65 d-gblue-clr d-block mx-auto"></i>
                            <!---- Hover Checkbox Div ---->
                            <div class="smart-checkbox-btn checkbox-strong-blue">
                                <input id="tcheck3" type="checkbox" class="checkbox-active" />
                                <label for="tcheck3"></label>
                            </div>
                        </a>
                    </div>
                    <div class="f-14 mt10">Doc Name.doc | 50 MB</div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb15 mb-md30">
                    <div class="gradient-border1 relative mytooltip-hover">
                        <a data-toggle="modal" data-target="#videoModal" class="library-block d-flex align-items-center vl-gblue-bg">
                            <img src="../../images/video-image.png" class="d-block mx-auto img-fluid" />
                            <!----- Video icon css--->
                            <span class="lib-video-icon white-clr">
                                <i class="icon-total-viewed-videos f-35"></i>
                            </span>
                        </a>
                        <!---- Hover Checkbox Div ---->
                        <div class="smart-checkbox-btn checkbox-strong-blue">
                            <input id="tcheck4" type="checkbox" class="checkbox-active" />
                            <label for="tcheck4"></label>
                        </div>
                    </div>
                    <div class="f-14 mt10">Video Name.avi | 50 MB</div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb15 mb-md30">
                    <div class="gradient-border1 relative mytooltip-hover">
                        <a href="#" class="library-block d-flex align-items-center vl-gblue-bg">
                            <i class="icon-audios f-65 d-gblue-clr d-block mx-auto"></i>
                            <!---- Hover Checkbox Div ---->
                            <div class="smart-checkbox-btn checkbox-strong-blue">
                                <input id="tcheck5" type="checkbox" class="checkbox-active" />
                                <label for="tcheck5"></label>
                            </div>
                        </a>
                    </div>
                    <div class="f-14 mt10">Doc Name.doc | 50 MB</div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb15 mb-md30">
                    <div class="gradient-border1 relative mytooltip-hover">
                        <a data-toggle="modal" class="cursor" data-target="#librarymodalimage">
                            <div class="library-block d-flex align-items-center vl-gblue-bg">
                                <img src="../../images/image.png" class="d-block mx-auto img-fluid" />
                            </div>
                        </a>
						<!---- Hover Checkbox Div ---->
						<div class="smart-checkbox-btn checkbox-strong-blue">
							<input id="tcheck1" type="checkbox" class="checkbox-active" />
							<label for="tcheck1"></label>
						</div>
                    </div>
                    <div class="f-14 mt10">Image Name.jpeg | 20 MB</div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb15 mb-md30">
                    <div class="gradient-border1 relative mytooltip-hover">
                        <a href="#" class="library-block d-flex align-items-center vl-gblue-bg">
                            <i class="icon-folder f-65 d-gblue-clr d-block mx-auto"></i>
                            <!---- Hover Checkbox Div ---->
                            <div class="smart-checkbox-btn checkbox-strong-blue">
                                <input id="tcheck6" type="checkbox" class="checkbox-active" />
                                <label for="tcheck6"></label>
                            </div>
                        </a>
                    </div>
                    <div class="f-14 mt10">Folder Name | 20 MB</div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb15 mb-md30">
                    <div class="gradient-border1 relative mytooltip-hover">
                        <a href="#" class="library-block d-flex align-items-center vl-gblue-bg">
                            <i class="icon-doc f-65 d-gblue-clr d-block mx-auto"></i>
                            <!---- Hover Checkbox Div ---->
                            <div class="smart-checkbox-btn checkbox-strong-blue">
                                <input id="tcheck7" type="checkbox" class="checkbox-active" />
                                <label for="tcheck7"></label>
                            </div>
                        </a>
                    </div>
                    <div class="f-14 mt10">Doc Name.doc | 50 MB</div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb15 mb-md30">
                    <div class="gradient-border1 relative mytooltip-hover">
                        <a href="#" class="library-block d-flex align-items-center vl-gblue-bg">
                            <i class="icon-audios f-65 d-gblue-clr d-block mx-auto"></i>
                            <!---- Hover Checkbox Div ---->
                            <div class="smart-checkbox-btn checkbox-strong-blue">
                                <input id="tcheck8" type="checkbox" class="checkbox-active" />
                                <label for="tcheck8"></label>
                            </div>
                        </a>
                    </div>
                    <div class="f-14 mt10">Doc Name.doc | 50 MB</div>
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