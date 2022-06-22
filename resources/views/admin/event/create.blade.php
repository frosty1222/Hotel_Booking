@extends('layouts.admin')
@section('title','Event Create')
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
            <legend>Event table Create</legend>

            <form action="{{route('event.store')}}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Input field">
                </div>

                <div class="form-group">
                    <label for="">Time</label>
                    <input type="text" class="form-control" name="time" placeholder="Input field">
                </div>

                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" class="form-control" name="upload" placeholder="Input field">
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
