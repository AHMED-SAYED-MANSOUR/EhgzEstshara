<?php

namespace App\Http\Controllers;

use App\Models\ConnectionMessage;
use Illuminate\Http\Request;

class ContactCoctroller extends Controller
{

    public function send_message(Request $request)
    {
        $insert = ConnectionMessage::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'message' => $request->input('message'),
        ]);

        if ($insert)
            return redirect()->back();
    }
}
