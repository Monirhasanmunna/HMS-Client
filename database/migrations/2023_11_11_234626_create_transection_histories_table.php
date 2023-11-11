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
        Schema::create('transection_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('source_id');
            $table->string('source_type');
            $table->text('reason');
            $table->date('date');
            $table->enum('type',['debit','credit']);
            $table->bigInteger('ammount');
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
        Schema::dropIfExists('transection_histories');
    }
};
