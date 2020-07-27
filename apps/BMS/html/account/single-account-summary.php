<!------- BMS Main Header Include File---------->
<?php include '../../../smart/html/includes/smart-header-bms.php'; ?>
<!------- BMS Main Header Include File end---------->

<!------- Account Header Include File---------->
<?php include 'account-header.php'; ?>
<!------- Account Header Include File end---------->

<!------- BMS Stylesheet Strat ------->
<link rel="stylesheet" href="../../css/bms.css">
<!------- BMS Stylesheet end ------->

<!--CKEditor Library -->
<script src="<?php echo $basedir; ?>vendors/ckeditor/ckeditor.js"></script>
<script src="<?php echo $basedir; ?>vendors/ckeditor/samples/js/sample.js"></script>


<!-- Single Account Container Starts -->
<div class="container-fluid">
	<div class="row">
		<!-- Left Section Starts -->
		<div class="col-12 col-md-7 col-xl-8 p0 mb-md45 mb15 account-section-left">
			<div class="col-12 col-md-12 px25 single-account-header lato-font">
			<!-- Nav tabs -->
				<ul class="nav tabs-style4 f-18 w600" role="tablist">
				  <li class="nav-item"> <a class="nav-link active px-md30" data-toggle="tab" data-target ="#summary" id="summary-tab">Summary</a></li>
				  <li class="nav-item"> <a class="nav-link px-md30" data-toggle="tab"  data-target ="#feed" id="feeds-tab">Feed</a></li>
				  <li class="nav-item"> <a class="nav-link px-md30"  data-toggle="tab"  data-target ="#Feedbacks" id="Feedbacks-tab">Feedbacks</a></li>
				</ul>
			</div>
		
		<div class="col-12 col-md-12 px10 single-account-btop account-content-left">
		<!-- Tab Content -->
			<div class="tab-content">
				<!-- Summary Tab Pane-->
				<div id="summary" class="container-fluid tab-pane active lato-font">
					<div class="row mt10">
						<div class="col-12 col-md-8 mt-md30 mt15"><h5 class="w600 firasans-font">Visiting Summary:</h5></div>
						<div class="col-12 col-md-4 firasans-font mt-md20 mt15">
							<div class="bs-h40 smart-form mb0">
							<input type="text" class="caleran-ex-1 field-h40 form-control" readonly  data-plugin-options='{"rangeOrientation":true,"showButtons":true}' />
							</div>
						</div>
						<div class="col-12 col-md-6 mt-md40 mt15 lato-font">
							<div class="media">
								<span class="d-flex align-items-center">
									<img class="img-fluid d-block mx-auto img-55" src="<?php echo $basedir; ?>apps/smart/images/time-spent.png">
								</span>
								<div class="media-body align-self-center ml15 ml-lg30">
									<h5 class="vd-gblue-clr w400">Time spent on website</h5>
									<p class="lato-font vd-gblue-clr w700 f-30 f-lg-36 mt8">01:05:20</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 mt-md40 mt15 lato-font">
							<div class="media">
								<span class="d-flex align-items-center">
									<img class="img-fluid d-block mx-auto img-55" src="<?php echo $basedir; ?>apps/smart/images/pages-visited.png">
								</span>
								<div class="media-body align-self-center ml15 ml-lg30">
									<h5 class="vd-gblue-clr w400">Total visited pages</h5>
									<p class="lato-font vd-gblue-clr w700 f-30 f-md-36 mt8">40</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 mt-md40 mt15 lato-font">
							<div class="media">
								<span class="d-flex align-items-center">
									<img class="img-fluid d-block mx-auto img-55" src="<?php echo $basedir; ?>apps/smart/images/videos-viewed.png">
								</span>
								<div class="media-body align-self-center ml15 ml-lg30">
									<h5 class="vd-gblue-clr w400">Total viewed videos</h5>
									<p class="lato-font vd-gblue-clr w700 f-30 f-lg-36 mt8">20</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 mt-md40 mt15 lato-font">
							<div class="media">
								<span class="d-flex align-items-center">
									<img class="img-fluid d-block mx-auto img-55" src="<?php echo $basedir; ?>apps/smart/images/notifications-viewed.png">
								</span>
								<div class="media-body align-self-center ml15 ml-lg30">
									<h5 class="vd-gblue-clr w400">Total viewed notifications</h5>
									<p class="lato-font vd-gblue-clr w700 f-30 f-lg-36 mt8">20</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row mt-md40 mt15">
						<div class="col-12 col-md-8 mt-md30"><h5 class="w600 firasans-font">Mailing Summary:</h5></div>
						<div class="col-12 col-md-4 firasans-font mt-md20 mt15">
							<div class="bs-h40 smart-form mb0">
							<input type="text" class="caleran-ex-1 field-h40 form-control" readonly  data-plugin-options='{"rangeOrientation":true,"showButtons":true}' />
							</div>
						</div>
						<div class="col-12 col-md-6 mt-md40 mt15 lato-font">
							<div class="media">
								<span class="d-flex align-items-center">
									<img class="img-fluid d-block mx-auto img-55" src="<?php echo $basedir; ?>apps/smart/images/mails-sent.png">
								</span>
								<div class="media-body align-self-center ml15 ml-lg30">
									<h5 class="vd-gblue-clr w400">Total sent mail</h5>
									<p class="lato-font vd-gblue-clr w700 f-30 f-lg-36 mt8">400</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 mt-md40 mt15 lato-font">
							<div class="media">
								<span class="d-flex align-items-center">
									<img class="img-fluid d-block mx-auto img-55" src="<?php echo $basedir; ?>apps/smart/images/mails-opened.png">
								</span>
								<div class="media-body align-self-center ml15 ml-lg30">
									<h5 class="vd-gblue-clr w400">Total opened mail</h5>
									<p class="lato-font vd-gblue-clr w700 f-30 f-lg-36 mt8">200</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 mt-md40 mt15 lato-font">
							<div class="media">
								<span class="d-flex align-items-center">
									<img class="img-fluid d-block mx-auto img-55" src="<?php echo $basedir; ?>apps/smart/images/mails-clicked.png">
								</span>
								<div class="media-body align-self-center ml15 ml-lg30">
									<h5 class="vd-gblue-clr w400">Total clicked mail</h5>
									<p class="lato-font vd-gblue-clr w700 f-30 f-lg-36 mt8">20</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row mt-md40 mt15">
						<div class="col-12 col-md-8 mt-md30"><h5 class="w600 firasans-font">Existing Summary:</h5></div>
						<div class="col-12 col-md-4 firasans-font mt-md20 mt15">
							<div class="bs-h40 smart-form mb0">
							<input type="text" class="caleran-ex-1 field-h40 form-control" readonly  data-plugin-options='{"rangeOrientation":true,"showButtons":true}' />
							</div>
						</div>
						<div class="col-12 col-md-6 mt-md40 mt15 lato-font">
							<div class="media">
								<span class="d-flex align-items-center">
									<img class="img-fluid d-block mx-auto img-55" src="<?php echo $basedir; ?>apps/smart/images/list-exist.png">
								</span>
								<div class="media-body align-self-center ml15 ml-lg30">
									<h5 class="vd-gblue-clr w400">Present in list</h5>
									<p class="lato-font vd-gblue-clr w700 f-30 f-lg-36 mt8">10</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 mt-md40 mt15 lato-font">
							<div class="media">
								<span class="d-flex align-items-center">
									<img class="img-fluid d-block mx-auto img-55" src="<?php echo $basedir; ?>apps/smart/images/segment-exist.png">
								</span>
								<div class="media-body align-self-center ml15 ml-lg30">
									<h5 class="vd-gblue-clr w400">Present in segment</h5>
									<p class="lato-font vd-gblue-clr w700 f-30 f-lg-36 mt8">10</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				 
				<!-- Feed Tab Pane--> 
				<div id="feed" class="container-fluid tab-pane fade lato-font">
					<div class="row mt10">
						<div class="col-12 mt30"><h5 class="w600 firasans-font f-14">Today</h5></div>
						<div class="w-100">
							<div class="col-12 col-xl-11 offset-xl-1 mt25 lato-font">
								<div class="recent-activity recent-activity-feeds d-block mt15">
									<div class="col-12 lato-font py17 px0 px-md30">
										<div class="row">
											<div class="col-12 col-md-4 col-lg-3 col-xl-2">
												<div class="media justify-content-between">
													<span class="d-flex align-items-center">
														<p class="f-12 lh130 d-gblue-clr mt6">12:10pm<br>Duration 05:45</p>
													</span>
													<span class="d-none d-md-flex align-items-center">
														<div class="timeline-circle f-20 text-center"><i class="icon-total-visited-pages"></i></div>
													</span>
												</div>
											</div>
											<div class="col-12 col-md-8 col-lg-9 col-xl-10">
												<p class="vd-gblue-clr f-14 lh130 mt3"><span class="w600">Xander Paige</span> viewed page <a href="#" class="w600 p-blue-clr">"Health Check Up Camp Health Check Up Camp Health Check Up Camp Health Check Up Camp Health Check Up Camp Health Check Up."</a></p>
											</div>
										</div>
									</div>
								</div>
							
								<div class="recent-activity recent-activity-feeds d-block mt15">
									<div class="col-12 lato-font py17 px0 px-md30">
										<div class="row">
											<div class="col-12 col-md-4 col-lg-3 col-xl-2">
												<div class="media justify-content-between">
													<span class="d-flex align-items-center">
														<p class="f-12 lh130 d-gblue-clr mt6">12:10pm<br>Duration 05:45</p>
													</span>
													<span class="d-none d-md-flex align-items-center">
														<div class="timeline-circle f-20 text-center"><i class="icon-total-viewed-videos"></i></div>
													</span>
												</div>
											</div>
											<div class="col-12 col-md-8 col-lg-9 col-xl-10">
												<p class="vd-gblue-clr f-14 lh130 mt3"><span class="w600">Xander Paige</span> viewed video<a href="#" class="w600 p-blue-clr">"Amazon CPA Marketing Biz In Box –HQPLR Store."</a></p>
											</div>
										</div>
									</div>
								</div>
								<div class="recent-activity recent-activity-feeds d-block mt15">
									<div class="col-12 lato-font py17 px0 px-md30">
										<div class="row">
											<div class="col-12 col-md-4 col-lg-3 col-xl-2">
												<div class="media justify-content-between">
													<span class="d-flex align-items-center">
														<p class="f-12 lh130 d-gblue-clr mt6">12:10pm</p>
													</span>
													<span class="d-none d-md-flex align-items-center">
														<div class="timeline-circle f-20 text-center"><i class="icon-from-and-reply-mail"></i></div>
													</span>
												</div>
											</div>
											<div class="col-12 col-md-8 col-lg-9 col-xl-10">
												<p class="vd-gblue-clr f-14 lh130 mt3"><span class="w600">Xander Paige</span> was sent a mail <a href="#" class="w600 p-blue-clr">“ Mail Subject ”</a> in <a href="#" class="w600 p-blue-clr"> “ List Name ” </a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-12 mt50"><h5 class="w600 firasans-font f-14">Yesterday</h5></div>
							<div class="col-12 col-xl-11 offset-xl-1 mt25 lato-font">
							
								<div class="recent-activity recent-activity-feeds d-block mt15">
									<div class="col-12 lato-font py17 px0 px-md30">
										<div class="row">
											<div class="col-12 col-md-4 col-lg-3 col-xl-2">
												<div class="media justify-content-between">
													<span class="d-flex align-items-center">
														<p class="f-12 lh130 d-gblue-clr mt6">12:10pm</p>
													</span>
													<span class="d-none d-md-flex align-items-center">
														<div class="timeline-circle f-20 text-center"><i class="icon-opened-mail-one"></i></div>
													</span>
												</div>
											</div>
											<div class="col-12 col-md-8 col-lg-9 col-xl-10">
												<p class="vd-gblue-clr f-14 lh130 mt3"><span class="w600">Xander Paige</span>  opened a mail  <a href="#" class="w600 p-blue-clr"> “ Mail Subject ” </a> in <a href="#" class="w600 p-blue-clr"> “ List Name ” </a></p>
											</div>
										</div>
									</div>
								</div>
								
								<div class="recent-activity recent-activity-feeds d-block mt15">
									<div class="col-12 lato-font py17 px0 px-md30">
										<div class="row">
											<div class="col-12 col-md-4 col-lg-3 col-xl-2">
												<div class="media justify-content-between">
													<span class="d-flex align-items-center">
														<p class="f-12 lh130 d-gblue-clr mt6">12:10pm</p>
													</span>
													<span class="d-none d-md-flex align-items-center">
														<div class="timeline-circle f-20 text-center"><i class="icon-total-clicked-mail"></i></div>
													</span>
												</div>
											</div>
											<div class="col-12 col-md-8 col-lg-9 col-xl-10">
												<p class="vd-gblue-clr f-14 lh130 mt3"><span class="w600">Xander Paige</span> clicked  <a href="#" class="w600 p-blue-clr"> https://www.saglus.com </a> from <a href="#" class="w600 p-blue-clr">“ Mail Subject ” </a> in <a href="#" class="w600 p-blue-clr">“ List Name ” </a> </p>
											</div>
										</div>
									</div>
								</div>
								
								<div class="recent-activity recent-activity-feeds d-block mt15">
									<div class="col-12 lato-font py17 px0 px-md30">
										<div class="row">
											<div class="col-12 col-md-4 col-lg-3 col-xl-2">
												<div class="media justify-content-between">
													<span class="d-flex align-items-center">
														<p class="f-12 lh130 d-gblue-clr mt6">12:10pm<br>Duration 05:45</p>
													</span>
													<span class="d-none d-md-flex align-items-center">
														<div class="timeline-circle f-20 text-center"><i class="icon-total-viewed-notification"></i></div>
													</span>
												</div>
											</div>
											<div class="col-12 col-md-8 col-lg-9 col-xl-10">
												<p class="vd-gblue-clr f-14 lh130 mt3"><span class="w600">Xander Paige</span> viewed a web notification <a href="#" class="w600 p-blue-clr">"Name of web notification"</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-12 mt50"><h5 class="w600 firasans-font f-14">March 20, 2018</h5></div>
							<div class="col-12 col-xl-11 offset-xl-1 mt25 lato-font">
							
								<div class="recent-activity recent-activity-feeds d-block mt15">
									<div class="col-12 lato-font py17 px0 px-md30">
										<div class="row">
											<div class="col-12 col-md-4 col-lg-3 col-xl-2">
												<div class="media justify-content-between">
													<span class="d-flex align-items-center">
														<p class="f-12 lh130 d-gblue-clr mt6">12:10pm</p>
													</span>
													<span class="d-none d-md-flex align-items-center">
														<div class="timeline-circle f-20 text-center"><i class="icon-from-and-reply-mail"></i></div>
													</span>
												</div>
											</div>
											<div class="col-12 col-md-8 col-lg-9 col-xl-10">
												<p class="vd-gblue-clr f-14 lh130 mt3"><span class="w600">Xander Paige</span> was sent a mail  <a href="#" class="w600 p-blue-clr"> " Mail Subject "</a></p>
											</div>
										</div>
									</div>
								</div>
								
								<div class="recent-activity recent-activity-feeds d-block mt15">
									<div class="col-12 lato-font py17 px0 px-md30">
										<div class="row">
											<div class="col-12 col-md-4 col-lg-3 col-xl-2">
												<div class="media justify-content-between">
													<span class="d-flex align-items-center">
														<p class="f-12 lh130 d-gblue-clr mt6">12:10pm</p>
													</span>
													<span class="d-none d-md-flex align-items-center">
														<div class="timeline-circle f-20 text-center"><i class="icon-from-and-reply-mail"></i></div>
													</span>
												</div>
											</div>
											<div class="col-12 col-md-8 col-lg-9 col-xl-10">
												<p class="vd-gblue-clr f-14 lh130 mt3"><span class="w600">Xander Paige</span> was sent a mail  <a href="#" class="w600 p-blue-clr"> "Mail Subject" </a> in <a href="#" class="w600 p-blue-clr"> "List Name" </a></p>
											</div>
										</div>
									</div>
								</div>
								
								<div class="recent-activity recent-activity-feeds d-block mt15">
									<div class="col-12 lato-font py17 px0 px-md30">
										<div class="row">
											<div class="col-12 col-md-4 col-lg-3 col-xl-2">
												<div class="media justify-content-between">
													<span class="d-flex align-items-center">
														<p class="f-12 lh130 d-gblue-clr mt6">12:10pm</p>
													</span>
													<span class="d-none d-md-flex align-items-center">
														<div class="timeline-circle f-20 text-center"><i class="icon-redirect-link"></i></div>
													</span>
												</div>
											</div>
											<div class="col-12 col-md-8 col-lg-9 col-xl-10">
												<p class="vd-gblue-clr f-14 lh130 mt3"><span class="w600">Xander Paige</span> was redirected to <a href="#" class="w600 p-blue-clr"> https://www.saglus.com</a> from <a href="#" class="w600 p-blue-clr"> “ Revolution of facebook remarketing (Page) ”</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
				<!-- Feed Tab Feedbacks--> 
				<div id="Feedbacks" class="tab-pane fade mCustomScrollbar feedback-tab-height" data-mcs-theme="inset-3">
					<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<!-- Good Feedback-->
							<div class="d-flex flex-column flex-md-row mt-md60 mt15">
								<div class="emoji-icon-width">
									<img src="../../images/good-emoji.png" class="img-fluid img-circle d-block mx-auto">
								</div>
								<div class="mt10 mt-md0 w-100 ml-md20">
								
									<div class="w-100 break-all mt-md8 text-md-left text-center">
										<h5 class="w600">Good</h5>
										<span class="f-12 f-md-14">On 29 Nov 2018 at 04:25 pm</span>
									</div>
									
									<p class="f-14 d-gblue-clr lh150 w400 word-wrap mt-md20 mt10 text-xs-justify">
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								</div>
							</div>
							<!-- Great Feedback-->
							<div class="d-flex flex-column flex-md-row mt-md60 mt15">
								<div class="emoji-icon-width">
									<img src="../../images/great-emoji.png" class="img-fluid img-circle d-block mx-auto">
								</div>
								<div class="mt10 mt-md0 w-100 ml-md20">
								
									<div class="w-100 break-all mt-md8 text-md-left text-center">
										<h5 class="w600">Great</h5>
										<span class="f-12 f-md-14">On 29 Nov 2018 at 04:25 pm</span>
									</div>
									
									<p class="f-14 d-gblue-clr lh150 w400 word-wrap mt-md20 mt10 text-xs-justify">
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								</div>
							</div>
							<!-- Terrible Feedback-->
							<div class="d-flex flex-column flex-md-row mt-md60 mt15">
								<div class="emoji-icon-width">
									<img src="../../images/terrible-emoji.png" class="img-fluid img-circle d-block mx-auto">
								</div>
								<div class="mt10 mt-md0 w-100 ml-md20">
								
									<div class="w-100 break-all mt-md8 text-md-left text-center">
										<h5 class="w600">Terrible</h5>
										<span class="f-12 f-md-14">On 29 Nov 2018 at 04:25 pm</span>
									</div>
									
									<p class="f-14 d-gblue-clr lh150 w400 word-wrap mt-md20 mt10 text-xs-justify">
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								</div>
							</div>
							<!-- Okey Feedback-->
							<div class="d-flex flex-column flex-md-row mt-md60 mt15">
								<div class="emoji-icon-width">
									<img src="../../images/okey-emoji.png" class="img-fluid img-circle d-block mx-auto">
								</div>
								<div class="mt10 mt-md0 w-100 ml-md20">
								
									<div class="w-100 break-all mt-md8 text-md-left text-center">
										<h5 class="w600">Okey</h5>
										<span class="f-12 f-md-14">On 29 Nov 2018 at 04:25 pm</span>
									</div>
									
									<p class="f-14 d-gblue-clr lh150 w400 word-wrap mt-md20 mt10 text-xs-justify">
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								</div>
							</div>
							<!-- Bad Feedback-->
							<div class="d-flex flex-column flex-md-row mt-md60 mt15">
								<div class="emoji-icon-width">
									<img src="../../images/bad-emoji.png" class="img-fluid img-circle d-block mx-auto">
								</div>
								<div class="mt10 mt-md0 w-100 ml-md20">
								
									<div class="w-100 break-all mt-md8 text-md-left text-center">
										<h5 class="w600">Bad</h5>
										<span class="f-12 f-md-14">On 29 Nov 2018 at 04:25 pm</span>
									</div>
									
									<p class="f-14 d-gblue-clr lh150 w400 word-wrap mt-md20 mt10 text-xs-justify">
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								</div>
							</div>
						</div>
						<!-- Load More Button -->
						<div class="col-12 text-center mt-md60 mt15">
							<a href="#" class="base-btn default-btn btn-xs-block pl-md60 pr-md60 py-md15">LOAD MORE</a>
						</div>
					</div>
					</div>
				</div>    
			</div>
        </div>
		
	</div>
		
		
		<!-- Right Section Starts -->
		<div class="col-12 col-md-5 col-xl-4 single-account-bleft p0 recent-activity-section account-section-right">
			<div class="col-12 col-md-12 px25 single-account-header lato-font align-items-center d-flex">
			<h5 class="w600 f-18">Recent Activity</h5>
			</div>
			<div class="col-12 p0 lato-font single-account-btop mCustomScrollbar account-content-right" data-mcs-theme="inset-3">
			
				<div class="recent-activity recent-activity-hover pt-md10">
					<div class="col-12 lato-font py20 px15 px-lg30">
								<div class="media">
							<span class="d-flex align-items-center">
								<div class="timeline-circle f-20 text-center"><i class="icon-total-visited-pages"></i></div>
							</span>
							<div class="media-body align-self-center ml15 ml-lg30 recent-activity-link">
								<p class="vd-gblue-clr f-14 f-md-13 f-lg-15 lh130 mt3">
								<b>Xander Paige</b> viewed page
								<a href="#">"Health Check Up Camp"</a></p>
								<p class="f-11 f-sm-13 f-lg-14 lh130 d-gblue-clr mt4">July 20, 2018 at 12:10pm</p>
							</div>
						</div>
					</div>
				</div>
			
				<div class="recent-activity recent-activity-hover pt-md10">
					<div class="col-12 lato-font py20 px15 px-lg30">
						<div class="media">
							<span class="d-flex align-items-center">
								<div class="timeline-circle f-20 text-center"><i class="icon-total-viewed-videos"></i></div>
							</span>
							<div class="media-body align-self-center ml15 ml-lg30 recent-activity-link">
								<p class="vd-gblue-clr f-14 f-md-13 f-lg-15 lh130 mt3">
								<b>Xander Paige</b> viewed video
								<a href="#">"Amazon CPA Marketing Biz In Box –HQPLR Store"</a></p>
								<p class="f-11 f-sm-13 f-lg-14 lh130 d-gblue-clr mt4">July 20, 2018 at 12:10pm</p>
							</div>
						</div>
					</div>
				</div>
			
				<div class="recent-activity recent-activity-hover pt-md10">
					<div class="col-12 lato-font py20 px15 px-lg30">
						<div class="media">
							<span class="d-flex align-items-center">
								<div class="timeline-circle f-20 text-center"><i class="icon-send-mail"></i></div>
							</span>
							<div class="media-body align-self-center ml15 ml-lg30 recent-activity-link">
								<p class="vd-gblue-clr f-14 f-md-13 f-lg-15 lh130 mt3">
								<b>Xander Paige</b> was sent a mail in
								<a href="#">"List Name"</a>list</p>
								<p class="f-11 f-sm-13 f-lg-14 lh130 d-gblue-clr mt4">July 20, 2018 at 12:10pm</p>
							</div>
						</div>
					</div>
				</div>
			
				<div class="recent-activity recent-activity-hover pt-md10">
					<div class="col-12 lato-font py20 px15 px-lg30">
						<div class="media">
							<span class="d-flex align-items-center">
								<div class="timeline-circle f-20 text-center"><i class="icon-opened-mail-one"></i></div>
							</span>
							<div class="media-body align-self-center ml15 ml-lg30 recent-activity-link">
								<p class="vd-gblue-clr f-14 f-md-13 f-lg-15 lh130 mt3">
								<b>Xander Paige</b> opend a mail sent from
								<a href="#">"List Name"</a>list</p>
								<p class="f-11 f-sm-13 f-lg-14 lh130 d-gblue-clr mt4">July 20, 2018 at 12:10pm</p>
							</div>
						</div>
					</div>
				</div>
			
				<div class="recent-activity recent-activity-hover pt-md10">
					<div class="col-12 lato-font py20 px15 px-lg30">
						<div class="media">
							<span class="d-flex align-items-center">
							<div class="timeline-circle f-20 text-center"><i class="icon-total-clicked-mail"></i></div>
							</span>
							<div class="media-body align-self-center ml15 ml-lg30 recent-activity-link">
								<p class="vd-gblue-clr f-14 f-md-13 f-lg-15 lh130 mt3">
								<b>Xander Paige</b> clicked a mail sent from 
								<a href="#">"List Name"</a></p>
								<p class="f-11 f-sm-13 f-lg-14 lh130 d-gblue-clr mt4">July 20, 2018 at 12:10pm</p>
							</div>
						</div>
					</div>
				</div>
			
				<div class="recent-activity recent-activity-hover pt-md10">
					<div class="col-12 lato-font py20 px15 px-lg30">
						<div class="media">
							<span class="d-flex align-items-center">
								<div class="timeline-circle f-20 text-center"><i class="icon-total-viewed-notification"></i></div>
							</span>
							<div class="media-body align-self-center ml15 ml-lg30 recent-activity-link">
								<p class="vd-gblue-clr f-14 f-md-13 f-lg-15 lh130 mt3">
								<b>Xander Paige</b> viewed a web notification
								<a href="#">"Name of web notification"</a></p>
								<p class="f-11 f-sm-13 f-lg-14 lh130 d-gblue-clr mt4">July 20, 2018 at 12:10pm</p>
							</div>
						</div>
					</div>
				</div>
			
				<div class="recent-activity recent-activity-hover pt-md10">
					<div class="col-12 lato-font py20 px15 px-lg30">
						<div class="media">
							<span class="d-flex align-items-center">
								<div class="timeline-circle f-20 text-center"><i class="icon-send-mail"></i></div>
							</span>
							<div class="media-body align-self-center ml15 ml-lg30 recent-activity-link">
								<p class="vd-gblue-clr f-14 f-md-13 f-lg-15 lh130 mt3">
								<b>Xander Paige</b> was sent a mail
								<a href="#"> "Mail Subject"</a></p>
								<p class="f-11 f-sm-13 f-lg-14 lh130 d-gblue-clr mt4">July 20, 2018 at 12:10pm</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="recent-activity recent-activity-hover pt-md10">
					<div class="col-12 lato-font py20 px15 px-lg30">
						<div class="media">
							<span class="d-flex align-items-center">
								<div class="timeline-circle f-20 text-center"><i class="icon-from-and-reply-mail"></i></div>
							</span>
							<div class="media-body align-self-center ml15 ml-lg30 recent-activity-link">
								<p class="vd-gblue-clr f-14 f-md-13 f-lg-15 lh130 mt3">
								<b>Xander Paige</b> was sent a mail
								<a href="#"> "Mail Subject"</a> in <a href="#"> "List Name"</a></p>
								<p class="f-11 f-sm-13 f-lg-14 lh130 d-gblue-clr mt4">July 20, 2018 at 12:10pm</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="recent-activity recent-activity-hover pt-md10">
					<div class="col-12 lato-font py20 px15 px-lg30">
						<div class="media">
							<span class="d-flex align-items-center">
								<div class="timeline-circle f-20 text-center"><i class="icon-redirect-link"></i></div>
							</span>
							<div class="media-body align-self-center ml15 ml-lg30 recent-activity-link">
								<p class="vd-gblue-clr f-14 f-md-13 f-lg-15 lh130 mt3">
								<b>Xander Paige</b> was redirected to
								<a href="#"> "Link" </a> from <a href="#"> "Page Name" </a></p>
								<p class="f-11 f-sm-13 f-lg-14 lh130 d-gblue-clr mt4">July 20, 2018 at 12:10pm</p>
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</div>
		<!-- Right Section Ends -->
		
		
		
		
		<!-- Left Section Ends -->
		
		
		
	</div>
