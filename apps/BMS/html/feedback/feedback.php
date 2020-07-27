<!------- BMS Main Header Include File---------->
<?php include '../../../smart/html/includes/smart-header-bms.php'; ?>
<!------- BMS Main Header Include File end---------->

<!------- BMS Stylesheet------=------->
<link rel="stylesheet" href="../../css/bms.css">
<!-------BMS Stylesheet end---------->

<div class="container-fluid p15 p-md30">
	<div class="row align-items-center">
		<div class="col-12">
		<span class="f-20 f-md-24 lato-font">Feedback</span> &nbsp;
		<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
		<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
		<p class="gblue-clr f-14 w400 mt5">Here you are manage your all accounts details</p>
		</div>
	</div>


   <div class="row mt-md30 mt15">
			<!----Filter Option List Start--->
          <div class="col-12 smart-form">            
            <div class="row">
              <div class="col-md-3 col-lg-3 col-xl-3 bs-h40 mb10 mb-md0">
				<select class="selectpicker f-14" title="All Feedbacks (150)">
					<option>All Feedbacks (150)</option>
					<option>Recently added Feedbacks (25)</option>
					<option>Feedbacks added in last 7 days (32)</option>
					<option>Feedbacks added in last 30 days (45)</option>
                </select>
              </div>
              <div class="col-md-9 offset-md-0 col-lg-9 col-xl-9 offset-xl-0 offset-lg-0 bs-h40">
                <div class="row">
				   <div class="col-md-3 col-lg-3 col-xl-3 mb10 mb-md0 pr15 pr-md15 text-right">
            			<select class="selectpicker f-14" title="Expression">
					<option>Good</option>
					<option>Bad</option>
					<option>Great</option>
					<option>Okay</option>
					<option>Terrible</option>
                </select>
                  </div>	
                  <div class="col-md-3 col-lg-3 col-xl-3 mb10 mb-md0 pr15 pr-md15 text-right">
					<div class="input-group calendar-input-group">
						<input type="text" class="caleran-ex-1 form-control f-14 field-h40" id="target-cal" readonly data-plugin-options='{"rangeOrientation":true,"showButtons":true}' placeholder="Choose Date"/>
						<span class="input-group-btn caleran-show">
						<button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
						</span>
					</div>
                  </div>
                  <div class="col-md-3 col-lg-3 col-xl-4 mb10 mb-md0 pr15 pl15 pr-md15 pl-md15">
                    <div class="smart-search-field">
                      <div class="input-group">
                        <input class="form-control" placeholder="Search" type="text">
                        <div class="input-group-append">
                          <button class="btn" type="submit"> <i class="fa fa-search"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-lg-3 col-xl-2">
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
            </div>
          </div>
			<!----Filter Option List End--->
			
          <div class="col-12 col-md-12 col-lg-8 t-wauto tw-100 mt20 transition-all order-2 order-lg-1">
            <div id="thori-scroll" class="table-responsive smart-table-style feedback-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Account Name &nbsp;<i class="fa fa-sort"></i></th>
					<th>Feedback Expression   &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Comment &nbsp;<i class="fa fa-sort"></i></th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Pawan Lodha</td>
					<td><img src="../../images/good-emoji.png" class="img-fluid emoji-width"> Good</td>
                    <td>
					<div class="feedback-comment">Lorem Ipsum is simply dummy text of the printing and typesetting industry.<div>  
					</td>
                    <td>
					<ul class="table-action">
						<li class="action-menu"><a href="#" class="action-item" title="View Account"><i class="icon-account-preview"></i></a></li>
					</ul>
					</td>
                  </tr>
				  <tr>
                    <td>Jay Nagar</td>
					<td><img src="../../images/great-emoji.png" class="img-fluid emoji-width"> Great</td>
                    <td>
						<div class="feedback-comment">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
						when an unknown printer took a galley of type and scrambled it to make a type
						specimen</div>
					</td>
                    <td>
					<ul class="table-action">
						<li class="action-menu"><a href="#" class="action-item" title="View Account"><i class="icon-account-preview"></i></a></li>
					</ul>
					</td>
                  </tr>	
				  <tr>
                    <td>Nishant</td>
					<td><img src="../../images/bad-emoji.png" class="img-fluid emoji-width"> Great</td>
                    <td>
						<div class="feedback-comment">Lorem Ipsum is simply dummy text of the printing and typesetting industry.<div>
					</td>
                    <td>
					<ul class="table-action">
						<li class="action-menu"><a href="#" class="action-item" title="View Account"><i class="icon-account-preview"></i></a></li>
					</ul>
					</td>
                  </tr>
				  <tr>
                    <td>Abhishek Jain</td>
					<td><img src="../../images/okey-emoji.png" class="img-fluid emoji-width"> Okay</td>
                    <td>
						<div class="feedback-comment">Lorem Ipsum is simply dummy text of the printing and typesetting industry.<div>
					</td>
                    <td>
					<ul class="table-action">
						<li class="action-menu"><a href="#" class="action-item" title="View Account"><i class="icon-account-preview"></i></a></li>
					</ul>
					</td>
                  </tr>
				  <tr>
                    <td>Lovely</td>
					<td><img src="../../images/terrible-emoji.png" class="img-fluid emoji-width"> Terrible</td>
                    <td>
						<div class="feedback-comment">Lorem Ipsum is simply dummy text of the printing and typesetting industry.<div>
					</td>
                    <td>
					<ul class="table-action">
						<li class="action-menu"><a href="#" class="action-item" title="View Account"><i class="icon-account-preview"></i></a></li>
					</ul>
					</td>
                  </tr>
                </tbody>
              </table>
            </div>
			
			 <!----- Pagination Div Start ----->
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
			 <!----- Pagination Div End ------>	
			  
 </div>
			
		
        </div>
      </div>
<!------- Smart Footer Include File ---------->
<?php include '../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->