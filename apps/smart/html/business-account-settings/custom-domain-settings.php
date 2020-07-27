<!------- DCP Header Include File---------->
<?php include '../includes/smart-header.php'; ?>
<!------- DCP Header Include File end---------->

<div class="container-fluid p15 p-md30">
	<!------- Header Start----------->
	<div class="row">
		<div class="col-12">
			<span class="f-20 f-md-24 lato-font">Custom Domain Settings </span> &nbsp;
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="d-gblue-clr w400 mt5">Configure your custom domain</p>
		</div>
	</div>
	<!------- Header End ----------->

	<!------- SEO Setting Analytics Section ----------->		
	<div class="row mt15 mt-md30">
		<div class="col-12 col-md-10 col-lg-9 col-xl-8 smart-form f-14 d-gblue-clr custom-domain-area">                                
			<form>

				<div class="row">
					<div class="col-12 col-md-4 col-lg-4 col-xl-3 mt-md15">
						Custom Domain name<span class="vi-red-clr">*</span>
					</div>
					<div class="col-10 col-md-6 col-lg-6 col-xl-6 mt15 mt-md0">
						<input class="form-control f-14 field-h40 domainname" name="domainname" type="text" placeholder="Enter domain name ie. www.example.com">
					</div>
					<div class="col-2 col-md-2 col-lg-2 col-xl-2 mt15 mt-md5">
						<a href="#" class="d-inline-block px8 py6 radius4 align-top white-clr defaultlink f-13" title="Edit"><i class="icon-edit"></i></a>
					</div>
					
					
				</div>
				
				<div class="row mt15 mt-md30">
					<div class="col-12 col-md-4 col-lg-4 col-xl-3 mt-md15">
						DCP Backend URL<span class="vi-red-clr">*</span>
					</div>
					<div class="col-10 col-md-6 col-lg-6 col-xl-6 mt15 mt-md0">
					<div class="form-group relative">
            <input type="text" class="form-control f-14 field-h40" value="bms" aria-label="" aria-describedby="basic-addon1">
            <div class="form-control-text-right">
              <button class="btn addon-icon f-15 vl-gblue-bg domain" type="button">.your-domain-name.com </button>
            </div>
          </div>
					</div>
					<div class="col-2 col-md-2 col-lg-2 col-xl-2 mt15 mt-md5">
						<a href="#" class="d-inline-block px8 py6 radius4 align-top white-clr defaultlink f-13" title="Edit"><i class="icon-edit"></i></a>
					</div>
				</div>
				
				<div class="row mt15">
					<div class="col-12 col-md-12 col-lg-12 col-xl-10 text-md-right text-center">         
						<!--<a href="#" class="base-btn green-btn">Create Distribution</a>&nbsp;&nbsp;
						<a href="#" class="base-btn green-btn">Show CNAME</a>&nbsp;&nbsp;-->
						<a href="#" class="base-btn blue-btn">Request for CName</a>
					</div>
				</div>

			</form> 
		</div>
		
		
		
		<div class="col-12 col-md-12 col-lg-12 col-xl-12 smart-form f-14 mt30 d-gblue-clr">
				<div class="row">
					<div class="col-12">
					<h4>Add Following CNAMEs to Your Domain</h4>
						<div class="custom-domain mt-md30">
						<h5>CNAME Details for example.com</h5>
						
						<div class="row">
						<div class="col-12 col-lg-3 col-xl-2 mt30">
						<b>Name :</b>
						</div>
						<div class="col-12 col-lg-8 col-xl-9 mt30">
						<span class="cname">_b140532eb55be9ae16548d3da6e6a6d7.www.ragson.com.</span> <a class="copycname" href="JavaScript:void(0);">Copy</a>
						</div>
						</div>
						
						<div class="row">
						<div class="col-12 col-lg-3 col-xl-2 mt15">
						<b>Value :</b>
						</div>
						<div class="col-12 col-lg-8 col-xl-9 mt15">
						_ac057d008413f1cdf9dfd94c70c0258c.ltfvzjuylp.acm-validations.aws.
						</div>
						</div>
						
						<div class="row">
						<div class="col-12 col-lg-3 col-xl-2 mt15">
						<b>Status :</b>
						</div>
						<div class="col-12 col-lg-8 col-xl-9 mt15">
						PENDING_VALIDATION
						</div>
						</div>
						
						
						
						<h5 class="mt40">CNAME Details for bms.example.com</h5>
						
						<div class="row">
						<div class="col-12 col-lg-3 col-xl-2 mt30">
						<b>Name :</b>
						</div>
						<div class="col-12 col-lg-8 col-xl-9 mt30">
						_b140532eb55be9ae16548d3da6e6a6d7.www.ragson.com.
						</div>
						</div>
						
						<div class="row">
						<div class="col-12 col-lg-3 col-xl-2 mt15">
						<b>Value :</b>
						</div>
						<div class="col-12 col-lg-8 col-xl-9 mt15">
						_ac057d008413f1cdf9dfd94c70c0258c.ltfvzjuylp.acm-validations.aws.
						</div>
						</div>
						
						<div class="row">
						<div class="col-12 col-lg-3 col-xl-2 mt15">
						<b>Status :</b>
						</div>
						<div class="col-12 col-lg-8 col-xl-9 mt15">
						PENDING_VALIDATION
						</div>
						</div>
						
						
						
						</div>
						
						<div class="mt20 text-right">
						<a href="#" class="base-btn blue-btn">Create distribution</a>
						</div>
						
					</div>
				</div>
		</div>
		
		
		
	</div>        
</div>

<!------- DCP Footer Include File---------->
<?php include '../includes/smart-footer.php'; ?>
<script>
$(".domainname").keyup(function(){
  var domain = $('.domainname').val();
  $( ".domain" ).html( domain );
});

$(".copycname").click(function(){
  //alert($(this).prev(".cname").html());
  
  /* Get the text field */
  var copyText = $(this).prev(".cname");

  /* Select the text field */
  copyText.select();

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Copied the text: " + copyText.text());
  
  
});

</script>
<!------- DCP Footer Include File end ---------->