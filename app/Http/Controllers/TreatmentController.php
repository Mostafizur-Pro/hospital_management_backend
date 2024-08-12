<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    public function start(Request $request)
    {
        $validated = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'treatment_name' => 'required|string',
            'details' => 'nullable|string',
            'start_date' => 'required|date',
        ]);

        $treatment = Treatment::create($validated);
        return response()->json($treatment, 201);
    }

    public function show($id)
    {
        $treatment = Treatment::findOrFail($id);
        return response()->json($treatment);
    }

    public function update(Request $request, $id)
    {
        $treatment = Treatment::findOrFail($id);
        $validated = $request->validate([
            'treatment_name' => 'string',
            'details' => 'string',
            'start_date' => 'date',
        ]);

        $treatment->update($validated);
        return response()->json($treatment);
    }
}
