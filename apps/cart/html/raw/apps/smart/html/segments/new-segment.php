<!------- Smart Header Include File---------->
<?php include '../includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->

<!--------- NVD3 Library Graph ------------------------>
<link href="<?php echo $basedir; ?>vendors/nvd3/nv.d3.css" rel="stylesheet" type="text/css">
<link href="<?php echo $basedir; ?>vendors/nvd3/nvd-style.css" rel="stylesheet" type="text/css">
<script src="<?php echo $basedir; ?>vendors/nvd3/d3.min.js"></script>
<script src="<?php echo $basedir; ?>vendors/nvd3/nv.d3.min.js"></script>
<script src="<?php echo $basedir; ?>vendors/nvd3/stream_layers.js"></script>

<div class="container-fluid p15 p-md30">
   <div class="row">
        <div class="col-12 col-md-7 align-self-center">
			<div class="d-flex align-items-center flex-wrap">
				<ul class="stepwizard-style2 f-18 f-sm-24 w400 lato-font mr15">
					<li> <a href="#"> Audience Segments</a> </li>
					<li> <a href="#"> New Segment</a> </li>
				</ul>
				<div class="d-flex mt7">
					<a href="#" class="gblue-clr t-decoration-none f-17 mr5" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
					<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
				</div>
			</div>
			<p class="gblue-clr f-14 w400 mt5">Create and manage segments for your audience</p>
        </div>
   </div>
   <form action="" method="">
      <div class="row mt-md30 mt15">
         <div class="col-12 col-md-8 t-decoration-none">
            <div class="row">
               <div class="col-12 f-18 w400">Visitors/Users</div>
               <div class="col-12 col-md-12 segment-accordion mt-md20 mt15">
                  <div id="accordion" class="accordion">
                     <div class="card mb-0 f-16">
                        <div class="card-header collapsed" data-toggle="collapse" href="#collapseVisitor">
                           <a class="card-title lato-font">&nbsp; Visitor Type</a> 
                        </div>
                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define the type of visitors for this segment." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a>
                        <div id="collapseVisitor" class="collapse">
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-12 col-md-9">
                                    <div class="row smart-form">
                                       <div class="col-12 col-md-6">
                                          <div class="form-group d-gblue-clr">
                                             <select class="selectpicker" title="Select Visitor type">
                                                <option>All visitors</option>
                                                <option>New visitors</option>
                                                <option>Returning visitors</option>
                                                <option>No. of sessions of the visitors</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-12 col-md-6">
                                          <div class="form-group d-gblue-clr">
                                             <select class="selectpicker" title="equal to">
                                                <option>equal to</option>
                                                <option>not equal to</option>
                                                <option>one of</option>
                                                <option>none of</option>
                                                <option>greater than</option>
                                                <option>less than</option>
                                                <option>greater than equal to</option>
                                                <option>less than equal to</option>
                                                <option>between</option>
                                                <option>not between</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-12 col-md-6 form-group">
                                          <input type="text" class="form-control" placeholder="Enter the value">
                                       </div>
                                       <div class="col-12 col-md-6 form-group">
                                          <input type="text" class="form-control" placeholder="Enter the value">
                                       </div>
                                       <div class="col-12 col-md-12 form-group">
                                          <input type="text" class="form-control" placeholder="Enter the value">
                                       </div>
                                       <div class="col-12 col-md-12">
                                          <div class="smart-form form-group f-14">
                                             <input class="form-control" value="Tags" name="tags" id="visitor-type" style="display: none;">
                                             <p class="f-14 mt10 d-gblue-clr">Pls separate Tag by Comma or enter.</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-md-3"><a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row mt-md20 mt15">
                     <div class="col-12 col-md-4 col-xl-5 d-none d-md-block">
                        <div class="andor-seperator mt16"></div>
                     </div>
                     <div class="col-12 col-md-4 col-xl-2 p0 text-center">
                        <div class="switch-field">
                           <input type="radio" id="visitors-and" name="visitors" value="and" />
                           <label for="visitors-and" class="switch_left">And</label>
                           <input type="radio" id="visitors-or" name="visitors" value="or" />
                           <label for="visitors-or" class="switch_right">Or</label>
                        </div>
                     </div>
                     <div class="col-12 col-md-4 col-xl-5 d-none d-md-block">
                        <div class="andor-seperator mt16"></div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-12 segment-accordion mt10">
                  <div id="accordion" class="accordion">
                     <div class="card mb-0 f-16">
                        <div class="card-header collapsed" data-toggle="collapse" href="#collapseLastSeen">
                           <a class="card-title lato-font">&nbsp; Last Seen</a> 
                        </div>
                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define last seen properties for this segment." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a>
                        <div id="collapseLastSeen" class="collapse f-14">
                           <div class="card-body">
                              <div class="row smart-form d-gblue-clr">
                                 <div class="col-12 col-md-9">
                                    <div class="row">
                                       <div class="col-12 col-md-6">
                                          <div class="form-group d-gblue-clr d-flex">
                                             <div class="mt15">Is &nbsp; &nbsp;</div>
                                             <select class="selectpicker" title="Select an option">
                                                <option>after</option>
                                                <option>before</option>
                                                <option>within</option>
                                                <option>present</option>
                                                <option>not present</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-12 col-md-6">
                                          <div class="form-group">
                                             <select class="selectpicker" title="Select an option">
                                                <option>date</option>
                                                <option>last X time (Last 1 month)</option>
                                                <option>next Y time (Next 1 month)</option>
                                                <option>last X time to Y time</option>
                                                <option>next X time to Y time</option>
                                                <option>last X time to next Y time</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-md-3 mb10 mb-md0">
                                    <a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a>
                                 </div>
                                 <div class="col-12 col-md-3 col-lg-2 d-flex d-gblue-clr mb15 mb-md0">
                                    <div class="mt15 mr15">Last</div>
                                    <input  type="text" class="form-control col-8">
                                 </div>
                                 <div class="col-12 col-md-6 col-lg-3">
                                    <div class="form-group">
                                       <select class="selectpicker" title="Select an option">
                                          <option>minutes</option>
                                          <option>hours</option>
                                          <option>days</option>
                                          <option>weeks</option>
                                          <option>months</option>
                                          <option>years</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-12 col-md-5 col-lg-3">
                                    <div class="row mb15 mb-md0">
                                       <div class="col-5 col-lg-6 mt15">To &nbsp; &nbsp; Next</div>
                                       <div class="col-7 col-lg-6"><input  type="text" class="form-control"></div>
                                    </div>
                                 </div>
                                 <div class="col-10 col-md-4 col-lg-3">
                                    <div class="form-group">
                                       <select class="selectpicker" title="Select an option">
                                          <option>minutes</option>
                                          <option>hours</option>
                                          <option>days</option>
                                          <option>weeks</option>
                                          <option>months</option>
                                          <option>years</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-2 col-md-1 p0 mt15">
                                    <a href="#" class="d-gblue-clr"><i class="icon-refresh-final f-16"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row mt-md20 mt15">
                     <div class="col-12 col-md-4 col-xl-5 d-none d-md-block">
                        <div class="andor-seperator mt16"></div>
                     </div>
                     <div class="col-12 col-md-4 col-xl-2 p0 text-center">
                        <div class="switch-field">
                           <input type="radio" id="lastseen-and" name="lastseen" value="and" />
                           <label for="lastseen-and" class="switch_left">And</label>
                           <input type="radio" id="lastseen-or" name="lastseen" value="or" />
                           <label for="lastseen-or" class="switch_right">Or</label>
                        </div>
                     </div>
                     <div class="col-12 col-md-4 col-xl-5 d-none d-md-block">
                        <div class="andor-seperator mt16"></div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-12 segment-accordion mt-md20 mt15">
                  <div id="accordion" class="accordion">
                     <div class="card mb-0 f-16">
                        <div class="card-header collapsed" data-toggle="collapse" href="#collapseGeo">
                           <a class="card-title lato-font">&nbsp; Geo Filtering/Position</a> 
                        </div>
						<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define geographic locations for this segment." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
                        <div id="collapseGeo" class="collapse">
						   <div class="card-body"> 		
                           <div class="row smart-form">
                              <div class="col-12 col-md-6 col-lg-4">
                                 <div class="form-group d-gblue-clr bs-h30">
                                    <select class="selectpicker">
                                       <option>None of these must satisfy</option>
                                       <option>Any of these must satisfy</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-12 col-md-2 col-lg-2 offset-0 offset-md-4 offset-lg-6 mb10 mb-md0">
                                 <a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a>
                              </div>
                           </div>
                           <div class="row smart-form">
                              <div class="col-12 col-md-10">
                                 <div class="row">
                                    <div class="col-12 col-md-6 col-lg-4">
                                       <div class="form-group d-gblue-clr">
                                          <select class="selectpicker" title="Country" data-live-search="true">
                                             <option>Country 1</option>
                                             <option>Country 2</option>
                                             <option>Country 3</option>
                                             <option>Country 4</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                       <div class="form-group d-gblue-clr">
                                          <select class="selectpicker" title="State" data-live-search="true">
                                             <option>State 1</option>
                                             <option>State 2</option>
                                             <option>State 3</option>
                                             <option>State 4</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 offset-md-4 offset-lg-0">
                                       <div class="form-group d-gblue-clr">
                                          <select class="selectpicker" title="City" data-live-search="true">
                                             <option>City 1</option>
                                             <option>City 2</option>
                                             <option>City 3</option>
                                             <option>City 4</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12 col-md-2 p0 pl15 pl-md0">
                                 <a href="#" class="d-inline-block d-gblue-clr segment-delete mt15"><i class="icon-delete f-16"></i></a>
                              </div>
                           </div>
						   </div> 	   
                        </div>
                     </div>
                  </div>
                  <div class="row mt20">
                     <div class="col-12 col-md-4 col-xl-5 d-none d-md-block">
                        <div class="andor-seperator mt16"></div>
                     </div>
                     <div class="col-12 col-md-4 col-xl-2 p0 text-center">
                        <div class="switch-field">
                           <input type="radio" id="geo-and" name="geo" value="and" />
                           <label for="geo-and" class="switch_left">And</label>
                           <input type="radio" id="geo-or" name="geo" value="or" />
                           <label for="geo-or" class="switch_right">Or</label>
                        </div>
                     </div>
                     <div class="col-12 col-md-4 col-xl-5 d-none d-md-block">
                        <div class="andor-seperator mt16"></div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-12 segment-accordion mt10">
                  <div id="accordion" class="accordion">
                     <div class="card mb-0 f-16">
                        <div class="card-header collapsed" data-toggle="collapse" href="#collapseUserAttributes">
                           <a class="card-title lato-font">&nbsp; User Attributes</a> 
                        </div>
						 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define attributes of users for this segment." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
                        <div id="collapseUserAttributes" class="collapse f-14">
						   <div class="card-body">
                              <div class="row smart-form">
                              <div class="col-12 col-md-6 col-lg-4">
                                 <div class="form-group d-gblue-clr bs-h30">
                                    <select class="selectpicker">
                                       <option>All of these must satisfy</option>
                                       <option>Any of these must satisfy</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-12 col-md-2 col-lg-2 offset-0 offset-md-4 offset-lg-6 mb10 mb-md0">
                                 <a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a>
                              </div>
                           </div>						   
                           <div class="row smart-form d-gblue-clr">
                              <div class="col-12 col-md-9">
                                 <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3">
                                       <div class="form-group">
                                          <select class="selectpicker" title="Select">
                                             <option selected>Name</option>
                                             <option>Birth Date</option>
                                             <option>Phone</option>
                                             <option>Gender</option>
                                             <option>Email</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                       <div class="form-group d-gblue-clr d-flex">
                                          <select class="selectpicker" title="Select">
                                             <option>Starts with</option>
                                             <option>does not start with</option>
                                             <option>Ends with</option>
                                             <option>does not end with</option>
                                             <option>matches</option>
                                             <option>does not matches</option>
                                             <option>is equals to</option>
                                             <option>does not equals to</option>
                                             <option>contains</option>
                                             <option>does not contains</option>
                                             <option>contains a value</option>
                                             <option>does not contains a value</option>
                                             <option>is one of</option>
                                             <option>is neither of</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-5 mb15 mb-lg0">
                                       <input type="text" class="form-control" placeholder="Enter Value">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12 col-md-3 p15 p-md0 pt0">
                                 <a href="#" class="d-inline-block d-gblue-clr segment-delete mt15"><i class="icon-delete f-16"></i></a>
                              </div>
                           </div>
                           <div class="row smart-form d-gblue-clr">
                              <div class="col-12 col-md-9">
                                 <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3">
                                       <div class="form-group">
                                          <select class="selectpicker" title="Select">
                                             <option selected>Name</option>
                                             <option>Birth Date</option>
                                             <option>Phone</option>
                                             <option>Gender</option>
                                             <option>Email</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                       <div class="form-group d-gblue-clr d-flex">
                                          <select class="selectpicker" title="Select">
                                             <option>after</option>
                                             <option>before</option>
                                             <option>within</option>
                                             <option>present</option>
                                             <option>not present</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-5">
                                       <div class="form-group d-gblue-clr d-flex">
                                          <select class="selectpicker" title="Last X Time to Y Time">
                                             <option>date</option>
                                             <option>last X time (Last 1 month)</option>
                                             <option>next Y time (Next 1 month)</option>
                                             <option>last X time to Y time</option>
                                             <option>next X time to Y time</option>
                                             <option>last X time to next Y time</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12 col-md-3">
                                
                              </div>
                              <div class="col-12 col-md-3 col-lg-2 d-flex d-gblue-clr mb15 mb-md0">
                                 <div class="mt15 mr15">Last</div>
                                 <input  type="text" class="form-control col-8">
                              </div>
                              <div class="col-12 col-md-6 col-lg-3">
                                 <div class="form-group">
                                    <select class="selectpicker" title="Select an option">
                                       <option>minutes</option>
                                       <option>hours</option>
                                       <option>days</option>
                                       <option>weeks</option>
                                       <option>months</option>
                                       <option>years</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-12 col-md-5 col-lg-3 mb15 mb-md0">
                                 <div class="row">
                                    <div class="col-6 mt15">To &nbsp; &nbsp; Next</div>
                                    <div class="col-6"><input  type="text" class="form-control"></div>
                                 </div>
                              </div>
                              <div class="col-9 col-md-4 col-lg-3">
                                 <div class="form-group">
                                    <select class="selectpicker" title="Select an option">
                                       <option>minutes</option>
                                       <option>hours</option>
                                       <option>days</option>
                                       <option>weeks</option>
                                       <option>months</option>
                                       <option>years</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-3 col-md-3 col-lg-1 p0 f-16 mt17">
                                 <a href="#" class="d-gblue-clr"><i class="icon-refresh-final"></i></a>
                                 <a href="#" class="d-inline-block d-gblue-clr segment-delete ml3"><i class="icon-delete f-16"></i></a>
								 <a href="#" class="d-gblue-clr segment-add ml3"><i class="icon-add-three"></i></a>
                              </div>
                           </div>
						   </div>	   
                        </div>
                     </div>
                  </div>
                  <div class="row mt-md20 mt15">
                     <div class="col-12 col-md-4 col-xl-5 d-none d-md-block">
                        <div class="andor-seperator mt16"></div>
                     </div>
                     <div class="col-12 col-md-4 col-xl-2 p0 text-center">
                        <div class="switch-field">
                           <input type="radio" id="userattributes-and" name="userattributes" value="and" />
                           <label for="userattributes-and" class="switch_left">And</label>
                           <input type="radio" id="userattributes-or" name="userattributes" value="or" />
                           <label for="userattributes-or" class="switch_right">Or</label>
                        </div>
                     </div>
                     <div class="col-12 col-md-4 col-xl-5 d-none d-md-block">
                        <div class="andor-seperator mt16"></div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-12 segment-accordion mt-md20 mt15">
                  <div id="accordion" class="accordion">
                     <div class="card mb-0 f-16">
                        <div class="card-header collapsed" data-toggle="collapse" href="#collapseSource">
                           <a class="card-title lato-font">&nbsp; Acquisition Source</a> 
                        </div>
						 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define source of acquisition for this segment." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a>  
                        <div id="collapseSource" class="collapse">
						   <div class="card-body">	
                           <div class="row smart-form">
                              <div class="col-12 col-md-9">
                                 <div class="row">
                                    <div class="col-12 col-md-6">
                                       <div class="form-group d-gblue-clr">
                                          <select class="selectpicker" title="Refferal">
                                             <option>Landing Page</option>
                                             <option>Direct</option>
                                             <option>Referral</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                       <div class="form-group d-gblue-clr">
                                          <select class="selectpicker" title="Referrer URL">
                                             <option>equal to</option>
                                             <option>not equal to</option>
                                             <option>one of</option>
                                             <option>none of</option>
                                             <option>starts with</option>
                                             <option>does not start with</option>
                                             <option>ends with</option>
                                             <option>does not end with</option>
                                             <option>matches regex</option>
                                             <option>does not match regex</option>
                                             <option>contains</option>
                                             <option>does not contain</option>
                                             <option>is not empty</option>
                                             <option>is empty</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-12 col-md-6">
                                       <div class="form-group d-gblue-clr">
                                          <select class="selectpicker" title="Landing Page">
                                              <option>Landing Page</option>
                                             <option>Direct</option>
                                             <option>Referral</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                       <div class="form-group d-gblue-clr">
                                          <select class="selectpicker" title="Referrer URL">
                                             <option>equal to</option>
                                             <option>not equal to</option>
                                             <option>one of</option>
                                             <option>none of</option>
                                             <option>starts with</option>
                                             <option>does not start with</option>
                                             <option>ends with</option>
                                             <option>does not end with</option>
                                             <option>matches regex</option>
                                             <option>does not match regex</option>
                                             <option>contains</option>
                                             <option>does not contain</option>
                                             <option>is not empty</option>
                                             <option>is empty</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12 col-md-3 mb10 mb-md0"><a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a></div>
                              <div class="col-9 col-md-9">
                                 <input  type="text" class="form-control" placeholder="Enter the value">
                              </div>
                              <div class="col-3 col-md-3 mt17 f-16 p0">
                                 <a href="#" class="d-gblue-clr"><i class="icon-refresh-final"></i></a>
								 &nbsp; <a href="#" class="d-inline-block d-gblue-clr segment-delete"><i class="icon-delete f-16"></i></a>
                                 &nbsp; <a href="#" class="d-gblue-clr segment-add"><i class="icon-add-three"></i></a>
                              </div>
                           </div>
						   </div>	   
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 f-18 w400 mt-md30 mt15">Behaviour</div>
               <div class="col-12 col-md-12 segment-accordion mt-md20 mt15">
                  <div id="accordion" class="accordion">
                     <div class="card mb-0 f-16">
                        <div class="card-header collapsed" data-toggle="collapse" href="#collapseEvents">
                           <a class="card-title lato-font">&nbsp; Users Who Did These Events</a> 
                        </div>
						<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define specific events performed by users for this segment." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
                        <div id="collapseEvents" class="collapse">
						   <div class="card-body">	
                           <div class="row smart-form">
                              <div class="col-12 col-md-9">
                                 <div class="row">
                                    <div class="col-12 col-md-6">
                                       <div class="form-group d-gblue-clr">
                                          <select class="selectpicker" title="Select an event">
                                             <option>Visited Website URL</option>
                                             <option>Referral URL</option>
                                             <option>Time spent on the page</option>
                                             <option>Number of the page visited</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                       <div class="form-group d-gblue-clr">
                                          <select class="selectpicker" title="select a value">
                                             <option>Starts with</option>
                                             <option>does not start with</option>
                                             <option>Ends with</option>
                                             <option>does not end with</option>
                                             <option>matches</option>
                                             <option>does not matches</option>
                                             <option>is equals to</option>
                                             <option>does not equals to</option>
                                             <option>contains</option>
                                             <option>does not contains</option>
                                             <option>contains a value</option>
                                             <option>does not contains a value</option>
                                             <option>is one of</option>
                                             <option>is neither of</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12 col-md-3 mb10 mb-md0"><a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a></div>
                              <div class="col-11 col-md-9">
                                 <input  type="text" class="form-control" placeholder="Enter the value">
                              </div>
                              <div class="col-1 col-md-3 mt15 p0">
                                 <a href="#" class="d-gblue-clr segment-delete f-16"><i class="icon-delete"></i></a>
                              </div>
                           </div>
                           <div class="row mt20">
                              <div class="col-12 col-md-4 col-xl-5 d-none d-md-block pl0">
                                 <div class="andor-seperator mt16"></div>
                              </div>
                              <div class="col-12 col-md-4 col-xl-2 p0 text-center">
                                 <div class="switch-field">
                                    <input type="radio" id="events-case-and" name="events-case" value="and" />
                                    <label for="events-case-and" class="switch_left">And</label>
                                    <input type="radio" id="events-case-or" name="events-case" value="or" />
                                    <label for="events-case-or" class="switch_right">Or</label>
                                 </div>
                              </div>
                              <div class="col-12 col-md-4 col-xl-5 d-none d-md-block pr0">
                                 <div class="andor-seperator mt16"></div>
                              </div>
                           </div>
                           <div class="row smart-form mt10">
                              <div class="col-12 col-md-9">
                                 <div class="row">
                                    <div class="col-12 col-md-6">
                                       <div class="form-group d-gblue-clr">
                                          <select class="selectpicker" title="Select an event">
                                             <option>Visited Website URL</option>
                                             <option>Referral URL</option>
                                             <option>Time spent on the page</option>
                                             <option>Number of the page visited</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                       <div class="form-group d-gblue-clr">
                                          <select class="selectpicker" title="select a value">
                                             <option>is equals to</option>
                                             <option>is not equals to</option>
                                             <option>greater than</option>
                                             <option>less than</option>
                                             <option>is greater than and equals to</option>
                                             <option>is less than and equals to</option>
                                             <option>between</option>
                                             <option>not between</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12 col-md-3 mb10 mb-md0"><a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a></div>
                              <div class="col-9 col-md-9">
                                 <input type="text" class="form-control" placeholder="Enter the value">
                              </div>
                              <div class="col-3 col-md-3 mt15 f-16 p0">
                                 <a href="#" class="d-gblue-clr segment-delete"><i class="icon-delete"></i></a>
                                 &nbsp; <a href="#" class="d-gblue-clr segment-add"><i class="icon-add-three"></i></a>
                              </div>
                           </div>
						   </div>
                        </div>
                     </div>
                  </div>
                  <div class="row mt-md20 mt15">
                     <div class="col-12 col-md-4 col-xl-5 d-none d-md-block">
                        <div class="andor-seperator mt16"></div>
                     </div>
                     <div class="col-12 col-md-4 col-xl-2 p0 text-center">
                        <div class="switch-field">
                           <input type="radio" id="events-and" name="events" value="and" />
                           <label for="events-and" class="switch_left">And</label>
                           <input type="radio" id="events-or" name="events" value="or" />
                           <label for="events-or" class="switch_right">Or</label>
                        </div>
                     </div>
                     <div class="col-12 col-md-4 col-xl-5 d-none d-md-block">
                        <div class="andor-seperator mt16"></div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-12 segment-accordion mt10">
                  <div id="accordion" class="accordion">
                     <div class="card mb-0 f-16">
                        <div class="card-header collapsed" data-toggle="collapse" href="#collapseNotEvents">
                           <a class="card-title lato-font">&nbsp; Users Who Did Not Do These Events</a> 
                        </div>
						 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define specific events did not perform by users for this segment." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
                        <div id="collapseNotEvents" class="collapse">
						   <div class="card-body">	 
                           <div class="row smart-form">
                              <div class="col-12 col-md-9">
                                 <div class="row">
                                    <div class="col-12 col-md-6">
                                       <div class="form-group d-gblue-clr">
                                          <select class="selectpicker" title="Select an event">
                                             <option>Visited Website URL</option>
                                             <option>Referral URL</option>
                                             <option>Time spent on the page</option>
                                             <option>Number of the page visited</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                       <div class="form-group d-gblue-clr">
                                          <select class="selectpicker" title="select a value">
                                             <option>Starts with</option>
                                             <option>does not start with</option>
                                             <option>Ends with</option>
                                             <option>does not end with</option>
                                             <option>matches</option>
                                             <option>does not matches</option>
                                             <option>is equals to</option>
                                             <option>does not equals to</option>
                                             <option>contains</option>
                                             <option>does not contains</option>
                                             <option>contains a value</option>
                                             <option>does not contains a value</option>
                                             <option>is one of</option>
                                             <option>is neither of</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12 col-md-3 mb10 mb-md0"><a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a></div>
                              <div class="col-11 col-md-9">
                                 <input  type="text" class="form-control" placeholder="Enter the value">
                              </div>
                              <div class="col-1 col-md-3 mt15 p0">
                                 <a href="#" class="d-gblue-clr segment-add f-16"><i class="icon-add-three"></i></a>
                              </div>
                           </div>
						   </div>	   
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 f-18 w400 mt-md30 mt15">Technology</div>
               <div class="col-12 col-md-12 segment-accordion mt-md20 mt15">
                  <div id="accordion" class="accordion">
                     <div class="card mb-0 f-16">
                        <div class="card-header collapsed" data-toggle="collapse" href="#collapseDevice">
                           <a class="card-title lato-font">&nbsp; Device</a> 
                        </div>
						 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define devices used by users for this segment." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a> 
                        <div id="collapseDevice" class="collapse">
						   <div class="card-body">	
                           <div class="row smart-form">
                              <div class="col-12 col-md-9">
								<div class="row">
								<div class="col-12 col-md-12 col-lg-6">
								<div class="form-group mb-lg20 d-gblue-clr bs-h30">
								<select class="selectpicker">
								<option>One of these must satisfy</option>
								<option>Neither of these must satisfy</option>
								</select>
								</div>
								</div>
								</div>
                                 <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-12 pl20">
                                       <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
                                          <input id="DesktopLaptop" type="checkbox">
                                          <label for="DesktopLaptop">Desktop / Laptop</label>
                                       </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-12 pl20">
                                       <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
                                          <input id="Tablet" type="checkbox">
                                          <label for="Tablet">Tablet</label>
                                       </div>
                                    </div>
									<div class="col-xl-4 col-lg-6 col-12 pl20">
                                       <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
                                          <input id="AndroidPhone" type="checkbox">
                                          <label for="AndroidPhone">Android Phone</label>
                                       </div>
                                    </div>
									<div class="col-xl-4 col-lg-6 col-12 pl20">
                                       <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
                                          <input id="iPhone" type="checkbox">
                                          <label for="iPhone">iPhone</label>
                                       </div>
                                    </div>
									<div class="col-xl-4 col-lg-6 col-12 pl20">
                                       <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
                                          <input id="iPad" type="checkbox">
                                          <label for="iPad">iPad</label>
                                       </div>
                                    </div>
									<div class="col-xl-4 col-lg-6 col-12 pl20">
                                       <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
                                          <input id="OtherMobile" type="checkbox">
                                          <label for="OtherMobile">Other Mobile</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12 col-md-3"><a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a></div>
                           </div>
						   </div>	   
                        </div>
                     </div>
                  </div>
                  <div class="row mt-md20 mt15">
                     <div class="col-12 col-md-4 col-xl-5 d-none d-md-block">
                        <div class="andor-seperator mt16"></div>
                     </div>
                     <div class="col-12 col-md-4 col-xl-2 p0 text-center">
                        <div class="switch-field">
                           <input type="radio" id="device-and" name="device" value="and" />
                           <label for="device-and" class="switch_left">And</label>
                           <input type="radio" id="device-or" name="device" value="or" />
                           <label for="device-or" class="switch_right">Or</label>
                        </div>
                     </div>
                     <div class="col-12 col-md-4 col-xl-5 d-none d-md-block">
                        <div class="andor-seperator mt16"></div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-12 segment-accordion mt10">
                  <div id="accordion" class="accordion">
                     <div class="card mb-0 f-16">
                        <div class="card-header collapsed" data-toggle="collapse" href="#collapseBrowser">
                           <a class="card-title lato-font">&nbsp; Browser</a> 
                        </div>
						<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define browsers used by users for this segment." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a>  
                        <div id="collapseBrowser" class="collapse">
						   <div class="card-body">
							<div class="row smart-form">
                              <div class="col-12 col-md-9">
								<div class="row">
								<div class="col-12 col-md-12 col-lg-6">
								<div class="form-group mb-lg20 d-gblue-clr bs-h30">
								<select class="selectpicker">
								<option>One of these must satisfy</option>
								<option>Neither of these must satisfy</option>
								</select>
								</div>
								</div>
								</div>
                                 <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-12 pl20">
                                       <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
                                          <input id="Chromeckbox" type="checkbox">
                                          <label for="Chromeckbox">Chrome</label>
                                       </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-12 pl20">
                                       <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
                                          <input id="Firefox2" type="checkbox">
                                          <label for="Firefox2">Firefox</label>
                                       </div>
                                    </div>
									<div class="col-xl-4 col-lg-6 col-12 pl20">
                                       <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
                                          <input id="Edge" type="checkbox">
                                          <label for="Edge">Edge</label>
                                       </div>
                                    </div>
									<div class="col-xl-4 col-lg-6 col-12 pl20">
                                       <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
                                          <input id="Safari" type="checkbox">
                                          <label for="Safari">Safari</label>
                                       </div>
                                    </div>
									<div class="col-xl-4 col-lg-6 col-12 pl20">
                                       <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
                                          <input id="Opera" type="checkbox">
                                          <label for="Opera">Opera</label>
                                       </div>
                                    </div>
									<div class="col-xl-4 col-lg-6 col-12 pl20">
                                       <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
                                          <input id="OtherBrowser" type="checkbox">
                                          <label for="OtherBrowser">Others</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12 col-md-3"><a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a></div>
                           </div>
						   
						   </div>	   
                        </div>
                     </div>
                  </div>
                  <div class="row mt-md20 mt15">
                     <div class="col-12 col-md-4 col-xl-5 d-none d-md-block">
                        <div class="andor-seperator mt16"></div>
                     </div>
                     <div class="col-12 col-md-4 col-xl-2 p0 text-center">
                        <div class="switch-field">
                           <input type="radio" id="browser-and" name="browser" value="and"/>
                           <label for="browser-and" class="switch_left">And</label>
                           <input type="radio" id="browser-or" name="browser" value="or"/>
                           <label for="browser-or" class="switch_right">Or</label>
                        </div>
                     </div>
                     <div class="col-12 col-md-4 col-xl-5 d-none d-md-block">
                        <div class="andor-seperator mt16"></div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-12 segment-accordion mt10">
                  <div id="accordion" class="accordion">
                     <div class="card mb-0 f-16">
                        <div class="card-header collapsed" data-toggle="collapse" href="#collapseOS">
                           <a class="card-title lato-font">&nbsp; Operating System</a> 
                        </div>
						 <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Define the OS used by users for this segment." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a>  
                        <div id="collapseOS" class="collapse">
						   <div class="card-body">	
                          <div class="row smart-form">
                              <div class="col-12 col-md-9">
								<div class="row">
								<div class="col-12 col-md-12 col-lg-6">
								<div class="form-group mb-lg20 d-gblue-clr bs-h30">
								<select class="selectpicker">
								<option>One of these must satisfy</option>
								<option>Neither of these must satisfy</option>
								</select>
								</div>
								</div>
								</div>
                                 <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-12 pl20">
                                       <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
                                          <input id="Android3" type="checkbox">
                                          <label for="Android3">Android</label>
                                       </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-12 pl20">
                                       <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
                                          <input id="Macintosh" type="checkbox">
                                          <label for="Macintosh">Macintosh</label>
                                       </div>
                                    </div>
									<div class="col-xl-4 col-lg-6 col-12 pl20">
                                       <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
                                          <input id="Windows" type="checkbox">
                                          <label for="Windows">Windows</label>
                                       </div>
                                    </div>
									<div class="col-xl-4 col-lg-6 col-12 pl20">
                                       <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
                                          <input id="Linux" type="checkbox">
                                          <label for="Linux">Linux</label>
                                       </div>
                                    </div>
									<div class="col-xl-4 col-lg-6 col-12 pl20">
                                       <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
                                          <input id="ios" type="checkbox">
                                          <label for="ios">ios</label>
                                       </div>
                                    </div>
									<div class="col-xl-4 col-lg-6 col-12 pl20">
                                       <div class="smart-checkbox-btn checkbox-strong-blue mb5 mb-lg12">
                                          <input id="Otheros" type="checkbox">
                                          <label for="Otheros">Others</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12 col-md-3"><a href="#" class="base-btn normal-btn-outline px10 py3 f-12 pull-right">Reset</a></div>
                           </div> </div>	   
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 col-md-4 mt15 mt-md0">
        <div id="segment-donut-chart" class="mx-auto">
			<svg></svg>
		</div>
         </div>
         <div class="col-12 col-md-4 offset-0 offset-md-8 text-right mtm40">
         <div class="sticky-donut-btn">
            <input type="button" value="Cancel" class="base-btn default-btn"> &nbsp;
            <input type="submit" value="Save" class="base-btn blue-btn">
         </div>
         </div>
         <div class="col-12 col-md-6 caleran-h50">
            <div class="smart-form mt12">
               <div class="form-group mb0">
                  <div class="input-group">
                     <input type="text" name="dob" readonly="" class="form-control f-14" id="dob-primary-target" value="1/1/1990" placeholder="Date of Birth">
                     <span class="input-group-btn no-hover-focus" id="dob-primary">
                     <button class="btn calendar-btn grey f-19" type="button"><i class="icon-calendar"></i></button>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </form>
</div>
<?php include '../includes/smart-footer.php'; ?>
