<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Step1;

class Step1Controller extends Controller
{
    public function show($step1Id)
    {
        // Assuming you retrieve Step 1 data from the database based on the step1Id
        $step1Data = Step1::findOrFail($step1Id);

        // Pass the step1Id and any other necessary data to the view
        return view('step1', ['step1Id' => $step1Id, 'step1Data' => $step1Data]);
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'first_responder_name' => 'required|string',
            'company_data' => 'required|string',
            'time' => 'required|date',
            'case_number' => 'required|string',
        ]);
    
        // Create a new Step1 record with the validated data
        $step1 = Step1::create($validatedData);
    
        // Redirect to the create method of Step2Controller with the step1Id as a parameter
        return redirect()->route('step2.create', ['step1Id' => $step1->id])->with('success', 'Data submitted successfully.');
    }
    
}
