<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReportRoutine extends Model
{
    protected $table = "report_routines";
    protected $fillable = [
        'routine_id', 
        'student_class_id',
    ];
    public function routine(){
        return $this->belongsTo(Routine::class, 'routine_id', 'id');
    }
    public function studentClass(){
        return $this->belongsTo(StudentClass::class, 'student_class_id', 'id');
    }
}
