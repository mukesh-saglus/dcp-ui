<!------- Smart Header Include File---------->
<?php include '../includes/smart-header.php'; ?>
<!------- Smart Header Include File end---------->



<!------- Header Start----------->
<div class="container-fluid p15 px-md30 py-md30">
	<div class="row align-items-center">
		<div class="col-12 col-md-8">
			<span class="f-20 f-md-24 lato-font">Security Settings </span>&nbsp; <a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#helpModal"><i class="icon-text-help"></i></a>
			<a href="#" class="gblue-clr t-decoration-none f-17" data-toggle="modal" data-target="#vhelpModal"><i class="icon-video-help"></i></a>
			<p class="gblue-clr f-14 w400 mt5">Configure security settings</p>
		</div>
		<div class="col-12 col-md-4 text-center text-md-right mt10 mt-md0">
			<a href="javascript:void(0);" class="f-16 base-btn blue-btn" data-toggle="modal" data-target="#ipaddressModal"><i class="icon-add-new f-18 align-middle"></i>&nbsp;&nbsp; New</a>
		</div>

	</div>
</div>
<!------- Header End ----------->

<!------- Tabs Start ----------->
<ul class="nav tabs-style3 f-14 f-md-16 w-100 relative" role="tablist">
	<li class="nav-item ml15 ml-md30">
		<a class="nav-link lh110" href="security-login-alert.php">
		<span class="d-none d-md-block">Login Alert<br>
		<span class="f-12 w300">20 Linked Account</span>
		</span>
		<span class="d-block d-md-none"><i class="icon-linked-account f-18"></i></span></a>
	
	</li>
	<li class="nav-item">
		<a class="nav-link lh110" href="security-change-password.php">	
		<span class="d-none d-md-block">Change Password<br>
		<span class="f-12 w300">Fill your social Id</span>
		</span>
		<span class="d-block d-md-none"><i class="icon-social-account f-18"></i></span>
	</a>
	
	</li>
	<li class="nav-item">
		<a class="nav-link lh110" href="security-account-authentication.php">
		<span class="d-none d-md-block">Account Authentication<br>
		<span class="f-12 w300">20 Sessions</span>
		</span>
		<span class="d-block d-md-none"><i class="icon-session f-18"></i></span>
	</a>
	
	</li>
	<li class="nav-item">
		<a class="nav-link active lh110" href="security-ip-address.php">
		<span class="d-none d-md-block">Allowed IP Address<br>
		<span class="f-12 w300">20 Sessions</span>
		</span>
		<span class="d-block d-md-none"><i class="icon-session f-18"></i></span>
	</a>
	
	</li>
</ul>
<!------- Tabs End ----------->


<div class="container-fluid p15 p-md30">
	<div class="row">
		<div class="col-12">
					<div class="table-responsive smart-table-style thori-scroll">
					  <table class="table table-bordered">
					<thead>
					  <tr>
						<th width="5%"></th>
						<th>User Name &nbsp;<i class="fa fa-sort"></i></th>
						<th>IP Address &nbsp;<i class="fa fa-sort"></i></th>
						<th>Created Date &nbsp;<i class="fa fa-sort"></i></th>
						<th>Status</th>
						<th>Actions</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						 <td><img src="../../../../images/email-pic.png" class="img-fluid img-circle"></td>
						<td><a href="#" class="p-blue-clr t-decoration-none">Anurag Sharma</a></td>
						<td>192.168.2.1</td>
						<td>Dec 18, 2017</td>
						<td>
							<label class="switchtoggle-btn">
								<input class="switchtoggle-input" type="checkbox" checked="">
								<span class="switchtoggle-label" data-on="On" data-off="Off"></span> <span class="switchtoggle-handle"></span>
							</label>
						</td>
						<td><ul class="table-action">
							<li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
							<li class="action-menu"><a href="javascript:void(0);" data-toggle="modal" data-target="#deleteModal" class="action-item" title="Delete"><i class="icon-delete"></i></a></li>
						  </ul></td>
					  </tr>
						
					<tr>
						 <td><img src="../../../../images/email-pic.png" class="img-fluid img-circle"></td>
						<td><a href="#" class="p-blue-clr t-decoration-none">Abhishek Sharma</a></td>
						<td>192.168.2.1</td>
						<td>Dec 18, 2017</td>
						<td>
							<label class="switchtoggle-btn">
								<input class="switchtoggle-input" type="checkbox" checked="">
								<span class="switchtoggle-label" data-on="On" data-off="Off"></span> <span class="switchtoggle-handle"></span>
							</label>
						</td>
						<td><ul class="table-action">
							<li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
							<li class="action-menu"><a href="javascript:void(0);" data-toggle="modal" data-target="#deleteModal" class="action-item" title="Delete"><i class="icon-delete"></i></a></li>
						  </ul></td>
					  </tr>
						<tr>
						 <td><span class="caption p-yellow-bg">R</span></td>
						<td><a href="#" class="p-blue-clr t-decoration-none">Ravi Sharma</a></td>
						<td>192.168.2.1</td>
						<td>Dec 18, 2017</td>
						<td>
							<label class="switchtoggle-btn">
								<input class="switchtoggle-input" type="checkbox" checked="">
								<span class="switchtoggle-label" data-on="On" data-off="Off"></span> <span class="switchtoggle-handle"></span>
							</label>
						</td>
						<td><ul class="table-action">
							<li class="action-menu"><a href="#" class="action-item" title="Edit"><i class="icon-edit"></i></a></li>
							<li class="action-menu"><a href="javascript:void(0);" data-toggle="modal" data-target="#deleteModal" class="action-item" title="delete"><i class="icon-delete"></i></a></li>
						  </ul></td>
					  </tr>
					</tbody>
				  </table>
					</div>
	</div>
	</div>	
</div>

<!------- Smart Footer Include File---------->
<?php include '../includes/smart-footer.php'; ?>
<!------- Smart Footer Include File end ---------->