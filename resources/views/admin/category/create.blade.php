@extends('layouts.admin')
@section('title','Category Create')
@section('admin')
<div class="row">
        <div class="col-md-12">
           @if ($message = Session::get('successfully'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
            </div>
            @endif
            <div class="col-sm-10">
                <form action="{{route('category.store')}}" method="POST">
                    @csrf
                    <legend>Form Create</legend>
                    <div class="form-group">
                        <label for="">Room Type</label>
                        <input type="text" class="form-control" name="room_type" placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <input type="text" class="form-control" name="status" placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">Available Room</label>
                        <input type="number" class="form-control" name="available_room" placeholder="Input field">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@stop
