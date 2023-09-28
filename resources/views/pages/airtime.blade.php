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
						<li class="active">Airtime to cash</li>
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
					<form action="{{ route('con')}}" method="post" role="form" class="register-form" id="myForm">
						@csrf
						<h4>Convert your excess airtime to cash</h4>
						<hr class="colorgraph">

						<div class="form-group">
							<select id="network" name="network" class="form-control input-lg @error('network') is-invalid @enderror" tabindex="4" onchange="myChange()">
								<option value="">Select network</option>
								<option value="m1">MTN</option>
								<option value="g2">GLO</option>
								<option value="e3">9MOBILE</option>
								<option value="a4">AIRTEL</option>
							</select>
							@error('network')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
						<div class="form-group">
							<input type="number" name="amount" id="amount" min="500" class="form-control input-lg @error('amount') is-invalid @enderror" placeholder="Amount" onkeyup="calc()">
						</div>
						@error('amount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						<div class="form-group">
							<input type="text" name="payout" id="payout" class="form-control input-lg @error('payout') is-invalid @enderror" placeholder="Your payout" title="Money You Receive in Return">
						</div>
						@error('payout')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						<hr class="colorgraph">
						<div class="row">
							<div class="col-xs-12 col-md-6"><input type="submit" value="Send" class="btn btn-primary btn-block btn-lg" id="submitBtn" tabindex="7"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</div>
<script>
	function calc() {
		document.getElementById("payout").readOnly = true;
		var net = document.getElementById("network").value;

		if (net == "g2") {
			var x = document.getElementById("amount").value;
			var res = Number(x) - Number((x * 0.25));
			document.getElementById("payout").value = res;
		} else {
			var x = document.getElementById("amount").value;
			var res = Number(x) - Number((x * 0.2));
			document.getElementById("payout").value = res;
		}
	}

	function myChange() {
		document.getElementById("amount").value = "";
		document.getElementById("result").value = "";
	}
</script>
@endsection