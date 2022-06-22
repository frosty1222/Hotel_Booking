@extends('layouts.admin')
@section('title','Edit Category')
@section('admin')
<div class="row">
        <div class="col-md-12">
        @if ($message = Session::get('successfully'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
            </div>
            @endif
        <div class="col-sm-10">
            <form action="{{route('discategory.update',$discategory->id)}}" method="POST" role="form">
                @csrf
                @method('PUT');
                <legend>Edit Form</legend>

                <div class="form-group">
                    <label for="">Dish Type</label>
                    <input type="text" class="form-control" name="dish_type" value="{{$discategory->room_type}}" placeholder="Input field">
                </div>
                <div class="form-group">
                    <label for="">Available Dish</label>
                    <input type="number" class="form-control" name="available_quantity" value="{{$discategory->available_room}}"  placeholder="Input field">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
@stop
