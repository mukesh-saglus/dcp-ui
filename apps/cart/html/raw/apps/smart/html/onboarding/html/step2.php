<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google" content="notranslate" />
<!-- Tell the browser to be responsive to screen width -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Page Title -->
<title>DotcomPal</title>
<!-- Bootstrap 4 Stylesheet -->
<?php $basedir = "http://".$_SERVER['SERVER_NAME'] . '/DCP-UI/'; ?>
<!-- Favicon Icon -->
<link rel="icon" href="<?php echo $basedir; ?>images/favicon.png" type="image/png">
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/bootstrap.min.css">
<!-- Common Css Stylesheet -->
<link rel="stylesheet" href="<?php echo $basedir; ?>css/general.css">
<link rel="stylesheet" href="<?php echo $basedir; ?>css/elements.css">
<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/css/custom.css">
<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/html/onboarding/css/onboarding.css">
<!-- Bootstrap Select Dropdown Stylesheet -->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/bootstrap-select.css">
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/selectpicker-style.css">
<!-- DotCompal Dahboard Css Stylesheet -->
<!-- Custom Scrollbar Stylesheet -->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/scrollbar/jquery.mCustomScrollbar.css">
<!-- Country Code Plugin Stylesheet -->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/tel-input/intlTelInput.css">
<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/css/dcp-header.css">
<!-- Country Chooser Flags -->
<link href="<?php echo $basedir; ?>vendors/flagstrap/css/flags.css" rel="stylesheet">
<!-- boostrap select dropdwon for mobile & tablet js -->
<script type="text/javascript">
	$(function() {
		$('.selectpicker').selectpicker({
			container: 'body'
		});

		if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
			$('.selectpicker').selectpicker('mobile');
		}
	});
</script>
<!-- boostrap select dropdwon  for mobile & tablet js end -->
</head>

