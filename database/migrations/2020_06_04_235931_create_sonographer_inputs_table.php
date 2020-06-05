<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSonographerInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sonographer_inputs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('last_menstrual_period');
            $table->string('pre_term_labour')->required();
            $table->string('gravity');
            $table->string('twins_gestation')->required();
            $table->string('ante_partum_hemorrhage')->required();
            $table->string('oligohydramnios')->required();
            $table->string('polyhydramnios')->required();
            $table->string('previous_c&s')->required();
            $table->string('fibroid');
            $table->string('previous_surgery');
            $table->string('contraceptives_usage');
            $table->string('infertility');
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
        Schema::dropIfExists('sonographer_inputs');
    }
}
