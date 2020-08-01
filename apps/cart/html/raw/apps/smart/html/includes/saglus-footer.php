<?php $basedir = "http://".$_SERVER['SERVER_NAME'] . '/DCP-UI/'; ?>
<!------- Dotcompal Common modal Include File---------->
<?php include 'common-modals.php'; ?>
<!------- Dotcompal Common modal Include File end ---------->

<!----------- Footer Section-------------->
<div class="footer-sticky-height"></div>
<footer class="footer-design">
	<div class="container-fluid px-md30">
		<div class="row">
			<div class="col-12 d-flex justify-content-between flex-wrap f-14">
				<div><span class="copyright">&copy;</span> 2019 onwards. All Rights Reserved at SAGLUS Info Pvt. Ltd. <a href="#" class="privacy-links">Privacy Policy</a> and <a href="#" class="footer-links">Terms of Service</a></div>
				<div class="d-flex mt5 mt-md0">
					<a href="#" class="footer-links">Help</a>
					<div class="mx-2 mx-md4">|</div>
					<a href="#" class="footer-links">Website</a>
					<div class="mx-2 mx-md4">|</div>
					<a href="#" class="footer-links">Blog</a>
					<div class="mx-2 mx-md4">|</div>
					<a href="#" class="mr-2 mr-md10 fb"><i class="icon-facebook"></i></a>
					<a href="#" class="twitter"><i class="icon-twitter"></i></a>
				</div>
			</div>
		</div>
	</div>
</footer>
<!----------- Footer Section end ------------->

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
		
      <div class="alert alert-primary-box1 f-14">
	    <div class="d-flex">
          <div class="d-flex flex-wrap mr15"><span class="d-table"><i class="icon-dot f-6 opacity20"></i> <i class="icon-dot f-6 opacity60"></i> <i class="icon-dot f-6"></i></span></div>
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
<!-------- Fullscreen js---------->
<script type='text/javascript' src="<?php echo $basedir; ?>js/screenfull.js"></script>
<!-- .caleran includes -->
<link href="<?php echo $basedir; ?>vendors/caleran/caleran.min.css" rel="stylesheet"/>
<script src="<?php echo $basedir; ?>vendors/caleran/moment.min.js"></script>
<script src="<?php echo $basedir; ?>vendors/caleran/caleran.min.js"></script>
<script type="text/javascript">
$(".caleran-ex-1").caleran({
        arrowOn: "right",
       format: 'DD MMM YYYY',
		ranges: [{
				title: "Today",
				startDate: moment(),
				endDate: moment()
			}, {
				title: "Yesterday",
				startDate: moment().subtract(1, "days"),
				endDate: moment().subtract(1, "days")
			}, {
				title: "Last 7 days",
				startDate: moment().subtract(7, "days"),
				endDate: moment().subtract(1, "days")
			}, {
				title: "Last 30 days",
				startDate: moment().subtract(30, "days"),
				endDate: moment().subtract(1, "days")
			},

			{
				title: "Last 90 days",
				startDate: moment().subtract(90, "days"),
				endDate: moment().subtract(1, "days")
			}, {
				title: "This Month",
				startDate: moment().startOf("month"),
				endDate: moment().endOf("month")
			}
				 
		]
	});
	
	  $(".caleran-show").on("click",function(e){
        var caleran = $(".caleran-ex-1").data("caleran");
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
				title: "Yesterday",
				startDate: moment().subtract(1, "days"),
				endDate: moment().subtract(1, "days")
			}, {
				title: "Last 7 days",
				startDate: moment().subtract(7, "days"),
				endDate: moment().subtract(1, "days")
			}, {
				title: "Last 30 days",
				startDate: moment().subtract(30, "days"),
				endDate: moment().subtract(1, "days")
			},

			{
				title: "Last 90 days",
				startDate: moment().subtract(90, "days"),
				endDate: moment().subtract(1, "days")
			}, {
				title: "This Month",
				startDate: moment().startOf("month"),
				endDate: moment().endOf("month")
			}
				 
		]
	});
	
	  $(".caleran-show").on("click",function(e){
        var caleran = $(".caleran-ex-left").data("caleran");
        caleran.showDropdown(e);
      });
	  
	  
