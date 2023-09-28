@extends('layouts.app')
@section('content')
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Login</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">

		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
				<form role="form" class="register-form" method="POST" action="{{ route('login') }}">
					@csrf
					<h2>Log in <small>manage your account</small></h2>
					<hr class="colorgraph">

					<div class="form-group">
						<input type="email" name="email" class="form-control input-lg @error('email') is-invalid @enderror" placeholder="Email Address" tabindex="4" value="{{ old('email') }}" autocomplete="email" autofocus>
						
						@error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
					<div class="form-group">
						<input type="password" class="form-control input-lg @error('password') is-invalid @enderror" placeholder="Password" name="password" autocomplete="current-password">

						@error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="row">
						<div class="col-xs-4 col-sm-3 col-md-3">
							<span class="button-checkbox">
								<button type="button" class="btn btn-default" data-color="info" tabindex="7"><i class="state-icon glyphicon glyphicon-unchecked"></i> {{ __('Remember Me') }}</button>
		                        <input type="checkbox" class="hidden" value="1" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
							</span>
						</div>
					</div>

					<hr class="colorgraph">
					<div class="row">
						<div class="col-xs-12 col-md-6">
							<input type="submit" value="Login" class="btn btn-primary btn-block btn-lg" tabindex="7">
						</div>
						<div class="col-xs-12 col-md-6">
							Are you new here? <a href="/register">Signup Now</a> <br>
							Forgot Password? <a href="{{ route('password.request') }}">Recover it</a>
						</div>
					</div>
				</form>
			</div>
		</div>

	</div>
</section>
@endsection