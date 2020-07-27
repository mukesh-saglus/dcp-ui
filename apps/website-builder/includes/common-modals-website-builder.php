<!-- Theme Details Modal PopUp -->
<div class="modal" id="ThemeDetailsModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-copy-size" role="document">
        <div class="modal-content radius5 border-0">
            <div class="modal-header library-modal-header p15 py-md20 px-md30 justify-content-between">
                <div class="f-16 f-md-18 w500">Theme Details</div>
                <a href="javascript:void(0);" data-dismiss="modal" class="d-gblue-clr t-decoration-none f-12 align-self-center"><i class="icon-cross"></i></a>
            </div>
            <div class="modal-body px0 py15 pt-md20 pb-md30">
                <div class="mCustomScrollbar theme-detail-scrollbar" data-mcs-theme="inset-3">
                    <div class="px15 px-md30 f-14 vd-gblue-clr">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-gblue-clr">Industry:</div>
                                <div class="w500 mt4 lh160 text-capitalize">SaaS</div>
                            </div>
                            <div class="col-12 mt15 mt-md20">
                                <div class="d-gblue-clr">Use Case:</div>
                                <div class="w500 mt4 lh160 text-capitalize">Events, Affiliate Marketing</div>
                            </div>
                            <div class="col-12 mt15 mt-md20">
                                <div class="d-gblue-clr">Description:</div>
                                <div class="w500 mt4 lh160">
                                    I'm a paragraph. Click here to add your own text and edit me. It's easy. Just click "Edit Text" or double click me to add your own content and make changes to the font. Feel free to drag and drop me
                                    anywhere you like on your page. I'm a great place for you to tell a story and let your users know a little more about you.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Warning Modal Popup -->
<div class="modal" id="WarningModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-delete-size" role="document">
        <div class="modal-content radius5 border-0">
            <div class="modal-body p15 p-md30 smart-form">
                <img class="img-fluid d-block mx-auto mb15 mb-md20" src="<?php echo $basedir; ?>images/cancel-icon.png" />
                <div class="w500 vd-gblue-clr f-16 f-md-18 mb5 text-center">Warning!</div>
                <p class="f-14 d-gblue-clr text-center lh140">
                    Previous data will be lost.<br />
                    Are you sure you want to continue?
                </p>
            </div>
            <div class="p15 p-md30 custom-modal-foooter text-center">
                <a href="javascript:void(0)" class="base-btn default-btn mr5" data-dismiss="modal">No</a>
                <a href="#" class="base-btn blue-btn">Yes</a>
            </div>
        </div>
    </div>
</div>

<!-- Add New Menu Modal Popup -->
<div class="modal" id="addnewmenuModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-copy-size" role="document">
        <div class="modal-content radius5 border-0">
            <div class="modal-body p15 p-md30 smart-form">
                <img class="img-fluid d-block mx-auto mb15 mb-md20" src="<?php echo $basedir; ?>apps/website-builder/images/icons/add-new-menu.png" />
                <div class="w400 vd-gblue-clr f-16 f-md-18 mb5 text-center">Add New Menu</div>
                <p class="f-14 d-gblue-clr text-center">Give a name to your menu</p>

                <div class="form-group d-gblue-clr f-14 mb0 mt15 mt-md35">
                    <label for="exampleSelect1">Menu Name</label>
                    <input type="text" class="form-control field-h40 f-14" placeholder="Enter your menu name" value="Demo Name" />
                </div>
            </div>
            <div class="p15 p-md30 custom-modal-foooter text-center">
                <a href="javascript:void(0)" class="base-btn default-btn f-14 mr5" data-dismiss="modal">Cancel</a>
                <a href="#" class="base-btn blue-btn f-14">Create</a>
            </div>
        </div>
    </div>
</div>

<!-- Header Modal Popup -->
<!-- Add New Header Modal Popup -->
<div class="modal" id="addnewHeaderModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-copy-size" role="document">
        <div class="modal-content radius5 border-0">
            <div class="modal-body p15 p-md30 smart-form">
                <img class="img-fluid d-block mx-auto mb15 mb-md20" src="<?php echo $basedir; ?>apps/website-builder/images/icons/add-new-header.png" />
                <div class="w400 vd-gblue-clr f-16 f-md-18 mb5 text-center">Add New Header</div>
                <p class="f-14 d-gblue-clr text-center">Enter the time when you want to schedule the e-mail</p>

                <div class="form-group d-gblue-clr f-14 mb0 mt15 mt-md35">
                    <label for="exampleSelect1">Header Name</label>
                    <input type="text" class="form-control field-h40 f-14" placeholder="Type your header name" />
                </div>
            </div>
            <div class="p15 p-md30 custom-modal-foooter text-center">
                <a href="javascript:void(0)" class="base-btn default-btn f-14 mr5" data-dismiss="modal">Cancel</a>
                <a href="#" class="base-btn blue-btn f-14" data-dismiss="modal" data-toggle="modal" data-target="#ChooseHeaderModal">Next</a>
            </div>
        </div>
    </div>
