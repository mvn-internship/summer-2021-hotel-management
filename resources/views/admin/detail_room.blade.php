@extends('admin.layouts.master')
@section('title','Detail Room')
@section('main')
<div class="container">
    <div class="team-single">
        <div class="row">
            <div class="col-lg-12 col-md-12  xs-margin-30px-bottom pr-0 pl-0">
                <div class="team-single-img">
                    <img src="{{asset('images/room/room2.jpg')}}" alt="image-room">
                </div>
                <h3 class="font-size38 sm-font-size32 xs-font-size30">Room 1</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-7 offset-2">
                <div class="team-single-text padding-50px-left sm-no-padding-left">
                    <h4 >Single</h4>
                    <p class="no-margin-bottom">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum voluptatem.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@stop