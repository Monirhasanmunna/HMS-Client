<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function bedgroup()
    {
        return $this->belongsTo(BedGroup::class,'bedgroup_id');
    }

    public function bedtype()
    {
        return $this->belongsTo(BedType::class,'bedtype_id');
    }
}
