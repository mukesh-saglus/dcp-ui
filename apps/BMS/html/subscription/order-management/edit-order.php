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
			<span class="f-20 f-md-24 lato-font">Order ID- 0112358, Account</span> &nbsp;
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="gblue-clr f-14 w400 mt5">Here you are manage your all accounts details</p>
		</div>
		<div class="col-12">
			<div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md30">
				<div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span>1</span></div>
					<div class="title align-self-center">Choose The Package</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				</div>
				<div class="d-flex justify-content-start flex-wrap mr15 mb5">
					<div class="circle-num"><span> 2</span></div>
					<div class="title align-self-center">Preview & Update</div>
					<div class="sep-line align-self-center d-none d-lg-block"></div>
				</div>
			</div>
		</div>
	</div>
	<!------- Header End ----------->
    
    <div class="row">
		<div class="col-12">
			<div class="new-package-bg p15 p-md30 white-clr smart-form">
				<!-- Edit Package Div -->
				<div class="row h-100">
					 <a href="#" class="base-btn edit-package-btn m15 m-md30" title="Edit"><i class="icon-edit"></i></a>
					<div class="col-12 align-self-center text-center">
						<i class="icon-saglus-help f-30 f-md-36"></i>
						<div class="f-20 f-md-24 lato-font mt10">Package Name</div>
					</div>
				</div>
		    </div>	
		</div>
		<!-- Next & Cancel Button -->
		<div class="text-right f-16 col-12 mt-md30 mt15">
			<a href="javascript:void(0)" class="base-btn default-btn mr5 btn-xs-block">Save as Draft</a>
			<a href="javascript:void(0)" class="base-btn default-btn mr5 btn-xs-block mt10 mt-md0">Cancel</a>
			<a href="#" class="base-btn blue-btn btn-xs-block mt10 mt-md0">&nbsp;Next&nbsp;</a>
		</div>
	</div>
</div>
<!------- Smart Footer Include File ---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->