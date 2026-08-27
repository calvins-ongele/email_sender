<!--Header Nav-->
		<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <div class="container-fluid">
				<a class="navbar-brand text-md-center" href="/admin"><?php echo $this->_company['c_name'] ?></a>
				<button class="btn btn-link btn-sm mr-auto" id="sidebarToggle" href="#">
					<div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
				</button>

				<ul class="navbar-nav ml-auto ml-md-0 notification-area">
					
				</ul>

				<ul class="navbar-nav ml-auto ml-md-0">
					<li class="nav-item dropdown animate-dropdown">
						<a class="nav-link dropdown-toggle" id="languageSelector" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe"></i> English</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="languageSelector">
								<a class="dropdown-item" href="#/?language=English">English</a> 
						</div>
					</li>
				</ul>

				<ul class="navbar-nav ml-auto ml-md-0">
					<li class="nav-item dropdown animate-dropdown">
						<a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
							<!--<a class="dropdown-item" href="/admin/profile"><i class="fa fa-user"></i> Profile Overview</a>-->
							<!--<a class="dropdown-item" href="/admin/profile-settings"><i class="fa fa-pencil"></i> Profile Settings</a>-->
							<!--<a class="dropdown-item" href="/admin/changepassword"><i class="fa fa-exchange"></i></i> Change Password</a>-->
														<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="/admin/logout"><i class="fa fa-sign-out"></i> Logout</a>
						</div>
					</li>
				</ul>

			</div>
        </nav><!--End Header Nav-->