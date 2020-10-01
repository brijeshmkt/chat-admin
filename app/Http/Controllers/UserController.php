<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{ 
    public function index()
    {
        $user = User::get();
        return view('Admin.users.index',compact('user'));
    }
    public function create()
    {
        return view('Admin.users.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
           
            
        ],[
            'name.required'=>'User Name is required.',
            'email.required'=>'Email is required.',
            'email.email'=>'Please Add Valid Email',
            'email.unique'=>'Please Already Use Email',
            'password.required'=>'Password is required.',
            'password_confirmation.required'=>'Confirmation Password is required.',
          
           
        ]);
        $user = new User;
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->password=Hash::make($request->get('password'));
        $user->password_confirmation=Hash::make($request->get('password_confirmation'));
       
        $user->save();
        
      
        return redirect()->route('users')->with('success','User created successfully.');
    }
    public function show($id)
    {
        $user = User::find($id);
       
        //print_r($drivers);exit();
        return view('Admin.users.view',compact('user'));
    }
    public function edit($id)
    {
        $user = User::find($id);
       
       
        return view('Admin.users.edit',compact('user','id'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,id',
            'password_confirmation' => 'same:password',
           
           
        ],[
            'name.required'=>'User Name is required.',
            'email.required'=>'Email is required.',
            'email.email'=>'Please Add Valid Email',
           

        ]);
       
        $user= User::find($id);
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        if($request->get('password')){
            $user->password=Hash::make($request->get('password'));
             $user->password_confirmation=Hash::make($request->get('password_confirmation'));
     
        }
       
        $user->save();
        return redirect()->route('users')->with('info','User updated successfully.');
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->soft_delete = 1;
        $user->save();
        return redirect()->route('users')->with('danger','User deleted successfully.');
    }
    public function search(Request $req)
    {
        $user = User::Orwhere('name','like','%'.$req->search.'%')->Orwhere('email','like','%'.$req->search.'%')->where('soft_delete','=',0)->get();
        return view('Admin.users.index',compact('user'));
    }
}
