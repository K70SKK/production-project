<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DateTimeController extends Controller
{
    public function showDateTimePage()
    {
        return view('datetime');
    }

    public function changeDateTime(Request $request)
    {
        try {
            Log::info('Form Data:', $request->all());

            $request->validate([
                'new_date' => 'required|date_format:d/m/Y',
                'new_time' => 'required|date_format:H:i',
            ]);

            // Your logic to process the form data goes here

            return redirect()->route('datetime')->with('success', 'Date and time changed successfully!');
        } catch (\Exception $e) {
            Log::error('Error processing form data: ' . $e->getMessage());
            return redirect()->route('datetime')->with('error', 'An error occurred. Please try again.');
        }
    }
}
