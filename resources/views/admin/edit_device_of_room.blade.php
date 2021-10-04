@extends('admin.layouts.master')
@section('title','Edit Device Of Room')
@section('main')
<div class="card col-md-10 offset-1">
    <div class="card-header">
        <h3>Edit Device Of Room</h3>
    </div>
    <div class="card-block px-0 py-3">
        <form>
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
                    <label for="inputRoom" class="col-sm-2 col-form-label">Room</label>
                    <div class="col-sm-10">
                        <select required  class="form-control" id="inputRoom">
                            <option>Room 1</option>
                            <option>Room 2</option>
                        </select>
                    </div>
            </div>
            <div class="form-group row">
                    <label for="inputStatus" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select required  class="form-control" id="inputStatus">
                            <option>Activate</option>
                            <option>Damage</option>
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
