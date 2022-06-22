@extends('layouts.admin')
@section('title','Add Avatar')
@section('admin')
@parent
<div class="row">
        <div class="col-md-12">
        @if($message = Session::get('successfully'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
            </div>
            @endif
            <div class="col-md-8 text-center">
                  <form action="{{route('update_avatar')}}" method="POST" role="form" enctype="multipart/form-data">
                      @csrf
                      @method('post')
                      <legend>Change Avatar</legend>

                      <div class="form-group">
                          <label for="">Avatar</label>
                          <input type="file" class="form-control" name="upload" placeholder="choose your pic">
                      </div>
                      <div class="form-group">
                          <label for="">Phone</label>
                          <input type="phone" class="form-control" name="phone" placeholder="enter your phone number">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

            </div>
        </div>
    </div>
@endsection
