<?php

namespace App\Http\Controllers;

use App\Models\dish;
use App\Models\order;
use App\Models\reservation;
use App\Models\User;
use App\Models\discategory;
use Illuminate\Http\Request;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $check_val = 0;
    public $room_id = 0;
    public function index()
    {
        $data = $this->auth_admin();
        $check_role = $this->check_role();
        $dish = Dish::orderBy('id', 'ASC')->paginate(4);
        return view('admin/dish/index',compact('dish','data','check_role'));
    }
    public function main_dish(){
        $main_dish = Dish::orderBy('id', 'ASC')->where('dish_category_id',1)->get();
        return response()->json(['main_dish' => $main_dish]);
    }
    public function drink(){
        $drink= Dish::orderBy('id', 'ASC')->where('dish_category_id',3)->get();
        return response()->json(['drink' => $drink]);
    }
    public function dessert(){
        $dessert = Dish::orderBy('id', 'ASC')->where('dish_category_id',2)->get();
        return response()->json(['dessert' => $dessert]);
    }
    public function get_meal(Request  $request,$id){
       $dish = dish::where('id',$id)->get();
       foreach($dish as $val){
          $name = $val['name'];
          $price = $val['price'];
          $image = $val['image'];
       }
       $authid = auth()->id();
       $user = User::where('id',$authid)->get();
       foreach($user as $vals){
           $tenant_name = $vals['name'];
           $phone = $vals['phone'];
       }
       $reservation = reservation::where('name',$tenant_name)->get();
       foreach($reservation as $val){
           $room_id = $val['id'];
       }
       $order = new Order;
       $order->name = $name;
       $order->price = $price;
       $order->tenant_name = $tenant_name;
       $order->phone = $phone;
       $order->room_id = $room_id;
       $order->image = $image;
       $order->save();
       return "<span>
       <script>
       alert('your meal has been booked')
       window.location.href ='/';
       </script>
       </span>";
    }
    public function check_Id(){
        $authid = auth()->id();
        $user = User::where('id',$authid)->get();
        foreach($user as $vals){
            $tenant_name = $vals['name'];
            $phone = $vals['phone'];
        }
        $reservation = reservation::where('name',$tenant_name)->get();
        foreach($reservation as $val){
            if(isset($val['id'])){
                $this->room_id = $val['id'];
            }else{
                $this->room_id =0;
            }
        }
        $room_id = $this->room_id;
        return response()->json(['room_id' => $room_id]);
    }
    public function order_view(){
        $data = $this->auth_admin();
        $auth = auth()->id();
        $check_role = $this->check_role();
        $phone =auth()->user()->phone;
        $check_status = Order::where('status',1)->get();

        foreach($check_status as $val){
            $this->check_val = $val['status'];
        }
        $check_value = $this->check_val;
        if(auth()->id() == 1){
            $order =Order::orderby('id', 'ASC')->paginate(4);
        }else{
            $order =Order::where('phone',$phone)->paginate(4);
        }
        return view('admin/dish/order',compact('order','data','check_role','auth','check_value'));
    }
    public function received_dish(Request $request){
        $status = $request->status;
        Order::whereNull('status')->update(['status'=>$status]);
        return redirect()->back();
    }
    public function delete_order_dish(){
        Order::where('status',1)->delete();
        return redirect()->back();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $discategory = discategory::all();
        $check_role = $this->check_role();
        $data = $this->auth_admin();
        $dishcategories = discategory::all();
        return view('admin/dish/create',compact('discategory','data','check_role','dishcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has('upload')) {
            $img_name = $request->upload->getClientOriginalName();
            $request->upload->move(public_path('uploads'), $img_name);
            $request->merge(['image' => $img_name]);
        }
        $add = Dish::create($request->all());
        if ($add) {
            return redirect()->back()->with('successfully','Dish has been added');
        }
        return redirect()->back()->with('unsuccessfully','Wrong loaded');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(dish $dish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(dish $dish)
    {
        $data = $this->auth_admin();
        $check_role = $this->check_role();
        return view('admin/dish/edit',compact('dish','data','check_role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dish $dish)
    {
        if ($request->has('upload')) {
            $img_name = $request->upload->getClientOriginalName();
            $request->upload->move(public_path('uploads'), $img_name);
            $request->merge(['image' => $img_name]);
        }
        $add = $dish->update($request->all());
        if ($add) {
            return redirect()->back()->with('successfully','Dish has been changed');
        }
        return redirect()->back()->with('unsuccessfully','Wrong loaded');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function destroy(dish $dish)
    {
        $dish->delete();
        return redirect()->back()->with('successfully','Dish has been deleted');
    }
}
