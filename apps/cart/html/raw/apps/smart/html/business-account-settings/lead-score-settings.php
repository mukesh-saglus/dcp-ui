<!------- Smart Header Include File---------->
<?php include '../includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<div class="container-fluid p15 p-md30">
	<!------- Header Start----------->
	<div class="row">
		<div class="col-12">
			<span class="f-20 f-md-24 lato-font">Lead Score Settings </span>&nbsp; 
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="gblue-clr f-14 w400 mt5">Here you are manage your all accounts details</p>
		</div>
	</div>
	<!------- Header End ----------->
	
	<div class="row mt15 mt-md70">
		<div class="col-12">
			<div class="smart-radio-btn radio-strong-blue d-flex ml7">
				<input name="lead-score" id="AddRemove" type="radio">
				<label for="AddRemove"> Add/Remove lead score for a user if the same user is already acquired.</label>
			</div>
		</div>
		<div class="col-12 mt10">
			<div class="smart-radio-btn radio-strong-blue d-flex ml7">
				<input name="lead-score" id="DontAddRemove" type="radio">
				<label for="DontAddRemove"> Do not Add/Remove lead score for a user if the same user is already acquired.</label>
			</div>
		</div>
	</div>
	
</div>

<!------- Smart Footer Include File---------->
<?php include '../includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->