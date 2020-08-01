<?php $basedir = "http://".$_SERVER['SERVER_NAME'] . '/DCP-UI/'; ?>

<!------- DotCompal Common modal Include File---------->
<?php include '../../../../../includes/common-modals.php'; ?>
<!------- DotCompal Common modal Include File end ---------->

<!------- DotCompal Automation Common modal Include File---------->
<?php include '../../../../../includes/common-modals-automation.php'; ?>
<!------- DotCompal Automation Common modal Include File end ---------->

<!----------- Loader Section start ------------->
<div class="d-none" style="position: fixed; height: 100%; background: rgba(0,0,0,0.7); z-index: 99999; left: 0; right: 0; bottom: 0; right: 0;">
	<i class="icon-saglus-help icon-loader"></i>
	<div class="smart-loader"></div>
</div>
<!----------- Loader Section end ------------->

<!------------- Alerts Div start--------->
<div class="alert-positions d-none">
	  <div class="alert alert-success-box alert-dismissible">
			<button type="button" class="close" data-dismiss="alert"><i class="icon-cross"></i></button>
			<div class="d-flex">
			  <div class="d-flex flex-wrap mr15"><span class="d-table"> <i class="icon-dot-tick f-18"></i></span> </div>
			  <div class="d-flex flex-wrap f-14">Well Done ! You Successfully read this alert message. </div>
			</div>
		  </div>
		
      <div class="alert alert-primary-box alert-dismissible f-14">
         <button type="button" class="close" data-dismiss="alert"><i class="icon-cross"></i></button>
        <div class="d-flex">
          <div class="d-flex flex-wrap mr15"><span class="d-table"> <i class="icon icon-notification f-10"></i></span></div>
          <div class="d-flex flex-wrap">Heads Up ! This alert needs your attention, but it’s not super
            important. This could be an Informatial alert.</div>
        </div>
      </div>
		
      <div class="alert alert-primary-box alert-dismissible f-14 ">
         <button type="button" class="close" data-dismiss="alert"><i class="icon-cross"></i></button>
        <div class="d-flex">
          <div class="d-flex flex-wrap mr15"><span class="d-table"> <i class="icon icon-notification f-10"></i></span></div>
          <div class="d-flex flex-wrap">You Got a new message.. <a href="#" class="white-clr t-decoration-none"><u>Click here</u></a>&nbsp; to read </div>
        </div>
      </div>
		
      <div class="alert alert-primary-box1 alert-dismissible f-14">
		<button type="button" class="close" data-dismiss="alert"><i class="icon-cross"></i></button>
	    <div class="d-flex">
          <div class="d-flex flex-wrap mr15"><span class="d-table text-nowrap"><i class="icon-dot f-6 opacity20"></i> <i class="icon-dot f-6 opacity60"></i> <i class="icon-dot f-6"></i></span></div>
          <div class="d-flex flex-wrap">Just Finishing things ! Please wait...</div>
        </div>
      </div>
		
      <div class="alert alert-warning-box alert-dismissible f-14">
        <button type="button" class="close" data-dismiss="alert"><i class="icon-cross"></i></button>
        <div class="d-flex">
          <div class="d-flex flex-wrap mr15"><span class="d-table"> <i class="fa fa-exclamation-triangle f-10"></i></span></div>
          <div class="d-flex flex-wrap">Warning ! Better check yourself, you’re not looking too good.</div>
        </div>
      </div>
		
      <div class="alert alert-danger-box alert-dismissible f-14">
        <button type="button" class="close" data-dismiss="alert"><i class="icon-cross"></i></button>
        <div class="d-flex">
          <div class="d-flex flex-wrap mr15"><span class="d-table"> <i class="fa fa-exclamation-circle"></i></span></div>
          <div class="d-flex flex-wrap">Oh Snap ! Change a few things up and try submitting again.</div>
        </div>
      </div>
 </div>
<!------------- Alerts Div end--------->