</div>
<!-- Single Account Container Ends -->




<!-- Email Editor Starts -->
<div class="me-container col-12 col-md-6 col-lg-6 col-xl-5 p0" id="me-section">

	<div class="me-header">
		<div class="row">
			<div class="col-4 white-clr lato-font f-14">Send Mail</div>
			<div class="col-8 text-right t-decoration-none f-12 mt3">
				<a href="#!" class="white-clr d-btn-inline-block" id="me-minimize" title="minimize"><i class="icon-minus"></i></a> &nbsp; &nbsp; 
				<a href="#!" class="white-clr d-btn-inline-block" id="me-fullscreen" title="full screen"><i class="icon-fullscreen-two"></i></a><a href="#!" class="white-clr d-btn-inline-block" id="me-smallscreen" title="exit full screen" style="display:none;"><i class="icon-exit-fullscreen-two"></i></a> &nbsp; &nbsp; 
				<a href="#!" class="white-clr d-inline-block" id="me-close" title="close window"><i class="icon-cross"></i></a>
			</div>
		</div>
	</div>

	<div class="me-body">
		<div class="me-to-box">
			<div class="row">
				<div class="col-12 f-12">
					<div class="row">
						<div class="col-2 d-gblue-clr lato-font f-14 mt8">To :</div>
						<div class="col-10 f-12 pl0">
							<div class="smart-form f-14">

							<input class="form-control disabled-email-field" value="anurag@saglusinfo.com" type="email" name="tags"  disabled>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="me-subject-box">
			<div class="row">
				<div class="col-2 d-gblue-clr lato-font f-14 mt6">Subject :</div>
				<div class="col-10 pl0">
					<div class="smart-form">
					<input type="text" class="form-control f-14" placeholder="Enter Subject" name="subject">
					</div>
				</div>
			</div>
		</div>

		<div class="mail-editor">
		<div id="mail-editor">
		<h1>Hello world!</h1>
		</div>
		</div>

		<div class="me-actions-box">
			<div class="row align-items-center">
				<div class="col-7 d-gblue-clr lato-font f-18">
					<a href="#!" id="upload_link_primary" class="d-gblue-clr d-inline-block t-decoration-none upload-icon"><i class="icon-file-upload"></i></a>
					<input type="hidden" value="../../../../images/profile-pic.png" name="pic_primary">
					<input id="upload_primary" type="file" class="d-none"/>
				</div>
				<div class="col-5 text-right">
					<ul class="mail-editor-buttons f-14">
					<li class="list-link"><a href="#" class="list-inline-link white-btn cancel-button t-decoration-none">Cancel</a></li>
					<li class="list-link"><a href="#" class="list-inline-link blue-btn send-button t-decoration-none">Send</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>



<script>
var ckEditorID;
ckEditorID = 'mail-editor';
CKEDITOR.config.forcePasteAsPlainText = true;
CKEDITOR.replace(ckEditorID,
{
    toolbar :
    [
      {
        items : [ 'Font','FontSize','Bold','Italic','Underline','TextColor','BGColor','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','BulletedList','NumberedList','Image']
      }
    ],toolbarLocation: 'bottom'
});			
initSample();
</script>

</div>
<!-- Email Editor Ends -->


<div class="screen-overlay-dark" style="display:none;"></div>


<!------- Smart Footer Include File ---------->
<?php include '../../../smart/html/includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->