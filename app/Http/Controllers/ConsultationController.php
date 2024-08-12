<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Consultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function create(Request $request)
    {
        $validated = $request->validate([
            'appointment_id' => 'required|exists:appointments,id',
            'details' => 'required|string',
        ]);

        $consultation = Consultation::create($validated);
        return response()->json($consultation, 201);
    }

    public function show($id)
    {
        $consultation = Consultation::findOrFail($id);
        return response()->json($consultation);
    }

    public function update(Request $request, $id)
    {
        $consultation = Consultation::findOrFail($id);
        $validated = $request->validate([
            'details' => 'string',
        ]);

        $consultation->update($validated);
        return response()->json($consultation);
    }
}