<!---- Common Jquery Files ------> 
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/jquery/jquery.min.js"></script>
<!-- Caleran includes -->
<link href="<?php echo $basedir; ?>vendors/caleran/caleran.min.css" rel="stylesheet"/>
<script src="<?php echo $basedir; ?>vendors/caleran/moment.min.js"></script>
<script src="<?php echo $basedir; ?>vendors/caleran/caleran.min.js"></script>
<script type="text/javascript">
$(".caleran-automaton").caleran({
		arrowOn: "left",
		format: 'DD MMM YYYY',
		ranges: [{
				title: "Today",
				startDate: moment(),
				endDate: moment()
			}, {
				title: "Tomorrow",
				startDate: moment().add(1, "days"),
				endDate: moment().add(1, "days")
			}, {
				title: "Next 7 days",
				startDate: moment().add(1, "days"),
				endDate: moment().add(7, "days")
			}, {
				title: "Next 30 days",
				startDate: moment().add(1, "days"),
				endDate: moment().add(30, "days")
			},

			{
				title: "Next 90 days",
				startDate: moment().add(1, "days"),
				endDate: moment().add(90, "days")
			}, {
				title: "This month",
				startDate: moment().startOf("month"),
				endDate: moment().endOf("month")
			}
				 
		]
	});
	
	  $(".caleran-show").on("click",function(e){
        var caleran = $(".caleran-automaton").data("caleran");
        caleran.showDropdown(e);
      });
$(".caleran-ex-left").caleran({
        arrowOn: "left",
	  format: 'DD MMM YYYY',
		ranges: [{
				title: "Today",
				startDate: moment(),
				endDate: moment()
			}, {
				title: "Tomorrow",
				startDate: moment().add(1, "days"),
				endDate: moment().add(1, "days")
			}, {
				title: "Next 7 days",
				startDate: moment().add(1, "days"),
				endDate: moment().add(7, "days")
			}, {
				title: "Next 30 days",
				startDate: moment().add(1, "days"),
				endDate: moment().add(30, "days")
			},

			{
				title: "Next 90 days",
				startDate: moment().add(1, "days"),
				endDate: moment().add(90, "days")
			}, {
				title: "This month",
				startDate: moment().startOf("month"),
				endDate: moment().endOf("month")
			}
				 
		]
	});
	
	  $(".caleran1-show").on("click",function(e){
        var caleran = $(".caleran-ex-left").data("caleran");
        caleran.showDropdown(e);
      });
	 	  
</script>	  
<script type="text/javascript">
$("#dob-primary").caleran({
	arrowOn: "right",
	format: 'DD MMM YYYY',
    singleDate: true,
    calendarCount: 1,
    showHeader: false,
    showFooter: false,
	target: $("#dob-primary-target"),
    autoCloseOnSelect: true
});
$("#dob-secondary").caleran({
	arrowOn: "right",
	format: 'DD MMM YYYY',
    singleDate: true,
    calendarCount: 1,
    showHeader: false,
    showFooter: false,
	target: $("#dob-secondary-target"),
    autoCloseOnSelect: true
});
$("#dob-tertiary").caleran({
	arrowOn: "right",
	format: 'DD MMM YYYY',
    singleDate: true,
    calendarCount: 1,
    showHeader: false,
    showFooter: false,
	target: $("#dob-tertiary-target"),
    autoCloseOnSelect: true
});
$("#dob-quaternary").caleran({
	arrowOn: "right",
	format: 'DD MMM YYYY',
    singleDate: true,
    calendarCount: 1,
    showHeader: false,
    showFooter: false,
	target: $("#dob-quaternary-target"),
    autoCloseOnSelect: true
});
$("#dob").caleran({
	startEmpty: true,
	arrowOn: "right",
	format: 'DD MMM YYYY',
    singleDate: true,
    calendarCount: 1,
    showHeader: false,
    showFooter: false,
	target: $("#dob-target"),
    autoCloseOnSelect: true
});	
</script>
<!-- end caleran includes -->
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/bootstrap/popper.min.js"></script> 
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/bootstrap/bootstrap.min.js"></script> 
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/bootstrap/bootstrap-select.js"></script>
<!----- Country Code Plugins ---------> 
<script src="<?php echo $basedir; ?>vendors/tags/jquery.tagsinput.js"></script> 
<!---- Add Custom Javacscript File ------> 

<script type='text/javascript' src="../../../../../js/script.js"></script>
<!---- Custom Scrollbar Jquery File ------>
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
$("#getjson").click(function(){
  var jsonObject = app.graph.toJSON();
		console.log(jsonObject);
});
</script>
</body>
</html>
