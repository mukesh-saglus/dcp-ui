<!------- Smart Header Include File---------->
<?php include '../includes/dcp-header-final.php'; ?>
<!------- Smart Header Include File end---------->


<div class="container-fluid p15 p-md30">
	
<!------- Header Start----------->
	<div class="row">
		<div class="col-lg-8 col-md-8 col-12">
			<span class="f-20 f-md-24 lato-font">Integrations </span> &nbsp;
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="f-14 mt5 gblue-clr">Integrate DotcomPal with third-party apps</p>
		</div>
		<div class="col-lg-4 col-md-4 col-12 text-center text-md-right align-self-center mt10 mt-md0">
			<a href="integration1.php" class="base-btn blue-btn f-14"><i class="icon-add-new f-18 align-middle"></i>&nbsp;&nbsp; New Integration</a>
		</div>
	</div>
<!------- Header End ----------->
	
	<div class="row mt15 mt-md30">
		<div class="tab-content col-12">

			<div id="installed" class="tab-pane active">

				<!-------- Searching Div--------->
				<div class="row">
					<div class="bs-h40 col-lg-3 col-md-6 mb15 mb-md0">
						<select class="selectpicker f-14" title="All">
							<option>Email Marketing </option>
							<option>Customer Relationship Management </option>
							<option>Automation </option>
						</select>
					</div>
					<div class="offset-lg-6 col-lg-3 col-md-6">
						<div class="smart-search-field">
							<div class="input-group">
								<input class="form-control" placeholder="Search" type="text">
								<div class="input-group-append">
									<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-------- Searching Div end--------->

				<div class="row mt15 mt-md30">
					<!---- Heading------->
					<div class="col-12 f-14 w500">
						Email Marketing
					</div>
					<!---- Heading end------->

					<div class="col-12 col-md-6 col-lg-3 mt15 mt-md30 align-self-stretch d-flex">
						<div class="l-gblue-border p15 p-md30 businesslist-hover relative radius3 w-100">
							<!---- Active Icon----->
							<div class="text-right inte-active-icon">
								<i class="icon-dot s-green-clr f-12"></i>
							</div>

							<div class="mb15 mb-md30 integration-logo-height">
								<img src="../../../../images/integration/mailchimp.png" class="img-fluid d-block mx-auto">
							</div>

							<div class="text-center">
								<h4 class="w600 f-14 vd-gblue-clr mb8">	MailChimp</h4>
								<p class="f-12 w400 d-gblue-clr mb20">
									sachin@saglusinfo.com
								</p>
								<div class="f-14 s-green-clr">Integrated</div>
							</div>
							<div class="d-flex my15 mt-md20 mb-md10 dropdown caret-icon-none">

								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block px0 dropdown-toggle integration-box-show" data-toggle="dropdown"><i class="icon-show"></i> View Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop left-arrow mt10 smart-form mCustomScrollbar h200" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Key</label>
											<input type="text" class="form-control field-h40 f-14 readonly-data" value="https://it.pinterest.com/eduncleindia/"  readonly>
										</div>
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Id</label>
											<input type="text" class="form-control field-h40 f-14 readonly-data" value="" placeholder="API Id" readonly>
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Id</label>
											<input type="text" class="form-control field-h40 f-14 readonly-data" value="" placeholder="Client Id" readonly>
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Secret Id</label>
											<input type="text" class="form-control field-h40 f-14 readonly-data" value="" placeholder="Client Secret Id" readonly>
										</div>

										<div class="text-right">
											<a href="#" class="f-16 base-btn default-btn cancelbutton">Cancel</a>
										</div>
									</div>
								</div>



								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block ml10 mt0"><i class="icon-delete"></i>  Delete</a>
							</div>

							<div class="dropdown caret-icon-none">
								<a href="#" class="base-btn blue-btn  btn-block f-14 dropdown-toggle integration-box-show" data-toggle="dropdown"> Edit Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop left-arrow mt10 smart-form mCustomScrollbar h200 integration-box" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Key</label>
											<input type="text" class="form-control field-h40 f-14" value="https://it.pinterest.com/eduncleindia/">
										</div>
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="API Id">
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Id">
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Secret Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Secret Id">
										</div>

										<div class="text-right">
											<a href="#" class="f-16 base-btn default-btn cancelbutton mr5 btn-xs-block mb15 mb-md0">Cancel</a>
											<a href="#" class="f-16 base-btn blue-btn  btn-xs-block">Save API Credentials</a>
										</div>
									</div>
								</div>


							</div>

						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-3 mt15 mt-md30 align-self-stretch d-flex">
						<div class="l-gblue-border p15 p-md30 businesslist-hover relative radius3 w-100">
							<!---- Active Icon----->
							<div class="text-right inte-active-icon">
								<i class="icon-dot s-green-clr f-12"></i>
							</div>

							<div class="mb15 mb-md30 integration-logo-height">
								<img src="../../../../images/integration/getresponse.png" class="img-fluid d-block mx-auto">
							</div>

							<div class="text-center">
								<h4 class="w600 f-14 vd-gblue-clr mb8">	GetResponse</h4>
								<p class="f-12 w400 d-gblue-clr mb20">
									jay@saglusinfo.com
								</p>
								<div class="f-14 s-green-clr">Integrated</div>
							</div>
							<div class="d-flex my15 mt-md20 mb-md10 dropdown caret-icon-none">

								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block px0 dropdown-toggle integration-box-show" data-toggle="dropdown"><i class="icon-show"></i> View Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop left-arrow mt10 smart-form mCustomScrollbar h200" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Key</label>
											<input type="text" class="form-control field-h40 f-14" value="https://it.pinterest.com/eduncleindia/" disabled>
										</div>
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="API Id" disabled>
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Id" disabled>
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Secret Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Secret Id" disabled>
										</div>

										<div class="text-right">
											<a href="#" class="f-16 base-btn default-btn cancelbutton">Cancel</a>
										</div>
									</div>
								</div>



								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block ml10 mt0"><i class="icon-delete"></i>  Delete</a>
							</div>

							<div class="dropdown caret-icon-none">
								<a href="#" class="base-btn blue-btn  btn-block f-14 dropdown-toggle integration-box-show" data-toggle="dropdown"> Edit Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop left-arrow mt10 smart-form mCustomScrollbar h200 integration-box" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Key</label>
											<input type="text" class="form-control field-h40 f-14" value="https://it.pinterest.com/eduncleindia/">
										</div>
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="API Id">
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Id">
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Secret Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Secret Id">
										</div>

										<div class="text-right">
											<a href="#" class="f-16 base-btn default-btn cancelbutton mr5 btn-xs-block mb15 mb-md0">Cancel</a>
											<a href="#" class="f-16 base-btn blue-btn  btn-xs-block">Save API Credentials</a>
										</div>
									</div>
								</div>


							</div>

						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-3 mt15 mt-md30 align-self-stretch d-flex">
						<div class="l-gblue-border p15 p-md30 businesslist-hover relative radius3 w-100">
							<!---- Active Icon----->
							<div class="text-right inte-active-icon">
								<i class="icon-dot s-green-clr f-12"></i>
							</div>

							<div class="mb15 mb-md30 integration-logo-height">
								<img src="../../../../images/integration/getresponse.png" class="img-fluid d-block mx-auto">
							</div>

							<div class="text-center">
								<h4 class="w600 f-14 vd-gblue-clr mb8">	GetResponse</h4>
								<p class="f-12 w400 d-gblue-clr mb20">
									nishant@saglusinfo.com
								</p>
								<div class="f-14 s-green-clr">Integrated</div>
							</div>
							<div class="d-flex my15 mt-md20 mb-md10 dropdown caret-icon-none">

								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block px0 dropdown-toggle integration-box-show" data-toggle="dropdown"><i class="icon-show"></i> View Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop left-arrow mt10 smart-form mCustomScrollbar h200" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Key</label>
											<input type="text" class="form-control field-h40 f-14" value="https://it.pinterest.com/eduncleindia/" disabled>
										</div>
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="API Id" disabled>
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Id" disabled>
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Secret Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Secret Id" disabled>
										</div>

										<div class="text-right">
											<a href="#" class="f-16 base-btn default-btn cancelbutton">Cancel</a>
										</div>
									</div>
								</div>



								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block ml10 mt0"><i class="icon-delete"></i>  Delete</a>
							</div>

							<div class="dropdown caret-icon-none">
								<a href="#" class="base-btn blue-btn  btn-block f-14 dropdown-toggle integration-box-show" data-toggle="dropdown"> Edit Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop left-arrow mt10 smart-form mCustomScrollbar h200 integration-box" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Key</label>
											<input type="text" class="form-control field-h40 f-14" value="https://it.pinterest.com/eduncleindia/">
										</div>
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="API Id">
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Id">
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Secret Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Secret Id">
										</div>

										<div class="text-right">
											<a href="#" class="f-16 base-btn default-btn cancelbutton mr5 btn-xs-block mb15 mb-md0">Cancel</a>
											<a href="#" class="f-16 base-btn blue-btn  btn-xs-block">Save API Credentials</a>
										</div>
									</div>
								</div>


							</div>

						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-3 mt15 mt-md30 align-self-stretch d-flex">
						<div class="l-gblue-border p15 p-md30 businesslist-hover relative radius3 w-100">
							<!---- Active Icon----->
							<div class="text-right inte-active-icon">
								<i class="icon-dot s-green-clr f-12"></i>
							</div>

							<div class="mb15 mb-md30 integration-logo-height">
								<img src="../../../../images/integration/aweber.png" class="img-fluid d-block mx-auto">
							</div>

							<div class="text-center">
								<h4 class="w600 f-14 vd-gblue-clr mb8">AWeber</h4>
								<p class="f-12 w400 d-gblue-clr mb20">
									nishant@saglusinfo.com
								</p>
								<div class="f-14 s-green-clr">Integrated</div>
							</div>
							<div class="d-flex my15 mt-md20 mb-md10 dropdown caret-icon-none">

								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block px0 dropdown-toggle integration-box-show" data-toggle="dropdown"><i class="icon-show"></i> View Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop right-arrow dropdown-menu-right mt10 smart-form mCustomScrollbar h200" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Key</label>
											<input type="text" class="form-control field-h40 f-14" value="https://it.pinterest.com/eduncleindia/" disabled>
										</div>
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="API Id" disabled>
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Id" disabled>
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Secret Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Secret Id" disabled>
										</div>

										<div class="text-right">
											<a href="#" class="f-16 base-btn default-btn cancelbutton">Cancel</a>
										</div>
									</div>
								</div>



								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block ml10 mt0"><i class="icon-delete"></i>  Delete</a>
							</div>

							<div class="dropdown caret-icon-none">
								<a href="#" class="base-btn blue-btn  btn-block f-14 dropdown-toggle integration-box-show" data-toggle="dropdown"> Edit Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop right-arrow dropdown-menu-right mt10 smart-form mCustomScrollbar h200 integration-box" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Key</label>
											<input type="text" class="form-control field-h40 f-14" value="https://it.pinterest.com/eduncleindia/">
										</div>
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="API Id">
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Id">
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Secret Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Secret Id">
										</div>

										<div class="text-right">
											<a href="#" class="f-16 base-btn default-btn cancelbutton mr5 btn-xs-block mb15 mb-md0">Cancel</a>
											<a href="#" class="f-16 base-btn blue-btn  btn-xs-block">Save API Credentials</a>
										</div>
									</div>

								</div>


							</div>

						</div>
					</div>

				</div>

				<div class="row mt15 mt-md30">
					<!---- Heading------->
					<div class="col-12 f-14 w500">
						Customer Relationship Management
					</div>
					<!---- Heading end------->
					<div class="col-12 col-md-6 col-lg-3 mt15 mt-md30 align-self-stretch d-flex">
						<div class="l-gblue-border p15 p-md30 businesslist-hover relative radius3 w-100">
							<!---- Active Icon----->
							<div class="text-right inte-active-icon">
								<i class="icon-dot s-green-clr f-12"></i>
							</div>

							<div class="mb15 mb-md30 integration-logo-height">
								<img src="../../../../images/integration/sales-force.png" class="img-fluid d-block mx-auto">
							</div>

							<div class="text-center">
								<h4 class="w600 f-14 vd-gblue-clr mb8">	Salesforce</h4>
								<p class="f-12 w400 d-gblue-clr mb20">
									sachin@saglusinfo.com
								</p>
								<div class="f-14 s-green-clr">Integrated</div>
							</div>
							<div class="d-flex my15 mt-md20 mb-md10 dropdown caret-icon-none">

								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block px0 dropdown-toggle integration-box-show" data-toggle="dropdown"><i class="icon-show"></i> View Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop left-arrow mt10 smart-form mCustomScrollbar h200" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Key</label>
											<input type="text" class="form-control field-h40 f-14" value="https://it.pinterest.com/eduncleindia/" disabled>
										</div>
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="API Id" disabled>
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Id" disabled>
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Secret Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Secret Id" disabled>
										</div>

										<div class="text-right">
											<a href="#" class="f-16 base-btn default-btn cancelbutton">Cancel</a>
										</div>
									</div>
								</div>



								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block ml10 mt0"><i class="icon-delete"></i>  Delete</a>
							</div>

							<div class="dropdown caret-icon-none">
								<a href="#" class="base-btn blue-btn  btn-block f-14 dropdown-toggle integration-box-show" data-toggle="dropdown"> Edit Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop left-arrow mt10 smart-form mCustomScrollbar h200 integration-box" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Key</label>
											<input type="text" class="form-control field-h40 f-14" value="https://it.pinterest.com/eduncleindia/">
										</div>
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="API Id">
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Id">
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Secret Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Secret Id">
										</div>

										<div class="text-right">
											<a href="#" class="f-16 base-btn default-btn cancelbutton mr5 btn-xs-block mb15 mb-md0">Cancel</a>
											<a href="#" class="f-16 base-btn blue-btn btn-xs-block">Save API Credentials</a>
										</div>
									</div>
								</div>


							</div>

						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-3 mt15 mt-md30 align-self-stretch d-flex">
						<div class="l-gblue-border p15 p-md30 businesslist-hover relative radius3 w-100">
							<!---- Active Icon----->
							<div class="text-right inte-active-icon">
								<i class="icon-dot s-green-clr f-12"></i>
							</div>

							<div class="mb15 mb-md30 integration-logo-height">
								<img src="../../../../images/integration/hubspot.png" class="img-fluid d-block mx-auto">
							</div>

							<div class="text-center">
								<h4 class="w600 f-14 vd-gblue-clr mb8">	Hubspot</h4>
								<p class="f-12 w400 d-gblue-clr mb20">
									jay@saglusinfo.com
								</p>
								<div class="f-14 s-green-clr">Integrated</div>
							</div>
							<div class="d-flex my15 mt-md20 mb-md10 dropdown caret-icon-none">

								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block px0 dropdown-toggle integration-box-show" data-toggle="dropdown"><i class="icon-show"></i> View Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop left-arrow mt10 smart-form mCustomScrollbar h200" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Key</label>
											<input type="text" class="form-control field-h40 f-14" value="https://it.pinterest.com/eduncleindia/" disabled>
										</div>
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="API Id" disabled>
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Id" disabled>
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Secret Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Secret Id" disabled>
										</div>

										<div class="text-right">
											<a href="#" class="f-16 base-btn default-btn cancelbutton">Cancel</a>
										</div>
									</div>
								</div>



								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block ml10 mt0"><i class="icon-delete"></i>  Delete</a>
							</div>

							<div class="dropdown caret-icon-none">
								<a href="#" class="base-btn blue-btn  btn-block f-14 dropdown-toggle integration-box-show" data-toggle="dropdown"> Edit Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop left-arrow mt10 smart-form mCustomScrollbar h200 integration-box" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Key</label>
											<input type="text" class="form-control field-h40 f-14" value="https://it.pinterest.com/eduncleindia/">
										</div>
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="API Id">
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Id">
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Secret Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Secret Id">
										</div>

										<div class="text-right">
											<a href="#" class="f-16 base-btn default-btn cancelbutton mr5 btn-xs-block mb15 mb-md0">Cancel</a>
											<a href="#" class="f-16 base-btn blue-btn btn-xs-block">Save API Credentials</a>
										</div>
									</div>
								</div>


							</div>

						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-3 mt15 mt-md30 align-self-stretch d-flex">
						<div class="l-gblue-border p15 p-md30 businesslist-hover relative radius3 w-100">
							<!---- Active Icon----->
							<div class="text-right inte-active-icon">
								<i class="icon-dot s-green-clr f-12"></i>
							</div>

							<div class="mb15 mb-md30 integration-logo-height">
								<img src="../../../../images/integration/zoho.png" class="img-fluid d-block mx-auto">
							</div>

							<div class="text-center">
								<h4 class="w600 f-14 vd-gblue-clr mb8">	Zoho CRM</h4>
								<p class="f-12 w400 d-gblue-clr mb20">
									nishant@saglusinfo.com
								</p>
								<div class="f-14 s-green-clr">Integrated</div>
							</div>
							<div class="d-flex my15 mt-md20 mb-md10 dropdown caret-icon-none">

								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block px0 dropdown-toggle integration-box-show" data-toggle="dropdown"><i class="icon-show"></i> View Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop left-arrow mt10 smart-form mCustomScrollbar h200" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Key</label>
											<input type="text" class="form-control field-h40 f-14" value="https://it.pinterest.com/eduncleindia/" disabled>
										</div>
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="API Id" disabled>
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Id" disabled>
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Secret Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Secret Id" disabled>
										</div>

										<div class="text-right">
											<a href="#" class="f-16 base-btn default-btn cancelbutton">Cancel</a>
										</div>
									</div>
								</div>



								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block ml10 mt0"><i class="icon-delete"></i>  Delete</a>
							</div>

							<div class="dropdown caret-icon-none">
								<a href="#" class="base-btn blue-btn  btn-block f-14 dropdown-toggle integration-box-show" data-toggle="dropdown"> Edit Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop left-arrow mt10 smart-form mCustomScrollbar h200 integration-box" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Key</label>
											<input type="text" class="form-control field-h40 f-14" value="https://it.pinterest.com/eduncleindia/">
										</div>
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="API Id">
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Id">
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Secret Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Secret Id">
										</div>

										<div class="text-right">
											<a href="#" class="f-16 base-btn default-btn cancelbutton mr5 btn-xs-block mb15 mb-md0">Cancel</a>
											<a href="#" class="f-16 base-btn blue-btn  btn-xs-block">Save API Credentials</a>
										</div>
									</div>
								</div>


							</div>

						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-3 mt15 mt-md30 align-self-stretch d-flex">
						<div class="l-gblue-border p15 p-md30 businesslist-hover relative radius3 w-100">
							<!---- Active Icon----->
							<div class="text-right inte-active-icon">
								<i class="icon-dot s-green-clr f-12"></i>
							</div>

							<div class="mb15 mb-md30 integration-logo-height">
								<img src="../../../../images/integration/insightly.png" class="img-fluid d-block mx-auto">
							</div>

							<div class="text-center">
								<h4 class="w600 f-14 vd-gblue-clr mb8">Insightly</h4>
								<p class="f-12 w400 d-gblue-clr mb20">
									nishant@saglusinfo.com
								</p>
								<div class="f-14 s-green-clr">Integrated</div>
							</div>
							<div class="d-flex my15 mt-md20 mb-md10 dropdown caret-icon-none">

								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block px0 dropdown-toggle integration-box-show" data-toggle="dropdown"><i class="icon-show"></i> View Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop right-arrow dropdown-menu-right mt10 smart-form mCustomScrollbar h200" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Key</label>
											<input type="text" class="form-control field-h40 f-14" value="https://it.pinterest.com/eduncleindia/" disabled>
										</div>
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="API Id" disabled>
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Id" disabled>
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Secret Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Secret Id" disabled>
										</div>

										<div class="text-right">
											<a href="#" class="f-16 base-btn default-btn cancelbutton">Cancel</a>
										</div>
									</div>
								</div>



								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block ml10 mt0"><i class="icon-delete"></i>  Delete</a>
							</div>

							<div class="dropdown caret-icon-none">
								<a href="#" class="base-btn blue-btn  btn-block f-14 dropdown-toggle integration-box-show" data-toggle="dropdown"> Edit Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop right-arrow dropdown-menu-right mt10 smart-form mCustomScrollbar h200 integration-box" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Key</label>
											<input type="text" class="form-control field-h40 f-14" value="https://it.pinterest.com/eduncleindia/">
										</div>
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="API Id">
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Id">
										</div>

										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">Client Secret Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Secret Id">
										</div>

										<div class="text-right">
											<a href="#" class="f-16 base-btn default-btn cancelbutton mr5 btn-xs-block mb15 mb-md0">Cancel</a>
											<a href="#" class="f-16 base-btn blue-btn  btn-xs-block">Save API Credentials</a>
										</div>
									</div>

								</div>


							</div>

						</div>
					</div>

				</div>
				
				
				<div class="row mt15 mt-md30">
					<!---- Heading------->
					<div class="col-12 f-14 w500">
						Automation
					</div>
					<!---- Heading end------->
					<div class="col-12 col-md-6 col-lg-3 mt15 mt-md30 align-self-stretch d-flex">
						<div class="l-gblue-border p15 p-md30 businesslist-hover relative radius3 w-100">
							<!---- Active Icon----->
							<div class="text-right inte-active-icon">
								<i class="icon-dot s-green-clr f-12"></i>
							</div>

							<div class="mb15 mb-md30 integration-logo-height">
								<img src="../../../../images/integration/Zapier.png" class="img-fluid d-block mx-auto">
							</div>

							<div class="text-center">
								<h4 class="w600 f-14 vd-gblue-clr mb8">	Zapier</h4>
								<p class="f-12 w400 d-gblue-clr mb20">
									sachin@saglusinfo.com
								</p>
								<div class="f-14 s-green-clr">Integrated</div>
							</div>
							<div class="d-flex my15 mt-md20 mb-md10 dropdown caret-icon-none">

								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block px0 dropdown-toggle integration-box-show" data-toggle="dropdown"><i class="icon-show"></i> View Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop left-arrow mt10 smart-form mCustomScrollbar h200" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Key</label>
											<input type="text" class="form-control field-h40 f-14" value="2056b9-38d703-e8eb93-8b70fbd9" disabled>
										</div>

										<div class="text-right">
											<a href="#" class="f-16 base-btn default-btn cancelbutton">Cancel</a>
										</div>
									</div>
								</div>



								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block ml10 mt0"><i class="icon-delete"></i>  Delete</a>
							</div>

							<div class="dropdown caret-icon-none">
								<a href="#" class="base-btn blue-btn  btn-block f-14 dropdown-toggle integration-box-show" data-toggle="dropdown"> Edit Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop left-arrow mt10 smart-form mCustomScrollbar h200 integration-box" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Key</label>
											<input type="text" class="form-control field-h40 f-14" value="2056b9-38d703-e8eb93-8b70fbd9">
										</div>
										
										<div class="text-right">
											<a href="#" class="f-16 base-btn blue-btn mr5 btn-xs-block mb15 mb-md0">copy</a>
											<a href="#" class="f-16 base-btn default-btn btn-xs-block">Regenerate</a>
										</div>
									</div>
								</div>


							</div>

						</div>
					</div>
				
				</div>



				<div class="row mt15 mt-md30">
					<!---- Heading------->
					<div class="col-12 f-14 w500">
						Content Provider
					</div>
					<!---- Heading end------->
					<div class="col-12 col-md-6 col-lg-3 mt15 mt-md30 align-self-stretch d-flex">
						<div class="l-gblue-border p15 p-md30 businesslist-hover relative radius3 w-100">
							<!---- Active Icon----->
							<div class="text-right inte-active-icon">
								<i class="icon-dot s-green-clr f-12"></i>
							</div>

							<div class="mb15 mb-md30 integration-logo-height">
								<img src="../../../../images/integration/Pixabay.png" class="img-fluid d-block mx-auto">
							</div>

							<div class="text-center">
								<h4 class="w600 f-14 vd-gblue-clr mb8">	Pixabay</h4>
								<p class="f-12 w400 d-gblue-clr mb20">
									sachin@saglusinfo.com
								</p>
								<div class="f-14 s-green-clr">Integrated</div>
							</div>
							<div class="d-flex my15 mt-md20 mb-md10 dropdown caret-icon-none">

								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block px0 dropdown-toggle integration-box-show" data-toggle="dropdown"><i class="icon-show"></i> View Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop left-arrow mt10 smart-form mCustomScrollbar h200" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Key</label>
											<input type="text" class="form-control field-h40 f-14" value="2056b9-38d703-e8eb93-8b70fbd9" disabled>
										</div>

										<div class="text-right">
											<a href="#" class="f-16 base-btn default-btn cancelbutton">Cancel</a>
										</div>
									</div>
								</div>



								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block ml10 mt0"><i class="icon-delete"></i>  Delete</a>
							</div>

							<div class="dropdown caret-icon-none">
								<a href="#" class="base-btn blue-btn  btn-block f-14 dropdown-toggle integration-box-show" data-toggle="dropdown"> Edit Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop left-arrow mt10 smart-form mCustomScrollbar h200 integration-box" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Key</label>
											<input type="text" class="form-control field-h40 f-14" value="2056b9-38d703-e8eb93-8b70fbd9">
										</div>
										
										<div class="text-right">
											<a href="#" class="f-16 base-btn blue-btn mr5 btn-xs-block mb15 mb-md0">copy</a>
											<a href="#" class="f-16 base-btn default-btn btn-xs-block">Regenerate</a>
										</div>
									</div>
								</div>


							</div>

						</div>
					</div>
				
				
					<div class="col-12 col-md-6 col-lg-3 mt15 mt-md30 align-self-stretch d-flex">
						<div class="l-gblue-border p15 p-md30 businesslist-hover relative radius3 w-100">
							<!---- Active Icon----->
							<div class="text-right inte-active-icon">
								<i class="icon-dot s-green-clr f-12"></i>
							</div>

							<div class="mb15 mb-md30 integration-logo-height">
								<img src="../../../../images/integration/pexels.png" class="img-fluid d-block mx-auto">
							</div>

							<div class="text-center">
								<h4 class="w600 f-14 vd-gblue-clr mb8">	Pexels</h4>
								<p class="f-12 w400 d-gblue-clr mb20">
									sachin@saglusinfo.com
								</p>
								<div class="f-14 s-green-clr">Integrated</div>
							</div>
							<div class="d-flex my15 mt-md20 mb-md10 dropdown caret-icon-none">

								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block px0 dropdown-toggle integration-box-show" data-toggle="dropdown"><i class="icon-show"></i> View Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop left-arrow mt10 smart-form mCustomScrollbar h200" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Key</label>
											<input type="text" class="form-control field-h40 f-14" value="2056b9-38d703-e8eb93-8b70fbd9" disabled>
										</div>

										<div class="text-right">
											<a href="#" class="f-16 base-btn default-btn cancelbutton">Cancel</a>
										</div>
									</div>
								</div>



								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block ml10 mt0"><i class="icon-delete"></i>  Delete</a>
							</div>

							<div class="dropdown caret-icon-none">
								<a href="#" class="base-btn blue-btn  btn-block f-14 dropdown-toggle integration-box-show" data-toggle="dropdown"> Edit Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop left-arrow mt10 smart-form mCustomScrollbar h200 integration-box" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Key</label>
											<input type="text" class="form-control field-h40 f-14" value="2056b9-38d703-e8eb93-8b70fbd9">
										</div>
										
										<div class="text-right">
											<a href="#" class="f-16 base-btn blue-btn mr5 btn-xs-block mb15 mb-md0">copy</a>
											<a href="#" class="f-16 base-btn default-btn btn-xs-block">Regenerate</a>
										</div>
									</div>
								</div>


							</div>

						</div>
					</div>
					
					
					
					<div class="col-12 col-md-6 col-lg-3 mt15 mt-md30 align-self-stretch d-flex">
						<div class="l-gblue-border p15 p-md30 businesslist-hover relative radius3 w-100">
							<!---- Active Icon----->
							<div class="text-right inte-active-icon">
								<i class="icon-dot s-green-clr f-12"></i>
							</div>

							<div class="mb15 mb-md30 integration-logo-height">
								<img src="../../../../images/integration/shutterstock.png" class="img-fluid d-block mx-auto">
							</div>

							<div class="text-center">
								<h4 class="w600 f-14 vd-gblue-clr mb8">	Shutterstock</h4>
								<p class="f-12 w400 d-gblue-clr mb20">
									sachin@saglusinfo.com
								</p>
								<div class="f-14 s-green-clr">Integrated</div>
							</div>
							<div class="d-flex my15 mt-md20 mb-md10 dropdown caret-icon-none">

								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block px0 dropdown-toggle integration-box-show" data-toggle="dropdown"><i class="icon-show"></i> View Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop left-arrow mt10 smart-form mCustomScrollbar h200" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Key</label>
											<input type="text" class="form-control field-h40 f-14" value="2056b9-38d703-e8eb93-8b70fbd9" disabled>
										</div>

										<div class="text-right">
											<a href="#" class="f-16 base-btn default-btn cancelbutton">Cancel</a>
										</div>
									</div>
								</div>



								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block ml10 mt0"><i class="icon-delete"></i>  Delete</a>
							</div>

							<div class="dropdown caret-icon-none">
								<a href="#" class="base-btn blue-btn  btn-block f-14 dropdown-toggle integration-box-show" data-toggle="dropdown"> Edit Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop left-arrow mt10 smart-form mCustomScrollbar h200 integration-box" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										<div class="form-group">
											<label for="api key" class="f-14 d-gblue-clr">API Key</label>
											<input type="text" class="form-control field-h40 f-14" value="2056b9-38d703-e8eb93-8b70fbd9">
										</div>
										
										<div class="text-right">
											<a href="#" class="f-16 base-btn blue-btn mr5 btn-xs-block mb15 mb-md0">copy</a>
											<a href="#" class="f-16 base-btn default-btn btn-xs-block">Regenerate</a>
										</div>
									</div>
								</div>


							</div>

						</div>
					</div>
				
				</div>
				





				<div class="row mt15 mt-md30">
					<!---- Heading------->
					<div class="col-12 f-14 w500">
						Drives
					</div>
					<!---- Heading end------->
					<div class="col-12 col-md-6 col-lg-3 mt15 mt-md30 align-self-stretch d-flex">
						<div class="l-gblue-border p15 p-md30 businesslist-hover relative radius3 w-100">
							<!---- Active Icon----->
							<div class="text-right inte-active-icon">
								<i class="icon-dot s-green-clr f-12"></i>
							</div>

							<div class="mb15 mb-md30 integration-logo-height">
								<img src="../../../../images/integration/drive.png" class="img-fluid d-block mx-auto">
							</div>

							<div class="text-center">
								<h4 class="w600 f-14 vd-gblue-clr mb8">	Google Drive</h4>
								<p class="f-12 w400 d-gblue-clr mb20">
									sachin@saglusinfo.com
								</p>
								<div class="f-14 s-green-clr">Integrated</div>
							</div>
							
							
							<div class="d-flex my15 mt-md20 mb-md10 dropdown caret-icon-none">

								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block px0 dropdown-toggle integration-box-show" data-toggle="dropdown"><i class="icon-show"></i> View Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop left-arrow mt10 smart-form mCustomScrollbar h200" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										
										<div class="form-group">
											<label for="client key" class="f-14 d-gblue-clr">Client Id</label>
											<input type="text" class="form-control field-h40 f-14" value="ABCDED-5048" placeholder="Client Id" disabled>
										</div>

										<div class="form-group">
											<label for="secret id" class="f-14 d-gblue-clr">Client Secret Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Enter Client Secret Id" disabled>
										</div>

										<div class="form-group">
											<label for="client id" class="f-14 d-gblue-clr">Redirect URL</label>
											<input type="text" class="form-control field-h40 f-14" placeholder="Enter redirect URL" value="">
										</div>
										<div class="text-right">
											<a href="#" class="f-16 base-btn default-btn cancelbutton">Cancel</a>
										</div>
									</div>
								</div>



								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block ml10 mt0"><i class="icon-delete"></i>  Delete</a>
							</div>

							<div class="dropdown caret-icon-none">
								<a href="#" class="base-btn blue-btn  btn-block f-14 dropdown-toggle integration-box-show" data-toggle="dropdown"> Edit Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop left-arrow mt10 smart-form mCustomScrollbar h200 integration-box" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										
										<div class="form-group">
											<label for="client key" class="f-14 d-gblue-clr">Client Id</label>
											<input type="text" class="form-control field-h40 f-14" value="ABCDED-5048" placeholder="Client Id" >
										</div>

										<div class="form-group">
											<label for="secret id" class="f-14 d-gblue-clr">Client Secret Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Secret Id" >
										</div>

										<div class="form-group">
											<label for="client id" class="f-14 d-gblue-clr">Redirect URL</label>
											<input type="text" class="form-control field-h40 f-14" placeholder="Enter redirect URL" value="">
										</div>
										<div class="text-right">
											<a href="#" class="f-16 base-btn default-btn cancelbutton">Cancel</a>
										</div>
									</div>
								</div>


							</div>

						</div>
					</div>
				
				
					<div class="col-12 col-md-6 col-lg-3 mt15 mt-md30 align-self-stretch d-flex">
						<div class="l-gblue-border p15 p-md30 businesslist-hover relative radius3 w-100">
							<!---- Active Icon----->
							<div class="text-right inte-active-icon">
								<i class="icon-dot s-green-clr f-12"></i>
							</div>

							<div class="mb15 mb-md30 integration-logo-height">
								<img src="../../../../images/integration/onedrive.png" class="img-fluid d-block mx-auto">
							</div>

							<div class="text-center">
								<h4 class="w600 f-14 vd-gblue-clr mb8">	OneDrive</h4>
								<p class="f-12 w400 d-gblue-clr mb20">
									sachin@saglusinfo.com
								</p>
								<div class="f-14 s-green-clr">Integrated</div>
							</div>
							
							
							<div class="d-flex my15 mt-md20 mb-md10 dropdown caret-icon-none">

								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block px0 dropdown-toggle integration-box-show" data-toggle="dropdown"><i class="icon-show"></i> View Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop left-arrow mt10 smart-form mCustomScrollbar h200" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										
										<div class="form-group">
											<label for="client key" class="f-14 d-gblue-clr">Client Id</label>
											<input type="text" class="form-control field-h40 f-14" value="ABCDED-5048" placeholder="Client Id" disabled>
										</div>

										<div class="form-group">
											<label for="secret id" class="f-14 d-gblue-clr">Client Secret Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Enter Client Secret Id" disabled>
										</div>

										<div class="form-group">
											<label for="client id" class="f-14 d-gblue-clr">Redirect URL</label>
											<input type="text" class="form-control field-h40 f-14" placeholder="Enter redirect URL" value="">
										</div>
										<div class="text-right">
											<a href="#" class="f-16 base-btn default-btn cancelbutton">Cancel</a>
										</div>
									</div>
								</div>



								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block ml10 mt0"><i class="icon-delete"></i>  Delete</a>
							</div>

							<div class="dropdown caret-icon-none">
								<a href="#" class="base-btn blue-btn  btn-block f-14 dropdown-toggle integration-box-show" data-toggle="dropdown"> Edit Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop left-arrow mt10 smart-form mCustomScrollbar h200 integration-box" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										
										<div class="form-group">
											<label for="client key" class="f-14 d-gblue-clr">Client Id</label>
											<input type="text" class="form-control field-h40 f-14" value="ABCDED-5048" placeholder="Client Id" >
										</div>

										<div class="form-group">
											<label for="secret id" class="f-14 d-gblue-clr">Client Secret Id</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Client Secret Id" >
										</div>

										<div class="form-group">
											<label for="client id" class="f-14 d-gblue-clr">Redirect URL</label>
											<input type="text" class="form-control field-h40 f-14" placeholder="Enter redirect URL" value="">
										</div>
										<div class="text-right">
											<a href="#" class="f-16 base-btn default-btn cancelbutton">Cancel</a>
										</div>
									</div>
								</div>


							</div>

						</div>
					</div>
					
					
					
					<div class="col-12 col-md-6 col-lg-3 mt15 mt-md30 align-self-stretch d-flex">
						<div class="l-gblue-border p15 p-md30 businesslist-hover relative radius3 w-100">
							<!---- Active Icon----->
							<div class="text-right inte-active-icon">
								<i class="icon-dot s-green-clr f-12"></i>
							</div>

							<div class="mb15 mb-md30 integration-logo-height">
								<img src="../../../../images/integration/dropbox.png" class="img-fluid d-block mx-auto">
							</div>

							<div class="text-center">
								<h4 class="w600 f-14 vd-gblue-clr mb8">	Dropbox</h4>
								<p class="f-12 w400 d-gblue-clr mb20">
									sachin@saglusinfo.com
								</p>
								<div class="f-14 s-green-clr">Integrated</div>
							</div>
							
							
							<div class="d-flex my15 mt-md20 mb-md10 dropdown caret-icon-none">

								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block px0 dropdown-toggle integration-box-show" data-toggle="dropdown"><i class="icon-show"></i> View Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop left-arrow mt10 smart-form mCustomScrollbar h200" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										
										<div class="form-group">
											<label for="client key" class="f-14 d-gblue-clr">API Key</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Enter API Key" disabled>
										</div>

										<div class="form-group">
											<label for="secret id" class="f-14 d-gblue-clr">App Secret</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Enter App Secret" disabled>
										</div>

										<div class="form-group">
											<label for="client id" class="f-14 d-gblue-clr">Redirect URL</label>
											<input type="text" class="form-control field-h40 f-14" placeholder="Enter redirect URL" value="">
										</div>
										<div class="text-right">
											<a href="#" class="f-16 base-btn default-btn cancelbutton">Cancel</a>
										</div>
									</div>
								</div>



								<a href="#" class="base-btn default-btn btn-h30 f-14 btn-block ml10 mt0"><i class="icon-delete"></i>  Delete</a>
							</div>

							<div class="dropdown caret-icon-none">
								<a href="#" class="base-btn blue-btn  btn-block f-14 dropdown-toggle integration-box-show" data-toggle="dropdown"> Edit Details</a>

								<div class="dropdown-menu stoppropagation integration-view-detail-drop left-arrow mt10 smart-form mCustomScrollbar h200 integration-box" data-mcs-theme="inset-3">
									<div class="p15 p-md30">
										
										<div class="form-group">
											<label for="client key" class="f-14 d-gblue-clr">API Key</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Enter API Key" >
										</div>

										<div class="form-group">
											<label for="secret id" class="f-14 d-gblue-clr">App Secret</label>
											<input type="text" class="form-control field-h40 f-14" value="" placeholder="Enter App Secret" >
										</div>

										<div class="form-group">
											<label for="client id" class="f-14 d-gblue-clr">Redirect URL</label>
											<input type="text" class="form-control field-h40 f-14" placeholder="Enter redirect URL" value="">
										</div>
										<div class="text-right">
											<a href="#" class="f-16 base-btn default-btn cancelbutton">Cancel</a>
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


<!------- Smart Footer Include File---------->
<?php include '../includes/dcp-footer.php'; ?>
<!------- Smart Footer Include File end ---------->