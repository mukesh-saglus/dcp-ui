<!-- Website Builder Header Include File -->
<?php include '../../../smart/html/includes/dcp-header.php'; ?>
<!-- Website Builder Header Include File end -->

<!-- Website Builder Stylesheet -->
<link rel="stylesheet" href="../../css/website-builder.css">

<div class="container-fluid p15 px-md30 py-md30 pt-md10">
	<!-- Header Start -->
	<div class="row">
		<div class="col-12">
			<div class="d-flex align-items-center flex-wrap">
				<ul class="website-builder-stepwizard f-14 w400">
					<li> <a href="#"><i class="icon-home f-14"></i><span class="pl10">Dashboard</span></a> </li>
					<li> <a href="#"><span>Designs</span> </a> </li>
					<li> <a href="#" class="p-blue-clr"><span>Appearance</span> </a> </li>
				</ul>
			</div>
		</div>
		<div class="col-12 mt15 mt-md20">
			<span class="f-20 f-md-24 lato-font">Appearance</span>		
			<p class="lightgrey mt5">Here you can manage your all designs</p>
		</div>
	</div>
	<!-- Header End  -->

	<!-- Color Edit Start -->
	<div class="row mt15 mt-md30">
		<div class="col-md-3 col-xl-2 ">	
			<div class="nav flex-column nav-pills ui-vertical-tab f-14 w400 apperance-tab">
				<a class="nav-link active" href="color.php"><i class="icon-color"></i>Colors</a>
				<a class="nav-link"  href="font.php"><i class="icon-text-t"></i>Fonts</a>
				<a class="nav-link" href="animation.php"><i class="icon-animation"></i>Animation</a>
			</div>
		</div>
		<div class="col-md-9 col-xl-10 mt15 mt-md0 smart-form">
			<div class="w500 f-16">Website Colors</div>
			<p class="f-14 lh140 gblue-clr w400">Chose a color set for your website</p>
			
			<div class="row mt15 mt-md30">
				<label class="col-12 col-md-4 col-xl-2 align-self-center mb-md0 d-gblue-clr">Main Theme Color 
					<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Info Text" class="d-gblue-clr f-12 t-decoration-none pl10"><i class="icon-information"></i></a>
				</label>
				<div class="col-12 col-md-8 col-xl-4">
					<div id="cp3" class="input-group colorpicker-component align-items-center row">
						<span class="input-group-addon col-6 col-md-6 pr-lg0">
						<div></div><i class="w-100 min-h-40 l-gblue-border"></i></span>
						<input type="text" value="#318af9" class="border-0 col-6 col-md-6 px15 pl-lg30"/>
					</div>
				</div>
		   </div>
		   <div class="row mt15 mt-md50">
				<label class="col-12 col-md-4 col-xl-2 align-self-center mb-md0 d-gblue-clr">Theme Mode
					<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Info Text" class="d-gblue-clr f-12 t-decoration-none pl10"><i class="icon-information"></i></a>
				</label>
				<div class="col-12 col-md col-xl-2 mt10 mt-md0">
					<div class="theme-color-select">
						<input type="radio" name="thememode" id="theme-light" value="theme-light" checked>
						<label class="theme-light" for="theme-light">Light</label>
					</div>
				</div>
				<div class="col-12 col-md col-xl-2 mt10 mt-md0">
					<div class="theme-color-select">
						<input type="radio" name="thememode" id="theme-dark" value="theme-dark">
						<label class="theme-dark" for="theme-dark">Dark</label>
					</div>
				</div>
				<div class="col-12 col-md col-xl-2 mt10 mt-md0">
					<div class="theme-color-select">
						<input type="radio" name="thememode" id="theme-mixed" value="theme-mixed">
						<label class="theme-mixed" for="theme-mixed">Mixed</label>
					</div>
				</div>
		   </div>
		   <div class="row mt15 mt-md50">
				<label class="col-12 col-md-4 col-xl-2 mb-md0 d-gblue-clr">Palatte Colors 
					<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Info Text" class="d-gblue-clr f-12 t-decoration-none pl10"><i class="icon-information"></i></a>
				</label>
				
				<div class="col-12 col-md-8 col-xl-10">
				<div class="mCustomScrollbar color-theme-scroll w-100" data-mcs-theme="inset-3">
					<div class="row palatte-colors-select">
						<input type="radio" name="palattecolors" id="bottleRocket" value="theme-light" checked>
						<label class="col-12 col-md-8 col-lg-5 pr-lg30" for="bottleRocket">
							<span class="d-gblue-clr f-14 mb9 d-block">BottleRocket</span>
							<span class="row no-gutters palatte-select">
								<span class="palette-color1 col-4"></span>
								<span class="palette-color2 col-4"></span>
								<span class="palette-color3 col-4"></span>
							</span>
						</label>
					</div>
					<div class="row palatte-colors-select mt10 mt-md30">
						<input type="radio" name="palattecolors" id="Royal" value="theme-light">
						<label class="col-12 col-md-10 col-lg-7 pr-lg0" for="Royal">
							<span class="d-gblue-clr f-14 mb9 d-block">Royal</span>
							<span class="row no-gutters palatte-select">
								<span class="palette-color4 col-3"></span>
								<span class="palette-color5 col-3"></span>
								<span class="palette-color6 col-3"></span>
								<span class="palette-color7 col-3"></span>
							</span>
						</label>
					</div>
					<div class="row palatte-colors-select mt10 mt-md30">
						<input type="radio" name="palattecolors" id="zissou" value="theme-light">
						<label class="col-12 col-md-12 col-lg-10 pr-lg45" for="zissou">
							<span class="d-gblue-clr f-14 mb9 d-block">Zissou</span>
							<span class="row no-gutters palatte-select">
								<span class="palette-color8 col"></span>
								<span class="palette-color9 col"></span>
								<span class="palette-color10 col"></span>
								<span class="palette-color11 col"></span>
								<span class="palette-color12 col"></span>
							</span>
						</label>
					</div>
					
					<div class="row palatte-colors-select mt10 mt-md30">
						<input type="radio" name="palattecolors" id="turquoise" value="theme-light" checked>
						<label class="col-12 col-md-8 col-lg-5 pr-lg30" for="turquoise">
							<span class="d-gblue-clr f-14 mb9 d-block">Turquoise</span>
							<span class="row no-gutters palatte-select">
								<span class="palette-color13 col-4"></span>
								<span class="palette-color14 col-4"></span>
								<span class="palette-color15 col-4"></span>
							</span>
						</label>
					</div>
					<div class="row palatte-colors-select mt10 mt-md30">
						<input type="radio" name="palattecolors" id="darksalmon" value="theme-light">
						<label class="col-12 col-md-10 col-lg-7 pr-lg0" for="darksalmon">
							<span class="d-gblue-clr f-14 mb9 d-block">Dark Salmon</span>
							<span class="row no-gutters palatte-select">
								<span class="palette-color16 col-3"></span>
								<span class="palette-color17 col-3"></span>
								<span class="palette-color18 col-3"></span>
								<span class="palette-color19 col-3"></span>
							</span>
						</label>
					</div>
					<div class="row palatte-colors-select mt10 mt-md30">
						<input type="radio" name="palattecolors" id="moccasin" value="theme-light">
						<label class="col-12 col-md-12 col-lg-10 pr-lg45" for="moccasin">
							<span class="d-gblue-clr f-14 mb9 d-block">Moccasin</span>
							<span class="row no-gutters palatte-select">
								<span class="palette-color20 col"></span>
								<span class="palette-color21 col"></span>
								<span class="palette-color22 col"></span>
								<span class="palette-color23 col"></span>
								<span class="palette-color24 col"></span>
							</span>
						</label>
					</div>
				</div>
				</div>
		   </div>
		   <div class="row mt15 mt-md30">
			   <div class="col-12 col-md-12 col-lg-10 text-right">
					<a href="#" class="base-btn default-btn f-16 btn-xs-block mr5 mb15 mb-md0">Preview</a>
					<a href="#" class="base-btn default-btn f-16 btn-xs-block mr5 mb15 mb-md0">Cancel</a>
					<button type="submit" class="base-btn blue-btn f-16  btn-xs-block"> &nbsp;Save&nbsp;</button>
				</div>
			</div>
		</div>
	</div>
<!-- Color Edit End -->
</div>

<!-- Website Builder Footer Include File -->
<?php include '../../includes/website-builder-footer.php'; ?>
<!-- Website Builder Footer Include File end  -->