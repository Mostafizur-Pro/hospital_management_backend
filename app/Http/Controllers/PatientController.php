<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:patients,email',
            'phone' => 'required|string|max:15',
            'dob' => 'required|date',
            'address' => 'required|string',
        ]);

        $patient = Patient::create($validated);
        return response()->json($patient, 201);
    }

    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        return response()->json($patient);
    }

    public function update(Request $request, $id)
    {
        $patient = Patient::findOrFail($id);
        $validated = $request->validate([
            'name' => 'string|max:255',
            'email' => 'email|unique:patients,email,' . $id,
            'phone' => 'string|max:15',
            'dob' => 'date',
            'address' => 'string',
        ]);

        $patient->update($validated);
        return response()->json($patient);
    }

    public function delete($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();
        return response()->json(null, 204);
    }
}
