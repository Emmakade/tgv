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
				@php
				$user_id = Auth::user()->id;
				$current_bal = Auth::user()->wallet;
				$email = Auth::user()->email;
				@endphp
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
						<i class="fab fa-wallet"></i> Available Balance: {{ $current_bal }}
					</div>

					<!-- Paystack -->
					<form role="form" id="myForm" name="form1" class="register-form" method="POST" action="/s" accept-charset="UTF-8">
						<h4>Send Sms to phone number</h4>
						<hr class="colorgraph">
						<div class="form-group">
							<input type="number" name="phone" id="phone" class="form-control input-lg" placeholder="Enter phone number">
						</div>
						
						<hr class="colorgraph">

						
			            @csrf

						<div class="row">
							<div class="col-xs-12 col-md-6"><input type="submit" value="Send SMS" class="btn btn-primary btn-block btn-lg" id="submitBtn" tabindex="7"></div>
						</div>
					</form>					
				</div>
			</div>
		</div>
	</section>
</div>
<script>
	$('#myForm').submit(function(){
        $('#submitBtn').html('Sending...');
    });
</script>
@endsection