</div>

<!--- Choose Your Header ---->
<div class="modal" id="ChooseHeaderModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered choose-header-size">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header library-modal-header p15 py-md20 px-md30 justify-content-between">
                <div class="f-16 f-md-18 w500">Choose Your Header</div>
                <a href="javascript:void(0);" data-dismiss="modal" class="d-gblue-clr t-decoration-none f-12 align-self-center"><i class="icon-cross"></i></a>
            </div>
            <!-- end model header -->
            <!-- Modal body -->
            <div class="modal-body p15 p-md30 pb0 pb-md0">
                <div class="row">
                    <div class="col-md-4 col-lg-3 col-xl-2 pl-lg10">
                        <div class="nav flex-column nav-pills ui-vertical-tab f-14 w400 design-side-tab">
                            <a class="nav-link active show" href="#FromGallery" role="tab" data-toggle="tab" aria-selected="true"><i class="icon-gallery"></i>From gallery</a>
                            <a class="nav-link" href="#YourCreation" role="tab" data-toggle="tab" aria-selected="false"><i class="icon-your-creation"></i>Your creation</a>
                            <a class="nav-link" href="#CreateYourOwn" role="tab" data-toggle="tab" aria-selected="false"><i class="icon-create-your-own"></i>Create your own</a>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-9 col-xl-10 tab-content">
                        <div class="tab-pane fade active show" role="tabpanel" id="FromGallery">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 bs-h40 mb10 mb-md0">
                                    <select class="selectpicker f-14" title="All">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 offset-lg-4 col-md-6 col-12">
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
                            <div class="row mt15 mt-md30">
                                <div class="col-12 px0">
                                    <div class="mCustomScrollbar header-theme-scrollbar" data-mcs-theme="inset-3">
                                        <div class="w100 px15">
                                            <div class="row">
                                                <div class="col-12 col-md-6 mb15 mb-md30">
                                                    <div class="header-footer-grid popup-theme-grid">
                                                        <div class="header-footer-block">
                                                            <img src="../../images/theme/header-thumbnail1.png" class="img-fluid d-block mx-auto" />
                                                            <!-- Hover Button -->
                                                            <div class="template-header-overlay">
                                                                <div class="author-hover-icons">
                                                                    <a href="JavaScript:Void(0);" class="theme-hover-btn" title="View"><i class="icon-show"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Selected theme Icon Div -->
                                                        <div class="selected-theme-btn">
                                                            <i class="icon-tick"></i>
                                                        </div>
                                                    </div>
                                                    <div class="mt8">
                                                        <p class="f-14 text-truncate" title="Header Name">Header Name</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 mb15 mb-md30">
                                                    <div class="header-footer-grid popup-theme-grid">
                                                        <div class="header-footer-block">
                                                            <img src="../../images/theme/header-thumbnail2.png" class="img-fluid d-block mx-auto" />
                                                            <!-- Hover Button -->
                                                            <div class="template-header-overlay">
                                                                <div class="author-hover-icons">
                                                                    <a href="JavaScript:Void(0);" class="theme-hover-btn" title="View"><i class="icon-show"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Selected theme Icon Div -->
                                                        <div class="selected-theme-btn d-none">
                                                            <i class="icon-tick"></i>
                                                        </div>
                                                    </div>
                                                    <div class="mt8">
                                                        <p class="f-14 text-truncate" title="Header Name">Header Name</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 mb15 mb-md30">
                                                    <div class="header-footer-grid popup-theme-grid">
                                                        <div class="header-footer-block">
                                                            <img src="../../images/theme/header-thumbnail3.png" class="img-fluid d-block mx-auto" />
                                                            <!-- Hover Button -->
                                                            <div class="template-header-overlay">
                                                                <div class="author-hover-icons">
                                                                    <a href="JavaScript:Void(0);" class="theme-hover-btn" title="View"><i class="icon-show"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Selected theme Icon Div -->
                                                        <div class="selected-theme-btn d-none">
                                                            <i class="icon-tick"></i>
                                                        </div>
                                                    </div>
                                                    <div class="mt8">
                                                        <p class="f-14 text-truncate" title="Header Name">Header Name</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 mb15 mb-md30">
                                                    <div class="header-footer-grid popup-theme-grid">
                                                        <div class="header-footer-block">
                                                            <img src="../../images/theme/header-thumbnail4.png" class="img-fluid d-block mx-auto" />
                                                            <!-- Hover Button -->
                                                            <div class="template-header-overlay">
                                                                <div class="author-hover-icons">
                                                                    <a href="JavaScript:Void(0);" class="theme-hover-btn" title="View"><i class="icon-show"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Selected theme Icon Div -->
                                                        <div class="selected-theme-btn d-none">
                                                            <i class="icon-tick"></i>
                                                        </div>
                                                    </div>
                                                    <div class="mt8">
                                                        <p class="f-14 text-truncate" title="Header Name">Header Name</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="YourCreation">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 bs-h40 mb10 mb-md0">
                                    <select class="selectpicker f-14" title="All">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 offset-lg-4 col-md-6 col-12">
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
                            <div class="row mt15 mt-md30">
                                <div class="col-12 p0">
                                    <div class="mCustomScrollbar header-theme-scrollbar" data-mcs-theme="inset-3">
                                        <div class="w100 px15">
                                            <div class="row">
                                                <div class="col-12 col-md-6 mb15">
                                                    <div class="header-footer-grid popup-theme-grid">
                                                        <div class="header-footer-block">
                                                            <img src="../../images/theme/header-thumbnail1.png" class="img-fluid d-block mx-auto" />
                                                            <!-- Hover Button -->
                                                            <div class="template-header-overlay">
                                                                <div class="author-hover-icons">
                                                                    <a href="JavaScript:Void(0);" class="theme-hover-btn" title="View"><i class="icon-show"></i></a>
                                                                    <a href="JavaScript:Void(0);" class="theme-hover-btn" title="Delete"><i class="icon-delete"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Selected theme Icon Div -->
                                                        <div class="selected-theme-btn">
                                                            <i class="icon-tick"></i>
                                                        </div>
                                                    </div>
                                                    <div class="mt8">
                                                        <p class="f-14 text-truncate" title="Header Name">Header Name</p>
                                                        <p class="f-10 d-gblue-clr mt2">Created on 17 Feb 2019 at 4:08 PM</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 mb15">
                                                    <div class="header-footer-grid popup-theme-grid">
                                                        <div class="header-footer-block">
                                                            <img src="../../images/theme/header-thumbnail2.png" class="img-fluid d-block mx-auto" />
                                                            <!-- Hover Button -->
                                                            <div class="template-header-overlay">
                                                                <div class="author-hover-icons">
                                                                    <a href="JavaScript:Void(0);" class="theme-hover-btn" title="View"><i class="icon-show"></i></a>
                                                                    <a href="JavaScript:Void(0);" class="theme-hover-btn" title="Delete"><i class="icon-delete"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Selected theme Icon Div -->
                                                        <div class="selected-theme-btn d-none">
                                                            <i class="icon-tick"></i>
                                                        </div>
                                                    </div>
                                                    <div class="mt8">
                                                        <p class="f-14 text-truncate" title="Header Name">Header Name</p>
                                                        <p class="f-10 d-gblue-clr mt2">Created on 17 Feb 2019 at 4:08 PM</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 mb15">
                                                    <div class="header-footer-grid popup-theme-grid">
                                                        <div class="header-footer-block">
                                                            <img src="../../images/theme/header-thumbnail3.png" class="img-fluid d-block mx-auto" />
                                                            <!-- Hover Button -->
                                                            <div class="template-header-overlay">
                                                                <div class="author-hover-icons">
                                                                    <a href="JavaScript:Void(0);" class="theme-hover-btn" title="View"><i class="icon-show"></i></a>
                                                                    <a href="JavaScript:Void(0);" class="theme-hover-btn" title="Delete"><i class="icon-delete"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Selected theme Icon Div -->
                                                        <div class="selected-theme-btn d-none">
                                                            <i class="icon-tick"></i>
                                                        </div>
                                                    </div>
                                                    <div class="mt8">
                                                        <p class="f-14 text-truncate" title="Header Name">Header Name</p>
                                                        <p class="f-10 d-gblue-clr mt2">Created on 17 Feb 2019 at 4:08 PM</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 mb15">
                                                    <div class="header-footer-grid popup-theme-grid">
                                                        <div class="header-footer-block">
                                                            <img src="../../images/theme/header-thumbnail4.png" class="img-fluid d-block mx-auto" />
                                                            <!-- Hover Button -->
                                                            <div class="template-header-overlay">
                                                                <div class="author-hover-icons">
                                                                    <a href="JavaScript:Void(0);" class="theme-hover-btn" title="View"><i class="icon-show"></i></a>
                                                                    <a href="JavaScript:Void(0);" class="theme-hover-btn" title="Delete"><i class="icon-delete"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Selected theme Icon Div -->
                                                        <div class="selected-theme-btn d-none">
                                                            <i class="icon-tick"></i>
                                                        </div>
                                                    </div>
                                                    <div class="mt8">
                                                        <p class="f-14 text-truncate" title="Header Name">Header Name</p>
                                                        <p class="f-10 d-gblue-clr mt2">Created on 17 Feb 2019 at 4:08 PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="CreateYourOwn">
                            <div class="row">
                                <div class="col-12 mb15 mb-md30 mt15 mt-md0">
                                    <div class="create-your-own-back">
                                        <img class="img-fluid d-block mx-auto header-image-height" src="<?php echo $basedir; ?>apps/website-builder/images/theme/create-your-own-image.png" />

                                        <div class="text-center mt15 mt-md50">
                                            <a href="#" class="base-btn blue-btn f-16">Start From Scratch</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end model body -->
            </div>
        </div>
    </div>
