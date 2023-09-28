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
						<li class="active">Wallet to Wallet</li>
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
					<form action="{{ route('trans') }}" method="post" role="form" class="register-form" id="myform">
						@csrf
						<h4>Wallet to wallet transfer.</h4>
						<hr class="colorgraph">

						<div class="form-group">
							<input type="text" name="phone" min="100" class="form-control input-lg @error('phone') is-invalid @enderror" placeholder="Enter phone number">
							@error('phone')
	                            <span class="invalid-feedback" role="alert">
	                                <strong>{{ $message }}</strong>
	                            </span>
	                        @enderror
						</div>
						<div class="form-group">
							<input type="text" name="amount" min="100" class="form-control input-lg @error('amount') is-invalid @enderror" placeholder="Enter amount to tranfer">
							@error('amount')
	                            <span class="invalid-feedback" role="alert">
	                                <strong>{{ $message }}</strong>
	                            </span>
	                        @enderror
						</div>
						<hr class="colorgraph">
						<div class="row">
							<div class="col-xs-12 col-md-6"><input type="submit" value="Send from wallet" class="btn btn-primary btn-block btn-lg" id="submitBtn" tabindex="7"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection