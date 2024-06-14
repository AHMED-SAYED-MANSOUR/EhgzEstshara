<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;

class signupcontroller extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name'=>'required|string|max:50|min:5',
            'email'=>'required|email|unique:users,email',
            'phone'=>'required|numeric|min:11',
           'password'=>'required|min:8||max:15',
           'confirm'=>'required|min:8|max:15',
           'DOB'=>'nullable|date',
           'gender'=>'nullable'

         ]);

         $user= new user();
         $user->name= $request->input('name');
         $user->email= $request->input('email');
         $user->phone= $request->input('phone');
         $user->Password= $request->input('password');
         $user->conpassword= $request->input('confirm');
         $user->DOB= $request->input('DOB');
         $user->gender= $request->input('gender');
         $user->save();


        }

}
