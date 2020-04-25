<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;
use App\User;

class DayAndSession extends Model
{
    public function session1(){
    	return $this->belongsTo(Subject::class,'s1');
    }
    public function session2(){
    	return $this->belongsTo(Subject::class,'s2');
    }
    public function session3(){
    	return $this->belongsTo(Subject::class,'s3');
    }
    public function session4(){
    	return $this->belongsTo(Subject::class,'s4');
    }
    public function session5(){
    	return $this->belongsTo(Subject::class,'s5');
    }

    public function ss1(){
    	return $this->belongsTo(User::class,'ss1');
    }
    public function ss2(){
    	return $this->belongsTo(User::class,'ss2');
    }
    public function ss3(){
    	return $this->belongsTo(User::class,'ss3');
    }
    public function ss4(){
    	return $this->belongsTo(User::class,'ss4');
    }
    public function ss5(){
    	return $this->belongsTo(User::class,'ss5');
    }
}
