<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained();
            $table->foreignId('doctor_id',)->constrained('users')->nullable();
            $table->foreignId('nurse_id')->constrained('users')->nullable();
            $table->string('diagnosis')->nullable();
            $table->text('anamnesis')->nullable();
            $table->integer('height')->nullable();
            $table->double('weight', 5, 2)->nullable();
            $table->string('blood_pressure')->nullable();
            $table->text('action')->nullable();
            $table->dateTime('action_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medical_records');
    }
}
