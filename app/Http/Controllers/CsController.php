<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Step1;
use App\Models\Step2;

class CsController extends Controller
{
    public function show($case_number)
    {
        $step1Data = Step1::where('case_number', $case_number)->firstOrFail();

        $step2Data = Step2::where('step1_id', $step1Data->id)->get();

        return view('cs', compact('step1Data', 'step2Data'));
    }
}
