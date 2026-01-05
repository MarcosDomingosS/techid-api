<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sed extends Model
{
    protected $table = 'seds';
    protected $fillable = [
        'name',
        'code'
    ];

    public function courses(){
        return $this->hasMany(Course::class, 'sed_id', 'id');
    }

    public function rfid(){
        return $this->hasMany(RFID::class, 'sed_id', 'id');
    }

    public function routines(){
        return $this->hasMany(Routine::class, 'sed_id', 'id');
    }

    public function events(){
        return $this->hasMany(Event::class, 'sed_id', 'id');
    }

    public function roles(){
        return $this->hasMany(Role::class, 'sed_id', 'id');
    }

    public $timestamps = false;
}
