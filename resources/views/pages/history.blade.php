@extends('layouts.app')

@section('content')
<div class="container">
	<section id="inner-headline">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
						<li class="active">Home</li><li class="active">Data-Cable History</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section id="content">
		<div class="container">
			<div class="tabx">
				<table class="table table-striped table-responsive" style="width: 98%">
						<thead>
							<tr>
								<th>S/N</th>
								<th>Network</th>
								<th>Price</th>
								<th>Phone</th>
								<th>Created At</th>
							</tr>
						</thead>
						@php 
							$no = 1;
						@endphp
						<tbody>
							@foreach($pays as $pay)
									<tr>
										<td>{{ $no++ }}</td>
										<td>{{ $pay->network}}</td>
										<td>{{ $pay->price}}</td>
										<td>{{ $pay->phone}}</td>
										<td>{{ $pay->created_at}}</td>
									</tr>
							@endforeach
						</tbody>
				</table>
			</div>
			<div class="aligncenter">
				<a href="#" class="btn btn-info" id="mybtn"><i class="fa fa-cog"></i> Load Cable History</a>
			</div>
			<table class="table table-striped table-responsive" style="width: 98%" id="mytable"></table>
		</div>
	</section>

</div>
@endsection