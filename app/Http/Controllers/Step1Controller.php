<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Step1;

class Step1Controller extends Controller
{
    public function index()
    {
        
        $step1Data = Step1::all();

        return view('c', ['step1Data' => $step1Data]);
    }

    public function show($step1Id)
    {
        $step1Data = Step1::findOrFail($step1Id);

        return view('step1', ['step1Id' => $step1Id, 'step1Data' => $step1Data]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_responder_name' => 'required|string',
            'company_data' => 'required|string',
            'time' => 'required|date',
            'case_number' => 'required|string',
        ]);
    
        $step1 = Step1::create($validatedData);
    
        return redirect()->route('step2.create', ['step1Id' => $step1->id])->with('success', 'Data submitted successfully.');
    }
}
