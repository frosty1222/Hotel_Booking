@extends('layouts.admin')
@section('title','Dish Category View')
@section('admin')
@parent
<div class="row">
        <div class="col-md-12">
        @if($message = Session::get('successfully'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
            </div>
            @endif
            <legend>Category View</legend>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Phone</th>
                        <th>Tenant Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $n=1?>
                    @foreach ($order as $val)
                    <tr>
                       <td>{{$n++}}</td>
                       <td>{{$val['name']}}</td>
                       <td>{{$val['price']}}</td>
                       <td><img src="{{asset('uploads')}}/{{$val['image']}}"  width="70px" alt=""></td>
                       <td>{{$val['phone']}}</td>
                       <td>{{$val['tenant_name']}}</td>
                    </tr>
                    @endforeach
                </tbody>
                @if($auth !=1)
                @if($check_value !=1)
                <td>
                           <form action="{{route('received_dish')}}" method="post">
                               @csrf
                               <input type="text" value="1" name="status" hidden>
                               <button type="submit">I have received all dish</button>
                           </form>
                       </td>
                @else
                <td>
                   All your dish has been served
                </td>
                @endif
                @endif
                @if($auth == 1)
                       <td>
                           <a href="{{route('delete_order_dish')}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete all dish?')">Clear all</a>
                       </td>
                @endif
            </table>
            {{$order->links()}}
        </div>
    </div>
@endsection
@section('script')
<script>
</script>
@endsection
