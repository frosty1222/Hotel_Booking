@extends('layouts.admin')
@section('title','Category Create')
@section('admin')
 <div class="row">
     <div class="col-md-12">
         <legend>Available Room</legend>

         <table class="table table-bordered table-hover">
             <thead>
                 <tr>
                     <th>No.</th>
                     <th>Type of Room</th>
                     <th>Total Room</th>
                     <th>Available Room</th>
                 </tr>
             </thead>
             <tbody>
                 <?php $n=1;?>
                 @foreach($category as $val)
                 <tr>
                     <td>{{$n++}}</td>
                     <td>{{$val['room_type']}}</td>
                     <td>{{$val['available_room']}}</td>
                     <td><a href="{{route('check_avail',['id'=>$val['id']])}}">Check Available</a></td>
                 </tr>
                 @endforeach
             </tbody>
         </table>
       {{$category->links()}}
     </div>
 </div>
@stop
