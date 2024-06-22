<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConnectionMessage;
use Illuminate\Http\Request;

class ConnectionMessagesController extends Controller
{
    public function show()
    {
        $messages = ConnectionMessage::all();
        return view('admin.connection_message.show', compact('messages'));
    }

    public function edit($id)
    {
        $message = ConnectionMessage::findOrFail($id);
        return view('admin.connection_message.edit', compact('message'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|',
            'phone' => 'required|numeric',
            'message' => 'required',
        ]);

        $message = ConnectionMessage::findOrFail($id);
        $message->update($request->all());

        return redirect()->route('admin.connection_messages.show')->with('success', 'Connection message updated successfully.');
    }

    public function delete($id)
    {
        $message = ConnectionMessage::findOrFail($id);
        $message->delete();

        return redirect()->route('admin.connection_messages.show')->with('success', 'Connection message deleted successfully.');
    }

}
