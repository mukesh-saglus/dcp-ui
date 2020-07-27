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
        <a class="nav-link lh110 active" href="sms-setting.php">
            <span class="d-none d-md-block">SSP Setting</span>
            <span class="d-block d-md-none"><i class="icon-settings f-18"></i></span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link lh110" href="sender-name.php">
            <span class="d-none d-md-block">Sender Name</span>
            <span class="d-block d-md-none"><i class="icon-sender-name f-18"></i></span>
        </a>
    </li>
</ul>
<!-- Tabs End -->

<div class="container-fluid p15 p-md30">
    <!-- SMS Setting Section Start-->
    <div class="col-12 p0">
        <!-- Mail Setting Heading -->
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center flex-wrap">
                    <ul class="stepwizard-style2 f-18 f-sm-24 w400 lato-font mr15">
                        <li><a href="#"> ADD NEW SSP</a></li>
                        <li><a href="#"> Gupshup</a></li>
                    </ul>
                </div>
                <p class="lightgrey lh150">Add & configure your new SSP settings</p>
            </div>
        </div>
        <!-- Filteration Div -->
        <!--<div class="row">
			<div class="col-md-4 col-lg-3 col-xl-3 bs-h40 mb10 mb-md0">
				<select class="selectpicker f-14" data-live-search="true">
					<option>All</option>
					<option>Mandrill API</option>
					<option>Mandrill SMTP</option>
                    <option>Amazon SES SMTP</option>
					<option>Sendgrid web API</option>
                    <option>Mailjet web API</option>
				</select>
			</div>			
		</div>-->
        <!-- Form Data -->
        <div class="row mt15 mt-md40">
            <div class="col-12 smart-form">
                <form>
                    <div class="row f-14">
                        <div class="col-md-4 col-12 mb15 mb-md30">
                            <label class="d-gblue-clr">Name <span class="vi-red-clr">*</span></label>
                            <input class="form-control f-14 field-h40" type="text" />
                        </div>

                        <div class="col-md-4 col-12 mb15 mb-md30">
                            <label class="d-gblue-clr">Username <span class="vi-red-clr">*</span></label>
                            <input class="form-control f-14 field-h40" type="text" />
                        </div>

                        <div class="col-md-4 col-12 mb15 mb-md30">
                            <label class="d-gblue-clr">Password <span class="vi-red-clr">*</span> </label>
                            <input class="form-control f-14 field-h40" type="text" />
                        </div>

                        <div class="col-md-8 col-12 mb15 mb-md30">
                            <label class="d-gblue-clr">Webhook URL <span class="vi-red-clr">*</span></label>
                            <input class="form-control f-14 field-h40" type="text" value="https://dotcompal.com/tracking/smsgupshup-events" disabled />
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-10 align-self-center mt10">
                <p class="f-16 f-md-18 lh150 w500">Sending Limit</p>
                <p class="lh150 mt10">
                    The configuration settings below allow you to set a limit on sms sending speed. For example, to limit sending speed to 2000 sms every 5 minutes, you can set “sending limit = 2000”, “Time value = 5”, and “Time unit =
                    minute” accordingly.
                </p>
            </div>
        </div>
        <div class="row mt15 mt-md40">
            <div class="col-12 smart-form">
                <form>
                    <div class="row f-14">
                        <div class="col-md-4 mb15 mb-md30 disable-text-field">
                            <label class="d-gblue-clr">Sending limit <span class="vi-red-clr">*</span></label>
                            <input class="form-control f-14 field-h40 disable-field" type="text" />
                        </div>

                        <div class="col-md-4 mb15 mb-md30 disable-text-field">
                            <label class="d-gblue-clr">
                                Time base
                                <span class="vi-red-clr">*</span>
                            </label>
                            <input class="form-control f-14 field-h40 disable-field" type="text" />
                        </div>

                        <div class="col-md-4 mb15 mb-md30 bs-h40">
                            <label class="d-gblue-clr">Time Unit <span class="vi-red-clr">*</span></label>
                            <select class="selectpicker f-14">
                                <option>Hours</option>
                                <option>Day</option>
                                <option>Minuts</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-5 align-self-center mb15 mb-md0">
                <div class="smart-checkbox-btn checkbox-strong-blue">
                    <input id="check-disable" type="checkbox" />
                    <label for="check-disable" class="m0"> Unlimited </label>
                </div>
            </div>
            <div class="col-12 col-md-7 text-md-right text-center">
                <a href="#" class="base-btn default-btn mb10 mb-md0">Back</a>&nbsp;&nbsp; <a href="javascript:void(0)" data-toggle="modal" data-target="#testSMSModal" class="base-btn default-btn mb10 mb-md0">Test SMS</a>&nbsp;&nbsp;
                <a href="#" class="base-btn default-btn mb10 mb-md0">Reset</a>&nbsp;&nbsp;
                <a href="#" class="base-btn blue-btn mb10 mb-md0">Save</a>
            </div>
        </div>
    </div>
</div>
<!-- SMS Setting Section End-->

<!-- Footer Include File-->
<?php include '../../../smart/html/includes/dcp-footer.php'; ?>
<!-- Footer Include File end -->