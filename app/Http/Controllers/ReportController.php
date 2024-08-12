<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function transfer(Request $request)
    {
        $validated = $request->validate([
            'medical_test_id' => 'required|exists:medical_tests,id',
            'doctor_id' => 'required|exists:doctors,id',
            'report_data' => 'required|string',
        ]);

        $report = Report::create($validated);
        return response()->json($report, 201);
    }

    public function show($id)
    {
        $report = Report::findOrFail($id);
        return response()->json($report);
    }
}