</div>

<!-- Footer Modal Popup -->
<!-- Add New Header Modal Popup -->
<div class="modal" id="addnewfooterModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-copy-size" role="document">
        <div class="modal-content radius5 border-0">
            <div class="modal-body p15 p-md30 smart-form">
                <img class="img-fluid d-block mx-auto mb15 mb-md20" src="<?php echo $basedir; ?>apps/website-builder/images/icons/add-new-footer.png" />
                <div class="w400 vd-gblue-clr f-16 f-md-18 mb5 text-center">Add New Footer</div>
                <p class="f-14 d-gblue-clr text-center">Enter the time when you want to schedule the e-mail</p>

                <div class="form-group d-gblue-clr f-14 mb0 mt15 mt-md35">
                    <label for="exampleSelect1">Footer Name</label>
                    <input type="text" class="form-control field-h40 f-14" placeholder="Type your footer name" />
                </div>
            </div>
            <div class="p15 p-md30 custom-modal-foooter text-center">
                <a href="javascript:void(0)" class="base-btn default-btn f-14 mr5" data-dismiss="modal">Cancel</a>
                <a href="#" class="base-btn blue-btn f-14" data-dismiss="modal" data-toggle="modal" data-target="#ChooseFooterModal">Next</a>
            </div>
        </div>
    </div>
