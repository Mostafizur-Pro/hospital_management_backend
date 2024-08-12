<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Insurance;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    public function plan(Request $request)
    {
        $validated = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'provider' => 'required|string',
            'policy_number' => 'required|string',
            'expiration_date' => 'required|date',
        ]);

        $insurance = Insurance::create($validated);
        return response()->json($insurance, 201);
    }

    public function show($id)
    {
        $insurance = Insurance::findOrFail($id);
        return response()->json($insurance);
    }

    public function update(Request $request, $id)
    {
        $insurance = Insurance::findOrFail($id);
        $validated = $request->validate([
            'provider' => 'string',
            'policy_number' => 'string',
            'expiration_date' => 'date',
        ]);

        $insurance->update($validated);
        return response()->json($insurance);
    }
}
