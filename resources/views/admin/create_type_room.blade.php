@extends('admin.layouts.master')
@section('title','Create Type Room')
@section('main')
<div class="card col-md-10 offset-1">
    <div class="card-header">
        <h3>Create Type Room</h3>
    </div>
    <div class="card-block px-0 py-3">
        <form>
            <div class="form-group row">
                    <label for="inputType" class="col-sm-2 col-form-label">Type Name</label>
                    <div class="col-sm-10">
                        <input required class="form-control" type="text" id="inputType" placeholder="Type Name">
                    </div>
            </div>
            <div class="form-group row">
                    <label for="inputLimit" class="col-sm-2 col-form-label">Limit Person</label>
                    <div class="col-sm-10">
                        <input required class="form-control" type="text" id="inputLimit" placeholder="Limit Person">
                    </div>
            </div>
            <div class="form-group row">
                    <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                        <input required class="form-control" type="text" id="inputPrice" placeholder="Price">
                    </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </div>
            </div> 
        </form>
    </div>
</div>
@stop
