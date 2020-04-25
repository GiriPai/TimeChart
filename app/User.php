<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Subject;
use App\Models\HallAllocation;

class User extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function subject(){
        return $this->hasMany(Subject::class,'staff_id');
    }

    public function hallallocation(){
        return $this->hasMany(HallAllocation::class);
    }

    // public function ss1(){
    //     return $this->hasMany(Subject::class);
    // }
}
