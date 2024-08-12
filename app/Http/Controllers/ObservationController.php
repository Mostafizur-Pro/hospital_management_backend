<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Observation;
use Illuminate\Http\Request;

class ObservationController extends Controller
{
    public function record(Request $request)
    {
        $validated = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'observation_data' => 'required|string',
            'observation_date' => 'required|date',
        ]);

        $observation = Observation::create($validated);
        return response()->json($observation, 201);
    }

    public function show($id)
    {
        $observation = Observation::findOrFail($id);
        return response()->json($observation);
    }

    public function update(Request $request, $id)
    {
        $observation = Observation::findOrFail($id);
        $validated = $request->validate([
            'observation_data' => 'string',
            'observation_date' => 'date',
        ]);

        $observation->update($validated);
        return response()->json($observation);
    }
}
