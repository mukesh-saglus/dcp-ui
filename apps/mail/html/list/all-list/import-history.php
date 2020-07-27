<!-- Smart Header Include File -->
<?php include '../../../../smart/html/includes/dcp-header.php'; ?>
<!-- Smart Header Include File end -->

<!-- Smart Mail Stylesheet -->
<link rel="stylesheet" href="../../../css/mail.css" />
<!-- Smart Mail Stylesheet end -->
<div class="container-fluid p15 p-md30">
    <div class="row align-items-center">
        <div class="col-12 col-md-7">
            <span class="f-md-24 f-20 lato-font">Import History </span> &nbsp;
            <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
            <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
            <p class="lightgrey mt5">View the status of contacts imports</p>
        </div>
        <div class="col-12 col-md-5 mt10 mt-md0 text-center text-md-right">
            <a href="javascript:void(0)" class="base-btn default-btn mt10 mt-md0 mr5">Back</a>
            <a href="#" class="base-btn blue-btn" data-toggle="modal" data-target="#AddNewContactsModal"><i class="icon-add-new f-18 align-middle"></i>&nbsp;&nbsp; New Contacts</a>
        </div>
    </div>
    <div class="row mt-md30 mt15">
        <div class="col-12">
            <div id="thori-scroll" class="table-responsive smart-table-style">
                <table class="table table-bordered">
                    <thead>
                        <tr>
							<th width="25%">List &nbsp;<i class="fa fa-sort"></i></th>
                            <th  width="25%">Total Contacts</th>
                            <th>Date Submitted</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
							<td><a href="#" class="p-blue-clr t-decoration-none">List Name A</a></td>
                            <td>200</td>
                            <td>16 May 2020 at 06:30 PM</td>
                            <td>
								<a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" data-html="true" data-original-title="Your Upload is Being Reviewed Manually. It can take up to 72 Hours to Approve your upload." class="t-decoration-none f-12 mr15 mr-md20"><i class="icon-pending p-yellow-clr"></i></a>
								In Review
							</td>
                        </tr>
                        <tr>
							<td><a href="#" class="p-blue-clr t-decoration-none">List Name B</a></td>
                            <td>500</td>
                            <td>16 May 2020 at 06:30 PM</td>
                            <td>
								<a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" data-html="true" data-original-title="Contacts successfully imported" class="f-12 t-decoration-none mr15 mr-md20"><i class="icon-tick s-green-clr"></i></a>
								Successful
							</td>
                        </tr>
                        <tr>
							<td><a href="#" class="p-blue-clr t-decoration-none">List Name C</a></td>
                            <td>10,000</td>
                            <td>16 May 2020 at 06:30 PM</td>
                            <td>
								<a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" data-html="true" data-original-title="Contacts do not fulfill Dotcompal guidelines so your upload is not successful." class="f-10 t-decoration-none mr15 mr-md20"><i class="icon-cross vi-red-clr"></i></a>
								Unsuccessful
							</td>
                        </tr>
                        <tr>
							<td><a href="#" class="p-blue-clr t-decoration-none">List Name D</a></td>
                            <td>200</td>
                            <td>16 May 2020 at 06:30 PM</td>
                            <td>
								<a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" data-html="true" data-original-title="Your Upload is Being Reviewed Manually. It can take up to 72 Hours to Approve your upload." class="t-decoration-none f-12 mr15 mr-md20"><i class="icon-pending p-yellow-clr"></i></a>
								In Review	
							</td>
                        </tr>
                        <tr>
							<td><a href="#" class="p-blue-clr t-decoration-none">List Name E</a></td>
                            <td>500</td>
                            <td>16 May 2020 at 06:30 PM</td>
                            <td>
								<a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" data-html="true" data-original-title="Contacts successfully imported" class="f-12 t-decoration-none mr15 mr-md20"><i class="icon-tick s-green-clr"></i></a>
								Successful
							</td>
                        </tr>
                        <tr>
							<td><a href="#" class="p-blue-clr t-decoration-none">List Name F</a></td>
                            <td>500</td>
                            <td>16 May 2020 at 06:30 PM</td>
                            <td>
								<a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" data-html="true" data-original-title="Contacts successfully imported" class="f-12 t-decoration-none mr15 mr-md20"><i class="icon-tick s-green-clr"></i></a>
								Successful
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

<!-- Smart Footer Include File -->
<?php include '../../../../smart/html/includes/dcp-footer.php'; ?>
<!-- Smart Footer Include File end  -->