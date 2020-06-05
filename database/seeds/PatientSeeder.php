<?php

use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Patient::class,10)->create()->each(function ($patient) {
            $patient->scan_reports()->save(factory(App\Models\ScanReport::class)->make());
        });
    }
}
