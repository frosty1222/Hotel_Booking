@extends('layouts.admin')
@section('title','Admin')
@section('admin')
<div class="row">
        <div class="col-md-12">
        @if($message = Session::get('successfully'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
            </div>
            @endif
           <div class="col-sm-10">
               <legend>Contact view</legend>
               <table class="table table-hover">
                   <thead>
                       <tr>
                           <th>No.</th>
                           <th>Email</th>
                           <th>Created_at</th>
                           <th>Action</th>
                       </tr>
                   </thead>
                   <tbody>
                       <?php $n=1;?>
                       @foreach($potentail as $val)
                       <tr>
                           <td>{{$n++}}</td>
                           <td>{{$val['email']}}</td>
                           <td>{{$val['created_at']}}</td>
                           @if($check_role == 1)
                           <td>
                              <a class="btn btn-danger" href="{{route('delete_potentail',['id'=>$val['id']])}}">delete</a>
                            </td>
                            @endif
                       </tr>
                       @endforeach
                   </tbody>
               </table>
                {{$potentail->links()}}
           </div>
        </div>
    </div>
@stop
