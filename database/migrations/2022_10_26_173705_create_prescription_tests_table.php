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
        Schema::create('prescription_tests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("prescription_id"); 
            $table->unsignedBigInteger("medical_test_id"); 
            $table->foreign('prescription_id')->references('id')->on('prescriptions');
            $table->foreign('medical_test_id')->references('id')->on('medical_tests');
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
        Schema::dropIfExists('prescription_tests');
    }
};
