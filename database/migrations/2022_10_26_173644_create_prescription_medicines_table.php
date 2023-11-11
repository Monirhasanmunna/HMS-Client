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
        Schema::create('prescription_medicines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("prescription_id"); 
            $table->unsignedBigInteger("medicine_id"); 
            $table->unsignedBigInteger("frequency_id" );
            $table->unsignedBigInteger("qty_id" );
            $table->unsignedBigInteger("qtyType_id"); 
            $table->unsignedBigInteger("eatingType_id"); 
            $table->string("eatDuration" );        
            $table->foreign('prescription_id')->references('id')->on('prescriptions');
            $table->foreign('medicine_id')->references('id')->on('medicines');
            $table->foreign('frequency_id')->references('id')->on('frequencies');
            $table->foreign('qty_id')->references('id')->on('quantities');
            $table->foreign('qtyType_id')->references('id')->on('quantity_types');
            $table->foreign('eatingType_id')->references('id')->on('eatingtimes');
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
        Schema::dropIfExists('prescription_medicines');
    }
};
