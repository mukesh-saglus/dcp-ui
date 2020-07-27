<?php include '../includes/smart-header.php'; ?>
<div class="container-fluid p15 p-md30">
	<div class="row">
		<div class="col-12 col-md-6 text-center text-md-left">
			<span class="f-20 f-md-24 lato-font">getvideowhizz.com </span> &nbsp; 
			<!-- <span class="lightgrey">
				<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
				<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			</span> -->
			<!-- <p class="gblue-clr f-14 w400 mt5">Install DotcomPal on your website</p> -->
		</div>
		<div class="col-12 col-md-6 text-center text-md-right mt-sm0 mt20">
			<a href="#" class="base-btn blue-btn" data-toggle="modal" data-target="#addnewemailModal">Add New Email</a> &nbsp;&nbsp;
			<a href="#" class="base-btn default-btn">Back</a>
		</div>
	</div>

	<div class="row mt-sm30">
		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion1" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#fromReplyEmail" aria-expanded="false">
						<a class="card-title lato-font">&nbsp; Add From & Reply Email</a>
					</div>
					<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="fromReplyEmail" class="collapse" style="">
						<div class="card-body">
							<div class="row mb-md15 mb10 h-100 d-flex align-items-center">
								<div class="col-12 col-md-6 col-lg-6 col-xl-5 mt15 mt-md0">
									naved@getvideowhizz.
								</div>
								<div class="col-4 col-md-1 col-sm-2 col-lg-2 col-xl-1 pl-md0 mt20 mt-md10 text-md-right">
									<a href="#" class="base-btn btn-h25 disabled-btn">Verified</a>
								</div>
								<div class="col-1 col-md-1 col-sm-1 col-lg-2 col-xl-1 mt20 mt-md10 text-left">
									<ul class="table-action">
			                        	<li class="action-menu">
			                        		<a href="javascript:void(0)" class="action-item" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i></a>
			                        	</li>
			                        </ul>
								</div>
							</div>
							<div class="row mb-md15 mb10 h-100 d-flex align-items-center">
								<div class="col-12 col-md-6 col-lg-6 col-xl-5 mt15 mt-md0">
									naved@getvideowhizz.com
								</div>
								<div class="col-4 col-md-1 col-sm-2 col-lg-2 col-xl-1 pl-md0 mt20 mt-md10 text-md-right">
									<a href="#" class="base-btn btn-h25 disabled-btn">Verified</a>
								</div>
								<div class="col-1 col-md-1 col-sm-1 col-lg-2 col-xl-1 mt20 mt-md10 text-left">
									<ul class="table-action">
			                        	<li class="action-menu">
			                        		<a href="javascript:void(0)" class="action-item" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i></a>
			                        	</li>
			                        </ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion2" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#spf" aria-expanded="false">
						<a class="card-title lato-font">&nbsp; SPF</a>
					</div>
					<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="spf" class="collapse" style="">
						<div class="card-body">
							<div class="row mb-md30 mb10 h-100 d-flex align-items-center">
								<div class="col-12 col-md-6 col-lg-6 col-xl-5 mt15 mt-md0 smart-form">
									<textarea class="form-control" rows="4" placeholder="">Hostname: @ or getvideowhizz.com Value: v=spf1 include:_spf.xmails.io +all</textarea>
								</div>
								<div class="col-4 col-md-1 col-sm-2 col-lg-2 col-xl-1 pl-md0 mt20 mt-md10 text-md-right">
									<a href="#" class="base-btn btn-h25 disabled-btn">Verified</a>
								</div>
								<div class="col-3 col-md-1 col-sm-1 col-lg-2 col-xl-1 mt20 mt-md10 text-left">
									<i class="fa fa-check s-green-clr" aria-hidden="true"></i>
								</div>

								<div class="col-12">
									<p class="mt25 f-16">
										Note - Create a TXT Record in the Domain cPanel and then enter the above details.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion3" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#dkim" aria-expanded="false">
						<a class="card-title lato-font">&nbsp; DKIM</a>
					</div>
					<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="dkim" class="collapse" style="">
						<div class="card-body">
							<div class="row mb-md30 mb10 h-100 d-flex align-items-center">
								<div class="col-12 col-md-6 col-lg-6 col-xl-5 mt15 mt-md0 smart-form">
									<textarea class="form-control" rows="4" placeholder="">Hostname: xmails._domainkey. Value: key1.xmails.io</textarea>
								</div>
								<div class="col-4 col-sm-2 col-md-1 col-lg-2 col-xl-1 pl-md0 mt20 mt-md10 text-md-right">
									<a href="#" class="base-btn btn-h25 disabled-btn">Verified</a>
								</div>
								<div class="col-3 col-sm-1 col-md-1 col-lg-2 col-xl-1 mt20 mt-md10 text-left">
									<i class="fa fa-check s-green-clr" aria-hidden="true"></i>
								</div>

								<div class="col-12">
									<p class="mt25 f-16">
										Note - Create a TXT Record in the Domain cPanel and then enter the above details.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-12 segment-accordion mt-md20 mt15">
			<div id="accordion4" class="accordion">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#dmarc" aria-expanded="false">
						<a class="card-title lato-font">&nbsp; DMARC</a>
					</div>
					<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="dmarc" class="collapse" style="">
						<div class="card-body">
							<div class="row mb-md30 mb10 h-100 d-flex align-items-center">
								<div class="col-12 col-md-6 col-lg-6 col-xl-5 mt15 mt-md0 smart-form">
									<textarea class="form-control" rows="4" placeholder="">Hostname: _dmarc Value: dmarc.xmails.io</textarea>
								</div>
								<div class="col-4 col-md-1 col-sm-2 col-lg-2 col-xl-1 pl-sm0 mt20 mt-md10 text-md-right">
									<a href="#" class="base-btn btn-h25 disabled-btn">Verified</a>
								</div>
								<div class="col-3 col-md-1 col-sm-1 col-lg-2 col-xl-1 mt20 mt-md10 text-left">
									<i class="fa fa-check s-green-clr" aria-hidden="true"></i>
								</div>

								<div class="col-12">
									<p class="mt25 f-16">
										Note - Create a TXT Record in the Domain cPanel and then enter the above details.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include '../includes/smart-footer.php'; ?>