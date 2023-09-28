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
						<li class="active">Data Plan</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section id="content">
		<div class="container">
			@php
				$current_bal = auth()->user()->wallet;
			@endphp
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
					<div class="info-panel">
						<i class=" fa fa-google-wallet"></i> Available Balance: {{ $current_bal }}
					</div>
					<form action="{{ route('send') }}" method="post" role="form" class="register-form" id="myForm">
						<h4>Data Plan</h4>
						<hr class="colorgraph">
						<div class="form-group">
							<select name="network" id="network" class="form-control input-lg @error('network') is-invalid @enderror" tabindex="4">
								<option value="">Select Network</option>
								@foreach($data_plans as $network => $id)
									<option value="{{$id}}">{{$network}}</option>
								@endforeach
							</select>
							@error('network')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
						<div class="form-group">

							<select name="subdata" id="subdata" class="form-control input-lg @error('subdata') is-invalid @enderror" tabindex="5">
								<option value="">Select Plan</option>
							</select>
							@error('subdata')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
						<div class="form-group">
							<input type="text" name="recipient_phone" id="recipient_phone" class="form-control input-lg @error('recipient_phone') is-invalid @enderror" placeholder="Enter recipient phone number" tabindex="6">
						</div>
						@error('recipient_phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						@csrf
						<hr class="colorgraph">
						<div class="row">
							<div class="col-xs-12 col-md-6"><input type="submit" value="Pay from wallet" class="btn btn-primary btn-block btn-lg" id="submitBtn" tabindex="7"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection