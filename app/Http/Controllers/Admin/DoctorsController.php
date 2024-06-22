<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DoctorsController extends Controller
{
    public function show()
    {
        $doctors = Doctor::all();
        return view('admin.doctor.show', compact('doctors'));
    }

    public function create()
    {
        return view('admin.doctor.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'department' => 'required|string',
            'image' => 'nullable|image',
            'facebook' => 'nullable|string',
            'twitter' => 'nullable|string',
            'instagram' => 'nullable|string',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store(public_path('/images/Team/'));
        } else {
            $imagePath = null;
        }

        Doctor::create([
            'name' => $request->name,
            'department' => $request->department,
            'image' => $imagePath,
            'facebook' => $request->Price,
            'twitter' => $request->facebook,
            'instagram' => $request->instagram,
        ]);

        return redirect()->route('admin.doctors.show')->with('success', 'Doctor created successfully.');
    }

    public function edit($id)
    {
        $doctor = Doctor::find($id);

        return view('admin.doctor.edit', compact('doctor'));
    }

    public function update(Request $request, $id)
    {
        $doctor = Doctor::find($id);

        $request->validate([
            'name' => 'required',
            'department' => 'required|string',
            'image' => 'nullable|image',
            'facebook' => 'nullable|string',
            'twitter' => 'nullable|string',
            'instagram' => 'nullable|string',
        ]);

        // Handle file upload
        if ($request->hasFile('image'))
        {
            // Store the image in the 'public/images/Team' directory
            $imagePath = $request->file('image')->store('public/images/Team');

            // Extract the filename for storing in the database
            $filename = basename($imagePath);

            // Delete old image if it exists
            if ($doctor->image !== null) {
                Storage::delete($doctor->image);
            }
            $doctor->image = $filename;
        }

        $doctor->update([
            'name' => $request->name,
            'department' => $request->department,
            'image' => $filename,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
        ]);

        return redirect()->route('admin.doctors.show')->with('success', 'Doctor updated successfully.');
    }

    public function delete($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();

        return redirect()->route('admin.doctors.show')->with('success', 'Doctor deleted successfully.');
    }

}
