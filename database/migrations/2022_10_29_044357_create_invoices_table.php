<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->constrained('doctors')->onDelete('cascade');
            $table->foreignId('patient_id')->constrained('patients')->onDelete('cascade');
            $table->unsignedBigInteger('ref_id')->comment('join with beds.id or prescriptions.id subject to type');
            $table->enum('invoice_type',['bed', 'prescription'])->default('prescription');
            $table->date('invoice_date');
            $table->date('admission_date')->nullable();
            $table->string('remark');
            $table->double('amount', 8,2);
            $table->double('due', 8,2)->nullable();
            $table->double('discount', 8,2)->nullable();
            $table->double('net_amount', 8,2);
            $table->enum('status', ['new','draft','complete', 'pending','due','paid'])->default('new');    
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
        Schema::dropIfExists('invoices');
    }
};
