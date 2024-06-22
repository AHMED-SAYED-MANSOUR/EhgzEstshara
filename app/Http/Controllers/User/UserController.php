<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\CartItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
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
        return redirect()->back()->with('failed', 'Failed To Log in User');
    }

    public function sign_up(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric|digits:11',
            'password' => 'required|min:3|max:20|confirmed',
            'password_confirmation' => 'required|min:3|max:20',
            'DOB' => 'required|date',
            'gender' => 'nullable|string',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
            'DOB' => $request->DOB,
            'gender' => $request->gender,
        ]);

        if ($user) {
            return redirect()->back()->with('success', 'Created Successfully');
        }
        return redirect()->back()->with('failed', 'Failed To Create User');
    }


    public function edit_info()
    {
        $user = Auth::user(); $user = Auth::user();
        $count = CartItem::where('user_id', $user->id)->count();
        $appointments = Appointment::where('user_id', $user->id)->get();


        return view('user.info', compact('user' , 'count' , 'appointments'));
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




