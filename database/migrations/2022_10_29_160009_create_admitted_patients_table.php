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
        Schema::create('admitted_patients', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_id');
            $table->integer('bedgroup_id');
            $table->integer('bed_id');
            $table->integer('paid');
            $table->integer('due')->nullable();
            $table->enum('status', ['new','complete'])->default('new');
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
        Schema::dropIfExists('admitted_patients');
    }
};
