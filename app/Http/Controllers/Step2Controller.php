<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Step2;

class Step2Controller extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'note' => 'required|string',
            'datetime' => 'required|date',
        ]);

        // Create a new record in the database
        Step2::create($validatedData);

        // Redirect back after successful submission
        return redirect()->back()->with('success', 'Note added successfully.');
    }
}