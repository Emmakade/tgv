@extends('layouts.app')

@section('content')
<div class="container">
	<section id="content">
		<!-- <div class="map">
			<div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>
		</div> -->
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
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
						<div class="alert alert-danger aligncenter" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
							<ul>
							    <li>{!! \Session::get('msg') !!}</li>
							</ul>
						</div>
					@endif
					<h2>Contact us <small>get in touch with us.</small></h2>
					<hr class="colorgraph">
					<div id="sendmessage">Your message has been sent. Thank you!</div>
					<div id="errormessage"></div>
					<form action="{{ route('con') }}" method="post" role="form" class="contactForm" id="myForm">
						@csrf
						<div class="form-group">
							<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Your Name">
							@error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
						<div class="form-group">
							<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Your Email">
							@error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
						<div class="form-group">
							<input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" placeholder="Subject">
							@error('subject')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
						<div class="form-group">
							<textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="5" placeholder="Message"></textarea>
							@error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>

						<div class="text-center"><button type="submit" class="btn btn-theme btn-block btn-md" id="submitBtn">Send Message</button></div>
					</form>
					<hr class="colorgraph">

				</div>
			</div>
		</div>
	</section>
</div>
@endsection