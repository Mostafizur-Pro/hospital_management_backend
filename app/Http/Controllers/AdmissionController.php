<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function admit(Request $request)
    {
        $validated = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'room_number' => 'required|string',
            'seat_number' => 'nullable|string',
            'admission_date' => 'required|date',
        ]);

        $admission = Admission::create($validated);
        return response()->json($admission, 201);
    }

    public function show($id)
    {
        $admission = Admission::findOrFail($id);
        return response()->json($admission);
    }

    public function update(Request $request, $id)
    {
        $admission = Admission::findOrFail($id);
        $validated = $request->validate([
            'room_number' => 'string',
            'seat_number' => 'string',
            'admission_date' => 'date',
        ]);

        $admission->update($validated);
        return response()->json($admission);
    }
}
