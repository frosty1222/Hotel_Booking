@extends('layouts.admin')
@section('title','Category Create')
@section('admin')
 <div class="row">
     <div class="col-md-12">
         <legend>Current Available Room</legend>
         @foreach($data2 as $val)
         @foreach($category as $val2)
            <div class="main-view">
                <div class="left-image">
                    <img src="{{asset('uploads')}}/{{$val['image']}}" alt="">
                </div>
                <div class="right-info">
                    <span>Name:{{$val['type']}}</span>
                    <br>
                    <span>Price:{{$val['price']}}$</span>
                    <br>
                    @if($val2['available_room'] - $count == 0)
                    <span>Room is booked up currently</span>
                    @else
                    <span>Available Quantity:{{$val2['available_room'] - $count}}</span>
                    @endif
                    <br>
                    <span><a href="http://127.0.0.1:8000/#/reservation/{{$val['id']}}">book now</a></span>
                </div>
            </div>
            @endforeach
            @endforeach
     </div>
 </div>
 <style>
   .main-view{
       width:100%;
       display:flex;
   }
   .main-view .left-image{
       width:50%;
       height:400px;
   }
   .left-image img{
       width:100%;
       height:300px;
   }
   .right-info span{
       margin-left:10px;
       font-size:20px;
       font-weight:600;
   }
   .right-info span a{
       text-decoration:none;
       background:orange;
       color:#fff;
       padding:5px 10px;
       border-radius: 5px;
   }
   .right-info span a:hover{
       background:aqua;cursor: pointer;color:#333;
   }
 </style>
@stop
