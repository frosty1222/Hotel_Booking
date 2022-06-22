<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use auth;
class AdminController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function index(){
        $title = 'Admin index view';
        $id = auth()->user()->id;
        $check_role = $this->check_role();
        $data = User::where('id', $id)->get();
        return view('admin/index',compact('title','data','check_role'));
    }
    public function add_avatar(){
        $id = auth()->user()->id;
        $check_role = $this->check_role();
        $data = User::where('id', $id)->get();
        return view('user/add_avatar',compact('data','check_role'));
    }
    public function update_avatar(Request $request){
        $id = auth()->user()->id;
        if ($request->has('upload')) {
            $img_name = $request->upload->getClientOriginalName();
            $request->upload->move(public_path('uploads'), $img_name);
            $request->merge(['avatar' => $img_name]);
        }
        $phone = $request->phone;
        $data = User::where('id',$id)->update(['avatar'=>$img_name,'phone'=>$phone]);
        if($data){
         return redirect()->back()->with('successfully','Your avatar has been uploaded successfully');
        }else{
         return redirect()->back()->with('successfully','Your avatar has not been uploaded successfully');
        }
    }
    public function get_auth(){
        $data = $this->auth_admin();
        return response()->json(['data'=>$data]);
    }
}
