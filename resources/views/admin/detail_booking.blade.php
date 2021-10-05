@extends('admin.layouts.master')
@section('title','Detail Booking')
@section('main')
<div class="container">
    <div class="team-single">
        <div class="row">
            <div class="col-lg-4 col-md-5 xs-margin-30px-bottom">
                <div class="team-single-img">
                    <img src="{{asset('images/user/user-3.png')}}" alt="avatar">
                </div>
                <div class="bg-light-gray padding-30px-all md-padding-25px-all sm-padding-20px-all text-center">
                    <h4 class="margin-10px-bottom font-size24 md-font-size22 sm-font-size20 font-weight-600">User 1</h4>
                </div>
            </div>

            <div class="col-lg-8 col-md-7">
                <div class="team-single-text padding-50px-left sm-no-padding-left">
                    <h4 class="font-size38 sm-font-size32 xs-font-size30">Booking 1</h4>
                    <div class="contact-info-section margin-40px-tb">
                        <ul class="list-style9 no-margin">
                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-graduation-cap text-orange"></i>
                                        <strong class="margin-10px-left text-orange">Type Room:</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>Single</p>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fa fa-birthday-cake text-blue"></i>
                                        <strong class="margin-10px-left xs-margin-four-left text-blue">Date Start:</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>23/02/2021</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fa fa-birthday-cake text-blue"></i>
                                        <strong class="margin-10px-left xs-margin-four-left text-blue">Date End:</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>25/02/2021</p>
                                    </div>
                                </div>
                            </li>
                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="far fa-gem text-yellow"></i>
                                        <strong class="margin-10px-left text-yellow">Quantity:</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>4</p>
                                    </div>
                                </div>

                            </li>
                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="far fa-file text-lightred"></i>
                                        <strong class="margin-10px-left text-lightred">Reserve:</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>100$</p>
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
