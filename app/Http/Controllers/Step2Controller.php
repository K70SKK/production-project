<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Step2;

class Step2Controller extends Controller
{
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'note' => 'required|string',
            'datetime' => 'required|date',
        ]);

        
        Step2::create($validatedData);

        
        return redirect()->back()->with('success', 'Note added successfully.');
    }
}