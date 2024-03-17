<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Step2;

class Step2Controller extends Controller
{
    public function store(Request $request)
    {
        // Validation rules without requiring the image field
        $validatedData = $request->validate([
            'note' => 'required|string',
            'datetime' => 'required|date',
            'image' => 'nullable|image', // Updated validation rule for image
        ]);

        // If an image is provided, save it to the 'image' column
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images'); // Store the image in storage/images directory
            $validatedData['image'] = $imagePath; // Update the 'image' field in validated data
        }

        // Create Step2 record
        Step2::create($validatedData);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Note added successfully.');
    }
}
