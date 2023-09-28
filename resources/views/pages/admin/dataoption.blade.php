@extends('layouts.adh')
@section('content')
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="/admin">Admin</a><i class="icon-angle-right"></i></li>
					<li><a href="#">Data Option</a><i class="icon-angle-right"></i></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">
		<div class="row">

			<div class="col-lg-3">
				<aside class="left-sidebar">
					<div class="widget">
						<h5 class="widgetheading">Role Available</h5>
						<ul class="cat">
							<li><i class="fa fa-angle-right"></i><a href="/admin/members">Members</a><span> (20)</span></li>
							<li><i class="fa fa-angle-right"></i><a href="/admin/buyhistory">Buying History</a></li>
							<li><i class="fa fa-angle-right"></i><a href="/admin/cablehistory">Cable History</a></li>
							<li><i class="fa fa-angle-right"></i><a href="/admin/paymenthistory">Payment History</a></li>
							<li><i class="fa fa-angle-right"></i><a href="/admin/cable_option">Network Cable</a></li>
							<li><i class="fa fa-angle-right"></i><a href="/admin/data_option">Subscriber Data</a></li>
						</ul>
					</div>
				</aside>
			</div>
			<div class="col-lg-9">
				<h3>DATA OPTION</h3> <h4>MTN SME</h4>
				<div class="tabx">
					<table class="table table-striped table-responsive" style="width: 98%">
						<tr>
							<th>S/N</th>
							<th>NAME</th>
							<th>PRICE (N)</th>
							<th>STATE</th>
						</tr>
						@php 
							$no = 1;
						@endphp
						
							<tr>
								<td>1</td>
								<td>1GB #330</td>
								<td>330</td>
								<td>
									<label class="switch">
					                  <input type="checkbox" checked>
					                  <span class="slider round"></span>
					                </label>
								</td>
							</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection