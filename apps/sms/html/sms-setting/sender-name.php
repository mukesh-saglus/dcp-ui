<!-- Header Include File -->
<?php include '../../../smart/html/includes/dcp-header-final.php'; ?>
<!-- Header Include File end -->

<!-- SMS Stylesheet -->
<link rel="stylesheet" href="../../css/sms.css" />
<!-- SMS Stylesheet end -->

<!-- Header Start-->
<div class="container-fluid p15 px-md30 py-md30">
    <div class="row">
        <div class="col-12 col-md-7 align-self-center">
            <span class="f-20 f-md-24 lato-font">SMS Settings </span>&nbsp; <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
            <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
            <p class="gblue-clr f-14 w400 mt5">Configure your all SMS settings</p>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Tabs Start -->
<ul class="nav tabs-style3 f-14 f-md-16 w-100 relative" role="tablist">
    <li class="nav-item ml15 ml-md30">
        <a class="nav-link lh110" href="sms-setting.php">
            <span class="d-none d-md-block">SSP Setting</span>
            <span class="d-block d-md-none"><i class="icon-settings f-18"></i></span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link lh110 active" href="sender-name.php">
            <span class="d-none d-md-block">Sender Name</span>
            <span class="d-block d-md-none"><i class="icon-sender-name f-18"></i></span>
        </a>
    </li>
</ul>
<!-- Tabs End -->

