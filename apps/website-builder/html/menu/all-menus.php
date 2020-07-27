<!-- Website Builder Header Include File -->
<?php include '../../../smart/html/includes/dcp-header.php'; ?>
<!-- Website Builder Header Include File end -->

<!-- Website Builder Stylesheet -->
<link rel="stylesheet" href="../../css/website-builder.css" />

<div class="container-fluid p15 p-md30 pt-md10">
    <!-- Header Start -->
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="d-flex align-items-center flex-wrap">
                <ul class="website-builder-stepwizard f-14 w400">
                    <li>
                        <a href="#"><i class="icon-home f-14"></i><span class="pl10">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="#"><span>Designs</span> </a>
                    </li>
                    <li>
                        <a href="#"><span>Menus</span> </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row align-items-center mt15 mt-md20">
        <div class="col-12 col-md-8">
            <span class="f-20 f-md-24 lato-font">Menus</span>
            <p class="lightgrey mt5">Here you can manage your menu items</p>
        </div>
        <div class="col-12 col-md-4 text-center text-md-right mt10 mt-md0">
            <a href="#" class="base-btn blue-btn" data-toggle="modal" data-target="#addnewmenuModal"><i class="icon-add-new f-18 align-middle"></i> &nbsp;&nbsp; New Menu</a>
        </div>
    </div>
    <!-- Header End  -->

    <div class="row mt-md30 mt15">
        <!----Filter Option List Start--->
        <div class="col-12">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-xl-3 bs-h40 mb10 mb-md0 pr-lg0">
                    <select class="selectpicker f-14" title="All Menu  List (1000)">
                        <option>All Menu List (1000)</option>
                        <option>Recently added Menu (10)</option>
                        <option>Recently modified Menu (15)</option>
                        <option>Menu added in last 07 days (10)</option>
                        <option>Menu added in last 30 days (10)</option>
                    </select>
                </div>
                <div class="col-md-8 col-lg-8 col-xl-9">
                    <div class="row">
                        <div class="col-md-8 col-lg-4 offset-lg-4 col-xl-4 offset-xl-6 mb10 mb-md0 pl-md0">
                            <div class="smart-search-field">
                                <div class="input-group">
                                    <input class="form-control" placeholder="Search" type="text" />
                                    <div class="input-group-append">
                                        <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xl-2">
                            <div class="row">
                                <div class="col-3 col-md-4 col-lg-4 d-flex align-self-center f-14">Show</div>
                                <div class="col-9 col-md-8 col-lg-8 bs-h40">
                                    <select class="selectpicker f-14">
                                        <option>08</option>
                                        <option>09</option>
                                        <option>10</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----Filter Option List End--->

        <div class="col-12 mt20">
            <div id="thori-scroll" class="table-responsive smart-table-style">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="6%">
                                <div class="smart-checkbox-btn checkbox-strong-blue">
                                    <input id="checkAll" type="checkbox" />
                                    <label for="checkAll"></label>
                                </div>
                            </th>
                            <th width="35%">Menu Name &nbsp;<i class="fa fa-sort"></i></th>
                            <th width="35%">Create Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <!-- Table Option Div Show---->
                    <div class="table-option-manage animated fadeIn">
                        <ul class="list-inline f-14 w400 mb0">
                            <li class="list-inline-item">
                                <a href="#" class="base-btn default-btn btn-h30 f-14" title="Duplicate" data-toggle="modal" data-target="#duplicatedbModal"><i class="icon-duplicate"></i> Duplicate</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="base-btn default-btn btn-h30 f-14" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i> Delete</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Table Option Div end---->
                    <tbody>
                        <tr>
                            <td>
                                <div class="smart-checkbox-btn checkbox-strong-blue">
                                    <input id="tcheck2" type="checkbox" class="checkbox-active" />
                                    <label for="tcheck2"></label>
                                </div>
                            </td>
                            <td><a href="#" class="w400 p-blue-clr t-decoration-none">Menu Name One</a></td>
                            <td>16 March 2020 at 12:40 PM</td>
                            <td>
                                <ul class="table-action">
                                    <li class="action-menu">
                                        <a href="#" class="action-item" title="Rename"><i class="icon-rename"></i></a>
                                    </li>
                                    <li class="action-menu">
                                        <a href="#" class="action-item" title="edit"><i class="icon-edit"></i></a>
                                    </li>
                                    <li class="action-menu">
                                        <a href="#" class="action-item" title="Duplicate"><i class="icon-duplicate"></i></a>
                                    </li>
                                    <li class="action-menu table-action-dropdown">
                                        <a class="dropdown-toggle action-item" data-toggle="dropdown">
                                            <span data-toggle="tooltip" data-placement="top" title="" data-original-title="More"><i class="icon-more"></i></span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li><a href="#" data-toggle="modal" data-target="#deleteModal">Delete</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="smart-checkbox-btn checkbox-strong-blue">
                                    <input id="tcheck3" type="checkbox" class="checkbox-active" />
                                    <label for="tcheck3"></label>
                                </div>
                            </td>
                            <td><a href="#" class="w400 p-blue-clr t-decoration-none">Menu Name Two</a></td>
                            <td>16 March 2020 at 12:40 PM</td>
                            <td>
                                <ul class="table-action">
                                    <li class="action-menu">
                                        <a href="#" class="action-item" title="Rename"><i class="icon-rename"></i></a>
                                    </li>
                                    <li class="action-menu">
                                        <a href="#" class="action-item" title="edit"><i class="icon-edit"></i></a>
                                    </li>
                                    <li class="action-menu">
                                        <a href="#" class="action-item" title="Duplicate"><i class="icon-duplicate"></i></a>
                                    </li>
                                    <li class="action-menu table-action-dropdown">
                                        <a class="dropdown-toggle action-item" data-toggle="dropdown">
                                            <span data-toggle="tooltip" data-placement="top" title="" data-original-title="More"><i class="icon-more"></i></span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li><a href="#" data-toggle="modal" data-target="#deleteModal">Delete</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="smart-checkbox-btn checkbox-strong-blue">
                                    <input id="tcheck4" type="checkbox" class="checkbox-active" />
                                    <label for="tcheck4"></label>
                                </div>
                            </td>
                            <td><a href="#" class="w400 p-blue-clr t-decoration-none">Menu Name Three</a></td>
                            <td>16 March 2020 at 12:40 PM</td>
                            <td>
                                <ul class="table-action">
                                    <li class="action-menu">
                                        <a href="#" class="action-item" title="Rename"><i class="icon-rename"></i></a>
                                    </li>
                                    <li class="action-menu">
                                        <a href="#" class="action-item" title="edit"><i class="icon-edit"></i></a>
                                    </li>
                                    <li class="action-menu">
                                        <a href="#" class="action-item" title="Duplicate"><i class="icon-duplicate"></i></a>
                                    </li>
                                    <li class="action-menu table-action-dropdown">
                                        <a class="dropdown-toggle action-item" data-toggle="dropdown">
                                            <span data-toggle="tooltip" data-placement="top" title="" data-original-title="More"><i class="icon-more"></i></span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li><a href="#" data-toggle="modal" data-target="#deleteModal">Delete</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="smart-checkbox-btn checkbox-strong-blue">
                                    <input id="tcheck5" type="checkbox" class="checkbox-active" />
                                    <label for="tcheck5"></label>
                                </div>
                            </td>
                            <td><a href="#" class="w400 p-blue-clr t-decoration-none">Menu Name Four</a></td>
                            <td>16 March 2020 at 12:40 PM</td>
                            <td>
                                <ul class="table-action">
                                    <li class="action-menu">
                                        <a href="#" class="action-item" title="Rename"><i class="icon-rename"></i></a>
                                    </li>
                                    <li class="action-menu">
                                        <a href="#" class="action-item" title="edit"><i class="icon-edit"></i></a>
                                    </li>
                                    <li class="action-menu">
                                        <a href="#" class="action-item" title="Duplicate"><i class="icon-duplicate"></i></a>
                                    </li>
                                    <li class="action-menu table-action-dropdown">
                                        <a class="dropdown-toggle action-item" data-toggle="dropdown">
                                            <span data-toggle="tooltip" data-placement="top" title="" data-original-title="More"><i class="icon-more"></i></span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li><a href="#" data-toggle="modal" data-target="#deleteModal">Delete</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="smart-checkbox-btn checkbox-strong-blue">
                                    <input id="tcheck6" type="checkbox" class="checkbox-active" />
                                    <label for="tcheck6"></label>
                                </div>
                            </td>
                            <td><a href="#" class="w400 p-blue-clr t-decoration-none">Menu Name Five</a></td>
                            <td>16 March 2020 at 12:40 PM</td>
                            <td>
                                <ul class="table-action">
                                    <li class="action-menu">
                                        <a href="#" class="action-item" title="Rename"><i class="icon-rename"></i></a>
                                    </li>
                                    <li class="action-menu">
                                        <a href="#" class="action-item" title="edit"><i class="icon-edit"></i></a>
                                    </li>
                                    <li class="action-menu">
                                        <a href="#" class="action-item" title="Duplicate"><i class="icon-duplicate"></i></a>
                                    </li>
                                    <li class="action-menu table-action-dropdown">
                                        <a class="dropdown-toggle action-item" data-toggle="dropdown">
                                            <span data-toggle="tooltip" data-placement="top" title="" data-original-title="More"><i class="icon-more"></i></span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li><a href="#" data-toggle="modal" data-target="#deleteModal">Delete</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Pagination Div Start -->

            <div class="d-flex justify-content-between flex-wrap f-14 mt15 mt-md30">
                <div class="d-flex justify-content-start align-items-center mb5">
                    Show
                    <span class="bs-h40 entries-width px15">
                        <select class="selectpicker">
                            <option>08</option>
                            <option>09</option>
                            <option>10</option>
                        </select>
                    </span>
                    <span class="d-none d-xl-block">Showing 1 to 8 of 400 entries</span>
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
            <!-- Pagination Div End -->
        </div>
    </div>
</div>

<!-- Website Builder Footer Include Fil -->
<?php include '../../includes/website-builder-footer.php'; ?>
<!-- Website Builder Footer Include File end -->
