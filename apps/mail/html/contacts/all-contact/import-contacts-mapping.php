<!------- Smart Header Include File---------->
<?php include '../../../../smart/html/includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<!------- Smart Mail Stylesheet------=------->
<link rel="stylesheet" href="../../../css/mail.css">
<!------- Smart Mail Stylesheet end---------->

<div class="container-fluid p15 p-md30">
	<div class="row mb15 mb-md30">
		<div class="col-12 col-md-12 align-self-center">
		<ul class="stepwizard-style2 w400 lato-font f-20 f-md-24">
          <li><a href="#">Demo 1</a></li>
          <li><a href="#">Mapping</a></li>
        </ul>
		<p class="gblue-clr">Map your contacts to complete the import</p>
		</div>
	</div>
	<!------ Steps Setion Start---------->
	<div class="row">
	<div class="col-12">
	<div class="stepwizard-style3 d-flex justify-content-start flex-wrap mb15 mb-md25">
          <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
            <div class="circle-num"><span><i class="fa fa-check"></i></span></div>
            <div class="title align-self-center">Import</div>
            <div class="sep-line align-self-center d-none d-lg-block"></div>
          </div>
          <div class="active-wizard d-flex justify-content-start flex-wrap mr15 mb5">
            <div class="circle-num"><span> 2</span></div>
            <div class="title align-self-center">Mapping</div>
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
					<a href="#" class="base-btn blue-btn add-field-toggler" data-toggle="modal" data-target="#AddMapFieldModel"><i class="icon-add-second"></i></a>
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
<!------- Smart Footer Include File---------->
<?php include '../../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->
<script>
$('.table-blur-data a').removeAttr("href");
</script>