<div class="container-fluid p15 p-md30">
    <!-- SMS Setting Section Start-->
    <div class="col-12 p0">
        <!-- Filteration Div -->
        <div class="row">
            <div class="col-md-4 col-lg-3 col-xl-3 bs-h40 mb10 mb-md0">
                <select class="selectpicker f-14" title="All Sender Name (400)">
                    <option>All Sender Name (400)</option>
                    <option>Recently added Sender Name (10)</option>
                    <option>Recently modified Sender Name (15)</option>
                    <option>Sender Name added in last 07 days (10)</option>
                    <option>Sender Name added in last 30 days (10)</option>
                </select>
            </div>
            <div class="col-md-8 col-lg-9 col-xl-9">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-xl-3 text-md-right offset-md-0 offset-lg-1 offset-xl-3 mb10 mb-md0 pl-md0 pl-lg15">
                        <div class="btn-group dropdown simple-dropdown w-100">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#addSenderNameModal" class="btn base-btn blue-btn f-14 btn-h40 w-100"> Add Sender Name</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 mb10 mb-md0">
                        <div class="smart-search-field">
                            <div class="input-group">
                                <input class="form-control" placeholder="Search" type="text" />
                                <div class="input-group-append">
                                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-2">
                        <div class="row">
                            <div class="col-3 col-md-3 col-lg-4 d-flex align-self-center f-14">Show</div>
                            <div class="col-9 col-md-9 col-lg-8 bs-h40">
                                <select class="selectpicker f-14">
                                    <option>10</option>
                                    <option>20</option>
                                    <option>30</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table Data -->
        <div class="row mt15 mt-md30">
            <div class="col-12">
                <!-- Library Grid View-->
                <div class="table-responsive smart-table-style mb15 mb-md30 thori-scroll">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    <div class="smart-checkbox-btn checkbox-strong-blue pull-left mt6">
                                        <input id="checkAll2" type="checkbox" />
                                        <label for="checkAll2"></label>
                                    </div>
                                </th>
                                <th>Sender Name &nbsp;<i class="fa fa-sort"></i></th>
                                <th>Mobile Number &nbsp;<i class="fa fa-sort"></i></th>
                                <th>Email Address &nbsp;<i class="fa fa-sort"></i></th>
                                <th>SSP Type</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <div class="table-option-manage animated fadeIn ml10">
                            <ul class="list-inline f-14 w400 mb0">
                                <li class="list-inline-item mb10 mb-lg0">
                                    <a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Delete"><i class="icon-delete"></i> &nbsp; Delete</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Table Option Div end-->
                        <tbody>
                            <tr>
                                <td width="3%">
                                    <div class="smart-checkbox-btn checkbox-strong-blue">
                                        <input id="lcheck1" type="checkbox" class="checkbox-active" />
                                        <label for="lcheck1"></label>
                                    </div>
                                </td>
                                <td><a href="#" class="p-blue-clr t-decoration-none">Anurag</a></td>
                                <td>9287098099</td>
                                <td>sharmaanurag@gmail.com</td>
                                <td>Twilio</td>
                                <td>
                                    <span class="base-btn sl-green-bg white-clr btn-h25 cursor-auto px10 f-12">&nbsp; Active &nbsp;</span>
                                </td>
                                <td>
                                    <ul class="table-action">
                                        <li class="action-menu d-none">
                                            <a href="#" class="action-item" title="Resend"><i class="icon-resend"></i></a>
                                        </li>
                                        <li class="action-menu">
                                            <a href="javascript:void(0)" class="action-item" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i></a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td width="3%">
                                    <div class="smart-checkbox-btn checkbox-strong-blue">
                                        <input id="lcheck1" type="checkbox" class="checkbox-active" />
                                        <label for="lcheck1"></label>
                                    </div>
                                </td>
                                <td><a href="#" class="p-blue-clr t-decoration-none">Abhishek</a></td>
                                <td>9287098099</td>
                                <td>abhishekjain@gmail.com</td>
                                <td>Gupshup</td>
                                <td>
                                    <span class="base-btn vi-red-bg white-clr btn-h25 cursor-auto px10 f-12">Inactive</span>
                                </td>
                                <td>
                                    <ul class="table-action">
                                        <li class="action-menu">
                                            <a href="#" class="action-item" title="Resend"><i class="icon-resend"></i></a>
                                        </li>
                                        <li class="action-menu">
                                            <a href="javascript:void(0)" class="action-item" data-toggle="modal" data-target="#deleteModal" title="delete"><i class="icon-delete"></i></a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td width="3%">
                                    <div class="smart-checkbox-btn checkbox-strong-blue">
                                        <input id="lcheck1" type="checkbox" class="checkbox-active" />
                                        <label for="lcheck1"></label>
                                    </div>
                                </td>
                                <td><a href="#" class="p-blue-clr t-decoration-none">Anurag</a></td>
                                <td>9287098099</td>
                                <td>sharmaanurag@gmail.com</td>
                                <td>Netcore</td>
                                <td>
                                    <span class="base-btn sl-green-bg white-clr btn-h25 cursor-auto px10 f-12">&nbsp; Active &nbsp;</span>
                                </td>
                                <td>
                                    <ul class="table-action">
                                        <li class="action-menu d-none">
                                            <a href="#" class="action-item" title="Resend"><i class="icon-resend"></i></a>
                                        </li>
                                        <li class="action-menu">
                                            <a href="javascript:void(0)" class="action-item" data-toggle="modal" data-target="#deleteModal" title="Delete"><i class="icon-delete"></i></a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td width="3%">
                                    <div class="smart-checkbox-btn checkbox-strong-blue">
                                        <input id="lcheck1" type="checkbox" class="checkbox-active" />
                                        <label for="lcheck1"></label>
                                    </div>
                                </td>
                                <td><a href="#" class="p-blue-clr t-decoration-none">Abhishek</a></td>
                                <td>9287098099</td>
                                <td>abhishekjain@gmail.com</td>
                                <td>Exotel</td>
                                <td>
                                    <span class="base-btn vi-red-bg white-clr btn-h25 cursor-auto px10 f-12">Inactive</span>
                                </td>
                                <td>
                                    <ul class="table-action">
                                        <li class="action-menu">
                                            <a href="#" class="action-item" title="Resend"><i class="icon-resend"></i></a>
                                        </li>
                                        <li class="action-menu">
                                            <a href="javascript:void(0)" class="action-item" data-toggle="modal" data-target="#deleteModal" title="Delete"><i class="icon-delete"></i></a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination Div Start-->

                <div class="d-flex justify-content-between flex-wrap f-14 mt15 mt-md30">
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
                                <a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i> </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li>
                                <a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </a>
                            </li>
                            <li><a href="#" class="active">6</a></li>
                            <li>
                                <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Pagination Div End-->
            </div>
        </div>
    </div>
</div>
<!-- SMS Setting Section End-->

<!-- Footer Include File-->
<?php include '../../../smart/html/includes/dcp-footer.php'; ?>
<!-- Footer Include File end -->