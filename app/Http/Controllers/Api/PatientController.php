<?php

namespace App\Http\Controllers\Api;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::with('scan_reports:patient_id,id', 'sonographer_inputs:patient_id,id')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return $patients;
    }

    public function store(Request $request)
    {

        if ($request->isMethod('post')) {
            $validatedPatient = $request->validate([
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'date_of_birth' => 'required|string',
                'city' => 'nullable|string',
                'state' => 'nullable|string',
                'local_government' => 'required|string',
                'gender' => 'nullable|string',
                'religion' => 'nullable|string',
                'phone' => 'required|string',
                'blood_pressure' => 'nullable|string',
                'weight' => 'nullable|string',
                'pulse' => 'nullable|string',
                'respiration' => 'nullable|string',
                'temperature' => 'nullable|string',
            ]);

            return Patient::create(
                $validatedPatient
            );
        }
        
        $validatedPatient = $request->validate([
            'id' => 'required|integer',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'date_of_birth' => 'required|string',
            'city' => 'nullable|string',
            'state' => 'nullable|string',
            'local_government' => 'required|string',
            'gender' => 'nullable|string',
            'religion' => 'nullable|string',
            'phone' => 'required|string',
            'blood_pressure' => 'nullable|string',
            'weight' => 'nullable|string',
            'pulse' => 'nullable|string',
            'respiration' => 'nullable|string',
            'temperature' => 'nullable|string',
        ]);

        $patient = Patient::find($validatedPatient['id']);
        $patient->update(
            $validatedPatient
        );
        return $patient;
    }


    public function show(Patient $patient)
    {
        return $patient;
    }

    public function delete(Patient $patient)
    {
        if ($patient->delete())
            return true;
        return false;
    }
}
