<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\reservation;
use App\Models\Room;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id;
        $data = User::where('id', $id)->get();
        $category = Category::OrderBy('id')->paginate(4);
        $check_role = $this->check_role();
       return view('admin/category/index',compact('category','data','check_role'));
    }
    public function available(){
        $id = auth()->user()->id;
        $data = User::where('id', $id)->get();
        $check_role = $this->check_role();
        $category = Category::OrderBy('id')->paginate(4);
        return view('admin/category/available',compact('data', 'check_role','category'));
    }
    public function check_avail($ids){
        $id = auth()->user()->id;
        $data = User::where('id', $id)->get();
        $check_role = $this->check_role();
        $data2= Room::where('id',$ids)->get();
        $count = Reservation::where('type_room',$ids)->count('type_room');
        // dd($count);
        $category = Category::where('id',$ids)->get();
        return view('admin/category/check_avail',compact('data2','data','check_role','count','category'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = auth()->user()->id;
        $check_role = $this->check_role();
        $data = User::where('id', $id)->get();
        return view('admin/category/create',compact('data','check_role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'room_type' =>'required',
            'status' => 'required',
            'available_room' => 'required',
        ]);
        if (Category::create($request->all())) {
            return redirect()->back()->with('successfully','category has been uploaded successfully');
        }
        return redirect()->back()->with('failed','category was not created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        $id = auth()->user()->id;
        $data = User::where('id', $id)->get();
        $check_role = $this->check_role();
        return view('admin/category.edit', compact('category','data','check_role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        $request->validate([
            'room_type' =>'required',
            'status' => 'required',
            'available_room' => 'required',
        ]);
        if ($category->update($request->all())) {
            return redirect()->back()->with('successfully','category has been uploaded successfully');
        }
        return redirect()->back()->with('failed','category was not created successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        $category->delete();
        return redirect()->back()->with('successfully','delete item successfully');
    }
}
