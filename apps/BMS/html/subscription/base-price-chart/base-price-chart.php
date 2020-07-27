<!------- BMS Main Header Include File---------->
<?php include '../../../../smart/html/includes/smart-header-bms.php'; ?>
<!------- BMS Main Header Include File end---------->

<!------- BMS Stylesheet------=------->
<link rel="stylesheet" href="../../../css/bms.css">
<!-------BMS Stylesheet end---------->


<div class="container-fluid p15 p-md30">

	<!------- Header Start----------->
	<div class="row">
		<div class="col-12 mb15 mb-md30">
			<span class="f-20 f-md-24 lato-font">Base Price Chart</span> &nbsp;
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="gblue-clr f-14 w400 mt5">Here you are manage your all accounts details</p>
		</div>
	</div>
	<!------- Header End ----------->
	
	<!-- Base Price Chart Section -->
	<div class="row smart-form">
		<div class="col-12 segment-accordion">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#Bandwidthtab">
						<a class="card-title lato-font">&nbsp; Bandwidth</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="Bandwidthtab" class="collapse">
						<div class="card-body new-package-form">
							<!--- Bandwidth First Row --->
							<div class="row">
								<div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr">Bandwidth</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30 pr-lg15">
											<div class="input-group">
												<input type="text" class="form-control radiusrb0" placeholder="Bandwidth" value="1">
												<div class="input-group-append">
													<select class="selectpicker f-14">
														<option>Mb</option>
														<option>Gb</option>
													</select>
												</div>
											</div>
											<div class="f-14 mt10 mt-md0 text-center absolute-text2">to</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 pl-lg15 align-self-end">
											<div class="input-group">
												<input type="text" class="form-control radiusrb0" placeholder="Bandwidth" value="10">
												<div class="input-group-append">
													<select class="selectpicker f-14">
														<option>Mb</option>
														<option>Gb</option>
													</select>
												</div>
											</div>
											<div class="label-active smart-checkbox-btn checkbox-strong-blue small-checkbox-btn  d-flex mt5">
											<input id="Unlimited" type="checkbox">
											<label for="Unlimited" class="mb0">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
                                
                                <div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr">Price</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30">
											<div class="input-group">
                                                <input type="text" class="form-control radiusrb0" placeholder="Price" value="50">
                                                <div class="input-group-append">
                                                    <select class="selectpicker f-14">
                                                        <option>$</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="f-14 mt10 mt-md6 text-center absolute-text2">Per</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 align-self-end">
											<div class="input-group">
												<input type="text" class="form-control radiusrb0" placeholder="Price" value="10">
												<div class="input-group-append">
													<select class="selectpicker f-14">
														<option>Mb</option>
														<option>Gb</option>
													</select>
												</div>
											</div>											
										</div>
									</div>
								</div>
                                
								
								<div class="col-8 col-xl-2 col-lg-3 col-md-5 mb15 mb-lg0">
									<label class="d-gblue-clr">Duration</label>
									<select class="selectpicker f-14">
										<option>Monthly</option>
										<option>Half-Yearly</option>
										<option>Yearly</option>
									</select>
								</div>
								<div class="col-4 col-md-2 col-lg-3 col-xl-2 mb15 mb-lg0 mt44">
									<a href="#" class="d-inline-block p-blue-clr segment-add f-16 t-decoration-none"><i class="icon-add-three"></i></a>
								</div>
							</div>
							<!--- Bandwidth Second Row --->
							<div class="row mt15 mt-md20">
								<div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr d-none">Bandwidth</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30 pr-lg15">
											<div class="input-group">
												<input type="text" class="form-control radiusrb0" placeholder="Bandwidth" value="1">
												<div class="input-group-append">
													<select class="selectpicker f-14">
														<option>Mb</option>
														<option>Gb</option>
													</select>
												</div>
											</div>
											<div class="f-14 mt10 mt-md0 text-center absolute-text2">to</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 pl-lg15 align-self-end">
											<div class="input-group">
												<input type="text" class="form-control radiusrb0" placeholder="Bandwidth" value="10" disabled>
												<div class="input-group-append">
													<select class="selectpicker f-14" disabled>
														<option>Mb</option>
														<option>Gb</option>
													</select>
												</div>
											</div>
											<div class="label-active smart-checkbox-btn checkbox-strong-blue small-checkbox-btn  d-flex mt5">
											<input id="Unlimited11" type="checkbox" checked="">
											<label for="Unlimited11" class="mb0">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
                                
                                <div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr d-none">Price</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30">
											<div class="input-group">
                                                <input type="text" class="form-control radiusrb0" placeholder="Price" value="50">
                                                <div class="input-group-append">
                                                    <select class="selectpicker f-14">
                                                        <option>$</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="f-14 mt10 mt-md6 text-center absolute-text2">Per</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 align-self-end">
											<div class="input-group">
												<input type="text" class="form-control radiusrb0" placeholder="Price" value="10">
												<div class="input-group-append">
													<select class="selectpicker f-14">
														<option>Mb</option>
														<option>Gb</option>
													</select>
												</div>
											</div>											
										</div>
									</div>
								</div>
								
								<div class="col-8 col-xl-2 col-lg-3 col-md-5 mb15 mb-lg0">
									<label class="d-gblue-clr d-none">Duration</label>
									<select class="selectpicker f-14">
										<option>Monthly</option>
										<option>Half-Yearly</option>
										<option>Yearly</option>
									</select>
								</div>
								<div class="col-4 col-md-2 col-lg-3 col-xl-2 mb15 mb-lg0 mt18">
									<a href="#" class="d-inline-block d-gblue-clr segment-delete f-16 pr10 pr-md20 t-decoration-none"><i class="icon-delete"></i></a>
									<a href="#" class="d-inline-block p-blue-clr segment-add f-16 t-decoration-none"><i class="icon-add-three"></i></a>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#StorageTab">
						<a class="card-title lato-font">&nbsp; Storage</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="StorageTab" class="collapse">
						<div class="card-body new-package-form">
							<!--- Storage First Row --->
							<div class="row">
								<div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr">Storage</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30 pr-lg15">
											<div class="input-group">
												<input type="text" class="form-control radiusrb0" placeholder="Storage" value="1">
												<div class="input-group-append">
													<select class="selectpicker f-14">
														<option>Mb</option>
														<option>Gb</option>
													</select>
												</div>
											</div>
											<div class="f-14 mt10 mt-md0 text-center absolute-text2">to</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 pl-lg15 align-self-end">
											<div class="input-group">
												<input type="text" class="form-control radiusrb0" placeholder="Storage" value="10">
												<div class="input-group-append">
													<select class="selectpicker f-14">
														<option>Mb</option>
														<option>Gb</option>
													</select>
												</div>
											</div>
											<div class="label-active smart-checkbox-btn checkbox-strong-blue small-checkbox-btn  d-flex mt5">
											<input id="Unlimited2" type="checkbox">
											<label for="Unlimited2" class="mb0">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
                                
                                <div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr">Price</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30">
											<div class="input-group">
                                                <input type="text" class="form-control radiusrb0" placeholder="Price" value="50">
                                                <div class="input-group-append">
                                                    <select class="selectpicker f-14">
                                                        <option>$</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="f-14 mt10 mt-md6 text-center absolute-text2">Per</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 align-self-end">
											<div class="input-group">
												<input type="text" class="form-control radiusrb0" placeholder="Price" value="10">
												<div class="input-group-append">
													<select class="selectpicker f-14">
														<option>Mb</option>
														<option>Gb</option>
													</select>
												</div>
											</div>											
										</div>
									</div>
								</div>
                                
								
								<div class="col-8 col-xl-2 col-lg-3 col-md-5 mb15 mb-lg0">
									<label class="d-gblue-clr">Duration</label>
									<select class="selectpicker f-14">
										<option>Monthly</option>
										<option>Half-Yearly</option>
										<option>Yearly</option>
									</select>
								</div>
								<div class="col-4 col-md-2 col-lg-3 col-xl-2 mb15 mb-lg0 mt44">
									<a href="#" class="d-inline-block p-blue-clr segment-add f-16 t-decoration-none"><i class="icon-add-three"></i></a>
								</div>
							</div>
							<!--- Storage Second Row --->
							<div class="row mt15 mt-md20">
								<div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr d-none">Storage</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30 pr-lg15">
											<div class="input-group">
												<input type="text" class="form-control radiusrb0" placeholder="Storage" value="1">
												<div class="input-group-append">
													<select class="selectpicker f-14">
														<option>Mb</option>
														<option>Gb</option>
													</select>
												</div>
											</div>
											<div class="f-14 mt10 mt-md0 text-center absolute-text2">to</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 pl-lg15 align-self-end">
											<div class="input-group">
												<input type="text" class="form-control radiusrb0" placeholder="Storage" value="10" disabled>
												<div class="input-group-append">
													<select class="selectpicker f-14" disabled>
														<option>Mb</option>
														<option>Gb</option>
													</select>
												</div>
											</div>
											<div class="label-active smart-checkbox-btn checkbox-strong-blue small-checkbox-btn  d-flex mt5">
											<input id="Unlimited3" type="checkbox" checked="">
											<label for="Unlimited3" class="mb0">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
                                
                                <div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr d-none">Price</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30">
											<div class="input-group">
                                                <input type="text" class="form-control radiusrb0" placeholder="Price" value="50">
                                                <div class="input-group-append">
                                                    <select class="selectpicker f-14">
                                                        <option>$</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="f-14 mt10 mt-md6 text-center absolute-text2">Per</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 align-self-end">
											<div class="input-group">
												<input type="text" class="form-control radiusrb0" placeholder="Price" value="10">
												<div class="input-group-append">
													<select class="selectpicker f-14">
														<option>Mb</option>
														<option>Gb</option>
													</select>
												</div>
											</div>											
										</div>
									</div>
								</div>
								
								<div class="col-8 col-xl-2 col-lg-3 col-md-5 mb15 mb-lg0">
									<label class="d-gblue-clr d-none">Duration</label>
									<select class="selectpicker f-14">
										<option>Monthly</option>
										<option>Half-Yearly</option>
										<option>Yearly</option>
									</select>
								</div>
								<div class="col-4 col-md-2 col-lg-3 col-xl-2 mb15 mb-lg0 mt18">
									<a href="#" class="d-inline-block d-gblue-clr segment-delete f-16 pr10 pr-md20 t-decoration-none"><i class="icon-delete"></i></a>
									<a href="#" class="d-inline-block p-blue-clr segment-add f-16 t-decoration-none"><i class="icon-add-three"></i></a>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#ContactsTab">
						<a class="card-title lato-font">&nbsp; Contacts</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="ContactsTab" class="collapse">
						<div class="card-body new-package-form">
							<!--- Contacts First Row --->
							<div class="row">
								<div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr">Contacts</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30 pr-lg15">
											<input type="text" class="form-control" placeholder="Contacts" value="1">
											<div class="f-14 mt10 mt-md0 text-center absolute-text2">to</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 pl-lg15 align-self-end">
											<input type="text" class="form-control" placeholder="Contacts" value="5000">
											
											<div class="label-active smart-checkbox-btn checkbox-strong-blue small-checkbox-btn  d-flex mt5">
											<input id="Unlimited4" type="checkbox">
											<label for="Unlimited4" class="mb0">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
                                
                                <div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr">Price</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30">
											<div class="input-group">
                                                <input type="text" class="form-control radiusrb0" placeholder="Price" value="50">
                                                <div class="input-group-append">
                                                    <select class="selectpicker f-14">
                                                        <option>$</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="f-14 mt10 mt-md6 text-center absolute-text2">Per</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 align-self-end">
											<div class="input-group">
												<input type="text" class="form-control radiusrb0" placeholder="Price" value="1">
												<div class="input-group-append add-custom-input">
													<p class="f-14 align-self-center">Contact</p>
												</div>
											</div>										
										</div>
									</div>
								</div>
                                
								
								<div class="col-8 col-xl-2 col-lg-3 col-md-5 mb15 mb-lg0">
									<label class="d-gblue-clr">Duration</label>
									<select class="selectpicker f-14">
										<option>Monthly</option>
										<option>Half-Yearly</option>
										<option>Yearly</option>
									</select>
								</div>
								<div class="col-4 col-md-2 col-lg-3 col-xl-2 mb15 mb-lg0 mt44">
									<a href="#" class="d-inline-block p-blue-clr segment-add f-16 t-decoration-none"><i class="icon-add-three"></i></a>
								</div>
							</div>
							<!--- Contacts First Row End --->
							<!--- Contacts Second Row --->
							<div class="row mt15 mt-md20">
								<div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr d-none">Contacts</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30 pr-lg15">
											<input type="text" class="form-control" placeholder="Contacts" value="1">
											<div class="f-14 mt10 mt-md0 text-center absolute-text2">to</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 pl-lg15 align-self-end">
											<input type="text" class="form-control" placeholder="Contacts" value="5000" disabled>
											
											<div class="label-active smart-checkbox-btn checkbox-strong-blue small-checkbox-btn  d-flex mt5">
											<input id="Unlimited5" type="checkbox" checked="">
											<label for="Unlimited5" class="mb0">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
                                
                                <div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr d-none">Price</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30">
											<div class="input-group">
                                                <input type="text" class="form-control radiusrb0" placeholder="Price" value="50">
                                                <div class="input-group-append">
                                                    <select class="selectpicker f-14">
                                                        <option>$</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="f-14 mt10 mt-md6 text-center absolute-text2">Per</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 align-self-end">
											<div class="input-group">
												<input type="text" class="form-control radiusrb0" placeholder="Price" value="1">
												<div class="input-group-append add-custom-input">
													<p class="f-14 align-self-center">Contact</p>
												</div>
											</div>										
										</div>
									</div>
								</div>
                                
								
								<div class="col-8 col-xl-2 col-lg-3 col-md-5 mb15 mb-lg0">
									<label class="d-gblue-clr d-none">Duration</label>
									<select class="selectpicker f-14">
										<option>Monthly</option>
										<option>Half-Yearly</option>
										<option>Yearly</option>
									</select>
								</div>
								<div class="col-4 col-md-2 col-lg-3 col-xl-2 mb15 mb-lg0 mt18">
									<a href="#" class="d-inline-block d-gblue-clr segment-delete f-16 pr10 pr-md20 t-decoration-none"><i class="icon-delete"></i></a>
									<a href="#" class="d-inline-block p-blue-clr segment-add f-16 t-decoration-none"><i class="icon-add-three"></i></a>
								</div>
							</div>
							<!--- Contacts Second Row End --->
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#VisitorsTab">
						<a class="card-title lato-font">&nbsp; Visitors</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="VisitorsTab" class="collapse">
						<div class="card-body new-package-form">                            
                            <!--- Visitors First Row --->
							<div class="row">
								<div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr">Visitors</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30 pr-lg15">
											<input type="text" class="form-control" placeholder="Visitors" value="1">
											<div class="f-14 mt10 mt-md0 text-center absolute-text2">to</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 pl-lg15 align-self-end">
											<input type="text" class="form-control" placeholder="Visitors" value="5000">
											
											<div class="label-active smart-checkbox-btn checkbox-strong-blue small-checkbox-btn  d-flex mt5">
											<input id="Unlimited6" type="checkbox">
											<label for="Unlimited6" class="mb0">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
                                
                                <div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr">Price</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30">
											<div class="input-group">
                                                <input type="text" class="form-control radiusrb0" placeholder="Price" value="50">
                                                <div class="input-group-append">
                                                    <select class="selectpicker f-14">
                                                        <option>$</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="f-14 mt10 mt-md6 text-center absolute-text2">Per</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 align-self-end">
											<div class="input-group">
												<input type="text" class="form-control radiusrb0" placeholder="Price" value="1">
												<div class="input-group-append add-custom-input">
													<p class="f-14 align-self-center">Visitor</p>
												</div>
											</div>										
										</div>
									</div>
								</div>
                                
								
								<div class="col-8 col-xl-2 col-lg-3 col-md-5 mb15 mb-lg0">
									<label class="d-gblue-clr">Duration</label>
									<select class="selectpicker f-14">
										<option>Monthly</option>
										<option>Half-Yearly</option>
										<option>Yearly</option>
									</select>
								</div>
								<div class="col-4 col-md-2 col-lg-3 col-xl-2 mb15 mb-lg0 mt44">
									<a href="#" class="d-inline-block p-blue-clr segment-add f-16 t-decoration-none"><i class="icon-add-three"></i></a>
								</div>
							</div>
							<!--- Visitors First Row End --->
							<!--- Visitors Second Row --->
							<div class="row mt15 mt-md20">
								<div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr d-none">Visitors</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30 pr-lg15">
											<input type="text" class="form-control" placeholder="Visitors" value="5000">
											<div class="f-14 mt10 mt-md0 text-center absolute-text2">to</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 pl-lg15 align-self-end">
											<input type="text" class="form-control" placeholder="Visitors" value="20000" disabled>
											
											<div class="label-active smart-checkbox-btn checkbox-strong-blue small-checkbox-btn  d-flex mt5">
											<input id="Unlimited7" type="checkbox" checked="">
											<label for="Unlimited7" class="mb0">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
                                
                                <div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr d-none">Price</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30">
											<div class="input-group">
                                                <input type="text" class="form-control radiusrb0" placeholder="Price" value="50">
                                                <div class="input-group-append">
                                                    <select class="selectpicker f-14">
                                                        <option>$</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="f-14 mt10 mt-md6 text-center absolute-text2">Per</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 align-self-end">
											<div class="input-group">
												<input type="text" class="form-control radiusrb0" placeholder="Price" value="1">
												<div class="input-group-append add-custom-input">
													<p class="f-14 align-self-center">Visitor</p>
												</div>
											</div>										
										</div>
									</div>
								</div>
                                
								
								<div class="col-8 col-xl-2 col-lg-3 col-md-5 mb15 mb-lg0">
									<label class="d-gblue-clr d-none">Duration</label>
									<select class="selectpicker f-14">
										<option>Monthly</option>
										<option>Half-Yearly</option>
										<option>Yearly</option>
									</select>
								</div>
								<div class="col-4 col-md-2 col-lg-3 col-xl-2 mb15 mb-lg0 mt18">
									<a href="#" class="d-inline-block d-gblue-clr segment-delete f-16 pr10 pr-md20 t-decoration-none"><i class="icon-delete"></i></a>
									<a href="#" class="d-inline-block p-blue-clr segment-add f-16 t-decoration-none"><i class="icon-add-three"></i></a>
								</div>
							</div>
							<!--- Visitors Second Row End --->
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#CustomDomainTab">
						<a class="card-title lato-font">&nbsp; Custom Domain</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="CustomDomainTab" class="collapse">
						<div class="card-body new-package-form">							
                            <!--- Custom Domain First Row --->
							<div class="row">
								<div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr">Custom Domain</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30 pr-lg15">
											<input type="text" class="form-control" placeholder="Custom Domain" value="1">
											<div class="f-14 mt10 mt-md0 text-center absolute-text2">to</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 pl-lg15 align-self-end">
											<input type="text" class="form-control" placeholder="Custom Domain" value="5000">
											
											<div class="label-active smart-checkbox-btn checkbox-strong-blue small-checkbox-btn  d-flex mt5">
											<input id="Unlimited8" type="checkbox">
											<label for="Unlimited8" class="mb0">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
                                
                                <div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr">Price</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30">
											<div class="input-group">
                                                <input type="text" class="form-control radiusrb0" placeholder="Price" value="50">
                                                <div class="input-group-append">
                                                    <select class="selectpicker f-14">
                                                        <option>$</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="f-14 mt10 mt-md6 text-center absolute-text2">Per</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 align-self-end">
											<div class="input-group">
												<input type="text" class="form-control radiusrb0" placeholder="Price" value="1">
												<div class="input-group-append add-custom-input px5">
													<p class="f-14 align-self-center">Custom Domain</p>
												</div>
											</div>										
										</div>
									</div>
								</div>
                                
								
								<div class="col-8 col-xl-2 col-lg-3 col-md-5 mb15 mb-lg0">
									<label class="d-gblue-clr">Duration</label>
									<select class="selectpicker f-14">
										<option>Monthly</option>
										<option>Half-Yearly</option>
										<option>Yearly</option>
									</select>
								</div>
								<div class="col-4 col-md-2 col-lg-3 col-xl-2 mb15 mb-lg0 mt44">
									<a href="#" class="d-inline-block p-blue-clr segment-add f-16 t-decoration-none"><i class="icon-add-three"></i></a>
								</div>
							</div>
							<!--- Custom Domain First Row End --->
							<!--- Custom Domain Second Row --->
							<div class="row mt15 mt-md20">
								<div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr d-none">Custom Domain</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30 pr-lg15">
											<input type="text" class="form-control" placeholder="Custom Domain" value="5000">
											<div class="f-14 mt10 mt-md0 text-center absolute-text2">to</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 pl-lg15 align-self-end">
											<input type="text" class="form-control" placeholder="Custom Domain" value="20000" disabled>
											
											<div class="label-active smart-checkbox-btn checkbox-strong-blue small-checkbox-btn  d-flex mt5">
											<input id="Unlimited9" type="checkbox" checked="">
											<label for="Unlimited9" class="mb0">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
                                
                                <div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr d-none">Price</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30">
											<div class="input-group">
                                                <input type="text" class="form-control radiusrb0" placeholder="Price" value="50">
                                                <div class="input-group-append">
                                                    <select class="selectpicker f-14">
                                                        <option>$</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="f-14 mt10 mt-md6 text-center absolute-text2">Per</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 align-self-end">
											<div class="input-group">
												<input type="text" class="form-control radiusrb0" placeholder="Price" value="1">
												<div class="input-group-append add-custom-input px5">
													<p class="f-14 align-self-center">Custom Domain</p>
												</div>
											</div>										
										</div>
									</div>
								</div>
                                
								
								<div class="col-8 col-xl-2 col-lg-3 col-md-5 mb15 mb-lg0">
									<label class="d-gblue-clr d-none">Duration</label>
									<select class="selectpicker f-14">
										<option>Monthly</option>
										<option>Half-Yearly</option>
										<option>Yearly</option>
									</select>
								</div>
								<div class="col-4 col-md-2 col-lg-3 col-xl-2 mb15 mb-lg0 mt18">
									<a href="#" class="d-inline-block d-gblue-clr segment-delete f-16 pr10 pr-md20 t-decoration-none"><i class="icon-delete"></i></a>
									<a href="#" class="d-inline-block p-blue-clr segment-add f-16 t-decoration-none"><i class="icon-add-three"></i></a>
								</div>
							</div>
							<!--- Custom Domain Second Row End --->
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#MailTab">
						<a class="card-title lato-font">&nbsp; Mail</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="MailTab" class="collapse">
						<div class="card-body new-package-form">							
                            <!--- Mail First Row --->
							<div class="row">
								<div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr">Mail</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30 pr-lg15">
											<input type="text" class="form-control" placeholder="Mail" value="1">
											<div class="f-14 mt10 mt-md0 text-center absolute-text2">to</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 pl-lg15 align-self-end">
											<input type="text" class="form-control" placeholder="Mail" value="5000">
											
											<div class="label-active smart-checkbox-btn checkbox-strong-blue small-checkbox-btn  d-flex mt5">
											<input id="Unlimited10" type="checkbox">
											<label for="Unlimited10" class="mb0">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
                                
                                <div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr">Price</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30">
											<div class="input-group">
                                                <input type="text" class="form-control radiusrb0" placeholder="Price" value="50">
                                                <div class="input-group-append">
                                                    <select class="selectpicker f-14">
                                                        <option>$</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="f-14 mt10 mt-md6 text-center absolute-text2">Per</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 align-self-end">
											<div class="input-group">
												<input type="text" class="form-control radiusrb0" placeholder="Price" value="1">
												<div class="input-group-append add-custom-input">
													<p class="f-14 align-self-center">Mail</p>
												</div>
											</div>										
										</div>
									</div>
								</div>
                                
								
								<div class="col-8 col-xl-2 col-lg-3 col-md-5 mb15 mb-lg0">
									<label class="d-gblue-clr">Duration</label>
									<select class="selectpicker f-14">
										<option>Monthly</option>
										<option>Half-Yearly</option>
										<option>Yearly</option>
									</select>
								</div>
								<div class="col-4 col-md-2 col-lg-3 col-xl-2 mb15 mb-lg0 mt44">
									<a href="#" class="d-inline-block p-blue-clr segment-add f-16 t-decoration-none"><i class="icon-add-three"></i></a>
								</div>
							</div>
							<!--- Mail First Row End --->
							<!--- Mail Second Row --->
							<div class="row mt15 mt-md20">
								<div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr d-none">Mail</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30 pr-lg15">
											<input type="text" class="form-control" placeholder="Mail" value="5000">
											<div class="f-14 mt10 mt-md0 text-center absolute-text2">to</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 pl-lg15 align-self-end">
											<input type="text" class="form-control" placeholder="Mail" value="20000" disabled>
											
											<div class="label-active smart-checkbox-btn checkbox-strong-blue small-checkbox-btn  d-flex mt5">
											<input id="Unlimited11" type="checkbox" checked="">
											<label for="Unlimited11" class="mb0">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
                                
                                <div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr d-none">Price</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30">
											<div class="input-group">
                                                <input type="text" class="form-control radiusrb0" placeholder="Price" value="50">
                                                <div class="input-group-append">
                                                    <select class="selectpicker f-14">
                                                        <option>$</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="f-14 mt10 mt-md6 text-center absolute-text2">Per</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 align-self-end">
											<div class="input-group">
												<input type="text" class="form-control radiusrb0" placeholder="Price" value="1">
												<div class="input-group-append add-custom-input">
													<p class="f-14 align-self-center">Mail</p>
												</div>
											</div>										
										</div>
									</div>
								</div>
                                
								
								<div class="col-8 col-xl-2 col-lg-3 col-md-5 mb15 mb-lg0">
									<label class="d-gblue-clr d-none">Duration</label>
									<select class="selectpicker f-14">
										<option>Monthly</option>
										<option>Half-Yearly</option>
										<option>Yearly</option>
									</select>
								</div>
								<div class="col-4 col-md-2 col-lg-3 col-xl-2 mb15 mb-lg0 mt18">
									<a href="#" class="d-inline-block d-gblue-clr segment-delete f-16 pr10 pr-md20 t-decoration-none"><i class="icon-delete"></i></a>
									<a href="#" class="d-inline-block p-blue-clr segment-add f-16 t-decoration-none"><i class="icon-add-three"></i></a>
								</div>
							</div>
							<!--- Mail Second Row End --->
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#PageTab">
						<a class="card-title lato-font">&nbsp; Page</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="PageTab" class="collapse">
						<div class="card-body new-package-form">							
                            <!--- Page First Row --->
							<div class="row">
								<div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr">Page</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30 pr-lg15">
											<input type="text" class="form-control" placeholder="Page" value="1">
											<div class="f-14 mt10 mt-md0 text-center absolute-text2">to</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 pl-lg15 align-self-end">
											<input type="text" class="form-control" placeholder="Page" value="5000">
											
											<div class="label-active smart-checkbox-btn checkbox-strong-blue small-checkbox-btn  d-flex mt5">
											<input id="Unlimited12" type="checkbox">
											<label for="Unlimited12" class="mb0">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
                                
                                <div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr">Price</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30">
											<div class="input-group">
                                                <input type="text" class="form-control radiusrb0" placeholder="Price" value="50">
                                                <div class="input-group-append">
                                                    <select class="selectpicker f-14">
                                                        <option>$</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="f-14 mt10 mt-md6 text-center absolute-text2">Per</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 align-self-end">
											<div class="input-group">
												<input type="text" class="form-control radiusrb0" placeholder="Price" value="1">
												<div class="input-group-append add-custom-input">
													<p class="f-14 align-self-center">Page</p>
												</div>
											</div>										
										</div>
									</div>
								</div>
                                
								
								<div class="col-8 col-xl-2 col-lg-3 col-md-5 mb15 mb-lg0">
									<label class="d-gblue-clr">Duration</label>
									<select class="selectpicker f-14">
										<option>Monthly</option>
										<option>Half-Yearly</option>
										<option>Yearly</option>
									</select>
								</div>
								<div class="col-4 col-md-2 col-lg-3 col-xl-2 mb15 mb-lg0 mt44">
									<a href="#" class="d-inline-block p-blue-clr segment-add f-16 t-decoration-none"><i class="icon-add-three"></i></a>
								</div>
							</div>
							<!--- Page First Row End --->
							<!--- Page Second Row --->
							<div class="row mt15 mt-md20">
								<div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr d-none">Page</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30 pr-lg15">
											<input type="text" class="form-control" placeholder="Page" value="5000">
											<div class="f-14 mt10 mt-md0 text-center absolute-text2">to</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 pl-lg15 align-self-end">
											<input type="text" class="form-control" placeholder="Page" value="20000" disabled>
											
											<div class="label-active smart-checkbox-btn checkbox-strong-blue small-checkbox-btn  d-flex mt5">
											<input id="Unlimited13" type="checkbox" checked="">
											<label for="Unlimited13" class="mb0">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
                                
                                <div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr d-none">Price</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30">
											<div class="input-group">
                                                <input type="text" class="form-control radiusrb0" placeholder="Price" value="50">
                                                <div class="input-group-append">
                                                    <select class="selectpicker f-14">
                                                        <option>$</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="f-14 mt10 mt-md6 text-center absolute-text2">Per</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 align-self-end">
											<div class="input-group">
												<input type="text" class="form-control radiusrb0" placeholder="Price" value="1">
												<div class="input-group-append add-custom-input">
													<p class="f-14 align-self-center">Page</p>
												</div>
											</div>										
										</div>
									</div>
								</div>
                                
								
								<div class="col-8 col-xl-2 col-lg-3 col-md-5 mb15 mb-lg0">
									<label class="d-gblue-clr d-none">Duration</label>
									<select class="selectpicker f-14">
										<option>Monthly</option>
										<option>Half-Yearly</option>
										<option>Yearly</option>
									</select>
								</div>
								<div class="col-4 col-md-2 col-lg-3 col-xl-2 mb15 mb-lg0 mt18">
									<a href="#" class="d-inline-block d-gblue-clr segment-delete f-16 pr10 pr-md20 t-decoration-none"><i class="icon-delete"></i></a>
									<a href="#" class="d-inline-block p-blue-clr segment-add f-16 t-decoration-none"><i class="icon-add-three"></i></a>
								</div>
							</div>
							<!--- Page Second Row End --->
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#VideoTab">
						<a class="card-title lato-font">&nbsp; Video</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="VideoTab" class="collapse">
						<div class="card-body new-package-form">							
                            <!--- Video First Row --->
							<div class="row">
								<div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr">Video</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30 pr-lg15">
											<input type="text" class="form-control" placeholder="Video" value="1">
											<div class="f-14 mt10 mt-md0 text-center absolute-text2">to</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 pl-lg15 align-self-end">
											<input type="text" class="form-control" placeholder="Video" value="5000">
											
											<div class="label-active smart-checkbox-btn checkbox-strong-blue small-checkbox-btn  d-flex mt5">
											<input id="Unlimited14" type="checkbox">
											<label for="Unlimited14" class="mb0">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
                                
                                <div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr">Price</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30">
											<div class="input-group">
                                                <input type="text" class="form-control radiusrb0" placeholder="Price" value="50">
                                                <div class="input-group-append">
                                                    <select class="selectpicker f-14">
                                                        <option>$</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="f-14 mt10 mt-md6 text-center absolute-text2">Per</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 align-self-end">
											<div class="input-group">
												<input type="text" class="form-control radiusrb0" placeholder="Price" value="1">
												<div class="input-group-append add-custom-input">
													<p class="f-14 align-self-center">Video</p>
												</div>
											</div>										
										</div>
									</div>
								</div>
                                
								
								<div class="col-8 col-xl-2 col-lg-3 col-md-5 mb15 mb-lg0">
									<label class="d-gblue-clr">Duration</label>
									<select class="selectpicker f-14">
										<option>Monthly</option>
										<option>Half-Yearly</option>
										<option>Yearly</option>
									</select>
								</div>
								<div class="col-4 col-md-2 col-lg-3 col-xl-2 mb15 mb-lg0 mt44">
									<a href="#" class="d-inline-block p-blue-clr segment-add f-16 t-decoration-none"><i class="icon-add-three"></i></a>
								</div>
							</div>
							<!--- Video First Row End --->
							<!--- Video Second Row --->
							<div class="row mt15 mt-md20">
								<div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr d-none">Video</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30 pr-lg15">
											<input type="text" class="form-control" placeholder="Video" value="5000">
											<div class="f-14 mt10 mt-md0 text-center absolute-text2">to</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 pl-lg15 align-self-end">
											<input type="text" class="form-control" placeholder="Video" value="20000" disabled>
											
											<div class="label-active smart-checkbox-btn checkbox-strong-blue small-checkbox-btn  d-flex mt5">
											<input id="Unlimited15" type="checkbox" checked="">
											<label for="Unlimited15" class="mb0">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
                                
                                <div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr d-none">Price</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30">
											<div class="input-group">
                                                <input type="text" class="form-control radiusrb0" placeholder="Price" value="50">
                                                <div class="input-group-append">
                                                    <select class="selectpicker f-14">
                                                        <option>$</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="f-14 mt10 mt-md6 text-center absolute-text2">Per</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 align-self-end">
											<div class="input-group">
												<input type="text" class="form-control radiusrb0" placeholder="Price" value="1">
												<div class="input-group-append add-custom-input">
													<p class="f-14 align-self-center">Video</p>
												</div>
											</div>										
										</div>
									</div>
								</div>
                                
								
								<div class="col-8 col-xl-2 col-lg-3 col-md-5 mb15 mb-lg0">
									<label class="d-gblue-clr d-none">Duration</label>
									<select class="selectpicker f-14">
										<option>Monthly</option>
										<option>Half-Yearly</option>
										<option>Yearly</option>
									</select>
								</div>
								<div class="col-4 col-md-2 col-lg-3 col-xl-2 mb15 mb-lg0 mt18">
									<a href="#" class="d-inline-block d-gblue-clr segment-delete f-16 pr10 pr-md20 t-decoration-none"><i class="icon-delete"></i></a>
									<a href="#" class="d-inline-block p-blue-clr segment-add f-16 t-decoration-none"><i class="icon-add-three"></i></a>
								</div>
							</div>
							<!--- Video Second Row End --->
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#NotificationTab">
						<a class="card-title lato-font">&nbsp; Notification</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="NotificationTab" class="collapse">
						<div class="card-body new-package-form">                            
                            <!--- Notification First Row --->
							<div class="row">
								<div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr">Notification</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30 pr-lg15">
											<input type="text" class="form-control" placeholder="Notification" value="1">
											<div class="f-14 mt10 mt-md0 text-center absolute-text2">to</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 pl-lg15 align-self-end">
											<input type="text" class="form-control" placeholder="Notification" value="5000">
											
											<div class="label-active smart-checkbox-btn checkbox-strong-blue small-checkbox-btn  d-flex mt5">
											<input id="Unlimited16" type="checkbox">
											<label for="Unlimited16" class="mb0">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
                                
                                <div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr">Price</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30">
											<div class="input-group">
                                                <input type="text" class="form-control radiusrb0" placeholder="Price" value="50">
                                                <div class="input-group-append">
                                                    <select class="selectpicker f-14">
                                                        <option>$</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="f-14 mt10 mt-md6 text-center absolute-text2">Per</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 align-self-end">
											<div class="input-group">
												<input type="text" class="form-control radiusrb0" placeholder="Price" value="1">
												<div class="input-group-append add-custom-input">
													<p class="f-14 align-self-center">Notification</p>
												</div>
											</div>										
										</div>
									</div>
								</div>
                                
								
								<div class="col-8 col-xl-2 col-lg-3 col-md-5 mb15 mb-lg0">
									<label class="d-gblue-clr">Duration</label>
									<select class="selectpicker f-14">
										<option>Monthly</option>
										<option>Half-Yearly</option>
										<option>Yearly</option>
									</select>
								</div>
								<div class="col-4 col-md-2 col-lg-3 col-xl-2 mb15 mb-lg0 mt44">
									<a href="#" class="d-inline-block p-blue-clr segment-add f-16 t-decoration-none"><i class="icon-add-three"></i></a>
								</div>
							</div>
							<!--- Notification First Row End --->
							<!--- Notification Second Row --->
							<div class="row mt15 mt-md20">
								<div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr d-none">Notification</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30 pr-lg15">
											<input type="text" class="form-control" placeholder="Notification" value="5000">
											<div class="f-14 mt10 mt-md0 text-center absolute-text2">to</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 pl-lg15 align-self-end">
											<input type="text" class="form-control" placeholder="Notification" value="20000" disabled>
											
											<div class="label-active smart-checkbox-btn checkbox-strong-blue small-checkbox-btn  d-flex mt5">
											<input id="Unlimited17" type="checkbox" checked="">
											<label for="Unlimited17" class="mb0">Unlimited</label>
											</div>
										</div>
									</div>
								</div>
                                
                                <div class="col-12 col-xl-4 col-lg-6 col-md-10">
									<label class="d-gblue-clr d-none">Price</label>
									<div class="row">
										<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30">
											<div class="input-group">
                                                <input type="text" class="form-control radiusrb0" placeholder="Price" value="50">
                                                <div class="input-group-append">
                                                    <select class="selectpicker f-14">
                                                        <option>$</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="f-14 mt10 mt-md6 text-center absolute-text2">Per</div>
										</div>
										<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 align-self-end">
											<div class="input-group">
												<input type="text" class="form-control radiusrb0" placeholder="Price" value="1">
												<div class="input-group-append add-custom-input">
													<p class="f-14 align-self-center">Notification</p>
												</div>
											</div>										
										</div>
									</div>
								</div>
                                
								
								<div class="col-8 col-xl-2 col-lg-3 col-md-5 mb15 mb-lg0">
									<label class="d-gblue-clr d-none">Duration</label>
									<select class="selectpicker f-14">
										<option>Monthly</option>
										<option>Half-Yearly</option>
										<option>Yearly</option>
									</select>
								</div>
								<div class="col-4 col-md-2 col-lg-3 col-xl-2 mb15 mb-lg0 mt18">
									<a href="#" class="d-inline-block d-gblue-clr segment-delete f-16 pr10 pr-md20 t-decoration-none"><i class="icon-delete"></i></a>
									<a href="#" class="d-inline-block p-blue-clr segment-add f-16 t-decoration-none"><i class="icon-add-three"></i></a>
								</div>
							</div>
							<!--- Notification Second Row End --->
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#UserTab">
						<a class="card-title lato-font">&nbsp; User</a>
					</div>
					 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="UserTab" class="collapse">
						<div class="card-body new-package-form">
							<div class="row">
								<div class="col-12 col-md-5 col-lg-3 mb-md0 mb15">
									<label class="d-gblue-clr">User</label>
									<select class="selectpicker f-14" title="Choose Solution">
										<option value="">Solution 1</option>
										<option value="">Solution 2</option>
										<option value="">Solution 3</option>
										<option value="">Solution 4</option>
									</select>
								</div>
								<div class="col-8 col-md-5 col-lg-3 mb-md0 mb15 hide-package">
									<label class="d-gblue-clr">Package</label>
									<select class="selectpicker f-14" title="Choose Package">
										<option value="">Package 1</option>
										<option value="">Package 2</option>
										<option value="">Package 3</option>
										<option value="">Package 4</option>
									</select>
								</div>
								<div class="col-4 col-md-2 col-lg-2 mb15 mb-lg0 mt44 hide-package">
									<a href="#" class="d-inline-block d-gblue-clr segment-delete f-16 pr10 pr-md20 t-decoration-none"><i class="icon-delete"></i></a>
									<a href="#" class="d-inline-block p-blue-clr segment-add f-16 t-decoration-none"><i class="icon-add-three"></i></a>
								</div>
							</div>
							<div class="row mt-md20 mt15">
								<div class="col-12">
									<div class="row">
										<div class="col-12 col-md-5 col-lg-3 mb-md0 mb15">
											<label class="d-gblue-clr">User</label>
											<select class="selectpicker f-14" title="Choose Solution">
												<option value="">Solution 1</option>
												<option value="">Solution 2</option>
												<option value="">Solution 3</option>
												<option value="">Solution 4</option>
											</select>
										</div>
										<div class="col-8 col-md-5 col-lg-3 mb-md0 mb15">
											<label class="d-gblue-clr">Package</label>
											<select class="selectpicker f-14" title="Choose Package">
												<option value="">Package 1</option>
												<option value="">Package 2</option>
												<option value="">Package 3</option>
												<option value="">Package 4</option>
											</select>
										</div>
										<div class="col-4 col-md-2 col-lg-2 mb15 mb-lg0 mt44">
											<a href="#" class="d-inline-block p-blue-clr segment-add f-16 t-decoration-none"><i class="icon-add-three"></i></a>
										</div>
									</div>
									<!--- User First Row --->
									<div class="row mt15 mt-md20">
										<div class="col-12 col-xl-4 col-lg-6 col-md-10">
											<label class="d-gblue-clr">Number Of User</label>
											<div class="row">
												<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30 pr-lg15">
													<input type="text" class="form-control" placeholder="Number Of User" value="1">
													<div class="f-14 mt10 mt-md0 text-center absolute-text2">to</div>
												</div>
												<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 pl-lg15 align-self-end">
													<input type="text" class="form-control" placeholder="Number Of User" value="5000">
													
													<div class="label-active smart-checkbox-btn checkbox-strong-blue small-checkbox-btn  d-flex mt5">
													<input id="Unlimited18" type="checkbox">
													<label for="Unlimited18" class="mb0">Unlimited</label>
													</div>
												</div>
											</div>
										</div>
										
										<div class="col-12 col-xl-4 col-lg-6 col-md-10">
											<label class="d-gblue-clr">Price</label>
											<div class="row">
												<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30">
													<div class="input-group">
														<input type="text" class="form-control radiusrb0" placeholder="Price" value="50">
														<div class="input-group-append">
															<select class="selectpicker f-14">
																<option>$</option>
															</select>
														</div>
													</div>
													<div class="f-14 mt10 mt-md6 text-center absolute-text2">Per</div>
												</div>
												<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 align-self-end">
													<div class="input-group">
														<input type="text" class="form-control radiusrb0" placeholder="Price" value="1">
														<div class="input-group-append add-custom-input">
															<p class="f-14 align-self-center">user</p>
														</div>
													</div>										
												</div>
											</div>
										</div>
										
										
										<div class="col-8 col-xl-2 col-lg-3 col-md-5 mb15 mb-lg0">
											<label class="d-gblue-clr">Duration</label>
											<select class="selectpicker f-14">
												<option>Monthly</option>
												<option>Half-Yearly</option>
												<option>Yearly</option>
											</select>
										</div>
										<div class="col-4 col-md-2 col-lg-3 col-xl-2 mb15 mb-lg0 mt44">
											<a href="#" class="d-inline-block p-blue-clr segment-add f-16 t-decoration-none"><i class="icon-add-three"></i></a>
										</div>
									</div>
									<!--- User First Row End --->
								</div>
							</div>
							<div class="row mt-md20 mt15">
								<div class="col-12">
									<div class="row">
										<div class="col-12 col-md-5 col-lg-3 mb-md0 mb15">
											<label class="d-gblue-clr d-none">User</label>
											<select class="selectpicker f-14" title="Choose Solution">
												<option value="">Solution 1</option>
												<option value="">Solution 2</option>
												<option value="">Solution 3</option>
												<option value="">Solution 4</option>
											</select>
										</div>
										<div class="col-8 col-md-5 col-lg-3 mb-md0 mb15">
											<label class="d-gblue-clr d-none">Package</label>
											<select class="selectpicker f-14" title="Choose Package">
												<option value="">Package 1</option>
												<option value="">Package 2</option>
												<option value="">Package 3</option>
												<option value="">Package 4</option>
											</select>
										</div>
										<div class="col-4 col-md-2 col-lg-2 mb15 mb-lg0 mt18">
											<a href="#" class="d-inline-block d-gblue-clr segment-delete f-16 pr10 pr-md20 t-decoration-none"><i class="icon-delete"></i></a>
											<a href="#" class="d-inline-block p-blue-clr segment-add f-16 t-decoration-none"><i class="icon-add-three"></i></a>
										</div>
									</div>
									<!--- User First Row --->
									<div class="row mt15 mt-md20">
										<div class="col-12 col-xl-4 col-lg-6 col-md-10">
											<label class="d-gblue-clr">Number Of User</label>
											<div class="row">
												<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30 pr-lg15">
													<input type="text" class="form-control" placeholder="Number Of User" value="1">
													<div class="f-14 mt10 mt-md0 text-center absolute-text2">to</div>
												</div>
												<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 pl-lg15 align-self-end">
													<input type="text" class="form-control" placeholder="Number Of User" value="5000">
													
													<div class="label-active smart-checkbox-btn checkbox-strong-blue small-checkbox-btn  d-flex mt5">
													<input id="Unlimited19" type="checkbox">
													<label for="Unlimited19" class="mb0">Unlimited</label>
													</div>
												</div>
											</div>
										</div>
										
										<div class="col-12 col-xl-4 col-lg-6 col-md-10">
											<label class="d-gblue-clr">Price</label>
											<div class="row">
												<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30">
													<div class="input-group">
														<input type="text" class="form-control radiusrb0" placeholder="Price" value="50">
														<div class="input-group-append">
															<select class="selectpicker f-14">
																<option>$</option>
															</select>
														</div>
													</div>
													<div class="f-14 mt10 mt-md6 text-center absolute-text2">Per</div>
												</div>
												<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 align-self-end">
													<div class="input-group">
														<input type="text" class="form-control radiusrb0" placeholder="Price" value="1">
														<div class="input-group-append add-custom-input">
															<p class="f-14 align-self-center">user</p>
														</div>
													</div>										
												</div>
											</div>
										</div>
										
										
										<div class="col-8 col-xl-2 col-lg-3 col-md-5 mb15 mb-lg0">
											<label class="d-gblue-clr">Duration</label>
											<select class="selectpicker f-14">
												<option>Monthly</option>
												<option>Half-Yearly</option>
												<option>Yearly</option>
											</select>
										</div>
										<div class="col-4 col-md-2 col-lg-3 col-xl-2 mb15 mb-lg0 mt44">
											<a href="#" class="d-inline-block p-blue-clr segment-add f-16 t-decoration-none"><i class="icon-add-three"></i></a>
										</div>
									</div>
									<!--- User First Row End --->
									<!--- User Second Row --->
									<div class="row mt15 mt-md20">
										<div class="col-12 col-xl-4 col-lg-6 col-md-10">
											<label class="d-gblue-clr d-none">Number Of User</label>
											<div class="row">
												<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30 pr-lg15">
													<input type="text" class="form-control" placeholder="Number Of User" value="5000">
													<div class="f-14 mt10 mt-md0 text-center absolute-text2">to</div>
												</div>
												<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 pl-lg15 align-self-end">
													<input type="text" class="form-control" placeholder="Number Of User" value="20000" disabled>
													
													<div class="label-active smart-checkbox-btn checkbox-strong-blue small-checkbox-btn  d-flex mt5">
													<input id="Unlimited20" type="checkbox" checked="">
													<label for="Unlimited20" class="mb0">Unlimited</label>
													</div>
												</div>
											</div>
										</div>
										
										<div class="col-12 col-xl-4 col-lg-6 col-md-10">
											<label class="d-gblue-clr d-none">Price</label>
											<div class="row">
												<div class="col-12 col-md-6 mb10 mb-lg0 pr-md30">
													<div class="input-group">
														<input type="text" class="form-control radiusrb0" placeholder="Price" value="50">
														<div class="input-group-append">
															<select class="selectpicker f-14">
																<option>$</option>
															</select>
														</div>
													</div>
													<div class="f-14 mt10 mt-md6 text-center absolute-text2">Per</div>
												</div>
												<div class="col-12 col-md-6 mb15 mb-lg0 pl-md30 align-self-end">
													<div class="input-group">
														<input type="text" class="form-control radiusrb0" placeholder="Price" value="1">
														<div class="input-group-append add-custom-input">
															<p class="f-14 align-self-center">User</p>
														</div>
													</div>										
												</div>
											</div>
										</div>
										
										
										<div class="col-8 col-xl-2 col-lg-3 col-md-5 mb15 mb-lg0">
											<label class="d-gblue-clr d-none">Duration</label>
											<select class="selectpicker f-14">
												<option>Monthly</option>
												<option>Half-Yearly</option>
												<option>Yearly</option>
											</select>
										</div>
										<div class="col-4 col-md-2 col-lg-3 col-xl-2 mb15 mb-lg0 mt18">
											<a href="#" class="d-inline-block d-gblue-clr segment-delete f-16 pr10 pr-md20 t-decoration-none"><i class="icon-delete"></i></a>
											<a href="#" class="d-inline-block p-blue-clr segment-add f-16 t-decoration-none"><i class="icon-add-three"></i></a>
										</div>
									</div>
									<!--- User Second Row End --->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Update & Save And cancel -->
		<div class="text-right f-16 col-12 mt-md30 mt15">
			<a href="javascript:void(0)" class="base-btn default-btn mr5">Cancel</a>
			<a href="#" class="base-btn blue-btn">Update & Save</a>
		</div>
		
	</div>

</div>

<!------- Smart Footer Include File ---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->