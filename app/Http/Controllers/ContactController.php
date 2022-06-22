<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\User;
use App\Models\potentail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $check_role = $this->check_role();
        $contact = Contact::paginate(4);
        $id = auth()->user()->id;
        $data = User::where('id', $id)->get();
        return view('admin/contact/index',compact('contact','data','check_role'));
    }
    public function contact_post(Request $request){
      $contact = new Contact;
      $contact->name =$request->name;
      $contact->phone = $request->phone;
      $contact->email = $request->email;
      $contact->message = $request->message;
      $contact->room_id = 0;
      $contact->save();
      return response()->json([
          'success'=>'Your concern have been sent',
      ]);
    }
    public function save_email(Request $request){
       $potentail = new potentail;
       $potentail->email = $request->email;
       $potentail->save();
       return response()->json([
          'success'=>'Your email has been sent',
       ]);
    }
    public function potentail_view(){
        $check_role = $this->check_role();
        $id = auth()->user()->id;
        $data = User::where('id', $id)->get();
        $potentail = potentail::orderby('id', 'ASC')->paginate(4);
        return view('admin/contact/potentail_view',compact('potentail','check_role','data'));
    }
    public function delete_potentail($id){
        $data = potentail::where('id',$id)->delete();
        if($data){
             return redirect()->back()->with('successfully','deleted');
        }else{
            return redirect()->back()->with('successfully','failed');
        }

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact)
    {
        $contact->delete();
        return redirect()->back()->with('successfully', 'contact info deleted successfully');
    }
}
