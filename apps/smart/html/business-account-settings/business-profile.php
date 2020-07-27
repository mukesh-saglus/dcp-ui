<!------- Smart Header Include File---------->
<?php include '../includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->
<!---- Smart Mail css --->
<link rel="stylesheet" href="<?php echo $basedir; ?>apps/mail/css/mail.css">
<!---- Smart Mail css End --->

<div class="container-fluid p15 p-md30">
<form action="" method="post">
	<div class="row business-profile smart-form">
		
		<div class="col-12 col-md-3 col-lg-3 text-center">
			<div class="business-profile-thumb d-flex align-items-center">
				<img src="../../../../images/eduncle-logo.png" class="img-fluid d-block mx-auto">
			</div>
			<p class="f-12 gblue-clr mt12 text-center">Recommended size of logo 158x50 px</p>
			<p class="f-14 mt5 lh150 text-center">
			<input id="upload_primary" type="file" class="d-none"/>
			<a href="" class="p-blue-clr" id="upload_link_primary">Upload Logo</a><br>
			<a href="#" class="gblue-clr">Remove</a>
			</p>
			<!-- Upload favicon Div -->
			<div class="mt15 mt-md60 upload-favicon">
			  <img src="<?php echo $basedir; ?>images/favicon-icon.png" class="img-fluid">
			</div>
			<p class="f-12 gblue-clr mt10 text-center">Recommended size of favicon 16x16 px</p>
			<p class="f-14 mt5 lh150 text-center">
				<input id="upload_secondary" type="file" class="d-none"/>
				<a href="#" class="p-blue-clr" id="upload_link_secondary">Upload Favicon</a><br>
				<a href="#" class="gblue-clr">Remove</a>
			</p>
		</div>
		
		<div class="col-12 col-md-9 col-lg-8 mt15 mt-md0">
		
		<div class="row">
		<div class="col-12 col-md-6 f-18 w600 text-center text-md-left">Basic Information:</div>
		<div class="col-12 col-md-6 f-14 text-center text-md-right mt15 mt-md0"><a href="#" id="edit-profile" class="base-btn blue-btn">Edit</a></div>
		</div>
		
		<div class="row">
		
		<div class="col-12 col-md-6 mt15">
		<p class="d-gblue-clr f-14 d-gblue-clr">Business account name</p>
		<div class="smart-form mt5">
		<div class="form-group mb0">
           <input type="text" name="business-name" disabled class="form-control f-14" placeholder="Business account name" value="Eduncle India">
		</div>
		</div>
		</div>
		
		<div class="col-12 col-md-6 mt15">
		<p class="d-gblue-clr f-14 d-gblue-clr">DotcomPal Sub-domain</p>
		<div class="smart-form mt5">
		<div class="form-group mb0 domain-name">
           <input type="url" name="domain-name" class="form-control f-14" disabled placeholder="DotcomPal Sub-domain" disabled value="https://www.eduncle.com">
		</div>
		</div>
		</div>
		
		</div>
		
		<div class="row">
		<div class="col-12 col-md-6 mt-md25 mt15">
		<p class="d-gblue-clr f-14 d-gblue-clr">Business Website</p>
		<div class="smart-form mt5">
		<div class="form-group mb0">
           <input type="text" name="business-website" class="form-control f-14" placeholder="www.businessname.com" disabled value="www.businessname.com">
		</div>
		</div>
		</div>
		
		<div class="col-12 col-md-6 mt-md25 mt15">
		<p class="d-gblue-clr f-14 d-gblue-clr">Which industry best describes your company?</p>
		<div class="smart-form mt5">
		<div class="form-group mb0">
           <select class="selectpicker f-14" name="industry" disabled title="Select your industry type">
              <option>Agriculture</option>
              <option>Information Technology</option>
              <option>Health</option>
              <option>Logistic</option>
              <option>Networking</option>
              <option>Ecommerce</option>
              <option>Real Estate</option>
           </select>
		</div>
		</div>
		</div>
		
		
		</div>
		
		<div class="row">
		<div class="col-12 col-md-6 mt-md25 mt15">
		<p class="d-gblue-clr f-14 d-gblue-clr">How many customers do you have?</p>
		<div class="smart-form mt5">
		<div class="form-group mb0">
           <select class="selectpicker f-14" name="customers" disabled  title="Select one">
              <option>Less than 10000</option>
              <option>10000 - 50000 </option>
              <option>50000 - 100000</option>
              <option>100000 - 500000</option>
              <option>Greater than 500000</option>
           </select>
		</div>
		</div>
		</div>
		<div class="col-12 col-md-6 mt-md25 mt15">
		<p class="d-gblue-clr f-14 d-gblue-clr">How many people work at your company?</p>
		<div class="smart-form mt5">
		<div class="form-group mb0">
           <select class="selectpicker f-14" disabled name="people" title="Select One">
              <option>0 - 10</option>
              <option>11 - 50</option>
              <option>51 - 200</option>
              <option>201 - 500</option>
              <option>501 - 1000</option>
              <option>Greater than 1000</option>
           </select>
		</div>
		</div>
		</div>
		</div>
		
		
		<div class="row">
		<div class="col-12 col-md-6 mt-md25 mt15">
			<p class="d-gblue-clr f-14 d-gblue-clr">What is your business need?</p>
			<div class="smart-form mt5">
			<div class="form-group mb0 business-need">
			   <input type="url" name="business-need" class="form-control f-14" disabled disabled value="I want to increase engagement on my website " title="I want to increase engagement on my website">
			</div>
			</div>
		</div>
		<div class="col-12 col-md-6 mt-md25 mt15">
		<p class="d-gblue-clr f-14 d-gblue-clr">What is your annual turnover?</p>
		<div class="smart-form mt5">
		<div class="form-group mb0">
           <select class="selectpicker f-14" disabled title="Select one">
            <option>Less than $10000</option>
              <option>$10000 - $50000</option>
              <option>$50000 - $100000</option>
              <option>$100000 - $0.5 Million</option>
              <option>$0.5 Million - $1 Million</option>
              <option>Greater than $1 Million</option>
           </select>
		</div>
		</div>
		</div>
			
		<div class="col-12 mt-md25 mt15">
		<p class="d-gblue-clr f-14 d-gblue-clr">Description</p>
		<div class="smart-form mt5">
		<div class="form-group mb0 description success-message">
           <textarea class="form-control" rows="5" disabled></textarea>
		</div>
		</div>
		</div>	
			
			
		
		</div>
		
		<div class="col-12 f-18 w600 mt-md40 mt15 p0">Address Information:</div>
		
		<div class="row">
			<div class="col-12 mt-md25 mt15">
			<p class="d-gblue-clr f-14 d-gblue-clr">Address</p>
			<div class="smart-form mt5">
			<div class="form-group mb0">
			   <input type="text" name="address" disabled class="form-control f-14" placeholder="Type your address here">
			</div>
			</div>
			</div>	
		</div>	
		
		<div class="row">
		
		<div class="col-12 col-md-6 mt-md25 mt15">
		<p class="d-gblue-clr f-14 d-gblue-clr">Country</p>
		<div class="no-hover-focus smart-form flagstrap-h50 mt5">
			<div class="form-group mb0 f-14">
            <div id="account_contries_primary" data-input-name="country_primary">
			</div>
			</div>
		</div>
		</div>
		
		
		
	
		
		<div class="col-12 col-md-6 mt-md25 mt15">
		<p class="d-gblue-clr f-14 d-gblue-clr">Region/State</p>
		<div class="smart-form mt5">
	      <select class="selectpicker f-14" disabled title="Select one">
           <option>Rajasthan</option>
              <option>Rajasthan</option>
              <option>Rajasthan</option>
              <option>Rajasthan</option>
              <option>Rajasthan</option>
              <option>Rajasthan</option>
           </select>
		</div>
		</div>
			
			<div class="col-12 col-md-6 mt-md25 mt15">
		<p class="d-gblue-clr f-14 d-gblue-clr">City</p>
		<div class="smart-form mt5">
			<div class="form-group mb0">
            <select class="selectpicker f-14" disabled name="city_primary" title="Select City">
                <option selected>Kota</option>
                <option>Kota 2</option>
                <option>Kota 3</option>
            </select>
			</div>
		</div>
		</div>	
		
		<div class="col-12 col-md-6 mt-md25 mt15">
		<p class="d-gblue-clr f-14 d-gblue-clr">Zip / Postal Code</p>
		<div class="smart-form mt5">
		<div class="form-group mb0">
           <input type="text" name="zip" disabled class="form-control f-14" placeholder="Enter ZIP Code" value="324005">
		</div>
		</div>
		</div>	
		
		<div class="col-12 mt-md25 mt15">
		<p class="d-gblue-clr f-14 d-gblue-clr">Timezone</p>
		<div class="smart-form mt5">
		<div class="form-group mb0">
           
		   <select class="selectpicker" title="Select timezone" data-live-search="true" disabled>
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
			</select>
		</div>
		</div>
		</div>
		
		
		
		<div class="col-12 col-md-12 mt-md40 mt15 text-right  d-flex align-items-center">
			<div class="smart-checkbox-btn checkbox-strong-blue d-flex ml5">
				<input id="public" class="checkbox-active" type="checkbox">
				<label for="public">Make this address public</label>
			</div>
		</div>
		
		<div class="col-12">
			<div class="mt-md30 mt15 f-18 w600">Social Media Profiles</div>
			<div class="row mail-footer-form">
				<div class="col-12 col-md-6 mt-md25 mt15">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text white-bg">
								<div class="fb-btn text-center social-mail-icon-size d-flex justify-content-center align-items-center">
									<i class="icon-facebook f-10"></i>
								</div>
							</span>
						</div>
						<input class="form-control f-14 field-h40 border-left-0 pl0" type="text" placeholder="Paste you Facebook link here">
					</div>
				</div>
				<div class="col-md-6 mt-md25 mt15">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text white-bg">
								<div class="linkin-btn text-center social-mail-icon-size d-flex justify-content-center align-items-center">
									<i class="icon-linkedin f-10"></i>
								</div>
							</span>
						</div>
						<input class="form-control f-14 field-h40 border-left-0 pl0" type="text" placeholder="Paste your LinkedIn link here">
					</div>
				</div>
				<div class="col-md-6 mt-md25 mt15">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text white-bg">
								<div class="twitter-btn text-center social-mail-icon-size d-flex justify-content-center align-items-center">
									<i class="icon-twitter f-10"></i>
								</div>
							</span>
						</div>
						<input class="form-control f-14 field-h40 border-left-0 pl0" type="text" placeholder="Paste your Twiiter link here">
					</div>
				</div>
				<div class="col-md-6 mt-md25 mt15">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text white-bg">
								<div class="youtube-btn text-center social-mail-icon-size d-flex justify-content-center align-items-center">
									<i class="icon-youtubee f-10"></i>
								</div>
							</span>
						</div>
						<input class="form-control f-14 field-h40 border-left-0 pl0" type="text" placeholder="Paste your youtube link here">
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 smart-form text-right mt15 mt-md30">
			<input type="button" class="base-btn default-btn" value="Cancel"> &nbsp; 
			<input type="submit" name="add-account" class="base-btn blue-btn" value="Save">
		</div>
		</div>
		</div>
		
	</div>
	</form>
</div>


<!------- Smart Footer Include File---------->
<?php include '../includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->


<script>
//Disable Flagstrap Button
$(document).ready(function(){
   $(".flagstrap-h50 :button").prop("disabled", true);
});


//Enable Inputs after clicking on Edit Button
$('#edit-profile').click(function(){
    $('.business-profile input').prop('disabled', false);
    $('.business-profile .domain-name input').prop('disabled', true);
    $('.business-profile .business-need input').prop('disabled', true);
    $('.business-profile .description textarea').removeAttr('disabled');
    $('.business-profile button').prop('disabled', false);
    $('.business-profile .bootstrap-select').removeClass('disabled');
    $('.business-profile .bootstrap-select button').removeClass('disabled');
    $('.business-profile .bootstrap-select select').removeAttr('disabled');
    $('#edit-profile').hide();
	 $('.mail-footer-form .input-group').removeClass('disable');
});
</script>