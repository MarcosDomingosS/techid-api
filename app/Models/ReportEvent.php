<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReportEvent extends Model
{
    protected $table = "report_events";
    protected $fillable = [
        'event_id',
        'student_class_id',
    ];
    public function event(){
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }
    public function studentClass(){
        return $this->belongsTo(StudentClass::class, 'student_class_id', 'id');
    }
}
