<!------- Smart Header Include File---------->
<?php include '../includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->



<!------- Header Start----------->
<div class="container-fluid p15 px-md30 py-md30">
	<div class="row">
		<div class="col-12 col-md-7 align-self-center">
		<span class="f-20 f-md-24 lato-font">Mail Settings </span>&nbsp; <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
		<p class="gblue-clr f-14 w400 mt5">Define details for sender address and auto-reply</p>
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
	<a class="nav-link active lh110" href="domain-management.php">	
		<span class="d-none d-md-block">Domain Management</span>
		<span class="d-block d-md-none"><i class="icon-domain-management f-18"></i></span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link lh110" href="bounce-setting.php">
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
<!------- Segment Audience Details Section Start----------->
	<div class="col-12 p0">
    
		<!--- Filteration Div ---->
		<div class="row justify-content-end">	
			<div class="col-md-12 col-lg-9">
				<div class="row">                
                <div class="col-md-3 col-lg-3 col-xl-3 text-lg-right offset-md-0 offset-lg-2 offset-xl-3 offset-3 mb10 mb-md0 px-md15 p0">
                    <div class="btn-group dropdown simple-dropdown">
                      <a href="javascript:void(0)" data-toggle="modal" data-target="#addnewdomainModal" class="btn base-btn blue-btn f-14 btn-h40">
					  <i class="icon-add-new f-14 align-middle mr5"></i>
                      Add New Domain</a>
                    </div>
                </div>


				<div class="col-md-5 col-lg-4 col-xl-4 mb10 mb-md0">					
                    <div class="smart-search-field">
                        <div class="input-group">
                            <input class="form-control" placeholder="Search" type="text">
                            <div class="input-group-append">
                                <button class="btn" type="submit"> <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
				</div>
                
                <div class="col-md-4 col-lg-3 col-xl-2">
                    <div class="row">
                        <div class="col-3 col-md-3 col-lg-4 d-flex align-self-center f-14">Show</div>
                        <div class="col-9 col-md-9 col-lg-8 bs-h40">
                            <select class="selectpicker f-14">
                                <option>04</option>
                                <option>05</option>
                                <option>06</option>
                            </select>
                        </div>
                    </div>
                </div>
				</div>
			</div>
		</div>	
		
		<!----- Table Data --------->
		<div class="row mt15 mt-md30">
			<div class="col-12">
			<!------- Library Grid View------>
				<div class="table-responsive smart-table-style mb15 mb-md30 thori-scroll">
				  <table class="table table-bordered">
					<thead>
					  <tr>
						<th>
							<div class="smart-checkbox-btn checkbox-strong-blue pull-left mt6">
								<input id="checkAll2" type="checkbox">
								<label for="checkAll2"></label>
							</div>
						</th>
						<th>Domain Name &nbsp;<i class="fa fa-sort"></i></th>
						<th>From & Reply Emails</th>
						<th>SPF</th>
						<th>DKIM</th>
						<th>DMARC</th>
						<th>Actions</th>
					
					  </tr>

					</thead>
					  
					<div class="table-option-manage animated fadeIn ml10">
						<ul class="list-inline f-14 w400 mb0">							
                            <li class="list-inline-item mb10 mb-lg0"><a href="javascript:void(0)" class="base-btn default-btn btn-h30 f-14" title="Delete"><i class="icon-delete"></i> &nbsp; Delete</a>
							</li>
						</ul>
					</div>
					 <!----- Table Option Div end---->


					<tbody>
                        <tr class="">
                        <td width="3%"><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="lcheck1" type="checkbox" class="checkbox-active">
                        <label for="lcheck1"></label>
                        </div></td>
                        <td>Project Name 1</td>
                                            
                        <td>
                        2
                        </td>
						<td>
						<i class="icon-cross vi-red-clr f-14 w700"></i></a></li>
                        </td>
						<td>
						<i class="icon-cross vi-red-clr f-14 w700"></i></a></li>
                        </td>
						<td>
						<i class="icon-cross vi-red-clr f-14 w700"></i></a></li>
                        </td>
                        <td><ul class="table-action">
                         <li class="action-menu"><a href="#" class="action-item" title="Resend"><i class="icon-edit"></i></a></li>
                        <li class="action-menu"><a href="javascript:void(0)" class="action-item" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i></a></li>
                        </ul></td>
                        </tr>                        
                        
                        <tr>
                        <td width="3%"><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="lcheck1" type="checkbox" class="checkbox-active">
                        <label for="lcheck1"></label>
                        </div></td>
                        <td>Project Name 2</td>
                                            
                        <td>
                        0
                        </td>
						<td>
						<i class="icon-cross vi-red-clr f-14 w700"></i></a></li>
                        </td>
						<td>
						<i class="icon-cross vi-red-clr f-14 w700"></i></a></li>
                        </td>
						<td>
						<i class="icon-cross vi-red-clr f-14 w700"></i></a></li>
                        </td>
                        <td><ul class="table-action">
                         <li class="action-menu"><a href="#" class="action-item" title="Resend"><i class="icon-edit"></i></a></li>
                        <li class="action-menu"><a href="javascript:void(0)" class="action-item" data-toggle="modal" data-target="#deleteModal" title="delete"><i class="icon-delete"></i></a></li>
                        </ul></td>
                        </tr>
                        
                        <tr>
                        <td width="3%"><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="lcheck1" type="checkbox" class="checkbox-active">
                        <label for="lcheck1"></label>
                        </div></td>
                        <td>Project Name 3</td>
                                            
                        <td>
                        1
                        </td>
						<td>
						<i class="icon-cross vi-red-clr f-14 w700"></i></a></li>
                        </td>
						<td>
						<i class="icon-cross vi-red-clr f-14 w700"></i></a></li>
                        </td>
						<td>
						<i class="icon-cross vi-red-clr f-14 w700"></i></a></li>
                        </td>
                        <td><ul class="table-action">
                         <li class="action-menu"><a href="#" class="action-item" title="Resend"><i class="icon-edit"></i></a></li>
                        <li class="action-menu"><a href="javascript:void(0)" class="action-item" data-toggle="modal" data-target="#deleteModal" title="Delete"><i class="icon-delete"></i></a></li>
                        </ul></td>
                        </tr>                        
                        
                        <tr>
                        <td width="3%"><div class="smart-checkbox-btn checkbox-strong-blue">
                        <input id="lcheck1" type="checkbox" class="checkbox-active">
                        <label for="lcheck1"></label>
                        </div></td>
                        <td>Project Name 4</td>
                                            
                        <td>
                        2
                        </td>
						<td>
						<i class="icon-tick sl-green-clr f-14 w700"></i></a></li>
                        </td>
						<td>
						<i class="icon-tick sl-green-clr f-14 w700"></i></a></li>
                        </td>
						<td>
						<i class="icon-tick sl-green-clr f-14 w700"></i></a></li>
                        </td>
                        <td><ul class="table-action">
                         <li class="action-menu"><a href="#" class="action-item" title="Resend"><i class="icon-edit"></i></a></li>
                        <li class="action-menu"><a href="javascript:void(0)" class="action-item" data-toggle="modal" data-target="#deleteModal" title="Delete"><i class="icon-delete"></i></a></li>
                        </ul></td>
                        </tr>
                      					
					</tbody>
				  </table>
				</div>

				   <!----- Pagination Div Start----->
			
				<div class="d-flex justify-content-between flex-wrap f-14 mt15 mt-md30">
				<div class="d-flex justify-content-start align-items-center mb5">
				Show
				<span class="bs-h40 entries-width px15">
				<select class="selectpicker" >
					<option>10</option>
					<option>20</option>
					<option>30</option>
				</select>
				</span>
				<span class="d-none d-xl-block">Showing 1 to 4 of 400 entries</span>
				</div> 	
				<div class="mb5">
				<ul class="rounded-pagination f-14">
					<li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i> </a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </a></li>
					<li><a href="#" class="active">6</a></li>
					<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> </a></li>
				</ul>
				</div> 
			</div> 
		
			   <!----- Pagination Div End----->			

					</div>
		</div>
		
	</div>
	</div>
<!------- Segment Audience Details Section End----------->		



<!------- Smart Footer Include File---------->
<?php include '../includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->