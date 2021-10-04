@extends('admin.layouts.master')
@section('title','Detail Billing')
@section('main')
<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <button class="btn btn-primary">Export Billing</button>
            <div class="card">
                <div class="upper p-4">
                    <div class="d-flex justify-content-between">
                        <div class="amount"> <span class="text-primary font-weight-bold">Sell directly to opendoor</span>
                            <h4>$200,000</h4> <small>Thursday,September 24th</small>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <div class="add"> <span class="font-weight-bold d-block">User 1</span> <span class="font-weight-bold d-block">Room 1</span> <small>Single</small> </div> <img src="{{asset('images/room/room2.jpg')}}" width="100" class="rounded-circle">
                        </div>
                    </div>
                    <hr>
                    <div class="transaction mt-2">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center"> <i class="fa fa-check-circle-o"></i> <span class="ml-2">Offer/contract price</span> </div> <span class="font-weight-bold">$200,00</span>
                        </div>
                    </div>
                    <div class="transaction mt-2">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center"> <i class="fa fa-check-circle-o"></i> <span class="ml-2">Wash Colthes</span> </div> <span class="font-weight-bold">$6</span>
                        </div>
                    </div>
                    <div class="transaction mt-2">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center"> <i class="fa fa-check-circle-o"></i> <span class="ml-2">Wifi</span> </div> <span class="font-weight-bold">$0.8</span>
                        </div>
                    </div>
                </div>
                <div class="lower bg-primary p-4 py-5 text-white d-flex justify-content-between">
                    <div class="d-flex flex-column"> <span>Cost including service charges</span> <small>This nuber may change depending on replair and your home conditions</small> </div>
                    <h3>$206,8</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@stop