<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function invoiceDetail(){
        return $this->hasMany(InvoiceDetail::class, 'invoice_id', 'id');
    }

    public function doctor(){
        return $this->belongsTo(Doctor::class, 'doctor_id', 'id');
    }

    public function patient(){
        return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }
}
