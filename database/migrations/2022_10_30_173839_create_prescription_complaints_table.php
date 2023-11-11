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
        Schema::create('prescription_complaints', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("prescription_id"); 
            $table->unsignedBigInteger("complaint_id"); 
            $table->foreign('prescription_id')->references('id')->on('prescriptions');
            $table->foreign('complaint_id')->references('id')->on('complaints');
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
        Schema::dropIfExists('prescription_complaints');
    }
};
