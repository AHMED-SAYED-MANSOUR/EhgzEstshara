<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TrainersController extends Controller
{
    public function show()
    {
        $trainers = Trainer::all();
        return view('admin.trainer.show', compact('trainers'));
    }

    public function create()
    {
        return view('admin.trainer.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'twitter' => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images/Trainers');
            $validated['image'] = $imagePath;
        }

        Trainer::create($validated);

        return redirect()->route('admin.trainers.show')->with('success', 'Trainer created successfully.');
    }

    public function edit($id)
    {
        $trainer = Trainer::findOrFail($id);
        return view('admin.trainer.edit', compact('trainer'));
    }

    public function update(Request $request, $id)
    {
        $trainer = Trainer::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'twitter' => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images/Trainers');
            if ($trainer->image !== null) {
                Storage::delete($trainer->image);
            }
            $validated['image'] = $imagePath;
        }

        $trainer->update($validated);

        return redirect()->route('admin.trainers.show')->with('success', 'Trainer updated successfully.');
    }

    public function delete($id)
    {
        $trainer = Trainer::findOrFail($id);
        $trainer->delete();

        return redirect()->route('admin.trainers.show')->with('success', 'Trainer deleted successfully.');
    }
}
