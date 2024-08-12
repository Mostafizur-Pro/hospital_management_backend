<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|unique:doctors,email',
        ]);

        $doctor = Doctor::create($validated);
        return response()->json($doctor, 201);
    }

    
    public function show($id)
    {
        $doctor = Doctor::findOrFail($id);
        return response()->json($doctor);
    }

    
    public function update(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'string|max:255',
            'specialization' => 'string|max:255',
            'phone' => 'string|max:15',
            'email' => 'email|unique:doctors,email,' . $id,
        ]);

        $doctor->update($validated);
        return response()->json($doctor);
    }

    
    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();
        return response()->json(['message' => 'Doctor deleted successfully.']);
    }
}
