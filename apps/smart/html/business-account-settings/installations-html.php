<?php include '../includes/smart-header.php'; ?>
<div class="container-fluid p15 p-md30">
	<div class="row">
   	    <div class="col-12">
         <ul class="stepwizard-style2 f-20 f-md-24 w400 lato-font">
            <li> <a href="#">Installation</a> </li>
            <li> <a href="#">HTML (Manually)</a> </li>
         </ul>
         <p class="f-14 gblue-clr w400">Install DotcomPal on your HTML website</p>
      </div>
		
	</div>

	<div class="row">
        <div class="col-12 smart-form mt-md30 mt15"> 
            
            <div class="form-group mb-md50">
            	<div class="row">
                <div class="col-12">
                <p class="f-14 d-gblue-clr mb8 w400">
                Is it your business website URL?
                </p></div>
                <div class="col-md-6">
                <input type="text" class="form-control f-14 field-h40" value="www.eduncle.com" placeholder="businessname.com or subdomain.businessname.com">
                <small class="form-text f-14 text-left d-none">Please enter the correct value</small>
                </div>
                <div class="col-md-6 mt-md0  mt15">
                <button type="submit" class="base-btn blue-btn btn-h40 f-16" id="SelectScript">
                Yes & Generate Script</button>
                </div>
                </div>
            </div>
            
		<div class="col-12 p0 " id="SmartScriptdiv"> 
        <!-- Nav tabs -->
        <ul class="nav tabs-style1 f-14 f-sm-16" role="tablist">
          <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" data-target="#Audience"><i class="icon-person"></i> &nbsp; Audience Analytical SDK</a> </li>
          <!-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" data-target="#Account"><i class="icon-all-accounts"></i> &nbsp; Account Analytical SDK</a> </li> -->
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <div id="Audience" class="col-12 p0 tab-pane active show"><br>
              <div class="form-group mb0" >            	
				<div class="row">
            	<div class="col-md-12 d-flex justify-content-between">
                <div>
                <p class="f-14 d-gblue-clr mt5 mt-md10 mb8 w400">
                DotcomPal Script
                </p></div>
                <div class="mt7 mt-md10">
                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Integrate your website with DotcomPal. In order to do that you just have to install the DotcomPal SDK with your website to track All visitors (Unknown audience). It allows you to run real-time Campaigns according to your business audience's behavior." class="d-gblue-clr t-decoration-none"><i class="icon-information"></i></a>
                </div>
                </div>
                </div>
				
				
                <div class="row">
                <div class="col-12">
                <textarea class="form-control f-14" rows="10">
<script type="text/javascript">(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//forms.aweber.com/form/33/871649333.js";
fjs.parentNode.insertBefore(js, fjs);
}(document, "script", "aweber-wjs-gnot1u4y3"));
</script>
                </textarea>                
                </div>
                <div class="col-12 mt15 mt-md30 text-right ">
                <button type="submit" class="base-btn blue-btn btn-h40 f-16 btn-xs-block">
                Copy text</button>&nbsp;&nbsp;&nbsp;
                <button class="base-btn default-btn btn-h40 f-16 btn-xs-block" data-toggle="modal" data-target="#developerModal">
                Invite a developer to help with installation</button>
                </div>
                </div>
            </div>
          </div>
          <!--<div id="Account" class="col-12 p0 tab-pane fade"><br>
            <div class="form-group mb0" >            	
				<div class="row">
            	<div class="col-md-12 d-flex justify-content-between">
                <div>
                <p class="f-14 d-gblue-clr mt5 mt-md10 mb8 w400">
                DotcomPal Script
                </p></div>
                <div class="mt7 mt-md10">
                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Integrate your website with DotcomPal. In order to do that you just have to install the DotcomPal SDK with your website to track accounts (Known Audience). It allows you to run real-time Campaigns according to your business audience's behavior." class="d-gblue-clr t-decoration-none"><i class="icon-information"></i></a>
                </div>
                </div>
                </div>
				
				
                <div class="row">
                <div class="col-12">
                <textarea class="form-control f-14" rows="10">
<script type="text/javascript">(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//forms.aweber.com/form/33/871649333.js";
fjs.parentNode.insertBefore(js, fjs);
}(document, "script", "aweber-wjs-gnot1u4y3"));
</script>
                </textarea>                
                </div>
                <div class="col-12 mt15 mt-md30 text-right ">
                <button type="submit" class="base-btn blue-btn btn-h40 f-16 btn-xs-block">
                Copy text</button>&nbsp;&nbsp;&nbsp;
                <button class="base-btn default-btn btn-h40 f-16 btn-xs-block" data-toggle="modal" data-target="#developerModal">
                Invite a developer to help with installation</button>
                </div>
                </div>
            </div>
          </div>-->
          
        </div>
      </div>
			
          
           
            
        </div>
	</div>
</div>




<div class="container-fluid py20 vl-gblue-bg smart-script-toggle">
	<div class="row">
    	<div class="col-12">
        	<p class="f-16 f-md-18 vd-gblue-clr w400 text-center">
            Your website is pending for verification :&nbsp;
            <a href="#" class="s-blue-clr f-16 f-md-18"><u>Verify</u></a>
            </p>
        </div>
    </div>
</div>


<!--Instruction Section Start From Here-->

<div class="container-fluid p15 p-md30 pt0 smart-script-toggle">
	<div class="row">
    	<div class="col-12 col-md-12 col-lg-8 d-block mx-auto mt15 mb15 mt-md70 mb-md70">
        	<h3 class="w500 text-center firasans-font f-24">
            <span class="underline">Instructions:</span>  
            </h3>
            
            <h3 class="w500 text-center firasans-font f-24 mt15 mt-md50">
            Step 1  
            </h3>
            <p class="f-16 f-md-18 w400 text-center mt15 lh150">
            Go to Installation section in settings and generate the code. 
            </p>
            
            <div class="mt15 mt-md36">
            <img src="<?php echo $basedir; ?>images/installation/html-part1.gif" class="img-fluid d-block mx-auto" />
            </div>
            
            <h3 class="w500 text-center firasans-font mt15 mt-md60 f-24">
            Step 2  
            </h3>
            <p class="f-16 f-md-18 w400 text-center mt15 lh150">
            Go to cPanel section of your and Locate the index.html file.
            </p>
            
            <div class="mt-md25 mt15 mt-md36">
            <img src="<?php echo $basedir; ?>images/installation/html-part2.gif" class="img-fluid d-block mx-auto" />
            </div>
			
			<h3 class="w500 text-center firasans-font mt15 mt-md60 f-24">
            Step 3  
            </h3>
            <p class="f-16 f-md-18 w400 text-center mt15 lh150">
            Go to header section and paste this HTML code..
            </p>
            
            <div class="mt-md25 mt15 mt-md36">
            <img src="<?php echo $basedir; ?>images/installation/html-part3.gif" class="img-fluid d-block mx-auto" />
            </div>
			
			<h3 class="w500 text-center firasans-font mt15 mt-md60 f-24">
            Step 4  
            </h3>
            <p class="f-16 f-md-18 w400 text-center mt15 lh150">
            Now you need to verify your website on verify button in this step.
            </p>
            
            <div class="mt-md25 mt15 mt-md36">
            <img src="<?php echo $basedir; ?>images/installation/html-part4.gif" class="img-fluid d-block mx-auto" />
            </div>
            
            
        </div>
    </div>
</div>



<?php include '../includes/smart-footer.php'; ?>