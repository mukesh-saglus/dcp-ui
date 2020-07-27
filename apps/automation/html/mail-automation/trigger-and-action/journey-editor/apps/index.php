<!------- Mail Automation Sub Header Include File---------->
<?php include 'header.php'; ?>
<!------- Mail Automation Sub Include File end---------->

        <div class="journey-container">
              <div class="stencil-container"></div>
              <div class="paper-container"></div>
				<!-- SideBar Toggle Button -->
				<a class="journey-expand-toggle"><i class="icon-collapse-column"></i></a>
				<!-- ZoomIn ZoomOut Button -->
				<div class="navigator-btn">
					<a href="JavaScript:Void(0);" id="btn-zoomin" class="base-btn nav-zoom-btn"><i class="icon-add-second"></i></a>
					<a href="JavaScript:Void(0);" id="btn-zoomout" class="base-btn nav-zoom-btn zoom-border-btn"><i class="icon-minus-minus"></i></a>
					<a href="JavaScript:Void(0);" class="base-btn nav-zoom-btn"><i class="icon-refresh-final"></i></a>
				</div>
				<div class="navigator-container"></div>
        </div>

    </div>
	
    <!-- Rappid/JointJS dependencies: -->
    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/lodash/index.js"></script>
    <script src="../node_modules/backbone/backbone.js"></script>
    <script src="../node_modules/graphlib/dist/graphlib.core.js"></script>
    <script src="../node_modules/dagre/dist/dagre.core.js"></script>
    <script src="../build/rappid.min.js"></script>

    <!--[if IE 9]>
        <script>
          // `-ms-user-select: none` doesn't work in IE9
          document.onselectstart = function() { return false; };
        </script>
    <![endif]-->

    <!-- Application files:  -->
    <script src="js/config/halo.js"></script>
    <script src="js/config/selection.js"></script>
    <script src="js/config/inspector.js"></script>
    <script src="js/config/stencil.js"></script>
   <script src="js/config/toolbar.js"></script>
   <!--  <script src="js/config/sample-graphs1.js"></script>-->
    <script src="js/views/main.js"></script>
    <!-- <script src="js/views/theme-picker.js"></script> -->
    <script src="js/models/joint.shapes.app.js"></script>
    <!--<script src="js/views/navigator.js"></script>-->

    <script>
        joint.setTheme('modern');
        app = new App.MainView({ el: '#app' });
        themePicker = new App.ThemePicker({ mainView: app });
        themePicker.render().$el.appendTo(document.body);
        window.addEventListener('load', function() {
            app.graph.fromJSON(JSON.parse(App.config.sampleGraphs.emergencyProcedure));
        });
    </script>


<!------- DotCompal Automation Common modal Include File---------->
<?php include 'footer.php'; ?>
<!------- DotCompal Automation Common modal Include File end ---------->
<script type="text/javascript">
	$(document).ready(function() {
  $(".content").mCustomScrollbar({
			axis:"y",
			scrollButtons:{enable:true},
			theme:"inset-3"
		});
	});

</script> 
<script type="text/javascript">
// Left SideBar Toggle JS
$(function() {
	$(".journey-expand-toggle").click(function() {
		$(".journey-container").toggleClass("journey-expanded");
		return $(".journey-expand-toggle").find("i").toggleClass("icon-collapse-column icon-expand-column");
	});
});

// Broadcast & Autoresponder
$(function() {
	$(".autoresponder-email").hide();
	$(".autoresponder").click(function() {
		$(".autoresponder-email").show();
		$(".broadcast-email").hide();
	});
	$(".broadcast").click(function() {
		$(".autoresponder-email").hide();
		$(".broadcast-email").show();
	});
});
</script> 