@extends('admin.layouts.master')
@section('title','Create Service')
@section('main')
<div class="card col-md-10 offset-1">
    <div class="card-header">
        <h3>Create Service</h3>
    </div>
    <div class="card-block px-0 py-3">
        <form>
            <div class="form-group row">
                    <label for="inputService" class="col-sm-2 col-form-label">Service Name</label>
                    <div class="col-sm-10">
                        <input required class="form-control" type="text" id="inputService" placeholder="Service Name">
                    </div>
            </div>
            <div class="form-group row">
                    <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                        <input required class="form-control" type="text" id="inputPrice" placeholder="Price">
                    </div>
            </div>
            <div class="form-group row">
                    <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <TextArea required class="form-control" type="text" id="Description"></TextArea>
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
