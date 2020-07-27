<!------- Smart Header Include File---------->
<?php include '../../../../smart/html/includes/dcp-header-final.php'; ?>
<!------- Smart Header Include File end---------->

<!------- Smart Mail Stylesheet------=------->
<link rel="stylesheet" href="../../../css/mail.css">
<!------- Smart Mail Stylesheet end---------->

<div class="container-fluid p15 p-md30">
	<!------- Header Start----------->
	<div class="row mb15 mb-md30">
		<div class="col-12">
		<ul class="stepwizard-style2 w400 lato-font f-20 f-md-24">
          <li><a href="#">List Name </a></li>
          <li><a href="#">Import</a></li>
        </ul>
			<p class="f-14 mt5 gblue-clr">Import your contacts from PC</p>
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
          <div class="d-flex justify-content-start flex-wrap mr15 mb5">
            <div class="circle-num"><span> 2</span></div>
            <div class="title align-self-center">Mapping</div>
            <div class="sep-line align-self-center d-none d-lg-block"></div>
          </div>
    </div>
    </div>
    </div>
	<!------ Steps Setion End---------->
	
	
	
	<div class="row mt15 import-contacts">
	<div class="col-12 text-center">
	<!--- drop upload start--->            

				<div class="dropzone-uploader-mail p15 p-md30 vd-gblue-clr text-center">
					<i class="icon-import-from-pc d-gblue-clr f-50"></i>
						<p class="f-14 w400 my15">Drag and Drop files here to Upload or</p>
					<button type="button" class="base-btn blue-btn">Select File To Upload</button>
				</div>
					
					<!--------- Drag Hover Div Start---->
				<div class="dropzone-uploader-mail-drag p15 p-md20 vd-gblue-clr text-center f-14 align-items-center d-flex justify-content-center">
					<i class="icon-drop-file-here f-45 d-gblue-clr mr15"></i> Drop Files Here
				</div>
	
	<p class="text-right f-12 d-gblue-clr mt12">Accepted File : CSV | XLS | XLSX</p>
	
	</div>
	  <!------ Files Listing--->
		<div class="col-12">
	   	<div class="row">
		<div class="col-12 col-md-6">
		   <div class="d-flex justify-content-start mt15 mt-md30">
			  <div class="d-flex align-items-center"><i class="icon-csv f-50 d-gblue-clr"></i></div>
			  <div class="align-self-center ml15 ml-md20 w-100 text-truncate">
				 <h5 class="vd-gblue-clr w400 f-14 text-truncate" title="Salecopy_210.csv">Salecopy_210.csv</h5>
				 <div class="rounded-progress mt8">
					<div class="rounded-progress-bar s-green-bg" style="width:90%"></div>
				 </div>
				 <div class="d-gblue-clr w400 f-12 mt8 d-flex justify-content-between flex-wrap">
					<div>5.7 MB of 7.8 MB</div>
					<div>45% Completed</div>
				 </div>
			  </div>
			  <div class="d-flex align-items-center ml20">
				 <a href="#" class="d-gblue-clr t-decoration-none"><i class="icon-cross f-12"></i></a>
			  </div>
		   </div>
		</div>	
			
		<div class="col-12 col-md-6">
		   <div class="d-flex justify-content-start mt15 mt-md30">
			  <div class="d-flex align-items-center"><i class="icon-csv f-50 d-gblue-clr"></i></div>
			  <div class="align-self-center ml15 ml-md20 w-100 text-truncate">
				 <h5 class="vd-gblue-clr w400 f-14 text-truncate" title="Salecopy_210.csv">Salecopy_210.csv</h5>
				 <div class="rounded-progress mt8">
					<div class="rounded-progress-bar s-green-bg" style="width:90%"></div>
				 </div>
				 <div class="d-gblue-clr w400 f-12 mt8 d-flex justify-content-between flex-wrap">
					<div>5.7 MB of 7.8 MB</div>
					<div>45% Completed</div>
				 </div>
			  </div>
			  <div class="d-flex align-items-center ml20">
				 <a href="#" class="d-gblue-clr t-decoration-none"><i class="icon-cross f-12"></i></a>
			  </div>
		   </div>
		</div>
			
		<div class="col-12 col-md-6">
		   <div class="d-flex justify-content-start mt15 mt-md30">
			  <div class="d-flex align-items-center"><i class="icon-csv f-50 d-gblue-clr"></i></div>
			  <div class="align-self-center ml15 ml-md20 text-truncate">
				 <h5 class="vd-gblue-clr w400 f-14 text-truncate" title="Salecopy_210.csv">Salecopy_210.csv</h5>
				 <p class="d-gblue-clr w400 f-12 mt8">5.7 MB of 7.8 MB </p>
			  </div>
			  <div class="d-flex align-items-center ml20">
				 <a href="#" class="d-gblue-clr t-decoration-none"><i class="icon-cross f-12"></i></a>
			  </div>
		   </div>
		</div>	
		</div>
	   </div>

	<div class="col-12 col-md-6 col-lg-5 mt-md30 mt15">
	<p class="f-16 lh130">Add Tags</p>
	<div class="smart-form mt8 segment-accordion">
	<div class="form-group mb0 f-14">
	<input class="form-control" value="Tags" name="tags_primary" id="primary" style="display: none;">
	<p class="f-14 mt10 d-gblue-clr tag-instructions">please separate Tag by Comma or enter.</p>
	</div>
	</div>
	</div>
	
	</div>
	
	<div class="row d-flex align-items-center">
	<div class="col-12 col-md-6 mt-md30 mt15">
	<div class="smart-form mt-md8 f-16">
	<div class="smart-checkbox-btn checkbox-strong-blue">
    <input id="checkbox1" type="checkbox">
    <label for="checkbox1" class="d-inline"> I Have Permission To Add This Contact To List</label>
    </div>
	</div>
	</div>
	
	<div class="col-12 col-md-6 mt-md30 mt15 text-right">
	<a href="#" class="base-btn default-btn mr5">Cancel</a> 
	<input type="submit" class="base-btn blue-btn" value="Next">
	</div>
	
	
	
	</div>

	
</div>


<!------- Smart Footer Include File---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->