	<div id="layoutSidenav_nav">
				<span class="close-mobile-nav"><i class="fa fa-close-line-squared-alt"></i></span>
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">

					<div class="sidebar-user">
                        <a href="javascript: void(0);"> 
                            <img src="//seyari.co.ke/public/assets/uploads/<?php echo $this->me['user_dp'] ?>" alt="<?php echo $this->me['user_names'] ?>" height="42" class="rounded-circle shadow-sm">
                            <span class="sidebar-user-name"><?php echo $this->me['user_names'] ?></span>
                        </a>
                    </div>

					<div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">NAVIGATIONS</div>

<a class="nav-link" href="/admin">
	<div class="sb-nav-link-icon"><i class="fa fa-home"></i></div>
	Home
</a>



 
 
 
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Structure" aria-expanded="false" aria-controls="collapseLayouts">
	<div class="sb-nav-link-icon"><i class="fa fa-building"></i></div>
	Structure
	<div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
</a>
<div class="collapse" id="Structure" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
	<nav class="sb-sidenav-menu-nested nav">
		<a class="nav-link" href="/admin/structure/departments">Departments</a>
		<a class="nav-link" href="/admin/structure/roles">Roles</a> 
		<a class="nav-link" href="/admin/structure/job-groups">Job Groups</a>
		<a class="nav-link" href="/admin/structure/branches">Branches</a>
	</nav>
</div>
 
 
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#hmantmgt" aria-expanded="false" aria-controls="collapseLayouts">
	<div class="sb-nav-link-icon"><i class="fa fa-users"></i></div>
	Human Management
	<div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
</a>
<div class="collapse" id="hmantmgt" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
	<nav class="sb-sidenav-menu-nested nav">
		<a class="nav-link" href="/admin/hmgt/employees?status=Active">Active Employees</a> 
		<a class="nav-link" href="/admin/hmgt/employees?status=Dismissed">Dismissed Employees</a> 
		<a class="nav-link" href="/admin/hmgt/employees?status=Retired">Retired Employees</a> 
		<a class="nav-link" href="/admin/hmgt/employees?status=Probation">Probation Employees</a> 
		<a class="nav-link" href="/admin/hmgt/employees/new">Recruit Employee</a>
		<a class="nav-link" href="/admin/hmgt/employees/transfer">Transfer Employee</a>
		<a class="nav-link" href="/admin/hmgt/employees/uploads">Upload Employee Certs</a>
		<a class="nav-link" href="/admin/hmgt/employees?status=Applicant">Non-Employees</a>
	</nav>
</div>

<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#salmgt" aria-expanded="false" aria-controls="collapseLayouts">
	<div class="sb-nav-link-icon"><i class="fa fa-dollar"></i></div>
	Salaries Management
	<div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
</a>
<div class="collapse" id="salmgt" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
	<nav class="sb-sidenav-menu-nested nav">
		<a class="nav-link" href="/admin/salariesmgt/allowances_deductions">Manage Allowances & Deductions</a> 
		 
		<a class="nav-link" href="/admin/salariesmgt/advance-applications">Advance Applications</a>   
		<a class="nav-link" href="/admin/salariesmgt/generate-payslips">Generate Payslips</a> 
	</nav>
</div>

<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#jobsmgt" aria-expanded="false" aria-controls="collapseLayouts">
	<div class="sb-nav-link-icon"><i class="fa fa-briefcase"></i></div>
	Jobs Management
	<div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
</a>
<div class="collapse" id="jobsmgt" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
	<nav class="sb-sidenav-menu-nested nav">
		<a class="nav-link" href="/admin/jobsmgt/new">New Job</a> 
		<a class="nav-link" href="/admin/jobsmgt/view">View Jobs</a>  <!--- leads to view its applicants-->
	</nav>
</div>
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#leavemgt" aria-expanded="false" aria-controls="collapseLayouts">
	<div class="sb-nav-link-icon"><i class="fa fa-calendar-times-o"></i></div>
	Leave Management
	<div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
</a>
<div class="collapse" id="leavemgt" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
	<nav class="sb-sidenav-menu-nested nav">
		<a class="nav-link" href="/admin/leave?status=Active">Employees on Leave</a> <!-- recall -->
		<a class="nav-link" href="/admin/leave?status=Pending">Leave Applications</a>  <!--- reject approve-->
		<a class="nav-link" href="/admin/leave?status=remdays">Remaining Leave Days</a>
	</nav>
</div>
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#attsheet" aria-expanded="false" aria-controls="collapseLayouts">
	<div class="sb-nav-link-icon"><i class="fa fa-calendar-check-o"></i></div>
	Daily Attendance
	<div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
</a>
<div class="collapse" id="attsheet" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
	<nav class="sb-sidenav-menu-nested nav">
		<a class="nav-link" href="/admin/attendance">Today's attendance sheet</a>  
	</nav>
</div>

<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tickets" aria-expanded="false" aria-controls="collapseLayouts">
	<div class="sb-nav-link-icon"><i class="fa fa-comment"></i></div>
	Support Tickets 
	<div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
</a>
<div class="collapse" id="tickets" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
	<nav class="sb-sidenav-menu-nested nav">
		<a class="nav-link" href="/admin/support_tickets?status=current">Active Tickets</a> 
		<a class="nav-link" href="/admin/support_tickets?status=closed">Closed Tickets</a>
		<a class="nav-link" href="/admin/send_email">Send Emails</a>
	</nav>
</div>

 
 


 

<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#reports" aria-expanded="false" aria-controls="collapseLayouts">
	<div class="sb-nav-link-icon"><i class="fa fa-line-chart"></i></div>
	Reports
	<div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
</a>
<div class="collapse" id="reports" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
	<nav class="sb-sidenav-menu-nested nav">
		<a class="nav-link" href="/admin/reports/">Pay Reposts </a>  <!--  fines, tips, salaries, loans, dues  --->
	</nav>
</div>


<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dashb" aria-expanded="false" aria-controls="collapseLayouts">
	<div class="sb-nav-link-icon"><i class="fa fa-cog"></i></div>
	Settings
	<div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
</a>
<div class="collapse" id="dashb" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
	<nav class="sb-sidenav-menu-nested nav">
		<a class="nav-link" href="/admin/my-profile">Profile settings</a> 
		<a class="nav-link" href="/admin/change-password">Change password</a> 
		<a class="nav-link" href="/admin/logout">Logout</a> 
	</nav>
</div>

<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#companydet" aria-expanded="false" aria-controls="collapseLayouts">
	<div class="sb-nav-link-icon"><i class="fa fa-bank"></i></div>
	Company
	<div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
</a>
<div class="collapse" id="companydet" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
	<nav class="sb-sidenav-menu-nested nav">
		<a class="nav-link" href="/admin/company">Edit Details</a> 
		<a class="nav-link" href="/admin/logs">Logs</a> 
	</nav>
</div>
 

<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dashb2" aria-expanded="false" aria-controls="collapseLayouts">
	<div class="sb-nav-link-icon"><i class="fa fa-tachometer"></i></div>
	Dashboard
	<div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
</a>
<div class="collapse" id="dashb2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
	<nav class="sb-sidenav-menu-nested nav">
		<a class="nav-link" href="/dashboard">As other employees</a> 
	</nav>
</div>
 
 
 
 
 
 
 
 
 
 
                    </div>
                </nav>
            </div><!--End layoutSidenav_nav-->