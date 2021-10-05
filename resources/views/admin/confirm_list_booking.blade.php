@extends('admin.layouts.master')
@section('title','List Recent Booking')
@section('main')
<!--[ Recent Users ] start-->
<div class="col-xl-12 col-md-10">
    <div class="card Recent-Users">
        <div class="card-header">
            <h5>List Recent Bookings</h5>
        </div>
        <div class="card-block px-0 py-3">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>User</th>
                            <th>TypeRoom</th>
                            <th>Quantity</th>
                            <th>Reserve</th>
                            <th>Date Start</th>
                            <th>Date End</th>
                            <th>Create_at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="unread">
                            <td>1</td>
                            <td>
                                <h6 class="mb-1"><a href="#">Room 1</a></h6>
                            </td>
                            <td>VDT</td>
                            <td>
                                <h6 class="text-muted">Single</h6>
                            </td>
                            <td><h6>1</h6></td>
                            <td>
                                <h6 class="mb-1">2000000</h6>
                            </td>
                            <td>2021 MAY 11 9:00</td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                        </tr>
                        <tr class="unread">
                            <td>2</td>
                            <td>
                                <h6 class="mb-1"><a href="#">Room 2</a></h6>
                            </td>
                            <td>VDT</td>
                            <td>
                                <h6 class="text-muted">Single</h6>
                            </td>
                            <td><h6>2</h6></td>
                            <td>
                                <h6 class="mb-1">2000000</h6>
                            </td>
                            <td>2021 MAY 11 9:00</td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                        </tr>
                        <tr class="unread">
                            <td>3</td>
                            <td>
                                <h6 class="mb-1"><a href="#">Room 3</a></h6>
                            </td>
                            <td>VDT</td>
                            <td>
                                <h6 class="text-muted">Single</h6>
                            </td>
                            <td><h6>1</h6></td>
                            <td>
                                <h6 class="mb-1">2000000</h6>
                            </td>
                            <td>2021 MAY 11 9:00</td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                        </tr>
                        <tr class="unread">
                            <td>4</td>
                            <td>
                                <h6 class="mb-1"><a href="#">Room 4</a></h6>
                            </td>
                            <td>VDT</td>
                            <td>
                                <h6 class="text-muted">Single</h6>
                            </td>
                            <td><h6>3</h6></td>
                            <td>
                                <h6 class="mb-1">2000000</h6>
                            </td>
                            <td>2021 MAY 11 9:00</td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                        </tr>
                        <tr class="unread">
                            <td>1</td>
                            <td>
                                <h6 class="mb-1"><a href="#">Room 1</a></h6>
                            </td>
                            <td>VDT</td>
                            <td>
                                <h6 class="text-muted">Single</h6>
                            </td>
                            <td><h6>1</h6></td>
                            <td>
                                <h6 class="mb-1">2000000</h6>
                            </td>
                            <td>2021 MAY 11 9:00</td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                        </tr>
                        
                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <nav aria-label="..." class="nav-pagination row justify-content-center">
        <ul class="pagination col-md-3">
            <li class="page-item disabled ">
                <a class="page-link" tabindex="-1" href="#">Previous </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>
<!--[ Recent Users ] end-->

<!-- [ Main Content ] end -->
@stop
