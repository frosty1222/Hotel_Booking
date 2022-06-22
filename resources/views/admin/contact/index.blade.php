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
                           <th>Name</th>
                           <th>Phone</th>
                           <th>Email</th>
                           <th>Message</th>
                           <th>Created_at</th>
                           <th>Action</th>
                       </tr>
                   </thead>
                   <tbody>
                       <?php $n=1;?>
                       @foreach($contact as $val)
                       <tr>
                           <td>{{$n++}}</td>
                           <td>{{$val['name']}}</td>
                           <td>{{$val['phone']}}</td>
                           <td>{{$val['email']}}</td>
                           <td>{{$val['message']}}</td>
                           <td>{{$val['created_at']}}</td>
                           @if($check_role == 1)
                           <td>
                           <form action="{{route('contact.destroy',$val['id'])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            </td>
                            @endif
                       </tr>
                       @endforeach
                   </tbody>
               </table>
                {{$contact->links()}}
           </div>
        </div>
    </div>
@stop
