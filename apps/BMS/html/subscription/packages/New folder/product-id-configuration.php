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
		<span class="f-20 f-md-24 lato-font">Demo Package Name</span> &nbsp;
		<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
		<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
		<p class="gblue-clr f-14 w400 mt5">Here you are manage your all accounts details</p>
	</div>
	<div class="col-12">
		<div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md30">
			<div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
				<div class="circle-num"><span><i class="fa fa-check"></i></span></div>
				<div class="title align-self-center">Choose The Feature</div>
				<div class="sep-line align-self-center d-none d-lg-block"></div>
			</div>
			<div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
				<div class="circle-num"><span> 2</span></div>
				<div class="title align-self-center">Add Ons & Prices</div>
				<div class="sep-line align-self-center d-none d-lg-block"></div>
			</div>
			<div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
				<div class="circle-num"><span> 3</span></div>
				<div class="title align-self-center">Product ID Configuration</div>
				<div class="sep-line align-self-center d-none d-lg-block"></div>
			</div>
			<div class="d-flex justify-content-start flex-wrap mr15 mb5">
				<div class="circle-num"><span> 4</span></div>
				<div class="title align-self-center">Preview & Update</div>
				<div class="sep-line align-self-center d-none d-lg-block"></div>
			</div>
		</div>
	</div>
</div>
<!------- Header End ----------->

