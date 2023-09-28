@extends('layouts.adh')
@section('content')
<div id="wrapper">
			<div class="header">
                <div class="site-info">
  <div class="pac">
    <div class="logo">
    <img class="image-fluid" src="http://127.0.0.1:8000/admitted_students/img/logo.png" alt="Osun State Polytechnic, Iree Logo">
    </div>
    <div class="site-name">
      <h4>Osun State Polytechnic, Iree</h4>
      <p>Student Portal</p>
    </div>
  </div>
</div>

    
 
 
<div class="c-right">
  <div class="d-flex align-items-center">
		<img src="http://127.0.0.1:8000/uploads/storage/students/passport/cbVgTxTrcP4LgaNB51EJFNQwsgFyp1iD3OvLRBz8.png" alt="Student Image" class="image-fluid profile-circle" id="small-avatar">
    <button class="navbar-toggle navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" id="sidebarCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</div>            </div>
			<div class="wrapper">
				<nav id="sidebar">
                    <div class="sidapper">
                        <!-- <div class="text-center">
      <p class="last-seen">Last Seen: 2020:20:01</p>
    </div> -->
    <ul class="list-unstyled components ">
      <li class="head active2">
        <a href="http://127.0.0.1:8000/student/admitted/portal"><i class="fa fa-home" style="background-color: rgb(126, 42, 42);"></i>&nbsp;Dashboard</a>
      </li>

        <li class="head active">
          <a href="#profileMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed"><i class="fa fa-user"></i>&nbsp;Student Profile</a>
          <ul class="list-unstyled collapse" id="profileMenu" style="">
              
              <li>
                <a href="http://127.0.0.1:8000/student/admitted/portal/change/password">Change Password</a>
              </li>
              
          </ul>
        </li>
       
        <li class="head">
          <a href="#payFeesMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed"><i class="fa fa-money" style="background-color: rgb(42, 95, 126);"></i>&nbsp;Pay Fees</a>
          <ul class="list-unstyled collapse" id="payFeesMenu" style="">
            <li>
              <a href="http://127.0.0.1:8000/student/admitted/portal/school_fees/full_payment">School Fees</a>
            </li>
            <li>
              <a href="http://127.0.0.1:8000/student/admitted/portal/special_fees">Other Fees</a>
            </li>
          </ul>
        </li>

        <li class="head">
          <a href="#courseMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-book" style="background-color: rgb(255, 51, 0)"></i>&nbsp;Course Registration</a>
          <ul class="collapse list-unstyled" id="courseMenu">
            <li>
              <a href="http://127.0.0.1:8000/student/admitted/portal/course_registration">Register Courses</a>
            </li>
            <li>
              <a href="http://127.0.0.1:8000/student/admitted/portal/view_first_sem_course">View Registered Courses</a>
            </li>
          </ul>
        </li>

        <li class="head">
          <a href="http://127.0.0.1:8000/student/admitted/portal/result_checking"><i class="fa fa-book" style="background-color: rgb(126, 42, 42);"></i>&nbsp;Result Checking</a>
        </li>
      <input type="hidden" value="http://127.0.0.1:8000/student/admitted/portal" name="url">
        <li class="head">
          <a href="#printOuts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-pencil-square-o " style="background-color: rgb(255, 166, 0)"></i>&nbsp;Printouts</a>
          <ul class="collapse list-unstyled" id="printOuts">
            <li>
              <a href="http://127.0.0.1:8000/student/portal/admitted/print_receipts" target="__blank">Payment Receipts</a>
            </li>
            
            <li>
              <a href="http://127.0.0.1:8000/student/portal/admitted/examination_clearance">Examination Clearance</a>
            </li>
            <li>
              <a href="http://127.0.0.1:8000/student/portal/admitted/print_course_forms">Course Form</a>
            </li>
            <li>
              <a href="http://127.0.0.1:8000/student/portal/admitted/view/admission_letter" target="__blank">Admission Letter</a>
            </li>
            <li>
              <a href="http://127.0.0.1:8000/student/portal/admitted/print_profile/print" target="__blank">Profile</a>
            </li>
          </ul>
        </li>

        <li class="head">
          <a href="http://127.0.0.1:8000/student/admitted/portal/logout"><i class="fa fa-sign-out" style="background-color: rgb(255, 51, 0)"></i>&nbsp;Logout</a>
        </li>
    </ul>
                    </div>
				</nav>
				<section id="hds">
                    	<div id="content">
		<div class="content-header">
			<div class="matric-heading">
				<label>Registration/Matric No:  &nbsp;<label style="color: #f92b6d;">20/OSP/107275</label></label>
			</div>
		</div>

		<div class="content-body">
			<div class="student-data">
				<div class="profile-image">
					<img src="http://127.0.0.1:8000/uploads/storage/students/passport/cbVgTxTrcP4LgaNB51EJFNQwsgFyp1iD3OvLRBz8.png" alt="Student Image" class="image-fluid">
				</div>

				<div class="table-responsive" style="overflow-y: hidden;">
					<table class="std-info" cellpadding="7">
						<tbody><tr>
							<th width="35%">Last Name</th>
							<td width="65%">Ogunlaran</td>
						</tr>
						<tr>
							<th>Other Names:</th>
							<td>Tayo Caleb</td>
						</tr>
						<tr>
							<th>Department:</th>
							<td>Mass Communication (broadcast Option)</td>
						</tr>
						<tr>
							<th>Programme/Level:</th>
							<td>HIGHER NATIONAL DIPLOMA FULL TIME 1</td>
						</tr>
						<tr>
							<th>Phone:</th>
							<td>7063889085</td>
						</tr>
						<tr>
							<th>Email:</th>
							<td>tayocaleb312@gmail.com</td>
						</tr>
						<tr>
							<th>Address:</th>
							<td>No 3, Ile Amule Gbolola, Owolaake Ogbomoso</td>
						</tr>
					</tbody></table>
				</div>
				<div class="print-data">
					<a href="#" class="print-btn">Print</a>
				</div> 
			</div>
		</div>
	</div>
 
                </section>
                <div class="loading-modal"></div>
            </div>
           <div class="footer">
                <div class="footer">
    <p>Designed by Osun State Polytechnic ICT. Copyright 2020 All right reserved</p>
</div>            </div> 
            
    </div>
@endsection