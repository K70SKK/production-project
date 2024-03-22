<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Step2;

class Step2Controller extends Controller
{
    public function create($step1Id)
    {
        return view('step2', ['step1Id' => $step1Id]); // Pass the step1Id variable to the view
    }

    public function step3($step1Id)
    {
        return view('step3', ['step1Id' => $step1Id]);
    }

    public function step4($step1Id)
    {
        return view('step4', ['step1Id' => $step1Id]);
    }

    public function step5($step1Id)
    {
        return view('step5', ['step1Id' => $step1Id]);
    }

    public function step6($step1Id)
    {
        return view('step6', ['step1Id' => $step1Id]);
    }

    public function step7($step1Id)
    {
        return view('step7', ['step1Id' => $step1Id]);
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'note' => 'required|string',
            'datetime' => 'required|date',
            'step1_id' => 'required|exists:step1,id', // Ensure step1_id is required and exists in step1 table
            'image' => 'nullable|image', // Validation rule for optional image
        ]);

        // If an image is provided, store it in the 'image' column
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images'); // Store the image in storage/images directory
            $validatedData['image'] = $imagePath; // Update the 'image' field in validated data
        }

        // Create a new Step2 record with the provided data
        Step2::create($validatedData);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Note added successfully.');
    }
}
