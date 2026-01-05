<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    protected $table = "routines";
    protected $fillable = [
        'name',
        'sed_id'
    ];

    public function sed(){
        return $this->belongsTo(Sed::class, 'sed_id', 'id');
    }

    public function studentClasses(){
        return $this->belongsToMany(StudentClass::class, 'report_routines', 'routine_id', 'student_class_id');
    }
}
