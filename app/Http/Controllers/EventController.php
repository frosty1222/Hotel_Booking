<?php

namespace App\Http\Controllers;

use App\Models\event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = event::orderby('id')->paginate(6);
        $data = $this->auth_admin();
        $check_role = $this->check_role();
        return view('admin/event/index',compact('event','data','check_role'));
    }
    public function event_data(){
        $data = event::orderby('id','DESC')->paginate(3);
        return response()->json((['data' => $data]));
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
        return view('admin/event/create',compact('data','check_role'));
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
        $add = Event::create($request->all());
        if ($add) {
            return redirect()->back()->with('successfully','Event has been added');
        }
        return redirect()->back()->with('unsuccessfully','Wrong loaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(event $event)
    {
        $data = $this->auth_admin();
        $check_role = $this->check_role();
        return view('admin/event/edit',compact('event','data','check_role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, event $event)
    {
        if ($request->has('upload')) {
            $img_name = $request->upload->getClientOriginalName();
            $request->upload->move(public_path('uploads'), $img_name);
            $request->merge(['image' => $img_name]);
        }
        $add = $event->update($request->all());
        if ($add) {
            return redirect()->back()->with('successfully','Event has been added');
        }
        return redirect()->back()->with('unsuccessfully','Wrong loaded');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(event $event)
    {
        //
    }
}
