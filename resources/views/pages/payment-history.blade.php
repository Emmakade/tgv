@extends('layouts.app')

@section('content')
<div class="container">
	<section id="inner-headline">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
						<li class="active">Home</li><li class="active">Payment History</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section id="content">
		<div class="container">
			<div class="tabx">
				<table class="table table-striped table-responsive" style="width: 98%">
						<tr>
							<th>S/N</th>
							<th>Payment Type</th>
							<th>Amount</th>
							<th>Reference</th>
							<th>Paid At</th>
						</tr>
						@php 
							$no = 1;
						@endphp
						@foreach($pays as $pay)
							<tr>
								<td>{{ $no++ }}</td>
								<td>{{ $pay->payment_type}}</td>
								<td>{{ $pay->amount}}</td>
								<td>{{ $pay->reference}}</td>
								<td>{{ $pay->paid_at}}</td>
							</tr>
						@endforeach
				</table>
			</div>
		</div>
	</section>

</div>
@endsection