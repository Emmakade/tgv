@extends('layouts.adh')
@section('content')
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="/admin">Admin</a><i class="icon-angle-right"></i></li>
					<li><a href="#">Cable Option</a><i class="icon-angle-right"></i></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">
		<div class="row">

			<div class="col-lg-3">
				<aside class="left-sidebar">
					<div class="widget">
						<h5 class="widgetheading">Role Available</h5>
						<ul class="cat">
							<li><i class="fa fa-angle-right"></i><a href="/admin/members">Members</a><span> (20)</span></li>
							<li><i class="fa fa-angle-right"></i><a href="/admin/buyhistory">Buying History</a></li>
							<li><i class="fa fa-angle-right"></i><a href="/admin/cablehistory">Cable History</a></li>
							<li><i class="fa fa-angle-right"></i><a href="/admin/paymenthistory">Payment History</a></li>
							<li><i class="fa fa-angle-right"></i><a href="/admin/cable_option">Network Cable</a></li>
							<li><i class="fa fa-angle-right"></i><a href="/admin/data_option">Subscriber Data</a></li>
						</ul>
					</div>
				</aside>
			</div>
			<div class="col-lg-9">
				<h3>CABLE OPTION</h3> 
				<form action="{{ route('cable') }}" method="post" role="form" class="register-form" id="myForm">
					@csrf
					<div class="row">
						<div class="col-xs-6 col-md-6">
						<select name="subscriber" id="subscriber" class="form-control input-sm @error('subscriber') is-invalid @enderror" tabindex="4">
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
						<div class="col-xs-6 col-md-6">
							<input type="submit" value="Check" class="btn btn-primary btn-block btn-sm" id="submitBtn" tabindex="7">
						</div>
					</div>
				</form>
				<p></p>
				<div class="tabx">
					<table class="table table-striped table-responsive" style="width: 98%">
						<tr>
							<th>S/N</th>
							<th>NAME</th>
							<th>PRICE (N)</th>
							<th>STATE</th>
						</tr>
						@php 
							$no = 1;
						@endphp
						
							<tr>
								<td>1</td>
								<td>GOTV SMALLIE #830</td>
								<td>830</td>
								<td>
									<label class="switch">
					                  <input type="checkbox" checked>
					                  <span class="slider round"></span>
					                </label>
								</td>
							</tr>
					</table>
				</div>
			</div>

		</div>


	</div>
</section>

@endsection