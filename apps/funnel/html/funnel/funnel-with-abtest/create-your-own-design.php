<!------- Smart Header Include File---------->
<?php include '../../../../smart/html/includes/dcp-header.php'; ?>
<!------- Smart Header Include File end---------->
<!------- Smart Page Stylesheet------------->
<link rel="stylesheet" href="../../../css/funnel.css">
<!------- Smart Page Stylesheet end---------->

<div class="container-fluid p15 p-md30">
   <!------- Header Start----------->
   <div class="row mb15 mb-md30">
      <div class="col-12">
         <div class="d-flex align-items-center flex-wrap">
            <ul class="stepwizard-style2 f-20 f-md-24 w400 lato-font mr15">
               <li> <a href="#">Funnel</a> </li>
               <li> <a href="#">Funnel Title </a> </li>
            </ul>
            <div class="d-flex mt7">
               <a href="#" class="gblue-clr t-decoration-none f-17 mr5" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
               <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
            </div>
         </div>
         <p class="f-14 gblue-clr">Here you are manage your all notification</p>
      </div>
   </div>
   <!------- Header End ----------->
   <!------- Step Wizard Div Start----------->
   <div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md25">
      <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
         <div class="circle-num"><span>1</span></div>
         <div class="title align-self-center">Design Selection</div>
         <div class="sep-line align-self-center d-none d-lg-block"></div>
      </div>
      <div class="d-flex justify-content-start flex-wrap mr15 mb5">
         <div class="circle-num"><span> 2</span></div>
         <div class="title align-self-center">Editor</div>
         <div class="sep-line align-self-center d-none d-lg-block"></div>
      </div>
      <div class="d-flex justify-content-start flex-wrap mr15 mb5">
         <div class="circle-num"><span>3</span></div>
         <div class="title align-self-center">Configure AB Test</div>
         <div class="sep-line align-self-center d-none d-lg-block"></div>
      </div>
      <div class="d-flex justify-content-start flex-wrap mr15 mb5">
         <div class="circle-num"><span>4</span></div>
         <div class="title align-self-center">Publish & Activate</div>
         <div class="sep-line align-self-center d-none d-lg-block"></div>
      </div>
   </div>
   <!------- Step Wizard Div End----------->
   <!---------Design Section Start---------->
   <div class="row">
      <div class="col-md-4 col-lg-3 col-xl-2">
         <div class="nav flex-column nav-pills ui-vertical-tab f-16 w400 side-tab-fixed">
            <a class="nav-link"  href="design-from-gallery.php"><i class="icon-gallery"></i>From Gallery</a>
            <a class="nav-link"  href="your-creation-designs.php"><i class="icon-your-creation"></i>Your Creation</a>
            <a class="nav-link active" href="create-your-own-design.php"><i class="icon-create-your-own"></i>Create Your Own </a>
         </div>
      </div>
      <div class="col-md-8 col-lg-9 col-xl-10 mt15 mt-md0">
         <div class="l-gblue-border p15 p-md50">
            <img src="../../../images/create-your-own-img.png" class="img-fluid d-block mx-auto">
            <div class="text-center mt15 mt-md40">
               <a href="#" class="base-btn blue-btn f-16">Start From Scratch</a>
            </div>
         </div>
      </div>
   </div>
   <!---------Design Section End---------->
</div>
<!------- Smart Footer Include File---------->
<?php include '../../../../smart/html/includes/dcp-footer.php'; ?>
<!------- Smart Footer Include File end ---------->
