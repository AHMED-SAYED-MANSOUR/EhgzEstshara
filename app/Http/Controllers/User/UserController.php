<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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

            $user= new User();
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
              $users =   User::where('email',$request->email)->get();
              foreach($users as $user){
                   if(isset($user)){
                      return view('user.payment', compact('user'));
                }
              }
              return "Test";
        }


    public function showAppointmentForm()
    {
        $user = Auth::user();
        return view('appointment', compact('user'));
    }


    public function sign_in(Request $request)
    {
        $user = User::where('email', $request->input('email'))->first();
        $user_password = Hash::check($request->input('password'), $user->password);

        if ($user && $user_password)
        {
            // Log the user in
            Auth::login($user);

            Session::flash('success', 'Login successful!');
            // Redirect to the homepage or intended page
            return redirect()->intended('/');
        }
        return "Failed";
    }

    public function sign_up(Request $request)
    {
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'password' => $request['password'],
            'DOB' => $request['DOB'],
            'gender' => $request['gender'],
        ]);

        if ($user) {
            return redirect()->back()->with('success', 'Created Successfully');
        }
        return redirect()->back()->with('fail', 'Failed');
    }


    public function edit_info()
    {
        $user = Auth::user(); $user = Auth::user();
        $count = CartItem::where('user_id', $user->id)->count();
        return view('user.info', compact('user' , 'count'));
    }

    public function update_info(Request $request, $id)
    {
        $user = User::find($id);

        if ($user) {
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->phone = $request['phone'];
            $user->password = bcrypt($request['password']); // Encrypting the password
            $user->DOB = $request['DOB'];
            $user->gender = $request['gender'];
            $user->save();

            return redirect()->back()->with('success', 'Updated Successfully');
        }

        return redirect()->back()->with('fail', 'User Not Found');
    }


}




