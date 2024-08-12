<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function schedule(Request $request)
    {
        $validated = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'doctor_id' => 'required|exists:doctors,id',
            'scheduled_at' => 'required|date',
            'notes' => 'nullable|string',
        ]);

        $appointment = Appointment::create($validated);
        return response()->json($appointment, 201);
    }

    public function show($id)
    {
        $appointment = Appointment::findOrFail($id);
        return response()->json($appointment);
    }

    public function update(Request $request, $id)
    {
        $appointment = Appointment::findOrFail($id);
        $validated = $request->validate([
            'patient_id' => 'exists:patients,id',
            'doctor_id' => 'exists:doctors,id',
            'scheduled_at' => 'date',
            'notes' => 'string',
        ]);

        $appointment->update($validated);
        return response()->json($appointment);
    }

    public function cancel($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();
        return response()->json(null, 204);
    }

    public function confirmation($id)
    {
        $appointment = Appointment::findOrFail($id);
        // Implement confirmation logic
        return response()->json(['message' => 'Appointment confirmed']);
    }
}
