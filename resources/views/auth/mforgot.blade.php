@extends('layouts.app')
@section('content')

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Forgot Password</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">

		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
				@if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
				<form role="form" class="register-form" method="POST" action="{{ route('password.email') }}">
					@csrf
					<h2>Forgot your password? <small>Don't worry, we got your back</small></h2>
					<hr class="colorgraph">

					<div class="form-group">
						<input type="email" name="email" id="email" class="form-control input-lg @error('email') is-invalid @enderror" placeholder="Email Address" tabindex="4" value="{{ old('email') }}" required autocomplete="email" autofocus>

						@error('email')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                    @enderror
					</div>

					<hr class="colorgraph">
					<div class="row">
						<div class="col-xs-12 col-md-6">
							<input type="submit" value="Reset Password" class="btn btn-danger btn-block btn-lg" tabindex="7">
						</div>
						<div class="col-xs-12 col-md-6">Do you have a password? <a href="/login">Login</a></div>
					</div>
				</form>
			</div>
		</div>

	</div>
</section>

@endsection