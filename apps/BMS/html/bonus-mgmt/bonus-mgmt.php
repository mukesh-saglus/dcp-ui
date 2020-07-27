<!------- BMS Main Header Include File---------->
<?php include '../../../smart/html/includes/smart-header-bms.php'; ?>
<!------- BMS Main Header Include File end----------> 

<!------- BMS Stylesheet------=------->
<link rel="stylesheet" href="../../css/bms.css">
<!-------BMS Stylesheet end---------->

<div class="container-fluid p15 p-md30">
  <div class="row align-items-center">
    <div class="col-12 col-md-5 col-lg-6"> <span class="f-20 f-md-24 lato-font">Bonus Categories</span> &nbsp; <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a> <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
      <p class="d-gblue-clr w400 mt5">Lorem ipsum lorem ipsum</p>
    </div>
    <div class="col-12 col-md-7 col-lg-6 text-center text-md-right"> <a href="#" data-toggle="modal" data-target="#BonusNewCategory" class="base-btn blue-btn mt10 mt-md0"><i class="icon-add-new f-18 align-middle"></i>&nbsp;&nbsp; New Category</a> </div>
  </div>
  <div class="row mt-md30 mt15"> 
    <!----Filter Option List Start--->
    <div class="col-12">
		<div class="row smart-form bs-h40">
			<div class="col-12 col-md-4 col-lg-2 mb10 mb-lg0">
			  <select class="selectpicker f-14" title="All Bonus Categories (200)">
				<option>All Bonus Categories (200)</option>
				<option>Recently added Email Templates (10)</option>
				<option>Recently modified Email Templates (15)</option>
				<option>Email Templates added in last 07 days (10)</option>
				<option>Email Templates added in last 30 days (10)</option>
			  </select>
			</div>
			<div class="col-12 col-md-4 col-lg-2 mb10 mb-lg0">
				<select class="selectpicker f-14" title="solution Name">
					<option>solution 1</option>
					<option>solution 2</option>
					<option>solution 3</option>
					<option>solution 4</option>
				</select>
			</div>
			<div class="col-12 col-md-4 col-lg-2 mb10 mb-lg0">
				<select class="selectpicker f-14" title="Package Name">
					<option>Package 1</option>
					<option>Package 2</option>
					<option>Package 3</option>
					<option>Package 4</option>
					<option>Package 5</option>
				</select>
			</div>
			<div class="col-12 col-md-4 col-lg-2 mb10 mb-lg0">
				<div class="input-group calendar-input-group">
					<input type="text" class="caleran-ex-1 form-control f-14 field-h40" id="target-cal" readonly="" data-plugin-options="{&quot;rangeOrientation&quot;:true,&quot;showButtons&quot;:true}" placeholder="Choose Date">
					<span class="input-group-btn caleran-show">
					<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
					</span>
				</div>
			</div>
			<div class="col-12 col-md-4 col-lg-2 mb10 mb-lg0">
				<div class="smart-search-field">
					<div class="input-group">
						<input class="form-control" placeholder="Search" type="text">
						<div class="input-group-append">
							<button class="btn" type="submit"> <i class="fa fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4 col-lg-2">
				<div class="row">
					<div class="col-4 col-md-3 col-lg-4 d-flex align-self-center d-md-none d-lg-block f-14 text-lg-right">Show</div>
					<div class="col-8 col-md-12 col-lg-8 bs-h40">
						<select class="selectpicker f-14">
							<option>10</option>
							<option>20</option>
							<option>30</option>
						</select>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!----Filter Option List End--->
    
    <div class="col-12 mt20">
      <div id="thori-scroll" class="table-responsive smart-table-style">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th><div class="smart-checkbox-btn checkbox-strong-blue">
                  <input id="checkAll" type="checkbox">
                  <label for="checkAll"></label>
                </div></th>
              <th>Solution &nbsp;<i class="fa fa-sort"></i></th>
          	  <th>Package &nbsp;<i class="fa fa-sort"></i></th>
              <th>Title &nbsp;<i class="fa fa-sort"></i></th>
              <th>Status &nbsp;<i class="fa fa-sort"></i></th>
              <th>Added Date</th>
              <th>Modified Date</th>
              <th>Actions</th>
            </tr>
          </thead>
          <!----- Table Option Div Show---->
          <div class="table-option-manage animated fadeIn">
            <ul class="list-inline f-14 w400 mb0">
              <li class="list-inline-item"><a href="#" class="base-btn default-btn btn-h30 f-14" data-toggle="modal" data-target="#deleteModal" title="Delete"><i class="icon-delete"></i> Delete</a></li>
            </ul>
          </div>
          <!----- Table Option Div end---->
          <tbody>
            <tr>
              <td><div class="smart-checkbox-btn checkbox-strong-blue">
                  <input id="tcheck1" type="checkbox" class="checkbox-active">
                  <label for="tcheck1"></label>
                </div></td>
                <td>Solution One</td>
                <td>Package Name One</td>
              <td>Bonus Title Name 1</td>
              <td><label class="switchtoggle-btn">
                  <input class="switchtoggle-input" type="checkbox" checked="">
                  <span class="switchtoggle-label" data-on="On" data-off="Off"></span> <span class="switchtoggle-handle"></span> </label></td>
              <td>17 Feb 2017</td>
              <td>17 Mar 2017</td>
              <td><ul class="table-action">
                  <li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
                  <li class="action-menu"><a href="#" class="action-item" data-toggle="modal" data-target="#BonusDetails" title="View"><i class="icon-show"></i></a></li>
                  
                  <li class="action-menu"><a href="#" class="action-item" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i></a></li>
                </ul></td>
            </tr>
            <tr>
              <td><div class="smart-checkbox-btn checkbox-strong-blue">
                  <input id="tcheck2" type="checkbox" class="checkbox-active">
                  <label for="tcheck2"></label>
                </div></td>
                <td>Solution Two</td>
                <td>package Name Two</td>
              <td>Bonus Title Name 2</td>
              <td><label class="switchtoggle-btn">
                  <input class="switchtoggle-input" type="checkbox">
                  <span class="switchtoggle-label" data-on="On" data-off="Off"></span> <span class="switchtoggle-handle"></span> </label></td>
              <td>17 Feb 2017</td>
              <td>17 Mar 2017</td>
              <td><ul class="table-action">
                  <li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
                  <li class="action-menu"><a href="#" class="action-item" data-toggle="modal" data-target="#BonusDetails" title="View"><i class="icon-show"></i></a></li>
                  
                  <li class="action-menu"><a href="#" class="action-item" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i></a></li>
                </ul></td>
            </tr>
            <tr>
              <td><div class="smart-checkbox-btn checkbox-strong-blue">
                  <input id="tcheck3" type="checkbox" class="checkbox-active">
                  <label for="tcheck3"></label>
                </div></td>
                <td>Solution Three</td>
                <td>package Name Three</td>
              <td>Bonus Title Name 3</td>
              <td><label class="switchtoggle-btn">
                  <input class="switchtoggle-input" type="checkbox" checked="">
                  <span class="switchtoggle-label" data-on="On" data-off="Off"></span> <span class="switchtoggle-handle"></span> </label></td>
              <td>17 Feb 2017</td>
              <td>17 Mar 2017</td>
              <td><ul class="table-action">
                  <li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
                  <li class="action-menu"><a href="#" class="action-item" data-toggle="modal" data-target="#BonusDetails" title="View"><i class="icon-show"></i></a></li>
                  
                  <li class="action-menu"><a href="#" class="action-item" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i></a></li>
                </ul></td>
            </tr>
            <tr>
              <td><div class="smart-checkbox-btn checkbox-strong-blue">
                  <input id="tcheck4" type="checkbox" class="checkbox-active">
                  <label for="tcheck4"></label>
                </div></td>
                <td>Solution Four</td>
                <td>Package Name Four</td>
              <td>Bonus Title Name 4</td>
              <td><label class="switchtoggle-btn">
                  <input class="switchtoggle-input" type="checkbox" checked="">
                  <span class="switchtoggle-label" data-on="On" data-off="Off"></span> <span class="switchtoggle-handle"></span> </label></td>
              <td>17 Feb 2017</td>
              <td>17 Mar 2017</td>
              <td><ul class="table-action">
                  <li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
                  <li class="action-menu"><a href="#" class="action-item" data-toggle="modal" data-target="#BonusDetails" title="View"><i class="icon-show"></i></a></li>
                  
                  <li class="action-menu"><a href="#" class="action-item" title="Delete" data-toggle="modal" data-target="#deleteModal"><i class="icon-delete"></i></a></li>
                </ul></td>
            </tr>
          </tbody>
        </table>
      </div>
      <!----- Pagination Div Start----->
      <div class="d-flex justify-content-between flex-wrap f-14 mt15 mt-md30">
        <div class="d-flex justify-content-start align-items-center mb5"> Show <span class="bs-h40 entries-width px15">
          <select class="selectpicker" >
            <option>4</option>
            <option>5</option>
            <option>6</option>
          </select>
          </span> <span class="d-none d-xl-block">Showing 1 to 4 of 400 entries</span> </div>
        <div class="mb5">
          <ul class="rounded-pagination f-14">
            <li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i> </a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </a></li>
            <li><a href="#" class="active">6</a></li>
            <li><a href="#">7</a></li>
            <li><a href="#" class="active"><i class="fa fa-caret-right" aria-hidden="true"></i> </a></li>
          </ul>
        </div>
      </div>
      <!----- Pagination Div End-----> 
    </div>
  </div>
</div>
<!------- Smart Footer Include File ---------->
<?php include '../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->