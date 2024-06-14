<?php
namespace App\Http\Controllers;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date|max:255',
            'time' => 'required|time|max:255',
            'doctor' => 'required|max:255',
            'name' => 'required|max:255',
            'phone' => 'required|numeric|max:20',
            'email' => 'required|string',
        ]);

        $appointment = new Appointment();
        $appointment->date = $request->date;
        $appointment->time = $request->time;
        $appointment->doctor = $request->doctor;
        $appointment->name = $request->name;
        $appointment->phone = $request->phone;
        $appointment->email = $request->email;
        $appointment->save();
        return redirect()->back()->with('success', 'Appointment created successfully');
    }
}
