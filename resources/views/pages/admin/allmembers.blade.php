@extends('layouts.adh')
@section('content')
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="/admin">Admin</a><i class="icon-angle-right"></i></li>
					<li><a href="#">All Members</a><i class="icon-angle-right"></i></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">
		<div class="row">
			@if (\Session::has('success'))
				<div class="alert alert-info aligncenter" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<ul>
					    <li>{!! \Session::get('success') !!}</li>
					</ul>
				</div>
			@elseif(\Session::has('noteno'))
				<div class="alert alert-danger aligncenter" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<ul>
					    <li>{!! \Session::get('noteno') !!}</li>
					</ul>
				</div> 
			@endif
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
				<h3>All Members</h3>
				<div class="tabx">
					<table class="table table-striped table-responsive" style="width: 98%">
						<tr>
							<th>S/N</th>
							<th>NAME</th>
							<th>PHONE</th>
							<th>E-MAIL</th>
							<th>BAL.</th>
							<th colspan="2">ACTION</th>
						</tr>
						@php 
							$no = 1;
						@endphp
						@foreach($members as $member)
							<tr>
								<td>{{ $no++ }}</td>
								<td>{{ $member->name }} </td>
								<td>{{ $member->phone }}</td>
								<td>{{ $member->email }}</td>
								<td> {{ $member->wallet }}</td>
								<td>
									<a href="#" onclick="Ban({{ $member->id }})" class="btn btn-danger" id="mybtn"><i class="fa fa-lock"></i> Ban</a>
								</td>
								<td>
									<a href="#" onclick="Unban({{ $member->id }})" class="btn btn-info" id="upd"><i class="fa fa-unlock"></i> UnBan</a>
								</td>
							</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		
		function Ban($id){
			if (window.confirm("Are you sure you want to BAN this user?")) {
				window.location = "ban/"+$id;
			} else {
				
			}
		}
		function Unban($id){
			if (window.confirm("Confirm if you would like to UNBAN this user?")) {
				window.location = "unban/"+$id;
			} else {
				
			}
		}
	</script>
</section>

@endsection