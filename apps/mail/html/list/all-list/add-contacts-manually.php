<!------- Smart Header Include File---------->
<?php include '../../../../smart/html/includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<!------- Smart Mail Stylesheet------=------->
<link rel="stylesheet" href="../../../css/mail.css">
<!------- Smart Mail Stylesheet end---------->

<div class="container-fluid p15 p-md30">
	<div class="row align-items-center">
		<div class="col-12 col-md-8 col-lg-9">
		<span class="f-md-24 f-20 lato-font">List Name</span>
		<p class="lightgrey mt5">Add your contacts manually</p>
		</div>
		<div class="col-12 col-md-4 col-lg-3 text-center text-md-right mt10 mt-md0">
		<div class="dropdown simple-dropdown">
          <a href="#" class="base-btn blue-btn add-field-toggler" id="dropdownMenu1" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false"><i class="icon-add-second"></i></a>
          <div class="dropdown-menu dropdown-menu-right w-100 h-auto f-14" aria-labelledby="dropdownMenu1">
            <!--- Searchbox Field ------->
            <div class="bs-searchbox-field stoppropagation">
              <div class="input-group">
                <div class="smart-checkbox-btn checkbox-strong-blue">
                  <input id="saerch1" type="checkbox">
                  <label for="saerch1" class="mb4"></label>
                </div>
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-append">
                  <button class="btn" type="submit"> <i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
            <!--- Scrollbar Div start ------->
            <div class="mCustomScrollbar f-14 mh-180" data-mcs-theme="inset-3">
			<div class="stoppropagation">
              <li> <a href="javascript:void(0)" class="dropdown-item">
                <div class="smart-checkbox-btn checkbox-strong-blue">
                  <input id="name" type="checkbox">
                  <label for="name"> Name</label>
                </div>
                </a> </li>
              <li> <a href="javascript:void(0)" class="dropdown-item">
                <div class="smart-checkbox-btn checkbox-strong-blue">
                  <input id="email" type="checkbox">
                  <label for="email"> Email</label>
                </div>
                </a> </li>
              <li> <a href="javascript:void(0)" class="dropdown-item">
                <div class="smart-checkbox-btn checkbox-strong-blue">
                  <input id="mobile" type="checkbox">
                  <label for="mobile"> Mobile No.</label>
                </div>
                </a> </li>
              <li> <a href="javascript:void(0)" class="dropdown-item">
                <div class="smart-checkbox-btn checkbox-strong-blue">
                  <input id="company" type="checkbox">
                  <label for="company"> Company Name</label>
                </div>
                </a> </li>
              <li><a href="javascript:void(0)" class="dropdown-item">
                <div class="smart-checkbox-btn checkbox-strong-blue">
                  <input id="role" type="checkbox">
                  <label for="role"> Role</label>
                </div>
                </a> </li>
			  <li><a href="javascript:void(0)" class="dropdown-item">
                <div class="smart-checkbox-btn checkbox-strong-blue">
                  <input id="age" type="checkbox">
                  <label for="age"> Age</label>
                </div>
                </a> </li>
				</div>
				<li><a href="javascript:void(0)" data-toggle="modal" data-target="#AddMapFieldModel" class="dropdown-item mt6 p-blue-clr">
                &nbsp; &nbsp; &nbsp; &nbsp;Add ‘Custom Field’
                </a> </li>
            </div>
            <!--- Dropdown footer start ------->
            <div class="drop-footer f-14"><span class="stoppropagation">Selection : 3/8</span> <a href="#" class="p-blue-clr t-decoration-none pull-right">Apply</a> </div>
</div></div>
		</div>
	</div>
        <div class="row mt-md15">
          <div class="col-12 t-decoration-none ">            
               <div class="row d-flex flex-wrap smart-form">
				<div class="px15 col-add-manually mt15">
				<label class="d-gblue-clr">Name</label>
				<input type="text" name="" class="form-control" placeholder="Enter Name Here">
				</div>
				<div class="px15 col-add-manually mt15">
				<label class="d-gblue-clr">Email</label>
				<input type="text" name="" class="form-control" placeholder="Enter Email Here">
				</div>
				<div class="px15 col-add-manually mt15 flag-height">
				<label class="d-gblue-clr">Mobile No.</label>
				<div class="form-group mb0 f-14">
				<input id="phone" type="tel" name="mobile" class="form-control f-14" placeholder="Mobile no">
				</div>
				</div>
				<div class="px15 col-add-manually mt15">
				<label class="d-gblue-clr">Company name</label>
				<input type="text" name="" class="form-control" placeholder="Enter Company name Here">
				</div>
				<div class="px15 col-add-manually mt15">
				<label class="d-gblue-clr">Role</label>
				<input type="text" name="" class="form-control" placeholder="Enter Role Here">
				</div>
				<div class="px15 col-add-manually mt15">
				<label class="d-gblue-clr">Age</label>
				<div class="d-flex">
				<input type="text" name="" class="form-control" placeholder="Enter your age">
				</div>
				</div>
				<div class="d-flex p15 p-md0 pb0">
				<a href="#" class="d-inline-block d-gblue-clr segment-delete align-self-end mb-md17 f-16"><i class="icon-delete"></i></a>
				</div>
            </div> 		  
           <div class="row d-flex flex-wrap smart-form">
				<div class="px15 col-add-manually mt15">
				<label class="d-gblue-clr">Name</label>
				<input type="text" name="name" class="form-control" placeholder="Enter Name Here">
				</div>
				<div class="px15 col-add-manually mt15">
				<label class="d-gblue-clr">Email</label>
				<input type="text" name="email" class="form-control" placeholder="Enter Email Here">
				</div>
				<div class="px15 col-add-manually mt15">
				<label class="d-gblue-clr">Mobile Number</label>
				<div class="d-flex">
				<input type="text" name="mobile" class="form-control" placeholder="Enter Mobile No.">
				</div>
				</div>
				<div class="d-flex p15 p-md0 pb0">
				<a href="#" class="d-inline-block p-blue-clr segment-add align-self-end mb-md17 f-16"><i class="icon-add-three"></i></a>
				</div>
            </div>
			
		   <div class="row mt-md40 mt15 ">
			<div class="col-12 col-md-6 col-lg-5">
			<p class="f-14 lh130 d-gblue-clr">Add Tags</p>
			<div class="smart-form mt8 segment-accordion">
			<div class="form-group mb0 f-14">
			<input class="form-control" value="Tags" name="tags_primary" id="primary" style="display: none;">
			<p class="f-14 mt10 d-gblue-clr tag-instructions">Please separate Tag by Comma or enter.</p>
			</div>
			</div>
			</div>
			</div>
          </div>
		<div class="col-12 col-md-12 col-lg-12">            
			<div class="row d-flex align-items-center">
			<div class="col-12 col-md-7 mt-md30 mt15">
			<div class="smart-form mt-md8 f-16">
			<div class="smart-checkbox-btn checkbox-strong-blue">
			<input id="checkbox1" type="checkbox">
			<label for="checkbox1" class="d-inline"> I Have Permission To Add This Contact To List</label>
			</div>
			</div>
			</div>
			<div class="col-12 col-md-5 mt-md30 mt15 text-right">
			<a href="#" class="base-btn default-btn mr5">Cancel</a>
			<button type="button" class="base-btn blue-btn">Save</button>
			</div>
			</div>
        </div>
        </div>
     
	  </div>
<!------- Smart Footer Include File---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->