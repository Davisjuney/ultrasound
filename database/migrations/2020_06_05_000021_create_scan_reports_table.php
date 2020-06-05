<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScanReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scan_reports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('number_of_foetus');
            $table->string('viability');
            $table->string('cardiac_activity');
            $table->string('placenta_echotexture');
            $table->string('placenta_location');
            $table->string('amniotic_fluid_volume');
            $table->string('visceral_anomaly');
            $table->string('fetal_presentation');
            $table->string('fetal_gender');
            $table->string('cervical_os');
            $table->string('femur_length');
            $table->string('abdominal_circumference');
            $table->string('cephalic_index');
            $table->string('gestational_sac_diameter');
            $table->string('crown_rump_length');
            $table->string('bi_parietal_diameter');
            $table->string('gestational_age');
            $table->string('estimated_fetal_weight');
            $table->string('uterine_anomaly');
            $table->string('expected_date_of_delivery');
            $table->string('adnexa/ovarian_anomaly');
            $table->string('cul_de_sac');
            $table->string('conclusion_report');
            $table->date('next_apointment_date');
            $table->integer('scan_frequency');
            $table->unsignedBigInteger('patient_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scan_reports');
    }
}
