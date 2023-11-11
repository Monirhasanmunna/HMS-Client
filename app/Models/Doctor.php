<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function assistants()
    {
        return $this->hasMany(Assistant::class);
    }

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }

    public function followup()
    {
        return $this->belongsTo(FollowUp::class,'followup_id');
    }

    public function holiday()
    {
        return $this->belongsTo(Holiday::class,'holiday_id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class,'room_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
