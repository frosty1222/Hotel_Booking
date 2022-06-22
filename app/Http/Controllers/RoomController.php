<?php

namespace App\Http\Controllers;

use App\Models\room;
use App\Models\category;
use Illuminate\Http\Request;
use App\Models\User;
use auth;
class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Room index view';
        $data = $this->auth_admin();
        $room = Room::orderby('id')->paginate(4);
        $check_role = $this->check_role();
        return view('admin/room/index',compact('title','room','data','check_role'));
    }

    // vue api
    public function room_data(){
        $data= Room::all();
        return response()->json(['data'=>$data]);
    }
    public function room_data_limit(){
        $data = Room::orderby('id')->limit(3)->get();
        return response()->json(['data'=>$data]);
    }
    public function room_discount(){
        $discount = Room::where('id',3)->get();
        return response()->json(['discount'=>$discount]);
    }
    public function room_discount2(){
        $discount2 = Room::where('id',1)->get();
        return response()->json(['discount2'=>$discount2]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = $this->auth_admin();
        $check_role = $this->check_role();
        $category = Category::orderby('id')->get();
        return view('admin/room/create',compact('category','data','check_role'));
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
        $add = Room::create($request->all());
        if ($add) {
            return redirect()->back()->with('successfully','Room has been added');
        }
        return redirect()->back()->with('unsuccessfully','Wrong loaded');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(room $room)
    {
        $data = $this->auth_admin();
        $check_role = $this->check_role();
        return view('admin/room/edit',compact('room','data','check_role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, room $room)
    {
        if ($request->has('upload')) {
            $img_name = $request->upload->getClientOriginalName();
            $request->upload->move(public_path('uploads'), $img_name);
            $request->merge(['image' => $img_name]);
        }
        $add = $room->update($request->all());
        if ($add) {
            return redirect()->back()->with('successfully','Room has been updated');
        }
        return redirect()->back()->with('unsuccessfully','Wrong updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(room $room)
    {
        $room->delete();
        return redirect()->back()->with('successfully','delete successfully');
    }
}
