<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->string("mem_type" )->nullable();
            $table->string("education" )->nullable();
            $table->string("sbp" )->nullable();
            $table->string("dbp" )->nullable();
            $table->string("oxygen" )->nullable();
            $table->string("pulse" )->nullable();
            $table->string("temp" )->nullable();
            $table->string("edima" )->nullable();
            $table->string("anemia" )->nullable();
            $table->string("jaundice" )->nullable();
            $table->string("weight" )->nullable();
            $table->string("height" )->nullable();
            $table->string("bmi" )->nullable();
            $table->string("blgr" )->nullable();
            $table->string("heart" )->nullable();
            $table->string("lungs" )->nullable();
            $table->string("diabeties" )->nullable();
            $table->string("hp" )->nullable();
            $table->string("ihd" )->nullable();
            $table->string("strk" )->nullable();
            $table->string("copd" )->nullable();
            $table->string("cancer" )->nullable();
            $table->string("ckd" )->nullable();
            $table->string("salt" )->nullable();
            $table->string("smoke" )->nullable();
            $table->string("smoking" )->nullable();
            $table->string("cc" )->nullable();
            $table->string("diagnosis" )->nullable();
            $table->string("sec_diagnosis" )->nullable();
            $table->string("sec_dx2" )->nullable();

            $table->string("next_meet" )->nullable();
            $table->string("meet_day" )->nullable();
            $table->unsignedBigInteger("patient_id" );
            $table->unsignedBigInteger("doctor_id" );

            $table->enum('visit_type', ['first','repeat','reportonly'])->default('first');    
            $table->enum('status', ['new','draft','fillup','complete', 'pending','paid'])->default('new'); 
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
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
        Schema::dropIfExists('prescriptions');
    }
};