$(".caleran-ex-left1").caleran({
        arrowOn: "left" ,
		format: 'DD MMM YYYY',
		ranges: [{
				title: "Today",
				startDate: moment(),
				endDate: moment()
			}, {
				title: "Yesterday",
				startDate: moment().subtract(1, "days"),
				endDate: moment().subtract(1, "days")
			}, {
				title: "Last 7 days",
				startDate: moment().subtract(7, "days"),
				endDate: moment().subtract(1, "days")
			}, {
				title: "Last 30 days",
				startDate: moment().subtract(30, "days"),
				endDate: moment().subtract(1, "days")
			},

			{
				title: "Last 90 days",
				startDate: moment().subtract(90, "days"),
				endDate: moment().subtract(1, "days")
			}, {
				title: "This Month",
				startDate: moment().startOf("month"),
				endDate: moment().endOf("month")
			}
				 
		]
	});
	
	  $(".caleran-show1").on("click",function(e){
        var caleran = $(".caleran-ex-left1").data("caleran");
        caleran.showDropdown(e);
      });

$(".caleran-ex-left3").caleran({
        arrowOn: "left" ,
	  format: 'DD MMM YYYY',
		ranges: [{
				title: "Today",
				startDate: moment(),
				endDate: moment()
			}, {
				title: "Yesterday",
				startDate: moment().subtract(1, "days"),
				endDate: moment().subtract(1, "days")
			}, {
				title: "Last 7 days",
				startDate: moment().subtract(7, "days"),
				endDate: moment().subtract(1, "days")
			}, {
				title: "Last 30 days",
				startDate: moment().subtract(30, "days"),
				endDate: moment().subtract(1, "days")
			},

			{
				title: "Last 90 days",
				startDate: moment().subtract(90, "days"),
				endDate: moment().subtract(1, "days")
			}, {
				title: "This Month",
				startDate: moment().startOf("month"),
				endDate: moment().endOf("month")
			}
				 
		]
	});
	
	  $(".caleran-show3").on("click",function(e){
        var caleran = $(".caleran-ex-left3").data("caleran");
        caleran.showDropdown(e);
      });
	  
	  
