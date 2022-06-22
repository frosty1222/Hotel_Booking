<?php

namespace App\Http\Controllers;

use App\Models\discategory;
use Illuminate\Http\Request;

class DiscategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dish_category =Discategory::orderby('id')->paginate(6);
        $data = $this->auth_admin();
        $check_role = $this->check_role();
        return view('admin/dish_category/index',compact('dish_category','data','check_role'));
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
        return view('admin/dish_category/create',compact('data','check_role'));
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
            'dish_type'=>'required',
            'available_quantity'=>'required',
        ]);
        if (discategory::create($request->all())) {
            return redirect()->back()->with('successfully','dish_category has been uploaded successfully');
        }
        return redirect()->back()->with('failed','dish_category was not created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\discategory  $discategory
     * @return \Illuminate\Http\Response
     */
    public function show(discategory $discategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\discategory  $discategory
     * @return \Illuminate\Http\Response
     */
    public function edit(discategory $discategory)
    {
        $data = $this->auth_admin();
        $check_role = $this->check_role();
        return view('admin/dish_category/edit',compact('discategory','data','check_role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\discategory  $discategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, discategory $discategory)
    {
        $request->validate([
            'dish_type'=>'required',
            'available_quantity'=>'required',
        ]);
        if ($discategory->update($request->all())) {
            return redirect()->back()->with('successfully','dish_category has been updated successfully');
        }
        return redirect()->back()->with('failed','dish_category was not updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\discategory  $discategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(discategory $discategory)
    {
        $discategory->delete();
        return redirect()->back()->with('successfully','delete successfully');
    }
}
