<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\DayAndSession;

class Subject extends Model
{
    public function user(){
        return $this->belongsTo(User::class,'staff_id');
    }

    public function DayAndSession(){
    	return $this->hasMany(DayAndSession::class);
    }
}
