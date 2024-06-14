<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customercontroller extends Controller
{
    public function store(Request $request){
        $request->validate([
             'first-name'=>'required|string|max:50|min:5',
             'last-name'=>'required|string|max:50|min:5',
             'email'=>'required|email|unique:users,email',
            'phone'=>'required|numeric|min:11',
             'message'=>'required|string'

         ]);
}
}
