<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;


class HallAllocation extends Model
{
    public function user(){
    	return $this->belongsTo(User::class,'staff_id');
    }
}
