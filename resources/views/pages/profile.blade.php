@extends('layouts.app')

@section('content')
<div class="container">
	<section id="inner-headline">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
						<li class="active">Home</li><li class="active">Profile</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section id="content">
		<div class="container">
			<div class="tabx">
				<table class="table table-striped" style="width: 98%">
					<tr>
						<th>Name</th>
						<th>Phone</th>
						<th>E-mail</th>
						<th>Referral</th>
					</tr>
					<tr>
						<td>{{ $pro->name}}</td>
						<td>{{ $pro->phone}}</td>
						<td>{{ $pro->email}}</td>
						<td>{{ $pro->referral}}</td>
					</tr>
				</table>
			</div>
		</div>
	</section>

</div>
@endsection