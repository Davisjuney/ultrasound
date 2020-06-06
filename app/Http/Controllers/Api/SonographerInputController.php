<?php

namespace App\Http\Controllers\Api;

use App\Models\SonographerInput;
use Illuminate\Http\Request;

class SonographerInputController extends Controller
{
    public function index()
    {
        $s_input = SonographerInput::with('patient:patient_id,id')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return $s_input;
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $validatedSInput = $request->validate([
                'last_menstrual_period' => 'required|string',
                'pre_term_labour' => 'required|string',
                'gravity' => 'required|string',
                'twins_gestation' => 'required|string',
                'ante_partum_hemorrhage' => 'required|string',
                'oligohydramnios' => 'required|string',
                'polyhydramnios' => 'required|string',
                'previous_cs' => 'required|string',
                'fibroid' => 'required|string',
                'previous_surgery' => 'required|string',
                'contraceptives_usage' => 'required|string',
                'infertility' => 'required|string',
                'patient_id' => 'required|string'
            ]);
            return SonographerInput::create(
                $validatedSInput
            );
        }

        $validatedSInput =  $request->validate([
            'id' => 'required|integer',
            'last_menstrual_period' => 'required|string',
            'pre_term_labour' => 'required|string',
            'gravity' => 'required|string',
            'twins_gestation' => 'required|string',
            'ante_partum_hemorrhage' => 'required|string',
            'oligohydramnios' => 'required|string',
            'polyhydramnios' => 'required|string',
            'previous_c&s' => 'required|string',
            'fibroid' => 'required|string',
            'previous_surgery' => 'required|string',
            'contraceptives_usage' => 'required|string',
            'infertility' => 'required|string',
            'patient_id' => 'required|string'
        ]);
        $s_input = SonographerInput::find($validatedSInput['id']);
        $s_input->fill(
            $validatedSInput
        );
        return $s_input;
    }
    public function show(SonographerInput $input)
    {
        return $input;
    }
    public function delete(SonographerInput $input)
    {
        if ($input->delete())
            return true;
        return false;
    }
}
