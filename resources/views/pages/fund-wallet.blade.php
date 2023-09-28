@extends('layouts.app')

@section('content')
<div class="container">
	<section id="inner-headline">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
						<li class="active">Home</li>
						<li class="active">Fund Wallet</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section id="content">
		<div class="container">
			
			<div class="row">
				
				<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
					@if (\Session::has('success'))
						<div class="alert alert-success aligncenter" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
							<ul>
							    <li>{!! \Session::get('success') !!}</li>
							</ul>
						</div>
					
					@elseif(\Session::has('msg'))
						<div class="alert alert-warning aligncenter" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
							<ul>
							    <li>{!! \Session::get('msg') !!}</li>
							</ul>
						</div>
					@endif
					<div class="info-panel">
						<i class=" fa fa-google-wallet"></i> Available Balance: {{ Auth::user()->wallet }}
					</div>
					<form id="form-shower">
						<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);" class="form-control input-lg">
							<option value="">Select Payment Gateway</option>
							<option value="/paystack">paystack</option>
							<option value="/flutterwave">flutterwave</option>
							<option value="/monnify">monnify</option>
						</select>
					</form>

					
					
				</div>
			</div>
		</div>
	</section>
</div>
@endsection