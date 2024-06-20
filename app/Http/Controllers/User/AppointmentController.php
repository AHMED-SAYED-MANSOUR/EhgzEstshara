<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        // Validation Before Inserting Data
        $rules = [
            'date' => [
                'required',
                'date',
                Rule::unique('appointments')->where(function ($query) use ($request) {
                    return $query->where('doctor', $request->doctor);
                }),
            ],
            'doctor' => 'required|max:255',
            'name' => 'required|max:255',
            'phone' => 'required|numeric|digits_between:1,20',
            'email' => 'required|string|email',
        ];

        $messages = [
            'date.required' => 'The date field is required.',
            'date.date' => 'The date must be a valid date.',
            'date.unique' => 'The date is already taken for this doctor.',
            'doctor.required' => 'The doctor field is required.',
            'doctor.max' => 'The doctor field may not be greater than 255 characters.',
            'name.required' => 'The name field is required.',
            'name.max' => 'The name field may not be greater than 255 characters.',
            'phone.required' => 'The phone number is required.',
            'phone.numeric' => 'The phone number must be numeric.',
            'phone.digits_between' => 'The phone number must be between 1 and 20 digits.',
            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        $appointment = Appointment::create([
            'date' => $request->date,
            'time' => $request->time,
            'doctor' => $request->doctor,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        if ($appointment) {
            return response()->json(['message' => 'Appointment created successfully']);
        }

        return response()->json(['message' => 'An error occurred while creating the appointment'], 500);
    }

}
