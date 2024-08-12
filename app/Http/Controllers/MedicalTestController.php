<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MedicalTest;
use Illuminate\Http\Request;

class MedicalTestController extends Controller
{
    public function perform(Request $request)
    {
        $validated = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'test_name' => 'required|string',
            'results' => 'nullable|string',
            'test_date' => 'required|date',
        ]);

        $medicalTest = MedicalTest::create($validated);
        return response()->json($medicalTest, 201);
    }

    public function show($id)
    {
        $medicalTest = MedicalTest::findOrFail($id);
        return response()->json($medicalTest);
    }

    public function update(Request $request, $id)
    {
        $medicalTest = MedicalTest::findOrFail($id);
        $validated = $request->validate([
            'test_name' => 'string',
            'results' => 'string',
            'test_date' => 'date',
        ]);

        $medicalTest->update($validated);
        return response()->json($medicalTest);
    }
}
