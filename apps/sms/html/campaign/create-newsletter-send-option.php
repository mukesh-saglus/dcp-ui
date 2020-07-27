<!-- Header Include File -->
<?php include '../../../smart/html/includes/dcp-header-final.php'; ?>
<!-- Header Include File end -->

<!-- SMS Stylesheet -->
<link rel="stylesheet" href="../../css/sms.css" />
<!-- SMS Stylesheet end -->

<div class="container-fluid p15 p-md30">
    <!-- Header Start-->
    <div class="row align-items-center mb15 mb-md30">
        <div class="col-12 col-md-6 col-xl-8">
            <ul class="stepwizard-style2 f-20 f-md-24 w400 lato-font">
                <li><a href="#">Campaigns</a></li>
                <li><a href="#">SMS</a></li>
                <li><a href="#">Demo SMS2</a></li>
            </ul>
            <p class="f-14 gblue-clr">Configure your campaigns details here</p>
        </div>
        <div class="col-12 col-md-6 col-xl-4 text-center text-md-right mt15 mt-md0">
            <a href="#" class="base-btn default-btn mr5 btn-xs-block">Save as Draft</a>
            <a href="#" class="base-btn default-btn mr5 btn-xs-block mt10 mt-md0">&nbsp; Back &nbsp;</a>
            <a href="#" class="base-btn blue-btn btn-xs-block mt10 mt-md0">&nbsp; Next &nbsp;</a>
        </div>
    </div>
    <!-- Header End -->

    <!-- Step Wizard Div Start-->
    <div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md25">
        <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
            <div class="circle-num">
                <span><i class="fa fa-check"></i></span>
            </div>
            <div class="title align-self-center">Design Selection</div>
            <div class="sep-line align-self-center d-none d-lg-block"></div>
        </div>
        <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
            <div class="circle-num">
                <span><i class="fa fa-check"></i></span>
            </div>
            <div class="title align-self-center">Editor</div>
            <div class="sep-line align-self-center d-none d-lg-block"></div>
        </div>
        <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
            <div class="circle-num">
                <span><i class="fa fa-check"></i></span>
            </div>
            <div class="title align-self-center">Contact</div>
            <div class="sep-line align-self-center d-none d-lg-block"></div>
        </div>
        <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
            <div class="circle-num"><span>4</span></div>
            <div class="title align-self-center">Sending option</div>
            <div class="sep-line align-self-center d-none d-lg-block"></div>
        </div>
        <div class="d-flex justify-content-start flex-wrap mr15 mb5">
            <div class="circle-num"><span>5</span></div>
            <div class="title align-self-center">Summary & Send</div>
            <div class="sep-line align-self-center d-none d-lg-block"></div>
        </div>
    </div>
    <!-- Step Wizard Div End-->

    <!-- Subject Section -->
    <div class="row">
        <div class="col-12 f-18 w400">Sending Option</div>
        <div class="col-12 segment-accordion mt-md20 mt15">
            <div id="accordion" class="accordion">
                <div class="card mb-0 f-16">
                    <div class="card-header collapsed" data-toggle="collapse" href="#SendingOptions">
                        <a class="card-title lato-font">&nbsp; Configure Sending Setting</a>
                    </div>
                    <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define required details for this SMS" class="pull-right d-gblue-clr segment-info">
                        <i class="icon-information"></i>
                    </a>
                    <div id="SendingOptions" class="collapse set-time-drop f-14">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-md0">
                                        <label class="d-gblue-clr">
                                            Sender <span class="vi-red-clr">*</span>
                                            <a href="javascript:void(0);"
                                                data-toggle="tooltip"
                                                data-placement="right"
                                                title=""
                                                data-original-title="Choose shortcode or phone number that the SMS is to be sent from"
                                                class="d-inline-block d-gblue-clr ml10 t-decoration-none">
                                                <i class="icon-information"></i>
                                            </a>
                                        </label>
                                        <select class="selectpicker" title="Select">
                                            <option selected>AR-EDUNCLE</option>
                                            <option>MD-SAGLUS</option>
                                            <option>+919100000000</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 smtp-dropdown">
                                    <div class="form-group mb-md0">
                                        <label class="d-gblue-clr">
                                            SSP<span class="vi-red-clr">*</span>

                                            <a href="javascript:void(0);"
                                                data-toggle="tooltip"
                                                data-placement="right"
                                                title=""
                                                data-original-title="Choose Sending SMS Provider that will send the SMS to the contacts"
                                                class="d-inline-block d-gblue-clr ml10 t-decoration-none">
                                                <i class="icon-information"></i>
                                            </a>
                                        </label>
                                        <div class="dropdown smtp-setting-dropdown w-100">
                                            <button class="btn base-btn default-btn dropdown-toggle btn-block btn-h50 text-left" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="caret-right pull-left text-truncate pr15">Default SSP </span>
                                            </button>
                                            <div class="dropdown-menu w-100 h-auto f-14" aria-labelledby="dropdownMenu1">
                                                <!-- Searchbox Field -->
                                                <div class="bs-searchbox-field">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search" />
                                                        <div class="input-group-append">
                                                            <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Scrollbar Div start -->
                                                <div class="selectplayer-drop f-14" data-mcs-theme="inset-3">
                                                    <!--<li class="smtp-item">Default SMTP</li>-->
                                                    <li class="dropdown-item">
                                                        <div class="smart-checkbox-btn checkbox-strong-blue text-truncate player-value">
                                                            <input id="DefaultSMS" type="checkbox" checked />
                                                            <label for="DefaultSMS" title="Default SSP">Default SSP </label>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <div class="smart-checkbox-btn checkbox-strong-blue text-truncate player-value">
                                                            <input id="SMSRotation" type="checkbox" />
                                                            <label for="SMSRotation" title="SSP Rotation">SSP Rotation</label>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <!--<li class="smtp-item">SMTP 1</li>-->
                                                    <li class="dropdown-item">
                                                        <div class="smart-checkbox-btn checkbox-strong-blue text-truncate player-value player-delete-width">
                                                            <input id="GupShup" type="checkbox" />
                                                            <label for="GupShup" title="GupShup">GupShup</label>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <div class="smart-checkbox-btn checkbox-strong-blue text-truncate player-value player-delete-width">
                                                            <input id="Twilio" type="checkbox" />
                                                            <label for="Twilio" title="Twilio">Twilio</label>
                                                        </div>
                                                    </li>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Subject Section -->

    <!-- Scheduling Section -->
    <div class="row mt15 mt-md30">
        <div class="col-12 f-18 w400">Scheduling</div>
        <div class="col-12 segment-accordion mt-md20 mt15">
            <div id="accordion" class="accordion">
                <div class="card mb-0 f-16">
                    <div class="card-header collapsed" data-toggle="collapse" href="#collapsePublish">
                        <a class="card-title lato-font">&nbsp; Schedule The SMS</a>
                    </div>
                    <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Start this SMS right now or define date & time for later." class="pull-right d-gblue-clr segment-info">
                        <i class="icon-information"></i>
                    </a>

                    <div id="collapsePublish" class="collapse set-time-drop f-14">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10 col-12 col-lg-9 d-gblue-clr">
                                    <div class="vd-gblue-clr">Sent the sms</div>
                                    <div class="d-flex justify-content-start flex-wrap mt20">
                                        <div class="smart-radio-btn radio-strong-blue mr25 publish-radio">
                                            <input name="chkPassPort" id="Not-Select" value="option1" checked="" type="radio" />
                                            <label for="Not-Select"> Now </label>
                                        </div>
                                        <div class="smart-radio-btn radio-strong-blue draft-radio">
                                            <input name="chkPassPort" id="select-date" value="option1" type="radio" />
                                            <label for="select-date"> Select date and time </label>
                                        </div>
                                    </div>
                                    <div id="timeshow" class="mt15">
                                        <div class="d-flex smart-form justify-content-start flex-wrap align-items-center">
                                            <div class="col-xl-4 col-md-5 col-12 pl0 pr0 pr-md15">
                                                <div class="input-group calendar-input-group mb10 mb-md0">
                                                    <input type="text" name="dob" class="form-control f-14" id="dob-primary-target" readonly placeholder="Choose Date" />
                                                    <span class="input-group-btn" id="dob-primary">
                                                        <button class="btn calendar-btn d-gblue-clr h50 f-19" type="button"><i class="icon-calendar"></i></button>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="pr15 pr15 pl-md5">at</div>
                                            <div class="px5 mb10 mb-md0">
                                                <select class="selectpicker f-14">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="px5">:</div>
                                            <div class="px5 mb10 mb-md0">
                                                <select class="selectpicker f-14">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="px-md5 mb10 mb-md0">
                                                <select class="selectpicker f-14">
                                                    <option>AM</option>
                                                    <option>PM</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scheduling Section -->

    <!-- Button -->
    <div class="row mt15 mt-md30">
        <div class="col-12 text-right">
            <a href="#" class="base-btn default-btn mr5 btn-xs-block">Save as Draft</a>
            <a href="javascript:void(0)" data-toggle="modal" data-target="#testSMSModal" class="base-btn default-btn mr5 btn-xs-block mt10 mt-md0">Test SMS</a>
            <a href="#" class="base-btn default-btn mr5 btn-xs-block mt10 mt-md0">Back</a>
            <button type="button" class="base-btn blue-btn btn-xs-block mt10 mt-md0">Next</button>
        </div>
    </div>
</div>

<!-- Footer Include File-->
<?php include '../../../smart/html/includes/dcp-footer.php'; ?>
<!-- Footer Include File end -->