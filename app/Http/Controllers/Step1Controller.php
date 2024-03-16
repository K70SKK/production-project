<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Step1;

class Step1Controller extends Controller
{
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'first_responder_name' => 'required|string',
            'company_data' => 'required|string',
            'time' => 'required|date',
            'case_number' => 'required|string',
        ]);

        
        Step1::create($validatedData);

        
        return redirect()->back()->with('success', 'Data submitted successfully.');
    }
}