<body>
<!-- DotCompal Login Header -->
<div class="sticky-fix">
	<header class="ob-black-header">
		<div class="container-fluid px-md30 h-100">
			<div class="row h-100">
				<div class="col-8 col-sm-3 col-md-3 col-lg-3 col-xl-3 order-sm-1 d-flex align-items-center">
					<a href="#">
						<img src="<?php echo $basedir; ?>images/saglus-logo-header.png" class="img-fluid mh-50" alt="Saglus Logo">
					</a>
				</div>
				<div class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-3 order-sm-3 text-right d-flex align-items-center justify-content-end">
					<div class="list-link dropdown caret-icon-none dcp-header-dropdown video-guide-dropdown">
                     <a class="list-inline-link dropdown-toggle f-16 f-md-18 w400 help-link" id="help" data-toggle="dropdown"><span class="help-none">Help</span> <i class="icon-help-n-training top-right-icon-margin"></i> </a>
                     <div class="dropdown-menu dropdown-menu-right video-guide-scrollbar mCustomScrollbar" data-mcs-theme="inset-3">
                        <!------------ Quick Start Guide Header----------------->
                        <div class="d-flex align-items-center vl-gblue-bg p15 px-md30 vd-gblue-clr f-14 f-md-15 w700">
                           <div class="mr-auto">DotcomPal Support</div>
                        </div>
						 <div class="training-dropdown">
							<div class="media px15 px-md30">
								 <span class="video-guide-icon"><i class="icon-video-help f-18"></i></span>
								 <div class="media-body align-self-center ml20">
									<p class="w400 f-14 f-md-15 lh140 text-capitalize">Training Videos</p>
								 </div>
							</div>
							<div class="px15 px-md30 lato-font f-13"> 
								<div class="row no-gutters align-items-center">
									<a href="#" class="col-md-6 p0 d-flex d-gblue-clr t-decoration-none aling-items-center mt15 p-blue-hover-clr">
										<span class="gblue-clr"><i class="icon-video-help f-15"></i></span>
										<span class="ml10">Setup A Business</span>
									</a>
									<a href="#" class="col-md-6 p0 d-flex d-gblue-clr t-decoration-none aling-items-center mt15 p-blue-hover-clr">
										<span class="gblue-clr"><i class="icon-video-help f-15"></i></span>
										<span class="ml10">New Navigation</span>
									</a>
									<a href="#" class="col-md-6 p0 d-flex d-gblue-clr t-decoration-none aling-items-center mt15 p-blue-hover-clr">
										<span class="gblue-clr"><i class="icon-video-help f-15"></i></span>
										<span class="ml10">Onboarding</span>
									</a>
									<a href="#" class="col-md-6 p0 d-flex d-gblue-clr t-decoration-none aling-items-center mt15 p-blue-hover-clr">
										<span class="gblue-clr"><i class="icon-video-help f-15"></i></span>
										<span class="ml10">Create A Campaign</span>
									</a>
									<a href="#" class="col-md-12 p0 d-flex d-gblue-clr t-decoration-none aling-items-center mt15 p-blue-hover-clr">
										<span class="gblue-clr"><i class="icon-video-help f-15"></i></span>
										<span class="ml10">Step-By-Step Video Training (70)</span>
									</a>
								</div>
							</div>
						  </div>
                        <div class="f-14 f-md-15 clearfix">
                           <a class="dropdown-item" href="#">
                              <div class="media">
                                 <span class="video-guide-icon">
                                 &nbsp;<i class="icon-knowledgebase f-18"></i>
                                 </span>
                                 <div class="media-body align-self-center ml20">
                                    <p class="w400 f-14 f-md-15 lh140 text-capitalize">Knowledgebase</p>
									 <div class="w400 f-12 lh140 gblue-clr mt4">Checkout FAQ knowledgebase and help yourself.</div>
                                 </div>
                              </div>
                           </a>
                           <a class="dropdown-item" href="#">
                              <div class="media">
                                 <span class="video-guide-icon">
                                 <i class="icon-facebook f-18"></i>
                                 </span>
                                 <div class="media-body align-self-center ml20">
                                    <p class="w400 f-14 f-md-15 lh140 text-capitalize">Online Business VIP Club</p>
									<div class="w400 f-12 lh140 gblue-clr mt4">Join Fb group to gain 10x growth with DotcomPal.</div> 
                                 </div>
                              </div>
                           </a>
                           <a class="dropdown-item" href="#">
                              <div class="media">
                                 <span class="video-guide-icon">
                                 <i class="icon-total-viewed-notification f-14"></i>
                                 </span>
                                 <div class="media-body align-self-center ml20">
                                    <p class="w400 f-14 f-md-15 lh140">Chat With Us</p>
									 <div class="w400 f-12 lh140 gblue-clr mt4">Chat with us for instant resolution of any query.</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="vl-gblue-bg p15 lato-font f-14 text-center">
                           <div class="call-animation">
                              <i class="icon-call-now f-10"></i>
                           </div>
                           <div class="f-14 f-md-15 mt15">Call To Us <span class="w700">+1-833-622-0003</span></div>
                        </div>
                     </div>
                  </div>
                  
				</div>
				<div class="col-12 col-sm-7 col-md-7 col-lg-7 col-xl-6 order-sm-2 d-flex align-items-center justify-content-center mt15 mt-md0">
					<ul class="business-step-wizard f-12 w400 text-center">
						<li>
							<a href="step1.php" class="wizard-sep active">
								<i class="icon-tick"></i>
							</a>
							<div class="wizard-title">Business
								<br class="d-md-none"> name</div>
						</li>
						<li>
							<a href="step2.php" class="wizard-sep">
								<i class="icon-dot f-6 opacity20"></i>
								<i class="icon-dot f-6 opacity60"></i>
								<i class="icon-dot f-6"></i>
							</a>
							<div class="wizard-title">Business
								<br class="d-md-none"> address</div>
						</li>
						<li>
							<a href="step3.php" class="wizard-sep">
								<i class="icon-tick d-none"></i>
							</a>
							<div class="wizard-title">What your
								<br class="d-md-none"> business does?</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>
</div>
<!-- Container Start -->
<div class="container-fluid px15 px-md30">
	<div class="row">
		<div class="col-12">
			<div class="text-md-right mt20">
				<a href="#" class="f-14 d-gblue-clr t-decoration-none p-blue-hover-clr" data-toggle="modal" data-target="#vhelpModal">
					<i class="icon-video-help pr5 gblue-clr align-middle f-16"></i>How to setup your business ?
				</a>
			</div>
		</div>
	</div>
