<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->auth_admin();
        $check_role = $this->check_role();
        foreach($data as $val){
            $email = $val['email'];
        }
        if($check_role == 1)
        $reservation = reservation::orderby('id','DESC')->paginate(4);
        else{
            $reservation = Reservation::where('email',$email)->paginate(4);
        }
        return view('admin/reservation/index',compact('reservation','data','check_role'));
    }
    public function reservation_save(Request $request)
    {
        $data = $this->auth_admin();
        foreach($data as $val){
            $name = $val['name'];
            $phone = $val['phone'];
            $email = $val['email'];
        }
        $reservation = new Reservation;
        $reservation->name = $name;
        $reservation->phone = $phone;
        $reservation->email = $email;
        $reservation->type_room = $request->type_room;
        $reservation->date_check_in = $request->date_check_in;
        $reservation->date_check_out = $request->date_check_out;
        $reservation->adult = $request->adult;
        $reservation->children = $request->children;
        $reservation->message = $request->message;
        $reservation->room_id=$request->id;
        $reservation->save();
        return response()->json([
            'success'=>'your room have been booked we will phone you as soon as possible',
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = $this->auth_admin();
        return view('admin/reservation/create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->auth_admin();
        foreach($data as $val){
            $name = $val['name'];
            $phone = $val['phone'];
            $email = $val['email'];
        }
        $reservation = new Reservation;
        $reservation->name = $name;
        $reservation->phone = $phone;
        $reservation->email = $email;
        $reservation->type_room = $request->type_room;
        $reservation->date_check_in = $request->date_check_in;
        $reservation->date_check_out = $request->date_check_out;
        $reservation->adult = $request->adult;
        $reservation->children = $request->children;
        $reservation->message = $request->message;
        $reservation->room_id=$request->id;
        $reservation->save();
        return response()->json([
            'success'=>'your room have been booked we will phone you as soon as possible',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(reservation $reservation)
    {
        $data = $this->auth_admin();
        $check_role = $this->check_role();
        return view('admin/reservation/edit', compact('reservation','data','check_role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reservation $reservation)
    {
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'type_room'=>'required',
            'date_check_in'=>'required',
            'date_check_out'=>'required',
            'adult'=>'required',
            'children'=>'required',
        ]);
        if ($reservation->update($request->all())) {
            return redirect()->back()->with('successfully','reservation has been edited successfully');
        }
        return redirect()->back()->with('failed','reservation was not edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(reservation $reservation)
    {
        $reservation->delete();
        return redirect()->back()->with('successfully','delete successfully');
    }
}
