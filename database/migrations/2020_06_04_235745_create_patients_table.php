<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('first_name')->required();
            $table->string('last_name')->required();
            $table->date('date_of_birth')->required();
            $table->string('city');
            $table->string('state');
            $table->string('local_government')->required();
            $table->string('gender');
            $table->string('religion');
            $table->string('phone')->required();
            $table->string('blood_pressure');
            $table->string('weight');
            $table->string('pulse');
            $table->string('respiration');
            $table->string('temperature');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