</div>

<!--- Choose Your Footer ---->
<div class="modal" id="ChooseFooterModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered choose-header-size">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header library-modal-header p15 py-md20 px-md30 justify-content-between">
                <div class="f-16 f-md-18 w500">Choose Your Footer</div>
                <a href="javascript:void(0);" data-dismiss="modal" class="d-gblue-clr t-decoration-none f-12 align-self-center"><i class="icon-cross"></i></a>
            </div>
            <!-- end model header -->
            <!-- Modal body -->
            <div class="modal-body p15 p-md30 pb0 pb-md0">
                <div class="row">
                    <div class="col-md-4 col-lg-3 col-xl-2 pl-lg10">
                        <div class="nav flex-column nav-pills ui-vertical-tab f-14 w400 design-side-tab">
                            <a class="nav-link active show" href="#FromGallery1" role="tab" data-toggle="tab" aria-selected="true"><i class="icon-gallery"></i>From gallery</a>
                            <a class="nav-link" href="#YourCreation1" role="tab" data-toggle="tab" aria-selected="false"><i class="icon-your-creation"></i>Your creation</a>
                            <a class="nav-link" href="#CreateYourOwn1" role="tab" data-toggle="tab" aria-selected="false"><i class="icon-create-your-own"></i>Create your own</a>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-9 col-xl-10 tab-content">
                        <div class="tab-pane fade active show" role="tabpanel" id="FromGallery1">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 bs-h40 mb10 mb-md0">
                                    <select class="selectpicker f-14" title="All">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 offset-lg-4 col-md-6 col-12">
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
                            <div class="row mt15 mt-md30">
                                <div class="col-12 px0">
                                    <div class="mCustomScrollbar header-theme-scrollbar" data-mcs-theme="inset-3">
                                        <div class="w100 px15">
                                            <div class="row">
                                                <div class="col-12 col-md-6 mb15 mb-md30">
                                                    <div class="header-footer-grid popup-theme-grid">
                                                        <div class="header-footer-block">
                                                            <img src="../../images/theme/footer-thumbnail1.png" class="img-fluid d-block mx-auto" />
                                                            <!-- Hover Button -->
                                                            <div class="template-header-overlay">
                                                                <div class="author-hover-icons">
                                                                    <a href="JavaScript:Void(0);" class="theme-hover-btn" title="View"><i class="icon-show"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Selected theme Icon Div -->
                                                        <div class="selected-theme-btn">
                                                            <i class="icon-tick"></i>
                                                        </div>
                                                    </div>
                                                    <div class="mt8">
                                                        <p class="f-14 text-truncate" title="Footer Name">Footer Name</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 mb15 mb-md30">
                                                    <div class="header-footer-grid popup-theme-grid">
                                                        <div class="header-footer-block">
                                                            <img src="../../images/theme/footer-thumbnail2.png" class="img-fluid d-block mx-auto" />
                                                            <!-- Hover Button -->
                                                            <div class="template-header-overlay">
                                                                <div class="author-hover-icons">
                                                                    <a href="JavaScript:Void(0);" class="theme-hover-btn" title="View"><i class="icon-show"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Selected theme Icon Div -->
                                                        <div class="selected-theme-btn d-none">
                                                            <i class="icon-tick"></i>
                                                        </div>
                                                    </div>
                                                    <div class="mt8">
                                                        <p class="f-14 text-truncate" title="Footer Name">Footer Name</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 mb15 mb-md30">
                                                    <div class="header-footer-grid popup-theme-grid">
                                                        <div class="header-footer-block">
                                                            <img src="../../images/theme/footer-thumbnail3.png" class="img-fluid d-block mx-auto" />
                                                            <!-- Hover Button -->
                                                            <div class="template-header-overlay">
                                                                <div class="author-hover-icons">
                                                                    <a href="JavaScript:Void(0);" class="theme-hover-btn" title="View"><i class="icon-show"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Selected theme Icon Div -->
                                                        <div class="selected-theme-btn d-none">
                                                            <i class="icon-tick"></i>
                                                        </div>
                                                    </div>
                                                    <div class="mt8">
                                                        <p class="f-14 text-truncate" title="Footer Name">Footer Name</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 mb15 mb-md30">
                                                    <div class="header-footer-grid popup-theme-grid">
                                                        <div class="header-footer-block">
                                                            <img src="../../images/theme/footer-thumbnail5.png" class="img-fluid d-block mx-auto" />
                                                            <!-- Hover Button -->
                                                            <div class="template-header-overlay">
                                                                <div class="author-hover-icons">
                                                                    <a href="JavaScript:Void(0);" class="theme-hover-btn" title="View"><i class="icon-show"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Selected theme Icon Div -->
                                                        <div class="selected-theme-btn d-none">
                                                            <i class="icon-tick"></i>
                                                        </div>
                                                    </div>
                                                    <div class="mt8">
                                                        <p class="f-14 text-truncate" title="Footer Name">Footer Name</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="YourCreation1">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 bs-h40 mb10 mb-md0">
                                    <select class="selectpicker f-14" title="All">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 offset-lg-4 col-md-6 col-12">
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
                            <div class="row mt15 mt-md30">
                                <div class="col-12 p0">
                                    <div class="mCustomScrollbar header-theme-scrollbar" data-mcs-theme="inset-3">
                                        <div class="w100 px15">
                                            <div class="row">
                                                <div class="col-12 col-md-6 mb15">
                                                    <div class="header-footer-grid popup-theme-grid">
                                                        <div class="header-footer-block">
                                                            <img src="../../images/theme/footer-thumbnail1.png" class="img-fluid d-block mx-auto" />
                                                            <!-- Hover Button -->
                                                            <div class="template-header-overlay">
                                                                <div class="author-hover-icons">
                                                                    <a href="JavaScript:Void(0);" class="theme-hover-btn" title="View"><i class="icon-show"></i></a>
                                                                    <a href="JavaScript:Void(0);" class="theme-hover-btn" title="Delete"><i class="icon-delete"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Selected theme Icon Div -->
                                                        <div class="selected-theme-btn">
                                                            <i class="icon-tick"></i>
                                                        </div>
                                                    </div>
                                                    <div class="mt8">
                                                        <p class="f-14 text-truncate" title="Footer Name">Footer Name</p>
                                                        <p class="f-10 d-gblue-clr mt2">Created on 17 Feb 2019 at 4:08 PM</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 mb15">
                                                    <div class="header-footer-grid popup-theme-grid">
                                                        <div class="header-footer-block">
                                                            <img src="../../images/theme/footer-thumbnail2.png" class="img-fluid d-block mx-auto" />
                                                            <!-- Hover Button -->
                                                            <div class="template-header-overlay">
                                                                <div class="author-hover-icons">
                                                                    <a href="JavaScript:Void(0);" class="theme-hover-btn" title="View"><i class="icon-show"></i></a>
                                                                    <a href="JavaScript:Void(0);" class="theme-hover-btn" title="Delete"><i class="icon-delete"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Selected theme Icon Div -->
                                                        <div class="selected-theme-btn d-none">
                                                            <i class="icon-tick"></i>
                                                        </div>
                                                    </div>
                                                    <div class="mt8">
                                                        <p class="f-14 text-truncate" title="Footer Name">Footer Name</p>
                                                        <p class="f-10 d-gblue-clr mt2">Created on 17 Feb 2019 at 4:08 PM</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 mb15">
                                                    <div class="header-footer-grid popup-theme-grid">
                                                        <div class="header-footer-block">
                                                            <img src="../../images/theme/footer-thumbnail3.png" class="img-fluid d-block mx-auto" />
                                                            <!-- Hover Button -->
                                                            <div class="template-header-overlay">
                                                                <div class="author-hover-icons">
                                                                    <a href="JavaScript:Void(0);" class="theme-hover-btn" title="View"><i class="icon-show"></i></a>
                                                                    <a href="JavaScript:Void(0);" class="theme-hover-btn" title="Delete"><i class="icon-delete"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Selected theme Icon Div -->
                                                        <div class="selected-theme-btn d-none">
                                                            <i class="icon-tick"></i>
                                                        </div>
                                                    </div>
                                                    <div class="mt8">
                                                        <p class="f-14 text-truncate" title="Footer Name">Footer Name</p>
                                                        <p class="f-10 d-gblue-clr mt2">Created on 17 Feb 2019 at 4:08 PM</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 mb15">
                                                    <div class="header-footer-grid popup-theme-grid">
                                                        <div class="header-footer-block">
                                                            <img src="../../images/theme/footer-thumbnail5.png" class="img-fluid d-block mx-auto" />
                                                            <!-- Hover Button -->
                                                            <div class="template-header-overlay">
                                                                <div class="author-hover-icons">
                                                                    <a href="JavaScript:Void(0);" class="theme-hover-btn" title="View"><i class="icon-show"></i></a>
                                                                    <a href="JavaScript:Void(0);" class="theme-hover-btn" title="Delete"><i class="icon-delete"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Selected theme Icon Div -->
                                                        <div class="selected-theme-btn d-none">
                                                            <i class="icon-tick"></i>
                                                        </div>
                                                    </div>
                                                    <div class="mt8">
                                                        <p class="f-14 text-truncate" title="Header Name">Header Name</p>
                                                        <p class="f-10 d-gblue-clr mt2">Created on 17 Feb 2019 at 4:08 PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="CreateYourOwn1">
                            <div class="row">
                                <div class="col-12 mb15 mb-md30 mt15 mt-md0">
                                    <div class="create-your-own-back1">
                                        <img class="img-fluid d-block mx-auto footer-image-height" src="<?php echo $basedir; ?>apps/website-builder/images/theme/create-your-own-image1.png" />
                                        <div class="text-center mt15 mb20 mt-md40 mb-md65">
                                            <a href="#" class="base-btn blue-btn f-16">Start From Scratch</a>
                                        </div>
                                        <img class="img-fluid d-block mx-auto footer-image-height" src="<?php echo $basedir; ?>apps/website-builder/images/theme/create-your-own-image2.png" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end model body -->
            </div>
        </div>
    </div>
</div>
