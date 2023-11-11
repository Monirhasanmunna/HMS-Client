<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function medicines()
    {
        return $this->hasMany(PrescriptionMedicine::class, 'prescription_id', 'id')
        ->join('medicines', 'medicines.id', '=', 'prescription_medicines.medicine_id')
        ->join('frequencies', 'frequencies.id', '=', 'prescription_medicines.frequency_id')
        ->join('quantities', 'quantities.id', '=', 'prescription_medicines.qty_id')
        ->join('quantity_types', 'quantity_types.id', '=', 'prescription_medicines.qtyType_id')
        ->join('eatingtimes', 'eatingtimes.id', '=', 'prescription_medicines.eatingType_id')
        ->selectRaw('prescription_medicines.*,frequencies.name as frequencies, quantities.name as quantities,  quantity_types.name as quantity_types, eatingtimes.name as eatingtimes, medicines.name as medicines, medicines.mg');
    }

    
    public function advice(){
        return $this->hasMany(PrescriptionAdvice::class, 'prescription_id', 'id')
        ->join('advice', 'advice.id', '=', 'prescription_advice.advice_id');        
    }
    
    public function test(){
        return $this->hasMany(PrescriptionTest::class, 'prescription_id', 'id')
        ->join('medical_tests', 'medical_tests.id', '=', 'prescription_tests.medical_test_id');        
    }
    

    public function doctor(){
        return $this->belongsTo(Doctor::class, 'doctor_id', 'id');
    }

    public function patient(){
        return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }

    public function complaint(){
        return $this->hasMany(PrescriptionComplaint::class, 'prescription_id', 'id');
    }

}
