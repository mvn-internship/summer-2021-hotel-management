@extends('admin.layouts.master')
@section('title','Create Device')
@section('main')
<div class="card col-md-10 offset-1">
    <div class="card-header">
        <h3>Create Device</h3>
    </div>
    <div class="card-block px-0 py-3">
        <form>
            <div class="form-group row">
                    <label for="inputDevice" class="col-sm-2 col-form-label">Device Name</label>
                    <div class="col-sm-10">
                        <input required class="form-control" type="text" id="inputDevice" placeholder="Device Name">
                    </div>
            </div>
            <div class="form-group row">
                    <label for="inputQuantity" class="col-sm-2 col-form-label">Quantity</label>
                    <div class="col-sm-10">
                        <input required class="form-control" type="text" id="inputQuantity" placeholder="Quantity">
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
