@extends('layouts.app')
@section('content')
<section id="featured" class="bg">
	
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- Slider -->
				<div id="main-slider" class="main-slider flexslider">
					<ul class="slides">
						<li>
							<img src="{{asset('/custom/img/s1.jpg')}}" alt="" />
						</li>
						<li>
							<img src="{{asset('/custom/img/s2.jpg')}}" alt="" />
						</li>
						<li>
							<img src="{{asset('/custom/img/s3.jpg')}}" alt="" />
						</li>
					</ul>
				</div>
				<!-- end slider -->
			</div>
		</div>
	</div>


</section>
<section class="callaction">
	<div class="container">
		<div class="row" style="width: 78%; margin-left: auto; margin-right: auto;">
			<div class="col-lg-8">
				<div class="cta-text">
					<h2>Awesome <span>Awoof</span> Data Plan for you</h2>
					<p> We offer cheap data on all network suitable for easy surfing on your mobile,tablet and P.C.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="cta-btn">
					<a href="/data-plan" class="btn btn-theme btn-lg">Order Now <i class="fa fa-angle-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="text-center">
					<h2 class="highlight">Check <span>What We Do</span> here</h2>
					<p>We sell data plans at lesser price for all your service provider, airtime to cash exchange, mobile top-up, cable subscription among others.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-sm-3 col-md-3 col-lg-3">
						<div class="box">
							<div class="aligncenter">
								<a href="/airtime-to-cash">
									<div class="icon">
										<img src="{{asset('/custom/img/airtime.png')}}" alt="" />
									</div>
									<h4>Airtime to Cash</h4>
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-md-3 col-lg-3">
						<div class="box">
							<div class="aligncenter">
								<a href="/mobile-topup">
									<div class="icon">
										<img src="{{asset('/custom/img/top-up.png')}}" alt="" />
									</div>
									<h4>Mobile Top-up</h4>
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-md-3 col-lg-3">
						<div class="box">
							<div class="aligncenter">
								<a href="/data-plan">
									<div class="icon">
										<img src="{{asset('/custom/img/data.png')}}" alt="" />
									</div>
									<h4>Cheap Data Plan</h4>
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-md-3 col-lg-3">
						<div class="box">
							<div class="aligncenter">
								<a href="/cable-subscription">
									<div class="icon">
										<img src="{{asset('/custom/img/cable.png')}}" alt="" />
									</div>
									<h4>Cable Subscription</h4>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">
		
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<div class="row">
			<div class="col-lg-12 aligncenter">
				<h2><strong>Affordable Data Plans</strong></h4>
			</div>
			<div class="col-lg-3">
				<div class="pricing-box-alt e_swing">
					<div id="mtn" class="pricing-terms">
						<h3>MTN SME</h3>
					</div>
					<div class="pricing-content">
						<ul>
							<li><i class="icon-ok"></i> 1GB - #330</li>
							<li><i class="icon-ok"></i> 2GB - #660</li>
							<li><i class="icon-ok"></i> 3GB - #990</li>
							<li><i class="icon-ok"></i> 4GB - #1280</li>
							<li><i class="icon-ok"></i> 5GB - #1600</li>
							<li><i class="icon-ok"></i> 10GB - #3200</li>
							<li><i class="icon-ok"></i> 12GB - #3900</li>
						</ul>
					</div>
					<div class="pricing-action">
						<a href="/data-plan" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Order Now</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="pricing-box-alt e_swing">
					<div id="glo" class="pricing-terms">
						<h3>GLO</h3>
					</div>
					<div class="pricing-content">
						<ul>
							<li><i class="icon-ok"></i> 1.0GB - #480</li>
							<li><i class="icon-ok"></i> 2.3GB - #950</li>
							<li><i class="icon-ok"></i> 3.75GB - #1425</li>
							<li><i class="icon-ok"></i> 5.25GB - #1900</li>
							<li><i class="icon-ok"></i> 7.0GB- #2375</li>
							<li><i class="icon-ok"></i> 8.0GB- #2850</li>
							<li><i class="icon-ok"></i> 12GB - #3800</li>
						</ul>
					</div>
					<div class="pricing-action">
						<a href="/data-plan" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Order Now</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="pricing-box-alt e_swing">
					<div id="airtel" class="pricing-terms">
						<h3>AIRTEL</h3>
					</div>
					<div class="pricing-content">
						<ul>
							<li><i class="icon-ok"></i> 750MB - #475</li>
							<li><i class="icon-ok"></i> 1.5GB - #950</li>
							<li><i class="icon-ok"></i> 2.0 - #1140</li>
							<li><i class="icon-ok"></i> 3.0 - #1425</li>
							<li><i class="icon-ok"></i> 4.5- #1900</li>
							<li><i class="icon-ok"></i> 6.0- #2375</li>
							<li><i class="icon-ok"></i> 8GB - #2850</li>
						</ul>
					</div>
					<div class="pricing-action">
						<a href="/data-plan" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Order Now</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="pricing-box-alt e_swing">
					<div id="eti" class="pricing-terms">
						<h3>9MOBILE</h3>
					</div>
					<div class="pricing-content">
						<ul>
							<li><i class="icon-ok"></i> 500MB - #430</li>
							<li><i class="icon-ok"></i> 1.5GB - #900</li>
							<li><i class="icon-ok"></i> 2.0GB - #1100</li>
							<li><i class="icon-ok"></i> 3.0GB - #1650</li>
							<li><i class="icon-ok"></i> 4.5GB- #2050</li>
							<li><i class="icon-ok"></i> 5.0GB- #2750</li>
							<li><i class="icon-ok"></i> 11GB - #3480</li>
						</ul>
					</div>
					<div class="pricing-action">
						<a href="/data-plan" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Order Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- divider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
	</div>
	<!-- end divider -->

</section>

@endsection