<!------- Smart Header Include File---------->
<?php include '../includes/dcp-header-final.php'; ?>
<!------- Smart Header Include File end---------->



<!------- Header Start----------->
<div class="container-fluid p15 px-md30 py-md30">
	<div class="row">
		<div class="col-12 col-md-7 d-left-m-center align-self-center">
		<span class="f-20 f-md-24 lato-font">Mail Settings </span>&nbsp; <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
		<p class="gblue-clr f-14 w400 mt5">Configure your all email settings</p>
		</div>
		
	</div>
</div>
<!------- Header End ----------->

<!------- Tabs Start ----------->
<ul class="nav tabs-style3 f-14 f-md-16 w-100 relative" role="tablist">
	<li class="nav-item ml15 ml-md30">
	<a class="nav-link lh110" href="smtp-setting.php">
		<span class="d-none d-md-block">SMTP Setting</span>
		<span class="d-block d-md-none"><i class="icon-smtp-setting f-18"></i></span></a>
	</li>
<li class="nav-item">
	<a class="nav-link lh110" href="from-reply-email.php">	
		<span class="d-none d-md-block">From & Reply Email Setting</span>
		<span class="d-block d-md-none"><i class="icon-from-and-reply-mail f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110 active" href="bounce-setting.php">
		<span class="d-none d-md-block">Bounce Setting</span>
		<span class="d-block d-md-none"><i class="icon-bounce-setting f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="mail-footer-setting.php">
		<span class="d-none d-md-block">Mail Footer Setting</span>
		<span class="d-block d-md-none"><i class="icon-bounce-setting f-18"></i></span>
	</a>
</li>
</ul>
<!------- Tabs End ----------->


<div class="container-fluid p15 p-md30">
<!------- Form  Section Start----------->
	<div class="col-12 p0">
    	
		
		<!----- Form Data --------->
		<div class="row">
			<div class="col-12 smart-form">                    
                <form>
                     <div class="row">
                        <div class="col-md-5 col-lg-4 mb15 mb-md30 f-14">                          
                          <div class="d-flex justify-content-between">
                          <div>
                          <label class="d-gblue-clr">Bounce address</label><a class="ml10 d-gblue-clr t-decoration-none" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="The username of your IMAP server, usually something like you@domain.com."><i class="icon-information aling-bottom"></i></a></div>                        
                          </div>
                          <input class="form-control f-14 field-h40" type="text" value="saglustest@gmail.com">
                        </div>
                        
                        <div class="col-md-5 col-lg-4 offset-lg-1 mb15 mb-md30 f-14">
                          <div class="d-flex justify-content-between">
                          <div>
                          <label class="d-gblue-clr">Bounce Server</label><a class="ml10 d-gblue-clr t-decoration-none" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Enter the IMAP details of your e-mail service provider."><i class="icon-information aling-bottom"></i></a></div>                          
                          </div>
                          <input class="form-control f-14 field-h40" type="text" value="imap.gmail.com">
                        </div>
                     </div>
                    
                    
                     <div class="row">
                        <div class="col-md-5 col-lg-4 mb15 mb-md30 f-14">
                          <div class="d-flex justify-content-between">
                          <div>
                          <label class="d-gblue-clr">Bounce password</label><a href="#" class="ml10 d-gblue-clr t-decoration-none" data-toggle="tooltip" data-placement="top" title="" data-original-title="Enter the password of your e-mail entered in Bounce address, this is used in combination with your username to authenticate your request."><i class="icon-information aling-bottom"></i></a></div>                         
                          </div>
                          <input class="form-control f-14 field-h40" type="text">
                        </div>
                        
                        <div class="col-md-5 col-lg-4 offset-lg-1 mb15 mb-md30 f-14">
                          <div class="d-flex justify-content-between">
                          <div>
                          <label class="d-gblue-clr">Bounce port</label><a class="ml10 d-gblue-clr t-decoration-none" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="The port of your IMAP server, usually for IMAP this is 143. If you are using SSL, then the port for IMAP is 993."><i class="icon-information aling-bottom"></i></a></div>                         
                          </div>
                          <input class="form-control f-14 field-h40" type="text" value="993">
                        </div>
                     </div>
                        
                     <div class="row">
                        <div class="col-md-5 col-lg-4 mb15 mb-md15 f-14">
                          <div class="d-flex justify-content-between">
                          <div>
                          <label class="d-gblue-clr">Account type</label><a class="ml10 d-gblue-clr t-decoration-none" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select the account type."><i class="icon-information aling-bottom"></i></a></div>                         
                          </div>
                          <input class="form-control f-14 field-h40" type="text" value="IMAP Account" disabled>
                        </div>
                     </div>
                        
                </form>                
            </div>
		</div>
        
        
        
        <div class="row">            
            <div class="col-12 text-md-right text-center">            	
                <a href="#" class="base-btn default-btn">Reset</a>&nbsp;&nbsp;
                <a href="#" class="base-btn blue-btn">Save</a>               
            </div>
        </div>
        
		
	</div>
</div>
<!------- Segment Audience Details Section End----------->		



<!------- Smart Footer Include File---------->
<?php include '../includes/dcp-footer.php'; ?>
<!------- Smart Footer Include File end ---------->