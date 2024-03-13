<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Step1;

class Step1Controller extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'first_responder_name' => 'required|string',
            'company_data' => 'required|string',
            'time' => 'required|date',
            'case_number' => 'required|string',
        ]);

        // Create a new record in the database
        Step1::create($validatedData);

        // Redirect back or wherever you want after successful submission
        return redirect()->back()->with('success', 'Data submitted successfully.');
    }
}
