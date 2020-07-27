<!------- Header Include File---------->
<?php include '../../../../smart/html/includes/dcp-header.php'; ?>
<!------- Header Include File end---------->

<div class="container-fluid p15 p-md30">
   <!------- Header Start----------->
   <div class="row mb15 mb-md30">
	<div class="col-12">
         <div class="d-flex align-items-center flex-wrap">
            <ul class="stepwizard-style2 f-20 f-md-24 w400 lato-font mr15">
               <li> <a href="#">Contacts</a> </li>
               <li> <a href="#">Import From PC</a> </li>
            </ul>
            <div class="d-flex mt7">
               <a href="#" class="gblue-clr t-decoration-none f-17 mr5" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
               <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
            </div>
         </div>
         <p class="f-14 gblue-clr w400">Here you are manage your all notification</p>
      </div>	
   </div>
   <!------- Header End ----------->
   <!------ Steps Setion Start---------->
	<div class="row">
	<div class="col-12">
	<div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md25">
          <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
            <div class="circle-num"><span>1</span></div>
            <div class="title align-self-center">Import</div>
            <div class="sep-line align-self-center d-none d-lg-block"></div>
          </div>
          <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
            <div class="circle-num"><span> 2</span></div>
            <div class="title align-self-center">Mapping</div>
            <div class="sep-line align-self-center d-none d-lg-block"></div>
          </div>
		  <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
            <div class="circle-num"><span> 3</span></div>
            <div class="title align-self-center">Contact Survey</div>
            <div class="sep-line align-self-center d-none d-lg-block"></div>
          </div>
    </div>
    </div>
    </div>
	<!------ Steps Setion End---------->
   <form action="" method="post">
      <div class="row mt-md15">
         <div class="col-12 col-lg-8 smart-form">
            <div class="form-group mb15 mb-md30">
               <div class="f-14 f-md-16 mb10">How did you obtain this list of email address? <span class="vi-red-clr">*</span></div>
               <textarea class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group mb15 mb-md30">
               <div class="f-14 f-md-16 mb10">What website is this list of emails for and what are the URL’s of your subscription forms? <span class="vi-red-clr">*</span></div>
               <textarea class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group mb15 mb-md30">
               <div class="f-14 f-md-16 mb10">When did you last send to this list of emails and how frequently have you sent to them in the past? <span class="vi-red-clr">*</span></div>
               <textarea class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group mb15 mb-md30">
               <div class="f-14 f-md-16 mb10">How many campaigns do you want to send monthly to this list of email address?  <span class="vi-red-clr">*</span></div>
               <textarea class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group mb0 text-right">
               <input type="submit" name="submit" class="base-btn blue-btn" value="Submit">
			</div>
         </div>
      </div>
   </form>
</div>
<!------- Footer Include File---------->
<?php include '../../../../smart/html/includes/dcp-footer.php'; ?>
<!------- Footer Include File end ---------->