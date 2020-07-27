<!------- Smart Header Include File---------->
<?php include '../../../../smart/html/includes/dcp-header-final.php'; ?>
<!------- Smart Header Include File end---------->

<!------- Smart Mail Stylesheet------=------->
<link rel="stylesheet" href="../../../css/mail.css">
<!------- Smart Mail Stylesheet end---------->


<div class="container-fluid p15 p-md30">

	<!-- Header Start -->
	<div class="row align-items-center mb15 mb-md30">
		<div class="col-12 col-md-8">
		<ul class="stepwizard-style2 w400 lato-font f-20 f-md-24">
		  <li> <a href="#">A/B Test</a> </li>
		  <li> <a href="#">A/B Test Title </a> </li>
		</ul>
			<p class="f-14 gblue-clr">Configure email settings for A/B test variants</p>
		</div>
		<div class="col-12 col-md-4 text-center text-md-right mt15 mt-md0">
			<a href="#" class="base-btn default-btn mr5">&nbsp; Back &nbsp;</a>
			<a href="#" class="base-btn blue-btn">&nbsp; Next &nbsp;</a>
		</div>
	</div>
	<!-- Header End -->
	
	<!------- Step Wizard Div Start----------->
	<div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md25">
		<div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
			<div class="circle-num"><span><i class="fa fa-check"></i></span>
			</div>
			<div class="title align-self-center">Editor</div>
			<div class="sep-line align-self-center d-none d-lg-block"></div>
		</div>
		<div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
			<div class="circle-num"><span><i class="fa fa-check"></i></span>
			</div>
			<div class="title align-self-center">Subject</div>
			<div class="sep-line align-self-center d-none d-lg-block"></div>
		</div>
        <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
			<div class="circle-num"><span>3</span>
			</div>
			<div class="title align-self-center">Contacts</div>
			<div class="sep-line align-self-center d-none d-lg-block"></div>
		</div>
        <div class="d-flex justify-content-start flex-wrap mr15 mb5">
			<div class="circle-num"><span>4</span>
			</div>
			<div class="title align-self-center">Sending Options</div>
			<div class="sep-line align-self-center d-none d-lg-block"></div>
		</div>
        <div class="d-flex justify-content-start flex-wrap mr15 mb5">
			<div class="circle-num"><span>5</span>
			</div>
			<div class="title align-self-center">Review and Send</div>
			<div class="sep-line align-self-center d-none d-lg-block"></div>
		</div>
	</div>
	<!------- Step Wizard Div End----------->
	
	<!--------- Radio Button Div---------->
	<div class="d-flex justify-content-start flex-wrap ml6 mb15 mb-md25 align-items-center">
		<!--<div class="smart-radio-btn radio-strong-blue mr15 mr-md60">
		<input name="mailing" id="mailing1" value="option1" class="mail-group-switch" type="radio" checked="">
		<label for="mailing1" class="mb-md0"> Choose Contacts Manually </label>
		</div>
		<div class="smart-radio-btn radio-strong-blue">
		<input name="mailing" id="mailing" value="option1" class="mail-group-switch" type="radio">
		<label for="mailing" class="mb-md0"> Quick Mailing Group </label>
		</div>-->
		<span class="ml-auto base-btn gradient-btn w500">Total Contacts: 2000</span>
	</div>
	<!---------Radio Button Div End---------->
	
	<!---------Choose Contacts Manually Start---------->
	<div class="row contact-manually-group">
		<div class="col-12 col-md-6 col-lg-6 col-xl-4 mb15 mb-md30">
			<div class="subscribers-section radius3 h-100">
				
				<div class="title-header f-16 lato-font w400 p15 px-md20 d-flex align-items-center">
					<i class="icon-add-third f-20 s-green-clr white-bg d-inline-block rounded-circle mr12"></i>Include List
				</div>
				
		
			<div class="d-flex justify-content-between flex-wrap bs-h40 pt15 pt-md20 px-md30 px15 row">
					<div class="col-md-7">
						<select class="selectpicker f-14" title="Highest Click Rate (10)">
							<option>All List (50)</option>
							<option>Sortby Highest Open Rate</option>
							<option>Sortby Highest Click Rate</option>
							<option>Sortby Frequently Used</option>
						</select>
					</div>
					<div class="col-md-5 smart-search-field mt15 mt-md0">
						<div class="input-group flex-lg-nowrap flex-wrap">
							<input class="form-control" placeholder="Search" type="text">
							<div class="input-group-append">
							<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
							</div>
						</div>
					</div>
				</div>
				
				<div class="mCustomScrollbar h430 f-14" data-mcs-theme="inset-3">
					<div class="p15 py-md20 px-md30 d-gblue-clr">
						<ul class="mailing-group-list">
					<li>
						<div class="row w500 vd-gblue-clr">
							<div class="col-8 col-md-9 col-lg-8 ">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox8" name="my_checkbox" type="checkbox">
									<label for="checkbox8" class="mb0 pl-md15 d-inline"> Lists Name</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4">Contacts</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox9" type="checkbox">
									<label for="checkbox9" class="mb0 pl-md15 d-inline"> Lists Name</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox10" type="checkbox">
									<label for="checkbox10" class="mb0 pl-md15 d-inline"> Lists Name</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox11" type="checkbox">
									<label for="checkbox11" class="mb0 pl-md15 d-inline"> Lists Name</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox12" type="checkbox">
									<label for="checkbox12" class="mb0 pl-md15 d-inline"> Lists Name</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox13" type="checkbox">
									<label for="checkbox13" class="mb0 pl-md15 d-inline"> Lists Name</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox14" type="checkbox">
									<label for="checkbox14" class="mb0 pl-md15 d-inline"> Lists Name</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					</ul>
					</div>					
				</div>	
				
			</div>
		</div>
		<div class="col-12 col-md-6 col-lg-6 col-xl-4 mb15 mb-md30">
			<div class="subscribers-section radius3 h-100">
				
				<div class="title-header f-16 lato-font w400 p15 px-md20 d-flex align-items-center">
					<i class="icon-add-third f-20 s-green-clr white-bg d-inline-block rounded-circle mr12"></i>Include Tags
				</div>
				
		
				<div class="d-flex justify-content-between flex-wrap bs-h40 pt15 pt-md20 px-md30 px15 row">
					<div class="col-md-7">
						<select class="selectpicker f-14" title="Highest Click Rate (10)">
							<option>All Tags (50)</option>
							<option>Sortby Highest Open Rate</option>
							<option>Sortby Highest Click Rate</option>
							<option>Sortby Frequently Used</option>
						</select>
					</div>
					<div class="col-md-5 pl-md15 smart-search-field mt15 mt-md0">
						<div class="input-group flex-lg-nowrap flex-wrap">
							<input class="form-control" placeholder="Search" type="text">
							<div class="input-group-append">
							<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
							</div>
						</div>
					</div>
				</div>
				
				<div class="mCustomScrollbar h430 f-14" data-mcs-theme="inset-3">
					<div class="p15 py-md20 px-md30 d-gblue-clr">
						<ul class="mailing-group-list">
					<li>
						<div class="smart-checkbox-btn checkbox-strong-blue">
							<input id="checkbox15" name="my_checkbox" type="checkbox">
							<label for="checkbox15" class="mb0 pl-md15 d-inline w500 vd-gblue-clr"> Tags Name</label>
						</div>
					</li>
					<li>
						<div class="smart-checkbox-btn checkbox-strong-blue">
							<input id="checkbox16" name="my_checkbox" type="checkbox">
							<label for="checkbox16" class="mb0 pl-md15 d-inline"> Tags Name 1</label>
						</div>
					</li>
					<li>
						<div class="smart-checkbox-btn checkbox-strong-blue">
							<input id="checkbox17" name="my_checkbox" type="checkbox">
							<label for="checkbox17" class="mb0 pl-md15 d-inline"> Tags Name 2</label>
						</div>
					</li>
					<li>
						<div class="smart-checkbox-btn checkbox-strong-blue">
							<input id="checkbox18" name="my_checkbox" type="checkbox">
							<label for="checkbox18" class="mb0 pl-md15 d-inline"> Tags Name 3</label>
						</div>
					</li>
					<li>
						<div class="smart-checkbox-btn checkbox-strong-blue">
							<input id="checkbox19" name="my_checkbox" type="checkbox">
							<label for="checkbox19" class="mb0 pl-md15 d-inline"> Tags Name 4</label>
						</div>
					</li>
					<li>
						<div class="smart-checkbox-btn checkbox-strong-blue">
							<input id="checkbox20" name="my_checkbox" type="checkbox">
							<label for="checkbox20" class="mb0 pl-md15 d-inline"> Tags Name 5</label>
						</div>
					</li>
					<li>
						<div class="smart-checkbox-btn checkbox-strong-blue">
							<input id="checkbox21" name="my_checkbox" type="checkbox">
							<label for="checkbox21" class="mb0 pl-md15 d-inline"> Tags Name 6</label>
						</div>
					</li>
					
		
					</ul>
					</div>					
				</div>	
				
			</div>
		</div>
		<div class="col-12 col-md-6 col-lg-6 col-xl-4 mb15 mb-md30">
			<div class="subscribers-section radius3 h-100">
				
				<div class="title-header f-16 lato-font w400 p15 px-md20 d-flex align-items-center">
					<i class="icon-add-third f-20 s-green-clr white-bg d-inline-block rounded-circle mr12"></i>Suppression List
				</div>
				
		
				<div class="d-flex justify-content-between flex-wrap bs-h40 pt15 pt-md20 px-md30 px15 row">
					<div class="col-12 pl-md15 smart-search-field mt15 mt-md0">
						<div class="input-group flex-lg-nowrap flex-wrap">
							<input class="form-control" placeholder="Search" type="text">
							<div class="input-group-append">
							<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
							</div>
						</div>
					</div>
				</div>
				
				<div class="mCustomScrollbar h430 f-14" data-mcs-theme="inset-3">
					<div class="p15 py-md20 px-md30 d-gblue-clr">
						<ul class="mailing-group-list">
					<li>
						<div class="row w500 vd-gblue-clr">
							<div class="col-8 col-md-9 col-lg-8 ">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox22" name="my_checkbox" type="checkbox">
									<label for="checkbox22" class="mb0 pl-md15 d-inline"> Suppression Name</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4">Contacts</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox23" type="checkbox">
									<label for="checkbox23" class="mb0 pl-md15 d-inline"> Suppression List Name 1</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox24" type="checkbox">
									<label for="checkbox24" class="mb0 pl-md15 d-inline"> Suppression List Name 2</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox25" type="checkbox">
									<label for="checkbox25" class="mb0 pl-md15 d-inline"> Suppression List Name 3</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox26" type="checkbox">
									<label for="checkbox26" class="mb0 pl-md15 d-inline"> Suppression List Name 4</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox27" type="checkbox">
									<label for="checkbox27" class="mb0 pl-md15 d-inline"> Suppression List Name 5</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox28" type="checkbox">
									<label for="checkbox28" class="mb0 pl-md15 d-inline"> Suppression List Name 6</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					</ul>
					</div>					
				</div>	
				
			</div>
		</div>
		<div class="col-12 col-md-6 col-lg-6 col-xl-4 mb15 mb-md0">
			<div class="subscribers-section radius3 h-100">
				
				<div class="title-header f-16 lato-font w400 p15 px-md20 d-flex align-items-center">
					<i class="icon-exclude f-20 vi-red-clr white-bg d-inline-block rounded-circle mr12"></i>Exclude List
				</div>
				
		
				<div class="d-flex justify-content-between flex-wrap bs-h40 pt15 pt-md20 px-md30 px15 row">
					<div class="col-md-7">
						<select class="selectpicker f-14" title="Highest Click Rate (10)">
							<option>All List (50)</option>
							<option>Sortby Highest Open Rate</option>
							<option>Sortby Highest Click Rate</option>
							<option>Sortby Frequently Used</option>
						</select>
					</div>
					<div class="col-md-5 pl-md15 smart-search-field mt15 mt-md0">
						<div class="input-group flex-lg-nowrap flex-wrap">
							<input class="form-control" placeholder="Search" type="text">
							<div class="input-group-append">
							<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
							</div>
						</div>
					</div>
				</div>
				
				<div class="mCustomScrollbar h430 f-14" data-mcs-theme="inset-3">
					<div class="p15 py-md20 px-md30 d-gblue-clr">
						<ul class="mailing-group-list">
					<li>
						<div class="row w500 vd-gblue-clr">
							<div class="col-8 col-md-9 col-lg-8 ">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox29" name="my_checkbox" type="checkbox">
									<label for="checkbox29" class="mb0 pl-md15 d-inline"> Lists Name</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4">Contacts</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox30" type="checkbox">
									<label for="checkbox30" class="mb0 pl-md15 d-inline"> Lists Name</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox31" type="checkbox">
									<label for="checkbox31" class="mb0 pl-md15 d-inline"> Lists Name</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox32" type="checkbox">
									<label for="checkbox32" class="mb0 pl-md15 d-inline"> Lists Name</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox33" type="checkbox">
									<label for="checkbox33" class="mb0 pl-md15 d-inline"> Lists Name</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox34" type="checkbox">
									<label for="checkbox34" class="mb0 pl-md15 d-inline"> Lists Name</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox35" type="checkbox">
									<label for="checkbox35" class="mb0 pl-md15 d-inline"> Lists Name</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					</ul>
					</div>					
				</div>	
				
			</div>
		</div>
		<div class="col-12 col-md-6 col-lg-6 col-xl-4">
			<div class="subscribers-section radius3 h-100">
				
				<div class="title-header f-16 lato-font w400 p15 px-md20 d-flex align-items-center">
					<i class="icon-exclude f-20 vi-red-clr white-bg d-inline-block rounded-circle mr12"></i>Exclude Tags
				</div>
				
		
				<div class="d-flex justify-content-between flex-wrap bs-h40 pt15 pt-md20 px-md30 px15 row">
					<div class="col-md-7">
						<select class="selectpicker f-14" title="Highest Click Rate (10)">
							<option>All tags (50)</option>
							<option>Sortby Highest Open Rate</option>
							<option>Sortby Highest Click Rate</option>
							<option>Sortby Frequently Used</option>
						</select>
					</div>
					<div class="col-md-5 pl-md15 smart-search-field mt15 mt-md0">
						<div class="input-group flex-lg-nowrap flex-wrap">
							<input class="form-control" placeholder="Search" type="text">
							<div class="input-group-append">
							<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
							</div>
						</div>
					</div>
				</div>
				
				<div class="mCustomScrollbar h430 f-14" data-mcs-theme="inset-3">
					<div class="p15 py-md20 px-md30 d-gblue-clr">
						<ul class="mailing-group-list">
					<li>
						<div class="smart-checkbox-btn checkbox-strong-blue">
							<input id="checkbox36" name="my_checkbox" type="checkbox">
							<label for="checkbox36" class="mb0 pl-md15 d-inline w500 vd-gblue-clr"> Tags Name</label>
						</div>
					</li>
					<li>
						<div class="smart-checkbox-btn checkbox-strong-blue">
							<input id="checkbox37" name="my_checkbox" type="checkbox">
							<label for="checkbox37" class="mb0 pl-md15 d-inline"> Tags Name 1</label>
						</div>
					</li>
					<li>
						<div class="smart-checkbox-btn checkbox-strong-blue">
							<input id="checkbox38" name="my_checkbox" type="checkbox">
							<label for="checkbox38" class="mb0 pl-md15 d-inline"> Tags Name 2</label>
						</div>
					</li>
					<li>
						<div class="smart-checkbox-btn checkbox-strong-blue">
							<input id="checkbox39" name="my_checkbox" type="checkbox">
							<label for="checkbox39" class="mb0 pl-md15 d-inline"> Tags Name 3</label>
						</div>
					</li>
					<li>
						<div class="smart-checkbox-btn checkbox-strong-blue">
							<input id="checkbox40" name="my_checkbox" type="checkbox">
							<label for="checkbox40" class="mb0 pl-md15 d-inline"> Tags Name 4</label>
						</div>
					</li>
					<li>
						<div class="smart-checkbox-btn checkbox-strong-blue">
							<input id="checkbox41" name="my_checkbox" type="checkbox">
							<label for="checkbox41" class="mb0 pl-md15 d-inline"> Tags Name 5</label>
						</div>
					</li>
					<li>
						<div class="smart-checkbox-btn checkbox-strong-blue">
							<input id="checkbox42" name="my_checkbox" type="checkbox">
							<label for="checkbox42" class="mb0 pl-md15 d-inline"> Tags Name 6</label>
						</div>
					</li>
					
		
					</ul>
					</div>					
				</div>	
				
			</div>
		</div>
			
	</div>
	<!---------Choose Contacts Manually End---------->
	<!---------Quick Mailing Group Start---------->
	<div class="row quick-mailing-group">
		<div class="col-12 col-md-6 mb15 mb-md0">
			<div class="subscribers-section radius3 h-100">
				
				<div class="title-header f-16 lato-font w400 p15 px-md20 d-flex align-items-center">
					<i class="icon-add-third f-20 s-green-clr white-bg d-inline-block rounded-circle mr12"></i>Include Quick Mailing Group
				</div>
				
		
				<div class="d-flex justify-content-between flex-wrap bs-h40 pt15 pt-md20 px-md30 px15 row">
					<div class="col-md-7">
						<select class="selectpicker f-14" title="Highest Click Rate (10)">
							<option>All Quick Mailing Group (50)</option>
							<option>Sortby Highest Open Rate</option>
							<option>Sortby Highest Click Rate</option>
							<option>Sortby Frequently Used</option>
						</select>
					</div>
					<div class="col-md-5 pl-md15 smart-search-field mt15 mt-md0">
						<div class="input-group">
							<input class="form-control" placeholder="Search" type="text">
							<div class="input-group-append">
							<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
							</div>
						</div>
					</div>
				</div>
				
				<div class="mCustomScrollbar h430 f-14" data-mcs-theme="inset-3">
					<div class="p15 py-md20 px-md30 d-gblue-clr">
						<ul class="mailing-group-list">
					<li>
						<div class="row w500 vd-gblue-clr">
							<div class="col-8 col-md-9 col-lg-8 ">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox1" name="my_checkbox" type="checkbox">
									<label for="checkbox1" class="mb0 pl-md15 d-inline"> Quick Mailing Group Name</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4">Contacts</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox2" type="checkbox">
									<label for="checkbox2" class="mb0 pl-md15 d-inline"> Quick Mailing Group 1</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox3" type="checkbox">
									<label for="checkbox3" class="mb0 pl-md15 d-inline"> Quick Mailing Group 2</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox4" type="checkbox">
									<label for="checkbox4" class="mb0 pl-md15 d-inline"> Quick Mailing Group 3</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox5" type="checkbox">
									<label for="checkbox5" class="mb0 pl-md15 d-inline"> Quick Mailing Group 4</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox6" type="checkbox">
									<label for="checkbox6" class="mb0 pl-md15 d-inline"> Quick Mailing Group 5</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox7" type="checkbox">
									<label for="checkbox7" class="mb0 pl-md15 d-inline"> Quick Mailing Group 6</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					</ul>
					</div>					
				</div>	
				
			</div>
		</div>
		<div class="col-12 col-md-6">
			<div class="subscribers-section radius3 h-100">
				
				<div class="title-header f-16 lato-font w400 p15 px-md20 d-flex align-items-center">
					<i class="icon-exclude f-20 vi-red-clr white-bg d-inline-block rounded-circle mr12"></i>Exclude Quick Mailing Group
				</div>
				
		
				<div class="d-flex justify-content-between flex-wrap bs-h40 pt15 pt-md20 px-md30 px15 row">
					<div class="col-md-7">
						<select class="selectpicker f-14" title="Highest Click Rate (10)">
							<option>All Quick Mailing Group (50)</option>
							<option>Sortby Highest Open Rate</option>
							<option>Sortby Highest Click Rate</option>
							<option>Sortby Frequently Used</option>
						</select>
					</div>
					<div class="col-md-5 pl-md15 smart-search-field mt15 mt-md0">
						<div class="input-group">
							<input class="form-control" placeholder="Search" type="text">
							<div class="input-group-append">
							<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
							</div>
						</div>
					</div>
				</div>
				
				<div class="mCustomScrollbar h430 f-14" data-mcs-theme="inset-3">
					<div class="p15 py-md20 px-md30 d-gblue-clr">
						<ul class="mailing-group-list">
					<li>
						<div class="row w500 vd-gblue-clr">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox11" name="my_checkbox" type="checkbox">
									<label for="checkbox11" class="mb0 pl-md15 d-inline"> Quick Mailing Group Name</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4">Contacts</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox22" type="checkbox">
									<label for="checkbox22" class="mb0 pl-md15 d-inline"> Quick Mailing Group 1</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox33" type="checkbox">
									<label for="checkbox33" class="mb0 pl-md15 d-inline"> Quick Mailing Group 2</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox44" type="checkbox">
									<label for="checkbox44" class="mb0 pl-md15 d-inline"> Quick Mailing Group 3</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox55" type="checkbox">
									<label for="checkbox55" class="mb0 pl-md15 d-inline"> Quick Mailing Group 4</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox66" type="checkbox">
									<label for="checkbox66" class="mb0 pl-md15 d-inline"> Quick Mailing Group 5</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					<li>
						<div class="row">
							<div class="col-8 col-md-9 col-lg-8">
								<div class="smart-checkbox-btn checkbox-strong-blue">
									<input id="checkbox77" type="checkbox">
									<label for="checkbox77" class="mb0 pl-md15 d-inline"> Quick Mailing Group 6</label>
								</div>
							</div>
							<div class="col-4 col-md-3 col-lg-4 label-color">2000</div>
						</div>	
					</li>
					</ul>
					</div>					
				</div>	
				
			</div>
		</div>
			
	</div>
	<!---------Quick Mailing Group End---------->

	<!-------- Button------->
	<div class="row">
		<div class="mt15 mt-md30 text-right col-12">
			<a href="#" class="base-btn default-btn mr5">&nbsp; Back &nbsp;</a>
			<a href="#" class="base-btn blue-btn">&nbsp; Next &nbsp;</a>
		</div>
	</div>

</div>


<!------- Smart Footer Include File---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->