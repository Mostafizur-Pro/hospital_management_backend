<?php

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\MedicalTestController;
use App\Http\Controllers\ObservationController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TreatmentController;
use Illuminate\Support\Facades\Route;

Route::post('patients/register', [PatientController::class, 'register']);
Route::get('patients/{id}', [PatientController::class, 'show']);
Route::put('patients/{id}', [PatientController::class, 'update']);
Route::delete('patients/{id}', [PatientController::class, 'delete']);


Route::post('appointments/schedule', [AppointmentController::class, 'schedule']);
Route::get('appointments/{id}', [AppointmentController::class, 'show']);
Route::put('appointments/{id}', [AppointmentController::class, 'update']);
Route::delete('appointments/{id}', [AppointmentController::class, 'cancel']);
Route::post('appointments/{id}/confirmation', [AppointmentController::class, 'confirmation']);

Route::post('insurance/plan', [InsuranceController::class, 'plan']);
Route::get('insurance/{id}', [InsuranceController::class, 'show']);
Route::put('insurance/{id}', [InsuranceController::class, 'update']);

Route::post('consultations/create', [ConsultationController::class, 'create']);
Route::get('consultations/{id}', [ConsultationController::class, 'show']);
Route::put('consultations/{id}', [ConsultationController::class, 'update']);

Route::post('medical-tests/perform', [MedicalTestController::class, 'perform']);
Route::get('medical-tests/{id}', [MedicalTestController::class, 'show']);
Route::put('medical-tests/{id}', [MedicalTestController::class, 'update']);

Route::post('reports/transfer', [ReportController::class, 'transfer']);
Route::get('reports/{id}', [ReportController::class, 'show']);

Route::post('treatments/start', [TreatmentController::class, 'start']);
Route::get('treatments/{id}', [TreatmentController::class, 'show']);
Route::put('treatments/{id}', [TreatmentController::class, 'update']);

Route::post('admissions/admit', [AdmissionController::class, 'admit']);
Route::get('admissions/{id}', [AdmissionController::class, 'show']);
Route::put('admissions/{id}', [AdmissionController::class, 'update']);

Route::post('observations/record', [ObservationController::class, 'record']);
Route::get('observations/{id}', [ObservationController::class, 'show']);
Route::put('observations/{id}', [ObservationController::class, 'update']);


Route::post('doctors', [DoctorController::class, 'store']);
Route::get('doctors/{id}', [DoctorController::class, 'show']);
Route::put('doctors/{id}', [DoctorController::class, 'update']);
Route::delete('doctors/{id}', [DoctorController::class, 'destroy']);
