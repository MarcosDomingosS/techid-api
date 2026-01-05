<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = "courses";
    protected $fillable = [
        'name',
        'sed_id',
    ];

    public function classes(){
        $this->hasMany(Class_::class, 'course_id', 'id');
    }

    public function sed(){
        return $this->belongsTo(Sed::class, 'sed_id', 'id');
    }
}
