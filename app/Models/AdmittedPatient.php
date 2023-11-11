<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmittedPatient extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function patients()
    {
        return $this->belongsTo(Patient::class,'patient_id');
    }

    public function bedgroup()
    {
        return $this->belongsTo(BedGroup::class,'bedgroup_id');
    }

    public function bed()
    {
        return $this->belongsTo(Bed::class,'bed_id');
    }

    public function histories()
    {
        return $this->morphMany(TransectionHistory::class, 'source');
    }
}
