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
				$name = Auth::user()->name;
				$email = Auth::user()->email;
				$phone = Auth::user()->phone;

				$array = array(array('metaname' => 'user_id', 'metavalue' => $user_id),
                array('metaname' => 'current_bal', 'metavalue' => $current_bal));
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
						<i class=" fa fa-google-wallet"></i> Available Balance: {{ $current_bal }}
					</div>
					
					<!-- Flutterwave -->
					
					<form method="POST" action="{{ route('payment') }}" name="form2" id="paymentForm">
					    <h4>Fund Your Wallet with Flutterwave</h4>
						<hr class="colorgraph">
						<div class="form-group">
							<input type="number" name="amt" id="amt" class="form-control input-lg" placeholder="Enter amount to fund" onkeyup="flw()">
						</div>
						<p>
							The amount you will pay: <!--<span id="show"></span> -->
						</p>
						<input type="text" name="amount" id="show" class="form-control input-lg"> 
						<hr class="colorgraph">

					    <!--<input type="hidden" name="amount" value="500"> -->
					    <input type="hidden" name="payment_method" value="both"> 
					    <!--<input type="hidden" name="description" value="Beats by Dre. 2017">-->
					    <input type="hidden" name="country" value="NG"> 
					    <input type="hidden" name="currency" value="NGN"> 
					    <input type="hidden" name="email" value="{{ $email }}"> 
					    <input type="hidden" name="firstname" value="{{ $name }}"> 
					    <!--<input type="hidden" name="lastname" value="Sunday">-->
					    <input type="hidden" name="metadata" value="{{ json_encode($array) }}"> 
					    <input type="hidden" name="phonenumber" value="{{ $phone }}"> 
					    {{-- <input type="hidden" name="paymentplan" value="362" />  --}}
					    {{-- <input type="hidden" name="ref" value="MY_NAME_5uwh2a2a7f270ac98" />  --}}
					    {{-- <input type="hidden" name="logo" value="https://pbs.twimg.com/profile_images/915859962554929153/jnVxGxVj.jpg" />  --}}
					    {{-- <input type="hidden" name="title" value="Flamez Co" />  --}}
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
	function flw() {
		document.getElementById("show").readOnly = true;
	  var x = document.getElementById("amt").value;
	  var res = Number(x) + Number((x * 0.014));
	  document.getElementById("show").value = res;
	}
</script>
@endsection