<!---------- Add Ons Section --------->
<div class="row segment-accordion">
	<div class="col-12 accordion"  id="accordion">
		<!-- Add Ons First--> 
		<div class="row">
			<div class="col-12 col-md-12 col-xl-12">
				<div class="card mb-0 f-16">
					<div class="card-header" data-toggle="collapse" href="#AddOn1" aria-expanded="true">
						<a class="card-title lato-font">&nbsp; Smart Package 1 (Option 1)</a>
					</div>
					<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="AddOn1" class="collapse show" data-parent="#accordion">
						<div class="card-body smart-form">
							<div class="f-14 w500">Smart Package 1 (Option 1) - Price $29 Monthly</div>
							<div class="row align-items-center mt-md30 mt15">
								<div class="col-12 col-md-4 col-lg-3 col-xl-2 f-14 w400">
								JVZoo Product ID
								</div>
								<div class="col-9 col-md-6 col-lg-7 col-xl-5 mt15 mt-md0">
								<input type="text" class="form-control" placeholder="">
								</div>
								<div class="col-3 col-md-2 col-lg-2 col-xl-5 mt10 mt-md0 pl0 pl-md15">
									<img src="../../../images/jvzoo-icon.png" class="img-fluid">
								</div>
							</div>
							<div class="row align-items-center mt-md30 mt15">
								<div class="col-12 col-md-4 col-lg-3 col-xl-2 f-14 w400">
								JV Share Product ID 
								</div>
								<div class="col-9 col-md-6 col-lg-7 col-xl-5 mt15 mt-md0">
								<input type="text" class="form-control" placeholder="">
								</div>
								<div class="col-3 col-md-2 col-lg-2 col-xl-5 mt10 mt-md0 pl0 pl-md15">
									<img src="../../../images/jv-share-icon.png" class="img-fluid">
								</div>
							</div>
							<div class="row align-items-center mt-md30 mt15">
								<div class="col-12 col-md-4 col-lg-3 col-xl-2 f-14 w400">
								Click Bank Product ID 
								</div>
								<div class="col-9 col-md-6 col-lg-7 col-xl-5 mt15 mt-md0">
								<input type="text" class="form-control" placeholder="">
								</div>
								<div class="col-3 col-md-2 col-lg-2 col-xl-5 mt10 mt-md0 pl0 pl-md15">
									<img src="../../../images/bank-icon.png" class="img-fluid">
								</div>
							</div>
							<div class="row align-items-center mt-md30 mt15">
								<div class="col-12 col-md-4 col-lg-3 col-xl-2 f-14 w400">
								Worrior Plus Product ID 
								</div>
								<div class="col-9 col-md-6 col-lg-7 col-xl-5 mt15 mt-md0">
								<input type="text" class="form-control" placeholder="">
								</div>
								<div class="col-3 col-md-2 col-lg-2 col-xl-5 mt10 mt-md0 pl0 pl-md15">
									<img src="../../../images/worrior-plus.png" class="img-fluid">
								</div>
							</div>
							
							<div class="f-14 w500 mt-md60 mt20">Smart Package 1 (Option 1) - Price $18 Half Yearly</div>
							<div class="row align-items-center mt-md30 mt15">
								<div class="col-12 col-md-4 col-lg-3 col-xl-2 f-14 w400">
								JVZoo Product ID
								</div>
								<div class="col-9 col-md-6 col-lg-7 col-xl-5 mt15 mt-md0">
								<input type="text" class="form-control" placeholder="">
								</div>
								<div class="col-3 col-md-2 col-lg-2 col-xl-5 mt10 mt-md0 pl0 pl-md15">
									<img src="../../../images/jvzoo-icon.png" class="img-fluid">
								</div>
							</div>
							<div class="row align-items-center mt-md30 mt15">
								<div class="col-12 col-md-4 col-lg-3 col-xl-2 f-14 w400">
								JV Share Product ID 
								</div>
								<div class="col-9 col-md-6 col-lg-7 col-xl-5 mt15 mt-md0">
								<input type="text" class="form-control" placeholder="">
								</div>
								<div class="col-3 col-md-2 col-lg-2 col-xl-5 mt10 mt-md0 pl0 pl-md15">
									<img src="../../../images/jv-share-icon.png" class="img-fluid">
								</div>
							</div>
							<div class="row align-items-center mt-md30 mt15">
								<div class="col-12 col-md-4 col-lg-3 col-xl-2 f-14 w400">
								Click Bank Product ID 
								</div>
								<div class="col-9 col-md-6 col-lg-7 col-xl-5 mt15 mt-md0">
								<input type="text" class="form-control" placeholder="">
								</div>
								<div class="col-3 col-md-2 col-lg-2 col-xl-5 mt10 mt-md0 pl0 pl-md15">
									<img src="../../../images/bank-icon.png" class="img-fluid">
								</div>
							</div>
							<div class="row align-items-center mt-md30 mt15">
								<div class="col-12 col-md-4 col-lg-3 col-xl-2 f-14 w400">
								Worrior Plus Product ID 
								</div>
								<div class="col-9 col-md-6 col-lg-7 col-xl-5 mt15 mt-md0">
								<input type="text" class="form-control" placeholder="">
								</div>
								<div class="col-3 col-md-2 col-lg-2 col-xl-5 mt10 mt-md0 pl0 pl-md15">
									<img src="../../../images/worrior-plus.png" class="img-fluid">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<!-- Add Ons Second -->
		<div class="row">
			<div class="col-12 col-md-12 col-xl-12 mt-md20 mt15">
				<div class="card mb-0 f-16">
					<div class="card-header collapsed" data-toggle="collapse" href="#AddOn2">
						<a class="card-title lato-font">&nbsp; Smart Package 1 (Option 2)</a>
					</div>
					<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
					<div id="AddOn2" class="collapse" data-parent="#accordion">
						<div class="card-body smart-form">
							<div class="f-14 w500">Smart Package 1 (Option 2) - Price $29 Monthly</div>
							<div class="row align-items-center mt-md30 mt15">
								<div class="col-12 col-md-4 col-lg-3 col-xl-2 f-14 w400">
								JVZoo Product ID
								</div>
								<div class="col-9 col-md-6 col-lg-7 col-xl-5 mt15 mt-md0">
								<input type="text" class="form-control" placeholder="">
								</div>
								<div class="col-3 col-md-2 col-lg-2 col-xl-5 mt10 mt-md0 pl0 pl-md15">
									<img src="../../../images/jvzoo-icon.png" class="img-fluid">
								</div>
							</div>
							<div class="row align-items-center mt-md30 mt15">
								<div class="col-12 col-md-4 col-lg-3 col-xl-2 f-14 w400">
								JV Share Product ID 
								</div>
								<div class="col-9 col-md-6 col-lg-7 col-xl-5 mt15 mt-md0">
								<input type="text" class="form-control" placeholder="">
								</div>
								<div class="col-3 col-md-2 col-lg-2 col-xl-5 mt10 mt-md0 pl0 pl-md15">
									<img src="../../../images/jv-share-icon.png" class="img-fluid">
								</div>
							</div>
							<div class="row align-items-center mt-md30 mt15">
								<div class="col-12 col-md-4 col-lg-3 col-xl-2 f-14 w400">
								Click Bank Product ID 
								</div>
								<div class="col-9 col-md-6 col-lg-7 col-xl-5 mt15 mt-md0">
								<input type="text" class="form-control" placeholder="">
								</div>
								<div class="col-3 col-md-2 col-lg-2 col-xl-5 mt10 mt-md0 pl0 pl-md15">
									<img src="../../../images/bank-icon.png" class="img-fluid">
								</div>
							</div>
							<div class="row align-items-center mt-md30 mt15">
								<div class="col-12 col-md-4 col-lg-3 col-xl-2 f-14 w400">
								Worrior Plus Product ID 
								</div>
								<div class="col-9 col-md-6 col-lg-7 col-xl-5 mt15 mt-md0">
								<input type="text" class="form-control" placeholder="">
								</div>
								<div class="col-3 col-md-2 col-lg-2 col-xl-5 mt10 mt-md0 pl0 pl-md15">
									<img src="../../../images/worrior-plus.png" class="img-fluid">
								</div>
							</div>
							
							<div class="f-14 w500 mt-md60 mt20">Smart Package 1 (Option 2) - Price $18 Half Yearly</div>
							<div class="row align-items-center mt-md30 mt15">
								<div class="col-12 col-md-4 col-lg-3 col-xl-2 f-14 w400">
								JVZoo Product ID
								</div>
								<div class="col-9 col-md-6 col-lg-7 col-xl-5 mt15 mt-md0">
								<input type="text" class="form-control" placeholder="">
								</div>
								<div class="col-3 col-md-2 col-lg-2 col-xl-5 mt10 mt-md0 pl0 pl-md15">
									<img src="../../../images/jvzoo-icon.png" class="img-fluid">
								</div>
							</div>
							<div class="row align-items-center mt-md30 mt15">
								<div class="col-12 col-md-4 col-lg-3 col-xl-2 f-14 w400">
								JV Share Product ID 
								</div>
								<div class="col-9 col-md-6 col-lg-7 col-xl-5 mt15 mt-md0">
								<input type="text" class="form-control" placeholder="">
								</div>
								<div class="col-3 col-md-2 col-lg-2 col-xl-5 mt10 mt-md0 pl0 pl-md15">
									<img src="../../../images/jv-share-icon.png" class="img-fluid">
								</div>
							</div>
							<div class="row align-items-center mt-md30 mt15">
								<div class="col-12 col-md-4 col-lg-3 col-xl-2 f-14 w400">
								Click Bank Product ID 
								</div>
								<div class="col-9 col-md-6 col-lg-7 col-xl-5 mt15 mt-md0">
								<input type="text" class="form-control" placeholder="">
								</div>
								<div class="col-3 col-md-2 col-lg-2 col-xl-5 mt10 mt-md0 pl0 pl-md15">
									<img src="../../../images/bank-icon.png" class="img-fluid">
								</div>
							</div>
							<div class="row align-items-center mt-md30 mt15">
								<div class="col-12 col-md-4 col-lg-3 col-xl-2 f-14 w400">
								Worrior Plus Product ID 
								</div>
								<div class="col-9 col-md-6 col-lg-7 col-xl-5 mt15 mt-md0">
								<input type="text" class="form-control" placeholder="">
								</div>
								<div class="col-3 col-md-2 col-lg-2 col-xl-5 mt10 mt-md0 pl0 pl-md15">
									<img src="../../../images/worrior-plus.png" class="img-fluid">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>

	<!-- Back Cancel And Next Button -->
	<div class="text-right f-16 col-12 mt-md30 mt15">
		<a href="javascript:void(0)" class="base-btn default-btn btn-xs-block mr5">Save as Draft</a>
		<a href="javascript:void(0)" class="base-btn default-btn btn-xs-block mt-md0 mt10 mr5">&nbsp;Back&nbsp;</a>
		<a href="javascript:void(0)" class="base-btn default-btn btn-xs-block mt-md0 mt10 mr5">Cancel</a>
		<a href="#" class="base-btn blue-btn btn-xs-block mt-md0 mt10">&nbsp;Next&nbsp;</a>
	</div>
</div>
</div>

<!------- Smart Footer Include File ---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->