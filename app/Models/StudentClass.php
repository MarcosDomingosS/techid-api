<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    protected $table = "student_classes";
    protected $fillable = [
        'student_rm',
        'class_id',
    ];

    public function student(){
        return $this->belongsTo(Student::class, 'student_rm', 'rm');
    }

    public function class(){
        return $this->belongsTo(Class_::class, 'class_id', 'id');
    }

    public function events(){
        return $this->belongToMany(Event::class, 'report_events', 'student_classes_id', 'event_id');
    }

    public function routines(){
        return $this->belongToMany(Routine::class, 'report_routines', 'student_classes_id', 'routine_id');
    }

    // public function students(){
    //     return $this->belongsToMany(Student::class, 'student_classes', 'class_id', 'nr_rm');
    // }
}
