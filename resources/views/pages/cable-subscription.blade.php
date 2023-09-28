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
						<li class="">Cable Plan</li>
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
					<form action="{{ route('cable') }}" method="post" role="form" class="register-form" id="myForm">
						<h4>Cable Subscription</h4>
						<hr class="colorgraph">
						<div class="form-group">
							<select name="subscriber" id="subscriber" class="form-control input-lg @error('subscriber') is-invalid @enderror" tabindex="4">
								<option value="">Select Subscriber</option>
								@foreach($cable_plans as $subscriber => $id)
									<option value="{{$id}}">{{$subscriber}}</option>
								@endforeach
							</select>
							@error('subscriber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
						<div class="form-group">

							<select name="subcable" id="subcable" class="form-control input-lg @error('subcable') is-invalid @enderror" tabindex="5">
								<option value="">Select Plan</option>
							</select>
							@error('subcable')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
						<div class="form-group">
							<input type="text" name="iuc_number" id="iuc_number" class="form-control input-lg @error('iuc_number') is-invalid @enderror" placeholder="Enter device IUC number" tabindex="6">
						</div>
						@error('iuc_number')
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
<script>
    
</script>
@endsection