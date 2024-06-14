<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feedback;

class feedbackController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
         $request->validate([
             'first_name' => 'required|string|max:255',
             'last_name' => 'required|string|max:255',
             'email' => 'required|max:255',
             'phone' => 'required|numeric|max:20',
             'message' => 'required|string',
         ]);

        // Create a new contact record
           $feedback= new feedback();
            $feedback->first_name=$request->first_name;
            $feedback->last_name=$request->last_name;
            $feedback->email=$request->email;
            $feedback->phone=$request->phone;
            $feedback->message=$request->message;
            $feedback->save();


        return redirect()->back()->with('success','feedback sent Successfully');

    }
}


