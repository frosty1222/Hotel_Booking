@extends('layouts.admin')
@section('title','Admin')
@section('admin')
<div class="row">
        <div class="col-md-12">
            @if($check_role == 1)
           <h1 class="text-success text-center">Welcome to admin view</h1></h1>
           @else
           <h1 class="text-success text-center">Welcome to User view</h1></h1>
           @endif
        </div>
    </div>
@stop
