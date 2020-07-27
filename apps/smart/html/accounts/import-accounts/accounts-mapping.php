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
			<p class="f-14 gblue-clr">Import contacts from PC</p>
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
		  <div class="d-flex justify-content-start flex-wrap mr15 mb5">
            <div class="circle-num"><span> 3</span></div>
            <div class="title align-self-center">Contact Survey</div>
            <div class="sep-line align-self-center d-none d-lg-block"></div>
          </div>
    </div>
    </div>
    </div>
	<!------ Steps Setion End---------->



        <div class="row">
          <div class="col-12 mt20">
            <div id="thori-scroll" class="table-responsive smart-table-style mapping-table-style">
              <table class="table table-bordered">
				<thead>
				<th class="bs-h40 th-mw200">
					<select class="selectpicker f-14">
						<option>Email</option>
						<option>Name</option>
						<option>Email</option>
						<option>Mobile No.</option>
						<option>City</option>
						<option>State</option>
					</select>
				</th>
				<th class="bs-h40 th-mw200">
					<select class="selectpicker f-14">
						<option>Select Field</option>
						<option>Name</option>
						<option>Email</option>
						<option>Mobile No.</option>
						<option>City</option>
						<option>State</option>
					</select>
					</th>
				<th class="bs-h40 th-mw200">
					<select class="selectpicker f-14">
						<option>Mobile Number</option>
						<option>Name</option>
						<option>Email</option>
						<option>Mobile No.</option>
						<option>City</option>
						<option>State</option>
					</select>
				</th>
				<th class="bs-h40 th-mw200">
					<select class="selectpicker f-14">
						<option>City</option>
						<option>Name</option>
						<option>Email</option>
						<option>Mobile No.</option>
						<option>City</option>
						<option>State</option>
					</select>
					</th>
				<th class="bs-h40 th-mw200">
					<select class="selectpicker f-14">
						<option>State</option>
						<option>Name</option>
						<option>Email</option>
						<option>Mobile No.</option>
						<option>City</option>
						<option>State</option>
					</select>
				</th>
				<th class="bs-h40 th-mw200">
					<select class="selectpicker f-14">
						<option>Select Field</option>
						<option>Name</option>
						<option>Email</option>
						<option>Mobile No.</option>
						<option>City</option>
						<option>State</option>
					</select>
				</th>
				<th class="bs-h40 th-mw200">
					<select class="selectpicker f-14">
						<option>Select Field</option>
						<option>Name</option>
						<option>Email</option>
						<option>Mobile No.</option>
						<option>City</option>
						<option>State</option>
					</select>
				</th>
				<th>
	<div class="dropdown simple-dropdown">
          <a href="#" class="base-btn blue-btn add-field-toggler" id="dropdownMenu1" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false"><i class="icon-add-second"></i></a>
          <div class="dropdown-menu dropdown-menu-right h-auto f-14 mapping-dropdown" aria-labelledby="dropdownMenu1">
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
				</th>
				</thead>
                <tbody>
                  <tr>
					<td><a href="#" class="p-blue-clr t-decoration-none">sharmaanurag@gmail.com</a></td>
                    <td>Anurag Sharma</td>
                    <td>9999999999</td>
                    <td>9999999999</td>
                    <td>Kota</td>
                    <td>Rajasthan</td>
                    <td>India</td>
                    <td>&nbsp;</td>
                  </tr>
				<tr class="table-blur-data">
					<td><a href="#" class="p-blue-clr t-decoration-none">sharmaanurag@gmail.com</a></td>
                    <td>Anurag Sharma</td>
                    <td>9999999999</td>
                    <td>9999999999</td>
                    <td>Kota</td>
                    <td>Rajasthan</td>
                    <td>India</td>
                    <td>&nbsp;</td>
                  </tr>
					<tr class="table-blur-data">
					<td><a href="#" class="p-blue-clr t-decoration-none">sharmaanurag@gmail.com</a></td>
                    <td>Anurag Sharma</td>
                    <td>9999999999</td>
                    <td>9999999999</td>
                    <td>Kota</td>
                    <td>Rajasthan</td>
                    <td>India</td>
                    <td>&nbsp;</td>
                  </tr><tr class="table-blur-data">
					<td><a href="#" class="p-blue-clr t-decoration-none">sharmaanurag@gmail.com</a></td>
                    <td>Anurag Sharma</td>
                    <td>9999999999</td>
                    <td>9999999999</td>
                    <td>Kota</td>
                    <td>Rajasthan</td>
                    <td>India</td>
                    <td>&nbsp;</td>
                  </tr>
				
                </tbody>
              </table>
            </div>
			

			  
          </div>
		  
		  <div class="col-12 text-right mt-md30 mt15">
		  <button type="button" class="base-btn default-btn">Back</button> &nbsp; 
		  <input type="submit" class="base-btn blue-btn" value="Save">
		  </div>
		  
			
        </div>
      </div>
<!------- Footer Include File---------->
<?php include '../../../../smart/html/includes/dcp-footer.php'; ?>
<!------- Footer Include File end ---------->