@extends('layouts.app')

@section('content')
<section id="inner-headline">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <ul class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                <li class="active">Register</li>
            </ul>
        </div>
    </div>
</div>
</section>
<section id="content">
<div class="container">

    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form role="form" class="register-form" method="POST" action="{{ route('register') }}">
                @csrf
                <h2>Create an account <small>It's free and always will be.</small></h2>
                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control input-lg @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Name" tabindex="1">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="phone" id="phone" class="form-control input-lg  @error('email') is-invalid @enderror" placeholder="Phone Number" tabindex="2">

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email Address" tabindex="3">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" name="referral" id="referral" class="form-control input-lg  @error('referral') is-invalid @enderror" placeholder="Enter referal phone number" tabindex="4">

                    @error('referral')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control input-lg @error('password') is-invalid @enderror" placeholder="Password" tabindex="5" autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" name="password_confirmation" id="password-confirm" class="form-control input-lg" placeholder="Confirm Password" tabindex="6" autocomplete="new-password">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4 col-sm-3 col-md-3">
                        <span class="button-checkbox">
                            <button type="button" class="btn" data-color="info" tabindex="7">
                                {{ __('I Agree') }}
                            </button>
                            <input type="checkbox" name="agree" id="agree" class="hidden" value="1" {{ old('remember') ? 'checked' : '' }}>
                        </span>
                    </div>
                    <div class="col-xs-8 col-sm-9 col-md-9">
                        By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
                    </div>
                </div>

                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-theme btn-block btn-lg" tabindex="7"></div>
                    <div class="col-xs-12 col-md-6">Already have an account? <a href="/login">Sign In</a></div>
                </div>
            </form>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
                </div>
                <div class="modal-body">
                    <p><i class="fa fa-arrow-right"></i> Tayonk Global Venture  has the right to  stop inoperative  or inactive reseller account. Time  frame is one month.</p>
                    <p><i class="fa fa-arrow-right"></i> A minimum  5000 must be  paid into reseller wallet account for a start.</p>
                    <p><i class="fa fa-arrow-right"></i> Money fund cannot be  reversed into back account.</p>
                    <p><i class="fa fa-arrow-right"></i> Reseller  Account will be active after 24 hours of completing  registration.</p>
                    <p><i class="fa fa-arrow-right"></i> No charges for  registration.</p>
                    <p><i class="fa fa-arrow-right"></i> Wallet funding operates on Prepaid basis that is wallet must be fund before making  purchase.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>
</section>
@endsection
