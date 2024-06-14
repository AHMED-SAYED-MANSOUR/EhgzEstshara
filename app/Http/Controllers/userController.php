<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\SignUpRequest;

class UserController extends Controller
{
    public function store(Request $request)
    {
       $request->validate([
            'name'=>'required|string|max:50|min:5',
            'email'=>'required|email|unique:users,email',
           'phone'=>'required|numeric|min:11',
          'password'=>'required|min:8||max:15|confirmed',
           'confirm'=>'required|min:8|max:15',
           'DOB'=>'nullable|string',
            'gender'=>'nullable',

         ]);

            $user= new user();
            $user->name=$request->name;
            $user->email=$request->email;
            $user->phone=$request->phone;
            $user->Password=$request->password;
            $user->conpassword=$request->confirm;
            $user->DOB=$request->DOB;
            $user->gender=$request->gender;
            $user->save();
            return redirect()->back()->with('success','Registration Successful');

    //   else{
    //     return redirect()->back()->with('Fail','Fail to Register');
    //    }

        }

        public function find_email(Request $request)
        {
              $User =   user::where('email',$request->email)->get();
              foreach($User as $user){
                   if(isset($user)){
                      return view('payment',compact('user'));
                }
              }
        }

    }




