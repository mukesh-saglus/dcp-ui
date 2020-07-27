<?php include '../includes/smart-header.php'; ?>
<div class="container-fluid p15 p-md30">
	<div class="row">
		   <div class="col-12">
         <ul class="stepwizard-style2 f-20 f-md-24 w400 lato-font">
            <li> <a href="#">Installation</a> </li>
            <li> <a href="#">Wordpress Plugin Installation</a> </li>
         </ul>
         <p class="f-14 gblue-clr w400">Install DotcomPal on your WordPress website with our plugin</p>
      </div>
	</div>

	<div class="row mt15 mt-md30">
        <div class="col-12 smart-form"> 
            
            <div class="form-group">
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
                <button type="submit" class="base-btn blue-btn btn-h40 f-16 mr5" id="SelectScript">
                Yes & Generate Script</button>
                </div>
                </div>
            </div>
            
            <div class="form-group mb0 mt15 mt-md30" id="SmartScriptdiv">
            	<div class="row">
            	<div class="col-md-6 d-flex justify-content-between">
                <div>
                <p class="f-14 d-gblue-clr mt5 mt-md10 mb8 w400">
                Authorised token for your wordpress plugin that you need to copy in DotcomPal plugin.
                </p></div>
                <div class="mt7 mt-md10">
                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Some Info Text Here" class="d-gblue-clr t-decoration-none"><i class="icon-information"></i></a>
                </div>
                </div>
                </div>
                
                <div class="row">
                <div class="col-md-6">
                <input type="text" class="form-control f-14 field-h40" placeholder="Token Key">
                <small class="form-text f-14 text-left d-none">Please enter the correct value</small>
                </div>
                <div class="col-xl-6 mt-xl0 mt15">
                <button type="submit" class="base-btn blue-btn btn-h40 f-16 btn-xs-block mr5">
                Copy Code</button>
                <button class="base-btn default-btn btn-h40 f-16 btn-xs-block mt15 mt-md0" data-toggle="modal" data-target="#developerModal">
                Invite a developer to help with installation</button>
                </div>
                </div>
            </div>
           
            
        </div>
	</div>
</div>




<div class="container-fluid py20 vl-gblue-bg">
	<div class="row">
    	<div class="col-12">
        	<p class="f-16 f-md-18 vd-gblue-clr w400 text-center">
            Your website is pending for verification :&nbsp;
            <a href="#" class="p-blue-clr f-16 f-md-18"><u>Verify</u></a>
            </p>
        </div>
    </div>
</div>


<!--Instruction Section Start From Here-->

<div class="container-fluid p15 p-md30 pt0">
	<div class="row">
    	<div class="col-12 col-md-12 col-lg-8 d-block mx-auto mt15 mb15 mt-md70 mb-md70">
        	<h3 class="w500 text-center firasans-font f-24">
            <span class="underline">Instructions:</span>  
            </h3>
            
            <h3 class="w500 f-24 text-center firasans-font mt15 mt-md50">
            Step 1  
            </h3>
            <p class="f-16 f-md-18 w400 text-center mt15 lh150">
            In your WordPress admin panel, go to Plugins > Add New. Search for DotcomPal plugin in WordPress.
Click on Install Now button to download the plugin.
            </p>
            
            <div class="mt15 mt-md36">
            <img src="<?php echo $basedir; ?>images/dummy-img.png" class="img-fluid d-block mx-auto" />
            </div>
            
            <h3 class="w500 f-24 text-center firasans-font mt15 mt-md60">
            Step 2  
            </h3>
            <p class="f-16 f-md-18 w400 text-center mt15 lh150">
            Now, click on Activate Plugin.
            </p>
            
            <div class="mt15 mt-md36">
            <img src="<?php echo $basedir; ?>images/dummy-img.png" class="img-fluid d-block mx-auto" />
            </div>
            
            
            <h3 class="w500 f-24 text-center firasans-font mt15 mt-md60">
            Step 3 
            </h3>
            <p class="f-16 f-md-18 w400 text-center mt15 lh150">
            After activating, DotcomPal plugin Subscriptions plugin will be displayed in the WordPress Plugin list as shown below.
            </p>
            
            <div class="mt15 mt-md40">
            <img src="<?php echo $basedir; ?>images/dummy-img.png" class="img-fluid d-block mx-auto" />
            </div>
            
            
            <h3 class="w500 f-24 text-center firasans-font mt15 mt-md60">
            Step 4 
            </h3>
            <p class="f-16 f-md-18 w400 text-center mt15 lh150">
            Once you install the DotcomPal plugin on WordPress, you need to integrate your DotcomPal account with
WordPress using an authentication token called Authtoken.

<br/><br/>
<strong>Follow the below steps for integration:</strong><br/>
Click on DotcomPal plugin present in the left navigation pane. DotcomPal plugin
Account Details page will be displayed as shown below
            </p>
            
            <div class="mt15 mt-md40">
            <img src="<?php echo $basedir; ?>images/dummy-img.png" class="img-fluid d-block mx-auto" />
            </div>
            
            
            <h3 class="w500 f-24 text-center firasans-font mt15 mt-md60">
            Step 5 
            </h3>
            <p class="f-16 f-md-18 w400 text-center mt15 lh150">
Enter the Authtoken – An authentication code unique to your DotcomPal plugin account.
            </p>
            
            <div class="mt15 mt-md40">
            <img src="<?php echo $basedir; ?>images/dummy-img.png" class="img-fluid d-block mx-auto" />
            </div>
            
            
            
            <h3 class="w500 f-24 text-center firasans-font mt15 mt-md60">
            Step 6
            </h3>
            <p class="f-16 f-md-18 w400 text-center mt15 lh150">
Once the Authtoken is entered, it will immediately fetch organizations for the entered Authtoken
and the organizations will get pre-populated in the drop down. You can choose your respective
organization as shown below and click Save.
            </p>
            
            <div class="mt15 mt-md40">
            <img src="<?php echo $basedir; ?>images/dummy-img.png" class="img-fluid d-block mx-auto" />
            </div>

            
            
        </div>
    </div>
</div>



<?php include '../includes/smart-footer.php'; ?>