</div>
<section class="onboarding-container-middle">
	<div class="container p15 mb-md50">
		<div class="row">
			<div class="col-12 col-md-8 col-lg-7 order-md-2 smart-form">
				<div class="f-20 f-md-28 w500 mb5">Please furnish your business address.
					<sup class="vi-red-clr f-16">*</sup>
					<a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="It is a corresponding/physical address for your business. Legally it is required to furnish address of a business that sells anything online." class="d-gblue-clr segment-info t-decoration-none"><i class="icon-information f-16"></i></a>
				</div>

				<p class="f-14 d-gblue-clr lh160">Required to share this address with your customers on your business contact page and in footer of an email sent using DotcomPal platform.</p>
				<div class="form-group mb0 mt15 mt-lg20">
					<label class="label-15">Address<span class="vi-red-clr">*</span></label>
					<input type="text" class="form-control f-14" placeholder="Type your address here">
				</div>
				<div class="row">
					<div class="col-12 col-md-6 mt15 mt-md20">
						<div class="form-group mb0 f-14 flagstrap-h50">
							<label class="label-15">Country<span class="vi-red-clr">*</span></label>
							<div class="">
								<div id="account_contries_primary" data-input-name="country_primary">
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 mt15 mt-md20">
						<div class="form-group mb0 f-14">
							<label class="label-15">Region/State<span class="vi-red-clr">*</span></label>
							<select class="selectpicker" title="Select One" data-live-search="true">
								<option>Rajasthan111</option>
								<option>Rajasthan112</option>
								<option>Rajasthan113</option>
								<option>Rajasthan122</option>
								<option>Rajasthan123</option>
								<option>Rajasthan124</option>
							</select>
						</div>
					</div>
					<div class="col-12 col-md-6 mt15 mt-md20">
						<div class="form-group mb0 f-14">
							<label class="label-15">City<span class="vi-red-clr">*</span></label>
							<select class="selectpicker" title="Select One" data-live-search="true">
								<option>Kota</option>
								<option>Bundi</option>
							</select>
						</div>
					</div>
					<div class="col-12 col-md-6 mt15 mt-md20">
						<div class="form-group mb0 f-14">
							<label class="label-15">Zip/Postal Code<span class="vi-red-clr">*</span></label>
							<input type="text" class="form-control f-14" placeholder="Zip/postal code here">
						</div>
					</div>
					<!-- <div class="col-12 col-md-12 mt15 mt-md20">
				 <div class="form-group f-14 mb0">
					<label class="d-gblue-clr">Timezone<span class="vi-red-clr">*</span></label>
					<select class="selectpicker" title="Select your business timezone" data-live-search="true">
						<option timeZoneId="1" gmtAdjustment="GMT-12:00" useDaylightTime="0" value="-12">(GMT-12:00) International Date Line West</option>
						<option timeZoneId="2" gmtAdjustment="GMT-11:00" useDaylightTime="0" value="-11">(GMT-11:00) Midway Island, Samoa</option>
						<option timeZoneId="3" gmtAdjustment="GMT-10:00" useDaylightTime="0" value="-10">(GMT-10:00) Hawaii</option>
						<option timeZoneId="4" gmtAdjustment="GMT-09:00" useDaylightTime="1" value="-9">(GMT-09:00) Alaska</option>
						<option timeZoneId="5" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
						<option timeZoneId="6" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8">(GMT-08:00) Tijuana, Baja California</option>
						<option timeZoneId="7" gmtAdjustment="GMT-07:00" useDaylightTime="0" value="-7">(GMT-07:00) Arizona</option>
						<option timeZoneId="8" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
						<option timeZoneId="9" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
						<option timeZoneId="10" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="-6">(GMT-06:00) Central America</option>
						<option timeZoneId="11" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6">(GMT-06:00) Central Time (US & Canada)</option>
						<option timeZoneId="12" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
						<option timeZoneId="13" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="-6">(GMT-06:00) Saskatchewan</option>
						<option timeZoneId="14" gmtAdjustment="GMT-05:00" useDaylightTime="0" value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
						<option timeZoneId="15" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
						<option timeZoneId="16" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5">(GMT-05:00) Indiana (East)</option>
						<option timeZoneId="17" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
						<option timeZoneId="18" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4">(GMT-04:00) Caracas, La Paz</option>
						<option timeZoneId="19" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4">(GMT-04:00) Manaus</option>
						<option timeZoneId="20" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4">(GMT-04:00) Santiago</option>
						<option timeZoneId="21" gmtAdjustment="GMT-03:30" useDaylightTime="1" value="-3.5">(GMT-03:30) Newfoundland</option>
						<option timeZoneId="22" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Brasilia</option>
						<option timeZoneId="23" gmtAdjustment="GMT-03:00" useDaylightTime="0" value="-3">(GMT-03:00) Buenos Aires, Georgetown</option>
						<option timeZoneId="24" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Greenland</option>
						<option timeZoneId="25" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Montevideo</option>
						<option timeZoneId="26" gmtAdjustment="GMT-02:00" useDaylightTime="1" value="-2">(GMT-02:00) Mid-Atlantic</option>
						<option timeZoneId="27" gmtAdjustment="GMT-01:00" useDaylightTime="0" value="-1">(GMT-01:00) Cape Verde Is.</option>
						<option timeZoneId="28" gmtAdjustment="GMT-01:00" useDaylightTime="1" value="-1">(GMT-01:00) Azores</option>
						<option timeZoneId="29" gmtAdjustment="GMT+00:00" useDaylightTime="0" value="0">(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>
						<option timeZoneId="30" gmtAdjustment="GMT+00:00" useDaylightTime="1" value="0">(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
						<option timeZoneId="31" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
						<option timeZoneId="32" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
						<option timeZoneId="33" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
						<option timeZoneId="34" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
						<option timeZoneId="35" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) West Central Africa</option>
						<option timeZoneId="36" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Amman</option>
						<option timeZoneId="37" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Athens, Bucharest, Istanbul</option>
						<option timeZoneId="38" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Beirut</option>
						<option timeZoneId="39" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Cairo</option>
						<option timeZoneId="40" gmtAdjustment="GMT+02:00" useDaylightTime="0" value="2">(GMT+02:00) Harare, Pretoria</option>
						<option timeZoneId="41" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
						<option timeZoneId="42" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Jerusalem</option>
						<option timeZoneId="43" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Minsk</option>
						<option timeZoneId="44" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Windhoek</option>
						<option timeZoneId="45" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Kuwait, Riyadh, Baghdad</option>
						<option timeZoneId="46" gmtAdjustment="GMT+03:00" useDaylightTime="1" value="3">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
						<option timeZoneId="47" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Nairobi</option>
						<option timeZoneId="48" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Tbilisi</option>
						<option timeZoneId="49" gmtAdjustment="GMT+03:30" useDaylightTime="1" value="3.5">(GMT+03:30) Tehran</option>
						<option timeZoneId="50" gmtAdjustment="GMT+04:00" useDaylightTime="0" value="4">(GMT+04:00) Abu Dhabi, Muscat</option>
						<option timeZoneId="51" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4">(GMT+04:00) Baku</option>
						<option timeZoneId="52" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4">(GMT+04:00) Yerevan</option>
						<option timeZoneId="53" gmtAdjustment="GMT+04:30" useDaylightTime="0" value="4.5">(GMT+04:30) Kabul</option>
						<option timeZoneId="54" gmtAdjustment="GMT+05:00" useDaylightTime="1" value="5">(GMT+05:00) Yekaterinburg</option>
						<option timeZoneId="55" gmtAdjustment="GMT+05:00" useDaylightTime="0" value="5">(GMT+05:00) Islamabad, Karachi, Tashkent</option>
						<option timeZoneId="56" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5">(GMT+05:30) Sri Jayawardenapura</option>
						<option timeZoneId="57" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
						<option timeZoneId="58" gmtAdjustment="GMT+05:45" useDaylightTime="0" value="5.75">(GMT+05:45) Kathmandu</option>
						<option timeZoneId="59" gmtAdjustment="GMT+06:00" useDaylightTime="1" value="6">(GMT+06:00) Almaty, Novosibirsk</option>
						<option timeZoneId="60" gmtAdjustment="GMT+06:00" useDaylightTime="0" value="6">(GMT+06:00) Astana, Dhaka</option>
						<option timeZoneId="61" gmtAdjustment="GMT+06:30" useDaylightTime="0" value="6.5">(GMT+06:30) Yangon (Rangoon)</option>
						<option timeZoneId="62" gmtAdjustment="GMT+07:00" useDaylightTime="0" value="7">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
						<option timeZoneId="63" gmtAdjustment="GMT+07:00" useDaylightTime="1" value="7">(GMT+07:00) Krasnoyarsk</option>
						<option timeZoneId="64" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
						<option timeZoneId="65" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Kuala Lumpur, Singapore</option>
						<option timeZoneId="66" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
						<option timeZoneId="67" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Perth</option>
						<option timeZoneId="68" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Taipei</option>
						<option timeZoneId="69" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
						<option timeZoneId="70" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9">(GMT+09:00) Seoul</option>
						<option timeZoneId="71" gmtAdjustment="GMT+09:00" useDaylightTime="1" value="9">(GMT+09:00) Yakutsk</option>
						<option timeZoneId="72" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5">(GMT+09:30) Adelaide</option>
						<option timeZoneId="73" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5">(GMT+09:30) Darwin</option>
						<option timeZoneId="74" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">(GMT+10:00) Brisbane</option>
						<option timeZoneId="75" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Canberra, Melbourne, Sydney</option>
						<option timeZoneId="76" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Hobart</option>
						<option timeZoneId="77" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">(GMT+10:00) Guam, Port Moresby</option>
						<option timeZoneId="78" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Vladivostok</option>
						<option timeZoneId="79" gmtAdjustment="GMT+11:00" useDaylightTime="1" value="11">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
						<option timeZoneId="80" gmtAdjustment="GMT+12:00" useDaylightTime="1" value="12">(GMT+12:00) Auckland, Wellington</option>
						<option timeZoneId="81" gmtAdjustment="GMT+12:00" useDaylightTime="0" value="12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
						<option timeZoneId="82" gmtAdjustment="GMT+13:00" useDaylightTime="0" value="13">(GMT+13:00) Nuku'alofa</option>
						<option value="+14:00">(GMT +14:00) Line Islands, Tokelau</option>
					</select>
				  </div>
			</div> -->
				</div>
			</div>
			<div class="col-12 col-md-4 col-lg-5 order-md-1 d-flex align-items-center">
				<img src="<?php echo $basedir; ?>apps/smart/html/onboarding/images/business-address.png" class="img-fluid d-block mx-auto">
			</div>
		</div>
	</div>
</section>
<!-- Container End -->
<!----------- Footer Section-------------->
<div class="step-footer-height"></div>
<footer class="step-footer">
	<div class="container-fluid px-md30">
		<div class="row">
			<div class="col-12 text-right">
				<a href="#" class="base-btn default-btn mr5">Back</a>
				<a href="#" class="base-btn blue-btn">Next</a>
			</div>
		</div>
	</div>
</footer>

<!---- Common Jquery and Bootstrap 4 & Select Dropdown Jquery Files ------>
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/jquery/jquery.min.js"></script>
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/bootstrap/popper.min.js"></script>
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/bootstrap/bootstrap.min.js"></script>
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/bootstrap/bootstrap-select.js"></script>
<!---- Custom Scrollbar Jquery File ------>
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<!---- Add Custom Javacscript File ------>
<script type='text/javascript' src="<?php echo $basedir; ?>js/script.js"></script>
<!----- Country Code Plugins --------->
<script src="<?php echo $basedir; ?>vendors/flagstrap/js/jquery.flagstrap.js"></script>
<script>
	$('#account_contries_primary').flagStrap();

	setTimeout(function() {
		//alert();
		//$('.mCustomScrollbar').mCustomScrollbar('update');

	}, 1000);
</script>
<!-- Common Modals Include File -->
<?php include '../../includes/common-modals.php'; ?>
<!-- Common Modals Include File end -->
</body>

</html>