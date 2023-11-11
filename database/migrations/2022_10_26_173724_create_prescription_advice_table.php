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
        Schema::create('prescription_advice', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("prescription_id"); 
            $table->unsignedBigInteger("advice_id"); 
            $table->foreign('prescription_id')->references('id')->on('prescriptions');
            $table->foreign('advice_id')->references('id')->on('advice');
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
        Schema::dropIfExists('prescription_advice');
    }
};
