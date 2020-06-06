<?php

namespace App\Http\Controllers\Api;

use App\Models\ScanReport;
use Illuminate\Http\Request;

class ScanReportController extends Controller
{
    public function index()
    {
        $scans = ScanReport::with('parent:patient_id,id')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return $scans;
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $validatedScan = $request->validate([
                'number_of_foetus'  => 'nullable|integer',
                'viability'  => 'nullable|string',
                'cardiac_activity'  => 'nullable|string',
                'placenta_echotexture'  => 'nullable|string',
                'placenta_location'  => 'nullable|string',
                'amniotic_fluid_volume'  => 'nullable|string',
                'visceral_anomaly'  => 'nullable|string',
                'fetal_presentation'  => 'nullable|string',
                'fetal_gender'  => 'nullable|string',
                'cervical_os'  => 'nullable|string',
                'femur_length'  => 'nullable|string',
                'abdominal_circumference'  => 'nullable|string',
                'cephalic_index'  => 'nullable|string',
                'gestational_sac_diameter'  => 'nullable|string',
                'crown_rump_length'  => 'nullable|string',
                'bi_parietal_diameter'  => 'nullable|string',
                'gestational_age'  => 'nullable|string',
                'estimated_fetal_weight'  => 'nullable|string',
                'uterine_anomaly'  => 'nullable|string',
                'expected_date_of_delivery'  => 'nullable|date',
                'ovarian_anomaly'  => 'nullable|string',
                'cul_de_sac'  => 'nullable|string',
                'conclusion_report'  => 'nullable|string',
                'next_apointment_date'  => 'nullable|string',
                'scan_frequency'  => 'nullable|string',
                'patient_id'  => 'required|integer',
            ]);
            return ScanReport::create(
                $validatedScan
            );
        }
        $validatedScan = $request->validate([
            'id' => 'required|integer',
            'number_of_foetus'  => 'nullable|integer',
            'viability'  => 'nullable|string',
            'cardiac_activity'  => 'nullable|string',
            'placenta_echotexture'  => 'nullable|string',
            'placenta_location'  => 'nullable|string',
            'amniotic_fluid_volume'  => 'nullable|string',
            'visceral_anomaly'  => 'nullable|string',
            'fetal_presentation'  => 'nullable|string',
            'fetal_gender'  => 'nullable|string',
            'cervical_os'  => 'nullable|string',
            'femur_length'  => 'nullable|string',
            'abdominal_circumference'  => 'nullable|string',
            'cephalic_index'  => 'nullable|string',
            'gestational_sac_diameter'  => 'nullable|string',
            'crown_rump_length'  => 'nullable|string',
            'bi_parietal_diameter'  => 'nullable|string',
            'gestational_age'  => 'nullable|string',
            'estimated_fetal_weight'  => 'nullable|string',
            'uterine_anomaly'  => 'nullable|string',
            'expected_date_of_delivery'  => 'nullable|date',
            'ovarian_anomaly'  => 'nullable|string',
            'cul_de_sac'  => 'nullable|string',
            'conclusion_report'  => 'nullable|string',
            'next_apointment_date'  => 'nullable|string',
            'scan_frequency'  => 'nullable|string',
            'patient_id'  => 'required|integer',
        ]);

        $scan = ScanReport::find($validatedScan['id']);
        $scan->update(
            $validatedScan
        );
        return $scan;
    }
    public function show(ScanReport $scan)
    {
        return $scan;
    }

    public function delete(ScanReport $scan)
    {
        if ($scan->delete())
            return true;
        return false;
    }
}