$(".caleran-ex-left4").caleran({
        arrowOn: "left" ,
	  format: 'DD MMM YYYY',
		ranges: [
			{
				title: "Today",
				startDate: moment(),
				endDate: moment()
			}, {
				title: "Yesterday",
				startDate: moment().subtract(1, "days"),
				endDate: moment().subtract(1, "days")
			}, {
				title: "Last 7 days",
				startDate: moment().subtract(7, "days"),
				endDate: moment().subtract(1, "days")
			}, {
				title: "Last 30 days",
				startDate: moment().subtract(30, "days"),
				endDate: moment().subtract(1, "days")
			},{
				title: "Last 90 days",
				startDate: moment().subtract(90, "days"),
				endDate: moment().subtract(1, "days")
			},{
				title: "This Month",
				startDate: moment().startOf("month"),
				endDate: moment().endOf("month")
			}
				 
		]
	});
	
	  $(".caleran-show4").on("click",function(e){
        var caleran = $(".caleran-ex-left4").data("caleran");
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
<!------ Expand Searchbar js---------->
<script type='text/javascript' src="<?php echo $basedir; ?>js/expandsearch.js"></script>
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/bootstrap/popper.min.js"></script> 
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/bootstrap/bootstrap.min.js"></script> 
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/bootstrap/bootstrap-select.js"></script>

<!-------- Boostrap Color picker---------->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/bootstrap-colorpicker.css">
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/bootstrap/bootstrap-colorpicker.js"></script>
<script> $(function() { $('#cp4').colorpicker(); }); </script> 
<script> $(function() { $('#cp3').colorpicker(); }); </script> 

<!----- Country Code Plugins ---------> 
<script src="<?php echo $basedir; ?>vendors/tags/jquery.tagsinput.js"></script> 
<!---- Add Custom Javacscript File ------> 
<script type='text/javascript' src="<?php echo $basedir; ?>js/script.js"></script>
<!---- Custom Scrollbar Jquery File ------>
<script type='text/javascript' src="<?php echo $basedir; ?>vendors/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

<!----- Country Code Plugins ---------> 
<script src="<?php echo $basedir; ?>vendors/tel-input/intlTelInput.js"></script>
<!-- App Menu JS-->
<script type="text/javascript">
    $(document).ready(function () {
        $("#sidebar").mCustomScrollbar({
            theme: "inset-3"
        });
		$("#sidebar-menu").mCustomScrollbar({
            theme: "inset-3"
        });
        $('#dismiss, .overlay').on('click', function () {
            $('#sidebar').removeClass('active');
            $('#sidebar-menu').removeClass('active');
            $('.overlay').fadeOut();
        });
		$('#dismiss-menu').on('click', function () {
            $('#sidebar-menu').removeClass('active');
        });
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').addClass('active');
            $('.overlay').fadeIn();
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
		
		$('.appbox').on('click', function () {
            $('#sidebar-menu').addClass('active');
            $('.overlay').fadeIn();
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
		
    });
</script>
<script>// Country Code Plugins js //
	$("#phone").intlTelInput({
		// allowDropdown: false,
		autoHideDialCode: false,
		// autoPlaceholder: "off",
		// dropdownContainer: "body",
		// excludeCountries: ["us"],
		// formatOnDisplay: false,
		// geoIpLookup: function(callback) {
		//   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
		//     var countryCode = (resp && resp.country) ? resp.country : "";
		//     callback(countryCode);
		//   });
		// },
		// hiddenInput: "full_number",
		// initialCountry: "auto",
		nationalMode: false,
		// onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
		// placeholderNumberType: "MOBILE",
		preferredCountries: ['in', 'us'],
		// separateDialCode: true,
		utilsScript: "<?php echo $basedir; ?>vendors/tel-input/utils.js"
	});</script>

<script>
	$("#phone1").intlTelInput({
		autoHideDialCode: false,
		nationalMode: false,
		preferredCountries: ['in', 'us'],
		utilsScript: "<?php echo $basedir; ?>vendors/tel-input/utils.js"
	});</script>

<!--- Horizontal Scrollbar Plugins js -->
<script type="text/javascript">
	(function($){
		$(window).on("load",function(){
			$("#thori-scroll").mCustomScrollbar({
				axis:"x",
				scrollButtons:{enable:true},
				theme:"3d-thick"
			});
		});
	})(jQuery);
</script>
<script type="text/javascript">
	(function($){
		$(window).on("load",function(){
			$(".thori-scroll").mCustomScrollbar({
				axis:"x",
				scrollButtons:{enable:true},
				theme:"3d-thick"
			});
		});
	})(jQuery);
</script>
<script src="<?php echo $basedir; ?>vendors/flagstrap/js/jquery.flagstrap.js"></script>
<script type="text/javascript">
        $(".account-merge-secondary :input[type='text']").prop("disabled", true);
        $(".account-merge-secondary :input[type='email']").prop("disabled", true);
        $(".account-merge-secondary :input[type='tel']").prop("disabled", true);
        $(".account-merge-secondary textarea").prop('disabled', true);
		$(".account-merge-primary :input[type='radio']").prop("checked", true);
</script>
<script>
    $('#account_contries_primary').flagStrap();
    $('#account_contries_secondary').flagStrap();
</script>

<!-- Analog Clock css and js -->
<script src="<?php echo $basedir; ?>vendors/clock/clock.js"></script>
<link href="<?php echo $basedir; ?>vendors/clock/clock.css" rel="stylesheet"/>

<!---  Line & Bar Chart Custom  js --->
<script src="<?php echo $basedir; ?>vendors/nvd3/linechart.js"></script>
<!--- Donut Chart Custom  js --->
<script src="<?php echo $basedir; ?>vendors/nvd3/donutchart.js"></script>
</body>
</html>
