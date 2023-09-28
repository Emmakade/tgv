@extends('layouts.adh')
@section('content')
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="/admin">Admin</a><i class="icon-angle-right"></i></li>
					<li><a href="#">Cable History</a><i class="icon-angle-right"></i></li>
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
				<h3>All Cable History</h3>
				<div class="tabx">
					<table class="table table-striped table-responsive" style="width: 98%">
						<tr class="hds">
							<th>S/N</th>
							<th>NAME</th>
							<th>PRICE</th>
							<th>SUBSCRIBER</th>
							<th>IUC No.</th>
							<th>TIME</th>
						</tr>
						@php 
							$no = 1;
						@endphp
						@foreach($cables as $cable)
							<tr>
								<td>{{ $no++ }}</td>
								<td>{{ $cable->name }} </td>
								<td>{{ $cable->price }}</td>
								<td> {{ $cable->subscriber }}</td>
								<td>{{ $cable->iuc }}</td>
								<td>{{ $cable->created_at }}</td>
							</tr>
						@endforeach
					</table>
				</div>
				
			</div>

		</div>


	</div>
</section>

@endsection