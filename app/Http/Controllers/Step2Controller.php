<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Step2;

class Step2Controller extends Controller
{
    public function create($step1Id)
    {
        return view('step2', ['step1Id' => $step1Id]); 
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
        
        $validatedData = $request->validate([
            'note' => 'required|string',
            'datetime' => 'required|date',
            'step1_id' => 'required|exists:step1,id', 
            'image' => 'nullable|image', 
        ]);

        
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images');
            $validatedData['image'] = $imagePath; 
        }

       
        Step2::create($validatedData);

        
        return redirect()->back()->with('success', 'Note added successfully.');
    }
}
