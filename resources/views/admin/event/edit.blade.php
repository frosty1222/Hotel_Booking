@extends('layouts.admin')
@section('title','Event Edit')
@section('admin')
@parent
<div class="row">
    <div class="col-md-12">
        <div class="col-md-10">
             @if($message = Session::get('successfully'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
            </div>
            @endif
            <legend>Event table Edit</legend>

            <form action="{{route('event.update',$event->id)}}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$event->name}}" placeholder="Input field">
                </div>

                <div class="form-group">
                    <label for="">Time</label>
                    <input type="text" class="form-control" name="time" value="{{$event->time}}" placeholder="Input field">
                </div>

                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" class="form-control" name="upload" value="{{$event->image}}" placeholder="Input field">
                </div>

                <div class="form-group">
                    <label for="">Content</label>
                    <textarea name="content" cols="60" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
</div>
@endsection
