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
					<form role="form" name="form1" class="register-form" method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" id="myForm">
						<h4>Fund Your Wallet with Paystack</h4>
						<hr class="colorgraph">
						<div class="form-group">
							<input type="number" name="amt" id="amt" class="form-control input-lg" placeholder="Enter amount to fund" onkeyup="calc()">
						</div>
						<p>
							The amount you will pay: 
						</p>
						<input type="text" name="amount" id="show" class="form-control input-lg"> 
						<hr class="colorgraph">

						<input type="hidden" name="email" value="{{ $email }}"> {{-- required --}}
			            <input type="hidden" name="orderID" value="1">
			           <!--<input type="hidden" name="amount" value="40000">--> {{-- required in kobo --}}
			            <input type="hidden" name="quantity" value="100">
			            <input type="hidden" name="currency" value="NGN">
			            <input type="hidden" name="metadata" value="{{ json_encode($array = ['user_id' => $user_id, 'current_bal' => $current_bal]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
			            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
			            @csrf

						<div class="row">
							<div class="col-xs-12 col-md-6"><input type="submit" value="Fund wallet" class="btn btn-primary btn-block btn-lg" id="submitBtn" tabindex="7"></div>
						</div>
					</form>					
				</div>
			</div>
		</div>
	</section>
</div>
<script>
	function calc() {
		document.getElementById("show").readOnly = true;
	  var x = document.getElementById("amt").value;
	  var res = Number(x) + Number((x * 0.015));
	  document.getElementById("show").value = res;
	}
</script>
@endsection