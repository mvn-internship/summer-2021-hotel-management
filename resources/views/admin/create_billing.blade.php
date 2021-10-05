@extends('admin.layouts.master')
@section('title','Create Billing')
@section('main')
<div class="card col-md-10 offset-1">
    <div class="card-header">
        <h3>Create Billing</h3>
    </div>
    <div class="card-block px-0 py-3">
        <form>
            <div class="form-group row">
                    <label for="inputUser" class="col-sm-2 col-form-label">User</label>
                    <div class="col-sm-10">
                        <select required  class="form-control" id="inputUser">
                            <option>VDT</option>
                            <option>John</option>
                        </select>
                    </div>
            </div>
            <div class="form-group row">
                    <label for="inputDevice" class="col-sm-2 col-form-label">Device</label>
                    <div class="col-sm-10">
                        <select required  class="form-control" id="inputDevice">
                            <option>TV Samsung</option>
                            <option>Latop Macbook</option>
                        </select>
                    </div>
            </div>
            <div class="form-group row">
                    <label for="inputService" class="col-sm-2 col-form-label">Service</label>
                    <div class="col-sm-10">
                        <select required  class="form-control" id="inputService">
                            <option>Clear Room</option>
                            <option>Wash Colthes</option>
                        </select>
                    </div>
            </div>
            <div class="form-group row">
                    <label for="inputRoom" class="col-sm-2 col-form-label">Room</label>
                    <div class="col-sm-10">
                        <select required  class="form-control" id="inputRoom">
                            <option>Room 1</option>
                            <option>Room 2</option>
                        </select>
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
