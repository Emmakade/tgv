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
						<li class="active">Topup</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section id="content">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
					<div class="alert alert-info aligncenter" role="alert">
						<ul>
						    <li>Not Available at moment.</li>
						</ul>
					</div>
					<form role="form" class="register-form">
						<h4>Top your airtime.</h4>
						<hr class="colorgraph">

						<div class="form-group">
							<select name="network" class="form-control input-lg" tabindex="4">
								<option value="">Select network</option>
								<option value="">MTN</option>
								<option value="">GLO</option>
								<option value="">9MOBILE</option>
								<option value="">AIRTEL</option>
							</select>
						</div>
						<div class="form-group">
							<input type="text" name="phone" min="100" class="form-control input-lg" placeholder="Enter phone number">
						</div>
						
						<hr class="colorgraph">
						<div class="row">
							<div class="col-xs-12 col-md-6"><input type="submit" value="Pay from wallet" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection