<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function diseases()
    {
        return $this->belongsToMany(Disease::class);
    }

    public function prescription()
    {
        return $this->belongsTo(Prescription::class);
    }

    public function admition()
    {
        return $this->belongsTo(AdmittedPatient::class);
    }

}
