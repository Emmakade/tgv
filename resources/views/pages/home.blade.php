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
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="box">
                                <div class="aligncenter">
                                    <div class="emma">
                                        <a href="/airtime-to-cash">
                                            <img src="{{ asset('/custom/img/airtime.jpg') }}" alt="" class="e_shake">
                                            <h4>Airtime to Cash</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="box">
                                <div class="aligncenter">
                                    <div class="emma">
                                        <a href="/topup">
                                            <img src="{{ asset('/custom/img/topup.png') }}" alt="" class="e_shake">
                                            <h4>Mobile Top-up</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="box">
                                <div class="aligncenter">
                                    <div class="emma">
                                        <a href="/data-plan">
                                            <img src="{{ asset('/custom/img/data.jpeg') }}" alt="" class="e_shake">
                                            <h4>Cheap Data Plan</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="box">
                                <div class="aligncenter">
                                    <div class="emma">
                                        <a href="/cable-subscription">
                                            <img src="{{ asset('/custom/img/cablee.png') }}" alt="" class="e_shake">
                                            <h4>Cable Subscription</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
