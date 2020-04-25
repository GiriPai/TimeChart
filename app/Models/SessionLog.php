<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;
use App\User;

class SessionLog extends Model
{
    public function session1(){
    	return $this->belongsTo(Subject::class,'session_1');
    }
    public function session2(){
    	return $this->belongsTo(Subject::class,'session_2');
    }
    public function session3(){
    	return $this->belongsTo(Subject::class,'session_3');
    }
    public function session4(){
    	return $this->belongsTo(Subject::class,'session_4');
    }
    public function session5(){
    	return $this->belongsTo(Subject::class,'session_5');
    }

    public function ss1(){
    	return $this->belongsTo(User::class,'staff_1');
    }
    public function ss2(){
    	return $this->belongsTo(User::class,'staff_2');
    }
    public function ss3(){
    	return $this->belongsTo(User::class,'staff_3');
    }
    public function ss4(){
    	return $this->belongsTo(User::class,'staff_4');
    }
    public function ss5(){
    	return $this->belongsTo(User::class,'staff_5');
    }
}
